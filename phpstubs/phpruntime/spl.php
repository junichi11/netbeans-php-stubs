<?php



namespace {

	/**
	 * <p>複数のイテレータをひとつひとつ処理するイテレータです。</p>
	 * @link https://php.net/manual/ja/class.appenditerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class AppendIterator extends \IteratorIterator implements \OuterIterator {

		/**
		 * AppendIterator を作成する
		 * <p>AppendIterator を作成します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/appenditerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * イテレータを追加する
		 * <p>イテレータを追加します。</p>
		 * @param \Iterator $iterator <p>追加するイテレータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/appenditerator.append.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function append(\Iterator $iterator): void {}

		/**
		 * 現在の値を取得する
		 * <p>現在の値を取得します。</p>
		 * @return mixed <p>有効な状態の場合は現在の値、それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * ArrayIterator を取得する
		 * <p>このメソッドは ArrayIterator を取得します。ここに、 <code>AppendIterator::append()</code> で追加したイテレータを格納します。</p>
		 * @return ArrayIterator <p>追加したイテレータを含む ArrayIterator を返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.getarrayiterator.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getArrayIterator(): \ArrayIterator {}

		/**
		 * 内部イテレータを取得する
		 * <p>現在の内部イテレータを返します。</p>
		 * @return Iterator <p>現在の内部イテレータを返します。存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * イテレータのインデックスを取得する
		 * <p>現在の内部イテレータのインデックスを取得します。</p>
		 * @return int <p>現在の内部イテレータのインデックス (最初はゼロ) を整数値で返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.getiteratorindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getIteratorIndex(): int {}

		/**
		 * 現在のキーを取得する
		 * <p>現在のキーを取得します。</p>
		 * @return scalar <p>有効な状態の場合は現在のキー、それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * 次の要素に移動する
		 * <p>次の要素に移動します。もし別のイテレータに移動する場合は、そのイテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/appenditerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>最初の内部イテレータの最初の要素まで巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/appenditerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 現在の要素が有効かどうかを調べる
		 * <p>現在の要素が有効かどうかを調べます。</p>
		 * @return bool <p>現在のイテレーションが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/appenditerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>このイテレータは、配列やオブジェクトを反復処理する際に 値やキーをリセットしたり修正したりすることができます。</p>
	 * <p>同じ配列を何度も反復処理したい場合は、 ArrayObject のインスタンスとそれを参照する ArrayIterator のインスタンスを作成し、 foreach を使用するか getIterator() メソッドを手動でコールします。</p>
	 * @link https://php.net/manual/ja/class.arrayiterator.php
	 * @since PHP 5, PHP 7
	 */
	class ArrayIterator implements \ArrayAccess, \SeekableIterator, \Countable, \Serializable {

		/**
		 * ArrayIterator を作成する
		 * <p>ArrayIterator オブジェクトを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $array <p>反復処理をする配列あるいはオブジェクト。</p>
		 * @param int $flags <p>ArrayIterator オブジェクトの振る舞いを制御するフラグ。 <code>ArrayIterator::setFlags()</code> を参照ください。</p>
		 * @return self <p>ArrayIterator オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($array = array(), int $flags = 0) {}

		/**
		 * 要素を追加する
		 * <p>値を最後の要素として追加します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.append.php
		 * @since PHP 5, PHP 7
		 */
		public function append($value): void {}

		/**
		 * 値で配列をソートする
		 * <p>値で配列をソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.asort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function asort(): void {}

		/**
		 * 要素を数える
		 * <p>配列の要素の数、あるいはオブジェクトの public プロパティの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>連想配列の場合は要素の数、オブジェクトの場合は public プロパティの数を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.count.php
		 * @since PHP 5, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列エントリを返す
		 * <p>現在の配列エントリを取得します。</p>
		 * @return mixed <p>現在の配列エントリを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current() {}

		/**
		 * 配列のコピーを取得する
		 * <p>配列のコピーを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>配列のコピーを返します。 ArrayIterator がオブジェクトを参照している場合は public プロパティの配列を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.getarraycopy.php
		 * @since PHP 5, PHP 7
		 */
		public function getArrayCopy(): array {}

		/**
		 * フラグを取得する
		 * <p>現在のフラグを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>現在のフラグを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getFlags(): void {}

		/**
		 * 現在の配列キーを返す
		 * <p>この関数は、現在の配列キーを返します</p>
		 * @return mixed <p>この関数は、現在の配列キーを返します</p>
		 * @link https://php.net/manual/ja/arrayiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key() {}

		/**
		 * キーで配列をソートする
		 * <p>キーで配列をソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.ksort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function ksort(): void {}

		/**
		 * 大文字小文字を区別せずに自然順で配列をソートする
		 * <p>大文字小文字を区別しない "自然順" アルゴリズムを使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.natcasesort.php
		 * @see natcasesort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natcasesort(): void {}

		/**
		 * 自然順で配列をソートする
		 * <p>"自然順" アルゴリズムを使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.natsort.php
		 * @see natsort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natsort(): void {}

		/**
		 * 次のエントリに移動する
		 * <p>この関数は次のエントリにイテレータを移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * オフセットが存在するかどうかを調べる
		 * <p>オフセットが存在するかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>調べたいオフセット。</p>
		 * @return void <p>オフセットが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetexists.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetExists(string $index): void {}

		/**
		 * オフセットの値を取得する
		 * <p>指定したオフセットの値を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>値を取得したいオフセット。</p>
		 * @return mixed <p>オフセット <code>index</code> の値を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetget.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetGet(string $index) {}

		/**
		 * オフセットの値を設定する
		 * <p>指定したオフセットの値を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定したいインデックス。</p>
		 * @param string $newval <p>インデックスに格納する新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetSet(string $index, string $newval): void {}

		/**
		 * オフセットの値を削除する
		 * <p>オフセットの値を削除します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>削除したいオフセット。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetunset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetUnset(string $index): void {}

		/**
		 * 配列を最初に巻き戻す
		 * <p>イテレータを最初に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 位置を移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $position <p>移動する位置。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.seek.php
		 * @since PHP 5, PHP 7
		 */
		public function seek(int $position): void {}

		/**
		 * シリアライズする
		 * <p>シリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>シリアライズした ArrayIterator を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.serialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 振る舞いのフラグを設定する
		 * <p>振る舞いのフラグを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $flags <p>次のビットマスク。</p><ul> <li> 0 = オブジェクトのプロパティがリストとして (var_dump, foreach などで) アクセスされたときに通常の機能を持たせるようにする。 </li> <li> 1 = 配列のインデックスを、読み書き時にプロパティとしてアクセスできるようにする。 </li> </ul>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setFlags(string $flags): void {}

		/**
		 * ユーザー定義のソート
		 * <p>ユーザー定義の関数を使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $cmp_function <p>ソートに使う比較関数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.uasort.php
		 * @see usort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uasort(string $cmp_function): void {}

		/**
		 * ユーザー定義のソート
		 * <p>ユーザー定義の関数を使って、キーでエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $cmp_function <p>ソートに使う比較関数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.uksort.php
		 * @see uksort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uksort(string $cmp_function): void {}

		/**
		 * アンシリアライズする
		 * <p>アンシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした ArrayIterator オブジェクト。</p>
		 * @return string <p>ArrayIterator を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.unserialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unserialize(string $serialized): string {}

		/**
		 * 配列がまだエントリを持っているかどうかチェックする
		 * <p>配列がまだエントリを持っているかどうかチェックします。</p>
		 * @return bool <p>イテレータが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>このクラスは、オブジェクトを配列として動作させます。</p>
	 * @link https://php.net/manual/ja/class.arrayobject.php
	 * @since PHP 5, PHP 7
	 */
	class ArrayObject implements \IteratorAggregate, \ArrayAccess, \Serializable, \Countable {

		/**
		 * @var integer <p>オブジェクトのプロパティは (var_dump, foreachなどで) 配列としてアクセスしたときと同じ機能を持ちます</p>
		 * @link https://php.net/manual/ja/class.arrayobject.php
		 */
		const STD_PROP_LIST = 1;

		/**
		 * @var integer <p>オブジェクトのエントリはプロパティとしてアクセスできます(読み書き可)</p>
		 * @link https://php.net/manual/ja/class.arrayobject.php
		 */
		const ARRAY_AS_PROPS = 2;

		/**
		 * 新規配列オブジェクトを生成する
		 * <p>新規配列オブジェクトを生成します。</p>
		 * @param mixed $input <p><code>input</code> には、 配列あるいはオブジェクトを指定することができます。</p>
		 * @param int $flags <p>ArrayObject オブジェクトの振る舞いを制御するフラグ。 <code>ArrayObject::setFlags()</code> を参照ください。</p>
		 * @param string $iterator_class <p>ArrayObject オブジェクトの反復処理に使用するクラスを指定します。</p>
		 * @return self <p>成功した場合に ArrayObject オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($input = array(), int $flags = 0, string $iterator_class = "ArrayIterator") {}

		/**
		 * 値を追加する
		 * <p>新しい値を最後の要素として追加します。</p><p><b>注意</b>:</p><p>このメソッドは、ArrayObject をオブジェクトから作成した場合にはコールできません。 かわりに <code>ArrayObject::offsetSet()</code> を使用します。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.append.php
		 * @since PHP 5, PHP 7
		 */
		public function append($value): void {}

		/**
		 * 値でエントリをソートする
		 * <p>エントリをソートします。キーとそれに対応する値の関連は保持されたままとなります。 これは主に、連想配列など実際の要素の並びが重要となる場合のソートで使います。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.asort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function asort(): void {}

		/**
		 * ArrayObject の public プロパティの数を取得する
		 * <p>ArrayObject の public プロパティの数を取得します。</p>
		 * @return int <p>ArrayObject の public プロパティの数を返します。</p> <p><b>注意</b>:</p> <p>ArrayObject を配列から作成した場合は、すべてのプロパティが public となります。</p>
		 * @link https://php.net/manual/ja/arrayobject.count.php
		 * @since PHP 5, PHP 7
		 */
		public function count(): int {}

		/**
		 * 配列を別の配列と交換する
		 * <p>現在の配列を、別の配列あるいはオブジェクトと交換します。</p>
		 * @param mixed $input <p>現在の配列と交換する配列あるいはオブジェクト。</p>
		 * @return array <p>元の配列を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.exchangearray.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function exchangeArray($input): array {}

		/**
		 * ArrayObject のコピーを作成する
		 * <p>ArrayObject を配列にエクスポートします。</p>
		 * @return array <p>配列のコピーを返します。ArrayObject がオブジェクトを参照している場合は、 オブジェクトの public プロパティの配列を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.getarraycopy.php
		 * @since PHP 5, PHP 7
		 */
		public function getArrayCopy(): array {}

		/**
		 * 振る舞いのフラグを取得する
		 * <p>ArrayObject の振る舞いのフラグを取得します。 利用可能なフラグの一覧は、 ArrayObject::setFlags メソッドを参照ください。</p>
		 * @return int <p>ArrayObject の振る舞いのフラグを返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * ArrayObject インスタンスから新規イテレータを生成する
		 * <p>新しいイテレータを ArrayObject インスタンスから作成します。</p>
		 * @return ArrayIterator <p>ArrayObject からイテレータを返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.getiterator.php
		 * @since PHP 5, PHP 7
		 */
		public function getIterator(): \ArrayIterator {}

		/**
		 * ArrayObject のイテレータクラス名を取得する
		 * <p>配列イテレータのクラス名を取得します。これは ArrayObject::getIterator() で使います。</p>
		 * @return string <p>このオブジェクトの反復処理に使うイテレータのクラス名を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.getiteratorclass.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getIteratorClass(): string {}

		/**
		 * キーでエントリをソートする
		 * <p>キーでエントリをソートし、キーと値の関係は保持します。 主に連想配列で有用です。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.ksort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function ksort(): void {}

		/**
		 * 大文字小文字を区別しない "自然順" アルゴリズムでエントリをソートする
		 * <p>このメソッドは、大文字小文字を区別しない ArrayObject::natsort です。</p><p>このメソッドは、英数字からなる文字列を人間が並び替えるのと同じようなアルゴリズムでソートし、 キーと値の対応は保持します。このようなソートのことを "自然順" と呼びます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.natcasesort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natcasesort(): void {}

		/**
		 * "自然順" アルゴリズムでエントリをソートする
		 * <p>このメソッドは、英数字からなる文字列を人間が並び替えるのと同じようなアルゴリズムでソートし、 キーと値の対応は保持します。このようなソートのことを "自然順" と呼びます。 このアルゴリズムと、コンピュータの通常の文字列ソートアルゴリズム (ArrayObject::asort で使われているもの) の違いは、以下のサンプルを参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.natsort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natsort(): void {}

		/**
		 * 要求されたインデックスが存在するかどうかを返す
		 * @param mixed $index <p>調べたいインデックス。</p>
		 * @return bool <p>指定したインデックスが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.offsetexists.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetExists($index): bool {}

		/**
		 * 指定したインデックスの値を返す
		 * @param mixed $index <p>値のインデックス。</p>
		 * @return mixed <p>指定したインデックスの値、あるいは <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.offsetget.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetGet($index) {}

		/**
		 * 指定したインデックスに新しい値をセットする
		 * <p>指定したインデックスに新しい値を設定します。</p>
		 * @param mixed $index <p>設定したいインデックス。</p>
		 * @param mixed $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.offsetset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetSet($index, $newval): void {}

		/**
		 * 指定したインデックスの値を解除する
		 * <p>指定したインデックスの値を解除します。</p>
		 * @param mixed $index <p>解除したいインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.offsetunset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetUnset($index): void {}

		/**
		 * ArrayObject をシリアライズする
		 * <p>ArrayObject をシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ArrayObject をシリアライズしたものを返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.serialize.php
		 * @see serialize()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 処理フラグを設定する
		 * <p>ArrayObject の振る舞いを変更するフラグを設定します。</p>
		 * @param int $flags <p>新たな ArrayObject の振る舞い。 ビットマスクか、定数名で指定します。 将来のバージョンとの互換性のため、定数名での指定を強く推奨します。</p> <p>利用可能なフラグの一覧を以下に示します。 これらのフラグの実際の意味については 定義済みの定数 を参照ください。</p> <b>ArrayObject のフラグ</b>   値 定数     1  ArrayObject::STD_PROP_LIST    2  ArrayObject::ARRAY_AS_PROPS
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * ArrayObject のイテレータクラス名を設定する
		 * <p>配列イテレータのクラス名を設定します。これは ArrayObject::getIterator() で使います。</p>
		 * @param string $iterator_class <p>このオブジェクトの反復処理に使う配列イテレータのクラス名。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.setiteratorclass.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setIteratorClass(string $iterator_class): void {}

		/**
		 * ユーザー定義の比較関数でエントリをソートし、キーとの対応は保持する
		 * <p>この関数はエントリをソートします。キーとそれに対応する値の関連は保持されたままとなります。 ソートにはユーザー定義の比較関数を利用します。</p><p>これは主に、連想配列など実際の要素の並びが重要となる場合のソートで使います。</p>
		 * @param callable $cmp_function <p>関数 <code>cmp_function</code> は二つのパラメータを受け取ります。ここにはエントリのペアが渡されます。 比較関数の返り値は、最初の引数が二番目の引数より小さい場合に負の数、 等しい場合にゼロ、大きい場合に正の数となります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.uasort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uasort(callable $cmp_function): void {}

		/**
		 * ユーザー定義の比較関数を使って、キーでエントリをソートする
		 * <p>この関数は、ユーザー定義の比較関数を使ってキーでエントリをソートします。 キーとそれに対応する値の関連は保持されたままとなります。</p>
		 * @param callable $cmp_function <p>比較コールバック関数。</p> <p>関数 <code>cmp_function</code> は二つのパラメータを受け取ります。ここにはエントリのペアが渡されます。 比較関数の返り値は、最初の引数が二番目の引数より小さい場合に負の数、 等しい場合にゼロ、大きい場合に正の数となります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayobject.uksort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uksort(callable $cmp_function): void {}

		/**
		 * ArrayObject をアンシリアライズする
		 * <p>シリアライズした ArrayObject をアンシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした ArrayObject。</p>
		 * @return void <p>アンシリアライズした ArrayObject を返します。</p>
		 * @link https://php.net/manual/ja/arrayobject.unserialize.php
		 * @see unserialize()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>未定義の関数をコールバックが参照したり、引数を指定しなかったりした場合にスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.badfunctioncallexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class BadFunctionCallException extends \LogicException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>未定義のメソッドをコールバックが参照したり、引数を指定しなかったりした場合にスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.badmethodcallexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class BadMethodCallException extends \BadFunctionCallException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>このオブジェクトは、別のイテレータからキャッシュされた反復処理をサポートします。</p>
	 * @link https://php.net/manual/ja/class.cachingiterator.php
	 * @since PHP 5, PHP 7
	 */
	class CachingIterator extends \IteratorIterator implements \OuterIterator, \ArrayAccess, \Countable {

		/**
		 * @var integer <p>Convert every element to string.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const CALL_TOSTRING = 1;

		/**
		 * @var integer <p>Don't throw exception in accessing children.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const CATCH_GET_CHILD = 16;

		/**
		 * @var integer <p>Use key for conversion to string.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const TOSTRING_USE_KEY = 2;

		/**
		 * @var integer <p>Use current for conversion to string.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const TOSTRING_USE_CURRENT = 4;

		/**
		 * @var integer <p>Use inner for conversion to string.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const TOSTRING_USE_INNER = 8;

		/**
		 * @var integer <p>Cache all read data.</p>
		 * @link https://php.net/manual/ja/class.cachingiterator.php
		 */
		const FULL_CACHE = 256;

		/**
		 * 新しい CachingIterator オブジェクトを作成する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>キャッシュしたいイテレータ。</p>
		 * @param int $flags <p>フラグのビットマスク。</p>
		 * @return self
		 * @link https://php.net/manual/ja/cachingiterator.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(\Iterator $iterator, int $flags = self::CALL_TOSTRING) {}

		/**
		 * 現在の要素の文字列表現を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の文字列表現を返します。</p>
		 * @return void <p>現在の要素の文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): void {}

		/**
		 * イテレータ内の要素の数
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータ内の要素の数を返します。</p>
		 * @return int <p>イテレータ内の要素の数を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.count.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の要素を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータの現在の要素を返します。</p>
		 * @return void <p>Mixed</p>
		 * @link https://php.net/manual/ja/cachingiterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current(): void {}

		/**
		 * キャッシュの内容を取得する
		 * <p>キャッシュの内容を取得します。</p><p><b>注意</b>:</p><p><b><code>CachingIterator::FULL_CACHE</code></b> フラグを使う必要があります。</p>
		 * @return array <p>キャッシュの内容を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.getcache.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getCache(): array {}

		/**
		 * 使用しているフラグを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>CachingIterator インスタンスが使用するフラグのビットマスクを取得します。</p>
		 * @return int <p>Description...</p>
		 * @link https://php.net/manual/ja/cachingiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 内部イテレータを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>コンストラクタに送信されたイテレータを返します。</p>
		 * @return Iterator <p>Iterator インターフェイスを実装したオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.getinneriterator.php
		 * @since PHP 5, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 内部イテレータが有効な次の要素を持つかどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.hasnext.php
		 * @since PHP 5, PHP 7
		 */
		public function hasNext(): void {}

		/**
		 * 現在の要素のキーを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>このメソッドは、現在の要素のキーを返します。</p>
		 * @return scalar
		 * @link https://php.net/manual/ja/cachingiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * イテレータを前方に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>調べたいインデックス。</p>
		 * @return void <p>そのオフセットがさすエントリが存在する場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetexists.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetExists(string $index): void {}

		/**
		 * The offsetGet purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>Description...</p>
		 * @return void <p>Description...</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetget.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetGet(string $index): void {}

		/**
		 * The offsetSet purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定したい要素のインデックス。</p>
		 * @param string $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetSet(string $index, string $newval): void {}

		/**
		 * The offsetUnset purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定を解除したい要素のインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetunset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetUnset(string $index): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * The setFlags purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>CachingIterator オブジェクトのフラグを設定します。</p>
		 * @param int $flags <p>設定したいフラグのビットマスク。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): void {}
	}

	/**
	 * @link https://php.net/manual/ja/class.callbackfilteriterator.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class CallbackFilterIterator extends \FilterIterator implements \OuterIterator {

		/**
		 * フィルタリングしたイテレータを別のイテレータから作成する
		 * <p><code>callback</code> でフィルタリングしたイテレータを作って、 どのアイテムを受け付けてどれを拒否するかを決めます。</p>
		 * @param \Iterator $iterator <p>フィルタリングするイテレータ。</p>
		 * @param callable $callback <p>コールバック。現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、 拒否する場合に <b><code>FALSE</code></b> を返します。 例 を参照ください。</p> <p>任意の <code>callable</code> 値を指定できます。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/callbackfilteriterator.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(\Iterator $iterator, callable $callback) {}

		/**
		 * 現在の値、現在のキー、そして内部イテレータを引数としてでコールバックを呼び出す
		 * <p>このメソッドは、現在の値とキーそして内部イテレータを使ってコールバックをコールします。</p><p>コールバックは、現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、 拒否する場合に <b><code>FALSE</code></b> を返します。</p>
		 * @return string <p>現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/callbackfilteriterator.accept.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function accept(): string {}

		/**
		 * 現在の要素の値を取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>内部イテレータを取得します。</p>
		 * @return Iterator <p>内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 現在のキーを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のキーを取得します。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * イテレータを前に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.next.php
		 * @see FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return bool <p>現在の要素が有効である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p><b>Countable</b> を実装したクラスは、 <code>count()</code> 関数で使用することができます。</p>
	 * @link https://php.net/manual/ja/class.countable.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface Countable {

		/**
		 * オブジェクトの要素数を数える
		 * <p>このメソッドは、Countable を実装したオブジェクトで <code>count()</code> 関数を使用した際に実行されます。</p>
		 * @return int <p>要素数を <code>integer</code> 型で返します。</p> <p><b>注意</b>:</p> <p>返り値は <code>integer</code> 型にキャストされます。</p>
		 * @link https://php.net/manual/ja/countable.count.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function count(): int;
	}

	/**
	 * <p>DirectoryIterator クラスは、 ファイルシステムのディレクトリを閲覧するためのシンプルなインターフェイスです。</p>
	 * @link https://php.net/manual/ja/class.directoryiterator.php
	 * @since PHP 5, PHP 7
	 */
	class DirectoryIterator extends \SplFileInfo implements \SeekableIterator {

		/**
		 * パスから新規ディレクトリイテレータを生成する
		 * <p>パスから新規ディレクトリイテレータを生成します。</p>
		 * @param string $path <p>処理したいディレクトリのパス。</p>
		 * @return self
		 * @link https://php.net/manual/ja/directoryiterator.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $path) {}

		/**
		 * ファイル名を文字列として取得する
		 * <p>現在の DirectoryIterator のアイテムのファイル名を取得します。</p>
		 * @return string <p>現在の DirectoryIterator のアイテムのファイル名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 現在の DirectoryIterator アイテムを返す
		 * <p>現在の DirectoryIterator アイテムを取得します。</p>
		 * @return DirectoryIterator <p>現在の DirectoryIterator アイテムを返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current(): \DirectoryIterator {}

		/**
		 * 現在の DirectoryIterator アイテムの最終アクセス時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの最終アクセス時刻を取得します。</p>
		 * @return int <p>ファイルの最終アクセス時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7
		 */
		public function getATime(): int {}

		/**
		 * 現在の DirectoryIterator のアイテムのベース名を取得する
		 * <p>現在の DirectoryIterator のアイテムのベース名を取得します。</p>
		 * @param string $suffix <p>ベース名が <code>suffix</code> で終わる場合は、これがカットされます。</p>
		 * @return string <p>現在の DirectoryIterator のアイテムのベース名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getBasename(string $suffix = NULL): string {}

		/**
		 * 現在の DirectoryIterator アイテムの inode 修正時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの inode 修正時刻を取得します。</p>
		 * @return int <p>ファイルの最終更新時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7
		 */
		public function getCTime(): int {}

		/**
		 * ファイルの拡張子を取得する
		 * <p>ファイルの拡張子を取得します。</p>
		 * @return string <p>ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function getExtension(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのファイル名を返す
		 * <p>現在の DirectoryIterator アイテムのファイル名を取得します。</p>
		 * @return string <p>現在の DirectoryIterator アイテムのファイル名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getFilename(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのグループを取得する
		 * <p>ファイルのグループ ID を取得します。</p>
		 * @return int <p>現在の DirectoryIterator アイテムのグループ ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7
		 */
		public function getGroup(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの inode を取得する
		 * <p>現在の DirectoryIterator アイテムの inode 番号を取得します。</p>
		 * @return int <p>ファイルの inode 番号を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7
		 */
		public function getInode(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの最終修正時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの最終修正時刻を Unix タイムスタンプで取得します。</p>
		 * @return int <p>ファイルの最終修正時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7
		 */
		public function getMTime(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの所有者を取得する
		 * <p>現在の DirectoryIterator アイテムの所有者を、数値形式で取得します。</p>
		 * @return int <p>ファイルの所有者を、数値形式で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7
		 */
		public function getOwner(): int {}

		/**
		 * 現在の Iterator アイテムのパスをファイル名抜きで返す
		 * <p>現在の DirectoryIterator アイテムのパスを取得します。</p>
		 * @return string <p>ファイルへのパスを返します。ファイル名や最後のスラッシュは省略します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのパスとファイル名を返す
		 * <p>現在のファイルのパスとファイル名を取得します。</p>
		 * @return string <p>現在のファイルのパスとファイル名を返します。 ディレクトリの最後のスラッシュは含めません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getPathname(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのパーミッションを取得する
		 * <p>現在の DirectoryIterator アイテムのパーミッションを取得します。</p>
		 * @return int <p>ファイルのパーミッションを、十進形式の整数値で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7
		 */
		public function getPerms(): int {}

		/**
		 * 現在の DirectoryIterator アイテムのサイズを取得する
		 * <p>現在の DirectoryIterator アイテムのファイルサイズを取得します。</p>
		 * @return int <p>ファイルサイズをバイト単位で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7
		 */
		public function getSize(): int {}

		/**
		 * 現在の DirectoryIterator アイテムのタイプを判定する
		 * <p>現在の DirectoryIterator アイテムのファイルタイプを判定します。 <i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @return string <p>ファイルタイプを文字列で返します。 <i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @link https://php.net/manual/ja/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7
		 */
		public function getType(): string {}

		/**
		 * 現在の DirectoryIterator アイテムがディレクトリであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがディレクトリかどうかを調べます。</p>
		 * @return bool <p>ディレクトリの場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7
		 */
		public function isDir(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがディレクトリであり、かつ <i>.</i> あるいは <i>..</i> のどちらかであるかどうかを調べます。</p>
		 * @return bool <p>エントリが <i>.</i> あるいは <i>..</i> である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7
		 */
		public function isDot(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが実行可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが実行可能かどうかを調べます。</p>
		 * @return bool <p>エントリが実行可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7
		 */
		public function isExecutable(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが通常のファイルであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが通常のファイルであるかどうかを調べます。</p>
		 * @return bool <p>ファイルが存在し、かつそれが通常のファイルである (<i>link</i> や <i>dir</i> ではない) 場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7
		 */
		public function isFile(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムがシンボリックリンクであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがシンボリックリンクであるかどうかを調べます。</p>
		 * @return bool <p>エントリがシンボリックリンクである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.islink.php
		 * @since PHP 5, PHP 7
		 */
		public function isLink(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが読込可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが読込可能かどうかを調べます。</p>
		 * @return bool <p>ファイルが読込可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7
		 */
		public function isReadable(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが書き込み可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが書き込み可能かどうかを調べます。</p>
		 * @return bool <p>ファイル/ディレクトリが書き込み可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7
		 */
		public function isWritable(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムのキーを返す
		 * <p>現在の DirectoryIterator アイテムのキーを取得します。</p>
		 * @return string <p>現在の DirectoryIterator アイテムのキーを返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): string {}

		/**
		 * 次の DirectoryIterator アイテムに移動する
		 * <p>次の DirectoryIterator アイテムに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * DirectoryIterator を最初に巻き戻す
		 * <p>DirectoryIterator を最初に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * DirectoryIterator のアイテムを移動する
		 * <p>DirectoryIterator の指定した位置に移動します。</p>
		 * @param int $position <p>異動先を表す、ゼロから始まる位置。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function seek(int $position): void {}

		/**
		 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
		 * <p>現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックします。</p>
		 * @return bool <p>有効な位置である場合は <b><code>TRUE</code></b>、それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>定義したデータドメインに値が従わないときにスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.domainexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class DomainException extends \LogicException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>空のイテレータ用の EmptyIterator クラスです。</p>
	 * @link https://php.net/manual/ja/class.emptyiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class EmptyIterator implements \Iterator {

		/**
		 * current() メソッド
		 * <p>このメソッドをコールしてはいけません。アクセスされると例外をスローします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/emptyiterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * key() メソッド
		 * <p>このメソッドをコールしてはいけません。アクセスされると例外をスローします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return scalar <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/emptyiterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * next() メソッド
		 * <p>何もしません。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/emptyiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * rewind() メソッド
		 * <p>何もしません。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/emptyiterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * valid() メソッド
		 * <p>EmptyIterator の valid() メソッドです。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p><b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/emptyiterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Filesystem イテレータです。</p>
	 * @link https://php.net/manual/ja/class.filesystemiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class FilesystemIterator extends \DirectoryIterator implements \SeekableIterator {

		/**
		 * @var integer <p><code>FilesystemIterator::current()</code> がパス名を返すようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const CURRENT_AS_PATHNAME = 32;

		/**
		 * @var integer <p><code>FilesystemIterator::current()</code> が SplFileInfo のインスタンスを返すようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const CURRENT_AS_FILEINFO = 0;

		/**
		 * @var integer <p><code>FilesystemIterator::current()</code> が $this (FilesystemIterator) を返すようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const CURRENT_AS_SELF = 16;

		/**
		 * @var integer <p><code>FilesystemIterator::current()</code> をマスクします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const CURRENT_MODE_MASK = 240;

		/**
		 * @var integer <p><code>FilesystemIterator::key()</code> がパス名を返すようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const KEY_AS_PATHNAME = 0;

		/**
		 * @var integer <p><code>FilesystemIterator::key()</code> がファイル名を返すようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const KEY_AS_FILENAME = 256;

		/**
		 * @var integer <p><code>RecursiveDirectoryIterator::hasChildren()</code> がシンボリックリンクのリンク先をたどるようにします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const FOLLOW_SYMLINKS = 512;

		/**
		 * @var integer <p><code>FilesystemIterator::key()</code> をマスクします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const KEY_MODE_MASK = 3840;

		/**
		 * @var integer <p><i>FilesystemIterator::KEY_AS_FILENAME | FilesystemIterator::CURRENT_AS_FILEINFO</i> と同じ。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const NEW_CURRENT_AND_KEY = 256;

		/**
		 * @var integer <p>ドットファイル (<i>.</i> および <i>..</i>) をスキップします。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const SKIP_DOTS = 4096;

		/**
		 * @var integer <p>システムのデフォルトにかかわらず、Unix スタイルのスラッシュでパスをあらわすようにします。 コンストラクタから渡された <code>path</code> は変更されないことに注意しましょう。</p>
		 * @link https://php.net/manual/ja/class.filesystemiterator.php
		 */
		const UNIX_PATHS = 8192;

		/**
		 * 新しい filesystem イテレータを作成する
		 * <p>新しい filesystem イテレータを <code>path</code> から作成します。</p>
		 * @param string $path <p>反復処理したいファイルシステム上のアイテムへのパス。</p>
		 * @param int $flags <p>フラグを指定すると、いくつかのメソッドの振る舞いを変更することができます。 フラグの一覧は FilesystemIterator の定義済み定数 を参照ください。これは、あとで <code>FilesystemIterator::setFlags()</code> で設定することもできます。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS) {}

		/**
		 * ファイル名を文字列として取得する
		 * <p>現在の DirectoryIterator のアイテムのファイル名を取得します。</p>
		 * @return string <p>現在の DirectoryIterator のアイテムのファイル名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 現在のファイル
		 * <p>現在の要素のファイル情報を取得します。</p>
		 * @return mixed <p>設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。 FilesystemIterator の定数 を参照ください。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * 現在の DirectoryIterator アイテムの最終アクセス時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの最終アクセス時刻を取得します。</p>
		 * @return int <p>ファイルの最終アクセス時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7
		 */
		public function getATime(): int {}

		/**
		 * 現在の DirectoryIterator のアイテムのベース名を取得する
		 * <p>現在の DirectoryIterator のアイテムのベース名を取得します。</p>
		 * @param string $suffix <p>ベース名が <code>suffix</code> で終わる場合は、これがカットされます。</p>
		 * @return string <p>現在の DirectoryIterator のアイテムのベース名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getBasename(string $suffix = NULL): string {}

		/**
		 * 現在の DirectoryIterator アイテムの inode 修正時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの inode 修正時刻を取得します。</p>
		 * @return int <p>ファイルの最終更新時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7
		 */
		public function getCTime(): int {}

		/**
		 * ファイルの拡張子を取得する
		 * <p>ファイルの拡張子を取得します。</p>
		 * @return string <p>ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function getExtension(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのファイル名を返す
		 * <p>現在の DirectoryIterator アイテムのファイル名を取得します。</p>
		 * @return string <p>現在の DirectoryIterator アイテムのファイル名を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getFilename(): string {}

		/**
		 * 処理フラグを取得する
		 * <p><code>FilesystemIterator::__construct()</code> あるいは <code>FilesystemIterator::setFlags()</code> で設定した処理フラグを取得します。</p>
		 * @return int <p>設定されているフラグの値を返します。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 現在の DirectoryIterator アイテムのグループを取得する
		 * <p>ファイルのグループ ID を取得します。</p>
		 * @return int <p>現在の DirectoryIterator アイテムのグループ ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7
		 */
		public function getGroup(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの inode を取得する
		 * <p>現在の DirectoryIterator アイテムの inode 番号を取得します。</p>
		 * @return int <p>ファイルの inode 番号を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7
		 */
		public function getInode(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの最終修正時刻を取得する
		 * <p>現在の DirectoryIterator アイテムの最終修正時刻を Unix タイムスタンプで取得します。</p>
		 * @return int <p>ファイルの最終修正時刻を、Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7
		 */
		public function getMTime(): int {}

		/**
		 * 現在の DirectoryIterator アイテムの所有者を取得する
		 * <p>現在の DirectoryIterator アイテムの所有者を、数値形式で取得します。</p>
		 * @return int <p>ファイルの所有者を、数値形式で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7
		 */
		public function getOwner(): int {}

		/**
		 * 現在の Iterator アイテムのパスをファイル名抜きで返す
		 * <p>現在の DirectoryIterator アイテムのパスを取得します。</p>
		 * @return string <p>ファイルへのパスを返します。ファイル名や最後のスラッシュは省略します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのパスとファイル名を返す
		 * <p>現在のファイルのパスとファイル名を取得します。</p>
		 * @return string <p>現在のファイルのパスとファイル名を返します。 ディレクトリの最後のスラッシュは含めません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7
		 */
		public function getPathname(): string {}

		/**
		 * 現在の DirectoryIterator アイテムのパーミッションを取得する
		 * <p>現在の DirectoryIterator アイテムのパーミッションを取得します。</p>
		 * @return int <p>ファイルのパーミッションを、十進形式の整数値で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7
		 */
		public function getPerms(): int {}

		/**
		 * 現在の DirectoryIterator アイテムのサイズを取得する
		 * <p>現在の DirectoryIterator アイテムのファイルサイズを取得します。</p>
		 * @return int <p>ファイルサイズをバイト単位で返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7
		 */
		public function getSize(): int {}

		/**
		 * 現在の DirectoryIterator アイテムのタイプを判定する
		 * <p>現在の DirectoryIterator アイテムのファイルタイプを判定します。 <i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @return string <p>ファイルタイプを文字列で返します。 <i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @link https://php.net/manual/ja/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7
		 */
		public function getType(): string {}

		/**
		 * 現在のエントリがディレクトリかつ '.' もしくは '..' でないかどうかを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param bool $allow_links
		 * @return bool <p>現在のエントリが ('.' や '..' 以外の) ディレクトリであるかどうかを返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.haschildren.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildren(bool $allow_links = FALSE): bool {}

		/**
		 * 現在の DirectoryIterator アイテムがディレクトリであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがディレクトリかどうかを調べます。</p>
		 * @return bool <p>ディレクトリの場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7
		 */
		public function isDir(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがディレクトリであり、かつ <i>.</i> あるいは <i>..</i> のどちらかであるかどうかを調べます。</p>
		 * @return bool <p>エントリが <i>.</i> あるいは <i>..</i> である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7
		 */
		public function isDot(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが実行可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが実行可能かどうかを調べます。</p>
		 * @return bool <p>エントリが実行可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7
		 */
		public function isExecutable(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが通常のファイルであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが通常のファイルであるかどうかを調べます。</p>
		 * @return bool <p>ファイルが存在し、かつそれが通常のファイルである (<i>link</i> や <i>dir</i> ではない) 場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7
		 */
		public function isFile(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムがシンボリックリンクであるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムがシンボリックリンクであるかどうかを調べます。</p>
		 * @return bool <p>エントリがシンボリックリンクである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.islink.php
		 * @since PHP 5, PHP 7
		 */
		public function isLink(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが読込可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが読込可能かどうかを調べます。</p>
		 * @return bool <p>ファイルが読込可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7
		 */
		public function isReadable(): bool {}

		/**
		 * 現在の DirectoryIterator アイテムが書き込み可能であるかどうかを調べる
		 * <p>現在の DirectoryIterator アイテムが書き込み可能かどうかを調べます。</p>
		 * @return bool <p>ファイル/ディレクトリが書き込み可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7
		 */
		public function isWritable(): bool {}

		/**
		 * 現在のファイルのキーを取得する
		 * @return string <p>設定されているフラグに応じてパス名あるいはファイル名を返します。 FilesystemIterator の定数 も参照ください。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): string {}

		/**
		 * 次のファイルに移動する
		 * <p>次のファイルに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 先頭に巻き戻す
		 * <p>ディレクトリを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * DirectoryIterator のアイテムを移動する
		 * <p>DirectoryIterator の指定した位置に移動します。</p>
		 * @param int $position <p>異動先を表す、ゼロから始まる位置。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function seek(int $position): void {}

		/**
		 * 処理フラグを設定する
		 * <p>処理フラグを設定します。</p>
		 * @param int $flags <p>設定する処理フラグ。 FilesystemIterator の定数 も参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setFlags(int $flags = NULL): void {}

		/**
		 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
		 * <p>現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックします。</p>
		 * @return bool <p>有効な位置である場合は <b><code>TRUE</code></b>、それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/directoryiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>この抽象イテレータは、望まざる値をフィルタリングします。 独自のイテレータフィルタを実装するには、このクラスを継承しなければなりません。 また、サブクラスでは <code>FilterIterator::accept()</code> を実装する必要があります。</p>
	 * @link https://php.net/manual/ja/class.filteriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	abstract class FilterIterator extends \IteratorIterator implements \OuterIterator {

		/**
		 * filterIterator を作成する
		 * <p>新しい FilterIterator を作成します。 これは、イテレータとそれに適用するフィルタで構成されています。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>フィルタリングの対象となるイテレータ。</p>
		 * @return self <p>FilterIterator を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * イテレータの現在の要素がフィルタを満たすかどうかを調べる
		 * <p>イテレータの現在の要素がこのフィルタを通過するかどうかを返します。</p>
		 * @return bool <p>現在の要素が通過する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public abstract function accept(): bool;

		/**
		 * 現在の要素の値を取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>内部イテレータを取得します。</p>
		 * @return Iterator <p>内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 現在のキーを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のキーを取得します。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * イテレータを前に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.next.php
		 * @see FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return bool <p>現在の要素が有効である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>ファイルシステムで、<code>glob()</code> と同じ形式の反復処理を行います。</p>
	 * @link https://php.net/manual/ja/class.globiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class GlobIterator extends \FilesystemIterator implements \SeekableIterator, \Countable {

		/**
		 * glob を使うディレクトリを作成する
		 * <p>glob 式から新しいディレクトリイテレータを作成します。</p>
		 * @param string $path <p>ディレクトリへのパス。</p>
		 * @param int $flags <p>オプションのフラグ。 FilesystemIterator 定数のビットマスクとなります。</p>
		 * @return self
		 * @link https://php.net/manual/ja/globiterator.construct.php
		 * @see glob()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

		/**
		 * ディレクトリやファイルの数を取得する
		 * <p>glob 式から見つかったディレクトリやファイルの数を取得します。</p>
		 * @return int <p>返されたディレクトリやファイルの数を <code>integer</code> で返します。</p>
		 * @link https://php.net/manual/ja/globiterator.count.php
		 * @see count(), glob()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在のファイル
		 * <p>現在の要素のファイル情報を取得します。</p>
		 * @return mixed <p>設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。 FilesystemIterator の定数 を参照ください。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * 処理フラグを取得する
		 * <p><code>FilesystemIterator::__construct()</code> あるいは <code>FilesystemIterator::setFlags()</code> で設定した処理フラグを取得します。</p>
		 * @return int <p>設定されているフラグの値を返します。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 現在のファイルのキーを取得する
		 * @return string <p>設定されているフラグに応じてパス名あるいはファイル名を返します。 FilesystemIterator の定数 も参照ください。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): string {}

		/**
		 * 次のファイルに移動する
		 * <p>次のファイルに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 先頭に巻き戻す
		 * <p>ディレクトリを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 処理フラグを設定する
		 * <p>処理フラグを設定します。</p>
		 * @param int $flags <p>設定する処理フラグ。 FilesystemIterator の定数 も参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setFlags(int $flags = NULL): void {}
	}

	/**
	 * <p><b>InfiniteIterator</b> は、 他のイテレータを受け取って無限に反復させます。 最後までたどり着いたときに手動で巻き戻す必要はありません。</p>
	 * @link https://php.net/manual/ja/class.infiniteiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class InfiniteIterator extends \IteratorIterator implements \OuterIterator {

		/**
		 * InfiniteIterator を作成する
		 * <p>イテレータから InfiniteIterator を作成します。</p>
		 * @param \Iterator $iterator <p>無限に処理し続けるイテレータ。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/infiniteiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * 現在の値を取得する
		 * <p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>内部イテレータを取得します。</p>
		 * @return Traversable <p><code>IteratorIterator::__construct()</code> に渡した内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Traversable {}

		/**
		 * 現在の要素のキーを取得する
		 * <p>現在の要素のキーを取得します。</p>
		 * @return scalar <p>現在の要素のキーを返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * 内部イテレータを次に移動するか、巻き戻す
		 * <p>次の要素があるときは、イテレータを次の要素に移動します。 要素がないときは、内部イテレータを開始位置に巻き戻します。</p><p><b>注意</b>:</p><p>内部イテレータが空の場合は InfiniteIterator も停止します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/infiniteiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 最初の要素に巻き戻す
		 * <p>最初の要素に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * イテレータが有効かどうかを調べる
		 * <p>イテレータが有効かどうかを調べます。</p>
		 * @return bool <p>イテレータが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.valid.php
		 * @see iterator_count()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>引数の型が期待する型と一致しなかった場合にスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.invalidargumentexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class InvalidArgumentException extends \LogicException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>このイテレータラッパーを使うと、 Traversable なものなら何でもイテレータに変換することができます。 注意すべきなのは、Iterator を実装していない大半のクラスにはそれなりの理由 (Iterator の機能群を完全には提供できないなど) があるということです。 もしそうならば、誤使用を防ぐような方法を提供すべきです、 でなければ、例外や致命的なエラーが起こり得ます。</p>
	 * @link https://php.net/manual/ja/class.iteratoriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class IteratorIterator implements \OuterIterator {

		/**
		 * traversable な何かからイテレータを作成する
		 * <p>traversable な何かからイテレータを作成します。</p>
		 * @param \Traversable $iterator <p>traversable なイテレータ。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Traversable $iterator) {}

		/**
		 * 現在の値を取得する
		 * <p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>内部イテレータを取得します。</p>
		 * @return Traversable <p><code>IteratorIterator::__construct()</code> に渡した内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Traversable {}

		/**
		 * 現在の要素のキーを取得する
		 * <p>現在の要素のキーを取得します。</p>
		 * @return scalar <p>現在の要素のキーを返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * 次の要素に移動する
		 * <p>次の要素に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 最初の要素に巻き戻す
		 * <p>最初の要素に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * イテレータが有効かどうかを調べる
		 * <p>イテレータが有効かどうかを調べます。</p>
		 * @return bool <p>イテレータが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iteratoriterator.valid.php
		 * @see iterator_count()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>長さが無効な場合にスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.lengthexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class LengthException extends \LogicException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p><b>LimitIterator</b> クラスは、ある Iterator 上の限られたサブセットに対する反復処理を行います。</p>
	 * @link https://php.net/manual/ja/class.limititerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class LimitIterator extends \IteratorIterator implements \OuterIterator {

		/**
		 * LimitIterator を作成する
		 * <p>開始位置 <code>offset</code> と最大数 <code>count</code> を指定したイテレータ <code>iterator</code> から 新しい LimitIterator を作成します。</p>
		 * @param \Iterator $iterator <p>制限したいイテレータ。</p>
		 * @param int $offset <p>オプションの開始位置。</p>
		 * @param int $count <p>オプションの要素数。</p>
		 * @return self <p>新しい LimitIterator を返します。</p>
		 * @link https://php.net/manual/ja/limititerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Iterator $iterator, int $offset = 0, int $count = -1) {}

		/**
		 * 現在の要素を取得する
		 * <p>内部イテレータの現在の要素を取得します。</p>
		 * @return mixed <p>現在の要素、あるいは現在の要素がない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/limititerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>内部イテレータを取得します。</p>
		 * @return Iterator <p><code>LimitIterator::__construct()</code> に渡された内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/limititerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 現在の位置を返す
		 * <p>内部 Iterator の、ゼロから数えた現在位置を返します。</p>
		 * @return int <p>現在の位置を返します。</p>
		 * @link https://php.net/manual/ja/limititerator.getposition.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getPosition(): int {}

		/**
		 * 現在のキーを取得する
		 * <p>内部イテレータの現在の要素のキーを取得します。</p>
		 * @return mixed <p>現在の要素のキーを返します。</p>
		 * @link https://php.net/manual/ja/limititerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * イテレータを前に移動する
		 * <p>イテレータを前に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/limititerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを指定した開始オフセットに巻き戻す
		 * <p>イテレータを、<code>LimitIterator::__construct()</code> で指定した開始オフセットに巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/limititerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 与えられた位置に移動する
		 * <p>イテレータを、<code>position</code> で指定したオフセットに移動します。</p>
		 * @param int $position <p>移動したい位置。</p>
		 * @return int <p>移動後のオフセット位置を返します。</p>
		 * @link https://php.net/manual/ja/limititerator.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function seek(int $position): int {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>現在の要素が有効かどうかをチェックします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/limititerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>プログラムのロジック内でのエラーを表す例外です。 この類の例外が出た場合は、自分が書いたコードを修正すべきです。</p>
	 * @link https://php.net/manual/ja/class.logicexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class LogicException extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>アタッチしたすべてのイテレータを順に処理するイテレータです。</p>
	 * @link https://php.net/manual/ja/class.multipleiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class MultipleIterator implements \Iterator {

		/**
		 * @var integer <p>すべてのサブイテレータが処理可能であることを必要としません。</p>
		 * @link https://php.net/manual/ja/class.multipleiterator.php
		 */
		const MIT_NEED_ANY = 0;

		/**
		 * @var integer <p>すべてのサブイテレータが正しく反復処理できることを要求します。</p>
		 * @link https://php.net/manual/ja/class.multipleiterator.php
		 */
		const MIT_NEED_ALL = 1;

		/**
		 * @var integer <p>キーは、サブイテレータの位置から作成されます。</p>
		 * @link https://php.net/manual/ja/class.multipleiterator.php
		 */
		const MIT_KEYS_NUMERIC = 0;

		/**
		 * @var integer <p>キーは、サブイテレータに関連付けられた情報から作成されます。</p>
		 * @link https://php.net/manual/ja/class.multipleiterator.php
		 */
		const MIT_KEYS_ASSOC = 2;

		/**
		 * 新しい MultipleIterator を作成する
		 * <p>新しい MultipleIterator を作成します。</p>
		 * @param int $flags <p>設定するフラグ。 フラグ定数 を参照ください。</p><ul> <li> <b><code>MultipleIterator::MIT_NEED_ALL</code></b> あるいは <b><code>MultipleIterator::MIT_NEED_ANY</code></b> </li> <li> <b><code>MultipleIterator::MIT_KEYS_NUMERIC</code></b> あるいは <b><code>MultipleIterator::MIT_KEYS_ASSOC</code></b> </li> </ul> <p>デフォルトは <b><code>MultipleIterator::MIT_NEED_ALL</code></b>|<b><code>MultipleIterator::MIT_KEYS_NUMERIC</code></b> です。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/multipleiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(int $flags = MultipleIterator::MIT_NEED_ALL|MultipleIterator::MIT_KEYS_NUMERIC) {}

		/**
		 * イテレータの情報をアタッチする
		 * <p>イテレータの情報をアタッチします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>アタッチする新しいイテレータ。</p>
		 * @param string $infos <p>イテレータに関連する情報。 <code>integer</code>、<code>string</code> あるいは <b><code>NULL</code></b> でなければなりません。</p>
		 * @return void
		 * @link https://php.net/manual/ja/multipleiterator.attachiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function attachIterator(\Iterator $iterator, string $infos = NULL): void {}

		/**
		 * イテレータがアタッチされているかどうかを調べる
		 * <p>イテレータがアタッチされているかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>調べたいイタレータ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/multipleiterator.containsiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function containsIterator(\Iterator $iterator): bool {}

		/**
		 * アタッチされているイテレータインスタンスの数を取得する
		 * <p>アタッチされているイテレータインスタンスの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>アタッチされているイテレータインスタンスの数を (<code>integer</code> で) 返します</p>
		 * @link https://php.net/manual/ja/multipleiterator.countiterators.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function countIterators(): int {}

		/**
		 * 登録されているイテレータインスタンスを取得する
		 * <p>登録されているイテレータインスタンスの current() の結果を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>アタッチされている各イテレータの現在の値を含む配列を返します。 イテレータがアタッチされていない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/multipleiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current(): array {}

		/**
		 * イテレータをデタッチする
		 * <p>イテレータをデタッチします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>デタッチするイテレータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/multipleiterator.detachiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function detachIterator(\Iterator $iterator): void {}

		/**
		 * フラグの情報を取得する
		 * <p>フラグについての情報を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>フラグについての情報を <code>integer</code> で返します。</p>
		 * @link https://php.net/manual/ja/multipleiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 登録されているイテレータインスタンスを取得する
		 * <p>登録されているイテレータインスタンスの key() の結果を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>登録されているイテレータインスタンスを取得しますの配列を返します。 サブイテレータがアタッチされていない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/multipleiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): array {}

		/**
		 * アタッチしているすべてのイテレータインスタンスを次に移動させる
		 * <p>アタッチしているすべてのイテレータインスタンスを次に移動させます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/multipleiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * アタッチしているすべてのイテレータインスタンスを巻き戻す
		 * <p>アタッチしているすべてのイテレータインスタンスを巻き戻します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/multipleiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * フラグを設定する
		 * <p>フラグを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $flags <p>設定するフラグ。 フラグ定数 を参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/multipleiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * サブイテレータの有効性を調べる
		 * <p>サブイテレータの有効性を調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>サブイテレータのひとつあるいはすべて (フラグによって異なります) が有効な場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/multipleiterator.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>このイテレータは巻き戻しできません。</p>
	 * @link https://php.net/manual/ja/class.norewinditerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class NoRewindIterator extends \IteratorIterator {

		/**
		 * NoRewindIterator を作成する
		 * <p>NoRewindIterator を作成します。</p>
		 * @param \Iterator $iterator <p>使用するイテレータ。</p>
		 * @return self <p>渡されたイテレータにもとづく <b>NoRewindIterator()</b> を返します。</p>
		 * @link https://php.net/manual/ja/norewinditerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * 現在の値を取得する
		 * <p>現在の値を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>現在の値を返します。</p>
		 * @link https://php.net/manual/ja/norewinditerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * 内部イテレータを取得する
		 * <p>内部イテレータを取得します。これは NoRewindIterator に渡されたものです。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return iterator <p><code>NoRewindIterator::__construct()</code> で渡した内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/norewinditerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \iterator {}

		/**
		 * 現在のキーを取得する
		 * <p>現在のキーを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/norewinditerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次の要素に移動する
		 * <p>次の要素に移動します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/norewinditerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 内部イテレータの巻き戻し操作を阻止する
		 * <p>内部イテレータの巻き戻し操作を阻止します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/norewinditerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * イテレータの有効性を検証する
		 * <p>イテレータが有効かどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/norewinditerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p><b>OuterIterator</b> を実装したクラスは、 イテレータ群の反復処理に使うことができます。</p>
	 * @link https://php.net/manual/ja/class.outeriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface OuterIterator extends Iterator {

		/**
		 * 現在の要素を返す
		 * <p>現在の要素を返します。</p>
		 * @return mixed <p>あらゆる型を返すことが可能です。</p>
		 * @link https://php.net/manual/ja/iterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current();

		/**
		 * 現在のエントリの内部イテレータを返す
		 * <p>現在のイテレータエントリの内部イテレータを返します。</p>
		 * @return Iterator <p>現在のエントリの内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/outeriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator;

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

	/**
	 * <p>値が有効なキーでなかった場合にスローされる例外です。 これは、コンパイル時には検出できないエラーです。</p>
	 * @link https://php.net/manual/ja/class.outofboundsexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class OutOfBoundsException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>無効なインデックスを要求した場合にスローされる例外です。 これは、コンパイル時に検出しなければなりません。</p>
	 * @link https://php.net/manual/ja/class.outofrangeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class OutOfRangeException extends \LogicException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>いっぱいになっているコンテナに要素を追加した場合にスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.overflowexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class OverflowException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>これは FilterIterator を継承したクラスで、 RecursiveIteratorIterator を使った再帰的な反復処理をできるようにします。 ただし、子を持つ要素しか表示しません。</p>
	 * @link https://php.net/manual/ja/class.parentiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class ParentIterator extends \RecursiveFilterIterator implements \RecursiveIterator, \OuterIterator {

		/**
		 * ParentIterator を作成する
		 * <p>イテレータ上に ParentIterator を作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \RecursiveIterator $iterator <p>作成する元となるイテレータ。</p>
		 * @return self <p>ParentIterator を返します。</p>
		 * @link https://php.net/manual/ja/parentiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\RecursiveIterator $iterator) {}

		/**
		 * 受け入れ可能かどうかを調べる
		 * <p>現在の要素が子を持っているかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>受け入れ可能な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/parentiterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function accept(): bool {}

		/**
		 * ParentIterator に含まれる内部イテレータの子を返す
		 * <p>ParentIterator に含まれる内部イテレータの子を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ParentIterator <p>オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/parentiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): \ParentIterator {}

		/**
		 * 内部イテレータの現在の要素が子を持つかどうかをチェックする
		 * <p>内部イテレータの現在の要素が子を持つかどうかをチェックします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/parentiterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * イテレータを前に移動する
		 * <p>イテレータを前に移動します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/parentiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>イテレータを巻き戻します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/parentiterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}
	}

	/**
	 * <p>プログラムの実行時に範囲エラーが発生したことを示すときにスローされる例外です。 通常は、アンダーフローやオーバーフロー以外の計算エラーが発生したことを意味します。 これは、実行時版の DomainException です。</p>
	 * @link https://php.net/manual/ja/class.rangeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class RangeException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>このイテレータは、<code>ArrayIterator</code> と同じように配列やオブジェクトを反復処理しつつ、 そのキーや値を消去したり書き換えたりすることができます。 さらに、現在のイテレータのエントリを反復処理することも可能です。</p>
	 * @link https://php.net/manual/ja/class.recursivearrayiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator {

		/**
		 * @var integer <p>Treat only arrays (not objects) as having children for recursive iteration.</p>
		 * @link https://php.net/manual/ja/class.recursivearrayiterator.php
		 */
		const CHILD_ARRAYS_ONLY = 4;

		/**
		 * ArrayIterator を作成する
		 * <p>ArrayIterator オブジェクトを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $array <p>反復処理をする配列あるいはオブジェクト。</p>
		 * @param int $flags <p>ArrayIterator オブジェクトの振る舞いを制御するフラグ。 <code>ArrayIterator::setFlags()</code> を参照ください。</p>
		 * @return self <p>ArrayIterator オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($array = array(), int $flags = 0) {}

		/**
		 * 要素を追加する
		 * <p>値を最後の要素として追加します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.append.php
		 * @since PHP 5, PHP 7
		 */
		public function append($value): void {}

		/**
		 * 値で配列をソートする
		 * <p>値で配列をソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.asort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function asort(): void {}

		/**
		 * 要素を数える
		 * <p>配列の要素の数、あるいはオブジェクトの public プロパティの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>連想配列の場合は要素の数、オブジェクトの場合は public プロパティの数を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.count.php
		 * @since PHP 5, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列エントリを返す
		 * <p>現在の配列エントリを取得します。</p>
		 * @return mixed <p>現在の配列エントリを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current() {}

		/**
		 * 配列のコピーを取得する
		 * <p>配列のコピーを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>配列のコピーを返します。 ArrayIterator がオブジェクトを参照している場合は public プロパティの配列を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.getarraycopy.php
		 * @since PHP 5, PHP 7
		 */
		public function getArrayCopy(): array {}

		/**
		 * 現在のエントリが配列あるいはオブジェクトである場合に、そのイテレータを返す
		 * <p>現在のエントリのイテレータを返します。</p>
		 * @return RecursiveArrayIterator <p>現在のエントリが配列あるいはオブジェクトである場合に、そのイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursivearrayiterator.getchildren.php
		 * @see RecursiveArrayIterator::hasChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): \RecursiveArrayIterator {}

		/**
		 * フラグを取得する
		 * <p>現在のフラグを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>現在のフラグを返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getFlags(): void {}

		/**
		 * 現在のエントリが配列あるいはオブジェクトであるかどうかを返す
		 * <p>現在のエントリが配列あるいはオブジェクトであるかどうか、つまり <code>RecursiveArrayIterator::getChildren()</code> でイテレータを取得できるかどうかを返します。</p>
		 * @return bool <p>現在のエントリが配列あるいはオブジェクトである場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivearrayiterator.haschildren.php
		 * @see RecursiveArrayIterator::getChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * 現在の配列キーを返す
		 * <p>この関数は、現在の配列キーを返します</p>
		 * @return mixed <p>この関数は、現在の配列キーを返します</p>
		 * @link https://php.net/manual/ja/arrayiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key() {}

		/**
		 * キーで配列をソートする
		 * <p>キーで配列をソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.ksort.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function ksort(): void {}

		/**
		 * 大文字小文字を区別せずに自然順で配列をソートする
		 * <p>大文字小文字を区別しない "自然順" アルゴリズムを使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.natcasesort.php
		 * @see natcasesort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natcasesort(): void {}

		/**
		 * 自然順で配列をソートする
		 * <p>"自然順" アルゴリズムを使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.natsort.php
		 * @see natsort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function natsort(): void {}

		/**
		 * 次のエントリに移動する
		 * <p>この関数は次のエントリにイテレータを移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * オフセットが存在するかどうかを調べる
		 * <p>オフセットが存在するかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>調べたいオフセット。</p>
		 * @return void <p>オフセットが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetexists.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetExists(string $index): void {}

		/**
		 * オフセットの値を取得する
		 * <p>指定したオフセットの値を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>値を取得したいオフセット。</p>
		 * @return mixed <p>オフセット <code>index</code> の値を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetget.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetGet(string $index) {}

		/**
		 * オフセットの値を設定する
		 * <p>指定したオフセットの値を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定したいインデックス。</p>
		 * @param string $newval <p>インデックスに格納する新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetSet(string $index, string $newval): void {}

		/**
		 * オフセットの値を削除する
		 * <p>オフセットの値を削除します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>削除したいオフセット。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.offsetunset.php
		 * @since PHP 5, PHP 7
		 */
		public function offsetUnset(string $index): void {}

		/**
		 * 配列を最初に巻き戻す
		 * <p>イテレータを最初に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 位置を移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $position <p>移動する位置。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.seek.php
		 * @since PHP 5, PHP 7
		 */
		public function seek(int $position): void {}

		/**
		 * シリアライズする
		 * <p>シリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>シリアライズした ArrayIterator を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.serialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 振る舞いのフラグを設定する
		 * <p>振る舞いのフラグを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $flags <p>次のビットマスク。</p><ul> <li> 0 = オブジェクトのプロパティがリストとして (var_dump, foreach などで) アクセスされたときに通常の機能を持たせるようにする。 </li> <li> 1 = 配列のインデックスを、読み書き時にプロパティとしてアクセスできるようにする。 </li> </ul>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setFlags(string $flags): void {}

		/**
		 * ユーザー定義のソート
		 * <p>ユーザー定義の関数を使って、値でエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $cmp_function <p>ソートに使う比較関数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.uasort.php
		 * @see usort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uasort(string $cmp_function): void {}

		/**
		 * ユーザー定義のソート
		 * <p>ユーザー定義の関数を使って、キーでエントリをソートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $cmp_function <p>ソートに使う比較関数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/arrayiterator.uksort.php
		 * @see uksort()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function uksort(string $cmp_function): void {}

		/**
		 * アンシリアライズする
		 * <p>アンシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした ArrayIterator オブジェクト。</p>
		 * @return string <p>ArrayIterator を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.unserialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unserialize(string $serialized): string {}

		/**
		 * 配列がまだエントリを持っているかどうかチェックする
		 * <p>配列がまだエントリを持っているかどうかチェックします。</p>
		 * @return bool <p>イテレータが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/arrayiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>...</p>
	 * @link https://php.net/manual/ja/class.recursivecachingiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class RecursiveCachingIterator extends \CachingIterator implements \Countable, \ArrayAccess, \OuterIterator, \RecursiveIterator {

		/**
		 * コンストラクタ
		 * <p><code>iterator</code> で渡されたイテレータをもとにして新しい RecursiveCachingIterator を作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Iterator $iterator <p>使用するイテレータ。</p>
		 * @param string $flags <p>フラグ。<b><code>CALL_TOSTRING</code></b> は <b>RecursiveCachingIterator::__toString()</b> をすべての要素に対してコールします (デフォルト)。 <b><code>CATCH_GET_CHILD</code></b> は 子を取得しようとしたときに発生する例外を捕捉します。</p>
		 * @return self <p>RecursiveCachingIterator を返します。</p>
		 * @link https://php.net/manual/ja/recursivecachingiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\Iterator $iterator, string $flags = 'self::CALL_TOSTRING') {}

		/**
		 * 現在の要素の文字列表現を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の文字列表現を返します。</p>
		 * @return void <p>現在の要素の文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): void {}

		/**
		 * イテレータ内の要素の数
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータ内の要素の数を返します。</p>
		 * @return int <p>イテレータ内の要素の数を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.count.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の要素を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータの現在の要素を返します。</p>
		 * @return void <p>Mixed</p>
		 * @link https://php.net/manual/ja/cachingiterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current(): void {}

		/**
		 * キャッシュの内容を取得する
		 * <p>キャッシュの内容を取得します。</p><p><b>注意</b>:</p><p><b><code>CachingIterator::FULL_CACHE</code></b> フラグを使う必要があります。</p>
		 * @return array <p>キャッシュの内容を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.getcache.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getCache(): array {}

		/**
		 * 内部イテレータの子を RecursiveCachingIterator として返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return RecursiveCachingIterator <p>内部イテレータの子を RecursiveCachingIterator として返します。</p>
		 * @link https://php.net/manual/ja/recursivecachingiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): \RecursiveCachingIterator {}

		/**
		 * 使用しているフラグを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>CachingIterator インスタンスが使用するフラグのビットマスクを取得します。</p>
		 * @return int <p>Description...</p>
		 * @link https://php.net/manual/ja/cachingiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 内部イテレータを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>コンストラクタに送信されたイテレータを返します。</p>
		 * @return Iterator <p>Iterator インターフェイスを実装したオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.getinneriterator.php
		 * @since PHP 5, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 内部イテレータの現在の要素が子を持つかどうかチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>内部イテレータが子を持つ場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivecachingiterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * 内部イテレータが有効な次の要素を持つかどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.hasnext.php
		 * @since PHP 5, PHP 7
		 */
		public function hasNext(): void {}

		/**
		 * 現在の要素のキーを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>このメソッドは、現在の要素のキーを返します。</p>
		 * @return scalar
		 * @link https://php.net/manual/ja/cachingiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): \scalar {}

		/**
		 * イテレータを前方に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>調べたいインデックス。</p>
		 * @return void <p>そのオフセットがさすエントリが存在する場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetexists.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetExists(string $index): void {}

		/**
		 * The offsetGet purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>Description...</p>
		 * @return void <p>Description...</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetget.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetGet(string $index): void {}

		/**
		 * The offsetSet purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定したい要素のインデックス。</p>
		 * @param string $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetSet(string $index, string $newval): void {}

		/**
		 * The offsetUnset purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $index <p>設定を解除したい要素のインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.offsetunset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function offsetUnset(string $index): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * The setFlags purpose
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>CachingIterator オブジェクトのフラグを設定します。</p>
		 * @param int $flags <p>設定したいフラグのビットマスク。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/cachingiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/cachingiterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): void {}
	}

	/**
	 * @link https://php.net/manual/ja/class.recursivecallbackfilteriterator.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class RecursiveCallbackFilterIterator extends \CallbackFilterIterator implements \OuterIterator, \RecursiveIterator {

		/**
		 * RecursiveIterator から RecursiveCallbackFilterIterator を作成する
		 * <p><code>callback</code> でフィルタリングした <code>RecursiveIterator</code> を作って、 どのアイテムを受け付けてどれを拒否するかを決めます。</p>
		 * @param \RecursiveIterator $iterator <p>フィルタリングする再帰イテレータ。</p>
		 * @param string $callback <p>コールバック。現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、 拒否する場合に <b><code>FALSE</code></b> を返します。 例 を参照ください。</p> <p>任意の <code>callable</code> 値を指定できます。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivecallbackfilteriterator.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(\RecursiveIterator $iterator, string $callback) {}

		/**
		 * 現在の値、現在のキー、そして内部イテレータを引数としてでコールバックを呼び出す
		 * <p>このメソッドは、現在の値とキーそして内部イテレータを使ってコールバックをコールします。</p><p>コールバックは、現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、 拒否する場合に <b><code>FALSE</code></b> を返します。</p>
		 * @return string <p>現在のアイテムを受け付ける場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/callbackfilteriterator.accept.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function accept(): string {}

		/**
		 * RecursiveCallbackFilterIterator に含まれる内部イテレータの子を返す
		 * <p>内部イテレータのフィルタリングした子を取得します。</p><p><code>RecursiveCallbackFilterIterator::hasChildren()</code> を使って、取得できる子があるかどうかを調べなければなりません。</p>
		 * @return RecursiveCallbackFilterIterator <p>子を含む RecursiveCallbackFilterIterator を返します。</p>
		 * @link https://php.net/manual/ja/recursivecallbackfilteriterator.getchildren.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getChildren(): \RecursiveCallbackFilterIterator {}

		/**
		 * 内部イテレータの現在の要素が子を持つかどうかを調べる
		 * <p>現在の要素が子を持つときに <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @return bool <p>現在の要素が子を持つときに <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivecallbackfilteriterator.haschildren.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function hasChildren(): bool {}
	}

	/**
	 * <p><b>RecursiveDirectoryIterator</b> は、 ファイルシステムのディレクトリを再帰的に反復処理するためのインターフェイスです。</p>
	 * @link https://php.net/manual/ja/class.recursivedirectoryiterator.php
	 * @since PHP 5, PHP 7
	 */
	class RecursiveDirectoryIterator extends \FilesystemIterator implements \SeekableIterator, \RecursiveIterator {

		/**
		 * RecursiveDirectoryIterator を作成する
		 * <p>指定したパス <code>path</code> の <b>RecursiveDirectoryIterator()</b> を作成します。</p>
		 * @param string $path <p>反復処理の対象となるディレクトリのパス。</p>
		 * @param int $flags <p>フラグを指定して、いくつかのメソッドの振る舞いを変更することができます。 フラグの一覧は FilesystemIterator の定義済み定数 にあります。フラグは、あとから <code>FilesystemIterator::setFlags()</code> で設定することもできます。</p>
		 * @return self <p>新しく作成した RecursiveDirectoryIterator を返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.construct.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

		/**
		 * 現在のファイル
		 * <p>現在の要素のファイル情報を取得します。</p>
		 * @return mixed <p>設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。 FilesystemIterator の定数 を参照ください。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * ディレクトリであれば、現在のエントリに対するイテレータを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>ファイル名、ファイル情報、あるいは $this のどれかを、 設定されているフラグによって返します。 FilesystemIterator の定数 も参照ください。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren() {}

		/**
		 * 処理フラグを取得する
		 * <p><code>FilesystemIterator::__construct()</code> あるいは <code>FilesystemIterator::setFlags()</code> で設定した処理フラグを取得します。</p>
		 * @return int <p>設定されているフラグの値を返します。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * サブパスを取得する
		 * <p>サブパスを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>サブパス (サブディレクトリ) を返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.getsubpath.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getSubPath(): string {}

		/**
		 * サブパスと名前を取得する
		 * <p>サブパスとファイル名を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>サブパス (サブディレクトリ) とファイル名を返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.getsubpathname.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getSubPathname(): string {}

		/**
		 * 現在のエントリがディレクトリかつ '.' もしくは '..' でないかどうかを返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param bool $allow_links
		 * @return bool <p>現在のエントリが ('.' や '..' 以外の) ディレクトリであるかどうかを返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.haschildren.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildren(bool $allow_links = FALSE): bool {}

		/**
		 * 現在のディレクトリエントリのパスとファイル名を返す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>現在のディレクトリエントリのパスとファイル名を返します。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): string {}

		/**
		 * 次のエントリに移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * ディレクトリを最初に巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivedirectoryiterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 処理フラグを設定する
		 * <p>処理フラグを設定します。</p>
		 * @param int $flags <p>設定する処理フラグ。 FilesystemIterator の定数 も参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setFlags(int $flags = NULL): void {}
	}

	/**
	 * <p>この抽象イテレータは、不要な値を RecursiveIterator から取り除きます。 このクラスを継承して、独自のフィルタを実装することができます。 <b>RecursiveFilterIterator::accept()</b> は、サブクラスで必ず実装しなければなりません。</p>
	 * @link https://php.net/manual/ja/class.recursivefilteriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	abstract class RecursiveFilterIterator extends \FilterIterator implements \OuterIterator, \RecursiveIterator {

		/**
		 * RecursiveIterator から RecursiveFilterIterator を作成する
		 * <p>RecursiveIterator から RecursiveFilterIterator を作成します。</p>
		 * @param \RecursiveIterator $iterator <p>フィルタリングする RecursiveIterator。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivefilteriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function __construct(\RecursiveIterator $iterator) {}

		/**
		 * イテレータの現在の要素がフィルタを満たすかどうかを調べる
		 * <p>イテレータの現在の要素がこのフィルタを通過するかどうかを返します。</p>
		 * @return bool <p>現在の要素が通過する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public abstract function accept(): bool;

		/**
		 * 現在の要素の値を取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * RecursiveFilterIterator に含まれる内部イテレータの子を返す
		 * <p>RecursiveFilterIterator に含まれる内部イテレータの子を返します。</p>
		 * @return RecursiveFilterIterator <p>RecursiveFilterIterator に含まれる内部イテレータの子を返します。</p>
		 * @link https://php.net/manual/ja/recursivefilteriterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): \RecursiveFilterIterator {}

		/**
		 * 内部イテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>内部イテレータを取得します。</p>
		 * @return Iterator <p>内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 内部イテレータの現在の要素が子を持つかどうかを調べる
		 * <p>内部イテレータの現在の要素が子を持つかどうかを調べます。</p>
		 * @return bool <p>内部イテレータが子を持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivefilteriterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * 現在のキーを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のキーを取得します。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * イテレータを前に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.next.php
		 * @see FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return bool <p>現在の要素が有効である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p><b>RecursiveIterator</b> を実装したクラスは、 イテレータ群を再帰的に反復処理するときに使うことができます。</p>
	 * @link https://php.net/manual/ja/class.recursiveiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface RecursiveIterator extends Iterator {

		/**
		 * 現在の要素を返す
		 * <p>現在の要素を返します。</p>
		 * @return mixed <p>あらゆる型を返すことが可能です。</p>
		 * @link https://php.net/manual/ja/iterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current();

		/**
		 * 現在のエントリのイテレータを返す
		 * <p>現在のエントリのイテレータを返します。</p>
		 * @return RecursiveIterator <p>現在のエントリのイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiterator.getchildren.php
		 * @see RecursiveIterator::hasChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): \RecursiveIterator;

		/**
		 * 現在のエントリのイテレータを作れるかどうかを返す
		 * <p>現在のエントリのイテレータを作れるかどうかを返します。</p>
		 * @return bool <p>現在のエントリが反復処理可能な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiterator.haschildren.php
		 * @see RecursiveIterator::getChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function hasChildren(): bool;

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

	/**
	 * <p>再帰的なイテレータの反復処理に使用します。</p>
	 * @link https://php.net/manual/ja/class.recursiveiteratoriterator.php
	 * @since PHP 5, PHP 7
	 */
	class RecursiveIteratorIterator implements \OuterIterator {

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursiveiteratoriterator.php
		 */
		const LEAVES_ONLY = 0;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursiveiteratoriterator.php
		 */
		const SELF_FIRST = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursiveiteratoriterator.php
		 */
		const CHILD_FIRST = 2;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursiveiteratoriterator.php
		 */
		const CATCH_GET_CHILD = 16;

		/**
		 * RecursiveIteratorIterator を作成する
		 * <p>RecursiveIterator から RecursiveIteratorIterator を作成します。</p>
		 * @param \Traversable $iterator <p>作成する元となるイテレータ。 RecursiveIterator あるいは IteratorAggregate。</p>
		 * @param int $mode <p>オプションのモード。これらの値が指定できます。</p><ul> <li> <b><code>RecursiveIteratorIterator::LEAVES_ONLY</code></b> - デフォルト。イテレーションで葉ノードだけを取り上げます。 </li> <li> <b><code>RecursiveIteratorIterator::SELF_FIRST</code></b> - イテレーションで葉と親を (親から先に) 取り上げます。 </li> <li> <b><code>RecursiveIteratorIterator::CHILD_FIRST</code></b> - イテレーションで葉と親を (葉から先に) 取り上げます。 </li> </ul>
		 * @param int $flags <p>オプションのフラグ。指定できる値は <b><code>RecursiveIteratorIterator::CATCH_GET_CHILD</code></b> で、<b>RecursiveIteratorIterator::getChildren()</b> のコール時にスローされた例外を無視します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.construct.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function __construct(\Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0) {}

		/**
		 * 子を開始する
		 * <p><b>RecursiveIteratorIterator::getChildren()</b> と、それに関連する <code>RecursiveIteratorIterator::rewind()</code> をコールした後でコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.beginchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function beginChildren(): void {}

		/**
		 * 反復処理を開始する
		 * <p>反復処理が始まるとき (最初に <code>RecursiveIteratorIterator::rewind()</code> がコールされた後) にコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.beginiteration.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function beginIteration(): void {}

		/**
		 * 子を取得する
		 * <p>現在の要素の子を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return RecursiveIterator <p><b>RecursiveIterator()</b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.callgetchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function callGetChildren(): \RecursiveIterator {}

		/**
		 * 子を持つかどうかを調べる
		 * <p>各要素に対して、子を持っているかどうかを調べるためにコールします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>要素に子がある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.callhaschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function callHasChildren(): bool {}

		/**
		 * 現在の要素の値にアクセスする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current() {}

		/**
		 * 子を終了する
		 * <p>そのレベルの再帰処理が終了したときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.endchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function endChildren(): void {}

		/**
		 * 反復処理を終了する
		 * <p>反復処理が終了したとき (<code>RecursiveIteratorIterator::valid()</code> が最初に <b><code>FALSE</code></b> を返したとき) にコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.enditeration.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function endIteration(): void {}

		/**
		 * 再帰的なイテレーションにおける現在の深さを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>再帰的なイテレーションにおける現在の深さを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getdepth.php
		 * @since PHP 5, PHP 7
		 */
		public function getDepth(): int {}

		/**
		 * 内部イテレータを取得する
		 * <p>現在アクティブなサブイテレータを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return iterator <p>現在アクティブなサブイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \iterator {}

		/**
		 * 最大の深さを取得する
		 * <p>許可される最大の深さを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>許可される最大の深さ、あるいは無制限の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getMaxDepth() {}

		/**
		 * 現在の有効なサブイテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $level
		 * @return RecursiveIterator <p>現在の有効なサブイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getsubiterator.php
		 * @since PHP 5, PHP 7
		 */
		public function getSubIterator(int $level = NULL): \RecursiveIterator {}

		/**
		 * 現在のキーにアクセスする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key() {}

		/**
		 * 次の要素に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * 次の要素
		 * <p>次の要素が利用可能となったときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.nextelement.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function nextElement(): void {}

		/**
		 * トップレベルの内部イテレータの先頭要素にイテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 最大の深さを設定する
		 * <p>許可される最大の深さを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $max_depth <p>許可される最大の深さ。<i>-1</i> を指定すると無制限にできます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.setmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setMaxDepth(string $max_depth = '-1'): void {}

		/**
		 * 現在の位置が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>現在の位置が有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>この再帰イテレータは、別の再帰イテレータを正規表現でフィルタリングすることができます。</p>
	 * @link https://php.net/manual/ja/class.recursiveregexiterator.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class RecursiveRegexIterator extends \RegexIterator implements \RecursiveIterator {

		/**
		 * 新しい RecursiveRegexIterator を作成する
		 * <p>新しい正規表現イテレータを作成します。</p>
		 * @param \RecursiveIterator $iterator <p>この正規表現フィルタを適用するイテレータ。</p>
		 * @param string $regex <p>マッチさせる正規表現。</p>
		 * @param int $mode <p>操作モード。モードの一覧は <code>RegexIterator::setMode()</code> を参照ください。</p>
		 * @param int $flags <p>特殊なフラグ。フラグの一覧は <code>RegexIterator::setFlags()</code> を参照ください。</p>
		 * @param int $preg_flags <p>正規表現フラグ。これらのフラグは操作モードに依存します。</p> <p></p> <b>RegexIterator preg_flags</b>   操作モード 使用可能なフラグ     RecursiveRegexIterator::ALL_MATCHES  <code>preg_match_all()</code> を参照ください。    RecursiveRegexIterator::GET_MATCH  <code>preg_match()</code> を参照ください。    RecursiveRegexIterator::MATCH  <code>preg_match()</code> を参照ください。    RecursiveRegexIterator::REPLACE  なし。    RecursiveRegexIterator::SPLIT  <code>preg_split()</code> を参照ください。
		 * @return self
		 * @link https://php.net/manual/ja/recursiveregexiterator.construct.php
		 * @see preg_match(), preg_match_all(), preg_replace(), preg_split()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(\RecursiveIterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0) {}

		/**
		 * 受け入れ状況を取得する
		 * <p><i>(string)</i> <b>RegexIterator::current()</b> (RegexIterator::USE_KEY フラグが設定されている場合は <b>RegexIterator::key()</b>) を正規表現でマッチさせます。</p>
		 * @return bool <p>マッチした場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.accept.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function accept(): bool {}

		/**
		 * 現在のエントリのイテレータを返す
		 * <p>現在のエントリのイテレータを返します。</p>
		 * @return RecursiveRegexIterator <p>内部イテレータで反復処理が可能な場合に、現在のエントリのイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveregexiterator.getchildren.php
		 * @see RecursiveRegexIterator::hasChildren()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getChildren(): \RecursiveRegexIterator {}

		/**
		 * フラグを取得する
		 * <p>フラグを返します。使用可能なフラグの一覧は <code>RegexIterator::setFlags()</code> を参照ください。</p>
		 * @return int <p>設定されているフラグを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 操作モードを返す
		 * <p>操作モードを返します。操作モードの一覧は <code>RegexIterator::setMode()</code> を参照ください。</p>
		 * @return int <p>操作モードを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getMode(): int {}

		/**
		 * 正規表現フラグを返す
		 * <p>正規表現フラグを返します。使用可能なフラグの一覧は <code>RegexIterator::__construct()</code> を参照ください。</p>
		 * @return int <p>正規表現フラグのビットマスクを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getPregFlags(): int {}

		/**
		 * 現在の正規表現を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/regexiterator.getregex.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getRegex(): string {}

		/**
		 * 現在のエントリのイテレータが取得可能かどうかを返す
		 * <p>現在のエントリのイテレータが取得可能かどうかを返すこのイテレータは <code>RecursiveRegexIterator::getChildren()</code> で取得します。</p>
		 * @return bool <p>現在のエントリのイテレータが取得可能な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveregexiterator.haschildren.php
		 * @see RecursiveRegexIterator::getChildren()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * フラグを設定する
		 * <p>フラグを設定します。</p>
		 * @param int $flags <p>設定するフラグ。クラス定数のビットマスクで指定します。</p> <p>利用できるフラグは次のとおりです。これらのフラグの実際の意味については 定義済みの定数 で説明します。</p> <b>RegexIterator のフラグ</b>   値 定数     1  RegexIterator::USE_KEY
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * 操作モードを設定する
		 * <p>操作モードを設定します。</p>
		 * @param int $mode <p>操作モード。</p> <p>操作モードは次のとおりです。これらのモードの実際の意味については 定義済みの定数 で説明します。</p> <b>RegexIterator のモード</b>   値 定数     0  RegexIterator::MATCH    1  RegexIterator::GET_MATCH    2  RegexIterator::ALL_MATCHES    3  RegexIterator::SPLIT    4  RegexIterator::REPLACE
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setMode(int $mode): void {}

		/**
		 * 正規表現フラグを設定する
		 * <p>正規表現フラグを設定します。</p>
		 * @param int $preg_flags <p>正規表現フラグ。利用できるフラグの概要は <code>RegexIterator::__construct()</code> を参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setPregFlags(int $preg_flags): void {}
	}

	/**
	 * <p>RecursiveIterator を反復処理し、ASCII グラフィックツリーを生成します。</p>
	 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class RecursiveTreeIterator extends \RecursiveIteratorIterator implements \OuterIterator {

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const BYPASS_CURRENT = 4;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const BYPASS_KEY = 8;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_LEFT = 0;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_MID_HAS_NEXT = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_MID_LAST = 2;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_END_HAS_NEXT = 3;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_END_LAST = 4;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.recursivetreeiterator.php
		 */
		const PREFIX_RIGHT = 5;

		/**
		 * RecursiveTreeIterator を作成する
		 * <p>新しい RecursiveTreeIterator を、指定した再帰イテレータから作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \RecursiveIterator|\IteratorAggregate $it <p>RecursiveIterator あるいは IteratorAggregate。</p>
		 * @param int $flags <p>フラグを指定して一部のメソッドの振る舞いを変更することができます。 フラグの一覧は RecursiveTreeIterator の定義済み定数 にあります。</p>
		 * @param int $cit_flags
		 * @param int $mode <p>内部的に使う RecursiveIteratorIterator の振る舞いを変更するフラグ。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct($it, int $flags = RecursiveTreeIterator::BYPASS_KEY, int $cit_flags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveIteratorIterator::SELF_FIRST) {}

		/**
		 * 子を開始する
		 * <p>一段下がるときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.beginchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function beginChildren(): void {}

		/**
		 * 反復処理を開始する
		 * <p>反復処理を開始するとき (最初に <code>RecursiveTreeIterator::rewind()</code> がコールされた後) にコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return RecursiveIterator <p>RecursiveIterator を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.beginiteration.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function beginIteration(): \RecursiveIterator {}

		/**
		 * 子を取得する
		 * <p>現在の要素の子を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return RecursiveIterator <p>RecursiveIterator を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.callgetchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function callGetChildren(): \RecursiveIterator {}

		/**
		 * 子を持っているかどうかを調べる
		 * <p>各要素が子を持っているかどうかを調べるときにコールします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>子がある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.callhaschildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function callHasChildren(): bool {}

		/**
		 * 現在の要素を取得する
		 * <p>接頭辞と接尾辞をつけた現在の要素を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>接頭辞と接尾辞をつけた現在の要素を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current(): string {}

		/**
		 * 子を終了する
		 * <p>一段下の再帰処理が終了したときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.endchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function endChildren(): void {}

		/**
		 * 反復処理を終了する
		 * <p>反復処理が終了したとき (<code>RecursiveTreeIterator::valid()</code> が最初に <b><code>FALSE</code></b> を返したとき) にコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.enditeration.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function endIteration(): void {}

		/**
		 * 再帰的なイテレーションにおける現在の深さを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>再帰的なイテレーションにおける現在の深さを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getdepth.php
		 * @since PHP 5, PHP 7
		 */
		public function getDepth(): int {}

		/**
		 * 現在のエントリを取得する
		 * <p>現在の要素から作ったツリーを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>現在の要素から作ったツリーを返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.getentry.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getEntry(): string {}

		/**
		 * 内部イテレータを取得する
		 * <p>現在アクティブなサブイテレータを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return iterator <p>現在アクティブなサブイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \iterator {}

		/**
		 * 最大の深さを取得する
		 * <p>許可される最大の深さを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return mixed <p>許可される最大の深さ、あるいは無制限の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getMaxDepth() {}

		/**
		 * 接尾辞を取得する
		 * <p>現在の要素の後に置く文字列を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>現在の要素の後に置く文字列を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.getpostfix.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPostfix(): void {}

		/**
		 * 接頭辞を取得する
		 * <p>現在の要素の前に置く文字列を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>現在の要素の前に置く文字列を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.getprefix.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPrefix(): string {}

		/**
		 * 現在の有効なサブイテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $level
		 * @return RecursiveIterator <p>現在の有効なサブイテレータを返します。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.getsubiterator.php
		 * @since PHP 5, PHP 7
		 */
		public function getSubIterator(int $level = NULL): \RecursiveIterator {}

		/**
		 * 現在の要素のキーを取得する
		 * <p>接頭辞と接尾辞をつけた現在のキーを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>接頭辞と接尾辞をつけた現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): string {}

		/**
		 * 次の要素に移動する
		 * <p>次の要素に移動します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 次の要素
		 * <p>次の要素が利用可能となったときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.nextelement.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function nextElement(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>トップレベルの内部イテレータの最初の要素にイテレータを巻き戻します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 最大の深さを設定する
		 * <p>許可される最大の深さを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $max_depth <p>許可される最大の深さ。<i>-1</i> を指定すると無制限にできます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursiveiteratoriterator.setmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setMaxDepth(string $max_depth = '-1'): void {}

		/**
		 * Set postfix
		 * <p>Sets postfix as used in <code>RecursiveTreeIterator::getPostfix()</code>.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $postfix
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.setpostfix.php
		 * @since PHP 5 >= 5.5.3, PHP 7
		 */
		public function setPostfix(string $postfix): void {}

		/**
		 * 接頭辞の部分を設定する
		 * <p>グラフィックツリーで使う接頭辞を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param int $part <p>RecursiveTreeIterator::PREFIX_&#42; 定数のいずれか。</p>
		 * @param string $value <p><code>part</code> で指定した接頭辞に代入する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.setprefixpart.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setPrefixPart(int $part, string $value): void {}

		/**
		 * 有効性を調べる
		 * <p>現在位置が有効かどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>現在位置が有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/recursivetreeiterator.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>このイテレータを使うと、別のイテレータを正規表現でフィルタリングすることができます。</p>
	 * @link https://php.net/manual/ja/class.regexiterator.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class RegexIterator extends \FilterIterator {

		/**
		 * @var integer <p>現在のエントリに対するマッチ (フィルタ) のみを行います (<code>preg_match()</code> を参照ください)。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const MATCH = 0;

		/**
		 * @var integer <p>現在のエントリに最初にマッチしたものを返します (<code>preg_match()</code> を参照ください)。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const GET_MATCH = 1;

		/**
		 * @var integer <p>現在のエントリにマッチするものをすべて返します (<code>preg_match_all()</code> を参照ください)。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const ALL_MATCHES = 2;

		/**
		 * @var integer <p>現在のエントリで分割した値を返します (<code>preg_split()</code> を参照ください)。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const SPLIT = 3;

		/**
		 * @var integer <p>現在のエントリを置換します (<code>preg_replace()</code> を参照ください。まだ完全には実装されていません)。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const REPLACE = 4;

		/**
		 * @var integer <p>特別なフラグ: エントリの値ではなく、キーにマッチさせます。</p>
		 * @link https://php.net/manual/ja/class.regexiterator.php
		 */
		const USE_KEY = 1;

		/**
		 * 新しい RegexIterator を作成する
		 * <p>新しい RegexIterator を作成します。これは、正規表現を使って <code>Iterator</code> をフィルタリングします。</p>
		 * @param \Iterator $iterator <p>この正規表現フィルタを適用するイテレータ。</p>
		 * @param string $regex <p>マッチさせる正規表現。</p>
		 * @param int $mode <p>操作モード。モードの一覧は <code>RegexIterator::setMode()</code> を参照ください。</p>
		 * @param int $flags <p>特殊なフラグ。フラグの一覧は <code>RegexIterator::setFlags()</code> を参照ください。</p>
		 * @param int $preg_flags <p>正規表現フラグ。これらのフラグは操作モードに依存します。</p> <p></p> <b>RegexIterator preg_flags</b>   操作モード 使用可能なフラグ     RegexIterator::ALL_MATCHES  <code>preg_match_all()</code> を参照ください。    RegexIterator::GET_MATCH  <code>preg_match()</code> を参照ください。    RegexIterator::MATCH  <code>preg_match()</code> を参照ください。    RegexIterator::REPLACE  なし。    RegexIterator::SPLIT  <code>preg_split()</code> を参照ください。
		 * @return self
		 * @link https://php.net/manual/ja/regexiterator.construct.php
		 * @see preg_match(), preg_match_all(), preg_replace(), preg_split()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(\Iterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0) {}

		/**
		 * 受け入れ状況を取得する
		 * <p><i>(string)</i> <b>RegexIterator::current()</b> (RegexIterator::USE_KEY フラグが設定されている場合は <b>RegexIterator::key()</b>) を正規表現でマッチさせます。</p>
		 * @return bool <p>マッチした場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.accept.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function accept(): bool {}

		/**
		 * 現在の要素の値を取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素の値を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * フラグを取得する
		 * <p>フラグを返します。使用可能なフラグの一覧は <code>RegexIterator::setFlags()</code> を参照ください。</p>
		 * @return int <p>設定されているフラグを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 内部イテレータを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>内部イテレータを取得します。</p>
		 * @return Iterator <p>内部イテレータを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * 操作モードを返す
		 * <p>操作モードを返します。操作モードの一覧は <code>RegexIterator::setMode()</code> を参照ください。</p>
		 * @return int <p>操作モードを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getMode(): int {}

		/**
		 * 正規表現フラグを返す
		 * <p>正規表現フラグを返します。使用可能なフラグの一覧は <code>RegexIterator::__construct()</code> を参照ください。</p>
		 * @return int <p>正規表現フラグのビットマスクを返します。</p>
		 * @link https://php.net/manual/ja/regexiterator.getpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getPregFlags(): int {}

		/**
		 * 現在の正規表現を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/regexiterator.getregex.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getRegex(): string {}

		/**
		 * 現在のキーを取得する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在のキーを取得します。</p>
		 * @return mixed <p>現在のキーを返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key() {}

		/**
		 * イテレータを前に移動する
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを前方に移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.next.php
		 * @see FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * イテレータを巻き戻す
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>イテレータを巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * フラグを設定する
		 * <p>フラグを設定します。</p>
		 * @param int $flags <p>設定するフラグ。クラス定数のビットマスクで指定します。</p> <p>利用できるフラグは次のとおりです。これらのフラグの実際の意味については 定義済みの定数 で説明します。</p> <b>RegexIterator のフラグ</b>   値 定数     1  RegexIterator::USE_KEY
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * 操作モードを設定する
		 * <p>操作モードを設定します。</p>
		 * @param int $mode <p>操作モード。</p> <p>操作モードは次のとおりです。これらのモードの実際の意味については 定義済みの定数 で説明します。</p> <b>RegexIterator のモード</b>   値 定数     0  RegexIterator::MATCH    1  RegexIterator::GET_MATCH    2  RegexIterator::ALL_MATCHES    3  RegexIterator::SPLIT    4  RegexIterator::REPLACE
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setMode(int $mode): void {}

		/**
		 * 正規表現フラグを設定する
		 * <p>正規表現フラグを設定します。</p>
		 * @param int $preg_flags <p>正規表現フラグ。利用できるフラグの概要は <code>RegexIterator::__construct()</code> を参照ください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/regexiterator.setpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setPregFlags(int $preg_flags): void {}

		/**
		 * 現在の要素が有効かどうかをチェックする
		 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p><p>現在の要素が有効かどうかをチェックします。</p>
		 * @return bool <p>現在の要素が有効である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>実行時にだけ発生するようなエラーの際にスローされます。</p>
	 * @link https://php.net/manual/ja/class.runtimeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class RuntimeException extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Seekable イテレータです。</p>
	 * @link https://php.net/manual/ja/class.seekableiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface SeekableIterator extends Iterator {

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
		 * 位置を移動する
		 * <p>イテレータ内の指定した位置に移動します。</p>
		 * @param int $position <p>移動先の位置。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/seekableiterator.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function seek(int $position): void;

		/**
		 * 現在位置が有効かどうかを調べる
		 * <p>このメソッドは <code>Iterator::rewind()</code> および <code>Iterator::next()</code> の後にコールされ、 現在の位置が有効化どうかを調べます。</p>
		 * @return bool <p>返り値は <code>boolean</code> にキャストして評価されます。 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool;
	}

	/**
	 * <p>SplDoublyLinkedList クラスは、双方向リンクリストの主要な機能を提供します。</p>
	 * @link https://php.net/manual/ja/class.spldoublylinkedlist.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplDoublyLinkedList implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * 新しい双方向リンクリストを作成する
		 * <p>新しい空の双方向リンクリストを作成します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>newval</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param mixed $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $newval <p>The new value for the <code>index</code>.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function add($index, $newval): void {}

		/**
		 * 双方向リンクリストの最初のノードを取得する
		 * @return mixed <p>最初のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bottom() {}

		/**
		 * 双方向リンクリストの要素数を数える
		 * @return int <p>双方向リンクリストの要素数を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列の要素を返す
		 * <p>双方向リンクリストの現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * 反復処理のモードを返す
		 * @return int <p>反復処理の才のモードおよびフラグを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getIteratorMode(): int {}

		/**
		 * 双方向リンクリストが空かどうかを調べる
		 * @return bool <p>双方向リンクリストが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この館数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のエントリに移動する
		 * <p>イテレータを次のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 指定した $index が存在するかどうかを返す
		 * @param mixed $index <p>調べたいインデックス。</p>
		 * @return bool <p>指定した <code>index</code> が存在する場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetExists($index): bool {}

		/**
		 * 指定した $index の値を返す
		 * @param mixed $index <p>値を取得したいインデックス。</p>
		 * @return mixed <p>指定した <code>index</code> の値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetGet($index) {}

		/**
		 * 指定した $index の値を $newval に設定する
		 * <p>指定した <code>index</code> の値を <code>newval</code> に設定します。</p>
		 * @param mixed $index <p>設定したいインデックス。</p>
		 * @param mixed $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetSet($index, $newval): void {}

		/**
		 * 指定した $index の値を削除する
		 * <p>指定したインデックスの値を削除します。</p>
		 * @param mixed $index <p>削除したいインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetUnset($index): void {}

		/**
		 * 双方向リンクリストの末尾からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function pop() {}

		/**
		 * 前のエントリに移動する
		 * <p>イテレータを前のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prev(): void {}

		/**
		 * 双方向リンクリストの末尾に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの末尾に追加します。</p>
		 * @param mixed $value <p>追加したい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function push($value): void {}

		/**
		 * イテレータを先頭に巻き戻す
		 * <p>イテレータを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ストレージをシリアライズする
		 * <p>ストレージをシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>シリアライズした文字列を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 反復処理のモードを設定する
		 * @param int $mode <p>次の 2 種類の直交するモードを設定できます。</p> <ul> <li> 反復処理の方向 (いずれかを選択) <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_LIFO</code></b> (スタック方式)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> (キュー方式)</li> </ul> </li> <li> イテレータの振る舞い (いずれかを選択) <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_DELETE</code></b> (イテレータが要素を削除する)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b> (イテレータが要素を順にたどる)</li> </ul> </li> </ul> <p>デフォルトのモードは <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> | <b><code>SplDoublyLnkedList::IT_MODE_KEEP</code></b> です。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setIteratorMode(int $mode): void {}

		/**
		 * 双方向リンクリストの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function shift() {}

		/**
		 * 双方向リンクリストの最後のノードを取得する
		 * @return mixed <p>最後のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ストレージをデシリアライズする
		 * <p><code>SplDoublyLinkedList::serialize()</code> でシリアライズしたストレージを復元します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした文字列。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * 双方向リンクリストの先頭に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの先頭に追加します。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unshift($value): void {}

		/**
		 * 双方向リンクリストにまだノードがあるかどうかを調べる
		 * <p>双方向リンクリストにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>双方向リンクリストにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplFileInfo クラスは、各ファイルの情報を取得するための上位レベルのオブジェクト指向インターフェイスです。</p>
	 * @link https://php.net/manual/ja/class.splfileinfo.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	class SplFileInfo {

		/**
		 * ファイルへのパスを文字列で返す
		 * <p>このメソッドは、参照するファイルのファイル名を返します。</p>
		 * @return void <p>ファイルへのパスを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.tostring.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function __toString(): void {}

		/**
		 * ファイルの最終アクセス時刻を取得する
		 * <p>ファイルの最終アクセス時刻を取得します。</p>
		 * @return int <p>ファイルに最後にアクセスがあった時刻を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getATime(): int {}

		/**
		 * ファイルのベース名を取得する
		 * <p>このメソッドは、ファイルやディレクトリそしてリンクからパス情報を除いたベース名を返します。</p>
		 * @param string $suffix <p>返されるベース名から取り除きたい、オプションのサフィックス。</p>
		 * @return string <p>パス情報を含まないベース名を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getBasename(string $suffix = NULL): string {}

		/**
		 * inode 変更時刻を取得する
		 * <p>ファイルの inode が変更された時刻を返します。返される時刻は Unix タイムスタンプ形式です。</p>
		 * @return int <p>最終変更時刻を Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getCTime(): int {}

		/**
		 * ファイルの拡張子を取得する
		 * <p>ファイルの拡張子を取得します。</p>
		 * @return string <p>ファイルの拡張子を含む文字列を返します。 拡張子がないときは、空文字列を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function getExtension(): string {}

		/**
		 * ファイルの SplFileInfo オブジェクトを取得する
		 * <p>このメソッドは、参照先のファイルの SplFileInfo オブジェクトを取得します。</p>
		 * @param string $class_name <p>使用したい SplFileInfo 派生クラスの名前。</p>
		 * @return SplFileInfo <p>そのファイル用に作成した SplFileInfo オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getFileInfo(string $class_name = NULL): \SplFileInfo {}

		/**
		 * ファイル名を取得する
		 * <p>パス情報を一切含まないファイル名を取得します。</p>
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getFilename(): string {}

		/**
		 * ファイルのグループを取得する
		 * <p>ファイルのグループを取得します。グループ ID を数値形式で返します。</p>
		 * @return int <p>グループ ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getGroup(): int {}

		/**
		 * ファイルの inode を取得する
		 * <p>ファイルシステムオブジェクトの inode 番号を取得します。</p>
		 * @return int <p>ファイルシステムオブジェクトの inode 番号を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getInode(): int {}

		/**
		 * リンク先を取得する
		 * <p>ファイルシステムのリンク先を取得します。</p><p><b>注意</b>:</p><p>リンク先は、ファイルシステム上の実際のパスではないかもしれません。 <code>SplFileInfo::getRealPath()</code> を使用して、ファイルシステム上の実際のパスを調べます。</p>
		 * @return string <p>ファイルシステムのリンク先を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getLinkTarget(): string {}

		/**
		 * 最終変更時刻を取得する
		 * <p>ファイルの中身が変更された時刻を返します。返される時刻は Unix タイムスタンプ形式となります。</p>
		 * @return int <p>ファイルの最終変更時刻を Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getMTime(): int {}

		/**
		 * ファイルの所有者を取得する
		 * <p>ファイルの所有者を取得します。オーナー ID は数値形式で返されます。</p>
		 * @return int <p>オーナー ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getOwner(): int {}

		/**
		 * ファイル名を除いたパスを取得する
		 * <p>ファイルへのパスを返します。ファイル名や最後のスラッシュは取り除きます。</p>
		 * @return string <p>ファイルへのパスを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * パスの SplFileInfo オブジェクトを取得する
		 * <p>現在のファイルの親を表す SplFileInfo オブジェクトを取得します。</p>
		 * @param string $class_name <p>使用したい SplFileInfo 派生クラスの名前。</p>
		 * @return SplFileInfo <p>ファイルの親のパスの SplFileInfo オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPathInfo(string $class_name = NULL): \SplFileInfo {}

		/**
		 * ファイルへのパスを取得する
		 * <p>ファイルへのパスを返します。</p>
		 * @return string <p>ファイルへのパスを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPathname(): string {}

		/**
		 * ファイルのパーミッションを取得する
		 * <p>ファイルのパーミッションを取得します。</p>
		 * @return int <p>ファイルのパーミッションを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPerms(): int {}

		/**
		 * ファイルへの絶対パスを取得する
		 * <p>このメソッドは、すべてのシンボリックリンクを展開して相対参照を解決し、 ファイルへの実際のパスを返します。</p>
		 * @return string <p>ファイルへのパスを返します。ファイルが存在しない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getRealPath(): string {}

		/**
		 * ファイルサイズを取得する
		 * <p>参照するファイルのファイルサイズをバイト数で返します。</p>
		 * @return int <p>ファイルサイズをバイト数で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getSize(): int {}

		/**
		 * ファイルタイプを取得する
		 * <p>参照するファイルの型を返します。</p>
		 * @return string <p>このエントリの型を文字列で返します。<i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @link https://php.net/manual/ja/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getType(): string {}

		/**
		 * ファイルがディレクトリかどうかを調べる
		 * <p>このメソッドを使用して、ファイルがディレクトリかどうかを調べます。</p>
		 * @return bool <p>ディレクトリである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isDir(): bool {}

		/**
		 * ファイルが実行可能かどうかを調べる
		 * <p>ファイルが実行可能かどうかを調べます。</p>
		 * @return bool <p>実行可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isExecutable(): bool {}

		/**
		 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
		 * <p>この SplFileInfo オブジェクトが参照するファイルが存在し、通常のファイルであるかどうかを調べます。</p>
		 * @return bool <p>ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isFile(): bool {}

		/**
		 * ファイルがリンクであるかどうかを調べる
		 * <p>このメソッドを使用して、SplFileInfo オブジェクトが参照するファイルがリンクであるかどうかを調べます。</p>
		 * @return bool <p>ファイルがリンクである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isLink(): bool {}

		/**
		 * ファイルが読み込み可能か調べる
		 * <p>ファイルが読み込み可能かどうかを調べます。</p>
		 * @return bool <p>読み込み可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isReadable(): bool {}

		/**
		 * エントリが書き込み可能であるかどうかを調べる
		 * <p>現在のエントリが書き込み可能かどうかを調べます。</p>
		 * @return bool <p>書き込み可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isWritable(): bool {}

		/**
		 * ファイルの SplFileObject オブジェクトを取得する
		 * <p>ファイルの SplFileObject オブジェクトを作成します。 これが便利なのは、SplFileObject にはファイルを操作するためのさまざまなメソッドが追加されているからです。 SplFileInfo には、 たとえばファイルが書き込み可能かどうかなどといった情報を取得するだけの機能しかありません。</p>
		 * @param string $open_mode <p>ファイルを開く際のモード。使用できるモードについての説明は <code>fopen()</code> のドキュメントを参照ください。 デフォルトは読み込み専用となります。</p>
		 * @param bool $use_include_path <p><b><code>TRUE</code></b> に設定すると、このファイル名を include_path の中からも探します。</p>
		 * @param resource $context <p><i>コンテキスト</i> についての説明は、 マニュアルの コンテキスト の節を参照ください。</p>
		 * @return SplFileObject <p>オープンしたファイルを SplFileObject オブジェクトで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function openFile(string $open_mode = "r", bool $use_include_path = FALSE, $context = NULL): \SplFileObject {}

		/**
		 * SplFileInfo::openFile() で使用するクラスを設定する
		 * <p><code>SplFileInfo::openFile()</code> が呼ばれたときに使用する、カスタムクラスを設定します。 このメソッドに渡すクラス名は、SplFileObject あるいはその派生クラスのものでなければいけません。</p>
		 * @param string $class_name <p><code>SplFileInfo::openFile()</code> がコールされた際に使用するクラス名。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setFileClass(string $class_name = "SplFileObject"): void {}

		/**
		 * SplFileInfo::getFileInfo() および SplFileInfo::getPathInfo() で使用するクラスを設定する
		 * <p>このメソッドで、 <code>SplFileInfo::getFileInfo()</code> および <code>SplFileInfo::getPathInfo()</code> がコールされた際に使用するカスタムクラスを設定します。 このメソッドに渡すクラス名は、SplFileInfo あるいはその派生クラスのものでなければいけません。</p>
		 * @param string $class_name <p><code>SplFileInfo::getFileInfo()</code> および <code>SplFileInfo::getPathInfo()</code> がコールされた際に使用するクラス名。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setInfoClass(string $class_name = "SplFileInfo"): void {}
	}

	/**
	 * <p>SplFileObject クラスはファイルのためのオブジェクト指向のインターフェイスを提供します。</p>
	 * @link https://php.net/manual/ja/class.splfileobject.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class SplFileObject extends \SplFileInfo implements \RecursiveIterator, \SeekableIterator {

		/**
		 * @var integer <p>行末の改行を読み飛ばします。</p>
		 * @link https://php.net/manual/ja/class.splfileobject.php
		 */
		const DROP_NEW_LINE = 1;

		/**
		 * @var integer <p>先読み/巻き戻しで読み出します。</p>
		 * @link https://php.net/manual/ja/class.splfileobject.php
		 */
		const READ_AHEAD = 2;

		/**
		 * @var integer <p>ファイルの空行を読み飛ばします。期待通りに動作させるには、<b><code>READ_AHEAD</code></b> フラグを有効にしないといけません。</p>
		 * @link https://php.net/manual/ja/class.splfileobject.php
		 */
		const SKIP_EMPTY = 4;

		/**
		 * @var integer <p>CSV 列として行を読み込みます。</p>
		 * @link https://php.net/manual/ja/class.splfileobject.php
		 */
		const READ_CSV = 8;

		/**
		 * SplFileObject::current() のエイリアス
		 * <p>このメソッドは <code>SplFileObject::current()</code> のエイリアスです。</p>
		 * @link https://php.net/manual/ja/splfileobject.tostring.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		function __toString() {}

		/**
		 * ファイルの現在の行を取得する
		 * <p>ファイルの現在の行を取得します。</p>
		 * @return string|array <p>ファイルの現在の行を取得します。<b><code>SplFileObject::READ_CSV</code></b> フラグがセットされている場合、このメソッドは CSV データとして処理された現在の行を格納している配列を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * ファイルの終端に到達しているか調べる
		 * <p>ファイルの終端に到達しているか調べます。</p>
		 * @return bool <p>ファイルが終端であれば <b><code>TRUE</code></b>、そうでなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.eof.php
		 * @see feof()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function eof(): bool {}

		/**
		 * 出力をファイルにフラッシュする
		 * <p>バッファリングされたすべての出力をファイルに強制的に書き込みます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fflush.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fflush(): bool {}

		/**
		 * ファイルから文字を取り出す
		 * <p>ファイルから 1 文字取り出す。</p>
		 * @return string <p>ファイルから読み込まれた 1 文字を含む文字列もしくは終端の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetc.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetc(): string {}

		/**
		 * ファイルから行を取り出し CSV フィールドとして処理する
		 * <p>CSV フォーマットのファイルから行を取り出し読み込まれたフィールドを含む配列を返します。</p>
		 * @param string $delimiter <p>フィールドの区切り文字 (1 文字のみ)。デフォルトはカンマもしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @param string $enclosure <p>フィールド囲み文字 (1 文字のみ)。デフォルトはダブルクォートもしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @param string $escape <p>エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ (<i>\</i>) もしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @return array <p>読み込まれたフィールドを含む数値添字配列もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>CSV ファイルの空白行は <b><code>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</code></b> を使わない限り単独の <b><code>NULL</code></b> フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetcsv.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetcsv(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): array {}

		/**
		 * ファイルから 1 行取り出す
		 * <p>ファイルから 1 行取り出します。</p>
		 * @return string <p>ファイルから次の行を含む文字列、もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgets.php
		 * @see fgets()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgets(): string {}

		/**
		 * ファイルから 1 行取り出し HTML タグを取り除く
		 * <p><b>SplFileObject::fgetss()</b> attempts to strip 読み込むテキストから HTML と PHP タグを取り除こうとすること以外、<code>SplFileObject::fgets()</code> と同じです。</p>
		 * @param string $allowable_tags <p>オプションのパラメータで、取り除きたくないタグを指定します。</p>
		 * @return string <p>HTML と PHP コードが取り除かれたファイルの次の行を含む文字列、もしくは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetss.php
		 * @see fgetss()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetss(string $allowable_tags = NULL): string {}

		/**
		 * 簡易なファイルロックを行う
		 * <p><code>flock()</code> と同じ簡易な方法でファイルをロックもしくはロック解除する。</p>
		 * @param int $operation <p><code>operation</code> は次のいずれかです:</p><ul> <li>  共有ロック (読み手) にするには <b><code>LOCK_SH</code></b>。  </li> <li>  排他ロック (書き手) にするには <b><code>LOCK_EX</code></b>。  </li> <li>  (共有もしくは排他) ロックを解除するには <b><code>LOCK_UN</code></b>。  </li> <li>  ロック中にブロックしないようにするには <b><code>LOCK_NB</code></b> (Windows ではサポートされません)。  </li> </ul>
		 * @param int $wouldblock <p>ロックがブロックされる場合 (errno が EWOULDBLOCK である)、<b><code>TRUE</code></b> にセットします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.flock.php
		 * @see flock()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function flock(int $operation, int &$wouldblock = NULL): bool {}

		/**
		 * ファイルポインタに残っているデータをすべて出力する
		 * <p>与えられたファイルポインタの現在位置から終端までを読み込み結果を出力バッファに書き出します。</p><p>既にデータをファイルに書き込んでいる場合、ファイルポインタをファイルの始めにリセットするために <code>SplFileObject::rewind()</code> を呼び出すことが必要になる場合があります。</p>
		 * @return int <p><code>handle</code> から読み込まれ出力を通して渡された文字数を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fpassthru.php
		 * @see fpassthru()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fpassthru(): int {}

		/**
		 * フィールドの配列を CSV の行として書き出す
		 * <p><code>fields</code> の配列を、CSV の行としてファイルに書き出します。</p>
		 * @param array $fields <p>値の配列。</p>
		 * @param string $delimiter <p>オプションで指定する、フィールドの区切り文字 (一文字のみ)。</p>
		 * @param string $enclosure <p>オプションで指定する。フィールドの囲み文字 (一文字のみ)。</p>
		 * @param string $escape <p>オプションの <code>escape</code> は、エスケープ文字 (一文字だけ) を指定します。</p>
		 * @return int <p>書き出した文字列の長さを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>delimiter</code> や <code>enclosure</code> が一文字でない場合は <b><code>FALSE</code></b> を返し、何もファイルに書き出しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.fputcsv.php
		 * @see fputcsv()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function fputcsv(array $fields, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): int {}

		/**
		 * Read from file
		 * <p>Reads the given number of bytes from the file.</p>
		 * @param int $length <p>The number of bytes to read.</p>
		 * @return string <p>Returns the string read from the file 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/splfileobject.fread.php
		 * @see fread()
		 * @since PHP 5 >= 5.5.11, PHP 7
		 */
		public function fread(int $length): string {}

		/**
		 * フォーマットに従ってファイルからの入力をパースする
		 * <p>ファイルから 1 行読み込み、<code>sprintf()</code> のドキュメントで説明される規定の <code>format</code> に従って解釈されます。</p><p><code>format</code> 文字列のホワイトスペースはファイルからの行のホワイトスペースとマッチします。このことが意味するのはフォーマット文字列のタブ (<i>\t</i>) でさえも入力ストリームの 1 つのスペース文字とマッチしてしまうということです。</p>
		 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <i>%</i>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <i>%[flags][width][.precision]specifier</i>.</p> <p></p> <b>Flags</b>   Flag 説明     <i>-</i>  Left-justify within the given field width; Right justification is the default    <i>+</i>  Prefix positive numbers with a plus sign <i>+</i>; Default only negative are prefixed with a negative sign.     <i> </i>(space)  Pads the result with spaces. This is the default.    <i>0</i>  Only left-pads numbers with zeros. With <i>s</i> specifiers this can also right-pad with zeros.     <i>'</i>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <i>.</i> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <i>e</i>, <i>E</i>, <i>f</i> and <i>F</i> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <i>g</i> and <i>G</i> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <i>s</i> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>注意</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>注意</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier 説明     <i>%</i>  A literal percent character. No argument is required.    <i>b</i>  The argument is treated as an integer and presented as a binary number.    <i>c</i>  The argument is treated as an integer and presented as the character with that ASCII.    <i>d</i>  The argument is treated as an integer and presented as a (signed) decimal number.    <i>e</i>  The argument is treated as scientific notation (e.g. 1.2e+2). The precision specifier stands for the number of digits after the decimal point since PHP 5.2.1. In earlier versions, it was taken as number of significant digits (one less).    <i>E</i>  Like the <i>e</i> specifier but uses uppercase letter (e.g. 1.2E+2).    <i>f</i>  The argument is treated as a float and presented as a floating-point number (locale aware).    <i>F</i>  The argument is treated as a float and presented as a floating-point number (non-locale aware). Available as of PHP 5.0.3.    <i>g</i>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X ≥ −4, the conversion is with style f and precision P − (X + 1). Otherwise, the conversion is with style e and precision P − 1.</p>    <i>G</i>  Like the <i>g</i> specifier but uses <i>E</i> and <i>F</i>.    <i>o</i>  The argument is treated as an integer and presented as an octal number.    <i>s</i>  The argument is treated and presented as a string.    <i>u</i>  The argument is treated as an integer and presented as an unsigned decimal number.    <i>x</i>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <i>X</i>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).      <b>警告</b> <p>The <i>c</i> type specifier ignores padding and width</p>   <b>警告</b> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <i>string</i> <i>s</i>   <i>integer</i>  <i>d</i>, <i>u</i>, <i>c</i>, <i>o</i>, <i>x</i>, <i>X</i>, <i>b</i>    <i>double</i>  <i>g</i>, <i>G</i>, <i>e</i>, <i>E</i>, <i>f</i>, <i>F</i>
		 * @param mixed $_ <p>オプションの割り当て値。</p>
		 * @return mixed <p>このメソッドに渡される引数がひとつしかない場合、処理される値は配列として返されます。そうでなければ、オプションパラメータが渡される場合、メソッドは割り当て値の個数を返します。オプションパラメータは参照渡しでなければなりません。</p>
		 * @link https://php.net/manual/ja/splfileobject.fscanf.php
		 * @see fscanf(), sscanf(), printf(), sprintf()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fscanf(string $format, &$_ = NULL) {}

		/**
		 * ファイルポインタを移動させる
		 * <p><code>offset</code> を <code>whence</code> で指定される位置に追加することで、ファイルの始めからバイト単位でファイルポイントを移動させます。</p>
		 * @param int $offset <p>オフセットです。負の値はポインタを戻すために使うことができます。これは SEEK_END が <code>whence</code> の値として使われるときに便利です。</p>
		 * @param int $whence <p><code>whence</code> の値は次のようなものになります:</p><ul> <li> <b><code>SEEK_SET</code></b> - <code>offset</code> バイトに等しい位置にセットします。</li> <li> <b><code>SEEK_CUR</code></b> - 現在の位置に <code>offset</code> を加えた位置にセットします。</li> <li> <b><code>SEEK_END</code></b> - 終端に <code>offset</code> を加えた位置にセットします。</li> </ul> <p><code>whence</code> が指定されない場合、<b><code>SEEK_SET</code></b> が前提になります。</p>
		 * @return int <p>探索が成功した場合は 0、そうでなければ -1 が返されます。終端より先の位置を探索してもエラーにならないことにご注意してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fseek.php
		 * @see fseek()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fseek(int $offset, int $whence = SEEK_SET): int {}

		/**
		 * ファイルの情報を得る
		 * <p>ファイルの統計情報を集めます。<code>fstat()</code> とまったく同じようにふるまいます。</p>
		 * @return array <p>ファイルの統計情報の配列を返します; 配列フォーマットの詳細は <code>stat()</code> のマニュアルページを参照してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fstat.php
		 * @see fstat(), stat()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fstat(): array {}

		/**
		 * ファイルポインタの現在位置を返す
		 * <p>ファイルストリームにおいて現在のオフセットを表すファイルポインタの現在位置を返します。</p>
		 * @return int <p>ファイルポインタの位置を整数として、もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.ftell.php
		 * @see ftell()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function ftell(): int {}

		/**
		 * ファイルを指定した長さに丸める
		 * <p>ファイルを <code>size</code> バイトに丸めます。</p>
		 * @param int $size <p>丸めるサイズ。</p>  <p><b>注意</b>:</p> <p><code>size</code> がファイルのサイズより大きい場合、ファイルは null バイトで拡大されます。</p> <p><code>size</code> がファイルのサイズより小さい場合、余分なデータは失われます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.ftruncate.php
		 * @see ftruncate()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function ftruncate(int $size): bool {}

		/**
		 * ファイルに書き込む
		 * <p>Writes the contents of <code>string</code> to the file</p>
		 * @param string $str <p>ファイルに書き込まれる文字列。</p>
		 * @param int $length <p><code>length</code> 引数が渡される場合、<code>length</code> バイト分だけ書き込まれた後もしくは <code>string</code> の終端に達するのどちらか早い方の後で書き込みが停止します。</p>
		 * @return int <p>書き込まれるバイト数、もしくはエラーの場合 <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fwrite.php
		 * @see fwrite()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fwrite(string $str, int $length = NULL): int {}

		/**
		 * ファイルの最終アクセス時刻を取得する
		 * <p>ファイルの最終アクセス時刻を取得します。</p>
		 * @return int <p>ファイルに最後にアクセスがあった時刻を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getATime(): int {}

		/**
		 * ファイルのベース名を取得する
		 * <p>このメソッドは、ファイルやディレクトリそしてリンクからパス情報を除いたベース名を返します。</p>
		 * @param string $suffix <p>返されるベース名から取り除きたい、オプションのサフィックス。</p>
		 * @return string <p>パス情報を含まないベース名を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getBasename(string $suffix = NULL): string {}

		/**
		 * inode 変更時刻を取得する
		 * <p>ファイルの inode が変更された時刻を返します。返される時刻は Unix タイムスタンプ形式です。</p>
		 * @return int <p>最終変更時刻を Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getCTime(): int {}

		/**
		 * 用途はなし
		 * <p>SplFileObject は子を持たないのでこのメソッドは <b><code>NULL</code></b> を返します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): void {}

		/**
		 * CSV の区切り、囲み文字、エスケープ文字を取得する
		 * <p>CSV フィールドを処理するのに使われる区切りと囲み文字とエスケープ文字を取得します。</p>
		 * @return array <p>区切りと囲み文字とエスケープ文字を含む数字添字配列を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.getcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getCsvControl(): array {}

		/**
		 * ファイルの拡張子を取得する
		 * <p>ファイルの拡張子を取得します。</p>
		 * @return string <p>ファイルの拡張子を含む文字列を返します。 拡張子がないときは、空文字列を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function getExtension(): string {}

		/**
		 * ファイルの SplFileInfo オブジェクトを取得する
		 * <p>このメソッドは、参照先のファイルの SplFileInfo オブジェクトを取得します。</p>
		 * @param string $class_name <p>使用したい SplFileInfo 派生クラスの名前。</p>
		 * @return SplFileInfo <p>そのファイル用に作成した SplFileInfo オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getFileInfo(string $class_name = NULL): \SplFileInfo {}

		/**
		 * ファイル名を取得する
		 * <p>パス情報を一切含まないファイル名を取得します。</p>
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getFilename(): string {}

		/**
		 * SplFileObject のフラグを取得する
		 * <p>SplFileObject のインスタンス用のフラグセットを <code>integer</code> 形式で取得します。</p>
		 * @return int <p>フラグを表す <code>integer</code> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * ファイルのグループを取得する
		 * <p>ファイルのグループを取得します。グループ ID を数値形式で返します。</p>
		 * @return int <p>グループ ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getGroup(): int {}

		/**
		 * ファイルの inode を取得する
		 * <p>ファイルシステムオブジェクトの inode 番号を取得します。</p>
		 * @return int <p>ファイルシステムオブジェクトの inode 番号を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getInode(): int {}

		/**
		 * リンク先を取得する
		 * <p>ファイルシステムのリンク先を取得します。</p><p><b>注意</b>:</p><p>リンク先は、ファイルシステム上の実際のパスではないかもしれません。 <code>SplFileInfo::getRealPath()</code> を使用して、ファイルシステム上の実際のパスを調べます。</p>
		 * @return string <p>ファイルシステムのリンク先を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getLinkTarget(): string {}

		/**
		 * 最終変更時刻を取得する
		 * <p>ファイルの中身が変更された時刻を返します。返される時刻は Unix タイムスタンプ形式となります。</p>
		 * @return int <p>ファイルの最終変更時刻を Unix タイムスタンプで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getMTime(): int {}

		/**
		 * 行の最大バイト数を取得する
		 * <p><code>SplFileObject::setMaxLineLen()</code> によってセットされる行の最大バイト数を取得します。</p>
		 * @return int <p><code>SplFileObject::setMaxLineLen()</code> でセットされる場合は行の最大バイト数を返します。デフォルトは <i>0</i> です。</p>
		 * @link https://php.net/manual/ja/splfileobject.getmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getMaxLineLen(): int {}

		/**
		 * ファイルの所有者を取得する
		 * <p>ファイルの所有者を取得します。オーナー ID は数値形式で返されます。</p>
		 * @return int <p>オーナー ID を数値形式で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getOwner(): int {}

		/**
		 * ファイル名を除いたパスを取得する
		 * <p>ファイルへのパスを返します。ファイル名や最後のスラッシュは取り除きます。</p>
		 * @return string <p>ファイルへのパスを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * パスの SplFileInfo オブジェクトを取得する
		 * <p>現在のファイルの親を表す SplFileInfo オブジェクトを取得します。</p>
		 * @param string $class_name <p>使用したい SplFileInfo 派生クラスの名前。</p>
		 * @return SplFileInfo <p>ファイルの親のパスの SplFileInfo オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPathInfo(string $class_name = NULL): \SplFileInfo {}

		/**
		 * ファイルへのパスを取得する
		 * <p>ファイルへのパスを返します。</p>
		 * @return string <p>ファイルへのパスを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPathname(): string {}

		/**
		 * ファイルのパーミッションを取得する
		 * <p>ファイルのパーミッションを取得します。</p>
		 * @return int <p>ファイルのパーミッションを返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPerms(): int {}

		/**
		 * ファイルへの絶対パスを取得する
		 * <p>このメソッドは、すべてのシンボリックリンクを展開して相対参照を解決し、 ファイルへの実際のパスを返します。</p>
		 * @return string <p>ファイルへのパスを返します。ファイルが存在しない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getRealPath(): string {}

		/**
		 * ファイルサイズを取得する
		 * <p>参照するファイルのファイルサイズをバイト数で返します。</p>
		 * @return int <p>ファイルサイズをバイト数で返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getSize(): int {}

		/**
		 * ファイルタイプを取得する
		 * <p>参照するファイルの型を返します。</p>
		 * @return string <p>このエントリの型を文字列で返します。<i>file</i>、<i>link</i> あるいは <i>dir</i> のいずれかとなります。</p>
		 * @link https://php.net/manual/ja/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getType(): string {}

		/**
		 * SplFileObject は子を持ちません
		 * <p>SplFileObject は子を持たないのでこのメソッドは常に <b><code>FALSE</code></b> を返します。</p>
		 * @return bool <p>Returns <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/splfileobject.haschildren.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * ファイルがディレクトリかどうかを調べる
		 * <p>このメソッドを使用して、ファイルがディレクトリかどうかを調べます。</p>
		 * @return bool <p>ディレクトリである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isDir(): bool {}

		/**
		 * ファイルが実行可能かどうかを調べる
		 * <p>ファイルが実行可能かどうかを調べます。</p>
		 * @return bool <p>実行可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isExecutable(): bool {}

		/**
		 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
		 * <p>この SplFileInfo オブジェクトが参照するファイルが存在し、通常のファイルであるかどうかを調べます。</p>
		 * @return bool <p>ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isFile(): bool {}

		/**
		 * ファイルがリンクであるかどうかを調べる
		 * <p>このメソッドを使用して、SplFileInfo オブジェクトが参照するファイルがリンクであるかどうかを調べます。</p>
		 * @return bool <p>ファイルがリンクである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isLink(): bool {}

		/**
		 * ファイルが読み込み可能か調べる
		 * <p>ファイルが読み込み可能かどうかを調べます。</p>
		 * @return bool <p>読み込み可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isReadable(): bool {}

		/**
		 * エントリが書き込み可能であるかどうかを調べる
		 * <p>現在のエントリが書き込み可能かどうかを調べます。</p>
		 * @return bool <p>書き込み可能な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isWritable(): bool {}

		/**
		 * 行番号を取得する
		 * <p>現在の行番号を取得します。</p><p><b>注意</b>:</p><p>固定長のファイルを読み込むのに <code>SplFileObject::setMaxLineLen()</code> が使われている場合 この数はファイルの実際の行番号を反映しない可能性があります。</p>
		 * @return int <p>現在の行番号を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): int {}

		/**
		 * 次の行を読み出す
		 * <p>ファイルの次の行に進みます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * ファイルの SplFileObject オブジェクトを取得する
		 * <p>ファイルの SplFileObject オブジェクトを作成します。 これが便利なのは、SplFileObject にはファイルを操作するためのさまざまなメソッドが追加されているからです。 SplFileInfo には、 たとえばファイルが書き込み可能かどうかなどといった情報を取得するだけの機能しかありません。</p>
		 * @param string $open_mode <p>ファイルを開く際のモード。使用できるモードについての説明は <code>fopen()</code> のドキュメントを参照ください。 デフォルトは読み込み専用となります。</p>
		 * @param bool $use_include_path <p><b><code>TRUE</code></b> に設定すると、このファイル名を include_path の中からも探します。</p>
		 * @param resource $context <p><i>コンテキスト</i> についての説明は、 マニュアルの コンテキスト の節を参照ください。</p>
		 * @return SplFileObject <p>オープンしたファイルを SplFileObject オブジェクトで返します。</p>
		 * @link https://php.net/manual/ja/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function openFile(string $open_mode = "r", bool $use_include_path = FALSE, $context = NULL): \SplFileObject {}

		/**
		 * ファイルポインタを先頭に巻き戻す
		 * <p>ファイルポインタを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ファイルポインタを指定行に移動させる
		 * <p>ファイルポインタを指定行に移動させます。</p>
		 * @param int $line_pos <p>ゼロを起点とした移動させる行数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function seek(int $line_pos): void {}

		/**
		 * CSV の区切り文字、囲み文字、エスケープ文字をセットする
		 * <p>CSV フィールド処理用の区切り文字と囲み文字とエスケープ文字をセットします。</p>
		 * @param string $delimiter <p>フィールドの区切り文字 (1 文字のみ)。</p>
		 * @param string $enclosure <p>フィールドの囲み文字 (1 文字のみ)。</p>
		 * @param string $escape <p>フィールドのエスケープ文字 (1 文字のみ)。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setCsvControl(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): void {}

		/**
		 * SplFileInfo::openFile() で使用するクラスを設定する
		 * <p><code>SplFileInfo::openFile()</code> が呼ばれたときに使用する、カスタムクラスを設定します。 このメソッドに渡すクラス名は、SplFileObject あるいはその派生クラスのものでなければいけません。</p>
		 * @param string $class_name <p><code>SplFileInfo::openFile()</code> がコールされた際に使用するクラス名。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setFileClass(string $class_name = "SplFileObject"): void {}

		/**
		 * SplFileObject のフラグをセットする
		 * <p>SplFileObject によって使われるフラグをセットします。</p>
		 * @param int $flags <p>セットするフラグのビットマスク。 利用可能なフラグは SplFileObject の定数 を参照してください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * SplFileInfo::getFileInfo() および SplFileInfo::getPathInfo() で使用するクラスを設定する
		 * <p>このメソッドで、 <code>SplFileInfo::getFileInfo()</code> および <code>SplFileInfo::getPathInfo()</code> がコールされた際に使用するカスタムクラスを設定します。 このメソッドに渡すクラス名は、SplFileInfo あるいはその派生クラスのものでなければいけません。</p>
		 * @param string $class_name <p><code>SplFileInfo::getFileInfo()</code> および <code>SplFileInfo::getPathInfo()</code> がコールされた際に使用するクラス名。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setInfoClass(string $class_name = "SplFileInfo"): void {}

		/**
		 * 読み込む行の最大バイト数をセットする
		 * <p>読み込む行の最大バイト数をセットします。</p>
		 * @param int $max_len <p>行の最大バイト数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setMaxLineLen(int $max_len): void {}

		/**
		 * ファイル終端でないかチェックする
		 * <p>ファイル終端に到達したかチェックします。</p>
		 * @return bool <p>ファイル終端に到達していなければ <b><code>TRUE</code></b>、そうでなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplFixedArray クラスは配列の主要な機能を提供します。 SplFixedArray と通常の PHP の配列との主な違いは、 SplFixedArray は固定長であって、 整数値で指定した範囲内の添字しか使用できないところです。 これにより、より高速な配列の実装が可能となりました。</p>
	 * @link https://php.net/manual/ja/class.splfixedarray.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplFixedArray implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * 新しい固定長配列を作成する
		 * <p>新しい固定長配列を作成します。要素の数は <code>size</code> と等しく、値はすべて <b><code>NULL</code></b> となります。</p>
		 * @param int $size <p>固定長配列のサイズ。 <i>0</i> から <b><code>PHP_INT_MAX</code></b> までの数を指定します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(int $size = 0) {}

		/**
		 * アンシリアライズ後に配列を再初期化する
		 * <p>アンシリアライズ後に配列を再初期化します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.wakeup.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __wakeup(): void {}

		/**
		 * 配列のサイズを返す
		 * <p>配列のサイズを返します。</p>
		 * @return int <p>配列のサイズを返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列の要素を返す
		 * <p>現在の配列の要素を取得します。</p>
		 * @return mixed <p>現在の要素の値を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * PHP の配列を SplFixedArray インスタンスにインポートする
		 * <p>PHP の配列 <code>array</code> を、新しい SplFixedArray インスタンスにインポートします。</p>
		 * @param array $array <p>インポートする配列。</p>
		 * @param bool $save_indexes <p>元の配列で使っている数値添字を保存しようと試みる。</p>
		 * @return SplFixedArray <p>配列の中身を含む SplFixedArray のインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.fromarray.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function fromArray(array $array, bool $save_indexes = TRUE): \SplFixedArray {}

		/**
		 * 配列のサイズを取得する
		 * <p>配列のサイズを取得します。</p>
		 * @return int <p>配列のサイズを <code>integer</code> で返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.getsize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getSize(): int {}

		/**
		 * 現在の配列の添字を返す
		 * <p>現在の配列の添字を返します。</p>
		 * @return int <p>現在の配列の添字を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): int {}

		/**
		 * 次のエントリに進む
		 * <p>イテレータを、次の配列の要素に進めます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 指定した添字が存在するかどうかを返す
		 * <p><code>index</code> で指定した添字が存在するかどうかを返します。</p>
		 * @param int $index <p>調べたい添字。</p>
		 * @return bool <p>指定した添字が存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * 指定した添字の値を返す
		 * <p><code>index</code> で指定した添字の値を返します。</p>
		 * @param int $index <p>値を取得したい添字。</p>
		 * @return mixed <p><code>index</code> で指定した添字の値を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetGet(int $index) {}

		/**
		 * 指定した添字の新しい値を設定する
		 * <p><code>index</code> で指定した添字の値を <code>newval</code> に設定します。</p>
		 * @param int $index <p>設定したい添字。</p>
		 * @param mixed $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetSet(int $index, $newval): void {}

		/**
		 * 指定した添字の値を消去する
		 * <p>指定した添字の値を消去します。</p>
		 * @param int $index <p>消去したい添字。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetUnset(int $index): void {}

		/**
		 * イテレータを先頭に巻き戻す
		 * <p>イテレータを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfixedarray.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 配列のサイズを変更する
		 * <p>配列のサイズを、新しい値 <code>size</code> に変更します。 <code>size</code> が現在の配列のサイズより小さい場合は、 入りきらなかったそれ以降の値は破棄されます。 <code>size</code> が現在の配列のサイズより大きい場合は、 増えた要素の値は <b><code>NULL</code></b> となります。</p>
		 * @param int $size <p>新しい配列のサイズ。 <i>0</i> から <b><code>PHP_INT_MAX</code></b> までの数を指定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.setsize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setSize(int $size): bool {}

		/**
		 * 固定長配列から PHP の配列を返す
		 * <p>固定長配列から PHP の配列を返します。</p>
		 * @return array <p>固定長配列と同じ内容の PHP の配列を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.toarray.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function toArray(): array {}

		/**
		 * 配列にまだ要素があるかどうかを調べる
		 * <p>配列にまだ要素があるかどうかを調べます。</p>
		 * @return bool <p>配列にまだ要素がある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfixedarray.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplHeap クラスは、ヒープの主要な機能を提供します。</p>
	 * @link https://php.net/manual/ja/class.splheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	abstract class SplHeap implements \Iterator, \Countable {

		/**
		 * 新しい空のヒープを作成する
		 * <p>新しい空のヒープを作成します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * 要素を比較し、ヒープ内の適切な位置に置く
		 * <p><code>value1</code> と <code>value2</code> を比較します。</p><p><b>SplHeap::compare()</b> 内で例外がスローされると、ヒープが壊れてしまいブロックされた状態になることがあります。 <code>SplHeap::recoverFromCorruption()</code> をコールすればブロック状態を解除することができます。 しかし、適切な場所に配置されていない要素が出てくることもあり、 ヒープの性質が失われてしまいます。</p>
		 * @param mixed $value1 <p>比較したい最初のノード。</p>
		 * @param mixed $value2 <p>比較したい 2 番目のノード。</p>
		 * @return int <p>比較結果を返します。<code>value1</code> が <code>value2</code> より大きい場合は正の整数値、等しい場合は 0、 小さい場合は負の整数値となります。</p> <p><b>注意</b>:</p> <p>同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。 そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。</p>
		 * @link https://php.net/manual/ja/splheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		abstract protected function compare($value1, $value2): int;

		/**
		 * ヒープ内の要素数を数える
		 * @return int <p>ヒープ内の要素数を返します。</p>
		 * @link https://php.net/manual/ja/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * イテレータが指す現在のノードを返す
		 * <p>現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * ヒープの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function extract() {}

		/**
		 * ヒープに要素を挿入する
		 * <p><code>value</code> をヒープに挿入します。</p>
		 * @param mixed $value <p>挿入する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function insert($value): void {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the heap is corrupted, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/splheap.iscorrupted.php
		 * @since PHP 7
		 */
		public function isCorrupted(): bool {}

		/**
		 * ヒープが空かどうかを調べる
		 * @return bool <p>ヒープが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この関数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のノードに移動する
		 * <p>次のノードに移動します。これは、ヒープの先頭のノードを削除します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function recoverFromCorruption(): void {}

		/**
		 * イテレータを先頭に巻き戻す (何もしない)
		 * <p>これは、イテレータを先頭に巻き戻します。ヒープの場合は何もしません。 というのもイテレータは仮想的なものであり、 実際はヒープの先頭から動くことがないからです。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ヒープの先頭のノードを取り出す
		 * @return mixed <p>先頭のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ヒープにまだノードがあるかどうかを調べる
		 * <p>ヒープにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>ヒープにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplMaxHeap クラスは、ヒープの主要な機能を提供し、最大値を先頭に保ちます。</p>
	 * @link https://php.net/manual/ja/class.splmaxheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplMaxHeap extends \SplHeap implements \Iterator, \Countable {

		/**
		 * 要素を比較し、ヒープ内の適切な位置に置く
		 * <p><code>value1</code> と <code>value2</code> を比較します。</p>
		 * @param mixed $value1 <p>比較したい最初のノード。</p>
		 * @param mixed $value2 <p>比較したい 2 番目のノード。</p>
		 * @return int <p>比較結果を返します。<code>value1</code> が <code>value2</code> より大きい場合は正の整数値、等しい場合は 0、 小さい場合は負の整数値となります。</p> <p><b>注意</b>:</p> <p>同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。 そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。</p>
		 * @link https://php.net/manual/ja/splmaxheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		protected function compare($value1, $value2): int {}

		/**
		 * ヒープ内の要素数を数える
		 * @return int <p>ヒープ内の要素数を返します。</p>
		 * @link https://php.net/manual/ja/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * イテレータが指す現在のノードを返す
		 * <p>現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * ヒープの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function extract() {}

		/**
		 * ヒープに要素を挿入する
		 * <p><code>value</code> をヒープに挿入します。</p>
		 * @param mixed $value <p>挿入する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function insert($value): void {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the heap is corrupted, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/splheap.iscorrupted.php
		 * @since PHP 7
		 */
		public function isCorrupted(): bool {}

		/**
		 * ヒープが空かどうかを調べる
		 * @return bool <p>ヒープが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この関数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のノードに移動する
		 * <p>次のノードに移動します。これは、ヒープの先頭のノードを削除します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function recoverFromCorruption(): void {}

		/**
		 * イテレータを先頭に巻き戻す (何もしない)
		 * <p>これは、イテレータを先頭に巻き戻します。ヒープの場合は何もしません。 というのもイテレータは仮想的なものであり、 実際はヒープの先頭から動くことがないからです。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ヒープの先頭のノードを取り出す
		 * @return mixed <p>先頭のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ヒープにまだノードがあるかどうかを調べる
		 * <p>ヒープにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>ヒープにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplMinHeap クラスは、ヒープの主要な機能を提供し、最小値を先頭に保ちます。</p>
	 * @link https://php.net/manual/ja/class.splminheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplMinHeap extends \SplHeap implements \Iterator, \Countable {

		/**
		 * 要素を比較し、ヒープ内の適切な位置に置く
		 * <p><code>value1</code> と <code>value2</code> を比較します。</p>
		 * @param mixed $value1 <p>比較したい最初のノード。</p>
		 * @param mixed $value2 <p>比較したい 2 番目のノード。</p>
		 * @return int <p>比較結果を返します。<code>value1</code> が <code>value2</code> より大きい場合は正の整数値、等しい場合は 0、 小さい場合は負の整数値となります。</p> <p><b>注意</b>:</p> <p>同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。 そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。</p>
		 * @link https://php.net/manual/ja/splminheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		protected function compare($value1, $value2): int {}

		/**
		 * ヒープ内の要素数を数える
		 * @return int <p>ヒープ内の要素数を返します。</p>
		 * @link https://php.net/manual/ja/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * イテレータが指す現在のノードを返す
		 * <p>現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * ヒープの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function extract() {}

		/**
		 * ヒープに要素を挿入する
		 * <p><code>value</code> をヒープに挿入します。</p>
		 * @param mixed $value <p>挿入する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function insert($value): void {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the heap is corrupted, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/splheap.iscorrupted.php
		 * @since PHP 7
		 */
		public function isCorrupted(): bool {}

		/**
		 * ヒープが空かどうかを調べる
		 * @return bool <p>ヒープが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この関数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のノードに移動する
		 * <p>次のノードに移動します。これは、ヒープの先頭のノードを削除します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function recoverFromCorruption(): void {}

		/**
		 * イテレータを先頭に巻き戻す (何もしない)
		 * <p>これは、イテレータを先頭に巻き戻します。ヒープの場合は何もしません。 というのもイテレータは仮想的なものであり、 実際はヒープの先頭から動くことがないからです。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ヒープの先頭のノードを取り出す
		 * @return mixed <p>先頭のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ヒープにまだノードがあるかどうかを調べる
		 * <p>ヒープにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>ヒープにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplObjectStorage クラスは、オブジェクトをデータに対応させたり、 データを渡さずオブジェクトセットとして使用したりします。 これらはどちらも、オブジェクトを一意に特定したい場合に便利です。</p>
	 * @link https://php.net/manual/ja/class.splobjectstorage.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplObjectStorage implements \Countable, \Iterator, \Serializable, \ArrayAccess {

		/**
		 * 別のストレージからすべてのオブジェクトを追加する
		 * <p>別のストレージにあるすべてのオブジェクトとデータのペアを、 現在のストレージに追加します。</p>
		 * @param \SplObjectStorage $storage <p>インポートしたいストレージ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.addall.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function addAll(\SplObjectStorage $storage): void {}

		/**
		 * オブジェクトをストレージに追加する
		 * <p>オブジェクトをストレージに追加し、 オプションでそれを何らかのデータに関連づけます。</p>
		 * @param object $object <p>追加したいオブジェクト。</p>
		 * @param mixed $data <p><code>object</code> に関連づけるデータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.attach.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function attach(object $object, $data = NULL): void {}

		/**
		 * ストレージに特定のオブジェクトが含まれるかどうかを調べる
		 * <p>指定したオブジェクトがストレージに含まれるかどうかを調べます。</p>
		 * @param object $object <p>探したいオブジェクト。</p>
		 * @return bool <p><code>object</code> がストレージに存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.contains.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function contains(object $object): bool {}

		/**
		 * ストレージ内のオブジェクトの数を返す
		 * <p>ストレージ内のオブジェクトの数を数えます。</p>
		 * @return int <p>ストレージ内のオブジェクトの数を返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.count.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在のストレージの要素を返す
		 * <p>現在のストレージの要素を返します。</p>
		 * @return object <p>現在のイテレータの位置にあるオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current(): object {}

		/**
		 * オブジェクトをストレージから取り除く
		 * <p>オブジェクトをストレージから取り除きます。</p>
		 * @param object $object <p>取り除きたいオブジェクト。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.detach.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function detach(object $object): void {}

		/**
		 * 中に含むオブジェクトの一意な識別子を算出する
		 * <p>このメソッドは、SplObjectStorage オブジェクトに追加されたオブジェクトの識別子を算出します。</p><p>SplObjectStorage の実装では、 <code>spl_object_hash()</code> と同じ値を返します。</p><p>ストレージオブジェクトには、同じ識別子のオブジェクトを複数格納することはできません。 それを利用して、セット (一意な値のコレクション) を実装するのにも使えます。 オブジェクトが一意であるという性質は、この関数の返す値が一意であるということで実現できます。</p>
		 * @param object $object <p>識別子を算出したいオブジェクト。</p>
		 * @return string <p>算出した識別子を文字列で返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.gethash.php
		 * @see spl_object_hash()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getHash(object $object): string {}

		/**
		 * イテレータの現在のエントリに関連づけられたデータを返す
		 * <p>イテレータの現在の位置が指すオブジェクトに関連づけられたデータあるいは情報を返します。</p>
		 * @return mixed <p>イテレータの現在の位置に関連づけられたデータを返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.getinfo.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getInfo() {}

		/**
		 * イテレータの現在位置を返す
		 * <p>イテレータの現在位置を返します。</p>
		 * @return int <p>イテレータの現在位置に対応するインデックスを返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): int {}

		/**
		 * 次のエントリに移動する
		 * <p>イテレータを、ストレージ内の次のオブジェクトに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * オブジェクトがストレージ内に存在するかどうかを調べる
		 * <p>オブジェクトがストレージ内に存在するかどうかを調べます。</p><p><b>注意</b>:</p><p><b>SplObjectStorage::offsetExists()</b> は、<code>SplObjectStorage::contains()</code> のエイリアスです。</p>
		 * @param object $object <p>探したいオブジェクト。</p>
		 * @return bool <p><code>object</code> がストレージ内に存在する場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetExists(object $object): bool {}

		/**
		 * オブジェクトに関連づけられたデータを返す
		 * <p>ストレージ内のオブジェクトに関連づけられたデータを返します。</p>
		 * @param object $object <p>探したいオブジェクト。</p>
		 * @return mixed <p>ストレージ内のオブジェクトに関連づけられたデータを返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetGet(object $object) {}

		/**
		 * ストレージ内のオブジェクトにデータを関連づける
		 * <p>ストレージ内のオブジェクトにデータを関連づけます。</p><p><b>注意</b>:</p><p><b>SplObjectStorage::offsetSet()</b> は、 <code>SplObjectStorage::attach()</code> のエイリアスです。</p>
		 * @param object $object <p>データを関連づけたいオブジェクト。</p>
		 * @param mixed $data <p><code>object</code> に関連づけるデータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetSet(object $object, $data = NULL): void {}

		/**
		 * ストレージからオブジェクトを取り除く
		 * <p>ストレージからオブジェクトを取り除きます。</p><p><b>注意</b>:</p><p><b>SplObjectStorage::offsetUnset()</b> は、 <code>SplObjectStorage::detach()</code> のエイリアスです。</p>
		 * @param object $object <p>取り除きたいオブジェクト。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetUnset(object $object): void {}

		/**
		 * 別のストレージに含まれているオブジェクトを現在のストレージから取り除く
		 * <p>別のストレージに含まれているオブジェクトを現在のストレージから取り除きます。</p>
		 * @param \SplObjectStorage $storage <p>取り除きたい要素を含むストレージ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.removeall.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function removeAll(\SplObjectStorage $storage): void {}

		/**
		 * 別のストレージに含まれているもの以外のすべてのオブジェクトを現在のストレージから取り除く
		 * <p>別のストレージに含まれているもの以外のすべてのオブジェクトを現在のストレージから取り除きます。</p>
		 * @param \SplObjectStorage $storage <p>現在のストレージに残しておきたい要素を含むストレージ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.removeallexcept.php
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function removeAllExcept(\SplObjectStorage $storage): void {}

		/**
		 * イテレータをストレージの最初の要素に巻き戻す
		 * <p>イテレータをストレージの最初の要素に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ストレージをシリアライズする
		 * <p>ストレージの文字列表現を返します。</p>
		 * @return string <p>ストレージの文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.serialize.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * イテレータの現在のエントリに関連づけるデータを設定する
		 * <p>イテレータが現在指しているオブジェクトにデータあるいは情報を関連づけます。</p>
		 * @param mixed $data <p>現在のイテレータのエントリに関連づけるデータ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.setinfo.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setInfo($data): void {}

		/**
		 * ストレージの文字列表現をアンシリアライズする
		 * <p>ストレージのエントリをアンシリアライズし、現在のストレージに追加します。</p>
		 * @param string $serialized <p>ストレージをシリアライズしたもの。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.unserialize.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * イテレータの現在のエントリが有効かどうかを返す
		 * <p>イテレータの現在のエントリが有効かどうかを返します。</p>
		 * @return bool <p>イテレータのエントリが有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splobjectstorage.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p><b>SplObserver</b> インターフェイスを SplSubject とともに使うと、Observer パターンを実装することができます。</p>
	 * @link https://php.net/manual/ja/class.splobserver.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface SplObserver {

		/**
		 * subject の更新を受信する
		 * <p>このメソッドは、オブザーバがアタッチされている任意の SplSubject が <code>SplSubject::notify()</code> をコールしたときにコールされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \SplSubject $subject <p>observer に更新を通知する SplSubject。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splobserver.update.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function update(\SplSubject $subject): void;
	}

	/**
	 * <p>SplPriorityQueue クラスは、優先順位つきキューの主要な機能を提供します。 最大ヒープを使用して実装しています。</p>
	 * @link https://php.net/manual/ja/class.splpriorityqueue.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplPriorityQueue implements \Iterator, \Countable {

		/**
		 * 新しい空のキューを作成する
		 * <p>これは、新しい空のキューを作成します。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * 要素の優先順位を比較し、ヒープ内の適切な位置に置く
		 * <p><code>priority1</code> と <code>priority2</code> を比較します。</p>
		 * @param mixed $priority1 <p>比較したい最初のノードの優先順位。</p>
		 * @param mixed $priority2 <p>比較したい 2 番目のノードの優先順位。</p>
		 * @return int <p>比較結果を返します。<code>priority1</code> が <code>priority2</code> より大きい場合は正の整数値、等しい場合は 0、 小さい場合は負の整数値となります。</p> <p><b>注意</b>:</p> <p>同一の優先順位の要素が複数存在する場合は、 キューから取り出す際の順序が不定となります。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function compare($priority1, $priority2): int {}

		/**
		 * キュー内の要素数を数える
		 * @return int <p>キュー内の要素数を返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * イテレータが指す現在のノードを返す
		 * <p>現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * ヒープの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function extract() {}

		/**
		 * Get the flags of extraction
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int
		 * @link https://php.net/manual/ja/splpriorityqueue.getextractflags.php
		 * @since PHP 7
		 */
		public function getExtractFlags(): int {}

		/**
		 * キューに要素を挿入する
		 * <p><code>value</code> を優先順位 <code>priority</code> でキューに挿入します。</p>
		 * @param mixed $value <p>挿入する値。</p>
		 * @param mixed $priority <p>関連づける優先順位。</p>
		 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function insert($value, $priority): bool {}

		/**
		 * Tells if the priority queue is in a corrupted state
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the priority queue is corrupted, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.iscorrupted.php
		 * @since No version information available, might only be in Git
		 */
		public function isCorrupted(): bool {}

		/**
		 * キューが空かどうかを調べる
		 * @return bool <p>キューが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この関数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のノードに移動する
		 * <p>キューから先頭のノードを取り出します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 破壊されたキューを復旧し、それ以降の操作をできるようにする
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function recoverFromCorruption(): void {}

		/**
		 * イテレータを先頭に巻き戻す (何もしない)
		 * <p>これは、イテレータを先頭に巻き戻します。ヒープの場合は何もしません。 というのもイテレータは仮想的なものであり、 実際はヒープの先頭から動くことがないからです。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * 取り出しモードを設定する
		 * @param int $flags <p>何を取り出すのかを <code>SplPriorityQueue::current()</code>、 <code>SplPriorityQueue::top()</code> および <code>SplPriorityQueue::extract()</code> で指定します。</p> <ul> <li><b><code>SplPriorityQueue::EXTR_DATA</code></b> (0x00000001): データを取り出す</li> <li><b><code>SplPriorityQueue::EXTR_PRIORITY</code></b> (0x00000002): 優先順位を取り出す</li> <li><b><code>SplPriorityQueue::EXTR_BOTH</code></b> (0x00000003): 両方を含む配列を取り出す</li> </ul> <p>デフォルトのモードは <b><code>SplPriorityQueue::EXTR_DATA</code></b> です。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.setextractflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setExtractFlags(int $flags): void {}

		/**
		 * キューの先頭のノードを取り出す
		 * @return mixed <p>先頭のノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * キューにまだノードがあるかどうかを調べる
		 * <p>キューにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>キューにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splpriorityqueue.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplQueue クラスは、キューの主要な機能を提供します。 双方向リンクリストを使用して実装しています。</p>
	 * @link https://php.net/manual/ja/class.splqueue.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplQueue extends \SplDoublyLinkedList implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * 双方向リンクリストを使用して実装した新しい空のキューを作成する
		 * <p>これは、新しい空のキューを作成します。</p><p><b>注意</b>:</p><p>このメソッドは、イテレータのモードを自動的に SplDoublyLinkedList::IT_MODE_FIFO とします。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splqueue.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>newval</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param mixed $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $newval <p>The new value for the <code>index</code>.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function add($index, $newval): void {}

		/**
		 * 双方向リンクリストの最初のノードを取得する
		 * @return mixed <p>最初のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bottom() {}

		/**
		 * 双方向リンクリストの要素数を数える
		 * @return int <p>双方向リンクリストの要素数を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列の要素を返す
		 * <p>双方向リンクリストの現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * キューからノードを取り出す
		 * <p><code>value</code> をキューの先頭から取り出します。</p><p><b>注意</b>:</p><p><b>SplQueue::dequeue()</b> は <code>SplDoublyLinkedList::shift()</code> のエイリアスです。</p>
		 * @return mixed <p>キューから取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/splqueue.dequeue.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function dequeue() {}

		/**
		 * 要素をキューに追加する
		 * <p><code>value</code> をキューの末尾に追加します。</p><p><b>注意</b>:</p><p><b>SplQueue::enqueue()</b> は <code>SplDoublyLinkedList::push()</code> のエイリアスです。</p>
		 * @param mixed $value <p>キューに追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splqueue.enqueue.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function enqueue($value): void {}

		/**
		 * 反復処理のモードを返す
		 * @return int <p>反復処理の才のモードおよびフラグを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getIteratorMode(): int {}

		/**
		 * 双方向リンクリストが空かどうかを調べる
		 * @return bool <p>双方向リンクリストが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この館数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のエントリに移動する
		 * <p>イテレータを次のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 指定した $index が存在するかどうかを返す
		 * @param mixed $index <p>調べたいインデックス。</p>
		 * @return bool <p>指定した <code>index</code> が存在する場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetExists($index): bool {}

		/**
		 * 指定した $index の値を返す
		 * @param mixed $index <p>値を取得したいインデックス。</p>
		 * @return mixed <p>指定した <code>index</code> の値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetGet($index) {}

		/**
		 * 指定した $index の値を $newval に設定する
		 * <p>指定した <code>index</code> の値を <code>newval</code> に設定します。</p>
		 * @param mixed $index <p>設定したいインデックス。</p>
		 * @param mixed $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetSet($index, $newval): void {}

		/**
		 * 指定した $index の値を削除する
		 * <p>指定したインデックスの値を削除します。</p>
		 * @param mixed $index <p>削除したいインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetUnset($index): void {}

		/**
		 * 双方向リンクリストの末尾からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function pop() {}

		/**
		 * 前のエントリに移動する
		 * <p>イテレータを前のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prev(): void {}

		/**
		 * 双方向リンクリストの末尾に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの末尾に追加します。</p>
		 * @param mixed $value <p>追加したい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function push($value): void {}

		/**
		 * イテレータを先頭に巻き戻す
		 * <p>イテレータを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ストレージをシリアライズする
		 * <p>ストレージをシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>シリアライズした文字列を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 反復処理のモードを設定する
		 * @param int $mode <p>変更可能な反復処理のパラメータはひとつだけです。</p> <ul> <li> イテレータの振る舞い (いずれかを選択) <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_DELETE</code></b> (イテレータが要素を削除する)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b> (イテレータが要素を順にたどる)</li> </ul> </li> </ul> <p>デフォルトのモードは <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> | <b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b> です。</p>  <b>警告</b> <p>反復処理の方向は SplQueue では変更できません。 常に <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> です。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splqueue.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setIteratorMode(int $mode): void {}

		/**
		 * 双方向リンクリストの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function shift() {}

		/**
		 * 双方向リンクリストの最後のノードを取得する
		 * @return mixed <p>最後のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ストレージをデシリアライズする
		 * <p><code>SplDoublyLinkedList::serialize()</code> でシリアライズしたストレージを復元します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした文字列。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * 双方向リンクリストの先頭に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの先頭に追加します。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unshift($value): void {}

		/**
		 * 双方向リンクリストにまだノードがあるかどうかを調べる
		 * <p>双方向リンクリストにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>双方向リンクリストにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>SplStack クラスは、スタックの主要な機能を提供します。 双方向リンクリストを使用して実装しています。</p>
	 * @link https://php.net/manual/ja/class.splstack.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SplStack extends \SplDoublyLinkedList implements \Iterator, \ArrayAccess, \Countable {

		/**
		 * 双方向リンクリストを使用して実装した新しい空のスタックを作成する
		 * <p>これは、新しい空のスタックを作成します。</p><p><b>注意</b>:</p><p>このメソッドは、イテレータのモードを自動的に SplDoublyLinkedList::IT_MODE_LIFO とします。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splstack.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>newval</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param mixed $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $newval <p>The new value for the <code>index</code>.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function add($index, $newval): void {}

		/**
		 * 双方向リンクリストの最初のノードを取得する
		 * @return mixed <p>最初のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bottom() {}

		/**
		 * 双方向リンクリストの要素数を数える
		 * @return int <p>双方向リンクリストの要素数を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * 現在の配列の要素を返す
		 * <p>双方向リンクリストの現在のノードを取得します。</p>
		 * @return mixed <p>現在のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current() {}

		/**
		 * 反復処理のモードを返す
		 * @return int <p>反復処理の才のモードおよびフラグを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getIteratorMode(): int {}

		/**
		 * 双方向リンクリストが空かどうかを調べる
		 * @return bool <p>双方向リンクリストが空かどうかを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isEmpty(): bool {}

		/**
		 * 現在のノードのインデックスを返す
		 * <p>この館数は、現在のノードのインデックスを返します。</p>
		 * @return mixed <p>現在のノードのインデックスを返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key() {}

		/**
		 * 次のエントリに移動する
		 * <p>イテレータを次のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * 指定した $index が存在するかどうかを返す
		 * @param mixed $index <p>調べたいインデックス。</p>
		 * @return bool <p>指定した <code>index</code> が存在する場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetExists($index): bool {}

		/**
		 * 指定した $index の値を返す
		 * @param mixed $index <p>値を取得したいインデックス。</p>
		 * @return mixed <p>指定した <code>index</code> の値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetGet($index) {}

		/**
		 * 指定した $index の値を $newval に設定する
		 * <p>指定した <code>index</code> の値を <code>newval</code> に設定します。</p>
		 * @param mixed $index <p>設定したいインデックス。</p>
		 * @param mixed $newval <p><code>index</code> の新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetSet($index, $newval): void {}

		/**
		 * 指定した $index の値を削除する
		 * <p>指定したインデックスの値を削除します。</p>
		 * @param mixed $index <p>削除したいインデックス。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function offsetUnset($index): void {}

		/**
		 * 双方向リンクリストの末尾からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function pop() {}

		/**
		 * 前のエントリに移動する
		 * <p>イテレータを前のノードに移動します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prev(): void {}

		/**
		 * 双方向リンクリストの末尾に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの末尾に追加します。</p>
		 * @param mixed $value <p>追加したい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function push($value): void {}

		/**
		 * イテレータを先頭に巻き戻す
		 * <p>イテレータを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ストレージをシリアライズする
		 * <p>ストレージをシリアライズします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>シリアライズした文字列を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function serialize(): string {}

		/**
		 * 反復処理のモードを設定する
		 * @param int $mode <p>変更可能な反復処理のパラメータはひとつだけです。</p> <ul> <li> イテレータの振る舞い (いずれかを選択) <ul> <li>SplDoublyLinkedList::IT_MODE_DELETE (イテレータが要素を削除する)</li> <li>SplDoublyLinkedList::IT_MODE_KEEP (イテレータが要素を順にたどる)</li> </ul> </li> </ul> <p>デフォルトのモードは 0x2 : SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLnkedList::IT_MODE_KEEP です。</p>  <b>警告</b> <p>反復処理の方向は SplStack では変更できません。 変更しようとすると RuntimeException がスローされます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splstack.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setIteratorMode(int $mode): void {}

		/**
		 * 双方向リンクリストの先頭からノードを取り出す
		 * @return mixed <p>取り出したノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function shift() {}

		/**
		 * 双方向リンクリストの最後のノードを取得する
		 * @return mixed <p>最後のノードの値を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function top() {}

		/**
		 * ストレージをデシリアライズする
		 * <p><code>SplDoublyLinkedList::serialize()</code> でシリアライズしたストレージを復元します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $serialized <p>シリアライズした文字列。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * 双方向リンクリストの先頭に要素を追加する
		 * <p><code>value</code> を双方向リンクリストの先頭に追加します。</p>
		 * @param mixed $value <p>追加する値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function unshift($value): void {}

		/**
		 * 双方向リンクリストにまだノードがあるかどうかを調べる
		 * <p>双方向リンクリストにまだノードがあるかどうかを調べます。</p>
		 * @return bool <p>双方向リンクリストにまだノードが含まれる場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p><b>SplSubject</b> インターフェイスを SplObserver とともに使うと、Observer パターンを実装することができます。</p>
	 * @link https://php.net/manual/ja/class.splsubject.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface SplSubject {

		/**
		 * SplObserver をアタッチする
		 * <p>SplObserver にアタッチし、更新を通知できるようにします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \SplObserver $observer <p>アタッチする SplObserver。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splsubject.attach.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function attach(\SplObserver $observer): void;

		/**
		 * observer をデタッチする
		 * <p>observer をデタッチし、更新を通知しないようにします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \SplObserver $observer <p>デタッチする SplObserver。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splsubject.detach.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function detach(\SplObserver $observer): void;

		/**
		 * observer に通知する
		 * <p>アタッチされたすべての observer に通知します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splsubject.notify.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function notify(): void;
	}

	/**
	 * <p>The SplTempFileObject class offers an object oriented interface for a temporary file.</p>
	 * @link https://php.net/manual/ja/class.spltempfileobject.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	class SplTempFileObject extends \SplFileObject implements \SeekableIterator, \RecursiveIterator {

		/**
		 * 新しい一時ファイルオブジェクトを作成する
		 * <p>新しい一時ファイルオブジェクトを作成します。</p>
		 * @param int $max_memory <p>一時ファイルに使うメモリの最大量(バイト単位、デフォルトは 2 MB)。 一時ファイルがこのサイズを越える場合、ファイルはシステムの一時ディレクトリに移動させられます。</p> <p><code>max_memory</code> が負の値である場合、メモリだけが使われます。<code>max_memory</code> がゼロの場合、メモリは使われません。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/spltempfileobject.construct.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function __construct(int $max_memory = NULL) {}

		/**
		 * SplFileObject::current() のエイリアス
		 * <p>このメソッドは <code>SplFileObject::current()</code> のエイリアスです。</p>
		 * @link https://php.net/manual/ja/splfileobject.tostring.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		function __toString() {}

		/**
		 * ファイルの現在の行を取得する
		 * <p>ファイルの現在の行を取得します。</p>
		 * @return string|array <p>ファイルの現在の行を取得します。<b><code>SplFileObject::READ_CSV</code></b> フラグがセットされている場合、このメソッドは CSV データとして処理された現在の行を格納している配列を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function current() {}

		/**
		 * ファイルの終端に到達しているか調べる
		 * <p>ファイルの終端に到達しているか調べます。</p>
		 * @return bool <p>ファイルが終端であれば <b><code>TRUE</code></b>、そうでなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.eof.php
		 * @see feof()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function eof(): bool {}

		/**
		 * 出力をファイルにフラッシュする
		 * <p>バッファリングされたすべての出力をファイルに強制的に書き込みます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fflush.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fflush(): bool {}

		/**
		 * ファイルから文字を取り出す
		 * <p>ファイルから 1 文字取り出す。</p>
		 * @return string <p>ファイルから読み込まれた 1 文字を含む文字列もしくは終端の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetc.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetc(): string {}

		/**
		 * ファイルから行を取り出し CSV フィールドとして処理する
		 * <p>CSV フォーマットのファイルから行を取り出し読み込まれたフィールドを含む配列を返します。</p>
		 * @param string $delimiter <p>フィールドの区切り文字 (1 文字のみ)。デフォルトはカンマもしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @param string $enclosure <p>フィールド囲み文字 (1 文字のみ)。デフォルトはダブルクォートもしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @param string $escape <p>エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ (<i>\</i>) もしくは <code>SplFileObject::setCsvControl()</code> を使ってセットされた値です。</p>
		 * @return array <p>読み込まれたフィールドを含む数値添字配列もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>CSV ファイルの空白行は <b><code>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</code></b> を使わない限り単独の <b><code>NULL</code></b> フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetcsv.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetcsv(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): array {}

		/**
		 * ファイルから 1 行取り出す
		 * <p>ファイルから 1 行取り出します。</p>
		 * @return string <p>ファイルから次の行を含む文字列、もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgets.php
		 * @see fgets()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgets(): string {}

		/**
		 * ファイルから 1 行取り出し HTML タグを取り除く
		 * <p><b>SplFileObject::fgetss()</b> attempts to strip 読み込むテキストから HTML と PHP タグを取り除こうとすること以外、<code>SplFileObject::fgets()</code> と同じです。</p>
		 * @param string $allowable_tags <p>オプションのパラメータで、取り除きたくないタグを指定します。</p>
		 * @return string <p>HTML と PHP コードが取り除かれたファイルの次の行を含む文字列、もしくは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fgetss.php
		 * @see fgetss()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetss(string $allowable_tags = NULL): string {}

		/**
		 * 簡易なファイルロックを行う
		 * <p><code>flock()</code> と同じ簡易な方法でファイルをロックもしくはロック解除する。</p>
		 * @param int $operation <p><code>operation</code> は次のいずれかです:</p><ul> <li>  共有ロック (読み手) にするには <b><code>LOCK_SH</code></b>。  </li> <li>  排他ロック (書き手) にするには <b><code>LOCK_EX</code></b>。  </li> <li>  (共有もしくは排他) ロックを解除するには <b><code>LOCK_UN</code></b>。  </li> <li>  ロック中にブロックしないようにするには <b><code>LOCK_NB</code></b> (Windows ではサポートされません)。  </li> </ul>
		 * @param int $wouldblock <p>ロックがブロックされる場合 (errno が EWOULDBLOCK である)、<b><code>TRUE</code></b> にセットします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.flock.php
		 * @see flock()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function flock(int $operation, int &$wouldblock = NULL): bool {}

		/**
		 * ファイルポインタに残っているデータをすべて出力する
		 * <p>与えられたファイルポインタの現在位置から終端までを読み込み結果を出力バッファに書き出します。</p><p>既にデータをファイルに書き込んでいる場合、ファイルポインタをファイルの始めにリセットするために <code>SplFileObject::rewind()</code> を呼び出すことが必要になる場合があります。</p>
		 * @return int <p><code>handle</code> から読み込まれ出力を通して渡された文字数を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fpassthru.php
		 * @see fpassthru()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fpassthru(): int {}

		/**
		 * フィールドの配列を CSV の行として書き出す
		 * <p><code>fields</code> の配列を、CSV の行としてファイルに書き出します。</p>
		 * @param array $fields <p>値の配列。</p>
		 * @param string $delimiter <p>オプションで指定する、フィールドの区切り文字 (一文字のみ)。</p>
		 * @param string $enclosure <p>オプションで指定する。フィールドの囲み文字 (一文字のみ)。</p>
		 * @param string $escape <p>オプションの <code>escape</code> は、エスケープ文字 (一文字だけ) を指定します。</p>
		 * @return int <p>書き出した文字列の長さを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>delimiter</code> や <code>enclosure</code> が一文字でない場合は <b><code>FALSE</code></b> を返し、何もファイルに書き出しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.fputcsv.php
		 * @see fputcsv()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function fputcsv(array $fields, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): int {}

		/**
		 * Read from file
		 * <p>Reads the given number of bytes from the file.</p>
		 * @param int $length <p>The number of bytes to read.</p>
		 * @return string <p>Returns the string read from the file 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/splfileobject.fread.php
		 * @see fread()
		 * @since PHP 5 >= 5.5.11, PHP 7
		 */
		public function fread(int $length): string {}

		/**
		 * フォーマットに従ってファイルからの入力をパースする
		 * <p>ファイルから 1 行読み込み、<code>sprintf()</code> のドキュメントで説明される規定の <code>format</code> に従って解釈されます。</p><p><code>format</code> 文字列のホワイトスペースはファイルからの行のホワイトスペースとマッチします。このことが意味するのはフォーマット文字列のタブ (<i>\t</i>) でさえも入力ストリームの 1 つのスペース文字とマッチしてしまうということです。</p>
		 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <i>%</i>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <i>%[flags][width][.precision]specifier</i>.</p> <p></p> <b>Flags</b>   Flag 説明     <i>-</i>  Left-justify within the given field width; Right justification is the default    <i>+</i>  Prefix positive numbers with a plus sign <i>+</i>; Default only negative are prefixed with a negative sign.     <i> </i>(space)  Pads the result with spaces. This is the default.    <i>0</i>  Only left-pads numbers with zeros. With <i>s</i> specifiers this can also right-pad with zeros.     <i>'</i>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <i>.</i> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <i>e</i>, <i>E</i>, <i>f</i> and <i>F</i> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <i>g</i> and <i>G</i> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <i>s</i> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>注意</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>注意</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier 説明     <i>%</i>  A literal percent character. No argument is required.    <i>b</i>  The argument is treated as an integer and presented as a binary number.    <i>c</i>  The argument is treated as an integer and presented as the character with that ASCII.    <i>d</i>  The argument is treated as an integer and presented as a (signed) decimal number.    <i>e</i>  The argument is treated as scientific notation (e.g. 1.2e+2). The precision specifier stands for the number of digits after the decimal point since PHP 5.2.1. In earlier versions, it was taken as number of significant digits (one less).    <i>E</i>  Like the <i>e</i> specifier but uses uppercase letter (e.g. 1.2E+2).    <i>f</i>  The argument is treated as a float and presented as a floating-point number (locale aware).    <i>F</i>  The argument is treated as a float and presented as a floating-point number (non-locale aware). Available as of PHP 5.0.3.    <i>g</i>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X ≥ −4, the conversion is with style f and precision P − (X + 1). Otherwise, the conversion is with style e and precision P − 1.</p>    <i>G</i>  Like the <i>g</i> specifier but uses <i>E</i> and <i>F</i>.    <i>o</i>  The argument is treated as an integer and presented as an octal number.    <i>s</i>  The argument is treated and presented as a string.    <i>u</i>  The argument is treated as an integer and presented as an unsigned decimal number.    <i>x</i>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <i>X</i>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).      <b>警告</b> <p>The <i>c</i> type specifier ignores padding and width</p>   <b>警告</b> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <i>string</i> <i>s</i>   <i>integer</i>  <i>d</i>, <i>u</i>, <i>c</i>, <i>o</i>, <i>x</i>, <i>X</i>, <i>b</i>    <i>double</i>  <i>g</i>, <i>G</i>, <i>e</i>, <i>E</i>, <i>f</i>, <i>F</i>
		 * @param mixed $_ <p>オプションの割り当て値。</p>
		 * @return mixed <p>このメソッドに渡される引数がひとつしかない場合、処理される値は配列として返されます。そうでなければ、オプションパラメータが渡される場合、メソッドは割り当て値の個数を返します。オプションパラメータは参照渡しでなければなりません。</p>
		 * @link https://php.net/manual/ja/splfileobject.fscanf.php
		 * @see fscanf(), sscanf(), printf(), sprintf()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fscanf(string $format, &$_ = NULL) {}

		/**
		 * ファイルポインタを移動させる
		 * <p><code>offset</code> を <code>whence</code> で指定される位置に追加することで、ファイルの始めからバイト単位でファイルポイントを移動させます。</p>
		 * @param int $offset <p>オフセットです。負の値はポインタを戻すために使うことができます。これは SEEK_END が <code>whence</code> の値として使われるときに便利です。</p>
		 * @param int $whence <p><code>whence</code> の値は次のようなものになります:</p><ul> <li> <b><code>SEEK_SET</code></b> - <code>offset</code> バイトに等しい位置にセットします。</li> <li> <b><code>SEEK_CUR</code></b> - 現在の位置に <code>offset</code> を加えた位置にセットします。</li> <li> <b><code>SEEK_END</code></b> - 終端に <code>offset</code> を加えた位置にセットします。</li> </ul> <p><code>whence</code> が指定されない場合、<b><code>SEEK_SET</code></b> が前提になります。</p>
		 * @return int <p>探索が成功した場合は 0、そうでなければ -1 が返されます。終端より先の位置を探索してもエラーにならないことにご注意してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fseek.php
		 * @see fseek()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fseek(int $offset, int $whence = SEEK_SET): int {}

		/**
		 * ファイルの情報を得る
		 * <p>ファイルの統計情報を集めます。<code>fstat()</code> とまったく同じようにふるまいます。</p>
		 * @return array <p>ファイルの統計情報の配列を返します; 配列フォーマットの詳細は <code>stat()</code> のマニュアルページを参照してください。</p>
		 * @link https://php.net/manual/ja/splfileobject.fstat.php
		 * @see fstat(), stat()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fstat(): array {}

		/**
		 * ファイルポインタの現在位置を返す
		 * <p>ファイルストリームにおいて現在のオフセットを表すファイルポインタの現在位置を返します。</p>
		 * @return int <p>ファイルポインタの位置を整数として、もしくはエラーのときは <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.ftell.php
		 * @see ftell()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function ftell(): int {}

		/**
		 * ファイルを指定した長さに丸める
		 * <p>ファイルを <code>size</code> バイトに丸めます。</p>
		 * @param int $size <p>丸めるサイズ。</p>  <p><b>注意</b>:</p> <p><code>size</code> がファイルのサイズより大きい場合、ファイルは null バイトで拡大されます。</p> <p><code>size</code> がファイルのサイズより小さい場合、余分なデータは失われます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.ftruncate.php
		 * @see ftruncate()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function ftruncate(int $size): bool {}

		/**
		 * ファイルに書き込む
		 * <p>Writes the contents of <code>string</code> to the file</p>
		 * @param string $str <p>ファイルに書き込まれる文字列。</p>
		 * @param int $length <p><code>length</code> 引数が渡される場合、<code>length</code> バイト分だけ書き込まれた後もしくは <code>string</code> の終端に達するのどちらか早い方の後で書き込みが停止します。</p>
		 * @return int <p>書き込まれるバイト数、もしくはエラーの場合 <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.fwrite.php
		 * @see fwrite()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fwrite(string $str, int $length = NULL): int {}

		/**
		 * 用途はなし
		 * <p>SplFileObject は子を持たないのでこのメソッドは <b><code>NULL</code></b> を返します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getChildren(): void {}

		/**
		 * CSV の区切り、囲み文字、エスケープ文字を取得する
		 * <p>CSV フィールドを処理するのに使われる区切りと囲み文字とエスケープ文字を取得します。</p>
		 * @return array <p>区切りと囲み文字とエスケープ文字を含む数字添字配列を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.getcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getCsvControl(): array {}

		/**
		 * SplFileObject のフラグを取得する
		 * <p>SplFileObject のインスタンス用のフラグセットを <code>integer</code> 形式で取得します。</p>
		 * @return int <p>フラグを表す <code>integer</code> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getFlags(): int {}

		/**
		 * 行の最大バイト数を取得する
		 * <p><code>SplFileObject::setMaxLineLen()</code> によってセットされる行の最大バイト数を取得します。</p>
		 * @return int <p><code>SplFileObject::setMaxLineLen()</code> でセットされる場合は行の最大バイト数を返します。デフォルトは <i>0</i> です。</p>
		 * @link https://php.net/manual/ja/splfileobject.getmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getMaxLineLen(): int {}

		/**
		 * SplFileObject は子を持ちません
		 * <p>SplFileObject は子を持たないのでこのメソッドは常に <b><code>FALSE</code></b> を返します。</p>
		 * @return bool <p>Returns <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/splfileobject.haschildren.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * 行番号を取得する
		 * <p>現在の行番号を取得します。</p><p><b>注意</b>:</p><p>固定長のファイルを読み込むのに <code>SplFileObject::setMaxLineLen()</code> が使われている場合 この数はファイルの実際の行番号を反映しない可能性があります。</p>
		 * @return int <p>現在の行番号を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function key(): int {}

		/**
		 * 次の行を読み出す
		 * <p>ファイルの次の行に進みます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * ファイルポインタを先頭に巻き戻す
		 * <p>ファイルポインタを先頭に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * ファイルポインタを指定行に移動させる
		 * <p>ファイルポインタを指定行に移動させます。</p>
		 * @param int $line_pos <p>ゼロを起点とした移動させる行数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function seek(int $line_pos): void {}

		/**
		 * CSV の区切り文字、囲み文字、エスケープ文字をセットする
		 * <p>CSV フィールド処理用の区切り文字と囲み文字とエスケープ文字をセットします。</p>
		 * @param string $delimiter <p>フィールドの区切り文字 (1 文字のみ)。</p>
		 * @param string $enclosure <p>フィールドの囲み文字 (1 文字のみ)。</p>
		 * @param string $escape <p>フィールドのエスケープ文字 (1 文字のみ)。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setCsvControl(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): void {}

		/**
		 * SplFileObject のフラグをセットする
		 * <p>SplFileObject によって使われるフラグをセットします。</p>
		 * @param int $flags <p>セットするフラグのビットマスク。 利用可能なフラグは SplFileObject の定数 を参照してください。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setFlags(int $flags): void {}

		/**
		 * 読み込む行の最大バイト数をセットする
		 * <p>読み込む行の最大バイト数をセットします。</p>
		 * @param int $max_len <p>行の最大バイト数。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/splfileobject.setmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setMaxLineLen(int $max_len): void {}

		/**
		 * ファイル終端でないかチェックする
		 * <p>ファイル終端に到達したかチェックします。</p>
		 * @return bool <p>ファイル終端に到達していなければ <b><code>TRUE</code></b>、そうでなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/splfileobject.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>空のコンテナ上で無効な操作 (要素の削除など) を試みたときにスローされる例外です。</p>
	 * @link https://php.net/manual/ja/class.underflowexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class UnderflowException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>いくつかの値のセットに一致しない値であった際にスローされる例外です。 これが発生する例としては、ある関数が別の関数をコールしていて、 その関数の返り値が特定の型や値である (そして計算やバッファ関連のエラーがない) ことを想定している場合があります。</p>
	 * @link https://php.net/manual/ja/class.unexpectedvalueexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class UnexpectedValueException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * 与えられたクラスあるいはインターフェイスが実装しているインターフェイスを返す
	 * <p>この関数は、与えられたクラス <code>class</code> とその親が実装しているインターフェイスを配列で返します。</p>
	 * @param mixed $class <p>オブジェクト (クラスのインスタンス) もしくは文字列 (クラス名あるいはインターフェイス名) を指定します。</p>
	 * @param bool $autoload <p><code>__autoload()</code> マジックメソッドを通じて、 この関数にクラスを自動的にロードさせるかどうかを指定します。</p>
	 * @return array <p>成功した場合に配列、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.class-implements.php
	 * @see class_parents(), get_declared_interfaces()
	 * @since PHP 5, PHP 7
	 */
	function class_implements($class, bool $autoload = TRUE): array {}

	/**
	 * 与えられたクラスの親クラスを返す
	 * <p>この関数は、与えられたクラス <code>class</code> の親クラス名を 配列で返します。</p>
	 * @param mixed $class <p>オブジェクトもしくはクラスの文字列を指定します。</p>
	 * @param bool $autoload <p><code>__autoload()</code> マジックメソッドを通じて、 この関数にクラスを自動的にロードさせるかどうかを指定します。</p>
	 * @return array <p>成功した場合に配列、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.class-parents.php
	 * @see class_implements()
	 * @since PHP 5, PHP 7
	 */
	function class_parents($class, bool $autoload = TRUE): array {}

	/**
	 * 指定したクラスが使っているトレイトを返す
	 * <p>この関数は、指定したクラスが使っているトレイトの名前を配列で返します。 しかし、親クラスで使っているトレイトは含まれません。</p>
	 * @param mixed $class <p>オブジェクト (クラスのインスタンス) あるいは文字列 (クラス名)。</p>
	 * @param bool $autoload <p>マジックメソッド <code>__autoload()</code> で、この関数からクラスを自動的に読み込ませるかどうか。</p>
	 * @return array <p>成功した場合に配列、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.class-uses.php
	 * @see class_parents(), get_declared_traits()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function class_uses($class, bool $autoload = TRUE): array {}

	/**
	 * ユーザー関数をイテレータのすべての要素でコールする
	 * <p>イテレータ内のすべての要素に対して関数をコールします。</p>
	 * @param \Traversable $iterator <p>順次処理したいクラス。</p>
	 * @param callable $function <p>すべての要素に対してコールしたいコールバック関数。</p><p><b>注意</b>:  <code>iterator</code> での処理を続けるために、 この関数は <b><code>TRUE</code></b> を返さなければなりません。 </p>
	 * @param array $args <p>コールバック関数に渡す引数。</p>
	 * @return int <p>イテレータの要素数を返します。</p>
	 * @link https://php.net/manual/ja/function.iterator-apply.php
	 * @see array_walk()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function iterator_apply(\Traversable $iterator, callable $function, array $args = NULL): int {}

	/**
	 * イテレータにある要素をカウントする
	 * <p>イテレータにある要素をカウントします。 <b>iterator_count()</b> は、 <code>iterator</code> の現在位置がそのまま保たれることを保障しません。</p>
	 * @param \Traversable $iterator <p>カウントしたいイテレータ。</p>
	 * @return int <p><code>iterator</code> の要素数を返します。</p>
	 * @link https://php.net/manual/ja/function.iterator-count.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function iterator_count(\Traversable $iterator): int {}

	/**
	 * イテレータを配列にコピーする
	 * <p>イテレータの要素を配列にコピーします。</p>
	 * @param \Traversable $iterator <p>コピーしたいイテレータ。</p>
	 * @param bool $use_keys <p>イテレータの要素のキーをインデックスとして使用するかどうか。</p> <p>PHP 5.5 以降では、キーが <code>array</code> あるいは <code>object</code> のときに警告を発するようになりました。 キーが <b><code>NULL</code></b> の場合は空文字列に変換し、キーが <code>float</code> の場合は <code>integer</code> 型になるよう切り詰めます。 キーが <code>resource</code> の場合は警告を発し、リソース ID に変換します。 また、キーが <code>boolean</code> の場合は整数値に変換します。</p>  <p><b>注意</b>:</p> <p>このパラメータを省略したり <b><code>TRUE</code></b> を指定したりした場合は、 重複するキーは上書きされます。そのキーに対して最後にあらわれた値が <code>array</code> で返されることになります。 このパラメータを <b><code>FALSE</code></b> にすると、重複があってもすべての値を返します。</p>
	 * @return array <p><code>iterator</code> の要素を含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.iterator-to-array.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function iterator_to_array(\Traversable $iterator, bool $use_keys = TRUE): array {}

	/**
	 * __autoload() のデフォルト実装
	 * <p>この関数は、<code>__autoload()</code> のデフォルト実装として使用されることを意図しています。 ほかに何も指定されておらず、<b>autoload_register()</b> がパラメータなしでコールされた場合には、 その後の <code>__autoload()</code> のコール時にはこの関数が使用されます。</p>
	 * @param string $class_name <p>インスタンスを作成する小文字のクラス名 (および名前空間名)。</p>
	 * @param string $file_extensions <p>デフォルトでは、クラス名を小文字にして .inc および .php を拡張子につけたファイル名のファイルが存在するかどうかを すべてのインクルードパスから探します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload(string $class_name, string $file_extensions = 'spl_autoload_extensions()'): void {}

	/**
	 * 要求されたクラスを読み込むために、すべての登録済みの __autoload() 関数を試す
	 * <p>この関数は、登録済みの __autoload 関数を使用して クラスあるいはインターフェイスを手動で探すために使用することができます。</p>
	 * @param string $class_name <p>探したいクラス名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload-call.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload_call(string $class_name): void {}

	/**
	 * spl_autoload 用のデフォルトの拡張子を登録し、それを返す
	 * <p>この関数は、<code>__autoload()</code> 用の代替関数である <code>spl_autoload()</code> が使用するファイル拡張子を変更したり調べたりします。</p>
	 * @param string $file_extensions <p>引数なしでコールした場合は、現在の拡張子一覧をカンマ区切りで返します。 ファイル拡張子を変更するには、 新しい拡張子一覧をカンマ区切り文字列で表したものを引数に指定して、 この関数を実行します。</p>
	 * @return string <p><code>spl_autoload()</code> のデフォルト拡張子の一覧をカンマ区切り形式で返します。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload-extensions.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload_extensions(string $file_extensions = NULL): string {}

	/**
	 * すべての登録済み __autoload() 関数を返す
	 * <p>すべての登録済み __autoload() 関数を取得します。</p>
	 * @return array <p>すべての登録済み __autoload 関数を配列で返します。 autoload キューが有効になっていない場合は、<b><code>FALSE</code></b> が返されます。 関数が何も登録されていない場合は、空の配列が返されます。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload-functions.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload_functions(): array {}

	/**
	 * 指定した関数を __autoload() の実装として登録する
	 * <p>指定した関数を、spl が提供する __autoload キューに登録します。 キューがまだアクティブになっていない場合は、まずアクティブにします。</p><p>もしあなたのコード中に <code>__autoload()</code> 関数が存在するのなら、 それを明示的に __autoload キューに登録しなければなりません。 なぜなら、<b>spl_autoload_register()</b> は、 <code>spl_autoload()</code> あるいは <code>spl_autoload_call()</code> によって <code>__autoload()</code> 関数のエンジンキャッシュを効率的に置き換えるからです。</p><p>複数の autoload 関数が必要となる場合でも <b>spl_autoload_register()</b> は対応できます。この関数は autoload 関数のキューを作成し、 定義された順にそれを実行していきます。一方 <code>__autoload()</code> は、一度しか定義できません。</p>
	 * @param callable $autoload_function <p>登録したい autoload 関数。 パラメータが指定されなかった場合は、デフォルト実装である <code>spl_autoload()</code> が登録されます。</p>
	 * @param bool $throw <p>このパラメータは、 <b>spl_autoload_register()</b> が <code>autoload_function</code> を登録できなかったときに例外をスローするかどうかを指定します。</p>
	 * @param bool $prepend <p>true の場合、<b>spl_autoload_register()</b> はキューの最後に追加するのではなく先頭に追加します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload-register.php
	 * @see __autoload()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload_register(callable $autoload_function = NULL, bool $throw = TRUE, bool $prepend = FALSE): bool {}

	/**
	 * 指定した関数の、__autoload() の実装としての登録を解除する
	 * <p>spl が提供する __autoload キューから、関数を削除します。 キューがアクティブであり、かつこの関数の削除後にキューが空になった場合は キューが非アクティブ化されます。</p><p>この関数の結果として autoload キューが非アクティブになったとした場合に、 既存の __autoload 関数が再アクティブ化されることはありません。</p>
	 * @param mixed $autoload_function <p>登録を解除したい autoload 関数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.spl-autoload-unregister.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function spl_autoload_unregister($autoload_function): bool {}

	/**
	 * 利用可能な SPL クラスを返す
	 * <p>この関数は現在利用可能な SPL クラスを配列で返します。</p>
	 * @return array <p>現在利用可能な SPL クラスを配列で返します。</p>
	 * @link https://php.net/manual/ja/function.spl-classes.php
	 * @since PHP 5, PHP 7
	 */
	function spl_classes(): array {}

	/**
	 * 指定したオブジェクトのハッシュ ID を返す
	 * <p>この関数は、オブジェクトの一意な識別子を返します。この ID は、 オブジェクトを保存する際のハッシュのキーとして使えます。 また、オブジェクトが破棄されるまでは、オブジェクトを識別するための値としても使えます。 オブジェクトが破棄されると、そのハッシュが他のオブジェクトで再利用されてしまうことがあります。</p>
	 * @param object $obj
	 * @return string <p>現在存在する各オブジェクトに固有で、同一オブジェクトに対しては常に同じ値となる文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.spl-object-hash.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function spl_object_hash(object $obj): string {}

	/**
	 * Return the integer object handle for given object
	 * <p>This function returns a unique identifier for the object. The object id is unique for the lifetime of the object. Once the object is destroyed, its id may be reused for other objects. This behavior is similar to <code>spl_object_hash()</code>.</p>
	 * @param object $obj
	 * @return int <p>An integer identifier that is unique for each currently existing object and is always the same for each object.</p>
	 * @link https://php.net/manual/ja/function.spl-object-id.php
	 * @since PHP 7 >= 7.2.0
	 */
	function spl_object_id(object $obj): int {}

}
