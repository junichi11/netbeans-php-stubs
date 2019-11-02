<?php



namespace {

	/**
	 * fd で指定したファイル記述子を閉じる
	 * <p>関数 <b>dio_close()</b> は、ファイル記述子 <code>fd</code> を閉じます。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.dio-close.php
	 * @see dio_open()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_close($fd): void {}

	/**
	 * fd について C ライブラリの fcntl を実行する
	 * <p>関数 <b>dio_fcntl()</b> は、ファイル記述子 <code>fd</code> において <code>cmd</code> で指定された処理を行います。いくつかのコマンドでは、オプションの引数 <code>args</code> の指定が必要となります。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param int $cmd <p>以下の処理のいずれか。</p><ul> <li> <p><b><code>F_SETLK</code></b> - ロックが設定あるいはクリアされます。 ロックが他の誰かに設定されている場合、<b>dio_fcntl()</b> は -1 を返します。</p> </li> <li> <p><b><code>F_SETLKW</code></b> - <b><code>F_SETLK</code></b> と似ていますが、ロックが他の誰かに設定されている場合は <b>dio_fcntl()</b> はそのロックが開放されるまで待ちます。</p> </li> <li> <p><b><code>F_GETLK</code></b> - <b>dio_fcntl()</b> は、他の誰かがロックを妨げる場合、（後述の）連想配列を返します。 妨げるものがない場合、キー "type" は <b><code>F_UNLCK</code></b> に設定されます。</p> </li> <li> <p><b><code>F_DUPFD</code></b> - <code>args</code> 以上で最小のファイル記述子を探し、それを返します。</p> </li> <li> <p><b><code>F_SETFL</code></b> - ファイル記述子のフラグを <code>args</code> で指定した値に設定します。指定できる値は <b><code>O_APPEND</code></b>、<b><code>O_NONBLOCK</code></b> あるいは <b><code>O_ASYNC</code></b> のいずれかです。 <b><code>O_ASYNC</code></b> を使用するには、 PCNTL 拡張モジュールが必要です。</p> </li> </ul>
	 * @param mixed $args <p><code>args</code> は連想配列で、 <code>cmd</code> が <b><code>F_SETLK</code></b> あるいは <b><code>F_SETLLW</code></b> の際に以下のキーを保持します。</p><ul> <li> <p><i>start</i> - ロックを開始するオフセット。</p> </li> <li> <p><i>length</i> - ロックする領域の大きさ。ゼロはファイルの終端までを意味します。</p> </li> <li> <p><i>wenth</i> - l_start の相対位置指定。 <b><code>SEEK_SET</code></b>、 <b><code>SEEK_END</code></b> および <b><code>SEEK_CUR</code></b> のいずれか。</p> </li> <li> <p><i>type</i> - ロックの種類。<b><code>F_RDLCK</code></b>（読み込み ロック）、<b><code>F_WRLCK</code></b>（書き込みロック）あるいは <b><code>F_UNLCK</code></b>（ロック解除）のいずれか。</p> </li> </ul>
	 * @return mixed <p>C ライブラリをコールした結果を返します。</p>
	 * @link https://php.net/manual/ja/function.dio-fcntl.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_fcntl($fd, int $cmd, $args = NULL) {}

	/**
	 * C ライブラリの入出力ストリーム関数が許すよりも低レベルでファイルをオープンする (必要ならファイルを作成する)
	 * <p><b>dio_open()</b> は、ファイルをオープンして そのファイル記述子を返します。</p>
	 * @param string $filename <p>オープンするファイルのパス。</p>
	 * @param int $flags <p><code>flags</code> パラメータには、 以下のフラグの組み合わせを指定します。 この値は、<b><code>O_RDONLY</code></b>、<b><code>O_WRONLY</code></b>、 あるいは <b><code>O_RDWR</code></b> のいずれかでなければなりません。 さらに、このリストからその他の値を組み合わせることもできます。</p><ul> <li> <p><b><code>O_RDONLY</code></b> - 読み込み専用でファイルをオープンします。</p> </li> <li> <p><b><code>O_WRONLY</code></b> - 書き込み専用でファイルをオープンします。</p> </li> <li> <p><b><code>O_RDWR</code></b> - 読み書き両用でファイルをオープンします。</p> </li> <li> <p><b><code>O_CREAT</code></b> - ファイルが存在しなければ 新しいファイルを作成します。</p> </li> <li> <p><b><code>O_EXCL</code></b> - <b><code>O_CREAT</code></b> および <b><code>O_EXCL</code></b> をともに指定すると、 すでにファイルが存在する場合に <b>dio_open()</b> が失敗します。</p> </li> <li> <p><b><code>O_TRUNC</code></b> - すでにファイルが存在し、書き込み アクセス用にオープンされている場合、ファイルの長さをゼロに切り詰めます。</p> </li> <li> <p><b><code>O_APPEND</code></b> - 書き込み時は、ファイルの終端に 追記します。</p> </li> <li> <p><b><code>O_NONBLOCK</code></b> - 非ブロッキングモードを指定します。</p> </li> <li> <p><b><code>O_NOCTTY</code></b> - TTY デバイスファイルをオープンするときに、 オープンしたファイルをプロセスが自動的に制御端末としないようにします。</p> </li> </ul>
	 * @param int $mode <p><code>flags</code> が <b><code>O_CREAT</code></b> を含む場合に、<code>mode</code> でファイルのモード (作成許可) を指定します。<b><code>O_CREAT</code></b> が <code>flags</code> に指定されている場合には <code>mode</code> が必須となり、それ以外の場合は無視されます。</p> <p>ファイルを作成したときに実際に設定されるモードは、プロセスの <i>umask</i> 設定によって変わります。</p>
	 * @return resource <p>ファイル記述子を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dio-open.php
	 * @see dio_close()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_open(string $filename, int $flags, int $mode = 0) {}

	/**
	 * ファイル記述子からバイトデータを読み込む
	 * <p>関数 <b>dio_read()</b> は 記述子 <code>fd</code> で示されるファイルから <code>len</code> バイトを読み込み、それを返します。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param int $len <p>読み込むバイト数。指定されなかった場合は <b>dio_read()</b> は 1K サイズのブロックを読み込みます。</p>
	 * @return string <p><code>fd</code> から読み込んだバイトデータを返します。</p>
	 * @link https://php.net/manual/ja/function.dio-read.php
	 * @see dio_write()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_read($fd, int $len = 1024): string {}

	/**
	 * fd 上で whence から pos に移動する
	 * <p>関数 <b>dio_seek()</b> は、指定されたファイル記述子の ファイル内の位置を変更する際に使用されます。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param int $pos <p>新しい位置。</p>
	 * @param int $whence <p>位置 <code>pos</code> をどのように解釈するかを指示します。</p><ul> <li> <p><b><code>SEEK_SET</code></b>（デフォルト）- <code>pos</code> がファイル先頭からの位置であることを 指定します。</p> </li> <li> <p><b><code>SEEK_CUR</code></b> - <code>pos</code> が現在のファイル位置からの文字数である ことを指定します。このカウントは正にも負にもなりえます。</p> </li> <li> <p><b><code>SEEK_END</code></b> - <code>pos</code> がファイル終端からの文字数であることを 指定します。負の値は、現在のファイルの範囲内の位置を指定します。 正の値は、現在のファイル終端を越えた位置を指定します。ファイル終端を 超える位置を指定して実際にデータを書き込んだ場合、ファイルは その位置までゼロバイトで埋めて拡張されます。</p> </li> </ul>
	 * @return int
	 * @link https://php.net/manual/ja/function.dio-seek.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_seek($fd, int $pos, int $whence = SEEK_SET): int {}

	/**
	 * ファイル記述子 fd に関する stat 情報を取得する
	 * <p><b>dio_stat()</b> は、与えられたファイル記述子に関する 情報を返します。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @return array <p>以下のキーを含む連想配列を返します。</p><ul> <li> <p>"device" - デバイス</p> </li> <li> <p>"inode" - i ノード</p> </li> <li> <p>"mode" - モード</p> </li> <li> <p>"nlink" - ハードリンク数</p> </li> <li> <p>"uid" - ユーザー ID</p> </li> <li> <p>"gid" - グループ ID</p> </li> <li> <p>"device_type" - デバイス型（inode デバイスの場合）</p> </li> <li> <p>"size" - サイズ（バイト数）</p> </li> <li> <p>"blocksize" - ブロック長</p> </li> <li> <p>"blocks" - 割り当てられたブロック数</p> </li> <li> <p>"atime" - 最終アクセス時刻</p> </li> <li> <p>"mtime" - 最終更新時刻</p> </li> <li> <p>"ctime" - 最終変更時刻</p> </li> </ul> エラー時には <b>dio_stat()</b> は <b><code>NULL</code></b> を返します。
	 * @link https://php.net/manual/ja/function.dio-stat.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_stat($fd): array {}

	/**
	 * シリアルポートの端末属性とボーレートを設定する
	 * <p><b>dio_tcsetattr()</b> は、オープンした <code>fd</code> の端末属性とボーレートを指定します。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param array $options <p>現在使用可能なオプションは以下のとおりです。</p><ul> <li> <p>'baud' - ポートのボーレート - とりうる値は 38400,19200,9600,4800,2400,1800, 1200,600,300,200,150,134,110,75 あるいは 50 で、デフォルト値は 9600 。</p> </li> <li> <p>'bits' - データビット - とりうる値は 8,7,6 あるいは 5 で、デフォルト値は 8 。</p> </li> <li> <p>'stop' - ストップビット - とりうる値は 1 あるいは 2 で、デフォルト値は 1 。</p> </li> <li> <p>'parity' - とりうる値は 0,1 あるいは 2 で、デフォルト値は 0 。</p> </li> </ul>
	 * @return bool <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.dio-tcsetattr.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.1.0
	 */
	function dio_tcsetattr($fd, array $options): bool {}

	/**
	 * ファイル記述子 fd をオフセットバイトへ丸める
	 * <p><b>dio_truncate()</b> は、ファイルの大きさを 最大 <code>offset</code> バイトまでに丸めます。</p><p>ファイルがこのサイズより大きかった場合は、残りのデータは失われます。 ファイルがこのサイズより小さかった場合は、ファイルがそのままになるか 拡張されるかは未定義です。後者の場合、拡張された部分のデータはゼロと なります。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param int $offset <p>オフセットのバイト数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dio-truncate.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_truncate($fd, int $offset): bool {}

	/**
	 * オプションで丸め長さを指定してデータを書き込む
	 * <p><b>dio_write()</b> は、<code>data</code> から最大 <code>len</code> バイトを ファイル <code>fd</code> に書き込みます。</p>
	 * @param resource $fd <p><code>dio_open()</code> が返すファイル記述子。</p>
	 * @param string $data <p>書き込むデータ。</p>
	 * @param int $len <p>書き込むデータのバイト長。指定しなかった場合は、データ全体を 指定したファイルに書き込みます。</p>
	 * @return int <p><code>fd</code> に書き込んだバイト数を返します。</p>
	 * @link https://php.net/manual/ja/function.dio-write.php
	 * @see dio_read()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_write($fd, string $data, int $len = 0): int {}

	define('F_DUPFD', null);

	define('F_GETFD', null);

	define('F_GETFL', null);

	define('F_GETLK', null);

	define('F_GETOWN', null);

	define('F_RDLCK', null);

	define('F_SETFL', null);

	define('F_SETLK', null);

	define('F_SETLKW', null);

	define('F_SETOWN', null);

	define('F_UNLCK', null);

	define('F_WRLCK', null);

	define('O_APPEND', null);

	define('O_ASYNC', null);

	define('O_CREAT', null);

	define('O_EXCL', null);

	define('O_NDELAY', null);

	define('O_NOCTTY', null);

	define('O_NONBLOCK', null);

	define('O_RDONLY', null);

	define('O_RDWR', null);

	define('O_SYNC', null);

	define('O_TRUNC', null);

	define('O_WRONLY', null);

	define('S_IRGRP', null);

	define('S_IROTH', null);

	define('S_IRUSR', null);

	define('S_IRWXG', null);

	define('S_IRWXO', null);

	define('S_IRWXU', null);

	define('S_IWGRP', null);

	define('S_IWOTH', null);

	define('S_IWUSR', null);

	define('S_IXGRP', null);

	define('S_IXOTH', null);

	define('S_IXUSR', null);

}
