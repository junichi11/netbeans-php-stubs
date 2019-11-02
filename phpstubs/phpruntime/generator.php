<?php



namespace {

	/**
	 * <p><b>Generator</b> は ジェネレータ が返すオブジェクトです。</p>
	 * <p><b>Generator</b> オブジェクトのインスタンスは new では作れません。</p>
	 * @link https://php.net/manual/ja/class.generator.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	class Generator implements \Iterator {

		/**
		 * シリアライズのコールバック
		 * <p>ジェネレータはシリアライズできないので、例外をスローします。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/generator.wakeup.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __wakeup(): void {}

		/**
		 * yield した値を取得する
		 * @return mixed <p>yield した値を返します。</p>
		 * @link https://php.net/manual/ja/generator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function current() {}

		/**
		 * ジェネレータの戻り値を取得する
		 * @return mixed <p>ジェネレータの実行が終了すると、その戻り値を返します。</p>
		 * @link https://php.net/manual/ja/generator.getreturn.php
		 * @since PHP 7
		 */
		public function getReturn() {}

		/**
		 * yield したキーを取得する
		 * <p>yield した値のキーを取得します。</p>
		 * @return mixed <p>yield したキーを返します。</p>
		 * @link https://php.net/manual/ja/generator.key.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function key() {}

		/**
		 * ジェネレータを続行する
		 * <p><b>Generator::next()</b> のコールは、 <b><code>NULL</code></b> を引数として <code>Generator::send()</code> をコールすることと等価です。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/generator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>既に処理が始まっている場合は、例外をスローします。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/generator.rewind.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 値をジェネレータに送る
		 * <p>指定した値を yield の結果としてジェネレータに送り、ジェネレータを続行します。</p><p>ジェネレータが yield 式を指していないときにこのメソッドが呼ばれると、 まずは最初の yield 式まで進めてから値を送信します。そのため、 最初のジェネレータを指すためにわざわざ <code>Generator::next()</code> を呼ぶ必要はありません (Python と同じです)。</p>
		 * @param mixed $value <p>ジェネレータに送り込む値。この値が、ジェネレータが現在指している yield 式の戻り値になります。</p>
		 * @return mixed <p>yield した値を返します。</p>
		 * @link https://php.net/manual/ja/generator.send.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function send($value) {}

		/**
		 * 例外をジェネレータにスローする
		 * <p>例外をジェネレータにスローして、ジェネレータを続行します。 この振る舞いは、現在の yield 式の部分を <i>throw $exception</i> 文に置き換えたのと同じになります。</p><p>このメソッドの起動時に既にジェネレータが閉じられている場合は、呼び出し側のコンテキストに例外がスローされます。</p>
		 * @param \Throwable $exception <p>ジェネレータにスローする例外。</p>
		 * @return mixed <p>yield した値を返します。</p>
		 * @link https://php.net/manual/ja/generator.throw.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function throw(\Throwable $exception) {}

		/**
		 * イテレータが終了したかどうかを調べる
		 * @return bool <p>イテレータが終了した場合に <b><code>FALSE</code></b> を返します。まだ終了していない場合は <b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/generator.valid.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function valid(): bool {}
	}

}
