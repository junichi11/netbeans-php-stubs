<?php



namespace {

	/**
	 * LZF 圧縮を行う
	 * <p><b>lzf_compress()</b> は、指定された <code>arg</code> を LZF 符号化方式で圧縮します。</p>
	 * @param string $data <p>圧縮するデータ。</p>
	 * @return string <p>圧縮されたデータを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.lzf-compress.php
	 * @see lzf_decompress()
	 * @since PECL lzf >= 0.1.0
	 */
	function lzf_compress(string $data): string {}

	/**
	 * LZF 圧縮を伸長する
	 * <p><b>lzf_decompress()</b> は、lzf で符号化された文字列を含む <code>data</code> を伸長します。</p>
	 * @param string $data <p>圧縮されたデータ。</p>
	 * @return string <p>伸長したデータを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.lzf-decompress.php
	 * @see lzf_compress()
	 * @since PECL lzf >= 0.1.0
	 */
	function lzf_decompress(string $data): string {}

	/**
	 * LZF 拡張モジュールの最適化指定を取得する
	 * <p>LZF 拡張モジュールが圧縮時に使用した最適化指定を取得します。</p>
	 * @return int <p>LZF が速度に最適化されている場合に 1、圧縮率に最適化されている場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.lzf-optimized-for.php
	 * @since PECL lzf >= 1.0.0
	 */
	function lzf_optimized_for(): int {}

}
