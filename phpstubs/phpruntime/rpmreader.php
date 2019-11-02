<?php



namespace {

	/**
	 * RPM ファイルを閉じる
	 * <p><b>rpm_close()</b> は RPM ファイルポインタを閉じます。</p>
	 * @param resource $rpmr <p><code>rpm_open()</code> でオープンしたファイルポインタリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.rpm-close.php
	 * @see rpm_open()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_close($rpmr): bool {}

	/**
	 * RPM ファイルからヘッダタグを取得する
	 * <p><b>rpm_get_tag()</b> は、RPM ファイルのヘッダから 指定したタグを取得してそれを返します。</p>
	 * @param resource $rpmr <p><code>rpm_open()</code> でオープンした ファイルポインタリソース。</p>
	 * @param int $tagnum <p>RPM ヘッダから取得するタグの番号。この値は、 このモジュールで定義されている定数の一覧を使用して指定可能です。</p>
	 * @return mixed <p>関数に渡した <code>tagnum</code> の値により、 返り値の型はいろいろな形式になりえます。</p>
	 * @link https://php.net/manual/ja/function.rpm-get-tag.php
	 * @see rpm_open(), rpm_close()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_get_tag($rpmr, int $tagnum) {}

	/**
	 * filename が RPM ファイルであるかどうかを確かめる
	 * <p><b>rpm_is_valid()</b> は、ファイルが RPM ファイルとして有効な形式であるかどうかを調べます。これは <code>rpm_open()</code> とは違って単にファイルを調べるだけであり、 他の関数で使用するためのファイルポインタは返しません。</p>
	 * @param string $filename <p>調べたい RPM ファイル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.rpm-is-valid.php
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_is_valid(string $filename): bool {}

	/**
	 * RPM ファイルをオープンする
	 * <p><b>rpm_open()</b> は、RPM ファイルをオープンして それが正しい RPM 形式であるかどうかを調べます。</p>
	 * @param string $filename <p>オープンしたい RPM ファイルの名前。</p>
	 * @return resource <p>オープンに成功すると、<b>rpm_open()</b> は オープンしたファイルのファイルポインタリソースを返します。 エラー時にはこの関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.rpm-open.php
	 * @see rpm_close()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_open(string $filename) {}

	/**
	 * rpmreader 拡張モジュールの現在のバージョンを表す文字列を返す
	 * <p><b>rpm_version()</b> は、rpmreader 拡張モジュールの 現在のバージョンを返します。</p>
	 * @return string <p><b>rpm_version()</b> は、現在 PHP に読み込まれている rpmreader のバージョンを表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.rpm-version.php
	 * @since PECL rpmreader >= 0.3.0
	 */
	function rpm_version(): string {}

	define('RPMREADER_ARCH', null);

	define('RPMREADER_ARCHIVESIZE', null);

	/**
	 * パス情報を含まない、RPM パッケージ内のファイル名の一覧。 このタグは、RPM の新しい "CompressedFileNames" 方式で 格納されたファイル名を再構築するために RPMREADER_DIRINDEXES および RPMREADER_DIRNAMES とともに使用されます。
	 */
	define('RPMREADER_BASENAMES', null);

	define('RPMREADER_BUILDARCHS', null);

	/**
	 * RPM パッケージがビルドされたホストの名前。
	 */
	define('RPMREADER_BUILDHOST', null);

	/**
	 * RPM パッケージがビルドされた日付と時刻。
	 */
	define('RPMREADER_BUILDTIME', null);

	define('RPMREADER_CACHECTIME', null);

	define('RPMREADER_CACHEPKGMTIME', null);

	define('RPMREADER_CACHEPKGPATH', null);

	define('RPMREADER_CACHEPKGSIZE', null);

	/**
	 * Changelog エントリの名前。
	 */
	define('RPMREADER_CHANGELOGNAME', null);

	/**
	 * Changelog エントリのテキストの一覧。
	 */
	define('RPMREADER_CHANGELOGTEXT', null);

	/**
	 * Changelog エントリの更新日の一覧。
	 */
	define('RPMREADER_CHANGELOGTIME', null);

	define('RPMREADER_CLASSDICT', null);

	define('RPMREADER_CONFLICTFLAGS', null);

	define('RPMREADER_CONFLICTNAME', null);

	define('RPMREADER_CONFLICTVERSION', null);

	define('RPMREADER_COOKIE', null);

	define('RPMREADER_COPYRIGHT', null);

	define('RPMREADER_DEPENDSDICT', null);

	/**
	 * RPM パッケージについての詳細な説明テキスト。
	 */
	define('RPMREADER_DESCRIPTION', null);

	/**
	 * RPM パッケージ内でのディレクトリ名とファイルとの 関連インデックスの一覧。 このタグは、RPM の新しい "CompressedFileNames" 方式で 格納されたファイル名を再構築するために RPMREADER_BASENAMES および RPMREADER_DIRNAMES とともに使用されます。
	 */
	define('RPMREADER_DIRINDEXES', null);

	/**
	 * RPM パッケージ内のファイルが使用しているディレクトリ名の一覧。 このタグは、RPM の新しい "CompressedFileNames" 方式で 格納されたファイル名を再構築するために RPMREADER_BASENAMES および RPMREADER_DIRINDEXES とともに使用されます。
	 */
	define('RPMREADER_DIRNAMES', null);

	define('RPMREADER_DISTRIBUTION', null);

	define('RPMREADER_DISTURL', null);

	define('RPMREADER_EPOCH', null);

	define('RPMREADER_EXCLUDEARCH', null);

	define('RPMREADER_EXCLUDEOS', null);

	define('RPMREADER_EXCLUSIVEARCH', null);

	define('RPMREADER_EXCLUSIVEOS', null);

	define('RPMREADER_FILECLASS', null);

	define('RPMREADER_FILECOLORS', null);

	define('RPMREADER_FILECONTEXTS', null);

	define('RPMREADER_FILEDEPENDSN', null);

	define('RPMREADER_FILEDEPENDSX', null);

	define('RPMREADER_FILEDEVICES', null);

	define('RPMREADER_FILEFLAGS', null);

	define('RPMREADER_FILEGROUPNAME', null);

	define('RPMREADER_FILEINODES', null);

	define('RPMREADER_FILELANGS', null);

	define('RPMREADER_FILELINKTOS', null);

	define('RPMREADER_FILEMD5S', null);

	define('RPMREADER_FILEMODES', null);

	define('RPMREADER_FILEMTIMES', null);

	define('RPMREADER_FILERDEVS', null);

	define('RPMREADER_FILESIZES', null);

	define('RPMREADER_FILESTATES', null);

	define('RPMREADER_FILEUSERNAME', null);

	define('RPMREADER_FILEVERIFYFLAGS', null);

	define('RPMREADER_FSCONTEXTS', null);

	define('RPMREADER_GIF', null);

	define('RPMREADER_GROUP', null);

	define('RPMREADER_ICON', null);

	define('RPMREADER_INSTALLCOLOR', null);

	define('RPMREADER_INSTALLTID', null);

	define('RPMREADER_INSTALLTIME', null);

	define('RPMREADER_INSTPREFIXES', null);

	define('RPMREADER_LICENSE', null);

	/**
	 * 使用可能な RPM タグ番号の最大値。
	 */
	define('RPMREADER_MAXIMUM', null);

	/**
	 * 使用可能な RPM タグ番号の最小値。
	 */
	define('RPMREADER_MINIMUM', null);

	/**
	 * RPM パッケージの名前。
	 */
	define('RPMREADER_NAME', null);

	define('RPMREADER_OBSOLETEFLAGS', null);

	define('RPMREADER_OBSOLETENAME', null);

	define('RPMREADER_OBSOLETES', null);

	define('RPMREADER_OBSOLETEVERSION', null);

	/**
	 * RPM パッケージ内のファイル一覧（古い形式）。現在では、 RPM が "CompressedFileNames" と呼んでいる方式のもとで 以下の 3 つの タグ（RPMREADER_BASENAMES, RPMREADER_DIRINDEXES, RPMREADER_DIRNAMES） を組み合わせて使用するのが正しい方法です。古い形式の RPM ファイルで "CompressedFileNames" を使用していないものではこのタグがまだ使用 されており、過去との互換性のためにこの定数が残されています。
	 */
	define('RPMREADER_OLDFILENAMES', null);

	define('RPMREADER_OPTFLAGS', null);

	define('RPMREADER_OS', null);

	define('RPMREADER_PACKAGER', null);

	define('RPMREADER_PATCH', null);

	define('RPMREADER_PATCHESFLAGS', null);

	define('RPMREADER_PATCHESNAME', null);

	define('RPMREADER_PATCHESVERSION', null);

	define('RPMREADER_PAYLOADCOMPRESSOR', null);

	define('RPMREADER_PAYLOADFLAGS', null);

	define('RPMREADER_PAYLOADFORMAT', null);

	define('RPMREADER_PLATFORM', null);

	define('RPMREADER_POLICIES', null);

	define('RPMREADER_POSTIN', null);

	define('RPMREADER_POSTINPROG', null);

	define('RPMREADER_POSTUN', null);

	define('RPMREADER_POSTUNPROG', null);

	define('RPMREADER_PREFIXES', null);

	define('RPMREADER_PREIN', null);

	define('RPMREADER_PREINPROG', null);

	define('RPMREADER_PREUN', null);

	define('RPMREADER_PREUNPROG', null);

	define('RPMREADER_PROVIDEFLAGS', null);

	define('RPMREADER_PROVIDENAME', null);

	define('RPMREADER_PROVIDES', null);

	define('RPMREADER_PROVIDEVERSION', null);

	define('RPMREADER_RECONTEXTS', null);

	/**
	 * RPM パッケージのリリース番号。
	 */
	define('RPMREADER_RELEASE', null);

	define('RPMREADER_REMOVETID', null);

	define('RPMREADER_REQUIREFLAGS', null);

	define('RPMREADER_REQUIRENAME', null);

	define('RPMREADER_REQUIREVERSION', null);

	define('RPMREADER_RHNPLATFORM', null);

	define('RPMREADER_RPMVERSION', null);

	define('RPMREADER_SERIAL', null);

	/**
	 * RPM パッケージのサイズ。
	 */
	define('RPMREADER_SIZE', null);

	define('RPMREADER_SOURCE', null);

	define('RPMREADER_SOURCEPKGID', null);

	define('RPMREADER_SOURCERPM', null);

	/**
	 * RPM パッケージの概要テキスト。
	 */
	define('RPMREADER_SUMMARY', null);

	define('RPMREADER_TRIGGERFLAGS', null);

	define('RPMREADER_TRIGGERINDEX', null);

	define('RPMREADER_TRIGGERNAME', null);

	define('RPMREADER_TRIGGERSCRIPTPROG', null);

	define('RPMREADER_TRIGGERSCRIPTS', null);

	define('RPMREADER_TRIGGERVERSION', null);

	define('RPMREADER_URL', null);

	define('RPMREADER_VENDOR', null);

	define('RPMREADER_VERIFYSCRIPT', null);

	define('RPMREADER_VERIFYSCRIPTPROG', null);

	/**
	 * RPM パッケージのバージョン。
	 */
	define('RPMREADER_VERSION', null);

	define('RPMREADER_XPM', null);

}
