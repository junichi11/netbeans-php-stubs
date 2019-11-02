<?php



namespace {

	/**
	 * <p>Zip で圧縮されたファイルアーカイブです。</p>
	 * @link https://php.net/manual/ja/class.ziparchive.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
	 */
	class ZipArchive implements \Countable {

		/**
		 * @var int アーカイブが存在しない場合に、作成します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CREATE = 1;

		/**
		 * @var int 常に新しいアーカイブを開始します。このモードは、 ファイルが既に存在する場合にはそれを上書きします。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OVERWRITE = 8;

		/**
		 * @var int アーカイブが既に存在する場合はエラーとします。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const EXCL = 2;

		/**
		 * @var int アーカイブの一貫性チェックを別途行い、 失敗した場合はエラーとします。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CHECKCONS = 4;

		/**
		 * @var int 名前で検索する際に大文字小文字を区別しません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_NOCASE = 1;

		/**
		 * @var int ディレクトリ要素を無視します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_NODIR = 2;

		/**
		 * @var int 圧縮されたデータを読み込みます。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_COMPRESSED = 4;

		/**
		 * @var int 元のデータを使用し、変更内容を無視します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_UNCHANGED = 8;

		/**
		 * @var int 文字エンコーディングを推測します (デフォルト)。PHP 7.0.8 以降で利用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_ENC_GUESS = 0;

		/**
		 * @var int 何も手を加えない文字列を取得します。PHP 7.0.8 以降で利用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_ENC_RAW = 64;

		/**
		 * @var int 指示に厳格に従います。PHP 7.0.8 以降で利用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_ENC_STRICT = 128;

		/**
		 * @var int 文字列のエンコーディングは UTF-8 です。PHP 7.0.8 以降で利用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_ENC_UTF_8 = 2048;

		/**
		 * @var int 文字列のエンコーディングは CP437 です。PHP 7.0.8 以降で利用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const FL_ENC_CP437 = 4096;

		/**
		 * @var int 圧縮あるいは保存のどちらか有効なほうを実行します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_DEFAULT = -1;

		/**
		 * @var int 保存します (圧縮しません)。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_STORE = 0;

		/**
		 * @var int 圧縮します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_SHRINK = 1;

		/**
		 * @var int reduced with factor 1
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_REDUCE_1 = 2;

		/**
		 * @var int reduced with factor 2
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_REDUCE_2 = 3;

		/**
		 * @var int reduced with factor 3
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_REDUCE_3 = 4;

		/**
		 * @var int reduced with factor 4
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_REDUCE_4 = 5;

		/**
		 * @var int imploded
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_IMPLODE = 6;

		/**
		 * @var int deflated
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_DEFLATE = 8;

		/**
		 * @var int deflate64
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_DEFLATE64 = 9;

		/**
		 * @var int PKWARE 方式。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_PKWARE_IMPLODE = 10;

		/**
		 * @var int BZIP2 アルゴリズム。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const CM_BZIP2 = 12;

		/**
		 * @var int エラーはありません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_OK = 0;

		/**
		 * @var int 複数ディスクの zip アーカイブはサポートされません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_MULTIDISK = 1;

		/**
		 * @var int 一時ファイルの名前変更に失敗しました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_RENAME = 2;

		/**
		 * @var int zip アーカイブのクローズに失敗しました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_CLOSE = 3;

		/**
		 * @var int シークエラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_SEEK = 4;

		/**
		 * @var int 読み込みエラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_READ = 5;

		/**
		 * @var int 書き込みエラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_WRITE = 6;

		/**
		 * @var int CRC エラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_CRC = 7;

		/**
		 * @var int zip アーカイブはクローズされました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_ZIPCLOSED = 8;

		/**
		 * @var int そのファイルはありません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_NOENT = 9;

		/**
		 * @var int ファイルが既に存在します。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_EXISTS = 10;

		/**
		 * @var int ファイルをオープンできません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_OPEN = 11;

		/**
		 * @var int 一時ファイルの作成に失敗しました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_TMPOPEN = 12;

		/**
		 * @var int Zlib エラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_ZLIB = 13;

		/**
		 * @var int メモリの確保に失敗しました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_MEMORY = 14;

		/**
		 * @var int エントリが変更されました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_CHANGED = 15;

		/**
		 * @var int 圧縮方式がサポートされていません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_COMPNOTSUPP = 16;

		/**
		 * @var int 予期せぬ EOF です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_EOF = 17;

		/**
		 * @var int 無効な引数です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_INVAL = 18;

		/**
		 * @var int zip アーカイブではありません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_NOZIP = 19;

		/**
		 * @var int 内部エラー。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_INTERNAL = 20;

		/**
		 * @var int 矛盾した Zip アーカイブです。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_INCONS = 21;

		/**
		 * @var int ファイルを削除できません。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_REMOVE = 22;

		/**
		 * @var int エントリが削除されました。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const ER_DELETED = 23;

		/**
		 * @var int No encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const EM_NONE = null;

		/**
		 * @var int AES 128 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const EM_AES_128 = null;

		/**
		 * @var int AES 1192 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const EM_AES_192 = null;

		/**
		 * @var int AES 256 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const EM_AES_256 = null;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_DOS = 0;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_AMIGA = 1;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_OPENVMS = 2;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_UNIX = 3;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_VM_CMS = 4;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_ATARI_ST = 5;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_OS_2 = 6;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_MACINTOSH = 7;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_Z_SYSTEM = 8;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_CPM = 9;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_WINDOWS_NTFS = 10;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_MVS = 11;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_VSE = 12;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_ACORN_RISC = 13;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_VFAT = 14;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_ALTERNATE_MVS = 15;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_BEOS = 16;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_TANDEM = 17;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_OS_400 = 18;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_OS_X = 19;

		/**
		 * @var int PHP 5.6.0、PECL zip 1.12.4 以降で使用可能です。
		 * @link https://php.net/manual/ja/zip.constants.php
		 */
		const OPSYS_DEFAULT = 3;

		/**
		 * @var int <p>Zip アーカイブの状態</p>
		 * @link https://php.net/manual/ja/class.ziparchive.php#ziparchive.props.status
		 */
		public $status;

		/**
		 * @var int <p>Zip アーカイブのシステム状態</p>
		 * @link https://php.net/manual/ja/class.ziparchive.php#ziparchive.props.statussys
		 */
		public $statusSys;

		/**
		 * @var int <p>アーカイブ内のファイル数</p>
		 * @link https://php.net/manual/ja/class.ziparchive.php#ziparchive.props.numfiles
		 */
		public $numFiles;

		/**
		 * @var string <p>ファイルシステム上のファイル名</p>
		 * @link https://php.net/manual/ja/class.ziparchive.php#ziparchive.props.filename
		 */
		public $filename;

		/**
		 * @var string <p>アーカイブのコメント</p>
		 * @link https://php.net/manual/ja/class.ziparchive.php#ziparchive.props.comment
		 */
		public $comment;

		/**
		 * 新しいディレクトリを追加する
		 * <p>空のディレクトリをアーカイブに追加します。</p>
		 * @param string $dirname <p>追加するディレクトリ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.addemptydir.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.8.0
		 */
		public function addEmptyDir(string $dirname): bool {}

		/**
		 * 指定したパスからファイルを ZIP アーカイブに追加する
		 * <p>指定したパスから、ファイルを ZIP アーカイブに追加します。</p><p><b>注意</b>: ポータビリティを考慮して、ZIP ファイル名のディレクトリ区切り文字には常にスラッシュ (<i>/</i>) を使うことを推奨します。</p>
		 * @param string $filename <p>追加するファイルへのパス。</p>
		 * @param string $localname <p>指定した場合は ZIP アーカイブ内部での名前となり、<code>filename</code> を上書きします。</p>
		 * @param int $start <p>このパラメータは使いませんが、ZipArchive を継承するためには必要です。</p>
		 * @param int $length <p>このパラメータは使いませんが、ZipArchive を継承するためには必要です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.addfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFile(string $filename, string $localname = NULL, int $start = 0, int $length = 0): bool {}

		/**
		 * 内容を指定して、ファイルを ZIP アーカイブに追加する
		 * <p>内容を指定して、ファイルを ZIP アーカイブに追加します。</p><p><b>注意</b>: ポータビリティを考慮して、ZIP ファイル名のディレクトリ区切り文字には常にスラッシュ (<i>/</i>) を使うことを推奨します。</p>
		 * @param string $localname <p>作成するエントリの名前。</p>
		 * @param string $contents <p>エントリを作成するために使用するデータの内容。 バイナリセーフな形式で使用します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.addfromstring.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFromString(string $localname, string $contents): bool {}

		/**
		 * ディレクトリから、glob パターンを使ってファイルを追加する
		 * <p>ディレクトリから、glob <code>pattern</code> にマッチするファイルを追加します。</p><p><b>注意</b>: ポータビリティを考慮して、ZIP ファイル名のディレクトリ区切り文字には常にスラッシュ (<i>/</i>) を使うことを推奨します。</p>
		 * @param string $pattern <p><code>glob()</code> パターン。どのファイルを対象にするのかを指定します。</p>
		 * @param int $flags <p><i>glob()</i> のフラグのビットマスク。</p>
		 * @param array $options <p>オプションの連想配列。次のオプションが使えます。</p><ul> <li> <p><i>"add_path"</i></p> <p>アーカイブ内のファイルのローカルパスに変換するときにつけるプレフィックス。 これが適用されるのは、 <i>"remove_path"</i> や <i>"remove_all_path"</i> で定義された削除処理がすべて終わった後です。</p> </li> <li> <p><i>"remove_path"</i></p> <p>マッチしたファイルをアーカイブに追加する前に削除するプレフィックス。</p> </li> <li> <p><i>"remove_all_path"</i></p> <p><b><code>TRUE</code></b> にすると、ファイル名だけを使ってアーカイブのルートに追加します。</p> </li> </ul>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.addglob.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addGlob(string $pattern, int $flags = 0, array $options = array()): bool {}

		/**
		 * ディレクトリから、PCRE パターンを使ってファイルを追加する
		 * <p>ディレクトリから、正規表現の <code>pattern</code> にマッチするファイルを追加します。 この操作は再帰処理ではありません。パターンマッチは、ファイル名に対してだけ行います。</p>
		 * @param string $pattern <p>PCRE のパターン。どのファイルを対象にするのかを指定します。</p>
		 * @param string $path <p>スキャンするディレクトリ。デフォルトは、現在の作業ディレクトリです。</p>
		 * @param array $options <p>オプションの連想配列。<code>ZipArchive::addGlob()</code> と同じオプションが使えます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.addpattern.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addPattern(string $pattern, string $path = ".", array $options = array()): bool {}

		/**
		 * アクティブな (オープンされた、あるいは新しく作成された) アーカイブを閉じる
		 * <p>オープンされた、あるいは作成されたアーカイブを閉じ、 変更内容を保存します。このメソッドは、 スクリプトの最後で自動的にコールされます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.close.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function close(): bool {}

		/**
		 * Counts the number of files in the achive
		 * @return int <p>Returns the number of files in the archive.</p>
		 * @link https://php.net/manual/ja/ziparchive.count.php
		 * @since PHP 7 >= 7.2.0, PECL zip >= 1.15.0
		 */
		public function count(): int {}

		/**
		 * インデックスを使用して、アーカイブ内のエントリを削除する
		 * <p>インデックスをもとにして、アーカイブ内のエントリを削除します。</p>
		 * @param int $index <p>削除するエントリのインデックス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.deleteindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteIndex(int $index): bool {}

		/**
		 * 名前を使用して、アーカイブからエントリを削除する
		 * <p>名前をもとにして、アーカイブ内のエントリを削除します。</p>
		 * @param string $name <p>削除するエントリの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.deletename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteName(string $name): bool {}

		/**
		 * アーカイブの内容を展開する
		 * <p>アーカイブの全体あるいは指定したファイルを、 指定した場所に展開します。</p>
		 * @param string $destination <p>ファイルを展開する場所。</p>
		 * @param mixed $entries <p>展開するエントリ。単一のエントリ名、 あるいはエントリ名の配列を指定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.extractto.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function extractTo(string $destination, $entries = NULL): bool {}

		/**
		 * ZIP アーカイブのコメントを返す
		 * <p>Zip アーカイブのコメントを返します。</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> を設定すると、 元の変更されていないコメントを返します。</p>
		 * @return string <p>Zip アーカイブのコメントを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getArchiveComment(int $flags = NULL): string {}

		/**
		 * エントリのインデックスを使用して、エントリのコメントを返す
		 * <p>エントリのインデックスを使用して、エントリのコメントを返します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> を指定すると、 元の変化していないコメントを返します。</p>
		 * @return string <p>成功した場合にコメント、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentIndex(int $index, int $flags = NULL): string {}

		/**
		 * エントリ名を使用して、エントリのコメントを返す
		 * <p>エントリ名を使用して、エントリのコメントを返します。</p>
		 * @param string $name <p>エントリの名前。</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> を指定すると、 元の変化していないコメントが返されます。</p>
		 * @return string <p>成功した場合にコメント、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentName(string $name, int $flags = NULL): string {}

		/**
		 * Retrieve the external attributes of an entry defined by its index
		 * <p>Retrieve the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags = NULL): bool {}

		/**
		 * Retrieve the external attributes of an entry defined by its name
		 * <p>Retrieve the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesName(string $name, int &$opsys, int &$attr, int $flags = NULL): bool {}

		/**
		 * インデックスを使用して、エントリの内容を返す
		 * <p>インデックスを使用して、エントリの内容を返します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @param int $length <p>エントリから読み込む長さ。<i>0</i> の場合はエントリ全体を読み込みます。</p>
		 * @param int $flags <p>アーカイブのオープン時に使用するフラグ。以下の値を OR で連結して使用します。</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> </ul>
		 * @return string <p>成功した場合にエントリの内容、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getfromindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getFromIndex(int $index, int $length = 0, int $flags = NULL): string {}

		/**
		 * 名前を使用して、エントリの内容を返す
		 * <p>名前を使用して、エントリの内容を返します。</p>
		 * @param string $name <p>エントリの名前。</p>
		 * @param int $length <p>エントリから読み込む長さ。<i>0</i> の場合はエントリ全体を読み込みます。</p>
		 * @param int $flags <p>エントリを探す際に使用するフラグ。以下の値を OR で連結して使用します。</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> </ul>
		 * @return string <p>成功した場合にエントリの内容、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getfromname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getFromName(string $name, int $length = 0, int $flags = NULL): string {}

		/**
		 * インデックスを使用して、エントリの名前を返す
		 * <p>インデックスを使用して、エントリの名前を返します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> を指定すると、 元の変化していないコメントを返します。</p>
		 * @return string <p>成功した場合に名前、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getnameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function getNameIndex(int $index, int $flags = NULL): string {}

		/**
		 * システムエラー、または ZIP メッセージに関するエラー情報を返す
		 * <p>システムエラー、または ZIP メッセージに関するエラー情報を返す</p>
		 * @return string <p>成功時にはステータスメッセージを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getstatusstring.php
		 * @since PHP 5 >= 5.2.7, PHP 7
		 */
		public function getStatusString(): string {}

		/**
		 * 名前を使用して、エントリのファイルハンドラ (読み込み専用) を取得する
		 * <p>名前を使用して、エントリのファイルハンドラを取得します。 現時点では読み込み操作のみに対応しています。</p>
		 * @param string $name <p>使用するエントリの名前。</p>
		 * @return resource <p>成功した場合にファイルポインタ (リソース)、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.getstream.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getStream(string $name) {}

		/**
		 * アーカイブ内のエントリのインデックスを返す
		 * <p>名前を使用して、エントリの場所を取得します。</p>
		 * @param string $name <p>探したいエントリの名前。</p>
		 * @param int $flags <p>この関数は、アーカイブ内の指定した名前のファイルのインデックスを返します。 フラグには、次の値を OR で連結して指定します。 あるいは何もしていしない場合は 0 とします。</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> </ul>
		 * @return int <p>成功した場合にエントリのインデックス、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.locatename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function locateName(string $name, int $flags = NULL): int {}

		/**
		 * ZIP ファイルアーカイブをオープンする
		 * <p>新しい zip アーカイブを、読み込み/書き込み/変更用にオープンします。</p>
		 * @param string $filename <p>オープンする ZIP アーカイブのファイル名。</p>
		 * @param int $flags <p>アーカイブのオープンに使用するモード。</p><ul> <li> <p><b><code>ZipArchive::OVERWRITE</code></b></p> </li> <li> <p><b><code>ZipArchive::CREATE</code></b></p> </li> <li> <p><b><code>ZipArchive::EXCL</code></b></p> </li> <li> <p><b><code>ZipArchive::CHECKCONS</code></b></p> </li> </ul>
		 * @return mixed <code>エラーコード</code>   <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合にエラーコードを返します。</p> <ul> <li> <p><b><code>ZipArchive::ER_EXISTS</code></b></p> <p>ファイルが既に存在します。</p> </li> <li> <p><b><code>ZipArchive::ER_INCONS</code></b></p> <p>Zip アーカイブに矛盾があります。</p> </li> <li> <p><b><code>ZipArchive::ER_INVAL</code></b></p> <p>無効な引数です。</p> </li> <li> <p><b><code>ZipArchive::ER_MEMORY</code></b></p> <p>メモリの確保に失敗しました。</p> </li> <li> <p><b><code>ZipArchive::ER_NOENT</code></b></p> <p>ファイルが存在しません。</p> </li> <li> <p><b><code>ZipArchive::ER_NOZIP</code></b></p> <p>zip アーカイブではありません。</p> </li> <li> <p><b><code>ZipArchive::ER_OPEN</code></b></p> <p>ファイルを開けません。</p> </li> <li> <p><b><code>ZipArchive::ER_READ</code></b></p> <p>読み込みエラー。</p> </li> <li> <p><b><code>ZipArchive::ER_SEEK</code></b></p> <p>シークエラー。</p> </li> </ul>
		 * @link https://php.net/manual/ja/ziparchive.open.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function open(string $filename, int $flags = NULL) {}

		/**
		 * インデックスを使用してエントリ名を変更する
		 * <p>インデックスを使用して、エントリ名を変更します。</p>
		 * @param int $index <p>名前を変更するエントリのインデックス。</p>
		 * @param string $newname <p>新しい名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.renameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameIndex(int $index, string $newname): bool {}

		/**
		 * 名前を使用してエントリ名を変更する
		 * <p>名前を使用して、エントリ名を変更します。</p>
		 * @param string $name <p>名前を変更するエントリの名前。</p>
		 * @param string $newname <p>新しい名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.renamename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameName(string $name, string $newname): bool {}

		/**
		 * ZIP アーカイブのコメントを設定する
		 * <p>ZIP アーカイブのコメントを設定します。</p>
		 * @param string $comment <p>コメントの内容。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setArchiveComment(string $comment): bool {}

		/**
		 * インデックスを使用してエントリのコメントを設定する
		 * <p>インデックスを使用して、エントリのコメントを設定します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @param string $comment <p>コメントの内容。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentIndex(int $index, string $comment): bool {}

		/**
		 * 名前を使用してエントリのコメントを設定する
		 * <p>名前を使用して、エントリのコメントを設定します。</p>
		 * @param string $name <p>エントリの名前。</p>
		 * @param string $comment <p>コメントの内容。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentName(string $name, string $comment): bool {}

		/**
		 * Set the compression method of an entry defined by its index
		 * <p>Set the compression method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $comp_method <p>The compression method. Either <b><code>ZipArchive::CM_DEFAULT</code></b>, <b><code>ZipArchive::CM_STORE</code></b> or <b><code>ZipArchive::CM_DEFLATE</code></b>.</p>
		 * @param int $comp_flags <p>Compression flags. Currently unused.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setcompressionindex.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionIndex(int $index, int $comp_method, int $comp_flags = 0): bool {}

		/**
		 * Set the compression method of an entry defined by its name
		 * <p>Set the compression method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $comp_method <p>The compression method. Either <b><code>ZipArchive::CM_DEFAULT</code></b>, <b><code>ZipArchive::CM_STORE</code></b> or <b><code>ZipArchive::CM_DEFLATE</code></b>.</p>
		 * @param int $comp_flags <p>Compression flags. Currently unused.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setcompressionname.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionName(string $name, int $comp_method, int $comp_flags = 0): bool {}

		/**
		 * Set the encryption method of an entry defined by its index
		 * <p>Set the encryption method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param string $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setencryptionindex.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionIndex(int $index, string $method, string $password = NULL): bool {}

		/**
		 * Set the encryption method of an entry defined by its name
		 * <p>Set the encryption method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setencryptionname.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionName(string $name, int $method, string $password = NULL): bool {}

		/**
		 * Set the external attributes of an entry defined by its index
		 * <p>Set the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = NULL): bool {}

		/**
		 * Set the external attributes of an entry defined by its name
		 * <p>Set the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = NULL): bool {}

		/**
		 * アクティブなアーカイブにパスワードを設定する
		 * <p>アクティブなアーカイブにパスワードを設定します。</p>
		 * @param string $password <p>アーカイブに使用されるパスワード。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.setpassword.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setPassword(string $password): bool {}

		/**
		 * インデックスを使用してエントリの詳細を取得する
		 * <p>この関数は、インデックスを使用してエントリの詳細情報を取得します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> を OR で連結すると、 アーカイブ内に最初に記録された際の情報を取得します。 変更内容は無視されます。</p>
		 * @return array <p>エントリの詳細を含む配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.statindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function statIndex(int $index, int $flags = NULL): array {}

		/**
		 * 名前を使用してエントリの詳細を取得する
		 * <p>この関数は、名前を使用してエントリの詳細情報を取得します。</p>
		 * @param string $name <p>エントリの名前。</p>
		 * @param int $flags <p>名前をどのように探すのかを設定します。 また <b><code>ZipArchive::FL_UNCHANGED</code></b> を OR で連結すると、 アーカイブ内に最初に記録された際の情報を取得します。 変更内容は無視されます。</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> </ul>
		 * @return array <p>エントリの詳細を含む配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.statname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function statName(string $name, int $flags = NULL): array {}

		/**
		 * アーカイブに対するすべての変更を取り消す
		 * <p>アーカイブに対するすべての変更を取り消します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.unchangeall.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeAll(): bool {}

		/**
		 * アーカイブ全体に対して行われたすべての変更を取り消す
		 * <p>アーカイブ全体に対して行われたすべての変更を取り消します。 現在は、これはアーカイブのコメントに対する変更のみを取り消します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.unchangearchive.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeArchive(): bool {}

		/**
		 * 指定したインデックスのエントリに対するすべての変更を取り消す
		 * <p>指定したインデックスのエントリに対するすべての変更を取り消します。</p>
		 * @param int $index <p>エントリのインデックス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.unchangeindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeIndex(int $index): bool {}

		/**
		 * 指定した名前のエントリに対するすべての変更を取り消す
		 * <p>エントリに対するすべての変更を取り消します。</p>
		 * @param string $name <p>エントリの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/ziparchive.unchangename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function unchangeName(string $name): bool {}
	}

	/**
	 * ZIP ファイルアーカイブを閉じる
	 * <p>ZIP ファイルアーカイブを閉じます。</p>
	 * @param resource $zip <p>事前に <code>zip_open()</code> でオープンされた ZIP ファイル。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.zip-close.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_close($zip): void {}

	/**
	 * ディレクトリエントリを閉じる
	 * <p>指定されたディレクトリエントリを閉じます。</p>
	 * @param resource $zip_entry <p><code>zip_entry_open()</code>によりオープンされたディレクトリの エントリ</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.zip-entry-close.php
	 * @see zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_close($zip_entry): bool {}

	/**
	 * ディレクトリエントリの圧縮時のサイズを取得する
	 * <p>ディレクトリエントリの圧縮時のサイズを取得します。</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリのエントリ</p>
	 * @return int <p>圧縮後のサイズ</p>
	 * @link https://php.net/manual/ja/function.zip-entry-compressedsize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressedsize($zip_entry): int {}

	/**
	 * ディレクトリエントリの圧縮方法を取得する
	 * <p><code>zip_entry</code>により指定されたディレクトリエントリの 圧縮方法を返します。</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリのエントリ</p>
	 * @return string <p>圧縮方法</p>
	 * @link https://php.net/manual/ja/function.zip-entry-compressionmethod.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressionmethod($zip_entry): string {}

	/**
	 * ディレクトリエントリの実際のファイルサイズを取得する
	 * <p>ディレクトリエントリの実際のファイルサイズを返します。</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリのエントリ</p>
	 * @return int <p>ディレクトリエントリのサイズ</p>
	 * @link https://php.net/manual/ja/function.zip-entry-filesize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_filesize($zip_entry): int {}

	/**
	 * ディレクトリエントリの名前を取得する
	 * <p>指定したディレクトリエントリの名前を返します。</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリエントリ</p>
	 * @return string <p>ディレクトリエントリの名前</p>
	 * @link https://php.net/manual/ja/function.zip-entry-name.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_name($zip_entry): string {}

	/**
	 * 読込み用にディレクトリエントリをオープンする
	 * <p>読込み用にzipファイルの中にディレクトリエントリをオープンします。</p>
	 * @param resource $zip <p><code>zip_open()</code>により返された有効なリソースハンドル</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリエントリ</p>
	 * @param string $mode <p><code>fopen()</code>のマニュアルで指定されたモードのどれか</p>  <p><b>注意</b>:</p> <p>現在、<code>mode</code>は無視され、 常に<i>"rb"</i>となります。 これは、PHPのzipサポートが読み込みのみのアクセスであるためです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p><code>fopen()</code>や他の同種の関数と異なり、 <b>zip_entry_open()</b>の戻り値は、 処理の結果のみを示し、ディレクトリエントリの読み込みやクローズの際には 必要とされません。</p>
	 * @link https://php.net/manual/ja/function.zip-entry-open.php
	 * @see zip_entry_close(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_open($zip, $zip_entry, string $mode = NULL): bool {}

	/**
	 * オープンされたディレクトリエントリから読み込む
	 * <p>オープンされたディレクトリエントリから読み込みます。</p>
	 * @param resource $zip_entry <p><code>zip_read()</code>により返されたディレクトリエントリ</p>
	 * @param int $length <p>返すバイト数。</p>  <p><b>注意</b>:</p> <p>これは、読み込むデータの非圧縮時の長さとなります。</p>
	 * @return string <p>読み込んだデータを返します。ファイルの終端に達した場合は空文字列、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.zip-entry-read.php
	 * @see zip_entry_open(), zip_entry_close(), zip_entry_filesize()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_read($zip_entry, int $length = 1024): string {}

	/**
	 * Zip ファイルアーカイブをオープンする
	 * <p>読み込み用に新規に Zip アーカイブをオープンします。</p>
	 * @param string $filename <p>オープンする ZIP アーカイブのファイル名。</p>
	 * @return resource <p>後で <code>zip_read()</code> および <code>zip_close()</code> で使用されるリソースハンドル、または、 <code>filename</code> が存在しない場合やその他のエラーが発生した場合は エラーの番号を返します。</p>
	 * @link https://php.net/manual/ja/function.zip-open.php
	 * @see zip_read(), zip_close()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_open(string $filename) {}

	/**
	 * Zip ファイルアーカイブの中の次のエントリを読み込む
	 * <p>Zip ファイルアーカイブの中の次のエントリを読み込みます。</p>
	 * @param resource $zip <p><code>zip_open()</code> でオープン済みの ZIP ファイル。</p>
	 * @return resource <p>後で <i>zip_entry_...</i> 関数で使用されるディレクトリエントリリソース、または、 読み込むエントリがもうない場合に <b><code>FALSE</code></b>、 その他のエラーが発生した場合はエラー番号を返します。</p>
	 * @link https://php.net/manual/ja/function.zip-read.php
	 * @see zip_open(), zip_close(), zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_read($zip) {}

}
