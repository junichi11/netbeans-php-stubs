<?php



/**
 * プラグインの設定情報を返す
 * <p>この関数は、MySQL 接続にアタッチされた mysqlnd_memcache 関連のすべての設定情報を配列で返します。 MySQL、<code>mysqlnd_memcache_set()</code> で渡した Memache オブジェクト、 自動的に MySQL サーバーから取得したテーブルマッピング情報などが含まれます。</p>
 * @param mixed $connection <p>MySQL サーバーへのハンドル。 PDO_MYSQL、mysqli あるいは ext/mysql のいずれかの MySQL API 拡張モジュールを利用するもの。</p>
 * @return array <p>成功した場合に mysqlnd_memcache の設定情報の配列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p>返される配列にはこれらの要素が含まれます。</p> <b><b>mysqlnd_memcache_get_config()</b> が返す配列の構造</b>   配列のキー 説明     memcached  この MySQL 接続に <code>mysqlnd_memcache_set()</code> で関連づけた Memcached のインスタンス。 これを使って memcache 接続の設定を変更することもできるし、 この接続上のサーバーに直接問い合わせて設定を変更することもできます。    pattern  サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。 このパターンにマッチするクエリーをさらに分析し、 そのクエリーを横取りして memcache インターフェイスに送るのか 普通の MySQL プロトコルでサーバーに送るのかを判断します。 デフォルトのパターン (<i>MYSQLND_MEMCACHE_DEFAULT_REGEXP</i>) を使うか、あるいは <code>mysqlnd_memcache_set()</code> でパターンを設定します。    mappings  プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。 要素のキーが、MySQL の設定内のコンテナ名になります。 その値については後で説明します。このフィールドの中身を作るには、 <code>mysqlnd_memcache_set()</code> で MySQL と memcache の接続を関連づけるときに MySQL Server に問い合わせます。    mapping_query  <code>mysqlnd_memcache_set()</code> で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。 このクエリーの結果を mappings 要素に渡します。     <b>mappings エントリの構造</b>   配列のキー 説明     prefix  memcache 経由でデータにアクセスするときに使うプレフィックス。 MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@ で始まって、最後は変更可能なセパレータになります。 このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。    schema_name  アクセスするテーブルを含むスキーマ (データベース) の名前。    table_name  memcache プロトコルでアクセス可能なデータを含むテーブルの名前。    id_field_name  memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。    separator  フィールドの値を分割するときに使うセパレータ。 memcache が単一の値にしかアクセスできないのに対して MySQL は複数のカラムをこの値に押し込めることができるので、 このセパレータが必要になります。  <p><b>注意</b>:</p> <p>セパレータは MySQL Server で設定できますが、 memcache 経由できる値を使ってはいけません。 そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。</p>     fields  このマッピングで利用可能なすべてのフィールド名の配列。
 * @link http://php.net/manual/ja/function.mysqlnd-memcache-get-config.php
 * @since PECL mysqlnd_memcache >= 1.0.0
 */
function mysqlnd_memcache_get_config($connection): array {}

/**
 * MySQL の接続を Memcache の接続と関連づける
 * <p><code>mysql_connection</code> と <code>memcache_connection</code> を関連づけます。 <code>pattern</code> を PCRE 正規表現として使い、 <code>callback</code> は通知用のコールバックとして使います。 あるいは、<code>mysql_connection</code> との関連づけを解除します。</p><p>MySQL の接続と Memcache の接続を関連づけるときに、この関数は MySQL Server にその設定を問い合わせます。 サーバーの設定を自動検出し、InnoDB Memcache Daemon Plugin を使うのか MySQL Cluster NDB Memcache をサポートするのかを判断します。 また、サーバーに問い合わせて、エクスポートされたテーブルやその他の設定も自動検出します。 これらの自動的な設定の結果を取得するには、<code>mysqlnd_memcache_get_config()</code> を使います。</p>
 * @param mixed $mysql_connection <p>MySQL サーバーへのハンドル。 PDO_MYSQL、mysqli あるいは ext/mysql のいずれかの MySQL API 拡張モジュールを利用するもの。</p>
 * @param \Memcached $memcache_connection <p>Memcached のインスタンスで、 MySQL Memcache Daemon プラグインに接続させるもの。 このパラメータを省略した場合は、<code>mysql_connection</code> と memcache の接続との関連づけを解除します。すでに別の接続と関連づけされている場合は、 その関連づけを上書きします。</p>
 * @param string $pattern <p>Perl 互換の正規表現 形式のパターン。 memcache に渡すクエリーを見つけるときに使います。このパターンには三つのサブパターンが必要です。 最初のサブパターンにはリクエストするフィールドの一覧、 二番目のサブパターンにはクエリーが使う ID カラムの名前、 そして最後のサブパターンにはリクエストする値を指定します。 このパラメータを省略したり <b><code>NULL</code></b> を渡したりした場合は、 デフォルトのパターンを使います。</p>
 * @param callback $callback <p>クエリーを MySQL に送るときに使うコールバック。 このコールバックは <code>boolean</code> のパラメータを一つ受け取ります。 これは、クエリが Memcache 経由で送られたかどうかを表します。</p>
 * @return bool <p>関連づけ、あるいはその解除が成功した場合に <b><code>TRUE</code></b>、 エラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysqlnd-memcache-set.php
 * @see mysqlnd_memcache_get_config()
 * @since PECL mysqlnd_memcache >= 1.0.0
 */
function mysqlnd_memcache_set($mysql_connection, \Memcached $memcache_connection = NULL, string $pattern = NULL, callback $callback = NULL): bool {}

/**
 * デフォルトの正規表現 (PCRE スタイル) で、これを使って <i>SELECT</i> 文のマッチングをします。そして、可能なら MySQL Memcache Plugin のアクセスポイントにマップします。   <code>mysqlnd_memcache_set()</code> も使えますが、 デフォルトではこの正規表現でパターンマッチングを行います。
 */
define('MYSQLND_MEMCACHE_DEFAULT_REGEXP', null);

/**
 * プラグインのバージョンを表す文字列。"1.0.0-alpha" など。
 */
define('MYSQLND_MEMCACHE_VERSION', null);

/**
 * プラグインのバージョン番号。10000 など。
 */
define('MYSQLND_MEMCACHE_VERSION_ID', null);

