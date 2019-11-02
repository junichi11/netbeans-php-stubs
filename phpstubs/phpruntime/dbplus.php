<?php



namespace {

	/**
	 * リレーションにタプルを追加する
	 * <p>タプルをリレーション <code>relation</code> に追加します。</p>
	 * @param resource $relation
	 * @param array $tuple <p>属性/値の組の配列であり、 指定した <code>relation</code> に挿入されます。</p> <p>実行に成功すると <code>tuple</code> 配列には新規に生成されたタプルの 完全なデータが含まれ、そこにはシーケンスのような暗黙の内に設定 される全てのドメインが含まれます。</p>
	 * @return int <p>この関数は、成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-add.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_add($relation, array $tuple): int {}

	/**
	 * AQL クエリを実行する
	 * <p>AQL <code>query</code> を、指定した <code>server</code> および <code>dbpath</code> で実行します。</p>
	 * @param string $query <p>AQL (Algebraic Query Language) に関するより詳細な情報については、 オリジナルの db++ マニュアルで提供されています。</p>
	 * @param string $server
	 * @param string $dbpath
	 * @return resource <p>成功時に関係ハンドルを返します。結果データは、 <code>dbplus_next()</code> および <code>dbplus_curr()</code> をコールすることにより、このリレーションから取得可能です。 他のリレーションアクセス関数は結果のリレーションで動作しません。</p>
	 * @link https://php.net/manual/ja/function.dbplus-aql.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_aql(string $query, string $server = NULL, string $dbpath = NULL) {}

	/**
	 * データベース仮想カレントディレクトリを設定/取得する
	 * <p><code>dbplus_open()</code> でリレーションファイルを探す際の 仮想カレントディレクトリを変更します。</p>
	 * @param string $newdir <p>リレーションファイルの新しいディレクトリ。このパラメータを省略すると、 現在の作業ディレクトリで探します。</p>
	 * @return string <p>カレントディレクトリの絶対パスを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-chdir.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_chdir(string $newdir = NULL): string {}

	/**
	 * リレーションを閉じる
	 * <p><code>dbplus_open()</code> でオープンしたリレーションを閉じます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>DBPLUS_ERR_UNKNOWN</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-close.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_close($relation) {}

	/**
	 * リレーションからカレントタプルを取得する
	 * <p>指定した <code>relation</code> について、カレントタプルに関するデータを読み込みます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple <p>データがこのパラメータに連想配列として返されます。</p>
	 * @return int <p>この関数は、成功時にゼロ (すなわち <b><code>DBPLUS_ERR_NOERR</code></b>)、失敗時に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-curr.php
	 * @see dbplus_first(), dbplus_prev(), dbplus_next(), dbplus_last(), dbplus_errcode()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_curr($relation, array &$tuple): int {}

	/**
	 * 指定したエラーコードまたは直近のエラーに関するエラー文字列を取得する
	 * <p>指定したエラーコードに対応するエラー文字列を返します。</p>
	 * @param int $errno <p>エラーコード。指定しなかった場合は、直近の db++ 操作の結果コードを使用します。</p>
	 * @return string <p>エラーメッセージを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-errcode.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_errcode(int $errno = NULL): string {}

	/**
	 * 直近の操作に関するエラーコードを取得する
	 * <p>直近の db++ 操作からのエラーコードを返します。</p>
	 * @return int <p>エラーコードを表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-errno.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_errno(): int {}

	/**
	 * リレーションに拘束を設定する
	 * <p>指定したリレーション <code>relation</code> に拘束を設定します。</p><p>この後、<code>dbplus_curr()</code> または <code>dbplus_next()</code> のような関数をコールすると、 指定した拘束にマッチするタプルのみが取得されます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $constraints <p>拘束は、ドメイン名、比較演算子、比較値を含む複合文字列です。 パラメータ配列 <code>constraints</code> は文字列の配列で、 この各要素は、ドメイン、演算子、値を含むか、 複数の三要素からなる文字列の配列です。</p> <p>比較演算子は、以下の文字列のどれかとなります。 正規表現による検索には、'==', '&gt;', '&gt;=', '&lt;', '&lt;=', '!=', '~'、ビット演算には 'BAND' または 'BOR' を使用します。</p>
	 * @param mixed $tuple
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-find.php
	 * @see dbplus_unselect()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_find($relation, array $constraints, $tuple): int {}

	/**
	 * リレーションから最初のタプルを取得する
	 * <p>指定したリレーション <code>relation</code> の最初のタプルのデータを読み込み、 連想配列として <code>tuple</code> に返します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-first.php
	 * @see dbplus_curr(), dbplus_prev(), dbplus_next(), dbplus_last(), dbplus_errcode()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_first($relation, array &$tuple): int {}

	/**
	 * リレーションに行った全ての変更をフラッシュする
	 * <p>直近のフラッシュ以降にリレーション <code>relation</code> に適用されたすべての変更をディスクに書き込みます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-flush.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_flush($relation): int {}

	/**
	 * このクライアントにより保持された全てのロックを解放する
	 * <p>このクライアントによりロックされたタプルを全て解放します。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-freealllocks.php
	 * @see dbplus_getlock(), dbplus_freelock(), dbplus_freerlocks()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_freealllocks(): int {}

	/**
	 * タプルの書き込みロックを解放する
	 * <p><code>dbplus_getlock()</code> より以前に得た指定 <code>tuple</code> の書き込みロックを解放します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param string $tuple
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-freelock.php
	 * @see dbplus_getlock(), dbplus_freerlocks(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_freelock($relation, string $tuple): int {}

	/**
	 * 指定したリレーションに関する全てのタプルロックを解放する
	 * <p>指定した <code>relation</code> で保持されている全てのタプルロックを解放します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-freerlocks.php
	 * @see dbplus_getlock(), dbplus_freelock(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_freerlocks($relation): int {}

	/**
	 * タプルの書き込みロックを取得する
	 * <p>指定した <code>tuple</code> へ書き込みロックを要求します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param string $tuple
	 * @return int <p>成功時にゼロ、失敗時にゼロでないコード、特に <b><code>DBPLUS_ERR_WLOCKED</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-getlock.php
	 * @see dbplus_freelock(), dbplus_freerlocks(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_getlock($relation, string $tuple): int {}

	/**
	 * あるリレーションのユニークな ID 番号を取得する
	 * <p>指定した <code>relation</code> に関してユニークであることが保証 された数を取得し、<code>uniqueid</code> で指定した変数にその数を代入します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param int $uniqueid
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-getunique.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_getunique($relation, int $uniqueid): int {}

	/**
	 * リレーションについての情報を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> が返すリレーション。</p>
	 * @param string $key
	 * @param array $result
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-info.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_info($relation, string $key, array &$result): int {}

	/**
	 * リレーションから直近のタプルを取得する
	 * <p>指定した <code>relation</code> から直近のタプルに関するデータを読み込み、 <code>tuple</code> に連想配列として代入します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。 code on failure.</p>
	 * @link https://php.net/manual/ja/function.dbplus-last.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_prev(), dbplus_next()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_last($relation, array &$tuple): int {}

	/**
	 * リレーションに書き込みロックを要求する
	 * <p>指定した <code>relation</code> に書き込みロックを要求します。</p><p>他のクライアントからリレーションに対してクエリを実行することはできますが、 ロックされている間は更新できません。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-lockrel.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_lockrel($relation): int {}

	/**
	 * リレーションから次のタプルを取得する
	 * <p>指定した <code>relation</code> の次のタプルからデータを読み込み、 <code>tuple</code> に連想配列として返します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-next.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_prev(), dbplus_last()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_next($relation, array &$tuple): int {}

	/**
	 * リレーションファイルをオープンする
	 * <p>指定したリレーションファイルをオープンします。</p>
	 * @param string $name <p>ファイル名またはリレーション、絶対パス名とします。 これは、指定したパス名及びサーバー上の絶対リレーションファイル パス名を常にマップします。</p>
	 * @return resource <p>成功時にリレーションファイルリソース(カーソル)が返されます。これは、 このリレーションを参照する以降の全てのコマンドで使用されます。 失敗時にはゼロが返されます。実際のエラーコードは、 <code>dbplus_errno()</code> により取得可能です。</p>
	 * @link https://php.net/manual/ja/function.dbplus-open.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_open(string $name) {}

	/**
	 * リレーションから前のタプルを取得する
	 * <p>指定した <code>relation</code> から前のタプルのデータを読み込み、 <code>tuple</code> に連想配列として返します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @return int <p>成功した場合に <b><code>DBPLUS_ERR_NOERR</code></b>、 失敗した場合に db++ エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-prev.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_next(), dbplus_last()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_prev($relation, array &$tuple): int {}

	/**
	 * リレーションの許可属性を変更する
	 * <p><code>mask</code>, <code>user</code>,<code>group</code> で 指定した許可属性に変更します。これらの値はオペレーティングシステムに依存します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param int $mask
	 * @param string $user
	 * @param string $group
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-rchperm.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rchperm($relation, int $mask, string $user, string $group): int {}

	/**
	 * 新しい DB++ リレーションを作成する
	 * <p>新しいリレーションを作成します。同名の既存のリレーションは、 そのリレーションが現在使用されておらず、 <code>overwrite</code> に TRUE が設定されている場合にのみ上書きされます。</p>
	 * @param string $name
	 * @param mixed $domlist <p>ドメインの組み合わせ。単一のドメイン名を表す文字列か、 ドメイン名の配列となります。</p> <p>このパラメータにはドメインを示す文字列の配列で 新規リレーションのドメインを指定する必要があります。 ドメイン指定文字列は、このリレーションへのユニークなドメイン名、スラッシュ、 型指定文字からなります。利用可能な型指定子及びその意味については、 db++ のドキュメント、特に dbcreate(1) のマニュアルを参照ください。</p>  <p><b>注意</b>:</p> <p>この関数には、複数のドメインを空白で区切った文字列を指定することもできます。 しかし、配列を使用することを推奨します。</p>
	 * @param bool $overwrite
	 * @return resource
	 * @link https://php.net/manual/ja/function.dbplus-rcreate.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcreate(string $name, $domlist, bool $overwrite = NULL) {}

	/**
	 * インデックスを含む、リレーションの空のコピーを作成する
	 * <p><b>dbplus_rcrtexact()</b> は、 指定した <code>relation</code> の空のコピーを <code>name</code> という名前で作成します。</p>
	 * @param string $name
	 * @param resource $relation <p>コピーするリレーション。<code>dbplus_open()</code> でオープンしたもの。</p>
	 * @param bool $overwrite <p>このパラメータが <b><code>TRUE</code></b> であり 他のプロセスがそのリレーションを使用していない場合にのみ、 同じ名前の既存のリレーションが上書きされます。</p>
	 * @return mixed <p>成功した場合にリソース、失敗した場合に <b><code>DBPLUS_ERR_UNKNOWN</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-rcrtexact.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcrtexact(string $name, $relation, bool $overwrite = NULL) {}

	/**
	 * デフォルトのインデックスで、リレーションの空のコピーを作成する
	 * <p><b>dbplus_rcrtlike()</b> は、 指定した <code>relation</code> の空のコピーを <code>name</code> という名前で作成しますが、デフォルトの インデックスを使用します。</p>
	 * @param string $name
	 * @param resource $relation <p>コピーするリレーション。<code>dbplus_open()</code> でオープンしたもの。</p>
	 * @param int $overwrite <p>このパラメータが <b><code>TRUE</code></b> であり 他のプロセスがそのリレーションを使用していない場合にのみ、 同じ名前の既存のリレーションが上書きされます。</p>
	 * @return mixed <p>成功した場合にリソース、失敗した場合に <b><code>DBPLUS_ERR_UNKNOWN</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-rcrtlike.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcrtlike(string $name, $relation, int $overwrite = NULL) {}

	/**
	 * リレーションのホスト情報を取得する
	 * <p><b>dbplus_resolve()</b> は指定された <code>relation_name</code> を解決し、内部サーバー ID・ 実際のホスト名およびホスト上のデータベースのパスを取得します。</p>
	 * @param string $relation_name <p>リレーション名。</p>
	 * @return array <p>キー <i>sid</i>、<i>host</i> および <i>host_path</i> を含む配列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-resolve.php
	 * @see dbplus_tcl()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_resolve(string $relation_name): array {}

	/**
	 * 位置を復元する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-restorepos.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_restorepos($relation, array $tuple): int {}

	/**
	 * リレーションの主キーを新規に指定する
	 * <p><b>dbplus_rkeys()</b> は、 <code>relation</code> に指定された現在の主キーを、 <code>domlist</code> で指定されたドメインに変更します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param mixed $domlist <p>ドメインの組み合わせ。ドメイン名を含む文字列あるいは 複数のドメイン名を含む配列を渡します。</p>
	 * @return mixed <p>成功した場合にリソース、失敗した場合に <b><code>DBPLUS_ERR_UNKNOWN</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-rkeys.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rkeys($relation, $domlist) {}

	/**
	 * リレーションファイルをローカルにオープンする
	 * <p><b>dbplus_ropen()</b> は、クライアント/サーバー間の オーバーヘッドを防いですばやくアクセスするために、リレーション <code>file</code> をローカルにオープンします。 アクセスは読み込み専用となり、返されるリレーションを利用できるのは <code>dbplus_curr()</code> および <code>dbplus_next()</code> のみとなります。</p>
	 * @param string $name
	 * @return resource
	 * @link https://php.net/manual/ja/function.dbplus-ropen.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_ropen(string $name) {}

	/**
	 * ローカル (raw) AQL クエリを実行する
	 * <p><b>dbplus_rquery()</b> は、db++ クライアントライブラリに組み込まれた AQL インタプリタを使用してローカル(raw) AQL クエリを実行します。 <b>dbplus_rquery()</b> は <code>dbplus_aql()</code> より高速ですが、 ローカルのデータについてのみしか実行できません。</p>
	 * @param string $query
	 * @param string $dbpath
	 * @return resource
	 * @link https://php.net/manual/ja/function.dbplus-rquery.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rquery(string $query, string $dbpath = NULL) {}

	/**
	 * リレーションの名前を変更する
	 * <p><b>dbplus_rrename()</b> は、 <code>relation</code> の名前を <code>name</code> に変更します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param string $name
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-rrename.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rrename($relation, string $name): int {}

	/**
	 * リレーションに新規セカンダリインデックスを作成する
	 * <p><b>dbplus_rsecindex()</b> は、 <code>relation</code> に新しいセカンダリインデックスを作成します。 このインデックスには <code>domlist</code> で指定したドメインが含まれ、型は <code>type</code> です。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param mixed $domlist <p>ドメイン名の組み合わせ。単一のドメイン名を含む文字列あるいは 複数のドメイン名を含む配列を渡します。</p>
	 * @param int $type
	 * @return mixed <p>成功した場合にリソース、失敗した場合に <b><code>DBPLUS_ERR_UNKNOWN</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbplus-rsecindex.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rsecindex($relation, $domlist, int $type) {}

	/**
	 * ファイルシステムからリレーションを削除する
	 * <p><b>dbplus_runlink()</b> は、 <code>relation</code> を閉じて削除します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-runlink.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_runlink($relation): int {}

	/**
	 * リレーションから全てのタプルを削除する
	 * <p><b>dbplus_rzap()</b> は、 <code>relation</code> からタプルをすべて削除します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-rzap.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_rzap($relation): int {}

	/**
	 * 位置を保存する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-savepos.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_savepos($relation): int {}

	/**
	 * インデックスを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param string $idx_name
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-setindex.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_setindex($relation, string $idx_name): int {}

	/**
	 * インデックスを数字で設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param int $idx_number
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-setindexbynumber.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_setindexbynumber($relation, int $idx_number): int {}

	/**
	 * SQL クエリを実行する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $query
	 * @param string $server
	 * @param string $dbpath
	 * @return resource
	 * @link https://php.net/manual/ja/function.dbplus-sql.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_sql(string $query, string $server = NULL, string $dbpath = NULL) {}

	/**
	 * サーバー側で TCL コードを実行する
	 * <p>db++ サーバーは、各クライアント接続について TCL インタプリタを準備します。 このインタプリタは、ある種のストアドプロシージャとしてクライアントに 指定された TCL コードをサーバーで実行するもので、 クライアント/サーバー間のデータ伝送及びコンテキスト切替を回避し、 データベース処理性能を改善するために使用されます。</p><p><b>dbplus_tcl()</b> は、TCL <code>script</code> コードが実行される、クライアント接続 ID を必要とします。<code>dbplus_resolve()</code> が、この接続 ID を返します。この関数は、TCL コードの返り値または TCL コードが失敗 した場合には、TCL エラーメッセージを返します。</p>
	 * @param int $sid
	 * @param string $script
	 * @return string
	 * @link https://php.net/manual/ja/function.dbplus-tcl.php
	 * @see dbplus_resolve()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_tcl(int $sid, string $script): string {}

	/**
	 * タプルを削除し、新規カレントタプルを返す
	 * <p><b>dbplus_tremove()</b> は、関係の中のタプルに完全に 一致する場合、<code>tuple</code> を削除します。 <code>current</code> が指定された場合、 <b>dbplus_tremove()</b> をコールした後、新規のカレントの タプルのデータが代入されます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $tuple
	 * @param array $current
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-tremove.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_tremove($relation, array $tuple, array &$current = NULL): int {}

	/**
	 * 元に戻す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-undo.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_undo($relation): int {}

	/**
	 * 元に戻す準備をする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-undoprepare.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_undoprepare($relation): int {}

	/**
	 * リレーションの書き込みロックを中断する
	 * <p>以前 <code>dbplus_lockrel()</code> により得られた書き込みロックを開放します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-unlockrel.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_unlockrel($relation): int {}

	/**
	 * リレーションから制約を削除する
	 * <p><b>dbplus_unselect()</b> をコールすると、 <code>dbplus_find()</code> により <code>relation</code> に設定された制約が削除されます。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-unselect.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_unselect($relation): int {}

	/**
	 * リレーション内の指定したタプルを更新する
	 * <p><b>dbplus_update()</b> は、<code>old</code> で指定したタプル <code>new</code> からのデータで置換します。 置換が行われるのは、<code>old</code> が <code>relation</code> の中のタプルに完全に一致する場合のみです。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @param array $old <p>古いタプルの内容。</p>
	 * @param array $new <p>新しいタプルの内容。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-update.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_update($relation, array $old, array $new): int {}

	/**
	 * リレーションの排他的ロックを要求する
	 * <p><code>relation</code> に他のクライアントからの読み込み アクセスさえ拒否する排他的ロックを要求します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-xlockrel.php
	 * @see dbplus_xunlockrel()
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_xlockrel($relation): int {}

	/**
	 * リレーションの排他的ロックを解放する
	 * <p>以前に <code>dbplus_xlockrel()</code> で取得した排他的ロックを開放します。</p>
	 * @param resource $relation <p><code>dbplus_open()</code> でオープンしたリレーション。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.dbplus-xunlockrel.php
	 * @since PHP 4 <= 4.1.0, PECL dbplus >= 0.9
	 */
	function dbplus_xunlockrel($relation): int {}

}
