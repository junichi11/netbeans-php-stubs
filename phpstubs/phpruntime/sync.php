<?php



namespace {

	/**
	 * <p>A cross-platform, native implementation of named and unnamed event objects. Both automatic and manual event objects are supported.</p>
	 * <p>An event object waits, without polling, for the object to be fired/set. One instance waits on the event object while another instance fires/sets the event. Event objects are useful wherever a long-running process would otherwise poll a resource (e.g. checking to see if uploaded data needs to be processed).</p>
	 * @link https://php.net/manual/ja/class.syncevent.php
	 * @since PECL sync >= 1.0.0
	 */
	class SyncEvent {

		/**
		 * Constructs a new SyncEvent object
		 * <p>Constructs a named or unnamed event object.</p>
		 * @param string $name <p>The name of the event if this is a named event object.</p>  <p><b>注意</b>:</p> <p>If the name already exists, it must be able to be opened by the current user that the process is running as or an exception will be thrown with a meaningless error message.</p>
		 * @param bool $manual <p>Specifies whether or not the event object must be reset manually.</p>  <p><b>注意</b>:</p> <p>Manual reset event objects allow all waiting processes through until the object is reset.</p>
		 * @param bool $prefire <p>Specifies whether or not to prefire (signal) the event object.</p>  <p><b>注意</b>:</p> <p>Only has impact if the calling process/thread is the first to create the object.</p>
		 * @return self <p>The new SyncEvent object. An exception is thrown if the event object cannot be created or opened.</p>
		 * @link https://php.net/manual/ja/syncevent.construct.php
		 * @since PECL sync >= 1.0.0
		 */
		public function __construct(string $name = NULL, bool $manual = FALSE, bool $prefire = FALSE) {}

		/**
		 * Fires/sets the event
		 * <p>Fires/sets a SyncEvent object. Lets multiple threads through that are waiting if the event object was created with a manual value of TRUE.</p>
		 * @return bool <p>A boolean of TRUE if the event was fired, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncevent.fire.php
		 * @since PECL sync >= 1.0.0
		 */
		public function fire(): bool {}

		/**
		 * Resets a manual event
		 * <p>Resets a SyncEvent object that has been fired/set. Only valid for manual event objects.</p>
		 * @return bool <p>A boolean value of TRUE if the object was successfully reset, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncevent.reset.php
		 * @since PECL sync >= 1.0.0
		 */
		public function reset(): bool {}

		/**
		 * Waits for the event to be fired/set
		 * <p>Waits for the SyncEvent object to be fired.</p>
		 * @param int $wait <p>The number of milliseconds to wait for the event to be fired. A value of -1 is infinite.</p>
		 * @return bool <p>A boolean of TRUE if the event was fired, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncevent.wait.php
		 * @since PECL sync >= 1.0.0
		 */
		public function wait(int $wait = -1): bool {}
	}

	/**
	 * <p>A cross-platform, native implementation of named and unnamed countable mutex objects.</p>
	 * <p>A mutex is a mutual exclusion object that restricts access to a shared resource (e.g. a file) to a single instance. Countable mutexes acquire the mutex a single time and internally track the number of times the mutex is locked. The mutex is unlocked as soon as it goes out of scope or is unlocked the same number of times that it was locked.</p>
	 * @link https://php.net/manual/ja/class.syncmutex.php
	 * @since PECL sync >= 1.0.0
	 */
	class SyncMutex {

		/**
		 * Constructs a new SyncMutex object
		 * <p>Constructs a named or unnamed countable mutex.</p>
		 * @param string $name <p>The name of the mutex if this is a named mutex object.</p>  <p><b>注意</b>:</p> <p>If the name already exists, it must be able to be opened by the current user that the process is running as or an exception will be thrown with a meaningless error message.</p>
		 * @return self <p>The new SyncMutex object. An exception is thrown if the mutex cannot be created or opened.</p>
		 * @link https://php.net/manual/ja/syncmutex.construct.php
		 * @since PECL sync >= 1.0.0
		 */
		public function __construct(string $name = NULL) {}

		/**
		 * Waits for an exclusive lock
		 * <p>Obtains an exclusive lock on a SyncMutex object. If the lock is already acquired, then this increments an internal counter.</p>
		 * @param int $wait <p>The number of milliseconds to wait for the exclusive lock. A value of -1 is infinite.</p>
		 * @return bool <p>A boolean of TRUE if the lock was obtained, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncmutex.lock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function lock(int $wait = -1): bool {}

		/**
		 * Unlocks the mutex
		 * <p>Decreases the internal counter of a SyncMutex object. When the internal counter reaches zero, the actual lock on the object is released.</p>
		 * @param bool $all <p>Specifies whether or not to set the internal counter to zero and therefore release the lock.</p>
		 * @return bool <p>A boolean of TRUE if the unlock operation was successful, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncmutex.unlock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function unlock(bool $all = FALSE): bool {}
	}

	/**
	 * <p>A cross-platform, native implementation of named and unnamed reader-writer objects.</p>
	 * <p>A reader-writer object allows many readers or one writer to access a resource. This is an efficient solution for managing resources where access will primarily be read-only but exclusive write access is occasionally necessary.</p>
	 * @link https://php.net/manual/ja/class.syncreaderwriter.php
	 * @since PECL sync >= 1.0.0
	 */
	class SyncReaderWriter {

		/**
		 * Constructs a new SyncReaderWriter object
		 * <p>Constructs a named or unnamed reader-writer object.</p>
		 * @param string $name <p>The name of the reader-writer if this is a named reader-writer object.</p>  <p><b>注意</b>:</p> <p>If the name already exists, it must be able to be opened by the current user that the process is running as or an exception will be thrown with a meaningless error message.</p>
		 * @param bool $autounlock <p>Specifies whether or not to automatically unlock the reader-writer at the conclusion of the PHP script.</p>  <b>警告</b> <p>If an object is: A named reader-writer with an autounlock of FALSE, the object is locked for either reading or writing, and the PHP script concludes before the object is unlocked, then the underlying objects will end up in an inconsistent state.</p>
		 * @return self <p>The new SyncReaderWriter object. An exception is thrown if the reader-writer cannot be created or opened.</p>
		 * @link https://php.net/manual/ja/syncreaderwriter.construct.php
		 * @since PECL sync >= 1.0.0
		 */
		public function __construct(string $name = NULL, bool $autounlock = TRUE) {}

		/**
		 * Waits for a read lock
		 * <p>Obtains a read lock on a SyncReaderWriter object.</p>
		 * @param int $wait <p>The number of milliseconds to wait for a lock. A value of -1 is infinite.</p>
		 * @return bool <p>A boolean of TRUE if the lock was obtained, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncreaderwriter.readlock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function readlock(int $wait = -1): bool {}

		/**
		 * Releases a read lock
		 * <p>Releases a read lock on a SyncReaderWriter object.</p>
		 * @return bool <p>A boolean of TRUE if the unlock operation was successful, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncreaderwriter.readunlock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function readunlock(): bool {}

		/**
		 * Waits for an exclusive write lock
		 * <p>Obtains an exclusive write lock on a SyncReaderWriter object.</p>
		 * @param int $wait <p>The number of milliseconds to wait for a lock. A value of -1 is infinite.</p>
		 * @return bool <p>A boolean of TRUE if the lock was obtained, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncreaderwriter.writelock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function writelock(int $wait = -1): bool {}

		/**
		 * Releases a write lock
		 * <p>Releases a write lock on a SyncReaderWriter object.</p>
		 * @return bool <p>A boolean of TRUE if the unlock operation was successful, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncreaderwriter.writeunlock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function writeunlock(): bool {}
	}

	/**
	 * <p>A cross-platform, native implementation of named and unnamed semaphore objects.</p>
	 * <p>A semaphore restricts access to a limited resource to a limited number of instances. Semaphores differ from mutexes in that they can allow more than one instance to access a resource at one time while a mutex only allows one instance at a time.</p>
	 * @link https://php.net/manual/ja/class.syncsemaphore.php
	 * @since PECL sync >= 1.0.0
	 */
	class SyncSemaphore {

		/**
		 * Constructs a new SyncSemaphore object
		 * <p>Constructs a named or unnamed semaphore.</p>
		 * @param string $name <p>The name of the semaphore if this is a named semaphore object.</p>  <p><b>注意</b>:</p> <p>If the name already exists, it must be able to be opened by the current user that the process is running as or an exception will be thrown with a meaningless error message.</p>
		 * @param int $initialval <p>The initial value of the semaphore. This is the number of locks that may be obtained.</p>
		 * @param bool $autounlock <p>Specifies whether or not to automatically unlock the semaphore at the conclusion of the PHP script.</p>  <b>警告</b> <p>If an object is: A named semaphore with an autounlock of FALSE, the object is locked, and the PHP script concludes before the object is unlocked, then the underlying semaphore will end up in an inconsistent state.</p>
		 * @return self <p>The new SyncSemaphore object. An exception is thrown if the semaphore cannot be created or opened.</p>
		 * @link https://php.net/manual/ja/syncsemaphore.construct.php
		 * @since PECL sync >= 1.0.0
		 */
		public function __construct(string $name = NULL, int $initialval = 1, bool $autounlock = TRUE) {}

		/**
		 * Decreases the count of the semaphore or waits
		 * <p>Decreases the count of a SyncSemaphore object or waits until the semaphore becomes non-zero.</p>
		 * @param int $wait <p>The number of milliseconds to wait for the semaphore. A value of -1 is infinite.</p>
		 * @return bool <p>A boolean of TRUE if the lock operation was successful, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncsemaphore.lock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function lock(int $wait = -1): bool {}

		/**
		 * Increases the count of the semaphore
		 * <p>Increases the count of a SyncSemaphore object.</p>
		 * @param int $prevcount <p>Returns the previous count of the semaphore.</p>
		 * @return bool <p>A boolean of TRUE if the unlock operation was successful, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncsemaphore.unlock.php
		 * @since PECL sync >= 1.0.0
		 */
		public function unlock(int &$prevcount = NULL): bool {}
	}

	/**
	 * <p>A cross-platform, native, consistent implementation of named shared memory objects.</p>
	 * <p>Shared memory lets two separate processes communicate without the need for complex pipes or sockets. There are several integer-based shared memory implementations for PHP. Named shared memory is an alternative.</p>
	 * <p>Synchronization objects (e.g. SyncMutex) are still required to protect most uses of shared memory.</p>
	 * @link https://php.net/manual/ja/class.syncsharedmemory.php
	 * @since PECL sync >= 1.1.0
	 */
	class SyncSharedMemory {

		/**
		 * Constructs a new SyncSharedMemory object
		 * <p>Constructs a named shared memory object.</p>
		 * @param string $name <p>The name of the shared memory object.</p>  <p><b>注意</b>:</p> <p>If the name already exists, it must be able to be opened by the current user that the process is running as or an exception will be thrown with a meaningless error message.</p>
		 * @param int $size <p>The size, in bytes, of shared memory to reserve.</p>  <p><b>注意</b>:</p> <p>The amount of memory cannot be resized later. Request sufficient storage up front.</p>
		 * @return self <p>The new SyncSharedMemory object. An exception is thrown if the shared memory object cannot be created or opened.</p>
		 * @link https://php.net/manual/ja/syncsharedmemory.construct.php
		 * @since PECL sync >= 1.1.0
		 */
		public function __construct(string $name, int $size) {}

		/**
		 * Check to see if the object is the first instance system-wide of named shared memory
		 * <p>Retrieves the system-wide first instance status of a SyncSharedMemory object.</p>
		 * @return bool <p>A boolean of TRUE if the object is the first instance system-wide, FALSE otherwise.</p>
		 * @link https://php.net/manual/ja/syncsharedmemory.first.php
		 * @since PECL sync >= 1.1.0
		 */
		public function first(): bool {}

		/**
		 * Copy data from named shared memory
		 * <p>Copies data from named shared memory.</p>
		 * @param int $start <p>The start/offset, in bytes, to begin reading.</p>  <p><b>注意</b>:</p> <p>If the value is negative, the starting position will begin at the specified number of bytes from the end of the shared memory segment.</p>
		 * @param int $length <p>The number of bytes to read.</p>  <p><b>注意</b>:</p> <p>If unspecified, reading will stop at the end of the shared memory segment.</p> <p>If the value is negative, reading will stop the specified number of bytes from the end of the shared memory segment.</p>
		 * @return string <p>A string containing the data read from shared memory.</p>
		 * @link https://php.net/manual/ja/syncsharedmemory.read.php
		 * @since PECL sync >= 1.1.0
		 */
		public function read(int $start = 0, int $length = NULL) {}

		/**
		 * Returns the size of the named shared memory
		 * <p>Retrieves the shared memory size of a SyncSharedMemory object.</p>
		 * @return bool <p>An integer containing the size of the shared memory. This will be the same size that was passed to the constructor.</p>
		 * @link https://php.net/manual/ja/syncsharedmemory.size.php
		 * @since PECL sync >= 1.1.0
		 */
		public function size(): bool {}

		/**
		 * Copy data to named shared memory
		 * <p>Copies data to named shared memory.</p>
		 * @param string $string <p>The data to write to shared memoy.</p>  <p><b>注意</b>:</p> <p>If the size of the data exceeds the size of the shared memory, the number of bytes written returned will be less than the length of the input.</p>
		 * @param int $start <p>The start/offset, in bytes, to begin writing.</p>  <p><b>注意</b>:</p> <p>If the value is negative, the starting position will begin at the specified number of bytes from the end of the shared memory segment.</p>
		 * @return int <p>An integer containing the number of bytes written to shared memory.</p>
		 * @link https://php.net/manual/ja/syncsharedmemory.write.php
		 * @since PECL sync >= 1.1.0
		 */
		public function write(string $string = NULL, int $start = 0) {}
	}

}
