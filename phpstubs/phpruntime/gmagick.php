<?php



/**
 * @link http://php.net/manual/ja/class.gmagick.php
 * @since PECL gmagick >= Unknown
 */
class Gmagick {

	/**
	 * @var int Black
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_BLACK = 11;

	/**
	 * @var int Blue
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_BLUE = 12;

	/**
	 * @var int Cyan
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_CYAN = 13;

	/**
	 * @var int Green
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_GREEN = 14;

	/**
	 * @var int Red
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_RED = 15;

	/**
	 * @var int Yellow
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_YELLOW = 16;

	/**
	 * @var int Magenta
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_MAGENTA = 17;

	/**
	 * @var int Opacity
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_OPACITY = 18;

	/**
	 * @var int Alpha
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_ALPHA = 19;

	/**
	 * @var int Fuzz
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLOR_FUZZ = 20;

	/**
	 * @var int The default composite operator
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DEFAULT = 1;

	/**
	 * @var int Undefined composite operator
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_UNDEFINED = 0;

	/**
	 * @var int No composite operator defined
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_NO = 23;

	/**
	 * @var int The result of image + image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_ADD = 8;

	/**
	 * @var int The result is the same shape as image, with composite image obscuring image where the image shapes overlap
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_ATOP = 4;

	/**
	 * @var int Blends the image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_BLEND = null;

	/**
	 * @var int The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_BUMPMAP = 12;

	/**
	 * @var int Makes the target image transparent
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_CLEAR = 18;

	/**
	 * @var int Darkens the destination image to reflect the source image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COLORBURN = null;

	/**
	 * @var int Brightens the destination image to reflect the source image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COLORDODGE = null;

	/**
	 * @var int Colorizes the target image using the composite image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COLORIZE = 28;

	/**
	 * @var int Copies black from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYBLACK = 35;

	/**
	 * @var int Copies blue from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYBLUE = 16;

	/**
	 * @var int Copies the source image on the target image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPY = 13;

	/**
	 * @var int Copies cyan from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYCYAN = 32;

	/**
	 * @var int Copies green from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYGREEN = 15;

	/**
	 * @var int Copies magenta from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYMAGENTA = 33;

	/**
	 * @var int Copies opacity from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYOPACITY = 17;

	/**
	 * @var int Copies red from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYRED = 14;

	/**
	 * @var int Copies yellow from the source to target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_COPYYELLOW = 34;

	/**
	 * @var int Darkens the target image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DARKEN = 24;

	/**
	 * @var int The part of the destination lying inside of the source is composited over the source and replaces the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DSTATOP = null;

	/**
	 * @var int The target is left untouched
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DST = null;

	/**
	 * @var int The parts inside the source replace the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DSTIN = null;

	/**
	 * @var int The parts outside the source replace the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DSTOUT = null;

	/**
	 * @var int Target replaces the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DSTOVER = null;

	/**
	 * @var int Subtracts the darker of the two constituent colors from the lighter
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DIFFERENCE = 10;

	/**
	 * @var int Shifts target image pixels as defined by the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DISPLACE = 20;

	/**
	 * @var int Dissolves the source in to the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_DISSOLVE = 19;

	/**
	 * @var int Produces an effect similar to that of Gmagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_EXCLUSION = null;

	/**
	 * @var int Multiplies or screens the colors, dependent on the source color value
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_HARDLIGHT = null;

	/**
	 * @var int Modifies the hue of the target as defined by source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_HUE = 26;

	/**
	 * @var int Composites source into the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_IN = 2;

	/**
	 * @var int Lightens the target as defined by source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_LIGHTEN = 25;

	/**
	 * @var int Luminizes the target as defined by source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_LUMINIZE = 29;

	/**
	 * @var int Subtracts the source from the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_MINUS = 7;

	/**
	 * @var int Modulates the target brightness, saturation and hue as defined by source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_MODULATE = 21;

	/**
	 * @var int Multiplies the target to the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_MULTIPLY = 11;

	/**
	 * @var int Composites outer parts of the source on the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_OUT = 3;

	/**
	 * @var int Composites source over the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_OVER = 1;

	/**
	 * @var int Overlays the source on the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_OVERLAY = 31;

	/**
	 * @var int Adds the source to the target
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_PLUS = 6;

	/**
	 * @var int Replaces the target with the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_REPLACE = 13;

	/**
	 * @var int Saturates the target as defined by the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SATURATE = 27;

	/**
	 * @var int The source and destination are complemented and then multiplied and then replace the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SCREEN = 30;

	/**
	 * @var int Darkens or lightens the colors, dependent on the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SOFTLIGHT = null;

	/**
	 * @var int The part of the source lying inside of the destination is composited onto the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SRCATOP = null;

	/**
	 * @var int The source is copied to the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SRC = null;

	/**
	 * @var int The part of the source lying inside of the destination replaces the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SRCIN = null;

	/**
	 * @var int The part of the source lying outside of the destination replaces the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SRCOUT = null;

	/**
	 * @var int The source replaces the destination
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SRCOVER = null;

	/**
	 * @var int Subtract the colors in the source image from the destination image
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_SUBTRACT = 9;

	/**
	 * @var int The source is composited on the target as defined by source threshold
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_THRESHOLD = 22;

	/**
	 * @var int The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPOSITE_XOR = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const MONTAGEMODE_FRAME = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const MONTAGEMODE_UNFRAME = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const MONTAGEMODE_CONCATENATE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STYLE_NORMAL = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STYLE_ITALIC = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STYLE_OBLIQUE = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STYLE_ANY = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_POINT = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_BOX = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_TRIANGLE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_HERMITE = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_HANNING = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_HAMMING = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_BLACKMAN = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_GAUSSIAN = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_QUADRATIC = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_CUBIC = 10;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_CATROM = 11;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_MITCHELL = 12;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_LANCZOS = 13;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_BESSEL = 14;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILTER_SINC = 15;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_BILEVEL = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_GRAYSCALE = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_GRAYSCALEMATTE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_PALETTE = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_PALETTEMATTE = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_TRUECOLOR = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_TRUECOLORMATTE = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_COLORSEPARATION = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_COLORSEPARATIONMATTE = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const IMGTYPE_OPTIMIZE = 10;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOLUTION_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOLUTION_PIXELSPERINCH = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOLUTION_PIXELSPERCENTIMETER = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_NO = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_BZIP = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_FAX = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_GROUP4 = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_JPEG = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_JPEG2000 = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_LOSSLESSJPEG = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_LZW = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_RLE = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COMPRESSION_ZIP = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PAINT_POINT = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PAINT_REPLACE = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PAINT_FLOODFILL = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PAINT_FILLTOBORDER = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PAINT_RESET = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_NORTHWEST = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_NORTH = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_NORTHEAST = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_WEST = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_CENTER = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_EAST = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_SOUTHWEST = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_SOUTH = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const GRAVITY_SOUTHEAST = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_NORMAL = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_ULTRACONDENSED = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_CONDENSED = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_SEMICONDENSED = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_SEMIEXPANDED = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_EXPANDED = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_EXTRAEXPANDED = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_ULTRAEXPANDED = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const STRETCH_ANY = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ALIGN_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ALIGN_LEFT = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ALIGN_CENTER = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ALIGN_RIGHT = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const DECORATION_NO = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const DECORATION_UNDERLINE = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const DECORATION_OVERLINE = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const DECORATION_LINETROUGH = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_UNIFORM = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_GAUSSIAN = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_MULTIPLICATIVEGAUSSIAN = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_IMPULSE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_LAPLACIAN = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const NOISE_POISSON = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_RED = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_GRAY = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_CYAN = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_GREEN = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_MAGENTA = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_BLUE = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_YELLOW = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_ALPHA = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_OPACITY = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_MATTE = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_BLACK = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_INDEX = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const CHANNEL_ALL = 10;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_MEANABSOLUTEERROR = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_MEANSQUAREERROR = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_PEAKABSOLUTEERROR = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_PEAKSIGNALTONOISERATIO = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const METRIC_ROOTMEANSQUAREDERROR = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_CHAR = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_DOUBLE = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_FLOAT = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_INTEGER = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_LONG = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_QUANTUM = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PIXEL_SHORT = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_RGB = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_GRAY = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_TRANSPARENT = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_OHTA = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_LAB = 14;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_XYZ = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_YCBCR = 17;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_YCC = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_YIQ = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_YPBPR = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_YUV = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_CMYK = 10;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_SRGB = 11;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_HSB = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_HSL = 12;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_HWB = 13;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_REC601LUMA = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_REC709LUMA = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const COLORSPACE_LOG = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_BACKGROUND = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_CONSTANT = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_EDGE = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_MIRROR = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_TILE = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const VIRTUALPIXELMETHOD_TRANSPARENT = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_ROTATE = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SHEAR = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_ROLL = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_HUE = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SATURATION = 5;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_BRIGHTNESS = 6;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_GAMMA = 7;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SPIFF = 8;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_DULL = 9;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_GRAYSCALE = 10;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_QUANTIZE = 11;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_DESPECKLE = 12;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_REDUCENOISE = 13;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_ADDNOISE = 14;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SHARPEN = 15;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_BLUR = 16;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_THRESHOLD = 17;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_EDGEDETECT = 18;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SPREAD = 19;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SOLARIZE = 20;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SHADE = 21;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_RAISE = 22;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SEGMENT = 23;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_SWIRL = 24;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_IMPLODE = 25;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_WAVE = 26;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_OILPAINT = 27;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_CHARCOALDRAWING = 28;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PREVIEW_JPEG = 29;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RENDERINGINTENT_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RENDERINGINTENT_SATURATION = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RENDERINGINTENT_PERCEPTUAL = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RENDERINGINTENT_ABSOLUTE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RENDERINGINTENT_RELATIVE = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILLRULE_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILLRULE_EVENODD = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const FILLRULE_NONZERO = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PATHUNITS_UNDEFINED = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PATHUNITS_USERSPACE = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PATHUNITS_USERSPACEONUSE = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const PATHUNITS_OBJECTBOUNDINGBOX = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINECAP_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINECAP_BUTT = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINECAP_ROUND = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINECAP_SQUARE = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINEJOIN_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINEJOIN_MITER = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINEJOIN_ROUND = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const LINEJOIN_BEVEL = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_UNDEFINED = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_AREA = 0;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_DISK = 1;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_FILE = 2;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_MAP = 3;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const RESOURCETYPE_MEMORY = 4;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_UNDEFINED = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_TOPLEFT = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_TOPRIGHT = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_BOTTOMRIGHT = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_BOTTOMLEFT = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_LEFTTOP = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_RIGHTTOP = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_RIGHTBOTTOM = null;

	/**
	 * @var int
	 * @link http://php.net/manual/ja/gmagick.constants.php
	 */
	const ORIENTATION_LEFTBOTTOM = null;

	/**
	 * Gmagick のコンストラクタ
	 * <p>Gmagick のコンストラクタです。</p>
	 * @param string $filename <p>読み込みたい画像へのパス、あるいは複数のパスの配列。</p>
	 * @return self <p>成功した場合に新しい Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.construct.php
	 * @since PECL gmagick >= Unknown
	 */
	public function __construct(string $filename = NULL) {}

	/**
	 * 新しい画像を Gmagick オブジェクトの画像リストに追加する
	 * <p>新しい画像を、ソースオブジェクトの現在位置から Gmagick オブジェクトに追加します。 この操作の後は、イテレータの位置がリストの末尾に移動します。</p>
	 * @param \Gmagick $source <p>ソース Gmagick オブジェクト。</p>
	 * @return Gmagick <p>Gmagick オブジェクトに画像を追加して返します。</p>
	 * @link http://php.net/manual/ja/gmagick.addimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function addimage(\Gmagick $source): \Gmagick {}

	/**
	 * ランダムなノイズを画像に追加する
	 * <p>ランダムなノイズを画像に追加します。</p>
	 * @param int $noise_type <p>ノイズの形式。 ノイズ定数 の一覧を参照ください。</p>
	 * @return Gmagick <p>Gmagick オブジェクトにノイズを追加して返します。</p>
	 * @link http://php.net/manual/ja/gmagick.addnoiseimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function addnoiseimage(int $noise_type): \Gmagick {}

	/**
	 * 画像にテキストによる注記を加える
	 * <p>テキストによる注記を画像に加えます。</p>
	 * @param \GmagickDraw $GmagickDraw <p>テキスト描画設定を含む GmagickDraw オブジェクト。</p>
	 * @param float $x <p>テキストの左端の水平オフセットをあらわすピクセル数。</p>
	 * @param float $y <p>テキストのベースラインの垂直オフセットをあらわすピクセル数。</p>
	 * @param float $angle <p>テキストを書き出す角度。</p>
	 * @param string $text <p>描画するテキスト。</p>
	 * @return Gmagick <p>Gmagick オブジェクトに注記を加えて返します。</p>
	 * @link http://php.net/manual/ja/gmagick.annotateimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function annotateimage(\GmagickDraw $GmagickDraw, float $x, float $y, float $angle, string $text): \Gmagick {}

	/**
	 * blur (にじみ) フィルタを画像に追加する
	 * <p>blur (にじみ) フィルタを画像に追加します。</p>
	 * @param float $radius <p>にじみの半径。</p>
	 * @param float $sigma <p>標準偏差。</p>
	 * @param int $channel
	 * @return Gmagick <p>にじませた Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.blurimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function blurimage(float $radius, float $sigma, int $channel = NULL): \Gmagick {}

	/**
	 * 画像の周りを枠線で囲む
	 * <p>画像の周りを枠線で囲みます。枠線の色は GmagickPixel オブジェクトあるいは色文字列で指定します。</p>
	 * @param \GmagickPixel $color <p>枠線の色を含む GmagickPixel オブジェクトあるいは文字列。</p>
	 * @param int $width <p>枠線の幅。</p>
	 * @param int $height <p>枠線の高さ。</p>
	 * @return Gmagick <p>枠線を定義した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.borderimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function borderimage(\GmagickPixel $color, int $width, int $height): \Gmagick {}

	/**
	 * 木炭画をシミュレートする
	 * <p>木炭画をシミュレートします。</p>
	 * @param float $radius <p>ガウス分布の半径。中心を含まないピクセル数。</p>
	 * @param float $sigma <p>ガウス分布の標準偏差 (ピクセル単位)。</p>
	 * @return Gmagick <p>木炭画をシミュレートした Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.charcoalimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function charcoalimage(float $radius, float $sigma): \Gmagick {}

	/**
	 * 画像の一部を取り除き、切り詰める
	 * <p>画像の一部を削除し、そこにあった画像をなくします。</p>
	 * @param int $width <p>切り取る範囲の幅。</p>
	 * @param int $height <p>切り取る範囲の高さ。</p>
	 * @param int $x <p>切り取る範囲の X 座標。</p>
	 * @param int $y <p>切り取る範囲の Y 座標。</p>
	 * @return Gmagick <p>切り取った後の Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.chopimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function chopimage(int $width, int $height, int $x, int $y): \Gmagick {}

	/**
	 * Gmagick オブジェクトに関連付けられたすべてのリソースをクリアする
	 * <p>Gmagick オブジェクトに関連付けられたすべてのリソースをクリアします。</p>
	 * @return Gmagick <p>クリアした Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.clear.php
	 * @since PECL gmagick >= Unknown
	 */
	public function clear(): \Gmagick {}

	/**
	 * コメントを画像に追加する
	 * <p>コメントを画像に追加します。</p>
	 * @param string $comment <p>追加するコメント。</p>
	 * @return Gmagick <p>コメントを追加した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.commentimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function commentimage(string $comment): \Gmagick {}

	/**
	 * ある画像を別の画像に合成する
	 * <p>ある画像を、別の画像の指定した位置に合成します。</p>
	 * @param \Gmagick $source <p>合成する画像を保持する Gmagick オブジェクト。</p>
	 * @param int $COMPOSE
	 * @param int $x <p>合成する位置の列オフセット。</p>
	 * @param int $y <p>合成する位置の行オフセット。</p>
	 * @return Gmagick <p>合成した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.compositeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function compositeimage(\Gmagick $source, int $COMPOSE, int $x, int $y): \Gmagick {}

	/**
	 * 画像の一部を抽出する
	 * <p>画像の一部を抽出します。</p>
	 * @param int $width <p>抽出する幅。</p>
	 * @param int $height <p>抽出する高さ。</p>
	 * @param int $x <p>抽出する領域の左上の X 座標。</p>
	 * @param int $y <p>抽出する領域の左上の Y 座標。</p>
	 * @return Gmagick <p>抽出した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.cropimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function cropimage(int $width, int $height, int $x, int $y): \Gmagick {}

	/**
	 * 切り取ってサムネイルを作成する
	 * <p>固定サイズのサムネイルを作成します。 まず画像のサイズを拡大あるいは縮小し、指定した範囲を中心から切り取ります。</p>
	 * @param int $width <p>サムネイルの幅。</p>
	 * @param int $height <p>サムネイルの高さ。</p>
	 * @return Gmagick <p>切り取った Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.cropthumbnailimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function cropthumbnailimage(int $width, int $height): \Gmagick {}

	/**
	 * 現在の Gmagick オブジェクトへの参照を返す
	 * <p>現在の gmagick オブジェクトへの参照を返し、 画像ポインタを正しいシーケンスに設定します。</p>
	 * @return Gmagick <p>成功した場合に自分自身を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.current.php
	 * @since PECL gmagick >= Unknown
	 */
	public function current(): \Gmagick {}

	/**
	 * 画像のカラーマップを移動する
	 * <p>位置番号を指定して、画像のカラーマップを移動します。 カラーマップを何度か回転させると、サイケデリックな効果が得られます。</p>
	 * @param int $displace <p>カラーマップを移動させる量。</p>
	 * @return Gmagick <p>成功した場合に自分自身を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.cyclecolormapimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function cyclecolormapimage(int $displace): \Gmagick {}

	/**
	 * 画像間の特定のピクセルの差を返す
	 * <p>各画像をシーケンス内の次の画像と比較し、 最大の境界範囲を返します。</p>
	 * @return Gmagick <p>成功した場合に新しい Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.deconstructimages.php
	 * @since PECL gmagick >= Unknown
	 */
	public function deconstructimages(): \Gmagick {}

	/**
	 * 画像内のスペックルノイズを軽減する
	 * <p>画像内のスペックルノイズを軽減します。ただし元画像の輪郭は保持します。</p>
	 * @return Gmagick <p>スペックルノイズを軽減した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.despeckleimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function despeckleimage(): \Gmagick {}

	/**
	 * Gmagick オブジェクトを破棄する
	 * <p>Gmagick オブジェクトを破棄し、関連するリソースをすべて解放します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.destroy.php
	 * @since PECL gmagick >= Unknown
	 */
	public function destroy(): bool {}

	/**
	 * 現在の画像上の GmagickDraw オブジェクトをレンダリングする
	 * <p>現在の画像上の GmagickDraw オブジェクトをレンダリングします。</p>
	 * @param \GmagickDraw $GmagickDraw <p>画像をレンダリングする描画操作。</p>
	 * @return Gmagick <p>描かれた Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.drawimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function drawimage(\GmagickDraw $GmagickDraw): \Gmagick {}

	/**
	 * 画像の輪郭を強調する
	 * <p>指定した半径の畳み込みフィルタを使用して、画像の輪郭を強調します。 radius に 0 を設定すると自動選択となります。</p>
	 * @param float $radius <p>操作の半径。</p>
	 * @return Gmagick <p>輪郭を強調した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.edgeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function edgeimage(float $radius): \Gmagick {}

	/**
	 * グレースケール画像に三次元効果を施して返す
	 * <p>グレースケール画像に三次元効果を施したものを返します。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、適切な半径を自動的に設定します。</p>
	 * @param float $radius <p>効果の半径。</p>
	 * @param float $sigma <p>効果のシグマ。</p>
	 * @return Gmagick <p>エンボス処理した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.embossimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function embossimage(float $radius, float $sigma): \Gmagick {}

	/**
	 * ノイジーな画像の品質を向上させる
	 * <p>デジタルフィルタを適用して、ノイジーな画像の品質を向上させます。</p>
	 * @return Gmagick <p>品質を向上した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.enhanceimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function enhanceimage(): \Gmagick {}

	/**
	 * 画像ヒストグラムを均等化する
	 * <p>画像ヒストグラムを均等化します。</p>
	 * @return Gmagick <p>均等化した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.equalizeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function equalizeimage(): \Gmagick {}

	/**
	 * 垂直方向に反転した画像を作成する
	 * <p>中心の x 軸を基準してピクセルを反転させ、垂直方向のミラー画像を作成します。</p>
	 * @return Gmagick <p>垂直反転した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.flipimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function flipimage(): \Gmagick {}

	/**
	 * 水平方向に反転した画像を作成する
	 * <p>中心の y 軸を基準してピクセルを反転させ、水平方向のミラー画像を作成します。</p>
	 * @return Gmagick <p>水平反転した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.flopimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function flopimage(): \Gmagick {}

	/**
	 * 三次元の枠線をシミュレートする
	 * <p>画像の周りに三次元の枠線を追加します。 width と height で、それぞれ縦の枠線と横の枠線の幅を指定します。 inner_bevel および outer_bevel は、 それぞれ枠の内側と外側の影の幅を指定します。</p>
	 * @param \GmagickPixel $color <p>マット色を表す GmagickPixel オブジェクトあるいは浮動小数点数。</p>
	 * @param int $width <p>枠の幅。</p>
	 * @param int $height <p>枠の高さ。</p>
	 * @param int $inner_bevel <p>内側の影の幅。</p>
	 * @param int $outer_bevel <p>外側の影の幅。</p>
	 * @return Gmagick <p>枠線をつけた Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.frameimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function frameimage(\GmagickPixel $color, int $width, int $height, int $inner_bevel, int $outer_bevel): \Gmagick {}

	/**
	 * 画像をガンマ補正する
	 * <p>画像をガンマ補正します。同じ画像でも、 異なるデバイス上で見ると見た目が変わることがあります。 これは、画面上に画像の輝度を表現する方法がことなるためです。 赤、緑、青の各チャネルに個別のガンマレベルを指定するか、 あるいはすべてのチャネルに共通のガンマレベルを指定します。 値の典型的な範囲は、0.8 から 2.3 の間となります。</p>
	 * @param float $gamma <p>ガンマ補正の量。</p>
	 * @return Gmagick <p>ガンマ補正した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.gammaimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function gammaimage(float $gamma): \Gmagick {}

	/**
	 * GraphicsMagick API の著作権情報を文字列で返す
	 * <p>GraphicsMagick API の著作権情報を文字列で返します。</p>
	 * @return string <p>GraphicsMagick および Magickwand C API の著作権情報を含む文字列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getcopyright.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getcopyright(): string {}

	/**
	 * 画像シーケンスに関連付けられたファイル名を取得する
	 * <p>画像シーケンスに関連付けられたファイル名を取得します。</p>
	 * @return string <p>成功した場合に文字列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getfilename.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfilename(): string {}

	/**
	 * 画像の背景色を返す
	 * <p>画像の背景色を返します。</p>
	 * @return GmagickPixel <p>画像の背景色を設定した GmagickPixel を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagebackgroundcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagebackgroundcolor(): \GmagickPixel {}

	/**
	 * 青が一番強い点を返す
	 * <p>青が一番強い点を返します。</p>
	 * @return array <p>"x" 座標および "y" 座標を含む配列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageblueprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageblueprimary(): array {}

	/**
	 * 画像の前景色を返す
	 * <p>画像の前景色を返します。</p>
	 * @return GmagickPixel <p>画像の前景色を表す GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagebordercolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagebordercolor(): \GmagickPixel {}

	/**
	 * 特定の画像チャネルの深度を返す
	 * <p>特定の画像チャネルの深度を返します。</p>
	 * @param int $channel_type
	 * @return int <p>画像チャネルの深度を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagechanneldepth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagechanneldepth(int $channel_type): int {}

	/**
	 * 指定した色マップインデックスの色を返す
	 * <p>指定した色マップインデックスの色を返します。</p>
	 * @return int <p>画像内の色の数を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagecolors.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagecolors(): int {}

	/**
	 * 画像の色空間を取得する
	 * <p>画像の色空間を取得します。</p>
	 * @return int <p>色空間を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagecolorspace.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagecolorspace(): int {}

	/**
	 * 画像の合成演算子を返す
	 * <p>画像に関連付けられている合成演算子を返します。</p>
	 * @return int <p>画像に関連付けられている合成演算子を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagecompose.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagecompose(): int {}

	/**
	 * 画像の遅延を取得する
	 * <p>画像の遅延を取得します。</p>
	 * @return int <p>画像の遅延を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagedelay.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagedelay(): int {}

	/**
	 * 画像の深度を取得する
	 * <p>画像の深度を取得します。</p>
	 * @return int <p>画像の深度を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagedepth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagedepth(): int {}

	/**
	 * 画像の配置方法を取得する
	 * <p>画像の配置方法を取得します。</p>
	 * @return int <p>画像の配置方法を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagedispose.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagedispose(): int {}

	/**
	 * 画像の極値を取得する
	 * <p>画像の極値を取得します。 "min" および "max" というキーを持つ連想配列を返します。</p>
	 * @return array <p>"min" および "max" というキーを持つ連想配列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageextrema.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageextrema(): array {}

	/**
	 * シーケンス内の特定の画像のファイル名を返す
	 * <p>シーケンス内の特定の画像のファイル名を返します。</p>
	 * @return string <p>画像のファイル名を文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagefilename.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagefilename(): string {}

	/**
	 * シーケンス内の特定の画像のフォーマットを返す
	 * <p>シーケンス内の特定の画像のフォーマットを返します。</p>
	 * @return string <p>成功した場合は画像のフォーマットを文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageformat.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageformat(): string {}

	/**
	 * 画像のガンマを取得する
	 * <p>画像のガンマを取得します。</p>
	 * @return float <p>成功した場合にガンマを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagegamma.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagegamma(): float {}

	/**
	 * 緑が一番強い点を返す
	 * <p>緑が一番強い点を返します。"x" および "y" というキーを持つ配列を返します。</p>
	 * @return array <p>成功した場合に "x" および "y" というキーを持つ配列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagegreenprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagegreenprimary(): array {}

	/**
	 * 画像の高さを返す
	 * <p>画像の高さを返します。</p>
	 * @return int <p>画像の高さをピクセル数で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageheight.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageheight(): int {}

	/**
	 * 画像のヒストグラムを取得する
	 * <p>画像のヒストグラムを ImagickPixel オブジェクトの配列で返します。</p>
	 * @return array <p>画像のヒストグラムを GmagickPixel オブジェクトの配列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagehistogram.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagehistogram(): array {}

	/**
	 * 現在アクティブな画像のインデックスを取得する
	 * <p>Gmagick オブジェクト内で現在アクティブな画像のインデックスを取得します。</p>
	 * @return int <p>現在アクティブな画像のインデックスを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageindex.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageindex(): int {}

	/**
	 * 画像のインターレース手法を取得する
	 * <p>画像のインターレース手法を取得します。</p>
	 * @return int <p>成功した場合に画像のインターレース手法を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageinterlacescheme.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageinterlacescheme(): int {}

	/**
	 * 画像の反復を取得する
	 * <p>画像の反復を取得します。</p>
	 * @return int <p>画像の反復を表す整数値を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageiterations.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageiterations(): int {}

	/**
	 * 画像がマットチャネルを持っているかどうかを調べる
	 * <p>画像がマットチャネルを持っている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @return int <p>画像がマットチャネルを持っている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagematte.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagematte(): int {}

	/**
	 * 画像のマット色を返す
	 * <p>成功した場合に GmagickPixel オブジェクトを返します。エラー時に GmagickException をスローします。</p>
	 * @return GmagickPixel <p>成功した場合に GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagemattecolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagemattecolor(): \GmagickPixel {}

	/**
	 * 指定した名前の画像プロファイルを返す
	 * <p>指定した名前の画像プロファイルを返します。</p>
	 * @param string $name
	 * @return string <p>画像プロファイルを含む文字列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageprofile.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageprofile(string $name): string {}

	/**
	 * 赤が一番強い点を返す
	 * <p>赤が一番強い点を返します。"x" および "y" というキーを持つ配列を返します。</p>
	 * @return array <p>赤が一番強い点を "x" および "y" というキーを持つ配列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageredprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageredprimary(): array {}

	/**
	 * 画像のレンダリング方向を取得する
	 * <p>画像のレンダリング方向を取得します。</p>
	 * @return int <p>画像のレンダリング方向を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagerenderingintent.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagerenderingintent(): int {}

	/**
	 * 画像の X 方向と Y 方向の解像度を取得する
	 * <p>解像度を配列で取得します。</p>
	 * @return array <p>解像度を配列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageresolution.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageresolution(): array {}

	/**
	 * 画像のシーンを取得する
	 * <p>画像のシーンを取得します。</p>
	 * @return int <p>画像のシーンを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagescene.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagescene(): int {}

	/**
	 * SHA-256 メッセージダイジェストを生成する
	 * <p>画像ピクセルストリームの SHA-256 メッセージダイジェストを生成します。</p>
	 * @return string <p>そのファイルの SHA-256 ハッシュを文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagesignature.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagesignature(): string {}

	/**
	 * 画像の型を取得する
	 * <p>画像の型を取得します。</p>
	 * @return int <p>画像の型を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagetype.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagetype(): int {}

	/**
	 * 画像の解像度の単位を取得する
	 * <p>画像の解像度の単位を取得します。</p>
	 * @return int <p>画像の解像度の単位を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimageunits.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimageunits(): int {}

	/**
	 * 色度が白い点を返す
	 * <p>色度が白い点を返します。 "x" および "y" というキーを持つ連想配列となります。</p>
	 * @return array <p>色度が白い点を返します。 "x" および "y" というキーを持つ連想配列となります。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagewhitepoint.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagewhitepoint(): array {}

	/**
	 * 画像の幅を返す
	 * <p>画像の幅を返します。</p>
	 * @return int <p>画像の幅を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getimagewidth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getimagewidth(): int {}

	/**
	 * GraphicsMagick パッケージ名を返す
	 * <p>GraphicsMagick パッケージ名を返します。</p>
	 * @return string <p>GraphicsMagick パッケージ名を文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getpackagename.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getpackagename(): string {}

	/**
	 * Gmagick quantum depth を返す
	 * <p>Gmagick quantum depth を文字列で返します。</p>
	 * @return array <p>Gmagick quantum depth を文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getquantumdepth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getquantumdepth(): array {}

	/**
	 * GraphicsMagick のリリース日を返す
	 * <p>GraphicsMagick のリリース日を文字列で返します。</p>
	 * @return string <p>GraphicsMagick のリリース日を文字列で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getreleasedate.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getreleasedate(): string {}

	/**
	 * 水平方向および垂直方向のサンプリング係数を取得する
	 * <p>水平方向および垂直方向のサンプリング係数を取得します。</p>
	 * @return array <p>画像の水平方向および垂直方向のサンプリング係数を含む連想配列を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getsamplingfactors.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getsamplingfactors(): array {}

	/**
	 * Gmagick オブジェクトのサイズを取得する
	 * <p>Gmagick オブジェクトのサイズを返します。 "columns" および "rows" というキーを持つ連想配列となります。</p>
	 * @return array <p>Gmagick オブジェクトのサイズを返します。 "columns" および "rows" というキーを持つ連想配列となります。</p>
	 * @link http://php.net/manual/ja/gmagick.getsize.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getsize(): array {}

	/**
	 * GraphicsMagick API のバージョンを返す
	 * <p>GraphicsMagick API のバージョンを文字列と数値で返します。</p>
	 * @return array <p>GraphicsMagick API のバージョンを文字列と数値で返します。</p>
	 * @link http://php.net/manual/ja/gmagick.getversion.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getversion(): array {}

	/**
	 * オブジェクトが次の画像を保持しているかどうかを調べる
	 * <p>リスト内でひとつ先に進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b> を返します。</p>
	 * @return mixed <p>リスト内でひとつ先に進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b>、していなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.hasnextimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function hasnextimage() {}

	/**
	 * オブジェクトが前の画像を保持しているかどうかを調べる
	 * <p>リスト内で逆方向にひとつ進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b> を返します。</p>
	 * @return mixed <p>リスト内で逆方向にひとつ進んだときにまだオブジェクトが画像を保持していれば <b><code>TRUE</code></b>、していなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.haspreviousimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function haspreviousimage() {}

	/**
	 * 新しい画像をコピーとして作成する
	 * <p>既存の画像をコピーして新しい画像を作成します。 既存の画像のピクセルを、指定したパーセンテージで "内破" します。</p>
	 * @param float $radius <p>内破処理の半径。</p>
	 * @return mixed <p>内破した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.implodeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function implodeimage(float $radius) {}

	/**
	 * ラベルを画像に追加する
	 * <p>ラベルを画像に追加します。</p>
	 * @param string $label <p>追加するラベル。</p>
	 * @return mixed <p>ラベルを追加した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.labelimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function labelimage(string $label) {}

	/**
	 * 画像のレベルを調節する
	 * <p>画像のレベルを調整します。 指定した白と黒の範囲にある色を、利用可能な色の範囲全体に拡大します。 黒の点、中間点、白の点をパラメータで指定します。 黒の点は、画像の中で一番暗い色を表します。 これより暗い色の点はゼロに設定されます。 中間点は、画像に適用するガンマ補正を指定します。 黒の点は、画像の中で一番明るい色を表します。 これより明るい色の点は最大値に設定されます。</p>
	 * @param float $blackPoint <p>画像の黒の点。</p>
	 * @param float $gamma <p>ガンマ値。</p>
	 * @param float $whitePoint <p>画像の白の点。</p>
	 * @param int $channel <p>チャネルモードに対応したチャネル定数を指定します。 複数のチャネルに適用するには、 ビット演算子でチャネル型定数を組み合わせます。 チャネル定数 の一覧を参照ください。</p>
	 * @return mixed <p>画像のレベルを調節した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.levelimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Gmagick::CHANNEL_DEFAULT) {}

	/**
	 * 画像を二倍に比例拡大する
	 * <p>画像を元のサイズの二倍に比例拡大します。</p>
	 * @return mixed <p>拡大した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.magnifyimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function magnifyimage() {}

	/**
	 * 画像の色を、参照画像の中の最も近い色に置き換える
	 * <p>画像の色を、参照画像の中の最も近い色に置き換えます。</p>
	 * @param \gmagick $gmagick <p>参照する画像。</p>
	 * @param bool $dither <p>ゼロ以外の整数値を設定して、マップした画像をディザリングします。</p>
	 * @return Gmagick <p>Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.mapimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function mapimage(\gmagick $gmagick, bool $dither): \Gmagick {}

	/**
	 * デジタルフィルタを適用する
	 * <p>デジタルフィルタを適用してノイジーな画像の品質を向上させます。 各ピクセルの内容を、radius で定義した近傍ピクセルの中央値で置き換えます。</p>
	 * @param float $radius <p>近傍ピクセルの半径。</p>
	 * @return void <p>メジアンフィルタを適用した Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.medianfilterimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function medianfilterimage(float $radius): void {}

	/**
	 * 画像をその半分のサイズに比例縮小する
	 * <p>画像のサイズを元の半分に比例縮小します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.minifyimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function minifyimage(): \Gmagick {}

	/**
	 * 明度、彩度、色相を制御する
	 * <p>画像の明度、彩度、色相を制御します。 色相は、現在位置からの絶対回転角のパーセンテージで表します。 たとえば 50 の場合は反時計回りに 90 度の回転を表します。 また 150 の場合は時計回りの 90 度の回転、0 および 200 はともに 180 度の回転を表します。</p>
	 * @param float $brightness <p>画像の明度 (-100 から +100)。</p>
	 * @param float $saturation <p>画像の彩度 (-100 から +100)。</p>
	 * @param float $hue <p>画像の色相 (-100 から +100)。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.modulateimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function modulateimage(float $brightness, float $saturation, float $hue): \Gmagick {}

	/**
	 * モーションブラーをシミュレートする
	 * <p>モーションブラーをシミュレートします。 指定した半径と標準偏差 (シグマ) によるガウス演算によって画像を畳み込みます。 意味のある結果を得るには、半径がシグマより大きくなければなりません。 radius に 0 を指定すると、MotionBlurImage() が適切な半径を自動的に設定します。 angle にはぼかしをかける角度を指定します。</p>
	 * @param float $radius <p>ガウス演算の半径。ピクセル単位で指定し、中心は計算に入れません。</p>
	 * @param float $sigma <p>ガウス演算の標準偏差。ピクセル単位で指定します。</p>
	 * @param float $angle <p>この角度で効果を適用します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.motionblurimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function motionblurimage(float $radius, float $sigma, float $angle): \Gmagick {}

	/**
	 * 新しい画像を作成する
	 * <p>新しい画像を作成し、背景色を設定します。</p>
	 * @param int $width <p>新しい画像の幅。</p>
	 * @param int $height <p>新しい画像の高さ。</p>
	 * @param string $background <p>この画像で使う背景色 (浮動小数点数)。</p>
	 * @param string $format <p>画像フォーマット。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.newimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function newimage(int $width, int $height, string $background, string $format = NULL): \Gmagick {}

	/**
	 * 次の画像に移動する
	 * <p>画像リスト内の次の画像を Gmagick オブジェクトに関連付けます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.nextimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function nextimage(): bool {}

	/**
	 * カラー画像のコントラストを強調する
	 * <p>カラー画像のコントラストを強調します。 ピクセルの色を、とりうる値の範囲全体に拡張します。</p>
	 * @param int $channel <p>どのチャネルを正規化するか。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.normalizeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function normalizeimage(int $channel = NULL): \Gmagick {}

	/**
	 * 油絵をシミュレートする
	 * <p>油絵風の効果を施すフィルタを適用します。 各ピクセルが、指定した半径内の周囲の中で最もよくあらわれる色に置き換えられます。</p>
	 * @param float $radius <p>近傍円の半径。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.oilpaintimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function oilpaintimage(float $radius): \Gmagick {}

	/**
	 * オブジェクト内の前の画像に移動する
	 * <p>画像リスト内の前の画像を Gmagick オブジェクトに関連付けます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagick.previousimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function previousimage(): bool {}

	/**
	 * 画像のプロファイルを追加あるいは削除する
	 * <p>ICC、IPTC あるいは汎用のプロファイルを画像に追加あるいは削除します。 profile が NULL の場合は画像からプロファイルを削除し、 それ以外の場合は追加します。 name に '&#42;'、profile に NULL を指定すると、画像からすべてのプロパティを削除します。</p>
	 * @param string $name <p>追加あるいは削除するプロファイルの名前。ICC、IPTC、あるいは generic。</p>
	 * @param string $profile <p>プロファイル。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.profileimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function profileimage(string $name, string $profile): \Gmagick {}

	/**
	 * 参照画像内の色を解析する
	 * <p>参照画像内の色を解析し、その画像を表すための色を固定の色数で選びます。 そのアルゴリズムの目標は、入力画像と出力画像の色の差を最小限に抑えながらも 処理時間を短くすることです。</p>
	 * @param int $numColors <p>色数。</p>
	 * @param int $colorspace <p>この色空間の中で色数を減らす。通常は RGBColorspace。</p>
	 * @param int $treeDepth <p>通常は、この整数値は 0 か 1 になります。 0 あるいは 1 を指定すると、Quantize に最適なツリーの深さとして Log4(number_colors) を選ばせます。 この深さのツリーは一般に、最小のメモリー消費で最大の計算速度を得られる最良の参照画像表現法になります。 色数が少ないなど、場合によっては Log4(number_colors) 以外の値が必要になることもあります。 色ツリーを完全に広げるには、この値を 8 にします。</p>
	 * @param bool $dither <p>ゼロ以外の値を元の画像との間の違いに分配し、 対応する減色アルゴリズムを近傍ピクセルとのヒルベルト曲線に沿ったものにします。</p>
	 * @param bool $measureError <p>ゼロ以外の値で、元画像と量子化した画像の違いを計測します。 この違いが、全体の量子化エラーになります。 エラーを判定するために、画像内の全ピクセルを計算し、 RGB 空間において参照画像と量子化語のピクセルの差を合計します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.quantizeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function quantizeimage(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): \Gmagick {}

	/**
	 * 画像シーケンス内の色を解析する
	 * <p>画像シーケンス内の色を解析し、その画像を表すための色を固定の色数で選びます。 そのアルゴリズムの目標は、入力画像と出力画像の色の差を最小限に抑えながらも 処理時間を短くすることです。</p>
	 * @param int $numColors <p>色数。</p>
	 * @param int $colorspace <p>この色空間の中で色数を減らす。通常は RGBColorspace。</p>
	 * @param int $treeDepth <p>通常は、この整数値は 0 か 1 になります。 0 あるいは 1 を指定すると、Quantize に最適なツリーの深さとして Log4(number_colors) を選ばせます。 この深さのツリーは一般に、最小のメモリー消費で最大の計算速度を得られる最良の参照画像表現法になります。 色数が少ないなど、場合によっては Log4(number_colors) 以外の値が必要になることもあります。 色ツリーを完全に広げるには、この値を 8 にします。</p>
	 * @param bool $dither <p>ゼロ以外の値を元の画像との間の違いに分配し、 対応する減色アルゴリズムを近傍ピクセルとのヒルベルト曲線に沿ったものにします。</p>
	 * @param bool $measureError <p>ゼロ以外の値で、元画像と量子化した画像の違いを計測します。 この違いが、全体の量子化エラーになります。 エラーを判定するために、画像内の全ピクセルを計算し、 RGB 空間において参照画像と量子化語のピクセルの差を合計します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.quantizeimages.php
	 * @since PECL gmagick >= Unknown
	 */
	public function quantizeimages(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): \Gmagick {}

	/**
	 * フォントメトリクスを表す配列を返す
	 * <p>MagickQueryFontMetrics() は、フォントメトリクスを表す多次元配列を返します。</p>
	 * @param \GmagickDraw $draw
	 * @param string $text
	 * @return array <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.queryfontmetrics.php
	 * @since PECL gmagick >= Unknown
	 */
	public function queryfontmetrics(\GmagickDraw $draw, string $text): array {}

	/**
	 * 設定したフォントを返す
	 * <p>設定したフォントを返します。</p>
	 * @param string $pattern
	 * @return array <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.queryfonts.php
	 * @since PECL gmagick >= Unknown
	 */
	public function queryfonts(string $pattern = "*"): array {}

	/**
	 * Gmagick がサポートするフォーマットを返す
	 * <p>Gmagick がサポートするフォーマットを返します。</p>
	 * @param string $pattern <p>パターンを含む文字列へのポインタを指定します。</p>
	 * @return array <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.queryformats.php
	 * @since PECL gmagick >= Unknown
	 */
	public function queryformats(string $pattern = "*"): array {}

	/**
	 * 画像にラジアルブラーを施す
	 * <p>画像にラジアルブラーを施します。</p>
	 * @param float $angle <p>ラジアルブラーの角度。</p>
	 * @param int $channel <p>関連するチャネル。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.radialblurimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function radialblurimage(float $angle, int $channel = Gmagick::CHANNEL_DEFAULT): \Gmagick {}

	/**
	 * 三次元のボタン風の効果をシミュレートする
	 * <p>画像の輪郭を明るくしたり暗くしたりすることによって、 三次元のボタン風の効果をシミュレートします。 raise_info のメンバ width および height が、 垂直方向および水平方向の効果の輪郭を定義します。</p>
	 * @param int $width <p>明るくする範囲の幅。</p>
	 * @param int $height <p>明るくする範囲の高さ。</p>
	 * @param int $x <p>X 座標。</p>
	 * @param int $y <p>Y 座標。</p>
	 * @param bool $raise <p>ゼロ以外の値を指定すると三次元の引き上げ効果、ゼロの場合は引き下げ効果。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.raiseimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): \Gmagick {}

	/**
	 * ファイルから画像を読み込む
	 * <p>ファイルから画像を読み込みます。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.read.php
	 * @since PECL gmagick >= Unknown
	 */
	public function read(string $filename): \Gmagick {}

	/**
	 * ファイルから画像を読み込む
	 * <p>ファイルから画像を読み込みます。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.readimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function readimage(string $filename): \Gmagick {}

	/**
	 * バイナリ文字列から画像を読み込む
	 * <p>バイナリ文字列から画像を読み込みます。</p>
	 * @param string $imageContents <p>画像の内容。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.readimageblob.php
	 * @since PECL gmagick >= Unknown
	 */
	public function readimageblob(string $imageContents, string $filename = NULL): \Gmagick {}

	/**
	 * オープンしているファイルハンドルから画像を読み込む
	 * <p>オープンしているファイルハンドルから画像を読み込みます。</p>
	 * @param resource $fp <p>ファイルディスクリプタ。</p>
	 * @param string $filename
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.readimagefile.php
	 * @since PECL gmagick >= Unknown
	 */
	public function readimagefile($fp, string $filename = NULL): \Gmagick {}

	/**
	 * 画像の輪郭をなめらかにする
	 * <p>画像の輪郭をなめらかにします。縁の情報は保持します。 各ピクセルの内容を近傍の一番近い値で置き換えるというアルゴリズムです。 近傍は半径で定義します。radius に 0 を指定すると、 Gmagick::reduceNoiseImage() が適切な半径を自動的に設定します。</p>
	 * @param float $radius <p>近傍ピクセルの半径。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.reducenoiseimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function reducenoiseimage(float $radius): \Gmagick {}

	/**
	 * 画像リストから画像を削除する
	 * <p>画像リストから画像を削除します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.removeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function removeimage(): \Gmagick {}

	/**
	 * 指定した名前の画像プロファイルを削除して返す
	 * <p>指定した名前の画像プロファイルを削除して返します。</p>
	 * @param string $name <p>返すプロファイルの名前。ICC、IPTC あるいは generic。</p>
	 * @return string <p>指定した名前のプロファイルを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.removeimageprofile.php
	 * @since PECL gmagick >= Unknown
	 */
	public function removeimageprofile(string $name): string {}

	/**
	 * 画像を指定した解像度にリサンプリングする
	 * <p>画像を指定した解像度にリサンプリングします。</p>
	 * @param float $xResolution <p>新しい画像の x 方向の解像度。</p>
	 * @param float $yResolution <p>新しい画像の y 方向の解像度。</p>
	 * @param int $filter <p>利用するフィルタ。</p>
	 * @param float $blur <p>blur 要素。&gt; 1 はぼやけた状態、&lt; 1 はシャープな状態を表します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.resampleimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function resampleimage(float $xResolution, float $yResolution, int $filter, float $blur): \Gmagick {}

	/**
	 * 画像のサイズを変更する
	 * <p>指定した大きさとフィルタで、画像のサイズを変更します。</p>
	 * @param int $width <p>画像の幅。</p>
	 * @param int $height <p>画像の高さ。</p>
	 * @param int $filter <p>利用するフィルタ。</p>
	 * @param float $blur <p>blur 要素。&gt; 1 はぼやけた状態、&lt; 1 はシャープな状態を表します。</p>
	 * @param bool $fit
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.resizeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function resizeimage(int $width, int $height, int $filter, float $blur, bool $fit = FALSE): \Gmagick {}

	/**
	 * 画像を補正する
	 * <p>x および y を指定して画像を補正します。</p>
	 * @param int $x <p>x オフセット。</p>
	 * @param int $y <p>y オフセット。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.rollimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function rollimage(int $x, int $y): \Gmagick {}

	/**
	 * 画像を回転する
	 * <p>指定した角度だけ画像を回転させます。回転によって生じる空き領域は、 背景色で埋められます。</p>
	 * @param mixed $color <p>背景色。</p>
	 * @param float $degrees <p>画像を回転させる度数。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.rotateimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function rotateimage($color, float $degrees): \Gmagick {}

	/**
	 * 画像のサイズを変更する
	 * <p>画像のサイズを指定した大きさに変更します。 パラメータに 0 を指定すると、そのパラメータを自動的に計算します。</p>
	 * @param int $width <p>変更後の画像の幅。</p>
	 * @param int $height <p>変更後の画像の高さ。</p>
	 * @param bool $fit
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.scaleimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function scaleimage(int $width, int $height, bool $fit = FALSE): \Gmagick {}

	/**
	 * 画像からチャネルを分離する
	 * <p>画像からチャネルを分離し、グレースケール画像を返します。 channel には、画像の各ピクセルの特定の色コンポーネントを指定します。</p>
	 * @param int $channel <p>どのチャネルを取り出すか。RedChannel、GreenChannel、BlueChannel、OpacityChannel、 CyanChannel、MagentaChannel、YellowChannel、BlackChannel。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.separateimagechannel.php
	 * @since PECL gmagick >= Unknown
	 */
	public function separateimagechannel(int $channel): \Gmagick {}

	/**
	 * Sets the object's default compression quality
	 * <p>Sets the object's default compression quality.</p>
	 * @param int $quality
	 * @return Gmagick <p>The Gmagick object on success</p>
	 * @link http://php.net/manual/ja/gmagick.setcompressionquality.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function setCompressionQuality(int $quality = 75): \Gmagick {}

	/**
	 * 画像を読み書きする前にファイル名を設定する
	 * <p>画像を読み書きする前にファイル名を設定します。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setfilename.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfilename(string $filename): \Gmagick {}

	/**
	 * 画像の背景色を設定する
	 * <p>画像の背景色を設定します。</p>
	 * @param \GmagickPixel $color <p>画像の背景色。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagebackgroundcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagebackgroundcolor(\GmagickPixel $color): \Gmagick {}

	/**
	 * 青が一番強い点を設定する
	 * <p>青が一番強い点を設定します。</p>
	 * @param float $x <p>青が一番強い点の x 座標。</p>
	 * @param float $y <p>青が一番強い点の y 座標。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageblueprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageblueprimary(float $x, float $y): \Gmagick {}

	/**
	 * 画像の枠線の色を設定する
	 * <p>画像の枠線の色を設定します。</p>
	 * @param \GmagickPixel $color <p>画像の前景色。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagebordercolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagebordercolor(\GmagickPixel $color): \Gmagick {}

	/**
	 * 特定の画像チャネルの深度を設定する
	 * <p>特定の画像チャネルの深度を設定します。</p>
	 * @param int $channel <p>抽出するチャネル。RedChannel、GreenChannel、BlueChannel、OpacityChannel、 CyanChannel、MagentaChannel、YellowChannel、BlackChannel。</p>
	 * @param int $depth <p>深度を表すビット数。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagechanneldepth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagechanneldepth(int $channel, int $depth): \Gmagick {}

	/**
	 * 画像の色空間を設定する
	 * <p>画像の色空間を設定します。</p>
	 * @param int $colorspace <p>画像の色空間。UndefinedColorspace、RGBColorspace、GRAYColorspace、TransparentColorspace、 OHTAColorspace、XYZColorspace、YCbCrColorspace、YCCColorspace、YIQColorspace、 YPbPrColorspace、YPbPrColorspace、YUVColorspace、CMYKColorspace、sRGBColorspace、HSLColorspace あるいは HWBColorspace。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagecolorspace.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagecolorspace(int $colorspace): \Gmagick {}

	/**
	 * 画像の合成演算子を設定する
	 * <p>画像の合成演算子を設定します。</p>
	 * @param int $composite <p>画像の合成演算子。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagecompose.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagecompose(int $composite): \Gmagick {}

	/**
	 * 画像の遅延を設定する
	 * <p>画像の遅延を設定します。</p>
	 * @param int $delay <p>画像の遅延を 1/100 秒単位で指定します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagedelay.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagedelay(int $delay): \Gmagick {}

	/**
	 * 画像の深度を設定する
	 * <p>画像の深度を設定します。</p>
	 * @param int $depth <p>画像の深度 (ビット)。8、16 あるいは 32。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagedepth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagedepth(int $depth): \Gmagick {}

	/**
	 * 画像の配置方法を設定する
	 * <p>画像の配置方法を設定します。</p>
	 * @param int $disposeType <p>画像の配置方法。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagedispose.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagedispose(int $disposeType): \Gmagick {}

	/**
	 * シーケンス内の特定の画像のファイル名を設定する
	 * <p>シーケンス内の特定の画像のファイル名を設定します。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagefilename.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagefilename(string $filename): \Gmagick {}

	/**
	 * 特定の画像のフォーマットを設定する
	 * <p>シーケンス内の特定の画像のフォーマットを設定します。</p>
	 * @param string $imageFormat <p>画像のフォーマット。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageformat.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageformat(string $imageFormat): \Gmagick {}

	/**
	 * 画像のガンマを設定する
	 * <p>画像のガンマを設定します。</p>
	 * @param float $gamma <p>画像のガンマ。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagegamma.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagegamma(float $gamma): \Gmagick {}

	/**
	 * 緑が一番強い点を設定する
	 * <p>緑が一番強い点を設定します。</p>
	 * @param float $x <p>緑が一番強い点の x 座標。</p>
	 * @param float $y <p>緑が一番強い点の y 座標。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagegreenprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagegreenprimary(float $x, float $y): \Gmagick {}

	/**
	 * 画像リスト内でのイテレータの位置を、index パラメータで指定した場所に設定する
	 * <p>画像リスト内でのイテレータの位置を、index パラメータで指定した場所に設定します。</p>
	 * @param int $index <p>シーン番号。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageindex.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageindex(int $index): \Gmagick {}

	/**
	 * 画像のインターレース手法を設定する
	 * <p>画像のインターレース手法を設定します。</p>
	 * @param int $interlace <p>画像のインターレース手法。NoInterlace、LineInterlace、PlaneInterlace、PartitionInterlace。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageinterlacescheme.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageinterlacescheme(int $interlace): \Gmagick {}

	/**
	 * 画像の反復を設定する
	 * <p>画像の反復を設定します。</p>
	 * @param int $iterations <p>画像の遅延を 1/100 秒単位で指定します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageiterations.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageiterations(int $iterations): \Gmagick {}

	/**
	 * 指定した名前の画像プロファイルを Gmagick オブジェクトに追加する
	 * <p>指定した名前の画像プロファイルを Gmagick オブジェクトに追加します。 同じ名前のプロファイルが存在する場合は、それを置き換えます。 このメソッドは Gmagick::profileImage() メソッドとは異なり、 CMS カラープロファイルは適用しません。</p>
	 * @param string $name <p>追加あるいは削除するプロファイルの名前。ICC、IPTC あるいは generic。</p>
	 * @param string $profile <p>プロファイル。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageprofile.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageprofile(string $name, string $profile): \Gmagick {}

	/**
	 * 赤が一番強い点を設定する
	 * <p>赤が一番強い点を設定します。</p>
	 * @param float $x <p>赤が一番強い点の x 座標。</p>
	 * @param float $y <p>赤が一番強い点の y 座標。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageredprimary.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageredprimary(float $x, float $y): \Gmagick {}

	/**
	 * 画像のレンダリング方向を設定する
	 * <p>画像のレンダリング方向を設定します。</p>
	 * @param int $rendering_intent <p>画像のレンダリング方向。UndefinedIntent、SaturationIntent、PerceptualIntent、AbsoluteIntent あるいは RelativeIntent。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagerenderingintent.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagerenderingintent(int $rendering_intent): \Gmagick {}

	/**
	 * 画像の解像度を設定する
	 * <p>画像の解像度を設定します。</p>
	 * @param float $xResolution <p>x 方向の解像度。</p>
	 * @param float $yResolution <p>y 方向の解像度。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageresolution.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageresolution(float $xResolution, float $yResolution): \Gmagick {}

	/**
	 * 画像のシーンを設定する
	 * <p>画像のシーンを設定します。</p>
	 * @param int $scene <p>画像のシーン番号。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagescene.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagescene(int $scene): \Gmagick {}

	/**
	 * 画像の型を設定する
	 * <p>画像の型を設定します。</p>
	 * @param int $imgType <p>画像の型。UndefinedType、BilevelType、GrayscaleType、 GrayscaleMatteType、PaletteType、PaletteMatteType、TrueColorType、 TrueColorMatteType、ColorSeparationType、ColorSeparationMatteType あるいは OptimizeType。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagetype.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagetype(int $imgType): \Gmagick {}

	/**
	 * 画像の解像度の単位を設定する
	 * <p>画像の解像度の単位を設定します。</p>
	 * @param int $resolution <p>画像の解像度の単位。Undefinedresolution、PixelsPerInchResolution あるいは PixelsPerCentimeterResolution。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimageunits.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimageunits(int $resolution): \Gmagick {}

	/**
	 * 画像の色度が白い点を設定する
	 * <p>画像の色度が白い点を設定します。</p>
	 * @param float $x <p>白い点の x 座標。</p>
	 * @param float $y <p>白い点の y 座標。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setimagewhitepoint.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setimagewhitepoint(float $x, float $y): \Gmagick {}

	/**
	 * 画像のサンプリング係数を設定する
	 * <p>画像のサンプリング係数を設定します。</p>
	 * @param array $factors <p>各色コンポーネントのサンプリング係数を表す double 型の値の配列 (RGB 順)。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setsamplingfactors.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setsamplingfactors(array $factors): \Gmagick {}

	/**
	 * Gmagick オブジェクトのサイズを設定する
	 * <p>Gmagick オブジェクトのサイズを設定します。 RGB や GRAY、CMYK といった生の画像フォーマットを読み込む前に設定します。</p>
	 * @param int $columns <p>ピクセル数で指定する幅。</p>
	 * @param int $rows <p>ピクセル数で指定する高さ。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.setsize.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setsize(int $columns, int $rows): \Gmagick {}

	/**
	 * 平行四辺形を作成する
	 * <p>画像を X 軸方向あるいは Y 軸方向に押しつぶし、平行四辺形を作成します。 X 方向に押しつぶすと X 軸方向にスライドし、Y 方向に押しつぶすと Y 軸方向にスライドします。押しつぶす量は、角度で指定します。 X 方向に押しつぶす場合、x_shear は Y 軸からの相対角度となります。 同様に、Y 方向に押しつぶす場合は y_shear が X 軸からの相対角度となります。 変形によってできた空白部分は、背景色で埋められます。</p>
	 * @param mixed $color <p>背景色。</p>
	 * @param float $xShear <p>x 軸方向に押しつぶす角度。</p>
	 * @param float $yShear <p>y 軸方向に押しつぶす角度。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.shearimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function shearimage($color, float $xShear, float $yShear): \Gmagick {}

	/**
	 * 画像にソラリゼーション効果を適用する
	 * <p>画像に特殊効果を施し、 印画紙の特定の箇所の露光時間を長くしたような画像になります。 threshold は 0 から QuantumRange までの値で、 ソラリゼーションの効き具合を指定します。</p>
	 * @param int $threshold <p>ソラリゼーションの効き具合を指定します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.solarizeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function solarizeimage(int $threshold): \Gmagick {}

	/**
	 * ブロック内の各ピクセルをランダムに移動する
	 * <p>radius パラメータで定義したブロック内の各ピクセルを、 ランダムに移動させます。</p>
	 * @param float $radius <p>この範囲の近くにあるランダムなピクセルを選びます。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.spreadimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function spreadimage(float $radius): \Gmagick {}

	/**
	 * 画像からすべてのプロパティやコメントを除去する
	 * <p>画像からすべてのプロパティやコメントを除去します。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.stripimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function stripimage(): \Gmagick {}

	/**
	 * 画像の中心から、ピクセルを渦巻状にする
	 * <p>画像の中心から、ピクセルを渦巻状にします。 degrees は個々のピクセルが移動する弧の量を表します。 degrees を 1 から 360 まで変化させると、劇的な効果が得られます。</p>
	 * @param float $degrees <p>渦巻効果の程度。</p>
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.swirlimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function swirlimage(float $degrees): \Gmagick {}

	/**
	 * 画像のサイズを変更する
	 * <p>画像のサイズを指定したものに変更し、関連付けられたプロパティをすべて削除します。 ウェブ上での表示に適した小さなサムネイル画像を作成します。 三番目のパラメータに <b><code>TRUE</code></b> を指定すると、columns や rows にそれぞれの最大値を使用します。両方のパラメータが、 マッチするまであるいは指定したパラメータより小さくなるまで縮小されます。</p>
	 * @param int $width <p>画像の幅。</p>
	 * @param int $height <p>画像の高さ。</p>
	 * @param bool $fit
	 * @return Gmagick <p>成功した場合に Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.thumbnailimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function thumbnailimage(int $width, int $height, bool $fit = FALSE): \Gmagick {}

	/**
	 * 画像の輪郭を削除する
	 * <p>画像の背景色と同じ色の輪郭を削除します。</p>
	 * @param float $fuzz <p>デフォルトでは、対象の色は特定のピクセルの色とまったく同じでなければなりません。 しかし、ふたつの色が微妙に異なることもよくあります。 画像の fuzz メンバは、どの程度の色を「同じ色」とみなすかを表します。 このパラメータは、量の範囲の変化を表します。</p>
	 * @return Gmagick <p>Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.trimimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function trimimage(float $fuzz): \Gmagick {}

	/**
	 * 画像を指定したファイル名で書き出す
	 * <p>画像を指定したファイル名で書き出します。filename が NULL の場合は、 Gmagick::ReadImage() あるいは Gmagick::SetImageFilename() で設定したファイル名で書き出します。</p>
	 * @param string $filename <p>画像ファイル名。</p>
	 * @param bool $all_frames
	 * @return Gmagick <p>Gmagick オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagick.writeimage.php
	 * @since PECL gmagick >= Unknown
	 */
	public function writeimage(string $filename, bool $all_frames = FALSE): \Gmagick {}
}

/**
 * @link http://php.net/manual/ja/class.gmagickdraw.php
 * @since PECL gmagick >= Unknown
 */
class GmagickDraw {

	/**
	 * 画像の上にテキストを描画する
	 * <p>画像の上にテキストを描画します。</p>
	 * @param float $x <p>テキストの左端の x 座標。</p>
	 * @param float $y <p>テキストのベースラインの y 座標。</p>
	 * @param string $text <p>描画するテキスト。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.annotate.php
	 * @since PECL gmagick >= Unknown
	 */
	public function annotate(float $x, float $y, string $text): \GmagickDraw {}

	/**
	 * 弧を描く
	 * <p>指定した矩形内に収まる弧を、画像上に描きます。</p>
	 * @param float $sx <p>矩形の開始位置の x 座標。</p>
	 * @param float $sy <p>矩形の開始位置の y 座標。</p>
	 * @param float $ex <p>矩形の終了位置の x 座標。</p>
	 * @param float $ey <p>矩形の終了位置の y 座標。</p>
	 * @param float $sd <p>開始角度。</p>
	 * @param float $ed <p>終了角度。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.arc.php
	 * @since PECL gmagick >= Unknown
	 */
	public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): \GmagickDraw {}

	/**
	 * ベジエ曲線を描く
	 * <p>指定した点を通るベジエ曲線を画像上に描きます。</p>
	 * @param array $coordinate_array <p>座標の配列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.bezier.php
	 * @since PECL gmagick >= Unknown
	 */
	public function bezier(array $coordinate_array): \GmagickDraw {}

	/**
	 * 楕円を画像上に描く
	 * <p>楕円を画像上に描きます。</p>
	 * @param float $ox <p>原点の x 座標。</p>
	 * @param float $oy <p>原点の y 座標。</p>
	 * @param float $rx <p>x 方向の半径。</p>
	 * @param float $ry <p>y 方向の半径。</p>
	 * @param float $start <p>開始角度。</p>
	 * @param float $end <p>終了角度。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.ellipse.php
	 * @since PECL gmagick >= Unknown
	 */
	public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): \GmagickDraw {}

	/**
	 * 塗りつぶし色を返す
	 * <p>オブジェクトを塗りつぶすときに使う色を返します。</p>
	 * @return GmagickPixel <p>オブジェクトを塗りつぶすときに使う色の GmagickPixel を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfillcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfillcolor(): \GmagickPixel {}

	/**
	 * 描画に使う不透明度を返す
	 * <p>描画に使う不透明度を返します。</p>
	 * @return float <p>塗りつぶしの色やテクスチャに使う不透明度を返します。完全に不透明な状態が 1.0 になります。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfillopacity.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfillopacity(): float {}

	/**
	 * フォントを返す
	 * <p>テキストのアノテーションで使うフォントを表す文字列を返します。</p>
	 * @return mixed <p>成功した場合に文字列を返します。フォントが設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfont.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfont() {}

	/**
	 * フォントのポイント数を返す
	 * <p>テキストのアノテーションで使うフォントのポイント数を返します。</p>
	 * @return float <p>現在の GmagickDraw オブジェクトに関連づけられたフォントのサイズを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfontsize.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfontsize(): float {}

	/**
	 * フォントスタイルを返す
	 * <p>テキストのアノテーションで使うフォントのスタイルを返します。</p>
	 * @return int <p>GmagickDraw オブジェクトに関連づけられたフォントスタイル定数 (STYLE_) を返します。 スタイルが設定されていない場合は 0 を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfontstyle.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfontstyle(): int {}

	/**
	 * フォントのウェイトを返す
	 * <p>テキストのアノテーションで使うフォントのウェイトを返します。</p>
	 * @return int <p>成功した場合に整数値を返します。ウェイトが設定されていない場合は 0 を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getfontweight.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getfontweight(): int {}

	/**
	 * オブジェクトの輪郭の描画に使う色を返す
	 * <p>オブジェクトの輪郭の描画に使う色を返します。</p>
	 * @return GmagickPixel <p>色を表す GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getstrokecolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getstrokecolor(): \GmagickPixel {}

	/**
	 * オブジェクトの輪郭の不透明度を返す
	 * <p>オブジェクトの輪郭の不透明度を返します。</p>
	 * @return float <p>不透明度を表す浮動小数点数値を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getstrokeopacity.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getstrokeopacity(): float {}

	/**
	 * オブジェクトの輪郭の描画に使う線の幅を返す
	 * <p>オブジェクトの輪郭の描画に使う線の幅を返します。</p>
	 * @return float <p>線の幅を表す浮動小数点数値を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.getstrokewidth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getstrokewidth(): float {}

	/**
	 * テキストのデコレーションを返す
	 * <p>テキストのアノテーションに適用するデコレーションを返します。</p>
	 * @return int <p>DECORATION_ 定数のいずれかを返します。デコレーションが設定されていない場合は 0 を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.gettextdecoration.php
	 * @since PECL gmagick >= Unknown
	 */
	public function gettextdecoration(): int {}

	/**
	 * テキストのアノテーションで使うコードセットを返す
	 * <p>テキストのアノテーションで使うコードセットを表す文字列を返します。</p>
	 * @return mixed <p>コードセットを表す文字列を返します。 エンコーディングが設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.gettextencoding.php
	 * @since PECL gmagick >= Unknown
	 */
	public function gettextencoding() {}

	/**
	 * 直線を描く
	 * <p>現在の描画色、不透明度、線幅を使って画像上に直線を描きます。</p>
	 * @param float $sx <p>開始位置の x 座標。</p>
	 * @param float $sy <p>開始位置の y 座標。</p>
	 * @param float $ex <p>終了位置の x 座標。</p>
	 * @param float $ey <p>終了位置の y 座標。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.line.php
	 * @since PECL gmagick >= Unknown
	 */
	public function line(float $sx, float $sy, float $ex, float $ey): \GmagickDraw {}

	/**
	 * 点を描く
	 * <p>現在の描画色と太さを使って、指定した座標に点を描きます。</p>
	 * @param float $x <p>点の x 座標。</p>
	 * @param float $y <p>点の y 座標。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.point.php
	 * @since PECL gmagick >= Unknown
	 */
	public function point(float $x, float $y): \GmagickDraw {}

	/**
	 * 多角形を描く
	 * <p>現在の描画色、線幅、塗りつぶし色、塗りつぶしテクスチャを使って、指定した座標の配列による多角形を描きます。</p>
	 * @param array $coordinates <p>座標の配列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.polygon.php
	 * @since PECL gmagick >= Unknown
	 */
	public function polygon(array $coordinates): \GmagickDraw {}

	/**
	 * ポリラインを描く
	 * <p>現在の描画色、線幅、塗りつぶし色、塗りつぶしテクスチャを使って、指定した座標の配列によるポリラインを描きます。</p>
	 * @param array $coordinate_array <p>座標の配列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.polyline.php
	 * @since PECL gmagick >= Unknown
	 */
	public function polyline(array $coordinate_array): \GmagickDraw {}

	/**
	 * 矩形を描く
	 * <p>二つの座標を指定して、現在の描画色と線幅そして塗りつぶし設定を使った矩形を描きます。</p>
	 * @param float $x1 <p>最初の x 座標。</p>
	 * @param float $y1 <p>最初の y 座標。</p>
	 * @param float $x2 <p>二番目の x 座標。</p>
	 * @param float $y2 <p>二番目の y 座標。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.rectangle.php
	 * @since PECL gmagick >= Unknown
	 */
	public function rectangle(float $x1, float $y1, float $x2, float $y2): \GmagickDraw {}

	/**
	 * 指定した回転角を現在の座標空間に適用する
	 * <p>指定した回転角を現在の座標空間に適用します。</p>
	 * @param float $degrees <p>回転角度。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.rotate.php
	 * @since PECL gmagick >= Unknown
	 */
	public function rotate(float $degrees): \GmagickDraw {}

	/**
	 * 角が丸い矩形を描く
	 * <p>二つの座標そして x 方向と y 方向の角の半径を指定して、現在の描画色と線幅そして塗りつぶし設定を使った過度の丸い矩形を描きます。</p>
	 * @param float $x1 <p>最初の x 座標。</p>
	 * @param float $y1 <p>最初の y 座標。</p>
	 * @param float $x2 <p>二番目の x 座標。</p>
	 * @param float $y2 <p>二番目の y 座標。</p>
	 * @param float $rx <p>水平方向の角の半径。</p>
	 * @param float $ry <p>垂直方向の角の半径。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.roundrectangle.php
	 * @since PECL gmagick >= Unknown
	 */
	public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): \GmagickDraw {}

	/**
	 * 倍率を調整する
	 * <p>現在の座標空間に対して水平方向と垂直方向の倍率を調整します。</p>
	 * @param float $x <p>水平方向の倍率。</p>
	 * @param float $y <p>垂直方向の倍率。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.scale.php
	 * @since PECL gmagick >= Unknown
	 */
	public function scale(float $x, float $y): \GmagickDraw {}

	/**
	 * オブジェクトの塗りつぶしに使う色を設定する
	 * <p>オブジェクトの塗りつぶしに使う色を設定します。</p>
	 * @param mixed $color <p>塗りつぶしに使う色を表す GmagickPixel オブジェクトあるいは文字列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfillcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfillcolor($color): \GmagickDraw {}

	/**
	 * 不透明度を設定する
	 * <p>塗りつぶし色や塗りつぶしテクスチャを使った描画のときに使う不透明度を設定します。 1.0 にすると、完全に不透明になります。</p>
	 * @param float $fill_opacity <p>塗りつぶしの不透明度。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfillopacity.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfillopacity(float $fill_opacity): \GmagickDraw {}

	/**
	 * テキストのアノテーションで使うフォントの完全な名前を設定する
	 * <p>テキストのアノテーションで使うフォントの完全な名前を設定します。</p>
	 * @param string $font <p>フォント名。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfont.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfont(string $font): \GmagickDraw {}

	/**
	 * テキストのアノテーションで使うフォントのポイント数を設定する
	 * <p>テキストのアノテーションで使うフォントのポイント数を設定します。</p>
	 * @param float $pointsize <p>テキストのポイント数。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfontsize.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfontsize(float $pointsize): \GmagickDraw {}

	/**
	 * テキストのアノテーションで使うフォントのスタイルを設定する
	 * <p>テキストのアノテーションで使うフォントのスタイルを設定します。 AnyStyle はワイルドカードで、「気にしない」という意味になります。</p>
	 * @param int $style <p>フォントスタイル (NormalStyle, ItalicStyle, ObliqueStyle, AnyStyle)。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfontstyle.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfontstyle(int $style): \GmagickDraw {}

	/**
	 * フォントのウェイトを設定する
	 * <p>テキストのアノテーションで使うフォントのウェイトを設定します。</p>
	 * @param int $weight <p>フォントのウェイト (100-900 の範囲が有効)。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setfontweight.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setfontweight(int $weight): \GmagickDraw {}

	/**
	 * オブジェクトの輪郭の描画に使う色を設定する
	 * <p>オブジェクトの輪郭の描画に使う色を設定します。</p>
	 * @param mixed $color <p>輪郭の色を表す GmagickPixel オブジェクトあるいは文字列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setstrokecolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setstrokecolor($color): \GmagickDraw {}

	/**
	 * オブジェクトの輪郭の不透明度を設定する
	 * <p>オブジェクトの輪郭の不透明度を設定します。</p>
	 * @param float $stroke_opacity <p>不透明度。1.0 が完全な不透明を表します。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setstrokeopacity.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setstrokeopacity(float $stroke_opacity): \GmagickDraw {}

	/**
	 * オブジェクトの輪郭の描画に使う線の幅を設定する
	 * <p>オブジェクトの輪郭の描画に使う線の幅を設定します。</p>
	 * @param float $width <p>線の幅。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.setstrokewidth.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setstrokewidth(float $width): \GmagickDraw {}

	/**
	 * デコレーションを設定する
	 * <p>テキストのアノテーションに適用するデコレーションを設定します。</p>
	 * @param int $decoration
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.settextdecoration.php
	 * @since PECL gmagick >= Unknown
	 */
	public function settextdecoration(int $decoration): \GmagickDraw {}

	/**
	 * テキストのコードセットを設定する
	 * <p>テキストのアノテーションで使うコードセットを表す文字列を設定します。 現時点で使える文字エンコーディングは "UTF-8" だけで、 これは Unicode をバイト列として使います。 空文字列を指定すると、テキストのエンコーディングをシステムのデフォルトに合わせます。 Unicode を使ったテキストのアノテーションをするには、Unicode に対応したフォントが必要です。</p>
	 * @param string $encoding <p>テキストのエンコーディングを表す文字列。</p>
	 * @return GmagickDraw <p>成功した場合に GmagickDraw オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickdraw.settextencoding.php
	 * @since PECL gmagick >= Unknown
	 */
	public function settextencoding(string $encoding): \GmagickDraw {}
}

/**
 * @link http://php.net/manual/ja/class.gmagickpixel.php
 * @since PECL gmagick >= Unknown
 */
class GmagickPixel {

	/**
	 * GmagickPixel のコンストラクタ
	 * <p>GmagickPixel オブジェクトを作ります。 色を指定した場合は、オブジェクトを作ってからその色で初期化したものを返します。</p>
	 * @param string $color <p>オプションで指定する色文字列。このオブジェクトの初期値として使います。</p>
	 * @return self <p>成功した場合に GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.construct.php
	 * @since PECL gmagick >= Unknown
	 */
	public function __construct(string $color = NULL) {}

	/**
	 * 色を返す
	 * <p>GmagickPixel オブジェクトの色を文字列あるいは配列で返します。 透明度が設定されているときは、リストの四番目の値として返します。</p>
	 * @param bool $as_array <p><b><code>TRUE</code></b> にすると、返り値を文字列ではなく配列にします。</p>
	 * @param bool $normalize_array <p><b><code>TRUE</code></b> にすると、色の値を正規化します。</p>
	 * @return mixed <p>各チャネルの値を文字列あるいは配列で返します。<code>normalize_array</code> に <b><code>TRUE</code></b> を市得治した場合は正規化をします。エラー時には <b>GmagickPixelException</b> をスローします。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.getcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getcolor(bool $as_array = FALSE, bool $normalize_array = FALSE) {}

	/**
	 * この色の色カウントを返す
	 * <p>この色に関連づけられた色カウントを返します。</p>
	 * @return int <p>成功した場合に色カウントを整数値で返します。失敗した場合は GmagickPixelException をスローします。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.getcolorcount.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getcolorcount(): int {}

	/**
	 * 指定した色チャネルの正規化した値を取得する
	 * <p>指定した色チャネルの値を取得します。0 から 1 までの間の浮動小数点数値になります。</p>
	 * @param int $color <p>調べたいチャネル。Gmagick チャネル定数で指定します。</p>
	 * @return float <p>チャネルの値を、正規化した浮動小数点数値で返します。エラー時には GmagickPixelException をスローします。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.getcolorvalue.php
	 * @since PECL gmagick >= Unknown
	 */
	public function getcolorvalue(int $color): float {}

	/**
	 * 色を設定する
	 * <p>GmagickPixel オブジェクトの色を文字列で設定します ("blue"、"#0000ff"、"rgb(0,0,255)"、"cmyk(100,100,100,10)" など)。</p>
	 * @param string $color <p>GmagickPixel オブジェクトを初期化するときに使う色。</p>
	 * @return GmagickPixel <p>成功した場合に GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.setcolor.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setcolor(string $color): \GmagickPixel {}

	/**
	 * 色チャネルの正規化した値を設定する
	 * <p>このオブジェクトの指定したチャネルの値を設定します。これは 0 から 1 までの間の値になります。 この関数を使って GmagickPixel オブジェクトの透明度チャネルを設定できます。</p>
	 * @param int $color <p>Gmagick チャネル定数のいずれか。</p>
	 * @param float $value <p>設定したい値。0 から 1 までの範囲で指定します。</p>
	 * @return GmagickPixel <p>成功した場合に GmagickPixel オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/gmagickpixel.setcolorvalue.php
	 * @since PECL gmagick >= Unknown
	 */
	public function setcolorvalue(int $color, float $value): \GmagickPixel {}
}

