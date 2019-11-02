<?php



namespace {

	/**
	 * @link https://php.net/manual/ja/class.weakmap.php
	 * @since PECL weakref >= 0.2.0
	 */
	class WeakMap implements \Countable, \ArrayAccess, \Iterator {

		/**
		 * 新しいマップを作る
		 * <p>新しいマップを作ります。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakmap.construct.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function __construct() {}

		/**
		 * マップ内の生きたエントリを数える
		 * <p>マップ内の生きたエントリを数えます。</p>
		 * @return int <p>マップ内の生きたエントリを返します。</p>
		 * @link https://php.net/manual/ja/weakmap.count.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function count(): int {}

		/**
		 * 反復処理中の現在の値を返す
		 * <p>マップ内の反復処理中に、現在の値を返します。</p>
		 * @return mixed <p>反復処理中の現在の値を返します。</p>
		 * @link https://php.net/manual/ja/weakmap.current.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function current() {}

		/**
		 * 反復処理中の現在のキーを返す
		 * <p>マップ内で、反復処理中の現在の位置にあるキーが保持するオブジェクトを返します。</p>
		 * @return object <p>現在処理中のキーのオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/weakmap.key.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function key(): object {}

		/**
		 * マップの次の要素に進む
		 * <p>マップの次の要素に進みます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakmap.next.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function next(): void {}

		/**
		 * オブジェクトがマップ内にあるかどうかを調べる
		 * <p>渡されたオブジェクトがマップ内で参照されているかどうかを調べます。</p>
		 * @param object $object <p>調べたいオブジェクト。</p>
		 * @return bool <p>オブジェクトがマップ内に含まれる場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakmap.offsetexists.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetExists(object $object): bool {}

		/**
		 * オブジェクトを指定して、それが指す値を返す
		 * <p>オブジェクトを指定して、それが指す値を返します。</p>
		 * @param object $object <p>マップ内のキーとして含まれるオブジェクト。</p>
		 * @return mixed <p>引数で渡したオブジェクトに関連づけられた値を返します。 値がない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakmap.offsetget.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetGet(object $object) {}

		/**
		 * 新しいキー/値のペアでマップを更新する
		 * <p>新しいキー/値のペアでマップを更新します。そのキーが既にマップに存在する場合は、 古い値を新しい値で置き換えます。</p>
		 * @param object $object <p>キー/値のペアでキーになるオブジェクト。</p>
		 * @param mixed $value <p>キー/値のペアで値として扱う任意のデータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakmap.offsetset.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetSet(object $object, $value): void {}

		/**
		 * エントリをマップから削除する
		 * <p>エントリをマップから削除します。</p>
		 * @param object $object <p>マップから削除するキーのオブジェクト。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakmap.offsetunset.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetUnset(object $object): void {}

		/**
		 * イテレータをマップの先頭まで巻き戻す
		 * <p>イテレータをマップの先頭まで巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakmap.rewind.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function rewind(): void {}

		/**
		 * イテレータが有効なマップ要素を指しているかどうかを返す
		 * <p>イテレータが有効なマップ要素を指しているかどうかを返します。</p>
		 * @return bool <p>イテレータが有効なマップ要素を指していてそこにアクセスできる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakmap.valid.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>WeakRef クラスはオブジェクトへのゲートウェイを提供します。 ガベージコレクタがオブジェクトを解放するのを邪魔しません。 また、弱い参照を強い参照に切り替える方法も用意します。</p>
	 * @link https://php.net/manual/ja/class.weakref.php
	 * @since PECL weakref >= 0.1.0
	 */
	class WeakRef {

		/**
		 * 弱い参照を新しく作る
		 * <p>弱い参照を新しく作ります。</p>
		 * @param object $object <p>参照するオブジェクト。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/weakref.construct.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function __construct(object $object) {}

		/**
		 * オブジェクトへの強い参照を確保する
		 * <p>オブジェクトへの強い参照を確保し、事実上、弱い参照を強い参照に切り替えます。</p><p>Weakref は内部的な確保カウンタを管理して、 未処理の強い参照を追跡します。 <b>Weakref::acquire()</b> の呼び出しが成功すると、このカウンタがひとつ加算されます。</p>
		 * @return bool <p>その参照が有効で、かつ強い参照に切り替えられた場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakref.acquire.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function acquire(): bool {}

		/**
		 * 弱い参照が指す先にオブジェクトを返す
		 * <p>弱い参照が指す先にオブジェクトを返します。</p>
		 * @return object <p>参照が有効な場合にその先のオブジェクトを返します。それ以外の場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakref.get.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function get(): object {}

		/**
		 * 確保した参照を解放する
		 * <p>確保した参照を解放します。強い参照を、元の弱い参照に戻すことになります。</p><p>Weakref は内部的な確保カウンタを管理して、 未処理の強い参照を追跡します。 <b>Weakref::release()</b> の呼び出しが成功すると、このカウンタがひとつ減ります。 カウンタがゼロになると、強い参照が弱い参照に戻ります。</p>
		 * @return bool <p>先に確保した参照を解放できた場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakref.release.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function release(): bool {}

		/**
		 * 参照先のオブジェクトがまだ存在するかどうかを調べる
		 * <p>参照先のオブジェクトがまだ存在するかどうかを調べます。</p>
		 * @return bool <p>オブジェクトがまだ存在して <code>Weakref::get()</code> アクセス可能な場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/weakref.valid.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function valid(): bool {}
	}

}
