<?php



namespace Ds {

	/**
	 * <p><b>Collection</b> is the base interface which covers functionality common to all the data structures in this library. It guarantees that all structures are traversable, countable, and can be converted to json using <code>json_encode()</code>.</p>
	 * @link https://php.net/manual/ja/class.ds-collection.php
	 * @since No version information available, might only be in Git
	 */
	interface Collection {

		/**
		 * Removes all values
		 * <p>Removes all values from the collection.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-collection.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void;

		/**
		 * Returns a shallow copy of the collection
		 * <p>Returns a shallow copy of the collection.</p>
		 * @return Ds\Collection <p>Returns a shallow copy of the collection.</p>
		 * @link https://php.net/manual/ja/ds-collection.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Collection;

		/**
		 * Returns whether the collection is empty
		 * <p>Returns whether the collection is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the collection is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-collection.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool;

		/**
		 * Converts the collection to an array
		 * <p>Converts the collection to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the collection.</p>
		 * @link https://php.net/manual/ja/ds-collection.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array;
	}

	/**
	 * <p>A Deque (pronounced “deck”) is a sequence of values in a contiguous buffer that grows and shrinks automatically. The name is a common abbreviation of “double-ended queue” and is used internally by <b>Ds\Queue</b>.</p>
	 * <p>Two pointers are used to keep track of a head and a tail. The pointers can “wrap around” the end of the buffer, which avoids the need to move other values around to make room. This makes shift and unshift very fast —  something a <b>Ds\Vector</b> can’t compete with.</p>
	 * <p>Accessing a value by index requires a translation between the index and its corresponding position in the buffer: <code>((head + position) % capacity)</code>.</p>
	 * @link https://php.net/manual/ja/class.ds-deque.php
	 * @since No version information available, might only be in Git
	 */
	class Deque {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-deque.php
		 */
		const MIN_CAPACITY = 8;

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>   <p><b>注意</b>:</p> <p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Updates all values by applying a callback function to each value
		 * <p>Updates all values by applying a <code>callback</code> function to each value in the deque.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the deque.</p> <p>The callback should return what the value should be replaced by.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.apply.php
		 * @since PECL ds >= 1.0.0
		 */
		public function apply(callable $callback): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-deque.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values from the deque
		 * <p>Removes all values from the deque.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Determines if the deque contains given values
		 * <p>Determines if the deque contains all values.</p>
		 * @param mixed $_values
		 * @return bool <p><b><code>FALSE</code></b> if any of the provided <code>values</code> are not in the deque, <b><code>TRUE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-deque.contains.php
		 * @since PECL ds >= 1.0.0
		 */
		public function contains($_values = NULL): bool {}

		/**
		 * Returns a shallow copy of the deque
		 * <p>Returns a shallow copy of the deque.</p>
		 * @return Ds\Deque <p>A shallow copy of the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Deque {}

		/**
		 * Creates a new deque using a callable to determine which values to include
		 * <p>Creates a new deque using a <code>callable</code> to determine which values to include.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : bool  <p>Optional <code>callable</code> which returns <b><code>TRUE</code></b> if the value should be included, <b><code>FALSE</code></b> otherwise.</p> <p>If a callback is not provided, only values which are <b><code>TRUE</code></b> (see converting to boolean) will be included.</p>
		 * @return Ds\Deque <p>A new deque containing all the values for which either the <code>callback</code> returned <b><code>TRUE</code></b>, or all values that convert to <b><code>TRUE</code></b> if a <code>callback</code> was not provided.</p>
		 * @link https://php.net/manual/ja/ds-deque.filter.php
		 * @since PECL ds >= 1.0.0
		 */
		public function filter(callable $callback = NULL): \Ds\Deque {}

		/**
		 * Attempts to find a value's index
		 * <p>Returns the index of the <code>value</code>, or <b><code>FALSE</code></b> if not found.</p>
		 * @param mixed $value <p>The value to find.</p>
		 * @return mixed <p>The index of the value, or <b><code>FALSE</code></b> if not found.</p> <p><b>注意</b>:</p> <p>Values will be compared by value and by type.</p>
		 * @link https://php.net/manual/ja/ds-deque.find.php
		 * @since PECL ds >= 1.0.0
		 */
		public function find($value) {}

		/**
		 * Returns the first value in the deque
		 * <p>Returns the first value in the deque.</p>
		 * @return mixed <p>The first value in the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.first.php
		 * @since PECL ds >= 1.0.0
		 */
		public function first() {}

		/**
		 * Returns the value at a given index
		 * <p>Returns the value at a given index.</p>
		 * @param int $index <p>The index to access, starting at 0.</p>
		 * @return mixed <p>The value at the requested index.</p>
		 * @link https://php.net/manual/ja/ds-deque.get.php
		 * @since PECL ds >= 1.0.0
		 */
		public function get(int $index) {}

		/**
		 * Inserts values at a given index
		 * <p>Inserts values into the deque at a given index.</p>
		 * @param int $index <p>The index at which to insert. <code>0 &lt;= index &lt;= count</code></p>  <p><b>注意</b>:</p> <p>You can insert at the index equal to the number of values.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.insert.php
		 * @since PECL ds >= 1.0.0
		 */
		public function insert(int $index, $_values = NULL): void {}

		/**
		 * Returns whether the deque is empty
		 * <p>Returns whether the deque is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the deque is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-deque.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Joins all values together as a string
		 * <p>Joins all values together as a string using an optional separator between each value.</p>
		 * @param string $glue <p>An optional string to separate each value.</p>
		 * @return string <p>All values of the deque joined together as a string.</p>
		 * @link https://php.net/manual/ja/ds-deque.join.php
		 * @since PECL ds >= 1.0.0
		 */
		public function join(string $glue = NULL): string {}

		/**
		 * Returns the last value
		 * <p>Returns the last value in the deque.</p>
		 * @return mixed <p>The last value in the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.last.php
		 * @since PECL ds >= 1.0.0
		 */
		public function last() {}

		/**
		 * Returns the result of applying a callback to each value
		 * <p>Returns the result of applying a <code>callback</code> function to each value in the deque.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the deque.</p> <p>The callable should return what the new value will be in the new deque.</p>
		 * @return Ds\Deque <p>The result of applying a <code>callback</code> to each value in the deque.</p> <p><b>注意</b>:</p> <p>The values of the current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-deque.map.php
		 * @since PECL ds >= 1.0.0
		 */
		public function map(callable $callback): \Ds\Deque {}

		/**
		 * Returns the result of adding all given values to the deque
		 * <p>Returns the result of adding all given values to the deque.</p>
		 * @param mixed $values <p>A traversable object or an <code>array</code>.</p>
		 * @return Ds\Deque <p>The result of adding all given values to the deque, effectively the same as adding the values to a copy, then returning that copy.</p> <p><b>注意</b>:</p> <p>The current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-deque.merge.php
		 * @since PECL ds >= 1.0.0
		 */
		public function merge($values): \Ds\Deque {}

		/**
		 * Removes and returns the last value
		 * <p>Removes and returns the last value.</p>
		 * @return mixed <p>The removed last value.</p>
		 * @link https://php.net/manual/ja/ds-deque.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop() {}

		/**
		 * Adds values to the end of the deque
		 * <p>Adds values to the end of the deque.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($_values = NULL): void {}

		/**
		 * Reduces the deque to a single value using a callback function
		 * <p>Reduces the deque to a single value using a callback function.</p>
		 * @param callable $callback callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>    <code>carry</code>   <p>The return value of the previous callback, or <code>initial</code> if it's the first iteration.</p>   <code>value</code>   <p>The value of the current iteration.</p>
		 * @param mixed $initial <p>The initial value of the carry value. Can be <b><code>NULL</code></b>.</p>
		 * @return mixed <p>The return value of the final callback.</p>
		 * @link https://php.net/manual/ja/ds-deque.reduce.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reduce(callable $callback, $initial = NULL) {}

		/**
		 * Removes and returns a value by index
		 * <p>Removes and returns a value by index.</p>
		 * @param int $index <p>The index of the value to remove.</p>
		 * @return mixed <p>The value that was removed.</p>
		 * @link https://php.net/manual/ja/ds-deque.remove.php
		 * @since PECL ds >= 1.0.0
		 */
		public function remove(int $index) {}

		/**
		 * Reverses the deque in-place
		 * <p>Reverses the deque in-place.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.reverse.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reverse(): void {}

		/**
		 * Returns a reversed copy
		 * <p>Returns a reversed copy of the deque.</p>
		 * @return Ds\Deque <p>A reversed copy of the deque.</p> <p><b>注意</b>:</p> <p>The current instance is not affected.</p>
		 * @link https://php.net/manual/ja/ds-deque.reversed.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reversed(): \Ds\Deque {}

		/**
		 * Rotates the deque by a given number of rotations
		 * <p>Rotates the deque by a given number of rotations, which is equivalent to successively calling <code>$deque-&gt;push($deque-&gt;shift())</code> if the number of rotations is positive, or <code>$deque-&gt;unshift($deque-&gt;pop())</code> if negative.</p>
		 * @param int $rotations <p>The number of times the deque should be rotated.</p>
		 * @return void <p>値を返しません。. The deque of the current instance will be rotated.</p>
		 * @link https://php.net/manual/ja/ds-deque.rotate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function rotate(int $rotations): void {}

		/**
		 * Updates a value at a given index
		 * <p>Updates a value at a given index.</p>
		 * @param int $index <p>The index of the value to update.</p>
		 * @param mixed $value <p>The new value.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.set.php
		 * @since PECL ds >= 1.0.0
		 */
		public function set(int $index, $value): void {}

		/**
		 * Removes and returns the first value
		 * <p>Removes and returns the first value.</p>
		 * @return mixed <p>The first value, which was removed.</p>
		 * @link https://php.net/manual/ja/ds-deque.shift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function shift() {}

		/**
		 * Returns a sub-deque of a given range
		 * <p>Creates a sub-deque of a given range.</p>
		 * @param int $index <p>The index at which the sub-deque starts.</p> <p>If positive, the deque will start at that index in the deque. If negative, the deque will start that far from the end.</p>
		 * @param int $length <p>If a length is given and is positive, the resulting deque will have up to that many values in it. If the length results in an overflow, only values up to the end of the deque will be included. If a length is given and is negative, the deque will stop that many values from the end. If a length is not provided, the resulting deque will contain all values between the index and the end of the deque.</p>
		 * @return Ds\Deque <p>A sub-deque of the given range.</p>
		 * @link https://php.net/manual/ja/ds-deque.slice.php
		 * @since PECL ds >= 1.0.0
		 */
		public function slice(int $index, int $length = NULL): \Ds\Deque {}

		/**
		 * Sorts the deque in-place
		 * <p>Sorts the deque in-place, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.sort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sort(callable $comparator = NULL): void {}

		/**
		 * Returns a sorted copy
		 * <p>Returns a sorted copy, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Deque <p>Returns a sorted copy of the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.sorted.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sorted(callable $comparator = NULL): \Ds\Deque {}

		/**
		 * Returns the sum of all values in the deque
		 * <p>Returns the sum of all values in the deque.</p><p><b>注意</b>:</p><p>Arrays and objects are considered equal to zero when calculating the sum.</p>
		 * @return number <p>The sum of all the values in the deque as either a <code>float</code> or <code>int</code> depending on the values in the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.sum.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sum() {}

		/**
		 * Converts the deque to an array
		 * <p>Converts the deque to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the deque.</p>
		 * @link https://php.net/manual/ja/ds-deque.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}

		/**
		 * Adds values to the front of the deque
		 * <p>Adds values to the front of the deque, moving all the current values forward to make room for the new values.</p>
		 * @param mixed $values <p>The values to add to the front of the deque.</p> <p><b>注意</b>:</p> <p>Multiple values will be added in the same order that they are passed.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-deque.unshift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function unshift($values = NULL): void {}
	}

	/**
	 * <p>Hashable is an interface which allows objects to be used as keys. It’s an alternative to <code>spl_object_hash()</code>, which determines an object’s hash based on its handle: this means that two objects that are considered equal by an implicit definition would not treated as equal because they are not the same instance.</p>
	 * <p><code>hash()</code> is used to return a scalar value to be used as the object's hash value, which determines where it goes in the hash table. While this value does not have to be unique, objects which are equal must have the same hash value.</p>
	 * <p><b>equals()</b> is used to determine if two objects are equal. It's guaranteed that the comparing object will be an instance of the same class as the subject.</p>
	 * @link https://php.net/manual/ja/class.ds-hashable.php
	 * @since No version information available, might only be in Git
	 */
	interface Hashable {

		/**
		 * Determines whether an object is equal to the current instance
		 * <p>Determines whether another object is equal to the current instance.</p><p>This method allows objects to be used as keys in structures such as <b>Ds\Map</b> and <b>Ds\Set</b>, or any other lookup structure that honors this interface.</p><p><b>注意</b>:</p><p>It's guaranteed that <code>obj</code> is an instance of the same class.</p><p>It's important that objects which are equal also have the same hash value. See <code>Ds\Hashable::hash()</code>.</p>
		 * @param object $obj <p>The object to compare the current instance to, which is always an instance of the same class.</p>
		 * @return bool <p><b><code>TRUE</code></b> if equal, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-hashable.equals.php
		 * @since PECL ds >= 1.0.0
		 */
		public function equals(object $obj): bool;

		/**
		 * Returns a scalar value to be used as a hash value
		 * <p>Returns a scalar value to be used as the hash value of the objects.</p><p>While the hash value does not define equality, all objects that are equal according to <code>Ds\Hashable::equals()</code> must have the same hash value. Hash values of equal objects don't have to be unique, for example you could just return <b><code>TRUE</code></b> for all objects and nothing would break - the only implication would be that hash tables then turn into linked lists because all your objects will be hashed to the same bucket. It's therefore very important that you pick a good hash value, such as an ID or email address.</p><p>This method allows objects to be used as keys in structures such as <b>Ds\Map</b> and <b>Ds\Set</b>, or any other lookup structure that honors this interface.</p><p>Do not pick a value that might change within the object, such as a public property. Hash table lookups would fail because the hash has changed.</p><p>All objects that are equal must have the same hash value.</p>
		 * @return mixed <p>A scalar value to be used as this object's hash value.</p>
		 * @link https://php.net/manual/ja/ds-hashable.hash.php
		 * @since PECL ds >= 1.0.0
		 */
		public function hash();
	}

	/**
	 * <p>A Map is a sequential collection of key-value pairs, almost identical to an <code>array</code> used in a similar context. Keys can be any type, but must be unique. Values are replaced if added to the map using the same key.</p>
	 * @link https://php.net/manual/ja/class.ds-map.php
	 * @since No version information available, might only be in Git
	 */
	class Map {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-map.php
		 */
		const MIN_CAPACITY = 16;

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Allocates enough memory for a required capacity.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>   <p><b>注意</b>:</p> <p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Updates all values by applying a callback function to each value
		 * <p>Updates all values by applying a <code>callback</code> function to each value in the map.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$key</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the map.</p> <p>The callback should return what the value should be replaced by.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.apply.php
		 * @since PECL ds >= 1.0.0
		 */
		public function apply(callable $callback): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-map.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the map.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Returns a shallow copy of the map
		 * <p>Returns a shallow copy of the map.</p>
		 * @return Ds\Map <p>Returns a shallow copy of the map.</p>
		 * @link https://php.net/manual/ja/ds-map.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Map {}

		/**
		 * Creates a new map using keys that aren't in another map
		 * <p>Returns the result of removing all keys from the current instance that are present in a given <code>map</code>.</p><p><code>A \ B = {x ∈ A | x ∉ B}</code></p>
		 * @param \Ds\Map $map <p>The map containing the keys to exclude in the resulting map.</p>
		 * @return Ds\Map <p>The result of removing all keys from the current instance that are present in a given <code>map</code>.</p>
		 * @link https://php.net/manual/ja/ds-map.diff.php
		 * @since PECL ds >= 1.0.0
		 */
		public function diff(\Ds\Map $map): \Ds\Map {}

		/**
		 * Creates a new map using a callable to determine which pairs to include
		 * <p>Creates a new map using a <code>callable</code> to determine which pairs to include.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$key</code> , <code>mixed</code> <code>$value</code> ) : bool  <p>Optional <code>callable</code> which returns <b><code>TRUE</code></b> if the pair should be included, <b><code>FALSE</code></b> otherwise.</p> <p>If a callback is not provided, only values which are <b><code>TRUE</code></b> (see converting to boolean) will be included.</p>
		 * @return Ds\Map <p>A new map containing all the pairs for which either the <code>callback</code> returned <b><code>TRUE</code></b>, or all values that convert to <b><code>TRUE</code></b> if a <code>callback</code> was not provided.</p>
		 * @link https://php.net/manual/ja/ds-map.filter.php
		 * @since PECL ds >= 1.0.0
		 */
		public function filter(callable $callback = NULL): \Ds\Map {}

		/**
		 * Returns the first pair in the map
		 * <p>Returns the first pair in the map.</p>
		 * @return Ds\Pair <p>The first pair in the map.</p>
		 * @link https://php.net/manual/ja/ds-map.first.php
		 * @since PECL ds >= 1.0.0
		 */
		public function first(): \Ds\Pair {}

		/**
		 * Returns the value for a given key
		 * <p>Returns the value for a given key, or an optional default value if the key could not be found.</p><p><b>注意</b>:</p><p>Keys of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p><p><b>注意</b>:</p><p>You can also use array syntax to access values by key, eg. <code>$map["key"]</code>.</p><p>Be careful when using array syntax. Scalar keys will be coerced to integers by the engine. For example, <code>$map["1"]</code> will attempt to access <code>int(1)</code>, while <code>$map-&gt;get("1")</code> will correctly look up the string key.</p><p>See Arrays.</p>
		 * @param mixed $key <p>The key to look up.</p>
		 * @param mixed $default <p>The optional default value, returned if the key could not be found.</p>
		 * @return mixed <p>The value mapped to the given <code>key</code>, or the <code>default</code> value if provided and the key could not be found in the map.</p>
		 * @link https://php.net/manual/ja/ds-map.get.php
		 * @since PECL ds >= 1.0.0
		 */
		public function get($key, $default = NULL) {}

		/**
		 * Determines whether the map contains a given key
		 * <p>Determines whether the map contains a given key.</p>
		 * @param mixed $key <p>The key to look for.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the key could found, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-map.haskey.php
		 * @since PECL ds >= 1.0.0
		 */
		public function hasKey($key): bool {}

		/**
		 * Determines whether the map contains a given value
		 * <p>Determines whether the map contains a given value.</p>
		 * @param mixed $value <p>The value to look for.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the value could found, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-map.hasvalue.php
		 * @since PECL ds >= 1.0.0
		 */
		public function hasValue($value): bool {}

		/**
		 * Creates a new map by intersecting keys with another map
		 * <p>Creates a new map containing the pairs of the current instance whose keys are also present in the given <code>map</code>. In other words, returns a copy of the current instance with all keys removed that are not also in the other <code>map</code>.</p><p><code>A ∩ B = {x : x ∈ A ∧ x ∈ B}</code></p><p><b>注意</b>:</p><p>Values from the current instance will be kept.</p>
		 * @param \Ds\Map $map <p>The other map, containing the keys to intersect with.</p>
		 * @return Ds\Map <p>The key intersection of the current instance and another <code>map</code>.</p>
		 * @link https://php.net/manual/ja/ds-map.intersect.php
		 * @since PECL ds >= 1.0.0
		 */
		public function intersect(\Ds\Map $map): \Ds\Map {}

		/**
		 * Returns whether the map is empty
		 * <p>Returns whether the map is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the map is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-map.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Returns a set of the map's keys
		 * <p>Returns a set containing all the keys of the map, in the same order.</p>
		 * @return Ds\Set <p>A <b>Ds\Set</b> containing all the keys of the map.</p>
		 * @link https://php.net/manual/ja/ds-map.keys.php
		 * @since PECL ds >= 1.0.0
		 */
		public function keys(): \Ds\Set {}

		/**
		 * Sorts the map in-place by key
		 * <p>Sorts the map in-place by key, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.ksort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function ksort(callable $comparator = NULL): void {}

		/**
		 * Returns a copy, sorted by key
		 * <p>Returns a copy sorted by key, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Map <p>Returns a copy of the map, sorted by key.</p>
		 * @link https://php.net/manual/ja/ds-map.ksorted.php
		 * @since No version information available, might only be in Git
		 */
		public function ksorted(callable $comparator = NULL): \Ds\Map {}

		/**
		 * Returns the last pair of the map
		 * <p>Returns the last pair of the map.</p>
		 * @return Ds\Pair <p>The last pair of the map.</p>
		 * @link https://php.net/manual/ja/ds-map.last.php
		 * @since PECL ds >= 1.0.0
		 */
		public function last(): \Ds\Pair {}

		/**
		 * Returns the result of applying a callback to each value
		 * <p>Returns the result of applying a <code>callback</code> function to each value of the map.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$key</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the map.</p> <p>The callable should return what the key will be mapped to in the resulting map.</p>
		 * @return Ds\Map <p>The result of applying a <code>callback</code> to each value in the map.</p> <p><b>注意</b>:</p> <p>The keys and values of the current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-map.map.php
		 * @since PECL ds >= 1.0.0
		 */
		public function map(callable $callback): \Ds\Map {}

		/**
		 * Returns the result of adding all given associations
		 * <p>Returns the result of associating all keys of a given traversable object or <code>array</code> with their corresponding values, combined with the current instance.</p><p><b>注意</b>:</p><p>Values of the current instance will be overwritten by those provided where keys are equal.</p>
		 * @param mixed $values <p>A traversable object or an <code>array</code>.</p>
		 * @return Ds\Map <p>The result of associating all keys of a given traversable object or <code>array</code> with their corresponding values, combined with the current instance.</p> <p><b>注意</b>:</p> <p>The current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-map.merge.php
		 * @since PECL ds >= 1.0.0
		 */
		public function merge($values): \Ds\Map {}

		/**
		 * Returns a sequence containing all the pairs of the map
		 * <p>Returns a <b>Ds\Sequence</b> containing all the pairs of the map.</p>
		 * @return Ds\Sequence <p><b>Ds\Sequence</b> containing all the pairs of the map.</p>
		 * @link https://php.net/manual/ja/ds-map.pairs.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pairs(): \Ds\Sequence {}

		/**
		 * Associates a key with a value
		 * <p>Associates a <code>key</code> with a <code>value</code>, overwriting a previous association if one exists.</p><p><b>注意</b>:</p><p>Keys of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p><p><b>注意</b>:</p><p>You can also use array syntax to associate values by key, eg. <code>$map["key"] = $value</code>.</p><p>Be careful when using array syntax. Scalar keys will be coerced to integers by the engine. For example, <code>$map["1"]</code> will attempt to access <code>int(1)</code>, while <code>$map-&gt;get("1")</code> will correctly look up the string key.</p><p>See Arrays.</p>
		 * @param mixed $key <p>The key to associate the value with.</p>
		 * @param mixed $value <p>The value to be associated with the key.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.put.php
		 * @since PECL ds >= 1.0.0
		 */
		public function put($key, $value): void {}

		/**
		 * Associates all key-value pairs of a traversable object or array
		 * <p>Associates all key-value <code>pairs</code> of a traversable object or <code>array</code>.</p><p><b>注意</b>:</p><p>Keys of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p>
		 * @param mixed $pairs <p>traversable object or <code>array</code>.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.putall.php
		 * @since PECL ds >= 1.0.2
		 */
		public function putAll($pairs): void {}

		/**
		 * Reduces the map to a single value using a callback function
		 * <p>Reduces the map to a single value using a callback function.</p>
		 * @param callable $callback callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$key</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>    <code>carry</code>   <p>The return value of the previous callback, or <code>initial</code> if it's the first iteration.</p>   <code>key</code>   <p>The key of the current iteration.</p>   <code>value</code>   <p>The value of the current iteration.</p>
		 * @param mixed $initial <p>The initial value of the carry value. Can be <b><code>NULL</code></b>.</p>
		 * @return mixed <p>The return value of the final callback.</p>
		 * @link https://php.net/manual/ja/ds-map.reduce.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reduce(callable $callback, $initial = NULL) {}

		/**
		 * Removes and returns a value by key
		 * <p>Removes and returns a value by key, or return an optional default value if the key could not be found.</p><p><b>注意</b>:</p><p>Keys of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p><p><b>注意</b>:</p><p>You can also use array syntax to access values by key, eg. <code>$map["key"]</code>.</p><p>Be careful when using array syntax. Scalar keys will be coerced to integers by the engine. For example, <code>$map["1"]</code> will attempt to access <code>int(1)</code>, while <code>$map-&gt;get("1")</code> will correctly look up the string key.</p><p>See Arrays.</p>
		 * @param mixed $key <p>The key to remove.</p>
		 * @param mixed $default <p>The optional default value, returned if the key could not be found.</p>
		 * @return mixed <p>The value that was removed, or the <code>default</code> value if provided and the <code>key</code> could not be found in the map.</p>
		 * @link https://php.net/manual/ja/ds-map.remove.php
		 * @since PECL ds >= 1.0.0
		 */
		public function remove($key, $default = NULL) {}

		/**
		 * Reverses the map in-place
		 * <p>Reverses the map in-place.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.reverse.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reverse(): void {}

		/**
		 * Returns a reversed copy
		 * <p>Returns a reversed copy of the map.</p>
		 * @return Ds\Map <p>A reversed copy of the map.</p> <p><b>注意</b>:</p> <p>The current instance is not affected.</p>
		 * @link https://php.net/manual/ja/ds-map.reversed.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reversed(): \Ds\Map {}

		/**
		 * Returns the pair at a given positional index
		 * <p>Returns the pair at a given zero-based <code>position</code>.</p>
		 * @param int $position <p>The zero-based positional index to return.</p>
		 * @return Ds\Pair <p>Returns the <b>Ds\Pair</b> at the given <code>position</code>.</p>
		 * @link https://php.net/manual/ja/ds-map.skip.php
		 * @since PECL ds >= 1.0.0
		 */
		public function skip(int $position): \Ds\Pair {}

		/**
		 * Returns a subset of the map defined by a starting index and length
		 * <p>Returns a subset of the map defined by a starting <code>index</code> and <code>length</code>.</p>
		 * @param int $index <p>The index at which the range starts.</p> <p>If positive, the range will start at that index in the map. If negative, the range will start that far from the end.</p>
		 * @param int $length <p>If a length is given and is positive, the resulting map will have up to that many pairs in it. If a length is given and is negative, the range will stop that many pairs from the end. If the length results in an overflow, only pairs up to the end of the map will be included. If a length is not provided, the resulting map will contain all pairs between the index and the end of the map.</p>
		 * @return Ds\Map <p>A subset of the map defined by a starting index and length.</p>
		 * @link https://php.net/manual/ja/ds-map.slice.php
		 * @since PECL ds >= 1.0.0
		 */
		public function slice(int $index, int $length = NULL): \Ds\Map {}

		/**
		 * Sorts the map in-place by value
		 * <p>Sorts the map in-place by value, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-map.sort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sort(callable $comparator = NULL): void {}

		/**
		 * Returns a copy, sorted by value
		 * <p>Returns a copy, sorted by value using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Map <p>Returns a copy of the map, sorted by value.</p>
		 * @link https://php.net/manual/ja/ds-map.sorted.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sorted(callable $comparator = NULL): \Ds\Map {}

		/**
		 * Returns the sum of all values in the map
		 * <p>Returns the sum of all values in the map.</p><p><b>注意</b>:</p><p>Arrays and objects are considered equal to zero when calculating the sum.</p>
		 * @return number <p>The sum of all the values in the map as either a <code>float</code> or <code>int</code> depending on the values in the map.</p>
		 * @link https://php.net/manual/ja/ds-map.sum.php
		 * @since No version information available, might only be in Git
		 */
		public function sum() {}

		/**
		 * Converts the map to an array
		 * <p>Converts the map to an <code>array</code>.</p><p>Maps where non-scalar keys are can't be converted to an <code>array</code>.</p><p>An <code>array</code> will treat all numeric keys as integers, eg. <code>"1"</code> and <code>1</code> as keys in the map will only result in <code>1</code> being included in the array.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the map.</p>
		 * @link https://php.net/manual/ja/ds-map.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}

		/**
		 * Creates a new map using values from the current instance and another map
		 * <p>Creates a new map that contains the pairs of the current instance as well as the pairs of another <code>map</code>.</p><p><code>A ∪ B = {x: x ∈ A ∨ x ∈ B}</code></p><p><b>注意</b>:</p><p>Values of the current instance will be overwritten by those provided where keys are equal.</p>
		 * @param \Ds\Map $map <p>The other map, to combine with the current instance.</p>
		 * @return Ds\Map <p>A new map containing all the pairs of the current instance as well as another <code>map</code>.</p>
		 * @link https://php.net/manual/ja/ds-map.union.php
		 * @since PECL ds >= 1.0.0
		 */
		public function union(\Ds\Map $map): \Ds\Map {}

		/**
		 * Returns a sequence of the map's values
		 * <p>Returns a sequence containing all the values of the map, in the same order.</p>
		 * @return Ds\Sequence <p>A <b>Ds\Sequence</b> containing all the values of the map.</p>
		 * @link https://php.net/manual/ja/ds-map.values.php
		 * @since PECL ds >= 1.0.0
		 */
		public function values(): \Ds\Sequence {}

		/**
		 * Creates a new map using keys of either the current instance or of another map, but not of both
		 * <p>Creates a new map containing keys of the current instance as well as another <code>map</code>, but not of both.</p><p><code>A ⊖ B = {x : x ∈ (A \ B) ∪ (B \ A)}</code></p>
		 * @param \Ds\Map $map <p>The other map.</p>
		 * @return Ds\Map <p>A new map containing keys in the current instance as well as another <code>map</code>, but not in both.</p>
		 * @link https://php.net/manual/ja/ds-map.xor.php
		 * @since PECL ds >= 1.0.0
		 */
		public function xor(\Ds\Map $map): \Ds\Map {}
	}

	/**
	 * <p>A pair is used by <b>Ds\Map</b> to pair keys with values.</p>
	 * @link https://php.net/manual/ja/class.ds-pair.php
	 * @since No version information available, might only be in Git
	 */
	class Pair implements \JsonSerializable {

		/**
		 * Creates a new instance
		 * <p>Creates a new instance using a given <code>key</code> and <code>value</code>.</p>
		 * @param mixed $key <p>The key.</p>
		 * @param mixed $value <p>The value.</p>
		 * @return self
		 * @link https://php.net/manual/ja/ds-pair.construct.php
		 * @since PECL ds >= 1.0.0
		 */
		public function __construct($key = NULL, $value = NULL) {}

		/**
		 * Removes all values
		 * <p>Removes all values from the pair.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-pair.clear.php
		 * @since No version information available, might only be in Git
		 */
		public function clear(): void {}

		/**
		 * Returns a shallow copy of the pair
		 * <p>Returns a shallow copy of the pair.</p>
		 * @return Ds\Pair <p>Returns a shallow copy of the pair.</p>
		 * @link https://php.net/manual/ja/ds-pair.copy.php
		 * @since No version information available, might only be in Git
		 */
		public function copy(): \Ds\Pair {}

		/**
		 * Returns whether the pair is empty
		 * <p>Returns whether the pair is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the pair is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-pair.isempty.php
		 * @since No version information available, might only be in Git
		 */
		public function isEmpty(): bool {}

		/**
		 * Converts the pair to an array
		 * <p>Converts the pair to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the pair.</p>
		 * @link https://php.net/manual/ja/ds-pair.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}
	}

	/**
	 * <p>A PriorityQueue is very similar to a Queue. Values are pushed into the queue with an assigned priority, and the value with the highest priority will always be at the front of the queue.</p>
	 * <p>Implemented using a max heap.</p>
	 * <p><b>注意</b>:</p>
	 * <p>"First in, first out" ordering is preserved for values with the same priority.</p>
	 * <p><b>注意</b>:</p>
	 * <p>Iterating over a PriorityQueue is destructive, equivalent to successive pop operations until the queue is empty.</p>
	 * @link https://php.net/manual/ja/class.ds-priorityqueue.php
	 * @since No version information available, might only be in Git
	 */
	class PriorityQueue {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-priorityqueue.php
		 */
		const MIN_CAPACITY = 8;

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>   <p><b>注意</b>:</p> <p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the queue.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Returns a shallow copy of the queue
		 * <p>Returns a shallow copy of the queue.</p>
		 * @return Ds\PriorityQueue <p>Returns a shallow copy of the queue.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\PriorityQueue {}

		/**
		 * Returns whether the queue is empty
		 * <p>Returns whether the queue is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the queue is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Returns the value at the front of the queue
		 * <p>Returns the value at the front of the queue, but does not remove it.</p>
		 * @return mixed <p>The value at the front of the queue.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.peek.php
		 * @since PECL ds >= 1.0.0
		 */
		public function peek() {}

		/**
		 * Removes and returns the value with the highest priority
		 * <p>Removes and returns the value at the front of the queue, ie. the value with the highest priority.</p><p><b>注意</b>:</p><p>Values with equal priority fall back to FIFO (first in first out).</p>
		 * @return mixed <p>The removed value which was at the front of the queue.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop() {}

		/**
		 * Pushes values into the queue
		 * <p>Pushes a <code>value</code> with a given <code>priority</code> into the queue.</p>
		 * @param mixed $value <p>The value to push into the queue.</p>
		 * @param int $priority <p>The priority associated with the value.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($value, int $priority): void {}

		/**
		 * Converts the queue to an array
		 * <p>Converts the queue to an <code>array</code>.</p><p><b>注意</b>:</p><p>This method is not destructive.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the queue.</p>
		 * @link https://php.net/manual/ja/ds-priorityqueue.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}
	}

	/**
	 * <p>A Queue is a “first in, first out” or “FIFO” collection that only allows access to the value at the front of the queue and iterates in that order, destructively.</p>
	 * @link https://php.net/manual/ja/class.ds-queue.php
	 * @since No version information available, might only be in Git
	 */
	class Queue {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-queue.php
		 */
		const MIN_CAPACITY = 8;

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p><p><b>注意</b>:</p><p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>   <p><b>注意</b>:</p> <p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-queue.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-queue.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the queue.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-queue.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Returns a shallow copy of the queue
		 * <p>Returns a shallow copy of the queue.</p>
		 * @return Ds\Queue <p>Returns a shallow copy of the queue.</p>
		 * @link https://php.net/manual/ja/ds-queue.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Queue {}

		/**
		 * Returns whether the queue is empty
		 * <p>Returns whether the queue is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the queue is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-queue.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Returns the value at the front of the queue
		 * <p>Returns the value at the front of the queue, but does not remove it.</p>
		 * @return mixed <p>The value at the front of the queue.</p>
		 * @link https://php.net/manual/ja/ds-queue.peek.php
		 * @since PECL ds >= 1.0.0
		 */
		public function peek() {}

		/**
		 * Removes and returns the value at the front of the queue
		 * <p>Removes and returns the value at the front of the queue.</p>
		 * @return mixed <p>The removed value which was at the front of the queue.</p>
		 * @link https://php.net/manual/ja/ds-queue.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop() {}

		/**
		 * Pushes values into the queue
		 * <p>Pushes <code>values</code> into the queue.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-queue.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($_values = NULL): void {}

		/**
		 * Converts the queue to an array
		 * <p>Converts the queue to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p><p><b>注意</b>:</p><p>This method is not destructive.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the queue.</p>
		 * @link https://php.net/manual/ja/ds-queue.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}
	}

	/**
	 * <p>A Sequence describes the behaviour of values arranged in a single, linear dimension. Some languages refer to this as a "List". It’s similar to an array that uses incremental integer keys, with the exception of a few characteristics:</p>
	 * <p>Use cases:</p>
	 * @link https://php.net/manual/ja/class.ds-sequence.php
	 * @since No version information available, might only be in Git
	 */
	interface Sequence {

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void;

		/**
		 * Updates all values by applying a callback function to each value
		 * <p>Updates all values by applying a <code>callback</code> function to each value in the sequence.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the sequence.</p> <p>The callback should return what the value should be replaced by.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.apply.php
		 * @since PECL ds >= 1.0.0
		 */
		public function apply(callable $callback): void;

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-sequence.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int;

		/**
		 * Determines if the sequence contains given values
		 * <p>Determines if the sequence contains all values.</p>
		 * @param mixed $_values
		 * @return bool <p><b><code>FALSE</code></b> if any of the provided <code>values</code> are not in the sequence, <b><code>TRUE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-sequence.contains.php
		 * @since PECL ds >= 1.0.0
		 */
		public function contains($_values = NULL): bool;

		/**
		 * Creates a new sequence using a callable to determine which values to include
		 * <p>Creates a new sequence using a <code>callable</code> to determine which values to include.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : bool  <p>Optional <code>callable</code> which returns <b><code>TRUE</code></b> if the value should be included, <b><code>FALSE</code></b> otherwise.</p> <p>If a callback is not provided, only values which are <b><code>TRUE</code></b> (see converting to boolean) will be included.</p>
		 * @return Ds\Sequence <p>A new sequence containing all the values for which either the <code>callback</code> returned <b><code>TRUE</code></b>, or all values that convert to <b><code>TRUE</code></b> if a <code>callback</code> was not provided.</p>
		 * @link https://php.net/manual/ja/ds-sequence.filter.php
		 * @since PECL ds >= 1.0.0
		 */
		public function filter(callable $callback = NULL): \Ds\Sequence;

		/**
		 * Attempts to find a value's index
		 * <p>Returns the index of the <code>value</code>, or <b><code>FALSE</code></b> if not found.</p>
		 * @param mixed $value <p>The value to find.</p>
		 * @return mixed <p>The index of the value, or <b><code>FALSE</code></b> if not found.</p> <p><b>注意</b>:</p> <p>Values will be compared by value and by type.</p>
		 * @link https://php.net/manual/ja/ds-sequence.find.php
		 * @since PECL ds >= 1.0.0
		 */
		public function find($value);

		/**
		 * Returns the first value in the sequence
		 * <p>Returns the first value in the sequence.</p>
		 * @return mixed <p>The first value in the sequence.</p>
		 * @link https://php.net/manual/ja/ds-sequence.first.php
		 * @since PECL ds >= 1.0.0
		 */
		public function first();

		/**
		 * Returns the value at a given index
		 * <p>Returns the value at a given index.</p>
		 * @param int $index <p>The index to access, starting at 0.</p>
		 * @return mixed <p>The value at the requested index.</p>
		 * @link https://php.net/manual/ja/ds-sequence.get.php
		 * @since PECL ds >= 1.0.0
		 */
		public function get(int $index);

		/**
		 * Inserts values at a given index
		 * <p>Inserts values into the sequence at a given index.</p>
		 * @param int $index <p>The index at which to insert. <code>0 &lt;= index &lt;= count</code></p>  <p><b>注意</b>:</p> <p>You can insert at the index equal to the number of values.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.insert.php
		 * @since PECL ds >= 1.0.0
		 */
		public function insert(int $index, $_values = NULL): void;

		/**
		 * Joins all values together as a string
		 * <p>Joins all values together as a string using an optional separator between each value.</p>
		 * @param string $glue <p>An optional string to separate each value.</p>
		 * @return string <p>All values of the sequence joined together as a string.</p>
		 * @link https://php.net/manual/ja/ds-sequence.join.php
		 * @since PECL ds >= 1.0.0
		 */
		public function join(string $glue = NULL): string;

		/**
		 * Returns the last value
		 * <p>Returns the last value in the sequence.</p>
		 * @return mixed <p>The last value in the sequence.</p>
		 * @link https://php.net/manual/ja/ds-sequence.last.php
		 * @since PECL ds >= 1.0.0
		 */
		public function last();

		/**
		 * Returns the result of applying a callback to each value
		 * <p>Returns the result of applying a <code>callback</code> function to each value in the sequence.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the sequence.</p> <p>The callable should return what the new value will be in the new sequence.</p>
		 * @return Ds\Sequence <p>The result of applying a <code>callback</code> to each value in the sequence.</p> <p><b>注意</b>:</p> <p>The values of the current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-sequence.map.php
		 * @since PECL ds >= 1.0.0
		 */
		public function map(callable $callback): \Ds\Sequence;

		/**
		 * Returns the result of adding all given values to the sequence
		 * <p>Returns the result of adding all given values to the sequence.</p>
		 * @param mixed $values <p>A traversable object or an <code>array</code>.</p>
		 * @return Ds\Sequence <p>The result of adding all given values to the sequence, effectively the same as adding the values to a copy, then returning that copy.</p> <p><b>注意</b>:</p> <p>The current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-sequence.merge.php
		 * @since PECL ds >= 1.0.0
		 */
		public function merge($values): \Ds\Sequence;

		/**
		 * Removes and returns the last value
		 * <p>Removes and returns the last value.</p>
		 * @return mixed <p>The removed last value.</p>
		 * @link https://php.net/manual/ja/ds-sequence.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop();

		/**
		 * Adds values to the end of the sequence
		 * <p>Adds values to the end of the sequence.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($_values = NULL): void;

		/**
		 * Reduces the sequence to a single value using a callback function
		 * <p>Reduces the sequence to a single value using a callback function.</p>
		 * @param callable $callback callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>    <code>carry</code>   <p>The return value of the previous callback, or <code>initial</code> if it's the first iteration.</p>   <code>value</code>   <p>The value of the current iteration.</p>
		 * @param mixed $initial <p>The initial value of the carry value. Can be <b><code>NULL</code></b>.</p>
		 * @return mixed <p>The return value of the final callback.</p>
		 * @link https://php.net/manual/ja/ds-sequence.reduce.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reduce(callable $callback, $initial = NULL);

		/**
		 * Removes and returns a value by index
		 * <p>Removes and returns a value by index.</p>
		 * @param int $index <p>The index of the value to remove.</p>
		 * @return mixed <p>The value that was removed.</p>
		 * @link https://php.net/manual/ja/ds-sequence.remove.php
		 * @since PECL ds >= 1.0.0
		 */
		public function remove(int $index);

		/**
		 * Reverses the sequence in-place
		 * <p>Reverses the sequence in-place.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.reverse.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reverse(): void;

		/**
		 * Returns a reversed copy
		 * <p>Returns a reversed copy of the sequence.</p>
		 * @return Ds\Sequence <p>A reversed copy of the sequence.</p> <p><b>注意</b>:</p> <p>The current instance is not affected.</p>
		 * @link https://php.net/manual/ja/ds-sequence.reversed.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reversed(): \Ds\Sequence;

		/**
		 * Rotates the sequence by a given number of rotations
		 * <p>Rotates the sequence by a given number of rotations, which is equivalent to successively calling <code>$sequence-&gt;push($sequence-&gt;shift())</code> if the number of rotations is positive, or <code>$sequence-&gt;unshift($sequence-&gt;pop())</code> if negative.</p>
		 * @param int $rotations <p>The number of times the sequence should be rotated.</p>
		 * @return void <p>値を返しません。. The sequence of the current instance will be rotated.</p>
		 * @link https://php.net/manual/ja/ds-sequence.rotate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function rotate(int $rotations): void;

		/**
		 * Updates a value at a given index
		 * <p>Updates a value at a given index.</p>
		 * @param int $index <p>The index of the value to update.</p>
		 * @param mixed $value <p>The new value.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.set.php
		 * @since PECL ds >= 1.0.0
		 */
		public function set(int $index, $value): void;

		/**
		 * Removes and returns the first value
		 * <p>Removes and returns the first value.</p>
		 * @return mixed <p>The first value, which was removed.</p>
		 * @link https://php.net/manual/ja/ds-sequence.shift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function shift();

		/**
		 * Returns a sub-sequence of a given range
		 * <p>Creates a sub-sequence of a given range.</p>
		 * @param int $index <p>The index at which the sub-sequence starts.</p> <p>If positive, the sequence will start at that index in the sequence. If negative, the sequence will start that far from the end.</p>
		 * @param int $length <p>If a length is given and is positive, the resulting sequence will have up to that many values in it. If the length results in an overflow, only values up to the end of the sequence will be included. If a length is given and is negative, the sequence will stop that many values from the end. If a length is not provided, the resulting sequence will contain all values between the index and the end of the sequence.</p>
		 * @return Ds\Sequence <p>A sub-sequence of the given range.</p>
		 * @link https://php.net/manual/ja/ds-sequence.slice.php
		 * @since PECL ds >= 1.0.0
		 */
		public function slice(int $index, int $length = NULL): \Ds\Sequence;

		/**
		 * Sorts the sequence in-place
		 * <p>Sorts the sequence in-place, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.sort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sort(callable $comparator = NULL): void;

		/**
		 * Returns a sorted copy
		 * <p>Returns a sorted copy, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Sequence <p>Returns a sorted copy of the sequence.</p>
		 * @link https://php.net/manual/ja/ds-sequence.sorted.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sorted(callable $comparator = NULL): \Ds\Sequence;

		/**
		 * Returns the sum of all values in the sequence
		 * <p>Returns the sum of all values in the sequence.</p><p><b>注意</b>:</p><p>Arrays and objects are considered equal to zero when calculating the sum.</p>
		 * @return number <p>The sum of all the values in the sequence as either a <code>float</code> or <code>int</code> depending on the values in the sequence.</p>
		 * @link https://php.net/manual/ja/ds-sequence.sum.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sum();

		/**
		 * Adds values to the front of the sequence
		 * <p>Adds values to the front of the sequence, moving all the current values forward to make room for the new values.</p>
		 * @param mixed $values <p>The values to add to the front of the sequence.</p> <p><b>注意</b>:</p> <p>Multiple values will be added in the same order that they are passed.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-sequence.unshift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function unshift($values = NULL): void;
	}

	/**
	 * <p>A Set is a sequence of unique values. This implementation uses the same hash table as <b>Ds\Map</b>, where values are used as keys and the mapped value is ignored.</p>
	 * @link https://php.net/manual/ja/class.ds-set.php
	 * @since No version information available, might only be in Git
	 */
	class Set {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-set.php
		 */
		const MIN_CAPACITY = 16;

		/**
		 * Adds values to the set
		 * <p>Adds all given values to the set that haven't already been added.</p><p><b>注意</b>:</p><p>Values of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p><p>All comparisons are strict (type and value).</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.add.php
		 * @since PECL ds >= 1.0.0
		 */
		public function add($_values = NULL): void {}

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Allocates enough memory for a required capacity.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>   <p><b>注意</b>:</p> <p>Capacity will always be rounded up to the nearest power of 2.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-set.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the set.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Determines if the set contains all values
		 * <p>Determines if the set contains all values.</p><p><b>注意</b>:</p><p>Values of type <code>object</code> are supported. If an object implements <b>Ds\Hashable</b>, equality will be determined by the object's <code>equals</code> function. If an object does not implement <b>Ds\Hashable</b>, objects must be references to the same instance to be considered equal.</p><p>All comparisons are strict (type and value).</p>
		 * @param mixed $_values
		 * @return bool <p><b><code>FALSE</code></b> if any of the provided <code>values</code> are not in the set, <b><code>TRUE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-set.contains.php
		 * @since PECL ds >= 1.0.0
		 */
		public function contains($_values = NULL): bool {}

		/**
		 * Returns a shallow copy of the set
		 * <p>Returns a shallow copy of the set.</p>
		 * @return Ds\Set <p>Returns a shallow copy of the set.</p>
		 * @link https://php.net/manual/ja/ds-set.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Set {}

		/**
		 * Creates a new set using values that aren't in another set
		 * <p>Creates a new set using values that aren't in another set.</p><p><code>A \ B = {x ∈ A | x ∉ B}</code></p>
		 * @param \Ds\Set $set <p>Set containing the values to exclude.</p>
		 * @return Ds\Set <p>A new set containing all values that were not in the other <code>set</code>.</p>
		 * @link https://php.net/manual/ja/ds-set.diff.php
		 * @since PECL ds >= 1.0.0
		 */
		public function diff(\Ds\Set $set): \Ds\Set {}

		/**
		 * Creates a new set using a callable to determine which values to include
		 * <p>Creates a new set using a <code>callable</code> to determine which values to include.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : bool  <p>Optional <code>callable</code> which returns <b><code>TRUE</code></b> if the value should be included, <b><code>FALSE</code></b> otherwise.</p> <p>If a callback is not provided, only values which are <b><code>TRUE</code></b> (see converting to boolean) will be included.</p>
		 * @return Ds\Set <p>A new set containing all the values for which either the <code>callback</code> returned <b><code>TRUE</code></b>, or all values that convert to <b><code>TRUE</code></b> if a <code>callback</code> was not provided.</p>
		 * @link https://php.net/manual/ja/ds-set.filter.php
		 * @since PECL ds >= 1.0.0
		 */
		public function filter(callable $callback = NULL): \Ds\Set {}

		/**
		 * Returns the first value in the set
		 * <p>Returns the first value in the set.</p>
		 * @return mixed <p>The first value in the set.</p>
		 * @link https://php.net/manual/ja/ds-set.first.php
		 * @since PECL ds >= 1.0.0
		 */
		public function first() {}

		/**
		 * Returns the value at a given index
		 * <p>Returns the value at a given index.</p>
		 * @param int $index <p>The index to access, starting at 0.</p>
		 * @return mixed <p>The value at the requested index.</p>
		 * @link https://php.net/manual/ja/ds-set.get.php
		 * @since PECL ds >= 1.0.0
		 */
		public function get(int $index) {}

		/**
		 * Creates a new set by intersecting values with another set
		 * <p>Creates a new set using values common to both the current instance and another <code>set</code>. In other words, returns a copy of the current instance with all values removed that are not in the other <code>set</code>.</p><p><code>A ∩ B = {x : x ∈ A ∧ x ∈ B}</code></p>
		 * @param \Ds\Set $set <p>The other set.</p>
		 * @return Ds\Set <p>The intersection of the current instance and another <code>set</code>.</p>
		 * @link https://php.net/manual/ja/ds-set.intersect.php
		 * @since PECL ds >= 1.0.0
		 */
		public function intersect(\Ds\Set $set): \Ds\Set {}

		/**
		 * Returns whether the set is empty
		 * <p>Returns whether the set is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the set is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-set.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Joins all values together as a string
		 * <p>Joins all values together as a string using an optional separator between each value.</p>
		 * @param string $glue <p>An optional string to separate each value.</p>
		 * @return string <p>All values of the set joined together as a string.</p>
		 * @link https://php.net/manual/ja/ds-set.join.php
		 * @since PECL ds >= 1.0.0
		 */
		public function join(string $glue = NULL): string {}

		/**
		 * Returns the last value in the set
		 * <p>Returns the last value in the set.</p>
		 * @return void <p>The last value in the set.</p>
		 * @link https://php.net/manual/ja/ds-set.last.php
		 * @since PECL ds >= 1.0.0
		 */
		public function last(): void {}

		/**
		 * Returns the result of adding all given values to the set
		 * <p>Returns the result of adding all given values to the set.</p>
		 * @param mixed $values <p>A traversable object or an <code>array</code>.</p>
		 * @return Ds\Set <p>The result of adding all given values to the set, effectively the same as adding the values to a copy, then returning that copy.</p> <p><b>注意</b>:</p> <p>The current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-set.merge.php
		 * @since PECL ds >= 1.0.3
		 */
		public function merge($values): \Ds\Set {}

		/**
		 * Reduces the set to a single value using a callback function
		 * <p>Reduces the set to a single value using a callback function.</p>
		 * @param callable $callback callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>    <code>carry</code>   <p>The return value of the previous callback, or <code>initial</code> if it's the first iteration.</p>   <code>value</code>   <p>The value of the current iteration.</p>
		 * @param mixed $initial <p>The initial value of the carry value. Can be <b><code>NULL</code></b>.</p>
		 * @return mixed <p>The return value of the final callback.</p>
		 * @link https://php.net/manual/ja/ds-set.reduce.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reduce(callable $callback, $initial = NULL) {}

		/**
		 * Removes all given values from the set
		 * <p>Removes all given <code>values</code> from the set, ignoring any that are not in the set.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.remove.php
		 * @since PECL ds >= 1.0.0
		 */
		public function remove($_values = NULL): void {}

		/**
		 * Reverses the set in-place
		 * <p>Reverses the set in-place.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.reverse.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reverse(): void {}

		/**
		 * Returns a reversed copy
		 * <p>Returns a reversed copy of the set.</p>
		 * @return Ds\Set <p>A reversed copy of the set.</p> <p><b>注意</b>:</p> <p>The current instance is not affected.</p>
		 * @link https://php.net/manual/ja/ds-set.reversed.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reversed(): \Ds\Set {}

		/**
		 * Returns a sub-set of a given range
		 * <p>Creates a sub-set of a given range.</p>
		 * @param int $index <p>The index at which the sub-set starts.</p> <p>If positive, the set will start at that index in the set. If negative, the set will start that far from the end.</p>
		 * @param int $length <p>If a length is given and is positive, the resulting set will have up to that many values in it. If the length results in an overflow, only values up to the end of the set will be included. If a length is given and is negative, the set will stop that many values from the end. If a length is not provided, the resulting set will contain all values between the index and the end of the set.</p>
		 * @return Ds\Set <p>A sub-set of the given range.</p>
		 * @link https://php.net/manual/ja/ds-set.slice.php
		 * @since PECL ds >= 1.0.0
		 */
		public function slice(int $index, int $length = NULL): \Ds\Set {}

		/**
		 * Sorts the set in-place
		 * <p>Sorts the set in-place, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-set.sort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sort(callable $comparator = NULL): void {}

		/**
		 * Returns a sorted copy
		 * <p>Returns a sorted copy, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Set <p>Returns a sorted copy of the set.</p>
		 * @link https://php.net/manual/ja/ds-set.sorted.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sorted(callable $comparator = NULL): \Ds\Set {}

		/**
		 * Returns the sum of all values in the set
		 * <p>Returns the sum of all values in the set.</p><p><b>注意</b>:</p><p>Arrays and objects are considered equal to zero when calculating the sum.</p>
		 * @return number <p>The sum of all the values in the set as either a <code>float</code> or <code>int</code> depending on the values in the set.</p>
		 * @link https://php.net/manual/ja/ds-set.sum.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sum() {}

		/**
		 * Converts the set to an array
		 * <p>Converts the set to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the set.</p>
		 * @link https://php.net/manual/ja/ds-set.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}

		/**
		 * Creates a new set using values from the current instance and another set
		 * <p>Creates a new set that contains the values of the current instance as well as the values of another <code>set</code>.</p><p><code>A ∪ B = {x: x ∈ A ∨ x ∈ B}</code></p>
		 * @param \Ds\Set $set <p>The other set, to combine with the current instance.</p>
		 * @return Ds\Set <p>A new set containing all the values of the current instance as well as another <code>set</code>.</p>
		 * @link https://php.net/manual/ja/ds-set.union.php
		 * @since PECL ds >= 1.0.0
		 */
		public function union(\Ds\Set $set): \Ds\Set {}

		/**
		 * Creates a new set using values in either the current instance or in another set, but not in both
		 * <p>Creates a new set containing values in the current instance as well as another <code>set</code>, but not in both.</p><p><code>A ⊖ B = {x : x ∈ (A \ B) ∪ (B \ A)}</code></p>
		 * @param \Ds\Set $set <p>The other set.</p>
		 * @return Ds\Set <p>A new set containing values in the current instance as well as another <code>set</code>, but not in both.</p>
		 * @link https://php.net/manual/ja/ds-set.xor.php
		 * @since PECL ds >= 1.0.0
		 */
		public function xor(\Ds\Set $set): \Ds\Set {}
	}

	/**
	 * <p>A Stack is a “last in, first out” or “LIFO” collection that only allows access to the value at the top of the structure and iterates in that order, destructively.</p>
	 * <p>Uses a <b>Ds\Vector</b> internally.</p>
	 * @link https://php.net/manual/ja/class.ds-stack.php
	 * @since No version information available, might only be in Git
	 */
	class Stack {

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-stack.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-stack.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the stack.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-stack.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Returns a shallow copy of the stack
		 * <p>Returns a shallow copy of the stack.</p>
		 * @return Ds\Stack <p>Returns a shallow copy of the stack.</p>
		 * @link https://php.net/manual/ja/ds-stack.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Stack {}

		/**
		 * Returns whether the stack is empty
		 * <p>Returns whether the stack is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the stack is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-stack.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Returns the value at the top of the stack
		 * <p>Returns the value at the top of the stack, but does not remove it.</p>
		 * @return mixed <p>The value at the top of the stack.</p>
		 * @link https://php.net/manual/ja/ds-stack.peek.php
		 * @since PECL ds >= 1.0.0
		 */
		public function peek() {}

		/**
		 * Removes and returns the value at the top of the stack
		 * <p>Removes and returns the value at the top of the stack.</p>
		 * @return mixed <p>The removed value which was at the top of the stack.</p>
		 * @link https://php.net/manual/ja/ds-stack.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop() {}

		/**
		 * Pushes values onto the stack
		 * <p>Pushes <code>values</code> onto the stack.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-stack.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($_values = NULL): void {}

		/**
		 * Converts the stack to an array
		 * <p>Converts the stack to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the stack.</p>
		 * @link https://php.net/manual/ja/ds-stack.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}
	}

	/**
	 * <p>A Vector is a sequence of values in a contiguous buffer that grows and shrinks automatically. It’s the most efficient sequential structure because a value’s index is a direct mapping to its index in the buffer, and the growth factor isn't bound to a specific multiple or exponent.</p>
	 * @link https://php.net/manual/ja/class.ds-vector.php
	 * @since No version information available, might only be in Git
	 */
	class Vector {

		/**
		 * @var int
		 * @link https://php.net/manual/ja/class.ds-vector.php
		 */
		const MIN_CAPACITY = 10;

		/**
		 * Allocates enough memory for a required capacity
		 * <p>Ensures that enough memory is allocated for a required capacity. This removes the need to reallocate the internal as values are added.</p>
		 * @param int $capacity <p>The number of values for which capacity should be allocated.</p>  <p><b>注意</b>:</p> <p>Capacity will stay the same if this value is less than or equal to the current capacity.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.allocate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function allocate(int $capacity): void {}

		/**
		 * Updates all values by applying a callback function to each value
		 * <p>Updates all values by applying a <code>callback</code> function to each value in the vector.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the vector.</p> <p>The callback should return what the value should be replaced by.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.apply.php
		 * @since PECL ds >= 1.0.0
		 */
		public function apply(callable $callback): void {}

		/**
		 * Returns the current capacity
		 * <p>Returns the current capacity.</p>
		 * @return int <p>The current capacity.</p>
		 * @link https://php.net/manual/ja/ds-vector.capacity.php
		 * @since PECL ds >= 1.0.0
		 */
		public function capacity(): int {}

		/**
		 * Removes all values
		 * <p>Removes all values from the vector.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.clear.php
		 * @since PECL ds >= 1.0.0
		 */
		public function clear(): void {}

		/**
		 * Determines if the vector contains given values
		 * <p>Determines if the vector contains all values.</p>
		 * @param mixed $_values
		 * @return bool <p><b><code>FALSE</code></b> if any of the provided <code>values</code> are not in the vector, <b><code>TRUE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-vector.contains.php
		 * @since PECL ds >= 1.0.0
		 */
		public function contains($_values = NULL): bool {}

		/**
		 * Returns a shallow copy of the vector
		 * <p>Returns a shallow copy of the vector.</p>
		 * @return Ds\Vector <p>Returns a shallow copy of the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.copy.php
		 * @since PECL ds >= 1.0.0
		 */
		public function copy(): \Ds\Vector {}

		/**
		 * Creates a new vector using a callable to determine which values to include
		 * <p>Creates a new vector using a <code>callable</code> to determine which values to include.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : bool  <p>Optional <code>callable</code> which returns <b><code>TRUE</code></b> if the value should be included, <b><code>FALSE</code></b> otherwise.</p> <p>If a callback is not provided, only values which are <b><code>TRUE</code></b> (see converting to boolean) will be included.</p>
		 * @return Ds\Vector <p>A new vector containing all the values for which either the <code>callback</code> returned <b><code>TRUE</code></b>, or all values that convert to <b><code>TRUE</code></b> if a <code>callback</code> was not provided.</p>
		 * @link https://php.net/manual/ja/ds-vector.filter.php
		 * @since PECL ds >= 1.0.0
		 */
		public function filter(callable $callback = NULL): \Ds\Vector {}

		/**
		 * Attempts to find a value's index
		 * <p>Returns the index of the <code>value</code>, or <b><code>FALSE</code></b> if not found.</p>
		 * @param mixed $value <p>The value to find.</p>
		 * @return mixed <p>The index of the value, or <b><code>FALSE</code></b> if not found.</p> <p><b>注意</b>:</p> <p>Values will be compared by value and by type.</p>
		 * @link https://php.net/manual/ja/ds-vector.find.php
		 * @since PECL ds >= 1.0.0
		 */
		public function find($value) {}

		/**
		 * Returns the first value in the vector
		 * <p>Returns the first value in the vector.</p>
		 * @return mixed <p>The first value in the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.first.php
		 * @since PECL ds >= 1.0.0
		 */
		public function first() {}

		/**
		 * Returns the value at a given index
		 * <p>Returns the value at a given index.</p>
		 * @param int $index <p>The index to access, starting at 0.</p>
		 * @return mixed <p>The value at the requested index.</p>
		 * @link https://php.net/manual/ja/ds-vector.get.php
		 * @since PECL ds >= 1.0.0
		 */
		public function get(int $index) {}

		/**
		 * Inserts values at a given index
		 * <p>Inserts values into the vector at a given index.</p>
		 * @param int $index <p>The index at which to insert. <code>0 &lt;= index &lt;= count</code></p>  <p><b>注意</b>:</p> <p>You can insert at the index equal to the number of values.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.insert.php
		 * @since PECL ds >= 1.0.0
		 */
		public function insert(int $index, $_values = NULL): void {}

		/**
		 * Returns whether the vector is empty
		 * <p>Returns whether the vector is empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the vector is empty, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/ds-vector.isempty.php
		 * @since PECL ds >= 1.0.0
		 */
		public function isEmpty(): bool {}

		/**
		 * Joins all values together as a string
		 * <p>Joins all values together as a string using an optional separator between each value.</p>
		 * @param string $glue <p>An optional string to separate each value.</p>
		 * @return string <p>All values of the vector joined together as a string.</p>
		 * @link https://php.net/manual/ja/ds-vector.join.php
		 * @since PECL ds >= 1.0.0
		 */
		public function join(string $glue = NULL): string {}

		/**
		 * Returns the last value
		 * <p>Returns the last value in the vector.</p>
		 * @return mixed <p>The last value in the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.last.php
		 * @since PECL ds >= 1.0.0
		 */
		public function last() {}

		/**
		 * Returns the result of applying a callback to each value
		 * <p>Returns the result of applying a <code>callback</code> function to each value in the vector.</p>
		 * @param callable $callback <p></p> callback ( <code>mixed</code> <code>$value</code> ) : <code>mixed</code>  <p>A <code>callable</code> to apply to each value in the vector.</p> <p>The callable should return what the new value will be in the new vector.</p>
		 * @return Ds\Vector <p>The result of applying a <code>callback</code> to each value in the vector.</p> <p><b>注意</b>:</p> <p>The values of the current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-vector.map.php
		 * @since PECL ds >= 1.0.0
		 */
		public function map(callable $callback): \Ds\Vector {}

		/**
		 * Returns the result of adding all given values to the vector
		 * <p>Returns the result of adding all given values to the vector.</p>
		 * @param mixed $values <p>A traversable object or an <code>array</code>.</p>
		 * @return Ds\Vector <p>The result of adding all given values to the vector, effectively the same as adding the values to a copy, then returning that copy.</p> <p><b>注意</b>:</p> <p>The current instance won't be affected.</p>
		 * @link https://php.net/manual/ja/ds-vector.merge.php
		 * @since PECL ds >= 1.0.0
		 */
		public function merge($values): \Ds\Vector {}

		/**
		 * Removes and returns the last value
		 * <p>Removes and returns the last value.</p>
		 * @return mixed <p>The removed last value.</p>
		 * @link https://php.net/manual/ja/ds-vector.pop.php
		 * @since PECL ds >= 1.0.0
		 */
		public function pop() {}

		/**
		 * Adds values to the end of the vector
		 * <p>Adds values to the end of the vector.</p>
		 * @param mixed $_values
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.push.php
		 * @since PECL ds >= 1.0.0
		 */
		public function push($_values = NULL): void {}

		/**
		 * Reduces the vector to a single value using a callback function
		 * <p>Reduces the vector to a single value using a callback function.</p>
		 * @param callable $callback callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$value</code> ) : <code>mixed</code>    <code>carry</code>   <p>The return value of the previous callback, or <code>initial</code> if it's the first iteration.</p>   <code>value</code>   <p>The value of the current iteration.</p>
		 * @param mixed $initial <p>The initial value of the carry value. Can be <b><code>NULL</code></b>.</p>
		 * @return mixed <p>The return value of the final callback.</p>
		 * @link https://php.net/manual/ja/ds-vector.reduce.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reduce(callable $callback, $initial = NULL) {}

		/**
		 * Removes and returns a value by index
		 * <p>Removes and returns a value by index.</p>
		 * @param int $index <p>The index of the value to remove.</p>
		 * @return mixed <p>The value that was removed.</p>
		 * @link https://php.net/manual/ja/ds-vector.remove.php
		 * @since PECL ds >= 1.0.0
		 */
		public function remove(int $index) {}

		/**
		 * Reverses the vector in-place
		 * <p>Reverses the vector in-place.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.reverse.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reverse(): void {}

		/**
		 * Returns a reversed copy
		 * <p>Returns a reversed copy of the vector.</p>
		 * @return Ds\Vector <p>A reversed copy of the vector.</p> <p><b>注意</b>:</p> <p>The current instance is not affected.</p>
		 * @link https://php.net/manual/ja/ds-vector.reversed.php
		 * @since PECL ds >= 1.0.0
		 */
		public function reversed(): \Ds\Vector {}

		/**
		 * Rotates the vector by a given number of rotations
		 * <p>Rotates the vector by a given number of rotations, which is equivalent to successively calling <code>$vector-&gt;push($vector-&gt;shift())</code> if the number of rotations is positive, or <code>$vector-&gt;unshift($vector-&gt;pop())</code> if negative.</p>
		 * @param int $rotations <p>The number of times the vector should be rotated.</p>
		 * @return void <p>値を返しません。. The vector of the current instance will be rotated.</p>
		 * @link https://php.net/manual/ja/ds-vector.rotate.php
		 * @since PECL ds >= 1.0.0
		 */
		public function rotate(int $rotations): void {}

		/**
		 * Updates a value at a given index
		 * <p>Updates a value at a given index.</p>
		 * @param int $index <p>The index of the value to update.</p>
		 * @param mixed $value <p>The new value.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.set.php
		 * @since PECL ds >= 1.0.0
		 */
		public function set(int $index, $value): void {}

		/**
		 * Removes and returns the first value
		 * <p>Removes and returns the first value.</p>
		 * @return mixed <p>The first value, which was removed.</p>
		 * @link https://php.net/manual/ja/ds-vector.shift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function shift() {}

		/**
		 * Returns a sub-vector of a given range
		 * <p>Creates a sub-vector of a given range.</p>
		 * @param int $index <p>The index at which the sub-vector starts.</p> <p>If positive, the vector will start at that index in the vector. If negative, the vector will start that far from the end.</p>
		 * @param int $length <p>If a length is given and is positive, the resulting vector will have up to that many values in it. If the length results in an overflow, only values up to the end of the vector will be included. If a length is given and is negative, the vector will stop that many values from the end. If a length is not provided, the resulting vector will contain all values between the index and the end of the vector.</p>
		 * @return Ds\Vector <p>A sub-vector of the given range.</p>
		 * @link https://php.net/manual/ja/ds-vector.slice.php
		 * @since PECL ds >= 1.0.0
		 */
		public function slice(int $index, int $length = NULL): \Ds\Vector {}

		/**
		 * Sorts the vector in-place
		 * <p>Sorts the vector in-place, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.sort.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sort(callable $comparator = NULL): void {}

		/**
		 * Returns a sorted copy
		 * <p>Returns a sorted copy, using an optional <code>comparator</code> function.</p>
		 * @param callable $comparator <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> ) : int   <b>警告</b> <p>Returning <i>non-integer</i> values from the comparison function, such as <code>float</code>, will result in an internal cast to <code>integer</code> of the callback's return value. So values such as 0.99 and 0.1 will both be cast to an integer value of 0, which will compare such values as equal.</p>
		 * @return Ds\Vector <p>Returns a sorted copy of the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.sorted.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sorted(callable $comparator = NULL): \Ds\Vector {}

		/**
		 * Returns the sum of all values in the vector
		 * <p>Returns the sum of all values in the vector.</p><p><b>注意</b>:</p><p>Arrays and objects are considered equal to zero when calculating the sum.</p>
		 * @return number <p>The sum of all the values in the vector as either a <code>float</code> or <code>int</code> depending on the values in the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.sum.php
		 * @since PECL ds >= 1.0.0
		 */
		public function sum() {}

		/**
		 * Converts the vector to an array
		 * <p>Converts the vector to an <code>array</code>.</p><p><b>注意</b>:</p><p>Casting to an <code>array</code> is not supported yet.</p>
		 * @return array <p>An <code>array</code> containing all the values in the same order as the vector.</p>
		 * @link https://php.net/manual/ja/ds-vector.toarray.php
		 * @since PECL ds >= 1.0.0
		 */
		public function toArray(): array {}

		/**
		 * Adds values to the front of the vector
		 * <p>Adds values to the front of the vector, moving all the current values forward to make room for the new values.</p>
		 * @param mixed $values <p>The values to add to the front of the vector.</p> <p><b>注意</b>:</p> <p>Multiple values will be added in the same order that they are passed.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/ds-vector.unshift.php
		 * @since PECL ds >= 1.0.0
		 */
		public function unshift($values = NULL): void {}
	}

}
