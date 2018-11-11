<?php



/**
 * <p>配列としてオブジェクトにアクセスするための機能のインターフェイスです。</p>
 * @link http://php.net/manual/ja/class.arrayaccess.php
 * @since PHP 5, PHP 7
 */
interface ArrayAccess {

	/**
	 * オフセットが存在するかどうか
	 * <p>オフセットが存在するかどうかを返します。</p><p>このメソッドが実行されるのは、ArrayAccess を実装したオブジェクト上で <code>isset()</code> あるいは <code>empty()</code> を使用した場合です。</p><p><b>注意</b>:</p><p><code>empty()</code> を使用すると <code>ArrayAccess::offsetGet()</code> がコールされ、<b>ArrayAccess::offsetExists()</b> が <b><code>TRUE</code></b> を返すかどうかで空かどうかを判断します。</p>
	 * @param mixed $offset <p>調べたいオフセット。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>非 boolean 値が返された場合は <code>boolean</code> にキャストして返します。</p>
	 * @link http://php.net/manual/ja/arrayaccess.offsetexists.php
	 * @since PHP 5, PHP 7
	 */
	public function offsetExists($offset): bool;

	/**
	 * オフセットを取得する
	 * <p>指定したオフセットの値を返します。</p><p>このメソッドは、オフセットが <code>empty()</code> かどうかを調べる際に実行されます。</p>
	 * @param mixed $offset <p>取得したいオフセット。</p>
	 * @return mixed <p>すべての型の値を返すことができます。</p>
	 * @link http://php.net/manual/ja/arrayaccess.offsetget.php
	 * @since PHP 5, PHP 7
	 */
	public function offsetGet($offset);

	/**
	 * 指定したオフセットに値を設定する
	 * <p>指定したオフセットに値を代入します。</p>
	 * @param mixed $offset <p>値を代入したいオフセット。</p>
	 * @param mixed $value <p>設定したい値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/arrayaccess.offsetset.php
	 * @since PHP 5, PHP 7
	 */
	public function offsetSet($offset, $value): void;

	/**
	 * オフセットの設定を解除する
	 * <p>オフセットの設定を解除します。</p><p><b>注意</b>:</p><p>このメソッドは、 (unset) による型キャストの際にはコール <i>されません</i>。</p>
	 * @param mixed $offset <p>設定解除したいオフセット。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/arrayaccess.offsetunset.php
	 * @since PHP 5, PHP 7
	 */
	public function offsetUnset($offset): void;
}

