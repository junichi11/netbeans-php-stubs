<?php



namespace {

	/**
	 * <p><b>SessionHandler</b> は特殊なクラスで、 これを継承したクラスを作れば PHP が内部的に使っているセッション保存ハンドラを拡張できます。 このクラスには七つのメソッドがあり、それぞれが七つのセッション保存ハンドラコールバック (<code>open</code>, <code>close</code>, <code>read</code>, <code>write</code>, <code>destroy</code>, <code>gc</code> および <code>create_sid</code>) に対応しています。デフォルトでは、このクラスは session.save_handler で定義された内部セッションハンドラをラップします。 通常は <code>files</code> がデフォルトになっています。 それ以外には、PHP の拡張モジュールとして提供されている SQLite (<code>sqlite</code>) や Memcache (<code>memcache</code>) そして Memcached (<code>memcached</code>) が使えます。</p>
	 * <p><b>SessionHandler</b> のインスタンスを <code>session_set_save_handler()</code> でハンドラとして指定すると、 そのインスタンスが現在の保存ハンドラをラップします。 <b>SessionHandler</b> を継承したクラスを作ると、 親クラスのメソッド、つまり PHP の内部セッションハンドラのメソッドをラップして オーバーライドしたり処理を割り込ませたりフィルタをかけたりできるようになります。</p>
	 * <p>これを利用すると、たとえば <code>read</code> と <code>write</code> メソッドに処理を割り込ませ、セッションデータの暗号化/復号の処理を追加することができます。 あるいは、ガベージコレクションコールバック <code>gc</code> を完全に自前の処理で置き換えてしまうこともできます。</p>
	 * <p><b>SessionHandler</b> は現在の内部保存ハンドラのメソッドをラップしているので、 先述の暗号化の例は任意の保存ハンドラに適用することができます。その際に、ハンドラの内部的な動きを知っておく必要はありません。</p>
	 * <p>このクラスを使うには、まず最初に公開したいハンドラを session.save_handler で設定してから、 <b>SessionHandler</b> あるいはそれを継承したクラスのインスタンスを <code>session_set_save_handler()</code> に渡します。</p>
	 * <p>このクラスのコールバックメソッドは PHP が内部的にコールするものであり、 ユーザーのコードから呼ばれることは想定していないことに注意しましょう。 コールバックの返り値も、PHP が内部的に利用するだけです。 セッションの処理の流れについての詳しい情報は <code>session_set_save_handler()</code> を参照ください。</p>
	 * @link https://php.net/manual/ja/class.sessionhandler.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SessionHandler implements \SessionHandlerInterface, \SessionIdInterface {

		/**
		 * セッションを閉じる
		 * <p>現在のセッションを閉じます。この関数はセッションを閉じるときに自動的に実行されます。 あるいは、明示的に <code>session_write_close()</code> 経由で実行することもできます (このときは、まず最初に <code>SessionHandler::write()</code> をコールします)。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>close</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしたりできます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::close()</code> のドキュメントを参照ください。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * 新規セッション ID を返す
		 * <p>新規セッション ID を生成して返します。</p>
		 * @return string <p>デフォルトのセッション・ハンドラに対して有効なセッションです。</p>
		 * @link https://php.net/manual/ja/sessionhandler.create-sid.php
		 * @see session_id(), session_create_id()
		 * @since PHP 5 >= 5.5.1, PHP 7
		 */
		public function create_sid(): string {}

		/**
		 * セッションを破棄する
		 * <p>セッションを破棄します。<code>session_regenerate_id()</code> (<code>$destory</code> を <b><code>TRUE</code></b> にしたとき) や <code>session_destroy()</code> からコールされ、<code>session_decode()</code> が失敗したときにもコールされます。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>destroy</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしてフィルタを追加したりできます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::destroy()</code> のドキュメントを参照ください。</p>
		 * @param string $session_id <p>破棄するセッション ID。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.destroy.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function destroy(string $session_id): bool {}

		/**
		 * 古いセッションを削除する
		 * <p>有効期限を過ぎたセッションを削除します。PHP がセッションを開始したとき、あるいは <code>session_start()</code> を実行したときにコールされます。 コールされる頻度は、session.gc_divisor および session.gc_probability の設定に基づいて決まります。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>gc</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしてフィルタを追加したりできます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::gc()</code> のドキュメントを参照ください。</p>
		 * @param int $maxlifetime <p>直近の <code>maxlifetime</code> 秒の間に更新されていないセッションを削除します。</p>
		 * @return int <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.gc.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function gc(int $maxlifetime): int {}

		/**
		 * セッションを開始する
		 * <p>新しいセッションを作成するか、あるいは既存のセッションを再度初期化します。 PHP が自動的にセッションを開始させたり、あるいは <code>session_start()</code> を実行したときにコールされます。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>open</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしてフィルタを追加したりできます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::open()</code> のドキュメントを参照ください。</p>
		 * @param string $save_path <p>セッションを格納/取得するパス。</p>
		 * @param string $session_name <p>セッション名。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.open.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function open(string $save_path, string $session_name): bool {}

		/**
		 * セッションのデータを読み込む
		 * <p>セッションのデータをセッションストレージから読み込み、その結果を PHP の内部処理用に返します。 このメソッドは PHP がセッションを自動的に開始したとき、あるいは <code>session_start()</code> を実行したときにコールされ、内部的に <code>SessionHandler::open()</code> で処理されます。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>read</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしてフィルタを追加したり (親の <code>read</code> メソッドが返す <code>$data</code> を復号したりなど) できます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::read()</code> のドキュメントを参照ください。</p>
		 * @param string $session_id <p>データを読み込むセッションの id。</p>
		 * @return string <p>読み込んだデータを常に文字列で返します。何も読まなかった場合は空文字列を返さなければなりません。 この値は、PHP の内部で処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.read.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function read(string $session_id): string {}

		/**
		 * セッションのデータを書き込む
		 * <p>セッションのデータをセッションストレージに書き込みます。 リクエストの終了時や <code>session_write_close()</code> を実行したとき、そして <code>session_register_shutdown()</code> が失敗したときにコールされます。 PHP は、このメソッドの返り値を受け取るとすぐに <code>SessionHandler::close()</code> をコールします。</p><p>このメソッドは、このハンドラが <code>session_set_save_handler()</code> で設定される前に ini 設定 session.save_handler で定義されていた PHP の保存ハンドラをラップします。</p><p>このクラスを継承して拡張する場合は、親の <code>write</code> メソッドをコールすればこのメソッドのラッパーを実行でき、それに付随する内部コールバックも実行されます。 こうすれば、メソッドをオーバーライドしたり処理を横取りしてフィルタを追加したり (親の <code>write</code> メソッドに送る前に <code>$data</code> を暗号化したりなど) できます。</p><p>このメソッドに関する詳細は、 <code>SessionHandlerInterface::write()</code> のドキュメントを参照ください。</p>
		 * @param string $session_id <p>セッション id。</p>
		 * @param string $session_data <p>エンコードされたセッションのデータ。 これは、PHP が内部的にスーパーグローバル $_SESSION をエンコードしてシリアライズし、それを渡したものです。 セッションが使うシリアライズ方式は、通常のシリアライズとは別のものであることに注意しましょう。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandler.write.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function write(string $session_id, string $session_data): bool {}
	}

	/**
	 * <p><b>SessionHandlerInterface</b> は インターフェイス で、カスタムセッションハンドラを作成する際のプロトタイプを定義します。 自作のセッションハンドラを <i>オブジェクト指向型</i> の起動方法で <code>session_set_save_handler()</code> に渡すには、このインターフェイスを実装しておく必要があります。</p>
	 * <p>このクラスのコールバックメソッドは PHP が内部的にコールするものであり、 ユーザーのコードから呼ばれることは想定していないことに注意しましょう。</p>
	 * @link https://php.net/manual/ja/class.sessionhandlerinterface.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SessionHandlerInterface {

		/**
		 * セッションを閉じる
		 * <p>現在のセッションを閉じます。この関数はセッションを閉じるときに自動的に実行されます。 あるいは、明示的に <code>session_write_close()</code> 経由で実行することもできます。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function close(): bool;

		/**
		 * セッションを破棄する
		 * <p>セッションを破棄します。<code>session_regenerate_id()</code> ($destroy = <b><code>TRUE</code></b>) や <code>session_destroy()</code> からコールされ、<code>session_decode()</code> が失敗したときにもコールされます。</p>
		 * @param string $session_id <p>破棄するセッション ID。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.destroy.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function destroy(string $session_id): bool;

		/**
		 * 古いセッションを削除する
		 * <p>有効期限を過ぎたセッションを削除します。 session.gc_divisor、 session.gc_probability および session.gc_maxlifetime の設定に基づいて、 <code>session_start()</code> からコールされます。</p>
		 * @param int $maxlifetime <p>直近の <code>maxlifetime</code> 秒の間に更新されていないセッションを削除します。</p>
		 * @return int <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.gc.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function gc(int $maxlifetime): int;

		/**
		 * セッションを開始する
		 * <p>既存のセッションを再度初期化するか、あるいは新しいセッションを作成します。 セッションが開始したり <code>session_start()</code> が実行されたりしたときにコールされます。</p>
		 * @param string $save_path <p>セッションを格納/取得するパス。</p>
		 * @param string $session_name <p>セッション名。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.open.php
		 * @see session_name()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function open(string $save_path, string $session_name): bool;

		/**
		 * セッションのデータを読み込む
		 * <p>セッションのデータをセッションストレージから読み込み、その結果を返します。 セッションを開始した直後、あるいは <code>session_start()</code> を実行したときにコールされます。 このメソッドがコールされる直前に <code>SessionHandlerInterface::open()</code> が実行されることに注意しましょう。</p><p>このメソッドは、セッションが開始するときに PHP 自身がコールします。 このメソッドは、指定したセッション ID のセッションデータをストレージから取得しなければなりません。 返す文字列の書式は、<code>SessionHandlerInterface::write()</code> に渡されたものと同様にシリアライズされたものでなければなりません。 データが見つからない場合は空文字列を返します。</p><p>このメソッドが返すデータは、PHP が内部的にデコードします。デコードに使うメソッドは session.serialize_handler で指定します。デコードした結果をスーパーグローバル $_SESSION に格納します。</p><p>シリアライズ方式は <code>unserialize()</code> とは異なっており、アクセスするためには <code>session_decode()</code> を使うことに注意しましょう。</p>
		 * @param string $session_id <p>セッション id。</p>
		 * @return string <p>読み込んだデータをエンコードした文字列を返します。 何も読まなかった場合は空文字列を返さなければなりません。 この値は、PHP が内部的に使うためだけのものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.read.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function read(string $session_id): string;

		/**
		 * セッションのデータを書き込む
		 * <p>セッションのデータをセッションストレージに書き込みます。 <code>session_write_close()</code> からコールされ、 <code>session_register_shutdown()</code> が失敗したときや通常のシャットダウン時にもコールされます。 <code>SessionHandlerInterface::close()</code> がこの関数の直後にコールされることに注意しましょう。</p><p>PHP は、セッションの保存と終了の準備ができたときにこのメソッドをコールします。 スーパーグローバル $_SESSION のセッションデータをエンコードして 文字列にシリアライズし、セッション ID とともにこのメソッドに渡して格納させます。 シリアライズの方式は session.serialize_handler で設定します。</p><p>このメソッドが PHP からコールされるのは、通常は出力バッファが閉じた後であることに注意しましょう。ただし、 明示的に <code>session_write_close()</code> をコールした場合は別です。</p>
		 * @param string $session_id <p>セッション id。</p>
		 * @param string $session_data <p>エンコードされたセッションデータ。 これは、PHP がスーパーグローバル $_SESSION の内容を内部的にシリアライズした結果の文字列で、それがこのパラメータに渡されます。 セッションのシリアライズには通常とは別の方式を使っていることに注意しましょう。</p>
		 * @return bool <p>返り値 (通常は、<b><code>TRUE</code></b> が成功そして <b><code>FALSE</code></b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。</p>
		 * @link https://php.net/manual/ja/sessionhandlerinterface.write.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function write(string $session_id, string $session_data): bool;
	}

	/**
	 * @link https://php.net/manual/ja/class.sessionidinterface.php
	 * @since PHP 5 >= 5.5.1, PHP 7
	 */
	class SessionIdInterface {

		/**
		 * Create session ID
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/sessionidinterface.create-sid.php
		 * @since PHP 5 >= 5.5.1, PHP 7
		 */
		abstract public function create_sid(): string;
	}

	/**
	 * @link https://php.net/manual/ja/class.sessionupdatetimestamphandlerinterface.php
	 * @since PHP 7
	 */
	class SessionUpdateTimestampHandlerInterface {

		/**
		 * Update timestamp
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $key
		 * @param string $val
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the timestamp was updated, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/sessionupdatetimestamphandlerinterface.updatetimestamp.php
		 * @since PHP 7
		 */
		abstract public function updateTimestamp(string $key, string $val): bool;

		/**
		 * Validate ID
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $key
		 * @return bool <p>Returns <b><code>TRUE</code></b> for valid ID, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/sessionupdatetimestamphandlerinterface.validateid.php
		 * @since PHP 7
		 */
		abstract public function validateId(string $key): bool;
	}

	/**
	 * session 配列の変更を破棄してセッションを終了します
	 * <p><b>session_abort()</b> は、データを保存せずにセッションを終了します。 したがって、セッション・データの元の値が保持されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-abort.php
	 * @see session_start(), session_reset(), session_commit()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function session_abort(): bool {}

	/**
	 * 現在のキャッシュの有効期限を返す
	 * <p><b>session_cache_expire()</b> は現在の <i>session.cache_expire</i> の設定を返します。</p><p>リクエストがあった時点で、キャッシュの有効期限は session.cache_expire で設定されたデフォルト値にリセットされます。 そのため、すべてのリクエストにおいて (そして<code>session_start()</code> をコールする前に) <b>session_cache_expire()</b> をコールする必要があります。</p>
	 * @param string $new_cache_expire <p><code>new_cache_expire</code> が指定された場合、 現在のキャッシュの有効期限は、 <code>new_cache_expire</code> で置換されます。</p> <p></p><p><b>注意</b>:  <i>session.cache_limiter</i>が <i>nocache</i><i>以外の</i>値にセットされている場合にのみ <code>new_cache_expire</code>が有効となります。 </p>
	 * @return int <p><i>session.cache_expire</i> の現在の設定を返します。 返り値は分単位で、デフォルトは 180 です。</p>
	 * @link https://php.net/manual/ja/function.session-cache-expire.php
	 * @see session_cache_limiter()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function session_cache_expire(string $new_cache_expire = NULL): int {}

	/**
	 * 現在のキャッシュリミッタを取得または設定する
	 * <p><b>session_cache_limiter()</b> は、 現在のキャッシュリミッタの名前を返します。</p><p>キャッシュリミッタは、クライアントに送信されるキャッシュ制御用の HTTPヘッダを制御します。これらのヘッダは、ページの内容をクライアントやプロキシがキャッシュ する規則を定義します。例えば、キャッシュリミッタを <i>nocache</i>に設定した場合、クライアント/プロキシのキャッ シュは無効になります。しかし、<i>public</i>の場合は、 キャッシュを許可します。<i>private</i>と設定すること も可能で、この場合、プロキシがキャッシュすることは許可しませんが クライアントがキャッシュすることは許可されます。</p><p><i>private</i>モードにおいて、Expireヘッダがクライア ントに送信されます。これは、Mozilla のようないくつかのブラウザを混乱させます。これを避けるには、 <i>private_no_expire</i>モードを使用してください。 このモードでは、<i>Expire</i>ヘッダはクライアントに送信されません。</p><p>キャッシュリミッタを <i>''</i> にすると、 キャッシュヘッダの自動送信を完全に無効化します。</p><p>キャッシュリミッタは、リクエスト開始時に <i>session.cache_limiter</i>に保存されたデフォルト値 にリセットされます。つまり、各リクエスト毎に(アウトプットバッファ が無効な場合は、<code>session_start()</code>がコールされる 前に) <b>session_cache_limiter()</b>をコールする必要 があります。</p>
	 * @param string $cache_limiter <p><code>cache_limiter</code> が指定された場合、現在のキャッシュリミッタは新しい値に変更されます。</p>  <b>取り得る値</b>   値 送信されるヘッダ     <i>public</i>    <pre>Expires: (未来のいつか、session.cache_expires による) Cache-Control: public, max-age=(未来のいつか、session.cache_expire による) Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)</pre>      <i>private_no_expire</i>    <pre>Cache-Control: private, max-age=(session.cache_expire ぶんだけ未来), pre-check=(session.cache_expire ぶんだけ未来) Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)</pre>      <i>private</i>    <pre>Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: private, max-age=(session.cache_expire ぶんだけ未来), pre-check=(session.cache_expire ぶんだけ未来) Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)</pre>      <i>nocache</i>    <pre>Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0 Pragma: no-cache</pre>
	 * @return string <p>現在のキャッシュリミッタの名前を返します。</p>
	 * @link https://php.net/manual/ja/function.session-cache-limiter.php
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function session_cache_limiter(string $cache_limiter = NULL): string {}

	/**
	 * session_write_close() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>session_write_close()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.session-commit.php
	 * @since PHP 4 >= 4.4.0, PHP 5, PHP 7
	 */
	function session_commit(): bool {}

	/**
	 * Create new session id
	 * <p><b>session_create_id()</b> is used to create new session id for the current session. It returns collision free session id.</p><p>If session is not active, collision check is omitted.</p><p>Session ID is created according to php.ini settings.</p><p>It is important to use the same user ID of your web server for GC task script. Otherwise, you may have permission problems especially with files save handler.</p>
	 * @param string $prefix <p>If <code>prefix</code> is specified, new session id is prefixed by <code>prefix</code>. Not all characters are allowed within the session id. Characters in the range <i>a-z A-Z 0-9 , (comma) and - (minus)</i> are allowed.</p>
	 * @return string <p><b>session_create_id()</b> returns new collision free session id for the current session. If it is used without active session, it omits collision check.</p>
	 * @link https://php.net/manual/ja/function.session-create-id.php
	 * @see session_regenerate_id(), session_start()
	 * @since PHP 7 >= 7.1.0
	 */
	function session_create_id(string $prefix = NULL): string {}

	/**
	 * セッションエンコードされた文字列からセッションデータをデコードする
	 * <p><b>session_decode()</b> は、 <code>$data</code> のセッションデータをデコードし、 スーパーグローバル $_SESSION にその結果を格納します。</p><p>デフォルトのアンシリアライズの方法は PHP が内部的に実装しているものであり、 <code>unserialize()</code> とは違います。 シリアライズの方法は、session.serialize_handler で設定できます。</p>
	 * @param string $data <p>エンコードされたデータ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-decode.php
	 * @see session_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_decode(string $data): bool {}

	/**
	 * セッションに登録されたデータを全て破棄する
	 * <p><b>session_destroy()</b>は、現在のセッションに 関連づけられたすべてのデータを破棄します。この関数は、 セッションに関するグローバル変数を破棄しません。 また、セッションクッキーを破棄しません。 セッション変数の利用を再開するには <code>session_start()</code> をコールする必要があります。</p><p><b>注意</b>:  You do not have to call <b>session_destroy()</b> from usual code. Cleanup $_SESSION array rather than destroying session data. </p><p>セッションを切断するには、 セッション ID の割り当ても解除する必要があります。セッション ID の受け渡しに クッキーが使用されている場合（デフォルト）には、セッションクッキーも 削除されなければなりません。 そのためには <code>setcookie()</code> が利用できます。</p><p>When session.use_strict_mode is enabled. You do not have to remove obsolete session ID cookie because session module will not accept session ID cookie when there is no data associated to the session ID and set new session ID cookie. Enabling session.use_strict_mode is recommended for all sites.</p><p>Immediate session deletion may cause unwanted results. When there is concurrent requests, other connections may see sudden session data loss. e.g. Requests from JavaScript and/or requests from URL links.</p><p>Although current session module does not accept empty session ID cookie, but immediate session deletion may result in empty session ID cookie due to client(browser) side race condition. This will result that the client creates many session ID needlessly.</p><p>To avoid these, you must set deletion time-stamp to $_SESSION and reject access while later. Or make sure your application does not have concurrent requests. This applies to <code>session_regenerate_id()</code> also.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-destroy.php
	 * @see session_reset(), session_regenerate_id(), unset(), setcookie()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_destroy(): bool {}

	/**
	 * 現在のセッションデータを、セッションエンコードされた文字列に変換する
	 * <p><b>session_encode()</b> は、 現在のセッションの内容をシリアライズした文字列を返します． 現在のセッションの内容は、スーパーグローバル $_SESSION から取得します。</p><p>デフォルトのアンシリアライズの方法は PHP が内部的に実装しているものであり、 <code>unserialize()</code> とは違います。 シリアライズの方法は、session.serialize_handler で設定できます。</p>
	 * @return string <p>現在のセッションの内容をエンコードしたものを返します。</p>
	 * @link https://php.net/manual/ja/function.session-encode.php
	 * @see session_decode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_encode(): string {}

	/**
	 * セッションデータのガベージコレクションを実行する
	 * <p><b>session_gc()</b> は、セッションデータの GC (ガベージコレクション) を実行するために使用されます。PHPは、デフォルトで確率ベースのセッション GC を行います。</p><p>確率ベースの GC は多少は機能しますが、いくつかの問題があります。 1) トラフィックが少ないサイトのセッションデータは、優先期間内に削除されないことがあります。 2) トラフィックの多いサイトでは、GC が頻繁になる可能性があります。 3) ユーザーの要求の際に GC が実行され、ユーザーは GC 遅延を感じます。</p><p>そのため、例えば UNIX 系のシステムでは「cron」を使用して、 本稼動システムに対して定期的に GC を実行することをお勧めします。 session.gc_probability を 0 に設定して、 確率ベースのGCを無効にしてください。</p>
	 * @return int <p><b>session_gc()</b> は、 成功時には削除されたセッションデータの数、 失敗時には <b><code>FALSE</code></b> を返します。</p><p>古いセーブハンドラは、削除されたセッションデータの数を返さず、成功/失敗フラグのみを返します。 この場合、実際に削除されたデータにかかわらず、削除されたセッションデータの数は 1 になります。</p>
	 * @link https://php.net/manual/ja/function.session-gc.php
	 * @see session_start(), session_destroy()
	 * @since PHP 7 >= 7.1.0
	 */
	function session_gc(): int {}

	/**
	 * セッションクッキーのパラメータを得る
	 * <p>セッションクッキーのパラメータを取得します。</p>
	 * @return array <p>現在のセッションクッキーの情報を配列として返します。 この配列には次のような項目が含まれています。</p><ul> <li>  "lifetime" - クッキーの生存期間(lifetime)  </li> <li>  "path" - 情報が保存されている場所のパス  </li> <li>  "domain" - クッキーのドメイン  </li> <li>  "secure" - クッキーはセキュアな接続でのみ送信されます。  </li> <li>  "httponly" - クッキーは HTTP を通してのみアクセス可能となります。  </li> </ul>
	 * @link https://php.net/manual/ja/function.session-get-cookie-params.php
	 * @see session_set_cookie_params()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_get_cookie_params(): array {}

	/**
	 * 現在のセッション ID を取得または設定する
	 * <p><b>session_id()</b> は現在のセッション ID を取得 または設定するために使用されます。</p><p>現在の名前とセッション ID を、URL に追加可能な文字列として取得する ために定数 <b><code>SID</code></b> も使用できます。 セッションハンドリング も参照してください。</p>
	 * @param string $id <p><code>id</code> が指定された場合、現在の セッション ID を置換します。その際、 この関数は <code>session_start()</code> より前にコールされている必要があります。 セッションハンドラによっては、セッション ID として使用できる文字に 制限がある場合があります。例えば、ファイルによるセッションハンドラでは セッション ID として使える文字は <i>a-z A-Z 0-9 , (カンマ) そして - (マイナス)</i> に限られます!</p> <p><b>注意</b>:  セッション保持にクッキーを使用している場合、 <b>session_id()</b> において <code>id</code> 引数を指定すると、 現在のセッション ID がセットされるものと まったく同一であるかどうかに関わらず、 <code>session_start()</code> が呼び出される際に常に新しいクッキーが送信されます。 </p>
	 * @return string <p><b>session_id()</b> は現在のセッションのセッション ID を返します。 現在のセッションが存在しない (現在のセッション ID が存在しない) 場合は空文字列 (<i>""</i>) を返します。</p>
	 * @link https://php.net/manual/ja/function.session-id.php
	 * @see session_regenerate_id(), session_start(), session_set_save_handler()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_id(string $id = NULL): string {}

	/**
	 * 変数がセッションに登録されているかどうかを調べる
	 * <p>グローバル変数がセッションに登録されているかどうかを調べます。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
	 * @param string $name <p>変数名。</p>
	 * @return bool <p><b>session_is_registered()</b> は、 <code>name</code> という名前のグローバル変数が現在のセッションに登録されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-is-registered.php
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_is_registered(string $name): bool {}

	/**
	 * 現在のセッションモジュールを取得または設定する
	 * <p><b>session_module_name()</b>は、 現在のセッションモジュールの名前を返します。</p>
	 * @param string $module <p><code>module</code> が指定された場合、 そのモジュールを代わりに使用します。</p>
	 * @return string <p>現在のセッションモジュールの名前を返します。</p>
	 * @link https://php.net/manual/ja/function.session-module-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_module_name(string $module = NULL): string {}

	/**
	 * 現在のセッション名を取得または設定する
	 * <p><b>session_name()</b> は、現在のセッション名を返します。 <code>name</code> を渡すと、 <b>session_name()</b> はセッション名を上書きして元のセッション名を返します。</p><p>リクエストが開始された際にセッション名はリセットされ、 <i>session.name</i> に保存されたデフォルト値に戻ります。 よって、各リクエスト毎に(そして <code>session_start()</code> または <code>session_register()</code> をコールする前に) <b>session_name()</b> をコールする必要があります。</p>
	 * @param string $name <p>セッションの名前を参照します。これは、クッキーや URL (例: <i>PHPSESSID</i>) で使われます。 セッション名は英数字のみで構成されている必要があり、また、 短く、その内容が分かるようなものである必要があります (これは、クッキー警告を有効にしているユーザー用です)。</p> <p></p> <b>警告</b> <p>セッション名は数字だけで構成することはできません。 少なくとも文字がひとつ以上現れる必要があります。そうでない場合、 新規セッション ID が毎回生成されます。</p>
	 * @return string <p>現在のセッションの名前を返します。 <code>name</code> を渡すと、 <b>session_name()</b> はセッション名を上書きして元のセッション名を返します。</p>
	 * @link https://php.net/manual/ja/function.session-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_name(string $name = NULL): string {}

	/**
	 * 現在のセッションIDを新しく生成したものと置き換える
	 * <p><b>session_regenerate_id()</b> は現在のセッションIDを 新しいものと置き換えます。その際、現在のセッション情報は維持されます。</p><p>session.use_trans_sid が有効な場合は、 <b>session_regenerate_id()</b> を呼んでから出力を始めないといけません。 それ以前の出力には、古いセッション ID が使われます。</p><p>Current session_regenerate_id does not handle unstable network well. e.g. Mobile and WiFi network. Therefore, you may experience lost session by calling session_regenerate_id.</p><p>You should not destroy old session data immediately, but should use destroy time-stamp and control access to old session ID. Otherwise, concurrent access to page may result in inconsistent state, or you may have lost session, or it may cause client(browser) side race condition and may create many session ID needlessly. Immediate session data deletion disables session hijack attack detection and prevention also.</p>
	 * @param bool $delete_old_session <p>関連付けられた古いセッションを削除するかどうか。 You should not delete old session if you need to avoid races caused by deletion or detect/avoid session hijack attacks.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-regenerate-id.php
	 * @see session_id(), session_create_id(), session_start(), session_destroy(), session_reset(), session_name()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function session_regenerate_id(bool $delete_old_session = FALSE): bool {}

	/**
	 * 現在のセッションに1つ以上の変数を登録する
	 * <p><b>session_register()</b> の引数の数は可変であり、 各引数は変数名を保持する文字列または変数名からなる配列 とすることが可能です。 各変数名が処理される毎に、<b>session_register()</b> は、その変数名のグローバル変数を現在のセッションに登録します。</p><p>配列 $_SESSION の適当なメンバに設定をするだけでもセッション変数を作成することが可能です。</p><p>この関数をコールする前に <code>session_start()</code> をコールしていない場合、暗黙のうちに引数を付けずに <code>session_start()</code> がコールされます。 $_SESSION を使う場合はこの動作とは違い、 使用前に必ず <code>session_start()</code> をコールする必要があります。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
	 * @param mixed $name <p>変数名を含む文字列、 あるいは変数名や配列を含む配列。</p>
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-register.php
	 * @see session_is_registered(), session_unregister()
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_register($name, $_ = NULL): bool {}

	/**
	 * セッションのシャットダウン関数
	 * <p><code>session_write_close()</code> をシャットダウン関数として登録します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.session-register-shutdown.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function session_register_shutdown(): void {}

	/**
	 * session 配列を元の値で再初期化します
	 * <p><b>session_reset()</b> は、セッション・ストレージに保存されていた元の値でセッションを再初期化します。 この関数は、アクティブなセッションを必要とし、$_SESSION 内の変更を破棄します。</p>
	 * @return bool <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.session-reset.php
	 * @see session_start(), session_abort(), session_commit()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function session_reset(): bool {}

	/**
	 * 現在のセッションデータ保存パスを取得または設定する
	 * <p><b>session_save_path()</b> は、 現在のセッションデータ保存パスを返します。</p>
	 * @param string $path <p>セッションデータのパス。これを指定すると、 データを保存するパスが変更されます。ただしそのためには <code>session_start()</code> がコールされる前に <b>session_save_path()</b> がコールされている必要があります。</p> <p></p> <p><b>注意</b>:</p> <p>いくつかのオペレーションシステムでは、多くの小さなファイルを効率的に 処理するファイルシステム上にパスを指定することが望ましいです。 例えば、Linux では ext2fs よりも reiserfs の方が性能面でより 優れています。</p>
	 * @return string <p>現在のデータ保存先ディレクトリのパスを返します。</p>
	 * @link https://php.net/manual/ja/function.session-save-path.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_save_path(string $path = NULL): string {}

	/**
	 * セッションクッキーパラメータを設定する
	 * <p>ファイル php.ini で定義されたクッキーパラメータを設定します。 この関数の効果が持続するのは、スクリプトの実行が終了するまでです。 したがって、リクエスト毎や <code>session_start()</code> がコールされる前に <b>session_set_cookie_params()</b> をコールする必要があります。</p><p>この関数は、PHP の ini 設定の値を実行時に上書きします。値の取得には <code>ini_get()</code> が使えます。</p>
	 * @param int $lifetime <p>セッションクッキーの 有効期限。秒数で定義します。</p>
	 * @param string $path <p>クッキーが動作するドメイン上の パス。単一のスラッシュ ('/') を指定すると、ドメイン上のすべてのパスで動作します。</p>
	 * @param string $domain <p>クッキーの ドメイン。たとえば 'www.php.net'。 すべてのサブドメインでクッキーを有効にしたい場合は、先頭にドットをつけて '.php.net' のようにします。</p>
	 * @param bool $secure <p><b><code>TRUE</code></b> の場合は、セキュア な接続の場合にのみクッキーを送信します。</p>
	 * @param bool $httponly <p><b><code>TRUE</code></b> の場合は、PHP でセッションクッキーを設定する際に httponly フラグの送信を試みます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-set-cookie-params.php
	 * @see session_get_cookie_params()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_set_cookie_params(int $lifetime, string $path = NULL, string $domain = NULL, bool $secure = FALSE, bool $httponly = FALSE): bool {}

	/**
	 * ユーザー定義のセッション保存関数を設定する
	 * <p>PHP 5.4 以降は次のプロトタイプでも登録できます。</p><p><b>session_set_save_handler()</b> は、セッションに 関連するデータを保存および取得するために使用されるユーザー定義の セッション保存関数を設定します。この関数は、PHP セッションにより 提供されるもの以外の保存方法を使用したい場合に有用です。 例えば、セッションデータをローカルデータベースに保存します。</p>
	 * @param callable $open
	 * @param callable $close
	 * @param callable $read
	 * @param callable $write
	 * @param callable $destroy
	 * @param callable $gc
	 * @param callable $create_sid
	 * @param callable $validate_sid
	 * @param callable $update_timestamp
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-set-save-handler.php
	 * @see register_shutdown_function(), session_register_shutdown()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_set_save_handler(callable $open, callable $close, callable $read, callable $write, callable $destroy, callable $gc, callable $create_sid = NULL, callable $validate_sid = NULL, callable $update_timestamp = NULL): bool {}

	/**
	 * 新しいセッションを開始、あるいは既存のセッションを再開する
	 * <p><b>session_start()</b> は、セッションを作成します。 もしくは、リクエスト上で GET, POST またはクッキーにより渡されたセッション ID に基づき現在のセッションを復帰します。</p><p><b>session_start()</b> がコールされたりセッションが自動的に開始したりするときに、 PHP はセッションの open ハンドラおよび read ハンドラをコールします。 このハンドラとしては、デフォルトで組み込まれている保存ハンドラの他に PHP 拡張モジュールで提供されているもの (SQLite や Memcached など) も使えます。また、自作のハンドラを <code>session_set_save_handler()</code> で定義することもできます。 read コールバックは既存のセッションデータ (独自のシリアライズフォーマットで保存されているもの) を読み込み、 それを復元して自動的にスーパーグローバル $_SESSION に格納します。</p><p>名前付きのセッションを使用したい場合、 <b>session_start()</b> の前に <code>session_name()</code> をコールする必要があります。</p><p><b>session_start()</b> は、 session.use_trans_sid が有効の場合に URL 書換え用の内部出力ハンドラを登録します。</p><p>ユーザーが <code>ob_start()</code> と共に <i>ob_gzhandler</i> または類似のものを使用している場合、 出力ハンドラの順番は正しく出力を行うために重要です。例えば、 セッション開始時にユーザーは <i>ob_gzhandler</i> を登録する必要があります。</p>
	 * @param array $options <p>オプションの連想配列を指定することができます。これは、現在設定されている セッションの設定ディレクティブ を上書きします。 連想配列のキーにはプレフィックス <i>session.</i> を含めてはいけません。</p> <p>通常の設定ディレクティブ群に加えて、 <i>read_and_close</i> オプションを指定することもできます。 これを <b><code>TRUE</code></b> にすると、セッションを読み込んだらその場ですぐにクローズします。 セッションのデータを書き換えるつもりがない場合は、こうしておけば、意図せぬロックを防げます。</p>
	 * @return bool <p>この関数は、セッションが正常に開始した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-start.php
	 * @see session_id()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_start(array $options = array()): bool {}

	/**
	 * 現在のセッションの状態を返す
	 * <p><b>session_status()</b> を使うと、現在のセッションの状態を取得できます。</p>
	 * @return int <ul> <li> セッションが無効な場合は <b><code>PHP_SESSION_DISABLED</code></b> </li> <li> セッションが有効だけれどもセッションが存在しない場合は <b><code>PHP_SESSION_NONE</code></b> </li> <li> セッションが有効で、かつセッションが存在する場合は <b><code>PHP_SESSION_ACTIVE</code></b> </li> </ul>
	 * @link https://php.net/manual/ja/function.session-status.php
	 * @see session_start()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function session_status(): int {}

	/**
	 * 現在のセッションから変数の登録を削除する
	 * <p><b>session_unregister()</b> は現在のセッションから <code>name</code> という名前のグローバル変数の登録を削除します。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
	 * @param string $name <p>変数名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-unregister.php
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_unregister(string $name): bool {}

	/**
	 * 全てのセッション変数を開放する
	 * <p>関数 <b>session_unset()</b> は現在登録されている全てのセッション変数を開放します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-unset.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_unset(): bool {}

	/**
	 * セッションデータを書き込んでセッションを終了する
	 * <p>現在のセッションを終了し、セッションデータを書き込みます。</p><p>セッションデータは、<b>session_write_close()</b> をコールしなくても、スクリプト終了時に保存されます。しかし、 セッションデータは、同時書き込みを防ぐためにロックされるため、 ある時点であるセッションの処理ができるスクリプトは、1つだけです。 セッションでフレームセットを使用する場合、 このロックのためにフレームがひとつずつロードされるような経験をするでしょう。 セッションへの全ての変更が行われるとすぐにセッションを終了することにより、 全てのフレームのロードに要する時間を減らすことができます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-write-close.php
	 * @see session_register_shutdown()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function session_write_close(): bool {}

	/**
	 * PHP 5.4.0 以降で導入。セッションが有効で、かつセッションが存在する場合の <code>session_status()</code> の返り値。
	 */
	define('PHP_SESSION_ACTIVE', 2);

	/**
	 * PHP 5.4.0 以降で導入。セッションが無効な場合の <code>session_status()</code> の返り値。
	 */
	define('PHP_SESSION_DISABLED', 0);

	/**
	 * PHP 5.4.0 以降で導入。セッションが有効だけれどもセッションが存在しない場合の <code>session_status()</code> の返り値。
	 */
	define('PHP_SESSION_NONE', 1);

	/**
	 * <i>"name=ID"</i> 形式でセッション名とセッション ID を格納している定数。 セッション ID がセッションクッキーに適切にセットされている場合には空文字列が入る。 これは <code>session_id()</code> が返す ID と同一になる。
	 */
	define('SID', null);

}
