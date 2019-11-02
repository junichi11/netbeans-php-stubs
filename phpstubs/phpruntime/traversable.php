<?php



namespace {

	/**
	 * <p>そのクラスの中身が foreach を使用してたどれるかどうかを検出するインターフェイスです。</p>
	 * <p>これは抽象インターフェイスであり、単体で実装することはできません。 <code>IteratorAggregate</code> あるいは <code>Iterator</code> を実装しなければなりません。</p>
	 * <p><b>注意</b>:</p>
	 * <p>このインターフェイスを実装した内部クラス (組み込みクラス) は foreach で使用することができます。 <code>IteratorAggregate</code> や <code>Iterator</code> を実装する必要はありません。</p>
	 * <p><b>注意</b>:</p>
	 * <p>これは内部エンジンのインターフェイスであり、PHP スクリプト内で実装することはできません。 そのかわりに <code>IteratorAggregate</code> あるいは <code>Iterator</code> を使用しなければなりません。 Traversable を継承したインターフェイスを実装するときは、 implements 句の中でそのインターフェイスより前に <code>IteratorAggregate</code> か <code>Iterator</code> を指定しておきましょう。</p>
	 * @link https://php.net/manual/ja/class.traversable.php
	 * @since PHP 5, PHP 7
	 */
	interface Traversable {
	}

}
