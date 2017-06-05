<?php

// Start of exif v.1.4 $Id: 8bdc0c8f27c2c9dd1f7551f1f9fe3ab57a06a4b1 $

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * JPEG あるいは TIFF から
EXIF ヘッダを読み込む
 * @link http://php.net/manual/ja/function.exif-read-data.php
 * @param string $filename <p>
 * 読み込む画像ファイルの名前。
 * URL 形式は使用できません。
 * </p>
 * @param string $sections [optional] <p>
 * 結果の配列を作成するために存在する必要のあるセクションのカンマ区切り
 * リスト。要求されたセクションがひとつも見つからなかった場合の返り値は
 * <b>FALSE</b> となります。
 * <tr valign="top">
 * <td>FILE</td>
 * <td>FileName, FileSize, FileDateTime, SectionsFound</td>
 * </tr>
 * <tr valign="top">
 * <td>COMPUTED</td>
 * <td>
 * html, Width, Height, IsColor, および他の取得可能なもの。Height および
 * Width は <b>getimagesize</b> と同じ方法で取得した
 * もので、その値はヘッダの一部ではありません。また、html は
 * 通常の HTML 内で使用される height/width の
 * 文字列です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ANY_TAG</td>
 * <td>タグを有するすべての情報。例えば IFD0, EXIF, ...</td>
 * </tr>
 * <tr valign="top">
 * <td>IFD0</td>
 * <td>
 * IFD0 のすべてのタグつきデータ。通常の画像ファイルでは、
 * ここに画像のサイズが含まれます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>THUMBNAIL</td>
 * <td>
 * 2 番目の IFD がある場合、ファイルにサムネイルが含まれている
 * 可能性があります。埋め込まれたサムネイルに関するすべての
 * タグつき情報はこのセクションに格納されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>COMMENT</td>
 * <td>JPEG 画像のコメントヘッダ。</td>
 * </tr>
 * <tr valign="top">
 * <td>EXIF</td>
 * <td>
 * EXIF セクションは IFD0 のサブセクションです。ここには
 * 画像に関する詳細な情報が含まれています。これらのエントリの
 * ほとんどはデジタルカメラに関連するものです。
 * </td>
 * </tr>
 * </p>
 * @param bool $arrays [optional] <p>
 * 各セクションを配列とするかどうかを指定します。
 * COMPUTED、
 * THUMBNAIL および COMMENT
 * のセクションは常に配列となります。これは、これらのセクションに
 * 含まれる値の名前が他のセクションと衝突する可能性があるからです。
 * </p>
 * @param bool $thumbnail [optional] <p>
 * <b>TRUE</b> を指定すると、サムネイル本体を読み込みます。それ以外の場合は
 * タグつきデータのみを読み込みます。
 * </p>
 * @return array ヘッダ名がキー・ヘッダの内容が値となる連想配列を返します。
 * 返されるデータがない場合は
 * <b>exif_read_data</b> は <b>FALSE</b> を返します。
 */
function exif_read_data(string $filename, string $sections = null, bool $arrays = false, bool $thumbnail = false): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * <b>exif_read_data</b> のエイリアス
 * @link http://php.net/manual/ja/function.read-exif-data.php
 * @param $filename
 * @param $sections_needed [optional]
 * @param $sub_arrays [optional]
 * @param $read_thumbnail [optional]
 */
function read_exif_data($filename, $sections_needed, $sub_arrays, $read_thumbnail) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * インデックスに対応するヘッダ名を取得する
 * @link http://php.net/manual/ja/function.exif-tagname.php
 * @param int $index <p>
 * 名前を調べたいタグの ID。
 * </p>
 * @return string ヘッダ名を返します。もし <i>index</i> が
 * EXIF タグ ID として未定義の場合は
 * <b>FALSE</b> を返します。
 */
function exif_tagname(int $index): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * TIFF あるいは JPEG 形式の画像に埋め込まれたサムネイルを取得する
 * @link http://php.net/manual/ja/function.exif-thumbnail.php
 * @param string $filename <p>
 * 読み込む画像ファイルの名前。サムネイルが埋め込まれています。
 * </p>
 * @param int $width [optional] <p>
 * 返されるサムネイルの幅が格納されます。
 * </p>
 * @param int $height [optional] <p>
 * 返されるサムネイルの高さが格納されます。
 * </p>
 * @param int $imagetype [optional] <p>
 * 返されるサムネイルの画像タイプが格納されます。
 * TIFF あるいは JPEG
 * のどちらかです。
 * </p>
 * @return string 埋め込まれたサムネイルを返します。画像がサムネイルを含まない場合は
 * <b>FALSE</b> を返します。
 */
function exif_thumbnail(string $filename, int &$width = null, int &$height = null, int &$imagetype = null): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * イメージの型を定義する
 * @link http://php.net/manual/ja/function.exif-imagetype.php
 * @param string $filename 調べる画像。
 * @return int 正しいサインが見つかった場合は適切な定数、それ以外の場合は <b>FALSE</b>
 * を返します。返り値は <b>getimagesize</b> がインデックス
 * 2 に対して返す値と同じですが、<b>exif_imagetype</b>
 * のほうがずっと早く動作します。
 * </p>
 * <p>
 * 画像の形式を判別するために必要なだけのバイト数を読み込めない場合、
 * <b>exif_imagetype</b> は <b>E_NOTICE</b>
 * を発行して <b>FALSE</b> を返します。
 */
function exif_imagetype(string $filename): int {}

define ('EXIF_USE_MBSTRING', 1);

// End of exif v.1.4 $Id: 8bdc0c8f27c2c9dd1f7551f1f9fe3ab57a06a4b1 $
?>
