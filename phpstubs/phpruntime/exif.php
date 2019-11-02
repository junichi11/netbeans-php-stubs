<?php



namespace {

	/**
	 * イメージの型を定義する
	 * <p><b>exif_imagetype()</b> を画像の先頭バイトを読み そのサインを調べます。</p><p><b>exif_imagetype()</b> は、他の exif 関数がサポートしていないファイル形式で コールされるの防いだり、$_SERVER['HTTP_ACCEPT'] と組み合わせて閲覧者が画像を見る権限を持っているかどうかを調べたりするために 使用可能です。</p>
	 * @param string $filename 調べる画像。
	 * @return int <p>正しいサインが見つかった場合は適切な定数、それ以外の場合は <b><code>FALSE</code></b> を返します。返り値は <code>getimagesize()</code> がインデックス 2 に対して返す値と同じですが、<b>exif_imagetype()</b> のほうがずっと早く動作します。</p> <p><b>注意</b>:</p> <p>画像の形式を判別するために必要なだけのバイト数を読み込めない場合、 <b>exif_imagetype()</b> は <b><code>E_NOTICE</code></b> を発行して <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.exif-imagetype.php
	 * @see image_type_to_mime_type(), getimagesize()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function exif_imagetype(string $filename): int {}

	/**
	 * JPEG あるいは TIFF から EXIF ヘッダを読み込む
	 * <p><b>exif_read_data()</b> は、JPEG あるいは TIFF の画像ファイルから EXIF ヘッダを読み込みます。この方法で、デジタルカメラが生成したメタデータを 読み込むことが可能です。</p><p>EXIF ヘッダは、デジタルカメラが作成した JPEG/TIFF 画像によく含まれています。しかし残念なことに、 そのタグ付けの方法はメーカーによって異なります。 したがって、特定の Exif ヘッダが常に存在すると仮定することはできません。</p><p><i>Height</i> および <i>Width</i> は、<code>getimagesize()</code> と同じ方法で計算されます。 よって、これらの値は決してヘッダの一部として返してはいけません。 また、<i>html</i> は高さ/幅を表すテキスト文字列で、 通常の HTML の中で用いられます。</p><p>Exif ヘッダに著作権表示が含まれている場合、それ自身には 2 つの値を 含めることが可能です。Exif 2.10 のこの矛盾した規格に対応するため、 <i>COMPUTED</i> セクションは <i>Copyright.Photographer</i> および <i>Copyright.Editor</i> の両方を返します。 また <i>IFD0</i> セクションには 2 つのエントリを NULL 文字で区切った バイト配列を含めます。データ型が間違っている場合は最初のエントリのみを かえします（Exif の通常の挙動）。<i>COMPUTED</i> には、元の著作権文字列あるいは カンマで区切られた写真と編集者の著作権表示のどちらかを <i>Copyright</i> エントリに含めることが可能です。</p><p><i>UserComment</i> タグにも Copyright タグと同様の問題があります。ここにも 2 つの値を格納することが可能です。それは使用しているエンコーディングと 値自身の 2 つです。そうなると、<i>IFD</i> セクションにはエンコーディングのみを 含めるか、あるいはバイト配列を格納することになります。<i>COMPUTED</i> セクションは <i>UserCommentEncoding</i> および <i>UserComment</i> を両方格納することができます。<i>UserComment</i> はどちらの 場合でも有効なので、<i>IFD0</i> セクションではこちらを優先すべきです。</p><p><b>exif_read_data()</b> は、EXIF 仕様（» http://exif.org/Exif2-2.PDF, 20 ページ）に基づいて EXIF データタグの検証も行います。</p><p><b>注意</b>:</p><p>Windows Me/XP は、カメラと接続した際に Exif ヘッダを書き換えることが可能です。</p>
	 * @param string $filename <p>読み込む画像ファイルの名前。 URL 形式は使用できません。</p>
	 * @param string $sections <p>結果の配列を作成するために存在する必要のあるセクションのカンマ区切り リスト。要求されたセクションがひとつも見つからなかった場合の返り値は <b><code>FALSE</code></b> となります。</p>   FILE FileName, FileSize, FileDateTime, SectionsFound   COMPUTED  html, Width, Height, IsColor, および他の取得可能なもの。Height および Width は <code>getimagesize()</code> と同じ方法で取得した もので、その値はヘッダの一部ではありません。また、<i>html</i> は 通常の HTML 内で使用される height/width の 文字列です。    ANY_TAG タグを有するすべての情報。例えば <i>IFD0</i>, <i>EXIF</i>, ...   IFD0  IFD0 のすべてのタグつきデータ。通常の画像ファイルでは、 ここに画像のサイズが含まれます。    THUMBNAIL  2 番目の <i>IFD</i> がある場合、ファイルにサムネイルが含まれている 可能性があります。埋め込まれたサムネイルに関するすべての タグつき情報はこのセクションに格納されます。    COMMENT JPEG 画像のコメントヘッダ。   EXIF  EXIF セクションは <i>IFD0</i> のサブセクションです。ここには 画像に関する詳細な情報が含まれています。これらのエントリの ほとんどはデジタルカメラに関連するものです。
	 * @param bool $arrays <p>各セクションを配列とするかどうかを指定します。 <i>COMPUTED</i>、 <i>THUMBNAIL</i> および <i>COMMENT</i> のセクションは常に配列となります。これは、これらのセクションに 含まれる値の名前が他のセクションと衝突する可能性があるからです。</p>
	 * @param bool $thumbnail <p><b><code>TRUE</code></b> を指定すると、サムネイル本体を読み込みます。それ以外の場合は タグつきデータのみを読み込みます。</p>
	 * @return array <p>ヘッダ名がキー・ヘッダの内容が値となる連想配列を返します。 返されるデータがない場合は <b>exif_read_data()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.exif-read-data.php
	 * @see exif_thumbnail(), getimagesize()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_read_data(string $filename, string $sections = NULL, bool $arrays = false, bool $thumbnail = false): array {}

	/**
	 * インデックスに対応するヘッダ名を取得する
	 * @param int $index <p>名前を調べたいタグの ID。</p>
	 * @return string <p>ヘッダ名を返します。もし <code>index</code> が EXIF タグ ID として未定義の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.exif-tagname.php
	 * @see exif_imagetype()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_tagname(int $index): string {}

	/**
	 * TIFF あるいは JPEG 形式の画像に埋め込まれたサムネイルを取得する
	 * <p><b>exif_thumbnail()</b> は、 TIFF あるいは JPEG 画像に 埋め込まれたサムネイルを読み込みます。</p><p>この関数を使用してサムネイルを出力したい場合は、 <code>header()</code> 関数を使用して mimetype 情報を送信する 必要があります。</p><p><b>exif_thumbnail()</b> が画像を作成することはできないが、 そのサイズだけはわかるという可能性があります。そのような場合、返り値は <b><code>FALSE</code></b> となりますが <code>width</code> および <code>height</code> を設定されています。</p>
	 * @param string $filename <p>読み込む画像ファイルの名前。サムネイルが埋め込まれています。</p>
	 * @param int $width <p>返されるサムネイルの幅が格納されます。</p>
	 * @param int $height <p>返されるサムネイルの高さが格納されます。</p>
	 * @param int $imagetype <p>返されるサムネイルの画像タイプが格納されます。 TIFF あるいは JPEG のどちらかです。</p>
	 * @return string <p>埋め込まれたサムネイルを返します。画像がサムネイルを含まない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.exif-thumbnail.php
	 * @see exif_read_data(), image_type_to_mime_type()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_thumbnail(string $filename, int &$width = NULL, int &$height = NULL, int &$imagetype = NULL): string {}

	/**
	 * のエイリアス exif_read_data()
	 * <p>この関数は次の関数のエイリアスです。 <code>exif_read_data()</code>.</p>
	 * @param string $filename <p>読み込む画像ファイルの名前。 URL 形式は使用できません。</p>
	 * @param string $sections <p>結果の配列を作成するために存在する必要のあるセクションのカンマ区切り リスト。要求されたセクションがひとつも見つからなかった場合の返り値は <b><code>FALSE</code></b> となります。</p>   FILE FileName, FileSize, FileDateTime, SectionsFound   COMPUTED  html, Width, Height, IsColor, および他の取得可能なもの。Height および Width は <code>getimagesize()</code> と同じ方法で取得した もので、その値はヘッダの一部ではありません。また、<i>html</i> は 通常の HTML 内で使用される height/width の 文字列です。    ANY_TAG タグを有するすべての情報。例えば <i>IFD0</i>, <i>EXIF</i>, ...   IFD0  IFD0 のすべてのタグつきデータ。通常の画像ファイルでは、 ここに画像のサイズが含まれます。    THUMBNAIL  2 番目の <i>IFD</i> がある場合、ファイルにサムネイルが含まれている 可能性があります。埋め込まれたサムネイルに関するすべての タグつき情報はこのセクションに格納されます。    COMMENT JPEG 画像のコメントヘッダ。   EXIF  EXIF セクションは <i>IFD0</i> のサブセクションです。ここには 画像に関する詳細な情報が含まれています。これらのエントリの ほとんどはデジタルカメラに関連するものです。
	 * @param bool $arrays <p>各セクションを配列とするかどうかを指定します。 <i>COMPUTED</i>、 <i>THUMBNAIL</i> および <i>COMMENT</i> のセクションは常に配列となります。これは、これらのセクションに 含まれる値の名前が他のセクションと衝突する可能性があるからです。</p>
	 * @param bool $thumbnail <p><b><code>TRUE</code></b> を指定すると、サムネイル本体を読み込みます。それ以外の場合は タグつきデータのみを読み込みます。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.read-exif-data.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function read_exif_data(string $filename, string $sections = NULL, bool $arrays = false, bool $thumbnail = false): array {}

	/**
	 * mbstring が有効な場合、 この定数は <i>1</i> という値です。 それ以外の場合、値は <i>0</i> です。
	 */
	define('EXIF_USE_MBSTRING', 1);

}
