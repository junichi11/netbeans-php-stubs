<?php



/**
 * <p>外部イテレータを作成するためのインターフェイスです。</p>
 * @link http://php.net/manual/ja/class.iteratoraggregate.php
 * @since PHP 5, PHP 7
 */
interface IteratorAggregate extends Traversable {

	/**
	 * 外部イテレータを取得する
	 * <p>外部イテレータを返します。</p>
	 * @return Traversable <p>Iterator あるいは Traversable を実装したオブジェクトのインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/iteratoraggregate.getiterator.php
	 * @since PHP 5, PHP 7
	 */
	public function getIterator(): \Traversable;
}

