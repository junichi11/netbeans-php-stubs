<?php



namespace {

	/**
	 * Schedules the addition of an item in a working directory
	 * <p>Adds the file, directory or symbolic link at <code>path</code> to the working directory. The item will be added to the repository the next time you call <code>svn_commit()</code> on the working copy.</p>
	 * @param string $path <p>Path of item to add.</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param bool $recursive <p>If item is directory, whether or not to recursively add all of its contents. Default is <b><code>TRUE</code></b></p>
	 * @param bool $force <p>If true, Subversion will recurse into already versioned directories in order to add unversioned files that may be hiding in those directories. Default is <b><code>FALSE</code></b></p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-add.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_add(string $path, bool $recursive = TRUE, bool $force = FALSE): bool {}

	/**
	 * 認証パラメータを取得する
	 * <p>認証パラメータ <code>key</code> を取得します。 使用できるキーとその意味については 認証定数の一覧 を参照ください。</p>
	 * @param string $key <p>キーの名前。認証に関する定数 のいずれかを指定します。</p>
	 * @return string <p><code>key</code> の値を文字列で返します。 パラメータが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-auth-get-parameter.php
	 * @see svn_auth_set_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_auth_get_parameter(string $key): string {}

	/**
	 * 認証パラメータを設定する
	 * <p>認証パラメータ <code>key</code> の値を <code>value</code> に設定します。 使用できるキーとその意味については 認証定数の一覧 を参照ください。</p>
	 * @param string $key <p>キーの名前。認証に関する定数 のいずれかを指定します。</p>
	 * @param string $value <p>そのパラメータに指定する値。 値の書式は、パラメータによって異なります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.svn-auth-set-parameter.php
	 * @see svn_auth_get_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_auth_set_parameter(string $key, string $value): void {}

	/**
	 * ファイルの SVN blame を取得する
	 * <p>リポジトリの URL を指定して、ファイルの SVN blame を取得します。</p>
	 * @param string $repository_url <p>リポジトリの URL。</p>
	 * @param int $revision_no <p>リビジョン番号。</p>
	 * @return array <p>SVN blame 情報を配列で返します。行ごとに区切られ、 リビジョン番号と行番号、コードの行、作者、日付が含まれます。</p>
	 * @link https://php.net/manual/ja/function.svn-blame.php
	 * @see svn_diff(), svn_status()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_blame(string $repository_url, int $revision_no = SVN_REVISION_HEAD): array {}

	/**
	 * リポジトリ内のファイルの内容を返す
	 * <p>リポジトリ内のファイルを指す URL <code>repos_url</code> の中身を返します。オプションでリビジョン番号 <code>revision_no</code> を指定します。</p>
	 * @param string $repos_url <p>リポジトリ内のアイテムへのパスを表す URL 文字列。</p>
	 * @param int $revision_no <p>取得したいリビジョン番号を表す整数値。デフォルトは HEAD リビジョン。</p>
	 * @return string <p>成功した場合にアイテムの内容を表す文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-cat.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_cat(string $repos_url, int $revision_no = NULL): string {}

	/**
	 * リポジトリから作業コピーをチェックアウトする
	 * <p><code>repos</code> にあるリポジトリの リビジョン <code>revision</code> を、 <code>targetpath</code> の作業コピーにチェックアウトします。</p>
	 * @param string $repos <p>チェックアウトしたいリポジトリ内のディレクトリを表す URL 文字列。</p>
	 * @param string $targetpath <p>チェックアウト先ディレクトリのローカルパス。</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param int $revision <p>チェックアウトしたいリビジョン番号を表す整数値。デフォルトは HEAD リビジョンで、これは最新のリビジョンを表します。</p>
	 * @param int $flags <p><b><code>SVN_NON_RECURSIVE</code></b> および <b><code>SVN_IGNORE_EXTERNALS</code></b> の任意の組み合わせ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-checkout.php
	 * @see svn_add(), svn_commit(), svn_status(), svn_update()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_checkout(string $repos, string $targetpath, int $revision = NULL, int $flags = 0): bool {}

	/**
	 * 作業コピーディレクトリを再帰的にクリーンアップし、中途半端な操作を解消してロックを削除する
	 * <p>作業コピーディレクトリ <code>workingdir</code> を再帰的にクリーンアップし、中途半端になっている操作を完了してロックを削除します。 作業コピーが中途半端な状態になってしまったときに、 再度使用可能にするために用います。</p>
	 * @param string $workingdir <p>クリーンアップしたい作業ディレクトリへのパス。</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-cleanup.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_cleanup(string $workingdir): bool {}

	/**
	 * SVN クライアントライブラリのバージョンを返す
	 * <p>SVN クライアントライブラリのバージョンを返します。</p>
	 * @return string <p>バージョン番号を表す文字列を返します。通常は x.y.z 形式となります。</p>
	 * @link https://php.net/manual/ja/function.svn-client-version.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_client_version(): string {}

	/**
	 * Sends changes from the local working copy to the repository
	 * <p>Commits changes made in the local working copy files enumerated in the <code>targets</code> array to the repository, with the log message <code>log</code>. Directories in the <code>targets</code> array will be recursively committed unless <code>recursive</code> is set to <b><code>FALSE</code></b>.</p><p><b>注意</b>:  This function does not have any parameters for specifying authentication, so a username and password must be set using <code>svn_auth_set_parameter()</code> </p>
	 * @param string $log <p>String log text to commit</p>
	 * @param array $targets <p>Array of local paths of files to be committed</p>  <b>警告</b> <p>This parameter must be an array, a string for a single target is not acceptable.</p>  <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param bool $recursive <p>Boolean flag to disable recursive committing of directories in the <code>targets</code> array. Default is <b><code>TRUE</code></b>.</p>
	 * @return array <p>Returns array in form of:</p>  <pre>array( 0 =&gt; integer revision number of commit 1 =&gt; string ISO 8601 date and time of commit 2 =&gt; name of committer )</pre>  <p>Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.svn-commit.php
	 * @see svn_auth_set_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_commit(string $log, array $targets, bool $recursive = TRUE): array {}

	/**
	 * Delete items from a working copy or repository
	 * <p>Deletes the file, directory or symbolic link at <code>path</code> from the working directory. The item will be deleted from the repository the next time you call <code>svn_commit()</code> on the working copy.</p>
	 * @param string $path <p>Path of item to delete.</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param bool $force <p>If <b><code>TRUE</code></b>, the file will be deleted even if it has local modifications. Otherwise, local modifications will result in a failure. Default is <b><code>FALSE</code></b></p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-delete.php
	 * @since PECL svn >= 0.4.0
	 */
	function svn_delete(string $path, bool $force = FALSE): bool {}

	/**
	 * ふたつのパスの差分を再帰的に取得する
	 * <p>ふたつのパス <code>path1</code> および <code>path2</code> の差分を再帰的に取得します。</p><p><b>注意</b>:</p><p>汎用的な diff ツールとは異なり、 バージョン管理の対象になっているローカルファイルしか差分取得の対象となりません。 その他のファイルの差分は取得できません。</p>
	 * @param string $path1 <p>最初のパス。SVN リポジトリのファイル/ディレクトリを指す URL、 あるいはローカルのファイル/ディレクトリのパスのいずれかとなります。</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>  <b>警告</b> <p>ローカルファイルのパスを指定する際に、 バックスラッシュのみを使用して通常のスラッシュが存在しない場合は、 パスの検出に失敗してしまいます。この関数を使う際には、 バックスラッシュをすべてスラッシュに置き換えるようにしましょう。</p>
	 * @param int $rev1 <p>最初のパスのリビジョン番号。最新のリビジョンを指定したい場合は <b><code>SVN_REVISION_HEAD</code></b> を使用します。</p>
	 * @param string $path2 <p>もうひとつのパス。詳細は <code>path1</code> の説明を参照ください。</p>
	 * @param int $rev2 <p>もうひとつのパスのリビジョン番号。詳細は <code>rev1</code> の説明を参照ください。</p>
	 * @return array <p>ふたつのストリームの内容を含む配列のリストを返します。 最初のストリームが diff の出力で、もうひとつはエラー出力です。 このストリームを読み込むには <code>fread()</code> を使用します。エラーが発生した場合は <b><code>FALSE</code></b> あるいは <b><code>NULL</code></b> を返します。</p><p>デフォルトでは、diff の出力は Subversion 版の unified diff 形式となります。しかし、Subversion の設定によっては » 外部の diff エンジン を使うこともできます。</p>
	 * @link https://php.net/manual/ja/function.svn-diff.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_diff(string $path1, int $rev1, string $path2, int $rev2): array {}

	/**
	 * Export the contents of a SVN directory
	 * <p>Export the contents of either a working copy or repository into a 'clean' directory.</p>
	 * @param string $frompath <p>The path to the current repository.</p>
	 * @param string $topath <p>The path to the new repository.</p>
	 * @param bool $working_copy <p>If <b><code>TRUE</code></b>, it will export uncommitted files from the working copy.</p>
	 * @param int $revision_no
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-export.php
	 * @see svn_import()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_export(string $frompath, string $topath, bool $working_copy = TRUE, int $revision_no = -1): bool {}

	/**
	 * トランザクションを中断し、成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>トランザクションを中断し、成功したら true、失敗したら false を返します。</p>
	 * @param resource $txn
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-abort-txn.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_abort_txn($txn): bool {}

	/**
	 * 置換に使用するストリームを作成して返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>置換に使用するストリームを作成して返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-fs-apply-text.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_apply_text($root, string $path) {}

	/**
	 * 新しいトランザクションを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>新しいトランザクションを作成します。</p>
	 * @param resource $repos
	 * @param int $rev
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-fs-begin-txn2.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_begin_txn2($repos, int $rev) {}

	/**
	 * 成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>成功したら true、失敗したら false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @param string $name
	 * @param string $value
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-change-node-prop.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_change_node_prop($root, string $path, string $name, string $value): bool {}

	/**
	 * 指定したリポジトリの fsroot パスにどんなアイテムが存在するかを調べる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定したリポジトリの fsroot パスにどんなアイテムが存在するかを調べます。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/ja/function.svn-fs-check-path.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_check_path($fsroot, string $path): int {}

	/**
	 * コンテンツが変更されている場合に true、されていない場合に false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>コンテンツが変更されている場合に true、されていない場合に false を返します。</p>
	 * @param resource $root1
	 * @param string $path1
	 * @param resource $root2
	 * @param string $path2
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-contents-changed.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_contents_changed($root1, string $path1, $root2, string $path2): bool {}

	/**
	 * ファイルやディレクトリをコピーし、成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ファイルやディレクトリをコピーし、成功したら true、失敗したら false を返します。</p>
	 * @param resource $from_root
	 * @param string $from_path
	 * @param resource $to_root
	 * @param string $to_path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-copy.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_copy($from_root, string $from_path, $to_root, string $to_path): bool {}

	/**
	 * ファイルやディレクトリを削除し、成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ファイルやディレクトリを削除し、成功したら true、失敗したら false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-delete.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_delete($root, string $path): bool {}

	/**
	 * 指定したパスのディレクトリを列挙し、ディレクトリ名とファイルタイプのハッシュを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定したパスのディレクトリを列挙し、ディレクトリ名とファイルタイプのハッシュを返します。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return array
	 * @link https://php.net/manual/ja/function.svn-fs-dir-entries.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_dir_entries($fsroot, string $path): array {}

	/**
	 * 指定したバージョンの fs から、ファイルの中身を読み込むためのストリームを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定したバージョンの fs から、ファイルの中身を読み込むためのストリームを返します。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-fs-file-contents.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_file_contents($fsroot, string $path) {}

	/**
	 * 指定したバージョンの fs から、ファイルの長さを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定したバージョンの fs から、ファイルの長さを返します。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/ja/function.svn-fs-file-length.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_file_length($fsroot, string $path): int {}

	/**
	 * ディレクトリを指すパスである場合に true、それ以外の場合に false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ディレクトリを指すパスである場合に true、それ以外の場合に false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-is-dir.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_is_dir($root, string $path): bool {}

	/**
	 * ファイルを指すパスである場合に true、それ以外の場合に false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ファイルを指すパスである場合に true、それ以外の場合に false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-is-file.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_is_file($root, string $path): bool {}

	/**
	 * 空のディレクトリを作成し、成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>空のディレクトリを作成し、成功したら true、失敗したら false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-make-dir.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_make_dir($root, string $path): bool {}

	/**
	 * 空のファイルを作成し、成功したら true、失敗したら false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>空のファイルを作成し、成功したら true、失敗したら false を返します。</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-make-file.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_make_file($root, string $path): bool {}

	/**
	 * fsroot 配下のパスが作成されたリビジョンを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>fsroot 配下のパスが作成されたリビジョンを返します。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/ja/function.svn-fs-node-created-rev.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_node_created_rev($fsroot, string $path): int {}

	/**
	 * ノードのプロパティの値を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ノードのプロパティの値を返します。</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @param string $propname
	 * @return string
	 * @link https://php.net/manual/ja/function.svn-fs-node-prop.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_node_prop($fsroot, string $path, string $propname): string {}

	/**
	 * プロパティが変更されている場合に true、それ以外の場合に false を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>プロパティが変更されている場合に true、それ以外の場合に false を返します。</p>
	 * @param resource $root1
	 * @param string $path1
	 * @param resource $root2
	 * @param string $path2
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-fs-props-changed.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_props_changed($root1, string $path1, $root2, string $path2): bool {}

	/**
	 * 指定したプロパティの値を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>指定したプロパティの値を取得します。</p>
	 * @param resource $fs
	 * @param int $revnum
	 * @param string $propname
	 * @return string
	 * @link https://php.net/manual/ja/function.svn-fs-revision-prop.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_revision_prop($fs, int $revnum, string $propname): string {}

	/**
	 * リポジトリのルートの指定したバージョンのハンドルを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>リポジトリのルートの指定したバージョンのハンドルを取得します。</p>
	 * @param resource $fs
	 * @param int $revnum
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-fs-revision-root.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_revision_root($fs, int $revnum) {}

	/**
	 * トランザクションのルートを作成して返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>トランザクションのルートを作成して返します。</p>
	 * @param resource $txn
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-fs-txn-root.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_txn_root($txn) {}

	/**
	 * ファイルシステム内で一番若いリビジョン番号を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>ファイルシステム内で一番若いリビジョン番号を返します。</p>
	 * @param resource $fs
	 * @return int
	 * @link https://php.net/manual/ja/function.svn-fs-youngest-rev.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_youngest_rev($fs): int {}

	/**
	 * バージョン管理されていないパスをリポジトリにインポートする
	 * <p>バージョン管理されていないパス <code>path</code> を、 <code>url</code> で指定したリポジトリにコミットします。 <code>path</code> がディレクトリで <code>nonrecursive</code> が <b><code>FALSE</code></b> の場合は、 再帰的にインポートします。</p>
	 * @param string $path <p>インポートするファイルあるいはディレクトリのパス。</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param string $url <p>インポート先のリポジトリの URL。</p>
	 * @param bool $nonrecursive <p>ディレクトリを再帰処理するかどうか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-import.php
	 * @see svn_add()
	 * @since PECL svn >= 0.2.0
	 */
	function svn_import(string $path, string $url, bool $nonrecursive): bool {}

	/**
	 * 指定したリポジトリ URL のコミットログメッセージを返す
	 * <p><b>svn_log()</b> は、指定したリビジョン URL <code>repos_url</code> の中身の完全な履歴を返します。 <code>start_revision</code> を指定した場合は、そのリビジョンの履歴を返します。 この関数は、<b><code>svn log --verbose -r $start_revision $repos_url</code></b> と同等です。</p>
	 * @param string $repos_url <p>履歴を取得したいアイテムのリポジトリ URL。</p>
	 * @param int $start_revision <p>ログを取得したい最初のリビジョン番号。直近のリビジョンからのログを取得する場合は <b><code>SVN_REVISION_HEAD</code></b> を使用します。</p>
	 * @param int $end_revision <p>ログを取得したい最後のリビジョン番号。デフォルトは、 <code>start_revision</code> を指定した場合はそれと同じで 指定しなかった場合は <b><code>SVN_REVISION_INITIAL</code></b> となります。</p>
	 * @param int $limit <p>取得したいログの数。</p>
	 * @param int $flags <p><b><code>SVN_OMIT_MESSAGES</code></b>、 <b><code>SVN_DISCOVER_CHANGED_PATHS</code></b> および <b><code>SVN_STOP_ON_COPY</code></b> の任意の組み合わせ。</p>
	 * @return array <p>成功した場合は、この関数は次のような構造の配列を返します。</p>  <pre>[0] =&gt; Array (最新のリポジトリから順に並びます) ( [rev] =&gt; リビジョン番号 [author] =&gt; コミットした人の名前 [msg] =&gt; ログメッセージ [date] =&gt; ISO 8601 形式、つまり date('c') と同じ形式の日付文字列 [paths] =&gt; Array (変更したファイルについての説明) ( [0] =&gt; Array ( [action] =&gt; 変更の種類を表す文字 [path] =&gt; 変更されたファイルの絶対パス ) [1] =&gt; ... ) ) [1] =&gt; ...</pre>   <p><b>注意</b>:</p> <p>出力は、常に数値添字の二次元配列となります。 ログメッセージがなかったり、ひとつだけだったりする場合でも同じです。</p> <p>action の値は、 » status の出力の最初の列の内容 のサブセットで、以下のいずれかとなります。</p> <b>アクション</b>   文字 説明     M アイテム/プロパティが変更されました   A アイテムが追加されました   D アイテムが削除されました   R アイテムが置き換えられました   <p>何も変更されていない場合は、空の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-log.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_log(string $repos_url, int $start_revision = NULL, int $end_revision = NULL, int $limit = 0, int $flags = SVN_DISCOVER_CHANGED_PATHS | SVN_STOP_ON_COPY): array {}

	/**
	 * Returns list of directory contents in repository URL, optionally at revision number
	 * <p>This function queries the repository URL and returns a list of files and directories, optionally from a specific revision. This is equivalent to <b><code>svn list $repos_url[@$revision_no]</code></b></p><p><b>注意</b>:</p><p>This function does not work with working copies. <code>repos_url</code> <i>must</i> be a repository URL.</p>
	 * @param string $repos_url
	 * @param int $revision_no
	 * @param bool $recurse <p>Enables recursion.</p>
	 * @param bool $peg
	 * @return array <p>On success, this function returns an array file listing in the format of:</p>  <pre>[0] =&gt; Array ( [created_rev] =&gt; integer revision number of last edit [last_author] =&gt; string author name of last edit [size] =&gt; integer byte file size of file [time] =&gt; string date of last edit in form 'M d H:i' or 'M d Y', depending on how old the file is [time_t] =&gt; integer unix timestamp of last edit [name] =&gt; name of file/directory [type] =&gt; type, can be 'file' or 'dir' ) [1] =&gt; ...</pre>
	 * @link https://php.net/manual/ja/function.svn-ls.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_ls(string $repos_url, int $revision_no = SVN_REVISION_HEAD, bool $recurse = FALSE, bool $peg = FALSE): array {}

	/**
	 * 作業コピーあるいはリポジトリ内にディレクトリを作成する
	 * <p>作業コピーあるいはリポジトリ内にディレクトリを作成します。</p>
	 * @param string $path <p>作業コピーあるいはリポジトリへのパス。</p>
	 * @param string $log_message
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-mkdir.php
	 * @see svn_add()
	 * @since PECL svn >= 0.4.0
	 */
	function svn_mkdir(string $path, string $log_message = NULL): bool {}

	/**
	 * 新しい subversion リポジトリを指定したパスに作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>新しい subversion リポジトリを指定したパスに作成します。</p>
	 * @param string $path
	 * @param array $config
	 * @param array $fsconfig
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-repos-create.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_create(string $path, array $config = NULL, array $fsconfig = NULL) {}

	/**
	 * リポジトリ用に、ファイルシステム上のハンドルを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>リポジトリ用に、ファイルシステム上のハンドルを取得します。</p>
	 * @param resource $repos
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-repos-fs.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_fs($repos) {}

	/**
	 * 新しいトランザクションを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>新しいトランザクションを作成します。</p>
	 * @param resource $repos
	 * @param int $rev
	 * @param string $author
	 * @param string $log_msg
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-repos-fs-begin-txn-for-commit.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_repos_fs_begin_txn_for_commit($repos, int $rev, string $author, string $log_msg) {}

	/**
	 * トランザクションをコミットし、新しいリビジョンを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>トランザクションをコミットし、新しいリビジョンを返します。</p>
	 * @param resource $txn
	 * @return int
	 * @link https://php.net/manual/ja/function.svn-repos-fs-commit-txn.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_repos_fs_commit_txn($txn): int {}

	/**
	 * repospath にあるリポジトリのホットコピーを作成し、destpath にコピーする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>repospath にあるリポジトリのホットコピーを作成し、destpath にコピーします。</p>
	 * @param string $repospath
	 * @param string $destpath
	 * @param bool $cleanlogs
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-repos-hotcopy.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_hotcopy(string $repospath, string $destpath, bool $cleanlogs): bool {}

	/**
	 * Open a shared lock on a repository
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>Open a shared lock on a repository.</p>
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/ja/function.svn-repos-open.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_open(string $path) {}

	/**
	 * Run recovery procedures on the repository located at path
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>Run recovery procedures on the repository located at path.</p>
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/ja/function.svn-repos-recover.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_recover(string $path): bool {}

	/**
	 * Revert changes to the working copy
	 * <p>Revert any local changes to the path in a working copy.</p>
	 * @param string $path <p>The path to the working repository.</p>
	 * @param bool $recursive <p>Optionally make recursive changes.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.svn-revert.php
	 * @see svn_delete(), svn_export()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_revert(string $path, bool $recursive = FALSE): bool {}

	/**
	 * Returns the status of working copy files and directories
	 * <p>Returns the status of working copy files and directories, giving modifications, additions, deletions and other changes to items in the working copy.</p>
	 * @param string $path <p>Local path to file or directory to retrieve status of.</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param int $flags <p>Any combination of <b><code>Svn::NON_RECURSIVE</code></b>, <b><code>Svn::ALL</code></b> (regardless of modification status), <b><code>Svn::SHOW_UPDATES</code></b> (entries will be added for items that are out-of-date), <b><code>Svn::NO_IGNORE</code></b> (disregard <i>svn:ignore</i> properties when scanning for new files) and <b><code>Svn::IGNORE_EXTERNALS</code></b>.</p>
	 * @return array <p>Returns a numerically indexed array of associative arrays detailing the status of items in the repository:</p>  <pre>Array ( [0] =&gt; Array ( // information on item ) [1] =&gt; ... )</pre>  <p>The information on the item is an associative array that can contain the following keys:</p>  path    String path to file/directory of this entry on local filesystem.    text_status    Status of item's text. とりうる値については 状態に関する定数 を参照ください。    repos_text_status    Status of item's text in repository. Only accurate if <code>update</code> was set to <b><code>TRUE</code></b>. とりうる値については 状態に関する定数 を参照ください。    prop_status    Status of item's properties. とりうる値については 状態に関する定数 を参照ください。    repos_prop_status    Status of item's property in repository. Only accurate if <code>update</code> was set to <b><code>TRUE</code></b>. とりうる値については 状態に関する定数 を参照ください。    locked    Whether or not the item is locked. (Only set if <b><code>TRUE</code></b>.)    copied    Whether or not the item was copied (scheduled for addition with history). (Only set if <b><code>TRUE</code></b>.)    switched    Whether or not the item was switched using the switch command. (Only set if <b><code>TRUE</code></b>)   <p>These keys are only set if the item is versioned:</p>  name    Base name of item in repository.    url    URL of item in repository.    repos    Base URL of repository.    revision    Integer revision of item in working copy.    kind    Type of item, i.e. file or directory. とりうる値については 型に関する定数 を参照ください。    schedule    Scheduled action for item, i.e. addition or deletion. Constants for these magic numbers are not available, they can be emulated by using:   <code> &lt;&#63;php<br>if (!defined('svn_wc_schedule_normal')) {<br>    define('svn_wc_schedule_normal',  0); // nothing special<br>    define('svn_wc_schedule_add',     1); // item will be added<br>    define('svn_wc_schedule_delete',  2); // item will be deleted<br>    define('svn_wc_schedule_replace', 3); // item will be added and deleted<br>}<br>&#63;&gt;  </code>    deleted    Whether or not the item was deleted, but parent revision lags behind. (Only set if <b><code>TRUE</code></b>.)    absent    Whether or not the item is absent, that is, Subversion knows that there should be something there but there isn't. (Only set if <b><code>TRUE</code></b>.)    incomplete    Whether or not the entries file for a directory is incomplete. (Only set if <b><code>TRUE</code></b>.)    cmt_date    Integer Unix timestamp of last commit date. (Unaffected by <code>update</code>.)    cmt_rev    Integer revision of last commit. (Unaffected by <code>update</code>.)    cmt_author    String author of last commit. (Unaffected by <code>update</code>.)    prop_time    Integer Unix timestamp of last up-to-date time for properties    text_time    Integer Unix timestamp of last up-to-date time for text
	 * @link https://php.net/manual/ja/function.svn-status.php
	 * @see svn_update(), svn_log()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_status(string $path, int $flags = 0): array {}

	/**
	 * Update working copy
	 * <p>Update working copy at <code>path</code> to revision <code>revno</code>. If <code>recurse</code> is true, directories will be recursively updated.</p>
	 * @param string $path <p>Path to local working copy.</p> <p><b>注意</b>: 相対パスは、PHP バイナリが存在するディレクトリを基準として解決されます。呼び出しもとのスクリプトの作業ディレクトリを基準とするには、<code>realpath()</code> あるいは dirname(__FILE__) を使用してください。</p>
	 * @param int $revno <p>Revision number to update to, default is <b><code>SVN_REVISION_HEAD</code></b>.</p>
	 * @param bool $recurse <p>Whether or not to recursively update directories.</p>
	 * @return int <p>Returns new revision number on success, returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.svn-update.php
	 * @see svn_checkout(), svn_commit()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_update(string $path, int $revno = SVN_REVISION_HEAD, bool $recurse = TRUE): int {}

	/**
	 * SSL 証明書の検証エラーを無視するカスタムプロパティ。
	 */
	define('PHP_SVN_AUTH_PARAM_IGNORE_SSL_VERIFY_ERRORS', null);

	define('SVN_AUTH_PARAM_CONFIG', null);

	define('SVN_AUTH_PARAM_CONFIG_DIR', null);

	/**
	 * ベーシック認証で使用するデフォルトのパスワードを表すプロパティ。
	 */
	define('SVN_AUTH_PARAM_DEFAULT_PASSWORD', null);

	/**
	 * ベーシック認証で使用するデフォルトのユーザー名を表すプロパティ。
	 */
	define('SVN_AUTH_PARAM_DEFAULT_USERNAME', null);

	define('SVN_AUTH_PARAM_DONT_STORE_PASSWORDS', null);

	define('SVN_AUTH_PARAM_NO_AUTH_CACHE', null);

	define('SVN_AUTH_PARAM_NON_INTERACTIVE', null);

	define('SVN_AUTH_PARAM_SERVER_GROUP', null);

	define('SVN_AUTH_PARAM_SSL_SERVER_CERT_INFO', null);

	define('SVN_AUTH_PARAM_SSL_SERVER_FAILURES', null);

	/**
	 * ファイルシステムの形式を決める設定キー。
	 */
	define('SVN_FS_CONFIG_FS_TYPE', null);

	/**
	 * ファイルシステムは Berkeley-DB です。
	 */
	define('SVN_FS_TYPE_BDB', null);

	/**
	 * ファイルシステムはネイティブのファイルシステムです。
	 */
	define('SVN_FS_TYPE_FSFS', null);

	/**
	 * ディレクトリ。
	 */
	define('SVN_NODE_DIR', null);

	/**
	 * ファイル。
	 */
	define('SVN_NODE_FILE', null);

	/**
	 * 存在しない。
	 */
	define('SVN_NODE_NONE', null);

	/**
	 * Subversion が判別できない何か。
	 */
	define('SVN_NODE_UNKNOWN', null);

	/**
	 * svn:author
	 */
	define('SVN_PROP_REVISION_AUTHOR', null);

	/**
	 * svn:date
	 */
	define('SVN_PROP_REVISION_DATE', null);

	/**
	 * svn:log
	 */
	define('SVN_PROP_REVISION_LOG', null);

	/**
	 * svn:original-date
	 */
	define('SVN_PROP_REVISION_ORIG_DATE', null);

	/**
	 * HEAD リビジョンを指すマジックナンバー (-1)。
	 */
	define('SVN_REVISION_HEAD', null);

	/**
	 * 追加予約されています。
	 */
	define('SVN_WC_STATUS_ADDED', null);

	/**
	 * ローカルでの変更内容がリポジトリでの変更内容と衝突 (conflict) しています。
	 */
	define('SVN_WC_STATUS_CONFLICTED', null);

	/**
	 * 削除予約されています。
	 */
	define('SVN_WC_STATUS_DELETED', null);

	/**
	 * バージョン管理されていないパスで、 svn:externals を使用しています。
	 */
	define('SVN_WC_STATUS_EXTERNAL', null);

	/**
	 * バージョン管理されていないアイテムですが、無視するよう設定されています。
	 */
	define('SVN_WC_STATUS_IGNORED', null);

	/**
	 * ディレクトリのエントリ一覧がありません。
	 */
	define('SVN_WC_STATUS_INCOMPLETE', null);

	/**
	 * ローカルでの変更内容がリポジトリの変更内容とマージされました。
	 */
	define('SVN_WC_STATUS_MERGED', null);

	/**
	 * バージョン管理されているアイテムですが、作業コピー内に存在しません。
	 */
	define('SVN_WC_STATUS_MISSING', null);

	/**
	 * アイテム (の内容あるいはプロパティ) が変更されました。
	 */
	define('SVN_WC_STATUS_MODIFIED', null);

	/**
	 * 状態が存在しません。
	 */
	define('SVN_WC_STATUS_NONE', null);

	/**
	 * アイテムは存在しますが、特に何もない状態です。
	 */
	define('SVN_WC_STATUS_NORMAL', null);

	/**
	 * バージョン管理されていないアイテムが、 バージョン管理下のリソースを邪魔しています。
	 */
	define('SVN_WC_STATUS_OBSTRUCTED', null);

	/**
	 * いったん削除されたあとに再度追加されました。
	 */
	define('SVN_WC_STATUS_REPLACED', null);

	/**
	 * この作業コピー内でバージョン管理されていません。
	 */
	define('SVN_WC_STATUS_UNVERSIONED', null);

}
