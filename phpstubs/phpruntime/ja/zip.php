<?php

// Start of zip v.1.13.5

/**
 * Zip で圧縮されたファイルアーカイブです。
 * @link http://php.net/manual/ja/class.ziparchive.php
 */
class ZipArchive  {

	/**
	 * アーカイブが存在しない場合に、作成します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CREATE = 1;

	/**
	 * アーカイブが既に存在する場合はエラーとします。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const EXCL = 2;

	/**
	 * アーカイブの一貫性チェックを別途行い、
	 * 失敗した場合はエラーとします。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CHECKCONS = 4;

	/**
	 * 常に新しいアーカイブを開始します。このモードは、
	 * ファイルが既に存在する場合にはそれを上書きします。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const OVERWRITE = 8;

	/**
	 * 名前で検索する際に大文字小文字を区別しません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_NOCASE = 1;

	/**
	 * ディレクトリ要素を無視します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_NODIR = 2;

	/**
	 * 圧縮されたデータを読み込みます。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_COMPRESSED = 4;

	/**
	 * 元のデータを使用し、変更内容を無視します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_UNCHANGED = 8;

	/**
	 * 文字エンコーディングを推測します (デフォルト)。PHP 7.0.8 以降で利用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_ENC_GUESS = 0;

	/**
	 * 何も手を加えない文字列を取得します。PHP 7.0.8 以降で利用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_ENC_RAW = 64;

	/**
	 * 指示に厳格に従います。PHP 7.0.8 以降で利用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_ENC_STRICT = 128;

	/**
	 * 文字列のエンコーディングは UTF-8 です。PHP 7.0.8 以降で利用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_ENC_UTF_8 = 2048;

	/**
	 * 文字列のエンコーディングは CP437 です。PHP 7.0.8 以降で利用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const FL_ENC_CP437 = 4096;

	/**
	 * 圧縮あるいは保存のどちらか有効なほうを実行します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_DEFAULT = -1;

	/**
	 * 保存します (圧縮しません)。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_STORE = 0;

	/**
	 * 圧縮します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_SHRINK = 1;

	/**
	 * reduced with factor 1
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_REDUCE_1 = 2;

	/**
	 * reduced with factor 2
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_REDUCE_2 = 3;

	/**
	 * reduced with factor 3
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_REDUCE_3 = 4;

	/**
	 * reduced with factor 4
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_REDUCE_4 = 5;

	/**
	 * imploded
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_IMPLODE = 6;

	/**
	 * deflated
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_DEFLATE = 8;

	/**
	 * deflate64
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_DEFLATE64 = 9;

	/**
	 * PKWARE 方式。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_PKWARE_IMPLODE = 10;

	/**
	 * BZIP2 アルゴリズム。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const CM_BZIP2 = 12;
	const CM_LZMA = 14;
	const CM_TERSE = 18;
	const CM_LZ77 = 19;
	const CM_WAVPACK = 97;
	const CM_PPMD = 98;

	/**
	 * エラーはありません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_OK = 0;

	/**
	 * 複数ディスクの zip アーカイブはサポートされません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_MULTIDISK = 1;

	/**
	 * 一時ファイルの名前変更に失敗しました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_RENAME = 2;

	/**
	 * zip アーカイブのクローズに失敗しました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_CLOSE = 3;

	/**
	 * シークエラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_SEEK = 4;

	/**
	 * 読み込みエラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_READ = 5;

	/**
	 * 書き込みエラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_WRITE = 6;

	/**
	 * CRC エラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_CRC = 7;

	/**
	 * zip アーカイブはクローズされました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_ZIPCLOSED = 8;

	/**
	 * そのファイルはありません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_NOENT = 9;

	/**
	 * ファイルが既に存在します。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_EXISTS = 10;

	/**
	 * ファイルをオープンできません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_OPEN = 11;

	/**
	 * 一時ファイルの作成に失敗しました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_TMPOPEN = 12;

	/**
	 * Zlib エラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_ZLIB = 13;

	/**
	 * メモリの確保に失敗しました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_MEMORY = 14;

	/**
	 * エントリが変更されました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_CHANGED = 15;

	/**
	 * 圧縮方式がサポートされていません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_COMPNOTSUPP = 16;

	/**
	 * 予期せぬ EOF です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_EOF = 17;

	/**
	 * 無効な引数です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_INVAL = 18;

	/**
	 * zip アーカイブではありません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_NOZIP = 19;

	/**
	 * 内部エラー。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_INTERNAL = 20;

	/**
	 * 矛盾した Zip アーカイブです。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_INCONS = 21;

	/**
	 * ファイルを削除できません。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_REMOVE = 22;

	/**
	 * エントリが削除されました。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const ER_DELETED = 23;

	/**
	 * PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
	 * @link http://php.net/manual/ja/zip.constants.php
	 */
	const OPSYS_DOS = 0;
	const OPSYS_AMIGA = 1;
	const OPSYS_OPENVMS = 2;
	const OPSYS_UNIX = 3;
	const OPSYS_VM_CMS = 4;
	const OPSYS_ATARI_ST = 5;
	const OPSYS_OS_2 = 6;
	const OPSYS_MACINTOSH = 7;
	const OPSYS_Z_SYSTEM = 8;
	const OPSYS_Z_CPM = 9;
	const OPSYS_WINDOWS_NTFS = 10;
	const OPSYS_MVS = 11;
	const OPSYS_VSE = 12;
	const OPSYS_ACORN_RISC = 13;
	const OPSYS_VFAT = 14;
	const OPSYS_ALTERNATE_MVS = 15;
	const OPSYS_BEOS = 16;
	const OPSYS_TANDEM = 17;
	const OPSYS_OS_400 = 18;
	const OPSYS_OS_X = 19;
	const OPSYS_DEFAULT = 3;

	/**
	 * <p style="margin-top:0;">Zip &#12450;&#12540;&#12459;&#12452;&#12502;&#12398;&#29366;&#24907;</p>
	 * @var int
	 */
	public $status;
	/**
	 * <p style="margin-top:0;">Zip &#12450;&#12540;&#12459;&#12452;&#12502;&#12398;&#12471;&#12473;&#12486;&#12512;&#29366;&#24907;</p>
	 * @var int
	 */
	public $statusSys;
	/**
	 * <p style="margin-top:0;">&#12450;&#12540;&#12459;&#12452;&#12502;&#20869;&#12398;&#12501;&#12449;&#12452;&#12523;&#25968;</p>
	 * @var int
	 */
	public $numFiles;
	/**
	 * <p style="margin-top:0;">&#12501;&#12449;&#12452;&#12523;&#12471;&#12473;&#12486;&#12512;&#19978;&#12398;&#12501;&#12449;&#12452;&#12523;&#21517;</p>
	 * @var string
	 */
	public $filename;
	/**
	 * <p style="margin-top:0;">&#12450;&#12540;&#12459;&#12452;&#12502;&#12398;&#12467;&#12513;&#12531;&#12488;</p>
	 * @var string
	 */
	public $comment;


	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * ZIP ファイルアーカイブをオープンする
	 * @link http://php.net/manual/ja/ziparchive.open.php
	 * @param string $filename <p>
	 * オープンする ZIP アーカイブのファイル名。
	 * </p>
	 * @param int $flags [optional] <p>
	 * アーカイブのオープンに使用するモード。
	 * <p>
	 * <b>ZipArchive::OVERWRITE</b>
	 * </p>
	 * @return mixed <i>エラーコード</i>
	 * <p>
	 * 成功した場合に <b>TRUE</b>、それ以外の場合にエラーコードを返します。
	 * <p>
	 * <b>ZipArchive::ER_EXISTS</b>
	 * </p>
	 * <p>
	 * ファイルが既に存在します。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_INCONS</b>
	 * </p>
	 * <p>
	 * Zip アーカイブに矛盾があります。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_INVAL</b>
	 * </p>
	 * <p>
	 * 無効な引数です。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_MEMORY</b>
	 * </p>
	 * <p>
	 * メモリの確保に失敗しました。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_NOENT</b>
	 * </p>
	 * <p>
	 * ファイルが存在しません。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_NOZIP</b>
	 * </p>
	 * <p>
	 * zip アーカイブではありません。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_OPEN</b>
	 * </p>
	 * <p>
	 * ファイルを開けません。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_READ</b>
	 * </p>
	 * <p>
	 * 読み込みエラー。
	 * </p>
	 * <p>
	 * <b>ZipArchive::ER_SEEK</b>
	 * </p>
	 * <p>
	 * シークエラー。
	 * </p>
	 * </p>
	 */
	public function open(string $filename, int $flags = null) {}

	/**
	 * @param $password
	 */
	public function setPassword($password) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * アクティブな (オープンされた、あるいは新しく作成された) アーカイブを閉じる
	 * @link http://php.net/manual/ja/ziparchive.close.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.7, PHP 7)<br/>
	 * システムエラー、または ZIP メッセージに関するエラー情報を返す
	 * @link http://php.net/manual/ja/ziparchive.getstatusstring.php
	 * @return string 成功時にはステータスメッセージを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getStatusString(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.8.0)<br/>
	 * 新しいディレクトリを追加する
	 * @link http://php.net/manual/ja/ziparchive.addemptydir.php
	 * @param string $dirname <p>
	 * 追加するディレクトリ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addEmptyDir(string $dirname): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * 内容を指定して、ファイルを ZIP アーカイブに追加する
	 * @link http://php.net/manual/ja/ziparchive.addfromstring.php
	 * @param string $localname <p>
	 * 作成するエントリの名前。
	 * </p>
	 * @param string $contents <p>
	 * エントリを作成するために使用するデータの内容。
	 * バイナリセーフな形式で使用します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addFromString(string $localname, string $contents): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * 指定したパスからファイルを ZIP アーカイブに追加する
	 * @link http://php.net/manual/ja/ziparchive.addfile.php
	 * @param string $filename <p>
	 * 追加するファイルへのパス。
	 * </p>
	 * @param string $localname [optional] <p>
	 * 指定した場合は ZIP アーカイブ内部での名前となり、<i>filename</i> を上書きします。
	 * </p>
	 * @param int $start [optional] <p>
	 * このパラメータは使いませんが、<b>ZipArchive</b> を継承するためには必要です。
	 * </p>
	 * @param int $length [optional] <p>
	 * このパラメータは使いませんが、<b>ZipArchive</b> を継承するためには必要です。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addFile(string $filename, string $localname = null, int $start = 0, int $length = 0): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL zip &gt;= 1.9.0)<br/>
	 * ディレクトリから、glob パターンを使ってファイルを追加する
	 * @link http://php.net/manual/ja/ziparchive.addglob.php
	 * @param string $pattern <p>
	 * <b>glob</b> パターン。どのファイルを対象にするのかを指定します。
	 * </p>
	 * @param int $flags [optional] <p>
	 * glob() のフラグのビットマスク。
	 * </p>
	 * @param array $options [optional] <p>
	 * オプションの連想配列。次のオプションが使えます。
	 * <p>
	 * "add_path"
	 * </p>
	 * <p>
	 * アーカイブ内のファイルのローカルパスに変換するときにつけるプレフィックス。
	 * これが適用されるのは、
	 * "remove_path" や "remove_all_path"
	 * で定義された削除処理がすべて終わった後です。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addGlob(string $pattern, int $flags = 0, array $options = array()): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL zip &gt;= 1.9.0)<br/>
	 * ディレクトリから、PCRE パターンを使ってファイルを追加する
	 * @link http://php.net/manual/ja/ziparchive.addpattern.php
	 * @param string $pattern <p>
	 * PCRE のパターン。どのファイルを対象にするのかを指定します。
	 * </p>
	 * @param string $path [optional] <p>
	 * スキャンするディレクトリ。デフォルトは、現在の作業ディレクトリです。
	 * </p>
	 * @param array $options [optional] <p>
	 * オプションの連想配列。<b>ZipArchive::addGlob</b>
	 * と同じオプションが使えます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addPattern(string $pattern, string $path = ".", array $options = array()): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * インデックスを使用してエントリ名を変更する
	 * @link http://php.net/manual/ja/ziparchive.renameindex.php
	 * @param int $index <p>
	 * 名前を変更するエントリのインデックス。
	 * </p>
	 * @param string $newname <p>
	 * 新しい名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function renameIndex(int $index, string $newname): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * 名前を使用してエントリ名を変更する
	 * @link http://php.net/manual/ja/ziparchive.renamename.php
	 * @param string $name <p>
	 * 名前を変更するエントリの名前。
	 * </p>
	 * @param string $newname <p>
	 * 新しい名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function renameName(string $name, string $newname): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.4.0)<br/>
	 * ZIP アーカイブのコメントを設定する
	 * @link http://php.net/manual/ja/ziparchive.setarchivecomment.php
	 * @param string $comment <p>
	 * コメントの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setArchiveComment(string $comment): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * ZIP アーカイブのコメントを返す
	 * @link http://php.net/manual/ja/ziparchive.getarchivecomment.php
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> を設定すると、
	 * 元の変更されていないコメントを返します。
	 * </p>
	 * @return string Zip アーカイブのコメントを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getArchiveComment(int $flags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.4.0)<br/>
	 * インデックスを使用してエントリのコメントを設定する
	 * @link http://php.net/manual/ja/ziparchive.setcommentindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @param string $comment <p>
	 * コメントの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setCommentIndex(int $index, string $comment): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.4.0)<br/>
	 * 名前を使用してエントリのコメントを設定する
	 * @link http://php.net/manual/ja/ziparchive.setcommentname.php
	 * @param string $name <p>
	 * エントリの名前。
	 * </p>
	 * @param string $comment <p>
	 * コメントの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setCommentName(string $name, string $comment): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.4.0)<br/>
	 * エントリのインデックスを使用して、エントリのコメントを返す
	 * @link http://php.net/manual/ja/ziparchive.getcommentindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> を指定すると、
	 * 元の変化していないコメントを返します。
	 * </p>
	 * @return string 成功した場合にコメント、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getCommentIndex(int $index, int $flags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.4.0)<br/>
	 * エントリ名を使用して、エントリのコメントを返す
	 * @link http://php.net/manual/ja/ziparchive.getcommentname.php
	 * @param string $name <p>
	 * エントリの名前。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> を指定すると、
	 * 元の変化していないコメントが返されます。
	 * </p>
	 * @return string 成功した場合にコメント、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getCommentName(string $name, int $flags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * インデックスを使用して、アーカイブ内のエントリを削除する
	 * @link http://php.net/manual/ja/ziparchive.deleteindex.php
	 * @param int $index <p>
	 * 削除するエントリのインデックス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function deleteIndex(int $index): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * 名前を使用して、アーカイブからエントリを削除する
	 * @link http://php.net/manual/ja/ziparchive.deletename.php
	 * @param string $name <p>
	 * 削除するエントリの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function deleteName(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * 名前を使用してエントリの詳細を取得する
	 * @link http://php.net/manual/ja/ziparchive.statname.php
	 * @param string $name <p>
	 * エントリの名前。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 名前をどのように探すのかを設定します。
	 * また <b>ZipArchive::FL_UNCHANGED</b> を OR で連結すると、
	 * アーカイブ内に最初に記録された際の情報を取得します。
	 * 変更内容は無視されます。
	 * <p>
	 * <b>ZipArchive::FL_NOCASE</b>
	 * </p>
	 * @return array エントリの詳細を含む配列を返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function statName(string $name, int $flags = null): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * インデックスを使用してエントリの詳細を取得する
	 * @link http://php.net/manual/ja/ziparchive.statindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> を OR で連結すると、
	 * アーカイブ内に最初に記録された際の情報を取得します。
	 * 変更内容は無視されます。
	 * </p>
	 * @return array エントリの詳細を含む配列を返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function statIndex(int $index, int $flags = null): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * アーカイブ内のエントリのインデックスを返す
	 * @link http://php.net/manual/ja/ziparchive.locatename.php
	 * @param string $name <p>
	 * 探したいエントリの名前。
	 * </p>
	 * @param int $flags [optional] <p>
	 * この関数は、アーカイブ内の指定した名前のファイルのインデックスを返します。
	 * フラグには、次の値を OR で連結して指定します。
	 * あるいは何もしていしない場合は 0 とします。
	 * <p>
	 * <b>ZipArchive::FL_NOCASE</b>
	 * </p>
	 * @return int 成功した場合にエントリのインデックス、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function locateName(string $name, int $flags = null): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * インデックスを使用して、エントリの名前を返す
	 * @link http://php.net/manual/ja/ziparchive.getnameindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ZipArchive::FL_UNCHANGED</b> を指定すると、
	 * 元の変化していないコメントを返します。
	 * </p>
	 * @return string 成功した場合に名前、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getNameIndex(int $index, int $flags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * アーカイブ全体に対して行われたすべての変更を取り消す
	 * @link http://php.net/manual/ja/ziparchive.unchangearchive.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function unchangeArchive(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * アーカイブに対するすべての変更を取り消す
	 * @link http://php.net/manual/ja/ziparchive.unchangeall.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function unchangeAll(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * 指定したインデックスのエントリに対するすべての変更を取り消す
	 * @link http://php.net/manual/ja/ziparchive.unchangeindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function unchangeIndex(int $index): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.5.0)<br/>
	 * 指定した名前のエントリに対するすべての変更を取り消す
	 * @link http://php.net/manual/ja/ziparchive.unchangename.php
	 * @param string $name <p>
	 * エントリの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function unchangeName(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * アーカイブの内容を展開する
	 * @link http://php.net/manual/ja/ziparchive.extractto.php
	 * @param string $destination <p>
	 * ファイルを展開する場所。
	 * </p>
	 * @param mixed $entries [optional] <p>
	 * 展開するエントリ。単一のエントリ名、
	 * あるいはエントリ名の配列を指定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function extractTo(string $destination, $entries = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * 名前を使用して、エントリの内容を返す
	 * @link http://php.net/manual/ja/ziparchive.getfromname.php
	 * @param string $name <p>
	 * エントリの名前。
	 * </p>
	 * @param int $length [optional] <p>
	 * エントリから読み込む長さ。0 の場合はエントリ全体を読み込みます。
	 * </p>
	 * @param int $flags [optional] <p>
	 * エントリを探す際に使用するフラグ。以下の値を
	 * OR で連結して使用します。
	 * <p>
	 * <b>ZipArchive::FL_UNCHANGED</b>
	 * </p>
	 * @return string 成功した場合にエントリの内容、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getFromName(string $name, int $length = 0, int $flags = null): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * インデックスを使用して、エントリの内容を返す
	 * @link http://php.net/manual/ja/ziparchive.getfromindex.php
	 * @param int $index <p>
	 * エントリのインデックス。
	 * </p>
	 * @param int $length [optional] <p>
	 * エントリから読み込む長さ。0 の場合はエントリ全体を読み込みます。
	 * </p>
	 * @param int $flags [optional] <p>
	 * アーカイブのオープン時に使用するフラグ。以下の値を
	 * OR で連結して使用します。
	 * <p>
	 * <b>ZipArchive::FL_UNCHANGED</b>
	 * </p>
	 * @return string 成功した場合にエントリの内容、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getFromIndex(int $index, int $length = 0, int $flags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.1.0)<br/>
	 * 名前を使用して、エントリのファイルハンドラ (読み込み専用) を取得する
	 * @link http://php.net/manual/ja/ziparchive.getstream.php
	 * @param string $name <p>
	 * 使用するエントリの名前。
	 * </p>
	 * @return resource 成功した場合にファイルポインタ (リソース)、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getStream(string $name) {}

	/**
	 * @param $name
	 * @param $opsys
	 * @param $attr
	 * @param $flags [optional]
	 */
	public function setExternalAttributesName($name, $opsys, $attr, $flags) {}

	/**
	 * @param $index
	 * @param $opsys
	 * @param $attr
	 * @param $flags [optional]
	 */
	public function setExternalAttributesIndex($index, $opsys, $attr, $flags) {}

	/**
	 * @param $name
	 * @param $opsys
	 * @param $attr
	 * @param $flags [optional]
	 */
	public function getExternalAttributesName($name, &$opsys, &$attr, $flags) {}

	/**
	 * @param $index
	 * @param $opsys
	 * @param $attr
	 * @param $flags [optional]
	 */
	public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags) {}

	/**
	 * @param $name
	 * @param $method
	 * @param $compflags [optional]
	 */
	public function setCompressionName($name, $method, $compflags) {}

	/**
	 * @param $index
	 * @param $method
	 * @param $compflags [optional]
	 */
	public function setCompressionIndex($index, $method, $compflags) {}

}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * Zip ファイルアーカイブをオープンする
 * @link http://php.net/manual/ja/function.zip-open.php
 * @param string $filename <p>
 * オープンする ZIP アーカイブのファイル名。
 * </p>
 * @return resource 後で
 * <b>zip_read</b> および <b>zip_close</b>
 * で使用されるリソースハンドル、または、
 * <i>filename</i> が存在しない場合やその他のエラーが発生した場合は
 * エラーの番号を返します。
 */
function zip_open(string $filename) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ZIP ファイルアーカイブを閉じる
 * @link http://php.net/manual/ja/function.zip-close.php
 * @param resource $zip <p>
 * 事前に <b>zip_open</b> でオープンされた ZIP ファイル。
 * </p>
 * @return void 値を返しません。
 */
function zip_close($zip): void {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * Zip ファイルアーカイブの中の次のエントリを読み込む
 * @link http://php.net/manual/ja/function.zip-read.php
 * @param resource $zip <p>
 * <b>zip_open</b> でオープン済みの ZIP ファイル。
 * </p>
 * @return resource 後で zip_entry_...
 * 関数で使用されるディレクトリエントリリソース、または、
 * 読み込むエントリがもうない場合に <b>FALSE</b>、
 * その他のエラーが発生した場合はエラー番号を返します。
 */
function zip_read($zip) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * 読込み用にディレクトリエントリをオープンする
 * @link http://php.net/manual/ja/function.zip-entry-open.php
 * @param resource $zip <p>
 * <b>zip_open</b>により返された有効なリソースハンドル
 * </p>
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリエントリ
 * </p>
 * @param string $mode [optional] <p>
 * <b>fopen</b>のマニュアルで指定されたモードのどれか
 * </p>
 * <p>
 * 現在、<i>mode</i>は無視され、
 * 常に"rb"となります。
 * これは、PHPのzipサポートが読み込みのみのアクセスであるためです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>fopen</b>や他の同種の関数と異なり、
 * <b>zip_entry_open</b>の戻り値は、
 * 処理の結果のみを示し、ディレクトリエントリの読み込みやクローズの際には
 * 必要とされません。
 */
function zip_entry_open($zip, $zip_entry, string $mode = null): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ディレクトリエントリを閉じる
 * @link http://php.net/manual/ja/function.zip-entry-close.php
 * @param resource $zip_entry <p>
 * <b>zip_entry_open</b>によりオープンされたディレクトリの
 * エントリ
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function zip_entry_close($zip_entry): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * オープンされたディレクトリエントリから読み込む
 * @link http://php.net/manual/ja/function.zip-entry-read.php
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリエントリ
 * </p>
 * @param int $length [optional] <p>
 * 返すバイト数。
 * </p>
 * <p>
 * これは、読み込むデータの非圧縮時の長さとなります。
 * </p>
 * @return string 読み込んだデータを返します。ファイルの終端に達した場合は空文字列、エラー時には
 * <b>FALSE</b> を返します。
 */
function zip_entry_read($zip_entry, int $length = 1024): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ディレクトリエントリの実際のファイルサイズを取得する
 * @link http://php.net/manual/ja/function.zip-entry-filesize.php
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリのエントリ
 * </p>
 * @return int ディレクトリエントリのサイズ
 */
function zip_entry_filesize($zip_entry): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ディレクトリエントリの名前を取得する
 * @link http://php.net/manual/ja/function.zip-entry-name.php
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリエントリ
 * </p>
 * @return string ディレクトリエントリの名前
 */
function zip_entry_name($zip_entry): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ディレクトリエントリの圧縮時のサイズを取得する
 * @link http://php.net/manual/ja/function.zip-entry-compressedsize.php
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリのエントリ
 * </p>
 * @return int 圧縮後のサイズ
 */
function zip_entry_compressedsize($zip_entry): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PECL zip &gt;= 1.0.0)<br/>
 * ディレクトリエントリの圧縮方法を取得する
 * @link http://php.net/manual/ja/function.zip-entry-compressionmethod.php
 * @param resource $zip_entry <p>
 * <b>zip_read</b>により返されたディレクトリのエントリ
 * </p>
 * @return string 圧縮方法
 */
function zip_entry_compressionmethod($zip_entry): string {}

// End of zip v.1.13.5
?>
