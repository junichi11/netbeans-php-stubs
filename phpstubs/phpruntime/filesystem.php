<?php



/**
 * パスの最後にある名前の部分を返す
 * <p>ファイルあるいはディレクトリへのパスを含む文字列を受け取って、 最後にある名前の部分を返します。</p><p><b>注意</b>:</p><p><b>basename()</b> は、入力文字列を単純にそのまま処理します。 実際のファイルシステムを確認したり "<i>..</i>" のようなパスを気にしたりすることはありません。</p><p><b>basename()</b> はロケールに依存します。 マルチバイト文字を含むパスで正しい結果を得るには、それと一致するロケールを <code>setlocale()</code> で設定しておかなければなりません。</p>
 * @param string $path <p>パス。</p> <p>Windows では、スラッシュ(<i>/</i>) とバックスラッシュ (<i>\</i>) の両方がディレクトリ区切り文字として使われます。 その他の環境ではスラッシュ(<i>/</i>)になります。</p>
 * @param string $suffix <p>名前の部分が <code>suffix</code> で終了する場合、 この部分もカットされます。</p>
 * @return string <p>指定した <code>path</code> のベース名を返します。</p>
 * @link http://php.net/manual/ja/function.basename.php
 * @see dirname(), pathinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function basename(string $path, string $suffix = NULL): string {}

/**
 * ファイルのグループを変更する
 * <p>(名前または番号で指定した)ファイル <code>filename</code> のグループを <code>group</code> に変更しようと試みます。</p><p>スーパーユーザーのみがファイルのグループを任意に変更できます。 その他のユーザーは、ファイルのグループをそのユーザーがメンバーとして 属しているグループに変更できます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @param mixed $group <p>グループ名あるいはグループ番号。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.chgrp.php
 * @see chown(), chmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function chgrp(string $filename, $group): bool {}

/**
 * ファイルのモードを変更する
 * <p>指定されたファイルのモードを <code>mode</code> で指定したものに変更しようと試みます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @param int $mode <p><code>mode</code> は自動的には 8 進数と見なされないので注意してください。 意図した操作を行うには、<code>mode</code> の前にゼロ(0)を付ける必要があります。 "g+w" のような文字列は正常に動作しません。</p> <p></p>  <code> &lt;&#63;php<br>chmod("/somedir/somefile", 755);   // 10 進数; おそらく間違い<br>chmod("/somedir/somefile", "u+rwx,go+rx"); // 文字列; 正しくない<br>chmod("/somedir/somefile", 0755);  // 8 進数; 正しいモードの値<br>&#63;&gt;  </code>   <p><code>mode</code> 引数は 3 つの 8 進法による数値で構成され、 所有者自身、所有者が属するグループ、その他のユーザーの順で アクセス制限を設定します。一つ一つの数字はそのターゲットに対し 許可を与えます。1 は実行権限、2 はファイルに対する書き込み権限、 4 はファイルに対する読み込み権限を与えます。 必要な権限にあわせ数値を加算してください。 許可モードに関する詳細は Unix システムの 「<b>man 1 chmod</b>」や「<b>man 2 chmod</b>」をご覧ください。</p> <p></p>  <code> &lt;&#63;php<br>// 所有者に読み込み、書き込みの権限を与え、その他には何も許可しない。<br>chmod("/somedir/somefile", 0600);<br><br>// 所有者に読み込み、書き込みの権限を与え、その他には読み込みだけ許可する。<br>chmod("/somedir/somefile", 0644);<br><br>// 所有者に全ての権限を与え、その他には読み込みと実行を許可する。<br>chmod("/somedir/somefile", 0755);<br><br>// 所有者に全ての権限を与え、所有者が属するグループに読み込みと実行を許可する。<br>chmod("/somedir/somefile", 0750);<br>&#63;&gt;  </code>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.chmod.php
 * @see chown(), chgrp(), fileperms(), stat()
 * @since PHP 4, PHP 5, PHP 7
 */
function chmod(string $filename, int $mode): bool {}

/**
 * ファイルの所有者を変更する
 * <p>ファイル<code>filename</code>の所有者を(名前または番号で指定した) ユーザー<code>user</code>に変更しようと試みます。 スーパーユーザーのみがファイルの所有者を変更できます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @param mixed $user <p>ユーザー名あるいはユーザー番号。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.chown.php
 * @see chmod(), chgrp()
 * @since PHP 4, PHP 5, PHP 7
 */
function chown(string $filename, $user): bool {}

/**
 * ファイルのステータスのキャッシュをクリアする
 * <p><code>stat</code>や<code>lstat</code>、 またはその他の関数（後述）を使用すると、PHPはパフォーマンス向上のために それらの関数の戻り値をキャッシュします。しかし、ケースによっては、 キャッシュされた情報を消去したい場合もあるでしょう。 例えば、一つのスクリプト上で同じファイルが何度もチェックされ、 そのファイルが変更されたり削除されたりする可能性がある場合、 ステータスキャッシュを消去しなければならないと感じるでしょう。 このようなケースでは、<b>clearstatcache()</b>を使用することで ファイルの情報に関してPHPが持っているキャッシュをクリアすることができます。</p><p>PHP は存在しないファイルについての情報はキャッシュしないことにも 注意してください。もし存在しないファイルに対して <code>file_exists()</code> をコールする場合、ファイルを作成するまで この関数は <b><code>FALSE</code></b> を返します。もしファイルを作成した場合、 たとえファイルを削除したとしても <b><code>TRUE</code></b> を返します。 しかし、<code>unlink()</code> はキャッシュを自動的にクリアします。</p><p><b>注意</b>:</p><p>この関数は特定のファイルに関する情報をキャッシュします。したがって、 同じファイルについて複数回の操作を行いそのファイルに関する情報を キャッシュされないようにするためには、 <b>clearstatcache()</b>をコールするだけです。</p><p>影響を受ける関数を以下に示します。 <code>stat()</code>, <code>lstat()</code>, <code>file_exists()</code>, <code>is_writable()</code>, <code>is_readable()</code>, <code>is_executable()</code>, <code>is_file()</code>, <code>is_dir()</code>, <code>is_link()</code>, <code>filectime()</code>, <code>fileatime()</code>, <code>filemtime()</code>, <code>fileinode()</code>, <code>filegroup()</code>, <code>fileowner()</code>, <code>filesize()</code>, <code>filetype()</code>, および <code>fileperms()</code>.</p>
 * @param bool $clear_realpath_cache <p>realpath キャッシュをクリアするか否か。</p>
 * @param string $filename <p>realpath キャッシュと stat キャッシュを特定のファイル名だけに対してクリアする。 <code>clear_realpath_cache</code> が <b><code>TRUE</code></b> の場合にのみ使用。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.clearstatcache.php
 * @since PHP 4, PHP 5, PHP 7
 */
function clearstatcache(bool $clear_realpath_cache = FALSE, string $filename = NULL): void {}

/**
 * ファイルをコピーする
 * <p>ファイル <code>source</code> を <code>dest</code> にコピーします。</p><p>ファイルを移動したいならば、<code>rename()</code> 関数を使用してください。</p>
 * @param string $source <p>コピー元ファイルへのパス。</p>
 * @param string $dest <p>コピー先のパス。<code>dest</code> が URL の場合、 既存ファイルへの上書きをラッパーがサポートしていない場合にはコピーが失敗します。</p>  <b>警告</b> <p>コピー先のファイルが既に存在する場合、上書きされます。</p>
 * @param resource $context <p><code>stream_context_create()</code> で作成した有効なコンテキストリソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.copy.php
 * @see move_uploaded_file(), rename()
 * @since PHP 4, PHP 5, PHP 7
 */
function copy(string $source, string $dest, $context = NULL): bool {}

/**
 * 親ディレクトリのパスを返す
 * <p>ファイルあるいはディレクトリへのパスを含む文字列を受け取って、 カレントディレクトリから <code>levels</code> レベルさかのぼった親ディレクトリのパスを返します。</p><p><b>注意</b>:</p><p><b>dirname()</b> は、入力文字列を単純にそのまま処理します。 実際のファイルシステムを確認したり "<i>..</i>" のようなパスを気にしたりすることはありません。</p><p><b>dirname()</b> はロケールに依存します。 マルチバイト文字を含むパスで正しい結果を得るには、それと一致するロケールを <code>setlocale()</code> で設定しておかなければなりません。</p>
 * @param string $path <p>パス。</p> <p>Windows では、スラッシュ(<i>/</i>)とバックスラッシュ (<i>\</i>)の両方がディレクトリ区切り文字として使われます。 その他の環境ではスラッシュ(<i>/</i>)になります。</p>
 * @param int $levels <p>親ディレクトリをどこまでさかのぼるか。</p> <p>正の整数でなければいけません。</p>
 * @return string <p>親ディレクトリのパスを返します。 <code>path</code> にスラッシュが無い場合は、 カレントディレクトリを示すドット ('<i>.</i>') を返します。それ以外の場合は、スラッシュ以降の <i>/component</i> 部分を取り除いた <code>path</code> を返します。</p>
 * @link http://php.net/manual/ja/function.dirname.php
 * @see basename(), pathinfo(), realpath()
 * @since PHP 4, PHP 5, PHP 7
 */
function dirname(string $path, int $levels = 1): string {}

/**
 * ファイルシステムあるいはディスクパーティション上で利用可能な領域を返す
 * <p>ディレクトリを指定することにより、 この関数は対応するファイルシステムまたはディスクパーティションで 利用可能なバイト数を返します。</p>
 * @param string $directory <p>ファイルシステムのディレクトリあるいはディスクパーティション。</p>  <p><b>注意</b>:</p> <p>ディレクトリのかわりにファイル名を指定したときの挙動は未定義です。 OS や PHP のバージョンによって結果は異なります。</p>
 * @return float <p>利用可能なバイト数を float 型で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.disk-free-space.php
 * @see disk_total_space()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function disk_free_space(string $directory): float {}

/**
 * ファイルシステムあるいはディスクパーティションの全体サイズを返す
 * <p>ディレクトリを含む文字列を指定してください。この関数は、 ファイルシステムまたはディスクパーティションに対応する全体バイト数を返します。</p>
 * @param string $directory <p>ファイルシステムのディレクトリあるいはディスクパーティション。</p>
 * @return float <p>総バイト数を float 型で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.disk-total-space.php
 * @see disk_free_space()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function disk_total_space(string $directory): float {}

/**
 * disk_free_space() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>disk_free_space()</code>.</p>
 * @param string $directory <p>ファイルシステムのディレクトリあるいはディスクパーティション。</p>  <p><b>注意</b>:</p> <p>ディレクトリのかわりにファイル名を指定したときの挙動は未定義です。 OS や PHP のバージョンによって結果は異なります。</p>
 * @return float
 * @link http://php.net/manual/ja/function.diskfreespace.php
 * @since PHP 4, PHP 5, PHP 7
 */
function diskfreespace(string $directory): float {}

/**
 * オープンされたファイルポインタをクローズする
 * <p><code>handle</code>が指しているファイルをクローズします。</p>
 * @param resource $handle <p>ファイルポインタは有効なものでなければならず、また <code>fopen()</code>または<code>fsockopen()</code> で正常にオープンされたファイルを指している必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fclose.php
 * @see fopen(), fsockopen()
 * @since PHP 4, PHP 5, PHP 7
 */
function fclose($handle): bool {}

/**
 * ファイルポインタがファイル終端に達しているかどうか調べる
 * <p>ファイルポインタがファイル終端に達しているかどうかを調べます。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @return bool <p>ファイルポインタが EOF に達しているかまたはエラー (ソケットタイムアウトを含みます) の場合に <b><code>TRUE</code></b> 、 その他の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.feof.php
 * @since PHP 4, PHP 5, PHP 7
 */
function feof($handle): bool {}

/**
 * 出力をファイルにフラッシュする
 * <p>この関数は、バッファリングされた全ての出力をファイルハンドル <code>handle</code> が指すリソースに強制的に書き込みます。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fflush.php
 * @see clearstatcache(), fwrite()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function fflush($handle): bool {}

/**
 * ファイルポインタから1文字取り出す
 * <p>指定したファイルポインタから 1 文字読み出します。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @return string <p><code>handle</code>が指すファイルポインタから 1 文字読み出し、 その文字からなる文字列を返します。EOF の場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.fgetc.php
 * @see fread(), fopen(), popen(), fsockopen(), fgets()
 * @since PHP 4, PHP 5, PHP 7
 */
function fgetc($handle): string {}

/**
 * ファイルポインタから行を取得し、CSVフィールドを処理する
 * <p><code>fgets()</code> に動作は似ていますが、 <b>fgetcsv()</b> は行を CSV フォーマットのフィールドとして読込み処理を行い、 読み込んだフィールドを含む配列を返すという違いがあります。</p><p><b>注意</b>:</p><p>この関数はロケール設定を考慮します。もし LC_CTYPE が例えば <i>en_US.UTF-8</i> の場合、 1 バイトエンコーディングのファイルは間違って読み込まれるかもしれません。</p>
 * @param resource $handle <p>ファイルポインタは有効なものでなければならず、また <code>fopen()</code>, <code>popen()</code>, もしくは <code>fsockopen()</code> で正常にオープンされたファイルを指している必要があります。</p>
 * @param int $length <p>(行末文字を考慮して) CSV ファイルにある最も長い行よりも大きい必要があります。 そうでない場合は、ひとつの行が <code>length</code> 文字ずつのチャンクに分割されてしまいます。 ただし、フィールド囲いこみ文字の内部では、この分割は発生しません。</p> <p>このパラメータを省略 (もしくは PHP 5.1.0 以降で 0 を設定) すると、 最大行長は制限されません。この場合、若干動作が遅くなります。</p>
 * @param string $delimiter <p>オプションの <code>delimiter</code> パラメータで、フィールドのデリミタ (1 文字のみ) を設定します。</p>
 * @param string $enclosure <p>オプションの <code>enclosure</code> パラメータで、フィールド囲いこみ文字 (1 文字のみ) を設定します。</p>
 * @param string $escape <p>オプションの <code>escape</code> パラメータで、エスケープ文字 (1 文字のみ) を設定します。</p> <p><b>注意</b>:  Usually an <code>enclosure</code> character is escpaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <i>""</i> and <i>\"</i> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
 * @return array <p>読み込んだフィールドの内容を含む数値添字配列を返します。</p> <p><b>注意</b>:</p> <p>CSV ファイルの空行は <code>null</code> フィールドを一つだけ含む配列として返され、 エラーにはなりません。</p> <p><b>注意</b>:  マッキントッシュコンピュータ上で作成されたファイルを読み込む際に、 <i>PHP</i> が行末を認識できないという問題が発生した場合、 実行時の設定オプションauto_detect_line_endings を有効にする必要が生じるかもしれません。</p><p><b>fgetcsv()</b> は、無効な <code>handle</code> を受け取った場合に <b><code>NULL</code></b> を返します。 また、ファイルの終端に達した場合を含めたその他のエラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fgetcsv.php
 * @see str_getcsv(), explode(), file(), pack(), fputcsv()
 * @since PHP 4, PHP 5, PHP 7
 */
function fgetcsv($handle, int $length = 0, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): array {}

/**
 * ファイルポインタから 1 行取得する
 * <p>ファイルポインタから 1 行取得します。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @param int $length <p>読み出しは、<code>length</code> - 1 バイト読み出したか、(返り値に含まれる) 改行文字を検出したか、EOF に達したかのいずれかが起こった時点で終了します。 length が指定されない場合は、行末に達するまで読み続けます。</p>  <p><b>注意</b>:</p> <p>PHP 4.3.0 より前のバージョンでは、もしこのパラメータが省略された場合、 行の長さを 1024 と仮定していました。 もしもファイル内の行の多くが 8KB を超えている場合は、 行の最大長を指定するとスクリプトのリソース効率がよくなります。</p>
 * @return string <p><code>handle</code> で指定したファイルポインタから最大 <code>length</code> - 1 バイト読み出し、 その文字列を返します。ファイルポインタから読み込むデータがもうない場合は <b><code>FALSE</code></b> を返します。</p><p>エラーが起こった場合、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fgets.php
 * @see fgetss(), fread(), fgetc(), stream_get_line(), fopen(), popen(), fsockopen(), stream_set_timeout()
 * @since PHP 4, PHP 5, PHP 7
 */
function fgets($handle, int $length = NULL): string {}

/**
 * ファイルポインタから 1 行取り出し、HTML タグを取り除く
 * <p><code>fgets()</code> と同じですが、 <b>fgetss()</b> は読み込んだテキストから NUL バイト や HTML および PHP のタグを取り除こうとすることが異なります。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @param int $length <p>取得したいデータの長さ。</p>
 * @param string $allowable_tags <p>オプションの 3 番目の引数を使用して、 取り除く必要がないタグを指定することができます。 See <code>strip_tags()</code> for details regarding <code>allowable_tags</code>.</p>
 * @return string <p><code>handle</code> で指定したファイルポインタから最大 <code>length</code> - 1 バイト読み出し、 HTML や PHP コードを取り除いた文字列を返します。</p><p>エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fgetss.php
 * @see fgets(), fopen(), popen(), fsockopen(), strip_tags()
 * @since PHP 4, PHP 5, PHP 7
 */
function fgetss($handle, int $length = NULL, string $allowable_tags = NULL): string {}

/**
 * ファイル全体を読み込んで配列に格納する
 * <p>ファイル全体を配列に読み込みます。</p><p><b>注意</b>:</p><p>ファイルの内容を文字列として返すには <code>file_get_contents()</code> を使用します。</p>
 * @param string $filename <p>ファイルへのパス。</p>  <b>ヒント</b><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param int $flags <p>オプションのパラメータ <code>flags</code> は、以下の定数のうちのひとつ、あるいは複数の組み合わせとなります。</p>  <b><code>FILE_USE_INCLUDE_PATH</code></b>    include_path のファイルを探します。    <b><code>FILE_IGNORE_NEW_LINES</code></b>    配列の各要素の最後に改行文字を追加しません。    <b><code>FILE_SKIP_EMPTY_LINES</code></b>    空行を読み飛ばします。
 * @param resource $context <p><code>stream_context_create()</code> 関数で作成したコンテキストリソース。</p> <p></p><p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return array <p>ファイルを配列に入れて返します。 配列の各要素はファイルの各行に対応します。改行記号はついたままとなります。 失敗すると <b>file()</b> は <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p><b><code>FILE_IGNORE_NEW_LINES</code></b> を指定しない限り、 配列に取り込まれた各行は行末文字も含みます。 行末文字を取り除きたい場合には <code>rtrim()</code> を使用する必要があります。</p> <p><b>注意</b>:  マッキントッシュコンピュータ上で作成されたファイルを読み込む際に、 <i>PHP</i> が行末を認識できないという問題が発生した場合、 実行時の設定オプションauto_detect_line_endings を有効にする必要が生じるかもしれません。</p>
 * @link http://php.net/manual/ja/function.file.php
 * @see readfile(), fopen(), fsockopen(), popen(), file_get_contents(), include, stream_context_create()
 * @since PHP 4, PHP 5, PHP 7
 */
function file(string $filename, int $flags = 0, $context = NULL): array {}

/**
 * ファイルまたはディレクトリが存在するかどうか調べる
 * <p>ファイルあるいはディレクトリが存在するかどうかを調べます。</p>
 * @param string $filename <p>ファイルあるいはディレクトリへのパス。</p> <p>Windows 上でネットワーク共有上のファイルを調べるには、 //computername/share/filename または \\computername\share\filename のように指定してください。</p>
 * @return bool <p><code>filename</code> で指定したファイルまたはディレクトリが存在すれば <b><code>TRUE</code></b> を返し、そうでなければ <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>この関数は、シンボリックリンクの指す先のファイルが存在しない場合は <b><code>FALSE</code></b> を返します。</p>  <b>警告</b> <p>この関数は セーフモード の制限のためファイルにアクセスできない場合 <b><code>FALSE</code></b> を返します。 しかし safe_mode_include_dir で指定されたディレクトリに存在する場合は include することができます。</p>  <p><b>注意</b>:</p> <p>チェックは、実効ユーザーではなく実ユーザーの UID/GID で行います。</p> <p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.file-exists.php
 * @see is_readable(), is_writable(), is_file(), file()
 * @since PHP 4, PHP 5, PHP 7
 */
function file_exists(string $filename): bool {}

/**
 * ファイルの内容を全て文字列に読み込む
 * <p>この関数は <code>file()</code> と似ていますが、 <code>offset</code> で指定した場所から開始し <code>maxlen</code> バイト分だけ ファイルの内容を文字列に読み込むという点が異なります。 失敗した場合、<b>file_get_contents()</b> は <b><code>FALSE</code></b> を返します。</p><p><b>file_get_contents()</b>はファイルの内容を文字列に読み込む 方法として好ましいものです。もしOSがサポートしていれば パフォーマンス向上のためにメモリマッピング技術が使用されます。</p><p><b>注意</b>:</p><p>空白のような特殊な文字を有する URI をオープンする場合には、 <code>urlencode()</code> でその URI をエンコードする必要があります。</p>
 * @param string $filename <p>データを読み込みたいファイルの名前。</p>
 * @param bool $use_include_path <p><b>注意</b>:</p> <p>PHP 5 以降では、定数 <b><code>FILE_USE_INCLUDE_PATH</code></b> を使用して インクルードパス から探すことができます。 This is not possible if strict typing is enabled, since <b><code>FILE_USE_INCLUDE_PATH</code></b> is an <code>int</code>. Use <b><code>TRUE</code></b> instead.</p>
 * @param resource $context <p><code>stream_context_create()</code> で作成したコンテキストリソース。 独自のコンテキストを使用する必要がない場合は、このパラメータに <b><code>NULL</code></b> を指定します。</p>
 * @param int $offset <p>元のストリーム上で、読み込みを開始するオフセット位置。 負のオフセットは、ストリームの末尾からのオフセットと解釈されます。</p> <p>リモートファイルに対するシーク (<code>offset</code> 指定) はサポートしていません。 オフセットが小さい場合はリモートファイルでのシークがうまくいくこともありますが、 これはバッファリングされたストリーム上で動作しているだけのことです。</p>
 * @param int $maxlen <p>読み込むデータの最大バイト数。 デフォルトは、ファイル終端に達するまで読み込みます。 このパラメータは、フィルタが処理した後のストリームに適用されることに注意しましょう。</p>
 * @return string <p>読み込んだデータを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.file-get-contents.php
 * @see file(), fgets(), fread(), readfile(), file_put_contents(), stream_get_contents(), stream_context_create()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function file_get_contents(string $filename, bool $use_include_path = FALSE, $context = NULL, int $offset = 0, int $maxlen = NULL): string {}

/**
 * 文字列をファイルに書き込む
 * <p>この関数は、<code>fopen()</code>、<code>fwrite()</code>、 <code>fclose()</code> を続けてコールしてデータをファイルに書き込むのと等価です。</p><p><code>filename</code> が存在しない場合はファイルを作成します。 存在する場合はそのファイルを上書きします。ただし <b><code>FILE_APPEND</code></b> フラグが設定されている場合は別です。</p>
 * @param string $filename <p>データを書き込むファイルへのパス。</p>
 * @param mixed $data <p>書き込むデータ。文字列, 配列 もしくは ストリーム リソースのいずれかを指定可能です。</p> <p><code>data</code> が ストリーム リソースの場合は、 ストリームのバッファに残っている内容が指定したファイルにコピーされます。 これは、<code>stream_copy_to_stream()</code> の挙動と似ています。</p> <p><code>data</code> に一次元の配列を指定することもできます。この場合は <i>file_put_contents($filename, implode('', $array))</i> と同じ意味になります。</p>
 * @param int $flags <p><code>flags</code> の値は、以下のフラグを組み合わせたものとなります 組み合わせる際には、論理 OR (<i>|</i>) 演算子で連結します。</p> <p></p> <b>使用できるフラグ</b>   フラグ 説明      <b><code>FILE_USE_INCLUDE_PATH</code></b>   <code>filename</code> をインクルードディレクトリから探します。 詳細な情報は include_path を参照ください。     <b><code>FILE_APPEND</code></b>   <code>filename</code> がすでに存在する場合に、 データをファイルに上書きするするのではなく追記します。     <b><code>LOCK_EX</code></b>   書き込み処理中に、ファイルに対する排他ロックを確保します。 つまり、<code>fopen()</code> の呼び出しから <code>fwrite()</code> の呼び出しまでの間に <code>flock()</code> の呼び出しが発生するということです。 これは、モード "x" で <code>fopen()</code> を呼び出すことと同等ではありません。
 * @param resource $context <p><code>stream_context_create()</code> で作成したコンテキストリソース。</p>
 * @return int <p>この関数はファイルに書き込まれたバイト数を返します。 あるいは失敗した場合には <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.file-put-contents.php
 * @see fopen(), fwrite(), file_get_contents(), stream_context_create()
 * @since PHP 5, PHP 7
 */
function file_put_contents(string $filename, $data, int $flags = 0, $context = NULL): int {}

/**
 * ファイルの最終アクセス時刻を取得する
 * <p>指定したファイルの最終アクセス時刻を取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの最終アクセス時刻を返し、失敗した場合に <b><code>FALSE</code></b> を返します。 時間は Unix タイムスタンプとして返されます。</p>
 * @link http://php.net/manual/ja/function.fileatime.php
 * @see filemtime(), fileinode(), date()
 * @since PHP 4, PHP 5, PHP 7
 */
function fileatime(string $filename): int {}

/**
 * ファイルの inode 変更時刻を取得する
 * <p>ファイルの inode 変更時刻を取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの最終更新時刻を返し、失敗した場合に <b><code>FALSE</code></b> を返します。 時間は Unix タイムスタンプとして返されます。</p>
 * @link http://php.net/manual/ja/function.filectime.php
 * @see filemtime()
 * @since PHP 4, PHP 5, PHP 7
 */
function filectime(string $filename): int {}

/**
 * ファイルのグループを取得する
 * <p>ファイルのグループを取得します。返り値は、数値形式のグループ ID です。 グループ名を取得するには <code>posix_getgrgid()</code> を使用します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの所有者のグループ ID を返し、エラーの場合は <b><code>FALSE</code></b> を返します。 グループ ID は数値で返されます。グループ名に変換するには <code>posix_getgrgid()</code> を使用してください。 失敗すると <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filegroup.php
 * @see fileowner(), posix_getgrgid()
 * @since PHP 4, PHP 5, PHP 7
 */
function filegroup(string $filename): int {}

/**
 * ファイルの inode を取得する
 * <p>ファイルの inode を取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの inode 番号を返し、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fileinode.php
 * @see getmyinode(), stat()
 * @since PHP 4, PHP 5, PHP 7
 */
function fileinode(string $filename): int {}

/**
 * ファイルの更新時刻を取得する
 * <p>この関数は、ファイルのブロックデータが書き込まれた時間を返します。 これは、ファイルの内容が変更された際の時間です。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの最終更新時刻を返し、失敗した場合に <b><code>FALSE</code></b> を返します 時間は Unix タイムスタンプとして返されます。 この関数の結果は <code>date()</code> 等で使用できます。</p>
 * @link http://php.net/manual/ja/function.filemtime.php
 * @see filectime(), stat(), touch(), getlastmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function filemtime(string $filename): int {}

/**
 * ファイルの所有者を取得する
 * <p>ファイルの所有者を取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルの所有者のユーザー ID を返し、失敗した場合に <b><code>FALSE</code></b> を返します。 ユーザー ID は数値で返されます。ユーザー名に変換するには <code>posix_getpwuid()</code> を使用してください。</p>
 * @link http://php.net/manual/ja/function.fileowner.php
 * @see filegroup(), stat(), posix_getpwuid()
 * @since PHP 4, PHP 5, PHP 7
 */
function fileowner(string $filename): int {}

/**
 * ファイルのパーミッションを取得する
 * <p>指定したファイルのパーミッションを取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルのパーミッションを数値モードで返します。このモードの下位ビットは <code>chmod()</code> に渡すのと同じ形式です。 しかし、大半のプラットフォームでは、それだけではなく <code>filename</code> のファイル形式に関する情報も含まれます。 以下の例で示すのは、ファイルのパーミッションやファイル形式を POSIX システム (Linux や Mac OS X など) で調べる方法です。</p><p>ローカルファイルの場合、その返り値は C ライブラリ関数 <code>stat()</code> が返す構造体の <i>st_mode</i> メンバーの値となります。 どのビットがセットされるかはプラットフォームによって異なるので、 パーミッション部分以外のビットをパースしたい場合は各プラットフォームのドキュメントを参照することをおすすめします。</p>
 * @link http://php.net/manual/ja/function.fileperms.php
 * @see chmod(), is_readable(), stat()
 * @since PHP 4, PHP 5, PHP 7
 */
function fileperms(string $filename): int {}

/**
 * ファイルのサイズを取得する
 * <p>指定したファイルのサイズを取得します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return int <p>ファイルのサイズを返し、エラーの場合は <b><code>FALSE</code></b> を返します (また <b><code>E_WARNING</code></b> レベルのエラーを発生させます) 。</p><p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.filesize.php
 * @see file_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function filesize(string $filename): int {}

/**
 * ファイルタイプを取得する
 * <p>指定したファイルのタイプを返します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return string <p>ファイルのタイプを返します。返される値は fifo、char、dir、 block、link、file、socket および unknown のいずれかです。</p><p>エラーが発生すると <b><code>FALSE</code></b> を返します。 また <b>filetype()</b> は stat コールに失敗したり、 未知のファイルタイプであったりした場合に <b><code>E_NOTICE</code></b> メッセージを発行します。</p>
 * @link http://php.net/manual/ja/function.filetype.php
 * @see is_dir(), is_file(), is_link(), file_exists(), mime_content_type(), pathinfo(), stat()
 * @since PHP 4, PHP 5, PHP 7
 */
function filetype(string $filename): string {}

/**
 * 汎用のファイルロックを行う
 * <p><b>flock()</b> を使うと、(ほとんどの Unix、そして Windows さえ含む) 事実上すべてのプラットフォームで使用可能な、簡易な読み手/書き手モデルを実現できます。</p><p>PHP 5.3.2 より前のバージョンでは、<code>fclose()</code> でロックの解放も行います (これは、スクリプトが終了した場合にも自動的にコールされます)。</p><p>PHP は、恣意的にファイルをロックする汎用の手段を提供します (これは、アクセスする全プログラムが同一のロックの方法を使用する必要があり、 そうでない場合は動作しないことを意味します)。 デフォルトでは、要求したロックが確保されるまでこの関数はブロックします。 以下で説明する <b><code>LOCK_NB</code></b> オプションでこの挙動を制御することができます。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $operation <p><code>operation</code> は以下のいずれかとなります。</p><ul> <li>  共有ロック(読み手)とするには <b><code>LOCK_SH</code></b> をセットします。  </li> <li>  排他的ロック(書き手)とするには <b><code>LOCK_EX</code></b> をセットします。  </li> <li>  (共有または排他的)ロックを開放するには <b><code>LOCK_UN</code></b> をセットします。  </li> </ul> <p>上の操作のいずれかに <b><code>LOCK_NB</code></b> をビットマスクとして追加すれば、 ロック中に <b>flock()</b> でブロックを行わないことができます。</p>
 * @param int $wouldblock <p>ロックがブロックされた (errno が EWOULDBLOCK となった) 場合に、オプションの 3 番目の引数に 1 が設定されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.flock.php
 * @since PHP 4, PHP 5, PHP 7
 */
function flock($handle, int $operation, int &$wouldblock = NULL): bool {}

/**
 * ファイル名がパターンにマッチするか調べる
 * <p><b>fnmatch()</b>は<code>string</code> で指定された文字列が <code>pattern</code> で指定されたシェルワイルドカードにマッチするかどうかチェックします。</p>
 * @param string $pattern <p>シェルのワイルドカードパターン。</p>
 * @param string $string <p>調べたい文字列。この機能は特にファイル名のマッチに便利ですが、 通常の文字列に関しても使用できます。</p> <p>一般的なユーザーにとって、シェルパターンやあるいは少なくとも <i>'&#63;'</i>と<i>'&#42;'</i>によるワイルドカードのほうが 慣れていると思われます。そのため、 <code>preg_match()</code> の代わりに <b>fnmatch()</b> をフロントエンドの検索表現として使うことは、 プログラマではないユーザーにとってより便利でしょう。</p>
 * @param int $flags <p><code>flags</code> の値は、以下のフラグを 論理 OR (|) 演算子 で連結した任意の組み合わせです。</p> <b> <b>fnmatch()</b> で使えるフラグ </b>   <code>フラグ</code> 説明     <b><code>FNM_NOESCAPE</code></b>  バックスラッシュのエスケープを無効にする。    <b><code>FNM_PATHNAME</code></b>  文字列内のスラッシュは、指定したパターン内のスラッシュにのみマッチする。    <b><code>FNM_PERIOD</code></b>  文字列の先頭のピリオドは、指定したパターン内のピリオドにマッチしなければならない。    <b><code>FNM_CASEFOLD</code></b>  大文字小文字を区別しないマッチ。GNU 拡張の一部。
 * @return bool <p>マッチした場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fnmatch.php
 * @see glob(), preg_match(), sscanf(), printf(), sprintf()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fnmatch(string $pattern, string $string, int $flags = 0): bool {}

/**
 * ファイルまたは URL をオープンする
 * <p><b>fopen()</b> は、<code>filename</code> で指定されたリソースをストリームに結び付けます。</p>
 * @param string $filename <p><code>filename</code> が "スキーム://..." の形式である場合、 それは URL とみなされ、PHP はそのプロトコルのハンドラ (ラッパーともいいます) を探します。 もしもそのプロトコルに対するラッパーが登録されていない場合、 PHP はスクリプトに潜在的な問題があることを示す NOTICE を発行したうえで、 <code>filename</code> を通常のファイルとみなしてオープンすることを試みます。</p> <p>PHP は、<code>filename</code> がローカルのファイルを示しているとみなすと、 そのファイルへのストリームをオープンします。 そのファイルはPHPからアクセスできるものでなければなりません。 ファイルのパーミッションが (パラメータで指定された) アクセスを許可されているかどうか確認する必要があります。 セーフモード または open_basedir を有効にしている場合は更なるアクセス制限が加えられることがあります。</p> <p><code>filename</code> が登録されているプロトコルを示していると PHP が判断し、かつそのプロトコルがネットワーク URL として登録されていれば、 PHP は allow_url_fopen が有効となっているかどうかチェックします。 もしこれがオフになっていると、PHP は warning を発行し fopen は失敗します。</p>  <p><b>注意</b>:</p> <p>サポートされているプロトコルのリストは サポートするプロトコル/ラッパー にあります。 いくつかのプロトコル (<i>wrappers</i>にも関連する) は <i>context</i> かつ/または php.ini のオプションをサポートします。 使用するプロトコルについてセットされるオプションのリストについては、 それぞれのページを見てください (例えば、 php.ini 上の <i>user_agent</i> の値は <i>http</i> ラッパーが使用します)。</p>  <p>Windows 環境では、ファイルパスで用いる全てのバックスラッシュを エスケープするかフォワードスラッシュを使用することに注意してください。</p>  <code> &lt;&#63;php<br>$handle = fopen("c:\\folder\\resource.txt", "r");<br>&#63;&gt;  </code>
 * @param string $mode <p>パラメータ <code>mode</code> は、 そのストリームに要するアクセス形式を指定します。 この指定は、下表のうちのどれかとなります。</p> <b> <b>fopen()</b> で使用可能な <code>mode</code> のリスト </b>   <code>mode</code> 説明     <i>'r'</i>  読み込みのみでオープンします。ファイルポインタをファイルの先頭に置きます。    <i>'r+'</i>  読み込み／書き出し用にオープンします。 ファイルポインタをファイルの先頭に置きます。    <i>'w'</i>  書き出しのみでオープンします。ファイルポインタをファイルの先頭に置き、 ファイルサイズをゼロにします。ファイルが存在しない場合には、 作成を試みます。    <i>'w+'</i>  読み込み／書き出し用でオープンします。 ファイルポインタをファイルの先頭に置き、 ファイルサイズをゼロにします。 ファイルが存在しない場合には、作成を試みます。    <i>'a'</i>  書き出し用のみでオープンします。ファイルポインタをファイルの終端に置きます。 ファイルが存在しない場合には、作成を試みます。 このモードは、<code>fseek()</code> では何の効果もありません。 書き込みは、常に追記となります。    <i>'a+'</i>  読み込み／書き出し用でオープンします。 ファイルポインタをファイルの終端に置きます。 ファイルが存在しない場合には、作成を試みます。 このモードは、<code>fseek()</code> では読み込み位置のみに影響します。 書き込みは、常に追記となります。    <i>'x'</i>  書き込みのみでオープンします。ファイルポインタをファイルの先頭に置きます。 ファイルが既に存在する場合には <b>fopen()</b> は失敗し、 <b><code>E_WARNING</code></b> レベルのエラーを発行します。 ファイルが存在しない場合には新規作成を試みます。 これは <i>open(2)</i> システムコールにおける <i>O_EXCL|O_CREAT</i> フラグの指定と等価です。 このオプションはPHP4.3.2以降でサポートされ、また、 ローカルファイルに対してのみ有効です。    <i>'x+'</i>  読み込み／書き出し用でオープンします。 それ以外のふるまいは <i>'x'</i> と同じです。    <i>'c'</i>  書き込みのみでオープンします。ファイルが存在しない場合には新規作成を試みます。 ファイルが既に存在する場合でもそれを (<i>'w'</i> のように) 切り詰めたりせず、 また (<i>'x'</i> のように) 関数のコールが失敗することもありません。 ファイルポインタをファイルの先頭に置きます。これは、アドバイザリ・ロック (<code>flock()</code> を参照ください) を確保してからファイルを変更したい場合に便利です。 <i>'w'</i> を使うと、ロックを取得する前にファイルを切り詰めてしまいます (もしファイルを切り詰めたいのなら、ロックを要求した後で <code>ftruncate()</code> を使うこともできます)。    <i>'c+'</i>  読み込み／書き出し用でオープンします。 それ以外のふるまいは <i>'c'</i> と同じです。    <i>'e'</i>  オープンされたファイル記述子に close-on-exec フラグを設定します。 POSIX.1-2008 準拠のシステムでコンパイルされた PHP でのみ利用可能です。      <p><b>注意</b>:</p> <p>オペレーティングシステムファミリが異なると行末も異なります。 テキストファイルに書き出し、そこに改行を加えたいとき、 オペレーティングシステムにあわせた正しい改行コードを使用する必要があります。 Unix ベースのシステムでは改行に <i>\n</i> キャラクタを使用します。 Windows ベースのシステムでは <i>\r\n</i> を使用します。 マッキントッシュベースのシステムでは <i>\r</i> を使用します。</p> <p>間違った改行コードでファイルに書き込むと、 他のアプリケーション上でそのファイルを開いた際に変な風に見えてしまいます。</p> <p>Windows上では、<i>\n</i>を<i>\r\n</i>に透過的に変換する text-mode変換フラグ(<i>'t'</i>)が提供されます。 それに対し、<i>'b'</i>を使って強制的にバイナリモードにすることもできます。 その場合データの変換はされません。 このフラグを使用するには、<i>'b'</i> または <i>'t'</i>を <code>mode</code>引数の最後に追加してください。</p> <p>デフォルトの変換モードは SAPI と使用している PHP のバージョンによって異なります。 したがって、互換性の意味から、常に適切なフラグを指定することが推奨されます。 plain-text ファイルを使用する場合には <i>'t'</i> モードを指定すべきであり、 改行に <i>\n</i> を使用すると、 メモ帳のようなアプリケーションで読めることを期待できます。 それ以外のケースでは <i>'b'</i> を使うべきです。</p> <p>バイナリファイルを扱っている際に <i>'b'</i> フラグを指定しなかった場合、 画像ファイルが壊れたり、<i>\r\n</i> キャラクタがおかしくなる等の問題を抱えてしまうでしょう。</p>   <p><b>注意</b>:</p> <p>互換性維持のために、<b>fopen()</b> でファイルをオープンする際は 常に <i>'b'</i> フラグを指定することが強く推奨されます。</p>   <p><b>注意</b>:</p> <p>互換性維持のために、<i>'t'</i> モードを使用または依存しているコードを書き直し、 正しい改行コードと <i>'b'</i> モードを代わりに使用することが、 強く推奨されます。</p>
 * @param bool $use_include_path <p>オプションの３番目の引数<code>use_include_path</code>に'1'又は <b><code>TRUE</code></b> を設定することにより、include_path のファイルの検索も行うこともできます。</p>
 * @param resource $context <p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return resource <p>成功した場合にファイルポインタリソース、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fopen.php
 * @see fclose(), fgets(), fread(), fwrite(), fsockopen(), file(), file_exists(), is_readable(), stream_set_timeout(), popen(), stream_context_create(), umask()
 * @since PHP 4, PHP 5, PHP 7
 */
function fopen(string $filename, string $mode, bool $use_include_path = FALSE, $context = NULL) {}

/**
 * ファイルポインタ上に残っているすべてのデータを出力する
 * <p>与えられたファイルポインタを EOF まで読み、結果を出力バッファに書き出します。</p><p>ファイルに既にデータを書き終えている場合で ファイルポインタをファイルの先頭にリセットするには <code>rewind()</code> をコールする必要があります。</p><p>ファイルを更新したり特定のオフセットを探すのではなく 内容を出力バッファにダンプしたいだけの場合、 <code>readfile()</code> を使用することが可能です。 この場合、<code>fopen()</code> コールは必要ありません。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @return int <p>エラーが起こった場合、<b>fpassthru()</b> は <b><code>FALSE</code></b> を返します。 それ以外の場合、<b>fpassthru()</b> は <code>handle</code> から読み込んだ文字の数を返し、出力へ渡します。</p>
 * @link http://php.net/manual/ja/function.fpassthru.php
 * @see readfile(), fopen(), popen(), fsockopen()
 * @since PHP 4, PHP 5, PHP 7
 */
function fpassthru($handle): int {}

/**
 * 行を CSV 形式にフォーマットし、ファイルポインタに書き込む
 * <p><b>fputcsv()</b> は、行（<code>fields</code> 配列として渡されたもの）を CSV としてフォーマットし、それを <code>handle</code> で指定したファイルに書き込みます (いちばん最後に改行を追加します)。</p>
 * @param resource $handle <p>ファイルポインタは、有効なファイルポインタである必要があり、 <code>fopen()</code> または <code>fsockopen()</code> で正常にオープンされた （そしてまだ <code>fclose()</code> でクローズされていない） ファイルを指している必要があります。</p>
 * @param array $fields <p>値の配列。</p>
 * @param string $delimiter <p>オプションの <code>delimiter</code> はフィールド区切り文字 (一文字だけ) を指定します。</p>
 * @param string $enclosure <p>オプションの <code>enclosure</code> はフィールドを囲む文字 (一文字だけ) を指定します。</p>
 * @param string $escape_char <p>オプションの <code>escape_char</code> は、エスケープ文字 (一文字だけ) を指定します。</p>
 * @return int <p>書き込んだ文字列の長さを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fputcsv.php
 * @see fgetcsv()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function fputcsv($handle, array $fields, string $delimiter = ",", string $enclosure = '"', string $escape_char = "\\"): int {}

/**
 * fwrite() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>fwrite()</code>.</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $string <p>書き込む文字列。</p>
 * @param int $length <p><code>length</code>パラメータが与えられている場合、 <code>length</code>バイト数分の書き込みが完了したか、 <code>string</code>が終わりに達したかのいずれか早い方の 事象により書き込みは中止されます。</p> <p><code>length</code> パラメータが指定されている場合、 magic_quotes_runtime 構成オプションは無視され、<code>string</code>からの スラッシュ文字の取り除きは行われないことに注意してください。</p>
 * @return int
 * @link http://php.net/manual/ja/function.fputs.php
 * @since PHP 4, PHP 5, PHP 7
 */
function fputs($handle, string $string, int $length = NULL): int {}

/**
 * バイナリセーフなファイルの読み込み
 * <p><b>fread()</b> は、<code>handle</code> が指すファイルポインタから最高 <code>length</code> バイト読み込みます。 以下のいずれかの条件を満たしたら、読み込みを終了します。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $length <p>最大 <code>length</code> バイトまで読み込む。</p>
 * @return string <p>読み込んだ文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fread.php
 * @see fwrite(), fopen(), fsockopen(), popen(), fgets(), fgetss(), fscanf(), file(), fpassthru(), ftell(), rewind(), unpack()
 * @since PHP 4, PHP 5, PHP 7
 */
function fread($handle, int $length): string {}

/**
 * フォーマットに基づきファイルからの入力を処理する
 * <p>関数<b>fscanf()</b> は <code>sscanf()</code> に似ていますが、<code>handle</code> が指すファイルから入力を取得し、 指定したフォーマット <code>format</code> に基づき解釈を行います。 フォーマットについては <code>sprintf()</code> に解説されています。</p><p>フォーマット文字列におけるあらゆる空白は 入力ストリームのあらゆる空白にマッチします。 これはつまりフォーマット文字列の<i>\t</i>（タブ）すらも 入力ストリームの空白1個にマッチしてしまうことを意味します。</p><p><b>fscanf()</b> をコールするたびに、ファイルから 1 行ずつ読み込みます。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $format <p><code>sprintf()</code> のドキュメントに説明されているフォーマット。</p>
 * @param mixed $_ <p>オプションで代入する値。</p>
 * @return mixed <p>この関数のパラメータが二つだけの場合、処理された値は配列として返されます。 他方、オプションのパラメータが指定された場合、 この関数は、代入された値の数を返します。 オプション引数は参照渡しとする必要があります。</p>
 * @link http://php.net/manual/ja/function.fscanf.php
 * @see fread(), fgets(), fgetss(), sscanf(), printf(), sprintf()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function fscanf($handle, string $format, &$_ = NULL) {}

/**
 * ファイルポインタを移動する
 * <p><code>handle</code> が指しているファイルのファイル位置識別子を ファイル・ストリーム中の <code>offset</code> バイト目に セットします。新規位置は、ファイルの先頭からのバイト数で 測られます。これは <code>whence</code> で指定した位置に <code>offset</code> を追加することにより得られます。</p><p>一般的に、ファイルの終端より先の位置に移動することも許されています。 そこにデータを書き込んだ場合、ファイルの終端からシーク位置までの範囲を読み込むと 値 0 が埋められたバイトを返します。しかし、ストリームの種類によっては この挙動をサポートしていないものもあります。 ストリームのもとになっているストレージが固定長である場合などです。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $offset <p>オフセット。</p> <p>ファイルの終端から数えた位置に移動するには、負の値を <code>offset</code> に渡して <code>whence</code> を <b><code>SEEK_END</code></b> に設定しなければなりません。</p>
 * @param int $whence <p><code>whence</code> の値は以下のようになります。</p><ul> <li> <b><code>SEEK_SET</code></b> - 位置を <code>offset</code> バイト目に設定する</li> <li> <b><code>SEEK_CUR</code></b> - 現在の位置に <code>offset</code> を加えた位置に設定する</li> <li> <b><code>SEEK_END</code></b> - ファイル終端に <code>offset</code> を加えた位置に設定する</li> </ul>
 * @return int <p>成功すると 0 を返し、そうでなければ -1 を返します。</p>
 * @link http://php.net/manual/ja/function.fseek.php
 * @see ftell(), rewind()
 * @since PHP 4, PHP 5, PHP 7
 */
function fseek($handle, int $offset, int $whence = SEEK_SET): int {}

/**
 * オープンしたファイルポインタからファイルに関する情報を取得する
 * <p>ファイルポインタ<code>handle</code>によりオープンされたファイルの統計情報を取得します。 この関数は関数<code>stat()</code>に似ていますが、 ファイル名の代わりにオープンされたファイルポインタを指定するところが異なります。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @return array <p>ファイルの統計情報の配列を返します。配列のフォーマットについては <code>stat()</code>のマニュアルをご覧ください。</p>
 * @link http://php.net/manual/ja/function.fstat.php
 * @since PHP 4, PHP 5, PHP 7
 */
function fstat($handle): array {}

/**
 * ファイルの読み書き用ポインタの現在位置を返す
 * <p><code>handle</code> ファイルの読み書き用ポインタの現在位置を返します。</p>
 * @param resource $handle <p>ファイルポインタは有効なものでなければならず、また <code>fopen()</code>、<code>popen()</code> で正常にオープンされたファイルを指している必要があります。 <b>ftell()</b> は、("a" フラグ付きでオープンされた) 追加のみ可能なストリームに対する結果も未定義です。</p>
 * @return int <p><code>handle</code> が示すファイルポインタの位置、 すなわちファイル・ストリーム上のオフセットを整数値で返します。</p><p>エラーが起こった場合 <b><code>FALSE</code></b> を返します。</p><p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.ftell.php
 * @see fopen(), popen(), fseek(), rewind()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftell($handle): int {}

/**
 * ファイルを指定した長さに丸める
 * <p>ファイルポインタ<code>handle</code>を引数とし、 ファイルを指定した長さ、サイズに丸めます。</p>
 * @param resource $handle <p>ファイルポインタ。</p>  <p><b>注意</b>:</p> <p><code>handle</code> は書き込みモードでオープンする必要があります。</p>
 * @param int $size <p>丸める大きさ。</p>  <p><b>注意</b>:</p> <p><code>size</code> がファイルのサイズより大きい場合は、 null バイトを用いてファイルを拡大します。</p> <p><code>size</code> がファイルのサイズより小さい場合は、 余分なデータは失われます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftruncate.php
 * @see fopen(), fseek()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftruncate($handle, int $size): bool {}

/**
 * バイナリセーフなファイル書き込み処理
 * <p><b>fwrite()</b>は<code>string</code>の内容を <code>handle</code>が指しているファイル・ストリームに書き込みます。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $string <p>書き込む文字列。</p>
 * @param int $length <p><code>length</code>パラメータが与えられている場合、 <code>length</code>バイト数分の書き込みが完了したか、 <code>string</code>が終わりに達したかのいずれか早い方の 事象により書き込みは中止されます。</p> <p><code>length</code> パラメータが指定されている場合、 magic_quotes_runtime 構成オプションは無視され、<code>string</code>からの スラッシュ文字の取り除きは行われないことに注意してください。</p>
 * @return int <p><b>fwrite()</b> は、 書き込んだバイト数、またはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fwrite.php
 * @see fread(), fopen(), fsockopen(), popen(), file_get_contents(), pack()
 * @since PHP 4, PHP 5, PHP 7
 */
function fwrite($handle, string $string, int $length = NULL): int {}

/**
 * パターンにマッチするパス名を探す
 * <p><b>glob()</b> 関数は libc の glob() 関数で使われるルールに基づいて <code>pattern</code> にマッチする全てのパス名を検索します。 ルールは、一般のシェルで使われるルールと似ています。</p>
 * @param string $pattern <p>パターン。チルダの展開やパラメータ置換は行いません。</p>
 * @param int $flags <p>有効なフラグは次のとおりです。</p><ul> <li>  <b><code>GLOB_MARK</code></b> - 各ディレクトリにスラッシュを追加します  </li> <li>  <b><code>GLOB_NOSORT</code></b> - ディレクトリに存在するファイルを返します (ソートはされません)。このフラグを使わない場合は、パス名をアルファベット順にソートします。  </li> <li>  <b><code>GLOB_NOCHECK</code></b> - 検索パターンにマッチするファイルが見つからない場合に、 検索パターン自身を返します  </li> <li>  <b><code>GLOB_NOESCAPE</code></b> - バックスラッシュによるメタ文字のクォートを行いません  </li> <li>  <b><code>GLOB_BRACE</code></b> - {a,b,c} を展開し「a」、「b」あるいは「c」のいずれかにマッチさせます  </li> <li>  <b><code>GLOB_ONLYDIR</code></b> - パターンにマッチするディレクトリのみを返します  </li> <li>  <b><code>GLOB_ERR</code></b> - (ディレクトリが読めないなどの) 読み込みエラー時に停止します。デフォルトではエラーは無視されます。  </li> </ul>
 * @return array <p>マッチするファイル／ディレクトリを含む配列を返します。 マッチするファイルがなかった場合には空の配列、 そして失敗した場合には <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>システムによっては、何もマッチしなかった場合とエラーが発生した場合を区別できないものもあります。</p>
 * @link http://php.net/manual/ja/function.glob.php
 * @see opendir(), readdir(), closedir(), fnmatch()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function glob(string $pattern, int $flags = 0): array {}

/**
 * ファイルがディレクトリかどうかを調べる
 * <p>指定したファイルがディレクトリかどうかを調べます。</p>
 * @param string $filename <p>ファイルへのパス。<code>filename</code> が相対パスの場合は、現在の作業ディレクトリからの相対パスとして処理します。 <code>filename</code> がシンボリックリンクあるいはハードリンクの場合は、 リンク先を解決して処理します。セーフモード あるいは open_basedir を有効にすると、 さらに制限がかかるでしょう。</p>
 * @return bool <p>ファイルが存在して、かつそれがディレクトリであれば <b><code>TRUE</code></b>、それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-dir.php
 * @see chdir(), dir(), opendir(), is_file(), is_link()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_dir(string $filename): bool {}

/**
 * ファイルが実行可能かどうかを調べる
 * <p>ファイルが実行可能かどうかを調べます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return bool <p>ファイルが存在し、かつそれが実行可能な場合に <b><code>TRUE</code></b>、 エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-executable.php
 * @see is_file(), is_link()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_executable(string $filename): bool {}

/**
 * 通常ファイルかどうかを調べる
 * <p>指定したファイルが通常のファイルかどうかを調べます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return bool <p>ファイルが存在し、かつそれが通常のファイルである場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.is-file.php
 * @see is_dir(), is_link()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_file(string $filename): bool {}

/**
 * ファイルがシンボリックリンクかどうかを調べる
 * <p>指定したファイルがシンボリックリンクかどうかを調べます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return bool <p>filename が存在し、かつシンボリックリンクであれば <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-link.php
 * @see is_dir(), is_file(), readlink()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_link(string $filename): bool {}

/**
 * ファイルが存在し、読み込み可能であるかどうかを知る
 * <p>ファイルが存在し、読み込み可能であるかどうかを調べます。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return bool <p><code>filename</code> で指定したファイルあるいはディレクトリが存在し、 それが読み込み可能であれば <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-readable.php
 * @see is_writable(), file_exists(), fgets()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_readable(string $filename): bool {}

/**
 * HTTP POST でアップロードされたファイルかどうかを調べる
 * <p>filename という名前のファイルが HTTP POST によりアップロードされたものである場合に <b><code>TRUE</code></b> を返します。 悪意のあるユーザーがスクリプトをだまして、 本来見られてはいけないはずのファイル (/etc/passwd など) にアクセスすることを防止したい場合に、この関数は有用です。</p><p>この種の確認は、アップロードされたファイルに関して何でもできる場合には、 その内容をユーザー、または同じシステム上の他のユーザーにさえ 暴かれる可能性があるため、特に重要です。</p><p>適切に動作させるため、関数 <b>is_uploaded_file()</b> は $_FILES['userfile']['tmp_name'] のような引数を必要とします。 アップロードされたファイルのクライアントマシン上での名前 $_FILES['userfile']['name'] では動作しません。</p>
 * @param string $filename <p>調べたいファイル名。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-uploaded-file.php
 * @see move_uploaded_file()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function is_uploaded_file(string $filename): bool {}

/**
 * ファイルが書き込み可能かどうかを調べる
 * <p><code>filename</code>が存在して、かつそれが書き込み可能であれば <b><code>TRUE</code></b>を返します。引数filenameはディレクトリ名とすることができ、 ディレクトリが書き込み可能であることを調べることが可能です。</p><p>PHP は、Web サーバーが実行されているユーザー ID('nobody' が多い) でファイルにアクセスすることを覚えておいてください。 セーフモードの制限は働きません。</p>
 * @param string $filename <p>調べたいファイル名。</p>
 * @return bool <p><code>filename</code> が存在して書き込み可能な場合に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-writable.php
 * @see is_readable(), file_exists(), fwrite()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_writable(string $filename): bool {}

/**
 * is_writable() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>is_writable()</code>.</p>
 * @param string $filename <p>調べたいファイル名。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.is-writeable.php
 * @since PHP 4, PHP 5, PHP 7
 */
function is_writeable(string $filename): bool {}

/**
 * シンボリックリンクのグループ所有権を変更する
 * <p>シンボリックリンク <code>filename</code> のグループを <code>group</code> に変更しようと試みます。</p><p>スーバーユーザーは、 シンボリックリンクのグループを任意のものに変更できます。 その他のユーザーは、自分自身がメンバーの一員となっているグループにのみ変更できます。</p>
 * @param string $filename <p>シンボリックリンクへのパス。</p>
 * @param mixed $group <p>グループ名あるいはグループ番号。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.lchgrp.php
 * @see chgrp(), lchown(), chown(), chmod()
 * @since PHP 5 >= 5.1.3, PHP 7
 */
function lchgrp(string $filename, $group): bool {}

/**
 * シンボリックリンクの所有者を変更する
 * <p>シンボリックリンク <code>filename</code> の所有者を <code>user</code> に変更しようと試みます。</p><p>シンボリックリンクの所有者を変更できるのは、スーパーユーザーのみです。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @param mixed $user <p>ユーザー名あるいはユーザー番号。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.lchown.php
 * @see chown(), lchgrp(), chgrp(), chmod()
 * @since PHP 5 >= 5.1.3, PHP 7
 */
function lchown(string $filename, $user): bool {}

/**
 * ハードリンクを作成する
 * <p><b>link()</b> はハードリンクを作成します。</p>
 * @param string $target <p>リンクの対象。</p>
 * @param string $link <p>リンクの名前。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.link.php
 * @see symlink(), readlink(), linkinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function link(string $target, string $link): bool {}

/**
 * リンクに関する情報を取得する
 * <p>リンクに関する情報を取得します。</p><p>この関数を使用して (<code>path</code>が指している) リンクが実際に存在するかどうかを、 (stat.h で定義されている S_ISLNK マクロと同じ方法で) チェックします。</p>
 * @param string $path <p>リンクへのパス。</p>
 * @return int <p><b>linkinfo()</b>は、<i>lstat</i> システムコールで返された Unix C 言語の stat 構造体の <i>st_dev</i> フィールドを返します。 0 を返し、エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.linkinfo.php
 * @see symlink(), link(), readlink()
 * @since PHP 4, PHP 5, PHP 7
 */
function linkinfo(string $path): int {}

/**
 * ファイルあるいはシンボリックリンクの情報を取得する
 * <p><code>filename</code> という名前のファイル、 またはシンボリックリンクの情報を得ます。</p>
 * @param string $filename <p>ファイルあるいはシンボリックリンクへのパス。</p>
 * @return array <p><b>lstat()</b> が返す配列の内容については <code>stat()</code> のマニュアルをご覧ください。 この関数の動作は <code>stat()</code> 関数と同じですが、 パラメータ <code>filename</code> がシンボリックリンクであった場合に、 シンボリック先のファイルのステータスではなく、 シンボリックリンクのステータスが返されるところが異なります。</p>
 * @link http://php.net/manual/ja/function.lstat.php
 * @see stat()
 * @since PHP 4, PHP 5, PHP 7
 */
function lstat(string $filename): array {}

/**
 * ディレクトリを作る
 * <p>指定したディレクトリを作成します。</p>
 * @param string $pathname <p>ディレクトリのパス。</p>
 * @param int $mode <p>モードは 0777 がデフォルトです。 これは最も緩やかなアクセス制限を意味します。 モードに関する詳細は <code>chmod()</code> をご覧ください。</p>  <p><b>注意</b>:</p> <p>Windows では <code>mode</code> は無視されます。</p>  <p>モードを八進数で指定したくなることもあるかもしれません。 その場合は先頭にゼロをつける必要があります。 また、モードは、現在設定されている umask の影響も受けます。 umask を変更するには <code>umask()</code> を使用します。</p>
 * @param bool $recursive <p><code>pathname</code> で、入れ子構造のディレクトリの作成を許可します。</p>
 * @param resource $context <p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mkdir.php
 * @see rmdir()
 * @since PHP 4, PHP 5, PHP 7
 */
function mkdir(string $pathname, int $mode = 0777, bool $recursive = FALSE, $context = NULL): bool {}

/**
 * アップロードされたファイルを新しい位置に移動する
 * <p>この関数は、<code>filename</code> で指定されたファイルが (PHP の HTTP POST アップロード機構によりアップロードされたという意味で) 有効なアップロードファイルであるかどうかを確認します。 そのファイルが有効な場合、<code>destination</code> で指定したファイル名に移動されます。</p><p>この種の確認は、アップロードされたファイルに関して何でもできる場 合には、その内容をユーザー、または同じシステム上の他のユーザーにさえ 暴かれる可能性があるため、特に重要です。</p>
 * @param string $filename <p>アップロードしたファイルのファイル名。</p>
 * @param string $destination <p>ファイルの移動先。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p><p><code>filename</code> が有効なアップロードファイルでない場合、 処理は行われず、<b>move_uploaded_file()</b> は <b><code>FALSE</code></b> を返します。</p><p><code>filename</code> が有効なアップロードファイルであるが、 何らかの理由により、移動できない場合、処理は行われず、 <b>move_uploaded_file()</b> は <b><code>FALSE</code></b> を返します。加えて、警告が出力されます。</p>
 * @link http://php.net/manual/ja/function.move-uploaded-file.php
 * @see is_uploaded_file(), rename()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function move_uploaded_file(string $filename, string $destination): bool {}

/**
 * 設定ファイルをパースする
 * <p><b>parse_ini_file()</b> は、 <code>filename</code> で指定した ini ファイルをロードし、 連想配列としてその設定値を返します。</p><p>ini ファイルの構造は、php.ini の構造と同じです。</p>
 * @param string $filename <p>パースしたい ini ファイルのファイル名。</p>
 * @param bool $process_sections <p><code>process_sections</code> パラメータに <b><code>TRUE</code></b> を設定すると、セクション名と設定が含まれた多次元の配列を得ることができます。 デフォルトでは、<code>process_sections</code> は <b><code>FALSE</code></b> です。</p>
 * @param int $scanner_mode <p><b><code>INI_SCANNER_NORMAL</code></b> (デフォルト) あるいは <b><code>INI_SCANNER_RAW</code></b>。<b><code>INI_SCANNER_RAW</code></b> を指定すると、オプションの値はパースされません。</p> <p>PHP 5.6.1 以降では <b><code>INI_SCANNER_TYPED</code></b> も指定できるようになりました。 このモードでは、boolean や null そして integer の型を、可能な限り維持します。 文字列 <i>"true"</i>、<i>"on"</i> そして <i>"yes"</i> は <b><code>TRUE</code></b> に変換されます。<i>"false"</i>、<i>"off"</i>、<i>"no"</i> そして <i>"none"</i> は <b><code>FALSE</code></b> だとみなされます。このモードでは、<i>"null"</i> は <b><code>NULL</code></b> に変換されます。また数値形式の文字列も、可能な限り integer 型に変換されます。</p>
 * @return array <p>成功した場合に設定を連想配列形式で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.parse-ini-file.php
 * @see parse_ini_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function parse_ini_file(string $filename, bool $process_sections = FALSE, int $scanner_mode = INI_SCANNER_NORMAL): array {}

/**
 * 設定文字列をパースする
 * <p><b>parse_ini_string()</b> は、文字列 <code>ini</code> の設定を連想配列で返します。</p><p>文字列の構造は、php.ini の構造と同じです。</p>
 * @param string $ini <p>パースしたい ini ファイルの内容。</p>
 * @param bool $process_sections <p><code>process_sections</code> を <b><code>TRUE</code></b> に設定すると、セクション名と設定を含む多次元配列を返します。 <code>process_sections</code> のデフォルトは <b><code>FALSE</code></b> です。</p>
 * @param int $scanner_mode <p><b><code>INI_SCANNER_NORMAL</code></b> (デフォルト) あるいは <b><code>INI_SCANNER_RAW</code></b>。<b><code>INI_SCANNER_RAW</code></b> を指定すると、オプションの値はパースされません。</p> <p>PHP 5.6.1 以降では <b><code>INI_SCANNER_TYPED</code></b> も指定できるようになりました。 このモードでは、boolean や null そして integer の型を、可能な限り維持します。 文字列 <i>"true"</i>、<i>"on"</i> そして <i>"yes"</i> は <b><code>TRUE</code></b> に変換されます。<i>"false"</i>、<i>"off"</i>、<i>"no"</i> そして <i>"none"</i> は <b><code>FALSE</code></b> だとみなされます。このモードでは、<i>"null"</i> は <b><code>NULL</code></b> に変換されます。また数値形式の文字列も、可能な限り integer 型に変換されます。</p>
 * @return array <p>成功した場合に設定を連想配列形式で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.parse-ini-string.php
 * @see parse_ini_file()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function parse_ini_string(string $ini, bool $process_sections = FALSE, int $scanner_mode = INI_SCANNER_NORMAL): array {}

/**
 * ファイルパスに関する情報を返す
 * <p><b>pathinfo()</b> は、<code>path</code> に関する情報を返します。<code>options</code> によって連想配列あるいは文字列のどちらかとなります。</p><p><b>注意</b>:</p><p>カレントのパスに関する情報を取得するには、 定義済みの変数 のセクションをご覧ください。</p><p><b>pathinfo()</b> はロケールを考慮して処理を行います。 マルチバイト文字を含むパスを正しく処理するには、正しいロケールを <code>setlocale()</code> 関数で設定しておかなければなりません。</p>
 * @param string $path <p>調べたいパス。</p>
 * @param int $options <p>指定する場合は、どの要素を返すのかを <b><code>PATHINFO_DIRNAME</code></b>、 <b><code>PATHINFO_BASENAME</code></b>、 <b><code>PATHINFO_EXTENSION</code></b> あるいは <b><code>PATHINFO_FILENAME</code></b> のいずれかで指定します。</p> <p><code>options</code> を省略した場合はすべての要素を返します。</p>
 * @return mixed <p><code>options</code> パラメータを渡さなかった場合は、次の要素を含む連想配列を返します。 <i>dirname</i>、<i>basename</i>、 <i>extension</i> (存在すれば)、そして <i>filename</i>。</p> <p><b>注意</b>:</p> <p><code>path</code> に複数の拡張子が含まれる場合は、 <b><code>PATHINFO_EXTENSION</code></b> は最後の拡張子だけを返します。また、 <b><code>PATHINFO_FILENAME</code></b> は最後の拡張子だけを取り除きます (最初のサンプルを参照ください)。</p>  <p><b>注意</b>:</p> <p><code>path</code> に拡張子がない場合は、 <i>extension</i> 要素は返されません (以下の二番目の例を参照ください)。</p>  <p><b>注意</b>:</p> <p><code>path</code> の <i>basename</i> がドットで始まる場合は、それに続く文字は <i>extension</i> とみなされます。そして <i>filename</i> は空文字列となります (以下の三番目の例を参照ください)。</p> <p><code>options</code> を指定すると、 要求した要素を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.pathinfo.php
 * @see dirname(), basename(), parse_url(), realpath()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function pathinfo(string $path, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME) {}

/**
 * プロセスのファイルポインタをクローズする
 * <p><code>popen()</code> でオープンしたパイプへの ファイルポインタをクローズします。</p>
 * @param resource $handle <p>ファイルポインタは有効なものでなければならず、また <code>popen()</code> で正常にオープンされたものである必要があります。</p>
 * @return int <p>実行していたプロセスの終了ステータスを返します。 エラーが発生した場合は <i>-1</i> を返します。</p> <p><b>注意</b>:</p> <p>PHP のコンパイル時に --enable-sigchild を指定した場合は、この関数の返り値は未定義となります。</p>
 * @link http://php.net/manual/ja/function.pclose.php
 * @see popen()
 * @since PHP 4, PHP 5, PHP 7
 */
function pclose($handle): int {}

/**
 * プロセスへのファイルポインタをオープンする
 * <p><code>command</code> で指定したコマンドのフォークによってできたプロセスへのパイプをオープンします。</p>
 * @param string $command <p>コマンド。</p>
 * @param string $mode <p>モード。</p>
 * @return resource <p><code>fopen()</code> により返されたファイルポインタと同様のものを返しますが、 それは(読み書きのいずれか一方でのみ使われる)片方向ストリームであり、 <code>pclose()</code> によりクローズされなければならないところが異なります。 このポインタは、<code>fgets()</code>、<code>fgetss()</code> および <code>fwrite()</code> のいずれかで使うことができます。 モードが 'r' のときは、返されるファイルポインタは そのコマンドの STDOUT と等しくなります。また、モードが 'w' のときは、返されるファイルポインタは そのコマンドの STDIN と等しくなります。</p><p>エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.popen.php
 * @see pclose(), fopen(), proc_open()
 * @since PHP 4, PHP 5, PHP 7
 */
function popen(string $command, string $mode) {}

/**
 * ファイルを出力する
 * <p>ファイルを読んで標準出力に書き出します。</p>
 * @param string $filename <p>読み込もうとするファイルの名前。</p>
 * @param bool $use_include_path <p>オプションの2番目の引数を使用して、これに<b><code>TRUE</code></b>を設定することにより、 include_path のファイルの検索も行うことができます。</p>
 * @param resource $context <p>コンテキストストリームリソース。</p>
 * @return int <p>ファイルから読み込んだバイト数を返します。エラーが起こると <b><code>FALSE</code></b>を返し、また@<b>readfile()</b>という名前でコールされない限り、 エラーメッセージが表示されます。</p>
 * @link http://php.net/manual/ja/function.readfile.php
 * @see fpassthru(), file(), fopen(), include, require, virtual(), file_get_contents()
 * @since PHP 4, PHP 5, PHP 7
 */
function readfile(string $filename, bool $use_include_path = FALSE, $context = NULL): int {}

/**
 * シンボリックリンク先を返す
 * <p><b>readlink()</b> は同名の C 関数と同じ動作をします。</p>
 * @param string $path <p>シンボリックリンクのパス。</p>
 * @return string <p>シンボリックリンク・パスの内容を返します。エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.readlink.php
 * @see is_link(), symlink(), linkinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function readlink(string $path): string {}

/**
 * 正規化された絶対パス名を返す
 * <p><b>realpath()</b> は、 入力 <code>path</code> のシンボリックリンクをすべて展開し、 <i>/./</i>、<i>/../</i> および <i>/</i> などの参照をすべて解決することにより、正規化された絶対パスを返します。</p>
 * @param string $path <p>調べたいパス。</p>  <p><b>注意</b>:</p> <p>path の指定は必須ですが、空白や <b><code>NULL</code></b> を指定することもできます。 その場合はカレントディレクトリを指定したものとみなします。</p>
 * @return string <p>成功した場合は、正規化された絶対パス名を返します。 返されるパスはシンボリックリンク、<i>/./</i> および <i>/../</i> 要素を含みません。 パスの末尾の区切り文字 (<i>\</i> や <i>/</i> など) は削除されます。</p><p><b>realpath()</b> は、 たとえばファイルが存在しないなどの失敗時に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>指定した階層にあるすべてのディレクトリに対して、 実行中のスクリプトからの実行権限が必要です。もし権限がなければ <b>realpath()</b> は <b><code>FALSE</code></b> を返します。</p>  <p><b>注意</b>:</p> <p>大文字小文字を区別しないファイルシステムの場合は、<b>realpath()</b> が大文字小文字をどちらかにそろえるかもしれないし、そろえないかもしれません。</p>  <p><b>注意</b>:</p> <p>The function <b>realpath()</b> will not work for a file which is inside a Phar as such path would be a virtual path, not a real one.</p> <p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.realpath.php
 * @see basename(), dirname(), pathinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function realpath(string $path): string {}

/**
 * realpath キャッシュ・エントリーを取得
 * <p>realpath キャッシュ内容を取得します。</p>
 * @return array <p>realpath キャッシュ・エントリーの配列を返します。キーは元のパス・エントリーで、 値はデータ項目の配列です。それには、解決されたパス、失効日、キャッシュに保持されるその他のオプションを含みます。</p>
 * @link http://php.net/manual/ja/function.realpath-cache-get.php
 * @see realpath_cache_size()
 * @since PHP 5 >= 5.3.2, PHP 7
 */
function realpath_cache_get(): array {}

/**
 * realpath キャッシュサイズを取得
 * <p>realpath キャッシュで使用されるメモリー量を取得します。</p>
 * @return int <p>realpath キャッシュが使用中のメモリ量を返します。</p>
 * @link http://php.net/manual/ja/function.realpath-cache-size.php
 * @see realpath_cache_get()
 * @since PHP 5 >= 5.3.2, PHP 7
 */
function realpath_cache_size(): int {}

/**
 * ファイルをリネームする
 * <p><code>oldname</code> を <code>newname</code> にリネームし、必要ならディレクトリを移動しようと試みます。 ファイル名の変更かつ <code>newname</code> が存在する場合、上書きされます。 ディレクトリ名の変更かつ <code>newname</code> が存在する場合、 この関数は警告を発します。</p>
 * @param string $oldname <p>変更前の名前。</p>  <p><b>注意</b>:</p> <p><code>oldname</code> で使用されるラッパーは、 <code>newname</code> で使用するラッパーと適合 <i>している必要があります</i> 。</p>
 * @param string $newname <p>変更後の名前。</p>
 * @param resource $context <p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.rename.php
 * @see copy(), unlink(), move_uploaded_file()
 * @since PHP 4, PHP 5, PHP 7
 */
function rename(string $oldname, string $newname, $context = NULL): bool {}

/**
 * ファイルポインタの位置を先頭に戻す
 * <p><code>handle</code> のファイル位置指示子を、 ファイルストリームの先頭にセットします。</p><p><b>注意</b>:</p><p>追記モード ("a" もしくは "a+") でファイルをオープンした場合、 ファイルのポインターの位置とは無関係に、 ファイルに書き込まれるデータは常に追加されます。</p>
 * @param resource $handle <p>ファイルポインタは有効なものでなければならず、 また <code>fopen()</code> で正常にオープンされたファイルを指している必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.rewind.php
 * @see fread(), fseek(), ftell(), fwrite()
 * @since PHP 4, PHP 5, PHP 7
 */
function rewind($handle): bool {}

/**
 * ディレクトリを削除する
 * <p><code>dirname</code>で指定されたディレクトリを 削除しようと試みます。ディレクトリは空でなくてはならず、また 適切なパーミッションが設定されていなければなりません。 失敗した場合は <b><code>E_WARNING</code></b> レベルのエラーが発生します。</p>
 * @param string $dirname <p>ディレクトリへのパス。</p>
 * @param resource $context <p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.rmdir.php
 * @see is_dir(), mkdir(), unlink()
 * @since PHP 4, PHP 5, PHP 7
 */
function rmdir(string $dirname, $context = NULL): bool {}

/**
 * stream_set_write_buffer() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_set_write_buffer()</code>.</p>
 * @param resource $stream <p>ファイルポインタ。</p>
 * @param int $buffer <p>バッファのバイト数。 <code>buffer</code> が 0 であれば、書き込み操作はバッファされなくなります。 これにより、<code>fwrite()</code> による書き込み操作が、他の プロセスが同じ出力ストリームに対して何らかの書き込み操作を行う前に 完了することが保証されます。</p>
 * @return int
 * @link http://php.net/manual/ja/function.set-file-buffer.php
 * @since PHP 4, PHP 5, PHP 7
 */
function set_file_buffer($stream, int $buffer): int {}

/**
 * ファイルに関する情報を取得する
 * <p><code>filename</code>で指定されたファイルに ついての統計情報を取得します。 <code>filename</code> がシンボリックリンクの場合、 シンボリックリンクではなくファイルの実体の統計情報が返されます。</p><p><code>lstat()</code> はシンボリックリンクの統計情報を返すという違いを除いて <b>stat()</b> と等価です。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @return array <b><b>stat()</b> と <code>fstat()</code> の結果のフォーマット</b>   数値 連想配列 説明     0 dev デバイス番号   1 ino inode 番号(&#42;)   2 mode inode プロテクトモード   3 nlink リンク数   4 uid 所有者のユーザー ID(&#42;)   5 gid 所有者のグループ ID(&#42;)   6 rdev inode デバイス の場合、デバイスの種類   7 size バイト単位のサイズ   8 atime 最終アクセス時間 (Unix タイムスタンプ)   9 mtime 最終修正時間 (Unix タイムスタンプ)   10 ctime 最終 inode 変更時間 (Unix タイムスタンプ)   11 blksize ファイル IO のブロックサイズ(&#42;&#42;)   12 blocks 512 バイトのブロックの確保数(&#42;&#42;)    &#42; Windows では常に 0 となります。 <p>&#42;&#42; st_blksize タイプをサポートするシステムでのみ有効です。 その他のシステム(例えば Windows)では -1 を返します。</p><p><b>stat()</b> はエラーの場合 <b><code>FALSE</code></b> を返します。</p><p><b>注意</b>:  PHP の数値型は符号付整数であり、 多くのプラットフォームでは 32 ビットの整数を取るため、 ファイルシステム関数の中には 2GB より大きなファイルについては期待とは違う値を返すものがあります。 </p>
 * @link http://php.net/manual/ja/function.stat.php
 * @see lstat(), fstat(), filemtime(), filegroup()
 * @since PHP 4, PHP 5, PHP 7
 */
function stat(string $filename): array {}

/**
 * シンボリックリンクを作成する
 * <p><b>symlink()</b>は、指定されたリンク名 <code>link</code> で既存のファイル <code>target</code> へのシンボリックリンクを作成します。</p>
 * @param string $target <p>リンクの対象。</p>
 * @param string $link <p>リンクの名前。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.symlink.php
 * @see link(), readlink(), linkinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function symlink(string $target, string $link): bool {}

/**
 * 一意なファイル名を生成する
 * <p>一意なテンポラリファイル名を、パーミッションを 0600 に設定し、 指定したディレクトリに作成します。 指定したディレクトリが存在しない場合やディレクトリに書き込めない場合は、<b>tempnam()</b> はシステムのテンポラリディレクトリにあるファイル名を生成し、 そのファイルへのフルパスを (名前を含めて) 返します。</p>
 * @param string $dir <p>テンポラリファイルを作成したいディレクトリ。</p>
 * @param string $prefix <p>作成されるテンポラリファイルのプレフィックス。</p> <p><b>注意</b>:  Windows では、プレフィックスの最初の 3 文字のみを使用します。 </p>
 * @return string <p>新しいテンポラリファイル名 (パスを含む) を返し、失敗した場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.tempnam.php
 * @see tmpfile(), sys_get_temp_dir(), unlink()
 * @since PHP 4, PHP 5, PHP 7
 */
function tempnam(string $dir, string $prefix): string {}

/**
 * テンポラリファイルを作成する
 * <p>書き込み可のモード (w+) でユニークな名前を有するテンポラリファイルを作成し、 ファイルハンドルを返します。</p><p>(<code>fclose()</code>を呼んだり、<b>tmpfile()</b> が返すファイルハンドルへの参照がなくなったりして) ファイルをクローズした場合や、スクリプトが終了したりしたときに、このファイルは自動的に削除されます。</p><p>詳細については、関数 <i>tmpfile(3)</i> のシステムドキュメント、およびヘッダファイル stdio.h を参照ください。</p>
 * @return resource <p>ファイルのハンドルを返します。 これは、 <code>fopen()</code> により返されるハンドルと同じものです。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.tmpfile.php
 * @see tempnam(), sys_get_temp_dir()
 * @since PHP 4, PHP 5, PHP 7
 */
function tmpfile() {}

/**
 * ファイルの最終アクセス時刻および最終更新日をセットする
 * <p><code>filename</code> で指定されたファイルの最終更新日を、 <code>time</code> で指定された値に セットしようと試みます。 パラメータの数にかかわらず、アクセス時刻は 常に変更されることに注意しましょう。</p><p>ファイルが存在しない場合、ファイルが生成されます。</p>
 * @param string $filename <p>処理したいファイルの名前。</p>
 * @param int $time <p>設定する時刻。 <code>time</code> を省略した場合は、 現在時刻を使用します。</p>
 * @param int $atime <p>指定されたファイルの最終アクセス時刻が存在する場合は、 その値が <code>atime</code> にセットされます。 存在しない場合は <code>time</code> に渡した値となります。 どちらも存在しない場合は、現在のシステム時刻を使います。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.touch.php
 * @since PHP 4, PHP 5, PHP 7
 */
function touch(string $filename, int $time  = 'time()', int $atime = NULL): bool {}

/**
 * 現在の umask を変更する
 * <p><b>umask()</b> は PHP の umask を <code>mask</code> &amp; 0777 にセットし、 元の umask 値を返します。 PHP がサーバー・モジュールとして動作中の場合、 各リクエストが終了するたびに umask は元の値に戻されます。</p>
 * @param int $mask <p>新しい umask。</p>
 * @return int <p><b>umask()</b>を引数無しで実行すると、単に現在の umask値を返します。</p>
 * @link http://php.net/manual/ja/function.umask.php
 * @since PHP 4, PHP 5, PHP 7
 */
function umask(int $mask = NULL): int {}

/**
 * ファイルを削除する
 * <p><code>filename</code> を削除します。 Unix C 言語の関数 unlink() と動作は同じです。 失敗した場合は <b><code>E_WARNING</code></b> レベルのエラーが発生します。</p>
 * @param string $filename <p>ファイルへのパス。</p>
 * @param resource $context <p><b>注意</b>: コンテキストのサポートは、 PHP 5.0.0 で追加されました。<i>contexts</i> の説明に関しては、 ストリーム を参照してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.unlink.php
 * @see rmdir()
 * @since PHP 4, PHP 5, PHP 7
 */
function unlink(string $filename, $context = NULL): bool {}

/**
 * 既存のファイルに追記します。
 */
define('FILE_APPEND', 8);

/**
 * <p>バイナリモード (PHP 5.2.7 以降)。</p>  <p><b>注意</b>:</p> <p>この定数は何の効果もありません。 <i>前方互換性</i> のためだけに用意されています。</p>
 */
define('FILE_BINARY', 0);

/**
 * EOL (行末) 文字を取り除きます (PHP 5 以降)。
 */
define('FILE_IGNORE_NEW_LINES', 2);

define('FILE_NO_DEFAULT_CONTEXT', 16);

/**
 * 空行を読み飛ばします (PHP 5 以降)。
 */
define('FILE_SKIP_EMPTY_LINES', 4);

/**
 * <p>テキストモード (PHP 5.2.7 以降)。</p>  <p><b>注意</b>:</p> <p>この定数は何の効果もありません。 <i>前方互換性</i> のためだけに用意されています。</p>
 */
define('FILE_TEXT', 0);

/**
 * <code>filename</code> を include_path から探します (PHP 5 以降)。
 */
define('FILE_USE_INCLUDE_PATH', 1);

/**
 * 大文字小文字を区別しないマッチを行う。GNU 拡張の一部。
 */
define('FNM_CASEFOLD', 16);

/**
 * バックスラッシュのエスケープを無効にする。
 */
define('FNM_NOESCAPE', 2);

/**
 * 文字列中のスラッシュが、指定したパターン内のスラッシュにのみマッチする。
 */
define('FNM_PATHNAME', 1);

/**
 * 文字列の先頭のピリオドが、指定したパターン内のピリオドにのみマッチする。
 */
define('FNM_PERIOD', 4);

define('GLOB_AVAILABLE_FLAGS', 9303);

define('GLOB_BRACE', 1024);

define('GLOB_MARK', 2);

define('GLOB_NOCHECK', 16);

define('GLOB_NOESCAPE', 64);

define('GLOB_NOSORT', 4);

define('GLOB_ONLYDIR', 8192);

/**
 * 通常の INI スキャナモード (PHP 5.3 以降)。
 */
define('INI_SCANNER_NORMAL', 0);

/**
 * 生の INI スキャナモード (PHP 5.3 以降)。
 */
define('INI_SCANNER_RAW', 1);

/**
 * 型つきの INI スキャナモード (PHP 5.6.1 以降)。
 */
define('INI_SCANNER_TYPED', 2);

define('LOCK_EX', 2);

define('LOCK_NB', 4);

define('LOCK_SH', 1);

define('LOCK_UN', 3);

define('PATHINFO_BASENAME', 2);

define('PATHINFO_DIRNAME', 1);

define('PATHINFO_EXTENSION', 4);

/**
 * PHP 5.2.0 以降。
 */
define('PATHINFO_FILENAME', 8);

define('SEEK_CUR', 1);

define('SEEK_END', 2);

define('SEEK_SET', 0);

