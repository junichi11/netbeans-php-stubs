<?php



/**
 * <p>memcache サーバーへの接続をあらわします。</p>
 * @link http://php.net/manual/ja/class.memcache.php
 * @since PECL memcache >= 0.2.0
 */
class Memcache {

	/**
	 * サーバーに項目を追加する
	 * <p><b>Memcache::add()</b> は、サーバーに同名のキーが存在しない 場合に限り、<code>key</code> というキーで 値 <code>var</code> を格納します。 <b>memcache_add()</b> 関数を使用することも可能です。</p>
	 * @param string $key <p>項目に関連付けられたキー。</p>
	 * @param mixed $var <p>格納する値。文字列および整数値はそのままの形式で、それ以外の型は シリアライズされて格納されます。</p>
	 * @param int $flag <p>項目を圧縮して格納する場合に <b><code>MEMCACHE_COMPRESSED</code></b> を使用します (zlib を使用します)。</p>
	 * @param int $expire <p>項目の有効期限。ゼロの場合は有効期限なし (いつまでも有効) となります。Unix タイムスタンプ形式、あるいは現在からの 秒数で指定することが可能ですが、後者の場合は秒数が 2592000 (30 日) を超えることはできません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 もし同名のキーが既に存在する場合は <b><code>FALSE</code></b> を返します。 それ以外は、<b>Memcache::add()</b> の振る舞いは <code>Memcache::set()</code> と同じです。</p>
	 * @link http://php.net/manual/ja/memcache.add.php
	 * @see Memcache::set(), Memcache::replace()
	 * @since PECL memcache >= 0.2.0
	 */
	public function add(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

	/**
	 * コネクションプールに memcached サーバーを追加する
	 * <p><b>Memcache::addServer()</b> は、コネクションプールに サーバーを追加します。 <b>memcache_add_server()</b> 関数を使用することも可能です。</p><p>(<code>Memcache::connect()</code> および <code>Memcache::pconnect()</code> ではなく) このメソッドを使用すると、ネットワーク接続は それが実際に必要となるときまで確立されません。 つまり、大量のサーバーをプールに追加した場合に、 それらすべてが使用されることはないとしてもオーバーヘッドが発生しないということです。</p><p>他のサーバーが使用可能である場合、あらゆるメソッドのあらゆる段階について ユーザーが意識しないままにフェイルオーバー処理が行われます。 ソケットあるいは Memcaches サーバーレベルで発生したあらゆるエラー (ただし out-of-memory は除く) に対してフェイルオーバーが動作します。 既存のキーを追加しようとしたなどの通常のクライアントエラーの場合は、 フェイルオーバー処理は起動しません。</p><p><b>注意</b>:</p><p>この関数は、Memcache バージョン 2.0.0 で追加されました。</p>
	 * @param string $host <p>memcached が接続を待ち受けるホストを指定します。 このパラメータには別のトランスポート層を指定することもできます。たとえば <i>unix:///path/to/memcached.sock</i> のようにすると Unix ドメインソケットを使用できます。この場合、 <code>port</code> は <i>0</i> を指定しなければなりません。</p>
	 * @param int $port <p>memcached が接続を待ち受けるポートを指定します。 Unix ドメインソケットを使用する場合は、このパラメータを <i>0</i> とします。</p> <p><code>port</code> を指定しなかったときのデフォルトは memcache.default_port となります。そのため、このメソッドをコールするときにはポートを明示しておくことをおすすめします。</p>
	 * @param bool $persistent <p>持続的な接続を使用するかどうかを指定します。 デフォルトは <b><code>TRUE</code></b> です。</p>
	 * @param int $weight <p>このサーバーに対して割り当てる容器の数を指定します。これは、 このサーバーが選択される可能性を左右します。選択される可能性は、 すべてのサーバーの weight の合計に対するこのパラメータの割合で 決まります。</p>
	 * @param int $timeout <p>デーモンへの接続の際に使用する値 (秒単位) です。 デフォルト値を 1 秒でも変更する前には十分注意してください。 接続が遅くなってしまうと、 キャッシュ処理のメリットが なくなってしまいます。</p>
	 * @param int $retry_interval <p>サーバーとの接続が失敗した際に再試行を行う頻度を設定します。 デフォルト値は 15 秒です。このパラメータを -1 にすると、 自動的な再試行を行いません。 <code>dl()</code> を使用してこの拡張モジュールが動的に 読み込まれている場合は、このパラメータおよび <code>persistent</code> は何の効果も及ぼしません。</p> <p>失敗した接続構造体は、個々にタイムアウト値を持っており、 タイムアウト時間が経過するまでは、バックエンドから新たな要求が来ても その構造体はスキップされます。時間が経過すると、 その接続が無事再接続されるか、あるいはさらに <code>retry_interval</code> 秒の間、接続失敗と記録されます。 典型的な効果は、ウェブサーバーの各子プロセスがページを送り出す際に <code>retry_interval</code> 秒ごとに接続を再試行することです。</p>
	 * @param bool $status <p>サーバーがオンライン状態であるかどうかを制御します。このパラメータを <b><code>FALSE</code></b> にし、<code>retry_interval</code> を -1 と設定すると、失敗したサーバーもコネクションプールに残します。 これにより、キー配布アルゴリズムに影響を与えないようにします。 このサーバーへのリクエストは、フェイルオーバーされるか失敗します。 どちらになるかは <code>memcache.allow_failover</code> の設定によって決まります。デフォルトは <b><code>TRUE</code></b> で、 サーバーがオンライン状態であることを意味します。</p>
	 * @param callable $failure_callback <p>エラーが発生した際に実行されるコールバック関数を指定できるようにします。 コールバック関数は、フェイルオーバー処理の前に実行されます。 この関数は、ふたつの引数 (ホスト名、失敗したサーバーのポート) を受け取ります。</p>
	 * @param int $timeoutms
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.addserver.php
	 * @see Memcache::connect(), Memcache::pconnect(), Memcache::close(), Memcache::setServerParams(), Memcache::getServerStatus()
	 * @since PECL memcache >= 2.0.0
	 */
	public function addServer(string $host, int $port = 11211, bool $persistent = NULL, int $weight = NULL, int $timeout = NULL, int $retry_interval = NULL, bool $status = NULL, callable $failure_callback = NULL, int $timeoutms = NULL): bool {}

	/**
	 * memcached サーバーとの接続を閉じる
	 * <p><b>Memcache::close()</b> は、memcached サーバーとの接続を閉じます。 この関数は、持続的な接続については閉じません。持続的な接続が 閉じられるのは、Web サーバーのシャットダウン/再起動のときだけです。 <b>memcache_close()</b> 関数を使用することも可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.close.php
	 * @see Memcache::connect(), Memcache::pconnect()
	 * @since PECL memcache >= 0.4.0
	 */
	public function close(): bool {}

	/**
	 * memcached サーバーへの接続をオープンする
	 * <p><b>Memcache::connect()</b> は、memcached サーバーへの接続を 確立します。 <b>Memcache::connect()</b> を使用してオープンされた接続は、 スクリプトの実行終了時に自動的に閉じられます。 <code>Memcache::close()</code> を使用して閉じることも可能です。 <b>memcache_connect()</b> 関数を使用することも可能です。</p>
	 * @param string $host <p>memcached が接続を待ち受けるホストを指定します。 このパラメータには別のトランスポート層を指定することもできます。たとえば <i>unix:///path/to/memcached.sock</i> のようにすると Unix ドメインソケットを使用できます。この場合、 <code>port</code> は <i>0</i> を指定しなければなりません。</p>
	 * @param int $port <p>memcached が接続を待ち受けるポートを指定します。 Unix ドメインソケットを使用する場合は、このパラメータを <i>0</i> とします。</p> <p><code>port</code> を指定しなかったときのデフォルトは memcache.default_port となります。そのため、このメソッドをコールするときにはポートを明示しておくことをおすすめします。</p>
	 * @param int $timeout <p>デーモンへの接続の際に使用する値 (秒単位) です。 デフォルト値を 1 秒でも変更する前には十分注意してください。 接続が遅くなってしまうと、 キャッシュ処理のメリットが なくなってしまいます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.connect.php
	 * @see Memcache::pconnect(), Memcache::close()
	 * @since PECL memcache >= 0.2.0
	 */
	public function connect(string $host, int $port = NULL, int $timeout = NULL): bool {}

	/**
	 * 項目の値を減らす
	 * <p><b>Memcache::decrement()</b> は、項目の値を <code>value</code> だけ減らします。 <code>Memcache::increment()</code> と同様、項目の現在の値が まず数値に変換されてから <code>value</code> を引きます。</p><p><b>注意</b>:</p><p>項目の新しい値をゼロより小さくすることはできません。</p><p><b>注意</b>:</p><p>圧縮して格納されている項目に対して <b>Memcache::decrement()</b> を使用しないでください。 なぜなら、それ以降の <code>Memcache::get()</code> のコールが 失敗してしまうからです。</p>
	 * @param string $key <p>値を減らす項目のキー。</p>
	 * @param int $value <p>項目の値を <code>value</code> だけ減らします。</p>
	 * @return int <p>項目の新しい値か、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.decrement.php
	 * @see Memcache::increment(), Memcache::replace()
	 * @since PECL memcache >= 0.2.0
	 */
	public function decrement(string $key, int $value = 1): int {}

	/**
	 * サーバーから項目を削除する
	 * <p><b>Memcache::delete()</b> は、 <code>key</code> に対応する項目を削除します。</p>
	 * @param string $key <p>削除したい項目のキー。</p>
	 * @param int $timeout <p>この非推奨のパラメータはサポートしておらず、デフォルトで <i>0</i> 秒になっています。 このパラメータを使ってはいけません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.delete.php
	 * @see Memcache::set(), Memcache::replace()
	 * @since PECL memcache >= 0.2.0
	 */
	public function delete(string $key, int $timeout = 0): bool {}

	/**
	 * サーバー上のすべての既存項目を消去する
	 * <p><b>Memcache::flush()</b> は、すべての既存項目を直ちに 無効にします。<b>Memcache::flush()</b> は 実際にリソースを開放するわけではなく、単にすべての項目に 有効期限切れのマークをつけるだけです。それらの項目が使用していた メモリは、新しい項目で上書きされるようになります。 <b>memcache_flush()</b> 関数を使用することも可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.flush.php
	 * @since PECL memcache >= 1.0.0
	 */
	public function flush(): bool {}

	/**
	 * サーバーから項目を取得する
	 * <p>その時点でサーバー上の <code>key</code> にそのようなキーが存在する場合、 <b>Memcache::get()</b> は、前に格納されていたデータを返します。</p><p><b>Memcache::get()</b> にキーの配列を渡すことにより、 値の配列を取得することができます。この配列には、サーバー上で見つかった キーと値のペアのみが含まれます。</p>
	 * @param string $key <p>取得したいキー (あるいはキーの配列)。</p>
	 * @param int $flags <p>存在した場合は、値とともに取得したフラグをここに書き込みます。 これらのフラグは、たとえば <code>Memcache::set()</code> に渡すものと同じです。int の最下位バイトは pecl/memcache で内部的に使用するために予約されています (たとえば圧縮やシリアライズに関する状態を表します)。</p>
	 * @return string <p><code>key</code> に関連付けられた値を返します。 <code>key</code> が配列の場合は、 見つかったキー・値のペアを配列で返します。 取得に失敗したり <code>key</code> が見つからなかったり、 あるいは <code>key</code> が空だったりした場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.get.php
	 * @since PECL memcache >= 0.2.0
	 */
	public function get(string $key, int &$flags = NULL): string {}

	/**
	 * プール内のすべてのサーバーの統計情報を取得する
	 * <p><b>Memcache::getExtendedStats()</b> は、サーバーの 統計情報を含む二次元の配列を返します。配列のキーが各サーバーの host:port に対応し、その値として個々のサーバーの統計情報を保持します。 取得に失敗したサーバーは、値に <b><code>FALSE</code></b> が設定されます。 <b>memcache_get_extended_stats()</b> 関数を使用することも可能です。</p><p><b>注意</b>:</p><p>この関数は、Memcache バージョン 2.0.0 で追加されました。</p>
	 * @param string $type <p>取得する統計情報の型。使用可能な値は {reset, malloc, maps, cachedump, slabs, items, sizes} のいずれかです。 memcached プロトコルの仕様によると、これらの追加の引数は 「memcache の開発者の都合により、変更される可能性があります」 ということです。</p>
	 * @param int $slabid <p><code>type</code> を cachedump と設定した場合に使用し、ダンプを取得する slab を指定します。 cachedump コマンドはサーバーと結びついており、デバッグ目的でのみ使用します。</p>
	 * @param int $limit <p><code>type</code> を cachedump と設定した場合に使用し、ダンプするエントリの数を制限します。</p>
	 * @return array <p>サーバーの統計情報を含む二次元の配列を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.getextendedstats.php
	 * @see Memcache::getVersion(), Memcache::getStats()
	 * @since PECL memcache >= 2.0.0
	 */
	public function getExtendedStats(string $type = NULL, int $slabid = NULL, int $limit = 100): array {}

	/**
	 * サーバーの状態を返す
	 * <p><b>Memcache::getServerStatus()</b> は、サーバーがオンライン/オフラインのどちらであるかを返します。 <b>memcache_get_server_status()</b> 関数を使用することも可能です。</p><p><b>注意</b>:</p><p>この関数は、Memcache バージョン 2.1.0 で追加されました。</p>
	 * @param string $host <p>memcached が接続を待ち受けるホストを指定します。</p>
	 * @param int $port <p>memcached が接続を待ち受けるポートを指定します。</p>
	 * @return int <p>サーバーの状態を返します。サーバーに接続できなかった場合に 0、 それ以外の場合にはゼロ以外の値を返します。</p>
	 * @link http://php.net/manual/ja/memcache.getserverstatus.php
	 * @see Memcache::addServer(), Memcache::setServerParams()
	 * @since PECL memcache >= 2.1.0
	 */
	public function getServerStatus(string $host, int $port = 11211): int {}

	/**
	 * サーバーの統計情報を取得する
	 * <p><b>Memcache::getStats()</b> は、サーバーの統計情報を含む 連想配列を返します。配列のキーが統計情報パラメータの名前、そして 配列の値がパラメータの値に対応します。 <b>memcache_get_stats()</b> 関数を使用することも可能です。</p>
	 * @param string $type <p>取得する統計情報の型。使用可能な値は {reset, malloc, maps, cachedump, slabs, items, sizes} のいずれかです。 memcached プロトコルの仕様によると、これらの追加の引数は 「memcache の開発者の都合により、変更される可能性があります」 ということです。</p>
	 * @param int $slabid <p><code>type</code> を cachedump と設定した場合に使用し、ダンプを取得する slab を指定します。 cachedump コマンドはサーバーと結びついており、デバッグ目的でのみ使用します。</p>
	 * @param int $limit <p><code>type</code> を cachedump と設定した場合に使用し、ダンプするエントリの数を制限します。</p>
	 * @return array <p>サーバーの統計情報を含む連想配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.getstats.php
	 * @see Memcache::getVersion(), Memcache::getExtendedStats()
	 * @since PECL memcache >= 0.2.0
	 */
	public function getStats(string $type = NULL, int $slabid = NULL, int $limit = 100): array {}

	/**
	 * サーバーのバージョンを返す
	 * <p><b>Memcache::getVersion()</b> は、サーバーのバージョン番号を 文字列で返します。 <b>memcache_get_version()</b> 関数を使用することも可能です。</p>
	 * @return string <p>バージョン番号を表す文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.getversion.php
	 * @see Memcache::getExtendedStats(), Memcache::getStats()
	 * @since PECL memcache >= 0.2.0
	 */
	public function getVersion(): string {}

	/**
	 * 項目の値を増やす
	 * <p><b>Memcache::increment()</b> は、項目の値を <code>value</code> だけ増やします。 もし <code>key</code> に対応する値が数値ではなく、かつ 数値に変換できなかった場合は、その新しい値は <code>value</code> となります。 <b>Memcache::increment()</b> は、指定した項目が 存在しない場合に項目を作成することは <i>ありません</i>。</p><p><b>注意</b>:</p><p>圧縮して格納されている項目に対して <b>Memcache::increment()</b> を使用しないでください。 なぜなら、それ以降の <code>Memcache::get()</code> のコールが 失敗してしまうからです。</p>
	 * @param string $key <p>値を増やす項目のキー。</p>
	 * @param int $value <p>項目の値を <code>value</code> だけ増やします。</p>
	 * @return int <p>項目の新しい値か、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.increment.php
	 * @see Memcache::decrement(), Memcache::replace()
	 * @since PECL memcache >= 0.2.0
	 */
	public function increment(string $key, int $value = 1): int {}

	/**
	 * memcached サーバーへの持続的な接続をオープンする
	 * <p><b>Memcache::pconnect()</b> は <code>Memcache::connect()</code> とほぼ同じですが、 確立する接続が持続的なものであるという点が違います。 この接続は、スクリプトの実行が終了したり <code>Memcache::close()</code> 関数を使ったりしても閉じません。 <b>memcache_pconnect()</b> 関数を使用することも可能です。</p>
	 * @param string $host <p>memcached が接続を待ち受けるホストを指定します。 このパラメータには別のトランスポート層を指定することもできます。たとえば <i>unix:///path/to/memcached.sock</i> のようにすると Unix ドメインソケットを使用できます。この場合、 <code>port</code> は <i>0</i> を指定しなければなりません。</p>
	 * @param int $port <p>memcached が接続を待ち受けるポートを指定します。 Unix ドメインソケットを使用する場合は、このパラメータを <i>0</i> とします。</p>
	 * @param int $timeout <p>デーモンへの接続の際に使用する値 (秒単位) です。 デフォルト値を 1 秒でも変更する前には十分注意してください。 接続が遅くなってしまうと、 キャッシュ処理のメリットが なくなってしまいます。</p>
	 * @return mixed <p>Memcache オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.pconnect.php
	 * @see Memcache::connect()
	 * @since PECL memcache >= 0.4.0
	 */
	public function pconnect(string $host, int $port = NULL, int $timeout = NULL) {}

	/**
	 * 既存項目の値を置換する
	 * <p><b>Memcache::replace()</b> は、<code>key</code> に対応する既存項目の値を置換するために使用します。 指定したキーに対応する項目がない場合は、 <b>Memcache::replace()</b> は <b><code>FALSE</code></b> を返します。 それ以外の点では、<b>Memcache::replace()</b> の振る舞いは <code>Memcache::set()</code> と同じです。 <b>memcache_replace()</b> 関数を使用することも可能です。</p>
	 * @param string $key <p>項目に関連付けられたキー。</p>
	 * @param mixed $var <p>格納する値。文字列および整数値はそのままの形式で、それ以外の型は シリアライズされて格納されます。</p>
	 * @param int $flag <p>項目を圧縮して格納する場合に <b><code>MEMCACHE_COMPRESSED</code></b> を使用します (zlib を使用します)。</p>
	 * @param int $expire <p>項目の有効期限。ゼロの場合は有効期限なし (いつまでも有効) となります。Unix タイムスタンプ形式、あるいは現在からの 秒数で指定することが可能ですが、後者の場合は秒数が 2592000 (30 日) を超えることはできません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.replace.php
	 * @see Memcache::set(), Memcache::add()
	 * @since PECL memcache >= 0.2.0
	 */
	public function replace(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

	/**
	 * データをサーバーに格納する
	 * <p><b>Memcache::set()</b> は、キー <code>key</code> に <code>var</code> という値を 関連付け、memcached サーバーに格納します。パラメータ <code>expire</code> は、データの有効期限を秒単位で指定します。もし 0 を指定した場合は その項目が期限切れになることはありません (これは、その項目のデータが memcached サーバー上にずっと残り続けることを保証するものではありません。 他の項目をキャッシュするための場所を確保するためにサーバーから 削除されてしまうこともあります)。 (zlib を使用して) その場でのデータの圧縮を行いたい場合は、 <code>flag</code> の値として、定数 <b><code>MEMCACHE_COMPRESSED</code></b> を指定します。</p><p><b>注意</b>:</p><p>リソース型の変数 (たとえばファイル記述子や接続記述子など) はキャッシュに保存できないことを覚えておきましょう。これは、 シリアライズした状態ではそれらのデータを適切に表すことが できないためです。</p>
	 * @param string $key <p>項目に関連付けられたキー。</p>
	 * @param mixed $var <p>格納する値。文字列および整数値はそのままの形式で、それ以外の型は シリアライズされて格納されます。</p>
	 * @param int $flag <p>項目を圧縮して格納する場合に <b><code>MEMCACHE_COMPRESSED</code></b> を使用します (zlib を使用します)。</p>
	 * @param int $expire <p>項目の有効期限。ゼロの場合は有効期限なし (いつまでも有効) となります。Unix タイムスタンプ形式、あるいは現在からの 秒数で指定することが可能ですが、後者の場合は秒数が 2592000 (30 日) を超えることはできません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.set.php
	 * @see Memcache::add(), Memcache::replace()
	 * @since PECL memcache >= 0.2.0
	 */
	public function set(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

	/**
	 * 大きな値に対する自動圧縮処理を有効にする
	 * <p><b>Memcache::setCompressThreshold()</b> は、 大きな値に対して自動圧縮処理を有効にします。 <b>memcache_set_compress_threshold()</b> 関数を使用することも可能です。</p><p><b>注意</b>:</p><p>この関数は、Memcache バージョン 2.0.0 で追加されました。</p>
	 * @param int $threshold <p>自動圧縮を試みる値の長さの最小値を指定します。</p>
	 * @param float $min_savings
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.setcompressthreshold.php
	 * @since PECL memcache >= 2.0.0
	 */
	public function setCompressThreshold(int $threshold, float $min_savings = NULL): bool {}

	/**
	 * サーバーのパラメータおよび状態を、実行時に変更する
	 * <p><b>Memcache::setServerParams()</b> は、 サーバーのパラメータを実行時に変更します。 <b>memcache_set_server_params()</b> 関数を使用することも可能です。</p><p><b>注意</b>:</p><p>この関数は、Memcache バージョン 2.1.0 で追加されました。</p>
	 * @param string $host <p>memcached が接続を待ち受けるホストを指定します。</p>
	 * @param int $port <p>memcached が接続を待ち受けるポートを指定します。</p>
	 * @param int $timeout <p>デーモンへの接続の際に使用する値 (秒単位) です。 デフォルト値を 1 秒でも変更する前には十分注意してください。 接続が遅くなってしまうと、 キャッシュ処理のメリットが なくなってしまいます。</p>
	 * @param int $retry_interval <p>サーバーとの接続が失敗した際に再試行を行う頻度を設定します。 デフォルト値は 15 秒です。このパラメータを -1 にすると、 自動的な再試行を行いません。 <code>dl()</code> を使用してこの拡張モジュールが動的に 読み込まれている場合は、このパラメータおよび <code>persistent</code> は何の効果も及ぼしません。</p>
	 * @param bool $status <p>サーバーがオンライン状態であるかどうかを制御します。このパラメータを <b><code>FALSE</code></b> にし、<code>retry_interval</code> を -1 と設定すると、失敗したサーバーもコネクションプールに残します。 これにより、キー配布アルゴリズムに影響を与えないようにします。 このサーバーへのリクエストは、フェイルオーバーされるか失敗します。 どちらになるかは <code>memcache.allow_failover</code> の設定によって決まります。デフォルトは <b><code>TRUE</code></b> で、 サーバーがオンライン状態であることを意味します。</p>
	 * @param callable $failure_callback <p>エラーが発生した際に実行されるコールバック関数を指定できるようにします。 コールバック関数は、フェイルオーバー処理の前に実行されます。 この関数は、ふたつの引数 (ホスト名、失敗したサーバーのポート) を受け取ります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/memcache.setserverparams.php
	 * @see Memcache::addServer(), Memcache::getServerStatus()
	 * @since PECL memcache >= 2.1.0
	 */
	public function setServerParams(string $host, int $port = 11211, int $timeout = NULL, int $retry_interval = FALSE, bool $status = NULL, callable $failure_callback = NULL): bool {}
}

/**
 * デバッグ出力のオン/オフを切り替える
 * <p><b>memcache_debug()</b> は、パラメータ <code>on_off</code> が <b><code>TRUE</code></b> の場合にデバッグ出力を有効にし、 <b><code>FALSE</code></b> の場合には無効にします。</p><p><b>注意</b>:</p><p><b>memcache_debug()</b> は、PHP が --enable-debug オプションをつけてビルドされている場合にのみ使用可能で、 この場合は常に <b><code>TRUE</code></b> を返します。そうでない場合は、この関数は 何も行わずに常に <b><code>FALSE</code></b> を返します。</p>
 * @param bool $on_off <p><b><code>TRUE</code></b> にすると、デバッグ出力をオンにします。 <b><code>FALSE</code></b> にすると、デバッグ出力をオフにします。</p>
 * @return bool <p>PHP が --enable-debug オプションをつけてビルドされている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.memcache-debug.php
 * @since PECL memcache >= 0.2.0
 */
function memcache_debug(bool $on_off): bool {}

/**
 * <code>Memcache::set()</code>、 <code>Memcache::add()</code> そして <code>Memcache::replace()</code> を実行する際に、同時にデータの圧縮を行います。
 */
define('MEMCACHE_COMPRESSED', null);

/**
 * この Memcache セッションハンドラが有効な場合に 1、それ以外の場合に 0 となります。
 */
define('MEMCACHE_HAVE_SESSION', null);

/**
 * <code>Memcache::set()</code>、 <code>Memcache::add()</code> そして <code>Memcache::replace()</code> でのユーザー定義のアプリケーションフラグとして使います。
 */
define('MEMCACHE_USER1', null);

/**
 * <code>Memcache::set()</code>、 <code>Memcache::add()</code> そして <code>Memcache::replace()</code> でのユーザー定義のアプリケーションフラグとして使います。
 */
define('MEMCACHE_USER2', null);

/**
 * <code>Memcache::set()</code>、 <code>Memcache::add()</code> そして <code>Memcache::replace()</code> でのユーザー定義のアプリケーションフラグとして使います。
 */
define('MEMCACHE_USER3', null);

/**
 * <code>Memcache::set()</code>、 <code>Memcache::add()</code> そして <code>Memcache::replace()</code> でのユーザー定義のアプリケーションフラグとして使います。
 */
define('MEMCACHE_USER4', null);

