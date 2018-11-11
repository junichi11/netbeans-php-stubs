<?php



/**
 * <p><b>Directory</b> クラスのインスタンスを作るには <code>dir()</code> 関数を使います。new 演算子は使いません。</p>
 * @link http://php.net/manual/ja/class.directory.php
 * @since PHP 4, PHP 5, PHP 7
 */
class Directory {

	/**
	 * @var string <p>オープンされたディレクトリ。</p>
	 * @link http://php.net/manual/ja/class.directory.php#directory.props.path
	 */
	public $path;

	/**
	 * @var resource <p><code>readdir()</code> や <code>rewinddir()</code>、 <code>closedir()</code> などのディレクトリ関数で使います。</p>
	 * @link http://php.net/manual/ja/class.directory.php#directory.props.handle
	 */
	public $handle;

	/**
	 * ディレクトリハンドルをクローズする
	 * <p><code>closedir()</code> と同じですが、<code> dir_handle</code> のデフォルトが $this になります。</p>
	 * @param resource $dir_handle
	 * @return void
	 * @link http://php.net/manual/ja/directory.close.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	public function close($dir_handle = NULL): void {}

	/**
	 * ディレクトリハンドルからエントリを読み込む
	 * <p><code>readdir()</code> と同じですが、<code> dir_handle</code> のデフォルトが $this になります。</p>
	 * @param resource $dir_handle
	 * @return string
	 * @link http://php.net/manual/ja/directory.read.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	public function read($dir_handle = NULL): string {}

	/**
	 * ディレクトリハンドルを元に戻す
	 * <p><code>rewinddir()</code> と同じですが、<code> dir_handle</code> のデフォルトが $this になります。</p>
	 * @param resource $dir_handle
	 * @return void
	 * @link http://php.net/manual/ja/directory.rewind.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	public function rewind($dir_handle = NULL): void {}
}

/**
 * ディレクトリを変更する
 * <p>PHP のカレントディレクトリを <code>directory</code> に変更します。</p>
 * @param string $directory <p>新しいカレントディレクトリ</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.chdir.php
 * @see getcwd()
 * @since PHP 4, PHP 5, PHP 7
 */
function chdir(string $directory): bool {}

/**
 * ルートディレクトリを変更する
 * <p>(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)</p><p>chroot — ルートディレクトリを変更する</p><p>カレントプロセスのルートディレクトリを <code>directory</code> に変更し、 作業ディレクトリを "/" に変更します。</p><p>この関数が使えるのは GNU および BSD システムのみで、 かつ CLI, CGI, Embed SAPI を使用している場合のみです。</p><p></p><p>ルートディレクトリの変更先のパス。</p><p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p></p><p><b>例1 <b>chroot()</b> の例</b></p><p>上の例の出力は以下となります。</p><p><b>注意</b>: この関数は Windows 環境にはまだ実装されていません。 </p>
 * @param string $directory <p>ルートディレクトリの変更先のパス。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.chroot.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function chroot(string $directory): bool {}

/**
 * ディレクトリハンドルをクローズする
 * <p><code>dir_handle</code> で指定したディレクトリのストリームをクローズします。このストリームは、 <code>opendir()</code>により事前にオープンされていなければ なりません。</p>
 * @param resource $dir_handle <p><code>opendir()</code> が事前にオープンした ディレクトリハンドルリソース。 ディレクトリハンドルを指定しなかった場合は、 <code>opendir()</code> が最後にオープンしたものを使用します。</p>
 * @return void
 * @link http://php.net/manual/ja/function.closedir.php
 * @since PHP 4, PHP 5, PHP 7
 */
function closedir($dir_handle = NULL): void {}

/**
 * ディレクトリクラスのインスタンスを返す
 * <p>ディレクトリを読むための疑似オブジェクト指向の機構です。 指定した <code>directory</code> がオープンされます。</p>
 * @param string $directory <p>オープンするディレクトリ。</p>
 * @param resource $context <p></p><p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return Directory <p>Directory のインスタンスを返します。 パラメータが間違っている場合は <b><code>NULL</code></b>、それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.dir.php
 * @since PHP 4, PHP 5, PHP 7
 */
function dir(string $directory, $context = NULL): \Directory {}

/**
 * カレントのワーキングディレクトリを取得する
 * <p>カレントのワーキングディレクトリを返します。</p>
 * @return string <p>成功時はカレントのワーキングディレクトリを返します。 失敗時は <b><code>FALSE</code></b> を返します。</p><p>いくつかの UNIX の派生系では、親ディレクトリが読み込めない、 もしくは検索モードが設定されている場合、カレントディレクトリが可能だとしても <b>getcwd()</b> は <b><code>FALSE</code></b> を返します。 モードと権限についての詳細は、<code>chmod()</code> を参照ください。</p>
 * @link http://php.net/manual/ja/function.getcwd.php
 * @see chdir(), chmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function getcwd(): string {}

/**
 * ディレクトリハンドルをオープンする
 * <p>ディレクトリハンドルをオープンします。このハンドルは、この後 <code>closedir()</code>, <code>readdir()</code>, <code>rewinddir()</code> 関数コールで使用されます。</p>
 * @param string $path <p>オープンするディレクトリのパス。</p>
 * @param resource $context <p><code>context</code> パラメータの詳細については マニュアルのストリーム を参照ください。</p>
 * @return resource <p>成功した場合にディレクトリハンドルの <code>resource</code> 、 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>path</code> が有効なディレクトリでないかまたは権限が 制限されているかファイルシステムのエラーによりディレクトリが オープンできない場合、<b>opendir()</b> は <b><code>FALSE</code></b> を返し、 E_WARNING エラーが発行されます。 <b>opendir()</b> のこのエラー出力は、 関数名の前に '@' を付けることにより抑制できます。</p>
 * @link http://php.net/manual/ja/function.opendir.php
 * @see is_dir(), readdir(), dir()
 * @since PHP 4, PHP 5, PHP 7
 */
function opendir(string $path, $context = NULL) {}

/**
 * ディレクトリハンドルからエントリを読み込む
 * <p>ディレクトリから次のエントリの名前を返します。 エントリ名はファイルシステム上に格納されている順番で返されます。</p>
 * @param resource $dir_handle <p><code>opendir()</code> が事前にオープンした ディレクトリハンドルリソース。 ディレクトリハンドルを指定しなかった場合は、 <code>opendir()</code> が最後にオープンしたものを使用します。</p>
 * @return string <p>成功した場合にエントリ名、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.readdir.php
 * @see is_dir(), glob(), opendir(), scandir()
 * @since PHP 4, PHP 5, PHP 7
 */
function readdir($dir_handle = NULL): string {}

/**
 * ディレクトリハンドルを元に戻す
 * <p><code>dir_handle</code> で指定されたディレクトリの ストリームをディレクトリの先頭にリセットします。</p>
 * @param resource $dir_handle <p><code>opendir()</code> が事前にオープンした ディレクトリハンドルリソース。 ディレクトリハンドルを指定しなかった場合は、 <code>opendir()</code> が最後にオープンしたものを使用します。</p>
 * @return void
 * @link http://php.net/manual/ja/function.rewinddir.php
 * @since PHP 4, PHP 5, PHP 7
 */
function rewinddir($dir_handle = NULL): void {}

/**
 * 指定されたパスのファイルとディレクトリのリストを取得する
 * <p><code>directory</code> 内のファイルおよびディレクトリを 配列で返します。</p>
 * @param string $directory <p>調べるディレクトリ。</p>
 * @param int $sorting_order <p>デフォルトでは、ソート順はアルファベット昇順です。 オプションの <code>sorting_order</code> に <b><code>SCANDIR_SORT_DESCENDING</code></b> を設定した場合、 ソート順はアルファベット降順になります。 <b><code>SCANDIR_SORT_NONE</code></b> を設定すると、 結果をソートせずに返します。</p>
 * @param resource $context <p><code>context</code> パラメータの説明については、 マニュアルのストリーム を参照ください。</p>
 * @return array <p>成功した場合にファイル名の配列、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>directory</code> がディレクトリではない場合は、 <b><code>FALSE</code></b> を返し、<b><code>E_WARNING</code></b> レベルのエラーを 発行します。</p>
 * @link http://php.net/manual/ja/function.scandir.php
 * @see opendir(), readdir(), glob(), is_dir(), sort()
 * @since PHP 5, PHP 7
 */
function scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, $context = NULL): array {}

define('DIRECTORY_SEPARATOR', '/');

/**
 * Windows の場合はセミコロン、それ以外の場合はコロンとなります。
 */
define('PATH_SEPARATOR', ':');

/**
 * PHP 5.4.0 以降で使用可能です。
 */
define('SCANDIR_SORT_ASCENDING', 0);

/**
 * PHP 5.4.0 以降で使用可能です。
 */
define('SCANDIR_SORT_DESCENDING', 1);

/**
 * PHP 5.4.0 以降で使用可能です。
 */
define('SCANDIR_SORT_NONE', 2);

