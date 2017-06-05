<?php

// Start of Phar v.2.0.2

/**
 * PharException クラスは、try/catch ブロックで使用するための
 * phar 固有の例外クラスです。
 * @link http://php.net/manual/ja/class.pharexception.php
 */
class PharException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * Phar クラスは、phar アーカイブへのアクセスや作成のための高レベルインターフェイスを提供します。
 * @link http://php.net/manual/ja/class.phar.php
 */
class Phar extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;
	const BZ2 = 8192;
	const GZ = 4096;
	const NONE = 0;
	const PHAR = 1;
	const TAR = 2;
	const ZIP = 3;
	const COMPRESSED = 61440;
	const PHP = 0;
	const PHPS = 1;
	const MD5 = 1;
	const OPENSSL = 16;
	const SHA1 = 2;
	const SHA256 = 3;
	const SHA512 = 4;


	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブオブジェクトを作成する
	 * @link http://php.net/manual/ja/phar.construct.php
	 * @param string $fname <p>
	 * 既存の Phar アーカイブ、あるいは作成したいアーカイブへのパス。
	 * ファイル名の拡張子は .phar にする必要があります。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 親クラス <b>RecursiveDirectoryIterator</b>
	 * に渡すフラグ。
	 * </p>
	 * @param string $alias [optional] <p>
	 * ストリーム機能をコールする場合に Phar
	 * アーカイブが参照するエイリアス。
	 * </p>
	 */
	public function __construct(string $fname, int $flags = null, string $alias = null) {}

	public function __destruct() {}

	/**
	 * (Unknown)<br/>
	 * 空のディレクトリを phar アーカイブに追加する
	 * @link http://php.net/manual/ja/phar.addemptydir.php
	 * @param string $dirname <p>
	 * phar アーカイブ内に作成する空のディレクトリの名前。
	 * </p>
	 * @return void 返り値はありません。失敗時には例外をスローします。
	 */
	public function addEmptyDir(string $dirname): void {}

	/**
	 * (Unknown)<br/>
	 * ファイルシステム上のファイルを phar アーカイブに追加する
	 * @link http://php.net/manual/ja/phar.addfile.php
	 * @param string $file <p>
	 * phar アーカイブに追加したいディスク上のファイルへのフルパスあるいは相対パス。
	 * </p>
	 * @param string $localname [optional] <p>
	 * ファイルをアーカイブ内に格納するときのパス。
	 * </p>
	 * @return void 返り値はありません。失敗時には例外をスローします。
	 */
	public function addFile(string $file, string $localname = null): void {}

	/**
	 * (Unknown)<br/>
	 * 文字列から、ファイルを phar アーカイブに追加する
	 * @link http://php.net/manual/ja/phar.addfromstring.php
	 * @param string $localname <p>
	 * ファイルをアーカイブ内に格納するときのパス。
	 * </p>
	 * @param string $contents <p>
	 * ファイルに保存する内容。
	 * </p>
	 * @return void 返り値はありません。失敗時には例外をスローします。
	 */
	public function addFromString(string $localname, string $contents): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ディレクトリ内のファイルから phar を作成する
	 * @link http://php.net/manual/ja/phar.buildfromdirectory.php
	 * @param string $base_dir <p>
	 * アーカイブに追加するすべてのファイルを含むディレクトリへの
	 * フルパスあるいは相対パス。
	 * </p>
	 * @param string $regex [optional] <p>
	 * オプションで指定する pcre 正規表現。
	 * これを使用してファイル一覧をフィルタリングします。
	 * 正規表現にマッチするファイルパスのみがアーカイブに追加されます。
	 * </p>
	 * @return array <b>Phar::buildFromDirectory</b>
	 * は、連想配列を返します。これは、
	 * ファイルの内部パスをファイルシステム上のフルパスを対応させたものです。
	 */
	public function buildFromDirectory(string $base_dir, string $regex = null): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * イテレータから phar アーカイブを作成する
	 * @link http://php.net/manual/ja/phar.buildfromiterator.php
	 * @param Iterator $iter <p>
	 * phar ファイルと実際の場所の関連を返すイテレータ、
	 * あるいは SplFileInfo オブジェクトを返すイテレータ。
	 * </p>
	 * @param string $base_directory [optional] <p>
	 * SplFileInfo オブジェクトを返すイテレータを指定した際、
	 * phar アーカイブへの追加時にフルパスから取り除く部分。
	 * </p>
	 * @return array <b>Phar::buildFromIterator</b>
	 * は連想配列を返します。
	 * これは、ファイルの内部パスとファイルシステム上のフルパスを対応させたものです。
	 */
	public function buildFromIterator(Iterator $iter, string $base_directory = null): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在の Phar アーカイブ内のすべてのファイルを圧縮する
	 * @link http://php.net/manual/ja/phar.compressfiles.php
	 * @param int $compression <p>
	 * 圧縮を行う場合は Phar::GZ あるいは
	 * Phar::BZ2、圧縮を解除するためには Phar::NONE
	 * のいずれかを指定しなければなりません。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function compressFiles(int $compression): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在の Phar アーカイブ内のすべてのファイルの圧縮を解除する
	 * @link http://php.net/manual/ja/phar.decompressfiles.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function decompressFiles(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Phar アーカイブ全体を Gzip あるいは Bzip2 で圧縮する
	 * @link http://php.net/manual/ja/phar.compress.php
	 * @param int $compression <p>
	 * 圧縮を行う場合には Phar::GZ あるいは
	 * Phar::BZ2、圧縮を解除する場合には
	 * Phar::NONE を指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * デフォルトでは、phar 形式のアーカイブを圧縮する際の拡張子は
	 * .phar.gz あるいは .phar.bz2
	 * となり、tar 形式のアーカイブを圧縮する際の拡張子は
	 * .phar.tar.gz あるいは .phar.tar.bz2
	 * となります。伸長の際は、デフォルトの拡張子は
	 * .phar および .phar.tar となります。
	 * </p>
	 * @return object <b>Phar</b> オブジェクトを返します。
	 */
	public function compress(int $compression, string $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Phar アーカイブ全体の圧縮を解除する
	 * @link http://php.net/manual/ja/phar.decompress.php
	 * @param string $extension [optional] <p>
	 * 圧縮を解除する場合、デフォルトのファイル拡張子は
	 * .phar および .phar.tar です。
	 * このパラメータを使用すると、別の拡張子を指定することができます。
	 * 実行可能な phar アーカイブは、ファイル名に必ず
	 * .phar を含まなければならないことに注意しましょう。
	 * </p>
	 * @return object <b>Phar</b> オブジェクトを返します。
	 */
	public function decompress(string $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブを実行可能な別の phar アーカイブ形式に変換する
	 * @link http://php.net/manual/ja/phar.converttoexecutable.php
	 * @param int $format [optional] <p>
	 * これは Phar::PHAR、Phar::TAR
	 * あるいは Phar::ZIP のいずれかとなります。
	 * <b>NULL</b> を指定すると、現在のファイル形式をそのまま保持します。
	 * </p>
	 * @param int $compression [optional] <p>
	 * アーカイブ全体の圧縮を行わない場合は Phar::NONE、
	 * zlib による圧縮の場合は Phar::GZ、そして bzip による圧縮の場合は
	 * Phar::BZ2 のいずれかを指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。
	 * 実行可能でない tar や zip アーカイブのファイル名としては
	 * .phar は使用できないことに注意しましょう。
	 * </p>
	 * <p>
	 * phar 形式のアーカイブに変換する場合、デフォルトの拡張子は圧縮形式によって
	 * .phar、.phar.gz あるいは .phar.bz2
	 * のいずれかとなります。tar 形式のアーカイブの場合、デフォルトの拡張子は
	 * .phar.tar、.phar.tar.gz
	 * および .phar.tar.bz2 です。zip 形式のアーカイブの場合、
	 * デフォルトの拡張子は .phar.zip となります。
	 * </p>
	 * @return Phar このメソッドは、成功した場合に <b>Phar</b>
	 * オブジェクトを返します。失敗した場合は例外をスローします。
	 */
	public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension = null): Phar {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブを実行可能でない tar あるいは zip ファイルに変換する
	 * @link http://php.net/manual/ja/phar.converttodata.php
	 * @param int $format [optional] <p>
	 * これは Phar::TAR
	 * あるいは Phar::ZIP のいずれかとなります。
	 * <b>NULL</b> を指定すると、現在のファイル形式をそのまま保持します。
	 * </p>
	 * @param int $compression [optional] <p>
	 * アーカイブ全体の圧縮を行わない場合は Phar::NONE、
	 * zlib による圧縮の場合は Phar::GZ、そして bzip による圧縮の場合は
	 * Phar::BZ2 のいずれかを指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。
	 * 実行可能でない tar や zip アーカイブのファイル名としては
	 * .phar は使用できないことに注意しましょう。
	 * </p>
	 * <p>
	 * tar 形式の phar アーカイブの場合、デフォルトの拡張子は圧縮形式によって
	 * .tar、.tar.gz、
	 * .tar.bz2 のいずれかとなります。
	 * zip 形式のアーカイブの場合、デフォルトの拡張子は
	 * .zip となります。
	 * </p>
	 * @return PharData このメソッドは、成功した場合に <b>PharData</b>
	 * オブジェクトを返します。失敗した場合は例外をスローします。
	 */
	public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension = null): PharData {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブ内のファイルを、phar 内で別の新しいファイルとしてコピーする
	 * @link http://php.net/manual/ja/phar.copy.php
	 * @param string $oldfile
	 * @param string $newfile
	 * @return bool 成功した場合に <b>TRUE</b> を返します。しかし、より安全を期すなら
	 * try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。
	 */
	public function copy(string $oldfile, string $newfile): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブ内のエントリ (ファイル) の数を返す
	 * @link http://php.net/manual/ja/phar.count.php
	 * @return int この phar ファイルに含まれるファイルの数を返します。
	 * 存在しない場合は 0 (数字のゼロ) を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブ内のファイルを削除する
	 * @link http://php.net/manual/ja/phar.delete.php
	 * @param string $entry <p>
	 * 削除したいファイルの、アーカイブ内でのパス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * しかし、例外がスローされているかどうかを確認したうえで
	 * 例外がなければ成功とみなすほうがいいでしょう。
	 */
	public function delete(string $entry): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * phar のグローバルメタデータを削除する
	 * @link http://php.net/manual/ja/phar.delmetadata.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。しかし、より安全を期すなら
	 * try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。
	 */
	public function delMetadata(): bool {}

	/**
	 * (Unknown)<br/>
	 * phar アーカイブの内容をディレクトリに展開する
	 * @link http://php.net/manual/ja/phar.extractto.php
	 * @param string $pathto <p>
	 * 指定した <i>files</i> の展開先のパス。
	 * </p>
	 * @param string|array $files [optional] <p>
	 * 展開したいファイル名/ディレクトリ名、あるいはその配列。
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * <b>TRUE</b> にすると既存のファイルを上書きします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * しかし、例外がスローされているかどうかを確認したうえで
	 * 例外がなければ成功とみなすほうがいいでしょう。
	 */
	public function extractTo(string $pathto, $files = null, bool $overwrite = false): bool {}

	public function getAlias() {}

	public function getPath() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * phar アーカイブのメタデータを返す
	 * @link http://php.net/manual/ja/phar.getmetadata.php
	 * @return mixed Phar アーカイブのメタデータとして保存されている、シリアライズ可能な任意の PHP 変数を返します。
	 * メタデータが保存されていない場合は <b>NULL</b> を返します。
	 */
	public function getMetadata() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * phar が変更されているかどうかを返す
	 * @link http://php.net/manual/ja/phar.getmodified.php
	 * @return bool オープンした後でファイルが変更されている場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function getModified(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブの MD5/SHA1/SHA256/SHA512/OpenSSL シグネチャを返す
	 * @link http://php.net/manual/ja/phar.getsignature.php
	 * @return array 開いているアーカイブのシグネチャを配列で返します。
	 * キー hash にはシグネチャ自体を、そしてキー hash_type
	 * には MD5、SHA-1、
	 * SHA-256、SHA-512 あるいは OpenSSL
	 * を格納します。
	 * このシグネチャは phar の中身全体から計算したハッシュで、
	 * アーカイブの整合性を検証する際に使用します。
	 * INI 設定 phar.require_hash
	 * が true の場合は、すべての実行可能な phar が有効なシグネチャを持っている必要があります。
	 */
	public function getSignature(): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブの PHP ローダーあるいは起動スタブを返す
	 * @link http://php.net/manual/ja/phar.getstub.php
	 * @return string 現在の Phar アーカイブの起動用ローダー (スタブ)
	 * の内容を文字列で返します。
	 */
	public function getStub(): string {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブのバージョン情報を返す
	 * @link http://php.net/manual/ja/phar.getversion.php
	 * @return string オープンしたアーカイブの API バージョンを返します。
	 * これは、読み込んだ phar 拡張モジュールが新しい phar を作成する際に使用する
	 * API バージョンとは異なります。各 Phar アーカイブは、
	 * マニフェスト内に API バージョンをハードコードして保持しています。
	 * 詳細は Phar ファイルフォーマット
	 * のドキュメントを参照ください。
	 */
	public function getVersion(): string {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * ファイルがグローバルなメタデータを持つかどうかを返す
	 * @link http://php.net/manual/ja/phar.hasmetadata.php
	 * @return bool メタデータが設定されている場合に <b>TRUE</b>、されていない場合に <b>FALSE</b> を返します。
	 */
	public function hasMetadata(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar の書き込み操作がバッファリングされるか、あるいは直接ディスクに書き込まれるかを調べる
	 * @link http://php.net/manual/ja/phar.isbuffering.php
	 * @return bool 書込み操作がバッファリングされる場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isBuffering(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブ全体が (.tar.gz/tar.bz などで) 圧縮されている場合に Phar::GZ あるいは PHAR::BZ2 を返す
	 * @link http://php.net/manual/ja/phar.iscompressed.php
	 * @return mixed Phar::GZ、Phar::BZ2
	 * あるいは <b>FALSE</b> を返します。
	 */
	public function isCompressed() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブが、パラメータで指定した tar/phar/zip のいずれかの形式である場合に true を返す
	 * @link http://php.net/manual/ja/phar.isfileformat.php
	 * @param int $format <p>
	 * Phar::PHAR、Phar::TAR
	 * あるいは Phar::ZIP で、アーカイブの形式を指定します。
	 * </p>
	 * @return bool phar アーカイブのファイル形式がパラメータで指定したものと一致する場合に <b>TRUE</b>
	 * を返します。
	 */
	public function isFileFormat(int $format): bool {}

	/**
	 * (Unknown)<br/>
	 * phar アーカイブが変更可能な場合に true を返す
	 * @link http://php.net/manual/ja/phar.iswritable.php
	 * @return bool phar アーカイブが変更可能な場合に <b>TRUE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイルが phar 内に存在するかどうかを調べる
	 * @link http://php.net/manual/ja/phar.offsetexists.php
	 * @param string $offset <p>
	 * Phar 内で探すファイル名 (相対パス)。
	 * </p>
	 * @return bool ファイルが phar 内に存在する場合に <b>TRUE</b>、しない場合に <b>FALSE</b>
	 * を返します。
	 */
	public function offsetExists(string $offset): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * 指定したファイルの <b>PharFileInfo</b> オブジェクトを取得する
	 * @link http://php.net/manual/ja/phar.offsetget.php
	 * @param string $offset <p>
	 * Phar 内で探すファイル名 (相対パス)。
	 * </p>
	 * @return int <b>PharFileInfo</b> オブジェクトを返します。
	 * これを使用して、ファイルの内容を順に処理したりファイルの情報を取得したりします。
	 */
	public function offsetGet(string $offset): int {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * 内部ファイルに、外部ファイルの内容を設定する
	 * @link http://php.net/manual/ja/phar.offsetset.php
	 * @param string $offset <p>
	 * Phar 内で変更するファイル名 (相対パス)。
	 * </p>
	 * @param string $value <p>
	 * ファイルの内容。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $offset, string $value): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイルを phar から削除する
	 * @link http://php.net/manual/ja/phar.offsetunset.php
	 * @param string $offset <p>
	 * Phar 内で変更するファイル名 (相対パス)。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function offsetUnset(string $offset): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.1)<br/>
	 * Phar アーカイブのエイリアスを設定する
	 * @link http://php.net/manual/ja/phar.setalias.php
	 * @param string $alias <p>
	 * このアーカイブを指すときに使用する短い文字列。
	 * phar ストリームラッパーがアクセスする際にこれを使用します。
	 * </p>
	 * @return bool
	 */
	public function setAlias(string $alias): bool {}

	/**
	 * (Unknown)<br/>
	 * Phar アーカイブの PHP ローダー (起動スタブ) をデフォルトのローダーに設定する
	 * @link http://php.net/manual/ja/phar.setdefaultstub.php
	 * @param string $index [optional] <p>
	 * コマンドラインからアクセスした場合に実行する、
	 * phar アーカイブ内の相対パス。
	 * </p>
	 * @param string $webindex [optional] <p>
	 * ウェブブラウザからアクセスした場合に実行する、
	 * phar アーカイブ内の相対パス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setDefaultStub(string $index = null, string $webindex = null): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * phar アーカイブのメタデータを設定する
	 * @link http://php.net/manual/ja/phar.setmetadata.php
	 * @param mixed $metadata <p>
	 * phar アーカイブについての情報を含む、PHP の変数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMetadata($metadata): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.1.0)<br/>
	 * phar のシグネチャのアルゴリズムを設定して適用する
	 * @link http://php.net/manual/ja/phar.setsignaturealgorithm.php
	 * @param int $sigtype <p>
	 * Phar::MD5、
	 * Phar::SHA1、Phar::SHA256、
	 * Phar::SHA512 あるいは Phar::OPENSSL
	 * のいずれか。
	 * </p>
	 * @param string $privatekey [optional] <p>
	 * OpenSSL 秘密鍵の中身。証明書あるいは OpenSSL 鍵ファイルから取り出したもの。
	 * <code>
	 * $private = openssl_get_privatekey(file_get_contents('private.pem'));
	 * $pkey = '';
	 * openssl_pkey_export($private, $pkey);
	 * $p->setSignatureAlgorithm(Phar::OPENSSL, $pkey);
	 * </code>
	 * 公開鍵ファイルの名前や置き場所については
	 * phar の導入 を参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setSignatureAlgorithm(int $sigtype, string $privatekey = null): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブの PHP ローダ (あるいは起動スタブ) を設定する
	 * @link http://php.net/manual/ja/phar.setstub.php
	 * @param string $stub <p>
	 * 文字列あるいはオープンしたストリームハンドル。
	 * この phar アーカイブの実行スタブとして使用します。
	 * </p>
	 * @param int $len [optional] <p>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setStub(string $stub, int $len = -1): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar の書き込み操作のバッファリングを開始するが、ディスク上の Phar オブジェクトは変更しない
	 * @link http://php.net/manual/ja/phar.startbuffering.php
	 * @return void 値を返しません。
	 */
	public function startBuffering(): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブへの書き込みリクエストのバッファリングを終了し、変更内容をディスクに書き込む
	 * @link http://php.net/manual/ja/phar.stopbuffering.php
	 * @return void 値を返しません。
	 */
	public function stopBuffering(): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * API のバージョンを返す
	 * @link http://php.net/manual/ja/phar.apiversion.php
	 * @return string API のバージョンを、&#x00022;1.0.0&#x00022;
	 * のような文字列で返します。
	 */
	final public static function apiVersion(): string {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * phar 拡張モジュールが zlib あるいは bzip2 による圧縮をサポートしているかどうかを返す
	 * @link http://php.net/manual/ja/phar.cancompress.php
	 * @param int $type [optional] <p>
	 * Phar::GZ あるいは Phar::BZ2
	 * のいずれかを指定し、指定した圧縮アルゴリズムでの圧縮が可能かどうかを調べます。
	 * </p>
	 * @return bool 圧縮/展開 が可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	final public static function canCompress(int $type = 0): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * phar 拡張モジュールが phar の書き込みや作成をサポートしているかどうかを返す
	 * @link http://php.net/manual/ja/phar.canwrite.php
	 * @return bool 書き込みが可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	final public static function canWrite(): bool {}

	/**
	 * (Unknown)<br/>
	 * phar ファイルフォーマット用のスタブを作成する
	 * @link http://php.net/manual/ja/phar.createdefaultstub.php
	 * @param string $indexfile [optional]
	 * @param string $webindexfile [optional]
	 * @return string 独自の起動ローダー (スタブ) を文字列で返します。
	 * これを用いて作成した Phar アーカイブは、
	 * Phar 拡張モジュールが有効になっていない環境でも実行することができます。
	 */
	final public static function createDefaultStub(string $indexfile = null, string $webindexfile = null): string {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * サポートする圧縮アルゴリズムの配列を返す
	 * @link http://php.net/manual/ja/phar.getsupportedcompression.php
	 * @return array Phar::GZ あるいは
	 * Phar::BZ2 を含む配列を返します。
	 * これは、zlib 拡張モジュールと
	 * bz2 拡張モジュールが使用可能かどうかによって決まります。
	 */
	final public static function getSupportedCompression(): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.1.0)<br/>
	 * サポートするシグネチャ型の配列を返す
	 * @link http://php.net/manual/ja/phar.getsupportedsignatures.php
	 * @return array MD5、SHA-1、
	 * SHA-256、SHA-512 あるいは OpenSSL
	 * を含む配列を返します。
	 */
	final public static function getSupportedSignatures(): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * fopen、file_get_contents、opendir などの stat 関連の関数をすべて phar に横取りさせる
	 * @link http://php.net/manual/ja/phar.interceptfilefuncs.php
	 * @return void
	 */
	final public static function interceptFileFuncs(): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * 指定したファイル名が正しい形式の phar ファイルかどうかを返す
	 * @link http://php.net/manual/ja/phar.isvalidpharfilename.php
	 * @param string $filename <p>
	 * まだ作成されていない phar アーカイブの名前あるいはフルパス。
	 * </p>
	 * @param bool $executable [optional] <p>
	 * このパラメータは、指定した名前のファイルを phar
	 * の実行可能アーカイブとして扱うかデータのみの非実行可能アーカイブとして扱うかを指定します。
	 * </p>
	 * @return bool 正しい形式のファイルである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	final public static function isValidPharFilename(string $filename, bool $executable = true): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * 任意の phar アーカイブを、エイリアスを指定して読み込む
	 * @link http://php.net/manual/ja/phar.loadphar.php
	 * @param string $filename <p>
	 * オープンする phar アーカイブへの完全パスあるいは相対パス。
	 * </p>
	 * @param string $alias [optional] <p>
	 * この phar アーカイブをさす際に使用するエイリアス。
	 * 多くの場合は phar アーカイブ内で明示的なエイリアスを指定しており、
	 * このような場合に新しいエイリアスを指定すると、
	 * <b>PharException</b> がスローされます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	final public static function loadPhar(string $filename, string $alias = null): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * 現在実行されている (phar 形式の) ファイルを読み込み、その内容を登録する
	 * @link http://php.net/manual/ja/phar.mapphar.php
	 * @param string $alias [optional] <p>
	 * このアーカイブを参照する際にフルパスのかわりに使用する、
	 * phar:// 形式の URL。
	 * </p>
	 * @param int $dataoffset [optional] <p>
	 * 未使用。PEAR の PHP_Archive との互換性のために用意しています。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	final public static function mapPhar(string $alias = null, int $dataoffset = 0): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在実行中の Phar アーカイブのフルパスあるいは完全な phar URL を返す
	 * @link http://php.net/manual/ja/phar.running.php
	 * @param bool $retphar [optional] <p>
	 * <b>FALSE</b> の場合は
	 * phar アーカイブのディスク上でのフルパスを返します。
	 * <b>TRUE</b> の場合は完全な phar URL を返します。
	 * </p>
	 * @return string ファイル名が正しい形式の場合にファイル名、それ以外の場合に空文字列を返します。
	 */
	final public static function running(bool $retphar = true): string {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 外部のパスあるいはファイルを phar アーカイブ内に仮想的にマウントする
	 * @link http://php.net/manual/ja/phar.mount.php
	 * @param string $pharpath <p>
	 * マウントする場所として使用する phar アーカイブ内のパス。
	 * これは phar アーカイブ内の相対パスでなければならず、また、
	 * 既に存在するパスを指定することはできません。
	 * </p>
	 * @param string $externalpath <p>
	 * phar アーカイブ内にマウントしたい外部ファイルあるいはディレクトリのパスあるいは URL。
	 * </p>
	 * @return void 返り値はありません。失敗した場合は <b>PharException</b> をスローします。
	 */
	final public static function mount(string $pharpath, string $externalpath): void {}

	/**
	 * (Unknown)<br/>
	 * 最大 4 つまでの $_SERVER 変数を実行時に変更させる
	 * @link http://php.net/manual/ja/phar.mungserver.php
	 * @param array $munglist <p>
	 * REQUEST_URI、PHP_SELF、
	 * SCRIPT_NAME および SCRIPT_FILENAME
	 * を含む配列。その他の値を指定した場合は例外が発生します。また
	 * <b>Phar::mungServer</b> は大文字小文字を区別します。
	 * </p>
	 * @return void 値を返しません。
	 */
	final public static function mungServer(array $munglist): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブをディスクとメモリから完全に削除する
	 * @link http://php.net/manual/ja/phar.unlinkarchive.php
	 * @param string $archive <p>
	 * ディスク上の phar アーカイブへのパス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	final public static function unlinkArchive(string $archive): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ウェブベースの phar で使用するフロントコントローラ
	 * @link http://php.net/manual/ja/phar.webphar.php
	 * @param string $alias [optional] <p>
	 * phar:// URL でこのアーカイブを指す際に、
	 * フルパスの代わりに使用するエイリアス。
	 * </p>
	 * @param string $index [optional] <p>
	 * phar の中でディレクトリインデックスとなるファイルの場所。
	 * </p>
	 * @param string $f404 [optional] <p>
	 * ファイルが見つからないときに実行するスクリプトの場所。
	 * このスクリプトは HTTP 404 ヘッダを返さなければなりません。
	 * </p>
	 * @param array $mimetypes [optional] <p>
	 * ファイルの拡張子と MIME タイプを関連付けた配列。
	 * デフォルトのマッピングで十分な場合は、空の配列を渡します。
	 * デフォルトで、これらの関連が定義されています。
	 * <code>
	 * $mimes = array(
	 * 'phps' => Phar::PHPS, // highlight_file() に渡します
	 * 'c' => 'text/plain',
	 * 'cc' => 'text/plain',
	 * 'cpp' => 'text/plain',
	 * 'c++' => 'text/plain',
	 * 'dtd' => 'text/plain',
	 * 'h' => 'text/plain',
	 * 'log' => 'text/plain',
	 * 'rng' => 'text/plain',
	 * 'txt' => 'text/plain',
	 * 'xsd' => 'text/plain',
	 * 'php' => Phar::PHP, // PHP としてパースします
	 * 'inc' => Phar::PHP, // PHP としてパースします
	 * 'avi' => 'video/avi',
	 * 'bmp' => 'image/bmp',
	 * 'css' => 'text/css',
	 * 'gif' => 'image/gif',
	 * 'htm' => 'text/html',
	 * 'html' => 'text/html',
	 * 'htmls' => 'text/html',
	 * 'ico' => 'image/x-ico',
	 * 'jpe' => 'image/jpeg',
	 * 'jpg' => 'image/jpeg',
	 * 'jpeg' => 'image/jpeg',
	 * 'js' => 'application/x-javascript',
	 * 'midi' => 'audio/midi',
	 * 'mid' => 'audio/midi',
	 * 'mod' => 'audio/mod',
	 * 'mov' => 'movie/quicktime',
	 * 'mp3' => 'audio/mp3',
	 * 'mpg' => 'video/mpeg',
	 * 'mpeg' => 'video/mpeg',
	 * 'pdf' => 'application/pdf',
	 * 'png' => 'image/png',
	 * 'swf' => 'application/shockwave-flash',
	 * 'tif' => 'image/tiff',
	 * 'tiff' => 'image/tiff',
	 * 'wav' => 'audio/wav',
	 * 'xbm' => 'image/xbm',
	 * 'xml' => 'text/xml',
	 * );
	 * </code>
	 * </p>
	 * @param callable $rewrites [optional] <p>
	 * 書き換え関数は、唯一のパラメータとして文字列を受け取り、string あるいは <b>FALSE</b>
	 * を返さないといけません。
	 * </p>
	 * <p>
	 * fast-cgi あるいは cgi を使っている場合、この関数に渡されるパラメータは
	 * $_SERVER['PATH_INFO'] の値になります。
	 * それ以外の場合、この関数に渡されるパラメータは
	 * $_SERVER['REQUEST_URI'] の値になります。
	 * </p>
	 * <p>
	 * 文字列を返した場合は、内部的なファイルパスとして扱います。<b>FALSE</b> を返した場合は、
	 * webPhar() が HTTP 403 を送信します。
	 * </p>
	 * @return void 値を返しません。
	 */
	final public static function webPhar(string $alias = null, string $index = "index.php", string $f404 = null, array $mimetypes = null, callable $rewrites = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のエントリがディレクトリかつ '.' もしくは '..' でないかどうかを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool 現在のエントリが ('.' や '..' 以外の) ディレクトリであるかどうかを返します。
	 */
	public function hasChildren(bool $allow_links = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ディレクトリであれば、現在のエントリに対するイテレータを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getchildren.php
	 * @return mixed ファイル名、ファイル情報、あるいは $this のどれかを、
	 * 設定されているフラグによって返します。
	 * FilesystemIterator
	 * の定数 も参照ください。
	 */
	public function getChildren() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスを取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpath.php
	 * @return string サブパス (サブディレクトリ) を返します。
	 */
	public function getSubPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスと名前を取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpathname.php
	 * @return string サブパス (サブディレクトリ) とファイル名を返します。
	 */
	public function getSubPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 先頭に巻き戻す
	 * @link http://php.net/manual/ja/filesystemiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のファイルに移動する
	 * @link http://php.net/manual/ja/filesystemiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイルのキーを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.key.php
	 * @return string 設定されているフラグに応じてパス名あるいはファイル名を返します。
	 * FilesystemIterator の定数
	 * も参照ください。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイル
	 * @link http://php.net/manual/ja/filesystemiterator.current.php
	 * @return mixed 設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。
	 * FilesystemIterator の定数
	 * を参照ください。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.getflags.php
	 * @return int 設定されているフラグの値を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * 設定する処理フラグ。
	 * FilesystemIterator の定数
	 * も参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * PharData クラスは、実行可能形式でない tar アーカイブや
 * zip アーカイブへのアクセスや作成のための高レベルインターフェイスを提供します。
 * これらのアーカイブにはスタブが含まれておらず、
 * phar 拡張モジュールから実行することはできません。
 * そのため、PharData クラスによる通常の zip および tar ファイルの作成や
 * 操作は php.ini の phar.readonly
 * が 1 であっても可能です。
 * @link http://php.net/manual/ja/class.phardata.php
 */
class PharData extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 実行可能でない tar あるいは zip アーカイブオブジェクトを作成する
	 * @link http://php.net/manual/ja/phardata.construct.php
	 * @param string $fname <p>
	 * 既存の tar/zip アーカイブあるいは作成したいアーカイブへのパス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 親クラス <b>Phar</b> の <b>RecursiveDirectoryIterator</b>
	 * に渡すフラグ。
	 * </p>
	 * @param string $alias [optional] <p>
	 * この Phar アーカイブをストリーム機能からコールするときに使うエイリアス。
	 * </p>
	 * @param int $format [optional] <p>
	 * <b>Phar</b> クラスの
	 * ファイルフォーマット定数
	 * のいずれか。
	 * </p>
	 */
	public function __construct(string $fname, int $flags = null, string $alias = null, int $format = Phar::TAR) {}

	public function __destruct() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 空のディレクトリを tar/zip アーカイブに追加する
	 * @link http://php.net/manual/ja/phardata.addemptydir.php
	 * @param string $dirname <p>
	 * phar アーカイブ内に作成する空のディレクトリの名前。
	 * </p>
	 * @return bool 返り値はありません。失敗時には例外をスローします。
	 */
	public function addEmptyDir(string $dirname): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ファイルシステム上のファイルを tar/zip アーカイブに追加する
	 * @link http://php.net/manual/ja/phardata.addfile.php
	 * @param string $file <p>
	 * phar アーカイブに追加したいディスク上のファイルへのフルパスあるいは相対パス。
	 * </p>
	 * @param string $localname [optional] <p>
	 * ファイルをアーカイブ内に格納するときのパス。
	 * </p>
	 * @return void 返り値はありません。失敗時には例外をスローします。
	 */
	public function addFile(string $file, string $localname = null): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ファイルシステム上のファイルを tar/zip アーカイブに追加する
	 * @link http://php.net/manual/ja/phardata.addfromstring.php
	 * @param string $localname <p>
	 * ファイルをアーカイブ内に格納するときのパス。
	 * </p>
	 * @param string $contents <p>
	 * ファイルに保存する内容。
	 * </p>
	 * @return bool 返り値はありません。失敗時には例外をスローします。
	 */
	public function addFromString(string $localname, string $contents): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ディレクトリ内のファイルから tar/zip アーカイブを作成する
	 * @link http://php.net/manual/ja/phardata.buildfromdirectory.php
	 * @param string $base_dir <p>
	 * アーカイブに追加するすべてのファイルを含むディレクトリへの
	 * フルパスあるいは相対パス。
	 * </p>
	 * @param string $regex [optional] <p>
	 * オプションで指定する pcre 正規表現。
	 * これを使用してファイル一覧をフィルタリングします。
	 * 正規表現にマッチするファイルパスのみがアーカイブに追加されます。
	 * </p>
	 * @return array <b>Phar::buildFromDirectory</b>
	 * は、連想配列を返します。これは、
	 * ファイルの内部パスをファイルシステム上のフルパスを対応させたものです。
	 */
	public function buildFromDirectory(string $base_dir, string $regex = null): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * イテレータから tar あるいは zip アーカイブを作成する
	 * @link http://php.net/manual/ja/phardata.buildfromiterator.php
	 * @param Iterator $iter <p>
	 * phar ファイルと実際の場所の関連を返すイテレータ、
	 * あるいは SplFileInfo オブジェクトを返すイテレータ。
	 * </p>
	 * @param string $base_directory [optional] <p>
	 * SplFileInfo オブジェクトを返すイテレータを指定した際、
	 * tar/zip アーカイブへの追加時にフルパスから取り除く部分。
	 * </p>
	 * @return array <b>PharData::buildFromIterator</b>
	 * は連想配列を返します。
	 * これは、ファイルの内部パスとファイルシステム上のフルパスを対応させたものです。
	 */
	public function buildFromIterator(Iterator $iter, string $base_directory = null): array {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在の tar/zip アーカイブ内のすべてのファイルを圧縮する
	 * @link http://php.net/manual/ja/phardata.compressfiles.php
	 * @param int $compression <p>
	 * 圧縮を行う場合は Phar::GZ あるいは
	 * Phar::BZ2、圧縮を解除するためには Phar::NONE
	 * のいずれかを指定しなければなりません。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function compressFiles(int $compression): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在の zip アーカイブ内のすべてのファイルの圧縮を解除する
	 * @link http://php.net/manual/ja/phardata.decompressfiles.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function decompressFiles(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * tar/zip アーカイブ全体を Gzip あるいは Bzip2 で圧縮する
	 * @link http://php.net/manual/ja/phardata.compress.php
	 * @param int $compression <p>
	 * 圧縮を行う場合には Phar::GZ あるいは
	 * Phar::BZ2、圧縮を解除する場合には
	 * Phar::NONE を指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * デフォルトでは、tar を圧縮する際の拡張子は .tar.gz
	 * あるいは .tar.bz2、伸長する際の拡張子は
	 * .tar となります。
	 * </p>
	 * @return object <b>PharData</b> オブジェクトを返します。
	 */
	public function compress(int $compression, string $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * Phar アーカイブ全体の圧縮を解除する
	 * @link http://php.net/manual/ja/phardata.decompress.php
	 * @param string $extension [optional] <p>
	 * 圧縮を解除する場合、デフォルトのファイル拡張子は
	 * .tar です。
	 * このパラメータを使用すると、別の拡張子を指定することができます。
	 * 実行可能なアーカイブのみが、ファイル名に
	 * .phar を含むことができることに注意しましょう。
	 * </p>
	 * @return object <b>PharData</b> オブジェクトを返します。
	 */
	public function decompress(string $extension = null) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 実行可能でない tar/zip アーカイブを実行可能な phar アーカイブ形式に変換する
	 * @link http://php.net/manual/ja/phardata.converttoexecutable.php
	 * @param int $format [optional] <p>
	 * これは Phar::PHAR、Phar::TAR
	 * あるいは Phar::ZIP のいずれかとなります。
	 * <b>NULL</b> を指定すると、現在のファイル形式をそのまま保持します。
	 * </p>
	 * @param int $compression [optional] <p>
	 * アーカイブ全体の圧縮を行わない場合は Phar::NONE、
	 * zlib による圧縮の場合は Phar::GZ、そして bzip による圧縮の場合は
	 * Phar::BZ2 のいずれかを指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。
	 * 実行可能でない tar や zip アーカイブのファイル名としては
	 * .phar は使用できないことに注意しましょう。
	 * </p>
	 * <p>
	 * phar 形式のアーカイブに変換する場合、デフォルトの拡張子は圧縮形式によって
	 * .phar、.phar.gz あるいは .phar.bz2
	 * のいずれかとなります。tar 形式のアーカイブの場合、デフォルトの拡張子は
	 * .phar.tar、.phar.tar.gz
	 * および .phar.tar.bz2 です。zip 形式のアーカイブの場合、
	 * デフォルトの拡張子は .phar.zip となります。
	 * </p>
	 * @return Phar このメソッドは、成功した場合に <b>Phar</b>
	 * オブジェクトを返します。失敗した場合は例外をスローします。
	 */
	public function convertToExecutable(int $format = null, int $compression = null, string $extension = null): Phar {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブを実行可能でない tar あるいは zip ファイルに変換する
	 * @link http://php.net/manual/ja/phardata.converttodata.php
	 * @param int $format [optional] <p>
	 * これは Phar::TAR
	 * あるいは Phar::ZIP のいずれかとなります。
	 * <b>NULL</b> を指定すると、現在のファイル形式をそのまま保持します。
	 * </p>
	 * @param int $compression [optional] <p>
	 * アーカイブ全体の圧縮を行わない場合は Phar::NONE、
	 * zlib による圧縮の場合は Phar::GZ、そして bzip による圧縮の場合は
	 * Phar::BZ2 のいずれかを指定します。
	 * </p>
	 * @param string $extension [optional] <p>
	 * このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。
	 * 実行可能でない tar や zip アーカイブのファイル名としては
	 * .phar は使用できないことに注意しましょう。
	 * </p>
	 * <p>
	 * tar 形式の phar アーカイブの場合、デフォルトの拡張子は圧縮形式によって
	 * .tar、.tar.gz、
	 * .tar.bz2 のいずれかとなります。
	 * zip 形式のアーカイブの場合、デフォルトの拡張子は
	 * .zip となります。
	 * </p>
	 * @return PharData このメソッドは、成功した場合に <b>PharData</b>
	 * オブジェクトを返します。失敗した場合は例外をスローします。
	 */
	public function convertToData(int $format = null, int $compression = null, string $extension = null): PharData {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar アーカイブ内のファイルを、phar 内で別の新しいファイルとしてコピーする
	 * @link http://php.net/manual/ja/phardata.copy.php
	 * @param string $oldfile
	 * @param string $newfile
	 * @return bool 成功した場合に <b>TRUE</b> を返します。しかし、より安全を期すなら
	 * try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。
	 */
	public function copy(string $oldfile, string $newfile): bool {}

	public function count() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * tar/zip アーカイブ内のファイルを削除する
	 * @link http://php.net/manual/ja/phardata.delete.php
	 * @param string $entry <p>
	 * 削除したいファイルの、アーカイブ内でのパス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * しかし、例外がスローされているかどうかを確認したうえで
	 * 例外がなければ成功とみなすほうがいいでしょう。
	 */
	public function delete(string $entry): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * zip アーカイブのグローバルメタデータを削除する
	 * @link http://php.net/manual/ja/phardata.delmetadata.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。しかし、より安全を期すなら
	 * 例外がスローされないことを確認するといいでしょう。
	 */
	public function delMetadata(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * tar/zip アーカイブの内容をディレクトリに展開する
	 * @link http://php.net/manual/ja/phardata.extractto.php
	 * @param string $pathto <p>
	 * 指定した files の展開先のパス。
	 * </p>
	 * @param string|array $files [optional] <p>
	 * 展開したいファイル名/ディレクトリ名、あるいはその配列。
	 * </p>
	 * @param bool $overwrite [optional] <p>
	 * <b>TRUE</b> にすると既存のファイルを上書きします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * しかし、例外がスローされているかどうかを確認したうえで
	 * 例外がなければ成功とみなすほうがいいでしょう。
	 */
	public function extractTo(string $pathto, $files = null, bool $overwrite = false): bool {}

	public function getAlias() {}

	public function getPath() {}

	public function getMetadata() {}

	public function getModified() {}

	public function getSignature() {}

	public function getStub() {}

	public function getVersion() {}

	public function hasMetadata() {}

	public function isBuffering() {}

	public function isCompressed() {}

	/**
	 * @param $fileformat
	 */
	public function isFileFormat($fileformat) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * tar/zip アーカイブが変更可能な場合に true を返す
	 * @link http://php.net/manual/ja/phardata.iswritable.php
	 * @return bool tar/zip アーカイブが変更可能な場合に <b>TRUE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * @param $entry
	 */
	public function offsetExists($entry) {}

	/**
	 * @param $entry
	 */
	public function offsetGet($entry) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * tar/zip の内部のファイルに、外部ファイルあるいは文字列の内容を設定する
	 * @link http://php.net/manual/ja/phardata.offsetset.php
	 * @param string $offset <p>
	 * tar あるいは zip アーカイブ内で変更するファイル名 (相対パス)。
	 * </p>
	 * @param string $value <p>
	 * ファイルの内容。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $offset, string $value): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ファイルを tar/zip アーカイブから削除する
	 * @link http://php.net/manual/ja/phardata.offsetunset.php
	 * @param string $offset <p>
	 * tar/zip アーカイブ内で変更するファイル名 (相対パス)。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function offsetUnset(string $offset): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ダミー関数 (Phar::setAlias は PharData では使用不能)
	 * @link http://php.net/manual/ja/phardata.setalias.php
	 * @param string $alias <p>
	 * このアーカイブを指すときに使用する短い文字列。
	 * phar ストリームラッパーがアクセスする際にこれを使用します。
	 * このパラメータは無視されます。
	 * </p>
	 * @return bool
	 */
	public function setAlias(string $alias): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ダミー関数 (Phar::setDefaultStub は PharData では無効)
	 * @link http://php.net/manual/ja/phardata.setdefaultstub.php
	 * @param string $index [optional] <p>
	 * コマンドラインからアクセスした場合に実行する、
	 * phar アーカイブ内の相対パス。
	 * </p>
	 * @param string $webindex [optional] <p>
	 * ウェブブラウザからアクセスした場合に実行する、
	 * phar アーカイブ内の相対パス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setDefaultStub(string $index = null, string $webindex = null): bool {}

	/**
	 * @param $metadata
	 */
	public function setMetadata($metadata) {}

	/**
	 * @param $algorithm
	 * @param $privatekey [optional]
	 */
	public function setSignatureAlgorithm($algorithm, $privatekey) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * ダミー関数 (Phar::setStub は PharData では使用不能)
	 * @link http://php.net/manual/ja/phardata.setstub.php
	 * @param string $stub <p>
	 * 文字列あるいはオープンしたストリームハンドル。
	 * この phar アーカイブの実行スタブとして使用します。
	 * このパラメータは無視されます。
	 * </p>
	 * @param int $len [optional] <p>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setStub(string $stub, int $len = -1): bool {}

	public function startBuffering() {}

	public function stopBuffering() {}

	final public static function apiVersion() {}

	/**
	 * @param $method [optional]
	 */
	final public static function canCompress($method) {}

	final public static function canWrite() {}

	/**
	 * @param $index [optional]
	 * @param $webindex [optional]
	 */
	final public static function createDefaultStub($index, $webindex) {}

	final public static function getSupportedCompression() {}

	final public static function getSupportedSignatures() {}

	final public static function interceptFileFuncs() {}

	/**
	 * @param $filename
	 * @param $executable [optional]
	 */
	final public static function isValidPharFilename($filename, $executable) {}

	/**
	 * @param $filename
	 * @param $alias [optional]
	 */
	final public static function loadPhar($filename, $alias) {}

	/**
	 * @param $alias [optional]
	 * @param $offset [optional]
	 */
	final public static function mapPhar($alias, $offset) {}

	/**
	 * @param $retphar [optional]
	 */
	final public static function running($retphar) {}

	/**
	 * @param $inphar
	 * @param $externalfile
	 */
	final public static function mount($inphar, $externalfile) {}

	/**
	 * @param $munglist
	 */
	final public static function mungServer($munglist) {}

	/**
	 * @param $archive
	 */
	final public static function unlinkArchive($archive) {}

	/**
	 * @param $alias [optional]
	 * @param $index [optional]
	 * @param $f404 [optional]
	 * @param $mimetypes [optional]
	 * @param $rewrites [optional]
	 */
	final public static function webPhar($alias, $index, $f404, $mimetypes, $rewrites) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のエントリがディレクトリかつ '.' もしくは '..' でないかどうかを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool 現在のエントリが ('.' や '..' 以外の) ディレクトリであるかどうかを返します。
	 */
	public function hasChildren(bool $allow_links = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ディレクトリであれば、現在のエントリに対するイテレータを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getchildren.php
	 * @return mixed ファイル名、ファイル情報、あるいは $this のどれかを、
	 * 設定されているフラグによって返します。
	 * FilesystemIterator
	 * の定数 も参照ください。
	 */
	public function getChildren() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスを取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpath.php
	 * @return string サブパス (サブディレクトリ) を返します。
	 */
	public function getSubPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスと名前を取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpathname.php
	 * @return string サブパス (サブディレクトリ) とファイル名を返します。
	 */
	public function getSubPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 先頭に巻き戻す
	 * @link http://php.net/manual/ja/filesystemiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のファイルに移動する
	 * @link http://php.net/manual/ja/filesystemiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイルのキーを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.key.php
	 * @return string 設定されているフラグに応じてパス名あるいはファイル名を返します。
	 * FilesystemIterator の定数
	 * も参照ください。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイル
	 * @link http://php.net/manual/ja/filesystemiterator.current.php
	 * @return mixed 設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。
	 * FilesystemIterator の定数
	 * を参照ください。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.getflags.php
	 * @return int 設定されているフラグの値を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * 設定する処理フラグ。
	 * FilesystemIterator の定数
	 * も参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * PharFileInfo クラスは、
 * phar アーカイブ内の個々のファイルのコンテンツや属性への
 * 高レベルインターフェイスを提供します。
 * @link http://php.net/manual/ja/class.pharfileinfo.php
 */
class PharFileInfo extends SplFileInfo  {

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar エントリオブジェクトを作成する
	 * @link http://php.net/manual/ja/pharfileinfo.construct.php
	 * @param string $entry <p>
	 * ファイルを取得するための完全な url。
	 * ファイル my/file.php
	 * の情報を phar boo.phar から取得したい場合は、
	 * このエントリは phar://boo.phar/my/file.php となります。
	 * </p>
	 */
	public function __construct(string $entry) {}

	public function __destruct() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイル固有のパーミッションビットを設定する
	 * @link http://php.net/manual/ja/pharfileinfo.chmod.php
	 * @param int $permissions <p>
	 * パーミッション (<b>chmod</b> を参照ください)。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function chmod(int $permissions): void {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * 現在の Phar エントリを zlib あるいは bzip2 のいずれかで圧縮する
	 * @link http://php.net/manual/ja/pharfileinfo.compress.php
	 * @param int $compression
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function compress(int $compression): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 2.0.0)<br/>
	 * phar 内の現在の Phar エントリの圧縮を解除する
	 * @link http://php.net/manual/ja/pharfileinfo.decompress.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function decompress(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * エントリのメタデータを削除する
	 * @link http://php.net/manual/ja/pharfileinfo.delmetadata.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * エントリがメタデータを持っていない場合に <b>FALSE</b> を返します。
	 * この関数は phar の内容を変更するので、<b>Phar</b>
	 * アーカイブ内のファイルを操作するには INI 設定
	 * phar.readonly がオフでなければなりません。
	 * <b>PharData</b> アーカイブ内のファイルについては、この制約はありません。
	 */
	public function delMetadata(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar アーカイブ内での実際のファイルの大きさ (圧縮された状態) を返す
	 * @link http://php.net/manual/ja/pharfileinfo.getcompressedsize.php
	 * @return int ディスク上の Phar アーカイブ内のファイルのバイト数を返します。
	 */
	public function getCompressedSize(): int {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * CRC32 コードを返すか、CRC がチェックできない場合に例外をスローする
	 * @link http://php.net/manual/ja/pharfileinfo.getcrc32.php
	 * @return int Phar アーカイブ内のファイルの
	 * <b>crc32</b> チェックサムを返します。
	 */
	public function getCRC32(): int {}

	public function getContent() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイルとともに保存されている、ファイル固有のメタデータを返す
	 * @link http://php.net/manual/ja/pharfileinfo.getmetadata.php
	 * @return mixed ファイルのメタデータとして保存されている、シリアライズ可能な任意の PHP 変数を返します。
	 * メタデータが保存されていない場合は <b>NULL</b> を返します。
	 */
	public function getMetadata() {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * Phar ファイルエントリのフラグを返す
	 * @link http://php.net/manual/ja/pharfileinfo.getpharflags.php
	 * @return int Phar フラグを返します (現在の実装では、常に 0 となります)。
	 */
	public function getPharFlags(): int {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.2.0)<br/>
	 * エントリのメタデータを返す
	 * @link http://php.net/manual/ja/pharfileinfo.hasmetadata.php
	 * @return bool メタデータが設定されていないかあるいは <b>NULL</b> が設定されている場合に <b>FALSE</b>、
	 * <b>NULL</b> 以外のメタデータが設定されている場合に <b>TRUE</b> を返します。
	 */
	public function hasMetadata(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * エントリが圧縮されているかどうかを調べる
	 * @link http://php.net/manual/ja/pharfileinfo.iscompressed.php
	 * @param int $compression_type [optional] <p>
	 * <b>Phar::GZ</b> あるいは <b>Phar::BZ2</b>
	 * のいずれか。デフォルトは任意の圧縮形式となります。
	 * </p>
	 * @return bool Phar アーカイブ内のファイルが圧縮されている場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isCompressed(int $compression_type = 9021976): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイルエントリの CRC が検証されているかどうかを調べる
	 * @link http://php.net/manual/ja/pharfileinfo.iscrcchecked.php
	 * @return bool そのファイルの CRC が検証されている場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isCRCChecked(): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL phar &gt;= 1.0.0)<br/>
	 * ファイルとともに保存する、ファイル固有のメタデータを設定する
	 * @link http://php.net/manual/ja/pharfileinfo.setmetadata.php
	 * @param mixed $metadata <p>
	 * ファイルとともに保存する情報を含む、PHP の変数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMetadata($metadata): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getextension.php
	 * @return string ファイルの拡張子を含む文字列を返します。
	 * 拡張子がないときは、空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルのベース名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * 返されるベース名から取り除きたい、オプションのサフィックス。
	 * </p>
	 * @return string パス情報を含まないベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを文字列で返す
	 * @link http://php.net/manual/ja/splfileinfo.tostring.php
	 * @return void ファイルへのパスを返します。
	 */
	public function __toString(): void {}

}
// End of Phar v.2.0.2
?>
