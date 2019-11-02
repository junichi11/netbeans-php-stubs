<?php



namespace {

	/**
	 * パス名とプロジェクト ID を、System V IPC キーに変換する
	 * <p>この関数は、<code>pathname</code> で表される既存のアクセス可能なファイルおよびプロジェクト ID (<code>proj</code>) を、<code>shmop_open()</code> やその他で使用する System V IPC キーに変換します。</p>
	 * @param string $pathname <p>アクセス可能なファイルへのパス。</p>
	 * @param string $proj <p>プロジェクト ID。一文字からなる文字列でなければなりません。</p>
	 * @return int <p>成功した場合には作成されたキーの値を、それ以外の場合には <i>-1</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ftok.php
	 * @see shmop_open(), sem_get()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ftok(string $pathname, string $proj): int {}

	/**
	 * メッセージキューを作成またはそれにアタッチする
	 * <p><b>msg_get_queue()</b> は、指定した <code>key</code> で System V メッセージキューにアクセスするために使用される ID を返します。 最初にコールされた際には、オプションの <code>perms</code> でメッセージキューを作成します。同じ <code>key</code> で 2 度目に <b>msg_get_queue()</b> がコールされると別の ID が返されますが、どちらの ID も同じメッセージキューを指します。</p>
	 * @param int $key <p>メッセージキューの数値 ID。</p>
	 * @param int $perms <p>キューのパーミッション。デフォルトは 0666 です。 メッセージキューがすでに存在する場合には、<code>perms</code> は無視されます。</p>
	 * @return resource <p>リソースハンドルを返します。これを使用して、System V メッセージキューにアクセスします。</p>
	 * @link https://php.net/manual/ja/function.msg-get-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_send(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_get_queue(int $key, int $perms = 0666) {}

	/**
	 * メッセージキューが存在するかどうかを調べる
	 * <p><code>key</code> で指定したメッセージキューが存在するかどうかを調べます。</p>
	 * @param int $key <p>キューのキー。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msg-queue-exists.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function msg_queue_exists(int $key): bool {}

	/**
	 * メッセージキューからメッセージを受信する
	 * <p><b>msg_receive()</b> は、指定した <code>queue</code> から指定した <code>desiredmsgtype</code> の最初のメッセージを受信します。</p>
	 * @param resource $queue
	 * @param int $desiredmsgtype <p><code>desiredmsgtype</code> が 0 の場合、 キューの先頭にあるメッセージが返されます。<code>desiredmsgtype</code> が 0 より大きな値の場合、その型のメッセージのうち一番最初にあるものが返されます。 <code>desiredmsgtype</code> が 0 より小さな値の場合、 <code>desiredmsgtype</code> の絶対値と同じかそれより小さい型のメッセージのうち一番最初にあるものが返されます。 条件を満たすメッセージがない場合は、 条件を満たすメッセージがキューに投入されるまで待ち続けます。 パラメータ <code>flags</code> に <b><code>MSG_IPC_NOWAIT</code></b> を指定することで、 ブロックモードではなくすることが可能です。</p>
	 * @param int $msgtype <p>受信したメッセージの型がこのパラメータに保存されます。</p>
	 * @param int $maxsize <p>読み込むメッセージの最大サイズは <code>maxsize</code> で指定します。もしキューにあるメッセージのサイズがこれより大きい場合、 (以下で説明する <code>flags</code> が設定されていない限り) この関数は失敗します。</p>
	 * @param mixed $message <p>エラーが発生しなければ、 受信したメッセージは <code>message</code> に保存されます。</p>
	 * @param bool $unserialize <p>このパラメータが <b><code>TRUE</code></b> に設定されている場合、 メッセージはセッションモジュールと同様の方法でシリアライズされているものとみなされます。 メッセージは元の状態に復元されたうえでスクリプトに返されます。 これにより、配列やオブジェクト構造体のような複雑な形式のデータを他の PHP スクリプトから簡単に受信することが可能となります。 また、もし WDDX シリアライザを使用しているなら、あらゆる WDDX 互換のソースからデータを受け取ることが可能となります。</p> <p><code>unserialize</code> が <b><code>FALSE</code></b> の場合、 メッセージはバイナリセーフな文字列として返されます。</p>
	 * @param int $flags <p>オプションの <code>flags</code> により、低レベルの msgrcv システムコールにフラグを渡すことが可能です。デフォルト値は 0 ですが、以下の値のうちのいくつかを(値を足すかあるいは論理和ととることで) 指定することが可能です。</p> <b>msg_receive のフラグの値</b>   <b><code>MSG_IPC_NOWAIT</code></b>  <code>desiredmsgtype</code> を満たすメッセージが存在しない場合に、 待ち続けずにすぐに結果を返します。 関数は失敗し、<b><code>MSG_ENOMSG</code></b> に対応する整数値を返します。    <b><code>MSG_EXCEPT</code></b>  このフラグを正の <code>desiredmsgtype</code> と組み合わせて使用すると、この関数は <code>desiredmsgtype</code> 以外の型をもつ 最初のメッセージを受信するようになります。    <b><code>MSG_NOERROR</code></b>  このフラグを設定しておくと、メッセージが <code>maxsize</code> より大きい場合に そのメッセージを <code>maxsize</code> までに切り詰め、 エラーを返しません。
	 * @param int $errorcode <p>エラーが発生した場合は、オプションの <code>errorcode</code> にシステムの errno 値が設定されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>処理が正常に完了すると、メッセージキューデータ構造体は以下のように更新されます。 <i>msg_lrpid</i> には呼び出し元のプロセス ID が 設定され、<code>msg_qnum</code> が 1 減少し、 <i>msg_rtime</i> が現在の時刻に設定されます。</p>
	 * @link https://php.net/manual/ja/function.msg-receive.php
	 * @see msg_remove_queue(), msg_send(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_receive($queue, int $desiredmsgtype, int &$msgtype, int $maxsize, &$message, bool $unserialize = true, int $flags = 0, int &$errorcode = NULL): bool {}

	/**
	 * メッセージキューを破棄する
	 * <p><b>msg_remove_queue()</b> は、<code>queue</code> で指定したメッセージキューを破棄します。この関数を使用するのは、 すべてのプロセスがメッセージキューの使用を終え、 キューが保持するシステムリソースを開放する必要が生じた場合のみです。</p>
	 * @param resource $queue <p>メッセージキューのリソースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msg-remove-queue.php
	 * @see msg_get_queue(), msg_receive(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_remove_queue($queue): bool {}

	/**
	 * メッセージキューにメッセージを送信する
	 * <p><b>msg_send()</b> は、<code>queue</code> で指定したメッセージキューに対して <code>msgtype</code> で指定した型 (0 より大きい数値である必要があります) のメッセージ <code>message</code> を送信します。</p>
	 * @param resource $queue
	 * @param int $msgtype
	 * @param mixed $message
	 * @param bool $serialize <p>オプションのパラメータ <code>serialize</code> は、 <code>message</code> を送信する方法を制御します。 <code>serialize</code> のデフォルト値は <b><code>TRUE</code></b> で、 この場合 <code>message</code> が送信される前に セッションモジュールと同じ方法でシリアライズされます。 これにより、配列やオブジェクトのような複雑な形式のデータを 他の PHP スクリプトに送信することが可能となります。 また、もし WDDX シリアライザを使用しているなら、あらゆる WDDX 互換クライアントに対して同じことが可能となります。</p>
	 * @param bool $blocking <p>メッセージがキューに収まらないほど大きい場合は、他のプロセスが 現在キューにあるメッセージを読み込んでキューの空き容量が確保されるまで スクリプトの実行を待ち続けます。これをブロックモードといいます。 オプションのパラメータ <code>blocking</code> を <b><code>FALSE</code></b> に設定することでブロックモードではなくすることが可能で、 この場合、もしキューの空き容量よりも大きなメッセージを送信すると <b>msg_send()</b> はすぐに <b><code>FALSE</code></b> を返します。 また、オプションのパラメータ <code>errorcode</code> を <b><code>MSG_EAGAIN</code></b> に設定すると、 少し時間をおいてメッセージを再度送信しなければならないことが戻り値からわかります。</p>
	 * @param int $errorcode
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>処理が正常に完了すると、メッセージキューデータ構造体は以下のように更新されます。 <code>msg_lspid</code> には呼び出し元のプロセス ID が 設定され、<code>msg_qnum</code> が 1 増加し、 <code>msg_stime</code> が現在の時刻に設定されます。</p>
	 * @link https://php.net/manual/ja/function.msg-send.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_send($queue, int $msgtype, $message, bool $serialize = TRUE, bool $blocking = TRUE, int &$errorcode = NULL): bool {}

	/**
	 * メッセージキューデータ構造体の情報を設定する
	 * <p><b>msg_set_queue()</b> により、メッセージキューデータ構造体の msg_perm.uid、msg_perm.gid、msg_perm.mode および msg_qbytes フィールドを 変更することが可能です。</p><p>データ構造体を変更するには、PHP の実行ユーザーがキューの作成者あるいは (現在の msg_perm.xxx フィールドで指定されている)キューの所有者であるか、 あるいは root 権限を有している必要があります。msg_qbytes の値を システムで定義した制限をこえて設定するには、root 権限が必要です。</p>
	 * @param resource $queue <p>メッセージキューのリソースハンドル。</p>
	 * @param array $data <p>設定したい値を、<code>data</code> 配列に設定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msg-set-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue(), msg_get_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_set_queue($queue, array $data): bool {}

	/**
	 * メッセージキューデータ構造体の情報を返す
	 * <p><b>msg_stat_queue()</b> は、<code>queue</code> で指定したメッセージキューのメタデータを返します。 これは、例えば受信したメッセージがどのプロセスから送信されたのかを調べる場合などに有用です。</p>
	 * @param resource $queue <p>メッセージキューのリソースハンドル。</p>
	 * @return array <p>返り値は配列で、そのキーと値は以下のような意味をもちます。</p> <b>msg_stat_queue の配列構造</b>   <i>msg_perm.uid</i>  キューの所有者の uid 。    <i>msg_perm.gid</i>  キューの所有者の gid 。    <i>msg_perm.mode</i>  キューのファイルアクセスモード。    <i>msg_stime</i>  キューに対して最後にメッセージが送信された時刻。    <i>msg_rtime</i>  キューから最後にメッセージを受信した時刻。    <i>msg_ctime</i>  キューが最後に更新された時刻。    <i>msg_qnum</i>  キューにある読み込み待ちのメッセージの数。    <i>msg_qbytes</i>  ひとつのメッセージキューに含められる最大のバイト数。 Linux では、この値の取得や設定を /proc/sys/kernel/msgmnb で行えます。    <i>msg_lspid</i>  最後にキューに対してメッセージを送信したプロセスの pid 。    <i>msg_lrpid</i>  最後にキューからメッセージを受信したプロセスの pid 。
	 * @link https://php.net/manual/ja/function.msg-stat-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_get_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_stat_queue($queue): array {}

	/**
	 * セマフォを得る
	 * <p><b>sem_acquire()</b> はデフォルトで、(必要な場合) セマフォが確保できるまでブロックします。 既に確保されているセマフォを得ようとするプロセスは、 セマフォの獲得により max_aquire 値を超える場合、 永久にブロックされます。</p><p>リクエスト処理の後、プロセスにより獲得された全てのセマフォのうち、 明示的に開放されていないものが自動的に開放され、警告が表示されます。</p>
	 * @param resource $sem_identifier <p><code>sem_identifier</code> はセマフォのリソースで、 <code>sem_get()</code> によって得られます。</p>
	 * @param bool $nowait <p>セマフォが確保できるまでプロセスを待たせたくない場合に指定します。 <i>true</i> にすると、セマフォをその場で確保できなかった場合に、 この関数は即時に <i>false</i> を返します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sem-acquire.php
	 * @see sem_get(), sem_release()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_acquire($sem_identifier, bool $nowait = FALSE): bool {}

	/**
	 * セマフォ ID を得る
	 * <p><b>sem_get()</b> は、 System V セマフォを指定したキーでアクセスするために使用可能な ID を返します。</p><p>同じキーで <b>sem_get()</b> を 2 度コールした場合、 別のセマフォ ID が返されます。 しかし、どちらの ID も同じそのセマフォをアクセスします。</p>
	 * @param int $key
	 * @param int $max_acquire <p>同時にセマフォを得ることが可能なプロセス数を <code>max_acquire</code> にセットします。</p>
	 * @param int $perm <p>セマフォのパーミッション。 実際には、この値はプロセスが現在そのセマフォに付随している 唯一のプロセスであることがわかった場合にのみセットされます。</p>
	 * @param int $auto_release <p>リクエストの終了時に自動的にセマフォを開放するかどうかを指定します。</p>
	 * @return resource <p>成功した場合に正のセマフォ ID、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sem-get.php
	 * @see sem_acquire(), sem_release(), ftok()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_get(int $key, int $max_acquire = 1, int $perm = 0666, int $auto_release = 1) {}

	/**
	 * セマフォを解放する
	 * <p><b>sem_release()</b> は、そのセマフォが コール元のプロセスにより現在確保されている場合、解放します。 そうでない場合、警告が表示されます。</p><p>セマフォを解放した後、再び確保するには、<code>sem_acquire()</code> をコールします。</p>
	 * @param resource $sem_identifier <p><code>sem_get()</code> が返すセマフォリソースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sem-release.php
	 * @see sem_get(), sem_acquire()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_release($sem_identifier): bool {}

	/**
	 * セマフォを削除する
	 * <p><b>sem_remove()</b> は、指定したセマフォを削除します。</p><p>セマフォを削除した後、そのセマフォにはもうアクセスできません。</p>
	 * @param resource $sem_identifier <p><code>sem_get()</code> が返すセマフォリソース ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sem-remove.php
	 * @see sem_get(), sem_release(), sem_acquire()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function sem_remove($sem_identifier): bool {}

	/**
	 * 共有メモリセグメントを作成またはオープンする
	 * <p><b>shm_attach()</b> は ID を返します。 これは、指定されたキー <code>key</code> で System V 共有メモリにアクセスする際に使用することが可能です。 最初のコールの際に、サイズが <code>memsize</code>、 オプションのパーミッション <code>perm</code> を指定した共有メモリセグメントを作成します。</p><p>同じ <code>key</code> で <b>shm_attach()</b> を 2 回コールした場合は 別の共有メモリ ID が返されますが、両方の ID は同じ共有メモリをアクセスします。 <code>memsize</code> および <code>perm</code> は無視されます。</p>
	 * @param int $key <p>共有メモリセグメント ID を表す数値。</p>
	 * @param int $memsize <p>メモリのサイズ。省略した場合のデフォルトは php.ini の <i>sysvshm.init_mem</i>、あるいは 10000 バイトとなります。</p>
	 * @param int $perm <p>オプションのパーミッション設定。デフォルトは 0666 です。</p>
	 * @return resource <p>共有メモリセグメントの ID を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-attach.php
	 * @see shm_detach(), ftok()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_attach(int $key, int $memsize = NULL, int $perm = 0666) {}

	/**
	 * 共有メモリセグメントへの接続を閉じる
	 * <p><b>shm_detach()</b> は、 <code>shm_attach()</code> で作成され、 指定した <code>shm_identifier</code> を有する共有メモリへの接続を閉じます。 共有メモリは、まだ Unix システム上に存在しており、 データはまだ存在するということを覚えておいてください。</p>
	 * @param resource $shm_identifier <p><code>shm_attach()</code> が返す共有メモリリソースハンドル。</p>
	 * @return bool <p><b>shm_detach()</b> は、常に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-detach.php
	 * @see shm_attach(), shm_remove(), shm_remove_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_detach($shm_identifier): bool {}

	/**
	 * 共有メモリから変数を返す
	 * <p><b>shm_get_var()</b> は、 <code>shm_identifier</code> で指定した共有メモリセグメントから 変数 <code>variable_key</code> を読みこみます。 読み込んだ変数は、まだ共有メモリに存在します。</p>
	 * @param resource $shm_identifier <p>共有メモリセグメント。<code>shm_attach()</code> から取得します。</p>
	 * @param int $variable_key <p>変数のキー。</p>
	 * @return mixed <p>指定したキーの変数を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-get-var.php
	 * @see shm_has_var(), shm_put_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_get_var($shm_identifier, int $variable_key) {}

	/**
	 * 特定のエントリが存在するかどうかを調べる
	 * <p>特定のキーが共有メモリセグメント内に存在するかどうかを調べます。</p>
	 * @param resource $shm_identifier <p><code>shm_attach()</code> で取得した共有メモリセグメント。</p>
	 * @param int $variable_key <p>変数のキー。</p>
	 * @return bool <p>エントリが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-has-var.php
	 * @see shm_get_var(), shm_put_var()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function shm_has_var($shm_identifier, int $variable_key): bool {}

	/**
	 * 共有メモリの変数を挿入または更新する
	 * <p><b>shm_put_var()</b> は、 指定した <code>variable_key</code> を有する 変数 <code>variable</code> の挿入または更新を行います。</p><p><code>shm_identifier</code> が有効な SysV 共有メモリではない場合や リクエストを処理するために充分な共有メモリが残っていない場合は (<b><code>E_WARNING</code></b> レベルの) 警告を発生させます。</p>
	 * @param resource $shm_identifier <p><code>shm_attach()</code> が返す共有メモリリソースハンドル。</p>
	 * @param int $variable_key <p>変数のキー。</p>
	 * @param mixed $variable <p>変数。<code>serialize()</code> がサポートするすべての 型を使うことができます。 通常これは、リソース型と一部の内部オブジェクト (シリアライズできないもの) 以外のすべての型を意味します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-put-var.php
	 * @see shm_get_var(), shm_has_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_put_var($shm_identifier, int $variable_key, $variable): bool {}

	/**
	 * Unix システムから共有メモリを削除する
	 * <p><b>shm_remove()</b> は、共有メモリ <code>shm_identifier</code> を削除します。 全てのデータは破棄されます。</p>
	 * @param resource $shm_identifier <p><code>shm_attach()</code> が返す 共有メモリ ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-remove.php
	 * @see shm_remove_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_remove($shm_identifier): bool {}

	/**
	 * 共有メモリから変数を削除する
	 * <p>指定した<code>variable_key</code> を有する変数を共有メモリから削除し、占有するメモリを解放します。</p>
	 * @param resource $shm_identifier <p><code>shm_attach()</code> が返す 共有メモリ ID。</p>
	 * @param int $variable_key <p>変数のキー。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.shm-remove-var.php
	 * @see shm_remove()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_remove_var($shm_identifier, int $variable_key): bool {}

	/**
	 * 5.2.0 以降
	 */
	define('MSG_EAGAIN', 11);

	/**
	 * 5.2.0 以降
	 */
	define('MSG_ENOMSG', 42);

	/**
	 * <code>integer</code>
	 */
	define('MSG_EXCEPT', 4);

	/**
	 * <code>integer</code>
	 */
	define('MSG_IPC_NOWAIT', 1);

	/**
	 * <code>integer</code>
	 */
	define('MSG_NOERROR', 2);

}
