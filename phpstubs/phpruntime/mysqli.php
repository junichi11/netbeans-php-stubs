<?php



/**
 * <p>PHP と MySQL データベースの間の接続を表します。</p>
 * @link http://php.net/manual/ja/class.mysqli.php
 * @since PHP 5, PHP 7
 */
class mysqli {

	/**
	 * 直前の MySQL の操作で変更された行の数を得る
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <i>INSERT</i>、 <i>UPDATE</i>、<i>REPLACE</i> あるいは <i>DELETE</i> クエリにより変更された行の数を返します。</p><p>SELECT 文の場合は、<b>mysqli_affected_rows()</b> は <code>mysqli_num_rows()</code> と同じように動作します。</p>
	 * @var int <p>正の整数が返された場合、それは変更された行数かあるいは取得された行数を 示します。ゼロが返された場合、それは UPDATE 文でレコードが更新されなかったか <i>WHERE</i> 条件に当てはまる行がなかった、またはクエリが実行されなかったことを 示します。-1 は、クエリがエラーを返したことを示します。</p> <p><b>注意</b>:</p> <p>変更された行数が整数型の最大値 (<b><code>PHP_INT_MAX</code></b>) をこえた場合、 結果の行数は文字列として返されます。</p>
	 * @link http://php.net/manual/ja/mysqli.affected-rows.php
	 * @see mysqli_num_rows(), mysqli_info()
	 * @since PHP 5, PHP 7
	 */
	public $affected_rows;

	/**
	 * 直近の接続コールに関するエラーコードを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_connect()</code> コールのエラー番号を返します。</p><p><b>注意</b>:</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
	 * @var int <p>直近の <code>mysqli_connect()</code> コールが失敗した場合、 エラーコードを返します。ゼロは、何もエラーが発生しなかったことを示します。</p>
	 * @link http://php.net/manual/ja/mysqli.connect-errno.php
	 * @see mysqli_connect(), mysqli_connect_error(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $connect_errno;

	/**
	 * 直近の接続エラーの内容を文字列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_connect()</code> が指すデータベースの 直近のエラーについての文字列表現を返します。</p>
	 * @var string <p>エラーの内容を表す文字列を返します。エラーが発生しなかった場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.connect-error.php
	 * @see mysqli_connect(), mysqli_connect_errno(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $connect_error;

	/**
	 * 直近の関数コールによるエラーコードを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の MySQLi 関数のコールが成功あるいは失敗した際のエラーコードを返します。</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
	 * @var int <p>直近のコールが失敗した場合、エラーコードを返します。 ゼロは、何もエラーが発生しなかったことを示します。</p>
	 * @link http://php.net/manual/ja/mysqli.errno.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $errno;

	/**
	 * 直近で実行したコマンドからのエラーの一覧を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>エラーの配列を返します。この配列の内容は、直近で実行した MySQLi 関数コールで発生したエラーです。</p>
	 * @var array <p>エラーの一覧を返します。個々のエラーは連想配列形式で、 errno、error および sqlstate のキーを含みます。</p>
	 * @link http://php.net/manual/ja/mysqli.error-list.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	public $error_list;

	/**
	 * 直近のエラーの内容を文字列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の MySQLi 関数のコールが成功あるいは失敗した際のエラーメッセージを返します。</p>
	 * @var string <p>エラーの内容を表す文字列を返します。エラーが発生しなかった場合は空文字列を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.error.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_errno(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $error;

	/**
	 * 直近のクエリのカラムの数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> が指す接続における直近のクエリの カラムの数を返します。この関数は、クエリが空でない結果セットを 生成すべきなのかそうではないのかを判断するために <code>mysqli_store_result()</code> 関数を使用する際に有用です。</p>
	 * @var int <p>結果セットのフィールド数を整数で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.field-count.php
	 * @since PHP 5, PHP 7
	 */
	public $field_count;

	/**
	 * MySQL クライアント情報を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
	 * @var string <p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-client-info.php
	 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7
	 */
	public $client_info;

	/**
	 * MySQL クライアントのバージョンを整数値で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアントのバージョン番号を整数値で返します。</p>
	 * @var int <p>MySQL クライアントライブラリのバージョンを、以下の書式で返します。 <i>main_version&#42;10000 + minor_version &#42;100 + sub_version</i> 例えば、4.1.0 は 40100 となります。</p><p>これは、ある機能が使用可能かどうかを知るため、クライアントライブラリの バージョンを手っ取り早く調べたい場合に有用です。</p>
	 * @link http://php.net/manual/ja/mysqli.get-client-version.php
	 * @see mysqli_get_client_info(), mysqli_get_server_info(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7
	 */
	public $client_version;

	/**
	 * 使用している接続の型を文字列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> が使用している接続の情報を文字列で返します（サーバーのホスト名を 含みます）。</p>
	 * @var string <p>サーバーのホスト名と接続の型を文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-host-info.php
	 * @see mysqli_get_proto_info()
	 * @since PHP 5, PHP 7
	 */
	public $host_info;

	/**
	 * 使用している MySQL プロトコルのバージョンを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> で表される接続で使用している MySQL プロトコルのバージョンを整数値で返します。</p>
	 * @var string <p>プロトコルバージョンを整数値で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-proto-info.php
	 * @see mysqli_get_host_info()
	 * @since PHP 5, PHP 7
	 */
	public $protocol_version;

	/**
	 * MySQL サーバーのバージョンを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQLi 拡張モジュールが接続している MySQL サーバーのバージョンを文字列で返します。</p>
	 * @var string <p>サーバーのバージョンを文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-server-info.php
	 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7
	 */
	public $server_info;

	/**
	 * MySQL サーバーのバージョンを整数値で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_get_server_version()</b> 関数は 接続している（<code>link</code> で表される）サーバーの バージョンを整数値で返します。</p>
	 * @var int <p>サーバーのバージョンを整数値で返します。</p><p>バージョン番号の書式は以下のようになります。 <i>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</i> (つまり、バージョン 4.1.0 は 40100 となります)</p>
	 * @link http://php.net/manual/ja/mysqli.get-server-version.php
	 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_info()
	 * @since PHP 5, PHP 7
	 */
	public $server_version;

	/**
	 * 直近に実行されたクエリの情報を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_info()</b> 関数は、直近に実行されたクエリに ついての情報を文字列で返します。文字列の詳細は以下のとおりです。</p><p></p><p><b>注意</b>:</p><p>これらのどれにも当てはまらない形式のクエリはサポートされません。 そのような場合、<b>mysqli_info()</b> は空文字列を返します。</p>
	 * @var string <p>直近に実行されたクエリについての追加情報を文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.info.php
	 * @see mysqli_affected_rows(), mysqli_warning_count(), mysqli_num_rows()
	 * @since PHP 5, PHP 7
	 */
	public $info;

	/**
	 * 直近のクエリで使用した自動生成の ID を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_insert_id()</b> 関数は、AUTO_INCREMENT 属性を 持つカラムがあるテーブル上でのクエリ (通常は INSERT) により生成された ID を返します。 この接続を介して INSERT 文または UPDATE 文が送信されなかった場合、あるいは 変更されたテーブルに AUTO_INCREMENT 属性を持つカラムがなかった場合は この関数はゼロを返します。</p><p><b>注意</b>:</p><p>LAST_INSERT_ID() 関数を使用して INSERT あるいは UPDATE ステートメントを 実行すると、<b>mysqli_insert_id()</b> 関数の返す値も 変更されます。</p>
	 * @var mixed <p>直前のクエリで更新された <i>AUTO_INCREMENT</i> フィールドの値を返します。接続での直前のクエリがない場合や クエリが <i>AUTO_INCREMENT</i> の値を更新しなかった場合は ゼロを返します。</p> <p><b>注意</b>:</p> <p>もし数値が int の最大値をこえた場合、<b>mysqli_insert_id()</b> は文字列で結果を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.insert-id.php
	 * @since PHP 5, PHP 7
	 */
	public $insert_id;

	/**
	 * 直前の MySQL の操作での SQLSTATE エラーを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近のエラーについて、SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> はエラーが発生しなかったことを意味します。この値は、ANSI SQL および ODBC で定義されています。とりうる値の一覧は » http://dev.mysql.com/doc/mysql/en/error-handling.html を参照ください。</p><p><b>注意</b>:</p><p>すべての MySQL エラーが SQLSTATE に対応しているわけではないことに 注意してください。そのようなエラーが発生した場合は、 <i>HY000</i>（一般的なエラー）が返されます。</p>
	 * @var string <p>直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 文字で構成され、<i>'00000'</i> はエラーが発生しなかったことを意味します。</p>
	 * @link http://php.net/manual/ja/mysqli.sqlstate.php
	 * @see mysqli_errno(), mysqli_error()
	 * @since PHP 5, PHP 7
	 */
	public $sqlstate;

	/**
	 * 現在の接続のスレッド ID を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_thread_id()</b> 関数は、現在の接続の スレッド ID を返します。この ID を使用すると、<code>mysqli_kill()</code> 関数でセッションを切断することが可能です。接続が切断し <code>mysqli_ping()</code> で再接続した場合は、スレッド ID は別のものになります。そのため、必要になったそのときにスレッド ID を取得するべきです。</p><p><b>注意</b>:</p><p>スレッド ID は接続単位で割り当てられます。そのため、もし いったん切断した接続が再度確立された場合、新しいスレッド ID が割り当てられます。</p><p>実行中のクエリを停止するには、SQL コマンド <i>KILL QUERY processid</i> を使用します。</p>
	 * @var int <p>現在の接続のスレッド ID を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.thread-id.php
	 * @see mysqli_kill()
	 * @since PHP 5, PHP 7
	 */
	public $thread_id;

	/**
	 * 指定した接続の直近のクエリから発生した警告の数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この接続の直近のクエリについて、発生した警告の数を返します。</p><p><b>注意</b>:</p><p>警告の内容を取得するには、SQL コマンド <i>SHOW WARNINGS [limit row_count]</i> を使用します。</p>
	 * @var int <p>警告の数を返します。警告がなかった場合はゼロを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.warning-count.php
	 * @see mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $warning_count;

	/**
	 * 新規に MySQL サーバーへの接続をオープンする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL サーバーへの接続をオープンします。</p>
	 * @param string $host <p>ホスト名または IP アドレスです。この引数に <b><code>NULL</code></b> または "localhost" を渡すと ローカルホストとみなされます。もし可能な場合、TCP/IP プロトコルの代わりに パイプが使用されます。</p> <p>ホストの前に <i>p:</i> をつけると、持続的な接続を開きます。 接続プールから開いた接続上で <code>mysqli_change_user()</code> が自動的にコールされます。</p>
	 * @param string $username <p>MySQL のユーザー名。</p>
	 * @param string $passwd <p>省略したり <b><code>NULL</code></b> を渡したりした場合、MySQL サーバーは パスワードを持たないユーザーレコードについてのみ認証を試みます。 これによってひとつのユーザー名において(パスワードが指定されたか 否かによって)違うパーミッションを与えることができます。</p>
	 * @param string $dbname <p>指定した場合は、 クエリが行われるデフォルトのデータベースとなります。</p>
	 * @param int $port <p>MySQL サーバーに接続する際のポート番号を指定します。</p>
	 * @param string $socket <p>使用するソケットあるいは名前つきパイプを指定します。</p>  <p><b>注意</b>:</p> <p><code>socket</code> 引数を指定しても、MySQL サーバーへの 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの 接続方法については <code>host</code> 引数で定義されます。</p>
	 * @return void <p>MySQL サーバーへの接続を表すオブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.construct.php
	 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $host = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $passwd = 'ini_get("mysqli.default_pw")', string $dbname = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")') {}

	/**
	 * データベース更新の自動コミットをオンまたはオフにする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定されたデータベース接続リソースに対するクエリの 自動コミットモードをオンまたはオフにします。</p><p>現在の自動コミットモードを知るには、SQL コマンド <i>SELECT @@autocommit</i> を使用します。</p>
	 * @param bool $mode <p>自動コミットを有効にするかどうか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.autocommit.php
	 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_rollback()
	 * @since PHP 5, PHP 7
	 */
	public function autocommit(bool $mode): bool {}

	/**
	 * トランザクションを開始する
	 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p>トランザクションを開始します。InnoDB エンジン (デフォルトで有効になっています) が必要です。 MySQL のトランザクションの詳細な動作は、 » http://dev.mysql.com/doc/mysql/en/commit.html を参照ください。</p>
	 * @param int $flags <p>以下のフラグが使えます。</p> <ul> <li> <p><b><code>MYSQLI_TRANS_START_READ_ONLY</code></b>: "START TRANSACTION READ ONLY" でトランザクションを開始します。 MySQL 5.6 以上が必要です。</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_READ_WRITE</code></b>: "START TRANSACTION READ WRITE" でトランザクションを開始します。 MySQL 5.6 以上が必要です。</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</code></b>: "START TRANSACTION WITH CONSISTENT SNAPSHOT" でトランザクションを開始します。</p> </li> </ul>
	 * @param string $name <p>トランザクションのセーブポイント名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.begin-transaction.php
	 * @see mysqli_autocommit(), mysqli_commit(), mysqli_rollback()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function begin_transaction(int $flags = NULL, string $name = NULL): bool {}

	/**
	 * 指定されたデータベース接続のユーザー名を変更する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定されたデータベース接続のユーザー名を変更し、 現在のデータベースを設定します。</p><p>ユーザーを正しく変更するには、<code>username</code> と <code>password</code> 引数を正しく渡す必要があります。 またそのユーザーが対象のデータベースに対する適切なパーミッションを 持っている必要があります。どんな理由であれ、認証に失敗するとカレントユーザーの 認証が継続されます。</p>
	 * @param string $user <p>MySQL のユーザー名。</p>
	 * @param string $password <p>MySQL のパスワード。</p>
	 * @param string $database <p>変更するデータベース。</p> <p>引数には <b><code>NULL</code></b> 値を渡すこともできます。 その場合ユーザーの変更だけでデータベースの選択はされません。 そのようなケースでデータベースを選択したい場合には <code>mysqli_select_db()</code> 関数を使用してください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.change-user.php
	 * @see mysqli_connect(), mysqli_select_db()
	 * @since PHP 5, PHP 7
	 */
	public function change_user(string $user, string $password, string $database): bool {}

	/**
	 * データベース接続のデフォルトの文字コードセットを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続の現在の文字コードセットを返します。</p>
	 * @return string <p>現在の接続のデフォルト文字セットを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.character-set-name.php
	 * @see mysqli_set_charset(), mysqli_client_encoding(), mysqli_real_escape_string()
	 * @since PHP 5, PHP 7
	 */
	public function character_set_name(): string {}

	/**
	 * 事前にオープンしているデータベース接続を閉じる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>既に開いているデータベース接続を閉じます。</p><p>持続的でない MySQL 接続や結果セットは、PHP スクリプトの実行が終了する時点で自動的に破棄されます。 そのため、オープンした接続をクローズしたり結果セットを開放したりすることは必須ではありませんが、 そうしておくことを推奨します。 その時点ですぐに PHP や MySQL にリソースを返せ、パフォーマンスの向上につながるからです。 関連する除法は リソースの開放を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.close.php
	 * @see mysqli_init(), mysqli_real_connect(), mysqli_free_result()
	 * @since PHP 5, PHP 7
	 */
	public function close(): bool {}

	/**
	 * 現在のトランザクションをコミットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続の現在のトランザクションをコミットします。</p>
	 * @param int $flags <p>定数 <b><code>MYSQLI_TRANS_COR_&#42;</code></b> のビットマスク。</p>
	 * @param string $name <p>指定した場合は、<i>COMMIT/&#42;name&#42;/</i> を実行します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.commit.php
	 * @see mysqli_autocommit(), mysqli_begin_transaction(), mysqli_rollback(), mysqli_savepoint()
	 * @since PHP 5, PHP 7
	 */
	public function commit(int $flags = NULL, string $name = NULL): bool {}

	/**
	 * 新規に MySQL サーバーへの接続をオープンする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL サーバーへの接続をオープンします。</p>
	 * @param string $host <p>ホスト名または IP アドレスです。この引数に <b><code>NULL</code></b> または "localhost" を渡すと ローカルホストとみなされます。もし可能な場合、TCP/IP プロトコルの代わりに パイプが使用されます。</p> <p>ホストの前に <i>p:</i> をつけると、持続的な接続を開きます。 接続プールから開いた接続上で <code>mysqli_change_user()</code> が自動的にコールされます。</p>
	 * @param string $username <p>MySQL のユーザー名。</p>
	 * @param string $passwd <p>省略したり <b><code>NULL</code></b> を渡したりした場合、MySQL サーバーは パスワードを持たないユーザーレコードについてのみ認証を試みます。 これによってひとつのユーザー名において(パスワードが指定されたか 否かによって)違うパーミッションを与えることができます。</p>
	 * @param string $dbname <p>指定した場合は、 クエリが行われるデフォルトのデータベースとなります。</p>
	 * @param int $port <p>MySQL サーバーに接続する際のポート番号を指定します。</p>
	 * @param string $socket <p>使用するソケットあるいは名前つきパイプを指定します。</p>  <p><b>注意</b>:</p> <p><code>socket</code> 引数を指定しても、MySQL サーバーへの 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの 接続方法については <code>host</code> 引数で定義されます。</p>
	 * @return void <p>MySQL サーバーへの接続を表すオブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.construct.php
	 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
	 * @since PHP 5, PHP 7
	 */
	public function connect(string $host = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $passwd = 'ini_get("mysqli.default_pw")', string $dbname = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")'): void {}

	/**
	 * デバッグ操作を行う
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Fred Fish debugging library を使用してデバッグを行います。</p>
	 * @param string $message <p>実行するデバッグ操作を表す文字列。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/ja/mysqli.debug.php
	 * @see mysqli_dump_debug_info(), mysqli_report()
	 * @since PHP 5, PHP 7
	 */
	public function debug(string $message): bool {}

	/**
	 * デバッグ情報をログに出力する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は SUPER 権限を持ったユーザーによって実行されるされることを 想定しており、<code>link</code> で指定した接続に関連する MySQL サーバーのデバッグ情報をログに出力します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.dump-debug-info.php
	 * @see mysqli_debug()
	 * @since PHP 5, PHP 7
	 */
	public function dump_debug_info(): bool {}

	/**
	 * 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数を使用して、SQL 文中で使用できる正当な形式の SQL 文字列を作成します。 文字列 <i>escapestr</i> が、エスケープされた SQL に変換されます。その際、接続で使用している現在の文字セットが考慮されます。</p><p>サーバーレベルで設定するなり API 関数 <code>mysqli_set_charset()</code> を使うなりして、 文字セットを明示しておく必要があります。この文字セットが <b>mysqli_real_escape_string()</b> に影響を及ぼします。詳細は 文字セットの概念 を参照ください。</p>
	 * @param string $escapestr <p>エスケープする文字列。</p> <p>エンコードされる文字は <i>NUL (ASCII 0), \n, \r, \, ', ", および Control-Z</i> です。</p>
	 * @return string <p>エスケープ済みの文字列を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.real-escape-string.php
	 * @see mysqli_set_charset(), mysqli_character_set_name()
	 * @since PHP 5, PHP 7
	 */
	public function escape_string(string $escapestr): string {}

	/**
	 * 文字セットオブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字セットオブジェクトを返します。 これは、現在アクティブな文字セットについてのプロパティを提供します。</p>
	 * @return object <p>この関数は、以下のプロパティを持つ文字セットオブジェクトを返します。</p>  <code>charset</code>   <p>文字セット名</p>   <code>collation</code>   <p>照合規則名</p>   <code>dir</code>   <p>文字セットの設定を読み込むディレクトリ。組み込みの文字セットについては ""</p>   <code>min_length</code>   <p>最小の文字の長さ (バイト数)</p>   <code>max_length</code>   <p>最大の文字の長さ (バイト数)</p>   <code>number</code>   <p>内部文字セット番号</p>   <code>state</code>   <p>文字セットの状態</p>
	 * @link http://php.net/manual/ja/mysqli.get-charset.php
	 * @see mysqli_character_set_name(), mysqli_set_charset()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function get_charset(): object {}

	/**
	 * MySQL クライアント情報を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
	 * @return string <p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-client-info.php
	 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7
	 */
	public function get_client_info(): string {}

	/**
	 * クライアント接続に関する統計情報を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアント接続に関する統計情報を返します。 mysqlnd でのみ使用可能です。</p>
	 * @return bool <p>成功した場合に接続の統計情報を含む配列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-connection-stats.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function get_connection_stats(): bool {}

	/**
	 * MySQL サーバーのバージョンを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQLi 拡張モジュールが接続している MySQL サーバーのバージョンを文字列で返します。</p>
	 * @return string <p>サーバーのバージョンを文字列で返します。</p>
	 * @link http://php.net/manual/ja/mysqli.get-server-info.php
	 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7
	 */
	public function get_server_info(): string {}

	/**
	 * SHOW WARNINGS の結果を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return mysqli_warning
	 * @link http://php.net/manual/ja/mysqli.get-warnings.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function get_warnings(): \mysqli_warning {}

	/**
	 * MySQLi を初期化し、mysqli_real_connect() で使用するリソースを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_options()</code> および <code>mysqli_real_connect()</code> で使用可能な MYSQL オブジェクトを割り当て、初期化します。</p><p><b>注意</b>:</p><p><code>mysqli_real_connect()</code> がコールされるまで、これ以降の あらゆる mysqli 関数コールは失敗します（<code>mysqli_options()</code> は除きます）。</p>
	 * @return mysqli <p>オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.init.php
	 * @see mysqli_options(), mysqli_close(), mysqli_real_connect(), mysqli_connect()
	 * @since PHP 5, PHP 7
	 */
	public function init(): \mysqli {}

	/**
	 * サーバーに MySQL スレッドの停止を問い合わせる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、<code>processid</code> で指定した MySQL スレッドの停止をサーバーに問い合わせます。この値は、 <code>mysqli_thread_id()</code> 関数で取得したものである 必要があります。</p><p>実行中のクエリを停止するには、SQL コマンド <i>KILL QUERY processid</i> を使用する必要があります。</p>
	 * @param int $processid
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.kill.php
	 * @see mysqli_thread_id()
	 * @since PHP 5, PHP 7
	 */
	public function kill(int $processid): bool {}

	/**
	 * マルチクエリからの結果がまだ残っているかどうかを調べる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直前の <code>mysqli_multi_query()</code> のコール結果に ひとつ以上の結果セットが残っているかどうかを調べます。</p>
	 * @return bool <p>直近の <code>mysqli_multi_query()</code> の呼び出しで 1 件以上の結果セットが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.more-results.php
	 * @see mysqli_multi_query(), mysqli_next_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function more_results(): bool {}

	/**
	 * データベース上でクエリを実行する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>セミコロンで連結されたひとつまたは複数のクエリを実行します。</p><p>最初のクエリの結果セットを取得するには、 <code>mysqli_use_result()</code> あるいは <code>mysqli_store_result()</code> を使用します。その他のクエリの結果は、 <code>mysqli_more_results()</code> および <code>mysqli_next_result()</code> を使用して取得します。</p>
	 * @param string $query <p>クエリを表す文字列。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @return bool <p>最初のステートメントが失敗した場合にのみ <b><code>FALSE</code></b> を返します。 その他のステートメントのエラーを取得するには、まず <code>mysqli_next_result()</code> をコールする必要があります。</p>
	 * @link http://php.net/manual/ja/mysqli.multi-query.php
	 * @see mysqli_query(), mysqli_use_result(), mysqli_store_result(), mysqli_next_result(), mysqli_more_results()
	 * @since PHP 5, PHP 7
	 */
	public function multi_query(string $query): bool {}

	/**
	 * multi_query の、次の結果を準備する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_multi_query()</code> コールから次の結果セットを用意します。 これは <code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> で取得することが可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.next-result.php
	 * @see mysqli_multi_query(), mysqli_more_results(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function next_result(): bool {}

	/**
	 * オプションを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>接続に関する追加オプションを設定し、 接続の振る舞いに影響を与えるために使用します。</p><p>この関数は、いくつかのオプションを設定して複数回コールされることがあります。</p><p><b>mysqli_options()</b> は、 <code>mysqli_init()</code> がコールされた後、 <code>mysqli_real_connect()</code> の前にコールしなければなりません。</p>
	 * @param int $option <p>指定するオプション。以下の値のいずれかです。</p> <b>使用可能なオプション</b>   名前 説明     <b><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></b> 接続のタイムアウト秒数 (PHP 5.3.1 以降、Windows 上での TCP/IP 接続をサポートします)。   <b><code>MYSQLI_OPT_LOCAL_INFILE</code></b>  <i>LOAD LOCAL INFILE</i> の使用可/不可。   <b><code>MYSQLI_INIT_COMMAND</code></b> MySQL サーバーへの接続後に実行するコマンド。   <b><code>MYSQLI_READ_DEFAULT_FILE</code></b>  my.cnf の代わりに、指定した名前のファイルから 設定を読み込みます。    <b><code>MYSQLI_READ_DEFAULT_GROUP</code></b>  my.cnf の指定した名前のグループ、あるいは <b><code>MYSQL_READ_DEFAULT_FILE</code></b> で指定したファイルから 設定を読み込みます。    <b><code>MYSQLI_SERVER_PUBLIC_KEY</code></b>  RSA 公開鍵ファイル。SHA-256 ベースの認証で使います。    <b><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></b>  内部のコマンド／ネットワークバッファのサイズ。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></b>  MySQL コマンドパケットのボディを読み込むときの、読み込みチャンクの最大バイト数。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></b>  integer 型と float 型のカラムを PHP の数値に変換します。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></b>
	 * @param mixed $value <p>オプションに設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.options.php
	 * @see mysqli_init(), mysqli_real_connect()
	 * @since PHP 5, PHP 7
	 */
	public function options(int $option, $value): bool {}

	/**
	 * サーバーとの接続をチェックし、もし切断されている場合は再接続を試みる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>サーバーとの接続が動作中かどうかを確かめます。もし切断されており、 グローバルオプション mysqli.reconnect が有効な場合は再接続を試みます。</p><p><b>注意</b>:  mysqlnd ドライバは、php.ini 設定項目 mysqli.reconnect を無視します。 自動再接続は行われません。 </p><p>この関数は、長期間アイドル状態にあるクライアントが、 サーバーの状態を確認して必要なら再接続するために使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.ping.php
	 * @since PHP 5, PHP 7
	 */
	public function ping(): bool {}

	/**
	 * 接続を問い合わせる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>接続を問い合わせます。 mysqlnd でのみ使用可能です。 このメソッドは static メソッドとして使えます。</p>
	 * @param array $read <p>読み込める結果が残っている接続のリスト。</p>
	 * @param array $error <p>クエリが失敗した、あるいは接続が切断されたなどのエラーが発生した接続のリスト。</p>
	 * @param array $reject <p>関数から結果を取得できるような非同期クエリが実行されていないという理由で、 拒否された接続のリスト。</p>
	 * @param int $sec <p>待ち続ける秒数の最大。非負の数でなければなりません。</p>
	 * @param int $usec <p>待ち続けるマイクロ秒数の最大。非負の数でなければなりません。</p>
	 * @return int <p>成功した場合に使用できる接続の数、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.poll.php
	 * @see mysqli_query(), mysqli_reap_async_query()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public static function poll(array &$read, array &$error, array &$reject, int $sec, int $usec = NULL): int {}

	/**
	 * 実行するための SQL ステートメントを準備する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>SQL クエリを準備し、後でそのステートメントを操作するために使用する ステートメントハンドルを返します。 クエリは、単一の SQL 文である必要があります。</p><p>パラメータマーカは、ステートメントの実行や行の取得の前に <code>mysqli_stmt_bind_param()</code> や <code>mysqli_stmt_bind_result()</code> を使用して アプリケーション変数にバインドする必要があります。</p>
	 * @param string $query <p>クエリを表す文字列。</p>  <p><b>注意</b>:</p> <p>ステートメントの最後にセミコロンや <i>\g</i> を追加してはいけません。</p>  <p><code>query</code> にはひとつまたは複数のパラメータを 含めることが可能です。そのためには、適切な位置にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p>  <p><b>注意</b>:</p> <p>パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ有効です。 例えば <i>INSERT</i> 文の <i>VALUES()</i> リストの中 (行に登録するカラム値を指定する) や <i>WHERE</i> 句で列のデータと比較する値などが 適切な位置の例です。</p> <p>しかし、識別子 (テーブルやカラムの名前) や <i>SELECT</i> 文で選択する項目の名前に指定したり、 (等号 <i>=</i> のような) 二項演算子の両側にパラメータを指定したりすることはできません。 後者の制限は、パラメータの型が判断できなくなることによるものです。 また、パラメータのマーカを <i>NULL</i> と比較して <i>&#63; IS NULL</i> のようにすることもできません。 一般に、パラメータが使用可能なのはデータ操作言語 (DML) ステートメントであり、データ定義言語 (DDL) ステートメントでは使用できません。</p>
	 * @return mysqli_stmt <p><b>mysqli_prepare()</b> はステートメントオブジェクトを返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.prepare.php
	 * @see mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_close()
	 * @since PHP 5, PHP 7
	 */
	public function prepare(string $query): \mysqli_stmt {}

	/**
	 * データベース上でクエリを実行する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースに対してクエリ <code>query</code> を実行します。</p><p>DML (INSERT、UPDATE あるいは DELETE) 以外のクエリについては、 この関数は <code>mysqli_real_query()</code> に続けて <code>mysqli_use_result()</code> あるいは <code>mysqli_store_result()</code> をコールすることと同等です。</p><p><b>注意</b>:</p><p>サーバーの <i>max_allowed_packet</i> よりも長いステートメントを <b>mysqli_query()</b> に渡した場合、 返ってくるエラーコードは MySQL Native Driver (<i>mysqlnd</i>) を使っているか MySQL Client Library (<i>libmysqlclient</i>) を使っているかで異なります。 それぞれ、次のように振る舞います。</p><p>Linux 上の <i>mysqlnd</i> では、エラーコード 1153 を返します。 エラーメッセージは "got a packet bigger than <i>max_allowed_packet</i> bytes" です。</p><p>Windows 上の <i>mysqlnd</i> では、エラーコード 2006 を返します。 エラーメッセージは "server has gone away" です。</p><p>すべてのプラットフォームの <i>libmysqlclient</i> では、エラーコード 2006 を返します。エラーメッセージは "server has gone away" です。</p>
	 * @param string $query <p>クエリ文字列。</p> <p>クエリ内のデータは 適切にエスケープ. する必要があります。</p>
	 * @param int $resultmode <p>定数 <b><code>MYSQLI_USE_RESULT</code></b> あるいは <b><code>MYSQLI_STORE_RESULT</code></b> で、望みの挙動を指定します。 デフォルトでは <b><code>MYSQLI_STORE_RESULT</code></b> を使用します。</p> <p><i>MYSQLI_USE_RESULT</i> を使用すると、 <code>mysqli_free_result()</code> をコールするまでは それ以降のコールはすべて <i>Commands out of sync</i> エラーを返します。</p> <p><b><code>MYSQLI_ASYNC</code></b> (mysqlnd で使用可能) を使用すると、クエリを非同期実行できるようになります。 このクエリの結果を取得するには <code>mysqli_poll()</code> を使用します。</p>
	 * @return mixed <p>失敗した場合に <b><code>FALSE</code></b> を返します。 <i>SELECT, SHOW, DESCRIBE</i> あるいは <i>EXPLAIN</i> が成功した場合は、<b>mysqli_query()</b> は mysqli_result オブジェクトを返します。それ以外のクエリが成功した場合は、 <b>mysqli_query()</b> は <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.query.php
	 * @see mysqli_real_query(), mysqli_multi_query(), mysqli_free_result()
	 * @since PHP 5, PHP 7
	 */
	public function query(string $query, int $resultmode = MYSQLI_STORE_RESULT) {}

	/**
	 * mysql サーバーとの接続をオープンする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL データベースエンジンとの接続を確立します。</p><p>この関数は、以下の点で <code>mysqli_connect()</code> とは異なります。</p><p><b>mysqli_real_connect()</b> は、 <code>mysqli_init()</code> が作成した接続オブジェクトを必要とします。</p><p><code>mysqli_options()</code> 関数を使用して、 さまざまな接続オプションを設定することが可能です。</p><p><code>flags</code> パラメータが使用できます。</p>
	 * @param string $host <p>ホスト名あるいは IP アドレス。<b><code>NULL</code></b> 値あるいは文字列 "localhost" をこのパラメータに指定すると、ローカルホストを使用します。 使用可能な場合は、TCP/IP プロトコルよりもパイプを優先して使用します。</p>
	 * @param string $username <p>MySQL ユーザー名。</p>
	 * @param string $passwd <p><b><code>NULL</code></b> を指定した場合は、MySQL サーバーは パスワードを持たないユーザーレコードについてのみ認証を試みます。 これにより、同一のユーザー名に対して (パスワードが指定されたか 否かによって) 違う権限を与えることができます。</p>
	 * @param string $dbname <p>指定した場合は、 クエリが行われるデフォルトのデータベースとなります。</p>
	 * @param int $port <p>MySQL サーバーに接続する際のポート番号を指定します。</p>
	 * @param string $socket <p>使用するソケットあるいは名前つきパイプを指定します。</p>  <p><b>注意</b>:</p> <p><code>socket</code> 引数を指定しても、MySQL サーバーへの 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの 接続方法については <code>host</code> 引数で定義されます。</p>
	 * @param int $flags <p>パラメータ <code>flags</code> で、接続時のさまざまなオプションを設定します。</p>  <b>サポートするフラグ</b>   名前 説明     <b><code>MYSQLI_CLIENT_COMPRESS</code></b> 圧縮プロトコルを使用します。   <b><code>MYSQLI_CLIENT_FOUND_ROWS</code></b> 変更された行数ではなく、マッチした行数を返します。   <b><code>MYSQLI_CLIENT_IGNORE_SPACE</code></b> 関数名に続く空白文字を許可します。すべての関数名を予約語とします。   <b><code>MYSQLI_CLIENT_INTERACTIVE</code></b>  接続を閉じるまでのタイムアウト時間として、 (<i>wait_timeout</i> のかわりに) <i>interactive_timeout</i> の使用を許可します。    <b><code>MYSQLI_CLIENT_SSL</code></b> SSL (暗号化) を使用します。   <b><code>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</code></b>  <b><code>MYSQLI_CLIENT_SSL</code></b> と似ていますが、 SSL 証明書の検証は行いません。 これは、MySQL Native Driver と MySQL 5.6 以降の組み合わせでのみ使えます。      <p><b>注意</b>:</p> <p>セキュリティの観点から、PHP では <i>MULTI_STATEMENT</i> フラグはサポートされていません。複数のクエリを実行したい場合は、 <code>mysqli_multi_query()</code> 関数を使用してください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.real-connect.php
	 * @see mysqli_connect(), mysqli_init(), mysqli_options(), mysqli_ssl_set(), mysqli_close()
	 * @since PHP 5, PHP 7
	 */
	public function real_connect(string $host = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = NULL, string $socket = NULL, int $flags = NULL): bool {}

	/**
	 * 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数を使用して、SQL 文中で使用できる正当な形式の SQL 文字列を作成します。 文字列 <i>escapestr</i> が、エスケープされた SQL に変換されます。その際、接続で使用している現在の文字セットが考慮されます。</p><p>サーバーレベルで設定するなり API 関数 <code>mysqli_set_charset()</code> を使うなりして、 文字セットを明示しておく必要があります。この文字セットが <b>mysqli_real_escape_string()</b> に影響を及ぼします。詳細は 文字セットの概念 を参照ください。</p>
	 * @param string $escapestr <p>エスケープする文字列。</p> <p>エンコードされる文字は <i>NUL (ASCII 0), \n, \r, \, ', ", および Control-Z</i> です。</p>
	 * @return string <p>エスケープ済みの文字列を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.real-escape-string.php
	 * @see mysqli_set_charset(), mysqli_character_set_name()
	 * @since PHP 5, PHP 7
	 */
	public function real_escape_string(string $escapestr): string {}

	/**
	 * SQL クエリを実行する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースに対して単一のクエリを実行します。 その結果を取得したり保存したりするには、関数 <code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> を使用します。</p><p>指定したクエリが結果を返すかどうかを調べるには、 <code>mysqli_field_count()</code> を参照ください。</p>
	 * @param string $query <p>クエリを表す文字列。</p> <p>クエリ内のデータは 適切にエスケープ. する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.real-query.php
	 * @see mysqli_query(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function real_query(string $query): bool {}

	/**
	 * 非同期クエリから結果を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>非同期クエリから結果を取得します。 mysqlnd でのみ使用可能です。</p>
	 * @return mysqli_result <p>成功した場合に mysqli_result、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.reap-async-query.php
	 * @see mysqli_poll()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function reap_async_query(): \mysqli_result {}

	/**
	 * リフレッシュする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>テーブルやキャッシュのフラッシュ、あるいはレプリケーションサーバー情報のリセットを行います。</p>
	 * @param int $options <p>リフレッシュのオプションを定数 MYSQLI_REFRESH_&#42; で指定します。定数の意味は MySQLi 定数 のドキュメントを参照ください。</p> <p>公式ドキュメントの » MySQL Refresh も参照ください。</p>
	 * @return bool <p>リフレッシュに成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.refresh.php
	 * @see mysqli_poll()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function refresh(int $options): bool {}

	/**
	 * 現在のトランザクションのセーブポイント群から、指定した名前のセーブポイントを削除する
	 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.release-savepoint.php
	 * @see mysqli_rollback()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function release_savepoint(string $name): bool {}

	/**
	 * 現在のトランザクションをロールバックする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースの現在のトランザクションをロールバックします。</p>
	 * @param int $flags <p>定数 <b><code>MYSQLI_TRANS_COR_&#42;</code></b> のビットマスク。</p>
	 * @param string $name <p>指定した場合は、<i>ROLLBACK/&#42;name&#42;/</i> を実行します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.rollback.php
	 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_autocommit(), mysqli_release_savepoint()
	 * @since PHP 5, PHP 7
	 */
	public function rollback(int $flags = NULL, string $name = NULL): bool {}

	/**
	 * RPL クエリの型を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>クエリの型により、 <b><code>MYSQLI_RPL_MASTER</code></b>、 <b><code>MYSQLI_RPL_SLAVE</code></b> あるいは <b><code>MYSQLI_RPL_ADMIN</code></b> のいずれかを返します。 <i>INSERT</i>・<i>UPDATE</i> およびそれに類する ものは <i>master</i> クエリで、<i>SELECT</i> は <i>slave</i>、そして <i>FLUSH</i>・ <i>REPAIR</i> およびそれに類するものは <i>admin</i> です。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
	 * @param string $query
	 * @return int
	 * @link http://php.net/manual/ja/mysqli.rpl-query-type.php
	 * @since PHP 5, PHP 7
	 */
	public function rpl_query_type(string $query): int {}

	/**
	 * トランザクションのセーブポイントを設定する
	 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.savepoint.php
	 * @see mysqli_commit()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function savepoint(string $name): bool {}

	/**
	 * クエリを実行するためのデフォルトのデータベースを選択する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続に対してクエリを実行する際に使用する、 デフォルトのデータベースを設定します。</p><p><b>注意</b>:</p><p>この関数は、接続のデフォルトデータベースを変更する際にのみ使用します。 デフォルトデータベースは、<code>mysqli_connect()</code> の 4 番目の引数でも指定可能です。</p>
	 * @param string $dbname <p>データベース名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.select-db.php
	 * @see mysqli_connect(), mysqli_real_connect()
	 * @since PHP 5, PHP 7
	 */
	public function select_db(string $dbname): bool {}

	/**
	 * クエリを送信する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
	 * @param string $query
	 * @return bool
	 * @link http://php.net/manual/ja/mysqli.send-query.php
	 * @since PHP 5, PHP 7
	 */
	public function send_query(string $query): bool {}

	/**
	 * クライアントのデフォルト文字セットを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースサーバーとのデータの送受信に使用する、 デフォルトの文字セットを設定します。</p>
	 * @param string $charset <p>デフォルトとして設定する文字セット。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.set-charset.php
	 * @see mysqli_character_set_name(), mysqli_real_escape_string()
	 * @since PHP 5 >= 5.0.5, PHP 7
	 */
	public function set_charset(string $charset): bool {}

	/**
	 * load local infile コマンド用のユーザー定義ハンドラを削除する
	 * <p><code>mysqli_set_local_infile_handler()</code> で設定した <i>LOAD DATA INFILE LOCAL</i> ハンドラを削除します。</p>
	 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli.set-local-infile-default.php
	 * @see mysqli_set_local_infile_handler()
	 * @since PHP 5, PHP 7
	 */
	public function set_local_infile_default(\mysqli $link): void {}

	/**
	 * LOAD DATA LOCAL INFILE コマンド用のコールバック関数を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>LOAD DATA LOCAL INFILE コマンド用のコールバック関数を設定します。</p><p>コールバック関数では、<i>LOAD DATA LOCAL INFILE</i> で指定したファイルの内容を読み込んで、それを <i>LOAD DATA INFILE</i> で使用できる形式に変換します。</p><p>返されるデータは、 <i>LOAD DATA</i> で指定した書式にマッチする必要があります。</p>
	 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
	 * @param callable $read_func <p>以下のパラメータを受け取るコールバック関数あるいはオブジェクトのメソッド。</p>   <code>stream</code>   <p>SQL の INFILE コマンドに関連付けられた PHP ストリーム</p>   <code>&amp;buffer</code>   <p>入力を書き換えた内容を保存する文字列バッファ</p>   <code>buflen</code>   <p>バッファに格納する最大文字数</p>   <code>&amp;errormsg</code>   <p>エラーが発生した場合にエラーメッセージを保存する場所</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.set-local-infile-handler.php
	 * @see mysqli_set_local_infile_default()
	 * @since PHP 5, PHP 7
	 */
	public function set_local_infile_handler(\mysqli $link, callable $read_func): bool {}

	/**
	 * SSL を使用したセキュアな接続を確立する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>SSL を使用してセキュアな接続を確立します。 <code>mysqli_real_connect()</code> より前にコールする必要があります。この関数は、 OpenSSL サポートが有効になっていない場合は何もしません。</p><p>PHP 5.3.3 より前は、MySQL ネイティブドライバは SSL をサポートしていないことに注意しましょう。 MySQL ネイティブドライバを使っているときにこの関数をコールすると、エラーとなります。 MySQL ネイティブドライバは、Microsoft Windows 版の PHP バージョン 5.3 以降はデフォルトで有効となっています。</p>
	 * @param string $key <p>鍵ファイルへのパス。</p>
	 * @param string $cert <p>証明書ファイルへのパス。</p>
	 * @param string $ca <p>CA ファイルへのパス。</p>
	 * @param string $capath <p>信頼された SSL CA 証明書が PEM フォーマットで格納されているディレクトリへのパス。</p>
	 * @param string $cipher <p>SSL の暗号化に使用可能な暗号形式の一覧。</p>
	 * @return bool <p>この関数は、常に <b><code>TRUE</code></b> を返します。もし SSL が正しく設定できていない場合、 <code>mysqli_real_connect()</code> は接続時にエラーを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.ssl-set.php
	 * @see mysqli_options(), mysqli_real_connect()
	 * @since PHP 5, PHP 7
	 */
	public function ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

	/**
	 * 現在のシステム状態を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_stat()</b> は、'mysqladmin status' コマンドが 返すのと同じ情報を返します。この中には、起動からの秒数・起動中の スレッドの数・リロード数および開かれているテーブルなどが含まれます。</p>
	 * @return string <p>サーバーの状態を示す文字列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.stat.php
	 * @see mysqli_get_server_info()
	 * @since PHP 5, PHP 7
	 */
	public function stat(): string {}

	/**
	 * ステートメントを初期化し、mysqli_stmt_prepare で使用するオブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_stmt_prepare()</code> で使用可能な ステートメントオブジェクトを割り当て、初期化します。</p><p><b>注意</b>:</p><p><code>mysqli_stmt_prepare()</code> がコールされるまで、 これ以降のあらゆる mysqli_stmt 関数のコールは失敗します。</p>
	 * @return mysqli_stmt <p>オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/mysqli.stmt-init.php
	 * @see mysqli_stmt_prepare()
	 * @since PHP 5, PHP 7
	 */
	public function stmt_init(): \mysqli_stmt {}

	/**
	 * 直近のクエリから結果セットを転送する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_data_seek()</code> で使用される、 <code>link</code> で表されたデータベース接続の直近のクエリ から結果セットを転送します。</p>
	 * @param int $option <p>指定したいオプション。以下のいずれかの値を指定します。</p> <b>有効なオプション</b>   名前 説明     <b><code>MYSQLI_STORE_RESULT_COPY_DATA</code></b>  結果を、内部の mysqlnd バッファーから PHP の変数にコピーします。 デフォルトでは、mysqlnd は参照を利用しており、メモリ内の結果をコピーしたり複製したりしないようにしています。 ある種の結果セット (短めの行を大量に保持する結果セットなど) の場合は、 コピーしたほうが、全体的なメモリ使用量を抑えることができます。 結果を保持する PHP の変数のほうが、解放されるのが早いからです。 これは mysqlnd でのみ利用可能で、PHP 5.6.0 以降で使えます。
	 * @return mysqli_result <p>バッファに格納した結果オブジェクトを返します。エラー時には <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p><b>mysqli_store_result()</b> は、クエリが結果セットを 返さなかった場合（例えば、クエリが INSERT 文であった場合）に <b><code>FALSE</code></b> を返します。また、結果セットの読み込みに失敗した場合にも <b><code>FALSE</code></b> を返します。エラーが発生したかどうかを調べるには、 <code>mysqli_error()</code> が空文字列以外を返す・ <code>mysqli_errno()</code> がゼロ以外の値を返す・あるいは <code>mysqli_field_count()</code> がゼロ以外の値を返す のいずれかを確認します。それ以外にこの関数が <b><code>FALSE</code></b> を返す理由としては <code>mysqli_query()</code> のコールに成功して返された 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。 もし <code>mysqli_field_count()</code> がゼロ以外の値を 返した場合、文は空でない結果セットを生成しています。</p>
	 * @link http://php.net/manual/ja/mysqli.store-result.php
	 * @see mysqli_real_query(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function store_result(int $option = NULL): \mysqli_result {}

	/**
	 * スレッドセーフであるかどうかを返す
	 * <p>手続き型</p><p>クライアントライブラリがスレッドセーフでコンパイルされているかどうかを返します。</p>
	 * @return bool <p>クライアントライブラリがスレッドセーフの場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.thread-safe.php
	 * @since PHP 5, PHP 7
	 */
	public function thread_safe(): bool {}

	/**
	 * 結果セットの取得を開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続上で <code>mysqli_real_query()</code> 関数を使用して実行した直近のクエリから、結果セットの取得を開始します。</p><p>この関数あるいは <code>mysqli_store_result()</code> 関数は、 クエリ結果を取得する前にコールされる必要があります。また、どちらかの 関数をコールしなければ、データベース接続上の次のクエリは失敗します。</p><p><b>注意</b>:</p><p><b>mysqli_use_result()</b> は、データベースから結果セットの 全体を転送するわけではありません。そのため、セット内の行を移動するために <code>mysqli_data_seek()</code> を使用することはできません。 この機能を使用するには、<code>mysqli_store_result()</code> を使用して結果をバッファに取得する必要があります。クライアント側で 大量の処理を行う際は、<b>mysqli_use_result()</b> を 使用すべきではありません。なぜなら、この関数はサーバーとの接続を保持 し続け、取得しているデータに関連するテーブルについて、他のスレッドから 更新ができなくなるからです。</p>
	 * @return mysqli_result <p>バッファに取得しないで結果オブジェクトを返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli.use-result.php
	 * @see mysqli_real_query(), mysqli_store_result()
	 * @since PHP 5, PHP 7
	 */
	public function use_result(): \mysqli_result {}
}

/**
 * <p>MySQLi ドライバです。</p>
 * @link http://php.net/manual/ja/class.mysqli-driver.php
 * @since PHP 5, PHP 7
 */
class mysqli_driver {

	/**
	 * @var string <p>クライアント API ヘッダのバージョン</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.client-info
	 */
	public $client_info;

	/**
	 * @var string <p>クライアントのバージョン</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.client-version
	 */
	public $client_version;

	/**
	 * @var string <p>MySQLi ドライバのバージョン</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.driver-version
	 */
	public $driver_version;

	/**
	 * @var string <p>MySQLi Embedded のサポートが有効かどうか</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.embedded
	 */
	public $embedded;

	/**
	 * @var bool <p>再接続を許可するかどうか (INI 設定 mysqli.reconnect を参照ください)</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.reconnect
	 */
	public $reconnect;

	/**
	 * @var int <p><b><code>MYSQLI_REPORT_OFF</code></b>、 <b><code>MYSQLI_REPORT_ALL</code></b> あるいは以下の <b><code>MYSQLI_REPORT_STRICT</code></b> (エラー時に例外をスローする)、 <b><code>MYSQLI_REPORT_ERROR</code></b> (エラーを報告する) および <b><code>MYSQLI_REPORT_INDEX</code></b> (インデックス関連のエラーを報告する) の組み合わせを設定します。 <code>mysqli_report()</code> も参照ください。</p>
	 * @link http://php.net/manual/ja/class.mysqli-driver.php#mysqli-driver.props.report-mode
	 */
	public $report_mode;

	/**
	 * 組み込みサーバーを停止する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/mysqli-driver.embedded-server-end.php
	 * @since PHP 5, PHP 7
	 */
	public function embedded_server_end(): void {}

	/**
	 * 組み込みサーバーを初期化して開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $start
	 * @param array $arguments
	 * @param array $groups
	 * @return bool
	 * @link http://php.net/manual/ja/mysqli-driver.embedded-server-start.php
	 * @since PHP 5, PHP 7
	 */
	public function embedded_server_start(int $start, array $arguments, array $groups): bool {}
}

/**
 * <p>データベースへのクエリにより得られた結果セットを表します。</p>
 * <p><i>変更履歴</i></p>
 * @link http://php.net/manual/ja/class.mysqli-result.php
 * @since PHP 5, PHP 7
 */
class mysqli_result {

	/**
	 * 結果ポインタにおける現在のフィールドオフセットを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_fetch_field()</code> のコールで使用した フィールドカーソルの位置を返します。この値は <code>mysqli_field_seek()</code> の引数として使用可能です。</p>
	 * @var int <p>フィールドカーソルの現在のオフセットを返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.current-field.php
	 * @see mysqli_fetch_field(), mysqli_field_seek()
	 * @since PHP 5, PHP 7
	 */
	public $current_field;

	/**
	 * 結果のフィールド数を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した結果セットからフィールドの数を返します。</p>
	 * @var int <p>結果セットのフィールド数を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.field-count.php
	 * @see mysqli_fetch_field()
	 * @since PHP 5, PHP 7
	 */
	public $field_count;

	/**
	 * 結果セットにおける現在の行のカラムの長さを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_lengths()</b> 関数は、<code>result</code> が指す結果セットの現在の行について、すべてのカラムの長さを含む 配列を返します。</p>
	 * @var array <p>各カラムのサイズ（終端の null 文字は含みません）を表す整数の配列を 返します。エラー時には <b><code>FALSE</code></b> を返します。</p><p><b>mysqli_fetch_lengths()</b> は、結果セットの現在の行に ついてのみ有効です。mysqli_fetch_row/array/object をコールする前、あるいは 結果のすべての行を取得した後にこの関数をコールすると、<b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.lengths.php
	 * @since PHP 5, PHP 7
	 */
	public $lengths;

	/**
	 * 結果の行数を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットの行数を返します。</p><p><b>mysqli_num_rows()</b> が使用可能かどうかは、 結果セットをバッファに格納しているかどうかに依存します。結果セットを バッファに格納していない場合、すべての行を取得し終えるまで <b>mysqli_num_rows()</b> は正確な行数を返しません。</p>
	 * @var int <p>結果セットの行数を返します。</p> <p><b>注意</b>:</p> <p>行数が <b><code>PHP_INT_MAX</code></b> をこえる場合、行数は文字列で返されます。</p>
	 * @link http://php.net/manual/ja/mysqli-result.num-rows.php
	 * @see mysqli_affected_rows(), mysqli_store_result(), mysqli_use_result(), mysqli_query()
	 * @since PHP 5, PHP 7
	 */
	public $num_rows;

	/**
	 * 結果に関連付けられたメモリを開放する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果に関連付けられたメモリを開放します。</p><p><b>注意</b>:</p><p>結果オブジェクトが必要なくなった場合は、常に <b>mysqli_free_result()</b> でメモリを開放すべきです。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli-result.free.php
	 * @see mysqli_query(), mysqli_stmt_store_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function close(): void {}

	/**
	 * 結果の任意の行にポインタを移動する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_data_seek()</b> 関数は、 結果セットの任意の行 <code>offset</code> にポインタを移動します。</p>
	 * @param int $offset <p>フィールドオフセット。ゼロから全行数 - 1 までの間 （0..<code>mysqli_num_rows()</code> - 1）である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.data-seek.php
	 * @see mysqli_store_result(), mysqli_fetch_row(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_num_rows()
	 * @since PHP 5, PHP 7
	 */
	public function data_seek(int $offset): bool {}

	/**
	 * 結果のすべての行を連想配列・数値添字配列あるいはその両方の形式で取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_all()</b> は、 すべての結果の行を取得してその結果セットを連想配列・数値添字配列あるいはその両方で返します。</p>
	 * @param int $resulttype <p>このオプションは、 結果の行データから返す配列の型を指定します。ここで指定可能な値は 定数 <b><code>MYSQLI_ASSOC</code></b>、 <b><code>MYSQLI_NUM</code></b> あるいは <b><code>MYSQLI_BOTH</code></b>. のいずれかです。</p>
	 * @return mixed <p>結果の行を含む連想配列あるいは数値添字配列の配列を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.fetch-all.php
	 * @see mysqli_fetch_array(), mysqli_query()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function fetch_all(int $resulttype = MYSQLI_NUM) {}

	/**
	 * 結果の行を連想配列・数値添字配列あるいはその両方の形式で取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>取得した行に対応する配列を返します。 <code>result</code> パラメータがあらわす結果セットに対して行がなければ、<b><code>NULL</code></b> を返します。</p><p><b>mysqli_fetch_array()</b> は <code>mysqli_fetch_row()</code> 関数の拡張版です。データを数値添字の 配列に格納することに加えて、<b>mysqli_fetch_array()</b> 関数は、フィールド名をキーとする連想配列にもデータを格納します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p>もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた カラムが優先され、以前のデータを上書きします。同名の複数のカラムに アクセスする場合、数値添字版の行データを使用しなければなりません。</p>
	 * @param int $resulttype <p>このオプションは、 結果の行データから返す配列の型を指定します。ここで指定可能な値は 定数 <b><code>MYSQLI_ASSOC</code></b>、 <b><code>MYSQLI_NUM</code></b> あるいは <b><code>MYSQLI_BOTH</code></b>. のいずれかです。</p> <p><b><code>MYSQLI_ASSOC</code></b> 定数を指定すると、この関数は <code>mysqli_fetch_assoc()</code> と同じ結果を返します。一方 <b><code>MYSQLI_NUM</code></b> を指定すると、<code>mysqli_fetch_row()</code> 関数と同じ結果となります。最後の <b><code>MYSQLI_BOTH</code></b> を指定すると、 ひとつの配列にこれら両方の属性を含めます。</p>
	 * @return mixed <p>取得した行に対応する文字列の配列を返します。結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.fetch-array.php
	 * @see mysqli_fetch_assoc(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_array(int $resulttype = MYSQLI_BOTH) {}

	/**
	 * 結果の行を連想配列で取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>取得した行に対応する連想配列を返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @return array <p>取得した行に対応する文字列の連想配列を返します。 連想配列の各キーが、結果セットのカラムを表します。 結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p><p>もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた カラムが優先され、以前のデータを上書きします。同名の複数のカラムに アクセスする場合、<code>mysqli_fetch_row()</code> を用いて 数値添字配列を使用するか、あるいはカラム名にエイリアスを指定する 必要があります。</p>
	 * @link http://php.net/manual/ja/mysqli-result.fetch-assoc.php
	 * @see mysqli_fetch_array(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_assoc(): array {}

	/**
	 * 結果セットの次のフィールドを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットから ひとつのカラムの情報をオブジェクトとして返します。この関数を 繰り返しコールすることで、結果セットのすべてのカラムについての情報が 取得可能です。</p>
	 * @return object <p>フィールド定義情報を含むオブジェクトを返します。もし フィールドの情報が取得できない場合は、<b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   def デフォルト値のために予約済。現在は常に ""。   db データベース (PHP 5.3.6 以降)。   catalog カタログ名。常に "def" (PHP 5.3.6 以降)。   max_length 結果セットにおけるフィールドの最大幅。   length テーブルの定義で指定されているフィールド幅。   charsetnr フィールドの文字セット番号。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（integer 型のフィールド）。
	 * @link http://php.net/manual/ja/mysqli-result.fetch-field.php
	 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_fields(), mysqli_field_seek()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_field(): object {}

	/**
	 * 単一のフィールドのメタデータを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した結果セットから、フィールド定義情報を含むオブジェクトを返します。</p>
	 * @param int $fieldnr <p>フィールド番号。この値は <i>0</i> から <i>フィールド数 - 1</i> までの範囲でなければなりません。</p>
	 * @return object <p>フィールド定義情報を含むオブジェクトを返します。もし、指定した <i>fieldnr</i> のフィールドの情報が取得できない場合は <b><code>FALSE</code></b> を返します。</p> <b>オブジェクトの属性</b>   属性 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   def フィールドのデフォルト値。文字列形式。   max_length 結果セットにおけるフィールドの最大幅。   length テーブルの定義で指定されているフィールド幅。   charsetnr フィールドの文字セット番号。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（数値型のフィールド）。
	 * @link http://php.net/manual/ja/mysqli-result.fetch-field-direct.php
	 * @see mysqli_num_fields(), mysqli_fetch_field(), mysqli_fetch_fields()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_field_direct(int $fieldnr): object {}

	/**
	 * 結果セットのフィールド情報をオブジェクトの配列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は <code>mysqli_fetch_field()</code> 関数と同じ目的で 使用しますが、ひとつ違いがあります。一度にひとつずつフィールド情報を 取得するのではなく、複数のカラムの情報をオブジェクトの配列で返します。</p>
	 * @return array <p>フィールド定義情報を含むオブジェクトの配列を返します。もし フィールドの情報が取得できない場合は、<b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   max_length 結果セットにおけるフィールドの最大幅。   length  テーブルの定義で指定されているフィールド幅 (バイト単位)。 この値 (バイト数) は、利用している文字セットによってはテーブル定義の値 (文字数) と異なるかもしれないことに注意しましょう。 たとえば utf8 の場合は一文字あたり3バイトなので、varchar(10) の長さは30になります。 一方、同じ定義でも latin1 の場合の長さは10になります。    charsetnr フィールドの文字セット番号 (id)。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（integer 型のフィールド）。
	 * @link http://php.net/manual/ja/mysqli-result.fetch-fields.php
	 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_field()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_fields(): array {}

	/**
	 * 結果セットの現在の行をオブジェクトとして返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_object()</b> は、結果セットの現在の行を オブジェクトで返します。このオブジェクトは、結果セットのフィールド名を 属性として持ちます。</p><p><b>mysqli_fetch_object()</b> がオブジェクトのプロパティを設定するのは、 オブジェクトのコンストラクタをコールする前であることに注意しましょう。</p>
	 * @param string $class_name <p>インスタンス化してプロパティを設定後に返すクラスの名前。 省略した場合は <b>stdClass</b> オブジェクトを返します。</p>
	 * @param array $params <p>オプションのパラメータの配列で、 <code>class_name</code> オブジェクトのコンストラクタに渡します。</p>
	 * @return object <p>取得した行に対応する文字列プロパティを有するオブジェクトを返します。 もし結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.fetch-object.php
	 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_row(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_object(string $class_name = "stdClass", array $params = NULL): object {}

	/**
	 * 結果の行を数値添字配列で取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットからデータを 1 行取得し、それを数値添字の配列で 返します。各カラムは 0（ゼロ）から始まる添字に格納されます。 <b>mysqli_fetch_row()</b> 関数を続けてコールすると、 結果セットの次の行を返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p>
	 * @return mixed <p><b>mysqli_fetch_row()</b> は取得した行に対応する文字列の配列を 返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.fetch-row.php
	 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7
	 */
	public function fetch_row() {}

	/**
	 * 結果ポインタを、指定したフィールドオフセットに設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フィールドカーソルを指定したオフセットに設定します。 <code>mysqli_fetch_field()</code> を次にコールした際に、 設定したオフセットに関連するカラムのフィールド定義を取得します。</p><p><b>注意</b>:</p><p>行のはじめに移動するには、オフセットとしてゼロを指定します。</p>
	 * @param int $fieldnr <p>フィールド番号。これは <i>0</i> から <i>フィールド数 - 1</i> までの範囲でなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-result.field-seek.php
	 * @see mysqli_fetch_field()
	 * @since PHP 5, PHP 7
	 */
	public function field_seek(int $fieldnr): bool {}

	/**
	 * 結果に関連付けられたメモリを開放する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果に関連付けられたメモリを開放します。</p><p><b>注意</b>:</p><p>結果オブジェクトが必要なくなった場合は、常に <b>mysqli_free_result()</b> でメモリを開放すべきです。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli-result.free.php
	 * @see mysqli_query(), mysqli_stmt_store_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function free(): void {}

	/**
	 * 結果に関連付けられたメモリを開放する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果に関連付けられたメモリを開放します。</p><p><b>注意</b>:</p><p>結果オブジェクトが必要なくなった場合は、常に <b>mysqli_free_result()</b> でメモリを開放すべきです。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli-result.free.php
	 * @see mysqli_query(), mysqli_stmt_store_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7
	 */
	public function free_result(): void {}
}

/**
 * <p>mysqli の例外を処理するクラスです。</p>
 * @link http://php.net/manual/ja/class.mysqli-sql-exception.php
 * @since PHP 5, PHP 7
 */
class mysqli_sql_exception extends \RuntimeException {

	/**
	 * @var string <p>エラーの SQLSTATE。</p>
	 * @link http://php.net/manual/ja/class.mysqli-sql-exception.php#mysqli-sql-exception.props.sqlstate
	 */
	protected $sqlstate;

	/**
	 * @var string <p>例外メッセージ</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.message
	 */
	protected $message;

	/**
	 * @var int <p>例外コード</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.code
	 */
	protected $code;

	/**
	 * @var string <p>例外が作られたファイル名</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.file
	 */
	protected $file;

	/**
	 * @var int <p>例外が作られた行</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.line
	 */
	protected $line;
}

/**
 * <p>プリペアドステートメントを表します。</p>
 * @link http://php.net/manual/ja/class.mysqli-stmt.php
 * @since PHP 5, PHP 7
 */
class mysqli_stmt {

	/**
	 * 直近に実行されたステートメントで変更・削除・あるいは追加された行の総数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><i>INSERT</i>、 <i>UPDATE</i> あるいは <i>DELETE</i> クエリによって変更された行の数を返します。</p><p>この関数は、テーブルを更新するクエリに対してのみ働きます。 SELECT クエリが返す行の数を知るには、 <code>mysqli_stmt_num_rows()</code> 関数を代わりに使用します。</p>
	 * @var int <p>ゼロより大きい整数の場合、変更した行の数を示します。ゼロの場合は、 UPDATE/DELETE で 1 行も更新されなかった・WHERE 句にマッチする行がなかった・ あるいはまだクエリが実行されていないのいずれかであることを示します。 -1 は、クエリがエラーを返したことを示します。 NULL は、関数に無効な引数が渡されたことを示します。</p> <p><b>注意</b>:</p> <p>変更された行の数が PHP の int 型の最大値をこえる場合は、変更された 行の数は文字列として返されます。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.affected-rows.php
	 * @see mysqli_stmt_num_rows(), mysqli_prepare()
	 * @since PHP 5, PHP 7
	 */
	public $affected_rows;

	/**
	 * 直近のステートメントのコールに関するエラーコードを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたステートメントが 成功あるいは失敗した際のエラーコードを返します。</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
	 * @var int <p>エラーコードの値を返します。ゼロはエラーが発生しなかったことを示します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.errno.php
	 * @see mysqli_stmt_error(), mysqli_stmt_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $errno;

	/**
	 * 直近で実行したステートメントからのエラーの一覧を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>エラーの配列を返します。この配列の内容は、直近で実行したステートメント関数で発生したエラーです。</p>
	 * @var array <p>エラーの一覧を返します。個々のエラーは連想配列形式で、 errno、error および sqlstate のキーを含みます。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.error-list.php
	 * @see mysqli_stmt_error(), mysqli_stmt_errno(), mysqli_stmt_sqlstate()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	public $error_list;

	/**
	 * 直近のステートメントのエラー内容を文字列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたステートメントが 成功あるいは失敗した際のエラーメッセージを文字列で返します。</p>
	 * @var string <p>エラーの内容を文字列で返します。エラーが発生しなかった場合は空文字列を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.error.php
	 * @see mysqli_stmt_errno(), mysqli_stmt_sqlstate()
	 * @since PHP 5, PHP 7
	 */
	public $error;

	/**
	 * 指定したステートメントのフィールド数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @var int
	 * @link http://php.net/manual/ja/mysqli-stmt.field-count.php
	 * @since PHP 5, PHP 7
	 */
	public $field_count;

	/**
	 * 直近の INSERT 操作で生成した ID を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @var int
	 * @link http://php.net/manual/ja/mysqli-stmt.insert-id.php
	 * @since PHP 5, PHP 7
	 */
	public $insert_id;

	/**
	 * ステートメントの結果セットの行数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットの行の数を返します。<b>mysqli_stmt_num_rows()</b> が使用できるかどうかは、<code>mysqli_stmt_store_result()</code> を用いて結果をステートメントハンドルにバッファリングしているかどうかに 依存します。</p><p><code>mysqli_stmt_store_result()</code> を使用した場合は、 すぐに <b>mysqli_stmt_num_rows()</b> をコールできます。</p>
	 * @var int <p>結果セットの行数を表す整数値を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.num-rows.php
	 * @see mysqli_stmt_affected_rows(), mysqli_prepare(), mysqli_stmt_store_result()
	 * @since PHP 5, PHP 7
	 */
	public $num_rows;

	/**
	 * 指定したステートメントのパラメータ数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメント内のパラメータマーカの数を返します。</p>
	 * @var int <p>パラメータの数を整数で返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.param-count.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7
	 */
	public $param_count;

	/**
	 * 直前のステートメントの操作での SQLSTATE エラーを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたプリペアドステートメントのエラーについて、 SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> はエラーが発生しなかったことを意味します。この値は、ANSI SQL および ODBC で定義されています。とりうる値の一覧は » http://dev.mysql.com/doc/mysql/en/error-handling.html を参照ください。</p>
	 * @var string <p>直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 文字で構成され、<i>'00000'</i> はエラーが発生しなかったことを意味します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.sqlstate.php
	 * @see mysqli_stmt_errno(), mysqli_stmt_error()
	 * @since PHP 5, PHP 7
	 */
	public $sqlstate;

	/**
	 * Constructs a new mysqli_stmt object
	 * <p>This method constructs a new mysqli_stmt object.</p><p><b>注意</b>:</p><p>In general, you should use either <code>mysqli_prepare()</code> or <code>mysqli_stmt_init()</code> to create a mysqli_stmt object, rather than directly instantiating the object with <i>new mysqli_stmt</i>. This method (and the ability to directly instantiate mysqli_stmt objects) may be deprecated and removed in the future.</p>
	 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
	 * @param string $query <p>The query, as a string. If this parameter is omitted, then the constructor behaves identically to <code>mysqli_stmt_init()</code>, if provided, then it behaves as per <code>mysqli_prepare()</code>.</p>
	 * @return self
	 * @link http://php.net/manual/ja/mysqli-stmt.construct.php
	 * @see mysqli_prepare(), mysqli_stmt_init()
	 * @since PHP 5, PHP 7
	 */
	public function __construct(\mysqli $link, string $query = NULL) {}

	/**
	 * ステートメントの属性の現在の値を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントの属性の現在の値を取得します。</p>
	 * @param int $attr <p>取得したい属性。</p>
	 * @return int <p>属性がみつからない場合は <b><code>FALSE</code></b> を、 それ以外の場合はその属性の値を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.attr-get.php
	 * @since PHP 5, PHP 7
	 */
	public function attr_get(int $attr): int {}

	/**
	 * プリペアドステートメントの振る舞いを変更する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントの振る舞いを変更します。 複数の属性を設定するには、この関数を複数回コールします。</p>
	 * @param int $attr <p>設定したい属性。次のいずれかの値となります。</p> <b>属性の値</b>   文字 説明     MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH  <b><code>TRUE</code></b> に設定すると、<code>mysqli_stmt_store_result()</code> は メタデータ <i>MYSQL_FIELD-&gt;max_length</i> の値を上書きします。    MYSQLI_STMT_ATTR_CURSOR_TYPE  <code>mysqli_stmt_execute()</code> が起動された際にステートメントをオープンするためのカーソル型。 <code>mode</code> は、<i>MYSQLI_CURSOR_TYPE_NO_CURSOR</i> (デフォルト) あるいは <i>MYSQLI_CURSOR_TYPE_READ_ONLY</i> となります。    MYSQLI_STMT_ATTR_PREFETCH_ROWS  カーソルの使用時にサーバーからいちどに取得する行数。 <code>mode</code> に指定できる値の範囲は 1 から unsigned long の最大値までで、デフォルトは 1 です。     <p><i>MYSQLI_STMT_ATTR_CURSOR_TYPE</i> オプションで <i>MYSQLI_CURSOR_TYPE_READ_ONLY</i> を使用すると、 <code>mysqli_stmt_execute()</code> を起動した際にそのステートメント用のカーソルをオープンします。 以前に <code>mysqli_stmt_execute()</code> をコールした際にオープンしたカーソルが残っている場合は、 それを閉じてから新しいカーソルをオープンします。また <code>mysqli_stmt_reset()</code> も、オープンしているカーソルをすべて閉じてからステートメント再実行の準備をします。 <code>mysqli_stmt_free_result()</code> は、オープンしているカーソルをすべて閉じます。</p> <p>プリペアドステートメント用のカーソルをオープンするのなら <code>mysqli_stmt_store_result()</code> は不要です。</p>
	 * @param int $mode <p>属性に割り当てるモード。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/mysqli-stmt.attr-set.php
	 * @since PHP 5, PHP 7
	 */
	public function attr_set(int $attr, int $mode): bool {}

	/**
	 * プリペアドステートメントのパラメータに変数をバインドする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>変数を、SQL ステートメントのパラメータマーカにバインドします。 この変数は、<code>mysqli_prepare()</code> に渡されたものです。</p><p><b>注意</b>:</p><p>データのサイズがパケットサイズの最大値（max_allowed_packet）を こえた場合、<code>types</code> に <i>b</i> を 指定して <code>mysqli_stmt_send_long_data()</code> を使用し、 データをパケットに分割して送信する必要があります。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_bind_param()</b> と <code>call_user_func_array()</code> を組み合わせて使う場合は注意が必要です。 <b>mysqli_stmt_bind_param()</b> へのパラメータは参照渡しでなければなりませんが、 <code>call_user_func_array()</code> には変数のリストをパラメータとして渡すことができます。 この変数は参照であっても値であってもかまいません。</p>
	 * @param string $types <p>ひとつあるいは複数の文字で、対応するバインド変数の型を表します。</p> <b>型指定文字</b>   文字 説明     i 対応する変数の型は integer です。   d 対応する変数の型は double です。   s 対応する変数の型は string です。   b 対応する変数の型は blob で、複数のパケットに分割して送信されます。
	 * @param mixed $var1 <p>変数の数。文字列 <code>types</code> の長さは、ステートメント中のパラメータの数と一致する必要があります。</p>
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.bind-param.php
	 * @see mysqli_stmt_bind_result(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_send_long_data(), mysqli_stmt_errno(), mysqli_stmt_error()
	 * @since PHP 5, PHP 7
	 */
	public function bind_param(string $types, &$var1, &$_ = NULL): bool {}

	/**
	 * 結果を保存するため、プリペアドステートメントに変数をバインドする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットのカラムを変数にバインドします。</p><p>データを取得するために <code>mysqli_stmt_fetch()</code> がコールされた場合、MySQL クライアント/ サーバー プロトコルはバインドされたカラムのデータを <code>var1, ...</code> に格納します。</p><p><b>注意</b>:</p><p>すべてのカラムを、<code>mysqli_stmt_execute()</code> をコールしてから <code>mysqli_stmt_fetch()</code> をコールするまでの間に バインドしておく必要があることに注意しましょう。カラムの型に 応じて、バインド変数の型も対応する PHP の型に自動的に変換されます。</p><p>カラムのバインドや再バインドはいつでも可能で、たとえ結果セットを途中まで 取得した後であっても可能です。新しくバインドした内容が効力を発揮するのは、 次に <code>mysqli_stmt_fetch()</code> がコールされたときからです。</p>
	 * @param mixed $var1 <p>バインドする変数。</p>
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.bind-result.php
	 * @see mysqli_stmt_get_result(), mysqli_stmt_bind_param(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_prepare(), mysqli_stmt_init(), mysqli_stmt_errno(), mysqli_stmt_error()
	 * @since PHP 5, PHP 7
	 */
	public function bind_result(&$var1, &$_ = NULL): bool {}

	/**
	 * プリペアドステートメントを閉じる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントを閉じます。また、<b>mysqli_stmt_close()</b> は <code>stmt</code> が指すステートメントハンドルを開放します。 現在のステートメントが実行中あるいはまだ結果を取得していない場合、 この関数はキャンセルされ、次のクエリが実行されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.close.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7
	 */
	public function close(): bool {}

	/**
	 * ステートメントの結果セットの任意の行に移動する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントの結果セット内で、 任意の位置に結果ポインタを移動します。</p><p><code>mysqli_stmt_store_result()</code> は、 <b>mysqli_stmt_data_seek()</b> より前にコールしなければなりません。</p>
	 * @param int $offset <p>ゼロから行の総数 - 1（0..<code>mysqli_stmt_num_rows()</code> - 1） までの間である必要があります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.data-seek.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7
	 */
	public function data_seek(int $offset): void {}

	/**
	 * プリペアドクエリを実行する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>事前に <code>mysqli_prepare()</code> 関数で用意されたクエリを実行します。 パラメータマーカが存在する場合、その内容は自動的に適切なデータに置き換えられます。</p><p>ステートメントが <i>UPDATE</i>、<i>DELETE</i> あるいは <i>INSERT</i> であった場合、 変更された行の総数は <code>mysqli_stmt_affected_rows()</code> 関数を使用することで取得可能です。同様に、クエリが結果セットを返す場合は <code>mysqli_stmt_fetch()</code> 関数を使用できます。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_execute()</b> を使用した際には、 他のクエリを実行する前に <code>mysqli_stmt_fetch()</code> 関数を使用する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.execute.php
	 * @see mysqli_prepare(), mysqli_stmt_bind_param(), mysqli_stmt_get_result()
	 * @since PHP 5, PHP 7
	 */
	public function execute(): bool {}

	/**
	 * プリペアドステートメントから結果を取得し、バインド変数に格納する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントから結果を読み込み、 <code>mysqli_stmt_bind_result()</code> でバインドした変数に格納します。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_fetch()</b> をコールする前に、すべての カラムがバインド済みである必要があることに注意しましょう。</p><p><b>注意</b>:</p><p>データの転送はバッファを用いずに行います。 <code>mysqli_stmt_store_result()</code> をコールするとバッファを使用し、パフォーマンスが減少します (しかしメモリのコストは下がります)。</p>
	 * @return bool <b>返り値</b>   値 説明     <b><code>TRUE</code></b> 成功。データが取得されました。   <b><code>FALSE</code></b> エラーが発生しました。   <b><code>NULL</code></b> 行/データがもうありません。あるいは、データの切り詰めが発生しました。
	 * @link http://php.net/manual/ja/mysqli-stmt.fetch.php
	 * @see mysqli_prepare(), mysqli_stmt_errno(), mysqli_stmt_error(), mysqli_stmt_bind_result()
	 * @since PHP 5, PHP 7
	 */
	public function fetch(): bool {}

	/**
	 * 指定したステートメントハンドルの結果を格納したメモリを開放する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントに関連する結果のメモリを開放します。このメモリは <code>mysqli_stmt_store_result()</code> によって割り当てられたものです。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.free-result.php
	 * @see mysqli_stmt_store_result()
	 * @since PHP 5, PHP 7
	 */
	public function free_result(): void {}

	/**
	 * プリペアード・ステートメントから結果セットを取得
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアード・ステートメントから結果セットを返すための呼び出し。</p>
	 * @return mysqli_result <p>SELECT クエリが成功した場合はその結果セットを返します。 その他の DML クエリを実行した場合や失敗した場合は <b><code>FALSE</code></b> を返します。 その他の DML クエリを実行したのかクエリの実行に失敗したのかを区別するには、 <code>mysqli_errno()</code> 関数を使います。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.get-result.php
	 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch(), mysqli_fetch_array(), mysqli_stmt_store_result(), mysqli_errno()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function get_result(): \mysqli_result {}

	/**
	 * SHOW WARNINGS の結果を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \mysqli_stmt $stmt
	 * @return object
	 * @link http://php.net/manual/ja/mysqli-stmt.get-warnings.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function get_warnings(\mysqli_stmt $stmt): object {}

	/**
	 * ステートメントの結果セットの行数を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットの行の数を返します。<b>mysqli_stmt_num_rows()</b> が使用できるかどうかは、<code>mysqli_stmt_store_result()</code> を用いて結果をステートメントハンドルにバッファリングしているかどうかに 依存します。</p><p><code>mysqli_stmt_store_result()</code> を使用した場合は、 すぐに <b>mysqli_stmt_num_rows()</b> をコールできます。</p>
	 * @return int <p>結果セットの行数を表す整数値を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.num-rows.php
	 * @see mysqli_stmt_affected_rows(), mysqli_prepare(), mysqli_stmt_store_result()
	 * @since PHP 5, PHP 7
	 */
	public function num_rows(): int {}

	/**
	 * SQL ステートメントを実行するために準備する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>null で終わる文字列で指定した SQL クエリを準備します。</p><p>パラメータマーカは、ステートメントの実行や行の取得の前に <code>mysqli_stmt_bind_param()</code> や <code>mysqli_stmt_bind_result()</code> を使用して アプリケーション変数にバインドする必要があります。</p><p><b>注意</b>:</p><p>サーバーの <i>max_allowed_packet</i> よりも長いステートメントを <b>mysqli_stmt_prepare()</b> に渡した場合、 返ってくるエラーコードは MySQL Native Driver (<i>mysqlnd</i>) を使っているか MySQL Client Library (<i>libmysqlclient</i>) を使っているかで異なります。 それぞれ、次のように振る舞います。</p><p>Linux 上の <i>mysqlnd</i> では、エラーコード 1153 を返します。 エラーメッセージは "got a packet bigger than <i>max_allowed_packet</i> bytes" です。</p><p>Windows 上の <i>mysqlnd</i> では、エラーコード 2006 を返します。 エラーメッセージは "server has gone away" です。</p><p>すべてのプラットフォームの <i>libmysqlclient</i> では、エラーコード 2006 を返します。エラーメッセージは "server has gone away" です。</p>
	 * @param string $query <p>クエリを表す文字列。単一の SQL 文で構成されている必要があります。</p> <p>ひとつまたは複数のパラメータを SQL 文に含めることができます。 そのためには、適切な位置にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p>  <p><b>注意</b>:</p> <p>ステートメントの最後にセミコロンや <i>\g</i> を追加してはいけません。</p>   <p><b>注意</b>:</p> <p>パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ 有効です。例えば INSERT 文の VALUES() リストの中 (行に登録するカラム値を指定する) や WHERE 句で列のデータと比較する値などが適切な位置の例です。</p> <p>しかし、識別子 (テーブルやカラムの名前) や SELECT 文で選択する 項目の名前に指定したり、(等号 <i>=</i> のような) 二項演算子の両側にパラメータを指定したりすることはできません。 後者の制限は、パラメータの型が判断できなくなることによるものです。 また、パラメータのマーカを <i>NULL</i> と比較して <i>&#63; IS NULL</i> のようにすることもできません。 一般に、パラメータが使用可能なのはデータ操作言語 (DML) ステートメントであり、データ定義言語 (DDL) ステートメントでは 使用できません。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.prepare.php
	 * @see mysqli_stmt_init(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
	 * @since PHP 5, PHP 7
	 */
	public function prepare(string $query) {}

	/**
	 * プリペアドステートメントをリセットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアントおよびサーバーで、実行後のプリペアドステートメントをリセットします。</p><p>サーバー上のステートメント、<code>mysqli_stmt_send_long_data()</code> で送信したデータ、バッファリングされていない結果、そして現在のエラーをリセットします。 バインド内容や保存された結果セットはクリアされません。保存された結果がクリアされるのは、 プリペアドステートメントを実行した (あるいは閉じた) ときです。</p><p>別のクエリを元にプリペアドステートメントを用意する場合は、 <code>mysqli_stmt_prepare()</code> 関数を使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.reset.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7
	 */
	public function reset(): bool {}

	/**
	 * プリペアドステートメントから結果セットのメタデータを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_prepare()</code> に渡したステートメントが 結果セットを返すものであった場合、<b>mysqli_stmt_result_metadata()</b> はオブジェクトを返します。このオブジェクトは、結果のフィールド数や 各フィールドの情報などのメタ情報を取得するために使用可能です。</p><p><b>注意</b>:</p><p>メタデータを取得するには、この結果セットポインタを、以下のいずれかの (フィールドベースの) 関数に渡します。</p><p><code>mysqli_num_fields()</code></p><p><code>mysqli_fetch_field()</code></p><p><code>mysqli_fetch_field_direct()</code></p><p><code>mysqli_fetch_fields()</code></p><p><code>mysqli_field_count()</code></p><p><code>mysqli_field_seek()</code></p><p><code>mysqli_field_tell()</code></p><p><code>mysqli_free_result()</code></p><p>結果セットは、使用終了後に開放すべきです。そのためには、結果セットを <code>mysqli_free_result()</code> に渡します。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_result_metadata()</b> が返す結果セットには メタデータのみが含まれています。実際の行データは含まれません。行データを 取得するには、ステートメントハンドルを <code>mysqli_stmt_fetch()</code> に渡してください。</p>
	 * @return mysqli_result <p>結果のオブジェクトを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.result-metadata.php
	 * @see mysqli_prepare(), mysqli_free_result()
	 * @since PHP 5, PHP 7
	 */
	public function result_metadata(): \mysqli_result {}

	/**
	 * データをブロックで送信する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>パラメータのデータを、サーバーに分割して送信します。例えば blob のサイズが <i>max_allowed_packet</i> を越えてしまう場合などに使用します。 この関数は、カラムに文字やバイナリのデータを送信するために複数回 コールすることが可能です。そのカラムの型は TEXT あるいは BLOB である 必要があります。</p>
	 * @param int $param_nr <p>データに関連付けるパラメータを示します。 パラメータの番号は 0 から始まります。</p>
	 * @param string $data <p>送信するデータを含む文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.send-long-data.php
	 * @see mysqli_prepare(), mysqli_stmt_bind_param()
	 * @since PHP 5, PHP 7
	 */
	public function send_long_data(int $param_nr, string $data): bool {}

	/**
	 * プリペアドステートメントから結果を転送する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>クエリが結果セットを返す場合（<i>SELECT, SHOW, DESCRIBE, EXPLAIN</i>）、常に <b>mysqli_stmt_store_result()</b> をコールする必要があります。また、この関数は結果セットをクライアントの バッファに格納するだけであり、データを取得するには続けて <code>mysqli_stmt_fetch()</code> をコールします。</p><p><b>注意</b>:</p><p>その他のクエリでは <b>mysqli_stmt_store_result()</b> をコールする必要はありません。しかし、もしコールしてしまったとしても パフォーマンスへの悪影響は一切ありません。クエリが結果セットを 返すかどうかは、<code>mysqli_stmt_result_metadata()</code> が NULL を返すかどうかで調べられます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/mysqli-stmt.store-result.php
	 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch()
	 * @since PHP 5, PHP 7
	 */
	public function store_result(): bool {}
}

/**
 * <p>MySQL の警告を表します。</p>
 * @link http://php.net/manual/ja/class.mysqli-warning.php
 * @since PHP 5, PHP 7
 */
class mysqli_warning {

	/**
	 * @var mixed <p>メッセージ文字列</p>
	 * @link http://php.net/manual/ja/class.mysqli-warning.php#mysqli-warning.props.message
	 */
	public $message;

	/**
	 * @var mixed <p>SQL state</p>
	 * @link http://php.net/manual/ja/class.mysqli-warning.php#mysqli-warning.props.sqlstate
	 */
	public $sqlstate;

	/**
	 * @var mixed <p>エラー番号</p>
	 * @link http://php.net/manual/ja/class.mysqli-warning.php#mysqli-warning.props.errno
	 */
	public $errno;

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/mysqli-warning.construct.php
	 * @since PHP 5, PHP 7
	 */
	protected function __construct() {}

	/**
	 * next
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/mysqli-warning.next.php
	 * @since PHP 5, PHP 7
	 */
	public function next(): void {}
}

/**
 * 直前の MySQL の操作で変更された行の数を得る
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <i>INSERT</i>、 <i>UPDATE</i>、<i>REPLACE</i> あるいは <i>DELETE</i> クエリにより変更された行の数を返します。</p><p>SELECT 文の場合は、<b>mysqli_affected_rows()</b> は <code>mysqli_num_rows()</code> と同じように動作します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>正の整数が返された場合、それは変更された行数かあるいは取得された行数を 示します。ゼロが返された場合、それは UPDATE 文でレコードが更新されなかったか <i>WHERE</i> 条件に当てはまる行がなかった、またはクエリが実行されなかったことを 示します。-1 は、クエリがエラーを返したことを示します。</p> <p><b>注意</b>:</p> <p>変更された行数が整数型の最大値 (<b><code>PHP_INT_MAX</code></b>) をこえた場合、 結果の行数は文字列として返されます。</p>
 * @link http://php.net/manual/ja/mysqli.affected-rows.php
 * @see mysqli_num_rows(), mysqli_info()
 * @since PHP 5, PHP 7
 */
function mysqli_affected_rows(\mysqli $link): int {}

/**
 * データベース更新の自動コミットをオンまたはオフにする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定されたデータベース接続リソースに対するクエリの 自動コミットモードをオンまたはオフにします。</p><p>現在の自動コミットモードを知るには、SQL コマンド <i>SELECT @@autocommit</i> を使用します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param bool $mode <p>自動コミットを有効にするかどうか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.autocommit.php
 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_rollback()
 * @since PHP 5, PHP 7
 */
function mysqli_autocommit(\mysqli $link, bool $mode): bool {}

/**
 * トランザクションを開始する
 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p>トランザクションを開始します。InnoDB エンジン (デフォルトで有効になっています) が必要です。 MySQL のトランザクションの詳細な動作は、 » http://dev.mysql.com/doc/mysql/en/commit.html を参照ください。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $flags <p>以下のフラグが使えます。</p> <ul> <li> <p><b><code>MYSQLI_TRANS_START_READ_ONLY</code></b>: "START TRANSACTION READ ONLY" でトランザクションを開始します。 MySQL 5.6 以上が必要です。</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_READ_WRITE</code></b>: "START TRANSACTION READ WRITE" でトランザクションを開始します。 MySQL 5.6 以上が必要です。</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</code></b>: "START TRANSACTION WITH CONSISTENT SNAPSHOT" でトランザクションを開始します。</p> </li> </ul>
 * @param string $name <p>トランザクションのセーブポイント名。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.begin-transaction.php
 * @see mysqli_autocommit(), mysqli_commit(), mysqli_rollback()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function mysqli_begin_transaction(\mysqli $link, int $flags = NULL, string $name = NULL): bool {}

/**
 * mysqli_stmt_bind_param() のエイリアス
 * <p>この関数は <code>mysqli_stmt_bind_param()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-bind-param.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_bind_param() {}

/**
 * mysqli_stmt_bind_result() のエイリアス
 * <p>この関数は <code>mysqli_stmt_bind_result()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-bind-result.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_bind_result() {}

/**
 * 指定されたデータベース接続のユーザー名を変更する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定されたデータベース接続のユーザー名を変更し、 現在のデータベースを設定します。</p><p>ユーザーを正しく変更するには、<code>username</code> と <code>password</code> 引数を正しく渡す必要があります。 またそのユーザーが対象のデータベースに対する適切なパーミッションを 持っている必要があります。どんな理由であれ、認証に失敗するとカレントユーザーの 認証が継続されます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $user <p>MySQL のユーザー名。</p>
 * @param string $password <p>MySQL のパスワード。</p>
 * @param string $database <p>変更するデータベース。</p> <p>引数には <b><code>NULL</code></b> 値を渡すこともできます。 その場合ユーザーの変更だけでデータベースの選択はされません。 そのようなケースでデータベースを選択したい場合には <code>mysqli_select_db()</code> 関数を使用してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.change-user.php
 * @see mysqli_connect(), mysqli_select_db()
 * @since PHP 5, PHP 7
 */
function mysqli_change_user(\mysqli $link, string $user, string $password, string $database): bool {}

/**
 * データベース接続のデフォルトの文字コードセットを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続の現在の文字コードセットを返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>現在の接続のデフォルト文字セットを返します。</p>
 * @link http://php.net/manual/ja/mysqli.character-set-name.php
 * @see mysqli_set_charset(), mysqli_client_encoding(), mysqli_real_escape_string()
 * @since PHP 5, PHP 7
 */
function mysqli_character_set_name(\mysqli $link): string {}

/**
 * mysqli_character_set_name() のエイリアス
 * <p>この関数は <code>mysqli_character_set_name()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-client-encoding.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_client_encoding() {}

/**
 * 事前にオープンしているデータベース接続を閉じる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>既に開いているデータベース接続を閉じます。</p><p>持続的でない MySQL 接続や結果セットは、PHP スクリプトの実行が終了する時点で自動的に破棄されます。 そのため、オープンした接続をクローズしたり結果セットを開放したりすることは必須ではありませんが、 そうしておくことを推奨します。 その時点ですぐに PHP や MySQL にリソースを返せ、パフォーマンスの向上につながるからです。 関連する除法は リソースの開放を参照ください。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.close.php
 * @see mysqli_init(), mysqli_real_connect(), mysqli_free_result()
 * @since PHP 5, PHP 7
 */
function mysqli_close(\mysqli $link): bool {}

/**
 * 現在のトランザクションをコミットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続の現在のトランザクションをコミットします。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $flags <p>定数 <b><code>MYSQLI_TRANS_COR_&#42;</code></b> のビットマスク。</p>
 * @param string $name <p>指定した場合は、<i>COMMIT/&#42;name&#42;/</i> を実行します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.commit.php
 * @see mysqli_autocommit(), mysqli_begin_transaction(), mysqli_rollback(), mysqli_savepoint()
 * @since PHP 5, PHP 7
 */
function mysqli_commit(\mysqli $link, int $flags = NULL, string $name = NULL): bool {}

/**
 * 新規に MySQL サーバーへの接続をオープンする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL サーバーへの接続をオープンします。</p>
 * @param string $host <p>ホスト名または IP アドレスです。この引数に <b><code>NULL</code></b> または "localhost" を渡すと ローカルホストとみなされます。もし可能な場合、TCP/IP プロトコルの代わりに パイプが使用されます。</p> <p>ホストの前に <i>p:</i> をつけると、持続的な接続を開きます。 接続プールから開いた接続上で <code>mysqli_change_user()</code> が自動的にコールされます。</p>
 * @param string $username <p>MySQL のユーザー名。</p>
 * @param string $passwd <p>省略したり <b><code>NULL</code></b> を渡したりした場合、MySQL サーバーは パスワードを持たないユーザーレコードについてのみ認証を試みます。 これによってひとつのユーザー名において(パスワードが指定されたか 否かによって)違うパーミッションを与えることができます。</p>
 * @param string $dbname <p>指定した場合は、 クエリが行われるデフォルトのデータベースとなります。</p>
 * @param int $port <p>MySQL サーバーに接続する際のポート番号を指定します。</p>
 * @param string $socket <p>使用するソケットあるいは名前つきパイプを指定します。</p>  <p><b>注意</b>:</p> <p><code>socket</code> 引数を指定しても、MySQL サーバーへの 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの 接続方法については <code>host</code> 引数で定義されます。</p>
 * @return mysqli <p>MySQL サーバーへの接続を表すオブジェクトを返します。</p>
 * @link http://php.net/manual/ja/mysqli.construct.php
 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
 * @since PHP 5, PHP 7
 */
function mysqli_connect(string $host = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $passwd = 'ini_get("mysqli.default_pw")', string $dbname = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")'): \mysqli {}

/**
 * 直近の接続コールに関するエラーコードを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_connect()</code> コールのエラー番号を返します。</p><p><b>注意</b>:</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
 * @return int <p>直近の <code>mysqli_connect()</code> コールが失敗した場合、 エラーコードを返します。ゼロは、何もエラーが発生しなかったことを示します。</p>
 * @link http://php.net/manual/ja/mysqli.connect-errno.php
 * @see mysqli_connect(), mysqli_connect_error(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_connect_errno(): int {}

/**
 * 直近の接続エラーの内容を文字列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_connect()</code> が指すデータベースの 直近のエラーについての文字列表現を返します。</p>
 * @return string <p>エラーの内容を表す文字列を返します。エラーが発生しなかった場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.connect-error.php
 * @see mysqli_connect(), mysqli_connect_errno(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_connect_error(): string {}

/**
 * 結果の任意の行にポインタを移動する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_data_seek()</b> 関数は、 結果セットの任意の行 <code>offset</code> にポインタを移動します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param int $offset <p>フィールドオフセット。ゼロから全行数 - 1 までの間 （0..<code>mysqli_num_rows()</code> - 1）である必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.data-seek.php
 * @see mysqli_store_result(), mysqli_fetch_row(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_num_rows()
 * @since PHP 5, PHP 7
 */
function mysqli_data_seek(\mysqli_result $result, int $offset): bool {}

/**
 * デバッグ操作を行う
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Fred Fish debugging library を使用してデバッグを行います。</p>
 * @param string $message <p>実行するデバッグ操作を表す文字列。</p>
 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
 * @link http://php.net/manual/ja/mysqli.debug.php
 * @see mysqli_dump_debug_info(), mysqli_report()
 * @since PHP 5, PHP 7
 */
function mysqli_debug(string $message): bool {}

/**
 * マスタからの読み込みを無効にする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-disable-reads-from-master.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_disable_reads_from_master(\mysqli $link): bool {}

/**
 * RPL のパースを無効にする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-disable-rpl-parse.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_disable_rpl_parse(\mysqli $link): bool {}

/**
 * デバッグ情報をログに出力する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は SUPER 権限を持ったユーザーによって実行されるされることを 想定しており、<code>link</code> で指定した接続に関連する MySQL サーバーのデバッグ情報をログに出力します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.dump-debug-info.php
 * @see mysqli_debug()
 * @since PHP 5, PHP 7
 */
function mysqli_dump_debug_info(\mysqli $link): bool {}

/**
 * 組み込みサーバーを停止する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return void
 * @link http://php.net/manual/ja/mysqli-driver.embedded-server-end.php
 * @since PHP 5, PHP 7
 */
function mysqli_embedded_server_end(): void {}

/**
 * 組み込みサーバーを初期化して開始する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $start
 * @param array $arguments
 * @param array $groups
 * @return bool
 * @link http://php.net/manual/ja/mysqli-driver.embedded-server-start.php
 * @since PHP 5, PHP 7
 */
function mysqli_embedded_server_start(int $start, array $arguments, array $groups): bool {}

/**
 * マスタからの読み込みを有効にする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-enable-reads-from-master.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_enable_reads_from_master(\mysqli $link): bool {}

/**
 * RPL のパースを有効にする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-enable-rpl-parse.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_enable_rpl_parse(\mysqli $link): bool {}

/**
 * 直近の関数コールによるエラーコードを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の MySQLi 関数のコールが成功あるいは失敗した際のエラーコードを返します。</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>直近のコールが失敗した場合、エラーコードを返します。 ゼロは、何もエラーが発生しなかったことを示します。</p>
 * @link http://php.net/manual/ja/mysqli.errno.php
 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_errno(\mysqli $link): int {}

/**
 * 直近のエラーの内容を文字列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の MySQLi 関数のコールが成功あるいは失敗した際のエラーメッセージを返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>エラーの内容を表す文字列を返します。エラーが発生しなかった場合は空文字列を返します。</p>
 * @link http://php.net/manual/ja/mysqli.error.php
 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_errno(), mysqli_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_error(\mysqli $link): string {}

/**
 * 直近で実行したコマンドからのエラーの一覧を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>エラーの配列を返します。この配列の内容は、直近で実行した MySQLi 関数コールで発生したエラーです。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return array <p>エラーの一覧を返します。個々のエラーは連想配列形式で、 errno、error および sqlstate のキーを含みます。</p>
 * @link http://php.net/manual/ja/mysqli.error-list.php
 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function mysqli_error_list(\mysqli $link): array {}

/**
 * mysqli_real_escape_string() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>mysqli_real_escape_string()</code>.</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $escapestr <p>エスケープする文字列。</p> <p>エンコードされる文字は <i>NUL (ASCII 0), \n, \r, \, ', ", および Control-Z</i> です。</p>
 * @return string
 * @link http://php.net/manual/ja/function.mysqli-escape-string.php
 * @since PHP 5, PHP 7
 */
function mysqli_escape_string(\mysqli $link, string $escapestr): string {}

/**
 * mysqli_stmt_execute() のエイリアス
 * <p>この関数は <code>mysqli_stmt_execute()</code> のエイリアスです。</p>
 * @link http://php.net/manual/ja/function.mysqli-execute.php
 * @since PHP 5, PHP 7
 */
function mysqli_execute() {}

/**
 * mysqli_stmt_fetch() のエイリアス
 * <p>この関数は <code>mysqli_stmt_fetch()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-fetch.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_fetch() {}

/**
 * 結果のすべての行を連想配列・数値添字配列あるいはその両方の形式で取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_all()</b> は、 すべての結果の行を取得してその結果セットを連想配列・数値添字配列あるいはその両方で返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param int $resulttype <p>このオプションは、 結果の行データから返す配列の型を指定します。ここで指定可能な値は 定数 <b><code>MYSQLI_ASSOC</code></b>、 <b><code>MYSQLI_NUM</code></b> あるいは <b><code>MYSQLI_BOTH</code></b>. のいずれかです。</p>
 * @return mixed <p>結果の行を含む連想配列あるいは数値添字配列の配列を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.fetch-all.php
 * @see mysqli_fetch_array(), mysqli_query()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_fetch_all(\mysqli_result $result, int $resulttype = MYSQLI_NUM) {}

/**
 * 結果の行を連想配列・数値添字配列あるいはその両方の形式で取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>取得した行に対応する配列を返します。 <code>result</code> パラメータがあらわす結果セットに対して行がなければ、<b><code>NULL</code></b> を返します。</p><p><b>mysqli_fetch_array()</b> は <code>mysqli_fetch_row()</code> 関数の拡張版です。データを数値添字の 配列に格納することに加えて、<b>mysqli_fetch_array()</b> 関数は、フィールド名をキーとする連想配列にもデータを格納します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p>もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた カラムが優先され、以前のデータを上書きします。同名の複数のカラムに アクセスする場合、数値添字版の行データを使用しなければなりません。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param int $resulttype <p>このオプションは、 結果の行データから返す配列の型を指定します。ここで指定可能な値は 定数 <b><code>MYSQLI_ASSOC</code></b>、 <b><code>MYSQLI_NUM</code></b> あるいは <b><code>MYSQLI_BOTH</code></b>. のいずれかです。</p> <p><b><code>MYSQLI_ASSOC</code></b> 定数を指定すると、この関数は <code>mysqli_fetch_assoc()</code> と同じ結果を返します。一方 <b><code>MYSQLI_NUM</code></b> を指定すると、<code>mysqli_fetch_row()</code> 関数と同じ結果となります。最後の <b><code>MYSQLI_BOTH</code></b> を指定すると、 ひとつの配列にこれら両方の属性を含めます。</p>
 * @return mixed <p>取得した行に対応する文字列の配列を返します。結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.fetch-array.php
 * @see mysqli_fetch_assoc(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_array(\mysqli_result $result, int $resulttype = MYSQLI_BOTH) {}

/**
 * 結果の行を連想配列で取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>取得した行に対応する連想配列を返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return array <p>取得した行に対応する文字列の連想配列を返します。 連想配列の各キーが、結果セットのカラムを表します。 結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p><p>もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた カラムが優先され、以前のデータを上書きします。同名の複数のカラムに アクセスする場合、<code>mysqli_fetch_row()</code> を用いて 数値添字配列を使用するか、あるいはカラム名にエイリアスを指定する 必要があります。</p>
 * @link http://php.net/manual/ja/mysqli-result.fetch-assoc.php
 * @see mysqli_fetch_array(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_assoc(\mysqli_result $result): array {}

/**
 * 結果セットの次のフィールドを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットから ひとつのカラムの情報をオブジェクトとして返します。この関数を 繰り返しコールすることで、結果セットのすべてのカラムについての情報が 取得可能です。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return object <p>フィールド定義情報を含むオブジェクトを返します。もし フィールドの情報が取得できない場合は、<b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   def デフォルト値のために予約済。現在は常に ""。   db データベース (PHP 5.3.6 以降)。   catalog カタログ名。常に "def" (PHP 5.3.6 以降)。   max_length 結果セットにおけるフィールドの最大幅。   length テーブルの定義で指定されているフィールド幅。   charsetnr フィールドの文字セット番号。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（integer 型のフィールド）。
 * @link http://php.net/manual/ja/mysqli-result.fetch-field.php
 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_fields(), mysqli_field_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_field(\mysqli_result $result): object {}

/**
 * 単一のフィールドのメタデータを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した結果セットから、フィールド定義情報を含むオブジェクトを返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param int $fieldnr <p>フィールド番号。この値は <i>0</i> から <i>フィールド数 - 1</i> までの範囲でなければなりません。</p>
 * @return object <p>フィールド定義情報を含むオブジェクトを返します。もし、指定した <i>fieldnr</i> のフィールドの情報が取得できない場合は <b><code>FALSE</code></b> を返します。</p> <b>オブジェクトの属性</b>   属性 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   def フィールドのデフォルト値。文字列形式。   max_length 結果セットにおけるフィールドの最大幅。   length テーブルの定義で指定されているフィールド幅。   charsetnr フィールドの文字セット番号。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（数値型のフィールド）。
 * @link http://php.net/manual/ja/mysqli-result.fetch-field-direct.php
 * @see mysqli_num_fields(), mysqli_fetch_field(), mysqli_fetch_fields()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_field_direct(\mysqli_result $result, int $fieldnr): object {}

/**
 * 結果セットのフィールド情報をオブジェクトの配列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は <code>mysqli_fetch_field()</code> 関数と同じ目的で 使用しますが、ひとつ違いがあります。一度にひとつずつフィールド情報を 取得するのではなく、複数のカラムの情報をオブジェクトの配列で返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return array <p>フィールド定義情報を含むオブジェクトの配列を返します。もし フィールドの情報が取得できない場合は、<b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前。   orgname もしエイリアスが指定されている場合の、本来の名前。   table フィールドが属するテーブルの名前。   orgtable もしエイリアスが指定されている場合の、本来のテーブル名。   max_length 結果セットにおけるフィールドの最大幅。   length  テーブルの定義で指定されているフィールド幅 (バイト単位)。 この値 (バイト数) は、利用している文字セットによってはテーブル定義の値 (文字数) と異なるかもしれないことに注意しましょう。 たとえば utf8 の場合は一文字あたり3バイトなので、varchar(10) の長さは30になります。 一方、同じ定義でも latin1 の場合の長さは10になります。    charsetnr フィールドの文字セット番号 (id)。   flags フィールドのビットフラグを整数型で表す。   type フィールドのデータ型。   decimals フィールドの桁数（integer 型のフィールド）。
 * @link http://php.net/manual/ja/mysqli-result.fetch-fields.php
 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_field()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_fields(\mysqli_result $result): array {}

/**
 * 結果セットにおける現在の行のカラムの長さを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_lengths()</b> 関数は、<code>result</code> が指す結果セットの現在の行について、すべてのカラムの長さを含む 配列を返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return array <p>各カラムのサイズ（終端の null 文字は含みません）を表す整数の配列を 返します。エラー時には <b><code>FALSE</code></b> を返します。</p><p><b>mysqli_fetch_lengths()</b> は、結果セットの現在の行に ついてのみ有効です。mysqli_fetch_row/array/object をコールする前、あるいは 結果のすべての行を取得した後にこの関数をコールすると、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.lengths.php
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_lengths(\mysqli_result $result): array {}

/**
 * 結果セットの現在の行をオブジェクトとして返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_fetch_object()</b> は、結果セットの現在の行を オブジェクトで返します。このオブジェクトは、結果セットのフィールド名を 属性として持ちます。</p><p><b>mysqli_fetch_object()</b> がオブジェクトのプロパティを設定するのは、 オブジェクトのコンストラクタをコールする前であることに注意しましょう。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param string $class_name <p>インスタンス化してプロパティを設定後に返すクラスの名前。 省略した場合は <b>stdClass</b> オブジェクトを返します。</p>
 * @param array $params <p>オプションのパラメータの配列で、 <code>class_name</code> オブジェクトのコンストラクタに渡します。</p>
 * @return object <p>取得した行に対応する文字列プロパティを有するオブジェクトを返します。 もし結果セットにもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
 * @link http://php.net/manual/ja/mysqli-result.fetch-object.php
 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_row(), mysqli_query(), mysqli_data_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_object(\mysqli_result $result, string $class_name = "stdClass", array $params = NULL): object {}

/**
 * 結果の行を数値添字配列で取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットからデータを 1 行取得し、それを数値添字の配列で 返します。各カラムは 0（ゼロ）から始まる添字に格納されます。 <b>mysqli_fetch_row()</b> 関数を続けてコールすると、 結果セットの次の行を返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return mixed <p><b>mysqli_fetch_row()</b> は取得した行に対応する文字列の配列を 返します。もしもう行がない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
 * @link http://php.net/manual/ja/mysqli-result.fetch-row.php
 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_fetch_row(\mysqli_result $result) {}

/**
 * 直近のクエリのカラムの数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> が指す接続における直近のクエリの カラムの数を返します。この関数は、クエリが空でない結果セットを 生成すべきなのかそうではないのかを判断するために <code>mysqli_store_result()</code> 関数を使用する際に有用です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>結果セットのフィールド数を整数で返します。</p>
 * @link http://php.net/manual/ja/mysqli.field-count.php
 * @since PHP 5, PHP 7
 */
function mysqli_field_count(\mysqli $link): int {}

/**
 * 結果ポインタを、指定したフィールドオフセットに設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フィールドカーソルを指定したオフセットに設定します。 <code>mysqli_fetch_field()</code> を次にコールした際に、 設定したオフセットに関連するカラムのフィールド定義を取得します。</p><p><b>注意</b>:</p><p>行のはじめに移動するには、オフセットとしてゼロを指定します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @param int $fieldnr <p>フィールド番号。これは <i>0</i> から <i>フィールド数 - 1</i> までの範囲でなければなりません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.field-seek.php
 * @see mysqli_fetch_field()
 * @since PHP 5, PHP 7
 */
function mysqli_field_seek(\mysqli_result $result, int $fieldnr): bool {}

/**
 * 結果ポインタにおける現在のフィールドオフセットを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_fetch_field()</code> のコールで使用した フィールドカーソルの位置を返します。この値は <code>mysqli_field_seek()</code> の引数として使用可能です。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return int <p>フィールドカーソルの現在のオフセットを返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.current-field.php
 * @see mysqli_fetch_field(), mysqli_field_seek()
 * @since PHP 5, PHP 7
 */
function mysqli_field_tell(\mysqli_result $result): int {}

/**
 * 結果に関連付けられたメモリを開放する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果に関連付けられたメモリを開放します。</p><p><b>注意</b>:</p><p>結果オブジェクトが必要なくなった場合は、常に <b>mysqli_free_result()</b> でメモリを開放すべきです。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/mysqli-result.free.php
 * @see mysqli_query(), mysqli_stmt_store_result(), mysqli_store_result(), mysqli_use_result()
 * @since PHP 5, PHP 7
 */
function mysqli_free_result(\mysqli_result $result): void {}

/**
 * クライアントの Zval キャッシュの統計情報を返す
 * <p>空の配列を返します。 mysqlnd でのみ使用可能です。</p>
 * @return array <p>成功した場合に空の配列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysqli-get-cache-stats.php
 * @since PHP 5 >= 5.3.0 and < 5.4.0
 */
function mysqli_get_cache_stats(): array {}

/**
 * 文字セットオブジェクトを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字セットオブジェクトを返します。 これは、現在アクティブな文字セットについてのプロパティを提供します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return object <p>この関数は、以下のプロパティを持つ文字セットオブジェクトを返します。</p>  <code>charset</code>   <p>文字セット名</p>   <code>collation</code>   <p>照合規則名</p>   <code>dir</code>   <p>文字セットの設定を読み込むディレクトリ。組み込みの文字セットについては ""</p>   <code>min_length</code>   <p>最小の文字の長さ (バイト数)</p>   <code>max_length</code>   <p>最大の文字の長さ (バイト数)</p>   <code>number</code>   <p>内部文字セット番号</p>   <code>state</code>   <p>文字セットの状態</p>
 * @link http://php.net/manual/ja/mysqli.get-charset.php
 * @see mysqli_character_set_name(), mysqli_set_charset()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function mysqli_get_charset(\mysqli $link): object {}

/**
 * MySQL クライアント情報を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
 * @param \mysqli $link
 * @return string <p>MySQL クライアントライブラリのバージョンを文字列で返します。</p>
 * @link http://php.net/manual/ja/mysqli.get-client-info.php
 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
 * @since PHP 5, PHP 7
 */
function mysqli_get_client_info(\mysqli $link): string {}

/**
 * Returns client per-process statistics
 * <p>Returns client per-process statistics. mysqlnd でのみ使用可能です。</p>
 * @return array <p>Returns an array with client stats if success, <b><code>FALSE</code></b> otherwise.</p>
 * @link http://php.net/manual/ja/function.mysqli-get-client-stats.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_get_client_stats(): array {}

/**
 * MySQL クライアントのバージョンを整数値で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアントのバージョン番号を整数値で返します。</p>
 * @param \mysqli $link
 * @return int <p>MySQL クライアントライブラリのバージョンを、以下の書式で返します。 <i>main_version&#42;10000 + minor_version &#42;100 + sub_version</i> 例えば、4.1.0 は 40100 となります。</p><p>これは、ある機能が使用可能かどうかを知るため、クライアントライブラリの バージョンを手っ取り早く調べたい場合に有用です。</p>
 * @link http://php.net/manual/ja/mysqli.get-client-version.php
 * @see mysqli_get_client_info(), mysqli_get_server_info(), mysqli_get_server_version()
 * @since PHP 5, PHP 7
 */
function mysqli_get_client_version(\mysqli $link): int {}

/**
 * クライアント接続に関する統計情報を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアント接続に関する統計情報を返します。 mysqlnd でのみ使用可能です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return array <p>成功した場合に接続の統計情報を含む配列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.get-connection-stats.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_get_connection_stats(\mysqli $link): array {}

/**
 * 使用している接続の型を文字列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> が使用している接続の情報を文字列で返します（サーバーのホスト名を 含みます）。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>サーバーのホスト名と接続の型を文字列で返します。</p>
 * @link http://php.net/manual/ja/mysqli.get-host-info.php
 * @see mysqli_get_proto_info()
 * @since PHP 5, PHP 7
 */
function mysqli_get_host_info(\mysqli $link): string {}

/**
 * Return information about open and cached links
 * <p><b>mysqli_get_links_stats()</b> returns information about open and cached MySQL links.</p>
 * @return array <p><b>mysqli_get_links_stats()</b> returns an associative array with three elements, keyed as follows:</p>  <code>total</code>   <p>An <code>integer</code> indicating the total number of open links in any state.</p>   <code>active_plinks</code>   <p>An <code>integer</code> representing the number of active persistent connections.</p>   <code>cached_plinks</code>   <p>An <code>integer</code> representing the number of inactive persistent connections.</p>
 * @link http://php.net/manual/ja/function.mysqli-get-links-stats.php
 * @since PHP 5 >= 5.6.0, PHP 7
 */
function mysqli_get_links_stats(): array {}

/**
 * mysqli_stmt_result_metadata() のエイリアス
 * <p>この関数は <code>mysqli_stmt_result_metadata()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-get-metadata.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_get_metadata() {}

/**
 * 使用している MySQL プロトコルのバージョンを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>link</code> で表される接続で使用している MySQL プロトコルのバージョンを整数値で返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>プロトコルバージョンを整数値で返します。</p>
 * @link http://php.net/manual/ja/mysqli.get-proto-info.php
 * @see mysqli_get_host_info()
 * @since PHP 5, PHP 7
 */
function mysqli_get_proto_info(\mysqli $link): int {}

/**
 * MySQL サーバーのバージョンを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQLi 拡張モジュールが接続している MySQL サーバーのバージョンを文字列で返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>サーバーのバージョンを文字列で返します。</p>
 * @link http://php.net/manual/ja/mysqli.get-server-info.php
 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
 * @since PHP 5, PHP 7
 */
function mysqli_get_server_info(\mysqli $link): string {}

/**
 * MySQL サーバーのバージョンを整数値で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_get_server_version()</b> 関数は 接続している（<code>link</code> で表される）サーバーの バージョンを整数値で返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>サーバーのバージョンを整数値で返します。</p><p>バージョン番号の書式は以下のようになります。 <i>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</i> (つまり、バージョン 4.1.0 は 40100 となります)</p>
 * @link http://php.net/manual/ja/mysqli.get-server-version.php
 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_info()
 * @since PHP 5, PHP 7
 */
function mysqli_get_server_version(\mysqli $link): int {}

/**
 * SHOW WARNINGS の結果を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli $link
 * @return mysqli_warning
 * @link http://php.net/manual/ja/mysqli.get-warnings.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function mysqli_get_warnings(\mysqli $link): \mysqli_warning {}

/**
 * 直近に実行されたクエリの情報を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_info()</b> 関数は、直近に実行されたクエリに ついての情報を文字列で返します。文字列の詳細は以下のとおりです。</p><p></p><p><b>注意</b>:</p><p>これらのどれにも当てはまらない形式のクエリはサポートされません。 そのような場合、<b>mysqli_info()</b> は空文字列を返します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>直近に実行されたクエリについての追加情報を文字列で返します。</p>
 * @link http://php.net/manual/ja/mysqli.info.php
 * @see mysqli_affected_rows(), mysqli_warning_count(), mysqli_num_rows()
 * @since PHP 5, PHP 7
 */
function mysqli_info(\mysqli $link): string {}

/**
 * MySQLi を初期化し、mysqli_real_connect() で使用するリソースを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_options()</code> および <code>mysqli_real_connect()</code> で使用可能な MYSQL オブジェクトを割り当て、初期化します。</p><p><b>注意</b>:</p><p><code>mysqli_real_connect()</code> がコールされるまで、これ以降の あらゆる mysqli 関数コールは失敗します（<code>mysqli_options()</code> は除きます）。</p>
 * @return mysqli <p>オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/mysqli.init.php
 * @see mysqli_options(), mysqli_close(), mysqli_real_connect(), mysqli_connect()
 * @since PHP 5, PHP 7
 */
function mysqli_init(): \mysqli {}

/**
 * 直近のクエリで使用した自動生成の ID を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_insert_id()</b> 関数は、AUTO_INCREMENT 属性を 持つカラムがあるテーブル上でのクエリ (通常は INSERT) により生成された ID を返します。 この接続を介して INSERT 文または UPDATE 文が送信されなかった場合、あるいは 変更されたテーブルに AUTO_INCREMENT 属性を持つカラムがなかった場合は この関数はゼロを返します。</p><p><b>注意</b>:</p><p>LAST_INSERT_ID() 関数を使用して INSERT あるいは UPDATE ステートメントを 実行すると、<b>mysqli_insert_id()</b> 関数の返す値も 変更されます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return mixed <p>直前のクエリで更新された <i>AUTO_INCREMENT</i> フィールドの値を返します。接続での直前のクエリがない場合や クエリが <i>AUTO_INCREMENT</i> の値を更新しなかった場合は ゼロを返します。</p> <p><b>注意</b>:</p> <p>もし数値が int の最大値をこえた場合、<b>mysqli_insert_id()</b> は文字列で結果を返します。</p>
 * @link http://php.net/manual/ja/mysqli.insert-id.php
 * @since PHP 5, PHP 7
 */
function mysqli_insert_id(\mysqli $link) {}

/**
 * サーバーに MySQL スレッドの停止を問い合わせる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、<code>processid</code> で指定した MySQL スレッドの停止をサーバーに問い合わせます。この値は、 <code>mysqli_thread_id()</code> 関数で取得したものである 必要があります。</p><p>実行中のクエリを停止するには、SQL コマンド <i>KILL QUERY processid</i> を使用する必要があります。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $processid
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.kill.php
 * @see mysqli_thread_id()
 * @since PHP 5, PHP 7
 */
function mysqli_kill(\mysqli $link, int $processid): bool {}

/**
 * マスタ/スレーブ設定で、マスタ側のクエリを実行する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @param string $query
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-master-query.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_master_query(\mysqli $link, string $query): bool {}

/**
 * マルチクエリからの結果がまだ残っているかどうかを調べる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直前の <code>mysqli_multi_query()</code> のコール結果に ひとつ以上の結果セットが残っているかどうかを調べます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return bool <p>直近の <code>mysqli_multi_query()</code> の呼び出しで 1 件以上の結果セットが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.more-results.php
 * @see mysqli_multi_query(), mysqli_next_result(), mysqli_store_result(), mysqli_use_result()
 * @since PHP 5, PHP 7
 */
function mysqli_more_results(\mysqli $link): bool {}

/**
 * データベース上でクエリを実行する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>セミコロンで連結されたひとつまたは複数のクエリを実行します。</p><p>最初のクエリの結果セットを取得するには、 <code>mysqli_use_result()</code> あるいは <code>mysqli_store_result()</code> を使用します。その他のクエリの結果は、 <code>mysqli_more_results()</code> および <code>mysqli_next_result()</code> を使用して取得します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $query <p>クエリを表す文字列。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
 * @return bool <p>最初のステートメントが失敗した場合にのみ <b><code>FALSE</code></b> を返します。 その他のステートメントのエラーを取得するには、まず <code>mysqli_next_result()</code> をコールする必要があります。</p>
 * @link http://php.net/manual/ja/mysqli.multi-query.php
 * @see mysqli_query(), mysqli_use_result(), mysqli_store_result(), mysqli_next_result(), mysqli_more_results()
 * @since PHP 5, PHP 7
 */
function mysqli_multi_query(\mysqli $link, string $query): bool {}

/**
 * multi_query の、次の結果を準備する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の <code>mysqli_multi_query()</code> コールから次の結果セットを用意します。 これは <code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> で取得することが可能です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.next-result.php
 * @see mysqli_multi_query(), mysqli_more_results(), mysqli_store_result(), mysqli_use_result()
 * @since PHP 5, PHP 7
 */
function mysqli_next_result(\mysqli $link): bool {}

/**
 * 結果のフィールド数を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した結果セットからフィールドの数を返します。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return int <p>結果セットのフィールド数を返します。</p>
 * @link http://php.net/manual/ja/mysqli-result.field-count.php
 * @see mysqli_fetch_field()
 * @since PHP 5, PHP 7
 */
function mysqli_num_fields(\mysqli_result $result): int {}

/**
 * 結果の行数を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットの行数を返します。</p><p><b>mysqli_num_rows()</b> が使用可能かどうかは、 結果セットをバッファに格納しているかどうかに依存します。結果セットを バッファに格納していない場合、すべての行を取得し終えるまで <b>mysqli_num_rows()</b> は正確な行数を返しません。</p>
 * @param \mysqli_result $result <p>手続き型のみ: <code>mysqli_query()</code>、<code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> が返す結果セット ID。</p>
 * @return int <p>結果セットの行数を返します。</p> <p><b>注意</b>:</p> <p>行数が <b><code>PHP_INT_MAX</code></b> をこえる場合、行数は文字列で返されます。</p>
 * @link http://php.net/manual/ja/mysqli-result.num-rows.php
 * @see mysqli_affected_rows(), mysqli_store_result(), mysqli_use_result(), mysqli_query()
 * @since PHP 5, PHP 7
 */
function mysqli_num_rows(\mysqli_result $result): int {}

/**
 * オプションを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>接続に関する追加オプションを設定し、 接続の振る舞いに影響を与えるために使用します。</p><p>この関数は、いくつかのオプションを設定して複数回コールされることがあります。</p><p><b>mysqli_options()</b> は、 <code>mysqli_init()</code> がコールされた後、 <code>mysqli_real_connect()</code> の前にコールしなければなりません。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $option <p>指定するオプション。以下の値のいずれかです。</p> <b>使用可能なオプション</b>   名前 説明     <b><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></b> 接続のタイムアウト秒数 (PHP 5.3.1 以降、Windows 上での TCP/IP 接続をサポートします)。   <b><code>MYSQLI_OPT_LOCAL_INFILE</code></b>  <i>LOAD LOCAL INFILE</i> の使用可/不可。   <b><code>MYSQLI_INIT_COMMAND</code></b> MySQL サーバーへの接続後に実行するコマンド。   <b><code>MYSQLI_READ_DEFAULT_FILE</code></b>  my.cnf の代わりに、指定した名前のファイルから 設定を読み込みます。    <b><code>MYSQLI_READ_DEFAULT_GROUP</code></b>  my.cnf の指定した名前のグループ、あるいは <b><code>MYSQL_READ_DEFAULT_FILE</code></b> で指定したファイルから 設定を読み込みます。    <b><code>MYSQLI_SERVER_PUBLIC_KEY</code></b>  RSA 公開鍵ファイル。SHA-256 ベースの認証で使います。    <b><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></b>  内部のコマンド／ネットワークバッファのサイズ。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></b>  MySQL コマンドパケットのボディを読み込むときの、読み込みチャンクの最大バイト数。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></b>  integer 型と float 型のカラムを PHP の数値に変換します。 mysqlnd でのみ有効です。    <b><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></b>
 * @param mixed $value <p>オプションに設定する値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.options.php
 * @see mysqli_init(), mysqli_real_connect()
 * @since PHP 5, PHP 7
 */
function mysqli_options(\mysqli $link, int $option, $value): bool {}

/**
 * mysqli_stmt_param_count() のエイリアス
 * <p>この関数は <code>mysqli_stmt_param_count()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-param-count.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_param_count() {}

/**
 * サーバーとの接続をチェックし、もし切断されている場合は再接続を試みる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>サーバーとの接続が動作中かどうかを確かめます。もし切断されており、 グローバルオプション mysqli.reconnect が有効な場合は再接続を試みます。</p><p><b>注意</b>:  mysqlnd ドライバは、php.ini 設定項目 mysqli.reconnect を無視します。 自動再接続は行われません。 </p><p>この関数は、長期間アイドル状態にあるクライアントが、 サーバーの状態を確認して必要なら再接続するために使用します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.ping.php
 * @since PHP 5, PHP 7
 */
function mysqli_ping(\mysqli $link): bool {}

/**
 * 接続を問い合わせる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>接続を問い合わせます。 mysqlnd でのみ使用可能です。 このメソッドは static メソッドとして使えます。</p>
 * @param array $read <p>読み込める結果が残っている接続のリスト。</p>
 * @param array $error <p>クエリが失敗した、あるいは接続が切断されたなどのエラーが発生した接続のリスト。</p>
 * @param array $reject <p>関数から結果を取得できるような非同期クエリが実行されていないという理由で、 拒否された接続のリスト。</p>
 * @param int $sec <p>待ち続ける秒数の最大。非負の数でなければなりません。</p>
 * @param int $usec <p>待ち続けるマイクロ秒数の最大。非負の数でなければなりません。</p>
 * @return int <p>成功した場合に使用できる接続の数、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.poll.php
 * @see mysqli_query(), mysqli_reap_async_query()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_poll(array &$read, array &$error, array &$reject, int $sec, int $usec = NULL): int {}

/**
 * 実行するための SQL ステートメントを準備する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>SQL クエリを準備し、後でそのステートメントを操作するために使用する ステートメントハンドルを返します。 クエリは、単一の SQL 文である必要があります。</p><p>パラメータマーカは、ステートメントの実行や行の取得の前に <code>mysqli_stmt_bind_param()</code> や <code>mysqli_stmt_bind_result()</code> を使用して アプリケーション変数にバインドする必要があります。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $query <p>クエリを表す文字列。</p>  <p><b>注意</b>:</p> <p>ステートメントの最後にセミコロンや <i>\g</i> を追加してはいけません。</p>  <p><code>query</code> にはひとつまたは複数のパラメータを 含めることが可能です。そのためには、適切な位置にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p>  <p><b>注意</b>:</p> <p>パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ有効です。 例えば <i>INSERT</i> 文の <i>VALUES()</i> リストの中 (行に登録するカラム値を指定する) や <i>WHERE</i> 句で列のデータと比較する値などが 適切な位置の例です。</p> <p>しかし、識別子 (テーブルやカラムの名前) や <i>SELECT</i> 文で選択する項目の名前に指定したり、 (等号 <i>=</i> のような) 二項演算子の両側にパラメータを指定したりすることはできません。 後者の制限は、パラメータの型が判断できなくなることによるものです。 また、パラメータのマーカを <i>NULL</i> と比較して <i>&#63; IS NULL</i> のようにすることもできません。 一般に、パラメータが使用可能なのはデータ操作言語 (DML) ステートメントであり、データ定義言語 (DDL) ステートメントでは使用できません。</p>
 * @return mysqli_stmt <p><b>mysqli_prepare()</b> はステートメントオブジェクトを返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.prepare.php
 * @see mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_close()
 * @since PHP 5, PHP 7
 */
function mysqli_prepare(\mysqli $link, string $query): \mysqli_stmt {}

/**
 * データベース上でクエリを実行する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースに対してクエリ <code>query</code> を実行します。</p><p>DML (INSERT、UPDATE あるいは DELETE) 以外のクエリについては、 この関数は <code>mysqli_real_query()</code> に続けて <code>mysqli_use_result()</code> あるいは <code>mysqli_store_result()</code> をコールすることと同等です。</p><p><b>注意</b>:</p><p>サーバーの <i>max_allowed_packet</i> よりも長いステートメントを <b>mysqli_query()</b> に渡した場合、 返ってくるエラーコードは MySQL Native Driver (<i>mysqlnd</i>) を使っているか MySQL Client Library (<i>libmysqlclient</i>) を使っているかで異なります。 それぞれ、次のように振る舞います。</p><p>Linux 上の <i>mysqlnd</i> では、エラーコード 1153 を返します。 エラーメッセージは "got a packet bigger than <i>max_allowed_packet</i> bytes" です。</p><p>Windows 上の <i>mysqlnd</i> では、エラーコード 2006 を返します。 エラーメッセージは "server has gone away" です。</p><p>すべてのプラットフォームの <i>libmysqlclient</i> では、エラーコード 2006 を返します。エラーメッセージは "server has gone away" です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $query <p>クエリ文字列。</p> <p>クエリ内のデータは 適切にエスケープ. する必要があります。</p>
 * @param int $resultmode <p>定数 <b><code>MYSQLI_USE_RESULT</code></b> あるいは <b><code>MYSQLI_STORE_RESULT</code></b> で、望みの挙動を指定します。 デフォルトでは <b><code>MYSQLI_STORE_RESULT</code></b> を使用します。</p> <p><i>MYSQLI_USE_RESULT</i> を使用すると、 <code>mysqli_free_result()</code> をコールするまでは それ以降のコールはすべて <i>Commands out of sync</i> エラーを返します。</p> <p><b><code>MYSQLI_ASYNC</code></b> (mysqlnd で使用可能) を使用すると、クエリを非同期実行できるようになります。 このクエリの結果を取得するには <code>mysqli_poll()</code> を使用します。</p>
 * @return mixed <p>失敗した場合に <b><code>FALSE</code></b> を返します。 <i>SELECT, SHOW, DESCRIBE</i> あるいは <i>EXPLAIN</i> が成功した場合は、<b>mysqli_query()</b> は mysqli_result オブジェクトを返します。それ以外のクエリが成功した場合は、 <b>mysqli_query()</b> は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.query.php
 * @see mysqli_real_query(), mysqli_multi_query(), mysqli_free_result()
 * @since PHP 5, PHP 7
 */
function mysqli_query(\mysqli $link, string $query, int $resultmode = MYSQLI_STORE_RESULT) {}

/**
 * mysql サーバーとの接続をオープンする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>MySQL データベースエンジンとの接続を確立します。</p><p>この関数は、以下の点で <code>mysqli_connect()</code> とは異なります。</p><p><b>mysqli_real_connect()</b> は、 <code>mysqli_init()</code> が作成した接続オブジェクトを必要とします。</p><p><code>mysqli_options()</code> 関数を使用して、 さまざまな接続オプションを設定することが可能です。</p><p><code>flags</code> パラメータが使用できます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $host <p>ホスト名あるいは IP アドレス。<b><code>NULL</code></b> 値あるいは文字列 "localhost" をこのパラメータに指定すると、ローカルホストを使用します。 使用可能な場合は、TCP/IP プロトコルよりもパイプを優先して使用します。</p>
 * @param string $username <p>MySQL ユーザー名。</p>
 * @param string $passwd <p><b><code>NULL</code></b> を指定した場合は、MySQL サーバーは パスワードを持たないユーザーレコードについてのみ認証を試みます。 これにより、同一のユーザー名に対して (パスワードが指定されたか 否かによって) 違う権限を与えることができます。</p>
 * @param string $dbname <p>指定した場合は、 クエリが行われるデフォルトのデータベースとなります。</p>
 * @param int $port <p>MySQL サーバーに接続する際のポート番号を指定します。</p>
 * @param string $socket <p>使用するソケットあるいは名前つきパイプを指定します。</p>  <p><b>注意</b>:</p> <p><code>socket</code> 引数を指定しても、MySQL サーバーへの 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの 接続方法については <code>host</code> 引数で定義されます。</p>
 * @param int $flags <p>パラメータ <code>flags</code> で、接続時のさまざまなオプションを設定します。</p>  <b>サポートするフラグ</b>   名前 説明     <b><code>MYSQLI_CLIENT_COMPRESS</code></b> 圧縮プロトコルを使用します。   <b><code>MYSQLI_CLIENT_FOUND_ROWS</code></b> 変更された行数ではなく、マッチした行数を返します。   <b><code>MYSQLI_CLIENT_IGNORE_SPACE</code></b> 関数名に続く空白文字を許可します。すべての関数名を予約語とします。   <b><code>MYSQLI_CLIENT_INTERACTIVE</code></b>  接続を閉じるまでのタイムアウト時間として、 (<i>wait_timeout</i> のかわりに) <i>interactive_timeout</i> の使用を許可します。    <b><code>MYSQLI_CLIENT_SSL</code></b> SSL (暗号化) を使用します。   <b><code>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</code></b>  <b><code>MYSQLI_CLIENT_SSL</code></b> と似ていますが、 SSL 証明書の検証は行いません。 これは、MySQL Native Driver と MySQL 5.6 以降の組み合わせでのみ使えます。      <p><b>注意</b>:</p> <p>セキュリティの観点から、PHP では <i>MULTI_STATEMENT</i> フラグはサポートされていません。複数のクエリを実行したい場合は、 <code>mysqli_multi_query()</code> 関数を使用してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.real-connect.php
 * @see mysqli_connect(), mysqli_init(), mysqli_options(), mysqli_ssl_set(), mysqli_close()
 * @since PHP 5, PHP 7
 */
function mysqli_real_connect(\mysqli $link, string $host = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = NULL, string $socket = NULL, int $flags = NULL): bool {}

/**
 * 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数を使用して、SQL 文中で使用できる正当な形式の SQL 文字列を作成します。 文字列 <i>escapestr</i> が、エスケープされた SQL に変換されます。その際、接続で使用している現在の文字セットが考慮されます。</p><p>サーバーレベルで設定するなり API 関数 <code>mysqli_set_charset()</code> を使うなりして、 文字セットを明示しておく必要があります。この文字セットが <b>mysqli_real_escape_string()</b> に影響を及ぼします。詳細は 文字セットの概念 を参照ください。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $escapestr <p>エスケープする文字列。</p> <p>エンコードされる文字は <i>NUL (ASCII 0), \n, \r, \, ', ", および Control-Z</i> です。</p>
 * @return string <p>エスケープ済みの文字列を返します。</p>
 * @link http://php.net/manual/ja/mysqli.real-escape-string.php
 * @see mysqli_set_charset(), mysqli_character_set_name()
 * @since PHP 5, PHP 7
 */
function mysqli_real_escape_string(\mysqli $link, string $escapestr): string {}

/**
 * SQL クエリを実行する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースに対して単一のクエリを実行します。 その結果を取得したり保存したりするには、関数 <code>mysqli_store_result()</code> あるいは <code>mysqli_use_result()</code> を使用します。</p><p>指定したクエリが結果を返すかどうかを調べるには、 <code>mysqli_field_count()</code> を参照ください。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $query <p>クエリを表す文字列。</p> <p>クエリ内のデータは 適切にエスケープ. する必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.real-query.php
 * @see mysqli_query(), mysqli_store_result(), mysqli_use_result()
 * @since PHP 5, PHP 7
 */
function mysqli_real_query(\mysqli $link, string $query): bool {}

/**
 * 非同期クエリから結果を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>非同期クエリから結果を取得します。 mysqlnd でのみ使用可能です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return mysqli_result <p>成功した場合に mysqli_result、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.reap-async-query.php
 * @see mysqli_poll()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_reap_async_query(\mysqli $link): \mysqli_result {}

/**
 * リフレッシュする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>テーブルやキャッシュのフラッシュ、あるいはレプリケーションサーバー情報のリセットを行います。</p>
 * @param resource $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $options <p>リフレッシュのオプションを定数 MYSQLI_REFRESH_&#42; で指定します。定数の意味は MySQLi 定数 のドキュメントを参照ください。</p> <p>公式ドキュメントの » MySQL Refresh も参照ください。</p>
 * @return bool <p>リフレッシュに成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.refresh.php
 * @see mysqli_poll()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_refresh($link, int $options): bool {}

/**
 * 現在のトランザクションのセーブポイント群から、指定した名前のセーブポイントを削除する
 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $name
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.release-savepoint.php
 * @see mysqli_rollback()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function mysqli_release_savepoint(\mysqli $link, string $name): bool {}

/**
 * mysqli_driver->report_mode のエイリアス
 * <p>この関数は次の関数のエイリアスです。 mysqli_driver-&gt;report_mode</p>
 * @link http://php.net/manual/ja/function.mysqli-report.php
 * @since PHP 5, PHP 7
 */
function mysqli_report() {}

/**
 * 現在のトランザクションをロールバックする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースの現在のトランザクションをロールバックします。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $flags <p>定数 <b><code>MYSQLI_TRANS_COR_&#42;</code></b> のビットマスク。</p>
 * @param string $name <p>指定した場合は、<i>ROLLBACK/&#42;name&#42;/</i> を実行します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.rollback.php
 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_autocommit(), mysqli_release_savepoint()
 * @since PHP 5, PHP 7
 */
function mysqli_rollback(\mysqli $link, int $flags = NULL, string $name = NULL): bool {}

/**
 * RPL のパースが有効かどうかを確認する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return int
 * @link http://php.net/manual/ja/function.mysqli-rpl-parse-enabled.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_rpl_parse_enabled(\mysqli $link): int {}

/**
 * RPL の調査
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-rpl-probe.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_rpl_probe(\mysqli $link): bool {}

/**
 * RPL クエリの型を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>クエリの型により、 <b><code>MYSQLI_RPL_MASTER</code></b>、 <b><code>MYSQLI_RPL_SLAVE</code></b> あるいは <b><code>MYSQLI_RPL_ADMIN</code></b> のいずれかを返します。 <i>INSERT</i>・<i>UPDATE</i> およびそれに類する ものは <i>master</i> クエリで、<i>SELECT</i> は <i>slave</i>、そして <i>FLUSH</i>・ <i>REPAIR</i> およびそれに類するものは <i>admin</i> です。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @param string $query
 * @return int
 * @link http://php.net/manual/ja/mysqli.rpl-query-type.php
 * @since PHP 5, PHP 7
 */
function mysqli_rpl_query_type(\mysqli $link, string $query): int {}

/**
 * トランザクションのセーブポイントを設定する
 * <p>オブジェクト指向型 (メソッド):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $name
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.savepoint.php
 * @see mysqli_commit()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function mysqli_savepoint(\mysqli $link, string $name): bool {}

/**
 * クエリを実行するためのデフォルトのデータベースを選択する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続に対してクエリを実行する際に使用する、 デフォルトのデータベースを設定します。</p><p><b>注意</b>:</p><p>この関数は、接続のデフォルトデータベースを変更する際にのみ使用します。 デフォルトデータベースは、<code>mysqli_connect()</code> の 4 番目の引数でも指定可能です。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $dbname <p>データベース名。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.select-db.php
 * @see mysqli_connect(), mysqli_real_connect()
 * @since PHP 5, PHP 7
 */
function mysqli_select_db(\mysqli $link, string $dbname): bool {}

/**
 * mysqli_stmt_send_long_data() のエイリアス
 * <p>この関数は <code>mysqli_stmt_send_long_data()</code> のエイリアスです。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.mysqli-send-long-data.php
 * @since PHP 5 < 5.4.0
 */
function mysqli_send_long_data() {}

/**
 * クエリを送信する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @param string $query
 * @return bool
 * @link http://php.net/manual/ja/mysqli.send-query.php
 * @since PHP 5, PHP 7
 */
function mysqli_send_query(\mysqli $link, string $query): bool {}

/**
 * クライアントのデフォルト文字セットを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベースサーバーとのデータの送受信に使用する、 デフォルトの文字セットを設定します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $charset <p>デフォルトとして設定する文字セット。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.set-charset.php
 * @see mysqli_character_set_name(), mysqli_real_escape_string()
 * @since PHP 5 >= 5.0.5, PHP 7
 */
function mysqli_set_charset(\mysqli $link, string $charset): bool {}

/**
 * load local infile コマンド用のユーザー定義ハンドラを削除する
 * <p><code>mysqli_set_local_infile_handler()</code> で設定した <i>LOAD DATA INFILE LOCAL</i> ハンドラを削除します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/mysqli.set-local-infile-default.php
 * @see mysqli_set_local_infile_handler()
 * @since PHP 5, PHP 7
 */
function mysqli_set_local_infile_default(\mysqli $link): void {}

/**
 * LOAD DATA LOCAL INFILE コマンド用のコールバック関数を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>LOAD DATA LOCAL INFILE コマンド用のコールバック関数を設定します。</p><p>コールバック関数では、<i>LOAD DATA LOCAL INFILE</i> で指定したファイルの内容を読み込んで、それを <i>LOAD DATA INFILE</i> で使用できる形式に変換します。</p><p>返されるデータは、 <i>LOAD DATA</i> で指定した書式にマッチする必要があります。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param callable $read_func <p>以下のパラメータを受け取るコールバック関数あるいはオブジェクトのメソッド。</p>   <code>stream</code>   <p>SQL の INFILE コマンドに関連付けられた PHP ストリーム</p>   <code>&amp;buffer</code>   <p>入力を書き換えた内容を保存する文字列バッファ</p>   <code>buflen</code>   <p>バッファに格納する最大文字数</p>   <code>&amp;errormsg</code>   <p>エラーが発生した場合にエラーメッセージを保存する場所</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.set-local-infile-handler.php
 * @see mysqli_set_local_infile_default()
 * @since PHP 5, PHP 7
 */
function mysqli_set_local_infile_handler(\mysqli $link, callable $read_func): bool {}

/**
 * mysqli_options() のエイリアス
 * <p>この関数は <code>mysqli_options()</code> のエイリアスです。</p>
 * @link http://php.net/manual/ja/function.mysqli-set-opt.php
 * @since PHP 5, PHP 7
 */
function mysqli_set_opt() {}

/**
 * マスタ/スレーブ設定で、スレーブ側のクエリを実行する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>この関数は <i>非推奨</i> であり、PHP 5.3.0 で <i>削除</i> されます。</p>
 * @param \mysqli $link
 * @param string $query
 * @return bool
 * @link http://php.net/manual/ja/function.mysqli-slave-query.php
 * @since PHP 5 < 5.3.0
 */
function mysqli_slave_query(\mysqli $link, string $query): bool {}

/**
 * 直前の MySQL の操作での SQLSTATE エラーを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近のエラーについて、SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> はエラーが発生しなかったことを意味します。この値は、ANSI SQL および ODBC で定義されています。とりうる値の一覧は » http://dev.mysql.com/doc/mysql/en/error-handling.html を参照ください。</p><p><b>注意</b>:</p><p>すべての MySQL エラーが SQLSTATE に対応しているわけではないことに 注意してください。そのようなエラーが発生した場合は、 <i>HY000</i>（一般的なエラー）が返されます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 文字で構成され、<i>'00000'</i> はエラーが発生しなかったことを意味します。</p>
 * @link http://php.net/manual/ja/mysqli.sqlstate.php
 * @see mysqli_errno(), mysqli_error()
 * @since PHP 5, PHP 7
 */
function mysqli_sqlstate(\mysqli $link): string {}

/**
 * SSL を使用したセキュアな接続を確立する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>SSL を使用してセキュアな接続を確立します。 <code>mysqli_real_connect()</code> より前にコールする必要があります。この関数は、 OpenSSL サポートが有効になっていない場合は何もしません。</p><p>PHP 5.3.3 より前は、MySQL ネイティブドライバは SSL をサポートしていないことに注意しましょう。 MySQL ネイティブドライバを使っているときにこの関数をコールすると、エラーとなります。 MySQL ネイティブドライバは、Microsoft Windows 版の PHP バージョン 5.3 以降はデフォルトで有効となっています。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param string $key <p>鍵ファイルへのパス。</p>
 * @param string $cert <p>証明書ファイルへのパス。</p>
 * @param string $ca <p>CA ファイルへのパス。</p>
 * @param string $capath <p>信頼された SSL CA 証明書が PEM フォーマットで格納されているディレクトリへのパス。</p>
 * @param string $cipher <p>SSL の暗号化に使用可能な暗号形式の一覧。</p>
 * @return bool <p>この関数は、常に <b><code>TRUE</code></b> を返します。もし SSL が正しく設定できていない場合、 <code>mysqli_real_connect()</code> は接続時にエラーを返します。</p>
 * @link http://php.net/manual/ja/mysqli.ssl-set.php
 * @see mysqli_options(), mysqli_real_connect()
 * @since PHP 5, PHP 7
 */
function mysqli_ssl_set(\mysqli $link, string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

/**
 * 現在のシステム状態を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_stat()</b> は、'mysqladmin status' コマンドが 返すのと同じ情報を返します。この中には、起動からの秒数・起動中の スレッドの数・リロード数および開かれているテーブルなどが含まれます。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return string <p>サーバーの状態を示す文字列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.stat.php
 * @see mysqli_get_server_info()
 * @since PHP 5, PHP 7
 */
function mysqli_stat(\mysqli $link): string {}

/**
 * 直近に実行されたステートメントで変更・削除・あるいは追加された行の総数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><i>INSERT</i>、 <i>UPDATE</i> あるいは <i>DELETE</i> クエリによって変更された行の数を返します。</p><p>この関数は、テーブルを更新するクエリに対してのみ働きます。 SELECT クエリが返す行の数を知るには、 <code>mysqli_stmt_num_rows()</code> 関数を代わりに使用します。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return int <p>ゼロより大きい整数の場合、変更した行の数を示します。ゼロの場合は、 UPDATE/DELETE で 1 行も更新されなかった・WHERE 句にマッチする行がなかった・ あるいはまだクエリが実行されていないのいずれかであることを示します。 -1 は、クエリがエラーを返したことを示します。 NULL は、関数に無効な引数が渡されたことを示します。</p> <p><b>注意</b>:</p> <p>変更された行の数が PHP の int 型の最大値をこえる場合は、変更された 行の数は文字列として返されます。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.affected-rows.php
 * @see mysqli_stmt_num_rows(), mysqli_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_affected_rows(\mysqli_stmt $stmt): int {}

/**
 * ステートメントの属性の現在の値を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントの属性の現在の値を取得します。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param int $attr <p>取得したい属性。</p>
 * @return int <p>属性がみつからない場合は <b><code>FALSE</code></b> を、 それ以外の場合はその属性の値を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.attr-get.php
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_attr_get(\mysqli_stmt $stmt, int $attr): int {}

/**
 * プリペアドステートメントの振る舞いを変更する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントの振る舞いを変更します。 複数の属性を設定するには、この関数を複数回コールします。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param int $attr <p>設定したい属性。次のいずれかの値となります。</p> <b>属性の値</b>   文字 説明     MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH  <b><code>TRUE</code></b> に設定すると、<code>mysqli_stmt_store_result()</code> は メタデータ <i>MYSQL_FIELD-&gt;max_length</i> の値を上書きします。    MYSQLI_STMT_ATTR_CURSOR_TYPE  <code>mysqli_stmt_execute()</code> が起動された際にステートメントをオープンするためのカーソル型。 <code>mode</code> は、<i>MYSQLI_CURSOR_TYPE_NO_CURSOR</i> (デフォルト) あるいは <i>MYSQLI_CURSOR_TYPE_READ_ONLY</i> となります。    MYSQLI_STMT_ATTR_PREFETCH_ROWS  カーソルの使用時にサーバーからいちどに取得する行数。 <code>mode</code> に指定できる値の範囲は 1 から unsigned long の最大値までで、デフォルトは 1 です。     <p><i>MYSQLI_STMT_ATTR_CURSOR_TYPE</i> オプションで <i>MYSQLI_CURSOR_TYPE_READ_ONLY</i> を使用すると、 <code>mysqli_stmt_execute()</code> を起動した際にそのステートメント用のカーソルをオープンします。 以前に <code>mysqli_stmt_execute()</code> をコールした際にオープンしたカーソルが残っている場合は、 それを閉じてから新しいカーソルをオープンします。また <code>mysqli_stmt_reset()</code> も、オープンしているカーソルをすべて閉じてからステートメント再実行の準備をします。 <code>mysqli_stmt_free_result()</code> は、オープンしているカーソルをすべて閉じます。</p> <p>プリペアドステートメント用のカーソルをオープンするのなら <code>mysqli_stmt_store_result()</code> は不要です。</p>
 * @param int $mode <p>属性に割り当てるモード。</p>
 * @return bool
 * @link http://php.net/manual/ja/mysqli-stmt.attr-set.php
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_attr_set(\mysqli_stmt $stmt, int $attr, int $mode): bool {}

/**
 * プリペアドステートメントのパラメータに変数をバインドする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>変数を、SQL ステートメントのパラメータマーカにバインドします。 この変数は、<code>mysqli_prepare()</code> に渡されたものです。</p><p><b>注意</b>:</p><p>データのサイズがパケットサイズの最大値（max_allowed_packet）を こえた場合、<code>types</code> に <i>b</i> を 指定して <code>mysqli_stmt_send_long_data()</code> を使用し、 データをパケットに分割して送信する必要があります。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_bind_param()</b> と <code>call_user_func_array()</code> を組み合わせて使う場合は注意が必要です。 <b>mysqli_stmt_bind_param()</b> へのパラメータは参照渡しでなければなりませんが、 <code>call_user_func_array()</code> には変数のリストをパラメータとして渡すことができます。 この変数は参照であっても値であってもかまいません。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param string $types <p>ひとつあるいは複数の文字で、対応するバインド変数の型を表します。</p> <b>型指定文字</b>   文字 説明     i 対応する変数の型は integer です。   d 対応する変数の型は double です。   s 対応する変数の型は string です。   b 対応する変数の型は blob で、複数のパケットに分割して送信されます。
 * @param mixed $var1 <p>変数の数。文字列 <code>types</code> の長さは、ステートメント中のパラメータの数と一致する必要があります。</p>
 * @param mixed $_
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.bind-param.php
 * @see mysqli_stmt_bind_result(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_send_long_data(), mysqli_stmt_errno(), mysqli_stmt_error()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_bind_param(\mysqli_stmt $stmt, string $types, &$var1, &$_ = NULL): bool {}

/**
 * 結果を保存するため、プリペアドステートメントに変数をバインドする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットのカラムを変数にバインドします。</p><p>データを取得するために <code>mysqli_stmt_fetch()</code> がコールされた場合、MySQL クライアント/ サーバー プロトコルはバインドされたカラムのデータを <code>var1, ...</code> に格納します。</p><p><b>注意</b>:</p><p>すべてのカラムを、<code>mysqli_stmt_execute()</code> をコールしてから <code>mysqli_stmt_fetch()</code> をコールするまでの間に バインドしておく必要があることに注意しましょう。カラムの型に 応じて、バインド変数の型も対応する PHP の型に自動的に変換されます。</p><p>カラムのバインドや再バインドはいつでも可能で、たとえ結果セットを途中まで 取得した後であっても可能です。新しくバインドした内容が効力を発揮するのは、 次に <code>mysqli_stmt_fetch()</code> がコールされたときからです。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param mixed $var1 <p>バインドする変数。</p>
 * @param mixed $_
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.bind-result.php
 * @see mysqli_stmt_get_result(), mysqli_stmt_bind_param(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_prepare(), mysqli_stmt_init(), mysqli_stmt_errno(), mysqli_stmt_error()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_bind_result(\mysqli_stmt $stmt, &$var1, &$_ = NULL): bool {}

/**
 * プリペアドステートメントを閉じる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントを閉じます。また、<b>mysqli_stmt_close()</b> は <code>stmt</code> が指すステートメントハンドルを開放します。 現在のステートメントが実行中あるいはまだ結果を取得していない場合、 この関数はキャンセルされ、次のクエリが実行されます。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.close.php
 * @see mysqli_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_close(\mysqli_stmt $stmt): bool {}

/**
 * ステートメントの結果セットの任意の行に移動する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントの結果セット内で、 任意の位置に結果ポインタを移動します。</p><p><code>mysqli_stmt_store_result()</code> は、 <b>mysqli_stmt_data_seek()</b> より前にコールしなければなりません。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param int $offset <p>ゼロから行の総数 - 1（0..<code>mysqli_stmt_num_rows()</code> - 1） までの間である必要があります。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.data-seek.php
 * @see mysqli_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_data_seek(\mysqli_stmt $stmt, int $offset): void {}

/**
 * 直近のステートメントのコールに関するエラーコードを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたステートメントが 成功あるいは失敗した際のエラーコードを返します。</p><p>クライアントのエラーメッセージ番号は MySQL の errmsg.h ヘッダファイルで、そしてサーバーのエラーメッセージ番号は mysqld_error.h で定義されています。MySQL のソース配布の中には、エラーメッセージの 完全なリストが Docs/mysqld_error.txt に含まれています。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return int <p>エラーコードの値を返します。ゼロはエラーが発生しなかったことを示します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.errno.php
 * @see mysqli_stmt_error(), mysqli_stmt_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_errno(\mysqli_stmt $stmt): int {}

/**
 * 直近のステートメントのエラー内容を文字列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたステートメントが 成功あるいは失敗した際のエラーメッセージを文字列で返します。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return string <p>エラーの内容を文字列で返します。エラーが発生しなかった場合は空文字列を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.error.php
 * @see mysqli_stmt_errno(), mysqli_stmt_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_error(\mysqli_stmt $stmt): string {}

/**
 * 直近で実行したステートメントからのエラーの一覧を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>エラーの配列を返します。この配列の内容は、直近で実行したステートメント関数で発生したエラーです。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return array <p>エラーの一覧を返します。個々のエラーは連想配列形式で、 errno、error および sqlstate のキーを含みます。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.error-list.php
 * @see mysqli_stmt_error(), mysqli_stmt_errno(), mysqli_stmt_sqlstate()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function mysqli_stmt_error_list(\mysqli_stmt $stmt): array {}

/**
 * プリペアドクエリを実行する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>事前に <code>mysqli_prepare()</code> 関数で用意されたクエリを実行します。 パラメータマーカが存在する場合、その内容は自動的に適切なデータに置き換えられます。</p><p>ステートメントが <i>UPDATE</i>、<i>DELETE</i> あるいは <i>INSERT</i> であった場合、 変更された行の総数は <code>mysqli_stmt_affected_rows()</code> 関数を使用することで取得可能です。同様に、クエリが結果セットを返す場合は <code>mysqli_stmt_fetch()</code> 関数を使用できます。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_execute()</b> を使用した際には、 他のクエリを実行する前に <code>mysqli_stmt_fetch()</code> 関数を使用する必要があります。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.execute.php
 * @see mysqli_prepare(), mysqli_stmt_bind_param(), mysqli_stmt_get_result()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_execute(\mysqli_stmt $stmt): bool {}

/**
 * プリペアドステートメントから結果を取得し、バインド変数に格納する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメントから結果を読み込み、 <code>mysqli_stmt_bind_result()</code> でバインドした変数に格納します。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_fetch()</b> をコールする前に、すべての カラムがバインド済みである必要があることに注意しましょう。</p><p><b>注意</b>:</p><p>データの転送はバッファを用いずに行います。 <code>mysqli_stmt_store_result()</code> をコールするとバッファを使用し、パフォーマンスが減少します (しかしメモリのコストは下がります)。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return bool <b>返り値</b>   値 説明     <b><code>TRUE</code></b> 成功。データが取得されました。   <b><code>FALSE</code></b> エラーが発生しました。   <b><code>NULL</code></b> 行/データがもうありません。あるいは、データの切り詰めが発生しました。
 * @link http://php.net/manual/ja/mysqli-stmt.fetch.php
 * @see mysqli_prepare(), mysqli_stmt_errno(), mysqli_stmt_error(), mysqli_stmt_bind_result()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_fetch(\mysqli_stmt $stmt): bool {}

/**
 * 指定したステートメントのフィールド数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli_stmt $stmt
 * @return int
 * @link http://php.net/manual/ja/mysqli-stmt.field-count.php
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_field_count(\mysqli_stmt $stmt): int {}

/**
 * 指定したステートメントハンドルの結果を格納したメモリを開放する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ステートメントに関連する結果のメモリを開放します。このメモリは <code>mysqli_stmt_store_result()</code> によって割り当てられたものです。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.free-result.php
 * @see mysqli_stmt_store_result()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_free_result(\mysqli_stmt $stmt): void {}

/**
 * プリペアード・ステートメントから結果セットを取得
 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアード・ステートメントから結果セットを返すための呼び出し。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return mysqli_result <p>SELECT クエリが成功した場合はその結果セットを返します。 その他の DML クエリを実行した場合や失敗した場合は <b><code>FALSE</code></b> を返します。 その他の DML クエリを実行したのかクエリの実行に失敗したのかを区別するには、 <code>mysqli_errno()</code> 関数を使います。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.get-result.php
 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch(), mysqli_fetch_array(), mysqli_stmt_store_result(), mysqli_errno()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mysqli_stmt_get_result(\mysqli_stmt $stmt): \mysqli_result {}

/**
 * SHOW WARNINGS の結果を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli_stmt $stmt
 * @return object
 * @link http://php.net/manual/ja/mysqli-stmt.get-warnings.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function mysqli_stmt_get_warnings(\mysqli_stmt $stmt): object {}

/**
 * ステートメントを初期化し、mysqli_stmt_prepare で使用するオブジェクトを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_stmt_prepare()</code> で使用可能な ステートメントオブジェクトを割り当て、初期化します。</p><p><b>注意</b>:</p><p><code>mysqli_stmt_prepare()</code> がコールされるまで、 これ以降のあらゆる mysqli_stmt 関数のコールは失敗します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return mysqli_stmt <p>オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/mysqli.stmt-init.php
 * @see mysqli_stmt_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_init(\mysqli $link): \mysqli_stmt {}

/**
 * 直近の INSERT 操作で生成した ID を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \mysqli_stmt $stmt
 * @return mixed
 * @link http://php.net/manual/ja/mysqli-stmt.insert-id.php
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_insert_id(\mysqli_stmt $stmt) {}

/**
 * ステートメントの結果セットの行数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>結果セットの行の数を返します。<b>mysqli_stmt_num_rows()</b> が使用できるかどうかは、<code>mysqli_stmt_store_result()</code> を用いて結果をステートメントハンドルにバッファリングしているかどうかに 依存します。</p><p><code>mysqli_stmt_store_result()</code> を使用した場合は、 すぐに <b>mysqli_stmt_num_rows()</b> をコールできます。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return int <p>結果セットの行数を表す整数値を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.num-rows.php
 * @see mysqli_stmt_affected_rows(), mysqli_prepare(), mysqli_stmt_store_result()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_num_rows(\mysqli_stmt $stmt): int {}

/**
 * 指定したステートメントのパラメータ数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>プリペアドステートメント内のパラメータマーカの数を返します。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return int <p>パラメータの数を整数で返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.param-count.php
 * @see mysqli_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_param_count(\mysqli_stmt $stmt): int {}

/**
 * SQL ステートメントを実行するために準備する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>null で終わる文字列で指定した SQL クエリを準備します。</p><p>パラメータマーカは、ステートメントの実行や行の取得の前に <code>mysqli_stmt_bind_param()</code> や <code>mysqli_stmt_bind_result()</code> を使用して アプリケーション変数にバインドする必要があります。</p><p><b>注意</b>:</p><p>サーバーの <i>max_allowed_packet</i> よりも長いステートメントを <b>mysqli_stmt_prepare()</b> に渡した場合、 返ってくるエラーコードは MySQL Native Driver (<i>mysqlnd</i>) を使っているか MySQL Client Library (<i>libmysqlclient</i>) を使っているかで異なります。 それぞれ、次のように振る舞います。</p><p>Linux 上の <i>mysqlnd</i> では、エラーコード 1153 を返します。 エラーメッセージは "got a packet bigger than <i>max_allowed_packet</i> bytes" です。</p><p>Windows 上の <i>mysqlnd</i> では、エラーコード 2006 を返します。 エラーメッセージは "server has gone away" です。</p><p>すべてのプラットフォームの <i>libmysqlclient</i> では、エラーコード 2006 を返します。エラーメッセージは "server has gone away" です。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param string $query <p>クエリを表す文字列。単一の SQL 文で構成されている必要があります。</p> <p>ひとつまたは複数のパラメータを SQL 文に含めることができます。 そのためには、適切な位置にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p>  <p><b>注意</b>:</p> <p>ステートメントの最後にセミコロンや <i>\g</i> を追加してはいけません。</p>   <p><b>注意</b>:</p> <p>パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ 有効です。例えば INSERT 文の VALUES() リストの中 (行に登録するカラム値を指定する) や WHERE 句で列のデータと比較する値などが適切な位置の例です。</p> <p>しかし、識別子 (テーブルやカラムの名前) や SELECT 文で選択する 項目の名前に指定したり、(等号 <i>=</i> のような) 二項演算子の両側にパラメータを指定したりすることはできません。 後者の制限は、パラメータの型が判断できなくなることによるものです。 また、パラメータのマーカを <i>NULL</i> と比較して <i>&#63; IS NULL</i> のようにすることもできません。 一般に、パラメータが使用可能なのはデータ操作言語 (DML) ステートメントであり、データ定義言語 (DDL) ステートメントでは 使用できません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.prepare.php
 * @see mysqli_stmt_init(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_prepare(\mysqli_stmt $stmt, string $query): bool {}

/**
 * プリペアドステートメントをリセットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>クライアントおよびサーバーで、実行後のプリペアドステートメントをリセットします。</p><p>サーバー上のステートメント、<code>mysqli_stmt_send_long_data()</code> で送信したデータ、バッファリングされていない結果、そして現在のエラーをリセットします。 バインド内容や保存された結果セットはクリアされません。保存された結果がクリアされるのは、 プリペアドステートメントを実行した (あるいは閉じた) ときです。</p><p>別のクエリを元にプリペアドステートメントを用意する場合は、 <code>mysqli_stmt_prepare()</code> 関数を使用します。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.reset.php
 * @see mysqli_prepare()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_reset(\mysqli_stmt $stmt): bool {}

/**
 * プリペアドステートメントから結果セットのメタデータを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_prepare()</code> に渡したステートメントが 結果セットを返すものであった場合、<b>mysqli_stmt_result_metadata()</b> はオブジェクトを返します。このオブジェクトは、結果のフィールド数や 各フィールドの情報などのメタ情報を取得するために使用可能です。</p><p><b>注意</b>:</p><p>メタデータを取得するには、この結果セットポインタを、以下のいずれかの (フィールドベースの) 関数に渡します。</p><p><code>mysqli_num_fields()</code></p><p><code>mysqli_fetch_field()</code></p><p><code>mysqli_fetch_field_direct()</code></p><p><code>mysqli_fetch_fields()</code></p><p><code>mysqli_field_count()</code></p><p><code>mysqli_field_seek()</code></p><p><code>mysqli_field_tell()</code></p><p><code>mysqli_free_result()</code></p><p>結果セットは、使用終了後に開放すべきです。そのためには、結果セットを <code>mysqli_free_result()</code> に渡します。</p><p><b>注意</b>:</p><p><b>mysqli_stmt_result_metadata()</b> が返す結果セットには メタデータのみが含まれています。実際の行データは含まれません。行データを 取得するには、ステートメントハンドルを <code>mysqli_stmt_fetch()</code> に渡してください。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return mysqli_result <p>結果のオブジェクトを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.result-metadata.php
 * @see mysqli_prepare(), mysqli_free_result()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_result_metadata(\mysqli_stmt $stmt): \mysqli_result {}

/**
 * データをブロックで送信する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>パラメータのデータを、サーバーに分割して送信します。例えば blob のサイズが <i>max_allowed_packet</i> を越えてしまう場合などに使用します。 この関数は、カラムに文字やバイナリのデータを送信するために複数回 コールすることが可能です。そのカラムの型は TEXT あるいは BLOB である 必要があります。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @param int $param_nr <p>データに関連付けるパラメータを示します。 パラメータの番号は 0 から始まります。</p>
 * @param string $data <p>送信するデータを含む文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.send-long-data.php
 * @see mysqli_prepare(), mysqli_stmt_bind_param()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_send_long_data(\mysqli_stmt $stmt, int $param_nr, string $data): bool {}

/**
 * 直前のステートメントの操作での SQLSTATE エラーを返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近に実行されたプリペアドステートメントのエラーについて、 SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> はエラーが発生しなかったことを意味します。この値は、ANSI SQL および ODBC で定義されています。とりうる値の一覧は » http://dev.mysql.com/doc/mysql/en/error-handling.html を参照ください。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return string <p>直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 文字で構成され、<i>'00000'</i> はエラーが発生しなかったことを意味します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.sqlstate.php
 * @see mysqli_stmt_errno(), mysqli_stmt_error()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_sqlstate(\mysqli_stmt $stmt): string {}

/**
 * プリペアドステートメントから結果を転送する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>クエリが結果セットを返す場合（<i>SELECT, SHOW, DESCRIBE, EXPLAIN</i>）、常に <b>mysqli_stmt_store_result()</b> をコールする必要があります。また、この関数は結果セットをクライアントの バッファに格納するだけであり、データを取得するには続けて <code>mysqli_stmt_fetch()</code> をコールします。</p><p><b>注意</b>:</p><p>その他のクエリでは <b>mysqli_stmt_store_result()</b> をコールする必要はありません。しかし、もしコールしてしまったとしても パフォーマンスへの悪影響は一切ありません。クエリが結果セットを 返すかどうかは、<code>mysqli_stmt_result_metadata()</code> が NULL を返すかどうかで調べられます。</p>
 * @param \mysqli_stmt $stmt <p>手続き型のみ: <code>mysqli_stmt_init()</code> が返すステートメント ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli-stmt.store-result.php
 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch()
 * @since PHP 5, PHP 7
 */
function mysqli_stmt_store_result(\mysqli_stmt $stmt): bool {}

/**
 * 直近のクエリから結果セットを転送する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>mysqli_data_seek()</code> で使用される、 <code>link</code> で表されたデータベース接続の直近のクエリ から結果セットを転送します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @param int $option <p>指定したいオプション。以下のいずれかの値を指定します。</p> <b>有効なオプション</b>   名前 説明     <b><code>MYSQLI_STORE_RESULT_COPY_DATA</code></b>  結果を、内部の mysqlnd バッファーから PHP の変数にコピーします。 デフォルトでは、mysqlnd は参照を利用しており、メモリ内の結果をコピーしたり複製したりしないようにしています。 ある種の結果セット (短めの行を大量に保持する結果セットなど) の場合は、 コピーしたほうが、全体的なメモリ使用量を抑えることができます。 結果を保持する PHP の変数のほうが、解放されるのが早いからです。 これは mysqlnd でのみ利用可能で、PHP 5.6.0 以降で使えます。
 * @return mysqli_result <p>バッファに格納した結果オブジェクトを返します。エラー時には <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p><b>mysqli_store_result()</b> は、クエリが結果セットを 返さなかった場合（例えば、クエリが INSERT 文であった場合）に <b><code>FALSE</code></b> を返します。また、結果セットの読み込みに失敗した場合にも <b><code>FALSE</code></b> を返します。エラーが発生したかどうかを調べるには、 <code>mysqli_error()</code> が空文字列以外を返す・ <code>mysqli_errno()</code> がゼロ以外の値を返す・あるいは <code>mysqli_field_count()</code> がゼロ以外の値を返す のいずれかを確認します。それ以外にこの関数が <b><code>FALSE</code></b> を返す理由としては <code>mysqli_query()</code> のコールに成功して返された 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。 もし <code>mysqli_field_count()</code> がゼロ以外の値を 返した場合、文は空でない結果セットを生成しています。</p>
 * @link http://php.net/manual/ja/mysqli.store-result.php
 * @see mysqli_real_query(), mysqli_use_result()
 * @since PHP 5, PHP 7
 */
function mysqli_store_result(\mysqli $link, int $option = NULL): \mysqli_result {}

/**
 * 現在の接続のスレッド ID を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>mysqli_thread_id()</b> 関数は、現在の接続の スレッド ID を返します。この ID を使用すると、<code>mysqli_kill()</code> 関数でセッションを切断することが可能です。接続が切断し <code>mysqli_ping()</code> で再接続した場合は、スレッド ID は別のものになります。そのため、必要になったそのときにスレッド ID を取得するべきです。</p><p><b>注意</b>:</p><p>スレッド ID は接続単位で割り当てられます。そのため、もし いったん切断した接続が再度確立された場合、新しいスレッド ID が割り当てられます。</p><p>実行中のクエリを停止するには、SQL コマンド <i>KILL QUERY processid</i> を使用します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>現在の接続のスレッド ID を返します。</p>
 * @link http://php.net/manual/ja/mysqli.thread-id.php
 * @see mysqli_kill()
 * @since PHP 5, PHP 7
 */
function mysqli_thread_id(\mysqli $link): int {}

/**
 * スレッドセーフであるかどうかを返す
 * <p>手続き型</p><p>クライアントライブラリがスレッドセーフでコンパイルされているかどうかを返します。</p>
 * @return bool <p>クライアントライブラリがスレッドセーフの場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.thread-safe.php
 * @since PHP 5, PHP 7
 */
function mysqli_thread_safe(): bool {}

/**
 * 結果セットの取得を開始する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>データベース接続上で <code>mysqli_real_query()</code> 関数を使用して実行した直近のクエリから、結果セットの取得を開始します。</p><p>この関数あるいは <code>mysqli_store_result()</code> 関数は、 クエリ結果を取得する前にコールされる必要があります。また、どちらかの 関数をコールしなければ、データベース接続上の次のクエリは失敗します。</p><p><b>注意</b>:</p><p><b>mysqli_use_result()</b> は、データベースから結果セットの 全体を転送するわけではありません。そのため、セット内の行を移動するために <code>mysqli_data_seek()</code> を使用することはできません。 この機能を使用するには、<code>mysqli_store_result()</code> を使用して結果をバッファに取得する必要があります。クライアント側で 大量の処理を行う際は、<b>mysqli_use_result()</b> を 使用すべきではありません。なぜなら、この関数はサーバーとの接続を保持 し続け、取得しているデータに関連するテーブルについて、他のスレッドから 更新ができなくなるからです。</p>
 * @param \mysqli $link
 * @return mysqli_result <p>バッファに取得しないで結果オブジェクトを返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/mysqli.use-result.php
 * @see mysqli_real_query(), mysqli_store_result()
 * @since PHP 5, PHP 7
 */
function mysqli_use_result(\mysqli $link): \mysqli_result {}

/**
 * 指定した接続の直近のクエリから発生した警告の数を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この接続の直近のクエリについて、発生した警告の数を返します。</p><p><b>注意</b>:</p><p>警告の内容を取得するには、SQL コマンド <i>SHOW WARNINGS [limit row_count]</i> を使用します。</p>
 * @param \mysqli $link <p>手続き型のみ: <code>mysqli_connect()</code> あるいは <code>mysqli_init()</code> が返すリンク ID。</p>
 * @return int <p>警告の数を返します。警告がなかった場合はゼロを返します。</p>
 * @link http://php.net/manual/ja/mysqli.warning-count.php
 * @see mysqli_errno(), mysqli_error(), mysqli_sqlstate()
 * @since PHP 5, PHP 7
 */
function mysqli_warning_count(\mysqli $link): int {}

/**
 * <p>行データを、カラム名をインデックスとする配列に格納して返します。</p>
 */
define('MYSQLI_ASSOC', 1);

/**
 * <p>フィールドは <i>AUTO_INCREMENT</i> と定義されています。</p>
 */
define('MYSQLI_AUTO_INCREMENT_FLAG', 512);

/**
 * <p>フィールドが <i>BINARY</i> として定義されています。PHP 5.3.0 以降で使用可能です。</p>
 */
define('MYSQLI_BINARY_FLAG', 128);

/**
 * <p>フィールドは <i>BLOB</i> と定義されています。</p>
 */
define('MYSQLI_BLOB_FLAG', 16);

/**
 * <p>行データを、数値インデックス・カラム名インデックスの両方を 保持する配列に格納して返します。</p>
 */
define('MYSQLI_BOTH', 3);

/**
 * <p>圧縮プロトコルを使用します。</p>
 */
define('MYSQLI_CLIENT_COMPRESS', 32);

/**
 * <p>関数名に続く空白文字を許可します。すべての関数名を予約語とします。</p>
 */
define('MYSQLI_CLIENT_IGNORE_SPACE', 256);

/**
 * <p>（<i>wait_timeout</i> のかわりに）<i>interactive_timeout</i> の秒数を使用できるように します。クライアントセッションの <i>wait_timeout</i> 変数の値は、<i>interactive_timeout</i> 変数の値に設定されます。</p>
 */
define('MYSQLI_CLIENT_INTERACTIVE', 1024);

/**
 * <p>セミコロンで区切られた複数のクエリを、 一度の <code>mysqli_query()</code> コールで実行することを許可します。</p>
 */
define('MYSQLI_CLIENT_MULTI_QUERIES', null);

/**
 * <p><i>db_name.tbl_name.col_name</i> 形式の使用を禁止します。</p>
 */
define('MYSQLI_CLIENT_NO_SCHEMA', 16);

/**
 * <p>SSL（暗号化プロトコル）を使用します。このオプションは、アプリケーション プログラムで指定することはできず、MySQL クライアントライブラリの内部で設定します。</p>
 */
define('MYSQLI_CLIENT_SSL', 2048);

define('MYSQLI_CURSOR_TYPE_FOR_UPDATE', 2);

define('MYSQLI_CURSOR_TYPE_NO_CURSOR', 0);

define('MYSQLI_CURSOR_TYPE_READ_ONLY', 1);

define('MYSQLI_CURSOR_TYPE_SCROLLABLE', 4);

/**
 * <p>データのトランケーションが発生しました。PHP 5.1.0 および MySQL 5.0.5 以降で使用可能です。</p>
 */
define('MYSQLI_DATA_TRUNCATED', 101);

/**
 * <p><code>mysqli_debug()</code> 機能が有効の場合に 1 が設定されます。</p>
 */
define('MYSQLI_DEBUG_TRACE_ENABLED', 0);

/**
 * <p>フィールドが <i>ENUM</i> として定義されています。PHP 5.3.0 以降で使用可能です。</p>
 */
define('MYSQLI_ENUM_FLAG', 256);

/**
 * <p>フィールドは <i>GROUP BY</i> の一部です。</p>
 */
define('MYSQLI_GROUP_FLAG', 32768);

/**
 * <p>MySQL サーバーへの接続時に実行するコマンド。 再接続時にも自動的に再実行されます。</p>
 */
define('MYSQLI_INIT_COMMAND', 3);

/**
 * <p>フィールドは、インデックスの一部です。</p>
 */
define('MYSQLI_MULTIPLE_KEY_FLAG', 8);

/**
 * <p>バインド変数に、さらにデータを使用可能です。</p>
 */
define('MYSQLI_NEED_DATA', null);

/**
 * <p>バインド変数に使用可能なデータがありません。</p>
 */
define('MYSQLI_NO_DATA', 100);

/**
 * <p>フィールドは、<i>NOT NULL</i> と定義されています。</p>
 */
define('MYSQLI_NOT_NULL_FLAG', 1);

/**
 * <p>行データを、数値インデックスの配列に格納して返します。</p>
 */
define('MYSQLI_NUM', 2);

/**
 * <p>フィールドは <i>NUMERIC</i> と定義されています。</p>
 */
define('MYSQLI_NUM_FLAG', 32768);

/**
 * <p>接続のタイムアウトまでの秒数。</p>
 */
define('MYSQLI_OPT_CONNECT_TIMEOUT', 0);

/**
 * <p><i>LOAD LOCAL INFILE</i> コマンドを有効にします。</p>
 */
define('MYSQLI_OPT_LOCAL_INFILE', 8);

/**
 * <p>フィールドは、マルチインデックスの一部です。</p>
 */
define('MYSQLI_PART_KEY_FLAG', 16384);

/**
 * <p>フィールドは、プライマリキーの一部です。</p>
 */
define('MYSQLI_PRI_KEY_FLAG', 2);

/**
 * <p>my.cnf のかわりに、指定したファイルからオプションを 読み込みます。</p>
 */
define('MYSQLI_READ_DEFAULT_FILE', 4);

/**
 * <p>my.cnf の指定した名前のグループか、 あるいは <b><code>MYSQLI_READ_DEFAULT_FILE</code></b> で指定したファイルからオプションを読み込みます。</p>
 */
define('MYSQLI_READ_DEFAULT_GROUP', 5);

/**
 * <p>権限テーブルをリフレッシュします。</p>
 */
define('MYSQLI_REFRESH_GRANT', 1);

/**
 * <p>ホストキャッシュをフラッシュします。SQL 文 <i>FLUSH HOSTS</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_HOSTS', 8);

/**
 * <p>ログをフラッシュします。SQL 文 <i>FLUSH LOGS</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_LOG', 2);

/**
 * <p>レプリケーションのマスタ側のサーバーで、 バイナリログインデックスにあるバイナリログファイルを削除してインデックスファイルを切り詰めます。 SQL 文 <i>RESET MASTER</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_MASTER', 128);

/**
 * <p>レプリケーションのスレーブ側のサーバーで、 マスタサーバーの情報をリセットしてスレーブを再起動します。 SQL 文 <i>RESET SLAVE</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_SLAVE', 64);

/**
 * <p>状態変数をリセットします。SQL 文 <i>FLUSH STATUS</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_STATUS', 16);

/**
 * <p>テーブルキャッシュをフラッシュします。SQL 文 <i>FLUSH TABLES</i> を実行するのと同じです。</p>
 */
define('MYSQLI_REFRESH_TABLES', 4);

/**
 * <p>スレッドキャッシュをフラッシュします。</p>
 */
define('MYSQLI_REFRESH_THREADS', 32);

/**
 * <p>すべてのオプションを有効にします (すべてを報告します)。</p>
 */
define('MYSQLI_REPORT_ALL', 255);

/**
 * <p>mysqli 関数コールのエラーを報告します。</p>
 */
define('MYSQLI_REPORT_ERROR', 1);

/**
 * <p>クエリ内でインデックスが使われていなかったり間違ったインデックスを使っていたりする場合に報告します。</p>
 */
define('MYSQLI_REPORT_INDEX', 4);

/**
 * <p>報告を無効にします。</p>
 */
define('MYSQLI_REPORT_OFF', 0);

/**
 * <p>エラー時に、警告の代わりに <i>mysqli_sql_exception</i> をスローします。</p>
 */
define('MYSQLI_REPORT_STRICT', 2);

define('MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED', 16);

define('MYSQLI_SERVER_QUERY_NO_INDEX_USED', 32);

define('MYSQLI_SET_CHARSET_NAME', 7);

/**
 * <p>フィールドは <i>SET</i> と定義されています。</p>
 */
define('MYSQLI_SET_FLAG', 2048);

define('MYSQLI_STMT_ATTR_CURSOR_TYPE', 1);

define('MYSQLI_STMT_ATTR_PREFETCH_ROWS', 2);

define('MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH', 0);

/**
 * <p>結果セットをバッファに格納します。</p>
 */
define('MYSQLI_STORE_RESULT', 0);

/**
 * <p>フィールドは <i>TIMESTAMP</i> と定義されています。</p>
 */
define('MYSQLI_TIMESTAMP_FLAG', 1024);

/**
 * <p>"AND CHAIN" を <code>mysqli_commit()</code> あるいは <code>mysqli_rollback()</code> に追加します。</p>
 */
define('MYSQLI_TRANS_COR_AND_CHAIN', 1);

/**
 * <p>"AND NO CHAIN" を <code>mysqli_commit()</code> あるいは <code>mysqli_rollback()</code> に追加します。</p>
 */
define('MYSQLI_TRANS_COR_AND_NO_CHAIN', 2);

/**
 * <p>"NO RELEASE" を <code>mysqli_commit()</code> あるいは <code>mysqli_rollback()</code> に追加します。</p>
 */
define('MYSQLI_TRANS_COR_NO_RELEASE', 8);

/**
 * <p>"RELEASE" を <code>mysqli_commit()</code> あるいは <code>mysqli_rollback()</code> に追加します。</p>
 */
define('MYSQLI_TRANS_COR_RELEASE', 4);

/**
 * <p><code>mysqli_begin_transaction()</code> で、 トランザクションを "START TRANSACTION WITH CONSISTENT SNAPSHOT" で開始します。</p>
 */
define('MYSQLI_TRANS_START_CONSISTENT_SNAPSHOT', null);

/**
 * <p><code>mysqli_begin_transaction()</code> で、 トランザクションを "START TRANSACTION READ ONLY" で開始します。</p>
 */
define('MYSQLI_TRANS_START_READ_ONLY', 4);

/**
 * <p><code>mysqli_begin_transaction()</code> で、 トランザクションを "START TRANSACTION READ WRITE" で開始します。</p>
 */
define('MYSQLI_TRANS_START_READ_WRITE', 2);

/**
 * <p>フィールドは <i>BIT</i> と定義されています (MySQL 5.0.3 以降)。</p>
 */
define('MYSQLI_TYPE_BIT', 16);

/**
 * <p>フィールドは <i>BLOB</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_BLOB', 252);

/**
 * <p>フィールドは <i>TINYINT</i> と定義されています。 <i>CHAR</i> については <i>MYSQLI_TYPE_STRING</i> を参照ください。</p>
 */
define('MYSQLI_TYPE_CHAR', 1);

/**
 * <p>フィールドは <i>DATE</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_DATE', 10);

/**
 * <p>フィールドは <i>DATETIME</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_DATETIME', 12);

/**
 * <p>フィールドは <i>DECIMAL</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_DECIMAL', 0);

/**
 * <p>フィールドは <i>DOUBLE</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_DOUBLE', 5);

/**
 * <p>フィールドは <i>ENUM</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_ENUM', 247);

/**
 * <p>フィールドは <i>FLOAT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_FLOAT', 4);

/**
 * <p>フィールドは <i>GEOMETRY</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_GEOMETRY', 255);

/**
 * <p>フィールドは <i>MEDIUMINT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_INT24', 9);

/**
 * <p>フィールドは <i>INTERVAL</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_INTERVAL', 247);

/**
 * <p>フィールドは <i>INT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_LONG', 3);

/**
 * <p>フィールドは <i>LONGBLOB</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_LONG_BLOB', 251);

/**
 * <p>フィールドは <i>BIGINT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_LONGLONG', 8);

/**
 * <p>フィールドは <i>MEDIUMBLOB</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_MEDIUM_BLOB', 250);

/**
 * <p>フィールドは <i>DATE</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_NEWDATE', 14);

/**
 * <p>精密な <i>DECIMAL</i> あるいは <i>NUMERIC</i> のフィールドです (MySQL 5.0.3 以降)。</p>
 */
define('MYSQLI_TYPE_NEWDECIMAL', 246);

/**
 * <p>フィールドは <i>DEFAULT NULL</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_NULL', 6);

/**
 * <p>フィールドは <i>SET</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_SET', 248);

/**
 * <p>フィールドは <i>SMALLINT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_SHORT', 2);

/**
 * <p>フィールドは <i>STRING</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_STRING', 254);

/**
 * <p>フィールドは <i>TIME</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_TIME', 11);

/**
 * <p>フィールドは <i>TIMESTAMP</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_TIMESTAMP', 7);

/**
 * <p>フィールドは <i>TINYINT</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_TINY', 1);

/**
 * <p>フィールドは <i>TINYBLOB</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_TINY_BLOB', 249);

/**
 * <p>フィールドは <i>VARCHAR</i> あるいは <i>BINARY</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_VAR_STRING', 253);

/**
 * <p>フィールドは <i>YEAR</i> と定義されています。</p>
 */
define('MYSQLI_TYPE_YEAR', 13);

/**
 * <p>フィールドは、ユニークキーの一部です。</p>
 */
define('MYSQLI_UNIQUE_KEY_FLAG', 4);

/**
 * <p>フィールドは <i>UNSIGNED</i> と定義されています。</p>
 */
define('MYSQLI_UNSIGNED_FLAG', 32);

/**
 * <p>結果セットをバッファに格納しません。</p>
 */
define('MYSQLI_USE_RESULT', 1);

/**
 * <p>フィールドは <i>ZEROFILL</i> と定義されています。</p>
 */
define('MYSQLI_ZEROFILL_FLAG', 64);

