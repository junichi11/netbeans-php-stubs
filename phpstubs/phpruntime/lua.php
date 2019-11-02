<?php



namespace {

	/**
	 * @link https://php.net/manual/ja/class.lua.php
	 * @since PECL lua >=0.9.0
	 */
	class Lua {

		/**
		 * @var string
		 * @link https://php.net/manual/ja/class.lua.php
		 */
		const LUA_VERSION = 'Lua 5.1.4';

		/**
		 * Lua 関数を呼び出す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param callable $lua_func <p>lua での関数名</p>
		 * @param array $args <p>Lua 関数に渡される引数</p>
		 * @param int $use_self <p><i>self</i> を使うか否か</p>
		 * @return mixed <p>呼び出した関数の結果を返します。引数が間違っている場合は <b><code>NULL</code></b>、 それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.call.php
		 * @since PECL lua >=0.9.0
		 */
		public function __call(callable $lua_func, array $args = NULL, int $use_self = 0) {}

		/**
		 * Lua コンストラクタ
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $lua_script_file
		 * @return self
		 * @link https://php.net/manual/ja/lua.construct.php
		 * @since PECL lua >=0.9.0
		 */
		public function __construct(string $lua_script_file = NULL) {}

		/**
		 * PHP 変数を Lua にアサイン
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name
		 * @param string $value
		 * @return mixed <p>$this、あるいは失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.assign.php
		 * @since PECL lua >=0.9.0
		 */
		public function assign(string $name, string $value) {}

		/**
		 * Lua 関数を呼び出す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param callable $lua_func <p>lua での関数名</p>
		 * @param array $args <p>Lua 関数に渡される引数</p>
		 * @param int $use_self <p><i>self</i> を使うか否か</p>
		 * @return mixed <p>呼び出した関数の結果を返します。引数が間違っている場合は <b><code>NULL</code></b>、 それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.call.php
		 * @since PECL lua >=0.9.0
		 */
		public function call(callable $lua_func, array $args = NULL, int $use_self = 0) {}

		/**
		 * 文字列を Lua コードとして評価
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $statements
		 * @return mixed <p>コードを評価した結果を返します。引数が間違っている場合は <b><code>NULL</code></b>、 それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.eval.php
		 * @since PECL lua >=0.9.0
		 */
		public function eval(string $statements) {}

		/**
		 * getversion 用途
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>Lua::LUA_VERSION を返します。</p>
		 * @link https://php.net/manual/ja/lua.getversion.php
		 * @since PECL lua >=0.9.0
		 */
		public function getVersion(): string {}

		/**
		 * Lua スクリプトファイルをパース
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $file
		 * @return mixed <p>インクルードしたコードの結果を返します。引数が間違っている場合は <b><code>NULL</code></b>、 それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.include.php
		 * @since PECL lua >=0.9.0
		 */
		public function include(string $file) {}

		/**
		 * PHP 関数を Lua に登録
		 * <p>PHP 関数を Lua に "$name" という関数として登録します。</p>
		 * @param string $name
		 * @param callable $function <p>有効な PHP 関数コールバック</p>
		 * @return mixed <p>$this を返します。引数が間違っている場合は <b><code>NULL</code></b>、 それ以外のエラーの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/lua.registercallback.php
		 * @since No version information available, might only be in Git
		 */
		public function registerCallback(string $name, callable $function) {}
	}

	/**
	 * <p>LuaClosure は、Lua 関数呼び出しから返されることがありえる LUA_TFUNCTION に対するラッパー・クラスです。</p>
	 * @link https://php.net/manual/ja/class.luaclosure.php
	 * @since PECL lua >=0.9.0
	 */
	class LuaClosure {

		/**
		 * luaclosure を起動
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $_
		 * @return void
		 * @link https://php.net/manual/ja/luaclosure.invoke.php
		 * @since PECL lua >=0.9.0
		 */
		public function __invoke($_ = NULL): void {}
	}

}
