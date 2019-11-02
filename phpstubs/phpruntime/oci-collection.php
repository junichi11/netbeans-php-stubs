<?php



namespace {

	/**
	 * <p>OCI8 コレクション機能です。</p>
	 * @link https://php.net/manual/ja/class.OCI-Collection.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	class OCI_Collection {

		/**
		 * コレクションに要素を追加する
		 * <p>コレクションの最後に要素を追加します。</p>
		 * @param mixed $value <p>コレクションに追加する値を指定します。文字列か数値です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.append.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function append($value): bool {}

		/**
		 * コレクションに他の存在するコレクションから値を割り当てる
		 * <p>事前に生成された他のコレクションからコレクションの値を割り当てます。 両方のコレクションは、使用する前に <code>oci_new_collection()</code> を使って生成される必要があります。</p>
		 * @param \OCI_Collection $from <p>OCI-Collection のインスタンスを指定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.assign.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function assign(\OCI_Collection $from): bool {}

		/**
		 * コレクションの要素に値を割り当てる
		 * <p>インデックス <code>index</code> の要素に値を割り当てます。</p>
		 * @param int $index <p>要素のインデックス。最初のインデックスは 0 です。</p>
		 * @param mixed $value <p>文字列あるいは数値です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.assignelem.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function assignElem(int $index, $value): bool {}

		/**
		 * コレクションオブジェクトに関連付けられたリソースを解放する
		 * <p>コレクションオブジェクトに関連付けられたリソースを解放します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.free.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function free(): bool {}

		/**
		 * 要素の値を返す
		 * <p>インデックス <code>index</code> (0 から始まる) を持つ要素の値を返します。</p>
		 * @param int $index <p>要素のインデックス。最初のインデックスは 0 です。</p>
		 * @return mixed <p>もし要素が存在しない場合 <b><code>FALSE</code></b> 、要素が <b><code>NULL</code></b> 文字列なら <b><code>NULL</code></b> 、要素が文字データ型なら文字列、 要素が数値フィールドなら数値を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.getelem.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function getElem(int $index) {}

		/**
		 * コレクション内の要素の最大数を取得する
		 * <p>コレクション内の要素の最大数を返します。</p>
		 * @return int <p>コレクション内の要素の最大数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p><p>返り値が 0 の場合、要素の数に制限はありません。</p>
		 * @link https://php.net/manual/ja/oci-collection.max.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function max(): int {}

		/**
		 * コレクションのサイズを返す
		 * <p>コレクションのサイズを返します。</p>
		 * @return int <p>コレクション内の要素の数、もしくはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.size.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function size(): int {}

		/**
		 * コレクションの最後から要素を切り取る
		 * <p>コレクションの最後から <code>num</code> 個の要素を切り取ります。</p>
		 * @param int $num <p>切り取る要素の数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/oci-collection.trim.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function trim(int $num): bool {}
	}

}
