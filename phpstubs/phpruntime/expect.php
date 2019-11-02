<?php



namespace {

	/**
	 * プロセスの出力がパターンに一致する・指定した時間が経過する・ あるいは EOF に達するのいずれかにあてはまるまで待ち続ける
	 * <p>プロセスの出力がパターンに一致する・指定した時間が経過する・ あるいは EOF に達するのいずれかにあてはまるまで待ち続けます。</p><p><code>match</code> を指定すると、検索結果がそこに保存されます。 一致した文字列が <code>match[0]</code> に保存され、 元のパターンの中の (括弧で囲まれた) 部分に一致する文字列が <code>match[1]</code>、<code>match[2]</code>、 と順に、最大 <code>match[9]</code> まで (libexpect の制限です) 保存されます。</p>
	 * @param resource $expect <p>事前に <code>expect_popen()</code> でオープンした Expect ストリーム。</p>
	 * @param array $cases <p>expect case の配列。個々の expect case は数値添字の配列で、 以下のような形式となります。</p> <b>Expect Case の配列</b>   添字 値の型 説明 必須かどうか デフォルト値     0 string ストリームからの出力との比較対象となるパターン。 yes     1 mixed パターンに一致した場合にこの関数が返す値。 yes     2 integer  パターンの形式。 <b><code>EXP_GLOB</code></b>、 <b><code>EXP_EXACT</code></b> あるいは <b><code>EXP_REGEXP</code></b> のいずれかひとつです。  no <b><code>EXP_GLOB</code></b>
	 * @param array $match
	 * @return int <p>一致したパターンに関連付けられた値を返します。</p><p>この関数の実行に失敗した場合は、 <b><code>EXP_EOF</code></b>、 <b><code>EXP_TIMEOUT</code></b> あるいは <b><code>EXP_FULLBUFFER</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.expect-expectl.php
	 * @see expect_popen()
	 * @since PECL expect >= 0.1.0
	 */
	function expect_expectl($expect, array $cases, array &$match = NULL): int {}

	/**
	 * Bourne シェル経由でコマンドを実行し、プロセスへの PTY ストリームをオープンする
	 * <p>Bourne シェル経由でコマンドを実行し、プロセスへの PTY ストリームを オープンします。</p>
	 * @param string $command <p>実行するコマンド。</p>
	 * @return resource <p>プロセスの標準入力・標準出力・標準エラー出力への PTY ストリームを返します。</p><p>失敗した場合は、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.expect-popen.php
	 * @see popen()
	 * @since PECL expect >= 0.1.0
	 */
	function expect_popen(string $command) {}

	/**
	 * EOF に到達した際に <code>expect_expectl()</code> が返す値です。
	 */
	define('EXP_EOF', null);

	/**
	 * パターンが、単なる文字列であることを示します。
	 */
	define('EXP_EXACT', null);

	/**
	 * 一致するパターンがなかった際に <code>expect_expectl()</code> が返す値です。
	 */
	define('EXP_FULLBUFFER', null);

	/**
	 * パターンが、glob 形式の文字列パターンであることを示します。
	 */
	define('EXP_GLOB', null);

	/**
	 * パターンが、正規表現形式の文字列パターンであることを示します。
	 */
	define('EXP_REGEXP', null);

	/**
	 * expect.timeout で指定した秒数を こえた際に <code>expect_expectl()</code> が返す値です。
	 */
	define('EXP_TIMEOUT', null);

}
