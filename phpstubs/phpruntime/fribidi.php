<?php



/**
 * 論理表記を物理表記に変換する
 * <p>論理表記を物理表記に変換します。</p>
 * @param string $str <p>論理表記の文字列。</p>
 * @param string $direction <p><b><code>FRIBIDI_RTL</code></b>、 <b><code>FRIBIDI_LTR</code></b> あるいは <b><code>FRIBIDI_AUTO</code></b> のいずれかひとつ。</p>
 * @param int $charset <p><i>FRIBIDI_CHARSET_XXX</i> のいずれかひとつ。</p>
 * @return string <p>成功した場合に物理表記の文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fribidi-log2vis.php
 * @since PHP 4 >= 4.0.4 and PHP 4 <= 4.1.0, PECL fribidi >= 1.0
 */
function fribidi_log2vis(string $str, string $direction, int $charset): string {}

/**
 * 方向の自動検出
 */
define('FRIBIDI_AUTO', null);

/**
 * アラビア語
 */
define('FRIBIDI_CHARSET_8859_6', null);

/**
 * ヘブライ語
 */
define('FRIBIDI_CHARSET_8859_8', null);

/**
 * テスト用。CAPS を非英文字として扱います
 */
define('FRIBIDI_CHARSET_CAP_RTL', null);

/**
 * ヘブライ語/イディッシュ語
 */
define('FRIBIDI_CHARSET_CP1255', null);

/**
 * アラビア語
 */
define('FRIBIDI_CHARSET_CP1256', null);

/**
 * ペルシア語
 */
define('FRIBIDI_CHARSET_ISIRI_3342', null);

/**
 * Unicode
 */
define('FRIBIDI_CHARSET_UTF8', null);

/**
 * 左から右へ
 */
define('FRIBIDI_LTR', null);

/**
 * 右から左へ
 */
define('FRIBIDI_RTL', null);

