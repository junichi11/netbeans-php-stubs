<?php



namespace {

	/**
	 * <p>無名関数 を表すために使うクラスです。</p>
	 * <p>無名関数は PHP 5.3 で実装された機能で、この型のオブジェクトを生成します。 かつてこれは、内部実装がたまたまそうなっているだけという扱いでした。 しかし今では、この事実を前提として考慮してもかまいません。 PHP 5.4 以降ではこのクラスにメソッドが用意され、 生成した無名関数をさらにコントロールできるようになります。</p>
	 * <p>ここであげたメソッド以外にも、このクラスには <i>__invoke</i> メソッドが存在します。 これは、マジックコール を実装した他のクラスとの一貫性を保つためのものであり、 関数をコールするときにこのメソッドは使われません。</p>
	 * @link https://php.net/manual/ja/class.closure.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class Closure {

		/**
		 * インスタンス作成を無効化したコンストラクタ
		 * <p>このメソッドは、 Closure クラスのインスタンスを作れないようにするために存在します。 このクラスのオブジェクトを作るには、 無名関数 のページに書かれている手順を使います。</p>
		 * @return self <p>このメソッドは値を返しません。単に (<b><code>E_RECOVERABLE_ERROR</code></b> 型の) エラーが発生するだけです。</p>
		 * @link https://php.net/manual/ja/closure.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		private function __construct() {}

		/**
		 * バインドされたオブジェクトとクラスのスコープでクロージャを複製する
		 * <p>このメソッドは、静的メソッド版の <code>Closure::bindTo()</code> です。 詳細な説明は <code>Closure::bindTo()</code> のドキュメントを参照ください。</p>
		 * @param \Closure $closure <p>バインドする無名関数。</p>
		 * @param object $newthis <p>指定した無名関数をバインドするオブジェクト。クロージャのバインドを解除するには <b><code>NULL</code></b> を指定します。</p>
		 * @param mixed $newscope <p>クロージャを関連づけるクラススコープ、あるいは 'static' で現在のスコープを維持します。 オブジェクトを渡した場合は、そのオブジェクトの型をその代わりに使います。 これは、バインドしたオブジェクトの protected メソッドや private メソッドの可視性を決めます。 このパラメータに、内部クラスのオブジェクトを渡すことはできません。</p>
		 * @return Closure <p>新しい Closure オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/closure.bind.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public static function bind(\Closure $closure, object $newthis, $newscope = "static"): \Closure {}

		/**
		 * 新しくバインドしたオブジェクトとクラスのスコープで、クロージャを複製する
		 * <p>自身と同じ本体とバインド変数を持つ新しい 無名関数 を作って返します。しかし、バインドするオブジェクトは変わって新しいクラスのスコープとなります。</p><p>“バインドするオブジェクト” によって、<i>$this</i> が関数本体で持つ値が決まり、“クラスのスコープ” は、無名関数からどのクラスの private メンバーや protected メンバーにアクセスできるのかが決まります。 すなわち、無名関数から見えるメンバーは、 その無名関数が <code>newscope</code> クラスのメソッドであった場合と同じものになります。</p><p>静的なクロージャは何もオブジェクトをバインドできません (<code>newthis</code> の値は <b><code>NULL</code></b> でなければなりません) が、 それでもこの関数を使ってクラスのスコープを変えることができます。</p><p>この関数が静的でないクロージャに関して保証するのは、 バインドされたインスタンスを持っていればスコープ内にあるということです。 また、その逆も成り立ちます。そのため、静的でないクロージャにスコープとして <b><code>NULL</code></b> インスタンスを渡すとそれは静的となり、静的でなくスコープにもないクロージャに <b><code>NULL</code></b> でないインスタンスを渡すと、特定されていない何らかのクラスのスコープに入ります。</p><p><b>注意</b>:</p><p>単に無名関数を複製したいだけの場合は、 cloning を使うこともできます。</p>
		 * @param object $newthis <p>指定した無名関数をバインドするオブジェクト。クロージャのバインドを解除するには <b><code>NULL</code></b> を指定します。</p>
		 * @param mixed $newscope <p>クロージャを関連づけるクラススコープ、あるいは 'static' で現在のスコープを維持します。 オブジェクトを渡した場合は、そのオブジェクトの型をその代わりに使います。 これは、バインドしたオブジェクトの protected メソッドや private メソッドの可視性を決めます。 It is not allowed to pass (an object of) an internal class as this parameter.</p>
		 * @return Closure <p>新しい Closure オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/closure.bindto.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function bindTo(object $newthis, $newscope = "static"): \Closure {}

		/**
		 * クロージャを束縛して呼び出す
		 * <p>クロージャを一時的に <code>newthis</code> に束縛し、 指定したパラメータでそれを呼び出します。</p>
		 * @param object $newthis <p>この呼び出しの間だけクロージャを束縛するオブジェクト。</p>
		 * @param mixed $_ <p>クロージャに渡すパラメータがある場合は、ここで指定します。</p>
		 * @return mixed <p>クロージャの戻り値を返します。</p>
		 * @link https://php.net/manual/ja/closure.call.php
		 * @since PHP 7
		 */
		public function call(object $newthis, $_ = NULL) {}

		/**
		 * callable をクロージャに変換する
		 * <p>現在のスコープを用いて、指定された <code>callable</code> から新しい 無名関数 を作って返します。 このメソッドは、現在のスコープで <code>callable</code> が呼び出し可能かどうかをチェックし、可能でなければ <b>TypeError </b> をスローします。</p>
		 * @param callable $callable <p>変換する callable。</p>
		 * @return Closure <p>新しく作られた Closure を返します。 <code>callable</code> が現在のスコープで呼び出し可能でなければ、 TypeError をスローします。</p>
		 * @link https://php.net/manual/ja/closure.fromcallable.php
		 * @since PHP 7 >= 7.1.0
		 */
		public static function fromCallable(callable $callable): \Closure {}
	}

}
