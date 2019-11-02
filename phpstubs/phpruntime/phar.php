<?php



namespace {

	/**
	 * <p>Phar クラスは、phar アーカイブへのアクセスや作成のための高レベルインターフェイスを提供します。</p>
	 * @link https://php.net/manual/ja/class.phar.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
	 */
	class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess {

		/**
		 * @var int 圧縮しない
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const NONE = 0;

		/**
		 * @var int そのファイルが既に何らかの形式で圧縮されているかどうかを表すフラグとして用いるビットマスク
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const COMPRESSED = 61440;

		/**
		 * @var int zlib (gzip) 圧縮
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const GZ = 4096;

		/**
		 * @var int bzip2 圧縮
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const BZ2 = 8192;

		/**
		 * @var int 同じファイル形式を維持する
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const SAME = null;

		/**
		 * @var int phar ファイル形式
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const PHAR = 1;

		/**
		 * @var int tar ファイル形式
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const TAR = 2;

		/**
		 * @var int zip ファイル形式
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const ZIP = 3;

		/**
		 * @var int md5 ハッシュアルゴリズムでの署名
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const MD5 = 1;

		/**
		 * @var int sha1 ハッシュアルゴリズムでの署名
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const SHA1 = 2;

		/**
		 * @var int sha256 ハッシュアルゴリズムでの署名 (hash 拡張モジュールが必要)
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const SHA256 = 3;

		/**
		 * @var int sha512 ハッシュアルゴリズムでの署名 (hash 拡張モジュールが必要)
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const SHA512 = 4;

		/**
		 * @var int OpenSSL 公開鍵/秘密鍵 ペアでの署名。真の意味での非対称鍵による署名。
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const OPENSSL = 16;

		/**
		 * @var int <code>Phar::webPhar()</code> の mimeoverrides パラメータに対して、その拡張子を PHP ファイルとしてパースするよう指示する
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const PHP = 0;

		/**
		 * @var int <code>Phar::webPhar()</code> の mimeoverrides パラメータに対して、その拡張子を PHP ファイルとしてパースして <code>highlight_file()</code> を通すよう指示する
		 * @link https://php.net/manual/ja/phar.constants.php
		 */
		const PHPS = 1;

		/**
		 * Phar アーカイブオブジェクトを作成する
		 * @param string $fname <p>既存の Phar アーカイブ、あるいは作成したいアーカイブへのパス。 ファイル名の拡張子は .phar にする必要があります。</p>
		 * @param int $flags <p>親クラス RecursiveDirectoryIterator に渡すフラグ。</p>
		 * @param string $alias <p>ストリーム機能をコールする場合に Phar アーカイブが参照するエイリアス。</p>
		 * @return self
		 * @link https://php.net/manual/ja/phar.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function __construct(string $fname, int $flags = NULL, string $alias = NULL) {}

		/**
		 * 空のディレクトリを phar アーカイブに追加する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドを使用すると、空のディレクトリが <i>dirname</i> に作成されます。このメソッドは <code>ZipArchive::addEmptyDir()</code> と同じようなものです。</p>
		 * @param string $dirname <p>phar アーカイブ内に作成する空のディレクトリの名前。</p>
		 * @return void <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.addemptydir.php
		 * @see PharData::addEmptyDir(), Phar::addFile(), Phar::addFromString()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addEmptyDir(string $dirname): void {}

		/**
		 * ファイルシステム上のファイルを phar アーカイブに追加する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドを使用すると、任意のファイルあるいは URL を phar アーカイブに追加することができます。 オプションの 2 番目のパラメータ <i>localname</i> を指定すると、 ファイルはその名前でアーカイブ内に格納されます。指定しなかった場合は、 <i>file</i> パラメータをアーカイブ内のパスとして使用します。 URL を使用する場合は、localname を指定しないと例外がスローされます。 このメソッドは <code>ZipArchive::addFile()</code> と同じようなものです。</p>
		 * @param string $file <p>phar アーカイブに追加したいディスク上のファイルへのフルパスあるいは相対パス。</p>
		 * @param string $localname <p>ファイルをアーカイブ内に格納するときのパス。</p>
		 * @return void <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.addfile.php
		 * @see Phar::offsetSet(), PharData::addFile(), Phar::addFromString(), Phar::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addFile(string $file, string $localname = NULL): void {}

		/**
		 * 文字列から、ファイルを phar アーカイブに追加する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドを使用すると、任意の文字列を phar アーカイブに追加することができます。 アーカイブ内のファイル名は <i>localname</i> で指定したものとなります。 このメソッドは <code>ZipArchive::addFromString()</code> と同じようなものです。</p>
		 * @param string $localname <p>ファイルをアーカイブ内に格納するときのパス。</p>
		 * @param string $contents <p>ファイルに保存する内容。</p>
		 * @return void <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.addfromstring.php
		 * @see Phar::offsetSet(), PharData::addFromString(), Phar::addFile(), Phar::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addFromString(string $localname, string $contents): void {}

		/**
		 * API のバージョンを返す
		 * <p>phar ファイルフォーマットの API バージョンを返します。 phar を作成する際にこのバージョンが使用されます。 Phar 拡張モジュールが読み込みをサポートしているのは、 バージョン 1.0.0 以降の API です。 SHA-256 や SHA-512 を使用するには API バージョン 1.1.0 以降が、 そして空のディレクトリを格納するには API バージョン 1.1.1 以降が必要です。</p>
		 * @return string <p>API のバージョンを、<i>"1.0.0"</i> のような文字列で返します。</p>
		 * @link https://php.net/manual/ja/phar.apiversion.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function apiVersion(): string {}

		/**
		 * ディレクトリ内のファイルから phar を作成する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>ディレクトリの中身をもとに phar アーカイブを作成します。 オプションの 2 番目のパラメータで正規表現 (pcre) を指定すると、特定のファイルを除外することができます。 正規表現にマッチするすべてのファイルがアーカイブに含められ、 それ以外のファイルは除外されます。より詳細に制御するには <code>Phar::buildFromIterator()</code> を使用します。</p>
		 * @param string $base_dir <p>アーカイブに追加するすべてのファイルを含むディレクトリへの フルパスあるいは相対パス。</p>
		 * @param string $regex <p>オプションで指定する pcre 正規表現。 これを使用してファイル一覧をフィルタリングします。 正規表現にマッチするファイルパスのみがアーカイブに追加されます。</p>
		 * @return array <p><b>Phar::buildFromDirectory()</b> は、連想配列を返します。これは、 ファイルの内部パスをファイルシステム上のフルパスを対応させたものです。</p>
		 * @link https://php.net/manual/ja/phar.buildfromdirectory.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $base_dir, string $regex = NULL): array {}

		/**
		 * イテレータから phar アーカイブを作成する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar アーカイブをイテレータから作成します。 サポートするイテレータは二種類で、 phar 内のファイル名とディスク上の実際のファイル名を対応させたものか、あるいは DirectoryIterator のように SplFileInfo オブジェクトを返すものです。 SplFileInfo オブジェクトを返すイテレータの場合は、2 番目のパラメータが必要となります。</p>
		 * @param \Iterator $iter <p>phar ファイルと実際の場所の関連を返すイテレータ、 あるいは SplFileInfo オブジェクトを返すイテレータ。</p>
		 * @param string $base_directory <p>SplFileInfo オブジェクトを返すイテレータを指定した際、 phar アーカイブへの追加時にフルパスから取り除く部分。</p>
		 * @return array <p><b>Phar::buildFromIterator()</b> は連想配列を返します。 これは、ファイルの内部パスとファイルシステム上のフルパスを対応させたものです。</p>
		 * @link https://php.net/manual/ja/phar.buildfromiterator.php
		 * @see Phar::buildFromDirectory()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Iterator $iter, string $base_directory = NULL): array {}

		/**
		 * phar 拡張モジュールが zlib あるいは bzip2 による圧縮をサポートしているかどうかを返す
		 * <p>これは、圧縮されたファイルを含む phar を読み込む前に、 圧縮が可能かどうかを調べるために使用します。</p>
		 * @param int $type <p><i>Phar::GZ</i> あるいは <i>Phar::BZ2</i> のいずれかを指定し、指定した圧縮アルゴリズムでの圧縮が可能かどうかを調べます。</p>
		 * @return bool <p>圧縮/展開 が可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.cancompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canCompress(int $type = 0): bool {}

		/**
		 * phar 拡張モジュールが phar の書き込みや作成をサポートしているかどうかを返す
		 * <p>この静的メソッドは、書き込みアクセスが php.ini の phar.readonly で無効にされているかどうかを調べます。</p>
		 * @return bool <p>書き込みが可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.canwrite.php
		 * @see Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canWrite(): bool {}

		/**
		 * Phar アーカイブ全体を Gzip あるいは Bzip2 で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式あるいは phar 形式の phar アーカイブの場合は、 このメソッドはアーカイブ全体を gzip あるいは bzip2 で圧縮します。 できあがったファイルは gunzip/bunzip コマンドで処理することもできますし、 Phar 拡張モジュールで直接透過的に使用することもできます。</p><p>zip 形式の phar アーカイブの場合は、このメソッドは失敗して例外が発生します。 gzip で圧縮するためには zlib 拡張モジュールが、そして bzip2 で圧縮するためには bzip2 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p><p>さらに、このメソッドは自動的にアーカイブの名前を変更し、 <i>.gz</i> あるいは <i>.bz2</i> を追加します。<i>Phar::NONE</i> を渡して圧縮を解除した場合は拡張子も削除します。 もうひとつの方法として、ファイルの拡張子を 2 番目のパラメータで指定することもできます。</p>
		 * @param int $compression <p>圧縮を行う場合には <i>Phar::GZ</i> あるいは <i>Phar::BZ2</i>、圧縮を解除する場合には <i>Phar::NONE</i> を指定します。</p>
		 * @param string $extension <p>デフォルトでは、phar 形式のアーカイブを圧縮する際の拡張子は <i>.phar.gz</i> あるいは <i>.phar.bz2</i> となり、tar 形式のアーカイブを圧縮する際の拡張子は <i>.phar.tar.gz</i> あるいは <i>.phar.tar.bz2</i> となります。伸長の際は、デフォルトの拡張子は <i>.phar</i> および <i>.phar.tar</i> となります。</p>
		 * @return object <p>Phar オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/phar.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, string $extension = NULL): object {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを Bzip2 で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、Phar アーカイブ内のすべてのファイルを bzip2 で圧縮します。この機能を使用するには bzip2 拡張モジュールが有効になっていなければなりません。 また、すでに gzip で圧縮されているファイルを処理するためには、 まず gzip を伸張してから bzip2 で再圧縮するため、 zlib 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.compressallfilesbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesBZIP2(): bool {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを Gzip で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式の phar アーカイブの場合は、このメソッドはアーカイブ全体を gzip で圧縮します。 できあがったファイルは gunzip コマンドで処理することもできますし、 Phar 拡張モジュールで直接透過的に使用することもできます。</p><p>zip 形式あるいは phar 形式の phar アーカイブの場合は、このメソッドは Phar アーカイブ内のすべてのファイルを gzip で圧縮します。 この機能を使用するには zlib 拡張モジュールが有効になっていなければなりません。 また、すでに bzip2 で圧縮されているファイルを処理するためには、 まず bzip2 を伸張してから gzip で再圧縮するため、 bzip2 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.compressallfilesgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesGZ(): bool {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式の phar アーカイブでは、このメソッドは BadMethodCallException をスローします。 というのも、tar ファイルフォーマットではアーカイブ内の個別のファイルの圧縮をサポートしていないからです。 <code>Phar::compress()</code> を使用して、tar 形式の phar アーカイブ全体を圧縮します。</p><p>zip 形式および phar 形式の phar アーカイブでは、 このメソッドは Phar アーカイブ内のすべてのファイルを指定した方式で圧縮します。 この機能を使用するには、zlib 拡張モジュールあるいは bzip2 拡張モジュールが有効になっている必要があります。さらに、 もし既に bzip2/zlib で圧縮されているファイルがある場合は、 いったんその圧縮を解除するために対応する拡張モジュールが必要となります。 この関数は phar の内容を変更するので、使用するためには INI 設定 phar.readonly が off になっている必要があります。</p>
		 * @param int $compression <p>圧縮を行う場合は <i>Phar::GZ</i> あるいは <i>Phar::BZ2</i>、圧縮を解除するためには <i>Phar::NONE</i> のいずれかを指定しなければなりません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): void {}

		/**
		 * phar アーカイブを実行可能でない tar あるいは zip ファイルに変換する
		 * <p>このメソッドは、実行可能な phar アーカイブを tar あるいは zip ファイルに変換します。 tar あるいは zip を実行可能ではない形式にするため、 phar スタブおよび phar エイリアスファイルはアーカイブから削除されます。</p><p>何も変更しなかった場合、もしアーカイブが phar 形式ならこのメソッドは BadMethodCallException をスローします。 tar あるいは zip 形式のアーカイブの場合は、 このメソッドはアーカイブを実行可能でない形式に変換します。</p><p>成功した場合は、このメソッドはディスク上に新しいアーカイブを作成して PharData オブジェクトを返します。 古いアーカイブは削除されずディスク上に残るので、 処理を終えたら手動で削除する必要があります。</p>
		 * @param int $format <p>これは <i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> のいずれかとなります。 <b><code>NULL</code></b> を指定すると、現在のファイル形式をそのまま保持します。</p>
		 * @param int $compression <p>アーカイブ全体の圧縮を行わない場合は <i>Phar::NONE</i>、 zlib による圧縮の場合は <i>Phar::GZ</i>、そして bzip による圧縮の場合は <i>Phar::BZ2</i> のいずれかを指定します。</p>
		 * @param string $extension <p>このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。 実行可能でない tar や zip アーカイブのファイル名としては <i>.phar</i> は使用できないことに注意しましょう。</p> <p>tar 形式の phar アーカイブの場合、デフォルトの拡張子は圧縮形式によって <i>.tar</i>、<i>.tar.gz</i>、 <i>.tar.bz2</i> のいずれかとなります。 zip 形式のアーカイブの場合、デフォルトの拡張子は <i>.zip</i> となります。</p>
		 * @return PharData <p>このメソッドは、成功した場合に PharData オブジェクトを返します。失敗した場合は例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.converttodata.php
		 * @see Phar::convertToExecutable(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension = NULL): \PharData {}

		/**
		 * phar アーカイブを実行可能な別の phar アーカイブ形式に変換する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、phar アーカイブを別のファイル形式に変換します。 たとえば、zip 形式の実行可能な phar アーカイブあるいは phar 形式の実行可能な phar アーカイブから tar 形式の実行可能な phar アーカイブを作成することができます。 さらに、tar あるいは phar 形式のアーカイブについてはアーカイブ全体を圧縮することもできます。</p><p>何も変更しなかった場合、このメソッドは BadMethodCallException をスローします。</p><p>成功した場合は、このメソッドはディスク上に新しいアーカイブを作成して Phar オブジェクトを返します。 古いアーカイブは削除されずディスク上に残るので、 処理を終えたら手動で削除する必要があります。</p>
		 * @param int $format <p>これは <i>Phar::PHAR</i>、<i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> のいずれかとなります。 <b><code>NULL</code></b> を指定すると、現在のファイル形式をそのまま保持します。</p>
		 * @param int $compression <p>アーカイブ全体の圧縮を行わない場合は <i>Phar::NONE</i>、 zlib による圧縮の場合は <i>Phar::GZ</i>、そして bzip による圧縮の場合は <i>Phar::BZ2</i> のいずれかを指定します。</p>
		 * @param string $extension <p>このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。 実行可能でない tar や zip アーカイブのファイル名としては <i>.phar</i> は使用できないことに注意しましょう。</p> <p>phar 形式のアーカイブに変換する場合、デフォルトの拡張子は圧縮形式によって <i>.phar</i>、<i>.phar.gz</i> あるいは <i>.phar.bz2</i> のいずれかとなります。tar 形式のアーカイブの場合、デフォルトの拡張子は <i>.phar.tar</i>、<i>.phar.tar.gz</i> および <i>.phar.tar.bz2</i> です。zip 形式のアーカイブの場合、 デフォルトの拡張子は <i>.phar.zip</i> となります。</p>
		 * @return Phar <p>このメソッドは、成功した場合に Phar オブジェクトを返します。失敗した場合は例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.converttoexecutable.php
		 * @see Phar::convertToData(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension = NULL): \Phar {}

		/**
		 * phar アーカイブ内のファイルを、phar 内で別の新しいファイルとしてコピーする
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar アーカイブ内のファイルを、そのアーカイブ内で別の新しいファイルとしてコピーします。 これは、phar ストリームラッパーでの <code>copy()</code> と同等の操作をオブジェクト指向で行うものです。</p>
		 * @param string $oldfile
		 * @param string $newfile
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。しかし、より安全を期すなら try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。</p>
		 * @link https://php.net/manual/ja/phar.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function copy(string $oldfile, string $newfile): bool {}

		/**
		 * Phar アーカイブ内のエントリ (ファイル) の数を返す
		 * @return int <p>この phar ファイルに含まれるファイルの数を返します。 存在しない場合は <i>0</i> (数字のゼロ) を返します。</p>
		 * @link https://php.net/manual/ja/phar.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function count(): int {}

		/**
		 * phar ファイルフォーマット用のスタブを作成する
		 * <p>このメソッドは、phar ファイル形式のスタブを作成するためのもので、 tar 形式や zip 形式の phar アーカイブでは使用しません。</p><p>PHP でかかれた起動ローダー (スタブ) を含む Phar アーカイブを PHP から実行するには、次のようにそれをインクルードするか、</p><p>このメソッドは、phar アーカイブの起動時に実行するスタブ用のメソッドを作成します。 さらに、phar アーカイブをコマンドラインやウェブサーバーから実行する際には別のファイルを指定することもできます。 ローダースタブは <code>Phar::interceptFileFuncs()</code> もコールでき、PHP のアプリケーションからファイルシステムを簡単に扱えるようになります。 phar 拡張モジュールが存在しない場合は、 ローダースタブが phar アーカイブの内容を一時ディレクトリに展開し、 そのファイルを操作します。 シャットダウン関数が、この一時ファイル群を削除します。</p>
		 * @param string $indexfile
		 * @param string $webindexfile
		 * @return string <p>独自の起動ローダー (スタブ) を文字列で返します。 これを用いて作成した Phar アーカイブは、 Phar 拡張モジュールが有効になっていない環境でも実行することができます。</p>
		 * @link https://php.net/manual/ja/phar.createdefaultstub.php
		 * @see Phar::setStub(), Phar::getStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function createDefaultStub(string $indexfile = NULL, string $webindexfile = NULL): string {}

		/**
		 * Phar アーカイブ全体の圧縮を解除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式あるいは phar 形式の phar アーカイブの場合は、 このメソッドはアーカイブ全体の圧縮を解除します。</p><p>zip 形式の phar アーカイブの場合は、このメソッドは失敗して例外が発生します。 gzip で圧縮されたファイルの圧縮を解除するためには zlib 拡張モジュールが、そして bzip2 で圧縮されたファイルの圧縮を解除するためには bzip2 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p><p>さらに、このメソッドは自動的にアーカイブの拡張子を変更し、 phar アーカイブなら <i>.phar</i>、 tar 形式のアーカイブなら <i>.phar.tar</i> をデフォルトで追加します。 もうひとつの方法として、ファイルの拡張子を 2 番目のパラメータで指定することもできます。</p>
		 * @param string $extension <p>圧縮を解除する場合、デフォルトのファイル拡張子は <i>.phar</i> および <i>.phar.tar</i> です。 このパラメータを使用すると、別の拡張子を指定することができます。 実行可能な phar アーカイブは、ファイル名に必ず <i>.phar</i> を含まなければならないことに注意しましょう。</p>
		 * @return object <p>Phar オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/phar.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(string $extension = NULL): object {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルの圧縮を解除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式の phar アーカイブでは、このメソッドは BadMethodCallException をスローします。 というのも、tar ファイルフォーマットではアーカイブ内の個別のファイルの圧縮をサポートしていないからです。 <code>Phar::compress()</code> を使用して、tar 形式の phar アーカイブ全体を圧縮します。</p><p>zip 形式および phar 形式の phar アーカイブでは、 このメソッドは Phar アーカイブ内のすべてのファイルの圧縮を解除します。 もし bzip2/zlib で圧縮されているファイルがある場合は、 この機能を使用するには、zlib 拡張モジュールあるいは bzip2 拡張モジュールが有効になっている必要があります。 この関数は phar の内容を変更するので、使用するためには INI 設定 phar.readonly が off になっている必要があります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * phar のグローバルメタデータを削除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar のグローバルメタデータを削除します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。しかし、より安全を期すなら try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。</p>
		 * @link https://php.net/manual/ja/phar.delmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * phar アーカイブ内のファイルを削除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>アーカイブ内のファイルを削除します。 これは、ストリームラッパー上で <code>unlink()</code> をコールするのと同じ意味です。以下に例を示します。</p>
		 * @param string $entry <p>削除したいファイルの、アーカイブ内でのパス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 しかし、例外がスローされているかどうかを確認したうえで 例外がなければ成功とみなすほうがいいでしょう。</p>
		 * @link https://php.net/manual/ja/phar.delete.php
		 * @see PharData::delete(), Phar::unlinkArchive()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delete(string $entry): bool {}

		/**
		 * phar アーカイブの内容をディレクトリに展開する
		 * <p>phar アーカイブ内のすべてのファイルをディスクに展開します。 展開されたファイルやディレクトリは、アーカイブに保存されたときのパーミッションを維持しています。 オプションのパラメータを使用すると、どのファイルを展開するかを制御したり 既存のファイルを上書きするかどうかを指定したりすることができます。 2 番目のパラメータ <code>files</code> には、 展開したいファイルやディレクトリの名前、あるいはその配列を指定します。 デフォルトでは、このメソッドは既存のファイルを上書きしません。 3 番目のパラメータを true にすると既存のファイルを上書きさせることができます。 このメソッドは <code>ZipArchive::extractTo()</code> と同じようなものです。</p>
		 * @param string $pathto <p>指定した <code>files</code> の展開先のパス。</p>
		 * @param string|array $files <p>展開したいファイル名/ディレクトリ名、あるいはその配列。</p>
		 * @param bool $overwrite <p><b><code>TRUE</code></b> にすると既存のファイルを上書きします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 しかし、例外がスローされているかどうかを確認したうえで 例外がなければ成功とみなすほうがいいでしょう。</p>
		 * @link https://php.net/manual/ja/phar.extractto.php
		 * @see PharData::extractTo()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function extractTo(string $pathto, $files = NULL, bool $overwrite = false): bool {}

		/**
		 * Get the alias for Phar
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>Returns the alias or <b><code>NULL</code></b> if there's no alias.</p>
		 * @link https://php.net/manual/ja/phar.getalias.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function getAlias(): string {}

		/**
		 * phar アーカイブのメタデータを返す
		 * <p>アーカイブのメタデータを取得します。メタデータは、PHP の任意の変数をシリアライズしたものです。</p>
		 * @return mixed <p>Phar アーカイブのメタデータとして保存されている、シリアライズ可能な任意の PHP 変数を返します。 メタデータが保存されていない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.getmetadata.php
		 * @see Phar::setMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * phar が変更されているかどうかを返す
		 * <p>このメソッドを使用すると、phar 内のファイルが 削除されたり変更されたりしているかどうかを判断できます。</p>
		 * @return bool <p>オープンした後でファイルが変更されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.getmodified.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getModified(): bool {}

		/**
		 * Get the real path to the Phar archive on disk
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/phar.getpath.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * Phar アーカイブの MD5/SHA1/SHA256/SHA512/OpenSSL シグネチャを返す
		 * <p>phar アーカイブの検証用シグネチャを、 十六進文字列で返します。</p>
		 * @return array <p>開いているアーカイブのシグネチャを配列で返します。 キー <i>hash</i> にはシグネチャ自体を、そしてキー <i>hash_type</i> には <i>MD5</i>、<i>SHA-1</i>、 <i>SHA-256</i>、<i>SHA-512</i> あるいは <i>OpenSSL</i> を格納します。 このシグネチャは phar の中身全体から計算したハッシュで、 アーカイブの整合性を検証する際に使用します。 INI 設定 phar.require_hash が true の場合は、すべての実行可能な phar が有効なシグネチャを持っている必要があります。</p>
		 * @link https://php.net/manual/ja/phar.getsignature.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getSignature(): array {}

		/**
		 * Phar アーカイブの PHP ローダーあるいは起動スタブを返す
		 * <p>Phar アーカイブには、ブートストラップローダー (あるいは <i>スタブ</i>) というものが含まれています。これは PHP で書かれており、 そのアーカイブを PHP から実行したときに最初に実行されます。 たとえば次のようにインクルードしたり、</p>
		 * @return string <p>現在の Phar アーカイブの起動用ローダー (スタブ) の内容を文字列で返します。</p>
		 * @link https://php.net/manual/ja/phar.getstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getStub(): string {}

		/**
		 * サポートする圧縮アルゴリズムの配列を返す
		 * @return array <p><i>Phar::GZ</i> あるいは <i>Phar::BZ2</i> を含む配列を返します。 これは、zlib 拡張モジュールと bz2 拡張モジュールが使用可能かどうかによって決まります。</p>
		 * @link https://php.net/manual/ja/phar.getsupportedcompression.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::compress(), Phar::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function getSupportedCompression(): array {}

		/**
		 * サポートするシグネチャ型の配列を返す
		 * <p>サポートするシグネチャ型の配列を返します。</p>
		 * @return array <p><i>MD5</i>、<i>SHA-1</i>、 <i>SHA-256</i>、<i>SHA-512</i> あるいは <i>OpenSSL</i> を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/phar.getsupportedsignatures.php
		 * @see Phar::getSignature(), Phar::setSignatureAlgorithm()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		final public static function getSupportedSignatures(): array {}

		/**
		 * Phar アーカイブのバージョン情報を返す
		 * <p>オープンした Phar アーカイブの API バージョンを返します。</p>
		 * @return string <p>オープンしたアーカイブの API バージョンを返します。 これは、読み込んだ phar 拡張モジュールが新しい phar を作成する際に使用する API バージョンとは異なります。各 Phar アーカイブは、 マニフェスト内に API バージョンをハードコードして保持しています。 詳細は Phar ファイルフォーマット のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/phar.getversion.php
		 * @see Phar::apiVersion()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getVersion(): string {}

		/**
		 * ファイルがグローバルなメタデータを持つかどうかを返す
		 * <p>ファイルがグローバルなメタデータを持っているかどうかを返します。</p>
		 * @return bool <p>メタデータが設定されている場合に <b><code>TRUE</code></b>、されていない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.hasmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * fopen、file_get_contents、opendir などの stat 関連の関数をすべて phar に横取りさせる
		 * <p><code>fopen()</code> や <code>readfile()</code>、 <code>file_get_contents()</code>、<code>opendir()</code> などの stat 関連の関数をすべて phar に横取りさせます。 phar アーカイブ内で相対パスを指定してこれらの関数がコールされると、 それが phar アーカイブ内のファイルへのアクセスに変更されます。 絶対パスの場合は、ファイルシステム上の外部ファイルを指すものとみなされます。</p><p>この関数を使用すると、ハードディスク上で動作するように作られている PHP アプリケーションを phar アプリケーションにまとめられるようになります。</p>
		 * @return void
		 * @link https://php.net/manual/ja/phar.interceptfilefuncs.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function interceptFileFuncs(): void {}

		/**
		 * Phar の書き込み操作がバッファリングされるか、あるいは直接ディスクに書き込まれるかを調べる
		 * <p>このメソッドを使用すると、その Phar が変更を即時にディスクに書き込むのか それとも <code>Phar::stopBuffering()</code> をコールしないと変更が保存されないのかがわかります。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return bool <p>書込み操作がバッファリングされる場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isbuffering.php
		 * @see Phar::startBuffering(), Phar::stopBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isBuffering(): bool {}

		/**
		 * phar アーカイブ全体が (.tar.gz/tar.bz などで) 圧縮されている場合に Phar::GZ あるいは PHAR::BZ2 を返す
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar アーカイブ全体が (.tar.gz/tar.bz などで) 圧縮されている場合に Phar::GZ あるいは PHAR::BZ2 を返します。 zip 形式の phar アーカイブはファイル単位で圧縮することができません。 そのため、zip 形式の phar アーカイブを調べたときはこのメソッドは常に <b><code>FALSE</code></b> を返します。</p>
		 * @return mixed <p><i>Phar::GZ</i>、<i>Phar::BZ2</i> あるいは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isCompressed() {}

		/**
		 * phar アーカイブが、パラメータで指定した tar/phar/zip のいずれかの形式である場合に true を返す
		 * @param int $format <p><i>Phar::PHAR</i>、<i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> で、アーカイブの形式を指定します。</p>
		 * @return bool <p>phar アーカイブのファイル形式がパラメータで指定したものと一致する場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isfileformat.php
		 * @see Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isFileFormat(int $format): bool {}

		/**
		 * 指定したファイル名が正しい形式の phar ファイルかどうかを返す
		 * <p>指定したファイル名のファイルが、phar 拡張モジュールで利用できる 正しい形式の phar ファイルであるかどうかを返します。 これは、phar アーカイブを実際に開く前にそのファイルを確認する際に使用します。 これで、 無効なファイルを指定したときに当然発生するであろう例外の処理を省略することができます。</p>
		 * @param string $filename <p>まだ作成されていない phar アーカイブの名前あるいはフルパス。</p>
		 * @param bool $executable <p>このパラメータは、指定した名前のファイルを phar の実行可能アーカイブとして扱うかデータのみの非実行可能アーカイブとして扱うかを指定します。</p>
		 * @return bool <p>正しい形式のファイルである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isvalidpharfilename.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function isValidPharFilename(string $filename, bool $executable = TRUE): bool {}

		/**
		 * phar アーカイブが変更可能な場合に true を返す
		 * <p>このメソッドは、<i>phar.readonly</i> が <i>0</i> かつディスク上の実際の phar アーカイブが読み取り専用でない場合に <b><code>TRUE</code></b> を返します。</p>
		 * @return bool <p>phar アーカイブが変更可能な場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.iswritable.php
		 * @see Phar::canWrite(), PharData::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isWritable(): bool {}

		/**
		 * 任意の phar アーカイブを、エイリアスを指定して読み込む
		 * <p>これを使用して、外部の Phar アーカイブの内容を読み込むことができます。 phar へのエイリアスを指定することで、その後 phar を使用する場合に短い名前を使用できるので便利です。 また、データのみが含まれており、実行したり インクルードしたりする必要のない PHP スクリプトからなる Phar アーカイブを読み込む際にも便利です。</p>
		 * @param string $filename <p>オープンする phar アーカイブへの完全パスあるいは相対パス。</p>
		 * @param string $alias <p>この phar アーカイブをさす際に使用するエイリアス。 多くの場合は phar アーカイブ内で明示的なエイリアスを指定しており、 このような場合に新しいエイリアスを指定すると、 PharException がスローされます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.loadphar.php
		 * @see Phar::mapPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function loadPhar(string $filename, string $alias = NULL): bool {}

		/**
		 * 現在実行されている (phar 形式の) ファイルを読み込み、その内容を登録する
		 * <p>この静的メソッドは、直接実行されたときや 他のスクリプトからインクルードされたときに Phar アーカイブのローダスタブ内で使用され、 phar を初期化します。</p>
		 * @param string $alias <p>このアーカイブを参照する際にフルパスのかわりに使用する、 <i>phar://</i> 形式の URL。</p>
		 * @param int $dataoffset <p>未使用。PEAR の PHP_Archive との互換性のために用意しています。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.mapphar.php
		 * @see Phar::loadPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function mapPhar(string $alias = NULL, int $dataoffset = 0): bool {}

		/**
		 * 外部のパスあるいはファイルを phar アーカイブ内に仮想的にマウントする
		 * <p>Unix のファイルシステムで外部のデバイスをディレクトリツリー上にマウントできるのと同様に、 <b>Phar::mount()</b> を使用すると 外部のファイルやディレクトリをあたかもアーカイブ内にあるかのように参照することができるようになります。 これを使用すると、外部の設定ファイルをアーカイブ内にあるかのように扱うなどの高度な抽象化が可能となります。</p>
		 * @param string $pharpath <p>マウントする場所として使用する phar アーカイブ内のパス。 これは phar アーカイブ内の相対パスでなければならず、また、 既に存在するパスを指定することはできません。</p>
		 * @param string $externalpath <p>phar アーカイブ内にマウントしたい外部ファイルあるいはディレクトリのパスあるいは URL。</p>
		 * @return void <p>返り値はありません。失敗した場合は PharException をスローします。</p>
		 * @link https://php.net/manual/ja/phar.mount.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mount(string $pharpath, string $externalpath): void {}

		/**
		 * 最大 4 つまでの $_SERVER 変数を実行時に変更させる
		 * <p><b>Phar::mungServer()</b> は、 phar アーカイブのスタブ内でのみ使用します。</p><p>最大 4 つまでの $_SERVER 変数を指定し、 実行時に変更させます。phar の実行時に変更できる変数は <i>REQUEST_URI</i>、<i>PHP_SELF</i>、 <i>SCRIPT_NAME</i> そして <i>SCRIPT_FILENAME</i> です。</p><p>このメソッド自身は何も行いません。これが効力を発揮するのは <code>Phar::webPhar()</code> と組み合わせた場合で PHP ファイルがリクエストされた場合のみです。 <i>PATH_INFO</i> と <i>PATH_TRANSLATED</i> は常に変更されていることに注意しましょう。</p><p>変更前の元の値は、SERVER 配列の中で <i>PHAR_</i> をつけた名前で保持されます。たとえば <i>SCRIPT_NAME</i> の場合は 変更前の値は <i>PHAR_SCRIPT_NAME</i> となります。</p>
		 * @param array $munglist <p><i>REQUEST_URI</i>、<i>PHP_SELF</i>、 <i>SCRIPT_NAME</i> および <i>SCRIPT_FILENAME</i> を含む配列。その他の値を指定した場合は例外が発生します。また <b>Phar::mungServer()</b> は大文字小文字を区別します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.mungserver.php
		 * @see Phar::webPhar(), Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mungServer(array $munglist): void {}

		/**
		 * ファイルが phar 内に存在するかどうかを調べる
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。</p><p>offsetExists() は、<code>isset()</code> がコールされる際にはいつもコールされます。</p>
		 * @param string $offset <p>Phar 内で探すファイル名 (相対パス)。</p>
		 * @return bool <p>ファイルが phar 内に存在する場合に <b><code>TRUE</code></b>、しない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.offsetexists.php
		 * @see Phar::offsetGet(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetExists(string $offset): bool {}

		/**
		 * 指定したファイルの PharFileInfo オブジェクトを取得する
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 <b>Phar::offsetGet()</b> を使用して、Phar アーカイブからファイルを取得します。</p>
		 * @param string $offset <p>Phar 内で探すファイル名 (相対パス)。</p>
		 * @return int <p>PharFileInfo オブジェクトを返します。 これを使用して、ファイルの内容を順に処理したりファイルの情報を取得したりします。</p>
		 * @link https://php.net/manual/ja/phar.offsetget.php
		 * @see Phar::offsetExists(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetGet(string $offset): int {}

		/**
		 * 内部ファイルに、外部ファイルの内容を設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 offsetSet を使用して、Phar アーカイブの既存ファイルの変更や 新しいファイルの追加を行います。</p>
		 * @param string $offset <p>Phar 内で変更するファイル名 (相対パス)。</p>
		 * @param string $value <p>ファイルの内容。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.offsetset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetSet(string $offset, string $value): void {}

		/**
		 * ファイルを phar から削除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 offsetUnset を使用して、既存のファイルを削除します。また <code>unset()</code> が使用された場合にもコールされます。</p>
		 * @param string $offset <p>Phar 内で変更するファイル名 (相対パス)。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.offsetunset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetSet(), Phar::unlinkArchive(), Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetUnset(string $offset): bool {}

		/**
		 * 現在実行中の Phar アーカイブのフルパスあるいは完全な phar URL を返す
		 * <p>実行中の phar アーカイブのフルパスを返します。これはマジック定数 <i>__FILE__</i> のような使い方を想定したもので、 実行中の phar アーカイブの内部でのみ有効です。</p><p>アーカイブ内のスタブでは、<b>Phar::running()</b> は <i>""</i> を返します。現在実行中の phar にスタブ内からアクセスするには、 単純に <b><code>__FILE__</code></b> を使用します。</p>
		 * @param bool $retphar <p><b><code>FALSE</code></b> の場合は phar アーカイブのディスク上でのフルパスを返します。 <b><code>TRUE</code></b> の場合は完全な phar URL を返します。</p>
		 * @return string <p>ファイル名が正しい形式の場合にファイル名、それ以外の場合に空文字列を返します。</p>
		 * @link https://php.net/manual/ja/phar.running.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function running(bool $retphar = TRUE): string {}

		/**
		 * Phar アーカイブのエイリアスを設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>Phar アーカイブのエイリアスを設定し、そのアーカイブのエイリアスとして書き込みます。 エイリアスは phar アーカイブで内部的に使用するもので、 <i>phar</i> ストリームラッパーがアーカイブ内のファイルにアクセスする際に そのアーカイブのファイルシステム上での場所を気にせずにすむようになります。 それ以外の方法としては、Phar が内部的に <code>include</code> を横取りすることを利用したり <code>Phar::interceptFileFuncs()</code> を使って相対パスを利用したりといったものがあります。</p>
		 * @param string $alias <p>このアーカイブを指すときに使用する短い文字列。 <i>phar</i> ストリームラッパーがアクセスする際にこれを使用します。</p>
		 * @return bool
		 * @link https://php.net/manual/ja/phar.setalias.php
		 * @see Phar::__construct(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * Phar アーカイブの PHP ローダー (起動スタブ) をデフォルトのローダーに設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、 <code>Phar::createDefaultStub()</code> と <code>Phar::setStub()</code> の両方の機能を組み合わせた便利なメソッドです。</p>
		 * @param string $index <p>コマンドラインからアクセスした場合に実行する、 phar アーカイブ内の相対パス。</p>
		 * @param string $webindex <p>ウェブブラウザからアクセスした場合に実行する、 phar アーカイブ内の相対パス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.setdefaultstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setDefaultStub(string $index = NULL, string $webindex = NULL): bool {}

		/**
		 * phar アーカイブのメタデータを設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p><b>Phar::setMetadata()</b> は、 phar アーカイブ全体に関する独自の情報を保存する場合に使用します。 ファイル固有のメタデータについては <code>PharFileInfo::setMetadata()</code> を使うようにしましょう。大きなメタデータを使用すると、 phar アーカイブの読み込み時のパフォーマンスが低下します。</p><p>メタデータの使用例として考えられるのは、 アーカイブの中で最初に実行するファイルはどれかを指定したり、 » PEAR の package.xml のようなマニフェストの場所を指定したりすることです。 しかし、phar アーカイブに関する有用なデータなら何を保存してもかまいません。</p>
		 * @param mixed $metadata <p>phar アーカイブについての情報を含む、PHP の変数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phardata.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * phar のシグネチャのアルゴリズムを設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar のシグネチャのアルゴリズムを設定します。 シグネチャのアルゴリズムは <i>Phar::MD5</i>、 <i>Phar::SHA1</i>、<i>Phar::SHA256</i>、 <i>Phar::SHA512</i> あるいは <i>Phar::PGP</i> のいずれかでなければなりません (pgp は現時点ではまだサポートされておらず、自動的に SHA-1 に読みかえられます)。</p>
		 * @param int $sigtype <p><i>Phar::MD5</i>、 <i>Phar::SHA1</i>、<i>Phar::SHA256</i>、 <i>Phar::SHA512</i> あるいは <i>Phar::PGP</i> のいずれか。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phardata.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		public function setSignatureAlgorithm(int $sigtype): void {}

		/**
		 * Phar アーカイブの PHP ローダ (あるいは起動スタブ) を設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドを使用して、新しい Phar アーカイブに PHP 起動ローダスタブを追加します。あるいは、既存の Phar アーカイブのローダスタブを置き換えます。</p><p>Phar アーカイブのローダスタブは、 このようにアーカイブを直接インクルードした際に使用されます。</p><p><i>phar</i> ストリームラッパーを使用して次のようにファイルをインクルードした際には、 ローダにはアクセスしません。</p>
		 * @param string $stub <p>文字列あるいはオープンしたストリームハンドル。 この phar アーカイブの実行スタブとして使用します。</p>
		 * @param int $len
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.setstub.php
		 * @see Phar::getStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Phar の書き込み操作のバッファリングを開始するが、ディスク上の Phar オブジェクトは変更しない
		 * <p>技術的には必須ではありませんが、<b>Phar::startBuffering()</b> メソッドを使用すると、大量のファイルを含む Phar アーカイブの作成や変更が非常に高速になります。 通常は、Phar アーカイブ内のファイルが作成あるいは変更されるたびに Phar アーカイブ全体を改めて作り直します。 これによって、アーカイブが常に最新の状態となります。</p><p>しかし、単に新しい Phar アーカイブを作りたいときや アーカイブ全体を一度に書き出したいときなどは、これは不要です。 同様に、いくつかの変更を行うときに、 すべての変更がうまくいったことを確認してから実際にディスクに書き込みたい ということもあるでしょう。 これは、ちょうどデータベースのトランザクションの概念と同じようなものです。 <b>Phar::startBuffering()</b>/<code>Phar::stopBuffering()</code> の両メソッドが、このような場合のために用意されています。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.startbuffering.php
		 * @see Phar::stopBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function startBuffering(): void {}

		/**
		 * Phar アーカイブへの書き込みリクエストのバッファリングを終了し、変更内容をディスクに書き込む
		 * <p><b>Phar::stopBuffering()</b> は、 <code>Phar::startBuffering()</code> メソッドと組み合わせて使用します。 <code>Phar::startBuffering()</code> メソッドを使用すると、 大量のファイルを含む Phar アーカイブの作成や変更が非常に高速になります。 通常は、Phar アーカイブ内のファイルが作成あるいは変更されるたびに Phar アーカイブ全体を改めて作り直します。 これによって、アーカイブが常に最新の状態となります。</p><p>しかし、単に新しい Phar アーカイブを作りたいときや アーカイブ全体を一度に書き出したいときなどは、これは不要です。 同様に、いくつかの変更を行うときに、 すべての変更がうまくいったことを確認してから実際にディスクに書き込みたい ということもあるでしょう。 これは、ちょうどデータベースのトランザクションの概念と同じようなものです。 <code>Phar::startBuffering()</code>/<b>Phar::stopBuffering()</b> の両メソッドが、このような場合のために用意されています。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.stopbuffering.php
		 * @see Phar::startBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function stopBuffering(): void {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを展開する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、Phar アーカイブ内のすべてのファイルを展開します。 gzip で圧縮されているファイルが存在する場合は、それを展開するために zlib 拡張モジュールが有効でなければなりません。 また、bzip2 で圧縮されているファイルが存在する場合は、それを展開するために bzip2 拡張モジュールが有効でなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.uncompressallfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression()
		 * @since PECL phar < 2.0.0
		 */
		public function uncompressAllFiles(): bool {}

		/**
		 * phar アーカイブをディスクとメモリから完全に削除する
		 * <p>phar アーカイブをディスクとメモリから削除します。</p>
		 * @param string $archive <p>ディスク上の phar アーカイブへのパス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.unlinkarchive.php
		 * @see Phar::delete(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function unlinkArchive(string $archive): bool {}

		/**
		 * ウェブベースの phar で使用するフロントコントローラ
		 * <p><code>Phar::mapPhar()</code> は、ウェブベースの phar で使用します。 このメソッドは、 $_SERVER['REQUEST_URI'] をパースして ウェブサーバーからのリクエストを phar アーカイブ内のファイルに転送します。 要は、このメソッド自体がウェブサーバーをシミュレートするということです。 正しいファイルにリクエストを転送し、正しいヘッダを出力し、 必要に応じて PHP ファイルをパースします。 この強力なメソッドがあることで、 既存の PHP アプリケーションを phar アーカイブ化するのが容易になります。 <code>Phar::mungServer()</code> や <code>Phar::interceptFileFuncs()</code> と組み合わせて使用すると、任意のウェブアプリケーションをそのまま phar アーカイブ化することができます。</p><p><b>Phar::webPhar()</b> をコールするのは、 phar アーカイブのスタブ内からのみとしましょう (スタブって何&#63; という方は ここ をごらんください)。</p>
		 * @param string $alias <p><i>phar://</i> URL でこのアーカイブを指す際に、 フルパスの代わりに使用するエイリアス。</p>
		 * @param string $index <p>phar の中でディレクトリインデックスとなるファイルの場所。</p>
		 * @param string $f404 <p>ファイルが見つからないときに実行するスクリプトの場所。 このスクリプトは HTTP 404 ヘッダを返さなければなりません。</p>
		 * @param array $mimetypes <p>ファイルの拡張子と MIME タイプを関連付けた配列。 デフォルトのマッピングで十分な場合は、空の配列を渡します。 デフォルトで、これらの関連が定義されています。</p> <code> &lt;&#63;php<br>$mimes = array(<br>    'phps' =&gt; Phar::PHPS, // highlight_file() に渡します<br>    'c' =&gt; 'text/plain',<br>    'cc' =&gt; 'text/plain',<br>    'cpp' =&gt; 'text/plain',<br>    'c++' =&gt; 'text/plain',<br>    'dtd' =&gt; 'text/plain',<br>    'h' =&gt; 'text/plain',<br>    'log' =&gt; 'text/plain',<br>    'rng' =&gt; 'text/plain',<br>    'txt' =&gt; 'text/plain',<br>    'xsd' =&gt; 'text/plain',<br>    'php' =&gt; Phar::PHP, // PHP としてパースします<br>    'inc' =&gt; Phar::PHP, // PHP としてパースします<br>    'avi' =&gt; 'video/avi',<br>    'bmp' =&gt; 'image/bmp',<br>    'css' =&gt; 'text/css',<br>    'gif' =&gt; 'image/gif',<br>    'htm' =&gt; 'text/html',<br>    'html' =&gt; 'text/html',<br>    'htmls' =&gt; 'text/html',<br>    'ico' =&gt; 'image/x-ico',<br>    'jpe' =&gt; 'image/jpeg',<br>    'jpg' =&gt; 'image/jpeg',<br>    'jpeg' =&gt; 'image/jpeg',<br>    'js' =&gt; 'application/x-javascript',<br>    'midi' =&gt; 'audio/midi',<br>    'mid' =&gt; 'audio/midi',<br>    'mod' =&gt; 'audio/mod',<br>    'mov' =&gt; 'movie/quicktime',<br>    'mp3' =&gt; 'audio/mp3',<br>    'mpg' =&gt; 'video/mpeg',<br>    'mpeg' =&gt; 'video/mpeg',<br>    'pdf' =&gt; 'application/pdf',<br>    'png' =&gt; 'image/png',<br>    'swf' =&gt; 'application/shockwave-flash',<br>    'tif' =&gt; 'image/tiff',<br>    'tiff' =&gt; 'image/tiff',<br>    'wav' =&gt; 'audio/wav',<br>    'xbm' =&gt; 'image/xbm',<br>    'xml' =&gt; 'text/xml',<br>);<br>&#63;&gt;  </code>
		 * @param callable $rewrites <p>書き換え関数は、唯一のパラメータとして文字列を受け取り、<code>string</code> あるいは <b><code>FALSE</code></b> を返さないといけません。</p> <p>fast-cgi あるいは cgi を使っている場合、この関数に渡されるパラメータは $_SERVER['PATH_INFO'] の値になります。 それ以外の場合、この関数に渡されるパラメータは $_SERVER['REQUEST_URI'] の値になります。</p> <p>文字列を返した場合は、内部的なファイルパスとして扱います。<b><code>FALSE</code></b> を返した場合は、 webPhar() が HTTP 403 を送信します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.webphar.php
		 * @see Phar::mungServer(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function webPhar(string $alias = NULL, string $index = "index.php", string $f404 = NULL, array $mimetypes = NULL, callable $rewrites = NULL): void {}
	}

	/**
	 * <p>PharData クラスは、実行可能形式でない tar アーカイブや zip アーカイブへのアクセスや作成のための高レベルインターフェイスを提供します。 これらのアーカイブにはスタブが含まれておらず、 phar 拡張モジュールから実行することはできません。 そのため、PharData クラスによる通常の zip および tar ファイルの作成や 操作は php.ini の <i>phar.readonly</i> が <i>1</i> であっても可能です。</p>
	 * @link https://php.net/manual/ja/class.phardata.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
	 */
	class PharData extends \Phar {

		/**
		 * 実行可能でない tar あるいは zip アーカイブオブジェクトを作成する
		 * @param string $fname <p>既存の tar/zip アーカイブあるいは作成したいアーカイブへのパス。</p>
		 * @param int $flags <p>親クラス Phar の RecursiveDirectoryIterator に渡すフラグ。</p>
		 * @param string $alias <p>この Phar アーカイブをストリーム機能からコールするときに使うエイリアス。</p>
		 * @param int $format <p>Phar クラスの ファイルフォーマット定数 のいずれか。</p>
		 * @return self
		 * @link https://php.net/manual/ja/phardata.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function __construct(string $fname, int $flags = NULL, string $alias = NULL, int $format = Phar::TAR) {}

		/**
		 * 空のディレクトリを tar/zip アーカイブに追加する
		 * <p>このメソッドを使用すると、空のディレクトリが <i>dirname</i> に作成されます。このメソッドは <code>ZipArchive::addEmptyDir()</code> と同じようなものです。</p>
		 * @param string $dirname <p>phar アーカイブ内に作成する空のディレクトリの名前。</p>
		 * @return bool <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phardata.addemptydir.php
		 * @see Phar::addEmptyDir(), PharData::addFile(), PharData::addFromString()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addEmptyDir(string $dirname): bool {}

		/**
		 * ファイルシステム上のファイルを phar アーカイブに追加する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドを使用すると、任意のファイルあるいは URL を phar アーカイブに追加することができます。 オプションの 2 番目のパラメータ <i>localname</i> を指定すると、 ファイルはその名前でアーカイブ内に格納されます。指定しなかった場合は、 <i>file</i> パラメータをアーカイブ内のパスとして使用します。 URL を使用する場合は、localname を指定しないと例外がスローされます。 このメソッドは <code>ZipArchive::addFile()</code> と同じようなものです。</p>
		 * @param string $file <p>phar アーカイブに追加したいディスク上のファイルへのフルパスあるいは相対パス。</p>
		 * @param string $localname <p>ファイルをアーカイブ内に格納するときのパス。</p>
		 * @return void <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phar.addfile.php
		 * @see Phar::offsetSet(), PharData::addFile(), Phar::addFromString(), Phar::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addFile(string $file, string $localname = NULL): void {}

		/**
		 * ファイルシステム上のファイルを tar/zip アーカイブに追加する
		 * <p>このメソッドを使用すると、任意の文字列を tar/zip アーカイブに追加することができます。 アーカイブ内のファイル名は <i>localname</i> で指定したものとなります。 このメソッドは <code>ZipArchive::addFromString()</code> と同じようなものです。</p>
		 * @param string $localname <p>ファイルをアーカイブ内に格納するときのパス。</p>
		 * @param string $contents <p>ファイルに保存する内容。</p>
		 * @return bool <p>返り値はありません。失敗時には例外をスローします。</p>
		 * @link https://php.net/manual/ja/phardata.addfromstring.php
		 * @see PharData::offsetSet(), Phar::addFromString(), PharData::addFile(), PharData::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addFromString(string $localname, string $contents): bool {}

		/**
		 * API のバージョンを返す
		 * <p>phar ファイルフォーマットの API バージョンを返します。 phar を作成する際にこのバージョンが使用されます。 Phar 拡張モジュールが読み込みをサポートしているのは、 バージョン 1.0.0 以降の API です。 SHA-256 や SHA-512 を使用するには API バージョン 1.1.0 以降が、 そして空のディレクトリを格納するには API バージョン 1.1.1 以降が必要です。</p>
		 * @return string <p>API のバージョンを、<i>"1.0.0"</i> のような文字列で返します。</p>
		 * @link https://php.net/manual/ja/phar.apiversion.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function apiVersion(): string {}

		/**
		 * ディレクトリ内のファイルから phar を作成する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>ディレクトリの中身をもとに phar アーカイブを作成します。 オプションの 2 番目のパラメータで正規表現 (pcre) を指定すると、特定のファイルを除外することができます。 正規表現にマッチするすべてのファイルがアーカイブに含められ、 それ以外のファイルは除外されます。より詳細に制御するには <code>Phar::buildFromIterator()</code> を使用します。</p>
		 * @param string $base_dir <p>アーカイブに追加するすべてのファイルを含むディレクトリへの フルパスあるいは相対パス。</p>
		 * @param string $regex <p>オプションで指定する pcre 正規表現。 これを使用してファイル一覧をフィルタリングします。 正規表現にマッチするファイルパスのみがアーカイブに追加されます。</p>
		 * @return array <p><b>Phar::buildFromDirectory()</b> は、連想配列を返します。これは、 ファイルの内部パスをファイルシステム上のフルパスを対応させたものです。</p>
		 * @link https://php.net/manual/ja/phar.buildfromdirectory.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $base_dir, string $regex = NULL): array {}

		/**
		 * イテレータから tar あるいは zip アーカイブを作成する
		 * <p>tar あるいは zip アーカイブをイテレータから作成します。 サポートするイテレータは二種類で、 tar/zip 内のファイル名とディスク上の実際のファイル名を対応させたものか、あるいは DirectoryIterator のように SplFileInfo オブジェクトを返すものです。 SplFileInfo オブジェクトを返すイテレータの場合は、2 番目のパラメータが必要となります。</p>
		 * @param \Iterator $iter <p>phar ファイルと実際の場所の関連を返すイテレータ、 あるいは SplFileInfo オブジェクトを返すイテレータ。</p>
		 * @param string $base_directory <p>SplFileInfo オブジェクトを返すイテレータを指定した際、 tar/zip アーカイブへの追加時にフルパスから取り除く部分。</p>
		 * @return array <p><b>PharData::buildFromIterator()</b> は連想配列を返します。 これは、ファイルの内部パスとファイルシステム上のフルパスを対応させたものです。</p>
		 * @link https://php.net/manual/ja/phardata.buildfromiterator.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Iterator $iter, string $base_directory = NULL): array {}

		/**
		 * phar 拡張モジュールが zlib あるいは bzip2 による圧縮をサポートしているかどうかを返す
		 * <p>これは、圧縮されたファイルを含む phar を読み込む前に、 圧縮が可能かどうかを調べるために使用します。</p>
		 * @param int $type <p><i>Phar::GZ</i> あるいは <i>Phar::BZ2</i> のいずれかを指定し、指定した圧縮アルゴリズムでの圧縮が可能かどうかを調べます。</p>
		 * @return bool <p>圧縮/展開 が可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.cancompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canCompress(int $type = 0): bool {}

		/**
		 * phar 拡張モジュールが phar の書き込みや作成をサポートしているかどうかを返す
		 * <p>この静的メソッドは、書き込みアクセスが php.ini の phar.readonly で無効にされているかどうかを調べます。</p>
		 * @return bool <p>書き込みが可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.canwrite.php
		 * @see Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canWrite(): bool {}

		/**
		 * tar/zip アーカイブ全体を Gzip あるいは Bzip2 で圧縮する
		 * <p>tar 形式のアーカイブの場合は、 このメソッドはアーカイブ全体を gzip あるいは bzip2 で圧縮します。 できあがったファイルは gunzip/bunzip コマンドで処理することもできますし、 Phar 拡張モジュールで直接透過的に使用することもできます。</p><p>zip 形式のアーカイブの場合は、このメソッドは失敗して例外が発生します。 gzip で圧縮するためには zlib 拡張モジュールが、そして bzip2 で圧縮するためには bzip2 拡張モジュールが有効になっていなければなりません。</p><p>さらに、このメソッドは自動的にアーカイブの名前を変更し、 <i>.gz</i> あるいは <i>.bz2</i> を追加します。<i>Phar::NONE</i> を渡して圧縮を解除した場合は拡張子も削除します。 もうひとつの方法として、ファイルの拡張子を 2 番目のパラメータで指定することもできます。</p>
		 * @param int $compression <p>圧縮を行う場合には <i>Phar::GZ</i> あるいは <i>Phar::BZ2</i>、圧縮を解除する場合には <i>Phar::NONE</i> を指定します。</p>
		 * @param string $extension <p>デフォルトでは、tar を圧縮する際の拡張子は <i>.tar.gz</i> あるいは <i>.tar.bz2</i>、伸長する際の拡張子は <i>.tar</i> となります。</p>
		 * @return object <p>PharData オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/phardata.compress.php
		 * @see Phar::compress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, string $extension = NULL): object {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを Bzip2 で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、Phar アーカイブ内のすべてのファイルを bzip2 で圧縮します。この機能を使用するには bzip2 拡張モジュールが有効になっていなければなりません。 また、すでに gzip で圧縮されているファイルを処理するためには、 まず gzip を伸張してから bzip2 で再圧縮するため、 zlib 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.compressallfilesbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesBZIP2(): bool {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを Gzip で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式の phar アーカイブの場合は、このメソッドはアーカイブ全体を gzip で圧縮します。 できあがったファイルは gunzip コマンドで処理することもできますし、 Phar 拡張モジュールで直接透過的に使用することもできます。</p><p>zip 形式あるいは phar 形式の phar アーカイブの場合は、このメソッドは Phar アーカイブ内のすべてのファイルを gzip で圧縮します。 この機能を使用するには zlib 拡張モジュールが有効になっていなければなりません。 また、すでに bzip2 で圧縮されているファイルを処理するためには、 まず bzip2 を伸張してから gzip で再圧縮するため、 bzip2 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.compressallfilesgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesGZ(): bool {}

		/**
		 * 現在の tar/zip アーカイブ内のすべてのファイルを圧縮する
		 * <p>tar 形式の phar アーカイブでは、このメソッドは BadMethodCallException をスローします。 というのも、tar ファイルフォーマットではアーカイブ内の個別のファイルの圧縮をサポートしていないからです。 <code>PharData::compress()</code> を使用して、tar 形式の phar アーカイブ全体を圧縮します。</p><p>zip 形式のアーカイブでは、 このメソッドは Phar アーカイブ内のすべてのファイルを指定した方式で圧縮します。 この機能を使用するには、zlib 拡張モジュールあるいは bzip2 拡張モジュールが有効になっている必要があります。さらに、 もし既に bzip2/zlib で圧縮されているファイルがある場合は、 いったんその圧縮を解除するために対応する拡張モジュールが必要となります。</p>
		 * @param int $compression <p>圧縮を行う場合は <i>Phar::GZ</i> あるいは <i>Phar::BZ2</i>、圧縮を解除するためには <i>Phar::NONE</i> のいずれかを指定しなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::decompressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): bool {}

		/**
		 * phar アーカイブを実行可能でない tar あるいは zip ファイルに変換する
		 * <p>このメソッドは、実行可能でない tar あるいは zip アーカイブを別の実行可能でない形式に変換します。</p><p>何も変更しなかった場合、このメソッドは BadMethodCallException をスローします。 このメソッドは、tar アーカイブを zip 形式に変換するか あるいはその逆の変換をする場合に使用するものです。 このメソッドで単に tar アーカイブの圧縮方法だけを変更することもできますが、 その場合は <code>PharData::compress()</code> を使うことをおすすめします。</p><p>成功した場合は、このメソッドはディスク上に新しいアーカイブを作成して PharData オブジェクトを返します。 古いアーカイブは削除されずディスク上に残るので、 処理を終えたら手動で削除する必要があります。</p>
		 * @param int $format <p>これは <i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> のいずれかとなります。 <b><code>NULL</code></b> を指定すると、現在のファイル形式をそのまま保持します。</p>
		 * @param int $compression <p>アーカイブ全体の圧縮を行わない場合は <i>Phar::NONE</i>、 zlib による圧縮の場合は <i>Phar::GZ</i>、そして bzip による圧縮の場合は <i>Phar::BZ2</i> のいずれかを指定します。</p>
		 * @param string $extension <p>このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。 実行可能でない tar や zip アーカイブのファイル名としては <i>.phar</i> は使用できないことに注意しましょう。</p> <p>tar 形式の phar アーカイブの場合、デフォルトの拡張子は圧縮形式によって <i>.tar</i>、<i>.tar.gz</i>、 <i>.tar.bz2</i> のいずれかとなります。 zip 形式のアーカイブの場合、デフォルトの拡張子は <i>.zip</i> となります。</p>
		 * @return PharData <p>このメソッドは、成功した場合に PharData オブジェクトを返します。失敗した場合は例外をスローします。</p>
		 * @link https://php.net/manual/ja/phardata.converttodata.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToExecutable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToData(int $format = NULL, int $compression = NULL, string $extension = NULL): \PharData {}

		/**
		 * 実行可能でない tar/zip アーカイブを実行可能な phar アーカイブ形式に変換する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、実行可能でない tar あるいは zip アーカイブを実行可能な phar 形式に変換します。実行可能なファイル形式 3 種類 (phar, tar あるいは zip) のどれでも使用することができ、アーカイブ全体の圧縮も行うことができます。</p><p>何も変更しなかった場合、このメソッドは BadMethodCallException をスローします。</p><p>成功した場合は、このメソッドはディスク上に新しいアーカイブを作成して Phar オブジェクトを返します。 古いアーカイブは削除されずディスク上に残るので、 処理を終えたら手動で削除する必要があります。</p>
		 * @param int $format <p>これは <i>Phar::PHAR</i>、<i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> のいずれかとなります。 <b><code>NULL</code></b> を指定すると、現在のファイル形式をそのまま保持します。</p>
		 * @param int $compression <p>アーカイブ全体の圧縮を行わない場合は <i>Phar::NONE</i>、 zlib による圧縮の場合は <i>Phar::GZ</i>、そして bzip による圧縮の場合は <i>Phar::BZ2</i> のいずれかを指定します。</p>
		 * @param string $extension <p>このパラメータは、変換後のアーカイブのデフォルトのファイル拡張子を変更します。 実行可能でない tar や zip アーカイブのファイル名としては <i>.phar</i> は使用できないことに注意しましょう。</p> <p>phar 形式のアーカイブに変換する場合、デフォルトの拡張子は圧縮形式によって <i>.phar</i>、<i>.phar.gz</i> あるいは <i>.phar.bz2</i> のいずれかとなります。tar 形式のアーカイブの場合、デフォルトの拡張子は <i>.phar.tar</i>、<i>.phar.tar.gz</i> および <i>.phar.tar.bz2</i> です。zip 形式のアーカイブの場合、 デフォルトの拡張子は <i>.phar.zip</i> となります。</p>
		 * @return Phar <p>このメソッドは、成功した場合に Phar オブジェクトを返します。失敗した場合は例外をスローします。</p>
		 * @link https://php.net/manual/ja/phardata.converttoexecutable.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(int $format = NULL, int $compression = NULL, string $extension = NULL): \Phar {}

		/**
		 * phar アーカイブ内のファイルを、phar 内で別の新しいファイルとしてコピーする
		 * <p>phar アーカイブ内のファイルを、そのアーカイブ内で別の新しいファイルとしてコピーします。 これは、phar ストリームラッパーでの <code>copy()</code> と同等の操作をオブジェクト指向で行うものです。</p>
		 * @param string $oldfile
		 * @param string $newfile
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。しかし、より安全を期すなら try/catch ブロック内で使用して例外がスローされないことを確認するといいでしょう。</p>
		 * @link https://php.net/manual/ja/phardata.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function copy(string $oldfile, string $newfile): bool {}

		/**
		 * Phar アーカイブ内のエントリ (ファイル) の数を返す
		 * @return int <p>この phar ファイルに含まれるファイルの数を返します。 存在しない場合は <i>0</i> (数字のゼロ) を返します。</p>
		 * @link https://php.net/manual/ja/phar.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function count(): int {}

		/**
		 * phar ファイルフォーマット用のスタブを作成する
		 * <p>このメソッドは、phar ファイル形式のスタブを作成するためのもので、 tar 形式や zip 形式の phar アーカイブでは使用しません。</p><p>PHP でかかれた起動ローダー (スタブ) を含む Phar アーカイブを PHP から実行するには、次のようにそれをインクルードするか、</p><p>このメソッドは、phar アーカイブの起動時に実行するスタブ用のメソッドを作成します。 さらに、phar アーカイブをコマンドラインやウェブサーバーから実行する際には別のファイルを指定することもできます。 ローダースタブは <code>Phar::interceptFileFuncs()</code> もコールでき、PHP のアプリケーションからファイルシステムを簡単に扱えるようになります。 phar 拡張モジュールが存在しない場合は、 ローダースタブが phar アーカイブの内容を一時ディレクトリに展開し、 そのファイルを操作します。 シャットダウン関数が、この一時ファイル群を削除します。</p>
		 * @param string $indexfile
		 * @param string $webindexfile
		 * @return string <p>独自の起動ローダー (スタブ) を文字列で返します。 これを用いて作成した Phar アーカイブは、 Phar 拡張モジュールが有効になっていない環境でも実行することができます。</p>
		 * @link https://php.net/manual/ja/phar.createdefaultstub.php
		 * @see Phar::setStub(), Phar::getStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function createDefaultStub(string $indexfile = NULL, string $webindexfile = NULL): string {}

		/**
		 * Phar アーカイブ全体の圧縮を解除する
		 * <p>tar 形式のアーカイブの場合は、 このメソッドはアーカイブ全体の圧縮を解除します。</p><p>zip 形式のアーカイブの場合は、このメソッドは失敗して例外が発生します。 gzip で圧縮されたファイルの圧縮を解除するためには zlib 拡張モジュールが、そして bzip2 で圧縮されたファイルの圧縮を解除するためには bzip2 拡張モジュールが有効になっていなければなりません。</p><p>さらに、このメソッドは自動的にアーカイブの拡張子を変更し、 <i>.tar</i> をデフォルトで追加します。 もうひとつの方法として、ファイルの拡張子を <code>extension</code> パラメータで指定することもできます。</p>
		 * @param string $extension <p>圧縮を解除する場合、デフォルトのファイル拡張子は <i>.tar</i> です。 このパラメータを使用すると、別の拡張子を指定することができます。 実行可能なアーカイブのみが、ファイル名に <i>.phar</i> を含むことができることに注意しましょう。</p>
		 * @return object <p>PharData オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/phardata.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), PharData::compress(), Phar::getSupportedCompression(), PharData::compressFiles(), PharData::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(string $extension = NULL): object {}

		/**
		 * 現在の zip アーカイブ内のすべてのファイルの圧縮を解除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>tar 形式の phar アーカイブでは、このメソッドは BadMethodCallException をスローします。 というのも、tar ファイルフォーマットではアーカイブ内の個別のファイルの圧縮をサポートしていないからです。 <code>PharData::compress()</code> を使用して、tar 形式の phar アーカイブ全体を圧縮します。</p><p>zip 形式のアーカイブでは、 このメソッドはアーカイブ内のすべてのファイルの圧縮を解除します。 もし bzip2/zlib で圧縮されているファイルがある場合は、 この機能を使用するには、zlib 拡張モジュールあるいは bzip2 拡張モジュールが有効になっている必要があります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::compressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * zip アーカイブのグローバルメタデータを削除する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>zip アーカイブのグローバルメタデータを削除します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。しかし、より安全を期すなら 例外がスローされないことを確認するといいでしょう。</p>
		 * @link https://php.net/manual/ja/phardata.delmetadata.php
		 * @see Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delMetadata(): bool {}

		/**
		 * tar/zip アーカイブ内のファイルを削除する
		 * <p>アーカイブ内のファイルを削除します。 これは、ストリームラッパー上で <code>unlink()</code> をコールするのと同じ意味です。以下に例を示します。</p>
		 * @param string $entry <p>削除したいファイルの、アーカイブ内でのパス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 しかし、例外がスローされているかどうかを確認したうえで 例外がなければ成功とみなすほうがいいでしょう。</p>
		 * @link https://php.net/manual/ja/phardata.delete.php
		 * @see Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delete(string $entry): bool {}

		/**
		 * tar/zip アーカイブの内容をディレクトリに展開する
		 * <p>tar/zip アーカイブ内のすべてのファイルをディスクに展開します。 展開されたファイルやディレクトリは、アーカイブに保存されたときのパーミッションを維持しています。 オプションのパラメータを使用すると、どのファイルを展開するかを制御したり 既存のファイルを上書きするかどうかを指定したりすることができます。 2 番目のパラメータ <i>files</i> には、 展開したいファイルやディレクトリの名前、あるいはその配列を指定します。 デフォルトでは、このメソッドは既存のファイルを上書きしません。 3 番目のパラメータを true にすると既存のファイルを上書きさせることができます。 このメソッドは <code>ZipArchive::extractTo()</code> と同じようなものです。</p>
		 * @param string $pathto <p>指定した <i>files</i> の展開先のパス。</p>
		 * @param string|array $files <p>展開したいファイル名/ディレクトリ名、あるいはその配列。</p>
		 * @param bool $overwrite <p><b><code>TRUE</code></b> にすると既存のファイルを上書きします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 しかし、例外がスローされているかどうかを確認したうえで 例外がなければ成功とみなすほうがいいでしょう。</p>
		 * @link https://php.net/manual/ja/phardata.extractto.php
		 * @see Phar::extractTo()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function extractTo(string $pathto, $files = NULL, bool $overwrite = FALSE): bool {}

		/**
		 * Get the alias for Phar
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>Returns the alias or <b><code>NULL</code></b> if there's no alias.</p>
		 * @link https://php.net/manual/ja/phar.getalias.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function getAlias(): string {}

		/**
		 * phar アーカイブのメタデータを返す
		 * <p>アーカイブのメタデータを取得します。メタデータは、PHP の任意の変数をシリアライズしたものです。</p>
		 * @return mixed <p>Phar アーカイブのメタデータとして保存されている、シリアライズ可能な任意の PHP 変数を返します。 メタデータが保存されていない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.getmetadata.php
		 * @see Phar::setMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * phar が変更されているかどうかを返す
		 * <p>このメソッドを使用すると、phar 内のファイルが 削除されたり変更されたりしているかどうかを判断できます。</p>
		 * @return bool <p>オープンした後でファイルが変更されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.getmodified.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getModified(): bool {}

		/**
		 * Get the real path to the Phar archive on disk
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/phar.getpath.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * Phar アーカイブの MD5/SHA1/SHA256/SHA512/OpenSSL シグネチャを返す
		 * <p>phar アーカイブの検証用シグネチャを、 十六進文字列で返します。</p>
		 * @return array <p>開いているアーカイブのシグネチャを配列で返します。 キー <i>hash</i> にはシグネチャ自体を、そしてキー <i>hash_type</i> には <i>MD5</i>、<i>SHA-1</i>、 <i>SHA-256</i>、<i>SHA-512</i> あるいは <i>OpenSSL</i> を格納します。 このシグネチャは phar の中身全体から計算したハッシュで、 アーカイブの整合性を検証する際に使用します。 INI 設定 phar.require_hash が true の場合は、すべての実行可能な phar が有効なシグネチャを持っている必要があります。</p>
		 * @link https://php.net/manual/ja/phar.getsignature.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getSignature(): array {}

		/**
		 * Phar アーカイブの PHP ローダーあるいは起動スタブを返す
		 * <p>Phar アーカイブには、ブートストラップローダー (あるいは <i>スタブ</i>) というものが含まれています。これは PHP で書かれており、 そのアーカイブを PHP から実行したときに最初に実行されます。 たとえば次のようにインクルードしたり、</p>
		 * @return string <p>現在の Phar アーカイブの起動用ローダー (スタブ) の内容を文字列で返します。</p>
		 * @link https://php.net/manual/ja/phar.getstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getStub(): string {}

		/**
		 * サポートする圧縮アルゴリズムの配列を返す
		 * @return array <p><i>Phar::GZ</i> あるいは <i>Phar::BZ2</i> を含む配列を返します。 これは、zlib 拡張モジュールと bz2 拡張モジュールが使用可能かどうかによって決まります。</p>
		 * @link https://php.net/manual/ja/phar.getsupportedcompression.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::compress(), Phar::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function getSupportedCompression(): array {}

		/**
		 * サポートするシグネチャ型の配列を返す
		 * <p>サポートするシグネチャ型の配列を返します。</p>
		 * @return array <p><i>MD5</i>、<i>SHA-1</i>、 <i>SHA-256</i>、<i>SHA-512</i> あるいは <i>OpenSSL</i> を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/phar.getsupportedsignatures.php
		 * @see Phar::getSignature(), Phar::setSignatureAlgorithm()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		final public static function getSupportedSignatures(): array {}

		/**
		 * Phar アーカイブのバージョン情報を返す
		 * <p>オープンした Phar アーカイブの API バージョンを返します。</p>
		 * @return string <p>オープンしたアーカイブの API バージョンを返します。 これは、読み込んだ phar 拡張モジュールが新しい phar を作成する際に使用する API バージョンとは異なります。各 Phar アーカイブは、 マニフェスト内に API バージョンをハードコードして保持しています。 詳細は Phar ファイルフォーマット のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/phar.getversion.php
		 * @see Phar::apiVersion()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getVersion(): string {}

		/**
		 * ファイルがグローバルなメタデータを持つかどうかを返す
		 * <p>ファイルがグローバルなメタデータを持っているかどうかを返します。</p>
		 * @return bool <p>メタデータが設定されている場合に <b><code>TRUE</code></b>、されていない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.hasmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * fopen、file_get_contents、opendir などの stat 関連の関数をすべて phar に横取りさせる
		 * <p><code>fopen()</code> や <code>readfile()</code>、 <code>file_get_contents()</code>、<code>opendir()</code> などの stat 関連の関数をすべて phar に横取りさせます。 phar アーカイブ内で相対パスを指定してこれらの関数がコールされると、 それが phar アーカイブ内のファイルへのアクセスに変更されます。 絶対パスの場合は、ファイルシステム上の外部ファイルを指すものとみなされます。</p><p>この関数を使用すると、ハードディスク上で動作するように作られている PHP アプリケーションを phar アプリケーションにまとめられるようになります。</p>
		 * @return void
		 * @link https://php.net/manual/ja/phar.interceptfilefuncs.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function interceptFileFuncs(): void {}

		/**
		 * Phar の書き込み操作がバッファリングされるか、あるいは直接ディスクに書き込まれるかを調べる
		 * <p>このメソッドを使用すると、その Phar が変更を即時にディスクに書き込むのか それとも <code>Phar::stopBuffering()</code> をコールしないと変更が保存されないのかがわかります。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return bool <p>書込み操作がバッファリングされる場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isbuffering.php
		 * @see Phar::startBuffering(), Phar::stopBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isBuffering(): bool {}

		/**
		 * phar アーカイブ全体が (.tar.gz/tar.bz などで) 圧縮されている場合に Phar::GZ あるいは PHAR::BZ2 を返す
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar アーカイブ全体が (.tar.gz/tar.bz などで) 圧縮されている場合に Phar::GZ あるいは PHAR::BZ2 を返します。 zip 形式の phar アーカイブはファイル単位で圧縮することができません。 そのため、zip 形式の phar アーカイブを調べたときはこのメソッドは常に <b><code>FALSE</code></b> を返します。</p>
		 * @return mixed <p><i>Phar::GZ</i>、<i>Phar::BZ2</i> あるいは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isCompressed() {}

		/**
		 * phar アーカイブが、パラメータで指定した tar/phar/zip のいずれかの形式である場合に true を返す
		 * @param int $format <p><i>Phar::PHAR</i>、<i>Phar::TAR</i> あるいは <i>Phar::ZIP</i> で、アーカイブの形式を指定します。</p>
		 * @return bool <p>phar アーカイブのファイル形式がパラメータで指定したものと一致する場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isfileformat.php
		 * @see Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isFileFormat(int $format): bool {}

		/**
		 * 指定したファイル名が正しい形式の phar ファイルかどうかを返す
		 * <p>指定したファイル名のファイルが、phar 拡張モジュールで利用できる 正しい形式の phar ファイルであるかどうかを返します。 これは、phar アーカイブを実際に開く前にそのファイルを確認する際に使用します。 これで、 無効なファイルを指定したときに当然発生するであろう例外の処理を省略することができます。</p>
		 * @param string $filename <p>まだ作成されていない phar アーカイブの名前あるいはフルパス。</p>
		 * @param bool $executable <p>このパラメータは、指定した名前のファイルを phar の実行可能アーカイブとして扱うかデータのみの非実行可能アーカイブとして扱うかを指定します。</p>
		 * @return bool <p>正しい形式のファイルである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.isvalidpharfilename.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function isValidPharFilename(string $filename, bool $executable = TRUE): bool {}

		/**
		 * tar/zip アーカイブが変更可能な場合に true を返す
		 * <p>このメソッドは、ディスク上の tar/zip アーカイブが読み込み専用でない場合に <b><code>TRUE</code></b> を返します。<code>Phar::isWritable()</code> とは異なり、 データのみの tar/zip アーカイブは <i>phar.readonly</i> が <i>1</i> であっても変更可能です。</p>
		 * @return bool <p>tar/zip アーカイブが変更可能な場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.iswritable.php
		 * @see Phar::canWrite(), Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isWritable(): bool {}

		/**
		 * 任意の phar アーカイブを、エイリアスを指定して読み込む
		 * <p>これを使用して、外部の Phar アーカイブの内容を読み込むことができます。 phar へのエイリアスを指定することで、その後 phar を使用する場合に短い名前を使用できるので便利です。 また、データのみが含まれており、実行したり インクルードしたりする必要のない PHP スクリプトからなる Phar アーカイブを読み込む際にも便利です。</p>
		 * @param string $filename <p>オープンする phar アーカイブへの完全パスあるいは相対パス。</p>
		 * @param string $alias <p>この phar アーカイブをさす際に使用するエイリアス。 多くの場合は phar アーカイブ内で明示的なエイリアスを指定しており、 このような場合に新しいエイリアスを指定すると、 PharException がスローされます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.loadphar.php
		 * @see Phar::mapPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function loadPhar(string $filename, string $alias = NULL): bool {}

		/**
		 * 現在実行されている (phar 形式の) ファイルを読み込み、その内容を登録する
		 * <p>この静的メソッドは、直接実行されたときや 他のスクリプトからインクルードされたときに Phar アーカイブのローダスタブ内で使用され、 phar を初期化します。</p>
		 * @param string $alias <p>このアーカイブを参照する際にフルパスのかわりに使用する、 <i>phar://</i> 形式の URL。</p>
		 * @param int $dataoffset <p>未使用。PEAR の PHP_Archive との互換性のために用意しています。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.mapphar.php
		 * @see Phar::loadPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function mapPhar(string $alias = NULL, int $dataoffset = 0): bool {}

		/**
		 * 外部のパスあるいはファイルを phar アーカイブ内に仮想的にマウントする
		 * <p>Unix のファイルシステムで外部のデバイスをディレクトリツリー上にマウントできるのと同様に、 <b>Phar::mount()</b> を使用すると 外部のファイルやディレクトリをあたかもアーカイブ内にあるかのように参照することができるようになります。 これを使用すると、外部の設定ファイルをアーカイブ内にあるかのように扱うなどの高度な抽象化が可能となります。</p>
		 * @param string $pharpath <p>マウントする場所として使用する phar アーカイブ内のパス。 これは phar アーカイブ内の相対パスでなければならず、また、 既に存在するパスを指定することはできません。</p>
		 * @param string $externalpath <p>phar アーカイブ内にマウントしたい外部ファイルあるいはディレクトリのパスあるいは URL。</p>
		 * @return void <p>返り値はありません。失敗した場合は PharException をスローします。</p>
		 * @link https://php.net/manual/ja/phar.mount.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mount(string $pharpath, string $externalpath): void {}

		/**
		 * 最大 4 つまでの $_SERVER 変数を実行時に変更させる
		 * <p><b>Phar::mungServer()</b> は、 phar アーカイブのスタブ内でのみ使用します。</p><p>最大 4 つまでの $_SERVER 変数を指定し、 実行時に変更させます。phar の実行時に変更できる変数は <i>REQUEST_URI</i>、<i>PHP_SELF</i>、 <i>SCRIPT_NAME</i> そして <i>SCRIPT_FILENAME</i> です。</p><p>このメソッド自身は何も行いません。これが効力を発揮するのは <code>Phar::webPhar()</code> と組み合わせた場合で PHP ファイルがリクエストされた場合のみです。 <i>PATH_INFO</i> と <i>PATH_TRANSLATED</i> は常に変更されていることに注意しましょう。</p><p>変更前の元の値は、SERVER 配列の中で <i>PHAR_</i> をつけた名前で保持されます。たとえば <i>SCRIPT_NAME</i> の場合は 変更前の値は <i>PHAR_SCRIPT_NAME</i> となります。</p>
		 * @param array $munglist <p><i>REQUEST_URI</i>、<i>PHP_SELF</i>、 <i>SCRIPT_NAME</i> および <i>SCRIPT_FILENAME</i> を含む配列。その他の値を指定した場合は例外が発生します。また <b>Phar::mungServer()</b> は大文字小文字を区別します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.mungserver.php
		 * @see Phar::webPhar(), Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mungServer(array $munglist): void {}

		/**
		 * ファイルが phar 内に存在するかどうかを調べる
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。</p><p>offsetExists() は、<code>isset()</code> がコールされる際にはいつもコールされます。</p>
		 * @param string $offset <p>Phar 内で探すファイル名 (相対パス)。</p>
		 * @return bool <p>ファイルが phar 内に存在する場合に <b><code>TRUE</code></b>、しない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.offsetexists.php
		 * @see Phar::offsetGet(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetExists(string $offset): bool {}

		/**
		 * 指定したファイルの PharFileInfo オブジェクトを取得する
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 <b>Phar::offsetGet()</b> を使用して、Phar アーカイブからファイルを取得します。</p>
		 * @param string $offset <p>Phar 内で探すファイル名 (相対パス)。</p>
		 * @return int <p>PharFileInfo オブジェクトを返します。 これを使用して、ファイルの内容を順に処理したりファイルの情報を取得したりします。</p>
		 * @link https://php.net/manual/ja/phar.offsetget.php
		 * @see Phar::offsetExists(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetGet(string $offset): int {}

		/**
		 * tar/zip の内部のファイルに、外部ファイルあるいは文字列の内容を設定する
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、tar/zip アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 offsetSet を使用して、tar/zip アーカイブの既存ファイルの変更や 新しいファイルの追加を行います。</p>
		 * @param string $offset <p>tar あるいは zip アーカイブ内で変更するファイル名 (相対パス)。</p>
		 * @param string $value <p>ファイルの内容。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phardata.offsetset.php
		 * @see Phar::offsetSet()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function offsetSet(string $offset, string $value): void {}

		/**
		 * ファイルを tar/zip アーカイブから削除する
		 * <p>これは <code>ArrayAccess</code> インターフェイスを実装したものです。 これにより、Phar アーカイブの内容に対して配列形式の角括弧を使用したアクセスが可能となります。 offsetUnset を使用して、既存のファイルを削除します。また <code>unset()</code> が使用された場合にもコールされます。</p>
		 * @param string $offset <p>tar/zip アーカイブ内で変更するファイル名 (相対パス)。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.offsetunset.php
		 * @see Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function offsetUnset(string $offset): bool {}

		/**
		 * 現在実行中の Phar アーカイブのフルパスあるいは完全な phar URL を返す
		 * <p>実行中の phar アーカイブのフルパスを返します。これはマジック定数 <i>__FILE__</i> のような使い方を想定したもので、 実行中の phar アーカイブの内部でのみ有効です。</p><p>アーカイブ内のスタブでは、<b>Phar::running()</b> は <i>""</i> を返します。現在実行中の phar にスタブ内からアクセスするには、 単純に <b><code>__FILE__</code></b> を使用します。</p>
		 * @param bool $retphar <p><b><code>FALSE</code></b> の場合は phar アーカイブのディスク上でのフルパスを返します。 <b><code>TRUE</code></b> の場合は完全な phar URL を返します。</p>
		 * @return string <p>ファイル名が正しい形式の場合にファイル名、それ以外の場合に空文字列を返します。</p>
		 * @link https://php.net/manual/ja/phar.running.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function running(bool $retphar = TRUE): string {}

		/**
		 * ダミー関数 (Phar::setAlias は PharData では使用不能)
		 * <p>実行可能でない tar/zip アーカイブはエイリアスを持つことができないので、 このメソッドは単に例外をスローします。</p>
		 * @param string $alias <p>このアーカイブを指すときに使用する短い文字列。 <i>phar</i> ストリームラッパーがアクセスする際にこれを使用します。 このパラメータは無視されます。</p>
		 * @return bool
		 * @link https://php.net/manual/ja/phardata.setalias.php
		 * @see Phar::setAlias()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * ダミー関数 (Phar::setDefaultStub は PharData では無効)
		 * <p>実行可能でない tar/zip アーカイブはスタブを持つことができません。 そのため、このメソッドは単に例外をスローするだけです。</p>
		 * @param string $index <p>コマンドラインからアクセスした場合に実行する、 phar アーカイブ内の相対パス。</p>
		 * @param string $webindex <p>ウェブブラウザからアクセスした場合に実行する、 phar アーカイブ内の相対パス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.setdefaultstub.php
		 * @see Phar::setDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setDefaultStub(string $index = NULL, string $webindex = NULL): bool {}

		/**
		 * phar アーカイブのメタデータを設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p><b>Phar::setMetadata()</b> は、 phar アーカイブ全体に関する独自の情報を保存する場合に使用します。 ファイル固有のメタデータについては <code>PharFileInfo::setMetadata()</code> を使うようにしましょう。大きなメタデータを使用すると、 phar アーカイブの読み込み時のパフォーマンスが低下します。</p><p>メタデータの使用例として考えられるのは、 アーカイブの中で最初に実行するファイルはどれかを指定したり、 » PEAR の package.xml のようなマニフェストの場所を指定したりすることです。 しかし、phar アーカイブに関する有用なデータなら何を保存してもかまいません。</p>
		 * @param mixed $metadata <p>phar アーカイブについての情報を含む、PHP の変数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phardata.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * phar のシグネチャのアルゴリズムを設定する
		 * <p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>phar のシグネチャのアルゴリズムを設定します。 シグネチャのアルゴリズムは <i>Phar::MD5</i>、 <i>Phar::SHA1</i>、<i>Phar::SHA256</i>、 <i>Phar::SHA512</i> あるいは <i>Phar::PGP</i> のいずれかでなければなりません (pgp は現時点ではまだサポートされておらず、自動的に SHA-1 に読みかえられます)。</p>
		 * @param int $sigtype <p><i>Phar::MD5</i>、 <i>Phar::SHA1</i>、<i>Phar::SHA256</i>、 <i>Phar::SHA512</i> あるいは <i>Phar::PGP</i> のいずれか。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phardata.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		public function setSignatureAlgorithm(int $sigtype): void {}

		/**
		 * ダミー関数 (Phar::setStub は PharData では使用不能)
		 * <p>実行可能でない tar/zip アーカイブはスタブを持つことができないので、 このメソッドは単に例外をスローします。</p>
		 * @param string $stub <p>文字列あるいはオープンしたストリームハンドル。 この phar アーカイブの実行スタブとして使用します。 このパラメータは無視されます。</p>
		 * @param int $len
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phardata.setstub.php
		 * @see Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Phar の書き込み操作のバッファリングを開始するが、ディスク上の Phar オブジェクトは変更しない
		 * <p>技術的には必須ではありませんが、<b>Phar::startBuffering()</b> メソッドを使用すると、大量のファイルを含む Phar アーカイブの作成や変更が非常に高速になります。 通常は、Phar アーカイブ内のファイルが作成あるいは変更されるたびに Phar アーカイブ全体を改めて作り直します。 これによって、アーカイブが常に最新の状態となります。</p><p>しかし、単に新しい Phar アーカイブを作りたいときや アーカイブ全体を一度に書き出したいときなどは、これは不要です。 同様に、いくつかの変更を行うときに、 すべての変更がうまくいったことを確認してから実際にディスクに書き込みたい ということもあるでしょう。 これは、ちょうどデータベースのトランザクションの概念と同じようなものです。 <b>Phar::startBuffering()</b>/<code>Phar::stopBuffering()</code> の両メソッドが、このような場合のために用意されています。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.startbuffering.php
		 * @see Phar::stopBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function startBuffering(): void {}

		/**
		 * Phar アーカイブへの書き込みリクエストのバッファリングを終了し、変更内容をディスクに書き込む
		 * <p><b>Phar::stopBuffering()</b> は、 <code>Phar::startBuffering()</code> メソッドと組み合わせて使用します。 <code>Phar::startBuffering()</code> メソッドを使用すると、 大量のファイルを含む Phar アーカイブの作成や変更が非常に高速になります。 通常は、Phar アーカイブ内のファイルが作成あるいは変更されるたびに Phar アーカイブ全体を改めて作り直します。 これによって、アーカイブが常に最新の状態となります。</p><p>しかし、単に新しい Phar アーカイブを作りたいときや アーカイブ全体を一度に書き出したいときなどは、これは不要です。 同様に、いくつかの変更を行うときに、 すべての変更がうまくいったことを確認してから実際にディスクに書き込みたい ということもあるでしょう。 これは、ちょうどデータベースのトランザクションの概念と同じようなものです。 <code>Phar::startBuffering()</code>/<b>Phar::stopBuffering()</b> の両メソッドが、このような場合のために用意されています。</p><p>Phar の書き込みバッファリングはアーカイブ単位で処理されます。 Phar アーカイブ <i>foo.phar</i> でバッファリングが有効であったとしても、それは Phar アーカイブ <i>bar.phar</i> の変更には影響しません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.stopbuffering.php
		 * @see Phar::startBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function stopBuffering(): void {}

		/**
		 * 現在の Phar アーカイブ内のすべてのファイルを展開する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>Phar::compress()</code>、 <code>Phar::decompress()</code>、<code>Phar::compressFiles()</code> および <code>Phar::decompressFiles()</code> をご利用ください。</p><p><b>注意</b>:</p><p>このメソッドは、php.ini の <i>phar.readonly</i> が <i>0</i> でないと Phar オブジェクトで動作しません。それ以外の場合は PharException がスローされます。</p><p>このメソッドは、Phar アーカイブ内のすべてのファイルを展開します。 gzip で圧縮されているファイルが存在する場合は、それを展開するために zlib 拡張モジュールが有効でなければなりません。 また、bzip2 で圧縮されているファイルが存在する場合は、それを展開するために bzip2 拡張モジュールが有効でなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.uncompressallfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression()
		 * @since PECL phar < 2.0.0
		 */
		public function uncompressAllFiles(): bool {}

		/**
		 * phar アーカイブをディスクとメモリから完全に削除する
		 * <p>phar アーカイブをディスクとメモリから削除します。</p>
		 * @param string $archive <p>ディスク上の phar アーカイブへのパス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/phar.unlinkarchive.php
		 * @see Phar::delete(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function unlinkArchive(string $archive): bool {}

		/**
		 * ウェブベースの phar で使用するフロントコントローラ
		 * <p><code>Phar::mapPhar()</code> は、ウェブベースの phar で使用します。 このメソッドは、 $_SERVER['REQUEST_URI'] をパースして ウェブサーバーからのリクエストを phar アーカイブ内のファイルに転送します。 要は、このメソッド自体がウェブサーバーをシミュレートするということです。 正しいファイルにリクエストを転送し、正しいヘッダを出力し、 必要に応じて PHP ファイルをパースします。 この強力なメソッドがあることで、 既存の PHP アプリケーションを phar アーカイブ化するのが容易になります。 <code>Phar::mungServer()</code> や <code>Phar::interceptFileFuncs()</code> と組み合わせて使用すると、任意のウェブアプリケーションをそのまま phar アーカイブ化することができます。</p><p><b>Phar::webPhar()</b> をコールするのは、 phar アーカイブのスタブ内からのみとしましょう (スタブって何&#63; という方は ここ をごらんください)。</p>
		 * @param string $alias <p><i>phar://</i> URL でこのアーカイブを指す際に、 フルパスの代わりに使用するエイリアス。</p>
		 * @param string $index <p>phar の中でディレクトリインデックスとなるファイルの場所。</p>
		 * @param string $f404 <p>ファイルが見つからないときに実行するスクリプトの場所。 このスクリプトは HTTP 404 ヘッダを返さなければなりません。</p>
		 * @param array $mimetypes <p>ファイルの拡張子と MIME タイプを関連付けた配列。 デフォルトのマッピングで十分な場合は、空の配列を渡します。 デフォルトで、これらの関連が定義されています。</p> <code> &lt;&#63;php<br>$mimes = array(<br>    'phps' =&gt; Phar::PHPS, // highlight_file() に渡します<br>    'c' =&gt; 'text/plain',<br>    'cc' =&gt; 'text/plain',<br>    'cpp' =&gt; 'text/plain',<br>    'c++' =&gt; 'text/plain',<br>    'dtd' =&gt; 'text/plain',<br>    'h' =&gt; 'text/plain',<br>    'log' =&gt; 'text/plain',<br>    'rng' =&gt; 'text/plain',<br>    'txt' =&gt; 'text/plain',<br>    'xsd' =&gt; 'text/plain',<br>    'php' =&gt; Phar::PHP, // PHP としてパースします<br>    'inc' =&gt; Phar::PHP, // PHP としてパースします<br>    'avi' =&gt; 'video/avi',<br>    'bmp' =&gt; 'image/bmp',<br>    'css' =&gt; 'text/css',<br>    'gif' =&gt; 'image/gif',<br>    'htm' =&gt; 'text/html',<br>    'html' =&gt; 'text/html',<br>    'htmls' =&gt; 'text/html',<br>    'ico' =&gt; 'image/x-ico',<br>    'jpe' =&gt; 'image/jpeg',<br>    'jpg' =&gt; 'image/jpeg',<br>    'jpeg' =&gt; 'image/jpeg',<br>    'js' =&gt; 'application/x-javascript',<br>    'midi' =&gt; 'audio/midi',<br>    'mid' =&gt; 'audio/midi',<br>    'mod' =&gt; 'audio/mod',<br>    'mov' =&gt; 'movie/quicktime',<br>    'mp3' =&gt; 'audio/mp3',<br>    'mpg' =&gt; 'video/mpeg',<br>    'mpeg' =&gt; 'video/mpeg',<br>    'pdf' =&gt; 'application/pdf',<br>    'png' =&gt; 'image/png',<br>    'swf' =&gt; 'application/shockwave-flash',<br>    'tif' =&gt; 'image/tiff',<br>    'tiff' =&gt; 'image/tiff',<br>    'wav' =&gt; 'audio/wav',<br>    'xbm' =&gt; 'image/xbm',<br>    'xml' =&gt; 'text/xml',<br>);<br>&#63;&gt;  </code>
		 * @param callable $rewrites <p>書き換え関数は、唯一のパラメータとして文字列を受け取り、<code>string</code> あるいは <b><code>FALSE</code></b> を返さないといけません。</p> <p>fast-cgi あるいは cgi を使っている場合、この関数に渡されるパラメータは $_SERVER['PATH_INFO'] の値になります。 それ以外の場合、この関数に渡されるパラメータは $_SERVER['REQUEST_URI'] の値になります。</p> <p>文字列を返した場合は、内部的なファイルパスとして扱います。<b><code>FALSE</code></b> を返した場合は、 webPhar() が HTTP 403 を送信します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/phar.webphar.php
		 * @see Phar::mungServer(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function webPhar(string $alias = NULL, string $index = "index.php", string $f404 = NULL, array $mimetypes = NULL, callable $rewrites = NULL): void {}
	}

	/**
	 * <p>PharException クラスは、try/catch ブロックで使用するための phar 固有の例外クラスです。</p>
	 * @link https://php.net/manual/ja/class.pharexception.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
	 */
	class PharException extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>PharFileInfo クラスは、 phar アーカイブ内の個々のファイルのコンテンツや属性への 高レベルインターフェイスを提供します。</p>
	 * @link https://php.net/manual/ja/class.pharfileinfo.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
	 */
	class PharFileInfo extends \SplFileInfo {

		/**
		 * Phar エントリオブジェクトを作成する
		 * <p>これは直接コールしてはいけません。PharFileInfo オブジェクトを作成するには、 配列へのアクセスを通じて <code>Phar::offsetGet()</code> をコールします。</p>
		 * @param string $entry <p>ファイルを取得するための完全な url。 ファイル <i>my/file.php</i> の情報を phar <i>boo.phar</i> から取得したい場合は、 このエントリは <i>phar://boo.phar/my/file.php</i> となります。</p>
		 * @return self
		 * @link https://php.net/manual/ja/pharfileinfo.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function __construct(string $entry) {}

		/**
		 * ファイル固有のパーミッションビットを設定する
		 * <p><b>PharFileInfo::chmod()</b> は、ファイルパーミッションのうち実行ビットと読み込みビットを設定します。 書き込みビットについては無視されます。書き込みビットは、実行時に INI 設定 phar.readonly に基づいて自動的に設定されます。 この関数は phar の内容を変更するので、Phar アーカイブ内のファイルを操作するには INI 設定 phar.readonly がオフでなければなりません。 PharData アーカイブ内のファイルについては、この制約はありません。</p>
		 * @param int $permissions <p>パーミッション (<code>chmod()</code> を参照ください)。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.chmod.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function chmod(int $permissions): void {}

		/**
		 * 現在の Phar エントリを zlib あるいは bzip2 のいずれかで圧縮する
		 * <p>このメソッドは、Phar アーカイブ内のファイルを bzip あるいは zlib で圧縮します。 この機能を使用するには bzip2 拡張モジュールあるいは zlib 拡張モジュールが有効になっていなければなりません。 さらに、ファイルがすでに圧縮されている場合には、 その圧縮をいったん解除するために対応する拡張モジュールが必要となります。 この関数は phar の内容を変更するので、Phar アーカイブ内のファイルを扱うには INI 設定 phar.readonly が off になっていなければなりません。 PharData アーカイブ内のファイルについてはこの制約はありません。</p>
		 * @param int $compression
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression): bool {}

		/**
		 * phar 内の現在の Phar エントリの圧縮を解除する
		 * <p>このメソッドは、Phar アーカイブ内のファイルの圧縮を解除します。 ファイルの圧縮形式に応じて、この機能を使用するには bzip2 拡張モジュールあるいは zlib 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、Phar アーカイブ内のファイルを扱うには INI 設定 phar.readonly が off になっていなければなりません。 PharData アーカイブ内のファイルについてはこの制約はありません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(): bool {}

		/**
		 * エントリのメタデータを削除する
		 * <p>エントリのメタデータが存在する場合にそれを削除します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。 エントリがメタデータを持っていない場合に <b><code>FALSE</code></b> を返します。 この関数は phar の内容を変更するので、Phar アーカイブ内のファイルを操作するには INI 設定 phar.readonly がオフでなければなりません。 PharData アーカイブ内のファイルについては、この制約はありません。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.delmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * CRC32 コードを返すか、CRC がチェックできない場合に例外をスローする
		 * <p>Phar アーカイブ内のファイルの <code>crc32()</code> チェックサムを返します。</p>
		 * @return int <p>Phar アーカイブ内のファイルの <code>crc32()</code> チェックサムを返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.getcrc32.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getCRC32(): int {}

		/**
		 * Phar アーカイブ内での実際のファイルの大きさ (圧縮された状態) を返す
		 * <p>この関数は、Phar アーカイブ内でのファイルの大きさを返します。 圧縮されていないファイルの場合は、getCompressedSize は <code>filesize()</code> と同じ値を返します。</p>
		 * @return int <p>ディスク上の Phar アーカイブ内のファイルのバイト数を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.getcompressedsize.php
		 * @see PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getCompressedSize(): int {}

		/**
		 * Get the complete file contents of the entry
		 * <p>This function behaves like <code>file_get_contents()</code> but for Phar.</p>
		 * @return string <p>Returns the file contents.</p>
		 * @link https://php.net/manual/ja/pharfileinfo.getcontent.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getContent(): string {}

		/**
		 * ファイルとともに保存されている、ファイル固有のメタデータを返す
		 * <p>Phar アーカイブ内で、このファイル用のマニフェストに保存されたメタデータを返します。</p>
		 * @return mixed <p>ファイルのメタデータとして保存されている、シリアライズ可能な任意の PHP 変数を返します。 メタデータが保存されていない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.getmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * Phar ファイルエントリのフラグを返す
		 * <p>この関数は、Phar のマニフェスト内のフラグセットを返します。 現在の実装では、これは常に <i>0</i> を返します。</p>
		 * @return int <p>Phar フラグを返します (現在の実装では、常に <i>0</i> となります)。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.getpharflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getPharFlags(): int {}

		/**
		 * エントリのメタデータを返す
		 * <p>phar アーカイブ内のファイルのメタデータを返します。</p>
		 * @return bool <p>メタデータが設定されていないかあるいは <b><code>NULL</code></b> が設定されている場合に <b><code>FALSE</code></b>、 <b><code>NULL</code></b> 以外のメタデータが設定されている場合に <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.hasmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * ファイルエントリの CRC が検証されているかどうかを調べる
		 * <p>これは、Phar アーカイブ内のファイルが CRC 検証されているかどうかを返します。</p>
		 * @return bool <p>そのファイルの CRC が検証されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.iscrcchecked.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCRCChecked(): bool {}

		/**
		 * エントリが圧縮されているかどうかを調べる
		 * <p>これは、Phar アーカイブ内のファイルが Gzip あるいは Bzip2 で圧縮されているかどうかを返します。</p>
		 * @param int $compression_type <p><b><code>Phar::GZ</code></b> あるいは <b><code>Phar::BZ2</code></b> のいずれか。デフォルトは任意の圧縮形式となります。</p>
		 * @return bool <p>Phar アーカイブ内のファイルが圧縮されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressed(int $compression_type = 9021976): bool {}

		/**
		 * エントリが bzip2 で圧縮されているかどうかを調べる
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>PharFileInfo::isCompressed()</code>、 <code>PharFileInfo::decompress()</code> および <code>PharFileInfo::compress()</code> をご利用ください。</p><p>これは、Phar アーカイブ内のファイルが Bzip2 で圧縮されているかどうかを返します。</p>
		 * @return bool <p>Phar アーカイブ内のファイルが Bzip2 で圧縮されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.iscompressedbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressedBZIP2(): bool {}

		/**
		 * エントリが gz で圧縮されているかどうかを調べる
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>PharFileInfo::isCompressed()</code>、 <code>PharFileInfo::decompress()</code> および <code>PharFileInfo::compress()</code> をご利用ください。</p><p>これは、Phar アーカイブ内のファイルが Gzip で圧縮されているかどうかを返します。</p>
		 * @return bool <p>Phar アーカイブ内のファイルが Gzip で圧縮されている場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.iscompressedgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressedGZ(): bool {}

		/**
		 * phar 内の現在の Phar エントリを、Bzip2 で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>PharFileInfo::isCompressed()</code>、 <code>PharFileInfo::decompress()</code> および <code>PharFileInfo::compress()</code> をご利用ください。</p><p>このメソッドは、Phar アーカイブ内のファイルを bzip2 を使用して圧縮します。この機能を使用するには、 bzip2 拡張モジュールが有効になっていなければなりません。 また、すでに gzip で圧縮されているファイルを処理するためには、 まず gzip を伸張するために zlib 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.setcompressedbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setCompressedBZIP2(): bool {}

		/**
		 * phar 内の現在の Phar エントリを、gz で圧縮する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>PharFileInfo::isCompressed()</code>、 <code>PharFileInfo::decompress()</code> および <code>PharFileInfo::compress()</code> をご利用ください。</p><p>このメソッドは、Phar アーカイブ内のファイルを gzip を使用して圧縮します。この機能を使用するには、 zlib 拡張モジュールが有効になっていなければなりません。 また、すでに bzip2 で圧縮されているファイルを処理するためには、 まず bzip2 を伸張するために bzip2 拡張モジュールが有効になっていなければなりません。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.setcompressedgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setCompressedGZ(): bool {}

		/**
		 * ファイルとともに保存する、ファイル固有のメタデータを設定する
		 * <p><b>PharFileInfo::setMetadata()</b> を使用するのは、 既存のファイル情報としては表せない独自の情報を保存する場合のみに限るべきです。 メタデータを使用すると、phar アーカイブの読み込み時のパフォーマンスが劇的に低下します。これは、 メタデータのサイズが大きい場合やメタデータを含むファイルが大量にある場合に顕著になります。 ファイルのパーミッションについては phar 自体でネイティブにサポートしており、 <code>PharFileInfo-&gt;chmod()</code> で設定できることを覚えておきましょう。 この関数は phar の内容を変更するので、Phar アーカイブ内のファイルを操作するには INI 設定 phar.readonly がオフでなければなりません。 PharData アーカイブ内のファイルについては、この制約はありません。</p><p>メタデータの使用例として考えられるのは、ユーザー/グループ を指定し、phar からディスクに展開する際にそれを設定することなどです。 ほかには、MIME 型として返す値を明示的に指定することなどがあります。 その他、ファイルについて説明するデータであるが ファイル自体に含むべきでないものを保存したりします。</p>
		 * @param mixed $metadata <p>ファイルとともに保存する情報を含む、PHP の変数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.setmetadata.php
		 * @see PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * phar 内の現在の Phar エントリが圧縮されている場合に、それを展開する
		 * <p><b>注意</b>:</p><p>このメソッドは、phar 拡張モジュールバージョン 2.0.0 で削除されました。 今後は <code>PharFileInfo::isCompressed()</code>、 <code>PharFileInfo::decompress()</code> および <code>PharFileInfo::compress()</code> をご利用ください。</p><p>このメソッドは、Phar アーカイブ内のファイルを展開します。 この機能を使用するには、ファイルの圧縮形式に応じて bzip2 あるいは zlib のいずれかの拡張モジュールが必要になります。 この関数は phar の内容を変更するので、使用するには INI 設定 phar.readonly が off になっていなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pharfileinfo.setuncompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setUncompressed(): bool {}
	}

}
