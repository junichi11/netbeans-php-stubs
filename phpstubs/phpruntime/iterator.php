<?php



namespace {

	/**
	 * <p>外部のイテレータあるいはオブジェクト自身から反復処理を行うためのインターフェイスです。</p>
	 * @link https://php.net/manual/ja/class.iterator.php
	 * @since PHP 5, PHP 7
	 */
	interface Iterator extends Traversable {

		/**
		 * 現在の要素を返す
		 * <p>現在の要素を返します。</p>
		 * @return mixed <p>あらゆる型を返すことが可能です。</p>
		 * @link https://php.net/manual/ja/iterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current();

		/**
		 * 現在の要素のキーを返す
		 * <p>現在の要素のキーを返します。</p>
		 * @return scalar <p>成功した場合にスカラー型、失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): \scalar;

		/**
		 * 次の要素に進む
		 * <p>現在位置を次の要素に移動します。</p><p><b>注意</b>:</p><p>このメソッドは、各 foreach ループの <i>後</i> にコールされます。</p>
		 * @return void <p>返り値は無視されます。</p>
		 * @link https://php.net/manual/ja/iterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void;

		/**
		 * イテレータの最初の要素に巻き戻す
		 * <p>イテレータの最初の要素に巻き戻します。</p><p><b>注意</b>:</p><p>これは、foreach ループの開始時に <i>最初</i> にコールされるメソッドです。 foreach ループの <i>後</i> には実行 <i>されません</i>。</p>
		 * @return void <p>返り値は無視されます。</p>
		 * @link https://php.net/manual/ja/iterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void;

		/**
		 * 現在位置が有効かどうかを調べる
		 * <p>このメソッドは <code>Iterator::rewind()</code> および <code>Iterator::next()</code> の後にコールされ、 現在の位置が有効化どうかを調べます。</p>
		 * @return bool <p>返り値は <code>boolean</code> にキャストして評価されます。 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool;
	}

}
