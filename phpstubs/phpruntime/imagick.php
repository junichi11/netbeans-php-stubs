<?php



namespace {

	/**
	 * @link https://php.net/manual/ja/class.imagick.php
	 * @since PECL imagick 2.0.0
	 */
	class Imagick implements \Iterator {

		/**
		 * @var int 黒
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_BLACK = 11;

		/**
		 * @var int 青
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_BLUE = 12;

		/**
		 * @var int シアン
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_CYAN = 13;

		/**
		 * @var int 緑
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_GREEN = 14;

		/**
		 * @var int 赤
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_RED = 15;

		/**
		 * @var int 黄色
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_YELLOW = 16;

		/**
		 * @var int マゼンタ
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_MAGENTA = 17;

		/**
		 * @var int 色の透過度
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_OPACITY = 18;

		/**
		 * @var int 色のアルファ値
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_ALPHA = 19;

		/**
		 * @var int ファズ
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLOR_FUZZ = 20;

		/**
		 * @var int 認識不可能
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISPOSE_UNRECOGNIZED = 0;

		/**
		 * @var int 未定義
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISPOSE_UNDEFINED = 0;

		/**
		 * @var int なし
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISPOSE_NONE = 1;

		/**
		 * @var int 背景
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISPOSE_BACKGROUND = 2;

		/**
		 * @var int 前
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISPOSE_PREVIOUS = 3;

		/**
		 * @var int デフォルトの合成演算子
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DEFAULT = 40;

		/**
		 * @var int 未定義の合成演算子
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_UNDEFINED = 0;

		/**
		 * @var int 合成演算子が定義されていない
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_NO = 1;

		/**
		 * @var int 画像と画像を足し合わせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_ADD = 2;

		/**
		 * @var int 元の画像と同じ形で、ぼんやりとした画像を重ねます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_ATOP = 3;

		/**
		 * @var int 画像を混ぜ合わせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_BLEND = 4;

		/**
		 * @var int COMPOSITE_MULTIPLY と同じですが、まず最初に元画像をグレースケールに変換します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_BUMPMAP = 5;

		/**
		 * @var int 対象の画像を透明にします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_CLEAR = 7;

		/**
		 * @var int 対象の画像を暗くして元画像を反映させます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COLORBURN = 8;

		/**
		 * @var int 対象の画像を明るくして元画像を反映させます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COLORDODGE = 9;

		/**
		 * @var int 合成する画像を用いて画像をカラー化します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COLORIZE = 10;

		/**
		 * @var int 黒を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYBLACK = 11;

		/**
		 * @var int 青を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYBLUE = 12;

		/**
		 * @var int 元画像を対象画像の上にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPY = 13;

		/**
		 * @var int シアンを元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYCYAN = 14;

		/**
		 * @var int 緑を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYGREEN = 15;

		/**
		 * @var int マゼンタを元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYMAGENTA = 16;

		/**
		 * @var int 透明度を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYOPACITY = 17;

		/**
		 * @var int 赤を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYRED = 18;

		/**
		 * @var int 黄を元画像から対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_COPYYELLOW = 19;

		/**
		 * @var int 対象画像を暗くします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DARKEN = 20;

		/**
		 * @var int 対象画像のうち元画像の内部にあるものを元画像と合成し、対象画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DSTATOP = 21;

		/**
		 * @var int 対象画像をそのままにしておきます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DST = 22;

		/**
		 * @var int 元画像の内部で対象画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DSTIN = 23;

		/**
		 * @var int 元画像の外部で対象画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DSTOUT = 24;

		/**
		 * @var int 対象画像で元画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DSTOVER = 25;

		/**
		 * @var int ふたつの色のうち、明るいほうから暗いほうを引きます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DIFFERENCE = 26;

		/**
		 * @var int 対象画像のピクセルを、元画像で定義されたようにシフトします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DISPLACE = 27;

		/**
		 * @var int 元画像を対象画像の中に分解します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_DISSOLVE = 28;

		/**
		 * @var int imagick::COMPOSITE_DIFFERENCE と似た効果を施しますが、 コントラストはそれよりやや低くなります。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_EXCLUSION = 29;

		/**
		 * @var int 元の画像の色に応じて、色を掛け合わせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_HARDLIGHT = 30;

		/**
		 * @var int 対象画像の色相を、元画像で指定したように変更します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_HUE = 31;

		/**
		 * @var int 元画像を対象画像の中に合成します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_IN = 32;

		/**
		 * @var int 対象画像の明度を、元画像で指定したように上げます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_LIGHTEN = 33;

		/**
		 * @var int 対象画像を、元画像で指定したようにルミナイズします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_LUMINIZE = 35;

		/**
		 * @var int 元画像を対象画像から引きます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_MINUS = 36;

		/**
		 * @var int 対象画像の輝度、彩度および色相を、元画像で指定したように調節します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_MODULATE = 37;

		/**
		 * @var int 対象画像を元画像に掛け合わせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_MULTIPLY = 38;

		/**
		 * @var int 元画像の外部を対象画像に合成します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_OUT = 39;

		/**
		 * @var int 元画像を対象画像にかぶせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_OVER = 40;

		/**
		 * @var int 元画像を対象画像にオーバーレイさせます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_OVERLAY = 41;

		/**
		 * @var int 元画像を対象画像に加えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_PLUS = 42;

		/**
		 * @var int 対象画像を元画像で置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_REPLACE = 43;

		/**
		 * @var int 対象画像を、元画像で指定したようにしみこませます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SATURATE = 44;

		/**
		 * @var int The source and destination are complemented and then multiplied and then replace the destination
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SCREEN = 45;

		/**
		 * @var int 元画像の指定に応じて、画像を明るくしたり暗くしたりします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SOFTLIGHT = 46;

		/**
		 * @var int 元画像のうち対象画像の内側にある部分を、対象画像の上に合成します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SRCATOP = 47;

		/**
		 * @var int 元画像を対象画像にコピーします。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SRC = 48;

		/**
		 * @var int 元画像のうち対象画像の内側にある部分で、対象画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SRCIN = 49;

		/**
		 * @var int 元画像のうち対象画像の外部にある部分で元画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SRCOUT = 50;

		/**
		 * @var int 元画像で対象画像を置き換えます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SRCOVER = 51;

		/**
		 * @var int 元画像の色を対象画像から引きます。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_SUBTRACT = 52;

		/**
		 * @var int 指定した閾値で、元画像を対象画像に合成します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_THRESHOLD = 53;

		/**
		 * @var int 元画像のうち対象画像の外側にある部分と、 対象画像のうち元画像の外側にある部分を合成します。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPOSITE_XOR = 54;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const MONTAGEMODE_FRAME = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const MONTAGEMODE_UNFRAME = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const MONTAGEMODE_CONCATENATE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STYLE_NORMAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STYLE_ITALIC = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STYLE_OBLIQUE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STYLE_ANY = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_POINT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_BOX = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_TRIANGLE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_HERMITE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_HANNING = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_HAMMING = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_BLACKMAN = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_GAUSSIAN = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_QUADRATIC = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_CUBIC = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_CATROM = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_MITCHELL = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_LANCZOS = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_BESSEL = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILTER_SINC = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_BILEVEL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_GRAYSCALE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_GRAYSCALEMATTE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_PALETTE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_PALETTEMATTE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_TRUECOLOR = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_TRUECOLORMATTE = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATION = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATIONMATTE = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const IMGTYPE_OPTIMIZE = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOLUTION_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOLUTION_PIXELSPERINCH = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOLUTION_PIXELSPERCENTIMETER = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_NO = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_BZIP = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_FAX = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_GROUP4 = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_JPEG = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_JPEG2000 = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_LOSSLESSJPEG = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_LZW = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_RLE = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_ZIP = 13;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_DXT1 = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_DXT3 = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COMPRESSION_DXT5 = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PAINT_POINT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PAINT_REPLACE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PAINT_FLOODFILL = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PAINT_FILLTOBORDER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PAINT_RESET = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_NORTHWEST = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_NORTH = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_NORTHEAST = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_WEST = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_CENTER = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_EAST = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_SOUTHWEST = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_SOUTH = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const GRAVITY_SOUTHEAST = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_NORMAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_ULTRACONDENSED = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_CONDENSED = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_SEMICONDENSED = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_SEMIEXPANDED = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_EXPANDED = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_EXTRAEXPANDED = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_ULTRAEXPANDED = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const STRETCH_ANY = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALIGN_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALIGN_LEFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALIGN_CENTER = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALIGN_RIGHT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DECORATION_NO = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DECORATION_UNDERLINE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DECORATION_OVERLINE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DECORATION_LINETROUGH = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_UNIFORM = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_GAUSSIAN = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_MULTIPLICATIVEGAUSSIAN = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_IMPULSE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_LAPLACIAN = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_POISSON = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const NOISE_RANDOM = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_RED = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_GRAY = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_CYAN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_GREEN = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_MAGENTA = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_BLUE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_YELLOW = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_ALPHA = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_OPACITY = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_MATTE = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_BLACK = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_INDEX = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_ALL = 134217727;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const CHANNEL_DEFAULT = 134217719;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_MEANABSOLUTEERROR = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_MEANSQUAREERROR = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_PEAKABSOLUTEERROR = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_PEAKSIGNALTONOISERATIO = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const METRIC_ROOTMEANSQUAREDERROR = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_CHAR = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_DOUBLE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_FLOAT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_INTEGER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_LONG = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_QUANTUM = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PIXEL_SHORT = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_ADD = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_AND = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_DIVIDE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_LEFTSHIFT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_MAX = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_MIN = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_MULTIPLY = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_OR = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_RIGHTSHIFT = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_SET = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_SUBTRACT = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_XOR = 12;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_POW = 13;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_LOG = 14;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_THRESHOLD = 15;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_THRESHOLDBLACK = 16;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_THRESHOLDWHITE = 17;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_GAUSSIANNOISE = 18;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_IMPULSENOISE = 19;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_LAPLACIANNOISE = 20;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_MULTIPLICATIVENOISE = 21;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_POISSONNOISE = 22;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_UNIFORMNOISE = 23;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_COSINE = 24;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_SINE = 25;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const EVALUATE_ADDMODULUS = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_RGB = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_GRAY = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_TRANSPARENT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_OHTA = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_LAB = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_XYZ = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_YCBCR = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_YCC = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_YIQ = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_YPBPR = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_YUV = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_CMYK = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_SRGB = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_HSB = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_HSL = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_HWB = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_REC601LUMA = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_REC709LUMA = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_LOG = 21;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const COLORSPACE_CMY = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_BACKGROUND = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_CONSTANT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_EDGE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_MIRROR = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TILE = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TRANSPARENT = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_MASK = 9;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_BLACK = 10;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_GRAY = 11;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_WHITE = 12;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.3 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.3 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_VERTICALTILE = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_ROTATE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SHEAR = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_ROLL = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_HUE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SATURATION = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_BRIGHTNESS = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_GAMMA = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SPIFF = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_DULL = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_GRAYSCALE = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_QUANTIZE = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_DESPECKLE = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_REDUCENOISE = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_ADDNOISE = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SHARPEN = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_BLUR = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_THRESHOLD = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_EDGEDETECT = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SPREAD = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SOLARIZE = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SHADE = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_RAISE = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SEGMENT = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_SWIRL = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_IMPLODE = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_WAVE = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_OILPAINT = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_CHARCOALDRAWING = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PREVIEW_JPEG = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RENDERINGINTENT_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RENDERINGINTENT_SATURATION = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RENDERINGINTENT_PERCEPTUAL = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RENDERINGINTENT_ABSOLUTE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RENDERINGINTENT_RELATIVE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_NO = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_LINE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_PLANE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_PARTITION = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_GIF = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_JPEG = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERLACE_PNG = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILLRULE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILLRULE_EVENODD = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FILLRULE_NONZERO = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PATHUNITS_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PATHUNITS_USERSPACE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PATHUNITS_USERSPACEONUSE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const PATHUNITS_OBJECTBOUNDINGBOX = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINECAP_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINECAP_BUTT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINECAP_ROUND = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINECAP_SQUARE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINEJOIN_UNDEFINED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINEJOIN_MITER = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINEJOIN_ROUND = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LINEJOIN_BEVEL = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_UNDEFINED = 0;

		/**
		 * @var int ピクセルキャッシュメモリに配置できる画像の最大サイズ (幅 &#42; 高さ) を設定する
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_AREA = 1;

		/**
		 * @var int ピクセルキャッシュに使えるディスクスペースの最大値 (バイト) を設定する
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_DISK = 2;

		/**
		 * @var int オープンするピクセルキャッシュファイルの最大数を設定する
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_FILE = 3;

		/**
		 * @var int ピクセルキャッシュ用に確保するメモリマップの最大量 (バイト) を設定する
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_MAP = 4;

		/**
		 * @var int ヒープからピクセルキャッシュに割り当てるメモリの最大値 (バイト) を設定する
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_MEMORY = 5;

		/**
		 * @var int 並行スレッドの最大数を設定する。 この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.7.8 以降で利用可能。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const RESOURCETYPE_THREAD = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_COALESCE = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_COMPAREANY = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_COMPARECLEAR = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_COMPAREOVERLAY = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_DISPOSE = 5;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZE = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.2.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZEPLUS = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZEIMAGE = 7;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZETRANS = 9;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_REMOVEDUPS = 10;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_REMOVEZERO = 11;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_COMPOSITE = 12;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.7 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_MERGE = 13;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.7 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_FLATTEN = 14;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.7 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const LAYERMETHOD_MOSAIC = 15;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_TOPLEFT = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_TOPRIGHT = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_BOTTOMRIGHT = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_BOTTOMLEFT = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_LEFTTOP = 5;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_RIGHTTOP = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_RIGHTBOTTOM = 7;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.0 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ORIENTATION_LEFTBOTTOM = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_AFFINE = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_AFFINEPROJECTION = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_ARC = 9;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_BILINEAR = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_PERSPECTIVE = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_PERSPECTIVEPROJECTION = 5;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_SCALEROTATETRANSLATE = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_POLYNOMIAL = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_POLAR = 10;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_DEPOLAR = 11;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_BARREL = 14;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_BARRELINVERSE = 15;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_SHEPARDS = 16;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DISTORTION_SENTINEL = 18;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.8 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_ACTIVATE = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.8 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_DEACTIVATE = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.8 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_RESET = 7;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.8 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_SET = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_COPY = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_EXTRACT = 5;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_OPAQUE = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_SHAPE = 9;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const ALPHACHANNEL_TRANSPARENT = 10;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_BARYCENTRIC = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_BILINEAR = 7;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_POLYNOMIAL = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_SPEPARDS = 16;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_VORONOI = 18;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FUNCTION_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FUNCTION_POLYNOMIAL = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.9 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const FUNCTION_SINUSOID = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_AVERAGE = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_BICUBIC = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_BILINEAR = 3;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_FILTER = 4;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_INTEGER = 5;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_MESH = 6;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.2 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_NEARESTNEIGHBOR = 7;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.3.4 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const INTERPOLATE_SPLINE = 8;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DITHERMETHOD_UNDEFINED = 0;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DITHERMETHOD_NO = 1;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DITHERMETHOD_RIEMERSMA = 2;

		/**
		 * @var int この定数は、Imagick のコンパイルを次のバージョンの ImageMagick で 行った場合に使用可能です。 6.4.6 以降。
		 * @link https://php.net/manual/ja/imagick.constants.php
		 */
		const DITHERMETHOD_FLOYDSTEINBERG = 3;

		/**
		 * Imagick のコンストラクタ
		 * <p>指定した画像あるいは画像群用に Imagick のインスタンスを作ります。</p>
		 * @param mixed $files <p>読み込みたい画像へのパス、あるいは複数のパスの配列。 パスのファイル名にはワイルドカードを含めることができ、 また URL を指定することもできます。</p>
		 * @return self <p>成功した場合に新しい Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct($files) {}

		/**
		 * Returns the image as a string
		 * <p>Returns the current image as string. This will only return a single image; it should not be used for Imagick objects that contain multiple images e.g. an animated GIF or PDF with multiple pages.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link https://php.net/manual/ja/imagick.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * adaptive blur (順応性にじみ) フィルタを画像に追加する
		 * <p>adaptive blur (順応性にじみ) フィルタを画像に追加します。 adaptive blur の効果は、画像の端に近づくほど弱くなります。 一方、標準の blur の場合は画像全体に均一に働きます。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $radius <p>ガウス分布の半径。中心を含まないピクセル数。 0 を指定すると、半径を自動的に選択します。</p>
		 * @param float $sigma <p>ガウス分布の標準偏差 (ピクセル単位)。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.adaptiveblurimage.php
		 * @see Imagick::blurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * データに依存する三角測量にもとづいて画像のサイズを変更する
		 * <p>データに依存する三角測量にもとづいて画像のサイズを変更します。 色が突然変わる箇所でのにじみを避けます。 たとえば、画像をほんの少しだけ縮小して "ウェブサイズ" にする場合などに便利です。フルサイズの画像のサムネイルを作成する場合などは、 あまりうまくいかないかもしれません。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p><p><b>注意</b>:  パラメータ <code>bestfit</code> の挙動は Imagick 3.0.0 で変わりました。 これより前のバージョンでは、200x150 の画像に対して 400x400 を指定した場合は何もせずそのままになっていました。 Imagick 3.0.0 以降では、この画像は 400x300 に拡大されます。これが、 指定したサイズに対して「ベストフィット」する大きさだからです。 <code>bestfit</code> を使う場合は、幅と高さの両方を指定しなければなりません。 </p>
		 * @param int $columns <p>変更後の画像のカラム数。</p>
		 * @param int $rows <p>変更後の画像の行数。</p>
		 * @param bool $bestfit <p>画像の大きさをバウンディングボックスにあわせるかどうか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.adaptiveresizeimage.php
		 * @see Imagick::chopImage(), Imagick::cropImage(), Imagick::magnifyImage(), Imagick::minifyImage(), Imagick::resizeImage(), Imagick::scaleImage(), Imagick::shaveImage(), Imagick::thumbnailImage(), Imagick::trimImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveResizeImage(int $columns, int $rows, bool $bestfit = false): bool {}

		/**
		 * 順応して画像をシャープにする
		 * <p>画像をシャープにします。 画像の端の方ほど強くシャープ処理を行い、 端から離れるにつれてシャープ処理の程度を弱くします。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $radius <p>ガウス分布の半径。中心を含まないピクセル数。 0 を使用すると自動的に選択します。</p>
		 * @param float $sigma <p>ガウス分布の標準偏差 (ピクセル単位)。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.adaptivesharpenimage.php
		 * @see Imagick::sharpenImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveSharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 輝度の範囲にもとづいて各ピクセルの閾値を選択する
		 * <p>周辺のピクセルの輝度の範囲にもとづいて、 各ピクセルの閾値を選択します。 画像全体の輝度のヒストグラムが特定の頂点を持っていない場合の閾値の設定が可能となります。</p>
		 * @param int $width <p>周辺の幅。</p>
		 * @param int $height <p>周辺の高さ。</p>
		 * @param int $offset <p>平均オフセット。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.adaptivethresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveThresholdImage(int $width, int $height, int $offset): bool {}

		/**
		 * 新しい画像を Imagick オブジェクトの画像リストに追加する
		 * <p>元オブジェクトの現在の位置にある新しい画像を、 Imagick オブジェクトの画像リストに追加します。 この操作を行うと、イテレータがリストの最後尾に移動します。</p>
		 * @param \Imagick $source <p>元の Imagick オブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.addimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function addImage(\Imagick $source): bool {}

		/**
		 * ランダムなノイズを画像に追加する
		 * <p>ランダムなノイズを画像に追加します。</p>
		 * @param int $noise_type <p>ノイズの形式。 ノイズ定数 の一覧を参照ください。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.addnoiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function addNoiseImage(int $noise_type, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像を変換する
		 * <p>アフィン行列の指定にしたがって画像を変換します。</p>
		 * @param \ImagickDraw $matrix <p>アフィン行列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.affinetransformimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function affineTransformImage(\ImagickDraw $matrix): bool {}

		/**
		 * 画像を動かす
		 * <p>このメソッドは、ローカルあるいはリモートの X サーバーで画像を動かします。 このメソッドは Windows では使えません。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $x_server <p>X サーバーのアドレス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.animateimages.php
		 * @see Imagick::displayImage()
		 * @since No version information available, might only be in Git
		 */
		public function animateImages(string $x_server): bool {}

		/**
		 * 画像にテキストによる注記を加える
		 * <p>テキストによる注記を画像に加えます。</p>
		 * @param \ImagickDraw $draw_settings <p>テキスト描画設定を含む ImagickDraw オブジェクト。</p>
		 * @param float $x <p>テキストの左端の水平オフセットをあらわすピクセル数。</p>
		 * @param float $y <p>テキストのベースラインの垂直オフセットをあらわすピクセル数。</p>
		 * @param float $angle <p>テキストを書き出す角度。</p>
		 * @param string $text <p>描画するテキスト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.annotateimage.php
		 * @see ImagickDraw::annotation(), ImagickDraw::setFont()
		 * @since PECL imagick 2.0.0
		 */
		public function annotateImage(\ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool {}

		/**
		 * 画像群を追加する
		 * <p>画像群を、ひとつの大きな画像に追加します。</p>
		 * @param bool $stack <p>画像を垂直方向に積むかどうか。デフォルト (あるいは <b><code>FALSE</code></b> を指定した場合) は、画像を左から右に積みます。<code>stack</code> が <b><code>TRUE</code></b> の場合は、画像を上から下に積みます。</p>
		 * @return Imagick <p>成功した場合に Imagick インスタンスを返します。</p>
		 * @link https://php.net/manual/ja/imagick.appendimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function appendImages(bool $stack = false): \Imagick {}

		/**
		 * Description
		 * <p>Adjusts the levels of a particular image channel by scaling the minimum and maximum values to the full quantum range.</p>
		 * @param int $channel <p>Which channel should the auto-levelling should be done on.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.autolevelimage.php
		 * @since No version information available, might only be in Git
		 */
		public function autoLevelImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像群を平均化する
		 * <p>画像群を平均化します。</p>
		 * @return Imagick <p>成功した場合に Imagick インスタンスを返します。</p>
		 * @link https://php.net/manual/ja/imagick.averageimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function averageImages(): \Imagick {}

		/**
		 * 閾値に満たないすべてのピクセルを黒にする
		 * <p>Imagick::thresholdImage() と似ていますが、 これは閾値に満たないピクセルをすべて黒にし、その他のピクセルはそのままにします。</p>
		 * @param mixed $threshold <p>すべて黒にする閾値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.blackthresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function blackThresholdImage($threshold): bool {}

		/**
		 * Description
		 * <p>Mutes the colors of the image to simulate a scene at nighttime in the moonlight.</p>
		 * @param float $factor
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.blueshiftimage.php
		 * @since No version information available, might only be in Git
		 */
		public function blueShiftImage(float $factor = 1.5): bool {}

		/**
		 * blur (にじみ) フィルタを画像に追加する
		 * <p>blur (にじみ) フィルタを画像に追加します。 オプションの 3 番目のパラメータを指定すると、 特定のチャネルにのみ適用します。</p>
		 * @param float $radius <p>にじみの半径。</p>
		 * @param float $sigma <p>標準偏差。</p>
		 * @param int $channel <p>チャネル 定数。 省略した場合は全チャネルが対象となります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.blurimage.php
		 * @see Imagick::adaptiveBlurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function blurImage(float $radius, float $sigma, int $channel = NULL): bool {}

		/**
		 * 画像の周りを枠線で囲む
		 * <p>画像の周りを枠線で囲みます。枠線の色は ImagickPixel オブジェクトで指定します。</p>
		 * @param mixed $bordercolor <p>枠線の色を含む ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param int $width <p>枠線の幅。</p>
		 * @param int $height <p>枠線の高さ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.borderimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function borderImage($bordercolor, int $width, int $height): bool {}

		/**
		 * Description
		 * <p>Change the brightness and/or contrast of an image. It converts the brightness and contrast parameters into slope and intercept and calls a polynomical function to apply to the image.</p>
		 * @param float $brightness
		 * @param float $contrast
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.brightnesscontrastimage.php
		 * @since No version information available, might only be in Git
		 */
		public function brightnessContrastImage(float $brightness, float $contrast, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 木炭画をシミュレートする
		 * <p>木炭画をシミュレートします。</p>
		 * @param float $radius <p>ガウス分布の半径。中心を含まないピクセル数。</p>
		 * @param float $sigma <p>ガウス分布の標準偏差 (ピクセル単位)。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.charcoalimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function charcoalImage(float $radius, float $sigma): bool {}

		/**
		 * 画像の一部を取り除き、切り詰める
		 * <p>画像の一部を削除し、そこにあった画像をなくします。</p>
		 * @param int $width <p>切り取る範囲の幅。</p>
		 * @param int $height <p>切り取る範囲の高さ。</p>
		 * @param int $x <p>切り取る範囲の X 座標。</p>
		 * @param int $y <p>切り取る範囲の Y 座標。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.chopimage.php
		 * @see Imagick::cropImage()
		 * @since PECL imagick 2.0.0
		 */
		public function chopImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Restricts the color range from 0 to the quantum depth.</p>
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.clampimage.php
		 * @since No version information available, might only be in Git
		 */
		public function clampImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Imagick オブジェクトに関連付けられたすべてのリソースをクリアする
		 * <p>Imagick オブジェクトに関連付けられたすべてのリソースをクリアします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * 8BIM プロファイルの最初のパスにそって切り取る
		 * <p>8BIM プロファイルの最初のパスが存在する場合に、それにそって切り取ります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.clipimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function clipImage(): bool {}

		/**
		 * Description
		 * <p>Clips along the named paths from the 8BIM profile, if present. Later operations take effect inside the path. Id may be a number if preceded with #, to work on a numbered path, e.g., "#1" to use the first path.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $pathname
		 * @param string $inside
		 * @return void
		 * @link https://php.net/manual/ja/imagick.clipimagepath.php
		 * @since No version information available, might only be in Git
		 */
		public function clipImagePath(string $pathname, string $inside): void {}

		/**
		 * 8BIM プロファイルの指定した名前のパスにそって切り取る
		 * <p>8BIM プロファイルの指定した名前のパスが存在する場合に、それにそって切り取ります。 その後の操作はパスの内部に対してのみ有効となります。 番号で指定する場合は、番号の前に # を付加します。つまり "#1" とすると最初のパスを使用します。</p>
		 * @param string $pathname <p>パスの名前。</p>
		 * @param bool $inside <p>true の場合は、その後の操作はクリップパスの内側に対して適用されます。 それ以外の場合は、その後の操作はクリップパスの外側に対して適用されます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.clippathimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function clipPathImage(string $pathname, bool $inside): bool {}

		/**
		 * Imagick オブジェクトの完全なコピーを作成する
		 * <p>Imagick オブジェクトの完全なコピーを作成します。</p><p>この関数は imagick 3.1.0 で <i>非推奨</i> となりました。 かわりに clone キーワードを使います。</p>
		 * @return Imagick <p>Imagick オブジェクトのコピーを返します。</p>
		 * @link https://php.net/manual/ja/imagick.clone.php
		 * @since PECL imagick 2.0.0
		 */
		public function clone(): \Imagick {}

		/**
		 * 画像の色を置き換える
		 * <p>画像の色を、ルックアップテーブルをもとに置き換えます。 オプションの 2 番目のパラメータを指定すると、 特定のチャネルの色を置き換えます。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param \Imagick $lookup_table <p>色ルックアップテーブルを含む Imagick オブジェクト。</p>
		 * @param float $channel <p>チャネルタイプ 定数。 省略した場合はデフォルトチャネルが対象となります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.clutimage.php
		 * @see Imagick::adaptiveBlurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function clutImage(\Imagick $lookup_table, float $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 複数の画像を合成する
		 * <p>ページオフセットや処理方法を指定して、複数の画像を合成します。 典型的な使用例としては、たとえば GIF や MIFF、MNG といった画像シーケンスを最初に背景として指定し、 それ以降にさまざまなサイズやオフセットの画像を合成するというものがあります。 返り値は、新規 Imagick オブジェクトとなります。 シーケンスの各画像のサイズは、最初の画像のサイズと同じになります。</p>
		 * @return Imagick <p>成功した場合に新規 Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.coalesceimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function coalesceImages(): \Imagick {}

		/**
		 * 対象にマッチする任意の点の色の値を変更する
		 * <p>対象にマッチする任意の点の色の値を変更します。</p>
		 * @param mixed $fill <p>塗りつぶし色を表す ImagickPixel オブジェクト。</p>
		 * @param float $fuzz <p>fuzz の量。たとえば fuzz を 10 に設定すると、 赤の輝度が 100 および 102 の点は同じ色とみなされます。</p>
		 * @param mixed $bordercolor <p>枠線の色を表す ImagickPixel オブジェクト。</p>
		 * @param int $x <p>開始位置の X 座標。</p>
		 * @param int $y <p>開始位置の Y 座標。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.colorfloodfillimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function colorFloodfillImage($fill, float $fuzz, $bordercolor, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Apply color transformation to an image. The method permits saturation changes, hue rotation, luminance to alpha, and various other effects. Although variable-sized transformation matrices can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6 for CMYKA (or RGBA with offsets). The matrix is similar to those used by Adobe Flash except offsets are in column 6 rather than 5 (in support of CMYKA images) and offsets are normalized (divide Flash offset by 255)</p>
		 * @param array $color_matrix
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.colormatriximage.php
		 * @since No version information available, might only be in Git
		 */
		public function colorMatrixImage(array $color_matrix = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 塗りつぶし色と画像を混合する
		 * <p>画像の各ピクセルに、塗りつぶし色を混合します。</p>
		 * @param mixed $colorize <p>色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param mixed $opacity <p>不透明度を表す ImagickPixel オブジェクトあるいは文字列。 1.0 は完全に不透明、0.0 は完全に透明であることを表します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.colorizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function colorizeImage($colorize, $opacity): bool {}

		/**
		 * ひとつあるいは複数の画像をひとつにまとめる
		 * <p>ひとつあるいは複数の画像をひとつにまとめます。 一連の画像の各ピクセルのグレースケール値が、 合成した画像の特定のチャネルの値となります。典型的なパターンでは 画像 1 =&gt; Red、画像 2 =&gt; Green、画像 3 =&gt; Blue などとなります。</p>
		 * @param int $channelType <p>そのチャネルモードで使用可能なチャネル定数のいずれか。 複数のチャネルを適用するには、channeltype 定数をビット演算子でまとめます。 チャネル定数 の一覧を参照ください。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.combineimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function combineImages(int $channelType): \Imagick {}

		/**
		 * コメントを画像に追加する
		 * <p>コメントを画像に追加します。</p>
		 * @param string $comment <p>追加するコメント。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.commentimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function commentImage(string $comment): bool {}

		/**
		 * ひとつあるいは複数の画像の差を返す
		 * <p>ひとつあるいは複数の画像を比較し、差分の画像を返します。</p>
		 * @param \Imagick $image <p>比較する画像を含む Imagick オブジェクト。</p>
		 * @param int $channelType <p>そのチャネルモードで使用可能なチャネル定数を指定します。 複数のチャネルを指定するには、チャネル型定数をビット演算子で結合します。 チャネル定数 の一覧を参照ください。</p>
		 * @param int $metricType <p>メトリック型定数 のいずれか。</p>
		 * @return array <p><i>new_wand</i> と <i>distortion</i> を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.compareimagechannels.php
		 * @since PECL imagick 2.0.0
		 */
		public function compareImageChannels(\Imagick $image, int $channelType, int $metricType): array {}

		/**
		 * 複数の画像の中で最大の境界範囲を返す
		 * <p>各画像をシーケンス内の次の画像と比較し、 最大の境界範囲を返します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $method <p>レイヤメソッド定数 のいずれか。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.compareimagelayers.php
		 * @see Imagick::optimizeImageLayers(), Imagick::writeImages(), Imagick::writeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function compareImageLayers(int $method): \Imagick {}

		/**
		 * ある画像を再構築された画像と比較する
		 * <p>再構築された画像と画像の差異を含む配列を返します。</p>
		 * @param \Imagick $compare <p>比較したい画像。</p>
		 * @param int $metric <p>メトリック定数を指定します。この メトリック定数 の一覧を参照ください。</p>
		 * @return array <p>Returns an array containing a reconstructed image and the difference between images.</p>
		 * @link https://php.net/manual/ja/imagick.compareimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function compareImages(\Imagick $compare, int $metric): array {}

		/**
		 * ある画像を別の画像に合成する
		 * <p>ある画像を、別の画像の指定した位置に合成します。 合成アルゴリズムに指定する引数は、 setImageArtifact の第一パラメータに 'compose:args'、第二パラメータにデータを渡す必要があります。</p>
		 * @param \Imagick $composite_object <p>合成する画像を保持する Imagick オブジェクト。</p>
		 * @param int $composite
		 * @param int $x <p>合成する位置の列オフセット。</p>
		 * @param int $y <p>合成する位置の行オフセット。</p>
		 * @param int $channel <p>そのチャネルモードで使用可能なチャネル定数を指定します。 複数のチャネルを指定するには、チャネル型定数をビット演算子で結合します。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.compositeimage.php
		 * @see Imagick::setImageArtifact()
		 * @since PECL imagick 2.0.0
		 */
		public function compositeImage(\Imagick $composite_object, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像のコントラストを変更する
		 * <p>画像の中の暗めの部分と明るめの部分の輝度の差を強調します。 sharpen に 0 以外を指定すると画像のコントラストを上げ、 0 を指定するとコントラストを下げます。</p>
		 * @param bool $sharpen <p>シャープ値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.contrastimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function contrastImage(bool $sharpen): bool {}

		/**
		 * カラー画像のコントラストを強調する
		 * <p>とりうる色の範囲全体に色を調整することによって、 カラー画像のコントラストを強調します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $black_point <p>黒の点。</p>
		 * @param float $white_point <p>白の点。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 デフォルトは <b><code>Imagick::CHANNEL_ALL</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.contraststretchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function contrastStretchImage(float $black_point, float $white_point, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 独自の畳み込み関数を画像に適用する
		 * <p>独自の畳み込み関数を画像に適用します。</p>
		 * @param array $kernel <p>畳み込みの中心。</p>
		 * @param int $channel <p>そのチャネルモードで使用可能なチャネル定数を指定します。 複数のチャネルを適用するには、定数をビット演算子で連結します。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.convolveimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function convolveImage(array $kernel, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * Get the number of images
		 * <p>Returns the number of images.</p>
		 * @param int $mode <p>An unused argument. Currently there is a non-particularly well defined feature in PHP where calling count() on a countable object might (or might not) require this method to accept a parameter. This parameter is here to be conformant with the interface of countable, even though the param is not used.</p>
		 * @return int <p>Returns the number of images.</p>
		 * @link https://php.net/manual/ja/imagick.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(int $mode = 0): int {}

		/**
		 * 画像の一部を抽出する
		 * <p>画像の一部を抽出します。</p>
		 * @param int $width <p>抽出する幅。</p>
		 * @param int $height <p>抽出する高さ。</p>
		 * @param int $x <p>抽出する領域の左上の X 座標。</p>
		 * @param int $y <p>抽出する領域の左上の Y 座標。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.cropimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cropImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * 切り取ってサムネイルを作成する
		 * <p>固定サイズのサムネイルを作成します。 まず画像のサイズを拡大あるいは縮小し、指定した範囲を中心から切り取ります。</p>
		 * @param int $width <p>サムネイルの幅。</p>
		 * @param int $height <p>サムネイルの高さ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.cropthumbnailimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cropThumbnailImage(int $width, int $height): bool {}

		/**
		 * 現在の Imagick オブジェクトへの参照を返す
		 * <p>現在の imagick オブジェクトへの参照を返し、 画像ポインタを正しいシーケンスに設定します。</p>
		 * @return Imagick <p>成功した場合に自分自身を返します。</p>
		 * @link https://php.net/manual/ja/imagick.current.php
		 * @since PECL imagick 2.0.0
		 */
		public function current(): \Imagick {}

		/**
		 * 画像のカラーマップを移動する
		 * <p>位置番号を指定して、画像のカラーマップを移動します。 カラーマップを何度か回転させると、サイケデリックな効果が得られます。</p>
		 * @param int $displace <p>カラーマップを移動させる量。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.cyclecolormapimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cycleColormapImage(int $displace): bool {}

		/**
		 * 画像を復号する
		 * <p>暗号化された画像を復号します。画像の暗号化は <code>Imagick::encipherImage()</code> で行わなければなりません。 このメソッドは、ImageMagick バージョン 6.3.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $passphrase <p>パスフレーズ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.decipherimage.php
		 * @see Imagick::encipherImage()
		 * @since No version information available, might only be in Git
		 */
		public function decipherImage(string $passphrase): bool {}

		/**
		 * 画像間の特定のピクセルの差を返す
		 * <p>各画像をシーケンス内の次の画像と比較し、 最大の境界範囲を返します。</p>
		 * @return Imagick <p>成功した場合に新しい Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.deconstructimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function deconstructImages(): \Imagick {}

		/**
		 * 画像のアーチファクトを削除する
		 * <p>画像に関連づけられたアーチファクトを削除します。プロパティとアーチファクトの違いは、 プロパティは public であるのに対してアーチファクトは private であるという点です。 このメソッドは、ImageMagick バージョン 6.5.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $artifact <p>削除したいアーチファクトの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.deleteimageartifact.php
		 * @see Imagick::setImageArtifact(), Imagick::getImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function deleteImageArtifact(string $artifact): bool {}

		/**
		 * Description
		 * <p>Deletes an image property.</p>
		 * @param string $name <p>The name of the property to delete.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.deleteimageproperty.php
		 * @since No version information available, might only be in Git
		 */
		public function deleteImageProperty(string $name): bool {}

		/**
		 * 傾きを除去する
		 * <p>このメソッドを使うと、スキャナでの読み込み時にうまく紙を置かなかった場合などの画像の傾きを除去することができます。 このメソッドは、ImageMagick バージョン 6.4.5 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $threshold <p>傾き除去の閾値。</p>
		 * @return bool
		 * @link https://php.net/manual/ja/imagick.deskewimage.php
		 * @since No version information available, might only be in Git
		 */
		public function deskewImage(float $threshold): bool {}

		/**
		 * 画像内のスペックルノイズを軽減する
		 * <p>画像内のスペックルノイズを軽減します。ただし元画像の輪郭は保持します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.despeckleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function despeckleImage(): bool {}

		/**
		 * Imagick オブジェクトを破棄する
		 * <p>Imagick オブジェクトを破棄し、関連するリソースをすべて開放します。 このメソッドは非推奨です。かわりに Imagick::clear を使いましょう。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * 画像を表示する
		 * <p>このメソッドは、画像を X サーバーに表示します。</p>
		 * @param string $servername <p>X サーバーの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.displayimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function displayImage(string $servername): bool {}

		/**
		 * 画像あるいは画像シーケンスを表示する
		 * <p>画像あるいは画像シーケンスを X サーバーに表示します。</p>
		 * @param string $servername <p>X サーバーの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.displayimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function displayImages(string $servername): bool {}

		/**
		 * さまざまな方式で画像を歪める
		 * <p>さまざまな方式で画像を歪めます。 これは、元画像の色を新たな画像の色に対応させることで行います。 新たな画像は、'bestfit' を true に設定しない限りは元画像と同じ大きさになります。</p><p>'bestfit' を有効にし、使用する歪め方式がサイズ変更を許可していた場合は、 変換後の画像に合わせて画像のサイズやオフセットが調整されます。 多くの場合、元画像の仮想オフセットも考慮したマッピングが行われます。</p><p>このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $method <p>画像の歪め方式。 歪め定数 を参照ください。</p>
		 * @param array $arguments <p>歪め方式の引数。</p>
		 * @param bool $bestfit <p>元画像のサイズを変更する。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.distortimage.php
		 * @see Imagick::blurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.1
		 */
		public function distortImage(int $method, array $arguments, bool $bestfit): bool {}

		/**
		 * 現在の画像上の ImagickDraw オブジェクトをレンダリングする
		 * <p>現在の画像上の ImagickDraw オブジェクトをレンダリングします。</p>
		 * @param \ImagickDraw $draw <p>画像をレンダリングする描画操作。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.drawimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function drawImage(\ImagickDraw $draw): bool {}

		/**
		 * 画像の輪郭を強調する
		 * <p>指定した半径の畳み込みフィルタを使用して、画像の輪郭を強調します。 radius に 0 を設定すると自動選択となります。</p>
		 * @param float $radius <p>操作の半径。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.edgeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function edgeImage(float $radius): bool {}

		/**
		 * グレースケール画像に三次元効果を施して返す
		 * <p>グレースケール画像に三次元効果を施したものを返します。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、適切な半径を自動的に設定します。</p>
		 * @param float $radius <p>効果の半径。</p>
		 * @param float $sigma <p>効果のシグマ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.embossimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function embossImage(float $radius, float $sigma): bool {}

		/**
		 * 画像を暗号化する
		 * <p>プレーンなピクセル群を暗号化します。<code>Imagick::decipherImage()</code> で復号するまで、この画像は読めなくなります。 このメソッドは、ImageMagick バージョン 6.3.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $passphrase <p>パスフレーズ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.encipherimage.php
		 * @see Imagick::decipherImage()
		 * @since No version information available, might only be in Git
		 */
		public function encipherImage(string $passphrase): bool {}

		/**
		 * ノイジーな画像の品質を向上させる
		 * <p>デジタルフィルタを適用して、ノイジーな画像の品質を向上させます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.enhanceimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function enhanceImage(): bool {}

		/**
		 * 画像ヒストグラムを均等化する
		 * <p>画像ヒストグラムを均等化します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.equalizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function equalizeImage(): bool {}

		/**
		 * 式を画像に適用する
		 * <p>算術演算、関係演算、論理演算などを画像に適用します。 これらの演算子を使用すると、画像の明度を変えたりコントラストを変えたり、 あるいは画像の "ネガ" を作成したりすることができます。</p>
		 * @param int $op <p>評価演算子。</p>
		 * @param float $constant <p>演算子の値。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.evaluateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function evaluateImage(int $op, float $constant, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像の生のピクセルをエクスポートする
		 * <p>画像のピクセルを配列にエクスポートします。map には、エクスポートするピクセルの順序を指定します。 返される配列の大きさは <i>width &#42; height &#42; strlen(map)</i> となります。 このメソッドは、ImageMagick バージョン 6.4.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $x <p>エクスポートする範囲の X 座標。</p>
		 * @param int $y <p>エクスポートする範囲の Y 座標。</p>
		 * @param int $width <p>エクスポートする範囲の幅。</p>
		 * @param int $height <p>エクスポートする範囲の高さ。</p>
		 * @param string $map <p>エクスポートするピクセルの順序。<i>"RGB"</i> など。 map で使える文字は R, G, B, A, O, C, Y, M, K, I および P です。</p>
		 * @param int $STORAGE <p>ピクセル型定数 を参照ください。</p>
		 * @return array <p>ピクセルの値を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.exportimagepixels.php
		 * @since No version information available, might only be in Git
		 */
		public function exportImagePixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array {}

		/**
		 * 画像のサイズを設定する
		 * <p>画像のサイズを設定するための便利なメソッドです。 このメソッドは、画像のサイズおよび新しい領域を開始する x 座標、y 座標を設定することができます。 このメソッドは、ImageMagick バージョン 6.3.1 以降で Imagick をコンパイルした場合に使用可能です。</p><p>ImageMagick 6.5.7-8 (1623) より前のバージョンでは、$x は、左にシフトするときが正で右にシフトするときが負でした。 また $y は、上にシフトするときが正で下にシフトするときが負でした。 ImageMagick 6.3.7 (1591) から ImageMagick 6.5.7-8 (1623) までのどこかで、$x と $y の座標が反転しました。 つまり、$x は、左にシフトするときが負で右にシフトするときが正になりました。 また $y も、上にシフトするときが負で下にシフトするときが正になりました。 そして ImageMagick 6.5.7-8 (1623) から ImageMagick 6.6.9-7 (1641) までのどこかで、$x と $y の座標が再び反転して、ImageMagick 6.5.7-8 (1623) より前のバージョンと同じ状態に戻りました。</p>
		 * @param int $width <p>新しい幅。</p>
		 * @param int $height <p>新しい高さ。</p>
		 * @param int $x <p>新しいサイズの X 座標。</p>
		 * @param int $y <p>新しいサイズの Y 座標。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.extentimage.php
		 * @see Imagick::resizeImage(), Imagick::thumbnailImage(), Imagick::cropImage()
		 * @since No version information available, might only be in Git
		 */
		public function extentImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Applies a custom convolution kernel to the image.</p>
		 * @param \ImagickKernel $ImagickKernel <p>An instance of ImagickKernel that represents either a single kernel or a linked series of kernels.</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.filter.php
		 * @since No version information available, might only be in Git
		 */
		public function filter(\ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_UNDEFINED): bool {}

		/**
		 * 画像シーケンスをマージする
		 * <p>画像シーケンスをマージします。 これは、たとえば Photoshop のレイヤを単一の画像にまとめる場合などに便利です。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.flattenimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function flattenImages(): \Imagick {}

		/**
		 * 垂直方向に反転した画像を作成する
		 * <p>中心の x 軸を基準してピクセルを反転させ、垂直方向のミラー画像を作成します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.flipimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function flipImage(): bool {}

		/**
		 * 対象にマッチする任意のピクセルの値を変更する
		 * <p>対象にマッチするピクセルとその直接の近傍の任意のピクセルの色の値を変更します。 このメソッドは、廃止予定の <code>Imagick::paintFloodFillImage()</code> を置き換えるものです。 このメソッドは、ImageMagick バージョン 6.3.8 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param mixed $fill <p>塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param float $fuzz <p>あいまいさをあらわす量。たとえば、これを 10 に設定すると、 赤色の値が 100 の色と 102 の色は同じものとみなされます。</p>
		 * @param mixed $target <p>対象の色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param int $x <p>開始位置の X 座標。</p>
		 * @param int $y <p>開始位置の Y 座標。</p>
		 * @param bool $invert <p><b><code>TRUE</code></b> の場合は、対象の色にマッチしない任意のピクセルをペイントします。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.floodfillpaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function floodFillPaintImage($fill, float $fuzz, $target, int $x, int $y, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 水平方向に反転した画像を作成する
		 * <p>中心の y 軸を基準してピクセルを反転させ、水平方向のミラー画像を作成します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.flopimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function flopImage(): bool {}

		/**
		 * Description
		 * <p>Implements the discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p>
		 * @param bool $magnitude <p>If true, return as magnitude / phase pair otherwise a real / imaginary image pair.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.forwardfouriertransformimage.php
		 * @since No version information available, might only be in Git
		 */
		public function forwardFourierTransformImage(bool $magnitude): bool {}

		/**
		 * 三次元の枠線をシミュレートする
		 * <p>画像の周りに三次元の枠線を追加します。 width と height で、それぞれ縦の枠線と横の枠線の幅を指定します。 inner_bevel および outer_bevel は、 それぞれ枠の内側と外側の影の幅を指定します。</p>
		 * @param mixed $matte_color <p>マット色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param int $width <p>枠の幅。</p>
		 * @param int $height <p>枠の高さ。</p>
		 * @param int $inner_bevel <p>内側の影の幅。</p>
		 * @param int $outer_bevel <p>外側の影の幅。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.frameimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function frameImage($matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool {}

		/**
		 * 画像に関数を適用する
		 * <p>代数演算、関係演算、論理演算などを疑似画像に適用します。</p><p>» ImageMagick v6 Examples - Image Transformations — Function, Multi-Argument Evaluate も参照ください。</p><p>このメソッドは、ImageMagick バージョン 6.4.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $function <p>関数定数 の一覧を参照ください。</p>
		 * @param array $arguments <p>この関数に渡す引数の配列。</p>
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.functionimage.php
		 * @since No version information available, might only be in Git
		 */
		public function functionImage(int $function, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 式を画像の各ピクセルに適用する
		 * <p>式を画像の各ピクセルに適用します。 詳細は » The Fx Special Effects Image Operator を参照ください。</p>
		 * @param string $expression <p>式。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.fximage.php
		 * @since PECL imagick 2.0.0
		 */
		public function fxImage(string $expression, int $channel = Imagick::CHANNEL_ALL): \Imagick {}

		/**
		 * 画像をガンマ補正する
		 * <p>画像をガンマ補正します。同じ画像でも、 異なるデバイス上で見ると見た目が変わることがあります。 これは、画面上に画像の輝度を表現する方法がことなるためです。 赤、緑、青の各チャネルに個別のガンマレベルを指定するか、 あるいはすべてのチャネルに共通のガンマレベルを指定します。 値の典型的な範囲は、0.8 から 2.3 の間となります。</p>
		 * @param float $gamma <p>ガンマ補正の量。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.gammaimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function gammaImage(float $gamma, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像をぼかす
		 * <p>画像をぼかします。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、適切な半径を自動的に設定します。</p>
		 * @param float $radius <p>ガウス演算の半径。ピクセル単位で指定し、中心は計算に入れません。</p>
		 * @param float $sigma <p>ガウス演算の標準偏差。ピクセル単位で指定します。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.gaussianblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function gaussianBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 色空間を取得する
		 * <p>グローバル色空間の値を取得します。 このメソッドは、ImageMagick バージョン 6.5.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>整数値を返します。この値を COLORSPACE 定数 と比較することができます。</p>
		 * @link https://php.net/manual/ja/imagick.getcolorspace.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function getColorspace(): int {}

		/**
		 * オブジェクトの圧縮形式を取得する
		 * <p>オブジェクトの圧縮形式を取得します。</p>
		 * @return int <p>圧縮定数を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getcompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCompression(): int {}

		/**
		 * オブジェクトの圧縮品質を取得する
		 * <p>オブジェクトの圧縮品質を取得します。</p>
		 * @return int <p>圧縮品質を表す整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getcompressionquality.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCompressionQuality(): int {}

		/**
		 * ImageMagick API の著作権情報を文字列で返す
		 * <p>ImageMagick API の著作権情報を文字列で返します。</p>
		 * @return string <p>Imagemagick および Magickwand C API の著作権情報を含む文字列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getcopyright.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCopyright(): string {}

		/**
		 * 画像シーケンスに関連付けられたファイル名を取得する
		 * <p>画像シーケンスに関連付けられたファイル名を取得します。</p>
		 * @return string <p>成功した場合に文字列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getfilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFilename(): string {}

		/**
		 * フォントを取得する
		 * <p>オブジェクトのフォントプロパティを返します。 このメソッドは、ImageMagick バージョン 6.3.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return string <p>フォント名を表す文字列を返します。フォントが設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getfont.php
		 * @see Imagick::setFont(), ImagickDraw::setFont(), ImagickDraw::getFont()
		 * @since PECL imagick 2.1.0
		 */
		public function getFont(): string {}

		/**
		 * Imagick オブジェクトのフォーマットを取得する
		 * <p>Imagick オブジェクトのフォーマットを返します。</p>
		 * @return string <p>画像フォーマットを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFormat(): string {}

		/**
		 * gravity を取得する
		 * <p>Imagick オブジェクトのグローバル gravity プロパティを取得します。 このメソッドは、ImageMagick バージョン 6.4.0 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>gravity プロパティを返します。 gravity 定数 の一覧を参照ください。</p>
		 * @link https://php.net/manual/ja/imagick.getgravity.php
		 * @since No version information available, might only be in Git
		 */
		public function getGravity(): int {}

		/**
		 * ImageMagick のホーム URL を返す
		 * <p>ImageMagick のホーム URL を返します。</p>
		 * @return string <p>imagemagick のホームページへのリンクを返します。</p>
		 * @link https://php.net/manual/ja/imagick.gethomeurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function getHomeURL(): string {}

		/**
		 * 新しい Imagick オブジェクトを返す
		 * <p>現在の画像シーケンスを使用した新しい Imagick オブジェクトを返します。</p>
		 * @return Imagick <p>現在の画像シーケンスを使用した新しい Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImage(): \Imagick {}

		/**
		 * 画像のアルファチャネルを取得する
		 * <p>画像のアルファチャネルの値を取得します。返される値は アルファチャネル定数 のいずれかとなります。 このメソッドは、ImageMagick バージョン 6.4.0 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>現在のアルファチャネル値を表す定数を返します。 アルファチャネル定数 の一覧を参照ください。</p>
		 * @link https://php.net/manual/ja/imagick.getimagealphachannel.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageAlphaChannel(): int {}

		/**
		 * 画像のアーチファクトを取得する
		 * <p>画像に関連づけられたアーチファクトを取得します。プロパティとアーチファクトの違いは、 プロパティは public であるのに対してアーチファクトは private であるという点です。 このメソッドは、ImageMagick バージョン 6.5.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $artifact <p>アーチファクトの名前。</p>
		 * @return string <p>成功した場合にアーチファクトの値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageartifact.php
		 * @see Imagick::setImageArtifact(), Imagick::deleteImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function getImageArtifact(string $artifact): string {}

		/**
		 * Description
		 * <p>Returns a named attribute.</p>
		 * @param string $key <p>The key of the attribute to get.</p>
		 * @return string
		 * @link https://php.net/manual/ja/imagick.getimageattribute.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageAttribute(string $key): string {}

		/**
		 * 画像の背景色を返す
		 * <p>画像の背景色を返します。</p>
		 * @return ImagickPixel <p>画像の背景色を設定した ImagickPixel を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagebackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBackgroundColor(): \ImagickPixel {}

		/**
		 * 画像シーケンスを blob で返す
		 * <p>画像フォーマットを直接記憶します。 これは、画像シーケンスを文字列で返します。 画像のフォーマットによって、返される blob の形式 (GIF, JPEG, PNG, など) が決まります。 別の画像フォーマットを返すには Imagick::SetImageFormat() を使用します。</p>
		 * @return string <p>画像を含む文字列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBlob(): string {}

		/**
		 * 青が一番強い点を返す
		 * <p>青が一番強い点を返します。</p>
		 * @return array <p>"x" 座標および "y" 座標を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageblueprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBluePrimary(): array {}

		/**
		 * 画像の前景色を返す
		 * <p>画像の前景色を返します。</p>
		 * @return ImagickPixel <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagebordercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBorderColor(): \ImagickPixel {}

		/**
		 * 特定の画像チャネルの深度を返す
		 * <p>特定の画像チャネルの深度を返します。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return int <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechanneldepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelDepth(int $channel): int {}

		/**
		 * 画像のチャネルを再構築した画像と比較する
		 * <p>ひとつあるいは複数のチャネルの内容を再構築した画像と比較し、 指定した歪み係数を返します。</p>
		 * @param \Imagick $reference <p>比較する Imagick オブジェクト。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @param int $metric <p>メトリック型定数 のいずれか。</p>
		 * @return float <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechanneldistortion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelDistortion(\Imagick $reference, int $channel, int $metric): float {}

		/**
		 * チャネルの歪みを取得する
		 * <p>ひとつあるいは複数のチャネルの内容を再構築した画像と比較し、 指定した歪み係数を返します。 このメソッドは、ImageMagick バージョン 6.4.4 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param \Imagick $reference <p>比較する画像を含む Imagick オブジェクト。</p>
		 * @param int $metric <p>メトリック型定数 の一覧を参照ください。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return float <p>チャネルの歪みを表す double 型の値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechanneldistortions.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageChannelDistortions(\Imagick $reference, int $metric, int $channel = Imagick::CHANNEL_DEFAULT): float {}

		/**
		 * ひとつあるいは複数の画像チャネルの極値を取得する
		 * <p>ひとつあるいは複数の画像チャネルの極値を取得します。 返り値は連想配列で、"minima" および "maxima" というキーを含みます。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return array <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechannelextrema.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelExtrema(int $channel): array {}

		/**
		 * getImageChannelKurtosis
		 * <p>指定したチャネルの尖度と歪度を取得します。このメソッドは、ImageMagick バージョン 6.4.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return array <p><i>kurtosis</i> と <i>skewness</i> を要素に持つ配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechannelkurtosis.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageChannelKurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array {}

		/**
		 * 平均値と標準偏差を取得する
		 * <p>ひとつあるいは複数の画像チャネルの平均値および標準偏差を取得します。 返り値は連想配列で、"mean" および "standardDeviation" というキーを含みます。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return array <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechannelmean.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelMean(int $channel): array {}

		/**
		 * チャネルの範囲を取得する
		 * <p>ひとつあるいは複数のチャネルの範囲を取得します。 このメソッドは、ImageMagick バージョン 6.4.0 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return array <p>チャネルの minima および maxima の値を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechannelrange.php
		 * @since PECL imagick 2.2.1
		 */
		public function getImageChannelRange(int $channel): array {}

		/**
		 * 画像の各チャネルの統計情報を返す
		 * <p>画像の各チャネルの統計情報を返します。 この情報に含まれるのは、チャネルの深度、最小値と最大値、 平均値、そして標準偏差です。 たとえば赤チャネルの平均値を取得するにはこのようにします。</p>
		 * @return array <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagechannelstatistics.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelStatistics(): array {}

		/**
		 * 画像のクリップマスクを取得する
		 * <p>画像のクリップマスクを含む Imagick オブジェクトを返します。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return Imagick <p>画像のクリップマスクを含む Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageclipmask.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageClipMask(): \Imagick {}

		/**
		 * 指定したインデックスに対応する色マップ上の色を返す
		 * <p>指定したインデックスに対応する色マップ上の色を返します。</p>
		 * @param int $index <p>画像の色マップ内のオフセット。</p>
		 * @return ImagickPixel <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagecolormapcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColormapColor(int $index): \ImagickPixel {}

		/**
		 * 画像で使われている色の数を取得する
		 * <p>画像で使われている色の数を取得します。</p>
		 * @return int <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagecolors.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColors(): int {}

		/**
		 * 画像の色空間を取得する
		 * <p>画像の色空間を取得します。</p>
		 * @return int <p>Returns an integer which can be compared against COLORSPACE constants.</p>
		 * @link https://php.net/manual/ja/imagick.getimagecolorspace.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColorspace(): int {}

		/**
		 * 画像の合成演算子を返す
		 * <p>画像に関連付けられている合成演算子を返します。</p>
		 * @return int <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagecompose.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageCompose(): int {}

		/**
		 * 現在の画像の圧縮形式を取得する
		 * <p>現在の画像の圧縮形式を取得します。</p>
		 * @return int <p>圧縮形式を表す定数を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagecompression.php
		 * @since PECL imagick 2.2.2
		 */
		public function getImageCompression(): int {}

		/**
		 * 現在の画像の圧縮品質を取得する
		 * <p>現在の画像の圧縮品質を取得します。</p>
		 * @return int <p>画像の圧縮品質を表す整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagecompressionquality.php
		 * @since PECL imagick 2.2.2
		 */
		public function getImageCompressionQuality(): int {}

		/**
		 * 画像の遅延を取得する
		 * <p>画像の遅延を取得します。</p>
		 * @return int <p>画像の遅延を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagedelay.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDelay(): int {}

		/**
		 * 画像の深度を取得する
		 * <p>画像の深度を取得します。</p>
		 * @return int <p>画像の深度を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagedepth.php
		 * @since PECL imagick 0.9.1-0.9.9
		 */
		public function getImageDepth(): int {}

		/**
		 * 画像の配置方法を取得する
		 * <p>画像の配置方法を取得します。</p>
		 * @return int <p>成功した場合に配置方法を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagedispose.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDispose(): int {}

		/**
		 * ある画像と再構築した画像を比較する
		 * <p>ある画像と再構築した画像を比較し、 指定した歪み係数を返します。</p>
		 * @param \MagickWand $reference <p>比較する Imagick オブジェクト。</p>
		 * @param int $metric <p>メトリック型定数 のいずれか。</p>
		 * @return float <p>その画像で使用する歪み係数 (あるいはその推測値) を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagedistortion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDistortion(\MagickWand $reference, int $metric): float {}

		/**
		 * 画像の極値を取得する
		 * <p>画像の極値を取得します。 "min" および "max" というキーを持つ連想配列を返します。</p>
		 * @return array <p>"min" および "max" というキーを持つ連想配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageextrema.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageExtrema(): array {}

		/**
		 * シーケンス内の特定の画像のファイル名を返す
		 * <p>シーケンス内の特定の画像のファイル名を返します。</p>
		 * @return string <p>画像のファイル名を文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagefilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageFilename(): string {}

		/**
		 * シーケンス内の特定の画像のフォーマットを返す
		 * <p>シーケンス内の特定の画像のフォーマットを返します。</p>
		 * @return string <p>成功した場合は画像のフォーマットを文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageFormat(): string {}

		/**
		 * 画像のガンマを取得する
		 * <p>画像のガンマを取得します。</p>
		 * @return float <p>成功した場合にガンマを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagegamma.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGamma(): float {}

		/**
		 * 幅と高さを連想配列で取得する
		 * <p>幅と高さを連想配列で返します。</p>
		 * @return array <p>画像の幅と高さを表す配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagegeometry.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGeometry(): array {}

		/**
		 * 画像の gravity を取得する
		 * <p>画像の原罪の current 値を取得します。 <code>Imagick::getGravity()</code> とは異なり、 このメソッドは原罪の画像シーケンスで定義された gravity を返します。 このメソッドは、ImageMagick バージョン 6.4.4 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>画像の property プロパティを返します。 gravity 定数 の一覧を参照ください。</p>
		 * @link https://php.net/manual/ja/imagick.getimagegravity.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageGravity(): int {}

		/**
		 * 緑が一番強い点を返す
		 * <p>緑が一番強い点を返します。"x" および "y" というキーを持つ配列を返します。</p>
		 * @return array <p>成功した場合に "x" および "y" というキーを持つ配列を返します。 失敗した場合は ImagickException をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getimagegreenprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGreenPrimary(): array {}

		/**
		 * 画像の高さを返す
		 * <p>画像の高さを返します。</p>
		 * @return int <p>画像の高さをピクセル数で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageheight.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageHeight(): int {}

		/**
		 * 画像のヒストグラムを取得する
		 * <p>画像のヒストグラムを ImagickPixel オブジェクトの配列で返します。</p>
		 * @return array <p>画像のヒストグラムを ImagickPixel オブジェクトの配列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagehistogram.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageHistogram(): array {}

		/**
		 * 現在アクティブな画像のインデックスを取得する
		 * <p>Imagick オブジェクト内で現在アクティブな画像のインデックスを取得します。 このメソッドは非推奨です。 <code>Imagick::getIteratorIndex()</code> を参照ください。</p>
		 * @return int <p>スタック内の画像のインデックスを表す整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageindex.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageIndex(): int {}

		/**
		 * 画像のインターレース手法を取得する
		 * <p>画像のインターレース手法を取得します。</p>
		 * @return int <p>成功した場合に画像のインターレース手法を返します。 エラー時に <b>ImagickException</b> をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getimageinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageInterlaceScheme(): int {}

		/**
		 * 画像の補間方式を返す
		 * <p>指定した画像の補間方式を返します。 方式は <b><code>Imagick::INTERPOLATE_&#42;</code></b> 定数のいずれかで指定します。</p>
		 * @return int <p>成功した場合に補間方式を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageinterpolatemethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageInterpolateMethod(): int {}

		/**
		 * 画像の反復を取得する
		 * <p>画像の反復を取得します。</p>
		 * @return int <p>画像の反復を表す整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageiterations.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageIterations(): int {}

		/**
		 * 画像の長さをバイト数で取得する
		 * <p>画像の長さをバイト数で返します。</p>
		 * @return int <p>現在の画像のサイズを整数値で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagelength.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageLength(): int {}

		/**
		 * ImageMagick のライセンスを文字列で返す
		 * <p>ImageMagick のライセンスを文字列で返します。</p>
		 * @return string <p>ImageMagick のライセンスを文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagemagicklicense.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMagickLicense(): string {}

		/**
		 * 画像がマットチャネルを持っているかどうかを返す
		 * <p>画像がマットチャネルを持っている場合に <b><code>TRUE</code></b>、 そうでない場合に false を返します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagematte.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMatte(): bool {}

		/**
		 * 画像のマット色を返す
		 * <p>画像のマット色を返します。</p>
		 * @return ImagickPixel <p>成功した場合に ImagickPixel オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagemattecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMatteColor(): \ImagickPixel {}

		/**
		 * Description
		 * <p>Returns the image mime-type.</p>
		 * @return string
		 * @link https://php.net/manual/ja/imagick.getimagemimetype.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageMimeType(): string {}

		/**
		 * 画像の方向を取得する
		 * <p>画像の方向を取得します。返り値は 方向定数 のいずれかとなります。</p>
		 * @return int <p>成功した場合に整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageorientation.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageOrientation(): int {}

		/**
		 * ページのジオメトリを返す
		 * <p>画像のページジオメトリを配列で返します。配列のキーは "width"、"height"、"x" および "y" です。</p>
		 * @return array <p>画像のページジオメトリを配列で返します。配列のキーは "width"、"height"、"x" および "y" です。</p>
		 * @link https://php.net/manual/ja/imagick.getimagepage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagePage(): array {}

		/**
		 * 指定したピクセルの色を返す
		 * <p>指定したピクセルの色を返します。</p>
		 * @param int $x <p>ピクセルの x 座標。</p>
		 * @param int $y <p>ピクセルの y 座標。</p>
		 * @return ImagickPixel <p>指定した座標の色を表す ImagickPixel のインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagepixelcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagePixelColor(int $x, int $y): \ImagickPixel {}

		/**
		 * 指定した名前の画像プロファイルを返す
		 * <p>指定した名前の画像プロファイルを返します。</p>
		 * @param string $name <p>返したいプロファイルの名前。</p>
		 * @return string <p>画像プロファイルを含む文字列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProfile(string $name): string {}

		/**
		 * 画像プロファイルを返す
		 * <p>関連付けられているプロファイルのうち、パターンにマッチするものをすべて返します。 二番目の引数を <b><code>FALSE</code></b> にすると、プロファイルの名前だけを返します。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $pattern <p>プロファイル名のパターン。</p>
		 * @param bool $include_values <p>プロファイル名のみを返すかどうか。<b><code>FALSE</code></b> の場合は、プロファイル名のみを返します。</p>
		 * @return array <p>画像のプロファイルあるいはプロファイル名を含む連想配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageprofiles.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProfiles(string $pattern = "*", bool $include_values = TRUE): array {}

		/**
		 * 画像のプロパティを返す
		 * <p>関連付けられているプロパティのうち、パターンにマッチするものをすべて返します。 二番目の引数を <b><code>FALSE</code></b> にすると、プロパティの名前だけを返します。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $pattern <p>プロパティ名のパターン。</p>
		 * @param bool $include_values <p>プロパティ名のみを返すかどうか。<b><code>FALSE</code></b> の場合は、プロファイル名のみを返します。</p>
		 * @return array <p>画像のプロパティあるいはプロパティ名を含む連想配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageproperties.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProperties(string $pattern = "*", bool $include_values = TRUE): array {}

		/**
		 * 指定した名前の画像のプロパティを返す
		 * <p>指定した名前の画像プロパティを返します。 このメソッドは、ImageMagick バージョン 6.3.2 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $name <p>プロパティの名前 (たとえば Exif:DateTime)。</p>
		 * @return string <p>画像のプロパティを含む文字列を返します。 指定した名前のプロパティが存在しない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageproperty.php
		 * @see Imagick::setImageProperty()
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProperty(string $name): string {}

		/**
		 * 赤が一番強い点を返す
		 * <p>赤が一番強い点を返します。"x" および "y" というキーを持つ配列を返します。</p>
		 * @return array <p>赤が一番強い点を "x" および "y" というキーを持つ配列で返します。 エラー時に <b>ImagickException</b> をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getimageredprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRedPrimary(): array {}

		/**
		 * 画像の一部を抽出する
		 * <p>画像の一部を抽出し、新しい Imagick オブジェクトとして返します。</p>
		 * @param int $width <p>抽出する範囲の幅。</p>
		 * @param int $height <p>抽出する範囲の高さ。</p>
		 * @param int $x <p>抽出する範囲の左上の X 座標。</p>
		 * @param int $y <p>抽出する範囲の左上の Y 座標。</p>
		 * @return Imagick <p>画像の一部を抽出し、新しい wand として返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageregion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRegion(int $width, int $height, int $x, int $y): \Imagick {}

		/**
		 * 画像のレンダリング方向を取得する
		 * <p>画像のレンダリング方向を取得します。</p>
		 * @return int <p>画像の レンダリング方向 を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagerenderingintent.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRenderingIntent(): int {}

		/**
		 * 画像の X 方向と Y 方向の解像度を取得する
		 * <p>X 方向および Y 方向の解像度を取得します。</p>
		 * @return array <p>解像度を配列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageResolution(): array {}

		/**
		 * 画像のシーンを取得する
		 * <p>画像のシーンを取得します。</p>
		 * @return int <p>画像のシーンを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagescene.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageScene(): int {}

		/**
		 * SHA-256 メッセージダイジェストを生成する
		 * <p>画像ピクセルストリームの SHA-256 メッセージダイジェストを生成します。</p>
		 * @return string <p>そのファイルの SHA-256 ハッシュを文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagesignature.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageSignature(): string {}

		/**
		 * 画像の長さをバイト数で返す
		 * <p>画像の長さをバイト数で返します。 非推奨です。かわりに Imagick::getImageLength() を使いましょう。</p>
		 * @return int <p>現在の画像のサイズをバイト数で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagesize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageSize(): int {}

		/**
		 * 画像の ticks-per-second を取得する
		 * <p>画像の ticks-per-second を取得します。</p>
		 * @return int <p>画像の ticks-per-second を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagetickspersecond.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageTicksPerSecond(): int {}

		/**
		 * 画像の総インク密度を取得する
		 * <p>画像の総インク密度を取得します。</p>
		 * @return float <p>画像の総インク密度を返します。 エラー時に <b>ImagickException</b> をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getimagetotalinkdensity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageTotalInkDensity(): float {}

		/**
		 * 画像の型を取得する
		 * <p>画像の型を取得します。</p>
		 * @return int <p>画像の型を返します。</p><ul> <li>  <b><code>imagick::IMGTYPE_UNDEFINED</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_BILEVEL</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_GRAYSCALE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_GRAYSCALEMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_PALETTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_PALETTEMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_TRUECOLOR</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_TRUECOLORMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_COLORSEPARATION</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_COLORSEPARATIONMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_OPTIMIZE</code></b>  </li> </ul>
		 * @link https://php.net/manual/ja/imagick.getimagetype.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function getImageType(): int {}

		/**
		 * 画像の解像度の単位を取得する
		 * <p>画像の解像度の単位を取得します。</p>
		 * @return int <p>画像の解像度の単位を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimageunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageUnits(): int {}

		/**
		 * 仮想ピクセルメソッドを取得する
		 * <p>指定した画像の仮想ピクセルメソッドを返します。</p>
		 * @return int <p>成功した場合に仮想ピクセルメソッドを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagevirtualpixelmethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageVirtualPixelMethod(): int {}

		/**
		 * 色度が白い点を返す
		 * <p>色度が白い点を返します。 "x" および "y" というキーを持つ連想配列となります。</p>
		 * @return array <p>色度が白い点を返します。 "x" および "y" というキーを持つ連想配列となります。</p>
		 * @link https://php.net/manual/ja/imagick.getimagewhitepoint.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageWhitePoint(): array {}

		/**
		 * 画像の幅を返す
		 * <p>画像の幅を返します。</p>
		 * @return int <p>画像の幅を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getimagewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageWidth(): int {}

		/**
		 * すべての画像シーケンスを blob で返す
		 * <p>メモリ上の画像フォーマットを直接操作します。 すべての画像シーケンスを文字列として返します。 画像のフォーマット (GIF, JPEG, PNG など) に応じて返される blob の形式も異なります。 別の画像フォーマットで返すには Imagick::setImageFormat() を使用します。</p>
		 * @return string <p>画像を文字列で返します。失敗した場合は ImagickException をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getimagesblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagesBlob(): string {}

		/**
		 * オブジェクトのインターレース方式を取得する
		 * <p>オブジェクトのインターレース方式を取得します。</p>
		 * @return int <p>インターレース方式 を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function getInterlaceScheme(): int {}

		/**
		 * 現在アクティブな画像のインデックスを取得する
		 * <p>Imagick オブジェクト内で現在アクティブな画像のインデックスを取得します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>スタック内の画像のインデックスを含む整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getiteratorindex.php
		 * @see Imagick::setIteratorIndex(), Imagick::getImageIndex(), Imagick::setImageIndex()
		 * @since PECL imagick 2.0.0
		 */
		public function getIteratorIndex(): int {}

		/**
		 * オブジェクト内の画像の数を返す
		 * <p>Imagick オブジェクトに関連付けられている画像の数を返します。</p>
		 * @return int <p>Imagick オブジェクトに関連付けられている画像の数を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getnumberimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function getNumberImages(): int {}

		/**
		 * 指定したキーに対応する値を返す
		 * <p>オブジェクト内の指定したキーに対応する値を返します。</p>
		 * @param string $key <p>オプションの名前。</p>
		 * @return string <p>指定したキーに対応する値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getoption.php
		 * @since PECL imagick 2.0.0
		 */
		public function getOption(string $key): string {}

		/**
		 * ImageMagick パッケージ名を返す
		 * <p>ImageMagick パッケージ名を返します。</p>
		 * @return string <p>ImageMagick パッケージ名を文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getpackagename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPackageName(): string {}

		/**
		 * ページのジオメトリを返す
		 * <p>Imagick オブジェクトに関連付けられたページのジオメトリを返します。 "width"、"height"、"x" そして "y" というキーを持つ連想配列となります。</p>
		 * @return array <p>Imagick オブジェクトに関連付けられたページのジオメトリを返します。 "width"、"height"、"x" そして "y" というキーを持つ連想配列となります。 エラー時に ImagickException をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.getpage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPage(): array {}

		/**
		 * MagickPixelIterator を返す
		 * <p>MagickPixelIterator を返します。</p>
		 * @return ImagickPixelIterator <p>成功した場合に ImagickPixelIterator を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getpixeliterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPixelIterator(): \ImagickPixelIterator {}

		/**
		 * 画像セクションの ImagickPixelIterator を取得する
		 * <p>画像セクションの ImagickPixelIterator を取得します。</p>
		 * @param int $x <p>範囲の x 座標。</p>
		 * @param int $y <p>範囲の y 座標。</p>
		 * @param int $columns <p>範囲の幅。</p>
		 * @param int $rows <p>範囲の高さ。</p>
		 * @return ImagickPixelIterator <p>画像セクションの ImagickPixelIterator を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getpixelregioniterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPixelRegionIterator(int $x, int $y, int $columns, int $rows): \ImagickPixelIterator {}

		/**
		 * ポイントサイズを取得する
		 * <p>オブジェクトのポイントサイズプロパティを返します。 このメソッドは、ImageMagick バージョン 6.3.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return float <p>ポイントサイズを表す <code>float</code> 型の値を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getpointsize.php
		 * @see Imagick::setPointSize()
		 * @since No version information available, might only be in Git
		 */
		public function getPointSize(): float {}

		/**
		 * Description
		 * <p>Returns the ImageMagick quantum range as an integer.</p>
		 * @return int
		 * @link https://php.net/manual/ja/imagick.getquantum.php
		 * @since No version information available, might only be in Git
		 */
		public static function getQuantum(): int {}

		/**
		 * quantum depth を取得する
		 * <p>Imagick quantum depth を文字列で返します。</p>
		 * @return array <p>Imagick quantum depth を文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getquantumdepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getQuantumDepth(): array {}

		/**
		 * Imagick quantum range を返す
		 * <p>Imagick インスタンスの quantum range を文字列で返します。</p>
		 * @return array <p>quantum range を連想配列で返します。 <code>integer</code> (<i>"quantumRangeLong"</i>) と <code>string</code> (<i>"quantumRangeString"</i>) が含まれます。</p>
		 * @link https://php.net/manual/ja/imagick.getquantumrange.php
		 * @since PECL imagick 2.0.0
		 */
		public function getQuantumRange(): array {}

		/**
		 * Description
		 * <p>Get the StringRegistry entry for the named key or false if not set.</p>
		 * @param string $key <p>The entry to get.</p>
		 * @return string
		 * @link https://php.net/manual/ja/imagick.getregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function getRegistry(string $key): string {}

		/**
		 * ImageMagick のリリース日を返す
		 * <p>ImageMagick のリリース日を文字列で返します。</p>
		 * @return string <p>ImageMagick のリリース日を文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getreleasedate.php
		 * @since PECL imagick 2.0.0
		 */
		public function getReleaseDate(): string {}

		/**
		 * 指定したリソースのメモリ使用状況を返す
		 * <p>指定したリソースのメモリ使用状況をメガバイト単位で返します。</p>
		 * @param int $type <p>リソース型定数 の一覧を参照ください。</p>
		 * @return int <p>指定したリソースのメモリ使用状況をメガバイト単位で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getresource.php
		 * @since PECL imagick 2.0.0
		 */
		public function getResource(int $type): int {}

		/**
		 * 指定したリソースの制限を返す
		 * <p>指定したリソースの制限を返します。</p>
		 * @param int $type <p>リソース型定数 の一覧を参照ください。</p>
		 * @return int <p>指定したリソースの制限をメガバイト単位で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getresourcelimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function getResourceLimit(int $type): int {}

		/**
		 * 水平方向および垂直方向のサンプリング係数を取得する
		 * <p>水平方向および垂直方向のサンプリング係数を取得します。</p>
		 * @return array <p>画像の水平方向および垂直方向のサンプリング係数を含む連想配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.getsamplingfactors.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSamplingFactors(): array {}

		/**
		 * Returns the size associated with the Imagick object
		 * <p>Get the size in pixels associated with the Imagick object, previously set by <code>Imagick::setSize()</code>.</p><p><b>注意</b>:</p><p>This method just returns the size that was set using <code>Imagick::setSize()</code>. If you want to get the actual width / height of the image, use <code>Imagick::getImageWidth()</code> and <code>Imagick::getImageHeight()</code>.</p>
		 * @return array <p>Returns the size associated with the Imagick object as an array with the keys "columns" and "rows".</p>
		 * @link https://php.net/manual/ja/imagick.getsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSize(): array {}

		/**
		 * サイズのオフセットを返す
		 * <p>Imagick オブジェクトのサイズのオフセットを返します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return int <p>Imagick オブジェクトのサイズのオフセットを返します。</p>
		 * @link https://php.net/manual/ja/imagick.getsizeoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSizeOffset(): int {}

		/**
		 * ImageMagick API のバージョンを返す
		 * <p>ImageMagick API のバージョンを文字列と数値で返します。</p>
		 * @return array <p>ImageMagick API のバージョンを文字列と数値で返します。</p>
		 * @link https://php.net/manual/ja/imagick.getversion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getVersion(): array {}

		/**
		 * 画像内の色を置換する
		 * <p>画像内の色を、Hald ルックアップテーブルを使って置換します。 Hald 画像を作るには HALD カラーコーダーを使います。</p>
		 * @param \Imagick $clut <p>Hald ルックアップ画像を含む Imagick オブジェクト。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.haldclutimage.php
		 * @since No version information available, might only be in Git
		 */
		public function haldClutImage(\Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * オブジェクトが次の画像を保持しているかどうかを調べる
		 * <p>リスト内でひとつ先に進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b> を返します。</p>
		 * @return bool <p>リスト内でひとつ先に進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b>、していなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.hasnextimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function hasNextImage(): bool {}

		/**
		 * オブジェクトが前の画像を保持しているかどうかを調べる
		 * <p>リスト内で逆方向にひとつ進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b> を返します。</p>
		 * @return bool <p>リスト内で逆方向にひとつ進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b>、していなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.haspreviousimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function hasPreviousImage(): bool {}

		/**
		 * Description
		 * <p>Replaces any embedded formatting characters with the appropriate image property and returns the interpreted text. See http://www.imagemagick.org/script/escape.php for escape sequences.</p>
		 * @param string $embedText <p>A string containing formatting sequences e.g. "Trim box: %@ number of unique colors: %k".</p>
		 * @return string <p>Returns format失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/imagick.identifyformat.php
		 * @since No version information available, might only be in Git
		 */
		public function identifyFormat(string $embedText): string {}

		/**
		 * 画像を識別し、属性を取得する
		 * <p>画像を識別し、属性を返します。属性には画像の幅や高さ、サイズなどが含まれます。</p>
		 * @param bool $appendRawOutput <p><b><code>TRUE</code></b> の場合、生の出力が配列に追加されます。</p>
		 * @return array <p>画像を識別し、属性を返します。属性には画像の幅や高さ、サイズなどが含まれます。</p>
		 * @link https://php.net/manual/ja/imagick.identifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function identifyImage(bool $appendRawOutput = FALSE): array {}

		/**
		 * 新しい画像をコピーとして作成する
		 * <p>既存の画像をコピーして新しい画像を作成します。 既存の画像のピクセルを、指定したパーセンテージで "内破" します。</p>
		 * @param float $radius <p>内破処理の半径。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.implodeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function implodeImage(float $radius): bool {}

		/**
		 * 画像のピクセルをインポートする
		 * <p>配列から画像にピクセルをインポートします。<code>map</code> は、通常は 'RGB' です。このメソッドのパラメータには次の制約があります。配列内のピクセルの量が、 <code>width</code> x <code>height</code> x mapの長さ と一致しなければなりません。 このメソッドは、ImageMagick バージョン 6.4.5 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $x <p>画像の x 位置。</p>
		 * @param int $y <p>画像の y 位置。</p>
		 * @param int $width <p>画像の幅。</p>
		 * @param int $height <p>画像の高さ。</p>
		 * @param string $map <p>ピクセルの並び順を表す文字列。たとえば <i>RGB</i> のようになります。以下の文字を任意の順で組み合わせることができます。 R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.</p>
		 * @param int $storage <p>ピクセルの格納方式。 pixel 定数 の一覧を参照ください。</p>
		 * @param array $pixels <p>ピクセルの配列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.importimagepixels.php
		 * @since No version information available, might only be in Git
		 */
		public function importImagePixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool {}

		/**
		 * Description
		 * <p>Implements the inverse discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Imagick $complement <p>The second image to combine with this one to form either the magnitude / phase or real / imaginary image pair.</p>
		 * @param bool $magnitude <p>If true, combine as magnitude / phase pair otherwise a real / imaginary image pair.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.inversefouriertransformimage.php
		 * @since No version information available, might only be in Git
		 */
		public function inverseFourierTransformImage(\Imagick $complement, bool $magnitude): bool {}

		/**
		 * ラベルを画像に追加する
		 * <p>ラベルを画像に追加します。</p>
		 * @param string $label <p>追加するラベル。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.labelimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function labelImage(string $label): bool {}

		/**
		 * 画像のレベルを調節する
		 * <p>画像のレベルを調整します。 指定した白と黒の範囲にある色を、利用可能な色の範囲全体に拡大します。 黒の点、中間点、白の点をパラメータで指定します。 黒の点は、画像の中で一番暗い色を表します。 これより暗い色の点はゼロに設定されます。 中間点は、画像に適用するガンマ補正を指定します。 黒の点は、画像の中で一番明るい色を表します。 これより明るい色の点は最大値に設定されます。</p>
		 * @param float $blackPoint <p>画像の黒の点。</p>
		 * @param float $gamma <p>ガンマ値。</p>
		 * @param float $whitePoint <p>画像の白の点。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.levelimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function levelImage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像の輝度を引き伸ばして飽和させる
		 * <p>画像の輝度を引き伸ばして飽和させます。</p>
		 * @param float $blackPoint <p>画像の黒の点。</p>
		 * @param float $whitePoint <p>画像の白の点。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.linearstretchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function linearStretchImage(float $blackPoint, float $whitePoint): bool {}

		/**
		 * 画像を動かす
		 * <p>このメソッドは、liquid rescale という方法で画像を拡大・縮小します。 このメソッドは、seam carving という技術を実装したものです。 このメソッドを期待通りに動作させるには、liblqr サポートを含めて ImageMagick をコンパイルしなければなりません。 このメソッドは、ImageMagick バージョン 6.3.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $width <p>変更後のサイズの幅。</p>
		 * @param int $height <p>変更後のサイズの高さ。</p>
		 * @param float $delta_x <p>seam が x 軸をどれだけ横切るか。 0 を渡すと seam が直線になります。</p>
		 * @param float $rigidity <p>直線でない seam のバイアスを導入します。このパラメータは通常は 0 です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.liquidrescaleimage.php
		 * @see Imagick::resizeImage()
		 * @since No version information available, might only be in Git
		 */
		public function liquidRescaleImage(int $width, int $height, float $delta_x, float $rigidity): bool {}

		/**
		 * Description
		 * <p>List all the registry settings. Returns an array of all the key/value pairs in the registry</p>
		 * @return array <p>An array containing the key/values from the registry.</p>
		 * @link https://php.net/manual/ja/imagick.listregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function listRegistry(): array {}

		/**
		 * 画像を 2 倍に比例拡大する
		 * <p>画像を元のサイズの 2 倍に比例拡大します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.magnifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function magnifyImage(): bool {}

		/**
		 * 画像の色を、参照画像の中の最も近い色に置き換える
		 * @param \Imagick $map
		 * @param bool $dither
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.mapimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function mapImage(\Imagick $map, bool $dither): bool {}

		/**
		 * 色の透明度を変更する
		 * <p>対象となるピクセルとその近傍の透明度を変更します。 <b><code>FillToBorderMethod</code></b> を指定した場合は、 画像の描画色に該当しない近傍ピクセルについても透明度を変更します。</p>
		 * @param float $alpha <p>不透明度レベル。1.0 は完全な不透明、0.0 は完全な透明を表します。</p>
		 * @param float $fuzz <p>画像の fuzz 値。 どの程度の色を「同じ色」とみなすかを表します。</p>
		 * @param mixed $bordercolor <p>輪郭の色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param int $x <p>操作の開始位置の x 座標。</p>
		 * @param int $y <p>操作の開始位置の y 座標。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.mattefloodfillimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function matteFloodfillImage(float $alpha, float $fuzz, $bordercolor, int $x, int $y): bool {}

		/**
		 * デジタルフィルタを適用する
		 * <p>デジタルフィルタを適用してノイジーな画像の品質を向上させます。 各ピクセルの内容を、radius で定義した近傍ピクセルの中央値で置き換えます。</p>
		 * @param float $radius <p>近傍ピクセルの半径。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.medianfilterimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function medianFilterImage(float $radius): bool {}

		/**
		 * 画像のレイヤーをマージする
		 * <p>画像のレイヤーをひとつにまとめます。このメソッドは、PSD のように複数レイヤーに対応した画像フォーマットを扱うときに便利です。 マージ処理は <code>layer_method</code> で制御します。ここにはレイヤーをマージする方法を定義します。 このメソッドは、ImageMagick バージョン 6.3.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $layer_method <p><b><code>Imagick::LAYERMETHOD_&#42;</code></b> 定数のいずれか。</p>
		 * @return Imagick <p>マージした画像を含む Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.mergeimagelayers.php
		 * @see Imagick::flattenImages()
		 * @since PECL imagick 2.1.0
		 */
		public function mergeImageLayers(int $layer_method): \Imagick {}

		/**
		 * 画像をその半分のサイズに比例縮小する
		 * <p>画像のサイズを元の半分に比例縮小します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.minifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function minifyImage(): bool {}

		/**
		 * 明度、飽和度、色相を制御する
		 * <p>画像の明度、飽和度、色相を制御します。 色相は、現在位置からの絶対回転角のパーセンテージで表します。 たとえば 50 の場合は反時計回りに 90 度の回転を表します。 また 150 の場合は時計回りの 90 度の回転、0 および 200 はともに 180 度の回転を表します。</p>
		 * @param float $brightness
		 * @param float $saturation
		 * @param float $hue
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.modulateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function modulateImage(float $brightness, float $saturation, float $hue): bool {}

		/**
		 * 合成画像を作成する
		 * <p>複数の画像を合成して画像を作成します。 合成画像上で、画像の名前でタイル状に並べられます。 またオプションで各タイルの直下に画像を置くこともできます。</p>
		 * @param \ImagickDraw $draw <p>フォント名、サイズ、色をこのオブジェクトから取得します。</p>
		 * @param string $tile_geometry <p>行単位、ページ単位のタイル数 (例 6x4+0+0)。</p>
		 * @param string $thumbnail_geometry <p>各サムネイルの画像サイズと枠線のサイズ (例 120x120+4+3&gt;)。</p>
		 * @param int $mode <p>サムネイルのフレームモード。 モンタージュモード定数 を参照ください。</p>
		 * @param string $frame <p>画像を枠線で囲みます (例 15x15+3+3)。 枠の色は、サムネイルのマット色となります。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.montageimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function montageImage(\ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): \Imagick {}

		/**
		 * 複数の画像をモーフィングする
		 * <p>複数の画像をモーフィングします。 それぞれの画像のピクセルとサイズが線形補間され、 ある画像から次の画像へと変形していきます。</p>
		 * @param int $number_frames <p>生成する中間画像の数。</p>
		 * @return Imagick <p>このメソッドは、成功した場合に新しい Imagick オブジェクトを返します。 エラー時に <b>ImagickException</b> をスローします。</p>
		 * @link https://php.net/manual/ja/imagick.morphimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function morphImages(int $number_frames): \Imagick {}

		/**
		 * Description
		 * <p>Applies a user supplied kernel to the image according to the given morphology method.</p>
		 * @param int $morphologyMethod <p>Which morphology method to use one of the \Imagick::MORPHOLOGY_&#42; constants.</p>
		 * @param int $iterations <p>The number of iteration to apply the morphology function. A value of -1 means loop until no change found. How this is applied may depend on the morphology method. Typically this is a value of 1.</p>
		 * @param \ImagickKernel $ImagickKernel
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.morphology.php
		 * @since No version information available, might only be in Git
		 */
		public function morphology(int $morphologyMethod, int $iterations, \ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像からモザイクを作成する
		 * <p>画像シーケンスをはめ込み合成して単一の画像にします。 シーケンス内の各画像を、画像のページオフセットで指定した位置に合成したものを返します。</p>
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.mosaicimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function mosaicImages(): \Imagick {}

		/**
		 * モーションブラーをシミュレートする
		 * <p>モーションブラーをシミュレートします。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、MotionBlurImage() が適切な半径を自動的に設定します。 angle にはぼかしをかける角度を指定します。</p>
		 * @param float $radius <p>ガウス演算の半径。ピクセル単位で指定し、中心は計算に入れません。</p>
		 * @param float $sigma <p>ガウス演算の標準偏差。ピクセル単位で指定します。</p>
		 * @param float $angle <p>この角度で効果を適用します。</p>
		 * @param int $channel <p>そのチャンネルモードで使用可能な任意のチャンネル定数を指定します。 複数を指定する場合はビット演算子を使用します。 チャンネル定数 の一覧を参照ください。 この引数が有効になるのは、ImageMagick バージョン 6.4.4 以降で Imagick をコンパイルした場合のみです。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.motionblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function motionBlurImage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像の色を打ち消す
		 * <p>画像の色を打ち消します。グレースケールオプションを指定すると、 画像内のグレースケール値のみを打ち消します。</p>
		 * @param bool $gray <p>画像内のグレースケールのみを打ち消すのかどうか。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.negateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function negateImage(bool $gray, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 新しい画像を作成する
		 * <p>新しい画像を作成し、ImagickPixel の値を背景色として関連付けます。</p>
		 * @param int $cols <p>新しい画像のカラム数。</p>
		 * @param int $rows <p>新しい画像の行数。</p>
		 * @param mixed $background <p>この画像で使用する背景色。</p>
		 * @param string $format <p>画像フォーマット。このパラメータは Imagick バージョン 2.0.1 で追加されました。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.newimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function newImage(int $cols, int $rows, $background, string $format = NULL): bool {}

		/**
		 * 新しい画像を作成する
		 * <p>新しい画像を、ImageMagick 疑似フォーマットを使用して作成します。</p>
		 * @param int $columns <p>新しい画像のカラム数。</p>
		 * @param int $rows <p>新しい画像の行数。</p>
		 * @param string $pseudoString <p>疑似画像定義を含む文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.newpseudoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPseudoImage(int $columns, int $rows, string $pseudoString): bool {}

		/**
		 * 次の画像に移動する
		 * <p>画像リスト内の次の画像を Imagick オブジェクトに関連付けます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.nextimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function nextImage(): bool {}

		/**
		 * カラー画像のコントラストを強調する
		 * <p>カラー画像のコントラストを強調します。 ピクセルの色を、とりうる値の範囲全体に拡張します。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.normalizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function normalizeImage(int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 油絵をシミュレートする
		 * <p>油絵風の効果を施すフィルタを適用します。 各ピクセルが、指定した半径内の周囲の中で最もよくあらわれる色に置き換えられます。</p>
		 * @param float $radius <p>近傍円の半径。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.oilpaintimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function oilPaintImage(float $radius): bool {}

		/**
		 * 対象にマッチする任意のピクセルの色を変更する
		 * <p>マッチする任意のピクセルの色を、fill で定義した色に変更します。 このメソッドは、ImageMagick バージョン 6.3.8 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param mixed $target <p>変更したい色をあらわす ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param mixed $fill <p>置き換える色。</p>
		 * @param float $fuzz <p>あいまいさをあらわす量。たとえば、これを 10 に設定すると、 赤色の値が 100 の色と 102 の色は同じものとみなされます。</p>
		 * @param bool $invert <p><b><code>TRUE</code></b> の場合は、対象の色にマッチしないピクセルを変更します。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.opaquepaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function opaquePaintImage($target, $fill, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像の繰り返し部分を削除して最適化する
		 * <p>GIF 形式の画像を、シーケンス内のひとつ前の画像と比較します。 必要最小限の画像で各フレームを置き換え、結果のアニメーションはそのままとなるようにします。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.optimizeimagelayers.php
		 * @see Imagick::compareImageLayers(), Imagick::writeImages(), Imagick::writeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function optimizeImageLayers(): bool {}

		/**
		 * 配列ディザリングを行う
		 * <p>定義済みのディザリング閾値マップにもとづいた、複数の強度レベルによる配列ディザリングを行います。 入力の引数に応じて、各チャネルで異なるレベルを使用することができます。 このメソッドは、ImageMagick バージョン 6.3.1 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $threshold_map <p>使用するディザリング閾値マップを含む文字列。</p>
		 * @param int $channel <p>チャネルモードに応じたチャネル定数を指定します。 複数のチャネルに適用するには、定数をビット演算子で組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.orderedposterizeimage.php
		 * @since PECL imagick 2.2.2
		 */
		public function orderedPosterizeImage(string $threshold_map, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 色にマッチするピクセルを変更する
		 * <p>対象にマッチするピクセルとその近傍の色を変更します。 ImageMagick 6.3.8 以降はこのメソッドは非推奨となりました。かわりに <code>Imagick::floodfillPaintImage()</code> を使用します。</p>
		 * @param mixed $fill <p>塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param float $fuzz <p>fuzz の量。たとえば fuzz を 10 にすると、 強度 100 の赤と 102 の赤は同じ色とみなします。</p>
		 * @param mixed $bordercolor <p>境界色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param int $x <p>floodfill の開始位置の X 座標。</p>
		 * @param int $y <p>floodfill の開始位置の Y 座標。</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.paintfloodfillimage.php
		 * @since PECL imagick 2.1.0
		 */
		public function paintFloodfillImage($fill, float $fuzz, $bordercolor, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 色にマッチするピクセルを変更する
		 * <p>色にマッチするピクセルを、塗りつぶし色に変更します。</p>
		 * @param mixed $target <p>この対象色を変更すると、画像の塗りつぶし色が変わります。 ImagickPixel オブジェクトあるいは文字列で対象色を指定します。</p>
		 * @param mixed $fill <p>塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。</p>
		 * @param float $fuzz <p>画像の fuzz 値。 どの程度の色を「同じ色」とみなすかを表します。</p>
		 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.paintopaqueimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function paintOpaqueImage($target, $fill, float $fuzz, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 色にマッチするピクセルを塗りつぶし色に変更する
		 * <p>塗りつぶし色に指定した色にマッチするピクセルを変更します。</p>
		 * @param mixed $target <p>この対象色を変更して、画像の不透明度を指定します。</p>
		 * @param float $alpha <p>不透明度レベル。1.0 は完全な不透明、0.0 は完全な透明を表します。</p>
		 * @param float $fuzz <p>画像の fuzz 値。 どの程度の色を「同じ色」とみなすかを表します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.painttransparentimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function paintTransparentImage($target, float $alpha, float $fuzz): bool {}

		/**
		 * 画像の基本属性を取得する
		 * <p>このメソッドを使用すると、画像全体を読み込まなくても 画像の幅や高さ、サイズそしてフォーマットを取得できます。</p>
		 * @param string $filename <p>情報を読み込むファイル名。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.pingimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function pingImage(string $filename): bool {}

		/**
		 * 手早く属性を取得する
		 * <p>このメソッドを使用すると、画像全体を読み込まなくても 画像の幅や高さ、サイズそしてフォーマットを取得できます。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $image <p>画像を含む文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.pingimageblob.php
		 * @see Imagick::pingImage(), Imagick::pingImageFile(), Imagick::readImage(), Imagick::readImageBlob(), Imagick::readImageFile()
		 * @since PECL imagick 2.0.0
		 */
		public function pingImageBlob(string $image): bool {}

		/**
		 * 画像の基本属性を手軽に取得する
		 * <p>このメソッドを使用すると、画像全体を読み込まなくても 画像の幅や高さ、サイズそしてフォーマットを取得できます。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param resource $filehandle <p>開いている画像のファイルハンドル。</p>
		 * @param string $fileName <p>オプションで指定する、この画像のファイル名。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.pingimagefile.php
		 * @see Imagick::pingImage(), Imagick::pingImageBlob(), Imagick::readImage(), Imagick::readImageBlob(), Imagick::readImageFile()
		 * @since PECL imagick 2.0.0
		 */
		public function pingImageFile($filehandle, string $fileName = NULL): bool {}

		/**
		 * ポラロイド写真をシミュレートする
		 * <p>ポラロイド写真をシミュレートします。 このメソッドは、ImageMagick バージョン 6.3.2 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param \ImagickDraw $properties <p>ポラロイドプロパティ。</p>
		 * @param float $angle <p>ポラロイド角度。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.polaroidimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function polaroidImage(\ImagickDraw $properties, float $angle): bool {}

		/**
		 * 指定した色数まで画像を減色する
		 * <p>指定した色数まで画像を減色します。</p>
		 * @param int $levels
		 * @param bool $dither
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.posterizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function posterizeImage(int $levels, bool $dither): bool {}

		/**
		 * 画像処理用の適切なパラメータを手早く取得する
		 * <p>指定した画像の 9 枚のサムネイルをタイル状に並べ、 さまざまな強度で画像処理を適用します。 これは、画像処理操作のパラメータの適切な値を手早く知りたい場合に便利です。</p>
		 * @param int $preview <p>プレビュー形式。プレビュー形式の定数 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.previewimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function previewImages(int $preview): bool {}

		/**
		 * オブジェクト内の前の画像に移動する
		 * <p>画像リスト内の前の画像を Imagick オブジェクトに関連付けます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.previousimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function previousImage(): bool {}

		/**
		 * 画像のプロファイルを追加あるいは削除する
		 * <p>ICC、IPTC あるいは汎用のプロファイルを画像に追加あるいは削除します。 profile が NULL の場合は画像からプロファイルを削除し、 それ以外の場合は追加します。 name に '&#42;'、profile に NULL を指定すると、画像からすべてのプロパティを削除します。</p>
		 * @param string $name
		 * @param string $profile
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.profileimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function profileImage(string $name, string $profile): bool {}

		/**
		 * 参照画像内の色を解析する
		 * @param int $numberColors
		 * @param int $colorspace
		 * @param int $treedepth
		 * @param bool $dither
		 * @param bool $measureError
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.quantizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function quantizeImage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

		/**
		 * 画像シーケンス内の色を解析する
		 * @param int $numberColors
		 * @param int $colorspace
		 * @param int $treedepth
		 * @param bool $dither
		 * @param bool $measureError
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.quantizeimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function quantizeImages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

		/**
		 * フォントメトリクスを表す配列を返す
		 * <p>フォントメトリクスを表す、多次元配列を返します。</p>
		 * @param \ImagickDraw $properties <p>フォントのプロパティを含む ImagickDraw オブジェクト。</p>
		 * @param string $text <p>テキスト。</p>
		 * @param bool $multiline <p>マルチラインパラメータ。空にすると自動検出します。</p>
		 * @return array <p>フォントメトリクスを表す、多次元配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.queryfontmetrics.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFontMetrics(\ImagickDraw $properties, string $text, bool $multiline = NULL): array {}

		/**
		 * 設定したフォントを返す
		 * <p>設定したフォントを返します。</p>
		 * @param string $pattern <p>クエリパターン。</p>
		 * @return array <p>フォントを含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.queryfonts.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFonts(string $pattern = "*"): array {}

		/**
		 * Imagick がサポートするフォーマットを返す
		 * <p>Imagick がサポートするフォーマットを返します。</p>
		 * @param string $pattern
		 * @return array <p>Imagick がサポートするフォーマットを含む配列を返します。</p>
		 * @link https://php.net/manual/ja/imagick.queryformats.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFormats(string $pattern = "*"): array {}

		/**
		 * 画像にラジアルブラーを施す
		 * <p>画像にラジアルブラーを施します。</p>
		 * @param float $angle
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.radialblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function radialBlurImage(float $angle, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 三次元のボタン風の効果をシミュレートする
		 * <p>画像の輪郭を明るくしたり暗くしたりすることによって、 三次元のボタン風の効果をシミュレートします。 raise_info のメンバ width および height が、 垂直方向および水平方向の効果の輪郭を定義します。</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @param bool $raise
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.raiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function raiseImage(int $width, int $height, int $x, int $y, bool $raise): bool {}

		/**
		 * コントラストの高い 2 色の画像を作成する
		 * <p>個々のピクセルの輝度を閾値と比較し、その色を変更します。 変換結果は、コントラストの高い 2 色の画像となります。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $low <p>低い点。</p>
		 * @param float $high <p>高い点。</p>
		 * @param int $channel <p>そのモードに対応した任意のチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数をビット演算子で連結します。 この チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.randomthresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function randomThresholdImage(float $low, float $high, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * ファイルから画像を読み込む
		 * <p>ファイルから画像を読み込みます。</p>
		 * @param string $filename
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.readimage.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function readImage(string $filename): bool {}

		/**
		 * バイナリ文字列から画像を読み込む
		 * <p>バイナリ文字列から画像を読み込みます。</p>
		 * @param string $image
		 * @param string $filename
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.readimageblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function readImageBlob(string $image, string $filename = NULL): bool {}

		/**
		 * オープンしているファイルハンドルから画像を読み込む
		 * <p>オープンしているファイルハンドルから画像を読み込みます。</p>
		 * @param resource $filehandle
		 * @param string $fileName
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.readimagefile.php
		 * @since PECL imagick 2.0.0
		 */
		public function readImageFile($filehandle, string $fileName = NULL): bool {}

		/**
		 * Description
		 * <p>Reads image from an array of filenames. All the images are held in a single Imagick object.</p>
		 * @param array $filenames
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.readimages.php
		 * @since No version information available, might only be in Git
		 */
		public function readimages(array $filenames): bool {}

		/**
		 * 画像の色を変更する
		 * <p>画像の色を変換します。 このメソッドは可変サイズの行列に対応していますが、通常は RGBA なら 5x5、 CMYK なら 6x6 の行列を使います。最後の行は、正規化した値でなければなりません。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param array $matrix <p>色の値を含む行列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.recolorimage.php
		 * @see Imagick::displayImage()
		 * @since No version information available, might only be in Git
		 */
		public function recolorImage(array $matrix): bool {}

		/**
		 * 画像の輪郭をなめらかにする
		 * <p>画像の輪郭をなめらかにします。縁の情報は保持します。 各ピクセルの内容を近傍の一番近い値で置き換えるというアルゴリズムです。 近傍は半径で定義します。radius に 0 を指定すると、 Imagick::reduceNoiseImage() が適切な半径を自動的に設定します。</p>
		 * @param float $radius
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.reducenoiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function reduceNoiseImage(float $radius): bool {}

		/**
		 * 画像の色を再配置する
		 * <p>画像の色を、<code>replacement</code> で定義したものに置き換えます。 色の変換は、もっとも近い色で行われます。このメソッドは、ImageMagick バージョン 6.4.5 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param \Imagick $replacement <p>置き換える色を含む Imagick オブジェクト。</p>
		 * @param int $DITHER <p>ディザメソッド定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.remapimage.php
		 * @since No version information available, might only be in Git
		 */
		public function remapImage(\Imagick $replacement, int $DITHER): bool {}

		/**
		 * 画像リストから画像を削除する
		 * <p>画像リストから画像を削除します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.removeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function removeImage(): bool {}

		/**
		 * 指定した名前の画像プロファイルを削除してそれを返す
		 * <p>指定した名前の画像プロファイルを削除してそれを返します。</p>
		 * @param string $name
		 * @return string <p>画像のプロファイル名を返します。</p>
		 * @link https://php.net/manual/ja/imagick.removeimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function removeImageProfile(string $name): string {}

		/**
		 * それまでのすべての描画コマンドをレンダリングする
		 * <p>それまでのすべての描画コマンドをレンダリングします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.render.php
		 * @since PECL imagick 2.0.0
		 */
		public function render(): bool {}

		/**
		 * 画像を指定した解像度にリサンプリングする
		 * <p>画像を指定した解像度にリサンプリングします。</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @param int $filter
		 * @param float $blur
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.resampleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function resampleImage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool {}

		/**
		 * 画像のページをリセットする
		 * <p>ページの定義は文字列で、書式は WxH+x+y となります。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $page <p>ページ定義。たとえば <i>7168x5147+0+0</i> のようになります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.resetimagepage.php
		 * @since No version information available, might only be in Git
		 */
		public function resetImagePage(string $page): bool {}

		/**
		 * 画像のサイズを変更する
		 * <p>指定した大きさと フィルタ で、画像のサイズを変更します。</p><p><b>注意</b>:  パラメータ <code>bestfit</code> の挙動は Imagick 3.0.0 で変わりました。 これより前のバージョンでは、200x150 の画像に対して 400x400 を指定した場合は何もせずそのままになっていました。 Imagick 3.0.0 以降では、この画像は 400x300 に拡大されます。これが、 指定したサイズに対して「ベストフィット」する大きさだからです。 <code>bestfit</code> を使う場合は、幅と高さの両方を指定しなければなりません。 </p>
		 * @param int $columns <p>画像の幅。</p>
		 * @param int $rows <p>画像の高さ。</p>
		 * @param int $filter <p>フィルタ定数 の一覧を参照ください。</p>
		 * @param float $blur <p>blur 要素。&gt; 1 はぼやけた状態、&lt; 1 はシャープな状態を表します。</p>
		 * @param bool $bestfit <p>オプションの fit パラメータ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.resizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function resizeImage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = false): bool {}

		/**
		 * 画像を補正する
		 * <p>x および y を指定して画像を補正します。</p>
		 * @param int $x <p>X オフセット。</p>
		 * @param int $y <p>Y オフセット。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.rollimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function rollImage(int $x, int $y): bool {}

		/**
		 * 画像を回転する
		 * <p>指定した角度だけ画像を回転させます。回転によって生じる空き領域は、 背景色で埋められます。</p>
		 * @param mixed $background <p>背景色。</p>
		 * @param float $degrees <p>画像を回転させる度数。時計回りに数えます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.rotateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function rotateImage($background, float $degrees): bool {}

		/**
		 * Description
		 * <p>Rotational blurs an image.</p>
		 * @param float $angle <p>The angle to apply the blur over.</p>
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.rotationalblurimage.php
		 * @since No version information available, might only be in Git
		 */
		public function rotationalBlurImage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像の角を丸める
		 * <p>画像の角を丸めます。 最初の 2 つのパラメータで丸める程度を制御し、 のこりの 3 つのパラメータで丸め処理をより細やかにチューニングします。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $x_rounding <p>x 方向の丸め。</p>
		 * @param float $y_rounding <p>y 方向の丸め。</p>
		 * @param float $stroke_width <p>線幅。</p>
		 * @param float $displace <p>image displace</p>
		 * @param float $size_correction <p>サイズ補正。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.roundcorners.php
		 * @since PECL imagick 2.0.0
		 */
		public function roundCorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}

		/**
		 * ピクセルのサンプリングによって画像の倍率を変更する
		 * <p>ピクセルのサンプリングによって、指定した大きさに画像の倍率を変更します。 他の拡大・縮小メソッドとは異なり、 このメソッドは変更後の画像に新たな色を追加したりしません。</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sampleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sampleImage(int $columns, int $rows): bool {}

		/**
		 * 画像のサイズを変更する
		 * <p>画像のサイズを指定した大きさに変更します。 パラメータに 0 を指定すると、そのパラメータを自動的に計算します。</p><p><b>注意</b>:  パラメータ <code>bestfit</code> の挙動は Imagick 3.0.0 で変わりました。 これより前のバージョンでは、200x150 の画像に対して 400x400 を指定した場合は何もせずそのままになっていました。 Imagick 3.0.0 以降では、この画像は 400x300 に拡大されます。これが、 指定したサイズに対して「ベストフィット」する大きさだからです。 <code>bestfit</code> を使う場合は、幅と高さの両方を指定しなければなりません。 </p>
		 * @param int $cols
		 * @param int $rows
		 * @param bool $bestfit
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.scaleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function scaleImage(int $cols, int $rows, bool $bestfit = false): bool {}

		/**
		 * 画像を分割する
		 * <p>画像を解析し、似ている部分を特定します。このメソッドは、ImageMagick バージョン 6.4.5 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $COLORSPACE <p>COLORSPACE 定数 のいずれか。</p>
		 * @param float $cluster_threshold <p>有効と見なされるために必要な、 hexedra 内の最小ピクセル数を表すパーセンテージ。</p>
		 * @param float $smooth_threshold <p>ヒストグラムからノイズを除去する。</p>
		 * @param bool $verbose <p>識別した区分についての詳細情報を出力するか否か。</p>
		 * @return bool
		 * @link https://php.net/manual/ja/imagick.segmentimage.php
		 * @since No version information available, might only be in Git
		 */
		public function segmentImage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = FALSE): bool {}

		/**
		 * Description
		 * <p>Selectively blur an image within a contrast threshold. It is similar to the unsharpen mask that sharpens everything with contrast above a certain threshold.</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param float $threshold
		 * @param int $channel <p>そのモードで有効なチャネル定数を指定します。 複数のチャネルを適用するには、チャネル定数 をビット演算子で組み合わせます。デフォルトは <b><code>Imagick::CHANNEL_DEFAULT</code></b> です。 チャネル定数 の一覧を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.selectiveblurimage.php
		 * @since No version information available, might only be in Git
		 */
		public function selectiveBlurImage(float $radius, float $sigma, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 画像からチャネルを分離する
		 * <p>画像からチャネルを分離し、グレースケール画像を返します。 channel には、画像の各ピクセルの特定の色コンポーネントを指定します。</p>
		 * @param int $channel <p>どの「チャネル」を戻すか。RGB 以外の色空間の場合でも、定数 CHANNEL_RED、CHANNEL_GREEN、CHANNEL_BLUE を使って第1、第2、第3チャネルを指定できます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.separateimagechannel.php
		 * @since PECL imagick 2.0.0
		 */
		public function separateImageChannel(int $channel): bool {}

		/**
		 * 画像をセピア調にする
		 * <p>画像に特殊効果を施し、セピア調の写真のような画像にします。 threshold には 0 から QuantumRange までの値を指定し、 これがセピア調の効き具合を表します。threshold を 80 にすると、 とりあえずはそれなりの効き目になるでしょう。</p>
		 * @param float $threshold
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sepiatoneimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sepiaToneImage(float $threshold): bool {}

		/**
		 * オブジェクトのデフォルト背景色を設定する
		 * <p>オブジェクトのデフォルト背景色を設定します。</p>
		 * @param mixed $background
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setbackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setBackgroundColor($background): bool {}

		/**
		 * 色空間を設定する
		 * <p>オブジェクトのグローバル色空間の値を設定します。 このメソッドは、ImageMagick バージョン 6.5.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $COLORSPACE <p>COLORSPACE 定数 のひとつ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setcolorspace.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorspace(int $COLORSPACE): bool {}

		/**
		 * オブジェクトのデフォルトの圧縮方式を設定する
		 * <p>オブジェクトのデフォルトの圧縮方式を設定します。</p>
		 * @param int $compression <p>圧縮方式。Imagick::COMPRESSION_&#42; 定数を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setcompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function setCompression(int $compression): bool {}

		/**
		 * オブジェクトのデフォルトの圧縮品質を設定する
		 * <p>オブジェクトのデフォルトの圧縮品質を設定します。</p><p>このメソッドは、たとえば Imagick::newPseudoImage などで作った新しい画像に対してだけ使えるものです。 既存の画像に対しては <code>Imagick::setImageCompressionQuality()</code> を使う必要があります。</p>
		 * @param int $quality
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setcompressionquality.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function setCompressionQuality(int $quality): bool {}

		/**
		 * 画像を読み書きする前にファイル名を設定する
		 * <p>画像を読み書きする前にファイル名を設定します。</p>
		 * @param string $filename
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setfilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFilename(string $filename): bool {}

		/**
		 * Imagick イテレータを最初の画像に設定する
		 * <p>Imagick イテレータを最初の画像に設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setfirstiterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFirstIterator(): bool {}

		/**
		 * フォントを設定する
		 * <p>オブジェクトのフォントプロパティを設定します。 このメソッドは、たとえば caption: pseudo-format のフォントを設定したりする際に使用します。 フォントは、ImageMagick の設定で準備しておくか、あるいは <code>font</code> という名前のファイルが存在しなければなりません。 このメソッドを <code>ImagickDraw::setFont()</code> と混同してはいけません。 こちらは、ある特定の ImagickDraw オブジェクトのフォントを設定するメソッドです。 このメソッドは、ImageMagick バージョン 6.3.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $font <p>フォント名あるいはファイル名。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setfont.php
		 * @see Imagick::getFont(), ImagickDraw::setFont(), ImagickDraw::getFont()
		 * @since PECL imagick 2.1.0
		 */
		public function setFont(string $font): bool {}

		/**
		 * Imagick オブジェクトのフォーマットを設定する
		 * <p>Imagick オブジェクトのフォーマットを設定します。</p>
		 * @param string $format
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFormat(string $format): bool {}

		/**
		 * gravity を設定する
		 * <p>Imagick オブジェクトのグローバル gravity プロパティを設定します。 このメソッドは、ImageMagick バージョン 6.4.0 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $gravity <p>gravity プロパティ。 gravity 定数 の一覧を参照ください。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagick.setgravity.php
		 * @since No version information available, might only be in Git
		 */
		public function setGravity(int $gravity): bool {}

		/**
		 * オブジェクト内の画像を置き換える
		 * <p>現在の画像シーケンスを、replace で指定したオブジェクトの画像で置き換えます。</p>
		 * @param \Imagick $replace <p>置き換える Imagick オブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImage(\Imagick $replace): bool {}

		/**
		 * 画像のアルファチャネルを設定する
		 * <p>画像のアルファチャネルを有効あるいは無効にします。<code>mode</code> には <b><code>Imagick::ALPHACHANNEL_&#42;</code></b> 定数のいずれかを設定します。 このメソッドは、ImageMagick バージョン 6.3.8 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $mode <p><b><code>Imagick::ALPHACHANNEL_&#42;</code></b> 定数のいずれか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagealphachannel.php
		 * @see Imagick::setImageMatte()
		 * @since No version information available, might only be in Git
		 */
		public function setImageAlphaChannel(int $mode): bool {}

		/**
		 * 画像のアーチファクトを設定する
		 * <p>画像にアーチファクトを関連づけます。プロパティとアーチファクトの違いは、 プロパティは public であるのに対してアーチファクトは private であるという点です。 このメソッドは、ImageMagick バージョン 6.5.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $artifact <p>アーチファクトの名前。</p>
		 * @param string $value <p>アーチファクトの値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageartifact.php
		 * @see Imagick::getImageArtifact(), Imagick::deleteImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function setImageArtifact(string $artifact, string $value): bool {}

		/**
		 * Description
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageattribute.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageAttribute(string $key, string $value): bool {}

		/**
		 * 画像の背景色を設定する
		 * <p>画像の背景色を設定します。</p>
		 * @param mixed $background
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagebackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBackgroundColor($background): bool {}

		/**
		 * 画像を折りたたむ任意のメソッドについて画像のバイアスを設定する
		 * <p>画像を折りたたむ任意のメソッド (Imagick::ConvolveImage() など) について画像のバイアスを設定します。</p>
		 * @param float $bias
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagebias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBias(float $bias): bool {}

		/**
		 * Description
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $bias
		 * @return void
		 * @link https://php.net/manual/ja/imagick.setimagebiasquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageBiasQuantum(string $bias): void {}

		/**
		 * 青が一番強い点を設定する
		 * <p>青が一番強い点を設定します。</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageblueprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBluePrimary(float $x, float $y): bool {}

		/**
		 * 画像の前景色を設定する
		 * <p>画像の前景色を設定します。</p>
		 * @param mixed $border <p>前景色。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagebordercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBorderColor($border): bool {}

		/**
		 * 特定の画像チャネルの深度を設定する
		 * <p>特定の画像チャネルの深度を設定します。</p>
		 * @param int $channel
		 * @param int $depth
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagechanneldepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageChannelDepth(int $channel, int $depth): bool {}

		/**
		 * 画像のクリップマスクを設定する
		 * <p>別の Imagick オブジェクトから画像のクリップマスクを設定します。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param \Imagick $clip_mask <p>クリップマスクを含む Imagick オブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageclipmask.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageClipMask(\Imagick $clip_mask): bool {}

		/**
		 * 指定した色マップインデックスの色を設定する
		 * <p>指定した色マップインデックスの色を設定します。</p>
		 * @param int $index
		 * @param \ImagickPixel $color
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagecolormapcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageColormapColor(int $index, \ImagickPixel $color): bool {}

		/**
		 * 画像の色空間を設定する
		 * <p>画像の色空間を設定します。 このメソッドは、新しい画像を作るときに使うものです。 既存の画像の色空間を変更したい場合は、<code>Imagick::transformImageColorspace()</code> を使う必要があります。</p>
		 * @param int $colorspace <p>COLORSPACE 定数のいずれか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagecolorspace.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageColorspace(int $colorspace): bool {}

		/**
		 * 画像の合成演算子を設定する
		 * <p>画像の合成演算子を設定します。Imagick::montageImage() メソッドを使用して画像のサムネイルを作成する方法を指定する際に便利です。</p>
		 * @param int $compose
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagecompose.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageCompose(int $compose): bool {}

		/**
		 * 画像の圧縮を設定する
		 * <p>画像の圧縮を設定します。</p>
		 * @param int $compression <p><b><code>COMPRESSION</code></b> 定数のいずれか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagecompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageCompression(int $compression): bool {}

		/**
		 * 画像の圧縮品質を設定する
		 * <p>画像の圧縮品質を設定します。</p>
		 * @param int $quality <p>画像の圧縮品質を表す整数値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagecompressionquality.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageCompressionQuality(int $quality): bool {}

		/**
		 * 画像の遅延を設定する
		 * <p>画像の遅延を設定します。アニメーション画像の場合、この値は、 今のフレームから次のフレームに移動するまでの時間になります。</p>
		 * @param int $delay <p>画像を表示させる時間を 'ticks' で表した値。 アニメーション GIF の場合は 1 秒間に 100 ticks なので、 20 を設定すると 20/100 秒つまり 1/5 秒ということになります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagedelay.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDelay(int $delay): bool {}

		/**
		 * 画像の深度を設定する
		 * <p>画像の深度を設定します。</p>
		 * @param int $depth
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagedepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDepth(int $depth): bool {}

		/**
		 * 画像の配置方法を設定する
		 * <p>画像の配置方法を設定します。</p>
		 * @param int $dispose
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagedispose.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDispose(int $dispose): bool {}

		/**
		 * 画像のサイズを設定する
		 * <p>画像のサイズ (つまりカラム数と行数) を設定します。</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageextent.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageExtent(int $columns, int $rows): bool {}

		/**
		 * 特定の画像のファイル名を設定する
		 * <p>シーケンス内の特定の画像のファイル名を設定します。</p>
		 * @param string $filename
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagefilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageFilename(string $filename): bool {}

		/**
		 * 特定の画像のフォーマットを設定する
		 * <p>シーケンス内の特定の画像のフォーマットを設定します。</p>
		 * @param string $format <p>画像フォーマットを表す文字列。対応するフォーマットは、 インストールされている ImageMagick に依存します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageFormat(string $format): bool {}

		/**
		 * 画像のガンマを設定する
		 * <p>画像のガンマを設定します。</p>
		 * @param float $gamma
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagegamma.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageGamma(float $gamma): bool {}

		/**
		 * 画像の gravity を設定する
		 * <p>原罪の画像の gravity プロパティを設定します。 このメソッドを使うと、単一の画像シーケンスの gravity プロパティを設定することができます。 このメソッドは、ImageMagick バージョン 6.4.4 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $gravity <p>gravity プロパティ。 gravity 定数 の一覧を参照ください。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagick.setimagegravity.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageGravity(int $gravity): bool {}

		/**
		 * 緑が一番強い点を設定する
		 * <p>緑が一番強い点を設定します。</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagegreenprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageGreenPrimary(float $x, float $y): bool {}

		/**
		 * イテレータの位置を設定する
		 * <p>画像リスト内でのイテレータの位置、index パラメータで指定した場所に設定します。</p><p>このメソッドは非推奨です。 <code>Imagick::setIteratorIndex()</code> を参照ください。</p>
		 * @param int $index <p>イテレータを設定する位置。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageindex.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageIndex(int $index): bool {}

		/**
		 * 画像のインターレース手法を設定する
		 * <p>画像の圧縮を設定します。</p>
		 * @param int $interlace_scheme
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageInterlaceScheme(int $interlace_scheme): bool {}

		/**
		 * 画像のピクセル補間方式を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像のピクセル補間方式を設定します。</p>
		 * @param int $method <p><b><code>Imagick::INTERPOLATE_&#42;</code></b> 定数のいずれか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageinterpolatemethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageInterpolateMethod(int $method): bool {}

		/**
		 * 画像の反復を設定する
		 * <p>アニメーション画像の繰り返し回数を設定します。</p>
		 * @param int $iterations <p>画像をループさせる回数。'0' を指定すると、ずっとループし続けます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageiterations.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageIterations(int $iterations): bool {}

		/**
		 * 画像のマットチャネルを設定する
		 * <p>画像のマットチャネルを設定します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param bool $matte <p>True にするとマットチャネルを有効にし、false の場合は無効にします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagematte.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageMatte(bool $matte): bool {}

		/**
		 * 画像のマット色を設定する
		 * <p>画像のマット色を設定します。</p>
		 * @param mixed $matte
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagemattecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageMatteColor($matte): bool {}

		/**
		 * 画像の不透明度を設定する
		 * <p>画像の不透明度を設定します。このメソッドは、ImageMagick バージョン 6.3.1 以降で Imagick をコンパイルした場合に使用可能です。 このメソッドはすべてのチャネルを操作します。つまり、不透明度を 0.5 にすると、 すべての透明な部分が半透明になるということです。すでに透明になっていない範囲に透明度を追加するには、 Imagick::evaluateImage() を使いましょう。</p>
		 * @param float $opacity <p>透明度。1.0 が完全な不透明で、0.0 が完全な透明です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageOpacity(float $opacity): bool {}

		/**
		 * 画像の方向を設定する
		 * <p>画像の方向を設定します。</p>
		 * @param int $orientation <p>方向定数 のいずれか。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageorientation.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageOrientation(int $orientation): bool {}

		/**
		 * 画像のページのジオメトリを設定する
		 * <p>画像のページのジオメトリを設定します。</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagepage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImagePage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * 指定した名前の画像プロファイルを Imagick オブジェクトに追加する
		 * <p>指定した名前の画像プロファイルを Imagick オブジェクトに追加します。 同じ名前のプロファイルが存在する場合は、それを置き換えます。 このメソッドは Imagick::ProfileImage() メソッドとは異なり、 CMS カラープロファイルは適用しません。</p>
		 * @param string $name
		 * @param string $profile
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageProfile(string $name, string $profile): bool {}

		/**
		 * 画像のプロパティを設定する
		 * <p>指定した名前のプロパティを画像に設定します。 このメソッドは、ImageMagick バージョン 6.3.2 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $name
		 * @param string $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageproperty.php
		 * @see Imagick::getImageProperty()
		 * @since PECL imagick 2.0.0
		 */
		public function setImageProperty(string $name, string $value): bool {}

		/**
		 * 赤が一番強い点を設定する
		 * <p>赤が一番強い点を設定します。</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageredprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageRedPrimary(float $x, float $y): bool {}

		/**
		 * 画像のレンダリング方向を設定する
		 * <p>画像のレンダリング方向を設定します。</p>
		 * @param int $rendering_intent
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagerenderingintent.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageRenderingIntent(int $rendering_intent): bool {}

		/**
		 * 画像の解像度を設定する
		 * <p>画像の解像度を設定します。</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * 画像のシーンを設定する
		 * <p>画像のシーンを設定します。</p>
		 * @param int $scene
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagescene.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageScene(int $scene): bool {}

		/**
		 * 画像の ticks-per-second を設定する
		 * <p>アニメーション画像のフレームを表示する時間を調整します。</p><p><b>注意</b>:</p><p>アニメーション GIF の場合、この関数は秒間の 'image ticks' の数は変更しません。常に 100 です。 そのかわりに、'ticks per second' を変更し、フレームを表示する時間を変更したように見せます。</p><p>たとえば、各フレームを 20 ticks (1/5 秒) ずつ表示させるようにしているアニメーション GIF に対して、この関数の引数に <i>50</i> を渡して呼び出すと、 各フレームの表示時間を 40 ticks (2/5 秒) に変更します。 その結果、元の半分の速さで表示されるようになります。</p>
		 * @param int $ticks_per_second <p>画像を表示させる時間を ticks per second で表した値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagetickspersecond.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageTicksPerSecond(int $ticks_per_second): bool {}

		/**
		 * 画像の型を設定する
		 * <p>画像の型を設定します。</p>
		 * @param int $image_type
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagetype.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageType(int $image_type): bool {}

		/**
		 * 画像の解像度の単位を設定する
		 * <p>画像の解像度の単位を設定します。</p>
		 * @param int $units
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimageunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageUnits(int $units): bool {}

		/**
		 * 画像の仮想ピクセルメソッドを設定する
		 * <p>画像の仮想ピクセルメソッドを設定します。</p>
		 * @param int $method
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagevirtualpixelmethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageVirtualPixelMethod(int $method): bool {}

		/**
		 * 画像の色度が白い点を設定する
		 * <p>画像の色度が白い点を設定します。</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setimagewhitepoint.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageWhitePoint(float $x, float $y): bool {}

		/**
		 * 画像の圧縮を設定する
		 * <p>画像の圧縮を設定します。</p>
		 * @param int $interlace_scheme
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function setInterlaceScheme(int $interlace_scheme): bool {}

		/**
		 * イテレータの位置を設定する
		 * <p>イテレータの位置を、画像リスト内の index で指定した位置に設定します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $index <p>イテレータを設定する場所。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setiteratorindex.php
		 * @see Imagick::getIteratorIndex(), Imagick::getImageIndex(), Imagick::setImageIndex()
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorIndex(int $index): bool {}

		/**
		 * Imagick イテレータを最後の画像に設定する
		 * <p>Imagick イテレータを最後の画像に設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setlastiterator.php
		 * @since PECL imagick 2.0.1
		 */
		public function setLastIterator(): bool {}

		/**
		 * オプションを設定する
		 * <p>ひとつあるいは複数のオプションを設定します。</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setoption.php
		 * @since PECL imagick 2.0.0
		 */
		public function setOption(string $key, string $value): bool {}

		/**
		 * Imagick オブジェクトのページジオメトリを設定する
		 * <p>Imagick オブジェクトのページジオメトリを設定します。</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setpage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setPage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * ポイントサイズを設定する
		 * <p>オブジェクトのポイントサイズプロパティを設定します。このメソッドは、 caption: pseudo-format のフォントサイズを設定するときなどに使います。 このメソッドは、ImageMagick バージョン 6.3.7 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $point_size <p>ポイントサイズ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setpointsize.php
		 * @see Imagick::getPointSize()
		 * @since PECL imagick 2.1.0
		 */
		public function setPointSize(float $point_size): bool {}

		/**
		 * Description
		 * <p>Set a callback that will be called during the processing of the Imagick image.</p>
		 * @param callable $callback <p>The progress function to call. It should return true if image processing should continue, or false if it should be cancelled. The offset parameter indicates the progress and the span parameter indicates the total amount of work needed to be done.</p>   callback  (  <code>mixed</code> <code>$offset</code>  ,  <code>mixed</code> <code>$span</code>  ) : bool   <b>警告</b> <p>The values passed to the callback function are not consistent. In particular the span parameter can increase during image processing. Because of this calculating the percentage complete of an image operation is not trivial.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setprogressmonitor.php
		 * @since No version information available, might only be in Git
		 */
		public function setProgressMonitor(callable $callback): bool {}

		/**
		 * Description
		 * <p>Sets the ImageMagick registry entry named key to value. This is most useful for setting "temporary-path" which controls where ImageMagick creates temporary images e.g. while processing PDFs.</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function setRegistry(string $key, string $value): bool {}

		/**
		 * 画像の解像度を設定する
		 * <p>画像の解像度を設定します。</p>
		 * @param float $x_resolution <p>水平方向の解像度。</p>
		 * @param float $y_resolution <p>垂直方向の解像度。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function setResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * 特定のリソースの制限をメガバイト単位で設定する
		 * <p>このメソッドを使って、ImageMagick ライブラリのリソース制限を変更します。</p>
		 * @param int $type <p>リソースタイプ定数 のリストを参照ください。</p>
		 * @param int $limit <p>リソースの制限。単位は、制限するリソースの種類によって異なります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setresourcelimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function setResourceLimit(int $type, int $limit): bool {}

		/**
		 * 画像のサンプリング係数を設定する
		 * <p>画像のサンプリング係数を設定します。</p>
		 * @param array $factors
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setsamplingfactors.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSamplingFactors(array $factors): bool {}

		/**
		 * Imagick オブジェクトのサイズを設定する
		 * <p>Imagick オブジェクトのサイズを設定します。 RGB や GRAY、CMYK といった生の画像フォーマットを読み込む前に設定します。</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSize(int $columns, int $rows): bool {}

		/**
		 * Imagick オブジェクトのサイズのオフセットを設定する
		 * <p>Imagick オブジェクトのサイズとオフセットを設定します。 RGB や GRAY、CMYK といった生の画像フォーマットを読み込む前に設定します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $columns <p>幅 (ピクセル単位)。</p>
		 * @param int $rows <p>高さ (ピクセル単位)。</p>
		 * @param int $offset <p>画像のオフセット。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.setsizeoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSizeOffset(int $columns, int $rows, int $offset): bool {}

		/**
		 * 画像タイプ属性を設定する
		 * <p>画像タイプ属性を設定します。</p>
		 * @param int $image_type
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.settype.php
		 * @since PECL imagick 2.0.0
		 */
		public function setType(int $image_type): bool {}

		/**
		 * 3D 効果を作成する
		 * <p>遠くから光をあてているように見せる三次元効果を作成します。 光源の位置は azimuth と elevation で指定します。 azimuth は x 軸方向の角度で、elevation は Z 軸上のピクセル数です。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param bool $gray <p>ゼロ以外の値で、各ピクセルに影をつけます。</p>
		 * @param float $azimuth <p>光源の方向を定義します。</p>
		 * @param float $elevation <p>光源の方向を定義します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.shadeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shadeImage(bool $gray, float $azimuth, float $elevation): bool {}

		/**
		 * 画像の影をシミュレートする
		 * <p>画像の影をシミュレートします。</p>
		 * @param float $opacity
		 * @param float $sigma
		 * @param int $x
		 * @param int $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.shadowimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shadowImage(float $opacity, float $sigma, int $x, int $y): bool {}

		/**
		 * 画像をシャープにする
		 * <p>画像をシャープにします。指定した半径と標準偏差 (シグマ) によるガウス演算を施します。適切な結果を得るには、 半径をシグマより大きくする必要があります。半径を 0 に指定すると、適切な半径を <b>Imagick::sharpenImage()</b> が自動的に設定します。</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sharpenimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像の輪郭からピクセルを刈り取る
		 * <p>画像の輪郭からピクセルを刈り取ります。 新しい画像に必要なメモリを確保し、新しい画像へのポインタを返します。</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.shaveimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shaveImage(int $columns, int $rows): bool {}

		/**
		 * 平行四辺形を作成する
		 * <p>画像を X 軸方向あるいは Y 軸方向に押しつぶし、平行四辺形を作成します。 X 方向に押しつぶすと X 軸方向にスライドし、Y 方向に押しつぶすと Y 軸方向にスライドします。押しつぶす量は、角度で指定します。 X 方向に押しつぶす場合、x_shear は Y 軸からの相対角度となります。 同様に、Y 方向に押しつぶす場合は y_shear が X 軸からの相対角度となります。 変形によってできた空白部分は、背景色で埋められます。</p>
		 * @param mixed $background <p>背景色。</p>
		 * @param float $x_shear <p>x 軸方向に押しつぶす角度。</p>
		 * @param float $y_shear <p>y 軸方向に押しつぶす角度。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.shearimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shearImage($background, float $x_shear, float $y_shear): bool {}

		/**
		 * 画像のコントラストを調整する
		 * <p>非線形 S 字コントラストアルゴリズムを用いて画像のコントラストを調整します。 S 字変換関数を使用し、ハイライトや影を飽和させることなく画像のコントラストを強調します。 contrast は、どの程度コントラストを向上させるかを表します (0 は何もしない、3 は一般的な程度、20 は押し出す) mid-point は、結果の画像での中間色の扱いを表します (0 は白、50 はグレー、100 は黒)。sharpen を <b><code>TRUE</code></b> にするとコントラストを強め、それ以外にするとコントラストを弱めます。</p><p>» ImageMagick v6 Examples - Image Transformations — Sigmoidal Non-linearity Contrast も参照ください。</p>
		 * @param bool $sharpen <p>If true increase the contrast, if false decrease the contrast.</p>
		 * @param float $alpha <p>The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.</p>
		 * @param float $beta <p>Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.</p>
		 * @param int $channel <p>Which color channels the contrast will be applied to.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sigmoidalcontrastimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sigmoidalContrastImage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 鉛筆画をシミュレートする
		 * <p>鉛筆画をシミュレートします。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、 Imagick::sketchImage() が適切な半径を自動的に設定します。 angle で、モーションブラーの角度を指定します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $radius <p>ガウス変換の半径 (ピクセル単位で中心のピクセルは数えない)。</p>
		 * @param float $sigma <p>ガウス変換の標準偏差 (ピクセル単位)。</p>
		 * @param float $angle <p>この角度で効果を適用します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sketchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sketchImage(float $radius, float $sigma, float $angle): bool {}

		/**
		 * Description
		 * <p>Takes all images from the current image pointer to the end of the image list and smushs them to each other top-to-bottom if the stack parameter is true, otherwise left-to-right.</p>
		 * @param bool $stack
		 * @param int $offset
		 * @return Imagick <p>The new smushed image.</p>
		 * @link https://php.net/manual/ja/imagick.smushimages.php
		 * @since No version information available, might only be in Git
		 */
		public function smushImages(bool $stack, int $offset): \Imagick {}

		/**
		 * 画像にソラリゼーション効果を適用する
		 * <p>画像に特殊効果を施し、 印画紙の特定の箇所の露光時間を長くしたような画像になります。 threshold は 0 から QuantumRange までの値で、 ソラリゼーションの効き具合を指定します。</p>
		 * @param int $threshold
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.solarizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function solarizeImage(int $threshold): bool {}

		/**
		 * 色を補間する
		 * <p>数値を含む配列を引数として受け取り、画像全体にわたって見つかった座標の色を補間します。補間には <code>sparse_method</code> を用います。 このメソッドは、ImageMagick バージョン 6.4.5 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param int $SPARSE_METHOD <p>sparse method 定数 の一覧を参照ください。</p>
		 * @param array $arguments <p>座標を含む配列。配列の書式は <i>array(1,1, 2,45)</i> のようになります。</p>
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.sparsecolorimage.php
		 * @since No version information available, might only be in Git
		 */
		public function sparseColorImage(int $SPARSE_METHOD, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * 無地の画像を作成する
		 * <p>無地の画像を作成します。</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.spliceimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function spliceImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * ブロック内の各ピクセルをランダムに移動する
		 * <p>radius パラメータで定義したブロック内の各ピクセルを、 ランダムに移動させます。</p>
		 * @param float $radius
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.spreadimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function spreadImage(float $radius): bool {}

		/**
		 * Description
		 * <p>Replace each pixel with corresponding statistic from the neighborhood of the specified width and height.</p>
		 * @param int $type
		 * @param int $width
		 * @param int $height
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.statisticimage.php
		 * @since No version information available, might only be in Git
		 */
		public function statisticImage(int $type, int $width, int $height, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * デジタル透かしを画像に埋め込む
		 * <p>デジタル透かしを画像に埋め込みます。 あとでこの透かしが見つかれば、その画像の出所を証明することができます。 offset は、透かしの埋め込みを開始する位置を指定します。</p>
		 * @param \Imagick $watermark_wand
		 * @param int $offset
		 * @return Imagick <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.steganoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function steganoImage(\Imagick $watermark_wand, int $offset): \Imagick {}

		/**
		 * ふたつの画像を合成する
		 * <p>ふたつの画像を合成してひとつの画像にします。 左と右の画像を合成してステレオ効果を生み出します。</p>
		 * @param \Imagick $offset_wand
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.stereoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function stereoImage(\Imagick $offset_wand): bool {}

		/**
		 * 画像からすべてのプロパティやコメントを除去する
		 * <p>画像からすべてのプロパティやコメントを除去します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.stripimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function stripImage(): bool {}

		/**
		 * Description
		 * <p>Searches for a subimage in the current image and returns a similarity image such that an exact match location is completely white and if none of the pixels match, black, otherwise some gray level in-between. You can also pass in the optional parameters bestMatch and similarity. After calling the function similarity will be set to the 'score' of the similarity between the subimage and the matching position in the larger image, bestMatch will contain an associative array with elements x, y, width, height that describe the matching region.</p>
		 * @param \Imagick $Imagick
		 * @param array $offset
		 * @param float $similarity <p>A new image that displays the amount of similarity at each pixel.</p>
		 * @return Imagick
		 * @link https://php.net/manual/ja/imagick.subimagematch.php
		 * @since No version information available, might only be in Git
		 */
		public function subImageMatch(\Imagick $Imagick, array &$offset = NULL, float &$similarity = NULL): \Imagick {}

		/**
		 * 画像の中心から、ピクセルを渦巻状にする
		 * <p>画像の中心から、ピクセルを渦巻状にします。 degrees は個々のピクセルが移動する弧の量を表します。 degrees を 1 から 360 まで変化させると、劇的な効果が得られます。</p>
		 * @param float $degrees
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.swirlimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function swirlImage(float $degrees): bool {}

		/**
		 * テクスチャ画像をタイル状に並べる
		 * <p>テクスチャ画像をタイル状に繰り返し並べます。</p>
		 * @param \Imagick $texture_wand <p>テクスチャ画像として使用する Imagick オブジェクト</p>
		 * @return Imagick <p>Returns a new Imagick object that has the repeated texture applied.</p>
		 * @link https://php.net/manual/ja/imagick.textureimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function textureImage(\Imagick $texture_wand): \Imagick {}

		/**
		 * 閾値にもとづいて個々のピクセルの値を変更する
		 * <p>個々のピクセルの輝度を閾値と比較し、その色を変更します。 変換結果は、コントラストの高い 2 色の画像となります。</p>
		 * @param float $threshold
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.thresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function thresholdImage(float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 画像のサイズを変更する
		 * <p>画像のサイズを指定したものに変更し、関連付けられたプロパティをすべて削除します。 ウェブ上での表示に適した小さなサムネイル画像を作成します。 3 番目のパラメータに <b><code>TRUE</code></b> を指定すると、columns や rows にそれぞれの最大値を使用します。両方のパラメータが、 マッチするまであるいは指定したパラメータより小さくなるまで縮小されます。</p><p><b>注意</b>:  パラメータ <code>bestfit</code> の挙動は Imagick 3.0.0 で変わりました。 これより前のバージョンでは、200x150 の画像に対して 400x400 を指定した場合は何もせずそのままになっていました。 Imagick 3.0.0 以降では、この画像は 400x300 に拡大されます。これが、 指定したサイズに対して「ベストフィット」する大きさだからです。 <code>bestfit</code> を使う場合は、幅と高さの両方を指定しなければなりません。 </p>
		 * @param int $columns <p>画像の幅。</p>
		 * @param int $rows <p>画像の高さ。</p>
		 * @param bool $bestfit <p>最大値を強制的に使用するかどうか。</p>
		 * @param bool $fill
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.thumbnailimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function thumbnailImage(int $columns, int $rows, bool $bestfit = false, bool $fill = false): bool {}

		/**
		 * 色ベクトルを画像の各ピクセルに適用する
		 * <p>色ベクトルを画像の各ピクセルに適用します。 ベクトルの長さは、黒および白のときに 0、中間色のときに最大となります。 ベクトルの重み関数は f(x)=(1-(4.0&#42;((x-0.5)&#42;(x-0.5)))) です。</p>
		 * @param mixed $tint
		 * @param mixed $opacity
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.tintimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function tintImage($tint, $opacity): bool {}

		/**
		 * 切り取るサイズと画像のジオメトリを設定する便利なメソッド
		 * <p>切り取るサイズと画像のジオメトリを設定する便利なメソッドです。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param string $crop <p>切り取りジオメトリ文字列。 このジオメトリで画像の一部の範囲を指定し、その部分を切り取ります。</p>
		 * @param string $geometry <p>画像ジオメトリ文字列。このジオメトリで最終的な画像のサイズを指定します。</p>
		 * @return Imagick <p>変換語の画像を含む Imagick オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagick.transformimage.php
		 * @see Imagick::cropImage(), Imagick::resizeImage(), Imagick::thumbnailImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transformImage(string $crop, string $geometry): \Imagick {}

		/**
		 * Transforms an image to a new colorspace
		 * <p>Transforms an image to a new colorspace.</p>
		 * @param int $colorspace <p>The colorspace the image should be transformed to, one of the COLORSPACE constants e.g. Imagick::COLORSPACE_CMYK.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.transformimagecolorspace.php
		 * @since No version information available, might only be in Git
		 */
		public function transformImageColorspace(int $colorspace): bool {}

		/**
		 * ピクセルを透過させる
		 * <p>対処の色にマッチするピクセルを透過させます。 このメソッドは、ImageMagick バージョン 6.3.8 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param mixed $target <p>対象となる色。</p>
		 * @param float $alpha <p>透明度。1.0 は完全な不透明で 0.0 が完全な透明をあらわします。</p>
		 * @param float $fuzz <p>あいまいさをあらわす量。たとえば、これを 10 に設定すると、 赤色の値が 100 の色と 102 の色は同じものとみなされます。</p>
		 * @param bool $invert <p><b><code>TRUE</code></b> の場合は、対象の色にマッチしないピクセルを変更します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.transparentpaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function transparentPaintImage($target, float $alpha, float $fuzz, bool $invert): bool {}

		/**
		 * 垂直方向に反転させた画像を作成する
		 * <p>垂直方向に反転させた画像を作成します。 中央の x 軸に対して反転させ、90 度回転させます。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.transposeimage.php
		 * @see Imagick::transverseImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transposeImage(): bool {}

		/**
		 * 水平方向に反転させた画像を作成する
		 * <p>水平方向に反転させた画像を作成します。 中央の y 軸に対して反転させ、270 度回転させます。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.transverseimage.php
		 * @see Imagick::transposeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transverseImage(): bool {}

		/**
		 * 画像の輪郭を削除する
		 * <p>画像の背景色と同じ色の輪郭を削除します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $fuzz <p>デフォルトでは、対象の色は特定のピクセルの色とまったく同じでなければなりません。 しかし、ふたつの色が微妙に異なることもよくあります。 画像の fuzz メンバは、どの程度の色を「同じ色」とみなすかを表します。 このパラメータは、量の範囲の変化を表します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.trimimage.php
		 * @see Imagick::getQuantumDepth(), Imagick::getQuantumRange()
		 * @since PECL imagick 2.0.0
		 */
		public function trimImage(float $fuzz): bool {}

		/**
		 * ある 1 色以外のすべての色のピクセルを削除する
		 * <p>ある 1 色以外のすべての色のピクセルを削除します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.uniqueimagecolors.php
		 * @since PECL imagick 2.0.0
		 */
		public function uniqueImageColors(): bool {}

		/**
		 * 画像をシャープにする
		 * <p>画像をシャープにします。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、 Imagick::UnsharpMaskImage() が適切な半径を自動的に設定します。</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param float $amount
		 * @param float $threshold
		 * @param int $channel
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.unsharpmaskimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function unsharpMaskImage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

		/**
		 * 現在のアイテムが有効かどうかを調べる
		 * <p>現在のアイテムが有効かどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.valid.php
		 * @since PECL imagick 2.0.0
		 */
		public function valid(): bool {}

		/**
		 * ビネットフィルタを画像に追加する
		 * <p>ビネット形式で画像の輪郭をぼかします。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $blackPoint <p>黒の点。</p>
		 * @param float $whitePoint <p>白の点。</p>
		 * @param int $x <p>楕円の X オフセット。</p>
		 * @param int $y <p>楕円の Y オフセット。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.vignetteimage.php
		 * @see Imagick::waveImage(), Imagick::swirlImage()
		 * @since PECL imagick 2.0.0
		 */
		public function vignetteImage(float $blackPoint, float $whitePoint, int $x, int $y): bool {}

		/**
		 * ウェーブフィルタを画像に適用する
		 * <p>ウェーブフィルタを画像に適用します。 このメソッドは、ImageMagick バージョン 6.2.9 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param float $amplitude <p>波の振幅。</p>
		 * @param float $length <p>波長。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.waveimage.php
		 * @see Imagick::solarizeImage(), Imagick::oilpaintImage(), Imagick::embossImage(), Imagick::addNoiseImage(), Imagick::swirlImage()
		 * @since PECL imagick 2.0.0
		 */
		public function waveImage(float $amplitude, float $length): bool {}

		/**
		 * 閾値に満たないすべてのピクセルを白にする
		 * <p>Imagick::thresholdImage() と似ていますが、 これは閾値に満たないピクセルをすべて白にし、その他のピクセルはそのままにします。</p>
		 * @param mixed $threshold
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.whitethresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function whiteThresholdImage($threshold): bool {}

		/**
		 * 指定した名前で画像を書き込む
		 * <p>指定した名前で画像を書き込みます。filename パラメータが NULL の場合は、 Imagick::readImage() あるいは Imagick::setImageFilename() で設定した名前で書き込みます。</p>
		 * @param string $filename <p>画像を書き出すファイル名。ファイルの拡張子で画像形式が決まります。 "jpg:test.png" のようにプレフィックスをつけると、拡張子が何であっても特定の形式で保存できます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.writeimage.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function writeImage(string $filename = NULL): bool {}

		/**
		 * 画像をファイルハンドルに書き出す
		 * <p>開いているファイルハンドルに画像シーケンスを書き出します。 ハンドルは、fopen などで開いておかなければなりません。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param resource $filehandle <p>画像を書き出すファイルハンドル。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.writeimagefile.php
		 * @since No version information available, might only be in Git
		 */
		public function writeImageFile($filehandle): bool {}

		/**
		 * 画像あるいは画像シーケンスを書き込む
		 * <p>画像あるいは画像シーケンスを書き込みます。</p>
		 * @param string $filename
		 * @param bool $adjoin
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.writeimages.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function writeImages(string $filename, bool $adjoin): bool {}

		/**
		 * フレームをファイルハンドルに書き出す
		 * <p>開いているファイルハンドルにすべての画像フレームを書き出します。 このメソッドを使うと、アニメーション gif やその他のマルチフレーム画像を書き出すことができます。 このメソッドは、ImageMagick バージョン 6.3.6 以降で Imagick をコンパイルした場合に使用可能です。</p>
		 * @param resource $filehandle <p>画像を書き出すファイルハンドル。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagick.writeimagesfile.php
		 * @since No version information available, might only be in Git
		 */
		public function writeImagesFile($filehandle): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.imagickdraw.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickDraw {

		/**
		 * ImagickDraw コンストラクタ
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickDraw のコンストラクタです。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct() {}

		/**
		 * 現在のアフィン変換行列を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のアフィン変換行列を、指定したものに設定します。</p>
		 * @param array $affine <p>アフィン行列のパラメータ。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.affine.php
		 * @since PECL imagick 2.0.0
		 */
		public function affine(array $affine): bool {}

		/**
		 * 画像上にテキストを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像上にテキストを描画します。</p>
		 * @param float $x <p>テキストを描画する x 座標。</p>
		 * @param float $y <p>テキストを描画する y 座標。</p>
		 * @param string $text <p>画像上に描画するテキスト。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.annotation.php
		 * @since PECL imagick 2.0.0
		 */
		public function annotation(float $x, float $y, string $text): bool {}

		/**
		 * 円弧を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像上の指定した矩形内に円弧を描画します。</p>
		 * @param float $sx <p>矩形の開始位置の x 座標。</p>
		 * @param float $sy <p>矩形の開始位置の y 座標。</p>
		 * @param float $ex <p>矩形の終了位置の x 座標。</p>
		 * @param float $ey <p>矩形の終了位置の y 座標。</p>
		 * @param float $sd <p>開始位置の角度。</p>
		 * @param float $ed <p>終了位置の角度。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.arc.php
		 * @since PECL imagick 2.0.0
		 */
		public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool {}

		/**
		 * ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像上に点を指定してベジエ曲線を描画します。</p>
		 * @param array $coordinates <p>多次元配列。array( array( 'x' =&gt; 1, 'y' =&gt; 2 ), array( 'x' =&gt; 3, 'y' =&gt; 4 ) ) のような形式。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.bezier.php
		 * @since PECL imagick 2.0.0
		 */
		public function bezier(array $coordinates): bool {}

		/**
		 * 円を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像上に円を描画します。</p>
		 * @param float $ox <p>原点の x 座標。</p>
		 * @param float $oy <p>原点の y 座標。</p>
		 * @param float $px <p>周囲の x 座標。</p>
		 * @param float $py <p>周囲の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.circle.php
		 * @since PECL imagick 2.0.0
		 */
		public function circle(float $ox, float $oy, float $px, float $py): bool {}

		/**
		 * ImagickDraw をクリアする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickDraw オブジェクト上のコマンドをすべてクリアし、 デフォルト設定で初期化します。</p>
		 * @return bool <p>ImagickDraw オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * 指定した ImagickDraw オブジェクトの完全なコピーを作成する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定した ImagickDraw オブジェクトの完全なコピーを作成します。</p>
		 * @return ImagickDraw <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
		 * @link https://php.net/manual/ja/imagickdraw.clone.php
		 * @since PECL imagick 2.0.0
		 */
		public function clone(): \ImagickDraw {}

		/**
		 * 画像上に色を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の塗りつぶし色を使用して、 指定した開始位置から指定した方法で画像上に色を描画します。</p>
		 * @param float $x <p>描画位置の x 座標。</p>
		 * @param float $y <p>描画位置の y 座標。</p>
		 * @param int $paintMethod <p>PAINT_ 定数のいずれか。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.color.php
		 * @since PECL imagick 2.0.0
		 */
		public function color(float $x, float $y, int $paintMethod): bool {}

		/**
		 * コメントを追加する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ベクター出力ストリームにコメントを追加します。</p>
		 * @param string $comment <p>ベクター出力ストリームに追加するコメント文字列。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.comment.php
		 * @since PECL imagick 2.0.0
		 */
		public function comment(string $comment): bool {}

		/**
		 * 現在の画像上に別の画像を合成する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の画像上に別の画像を合成します。 合成演算子、位置、サイズを指定します。</p>
		 * @param int $compose <p>合成演算子。COMPOSITE_ 定数のいずれか。</p>
		 * @param float $x <p>左上角の x 座標。</p>
		 * @param float $y <p>左上角の y 座標。</p>
		 * @param float $width <p>合成する画像の幅。</p>
		 * @param float $height <p>合成する画像の高さ。</p>
		 * @param \Imagick $compositeWand <p>合成する画像を取得する Imagick オブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.composite.php
		 * @since PECL imagick 2.0.0
		 */
		public function composite(int $compose, float $x, float $y, float $width, float $height, \Imagick $compositeWand): bool {}

		/**
		 * 関連付けられたすべてのリソースを開放する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この ImagickDraw オブジェクトに関連付けられたすべてのリソースを開放します。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * 画像上に楕円を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像上に楕円を描画します。</p>
		 * @param float $ox
		 * @param float $oy
		 * @param float $rx
		 * @param float $ry
		 * @param float $start
		 * @param float $end
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.ellipse.php
		 * @since PECL imagick 2.0.0
		 */
		public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool {}

		/**
		 * 現在のクリッピングパスの ID を取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のクリッピングパスの ID を取得します。</p>
		 * @return string <p>クリッピングパスの ID を含む文字列、あるいはパスが存在しない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipPath(): string {}

		/**
		 * 現在の多角形塗りつぶしルールを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリッピングパスで使用されている、現在の多角形塗りつぶしルールを返します。</p>
		 * @return int <p>FILLRULE_ 定数のいずれかを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getcliprule.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipRule(): int {}

		/**
		 * クリップパスの単位の解釈を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリップパスの単位の解釈を返します。</p>
		 * @return int <p>成功した場合に整数値を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getclipunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipUnits(): int {}

		/**
		 * 塗りつぶし色を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>描画オブジェクトで使用する塗りつぶし色を返します。</p>
		 * @return ImagickPixel <p>ImagickPixel オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfillcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillColor(): \ImagickPixel {}

		/**
		 * 描画時の透過度を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>色やテクスチャによる塗りつぶしの際の透過度を返します。 完全に不透過の場合は 1.0 となります。</p>
		 * @return float <p>透過度を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfillopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillOpacity(): float {}

		/**
		 * 塗りつぶしルールを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>多角形の描画時に使用する塗りつぶしルールを返します。</p>
		 * @return int <p>FILLRULE_ 定数を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfillrule.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillRule(): int {}

		/**
		 * フォントを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントを文字列で返します。</p>
		 * @return string <p>成功した場合に文字列、フォントが設定されていない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfont.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFont(): string {}

		/**
		 * フォントファミリーを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントファミリーを返します。</p>
		 * @return string <p>現在選択されているフォントファミリー、 あるいはフォントファミリーが設定されていない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfontfamily.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontFamily(): string {}

		/**
		 * フォントのポイント数を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントのポイント数を返します。</p>
		 * @return float <p>現在の ImagickDraw オブジェクトに関連付けられているフォントのサイズを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfontsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontSize(): float {}

		/**
		 * Description
		 * <p>Gets the font stretch to use when annotating with text. Returns a StretchType.</p>
		 * @return int
		 * @link https://php.net/manual/ja/imagickdraw.getfontstretch.php
		 * @since No version information available, might only be in Git
		 */
		public function getFontStretch(): int {}

		/**
		 * フォントのスタイルを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントのスタイルを返します。</p>
		 * @return int <p>ImagickDraw オブジェクトに関連付けられたフォントのスタイルを表す定数 (STYLE_)、 あるいはスタイルが設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfontstyle.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontStyle(): int {}

		/**
		 * フォントの重さを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントの重さを返します。</p>
		 * @return int <p>成功した場合に整数値、重さが設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getfontweight.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontWeight(): int {}

		/**
		 * テキストの配置時の gravity を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するテキスト配置の gravity を返します。</p>
		 * @return int <p>成功した場合に GRAVITY_ 定数、gravity が設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getgravity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getGravity(): int {}

		/**
		 * 現在の縁取りのアンチエイリアス設定を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の縁取りのアンチエイリアス設定を返します。 縁取りの枠線は、デフォルトでアンチエイリアス処理が行われます。 アンチエイリアスを無効にすると、 縁取りの描画時には縁取り色あるいはキャンバスの色のどちらかが用いられることになります。</p>
		 * @return bool <p>アンチエイリアスがオンの場合に <b><code>TRUE</code></b>、オフの場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokeantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeAntialias(): bool {}

		/**
		 * オブジェクトの縁取りに使用する色を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの縁取りに使用する色を返します。</p>
		 * @return ImagickPixel <p>色を表す ImagickPixel オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeColor(): \ImagickPixel {}

		/**
		 * パスの描画に使用する破線のパターンを表す配列を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パスの描画に使用する破線のパターンを表す配列を返します。</p>
		 * @return array <p>成功した場合に配列、設定されていない場合は空の配列を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokedasharray.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeDashArray(): array {}

		/**
		 * 破線パターンにおける破線の開始オフセットを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>破線パターンにおける破線の開始オフセットを返します。</p>
		 * @return float <p>オフセットを表す float 値、あるいは設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokedashoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeDashOffset(): float {}

		/**
		 * 開かれたサブパスを描画する際に使用する端点の形状を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>開かれたサブパスを描画する際に使用する端点の形状を返します。</p>
		 * @return int <p>LINECAP_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokelinecap.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeLineCap(): int {}

		/**
		 * パスの角を描画する際に使用する形状を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パス (あるいはその他のベクター図形) の角を描画する際に使用する形状を返します。</p>
		 * @return int <p>LINEJOIN_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokelinejoin.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeLineJoin(): int {}

		/**
		 * マイターリミットを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>マイターリミットを返します。 2 本の直線が小さい角度で連結され、かつ連結方法が 'lineJoin' に設定されている場合、 出来上がる線の角の部分が非常に長くなります。'miterLimit' は、miter length (角の長さ) と 'lineWidth' の比率の最大値です。</p>
		 * @return int <p>マイターリミットを表す整数値、あるいは マイターリミットが設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokemiterlimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeMiterLimit(): int {}

		/**
		 * オブジェクトの枠線の透明度を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の透明度を返します。</p>
		 * @return float <p>透明度を表す double 値を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokeopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeOpacity(): float {}

		/**
		 * オブジェクトの枠線の描画に使用する線の幅を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の描画に使用する線の幅を返します。</p>
		 * @return float <p>線幅を表す double 値を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getstrokewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeWidth(): float {}

		/**
		 * テキストの配置を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際の配置を返します。</p>
		 * @return int <p>ALIGN_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.gettextalignment.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextAlignment(): int {}

		/**
		 * 現在のテキストのアンチエイリアス設定を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のテキストのアンチエイリアス設定を返します。 これは、テキストのアンチエイリアス処理を行うかどうかを表すものです。 デフォルトでは、テキストのアンチエイリアス処理が行われます。</p>
		 * @return bool <p>テキストをアンチエイリアス処理する場合に true、しない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.gettextantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextAntialias(): bool {}

		/**
		 * テキストの装飾を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に適用する装飾を返します。</p>
		 * @return int <p>DECORATION_ 定数のいずれか、あるいは装飾が設定されていない場合に 0 を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.gettextdecoration.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextDecoration(): int {}

		/**
		 * テキストによる注記の際に使用するコードセットを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するコードセットを表す文字列を返します。</p>
		 * @return string <p>コードセットを表す文字列、 あるいはエンコーディングが設定されていない場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.gettextencoding.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextEncoding(): string {}

		/**
		 * Description
		 * <p>Gets the text interword spacing.</p>
		 * @return float
		 * @link https://php.net/manual/ja/imagickdraw.gettextinterlinespacing.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextInterlineSpacing(): float {}

		/**
		 * Description
		 * <p>Gets the text interword spacing.</p>
		 * @return float
		 * @link https://php.net/manual/ja/imagickdraw.gettextinterwordspacing.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextInterwordSpacing(): float {}

		/**
		 * Description
		 * <p>Gets the text kerning.</p>
		 * @return float
		 * @link https://php.net/manual/ja/imagickdraw.gettextkerning.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextKerning(): float {}

		/**
		 * テキストの背景色を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記の背景に置く矩形の色を返します。</p>
		 * @return ImagickPixel <p>色を表す ImagickPixel オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.gettextundercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextUnderColor(): \ImagickPixel {}

		/**
		 * ベクターグラフィックを含む文字列を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickDraw オブジェクトのインスタンスが作成された後で、 グラフィックメソッドのコールによってできあがったベクターグラフィックを文字列で返します。</p>
		 * @return string <p>ベクターグラフィックを文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.getvectorgraphics.php
		 * @since PECL imagick 2.0.0
		 */
		public function getVectorGraphics(): string {}

		/**
		 * 直線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の描画色、透明度そして線幅を使用して画像上に直線を描画します。</p>
		 * @param float $sx <p>開始位置の x 座標。</p>
		 * @param float $sy <p>開始位置の y 座標。</p>
		 * @param float $ex <p>終了位置の x 座標。</p>
		 * @param float $ey <p>終了位置の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.line.php
		 * @since PECL imagick 2.0.0
		 */
		public function line(float $sx, float $sy, float $ex, float $ey): bool {}

		/**
		 * 画像の opacity チャネル上に描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>画像の opacity チャネル上に描画し、ピクセルの透過度に影響を与えます。</p>
		 * @param float $x <p>マットの x 座標。</p>
		 * @param float $y <p>マットの y 座標。</p>
		 * @param int $paintMethod <p>PAINT_ 定数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.matte.php
		 * @since PECL imagick 2.0.0
		 */
		public function matte(float $x, float $y, int $paintMethod): bool {}

		/**
		 * パス要素を現在のパスに追加する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パス要素を現在のパスに追加し、 現在の点から現在のサブパスの直近の開始点 (通常は、直近の moveto の点となります) に直線を引くことで現在のパスを閉じます。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathclose.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathClose(): bool {}

		/**
		 * 三次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの三次ベジエ曲線を描画します。 曲線の開始位置の制御点を (x1,y1)、終了位置の制御点を (x2,y2) とし、それぞれ絶対座標で指定します。このコマンドが終了した後は、 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x1 <p>最初の制御点の x 座標。</p>
		 * @param float $y1 <p>最初の制御点の y 座標。</p>
		 * @param float $x2 <p>2 番目の制御点の x 座標。</p>
		 * @param float $y2 <p>2 番目の制御点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToAbsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * 二次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの二次ベジエ曲線を描画します。 制御点を (x1,y1) とし、絶対座標で指定します。このコマンドが終了した後は、 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x1 <p>制御点の x 座標。</p>
		 * @param float $y1 <p>制御点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbezierabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierAbsolute(float $x1, float $y1, float $x, float $y): bool {}

		/**
		 * 二次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの二次ベジエ曲線を描画します。 制御点を (x1,y1) とし、相対座標で指定します。このコマンドが終了した後は、 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x1 <p>始点の x 座標。</p>
		 * @param float $y1 <p>始点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbezierrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierRelative(float $x1, float $y1, float $x, float $y): bool {}

		/**
		 * 二次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの二次ベジエ曲線 (絶対座標) を描画します。 制御点の位置は、現在の点と直前のコマンドの制御点の位置から推測します (直線のコマンドがなかったり、直前のコマンドが DrawPathCurveToQuadraticBezierAbsolute, DrawPathCurveToQuadraticBezierRelative, DrawPathCurveToQuadraticBezierSmoothAbsolut あるいは DrawPathCurveToQuadraticBezierSmoothRelative のいずれかでなかった場合は、現在の点を制御点とみなします)。 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p><p>この関数を使って、三次ベジエ曲線を描画することはできません。 描画できるのは、二次ベジエ曲線だけです。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierSmoothAbsolute(float $x, float $y): bool {}

		/**
		 * 二次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの二次ベジエ曲線 (相対座標) を描画します。 制御点の位置は、現在の点と直前のコマンドの制御点の位置から推測します (直線のコマンドがなかったり、直前のコマンドが DrawPathCurveToQuadraticBezierAbsolute, DrawPathCurveToQuadraticBezierRelative, DrawPathCurveToQuadraticBezierSmoothAbsolut あるいは DrawPathCurveToQuadraticBezierSmoothRelative のいずれかでなかった場合は、現在の点を制御点とみなします)。 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p><p>この関数を使って、三次ベジエ曲線を描画することはできません。 描画できるのは、二次ベジエ曲線だけです。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierSmoothRelative(float $x, float $y): bool {}

		/**
		 * 三次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの三次ベジエ曲線を描画します。 曲線の開始位置の制御点を (x1,y1)、終了位置の制御点を (x2,y2) とし、それぞれ相対座標で指定します。このコマンドが終了した後は、 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x1 <p>開始制御点の x 座標。</p>
		 * @param float $y1 <p>開始制御点の y 座標。</p>
		 * @param float $x2 <p>終了制御点の x 座標。</p>
		 * @param float $y2 <p>終了制御点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToRelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * 三次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの三次ベジエ曲線 (絶対座標) を描画します。 最初の制御点の位置は、現在の点と直前のコマンドの 2 番目の制御点の位置から推測します (直線のコマンドがなかったり、直前のコマンドが DrawPathCurveToAbsolute, DrawPathCurveToRelative, DrawPathCurveToSmoothAbsolute あるいは DrawPathCurveToSmoothRelative のいずれかでなかった場合は、現在の点を最初の制御点とみなします)。 2 番目の制御点 (曲線の終了地点の制御点) は (x2,y2) となります。 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x2 <p>2 番目の制御点の x 座標。</p>
		 * @param float $y2 <p>2 番目の制御点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetosmoothabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToSmoothAbsolute(float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * 三次ベジエ曲線を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から (x,y) までの三次ベジエ曲線 (相対座標) を描画します。 最初の制御点の位置は、現在の点と直前のコマンドの 2 番目の制御点の位置から推測します (直線のコマンドがなかったり、直前のコマンドが DrawPathCurveToAbsolute, DrawPathCurveToRelative, DrawPathCurveToSmoothAbsolute あるいは DrawPathCurveToSmoothRelative のいずれかでなかった場合は、現在の点を最初の制御点とみなします)。 2 番目の制御点 (曲線の終了地点の制御点) は (x2,y2) となります。 現在の位置は polybezier が使用する最後の (x,y) 座標の組となります。</p>
		 * @param float $x2 <p>2 番目の制御点の x 座標。</p>
		 * @param float $y2 <p>2 番目の制御点の y 座標。</p>
		 * @param float $x <p>終点の x 座標。</p>
		 * @param float $y <p>終点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathcurvetosmoothrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToSmoothRelative(float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * 楕円弧を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の位置から (x, y) まで、絶対座標を使用して楕円弧を描画します。 楕円の大きさと方向は、2 つの半径 (rx, ry) と xAxisRotation で決まります。xAxisRotation は、楕円全体を座標系に対してどれだけ回転させるかを表すものです。 楕円の中心 (cx, cy) は、その他のパラメータの値から自動的に算出されます。 largeArcFlag および sweepFlag は自動計算を支援するためのもので、 楕円の描画方法を定義します。 largeArcFlag が true の場合は考えうる楕円のうち大きいほうを描画します。 sweepFlag が true の場合は時計回りの回転で楕円を描画します。</p>
		 * @param float $rx <p>x 方向の半径。</p>
		 * @param float $ry <p>y 方向の半径。</p>
		 * @param float $x_axis_rotation <p>x 軸の回転。</p>
		 * @param bool $large_arc_flag <p>large arc フラグ。</p>
		 * @param bool $sweep_flag <p>sweep フラグ。</p>
		 * @param float $x <p>x 座標。</p>
		 * @param float $y <p>y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathellipticarcabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathEllipticArcAbsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

		/**
		 * 楕円弧を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の位置から (x, y) まで、相対座標を使用して楕円弧を描画します。 楕円の大きさと方向は、2 つの半径 (rx, ry) と xAxisRotation で決まります。xAxisRotation は、楕円全体を座標系に対してどれだけ回転させるかを表すものです。 楕円の中心 (cx, cy) は、その他のパラメータの値から自動的に算出されます。 largeArcFlag および sweepFlag は自動計算を支援するためのもので、 楕円の描画方法を定義します。 largeArcFlag が true の場合は考えうる楕円のうち大きいほうを描画します。 sweepFlag が true の場合は時計回りの回転で楕円を描画します。</p>
		 * @param float $rx <p>x 方向の半径。</p>
		 * @param float $ry <p>y 方向の半径。</p>
		 * @param float $x_axis_rotation <p>x 軸の回転。</p>
		 * @param bool $large_arc_flag <p>large arc フラグ。</p>
		 * @param bool $sweep_flag <p>sweep フラグ。</p>
		 * @param float $x <p>x 座標。</p>
		 * @param float $y <p>y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathellipticarcrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathEllipticArcRelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

		/**
		 * 現在のパスを終了する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のパスを終了します。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathfinish.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathFinish(): bool {}

		/**
		 * 直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、絶対座標を使用して直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $x <p>始点の x 座標。</p>
		 * @param float $y <p>終点の x 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToAbsolute(float $x, float $y): bool {}

		/**
		 * 水平直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、絶対座標を使用して水平直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $x <p>x 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetohorizontalabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToHorizontalAbsolute(float $x): bool {}

		/**
		 * 水平直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、相対座標を使用して水平直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $x <p>x 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetohorizontalrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToHorizontalRelative(float $x): bool {}

		/**
		 * 直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、相対座標を使用して直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $x <p>始点の x 座標。</p>
		 * @param float $y <p>始点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToRelative(float $x, float $y): bool {}

		/**
		 * 垂直直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、絶対座標を使用して垂直直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $y <p>y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetoverticalabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToVerticalAbsolute(float $y): bool {}

		/**
		 * 垂直直線パスを描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の点から指定した座標まで、相対座標を使用して垂直直線を描画します。 座標は新しい点に移動します。</p>
		 * @param float $y <p>y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathlinetoverticalrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToVerticalRelative(float $y): bool {}

		/**
		 * 新しいサブパスを開始する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>絶対座標で指定した座標から、新しいサブパスを開始します。 現在の点は指定した座標となります。</p>
		 * @param float $x <p>始点の x 座標。</p>
		 * @param float $y <p>始点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathmovetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathMoveToAbsolute(float $x, float $y): bool {}

		/**
		 * 新しいサブパスを開始する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>相対座標で指定した座標から、新しいサブパスを開始します。 現在の点は指定した座標となります。</p>
		 * @param float $x <p>始点の x 座標。</p>
		 * @param float $y <p>始点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathmovetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathMoveToRelative(float $x, float $y): bool {}

		/**
		 * パス描画リストの開始を宣言する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パス描画リストの開始を宣言します。このリストは、対応する DrawPathFinish() コマンドで終了します。 すべての DrawPath コマンドは、このコマンドと DrawPathFinish() コマンドの間にある必要があります。パス描画コマンドは従属コマンドであり、 それ自身だけでは機能しないからです。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pathstart.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathStart(): bool {}

		/**
		 * 点を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の描画色と濃度を使用して、 指定した座標に点を描画します。</p>
		 * @param float $x <p>点の x 座標。</p>
		 * @param float $y <p>点の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.point.php
		 * @since PECL imagick 2.0.0
		 */
		public function point(float $x, float $y): bool {}

		/**
		 * 多角形を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の線と線幅、そして塗りつぶし色あるいはテクスチャを使用して、 指定した座標配列から多角形を描画します。</p>
		 * @param array $coordinates <p>多次元配列。 array( array( 'x' =&gt; 3, 'y' =&gt; 4 ), array( 'x' =&gt; 2, 'y' =&gt; 6 ) ); のような形式となります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.polygon.php
		 * @since PECL imagick 2.0.0
		 */
		public function polygon(array $coordinates): bool {}

		/**
		 * 線分群を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の線と線幅、そして塗りつぶし色あるいはテクスチャを使用して、 指定した座標配列から線分群を描画します。</p>
		 * @param array $coordinates <p>x 座標および y 座標の配列。 array( array( 'x' =&gt; 4, 'y' =&gt; 6 ), array( 'x' =&gt; 8, 'y' =&gt; 10 ) ) のような形式となります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.polyline.php
		 * @since PECL imagick 2.0.0
		 */
		public function polyline(array $coordinates): bool {}

		/**
		 * スタック内の現在の ImagickDraw を破棄し、事前に push された ImagickDraw を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>スタック内の現在の ImagickDraw を破棄し、事前に push された ImagickDraw を返します。 複数の ImagickDraw が存在する可能性もあります。 push された回数より多くの ImagickDraw の pop を試みるとエラーとなります。 また、ImagickDrow が push されたときと同じ方式で pop する必要があります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に false を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pop.php
		 * @since PECL imagick 2.0.0
		 */
		public function pop(): bool {}

		/**
		 * クリップパスの定義を終了する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリップパスの定義を終了します。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.popclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function popClipPath(): bool {}

		/**
		 * 定義リストを終了する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>定義リストを終了します。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.popdefs.php
		 * @since PECL imagick 2.0.0
		 */
		public function popDefs(): bool {}

		/**
		 * パターン定義を終了する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パターン定義を終了します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.poppattern.php
		 * @since PECL imagick 2.0.0
		 */
		public function popPattern(): bool {}

		/**
		 * 現在の ImagickDraw をコピーしてスタックに格納する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の ImagickDraw をコピーして新しい ImagickDraw を作成し、 それを ImagickDraw スタックに格納します。格納した ImagickDraw は pop() で取り出すことができます。ImagickDraw は ImagickDraw スタックに保存されます。Pop を行うには、事前に Push が行われている必要があります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.push.php
		 * @since PECL imagick 2.0.0
		 */
		public function push(): bool {}

		/**
		 * クリップパスの定義を開始する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリップパスの定義を開始します。 これは、任意の数の描画コマンドで構成され、最後は ImagickDraw::popClipPath() コマンドとなります。</p>
		 * @param string $clip_mask_id <p>クリップマスク ID。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pushclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushClipPath(string $clip_mask_id): bool {}

		/**
		 * 後に続くコマンドが、処理の前に名前つき要素を作成することを示す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>後に続く ImagickDraw::popDefs() までのコマンドが、 名前つき要素 (クリップパスやテクスチャなど) を作成することを示します。 これは、効率を考慮して事前に処理されます。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pushdefs.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushDefs(): bool {}

		/**
		 * 後に続く ImagickDraw::opPattern() までのコマンドが、名前付きパターンを構成することを示す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>後に続く DrawPopPattern() までのコマンドが、 名前付きパターンを構成することを示します。 パターン空間は、左上の座標と幅、高さで指定します。 そして独自の描画空間となります。 描画される内容は、すべてこのパターン定義を使用します。 名前付きパターンは、線やブラシの定義で使用することができます。</p>
		 * @param string $pattern_id <p>パターン ID。</p>
		 * @param float $x <p>左上の角の x 座標。</p>
		 * @param float $y <p>左上の角の y 座標。</p>
		 * @param float $width <p>パターンの幅。</p>
		 * @param float $height <p>パターンの高さ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.pushpattern.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushPattern(string $pattern_id, float $x, float $y, float $width, float $height): bool {}

		/**
		 * 矩形を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>2 つの座標を与え、現在の枠線や線幅、塗りつぶしの設定を使用して矩形を描画します。</p>
		 * @param float $x1 <p>左上の角の x 座標。</p>
		 * @param float $y1 <p>左上の角の y 座標。</p>
		 * @param float $x2 <p>右下の角の x 座標。</p>
		 * @param float $y2 <p>右下の角の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.rectangle.php
		 * @since PECL imagick 2.0.0
		 */
		public function rectangle(float $x1, float $y1, float $x2, float $y2): bool {}

		/**
		 * これまでのすべての描画コマンドを画像上にレンダリングする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>これまでのすべての描画コマンドを画像上にレンダリングします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.render.php
		 * @since PECL imagick 2.0.0
		 */
		public function render(): bool {}

		/**
		 * Description
		 * <p>Resets the vector graphics.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.resetvectorgraphics.php
		 * @since No version information available, might only be in Git
		 */
		public function resetVectorGraphics(): bool {}

		/**
		 * 指定した回転を現在の座標空間に適用する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定した回転を現在の座標空間に適用します。</p>
		 * @param float $degrees <p>回転角度。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.rotate.php
		 * @since PECL imagick 2.0.0
		 */
		public function rotate(float $degrees): bool {}

		/**
		 * 角が丸い矩形を描画する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>2 つの座標、そして角の x &amp; y 方向の丸めを与え、 現在の枠線や線幅、塗りつぶしの設定を使用して角が丸い矩形を描画します。</p>
		 * @param float $x1 <p>左上の角の x 座標。</p>
		 * @param float $y1 <p>左上の角の y 座標。</p>
		 * @param float $x2 <p>右下の角の x 座標。</p>
		 * @param float $y2 <p>右下の角の y 座標。</p>
		 * @param float $rx <p>x 方向の丸め。</p>
		 * @param float $ry <p>y 方向の丸め。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.roundrectangle.php
		 * @since PECL imagick 2.0.0
		 */
		public function roundRectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool {}

		/**
		 * 倍率を調整する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の座標空間における、 水平方向および垂直方向の拡大率を調整します。</p>
		 * @param float $x <p>水平方向の拡大率。</p>
		 * @param float $y <p>垂直方向の拡大率。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.scale.php
		 * @since PECL imagick 2.0.0
		 */
		public function scale(float $x, float $y): bool {}

		/**
		 * 指定した名前のクリッピングパスを画像に関連付ける
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定した名前のクリッピングパスを画像に関連付けます。 クリッピングパスの範囲内に描画された内容だけが反映されます。</p>
		 * @param string $clip_mask <p>クリッピングパスの名前。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipPath(string $clip_mask): bool {}

		/**
		 * クリッピングパスで使用する多角形塗りつぶしルールを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリッピングパスで使用する多角形塗りつぶしルールを設定します。</p>
		 * @param int $fill_rule <p>FILLRULE_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setcliprule.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipRule(int $fill_rule): bool {}

		/**
		 * クリップパスの単位の解釈を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>クリップパスの単位の解釈を設定します。</p>
		 * @param int $clip_units <p>クリップ単位の数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setclipunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipUnits(int $clip_units): bool {}

		/**
		 * 色やテクスチャによる塗りつぶしの際の透過度を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>色やテクスチャによる塗りつぶしの際の透過度を設定します。 完全に不透明な状態が 1.0 となります。</p>
		 * @param float $opacity <p>塗りつぶしのアルファ値。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfillalpha.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillAlpha(float $opacity): bool {}

		/**
		 * オブジェクトの塗りつぶしに使用する色を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの塗りつぶしに使用する色を設定します。</p>
		 * @param \ImagickPixel $fill_pixel <p>色を表す ImagickPixel。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfillcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillColor(\ImagickPixel $fill_pixel): bool {}

		/**
		 * 色やテクスチャによる塗りつぶしの際の透過度を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>色やテクスチャによる塗りつぶしの際の透過度を設定します。 完全に不透明な状態が 1.0 となります。</p>
		 * @param float $fillOpacity <p>塗りつぶしの透明度。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfillopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillOpacity(float $fillOpacity): bool {}

		/**
		 * オブジェクトの塗りつぶしパターンとして使用する URL を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの塗りつぶしパターンとして使用する URL を設定します。 現時点でサポートしているのは、ローカル URL ("#identifier") のみです。 このローカル URL は、DrawPushPattern/DrawPopPattern で塗りつぶしパターンを定義することによって作成されます。</p>
		 * @param string $fill_url <p>塗りつぶしパターンを取得する URL。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfillpatternurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillPatternURL(string $fill_url): bool {}

		/**
		 * 多角形の描画時に使用する塗りつぶしルールを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>多角形の描画時に使用する塗りつぶしルールを設定します。</p>
		 * @param int $fill_rule <p>FILLRULE_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfillrule.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillRule(int $fill_rule): bool {}

		/**
		 * テキストによる注記を行う際に使用するフォントを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントを設定します。</p>
		 * @param string $font_name
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfont.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFont(string $font_name): bool {}

		/**
		 * テキストによる注記を行う際に使用するフォントファミリーを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントファミリーを設定します。</p>
		 * @param string $font_family <p>フォントファミリー。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfontfamily.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontFamily(string $font_family): bool {}

		/**
		 * テキストによる注記を行う際に使用するフォントのポイント数を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントのポイント数を設定します。</p>
		 * @param float $pointsize <p>ポイント数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfontsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontSize(float $pointsize): bool {}

		/**
		 * テキストによる注記を行う際に使用するフォントの伸縮を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントの伸縮を設定します。 AnyStretch は、ワイルドカードの "don't care" オプションとして働きます。</p>
		 * @param int $fontStretch <p>STRETCH_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfontstretch.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontStretch(int $fontStretch): bool {}

		/**
		 * テキストによる注記を行う際に使用するフォントのスタイルを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントのスタイルを設定します。 AnyStyle は、ワイルドカードの "don't care" オプションとして働きます。</p>
		 * @param int $style <p>STYLETYPE_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setfontstyle.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontStyle(int $style): bool {}

		/**
		 * フォントの重さを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するフォントの重さを設定します。</p>
		 * @param int $font_weight
		 * @return bool
		 * @link https://php.net/manual/ja/imagickdraw.setfontweight.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontWeight(int $font_weight): bool {}

		/**
		 * テキストの配置時の gravity を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するテキスト配置の gravity を設定します。</p>
		 * @param int $gravity <p>GRAVITY_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setgravity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setGravity(int $gravity): bool {}

		/**
		 * Description
		 * <p>Sets the resolution.</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setresolution.php
		 * @since No version information available, might only be in Git
		 */
		public function setResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * オブジェクトの枠線の透明度を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の透明度を指定します。</p>
		 * @param float $opacity <p>透明度。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokealpha.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeAlpha(float $opacity): bool {}

		/**
		 * 縁取りの枠線をアンチエイリアス処理するかどうかを制御する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>縁取りの枠線をアンチエイリアス処理するかどうかを制御します。 縁取りの枠線は、デフォルトでアンチエイリアス処理が行われます。 アンチエイリアスを無効にすると、 縁取りの描画時には縁取り色あるいはキャンバスの色のどちらかが用いられることになります。</p>
		 * @param bool $stroke_antialias <p>アンチエイリアス設定。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokeantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeAntialias(bool $stroke_antialias): bool {}

		/**
		 * オブジェクトの縁取りに使用する色を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの縁取りに使用する色を設定します。</p>
		 * @param \ImagickPixel $stroke_pixel <p>縁取り色。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeColor(\ImagickPixel $stroke_pixel): bool {}

		/**
		 * パスの描画に使用する破線のパターンを指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パスの描画に使用する破線のパターンを指定します。 strokeDashArray は数値の配列で、 互い違いに並べる破線と空白の長さをピクセルで表したものです。 If an odd number of values is provided, then the list of values is repeated to yield an even number of values. 既存の配列を削除するには、number_elements にゼロ、そして dash_array に null を渡します。 典型的な strokeDashArray_ 配列のメンバーは 5 3 2 となります。</p>
		 * @param array $dashArray <p>float の配列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokedasharray.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeDashArray(array $dashArray): bool {}

		/**
		 * 破線パターンにおける破線の開始オフセットを指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>破線パターンにおける破線の開始オフセットを指定します。</p>
		 * @param float $dash_offset <p>破線のオフセット。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokedashoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeDashOffset(float $dash_offset): bool {}

		/**
		 * 開かれたサブパスを描画する際に使用する端点の形状を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>開かれたサブパスを描画する際に使用する端点の形状を指定します。</p>
		 * @param int $linecap <p>LINECAP_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokelinecap.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeLineCap(int $linecap): bool {}

		/**
		 * パスの角を描画する際に使用する形状を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>パス (あるいはその他のベクター図形) の角を描画する際に使用する形状を指定します。</p>
		 * @param int $linejoin <p>LINEJOIN_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokelinejoin.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeLineJoin(int $linejoin): bool {}

		/**
		 * マイターリミットを指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>マイターリミットを指定します。 2 本の直線が小さい角度で連結され、かつ連結方法が 'lineJoin' に設定されている場合、 出来上がる線の角の部分が非常に長くなります。マイターリミットは、miter length (角の長さ) と 'lineWidth' の比率の最大値です。</p>
		 * @param int $miterlimit <p>マイターリミット。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokemiterlimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeMiterLimit(int $miterlimit): bool {}

		/**
		 * オブジェクトの枠線の透明度を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の透明度を指定します。</p>
		 * @param float $stroke_opacity <p>枠線の透明度。1.0 は完全に不透明な状態です。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokeopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeOpacity(float $stroke_opacity): bool {}

		/**
		 * オブジェクトの枠線の描画に使用するパターンを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の描画に使用するパターンを設定します。</p>
		 * @param string $stroke_url <p>URL。</p>
		 * @return bool <p>imagick.imagickdraw.return.success;</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokepatternurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokePatternURL(string $stroke_url): bool {}

		/**
		 * オブジェクトの枠線の描画に使用する線の幅を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>オブジェクトの枠線の描画に使用する線の幅を設定します。</p>
		 * @param float $stroke_width <p>線の幅。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setstrokewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeWidth(float $stroke_width): bool {}

		/**
		 * テキストの配置を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際の配置を指定します。</p>
		 * @param int $alignment <p>ALIGN_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextalignment.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextAlignment(int $alignment): bool {}

		/**
		 * テキストをアンチエイリアス処理するかどうかを制御する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストをアンチエイリアス処理するかどうかを制御します。 デフォルトではテキストのアンチエイリアス処理を行います。</p>
		 * @param bool $antiAlias
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextAntialias(bool $antiAlias): bool {}

		/**
		 * 装飾を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に適用する装飾を指定します。</p>
		 * @param int $decoration <p>DECORATION_ 定数。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextdecoration.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextDecoration(int $decoration): bool {}

		/**
		 * テキストのコードセットを指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記を行う際に使用するコードセットを指定します。 現時点で指定できるエンコーディングは "UTF-8" のみで、 これはバイトシーケンスを Unicode で表記したものです。 空文字列を指定すると、システムのデフォルトを使用します。 Unicode によるテキストの注記を行うには、 Unicode をサポートしたフォントが必要です。</p>
		 * @param string $encoding <p>エンコーディング名。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextencoding.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextEncoding(string $encoding): bool {}

		/**
		 * Description
		 * <p>Sets the text interline spacing.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param float $spacing
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextinterlinespacing.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextInterlineSpacing(float $spacing): bool {}

		/**
		 * Description
		 * <p>Sets the text interword spacing.</p>
		 * @param float $spacing
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextinterwordspacing.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextInterwordSpacing(float $spacing): bool {}

		/**
		 * Description
		 * <p>Sets the text kerning</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param float $kerning
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextkerning.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextKerning(float $kerning): bool {}

		/**
		 * 背景の矩形の色を指定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>テキストによる注記の背景に置く矩形の色を指定します。</p>
		 * @param \ImagickPixel $under_color <p>背景色。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.settextundercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextUnderColor(\ImagickPixel $under_color): bool {}

		/**
		 * ベクターグラフィックを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定した ImagickDraw オブジェクトに関連付けるベクターグラフィックを設定します。 このメソッドを ImagickDraw::getVectorGraphics() と組み合わせて使用すると、 ベクターグラフィックの状態を持続させることができます。</p>
		 * @param string $xml <p>ベクターグラフィックを表す xml。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setvectorgraphics.php
		 * @since PECL imagick 2.0.0
		 */
		public function setVectorGraphics(string $xml): bool {}

		/**
		 * キャンバス全体の大きさを設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ベクターデータの描画に使用するキャンバスの大きさを設定します。 通常は、これはキャンバス画像と同じ大きさに設定します。 ベクターデータを SVG や MVG 形式で保存する際に、 これを使用してキャンバス画像の大きさを指定します。 またビューアがベクターデータをレンダリングする際にもこれを使用します。</p>
		 * @param int $x1 <p>左の x 座標。</p>
		 * @param int $y1 <p>左の y 座標。</p>
		 * @param int $x2 <p>右の x 座標。</p>
		 * @param int $y2 <p>右の y 座標。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.setviewbox.php
		 * @since PECL imagick 2.0.0
		 */
		public function setViewbox(int $x1, int $y1, int $x2, int $y2): bool {}

		/**
		 * 現在の座標系を水平方向に傾ける
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の座標系を水平方向に傾けます。</p>
		 * @param float $degrees <p>傾斜角。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.skewx.php
		 * @since PECL imagick 2.0.0
		 */
		public function skewX(float $degrees): bool {}

		/**
		 * 現在の座標系を垂直方向に傾ける
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の座標系を垂直方向に傾けます。</p>
		 * @param float $degrees <p>傾斜角。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.skewy.php
		 * @since PECL imagick 2.0.0
		 */
		public function skewY(float $degrees): bool {}

		/**
		 * 現在の座標系に変換を適用する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の座標系に変換を適用し、座標系の原点を指定した座標に移動します。</p>
		 * @param float $x <p>水平方向の変換。</p>
		 * @param float $y <p>垂直方向の変換。</p>
		 * @return bool <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/imagickdraw.translate.php
		 * @since PECL imagick 2.0.0
		 */
		public function translate(float $x, float $y): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.imagickkernel.php
	 * @since PECL imagick >= 3.3.0
	 */
	class ImagickKernel {

		/**
		 * Description
		 * <p>Attach another kernel to this kernel to allow them to both be applied in a single morphology or filter function. Returns the new combined kernel.</p>
		 * @param \ImagickKernel $ImagickKernel
		 * @return void
		 * @link https://php.net/manual/ja/imagickkernel.addkernel.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function addKernel(\ImagickKernel $ImagickKernel): void {}

		/**
		 * Description
		 * <p>Adds a given amount of the 'Unity' Convolution Kernel to the given pre-scaled and normalized Kernel. This in effect adds that amount of the original image into the resulting convolution kernel. The resulting effect is to convert the defined kernels into blended soft-blurs, unsharp kernels or into sharpening kernels.</p>
		 * @param float $scale
		 * @return void
		 * @link https://php.net/manual/ja/imagickkernel.addunitykernel.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function addUnityKernel(float $scale): void {}

		/**
		 * Description
		 * <p>Create a kernel from a builtin in kernel. See http://www.imagemagick.org/Usage/morphology/#kernel for examples. Currently the 'rotation' symbols are not supported. Example: $diamondKernel = ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DIAMOND, "2");</p>
		 * @param int $kernelType
		 * @param string $kernelString <p>A string that describes the parameters e.g. "4,2.5"</p>
		 * @return ImagickKernel
		 * @link https://php.net/manual/ja/imagickkernel.frombuiltin.php
		 * @since PECL imagick >= 3.3.0
		 */
		public static function fromBuiltIn(int $kernelType, string $kernelString): \ImagickKernel {}

		/**
		 * Description
		 * <p>Create a kernel from an 2d matrix of values. Each value should either be a float (if the element should be used) or 'false' if the element should be skipped. For matrices that are odd sizes in both dimensions the origin pixel will default to the centre of the kernel. For all other kernel sizes the origin pixel must be specified.</p>
		 * @param array $matrix
		 * @param array $origin
		 * @return ImagickKernel <p>The generated ImagickKernel.</p>
		 * @link https://php.net/manual/ja/imagickkernel.frommatrix.php
		 * @since PECL imagick >= 3.3.0
		 */
		public static function fromMatrix(array $matrix, array $origin = NULL): \ImagickKernel {}

		/**
		 * Description
		 * <p>Get the 2d matrix of values used in this kernel. The elements are either float for elements that are used or 'false' if the element should be skipped.</p>
		 * @return array <p>A matrix (2d array) of the values that represent the kernel.</p>
		 * @link https://php.net/manual/ja/imagickkernel.getmatrix.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function getMatrix(): array {}

		/**
		 * Description
		 * <p>ScaleKernelInfo() scales the given kernel list by the given amount, with or without normalization of the sum of the kernel values (as per given flags). The exact behaviour of this function depends on the normalization type being used please see http://www.imagemagick.org/api/morphology.php#ScaleKernelInfo for details. Flag should be one of Imagick::NORMALIZE_KERNEL_VALUE, Imagick::NORMALIZE_KERNEL_CORRELATE, Imagick::NORMALIZE_KERNEL_PERCENT or not set.</p>
		 * @param float $scale
		 * @param int $normalizeFlag
		 * @return void
		 * @link https://php.net/manual/ja/imagickkernel.scale.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function scale(float $scale, int $normalizeFlag = NULL): void {}

		/**
		 * Description
		 * <p>Separates a linked set of kernels and returns an array of ImagickKernels.</p>
		 * @return array
		 * @link https://php.net/manual/ja/imagickkernel.separate.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function separate(): array {}
	}

	/**
	 * @link https://php.net/manual/ja/class.imagickpixel.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickPixel {

		/**
		 * ImagickPixel のコンストラクタ
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickPixel オブジェクトを作成します。color を指定した場合は、 オブジェクトを作成した後で色を初期化してから返します。</p>
		 * @param string $color <p>このオブジェクトの初期化に使用する色を表すオプションの文字列。</p>
		 * @return self <p>成功した場合に ImagickPixel オブジェクトを返します。 失敗した場合に ImagickPixelException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixel.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct(string $color = NULL) {}

		/**
		 * このオブジェクトに関連付けられたリソースを消去する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickPixel オブジェクトをクリアし、初期状態に戻します。 このオブジェクトに関連付けられている色も初期化します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * このオブジェクトに関連付けられているリソースの割り当てを解除する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickPixel オブジェクトが使用しているリソースの割り当てを解除し、 色を初期化します。destroy 関数をコールした後は、このオブジェクトを使用することはできません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * 色を返す
		 * <p>ImagickPixel オブジェクトの色を、配列で返します。透明度が設定されている場合は、 4 つの要素からなる配列となります。</p>
		 * @param int $normalized <p>色を正規化する。</p>
		 * @return array <p>各チャネルの値を配列で返します。パラメータに <b><code>TRUE</code></b> を指定した場合は、各値を正規化します。エラー時には ImagickPixelException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColor(int $normalized = 0): array {}

		/**
		 * 色を文字列で返す
		 * <p>ImagickPixel オブジェクトの色を文字列で返します。</p>
		 * @return string <p>ImagickPixel オブジェクトの色を文字列で返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolorasstring.php
		 * @since PECL imagick 2.1.0
		 */
		public function getColorAsString(): string {}

		/**
		 * この色に関連付けられている色カウントを返す
		 * <p>この色に関連付けられている色カウントを返します。</p><p>色カウントとは、画像内でこの ImagickPixel と同じ色を持つピクセル数のことです。</p><p>ImagickPixel::getColorCount は、Imagick::getImageHistogram() で作った ImagickPixel オブジェクトに対してのみ機能します。</p>
		 * @return int <p>成功した場合に色カウントを返します。失敗した場合に ImagickPixelException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolorcount.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColorCount(): int {}

		/**
		 * Description
		 * <p>Returns the color of the pixel in an array as Quantum values. If ImageMagick was compiled as HDRI these will be floats, otherwise they will be integers.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>Returns an array with keys <i>"r"</i>, <i>"g"</i>, <i>"b"</i>, <i>"a"</i>.</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolorquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function getColorQuantum(): array {}

		/**
		 * 指定した色チャネルの値を正規化したものを取得する
		 * <p>指定した色チャネルの値を取得します。 これは、0 から 1 までの間の浮動小数点数値となります。</p>
		 * @param int $color <p>調べたい色。Imagick の色定数で指定します。 RGB カラー、CMYK カラー、アルファ値、透明度を指定できます (Imagick::COLOR_BLUE や Imagick::COLOR_MAGENTA など)。</p>
		 * @return float <p>チャネルの値を正規化した浮動小数点数値を返します。 エラー時には ImagickPixelException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolorvalue.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColorValue(int $color): float {}

		/**
		 * Description
		 * <p>Gets the quantum value of a color in the ImagickPixel. Return value is a float if ImageMagick was compiled with HDRI, otherwise an integer.</p>
		 * @param int $color
		 * @return number <p>The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.</p>
		 * @link https://php.net/manual/ja/imagickpixel.getcolorvaluequantum.php
		 * @since No version information available, might only be in Git
		 */
		public function getColorValueQuantum(int $color) {}

		/**
		 * ImagickPixel オブジェクトの HSL カラーを正規化したものを返す
		 * <p>ImagickPixel オブジェクトの HSL カラーを正規化したものを返します。 3 つの値は、それぞれ 0.0 から 1.0 までの間の浮動小数点数値となります。</p>
		 * @return array <p>HSL の値をそれぞれ "hue"、 "saturation"、そして "luminosity" というキーに保持する配列を返します。 失敗した場合に ImagickPixelException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixel.gethsl.php
		 * @since PECL imagick 2.0.0
		 */
		public function getHSL(): array {}

		/**
		 * Description
		 * <p>Gets the colormap index of the pixel wand.</p>
		 * @return int
		 * @link https://php.net/manual/ja/imagickpixel.getindex.php
		 * @since No version information available, might only be in Git
		 */
		public function getIndex(): int {}

		/**
		 * Check the distance between this color and another
		 * <p>Checks the distance between the color described by this ImagickPixel object and that of the provided object, by plotting their RGB values on the color cube. If the distance between the two points is less than the fuzz value given, the colors are similar. This method replaces ImagickPixel::isSimilar() and correctly normalises the fuzz value to ImageMagick QuantumRange.</p>
		 * @param \ImagickPixel $color <p>The ImagickPixel object to compare this object against.</p>
		 * @param float $fuzz <p>The maximum distance within which to consider these colors as similar. The theoretical maximum for this value is the square root of three (1.732).</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.ispixelsimilar.php
		 * @since No version information available, might only be in Git
		 */
		public function isPixelSimilar(\ImagickPixel $color, float $fuzz): bool {}

		/**
		 * Description
		 * <p>Returns true if the distance between two colors is less than the specified distance. The fuzz value should be in the range 0-QuantumRange. The maximum value represents the longest possible distance in the colorspace. e.g. from RGB(0, 0, 0) to RGB(255, 255, 255) for the RGB colorspace</p>
		 * @param string $color
		 * @param string $fuzz
		 * @return bool
		 * @link https://php.net/manual/ja/imagickpixel.ispixelsimilarquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function isPixelSimilarQuantum(string $color, string $fuzz = NULL): bool {}

		/**
		 * この色と別の色の差を調べる
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この ImagickPixel オブジェクトと別のオブジェクトの色の差を調べます。 これは、両者の RGB 値を色立方体上にプロットすることで行います。 ふたつの色の差が fuzz で指定した値よりも小さければ、 同じ色であるとみなされます。 非推奨です。かわりに ImagickPixel::isPixelSimilar() を使いましょう。</p>
		 * @param \ImagickPixel $color <p>このオブジェクトと比較したい ImagickPixel オブジェクト。</p>
		 * @param float $fuzz <p>同じ色であるとみなす最大の誤差。 理論上の最大値は、3 の平方根 (1.732) となります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.issimilar.php
		 * @since PECL imagick 2.0.0
		 */
		public function isSimilar(\ImagickPixel $color, float $fuzz): bool {}

		/**
		 * 色を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この ImagickPixel オブジェクトの色を、文字列 (たとえば "blue"、"#0000ff"、"rgb(0,0,255)"、"cmyk(100,100,100,10)" などの形式) で設定します。</p>
		 * @param string $color <p>ImagickPixel オブジェクトを初期化する際に使用する色。</p>
		 * @return bool <p>色が設定できた場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.setcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setColor(string $color): bool {}

		/**
		 * Description
		 * <p>Sets the color count associated with this color.</p>
		 * @param int $colorCount
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.setcolorcount.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorCount(int $colorCount): bool {}

		/**
		 * 指定したチャネルの正規化した値を設定する
		 * <p>このオブジェクトの、指定したチャネルの値を正規化したものを設定します。 これは 0 から 1 までの値となります。この関数は、 ImagickPixel オブジェクトの透明度を指定する際にも使用します。</p>
		 * @param int $color <p>Imagick 色チャネル定数のいずれか。\Imagick::COLOR_GREEN や \Imagick::COLOR_ALPHA など。</p>
		 * @param float $value <p>そのチャネルに設定する値。0 から 1 までとなります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.setcolorvalue.php
		 * @since PECL imagick 2.0.0
		 */
		public function setColorValue(int $color, float $value): bool {}

		/**
		 * Description
		 * <p>Sets the quantum value of a color element of the ImagickPixel.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $color <p>Which color element to set e.g. \Imagick::COLOR_GREEN.</p>
		 * @param number $value <p>The quantum value to set the color element to. This should be a float if ImageMagick was compiled with HDRI otherwise an int in the range 0 to Imagick::getQuantum().</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.setcolorvaluequantum.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorValueQuantum(int $color, $value): bool {}

		/**
		 * 正規化した HSL カラーを設定する
		 * <p>hue (色相)、saturation (彩度) および luminosity (明度) を正規化した値によって ImagickPixel オブジェクトの色を設定します。</p>
		 * @param float $hue <p>色相を正規化した値。これは、色相環上での位置 (0 から 1 まで) を表します。ゼロは赤です。</p>
		 * @param float $saturation <p>彩度を正規化した値。1 が最大です。</p>
		 * @param float $luminosity <p>明度を正規化した値。黒が 0、白が 1 で、 0.5 にすると完全な HS 値が再現されます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.sethsl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setHSL(float $hue, float $saturation, float $luminosity): bool {}

		/**
		 * Description
		 * <p>Sets the colormap index of the pixel wand.</p>
		 * @param int $index
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixel.setindex.php
		 * @since No version information available, might only be in Git
		 */
		public function setIndex(int $index): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.imagickpixeliterator.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickPixelIterator {

		/**
		 * ImagickPixelIterator のコンストラクタ
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ImagickPixelIterator のコンストラクタです。</p>
		 * @param \Imagick $wand
		 * @return self <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct(\Imagick $wand) {}

		/**
		 * PixelIterator に関連付けられたリソースを消去する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>PixelIterator に関連付けられたリソースを消去します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * PixelIterator に関連付けられているリソースの割り当てを解除する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>PixelIterator に関連付けられているリソースの割り当てを解除します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * ImagickPixel オブジェクトの現在の行を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator の現在の行を、ImagickPixel オブジェクトの配列で返します。</p>
		 * @return array <p>ImagickPixel オブジェクトの配列形式で行を返します。これを順次処理することが可能です。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.getcurrentiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCurrentIteratorRow(): array {}

		/**
		 * pixel iterator の現在の行を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator の現在の行を返します。</p>
		 * @return int <p>pixel iterator の現在の行を返します。 エラー時には ImagickPixelIteratorException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.getiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getIteratorRow(): int {}

		/**
		 * pixel iterator の次の行を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator の次の行を、pixel wands の配列として返します。</p>
		 * @return array <p>次の行を ImagickPixel オブジェクトの配列で返します。 エラー時には ImagickPixelIteratorException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.getnextiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getNextIteratorRow(): array {}

		/**
		 * 前の行を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator の前の行を、pixel wands の配列として返します。</p>
		 * @return array <p>ImagickPixelIterator の前の行を、ImagickPixelWand オブジェクトの配列として返します。エラー時には ImagickPixelIteratorException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.getpreviousiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPreviousIteratorRow(): array {}

		/**
		 * 新しい pixel iterator を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>新しい pixel iterator を返します。</p>
		 * @param \Imagick $wand
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 ImagickPixelIteratorException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.newpixeliterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPixelIterator(\Imagick $wand): bool {}

		/**
		 * 新しい pixel iterator を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>新しい pixel iterator を返します。</p>
		 * @param \Imagick $wand
		 * @param int $x
		 * @param int $y
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>成功した場合に新しい ImagickPixelIterator を返します。 失敗した場合は ImagickPixelIteratorException をスローします。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.newpixelregioniterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPixelRegionIterator(\Imagick $wand, int $x, int $y, int $columns, int $rows): bool {}

		/**
		 * pixel iterator をリセットする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator をリセットします。 ImagickPixelIterator::getNextIteratorRow() と組み合わせて使用し、 ピクセルコンテナのすべてのピクセルを順にたどります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.resetiterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function resetIterator(): bool {}

		/**
		 * pixel iterator を最初の行に設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator を最初の行に設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.setiteratorfirstrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorFirstRow(): bool {}

		/**
		 * pixel iterator を最後の行に設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator を最後の行に設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.setiteratorlastrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorLastRow(): bool {}

		/**
		 * pixel iterator の行を設定する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator の行を設定します。</p>
		 * @param int $row
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.setiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorRow(int $row): bool {}

		/**
		 * pixel iterator を同期する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>pixel iterator を同期します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/imagickpixeliterator.synciterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function syncIterator(): bool {}
	}

}
