<?php



namespace {

	/**
	 * 指定した ID の WDDX パケットに変数を追加する
	 * <p>渡された変数をシリアライズし、 指定したパケットに結果を追加します。</p>
	 * @param resource $packet_id <p><code>wddx_packet_start()</code> が返す WDDX パケット。</p>
	 * @param mixed $var_name <p>変数名を表す文字列、あるいは配列。 配列の中身は、変数名を表す文字列あるいは別の配列などとなります。</p>
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wddx-add-vars.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_add_vars($packet_id, $var_name, $_ = NULL): bool {}

	/**
	 * WDDX パケットをデシリアライズする
	 * <p>WDDX <code>packet</code> をデシリアライズします。</p>
	 * @param string $packet <p>WDDX パケット。文字列あるいはストリームで指定します。</p>
	 * @return mixed <p>デシリアライズした値を返します。値は文字列か数値、あるいは配列のいずれかとなります。 構造体は連想配列に変換されることに注意しましょう。</p>
	 * @link https://php.net/manual/ja/function.wddx-deserialize.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_deserialize(string $packet) {}

	/**
	 * 指定した ID の WDDX パケットを終了する
	 * <p>指定した WDDX パケットを終了し、 パケットを含む文字列を返します。</p>
	 * @param resource $packet_id <p><code>wddx_packet_start()</code> が返す WDDX パケット。</p>
	 * @return string <p>WDDX パケットを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.wddx-packet-end.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_packet_end($packet_id): string {}

	/**
	 * 新規の WDDX パケットを内部の構造体を用いて開始する
	 * <p>変数を順に追加していくための新しい WDDX パケットを開始します。 この関数は、パケットの内部に自動的に構造体の定義を作成し、 そこに変数を保持します。</p>
	 * @param string $comment <p>オプションのコメント文字列。</p>
	 * @return resource <p>後で他の関数で使用するためのパケット ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wddx-packet-start.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_packet_start(string $comment = NULL) {}

	/**
	 * 単一の値を WDDX パケットにシリアライズする
	 * <p>指定した単一の値をもとにして WDDX パケットを作成します。</p>
	 * @param mixed $var <p>シリアライズする値。</p>
	 * @param string $comment <p>オプションのコメント文字列。これはヘッダ内で用いられます。</p>
	 * @return string <p>WDDX パケット、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wddx-serialize-value.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_serialize_value($var, string $comment = NULL): string {}

	/**
	 * 変数を WDDX パケットにシリアライズする
	 * <p>指定された変数をシリアライズしたものを含む構造体を用いて WDDX パケットを作成します。</p>
	 * @param mixed $var_name <p>変数名を表す文字列、あるいは配列。 配列の中身は、変数名を表す文字列あるいは別の配列などとなります。</p>
	 * @param mixed $_
	 * @return string <p>WDDX パケット、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wddx-serialize-vars.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_serialize_vars($var_name, $_ = NULL): string {}

}
