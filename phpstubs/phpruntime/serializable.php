<?php



namespace {

	/**
	 * <p>独自のシリアライズ用のインターフェイスです。</p>
	 * <p>このインターフェイスを実装したクラスは __sleep() や __wakeup() をサポートしなくなります。 シリアライズが必要な場合には、自動的に serialize メソッドがコールされます。 このメソッドは __destruct() を実行しません。また、 メソッド内で明示的に書かない限りは一切の副作用を及ぼしません。 アンシリアライズされるときにはそのクラスが自動的に検知し、__construct() メソッドのかわりに適切な unserialize() メソッドがコールされます。 標準のコンストラクタを実行させたい場合は、unserialize() メソッドの中でそれをコールします。</p>
	 * @link https://php.net/manual/ja/class.serializable.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface Serializable {

		/**
		 * オブジェクトの文字列表現
		 * <p>オブジェクトを文字列であらわしたものを返します。</p>
		 * @return string <p>オブジェクトの文字列表現、あるいは <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/serializable.serialize.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function serialize(): string;

		/**
		 * オブジェクトを作成する
		 * <p>オブジェクトのアンシリアライズ時にコールされます。</p><p><b>注意</b>:</p><p>このメソッドは、オブジェクトの コンストラクタ として働きます。 このメソッドの後に __construct() メソッドがコールされることは <i>ありません</i>。</p>
		 * @param string $serialized <p>オブジェクトの文字列表現。</p>
		 * @return void <p>このメソッドの返り値は無視されます。</p>
		 * @link https://php.net/manual/ja/serializable.unserialize.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function unserialize(string $serialized): void;
	}

}
