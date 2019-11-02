<?php



namespace {

	/**
	 * EZMLM で必要なハッシュ値を計算する
	 * <p><b>ezmlm_hash()</b> は、EZMLM メイリングリストを MySQL データベースで管理する際に必要なハッシュ値を計算します。</p>
	 * @param string $addr <p>ハッシュ値を計算する email アドレス。</p>
	 * @return int <p><code>addr</code> のハッシュ値を返します。</p>
	 * @link https://php.net/manual/ja/function.ezmlm-hash.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ezmlm_hash(string $addr): int {}

	/**
	 * メールを送信する
	 * <p>メールを送信します。</p>
	 * @param string $to <p>メールの受信者。</p> <p>» RFC 2822 を満たす書式でなければ なりません。例えば以下のようなものです。</p><ul> <li>user@example.com</li> <li>user@example.com, anotheruser@example.com</li> <li>User &lt;user@example.com&gt;</li> <li>User &lt;user@example.com&gt;, Another User &lt;anotheruser@example.com&gt;</li> </ul>
	 * @param string $subject <p>送信するメールの表題。</p>  <b>警告</b> <p>表題は » RFC 2047 を満たすものでなければなりません。</p>
	 * @param string $message <p>送信するメッセージ。</p> <p>改行コードは CRLF (\r\n) となります。各行の長さは 70 文字を超えては いけません。</p>  <b>警告</b> <p>（Windows のみ）PHP が SMTP サーバーと直接通信をする際、ピリオドから 始まる行は無視されます。これを防ぐには、行頭のピリオドを ピリオド 2 つに置き換えてください。</p>  <code> &lt;&#63;php<br>$text = str_replace("\n.", "\n..", $text);<br>&#63;&gt;  </code>
	 * @param string $additional_headers
	 * @param string $additional_parameters
	 * @return bool <p>メール送信が受け入れられた場合に <b><code>TRUE</code></b> 、それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p>メールの配送が受け入れられたかどうかが基準であることに注意しましょう。 メールが実際にあて先に届いたかどうかでは「ありません」。</p>
	 * @link https://php.net/manual/ja/function.mail.php
	 * @see imap_mail()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mail(string $to, string $subject, string $message, string $additional_headers = NULL, string $additional_parameters = NULL): bool {}

}
