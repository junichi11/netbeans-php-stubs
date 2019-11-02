<?php



namespace {

	/**
	 * 文字列が汚染されているかどうかを調べる
	 * <p>文字列が汚染されているかどうかを調べます。</p>
	 * @param string $string
	 * @return bool <p>文字列が汚染されている場合に TRUE、それ以外の場合に FALSE を返します。</p>
	 * @link https://php.net/manual/ja/function.is-tainted.php
	 * @since PECL taint >=0.1.0
	 */
	function is_tainted(string $string): bool {}

	/**
	 * 文字列を汚染させる
	 * <p>文字列を汚染させます。この関数は、テスト用としてのみ使うものです。</p>
	 * @param string $string
	 * @param string $_
	 * @return bool <p>変換に成功したときに TURE を返します。 taint 拡張モジュールが有効になっていない場合は常に TRUE を返します。</p>
	 * @link https://php.net/manual/ja/function.taint.php
	 * @since PECL taint >=0.1.0
	 */
	function taint(string &$string, string $_ = NULL): bool {}

	/**
	 * 文字列の汚染を除去する
	 * <p>文字列の汚染を除去します。</p>
	 * @param string $string
	 * @param string $_
	 * @return bool
	 * @link https://php.net/manual/ja/function.untaint.php
	 * @since PECL taint >=0.1.0
	 */
	function untaint(string &$string, string $_ = NULL): bool {}

}
