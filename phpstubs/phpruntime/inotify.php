<?php



/**
 * 初期化済みの inotify インスタンスに監視対象を追加する
 * <p><b>inotify_add_watch()</b> は、<code>pathname</code> で指定したファイルあるいはディレクトリへの監視を追加あるいは変更します。</p><p>既存の監視対象に対して <b>inotify_add_watch()</b> を使用すると、 監視内容を上書きします。定数 <b><code>IN_MASK_ADD</code></b> を使用すると、 既存の監視対象を上書きせずにイベントを追加します。</p>
 * @param resource $inotify_instance <p><code>inotify_init()</code> が返すリソース</p>
 * @param string $pathname <p>監視対象のファイルあるいはディレクトリ。</p>
 * @param int $mask <p>監視するイベント。定義済みの定数 を参照ください。</p>
 * @return int <p>返り値は、(inotify インスタンス内で) 一意な監視記述子です。</p>
 * @link http://php.net/manual/ja/function.inotify-add-watch.php
 * @see inotify_init()
 * @since PECL inotify >= 0.1.2
 */
function inotify_add_watch($inotify_instance, string $pathname, int $mask): int {}

/**
 * inotify インスタンスを初期化する
 * <p><code>inotify_add_watch()</code> で使用するための inotify インスタンスを初期化します。</p>
 * @return resource <p>ストリームリソース、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.inotify-init.php
 * @see inotify_add_watch(), inotify_rm_watch(), inotify_queue_len(), inotify_read(), fclose()
 * @since PECL inotify >= 0.1.2
 */
function inotify_init() {}

/**
 * 待機中のイベントがある場合に正の数を返す
 * <p>この関数で、<code>inotify_read()</code> がブロックされるかどうかを知ることができます。 ゼロより大きい数が返された場合は待機中のイベントがあることを意味し、 この場合 <code>inotify_read()</code> はブロックされません。</p>
 * @param resource $inotify_instance <p><code>inotify_init()</code> が返すリソース</p>
 * @return int <p>待機中のイベントがある場合に正の数を返します。</p>
 * @link http://php.net/manual/ja/function.inotify-queue-len.php
 * @see inotify_init(), stream_select(), stream_set_blocking()
 * @since PECL inotify >= 0.1.2
 */
function inotify_queue_len($inotify_instance): int {}

/**
 * inotify インスタンスからイベントを読み込む
 * <p>inotify イベントを inotify インスタンスから読み込みます。</p>
 * @param resource $inotify_instance <p><code>inotify_init()</code> が返すリソース</p>
 * @return array <p>inotify イベントの配列、を返します。待機中のイベントがなく、かつ <code>inotify_instance</code> が非ブロックモードである場合は <b><code>FALSE</code></b> を返します。各イベントは次のキーを持つ配列となります。</p><ul> <li>wd は、<code>inotify_add_watch()</code> が返す監視記述子です</li> <li>mask は、events のビットマスクです</li> <li>cookie は、接続関連のイベント (たとえば <b><code>IN_MOVE_FROM</code></b> や <b><code>IN_MOVE_TO</code></b>) の一意な ID です</li> <li>name は、ファイル名 (たとえば 監視対象のディレクトリ内でファイルが変更された場合) です</li> </ul>
 * @link http://php.net/manual/ja/function.inotify-read.php
 * @see inotify_init(), stream_select(), stream_set_blocking(), inotify_queue_len()
 * @since PECL inotify >= 0.1.2
 */
function inotify_read($inotify_instance): array {}

/**
 * 既存の監視を inotify インスタンスから削除する
 * <p><b>inotify_rm_watch()</b> は、 <code>watch_descriptor</code> がさす監視を inotify インスタンス <code>inotify_instance</code> から削除します。</p>
 * @param resource $inotify_instance <p><code>inotify_init()</code> が返すリソース</p>
 * @param int $watch_descriptor <p>インスタンスから削除したい監視。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.inotify-rm-watch.php
 * @see inotify_init()
 * @since PECL inotify >= 0.1.2
 */
function inotify_rm_watch($inotify_instance, int $watch_descriptor): bool {}

/**
 * ファイルがアクセスされた (読み込み) (&#42;)
 */
define('IN_ACCESS', null);

/**
 * 上記の定数すべてのビットマスク
 */
define('IN_ALL_EVENTS', null);

/**
 * メタデータ (パーミッションや修正時刻など) が変更された (&#42;)
 */
define('IN_ATTRIB', null);

/**
 * IN_CLOSE_WRITE | IN_CLOSE_NOWRITE と同等
 */
define('IN_CLOSE', null);

/**
 * 非書き込みモードで開いたファイルが閉じられた (&#42;)
 */
define('IN_CLOSE_NOWRITE', null);

/**
 * 書き込みモードで開いたファイルが閉じられた (&#42;)
 */
define('IN_CLOSE_WRITE', null);

/**
 * ファイルあるいはディレクトリが監視対象ディレクトリ内で作成された (&#42;)
 */
define('IN_CREATE', null);

/**
 * ファイルあるいはディレクトリが監視対象ディレクトリ内で削除された (&#42;)
 */
define('IN_DELETE', null);

/**
 * 監視対象のファイルあるいはディレクトリが削除された
 */
define('IN_DELETE_SELF', null);

/**
 * シンボリックリンクの場合にパス名の参照先を解決しない (Linux 2.6.15 以降)
 */
define('IN_DONT_FOLLOW', null);

/**
 * 監視が削除された (明示的に <code>inotify_rm_watch()</code> したか、ファイルが削除されたりファイルシステムがアンマウントされたりした)
 */
define('IN_IGNORED', null);

/**
 * このイベントの対象はディレクトリ
 */
define('IN_ISDIR', null);

/**
 * このパス名が既に存在する場合に、(マスクを上書きするのではなく) マスクにイベントを追加する
 */
define('IN_MASK_ADD', null);

/**
 * ファイルが変更された (&#42;)
 */
define('IN_MODIFY', null);

/**
 * IN_MOVED_FROM | IN_MOVED_TO と同等
 */
define('IN_MOVE', null);

/**
 * 監視対象のファイルあるいはディレクトリが移動した
 */
define('IN_MOVE_SELF', null);

/**
 * ファイルが監視対象ディレクトリ外に移動された (&#42;)
 */
define('IN_MOVED_FROM', null);

/**
 * ファイルが監視対象ディレクトリ内に移動された (&#42;)
 */
define('IN_MOVED_TO', null);

/**
 * 単一のイベントについてのみパス名を監視し、その後は監視リストから削除する
 */
define('IN_ONESHOT', null);

/**
 * ディレクトリの場合はパス名のみを監視する (Linux 2.6.15 以降)
 */
define('IN_ONLYDIR', null);

/**
 * ファイルが開かれた (&#42;)
 */
define('IN_OPEN', null);

/**
 * イベントキューがオーバーフローした (このイベントの監視記述子は -1)
 */
define('IN_Q_OVERFLOW', null);

/**
 * 監視対象オブジェクトを含むファイルシステムがアンマウントされた
 */
define('IN_UNMOUNT', null);

