<?php



namespace {

	/**
	 * <p>このクラスは RAR アーカイブをあらわします。これは複数のパーツで構成されることもあり、 中に RAR エントリ (ファイルやディレクトリ、そしてシンボリックリンクなどの特殊なオブジェクト) を含みます。</p>
	 * <p>このクラスのオブジェクトの中身を走査したり、RAR アーカイブに格納されているエントリを取り出したりすることができます。 このエントリは、<code>RarArchive::getEntry()</code> や <code>RarArchive::getEntries()</code> を使って取得することもできます。</p>
	 * @link https://php.net/manual/ja/class.rararchive.php
	 * @since PECL rar >= 2.0.0
	 */
	final class RarArchive implements \Traversable {

		/**
		 * テキスト形式で取得する
		 * <p>この <code>RarArchive</code> オブジェクトの文字列表現を取得します。 現在表示されるのは、オープンしているアーカイブボリュームのフルパスと、 そのリソースが有効なのか <code>RarArchive::close()</code> で閉じられた後なのかということです。</p><p>このメソッドはデバッグ用にだけ使うものです。 結果にどのような情報が含まれるか、そしてどういった書式になるかなどは保証されていません。</p>
		 * @return string <p>この <code>RarArchive</code> オブジェクトのテキスト表現を返します。 テキストの中身については未定義です。</p>
		 * @link https://php.net/manual/ja/rararchive.tostring.php
		 * @since PECL rar >= 2.0.0
		 */
		public function __toString(): string {}

		/**
		 * Rar アーカイブをクローズし、全リソースを開放する
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>Rar アーカイブをクローズし、割り当てられた全リソースを開放します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rararchive.close.php
		 * @since PECL rar >= 2.0.0
		 */
		public function close(): bool {}

		/**
		 * RAR アーカイブのコメントテキストを取得する
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>RAR アーカイブに格納された (グローバル) コメントを取得します。長さは最大 64 KiB までです。</p><p><b>注意</b>:</p><p>この拡張モジュールは、エントリごとのコメントをサポートしていません。</p>
		 * @return string <p>コメントを返します。コメントがない場合は <b><code>NULL</code></b> を返します。</p> <p><b>注意</b>:</p> <p>RAR は現在 unicode のコメントに対応していません。この関数の結果のエンコーディングは指定されていませんが、 おそらく Windows-1252 となるでしょう。</p>
		 * @link https://php.net/manual/ja/rararchive.getcomment.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getComment(): string {}

		/**
		 * RAR アーカイブからエントリの全一覧を取得する
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>エントリ (ファイルおよびディレクトリ) の一覧を RAR アーカイブから取得します。</p><p><b>注意</b>:</p><p>アーカイブの中に同じ名前のエントリが存在する場合は、このメソッドを <code>RarArchive</code> の <i>foreach</i> と組み合わせて 数値添字の配列形式で処理するのが唯一のアクセス方法となります (つまり、 <code>RarArchive::getEntry()</code> と  <i>rar://</i> ラッパー は使えないということです)。</p>
		 * @return array <p><b>rar_list()</b> は <code>RarEntry</code> オブジェクトの配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rararchive.getentries.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getEntries(): array {}

		/**
		 * Rar アーカイブからエントリオブジェクトを取得する
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>Rar アーカイブから、エントリオブジェクト (ファイルあるいはディレクトリ) を取得します。</p><p><b>注意</b>:</p><p><code>RarArchive::getEntries()</code> を使ってエントリオブジェクトを取得することもできます。</p><p>RAR アーカイブには、同じ名前のエントリを複数格納することができます。 このメソッドでは、その中の最初のものしか取得できません。</p>
		 * @param string $entryname <p>Rar アーカイブ内のエントリへのパス。</p>  <p><b>注意</b>:</p> <p>このパスは、 <code>RarEntry::getName()</code> が返すものと同じでなければなりません。</p>
		 * @return RarEntry <p>マッチした <code>RarEntry</code> オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rararchive.getentry.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getEntry(string $entryname): \RarEntry {}

		/**
		 * アーカイブが壊れている (未完成である) かどうかを調べる
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>この関数は、アーカイブが不完全である (ボリュームがなかったり、ボリュームが途中で終わっていたりする) かどうかを調べます。</p>
		 * @return bool <p>アーカイブが壊れている場合に <b><code>TRUE</code></b>、壊れていない場合に <b><code>FALSE</code></b> を返します。 この関数は、渡されたファイルがすでに閉じている場合にも <b><code>FALSE</code></b> を返します。どちらの原因かを特定するには exceptions with <code>RarException::setUsingExceptions()</code> で例外を有効にするしかありませんが、普通は閉じたファイルを操作することはないので これは不要なはずです。</p>
		 * @link https://php.net/manual/ja/rararchive.isbroken.php
		 * @since PECL rar >= 3.0.0
		 */
		public function isBroken(): bool {}

		/**
		 * RAR アーカイブがソリッドであるかどうかを調べる
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>RAR アーカイブがソリッドであるかどうかを調べます。ソリッドなアーカイブでは、 個々のファイルの抽出速度が遅くなります。</p>
		 * @return bool <p>アーカイブがソリッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rararchive.issolid.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isSolid(): bool {}

		/**
		 * Rar アーカイブをオープンする
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>指定した RAR アーカイブをオープンし、<code>RarArchive</code> インスタンスを返します。</p><p><b>注意</b>:</p><p>マルチボリュームのアーカイブをオープンするときには、 最初のボリュームのパスをパラメータに指定します。 そうしないとすべてのファイルを表示することはできません。これは仕様です。</p>
		 * @param string $filename <p>Rar アーカイブへのパス。</p>
		 * @param string $password <p>ヘッダの復号に必要な場合、プレーンテキストのパスワード。 暗号化されたファイルが見つかったときにも、これがデフォルトのパスワードとして使われます。 ヘッダのパスワードとファイルのパスワードは異なる場合があることに注意しましょう。</p>
		 * @param callable $volume_callback <p>ひとつのパラメータ (見つからなかったボリュームのパス) を受け取ってそのボリュームの正しいパスを返す関数。 この関数は、ボリュームが存在しなかったり未知であったりする場合は <b><code>NULL</code></b> を返さなければなりません。 この関数はループを引き起こさないようにしなければなりません。 前のコールで返されたパスがそのボリュームに対応しない場合に 関数が繰り返しコールされることがあるからです。 このパラメータを指定すると、ボリュームが見つからなかったときの notice は一切無視するようになります。したがって、 単に <b><code>NULL</code></b> を返すだけの実装を渡しておけば、 notice を無視させるためだけに使うこともできます。</p>
		 * @return RarArchive <p><code>RarArchive</code> インスタンスを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rararchive.open.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function open(string $filename, string $password = NULL, callable $volume_callback = NULL): \RarArchive {}

		/**
		 * 壊れたアーカイブのオープンを許可するかどうかを設定する
		 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>このメソッドは、壊れたアーカイブの読み込みを許可するか、 あるいはアーカイブからエントリを抽出する操作をすべて失敗させるかを設定します。 壊れたアーカイブとは、ファイルのオープン時には何もエラーが検出されないのに エントリを読み込むときにエラーが発生するようなアーカイブのことです。</p>
		 * @param bool $allow_broken <p>壊れたファイルの読み込みを許可する (<b><code>TRUE</code></b>) か許可しない (<b><code>FALSE</code></b>) か。</p>
		 * @return bool <p><b><code>TRUE</code></b> を返します。失敗した場合に <b><code>FALSE</code></b> を返します。 失敗するのは、既にファイルが閉じられているときだけです。</p>
		 * @link https://php.net/manual/ja/rararchive.setallowbroken.php
		 * @since PECL rar >= 3.0.0
		 */
		public function setAllowBroken(bool $allow_broken): bool {}
	}

	/**
	 * <p>A RAR entry, representing a directory or a compressed file inside a RAR archive.</p>
	 * @link https://php.net/manual/ja/class.rarentry.php
	 * @since PECL rar >= 0.1
	 */
	final class RarEntry {

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, MS-DOS was used to add this entry. Use instead of <b><code>RAR_HOST_MSDOS</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_MSDOS = 0;

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, OS/2 was used to add this entry. Intended to replace <b><code>RAR_HOST_OS2</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_OS2 = 1;

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, Microsoft Windows was used to add this entry. Intended to replace <b><code>RAR_HOST_WIN32</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_WIN32 = 2;

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, an unspecified UNIX OS was used to add this entry. Intended to replace <b><code>RAR_HOST_UNIX</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_UNIX = 3;

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, Mac OS was used to add this entry.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_MACOS = 4;

		/**
		 * @var integer <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, BeOS was used to add this entry. Intended to replace <b><code>RAR_HOST_BEOS</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const HOST_BEOS = 5;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a read-only attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_READONLY = 1;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a hidden attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_HIDDEN = 2;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a system attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_SYSTEM = 4;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a directory attribute (entry is a directory). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were not added in WinRAR.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_DIRECTORY = 16;

		/**
		 * @var integer <p>Bit that represents a Windows entry with an archive attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_ARCHIVE = 32;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a device attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_DEVICE = 64;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a normal file attribute (entry is NOT a directory). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were not added in WinRAR.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_NORMAL = 128;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a temporary attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_TEMPORARY = 256;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a sparse file attribute (file is an NTFS sparse file). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_SPARSE_FILE = 512;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a reparse point attribute (entry is an NTFS reparse point, e.g. a directory junction or a mount file system). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_REPARSE_POINT = 1024;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a compressed attribute (NTFS only). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_COMPRESSED = 2048;

		/**
		 * @var integer <p>Bit that represents a Windows entry with an offline attribute (entry is offline and not accessible). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_OFFLINE = 4096;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a not content indexed attribute (entry is to be indexed). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192;

		/**
		 * @var integer <p>Bit that represents a Windows entry with an encrypted attribute (NTFS only). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_ENCRYPTED = 16384;

		/**
		 * @var integer <p>Bit that represents a Windows entry with a virtual attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_VIRTUAL = 65536;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is world executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_EXECUTE = 1;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is world writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_WRITE = 2;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is world readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_READ = 4;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is group executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_EXECUTE = 8;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is group writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_WRITE = 16;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is group readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_READ = 32;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is owner executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_EXECUTE = 64;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is owner writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_WRITE = 128;

		/**
		 * @var integer <p>Bit that represents a UNIX entry that is owner readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_READ = 256;

		/**
		 * @var integer <p>Bit that represents the UNIX sticky bit. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_STICKY = 512;

		/**
		 * @var integer <p>Bit that represents the UNIX setgid attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SETGID = 1024;

		/**
		 * @var integer <p>Bit that represents the UNIX setuid attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SETUID = 2048;

		/**
		 * @var integer <p>Mask to isolate the last four bits (nibble) of UNIX attributes (_S_IFMT, the type of file mask). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constants <b><code>RarEntry::ATTRIBUTE_UNIX_FIFO</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_CHAR_DEV</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_DIRECTORY</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_SYM_LINK</code></b> and <b><code>RarEntry::ATTRIBUTE_UNIX_SOCKET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_FINAL_QUARTET = 61440;

		/**
		 * @var integer <p>Unix FIFOs will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_FIFO = 4096;

		/**
		 * @var integer <p>Unix character devices will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_CHAR_DEV = 8192;

		/**
		 * @var integer <p>Unix directories will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were added in other operating systems.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_DIRECTORY = 16384;

		/**
		 * @var integer <p>Unix block devices will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_BLOCK_DEV = 24576;

		/**
		 * @var integer <p>Unix regular files (not directories) will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were added in other operating systems.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_REGULAR_FILE = 32768;

		/**
		 * @var integer <p>Unix symbolic links will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SYM_LINK = 40960;

		/**
		 * @var integer <p>Unix sockets will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/ja/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SOCKET = 49152;

		/**
		 * エントリのテキスト表現を取得する
		 * <p><b>RarEntry::__toString()</b> は、このエントリのテキスト表現を返します。 その内容は、まずエントリがファイルであるかディレクトリであるか (シンボリックリンクやその他の特殊オブジェクトはファイルとみなされます)、 そしてエントリ名を UTF-8 であらわしたものと CRC となります。 この形式と内容は将来変更される可能性があるので、これに依存してはいけません。</p>
		 * @return string <p>エントリのテキスト表現を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.tostring.php
		 * @since PECL rar >= 2.0.0
		 */
		public function __toString(): string {}

		/**
		 * アーカイブのエントリを展開する
		 * <p><b>RarEntry::extract()</b> は、エントリのデータを展開します。 二番目の引数が指定されていなければ、 指定した <code>dir</code> にエントリの名前と同名の新しいファイルを作成します。 詳細は以下を参照ください。</p>
		 * @param string $dir <p>ファイルを展開するディレクトリへのパス。 このパラメータが考慮されるのは <code>filepath</code> が指定されていないときだけです。両方のパラメータが空の場合は、 カレントディレクトリへの展開を試みます。</p>
		 * @param string $filepath <p>取り出すファイルのディレクトリとファイル名を含むパス (相対パスあるいは絶対パス)。 このパラメータは、<code>dir</code> の内容と元のファイル名を両方とも上書きします。</p>
		 * @param string $password <p>このエントリの暗号化に使うパスワード。 エントリが暗号化されていない場合は、この値は使われずに無視されます。 このパラメータが省略されていてエントリが暗号化されていた場合は、もし <code>rar_open()</code> でパスワードを指定していればそれを使います。 このパラメータや <code>rar_open()</code> で指定したパスワードが間違っていたときは、 CRC チェックが失敗してこのメソッドが失敗し、<b><code>FALSE</code></b> を返します。 パスワードが要求されているときにパスワードを指定していなければ、 このメソッドは失敗して <b><code>FALSE</code></b> を返します。 エントリが暗号化されているかどうかを知るには <code>RarEntry::isEncrypted()</code> を使います。</p>
		 * @param bool $extended_data <p><b><code>TRUE</code></b> にすると、NTFS の ACL や Unix のオーナー情報といった拡張情報が アーカイブに設定されていれば、取り出したファイルにもそれを設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.extract.php
		 * @since PECL rar >= 0.1
		 */
		public function extract(string $dir, string $filepath = "", string $password = NULL, bool $extended_data = FALSE): bool {}

		/**
		 * エントリの属性を取得する
		 * <p>アーカイブエントリの、OS に依存する属性を返します。</p>
		 * @return int <p>属性、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getattr.php
		 * @since PECL rar >= 0.1
		 */
		public function getAttr(): int {}

		/**
		 * エントリの CRC を取得する
		 * <p>アーカイブエントリの CRC を、十六進文字列表現で返します。</p>
		 * @return string <p>アーカイブエントリの CRC、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getcrc.php
		 * @since PECL rar >= 0.1
		 */
		public function getCrc(): string {}

		/**
		 * エントリの最終更新時刻を取得する
		 * <p>エントリの最終更新時刻を取得します。</p>
		 * @return string <p>エントリの最終更新時刻を <i>YYYY-MM-DD HH:II:SS</i> 形式で表した文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getfiletime.php
		 * @since PECL rar >= 0.1
		 */
		public function getFileTime(): string {}

		/**
		 * エントリのホスト OS を取得する
		 * <p>アーカイブエントリのホスト OS のコードを返します。</p>
		 * @return int <p>ホスト OS のコード、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.gethostos.php
		 * @since PECL rar >= 0.1
		 */
		public function getHostOs(): int {}

		/**
		 * エントリの圧縮方法を取得する
		 * <p><b>RarEntry::getMethod()</b> は、現在のアーカイブエントリを 追加する際に使用したメソッドの番号を返します。</p>
		 * @return int <p>メソッド番号、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getmethod.php
		 * @since PECL rar >= 0.1
		 */
		public function getMethod(): int {}

		/**
		 * エントリの名前を取得する
		 * <p>アーカイブエントリの名前 (パスつき) を返します。</p>
		 * @return string <p>エントリ名を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getname.php
		 * @since PECL rar >= 0.1
		 */
		public function getName(): string {}

		/**
		 * 圧縮後のエントリのサイズを取得する
		 * <p>圧縮後のアーカイブエントリのサイズを取得します。</p><p><b>注意</b>:</p><p>調整数型が 32 ビットであるプラットフォーム (Windows x64 など) では、返されるサイズの上限は 2 GiB となります。定数 <b><code>PHP_INT_MAX</code></b> をチェックしましょう。</p>
		 * @return int <p>圧縮後のサイズ、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getpackedsize.php
		 * @since PECL rar >= 0.1
		 */
		public function getPackedSize(): int {}

		/**
		 * このエントリのファイルハンドラを取得する
		 * <p>読み込み操作をサポートするファイルハンドラを返します。 このハンドラを使って、このエントリをその場で展開します。</p><p>このハンドラは、<code>rar_close()</code> をコールしても無効にはなりません。</p><p>返されるストリームでは、整合性の検証を行いません。 特に、ファイルの破損や間違ったキーによる復号は検出できません。 もし整合性を検証したいのなら、エントリの CRC を確認するのはプログラマ側の役割となります。</p>
		 * @param string $password <p>このエントリの暗号化に使うパスワード。 エントリが暗号化されていない場合は、この値は使われずに無視されます。 このパラメータが省略されていてエントリが暗号化されていた場合は、もし <code>rar_open()</code> でパスワードを指定していればそれを使います。 このパラメータや <code>rar_open()</code> で指定したパスワードが間違っていたときは、 このメソッドの結果のストリームは間違った結果を出力します。 パスワードが要求されているときにパスワードを指定していなければ、 このメソッドは失敗して <b><code>FALSE</code></b> を返します。 エントリが暗号化されているかどうかを知るには <code>RarEntry::isEncrypted()</code> を使います。</p>
		 * @return resource <p>ファイルハンドラを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getstream.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getStream(string $password = NULL) {}

		/**
		 * 展開後のエントリのサイズを取得する
		 * <p>展開後のアーカイブエントリのサイズを取得します。</p><p><b>注意</b>:</p><p>調整数型が 32 ビットであるプラットフォーム (Windows x64 など) では、返されるサイズの上限は 2 GiB となります。定数 <b><code>PHP_INT_MAX</code></b> をチェックしましょう。</p>
		 * @return int <p>展開後のサイズ、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getunpackedsize.php
		 * @since PECL rar >= 0.1
		 */
		public function getUnpackedSize(): int {}

		/**
		 * このエントリを展開するのに必要な RAR プログラムの最低バージョンを取得する
		 * <p>このエントリを展開するのに必要な RAR プログラム (WinRAR など) の最低バージョンを取得します。 10 &#42; メジャーバージョン + マイナーバージョン 形式になります。</p>
		 * @return int <p>バージョン、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.getversion.php
		 * @since PECL rar >= 0.1
		 */
		public function getVersion(): int {}

		/**
		 * このエントリがディレクトリであるかどうかを調べる
		 * <p>現在のエントリがディレクトリであるかどうかを調べます。</p>
		 * @return bool <p>エントリがディレクトリである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.isdirectory.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isDirectory(): bool {}

		/**
		 * このエントリが暗号化されているかどうかを調べる
		 * <p>現在のディレクトリが暗号化されているかどうかを調べます。</p><p><b>注意</b>:</p><p>同じ RAR アーカイブ内でも、ファイルによってパスワードが異なることがあります。</p>
		 * @return bool <p>エントリが暗号化されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarentry.isencrypted.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isEncrypted(): bool {}
	}

	/**
	 * <p>このクラスの役割は、RAR 拡張モジュールの関数やメソッドからスローされた例外を表す型となることと 静的メソッドを使ってエラーの詳細 (例外がスローされたのか、 それとも警告が発生しただけなのかなど) を得ることのふたつです。</p>
	 * <p>次のエラーコードを使います。</p>
	 * @link https://php.net/manual/ja/class.rarexception.php
	 * @since PECL rar >= 2.0.0
	 */
	final class RarException extends \Exception {

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

		/**
		 * 例外によるエラー処理を使っているかどうかを調べる
		 * <p>RAR 関数が警告を発してエラー値を返すようになっているか、 あるいは例外をスローするようになっているかを調べます (引数の型を間違えるなどのプログラム上のエラーは含めません)。</p>
		 * @return bool <p>例外を使っている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/rarexception.isusingexceptions.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function isUsingExceptions(): bool {}

		/**
		 * 例外によるエラー処理の有効化および無効化を行う
		 * <p>引数に <b><code>TRUE</code></b> を指定すると、UnRAR ライブラリがエラーに遭遇したときの挙動を変更し、 警告を発してエラーを示す値を返すのではなく <code>RarException</code> 型の例外をスローするようにします。</p><p>例外は次のエラーのときにもスローされます。これらはライブラリの外部で発生します (エラーコードは -1 です)。</p>
		 * @param bool $using_exceptions <p>例外をスローさせるときは <b><code>TRUE</code></b>、例外をスローさせないときは <b><code>FALSE</code></b> (デフォルト)。</p>
		 * @return void
		 * @link https://php.net/manual/ja/rarexception.setusingexceptions.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function setUsingExceptions(bool $using_exceptions): void {}
	}

	/**
	 * アーカイブが壊れている (未完成である) かどうかを調べる
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>この関数は、アーカイブが不完全である (ボリュームがなかったり、ボリュームが途中で終わっていたりする) かどうかを調べます。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @return bool <p>アーカイブが壊れている場合に <b><code>TRUE</code></b>、壊れていない場合に <b><code>FALSE</code></b> を返します。 この関数は、渡されたファイルがすでに閉じている場合にも <b><code>FALSE</code></b> を返します。どちらの原因かを特定するには exceptions with <code>RarException::setUsingExceptions()</code> で例外を有効にするしかありませんが、普通は閉じたファイルを操作することはないので これは不要なはずです。</p>
	 * @link https://php.net/manual/ja/rararchive.isbroken.php
	 * @since PECL rar >= 3.0.0
	 */
	function rar_broken_is(\RarArchive $rarfile): bool {}

	/**
	 * Rar アーカイブをクローズし、全リソースを開放する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>Rar アーカイブをクローズし、割り当てられた全リソースを開放します。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/rararchive.close.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_close(\RarArchive $rarfile): bool {}

	/**
	 * RAR アーカイブのコメントテキストを取得する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>RAR アーカイブに格納された (グローバル) コメントを取得します。長さは最大 64 KiB までです。</p><p><b>注意</b>:</p><p>この拡張モジュールは、エントリごとのコメントをサポートしていません。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @return string <p>コメントを返します。コメントがない場合は <b><code>NULL</code></b> を返します。</p> <p><b>注意</b>:</p> <p>RAR は現在 unicode のコメントに対応していません。この関数の結果のエンコーディングは指定されていませんが、 おそらく Windows-1252 となるでしょう。</p>
	 * @link https://php.net/manual/ja/rararchive.getcomment.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_comment_get(\RarArchive $rarfile): string {}

	/**
	 * Rar アーカイブからエントリオブジェクトを取得する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>Rar アーカイブから、エントリオブジェクト (ファイルあるいはディレクトリ) を取得します。</p><p><b>注意</b>:</p><p><code>RarArchive::getEntries()</code> を使ってエントリオブジェクトを取得することもできます。</p><p>RAR アーカイブには、同じ名前のエントリを複数格納することができます。 このメソッドでは、その中の最初のものしか取得できません。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @param string $entryname <p>Rar アーカイブ内のエントリへのパス。</p>  <p><b>注意</b>:</p> <p>このパスは、 <code>RarEntry::getName()</code> が返すものと同じでなければなりません。</p>
	 * @return RarEntry <p>マッチした <code>RarEntry</code> オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/rararchive.getentry.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_entry_get(\RarArchive $rarfile, string $entryname): \RarEntry {}

	/**
	 * RAR アーカイブからエントリの全一覧を取得する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>エントリ (ファイルおよびディレクトリ) の一覧を RAR アーカイブから取得します。</p><p><b>注意</b>:</p><p>アーカイブの中に同じ名前のエントリが存在する場合は、このメソッドを <code>RarArchive</code> の <i>foreach</i> と組み合わせて 数値添字の配列形式で処理するのが唯一のアクセス方法となります (つまり、 <code>RarArchive::getEntry()</code> と  <i>rar://</i> ラッパー は使えないということです)。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @return array <p><b>rar_list()</b> は <code>RarEntry</code> オブジェクトの配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/rararchive.getentries.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_list(\RarArchive $rarfile): array {}

	/**
	 * Rar アーカイブをオープンする
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>指定した RAR アーカイブをオープンし、<code>RarArchive</code> インスタンスを返します。</p><p><b>注意</b>:</p><p>マルチボリュームのアーカイブをオープンするときには、 最初のボリュームのパスをパラメータに指定します。 そうしないとすべてのファイルを表示することはできません。これは仕様です。</p>
	 * @param string $filename <p>Rar アーカイブへのパス。</p>
	 * @param string $password <p>ヘッダの復号に必要な場合、プレーンテキストのパスワード。 暗号化されたファイルが見つかったときにも、これがデフォルトのパスワードとして使われます。 ヘッダのパスワードとファイルのパスワードは異なる場合があることに注意しましょう。</p>
	 * @param callable $volume_callback <p>ひとつのパラメータ (見つからなかったボリュームのパス) を受け取ってそのボリュームの正しいパスを返す関数。 この関数は、ボリュームが存在しなかったり未知であったりする場合は <b><code>NULL</code></b> を返さなければなりません。 この関数はループを引き起こさないようにしなければなりません。 前のコールで返されたパスがそのボリュームに対応しない場合に 関数が繰り返しコールされることがあるからです。 このパラメータを指定すると、ボリュームが見つからなかったときの notice は一切無視するようになります。したがって、 単に <b><code>NULL</code></b> を返すだけの実装を渡しておけば、 notice を無視させるためだけに使うこともできます。</p>
	 * @return RarArchive <p><code>RarArchive</code> インスタンスを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/rararchive.open.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_open(string $filename, string $password = NULL, callable $volume_callback = NULL): \RarArchive {}

	/**
	 * RAR アーカイブがソリッドであるかどうかを調べる
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型:</p><p>RAR アーカイブがソリッドであるかどうかを調べます。ソリッドなアーカイブでは、 個々のファイルの抽出速度が遅くなります。</p>
	 * @param \RarArchive $rarfile <p><code>rar_open()</code> でオープンした <code>RarArchive</code> オブジェクト。</p>
	 * @return bool <p>アーカイブがソリッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/rararchive.issolid.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_solid_is(\RarArchive $rarfile): bool {}

	/**
	 * URL ラッパーのキャッシュのヒット数
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.rar-wrapper-cache-stats.php
	 * @since PECL rar >= 3.0.0
	 */
	function rar_wrapper_cache_stats(): string {}

	/**
	 * かわりに <b><code>RarEntry::HOST_BEOS</code></b> を使います。
	 */
	define('RAR_HOST_BEOS', null);

	/**
	 * かわりに <b><code>RarEntry::HOST_MSDOS</code></b> を使います。
	 */
	define('RAR_HOST_MSDOS', null);

	/**
	 * かわりに <b><code>RarEntry::HOST_OS2</code></b> を使います。
	 */
	define('RAR_HOST_OS2', null);

	/**
	 * かわりに <b><code>RarEntry::HOST_UNIX</code></b> を使います。
	 */
	define('RAR_HOST_UNIX', null);

	/**
	 * かわりに <b><code>RarEntry::HOST_WIN32</code></b> を使います。
	 */
	define('RAR_HOST_WIN32', null);

}
