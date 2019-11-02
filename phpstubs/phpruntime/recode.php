<?php



namespace {

	/**
	 * recode_string() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>recode_string()</code>.</p>
	 * @param string $request <p>変換指令の型。</p>
	 * @param string $string <p>変換する文字列。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.recode.php
	 * @since PHP 4, PHP 5, PHP 7 < 7.4.0
	 */
	function recode(string $request, string $string): string {}

	/**
	 * コード変換指令に基づきファイルからファイルにコード変換する
	 * <p>コード変換指令 <code>request</code> に基づきファイルハンドル <code>input</code> が指すファイルをファイルハンドル <code>output</code> が指すファイルにコード変換します。</p>
	 * @param string $request <p>変換指令の型。</p>
	 * @param resource $input <p>入力として使用する ローカルファイルハンドルリソース。</p>
	 * @param resource $output <p>出力として使用する ローカルファイルハンドルリソース。</p>
	 * @return bool <p>応じることができない場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.recode-file.php
	 * @see fopen()
	 * @since PHP 4, PHP 5, PHP 7 < 7.4.0
	 */
	function recode_file(string $request, $input, $output): bool {}

	/**
	 * コード変換指令に基づき文字列のコードを変換する
	 * <p>コード変換指令 <code>request</code> に基づき文字列 <code>string</code> のコードを変換します。</p>
	 * @param string $request <p>変換指令の型。</p>
	 * @param string $string <p>変換する文字列。</p>
	 * @return string <p>変換後の文字列、または変換指令を実行できない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.recode-string.php
	 * @since PHP 4, PHP 5, PHP 7 < 7.4.0
	 */
	function recode_string(string $request, string $string): string {}

}
