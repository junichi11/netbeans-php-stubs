<?php



/**
 * <p>このクラスは整数値を含むハッシュをラップするもので、ハッシュの値もまた定数値となります。 このハッシュは ArrayAccess インターフェイスも実装しています。</p>
 * <p>Iterator インターフェイスも実装しているので foreach で順にたどることもできます。 このときに要素が返される順番は保証されません。</p>
 * @link http://php.net/manual/ja/class.quickhashinthash.php
 * @since PECL quickhash >= Unknown
 */
class QuickHashIntHash {

	/**
	 * @var integer <p>有効にすると、重複する要素を (add() や loadFromFile() で) セットに追加しようとしたときにその要素がセットから削除されます。 余分な時間がかかるので、必要なときだけ使うようにしましょう。</p>
	 * @link http://php.net/manual/ja/class.quickhashinthash.php
	 */
	const CHECK_FOR_DUPES = 1;

	/**
	 * @var integer <p>PHP の内部メモリマネージャを使わないようにします。このオプションを有効にすると、 内部的に確保したメモリが memory_limit の設定に影響を及ぼさなくなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashinthash.php
	 */
	const DO_NOT_USE_ZEND_ALLOC = 2;

	/**
	 * @var integer <p>ハッシュ関数を使わず、単純な剰余を使ってインデックスを探すようにします。 通常のハッシュほど高速ではないし、衝突の発生も多くなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashinthash.php
	 */
	const HASHER_NO_HASH = 256;

	/**
	 * @var integer <p>これがデフォルトのハッシュ関数で、整数値のハッシュをリストのインデックスに変換します。</p>
	 * @link http://php.net/manual/ja/class.quickhashinthash.php
	 */
	const HASHER_JENKINS1 = 512;

	/**
	 * @var integer <p>別のハッシュアルゴリズムを使います。</p>
	 * @link http://php.net/manual/ja/class.quickhashinthash.php
	 */
	const HASHER_JENKINS2 = 1024;

	/**
	 * 新しい QuickHashIntHash オブジェクトを作る
	 * <p>新しい QuickHashIntHash オブジェクトを作ります。 size には、バケツリストの数を指定します。リストが多ければ多いほど、 衝突が少なくなります。オプションもサポートしています。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>次のオプションが使えます。 QuickHashIntHash::CHECK_FOR_DUPES は、重複するエントリをハッシュに追加できないようにします。 QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC は、PHP の内部メモリマネージャを使わないようにします。 QuickHashIntHash::HASHER_NO_HASH、 QuickHashIntHash::HASHER_JENKINS1 あるいは QuickHashIntHash::HASHER_JENKINS2 のいずれかで、利用するハッシュアルゴリズムを指定します。 すべてのオプションは、ビットマスクで組み合わせて使えます。</p>
	 * @return self <p>新しい QuickHashIntHash オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.construct.php
	 * @since PECL quickhash >= Unknown
	 */
	public function __construct(int $size, int $options = NULL) {}

	/**
	 * 新たなエントリをハッシュに追加する
	 * <p>このメソッドは、新たなエントリをハッシュに追加して追加に成功したかどうかを返します。 ハッシュの作成時に QuickHashIntHash::CHECK_FOR_DUPES を渡さない限り、 エントリの追加はデフォルトで常に成功します。</p>
	 * @param int $key <p>追加するエントリのキー。</p>
	 * @param int $value <p>追加するエントリの値 (オプション)。 値を省略した場合は <i>1</i> を追加します。</p>
	 * @return bool <p>エントリが追加された場合に <b><code>TRUE</code></b>、追加されなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.add.php
	 * @since PECL quickhash >= Unknown
	 */
	public function add(int $key, int $value = NULL): bool {}

	/**
	 * エントリをハッシュから削除する
	 * <p>このメソッドはエントリをハッシュから削除し、削除できたかどうかを返します。 関連づけられていたデータのメモリはその場では解放されず、 ハッシュ自体を解放するときに同時に解放されます。</p><p>ハッシュをイテレータで利用しているときには要素を削除できません。 このメソッドは例外をスローせず、単に <b><code>FALSE</code></b> を返すだけなので、 その他の理由で削除に失敗したときと同じようになります。</p>
	 * @param int $key <p>削除するエントリのキー。</p>
	 * @return bool <p>エントリが削除されたときに <b><code>TRUE</code></b>、削除されなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.delete.php
	 * @since PECL quickhash >= Unknown
	 */
	public function delete(int $key): bool {}

	/**
	 * キーがハッシュに存在するかどうかを調べる
	 * <p>指定したキーのエントリがハッシュに存在するかどうかを調べます。</p>
	 * @param int $key <p>ハッシュ内に存在するかどうかを調べたいキー。</p>
	 * @return bool <p>エントリが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.exists.php
	 * @since PECL quickhash >= Unknown
	 */
	public function exists(int $key): bool {}

	/**
	 * キーを指定してハッシュから値を取得する
	 * <p>キーを指定してハッシュから値を取得します。</p>
	 * @param int $key <p>エントリのキー。</p>
	 * @return int <p>キーが存在する場合はその値、キーが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.get.php
	 * @since PECL quickhash >= Unknown
	 */
	public function get(int $key): int {}

	/**
	 * ハッシュの要素数を返す
	 * <p>ハッシュの要素数を返します。</p>
	 * @return int <p>ハッシュの要素数を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.getsize.php
	 * @since PECL quickhash >= Unknown
	 */
	public function getSize(): int {}

	/**
	 * ファイルからハッシュを作るファクトリーメソッド
	 * <p>ディスク上の定義ファイルから新しいハッシュを作るファクトリーメソッドです。 ファイルフォーマットは、まずシグネチャ 'QH\0x11\0'、 そして要素数を表す 32 ビット符号付き整数値 (システムと同じエンディアン)、 その後に、システムと同じエンディアンでパックされた 32 ビット符号付き整数値が続きます。 ハッシュの各要素が、二つの 32 ビット符号付き整数値として格納されています。 最初の値がキー、そして次がそのキーの値となります。 以下に例を示します。</p><p></p><p><b>例1 QuickHash IntHash ファイルフォーマット</b></p><p></p><p><b>例2 QuickHash IntHash ファイルフォーマット</b></p>
	 * @param string $filename <p>ハッシュを読み込むファイルのファイル名。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntHash <p>新しい QuickHashIntHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.loadfromfile.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromFile(string $filename, int $options = NULL): \QuickHashIntHash {}

	/**
	 * 文字列からハッシュを作るファクトリーメソッド
	 * <p>文字列の定義から新しいハッシュを作るファクトリーメソッドです。 ファイルのフォーマットは、システムと同じエンディアンでパックされた 32 ビット符号付き整数値になります。 ハッシュの各要素が、二つの 32 ビット符号付き整数値として格納されています。 最初の値がキー、そして次がそのキーの値となります。</p>
	 * @param string $contents <p>ハッシュをシリアライズした文字列。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntHash <p>新しい QuickHashIntHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.loadfromstring.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromString(string $contents, int $options = NULL): \QuickHashIntHash {}

	/**
	 * メモリ上のハッシュをディスクに保存する
	 * <p>このメソッドは、既存のハッシュをディスクに保存します。 loadFromFile() で読めるフォーマットになります。</p>
	 * @param string $filename <p>ハッシュの保存先のファイル名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.savetofile.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToFile(string $filename): void {}

	/**
	 * シリアライズしたハッシュを返す
	 * <p>このメソッドは、シリアライズしたハッシュを返します。 loadFromString() で読めるフォーマットになります。</p>
	 * @return string <p>このメソッドは、ハッシュをシリアライズした文字列を返します。 各要素は 4 バイトの値となり、システムで使っているのと同じエンディアンになります。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.savetostring.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToString(): string {}

	/**
	 * ハッシュ内のエントリの値を更新 (エントリが存在しない場合は新しく追加) する
	 * <p>このメソッドは、エントリを新しい値で更新します。 エントリが存在しない場合は新しく追加します。エントリを追加したのか更新したのかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashIntHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param int $key <p>追加あるいは更新するエントリのキー。</p>
	 * @param int $value <p>エントリに新しく設定する値。</p>
	 * @return bool <p>エントリが見つかって更新できたときに 2、エントリを新しく追加したときに 1、 エラーが発生したときに 0 を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.set.php
	 * @since PECL quickhash >= Unknown
	 */
	public function set(int $key, int $value): bool {}

	/**
	 * ハッシュのエントリを新しい値で更新する
	 * <p>このメソッドはエントリを新しい値で更新し、更新できたかどうかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashIntHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param int $key <p>更新するエントリのキー。</p>
	 * @param int $value <p>新しい値。</p>
	 * @return bool <p>エントリが見つかって更新できたときに <b><code>TRUE</code></b>、 エントリが見つからなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashinthash.update.php
	 * @since PECL quickhash >= Unknown
	 */
	public function update(int $key, int $value): bool {}
}

/**
 * <p>このクラスは整数値を含むセットをラップします。</p>
 * <p>Iterator インターフェイスも実装しているので foreach で順にたどることもできます。 このときに要素が返される順番は保証されません。</p>
 * @link http://php.net/manual/ja/class.quickhashintset.php
 * @since PECL quickhash >= Unknown
 */
class QuickHashIntSet {

	/**
	 * @var integer <p>有効にすると、重複する要素を (add() や loadFromFile() で) セットに追加しようとしたときにその要素がセットから削除されます。 余分な時間がかかるので、必要なときだけ使うようにしましょう。</p>
	 * @link http://php.net/manual/ja/class.quickhashintset.php
	 */
	const CHECK_FOR_DUPES = 1;

	/**
	 * @var integer <p>PHP の内部メモリマネージャを使わないようにします。このオプションを有効にすると、 内部的に確保したメモリが memory_limit の設定に影響を及ぼさなくなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashintset.php
	 */
	const DO_NOT_USE_ZEND_ALLOC = 2;

	/**
	 * @var integer <p>ハッシュ関数を使わず、単純な剰余を使ってインデックスを探すようにします。 通常のハッシュほど高速ではないし、衝突の発生も多くなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashintset.php
	 */
	const HASHER_NO_HASH = 256;

	/**
	 * @var integer <p>これがデフォルトのハッシュ関数で、整数値のハッシュをリストのインデックスに変換します。</p>
	 * @link http://php.net/manual/ja/class.quickhashintset.php
	 */
	const HASHER_JENKINS1 = 512;

	/**
	 * @var integer <p>別のハッシュアルゴリズムを使います。</p>
	 * @link http://php.net/manual/ja/class.quickhashintset.php
	 */
	const HASHER_JENKINS2 = 1024;

	/**
	 * 新しい QuickHashIntSet オブジェクトを作る
	 * <p>新しい QuickHashIntSet オブジェクトを作ります。 size には、バケツリストの数を指定します。リストが多ければ多いほど、 衝突が少なくなります。オプションもサポートしています。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>次のオプションが使えます。 QuickHashIntSet::CHECK_FOR_DUPES は、重複するエントリをハッシュに追加できないようにします。 QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC は、PHP の内部メモリマネージャを使わないようにします。 QuickHashIntSet::HASHER_NO_HASH、 QuickHashIntSet::HASHER_JENKINS1 あるいは QuickHashIntSet::HASHER_JENKINS2 のいずれかで、利用するハッシュアルゴリズムを指定します。 すべてのオプションは、ビットマスクで組み合わせて使えます。</p>
	 * @return self <p>新しい QuickHashIntSet オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.construct.php
	 * @since PECL quickhash >= Unknown
	 */
	public function __construct(int $size, int $options = NULL) {}

	/**
	 * 新たなエントリをセットに追加する
	 * <p>このメソッドは、新たなエントリをセットに追加して追加に成功したかどうかを返します。 セットの作成時に QuickHashIntSet::CHECK_FOR_DUPES を渡さない限り、 エントリの追加はデフォルトで常に成功します。</p>
	 * @param int $key <p>追加するエントリのキー。</p>
	 * @return bool <p>エントリが追加された場合に <b><code>TRUE</code></b>、追加されなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.add.php
	 * @since PECL quickhash >= Unknown
	 */
	public function add(int $key): bool {}

	/**
	 * エントリをセットから削除する
	 * <p>このメソッドはエントリをセットから削除し、削除できたかどうかを返します。 関連づけられていたデータのメモリはその場では解放されず、 セット自体を解放するときに同時に解放されます。</p>
	 * @param int $key <p>削除するエントリのキー。</p>
	 * @return bool <p>エントリが削除されたときに <b><code>TRUE</code></b>、削除されなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.delete.php
	 * @since PECL quickhash >= Unknown
	 */
	public function delete(int $key): bool {}

	/**
	 * キーがセットに存在するかどうかを調べる
	 * <p>指定したキーのエントリがセットに存在するかどうかを調べます。</p>
	 * @param int $key <p>セット内に存在するかどうかを調べたいキー。</p>
	 * @return bool <p>エントリが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.exists.php
	 * @since PECL quickhash >= Unknown
	 */
	public function exists(int $key): bool {}

	/**
	 * セットの要素数を返す
	 * <p>セットの要素数を返します。</p>
	 * @return int <p>セットの要素数を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.getsize.php
	 * @since PECL quickhash >= Unknown
	 */
	public function getSize(): int {}

	/**
	 * ファイルからセットを作るファクトリーメソッド
	 * <p>ディスク上の定義ファイルから新しいセットを作るファクトリーメソッドです。 ファイルフォーマットは、システムと同じエンディアンでパックされた 32 ビット符号付き整数値です。</p>
	 * @param string $filename <p>セットを読み込むファイルのファイル名。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntSet <p>新しい QuickHashIntSet を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.loadfromfile.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromFile(string $filename, int $size = NULL, int $options = NULL): \QuickHashIntSet {}

	/**
	 * 文字列からセットを作るファクトリーメソッド
	 * <p>文字列の定義から新しいセットを作るファクトリーメソッドです。 ファイルフォーマットは、システムと同じエンディアンでパックされた 32 ビット符号付き整数値です。</p>
	 * @param string $contents <p>セットをシリアライズした文字列。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntSet <p>新しい QuickHashIntSet を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintset.loadfromstring.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromString(string $contents, int $size = NULL, int $options = NULL): \QuickHashIntSet {}

	/**
	 * メモリ上のセットをディスクに保存する
	 * <p>このメソッドは、既存のセットをディスクに保存します。 loadFromFile() で読めるフォーマットになります。</p>
	 * @param string $filename <p>セットの保存先のファイル名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/quickhashintset.savetofile.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToFile(string $filename): void {}

	/**
	 * シリアライズしたセットを返す
	 * <p>このメソッドは、シリアライズしたセットを返します。 loadFromString() で読めるフォーマットになります。</p>
	 * @return string <p>このメソッドは、セットをシリアライズした文字列を返します。 各要素は 4 バイトの値となり、システムで使っているのと同じエンディアンになります。</p>
	 * @link http://php.net/manual/ja/quickhashintset.savetostring.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToString(): string {}
}

/**
 * <p>このクラスは整数値を含むハッシュをラップするもので、ハッシュの値は文字列となります。 このハッシュは ArrayAccess インターフェイスも実装しています。</p>
 * <p>Iterator インターフェイスも実装しているので foreach で順にたどることもできます。 このときに要素が返される順番は保証されません。</p>
 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
 * @since PECL quickhash >= Unknown
 */
class QuickHashIntStringHash {

	/**
	 * @var integer <p>有効にすると、重複する要素を (add() や loadFromFile() で) セットに追加しようとしたときにその要素がセットから削除されます。 余分な時間がかかるので、必要なときだけ使うようにしましょう。</p>
	 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
	 */
	const CHECK_FOR_DUPES = 1;

	/**
	 * @var integer <p>PHP の内部メモリマネージャを使わないようにします。このオプションを有効にすると、 内部的に確保したメモリが memory_limit の設定に影響を及ぼさなくなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
	 */
	const DO_NOT_USE_ZEND_ALLOC = 2;

	/**
	 * @var integer <p>ハッシュ関数を使わず、単純な剰余を使ってインデックスを探すようにします。 通常のハッシュほど高速ではないし、衝突の発生も多くなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
	 */
	const HASHER_NO_HASH = 256;

	/**
	 * @var integer <p>これがデフォルトのハッシュ関数で、整数値のハッシュをリストのインデックスに変換します。</p>
	 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
	 */
	const HASHER_JENKINS1 = 512;

	/**
	 * @var integer <p>別のハッシュアルゴリズムを使います。</p>
	 * @link http://php.net/manual/ja/class.quickhashintstringhash.php
	 */
	const HASHER_JENKINS2 = 1024;

	/**
	 * 新しい QuickHashIntStringHash オブジェクトを作る
	 * <p>新しい QuickHashIntStringHash オブジェクトを作ります。 size には、バケツリストの数を指定します。リストが多ければ多いほど、 衝突が少なくなります。オプションもサポートしています。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>次のオプションが使えます。 QuickHashIntStringHash::CHECK_FOR_DUPES は、重複するエントリをハッシュに追加できないようにします。 QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC は、PHP の内部メモリマネージャを使わないようにします。 QuickHashIntStringHash::HASHER_NO_HASH、 QuickHashIntStringHash::HASHER_JENKINS1 あるいは QuickHashIntStringHash::HASHER_JENKINS2. のいずれかで、利用するハッシュアルゴリズムを指定します。 すべてのオプションは、ビットマスクで組み合わせて使えます。</p>
	 * @return self <p>新しい QuickHashIntStringHash オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.construct.php
	 * @since PECL quickhash >= Unknown
	 */
	public function __construct(int $size, int $options = 0) {}

	/**
	 * 新たなエントリをハッシュに追加する
	 * <p>このメソッドは、新たなエントリをハッシュに追加して追加に成功したかどうかを返します。 ハッシュの作成時に QuickHashIntStringHash::CHECK_FOR_DUPES を渡さない限り、 エントリの追加はデフォルトで常に成功します。</p>
	 * @param int $key <p>追加するエントリのキー。</p>
	 * @param string $value <p>追加するエントリの値。 文字列以外を渡した場合は、可能であればそれを文字列に変換して追加します。</p>
	 * @return bool <p>エントリが追加された場合に <b><code>TRUE</code></b>、追加されなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.add.php
	 * @since PECL quickhash >= Unknown
	 */
	public function add(int $key, string $value): bool {}

	/**
	 * エントリをハッシュから削除する
	 * <p>このメソッドはエントリをハッシュから削除し、削除できたかどうかを返します。 関連づけられていたデータのメモリはその場では解放されず、 ハッシュ自体を解放するときに同時に解放されます。</p><p>ハッシュをイテレータで利用しているときには要素を削除できません。 このメソッドは例外をスローせず、単に <b><code>FALSE</code></b> を返すだけなので、 その他の理由で削除に失敗したときと同じようになります。</p>
	 * @param int $key <p>削除するエントリのキー。</p>
	 * @return bool <p>エントリが削除されたときに <b><code>TRUE</code></b>、削除されなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.delete.php
	 * @since PECL quickhash >= Unknown
	 */
	public function delete(int $key): bool {}

	/**
	 * キーがハッシュに存在するかどうかを調べる
	 * <p>指定したキーのエントリがハッシュに存在するかどうかを調べます。</p>
	 * @param int $key <p>ハッシュ内に存在するかどうかを調べたいキー。</p>
	 * @return bool <p>エントリが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.exists.php
	 * @since PECL quickhash >= Unknown
	 */
	public function exists(int $key): bool {}

	/**
	 * キーを指定してハッシュから値を取得する
	 * <p>キーを指定してハッシュから値を取得します。</p>
	 * @param int $key <p>エントリのキー。</p>
	 * @return mixed <p>キーが存在する場合はその値、キーが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.get.php
	 * @since PECL quickhash >= Unknown
	 */
	public function get(int $key) {}

	/**
	 * ハッシュの要素数を返す
	 * <p>ハッシュの要素数を返します。</p>
	 * @return int <p>ハッシュの要素数を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.getsize.php
	 * @since PECL quickhash >= Unknown
	 */
	public function getSize(): int {}

	/**
	 * ファイルからハッシュを作るファクトリーメソッド
	 * <p>ディスク上の定義ファイルから新しいハッシュを作るファクトリーメソッドです。 ファイルフォーマットは、まずシグネチャ 'QH\0x12\0'、 そして要素数を表す 32 ビット符号付き整数値 (システムと同じエンディアン)、 その後に、符号なし 32 ビット整数値で表した要素データの数と実際の文字が続きます。 この要素データの中にすべての文字列が含まれます。ヘッダーと文字列の後に、 各要素が二つの 32 ビット符号なし整数値として格納されています。 最初の値がキー、そして次がデータ文字列の中でのインデックスとなります。 以下に例を示します。</p><p></p><p><b>例1 QuickHash IntString ファイルフォーマット</b></p><p></p><p><b>例2 QuickHash IntString ファイルフォーマット</b></p>
	 * @param string $filename <p>ハッシュを読み込むファイルのファイル名。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntStringHash <p>新しい QuickHashIntStringHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.loadfromfile.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromFile(string $filename, int $size = 0, int $options = 0): \QuickHashIntStringHash {}

	/**
	 * 文字列からハッシュを作るファクトリーメソッド
	 * <p>文字列の定義から新しいハッシュを作るファクトリーメソッドです。 フォーマットは "loadFromFile" で使うものと同じです。</p>
	 * @param string $contents <p>ハッシュをシリアライズした文字列。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashIntStringHash <p>新しい QuickHashIntStringHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.loadfromstring.php
	 * @since PECL quickhash >= Unknown
	 */
	public static function loadFromString(string $contents, int $size = 0, int $options = 0): \QuickHashIntStringHash {}

	/**
	 * メモリ上のハッシュをディスクに保存する
	 * <p>このメソッドは、既存のハッシュをディスクに保存します。 loadFromFile() で読めるフォーマットになります。</p>
	 * @param string $filename <p>ハッシュの保存先のファイル名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.savetofile.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToFile(string $filename): void {}

	/**
	 * シリアライズしたハッシュを返す
	 * <p>このメソッドは、シリアライズしたハッシュを返します。 loadFromString() で読めるフォーマットになります。</p>
	 * @return string <p>このメソッドは、ハッシュをシリアライズした文字列を返します。 各要素は 4 バイトの値となり、システムで使っているのと同じエンディアンになります。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.savetostring.php
	 * @since PECL quickhash >= Unknown
	 */
	public function saveToString(): string {}

	/**
	 * ハッシュ内のエントリの値を更新 (エントリが存在しない場合は新しく追加) する
	 * <p>このメソッドは、エントリを新しい値で更新します。 エントリが存在しない場合は新しく追加します。エントリを追加したのか更新したのかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashIntStringHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param int $key <p>追加あるいは更新するエントリのキー。</p>
	 * @param string $value <p>エントリに新しく設定する値。 文字列以外を渡したときは、狩野であれば自動的に文字列に変換します。</p>
	 * @return int <p>エントリが見つかって更新できたときに 2、エントリを新しく追加したときに 1、 エラーが発生したときに 0 を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.set.php
	 * @since PECL quickhash >= Unknown
	 */
	public function set(int $key, string $value): int {}

	/**
	 * ハッシュのエントリを新しい値で更新する
	 * <p>このメソッドはエントリを新しい値で更新し、更新できたかどうかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashIntStringHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param int $key <p>更新するエントリのキー。</p>
	 * @param string $value <p>新しい値。 文字列以外を渡したときは、狩野であれば自動的に文字列に変換します。</p>
	 * @return bool <p>エントリが見つかって更新できたときに <b><code>TRUE</code></b>、 エントリが見つからなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashintstringhash.update.php
	 * @since PECL quickhash >= Unknown
	 */
	public function update(int $key, string $value): bool {}
}

/**
 * <p>このクラスは文字列を含むハッシュをラップするもので、ハッシュの値は整数値となります。 このハッシュは ArrayAccess インターフェイスも実装しています。</p>
 * <p>Iterator インターフェイスも実装しているので foreach で順にたどることもできます。 このときに要素が返される順番は保証されません。</p>
 * @link http://php.net/manual/ja/class.quickhashstringinthash.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class QuickHashStringIntHash {

	/**
	 * @var integer <p>有効にすると、重複する要素を (add() や loadFromFile() で) セットに追加しようとしたときにその要素がセットから削除されます。 余分な時間がかかるので、必要なときだけ使うようにしましょう。</p>
	 * @link http://php.net/manual/ja/class.quickhashstringinthash.php
	 */
	const CHECK_FOR_DUPES = 1;

	/**
	 * @var integer <p>PHP の内部メモリマネージャを使わないようにします。このオプションを有効にすると、 内部的に確保したメモリが memory_limit の設定に影響を及ぼさなくなります。</p>
	 * @link http://php.net/manual/ja/class.quickhashstringinthash.php
	 */
	const DO_NOT_USE_ZEND_ALLOC = 2;

	/**
	 * 新しい QuickHashStringIntHash オブジェクトを作る
	 * <p>新しい QuickHashStringIntHash オブジェクトを作ります。 size には、バケツリストの数を指定します。リストが多ければ多いほど、 衝突が少なくなります。オプションもサポートしています。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>次のオプションが使えます。 QuickHashStringIntHash::CHECK_FOR_DUPES は、重複するエントリをハッシュに追加できないようにします。 QuickHashStringIntHash::DO_NOT_USE_ZEND_ALLOC は、PHP の内部メモリマネージャを使わないようにします。</p>
	 * @return self <p>新しい QuickHashStringIntHash オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.construct.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function __construct(int $size, int $options = 0) {}

	/**
	 * 新たなエントリをハッシュに追加する
	 * <p>このメソッドは、新たなエントリをハッシュに追加して追加に成功したかどうかを返します。 ハッシュの作成時に QuickHashStringIntHash::CHECK_FOR_DUPES を渡さない限り、 エントリの追加はデフォルトで常に成功します。</p>
	 * @param string $key <p>追加するエントリのキー。</p>
	 * @param int $value <p>追加するエントリの値。</p>
	 * @return bool <p>エントリが追加された場合に <b><code>TRUE</code></b>、追加されなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.add.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function add(string $key, int $value): bool {}

	/**
	 * エントリをハッシュから削除する
	 * <p>このメソッドはエントリをハッシュから削除し、削除できたかどうかを返します。 関連づけられていたデータのメモリはその場では解放されず、 ハッシュ自体を解放するときに同時に解放されます。</p><p>ハッシュをイテレータで利用しているときには要素を削除できません。 このメソッドは例外をスローせず、単に <b><code>FALSE</code></b> を返すだけなので、 その他の理由で削除に失敗したときと同じようになります。</p>
	 * @param string $key <p>削除するエントリのキー。</p>
	 * @return bool <p>エントリが削除されたときに <b><code>TRUE</code></b>、削除されなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.delete.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function delete(string $key): bool {}

	/**
	 * キーがハッシュに存在するかどうかを調べる
	 * <p>指定したキーのエントリがハッシュに存在するかどうかを調べます。</p>
	 * @param string $key <p>ハッシュ内に存在するかどうかを調べたいキー。</p>
	 * @return bool <p>エントリが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.exists.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function exists(string $key): bool {}

	/**
	 * キーを指定してハッシュから値を取得する
	 * <p>キーを指定してハッシュから値を取得します。</p>
	 * @param string $key <p>エントリのキー。</p>
	 * @return mixed <p>キーが存在する場合はその値、キーが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.get.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function get(string $key) {}

	/**
	 * ハッシュの要素数を返す
	 * <p>ハッシュの要素数を返します。</p>
	 * @return int <p>ハッシュの要素数を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.getsize.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function getSize(): int {}

	/**
	 * ファイルからハッシュを作るファクトリーメソッド
	 * <p>ディスク上の定義ファイルから新しいハッシュを作るファクトリーメソッドです。 ファイルフォーマットは、まずシグネチャ 'QH\0x21\0'、 そして要素数を表す 32 ビット符号付き整数値 (システムと同じエンディアン)、 その後に、符号なし 32 ビット整数値で表した要素データの数と実際の文字が続きます。 この要素データの中にすべての文字列が含まれます。 さらに、バケツリスト数を表す符号付き 32 ビット整数値が続きます。 ヘッダーと文字列の後に、要素が続きます。 バケツリスト順に並んでおり、キーをハッシュしなくてもハッシュを復元できます。 各バケツリストに対して格納されている情報は次のとおりです (すべて 32 ビット整数値)。 バケツリストのインデックス、リスト内の要素数、要素を表す二つの 32 ビット符号なし整数値 (最初の値は文字列内でキーを含む場所を表すインデックス、 そして次がそれに対応する値)。 以下に例を示します。</p><p></p><p><b>例1 QuickHash StringIntHash ファイルフォーマット</b></p><p></p><p><b>例2 QuickHash IntHash ファイルフォーマット</b></p>
	 * @param string $filename <p>ハッシュを読み込むファイルのファイル名。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashStringIntHash <p>新しい QuickHashStringIntHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.loadfromfile.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public static function loadFromFile(string $filename, int $size = 0, int $options = 0): \QuickHashStringIntHash {}

	/**
	 * 文字列からハッシュを作るファクトリーメソッド
	 * <p>文字列の定義から新しいハッシュを作るファクトリーメソッドです。 フォーマットは "loadFromFile" で使うものと同じです。</p>
	 * @param string $contents <p>ハッシュをシリアライズした文字列。</p>
	 * @param int $size <p>バケツリストの数。 ここに渡した値は、直近の 2 の階乗まで切り上げられます。また、自動的に 4 から 4194304 までの範囲になります。</p>
	 * @param int $options <p>クラスのコンストラクタが受け取るのと同じオプション。 size オプションは無視されます。 サイズはハッシュのエントリをもとにして自動的に算出され、 2 の階乗の中で直近の値に切り上げられます。 最大値は 4194304 です。</p>
	 * @return QuickHashStringIntHash <p>新しい QuickHashStringIntHash を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.loadfromstring.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public static function loadFromString(string $contents, int $size = 0, int $options = 0): \QuickHashStringIntHash {}

	/**
	 * メモリ上のハッシュをディスクに保存する
	 * <p>このメソッドは、既存のハッシュをディスクに保存します。 loadFromFile() で読めるフォーマットになります。</p>
	 * @param string $filename <p>ハッシュの保存先のファイル名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.savetofile.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function saveToFile(string $filename): void {}

	/**
	 * シリアライズしたハッシュを返す
	 * <p>このメソッドは、シリアライズしたハッシュを返します。 loadFromString() で読めるフォーマットになります。</p>
	 * @return string <p>このメソッドは、ハッシュをシリアライズした文字列を返します。 各要素は 4 バイトの値となり、システムで使っているのと同じエンディアンになります。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.savetostring.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function saveToString(): string {}

	/**
	 * ハッシュ内のエントリの値を更新 (エントリが存在しない場合は新しく追加) する
	 * <p>このメソッドは、エントリを新しい値で更新します。 エントリが存在しない場合は新しく追加します。エントリを追加したのか更新したのかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashStringIntHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param string $key <p>追加あるいは更新するエントリのキー。</p>
	 * @param int $value <p>エントリに新しく設定する値。 文字列以外を渡したときは、狩野であれば自動的に文字列に変換します。</p>
	 * @return int <p>エントリが見つかって更新できたときに 2、エントリを新しく追加したときに 1、 エラーが発生したときに 0 を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.set.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function set(string $key, int $value): int {}

	/**
	 * ハッシュのエントリを新しい値で更新する
	 * <p>このメソッドはエントリを新しい値で更新し、更新できたかどうかを返します。 重複するキーがあった場合は、最初に見つかった要素の値だけを更新します。ハッシュの作成時に QuickHashStringIntHash::CHECK_FOR_DUPES を使えば、ハッシュ内でのキーの重複を回避できます。</p>
	 * @param string $key <p>更新するエントリのキー。</p>
	 * @param int $value <p>新しい値。 文字列以外を渡したときは、狩野であれば自動的に文字列に変換します。</p>
	 * @return bool <p>エントリが見つかって更新できたときに <b><code>TRUE</code></b>、 エントリが見つからなかったときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/quickhashstringinthash.update.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function update(string $key, int $value): bool {}
}

