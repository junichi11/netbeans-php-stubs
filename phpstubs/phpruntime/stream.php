<?php



/**
 * <p>このクラスの子クラスを <code>stream_filter_register()</code> に渡します。</p>
 * @link http://php.net/manual/ja/class.php-user-filter.php
 * @since PHP 5, PHP 7
 */
class php_user_filter {

	/**
	 * @var mixed <p><code>stream_filter_append()</code> で登録するフィルタの名前。</p>
	 * @link http://php.net/manual/ja/class.php-user-filter.php#php-user-filter.props.filtername
	 */
	public $filtername;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.php-user-filter.php#php-user-filter.props.params
	 */
	public $params;

	/**
	 * フィルタを適用するときにコールされる
	 * <p>このメソッドがコールされるのは、アタッチしたストリームとの間で (<code>fread()</code> や <code>fwrite()</code> による) データの読み書きを行ったときです。</p>
	 * @param resource $in <p><code>in</code> は <i>バケット群</i> を指すリソースで、 この中には一つあるいは複数の <i>バケット</i> オブジェクトが含まれています。 このオブジェクトに、フィルタ対象のデータが含まれます。</p>
	 * @param resource $out <p><code>out</code> はもう一つの <i>バケット群</i> を指すリソースで、 変更した内容をここに保存します。</p>
	 * @param int $consumed <p><code>consumed</code> は常に参照渡しとする必要があります。 フィルタで読み込んだり変更したりしたデータの長さをここで加算します。 大半の場合、各 <i>$bucket</i> 上で <i>$bucket-&gt;datalen</i> をコールするたびに <code>consumed</code> を増やすことになります。</p>
	 * @param bool $closing <p>ストリームが終了処理の最中である場合 (つまり、フィルタチェインの最後の処理を行っている場合) に、<code>closing</code> パラメータが <b><code>TRUE</code></b> となります。</p>
	 * @return int <p><b>filter()</b> メソッドは、処理を終えたときに次のいずれかの値を返す必要があります。</p>   返り値 意味     <b><code>PSFS_PASS_ON</code></b>  フィルタの処理が成功し、データが <code>out</code> <i>バケット群</i> に保存されました。    <b><code>PSFS_FEED_ME</code></b>  フィルタの処理は成功しましたが、返すデータはありません。 ストリームあるいは一つ前のフィルタから、さらにデータが必要です。     <b><code>PSFS_ERR_FATAL</code></b> (デフォルト)  フィルタで対処不能なエラーが発生し、処理を続行できません。
	 * @link http://php.net/manual/ja/php-user-filter.filter.php
	 * @since PHP 5, PHP 7
	 */
	public function filter($in, $out, int &$consumed, bool $closing): int {}

	/**
	 * フィルタを閉じるときにコールされる
	 * <p>このメソッドがコールされるのはフィルタを終了する (通常は、同時にストリームも終了する) ときで、<i>flush</i> メソッドよりも <i>後で</i> 実行されます。 <i>onCreate()</i> で何らかのリソースを確保したり初期化したりしていた場合は、ここで破棄することになります。</p>
	 * @return void <p>返り値は無視されます。</p>
	 * @link http://php.net/manual/ja/php-user-filter.onclose.php
	 * @since PHP 5, PHP 7
	 */
	public function onClose(): void {}

	/**
	 * フィルタを作成するときにコールされる
	 * <p>このメソッドがコールされるのは、フィルタクラスのオブジェクトのインスタンスを生成するときです。 他のリソース (バッファなど) を確保したり初期化したりする場合は、このメソッドで行います。</p><p>フィルタのインスタンスを作成して <i>yourfilter-&gt;onCreate()</i> をコールすると、 以下の表に示すさまざまなプロパティが使えるようになります。</p><p></p>
	 * @return bool <p>このメソッドを実装は、成功した場合に <b><code>TRUE</code></b> そして失敗した場合に <b><code>FALSE</code></b> を返す必要があります。</p>
	 * @link http://php.net/manual/ja/php-user-filter.oncreate.php
	 * @since PHP 5, PHP 7
	 */
	public function onCreate(): bool {}
}

/**
 * <p>独自のプロトコルハンドラやストリームを実装し、 (<code>fopen()</code> や <code>fread()</code> などの) 他のファイルシステム関数で使用できるようにします。</p>
 * <p><b>注意</b>:</p>
 * <p>これは、実際のクラスでは<i>ありません</i>。 クラスがどのようにプロトコルを定義すべきかを示す、単なるプロトタイプです。</p>
 * <p><b>注意</b>:</p>
 * <p>ここに示す方法以外でメソッドを実装した場合の挙動は未定義となります。</p>
 * <p>このクラスのインスタンスは、 関連付けられているプロトコルへのストリーム関数からのアクセスがあった時点で初期化されます。</p>
 * @link http://php.net/manual/ja/class.streamwrapper.php
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
class streamWrapper {

	/**
	 * @var resource <p>現在のコンテキスト、 あるいは呼び出し元からコンテキストが渡されていない場合は <b><code>NULL</code></b>。</p> <p><code>stream_context_get_options()</code> を用いてコンテキストをパースします。</p>  <p><b>注意</b>:</p> <p>このプロパティは<i>必ず</i> public とし、 PHP が実際のコンテキストリソースを設定できるようにしなければなりません。</p>
	 * @link http://php.net/manual/ja/class.streamwrapper.php#streamwrapper.props.context
	 */
	public $context;

	/**
	 * 新しいストリームラッパーを作成する
	 * <p>ストリームラッパーをオープンしたときに、 <code>streamWrapper::stream_open()</code> の直前にコールされます。</p>
	 * @return self
	 * @link http://php.net/manual/ja/streamwrapper.construct.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function __construct() {}

	/**
	 * 既存のストリームラッパーを破棄する
	 * <p>ストリームラッパーを閉じるときに、 <code>streamWrapper::stream_flush()</code> の直前に呼び出されます。</p>
	 * @return void
	 * @link http://php.net/manual/ja/streamwrapper.destruct.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function __destruct() {}

	/**
	 * ディレクトリハンドルを閉じる
	 * <p>このメソッドは <code>closedir()</code> に対応してコールされます。</p><p>ディレクトリストリームをオープンして使用している際にロックしたり割り当てたりしたリソースは、 すべて開放しなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.dir-closedir.php
	 * @see closedir()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function dir_closedir(): bool {}

	/**
	 * ディレクトリハンドルをオープンする
	 * <p>このメソッドは、<code>opendir()</code> に対応してコールされます。</p>
	 * @param string $path <p><code>opendir()</code> に渡す URL を指定します。</p>  <p><b>注意</b>:</p> <p><code>parse_url()</code> でこの URL が壊れることがあります。</p>
	 * @param int $options <p>safe_mode (0x04) を強制するか否か。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.dir-opendir.php
	 * @see opendir(), parse_url()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function dir_opendir(string $path, int $options): bool {}

	/**
	 * ディレクトリハンドルからエントリを読み込む
	 * <p>このメソッドは、<code>readdir()</code> に対応してコールされます。</p>
	 * @return string <p>次のファイル名をあらわす文字列、あるいは次のファイルがない場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>返り値は文字列にキャストされます。</p>
	 * @link http://php.net/manual/ja/streamwrapper.dir-readdir.php
	 * @see readdir()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function dir_readdir(): string {}

	/**
	 * ディレクトリハンドルを巻き戻す
	 * <p>このメソッドは、<code>rewinddir()</code> に対応してコールされます。</p><p><code>streamWrapper::dir_readdir()</code> が生成する出力をリセットしなければなりません。 つまり、次に <code>streamWrapper::dir_readdir()</code> をコールすると、<code>streamWrapper::dir_opendir()</code> が返す場所にある最初のエントリを返すようにしなければいけないということです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.dir-rewinddir.php
	 * @see rewinddir()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function dir_rewinddir(): bool {}

	/**
	 * ディレクトリを作成する
	 * <p>このメソッドは、<code>mkdir()</code> に対応してコールされます。</p><p><b>注意</b>:</p><p>適切なエラーメッセージを返すためには、 ラッパーがディレクトリの作成に対応していない場合にはこのメソッドを定義しては <i>いけません</i>。</p>
	 * @param string $path <p>作成したいディレクトリ。</p>
	 * @param int $mode <p><code>mkdir()</code> に渡す値。</p>
	 * @param int $options <p><b><code>STREAM_MKDIR_RECURSIVE</code></b> などの値のビットマスク。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.mkdir.php
	 * @see mkdir()
	 * @since PHP 5, PHP 7
	 */
	public function mkdir(string $path, int $mode, int $options): bool {}

	/**
	 * ファイルあるいはディレクトリの名前を変える
	 * <p>このメソッドは、<code>rename()</code> に対応してコールされます。</p><p><code>path_from</code> を <code>path_to</code> に変更します。</p><p><b>注意</b>:</p><p>適切なエラーメッセージを返すためには、 ラッパーがファイル名の変更に対応していない場合にはこのメソッドを定義しては <i>いけません</i>。</p>
	 * @param string $path_from <p>現在のファイルの URL。</p>
	 * @param string $path_to <p><code>path_from</code> の変更後の URL。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.rename.php
	 * @see rename()
	 * @since PHP 5, PHP 7
	 */
	public function rename(string $path_from, string $path_to): bool {}

	/**
	 * ディレクトリを削除する
	 * <p>このメソッドは、<code>rmdir()</code> に対応してコールされます。</p><p><b>注意</b>:</p><p>適切なエラーメッセージを返すためには、 ラッパーがディレクトリの削除に対応していない場合にはこのメソッドを定義しては <i>いけません</i>。</p>
	 * @param string $path <p>削除したいディレクトリの URL。</p>
	 * @param int $options <p><b><code>STREAM_MKDIR_RECURSIVE</code></b> などの値のビットマスク。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.rmdir.php
	 * @see rmdir()
	 * @since PHP 5, PHP 7
	 */
	public function rmdir(string $path, int $options): bool {}

	/**
	 * 元となるリソースを取得する
	 * <p>このメソッドは、<code>stream_select()</code> に対応してコールされます。</p>
	 * @param int $cast_as <p><code>stream_select()</code> が <b>stream_cast()</b> をコールした場合は <b><code>STREAM_CAST_FOR_SELECT</code></b>、 <b>stream_cast()</b> がそれ以外の用途でコールされた場合は <b><code>STREAM_CAST_AS_STREAM</code></b>。</p>
	 * @return resource <p>ラッパーが使用しているストリームリソース、あるいは <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-cast.php
	 * @see stream_select()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function stream_cast(int $cast_as) {}

	/**
	 * リソースを閉じる
	 * <p>このメソッドは、<code>fclose()</code> に対応してコールされます。</p><p>ラッパーがロックしたり割り当てたりしたリソースは、すべて開放しなければなりません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-close.php
	 * @see fclose()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_close(): void {}

	/**
	 * ファイルポインタが終端にあるかどうかを調べる
	 * <p>このメソッドは、<code>feof()</code> に対応してコールされます。</p>
	 * @return bool <p>読み込み/書き込み位置がストリームの末尾にあってもうそれ以上読み込むデータがない場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-eof.php
	 * @see feof()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_eof(): bool {}

	/**
	 * 出力をフラッシュする
	 * <p>このメソッドがコールされるのは、<code>fflush()</code> への対応をする場合やストリームを閉じる場合です。 フラッシュしていないデータが残っていれば、それを書き出します。</p><p>データをストリームにキャッシュした状態でまだストレージに格納していないのなら、 ここで格納しなければなりません。</p>
	 * @return bool <p>キャッシュデータが正常に格納できた (あるいは格納するデータがなかった) 場合に <b><code>TRUE</code></b>、データを格納できなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-flush.php
	 * @see fflush()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_flush(): bool {}

	/**
	 * ファイルのアドバイザリ・ロック
	 * <p>このメソッドは、<code>flock()</code> に対応してコールされます。また <code>file_put_contents()</code> (<code>flags</code> が <b><code>LOCK_EX</code></b> を含む場合)、 <code>stream_set_blocking()</code> がコールされたときやストリームを閉じるとき (<b><code>LOCK_UN</code></b>) にもコールされます。</p>
	 * @param int $operation <p><code>operation</code> は以下のいずれかとなります。</p><ul> <li>  <b><code>LOCK_SH</code></b> 共有ロック (読み込み) を確保します。  </li> <li>  <b><code>LOCK_EX</code></b> 排他ロック (書き込み) を確保します。  </li> <li>  <b><code>LOCK_UN</code></b> ロック (共有あるいは排他) を開放します。  </li> <li>  <b><code>LOCK_NB</code></b> <code>flock()</code> によるロック中にブロックしない (Windows ではサポートしていません)。  </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-lock.php
	 * @see stream_set_blocking(), flock()
	 * @since PHP 5, PHP 7
	 */
	public function stream_lock(int $operation): bool {}

	/**
	 * ストリームメタデータを変更する
	 * <p>ストリームのメタデータを設定します。ストリーム URL 上で次のいずれかの関数がコールされたときに呼び出されます。</p>
	 * @param string $path <p>メタデータを設定するファイルパスあるいは URL。URL の場合は、:// 区切りの形式でなければならないことに注意しましょう。 それ以外の形式の URL には対応していません。</p>
	 * @param int $option <p>次のいずれかです。</p><ul> <li> <b><code>STREAM_META_TOUCH</code></b> (<code>touch()</code> に反応してコールされる)</li> <li> <b><code>STREAM_META_OWNER_NAME</code></b> (<code>chown()</code> に反応して文字列引数つきでコールされる)</li> <li> <b><code>STREAM_META_OWNER</code></b> (<code>chown()</code> に反応してコールされる)</li> <li> <b><code>STREAM_META_GROUP_NAME</code></b> (<code>chgrp()</code> に反応してコールされる)</li> <li> <b><code>STREAM_META_GROUP</code></b> (<code>chgrp()</code> に反応してコールされる)</li> <li> <b><code>STREAM_META_ACCESS</code></b> (<code>chmod()</code> に反応してコールされる)</li> </ul>
	 * @param mixed $value <p><code>option</code> の値が</p><ul> <li> <b><code>STREAM_META_TOUCH</code></b> の場合は、<code>touch()</code> 関数の二つの引数を含む配列。</li> <li> <b><code>STREAM_META_OWNER_NAME</code></b> あるいは <b><code>PHP_STREAM_META_GROUP_NAME</code></b> の場合は、オーナーの名前を表す文字列。</li> <li> <b><code>STREAM_META_OWNER</code></b> あるいは <b><code>PHP_STREAM_META_GROUP</code></b> の場合は、オーナーを表す整数値。</li> <li> <b><code>STREAM_META_ACCESS</code></b> の場合は、<code>chmod()</code> への引数となる整数値。</li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>option</code> が実装されていない場合は <b><code>FALSE</code></b> を返さなければなりません。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-metadata.php
	 * @see touch(), chmod(), chown(), chgrp()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	public function stream_metadata(string $path, int $option, $value): bool {}

	/**
	 * ファイルあるいは URL をオープンする
	 * <p>このメソッドは、ラッパーが初期化された (たとえば <code>fopen()</code> や <code>file_get_contents()</code>) 直後にコールされます。</p>
	 * @param string $path <p>元の関数に渡す URL を指定します。</p>  <p><b>注意</b>:</p> <p><code>parse_url()</code> でこの URL が壊れることがあります。 :// で区切った URL のみをサポートしていることに注意しましょう。 : や :/ も技術的な面では妥当な URL ですが、サポートしていません。</p>
	 * @param string $mode <p>ファイルをオープンする際のモード。詳細は <code>fopen()</code> を参照ください。</p>  <p><b>注意</b>:</p> <p>指定した <code>path</code> に対して <code>mode</code> が有効かどうかの確認を忘れないようにしましょう。</p>
	 * @param int $options <p>ストリーム API が設定する追加のフラグ。次の値を OR で連結して指定します。</p>   フラグ 説明     <b><code>STREAM_USE_PATH</code></b>  <code>path</code> が相対パスの場合は、 include_path を用いてリソースを探します。    <b><code>STREAM_REPORT_ERRORS</code></b> このフラグが設定されている場合、 ストリームのオープン時のエラーを <code>trigger_error()</code> で報告しなければなりません。フラグが設定されていない場合は、 エラーを一切報告してはいけません。
	 * @param string $opened_path <p><code>path</code> のオープンに成功し、 <b><code>STREAM_USE_PATH</code></b> が <code>options</code> に設定されていた場合、 <code>opened_path</code> には実際にオープンしたファイル/リソース のフルパスを設定しなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-open.php
	 * @see fopen(), parse_url()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_open(string $path, string $mode, int $options, string &$opened_path): bool {}

	/**
	 * ストリームから読み込む
	 * <p>このメソッドは、<code>fread()</code> および <code>fgets()</code> に対応してコールされます。</p><p><b>注意</b>:</p><p>ストリームの読み込み/書き込み位置 (読み込みに成功したバイト数ぶん) の更新を忘れないようにしましょう。</p>
	 * @param int $count <p>現在位置から何バイトぶんのデータを返すか。</p>
	 * @return string <p><code>count</code> バイト未満のデータしか存在しない場合は、 返せる限りのデータを返します。もうデータがない場合は、 <b><code>FALSE</code></b> あるいは空文字列を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-read.php
	 * @see fread(), fgets()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_read(int $count): string {}

	/**
	 * ストリーム内の特定の場所に移動する
	 * <p>このメソッドは、<code>fseek()</code> に対応してコールされます。</p><p>ストリームの読み込み/書き込み位置を、 <code>offset</code> と <code>whence</code> に応じて更新しなければなりません。</p>
	 * @param int $offset <p>移動するストリームオフセット。</p>
	 * @param int $whence <p>使用可能な値</p><ul> <li> <b><code>SEEK_SET</code></b> - <code>offset</code> バイト目の位置に移動する。</li> <li> <b><code>SEEK_CUR</code></b> - 現在位置から <code>offset</code> バイトぶん進める。</li> <li> <b><code>SEEK_END</code></b> - ファイルの終端から <code>offset</code> バイトぶん進める。</li> </ul>
	 * @return bool <p>位置を更新した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-seek.php
	 * @see fseek()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_seek(int $offset, int $whence = SEEK_SET): bool {}

	/**
	 * ストリームのオプションを変更する
	 * <p>このメソッドは、ストリームのオプションを設定する際にコールされます。</p>
	 * @param int $option <p>以下のいずれか。</p><ul> <li> <b><code>STREAM_OPTION_BLOCKING</code></b> (このメソッドは、<code>stream_set_blocking()</code> に対応してコールされます)</li> <li> <b><code>STREAM_OPTION_READ_TIMEOUT</code></b> (このメソッドは、<code>stream_set_timeout()</code> に対応してコールされます)</li> <li> <b><code>STREAM_OPTION_WRITE_BUFFER</code></b> (このメソッドは、<code>stream_set_write_buffer()</code> に対応してコールされます)</li> </ul>
	 * @param int $arg1 <p><code>option</code> の値に応じて、以下の内容となります。</p><ul> <li> <b><code>STREAM_OPTION_BLOCKING</code></b>: 要求されたブロックモード (1 はブロックモード、0 は非ブロックモード)。</li> <li> <b><code>STREAM_OPTION_READ_TIMEOUT</code></b>: タイムアウト秒数。</li> <li> <b><code>STREAM_OPTION_WRITE_BUFFER</code></b>: バッファモード (<b><code>STREAM_BUFFER_NONE</code></b> あるいは <b><code>STREAM_BUFFER_FULL</code></b>)。</li> </ul>
	 * @param int $arg2 <p><code>option</code> の値に応じて、以下の内容となります。</p><ul> <li> <b><code>STREAM_OPTION_BLOCKING</code></b>: このオプションは設定されません。</li> <li> <b><code>STREAM_OPTION_READ_TIMEOUT</code></b>: タイムアウトマイクロ秒数。</li> <li> <b><code>STREAM_OPTION_WRITE_BUFFER</code></b>: 要求されたバッファサイズ。</li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>option</code> が実装されていない場合は <b><code>FALSE</code></b> を返さなければなりません。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-set-option.php
	 * @see stream_set_blocking(), stream_set_timeout(), stream_set_write_buffer()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function stream_set_option(int $option, int $arg1, int $arg2): bool {}

	/**
	 * ファイルリソースについての情報を取得する
	 * <p>このメソッドは、<code>fstat()</code> に対応してコールされます。</p>
	 * @return array <p><code>stat()</code> を参照ください。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-stat.php
	 * @see stat()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_stat(): array {}

	/**
	 * ストリームの現在位置を取得する
	 * <p>このメソッドは、<code>fseek()</code> に対応してコールされ、現在の位置を決定します。</p>
	 * @return int <p>ストリームの現在位置を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-tell.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_tell(): int {}

	/**
	 * ストリームを丸める
	 * <p><code>ftruncate()</code> などによる丸めの際にコールされます。</p>
	 * @param int $new_size <p>新しいサイズ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-truncate.php
	 * @see ftruncate()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	public function stream_truncate(int $new_size): bool {}

	/**
	 * ストリームに書き込む
	 * <p>このメソッドは、<code>fwrite()</code> に対応してコールされます。</p><p><b>注意</b>:</p><p>正常にストリームに書き込めたバイト数ぶんだけ、 ストリームの現在位置を更新することを忘れないようにしましょう。</p>
	 * @param string $data <p>元となるシステムに書き込まれるデータ。</p>  <p><b>注意</b>:</p> <p>元となるシステム上にすべてを書き込むだけの余地がない場合は、 可能な限りのデータを格納します。</p>
	 * @return int <p>正常に格納できたバイト数、あるいは何も格納できなかった場合は 0 を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.stream-write.php
	 * @see fwrite()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function stream_write(string $data): int {}

	/**
	 * ファイルを削除する
	 * <p>このメソッドは、<code>unlink()</code> に対応してコールされます。</p><p><b>注意</b>:</p><p>適切なエラーメッセージを返すためには、 ラッパーがファイルの削除に対応していない場合にはこのメソッドを定義しては <i>いけません</i>。</p>
	 * @param string $path <p>削除したいファイルの URL。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.unlink.php
	 * @see unlink()
	 * @since PHP 5, PHP 7
	 */
	public function unlink(string $path): bool {}

	/**
	 * ファイルについての情報を取得する
	 * <p>このメソッドは、すべての <code>stat()</code> 関連の関数に対応してコールされます。</p>
	 * @param string $path <p>情報を取得したいファイルの URL。 URL の区切り文字は :// でなければならないことに注意しましょう。 それ以外の形式の URL はサポートしていません。</p>
	 * @param int $flags <p>ストリーム API が設定する追加のフラグ。以下の値の OR で組み合わせて使用します。</p>   Flag Description     STREAM_URL_STAT_LINK  他のリソースへのリンクを行うことができるリソース (たとえば HTTP Location: による転送やファイルシステムのシンボリックリンク)。 このフラグを指定すると、リンク先のリソースの情報ではなくリンクそのものの情報のみを返します。 このフラグは、<code>lstat()</code>、 <code>is_link()</code> あるいは <code>filetype()</code> に対応して設定されます。    STREAM_URL_STAT_QUIET  このフラグが設定されると、ラッパーが一切エラーを発生しなくなります。 フラグが設定されていない場合、 パス情報の取得中に発生したエラーは <code>trigger_error()</code> を用いて通知します。
	 * @return array <p><code>stat()</code> が返すのと同じ要素を返さなければなりません。 未知の値、あるいは取得できない値については適切な値 (通常は <b><code>0</code></b>) を設定します。</p>
	 * @link http://php.net/manual/ja/streamwrapper.url-stat.php
	 * @see stat()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	public function url_stat(string $path, int $flags): array {}
}

/**
 * stream_set_blocking() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_set_blocking()</code></p>
 * @param resource $stream <p>ストリーム。</p>
 * @param bool $mode <p><code>mode</code> が <b><code>FALSE</code></b> の時、ストリームは 非ブロックモードに切り替えられ、<b><code>TRUE</code></b> の場合は、 ブロックモードに切り替えられます。このモードの違いは、 <code>fgets()</code> や <code>fread()</code> といった、ストリームからデータを読む関数に影響します。 非ブロックモードにおいては <code>fgets()</code> を呼び出すと どんな場合でもただちに呼び出し元に戻りますが、ブロックモードの場合では、 ストリームがデータを読み出せる状態になるまで待ちつづけます。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.set-socket-blocking.php
 * @since PHP 4, PHP 5
 */
function set_socket_blocking($stream, bool $mode): bool {}

/**
 * bucket を brigade に追加する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $brigade
 * @param object $bucket
 * @return void
 * @link http://php.net/manual/ja/function.stream-bucket-append.php
 * @since PHP 5, PHP 7
 */
function stream_bucket_append($brigade, object $bucket): void {}

/**
 * 操作する brigade から bucket オブジェクトを返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $brigade
 * @return object
 * @link http://php.net/manual/ja/function.stream-bucket-make-writeable.php
 * @since PHP 5, PHP 7
 */
function stream_bucket_make_writeable($brigade): object {}

/**
 * 現在のストリームで使用する新しい bucket を作成する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $stream
 * @param string $buffer
 * @return object
 * @link http://php.net/manual/ja/function.stream-bucket-new.php
 * @since PHP 5, PHP 7
 */
function stream_bucket_new($stream, string $buffer): object {}

/**
 * bucket を brigade の先頭に追加する
 * <p>この関数を呼ぶと、bucket brigade の先頭に bucket を追加できます。一般に、 <code>php_user_filter::filter()</code> から呼ばれます。</p>
 * @param resource $brigade <p><code>brigade</code> は <i>bucket brigade</i> を指すリソースで、ここにはひとつあるいは複数の <i>bucket</i> オブジェクトが含まれます。</p>
 * @param object $bucket <p>bucket オブジェクト。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.stream-bucket-prepend.php
 * @since PHP 5, PHP 7
 */
function stream_bucket_prepend($brigade, object $bucket): void {}

/**
 * ストリームコンテキストを作成する
 * <p><code>options</code> に、 指定されたオプションが予め設定されたストリームコンテキストを作成し、 それを返します。</p>
 * @param array $options <p>次のような形式の連想配列からなる連想配列でなくてはなりません。 <i>$arr['wrapper']['option'] = $value</i> 使用可能はラッパーやオプションの一覧は コンテキストオプション を参照ください。</p> <p>デフォルトは空の配列です。</p>
 * @param array $params <p><i>$arr['parameter'] = $value</i> 形式の連想配列でなくてばなりません。 標準のストリームパラメータについては コンテキストパラメータ を参照ください。</p>
 * @return resource <p>ストリームコンテキストリソースを返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-create.php
 * @see stream_context_set_option()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_context_create(array $options = NULL, array $params = NULL) {}

/**
 * デフォルトのストリームコンテキストを取得する
 * <p>（<code>fopen()</code>、<code>file_get_contents()</code> のような） ファイル操作関数がコンテキストパラメータなしでコールされた場合に使用される デフォルトのストリームコンテキストを返します。デフォルトコンテキストに 関するオプションは、<code>stream_context_create()</code> と同じ 構文で任意に指定することが可能です。</p>
 * @param array $options <code>options</code> は、 <i>$arr['wrapper']['option'] = $value</i> のような形式の、連想配列の連想配列である必要があります。   <p><b>注意</b>:</p> <p>PHP 5.3.0 以降では、<code>stream_context_set_default()</code> 関数でデフォルトのコンテキストを設定することが可能です。</p>
 * @return resource <p>ストリームコンテキストリソースを返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-get-default.php
 * @see stream_context_create()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_context_get_default(array $options = NULL) {}

/**
 * ストリーム / ラッパー / コンテキストに設定されているオプションを取得する
 * <p>指定されたストリームまたはコンテキストに設定されたオプションを配列として返します。</p>
 * @param resource $stream_or_context <p>オプションを取得したいストリームあるいはコンテキスト。</p>
 * @return array <p>オプションを連想配列で返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-get-options.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_context_get_options($stream_or_context): array {}

/**
 * コンテキストのパラメータを取得する
 * <p>パラメータおよびオプションの情報を、ストリームあるいはコンテキストから取得します。</p>
 * @param resource $stream_or_context <p>ストリームリソースあるいは コンテキストリソース。</p>
 * @return array <p>すべてのコンテキストオプションおよびパラメータを含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-get-params.php
 * @see stream_context_set_option(), stream_context_set_params()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function stream_context_get_params($stream_or_context): array {}

/**
 * デフォルトのストリームコンテキストを設定する
 * <p>(<code>fopen()</code>、<code>file_get_contents()</code> のような) ファイル操作関数がコンテキストパラメータなしでコールされた場合に使用される デフォルトのストリームコンテキストを設定します。 <code>stream_context_create()</code> と同じ構文が使用できます。</p>
 * @param array $options <p>デフォルトコンテキストに設定するオプション。</p>  <p><b>注意</b>:</p> <p><code>options</code> は、 <i>$arr['wrapper']['option'] = $value</i> のような形式の、連想配列の連想配列である必要があります。</p>
 * @return resource <p>デフォルトのストリームコンテキストを返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-set-default.php
 * @see stream_context_create(), stream_context_get_default()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function stream_context_set_default(array $options) {}

/**
 * ストリーム / ラッパー / コンテキストのオプションを設定する
 * <p>指定されたストリームまたはコンテキストのオプションを設定します。 <code>value</code> の内容が <code>wrapper</code> に対する <code>option</code> として設定されます。</p>
 * @param resource $stream_or_context <p>オプションを適用したいストリームあるいはコンテキストリソース。</p>
 * @param string $wrapper
 * @param string $option
 * @param mixed $value
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-set-option.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_context_set_option($stream_or_context, string $wrapper, string $option, $value): bool {}

/**
 * ストリーム / ラッパー / コンテキストのパラメータを設定する
 * <p>指定したコンテキストのパラメータを設定します。</p>
 * @param resource $stream_or_context <p>パラメータを適用したいストリームあるいはコンテキスト。</p>
 * @param array $params <p>設定するパラメータ。</p>  <p><b>注意</b>:</p> <p><code>params</code> は、次のような形式の連想配列でなくてはなりません: <i>$params['paramname'] = "paramvalue";</i></p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-context-set-params.php
 * @see stream_notification_callback()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_context_set_params($stream_or_context, array $params): bool {}

/**
 * データをあるストリームから別のストリームにコピーする
 * <p>現在の位置（あるいはもし指定されていれば <code>offset</code> の位置）から最大 <code>maxlength</code> バイトのデータを <code>source</code> から <code>dest</code> にコピーします。もし <code>maxlength</code> が指定されていない 場合は、<code>source</code> にある残りすべてのデータが コピーされます。</p>
 * @param resource $source <p>コピー元のストリーム。</p>
 * @param resource $dest <p>コピー先のストリーム。</p>
 * @param int $maxlength <p>コピーする最大バイト数。</p>
 * @param int $offset <p>コピーを開始する位置。</p>
 * @return int <p>コピーされたバイト数を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-copy-to-stream.php
 * @see copy()
 * @since PHP 5, PHP 7
 */
function stream_copy_to_stream($source, $dest, int $maxlength = -1, int $offset = 0): int {}

/**
 * ストリームにフィルタを付加する
 * <p><code>filtername</code> で指定されたフィルタを、 <code>stream</code> に付加されているフィルタのリストに加えます。</p>
 * @param resource $stream <p>対象となるストリーム。</p>
 * @param string $filtername <p>フィルタ名。</p>
 * @param int $read_write <p>デフォルトでは、 <b>stream_filter_append()</b> は ストリームが読み込み用に開かれている場合は (つまり、オープンモードが <i>r</i> あるいは <i>+</i> を伴う場合は)、 フィルタを <i>リードフィルタチェイン</i> に追加し、 ストリームが書き出し用に開かれている場合は(つまり、オープンモードが <i>w</i> か <i>a</i>か、あるいは<i>+</i> を伴う場合は)、 <i>ライトフィルターチェィン</i>にも追加します。 <b><code>STREAM_FILTER_READ</code></b>・ <b><code>STREAM_FILTER_WRITE</code></b>・ <b><code>STREAM_FILTER_ALL</code></b> を <code>read_write</code>パラメータに渡すことで、この挙動を変えることができます。</p>
 * @param mixed $params <p>このフィルタは、指定された <code>params</code> と共に、 リストの<i>末尾</i>に追加され、ストリームに対する操作の中で最後に呼び出されます。 フィルタをリストの先頭に加えたいときは、<code>stream_filter_prepend()</code> を使ってください。</p>
 * @return resource <p>成功した場合にリソース、失敗した場合に <b><code>FALSE</code></b> を返します。 このリソースは、<code>stream_filter_remove()</code> をコールする際にこのフィルタインスタンスを参照するために使用可能です。</p><p><b><code>FALSE</code></b> が返されるのは、<code>stream</code> がリソースではない場合や <code>filtername</code> が見つからない場合です。</p>
 * @link http://php.net/manual/ja/function.stream-filter-append.php
 * @see stream_filter_register(), stream_filter_prepend(), stream_get_filters()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_filter_append($stream, string $filtername, int $read_write = NULL, $params = NULL) {}

/**
 * フィルタをストリームに付加する
 * <p><code>filtername</code> で指定されたフィルタを、 <code>stream</code> に付加されているフィルタのリストに加えます。</p>
 * @param resource $stream <p>対象となるストリーム。</p>
 * @param string $filtername <p>フィルタ名。</p>
 * @param int $read_write <p>デフォルトでは、 <b>stream_filter_prepend()</b> は ストリームが読み込み用に開かれている場合は (つまり、オープンモードが <i>r</i> あるいは <i>+</i> を伴う場合は)、 フィルタを <i>リードフィルタチェイン</i> に追加し、 ストリームが書き出し用に開かれている場合は(つまり、オープンモードが <i>w</i> か <i>a</i>か、あるいは<i>+</i> を伴う場合は)、 <i>ライトフィルターチェィン</i>にも追加します。 <b><code>STREAM_FILTER_READ</code></b>・ <b><code>STREAM_FILTER_WRITE</code></b>・ <b><code>STREAM_FILTER_ALL</code></b> を <code>read_write</code>パラメータに渡すことで、この挙動を変えることができます。 このパラメータを使った例については、 <code>stream_filter_append()</code> を参照ください。</p>
 * @param mixed $params <p>このフィルタは、指定された <code>params</code> と共に、 リストの<i>先頭</i>に追加され、ストリームに対する操作の中で最初に呼び出されます。 フィルタをリストの末尾に加えたいときは、<code>stream_filter_append()</code> を使ってください。</p>
 * @return resource <p>成功した場合にリソース、失敗した場合に <b><code>FALSE</code></b> を返します。 このリソースは、<code>stream_filter_remove()</code> をコールする際にこのフィルタインスタンスを参照するために使用可能です。</p><p><b><code>FALSE</code></b> が返されるのは、<code>stream</code> がリソースではない場合や <code>filtername</code> が見つからない場合です。</p>
 * @link http://php.net/manual/ja/function.stream-filter-prepend.php
 * @see stream_filter_register(), stream_filter_append()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_filter_prepend($stream, string $filtername, int $read_write = NULL, $params = NULL) {}

/**
 * ユーザー定義のストリームフィルタを登録する
 * <p><b>stream_filter_register()</b> は、<code>fopen()</code> や <code>fread()</code> などのファイルシステムの関数で利用可能な 登録されているどの種類のストリームとも一緒に使うことのできる カスタムフィルタを登録します。</p>
 * @param string $filtername <p>登録するフィルタ名。</p>
 * @param string $classname <p>フィルタを実装するには、まず、php_user_filter を継承したクラスのメンバ関数を実装しなくてはなりません。 <i>PHP</i> は、書き込みまたは読み出し操作を カスタムフィルタの付加されたストリームに対して行う際に、まず データをそのフィルタに(そして、付加されている他のすべてのフィルタにも) 渡し、指示どおりストリームのデータが変更されるようにします。 メソッドの実装は、php_user_filter の説明の通りにしなければなりません。 さもないと、定義されていない動作をします。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><b>stream_filter_register()</b> は、 指定された <code>filtername</code> がすでに定義されている場合、 <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-filter-register.php
 * @see stream_wrapper_register(), stream_filter_append(), stream_filter_prepend()
 * @since PHP 5, PHP 7
 */
function stream_filter_register(string $filtername, string $classname): bool {}

/**
 * ストリームからフィルタを取り除く
 * <p>事前に <code>stream_filter_prepend()</code> あるいは <code>stream_filter_append()</code> でストリームに追加した フィルタを削除します。フィルタの内部バッファに残っているデータは 削除前にフラッシュされ、次のフィルタに渡されます。</p>
 * @param resource $stream_filter <p>削除するストリームフィルタ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-filter-remove.php
 * @see stream_filter_register(), stream_filter_append(), stream_filter_prepend()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_filter_remove($stream_filter): bool {}

/**
 * 残りのストリームを文字列に読み込む
 * <p><code>file_get_contents()</code> と似ていますが、 <b>stream_get_contents()</b> は既にオープンしている ストリームリソースに対して操作を行います。そして、指定した <code>offset</code> から始まる最大 <code>maxlength</code> バイトのデータを取得して文字列に 保存します。</p>
 * @param resource $handle <p>ストリームリソース（例: <code>fopen()</code> の返す値）。</p>
 * @param int $maxlength <p>読み込む最大バイト数。デフォルトは -1 （バッファの残りのデータをすべて読み込む）。</p>
 * @param int $offset <p>読み込みを開始する前に移動する位置。負の数を指定した場合は移動が発生せず、 現在位置から読み込みを開始します。</p>
 * @return string <p>文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-get-contents.php
 * @see fgets(), fread(), fpassthru()
 * @since PHP 5, PHP 7
 */
function stream_get_contents($handle, int $maxlength = -1, int $offset = -1): string {}

/**
 * 登録されているフィルタのリストを取得する
 * <p>実行中のシステムに登録されているフィルタの一覧を取得します。</p>
 * @return array <p>使用可能なすべてのストリームフィルタの名前を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.stream-get-filters.php
 * @see stream_filter_register(), stream_get_wrappers()
 * @since PHP 5, PHP 7
 */
function stream_get_filters(): array {}

/**
 * 指定されたデリミタの位置までのデータを一行分としてストリームから読み込む
 * <p>指定したハンドルから一行取得します。</p><p>読み込みは、<code>length</code> バイト読まれたか、 <code>ending</code> で指定された文字列がストリームに見つかった か (この文字列は返値に <i>含まれません</i>)、あるいは EOF に達したとき、のうち一番最初に遭遇したところで停止します。</p><p>この関数は <code>fgets()</code> とほとんど同一ですが、 \n や \r 、\r\n といった一般的な文字列以外を行末を示すデリミタ として指定できる点で、またデリミタ自体を返値に <i>含まない</i> 点で異なります。</p>
 * @param resource $handle <p>有効なファイルハンドル。</p>
 * @param int $length <p>ハンドルから読み込むバイト数。</p>
 * @param string $ending <p>オプションのデリミタ文字列。</p>
 * @return string <p>最大 <code>length</code> バイトの、 <code>handle</code> で指定されたリソースから読み込んだデータを返します。</p><p>エラーが発生した際には、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-get-line.php
 * @see fread(), fgets(), fgetc()
 * @since PHP 5, PHP 7
 */
function stream_get_line($handle, int $length, string $ending = NULL): string {}

/**
 * ヘッダーあるいはメタデータをストリームまたはファイルポインタから取得する
 * <p>既存の <code>stream</code> に関する情報を返します。</p>
 * @param resource $stream <p>ストリームは <code>fopen()</code> か、 <code>fsockopen()</code> か、<code>pfsockopen()</code> で 作成されたいずれのものも指定できます。</p>
 * @return array <p>結果の配列は次のような項目を含みます。</p><ul> <li> <p><i>timed_out</i> (bool) - 最後に <code>fread()</code> または <code>fgets()</code> でデータを待っている時にタイムアウトした場合 <b><code>TRUE</code></b> を返します。</p> </li> <li> <p><i>blocked</i> (bool) - ストリームがブロック I/O モードの場合に <b><code>TRUE</code></b> となります。 <code>stream_set_blocking()</code> を参照ください。</p> </li> <li> <p><i>eof</i> (bool) - ストリームが EOF に 達した時 <b><code>TRUE</code></b> となります。 ストリームがソケットベースの場合、このメンバーは、 たとえ <i>unread_bytes</i> が 0 でなくても <b><code>TRUE</code></b> になる場合があることに注意してください。 まだデータがあるかどうかを調べるには、このパラメータではなく、 <code>feof()</code> を使ってください。</p> </li> <li> <p><i>unread_bytes</i> (int) - PHP の 内部バッファにあるデータのバイト数。</p> <p><b>注意</b>:  スクリプト中でこの値を使用してはいけません。 </p> </li> <li> <p><i>stream_type</i> (string) - ストリームの下層にある実装を表すラベル</p> </li> <li> <p><i>wrapper_type</i> (string) - ストリームを覆うプロトコルラッパーを表すラベル。 ラッパーについては サポートするプロトコル/ラッパー を参照ください。</p> </li> <li> <p><i>wrapper_data</i> (mixed) - ストリームに付随しているラッパーの固有のデータ。 ラッパーとその固有の情報については、サポートするプロトコル/ラッパー を参照ください。</p> </li> <li> <p><i>mode</i> (string) - このストリームに要求される アクセスモード（fopen() リファレンスの表 1 を参照ください）。</p> </li> <li> <p><i>seekable</i> (bool) - 現在のストリーム内で 移動が可能かどうか。</p> </li> <li> <p><i>uri</i> (string) - このストリームに関連付けられた URI / ファイル名。</p> </li> </ul>
 * @link http://php.net/manual/ja/function.stream-get-meta-data.php
 * @see get_headers()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_get_meta_data($stream): array {}

/**
 * 登録されたソケットのトランスポートの一覧を取得する
 * <p>スクリプトを走らせているシステムにおいて利用可能なソケットのトランスポートのリストを配列として返します。</p>
 * @return array <p>ソケットのトランスポート名の配列を返します。</p>
 * @link http://php.net/manual/ja/function.stream-get-transports.php
 * @see stream_get_filters(), stream_get_wrappers()
 * @since PHP 5, PHP 7
 */
function stream_get_transports(): array {}

/**
 * 登録されているストリームのラッパーのリストを取得する
 * <p>実行中のシステムで使用可能な、登録済みのストリームの一覧を取得します。</p>
 * @return array <p>スクリプトを走らせているシステム上で使うことのできるすべてのストリーム ラッパーの名前を配列の形で返します。</p>
 * @link http://php.net/manual/ja/function.stream-get-wrappers.php
 * @see stream_wrapper_register()
 * @since PHP 5, PHP 7
 */
function stream_get_wrappers(): array {}

/**
 * ローカルストリームかどうかを調べる
 * <p>ストリームあるいは URL が、ローカルのものであるかどうかを調べます。</p>
 * @param mixed $stream_or_url <p>調べたいストリームリソースあるいは URL。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-is-local.php
 * @since PHP 5 >= 5.2.4, PHP 7
 */
function stream_is_local($stream_or_url): bool {}

/**
 * Check if a stream is a TTY
 * <p>Determines if stream <code>stream</code> refers to a valid terminal type device. This is a more portable version of <code>posix_isatty()</code>, since it works on Windows systems too.</p>
 * @param resource $stream
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-isatty.php
 * @since PHP 7 >= 7.2.0
 */
function stream_isatty($stream): bool {}

/**
 * notification コンテキストパラメータ用のコールバック関数
 * <p>イベント発生時にコールされる <code>callable</code> 関数です。 notification context parameter が使用します。</p><p><b>注意</b>:</p><p>これは実際の関数では <i>ありません</i>。 コールバック関数がどうあるべきかというプロトタイプだけを示すものです。</p>
 * @param int $notification_code <p><b><code>STREAM_NOTIFY_&#42;</code></b> 通知定数のひとつ。</p>
 * @param int $severity <p><b><code>STREAM_NOTIFY_SEVERITY_&#42;</code></b> 通知定数のひとつ。</p>
 * @param string $message <p>イベントについて説明するメッセージが存在する場合に渡されます。</p>
 * @param int $message_code <p>イベントについて説明するコードが存在する場合に渡されます。</p> <p>この値の意味は、使用するラッパーによって異なります。</p>
 * @param int $bytes_transferred <p>利用可能な場合は <code>bytes_transferred</code> の値が格納されます。</p>
 * @param int $bytes_max <p>利用可能な場合は <code>bytes_max</code> の値が格納されます。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.stream-notification-callback.php
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function stream_notification_callback(int $notification_code, int $severity, string $message, int $message_code, int $bytes_transferred, int $bytes_max): void {}

/**
 * stream_wrapper_register() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_wrapper_register()</code>.</p>
 * @param string $protocol <p>登録したいラッパー名。</p>
 * @param string $classname <p><code>protocol</code> を実装したクラス名。</p>
 * @param int $flags <p><code>protocol</code> が URL プロトコルである場合は <b><code>STREAM_IS_URL</code></b> を設定しなければなりません。 デフォルトは 0 で、ローカルストリームを意味します。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.stream-register-wrapper.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_register_wrapper(string $protocol, string $classname, int $flags = 0): bool {}

/**
 * インクルードパスに対してファイル名を解決する
 * <p>インクルードパスに対して <code>filename</code> を解決します。 <code>fopen()</code>/<code>include</code> と同じルールに従います。</p>
 * @param string $filename <p>解決するファイル名。</p>
 * @return string <p>解決したファイル名を含む文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-resolve-include-path.php
 * @since PHP 5 >= 5.3.2, PHP 7
 */
function stream_resolve_include_path(string $filename): string {}

/**
 * select() システムコールと同等の操作を、 ストリームの配列に対して tv_sec と tv_usec で指定されたタイムアウト時間をもって行う
 * <p><b>stream_select()</b> はストリームの配列を受け取ると、 それらの状態が変化するまで待ちます。機能としては、ストリームに対して 働くという点以外では <code>socket_select()</code> と同一です。</p>
 * @param array $read <p><code>read</code> 配列に列挙されたストリームに対しては、 何らかのデータがそのストリーム内で読み出せる状態にあるかどうか 監視が行われます (より正確にいえば、ブロックしないで読み出せる状態かどうか - 特にストリームが EOF に達したかどうか、です。このとき、 <code>fread()</code> は長さ 0 の文字列を返します)。</p>
 * @param array $write <p><code>write</code> 配列に列挙されたストリームに対しては、 ブロックしないで書き込みができるかどうかの監視が行われます。</p>
 * @param array $except <p><code>except</code> 配列に列挙されたストリームに対しては、 重大な例外（"帯域外の"）データが発生したかどうかの監視が行われます。</p>  <p><b>注意</b>:</p> <p><b>stream_select()</b> の終了時には、 どのストリームの状態が実際に変化したのかが分かるよう、 配列 <code>read</code>、<code>write</code> および <code>except</code> に変更が加えられます。</p>   <b>stream_select()</b> のすべてのパラメータに配列を 渡す必要はありません。代わりに そのままにしておくことも、空の配列を渡すことも、<b><code>NULL</code></b> を渡すことも できます。このとき、それらの変数は<i>参照渡し</i>で渡されるため、 <b>stream_select()</b> から戻った時点で変更されている 可能性があることに注意してください。
 * @param int $tv_sec <p><code>tv_sec</code> と <code>tv_usec</code> は、一体となって、<i>timeout</i> パラメータを表現します。 <code>tv_sec</code> は秒数を指定し、一方 <code>tv_usec</code> はマイクロ秒数を指定します。 <i>timeout</i> は、<b>stream_select()</b> の実行から戻るまでの時間の上限です。 <code>tv_sec</code> および <code>tv_usec</code> の両方に <i>0</i> を指定すると <b>stream_select()</b> はデータを待たずに一瞬で戻ります。 これは現在のストリームの状態を示します。</p> <p><code>tv_sec</code> が <b><code>NULL</code></b> (タイムアウトなし) の場合、 <b>stream_select()</b> はブロックしつづけ、調べている ストリームのひとつでイベントが発生する（あるいはシグナルがシステム コールを中断する）まで終了しません。</p>  <b>警告</b> <p>タイムアウト値に <i>0</i> を指定すると、ストリームの 状態を即時に取得することが可能です。しかし、ループ内でタイムアウト <i>0</i> を指定するのは良い考えではありません。 そうすると大量の CPU 時間を消費してしまいます。</p> <p>タイムアウト値を数秒にするとかなりましになります。しかし、どうしても 他のコードを同時に実行させながらチェックをする必要がある場合には、 少なくとも <i>200000</i> マイクロ秒以上のタイムアウトを 設定するようにしましょう。これであなたのスクリプトの CPU 使用量を 抑えることができます。</p> <p>タイムアウト値は、あくまでも経過時間の最大値であることを覚えておきましょう。 <b>stream_select()</b> は、指定したストリームが使用可能に なるとすぐに結果を返します。</p>
 * @param int $tv_usec <p><code>tv_sec</code> の説明を参照ください。</p>
 * @return int <p>成功した場合 <b>stream_select()</b> は、変更された 配列に何個のストリームリソースが格納されたかを示す数を返します。 もしタイムアウトの時間内に何も規定された事象が起こらなかった場合は 0 になることもあります。エラーの際は <b><code>FALSE</code></b> を返し、警告を発生させます （システムコールが別のシグナルによって中断された場合などに起こりえます）。</p>
 * @link http://php.net/manual/ja/function.stream-select.php
 * @see stream_set_blocking()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int {}

/**
 * ストリームのブロックモードを有効にする / 解除する
 * <p><code>stream</code> のモードをブロックあるいは非ブロックに設定します。</p><p>この関数は、非ブロックモードをサポートするすべてのストリーム (現在は、通常のファイルストリームとソケットストリームのみ) において利用可能です。</p>
 * @param resource $stream <p>ストリーム。</p>
 * @param bool $mode <p><code>mode</code> が <b><code>FALSE</code></b> の時、ストリームは 非ブロックモードに切り替えられ、<b><code>TRUE</code></b> の場合は、 ブロックモードに切り替えられます。このモードの違いは、 <code>fgets()</code> や <code>fread()</code> といった、ストリームからデータを読む関数に影響します。 非ブロックモードにおいては <code>fgets()</code> を呼び出すと どんな場合でもただちに呼び出し元に戻りますが、ブロックモードの場合では、 ストリームがデータを読み出せる状態になるまで待ちつづけます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-set-blocking.php
 * @see stream_select()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_set_blocking($stream, bool $mode): bool {}

/**
 * ストリームのチャンクサイズを設定する
 * <p>ストリームのチャンクサイズを設定します。</p>
 * @param resource $fp <p>対象のストリーム。</p>
 * @param int $chunk_size <p>設定したいチャンクサイズ。</p>
 * @return int <p>成功した場合に、変更前の設定値を返します。</p><p><code>chunk_size</code> が 1 より小さいか、あるいは <b><code>PHP_INT_MAX</code></b> より大きい場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-set-chunk-size.php
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function stream_set_chunk_size($fp, int $chunk_size): int {}

/**
 * 指定したストリームのファイル読み込みバッファリングを有効にする
 * <p>読み込みバッファを設定します。<code>stream_set_write_buffer()</code> と似ていますが、読み込み操作を対象としています。</p>
 * @param resource $stream <p>ファイルポインタ。</p>
 * @param int $buffer <p>バッファのバイト数。 <code>buffer</code> が 0 であれば、読み込み操作はバッファされなくなります。 これにより、<code>fread()</code> による読み込み操作が完了するまでは 他のプロセスが同じ入力ストリームから読み込み操作をできないことが保証されます。</p>
 * @return int <p>成功時に 0 を、要求通りに設定できなかった場合はそれ以外の値を返します。</p>
 * @link http://php.net/manual/ja/function.stream-set-read-buffer.php
 * @see stream_set_write_buffer()
 * @since PHP 5 >= 5.3.3, PHP 7
 */
function stream_set_read_buffer($stream, int $buffer): int {}

/**
 * ストリームにタイムアウトを設定する
 * <p><code>stream</code> にタイムアウトの値を設定します。 この値は、<code>seconds</code> と <code>microseconds</code> の和で表されます。</p><p>ストリームがタイムアウトとなった場合は、 <code>stream_get_meta_data()</code> が返す配列のキー 'timed_out' の値が <b><code>TRUE</code></b> に設定されます。エラーや警告が発生していなくても同様になります。</p>
 * @param resource $stream <p>対象となるストリーム。</p>
 * @param int $seconds <p>設定したいタイムアウトの秒数部分。</p>
 * @param int $microseconds <p>設定したいタイムアウトのマイクロ秒数部分。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-set-timeout.php
 * @see fsockopen(), fopen()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

/**
 * 指定されたストリームのファイル書き込みバッファリングを有効にする
 * <p><code>stream</code> で指定されたファイルポインタに <code>buffer</code> で表されたバイト数分だけ出力バッファを設定します。</p>
 * @param resource $stream <p>ファイルポインタ。</p>
 * @param int $buffer <p>バッファのバイト数。 <code>buffer</code> が 0 であれば、書き込み操作はバッファされなくなります。 これにより、<code>fwrite()</code> による書き込み操作が、他の プロセスが同じ出力ストリームに対して何らかの書き込み操作を行う前に 完了することが保証されます。</p>
 * @return int <p>成功時に 0 を、要求通りに設定できなかった場合はそれ以外の値を返します。</p>
 * @link http://php.net/manual/ja/function.stream-set-write-buffer.php
 * @see fopen(), fwrite()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function stream_set_write_buffer($stream, int $buffer): int {}

/**
 * stream_socket_server() で作られたソケットの接続を受け入れる
 * <p>以前に <code>stream_socket_server()</code> によって作られたソケットの接続を受け入れます。</p>
 * @param resource $server_socket <p>接続元からの接続を受け付けるサーバーソケット。</p>
 * @param float $timeout <p>デフォルトのソケット接続待ちタイムアウトを上書きします。 時間は秒単位で指定します。</p>
 * @param string $peername <p>接続元のクライアントの名前 (アドレス) が含まれていて、 選択したトランスポートで有効であった場合に、それを設定します。</p>  <p><b>注意</b>:</p> <p>後で <code>stream_socket_get_name()</code> を使用して指定することもできます。</p>
 * @return resource <p>受け付けたソケット接続へのストリームを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-accept.php
 * @see stream_socket_server(), stream_socket_get_name(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof()
 * @since PHP 5, PHP 7
 */
function stream_socket_accept($server_socket, float $timeout  = 'ini_get("default_socket_timeout")', string &$peername = NULL) {}

/**
 * インターネットドメインまたは Unix ドメインのソケット接続を開く
 * <p><code>remote_socket</code> で指定された接続先との、 ストリームまたはデータグラム接続を確立します。 作成されるソケットのタイプは、<i>[トランスポート]://[ターゲット]</i> という形式の URL フォーマットによって指定された トランスポートによって決定されます。 TCP や UDP といったインターネットドメインのソケット (AF_INET) には、<code>remote_socket</code> パラメータの <i>ターゲット</i> の部分は、ホスト名または IP アドレスと、 それに続くコロンで区切られたポート番号から構成されていなければなりません。 Unix ドメインのソケットの場合は、<code>ターゲット</code> の部分は、ファイルシステムにおけるソケットのファイルを指定しなくては いけません。</p><p><b>注意</b>:</p><p>ストリームはデフォルトではブロックモードで開かれますが、 <code>stream_set_blocking()</code> を使うことで非ブロックモードに 変更することができます。</p>
 * @param string $remote_socket <p>接続するソケットのアドレス。</p>
 * @param int $errno <p>接続に失敗した場合にシステムレベルのエラー番号が設定されます。</p>
 * @param string $errstr <p>接続に失敗した場合にシステムレベルのエラーメッセージが設定されます。</p>
 * @param float $timeout <p><i>connect()</i> システムコールがタイムアウトとなるまでの秒数。</p><p><b>注意</b>:  このパラメータが適用されるのは、非同期通信を試みていない場合のみです。 </p>  <p><b>注意</b>:</p> <p>ソケット上のデータの読み書きに関してタイムアウトを設定する必要がある場合は、 <code>stream_set_timeout()</code> を使ってください。 <b>stream_socket_client()</b> に渡される <code>timeout</code> は、ソケットの接続時にのみ適用されます。</p>
 * @param int $flags <p>接続設定フラグの任意の組み合わせを指定できるビットフィールドです。 現在、接続設定フラグとして選択できる値は、 <b><code>STREAM_CLIENT_CONNECT</code></b>（デフォルト）、 <b><code>STREAM_CLIENT_ASYNC_CONNECT</code></b> と <b><code>STREAM_CLIENT_PERSISTENT</code></b> のみです。</p>
 * @param resource $context <p><code>stream_context_create()</code> で作成した有効なコンテキストリソース。</p>
 * @return resource <p>成功した場合に、 <code>fgets()</code>, <code>fgetss()</code>, <code>fwrite()</code>, <code>fclose()</code>, <code>feof()</code> といった、ファイル関数と共に使うことのできるストリームリソースを返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-client.php
 * @see stream_socket_server(), stream_set_blocking(), stream_set_timeout(), stream_select(), fgets(), fgetss(), fwrite(), fclose(), feof()
 * @since PHP 5, PHP 7
 */
function stream_socket_client(string $remote_socket, int &$errno = NULL, string &$errstr = NULL, float $timeout  = 'ini_get("default_socket_timeout")', int $flags = STREAM_CLIENT_CONNECT, $context = NULL) {}

/**
 * 接続済みのソケットについて暗号化の on/off を切り替える
 * <p>ストリームの暗号化を有効あるいは無効にします。</p><p>暗号化設定が確立されると、それ以降は <code>enable</code> パラメータに <b><code>TRUE</code></b> あるいは <b><code>FALSE</code></b> を指定することで暗号化の on/off を動的に切り替えられます。</p>
 * @param resource $stream <p>ストリームリソース。</p>
 * @param bool $enable <p>ストリームの暗号化を有効にするか無効にするか。</p>
 * @param int $crypto_type <p>ストリームの暗号化の設定。以下の方法が使用できます。</p><ul> <li><b><code>STREAM_CRYPTO_METHOD_SSLv2_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv3_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv23_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_ANY_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLS_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv2_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv3_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv23_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_ANY_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLS_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_0_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_1_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_2_SERVER</code></b></li> </ul> <p>省略した場合は、ストリームの SSL コンテキストのオプション <i>crypto_method</i> を利用します。</p>
 * @param resource $session_stream <p>ストリームで <code>session_stream</code> からの設定を送信します。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b>、ネゴシエーションに失敗した場合に <b><code>FALSE</code></b>、 十分なデータがないために再試行が必要な場合（非ブロックモード時のみ） に <i>0</i> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-enable-crypto.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_socket_enable_crypto($stream, bool $enable, int $crypto_type = NULL, $session_stream = NULL) {}

/**
 * ローカルまたはリモートのソケットの名前を取得する
 * <p>指定したソケット接続のローカルまたはリモートでの名前を返します。</p>
 * @param resource $handle <p>名前を取得したいソケット。</p>
 * @param bool $want_peer <p><b><code>TRUE</code></b> に設定するとリモートでのソケットの名前を返し、 <b><code>FALSE</code></b> に設定するとローカルでのソケットの名前を返します。</p>
 * @return string <p>ソケットの名前を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-get-name.php
 * @see stream_socket_accept()
 * @since PHP 5, PHP 7
 */
function stream_socket_get_name($handle, bool $want_peer): string {}

/**
 * 接続された、区別できないソケットストリームの組を作成する
 * <p><b>stream_socket_pair()</b> は、互いに接続されており区別できない ソケットストリームの組を作成します。この関数は、一般に IPC （Inter-Process Communication: プロセス間通信）で使用します。</p>
 * @param int $domain <p>使用するプロトコルファミリー。<b><code>STREAM_PF_INET</code></b>、 <b><code>STREAM_PF_INET6</code></b> あるいは <b><code>STREAM_PF_UNIX</code></b></p>
 * @param int $type <p>使用する接続の型。 <b><code>STREAM_SOCK_DGRAM</code></b>、 <b><code>STREAM_SOCK_RAW</code></b>、 <b><code>STREAM_SOCK_RDM</code></b>、 <b><code>STREAM_SOCK_SEQPACKET</code></b> あるいは <b><code>STREAM_SOCK_STREAM</code></b></p>
 * @param int $protocol <p>使用するプロトコル。<b><code>STREAM_IPPROTO_ICMP</code></b>、 <b><code>STREAM_IPPROTO_IP</code></b>、 <b><code>STREAM_IPPROTO_RAW</code></b>、 <b><code>STREAM_IPPROTO_TCP</code></b> あるいは <b><code>STREAM_IPPROTO_UDP</code></b></p>
 * @return array <p>成功した場合に 2 つのソケットリソースの配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-pair.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_socket_pair(int $domain, int $type, int $protocol): array {}

/**
 * 接続されているかどうかにかかわらず、ソケットからのデータを受信する
 * <p><b>stream_socket_recvfrom()</b> は、 リモートソケットから最大 <code>length</code> バイトのデータを 受け取ります。</p>
 * @param resource $socket <p>リモートソケット。</p>
 * @param int $length <p><code>socket</code> から受信するバイト数。</p>
 * @param int $flags <p><code>flags</code> は以下の値の組み合わせです。</p> <b><code>flags</code> でとりうる値</b>   <b><code>STREAM_OOB</code></b>  OOB (<i>out-of-band</i>) データを処理します。    <b><code>STREAM_PEEK</code></b>  ソケットからデータを取得しますが、バッファを消費しません。 <code>fread()</code> あるいは <b>stream_socket_recvfrom()</b> を続けてコールした 際には、同じデータが読み込まれます。
 * @param string $address <p><code>address</code> が指定された場合、 そこにはリモートソケットのアドレスが保存されます。</p>
 * @return string <p>読み込んだデータを文字列で返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-recvfrom.php
 * @see stream_socket_sendto(), stream_socket_client(), stream_socket_server()
 * @since PHP 5, PHP 7
 */
function stream_socket_recvfrom($socket, int $length, int $flags = 0, string &$address = NULL): string {}

/**
 * 接続されているかどうかにかかわらず、ソケットにデータを送信する
 * <p><code>data</code> で指定したデータを <code>socket</code> で指定したソケットに送信します。</p>
 * @param resource $socket <p><code>data</code> を送信するソケット。</p>
 * @param string $data <p>送りたいデータ。</p>
 * @param int $flags <p><code>flags</code> は以下の値の組み合わせです。</p> <b><code>flags</code> でとりうる値</b>   <b><code>STREAM_OOB</code></b>  OOB (out-of-band) データを処理します。
 * @param string $address <p><code>address</code> で別のアドレスが指定されていない限り、 ソケットストリームが作成された際のアドレスを使用します。</p> <p>指定する場合は、ドットで 4 つに区切った形式 (あるいは IPv6 形式) でなければなりません。</p>
 * @return int <p>結果コードを整数値で返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-sendto.php
 * @see stream_socket_recvfrom(), stream_socket_client(), stream_socket_server()
 * @since PHP 5, PHP 7
 */
function stream_socket_sendto($socket, string $data, int $flags = 0, string $address = NULL): int {}

/**
 * インターネットドメインまたは Unix ドメインのサーバーソケットを作成する
 * <p><code>local_socket</code> で指定された接続ポイントに、 ストリームまたはデータグラムソケットによる接続を作成します。</p><p>この関数は、ソケットのみを作成します。接続待ちの状態に入るには、 <code>stream_socket_accept()</code> 関数を使います。</p>
 * @param string $local_socket <p>作成されるソケットのタイプは、<i>[トランスポート]://[ターゲット]</i> という形式の URL フォーマットによって指定された トランスポートによって決定されます:</p> <p>TCP や UDP といったインターネットドメインのソケット (<b><code>AF_INET</code></b>) には、<code>remote_socket</code> パラメータの <i>ターゲット</i> の部分は、ホスト名または IP アドレスと、 それに続くコロンで区切られたポート番号から構成されていなければなりません。 Unix ドメインのソケットの場合は、<code>ターゲット</code> の部分は、ファイルシステムにおけるソケットのファイルを指定しなくては いけません。</p> <p>システムの種類によって、Unix ドメインのソケットが利用できない場合があります。 利用できるトランスポートの種類は、<code>stream_get_transports()</code> によって知ることができます。 組み込みのトランスポートのリストは、サポートされるソケットトランスポートのリスト を参照ください。</p>
 * @param int $errno <p>オプションの <code>errno</code> と <code>errstr</code> パラメータが存在するときは、そこにシステムレベルの <i>socket()</i>、<i>bind()</i> および <i>listen()</i> のコールにおいて発生した 実際のシステムレベルのエラーを返します。 もし、<code>errno</code> に返された値が <i>0</i> で、かつ <b><code>FALSE</code></b> が返された場合、<i>bind()</i> コールを行う前にエラーが発生したことを示しており、これは多くの場合 ソケットの初期化に失敗したことを示しています。 <code>errno</code> と <code>errstr</code> パラメータは常に参照渡しとなることに留意してください。</p>
 * @param string $errstr <p><code>errno</code> の説明を参照ください。</p>
 * @param int $flags <p>ソケット作成フラグの任意の組み合わせを指定できるビットフィールドです。</p>  <p><b>注意</b>:</p> <p>UDP ソケットに対しては、<b><code>STREAM_SERVER_BIND</code></b> を <code>flags</code> パラメータとして使用する必要があります。</p>
 * @param resource $context
 * @return resource <p>作成したストリーム、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-server.php
 * @see stream_socket_client(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof()
 * @since PHP 5, PHP 7
 */
function stream_socket_server(string $local_socket, int &$errno = NULL, string &$errstr = NULL, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context = NULL) {}

/**
 * 全二重接続を終了する
 * <p>全二重接続を (一時的あるいはそうでなく) 終了します。</p><p><b>注意</b>:</p><p>関連するバッファの内容は、空になるかもしれないしならないかもしれません。</p>
 * @param resource $stream <p>オープンしているストリーム (たとえば <code>stream_socket_client()</code> でオープンしたものなど)。</p>
 * @param int $how <p>以下の定数のいずれか。<b><code>STREAM_SHUT_RD</code></b> (それ以降の受信を無効にする)、<b><code>STREAM_SHUT_WR</code></b> (それ以降の送信を無効にする) あるいは <b><code>STREAM_SHUT_RDWR</code></b> (それ以降の送受信を無効にする)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-socket-shutdown.php
 * @see fclose()
 * @since PHP 5 >= 5.2.1, PHP 7
 */
function stream_socket_shutdown($stream, int $how): bool {}

/**
 * ストリームがロックをサポートしているかどうかを調べる
 * <p><code>flock()</code> によるロックをそのストリームがサポートしているかどうかを調べます。</p>
 * @param resource $stream <p>調べたいストリーム。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-supports-lock.php
 * @see flock()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function stream_supports_lock($stream): bool {}

/**
 * PHP のクラスとして実装された URL ラッパーを登録する
 * <p>自分で作ったプロトコルハンドラとストリームを実装し、それを <code>fopen()</code> や <code>fread()</code> といったファイルシステムの関数と利用することを可能にします。</p>
 * @param string $protocol <p>登録したいラッパー名。</p>
 * @param string $classname <p><code>protocol</code> を実装したクラス名。</p>
 * @param int $flags <p><code>protocol</code> が URL プロトコルである場合は <b><code>STREAM_IS_URL</code></b> を設定しなければなりません。 デフォルトは 0 で、ローカルストリームを意味します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><b>stream_wrapper_register()</b> は、 <code>protocol</code> というハンドラが既にある場合、 <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-wrapper-register.php
 * @see stream_wrapper_unregister(), stream_wrapper_restore(), stream_get_wrappers()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function stream_wrapper_register(string $protocol, string $classname, int $flags = 0): bool {}

/**
 * 事前に登録を解除された組み込みラッパーを復元する
 * <p><code>stream_wrapper_unregister()</code> で事前に登録を解除した 組み込みラッパーを復元します。</p>
 * @param string $protocol
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-wrapper-restore.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_wrapper_restore(string $protocol): bool {}

/**
 * URL ラッパーの登録を解除する
 * <p>すでに定義されているストリームラッパーを無効にします。ラッパーが無効になった後は、 <code>stream_wrapper_register()</code> を使用してユーザー定義の ラッパーで上書きしたり <code>stream_wrapper_restore()</code> で再度使用可能にしたりすることが可能となります。</p>
 * @param string $protocol
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stream-wrapper-unregister.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function stream_wrapper_unregister(string $protocol): bool {}

