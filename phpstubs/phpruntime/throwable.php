<?php



/**
 * <p><b>Throwable</b> は、PHP 7 の <i>throw</i> 文でスロー可能なあらゆるオブジェクトが実装する基底インターフェイスです。 Error や Exception も、これを実装しています。</p>
 * <p><b>注意</b>:</p>
 * <p>PHP のクラスが <b>Throwable</b> インターフェイスを直接実装することはできません。 そのかわりに、Exception を継承する必要があります。</p>
 * @link http://php.net/manual/ja/class.throwable.php
 * @since PHP 7
 */
interface Throwable {

	/**
	 * スローされたオブジェクトの文字列表現を取得する
	 * @return string <p>スローされたオブジェクトの文字列表現を返します。</p>
	 * @link http://php.net/manual/ja/throwable.tostring.php
	 * @since PHP 7
	 */
	public function __toString(): string;

	/**
	 * 例外コードを取得する
	 * <p>スローされたオブジェクトのエラーコードを返します。</p>
	 * @return int <p>例外コードを返します。 Exception の場合は <code>integer</code> ですが、 その派生クラスでは別の型かもしれません (たとえば PDOException の場合は <code>string</code> です)。</p>
	 * @link http://php.net/manual/ja/throwable.getcode.php
	 * @since PHP 7
	 */
	public function getCode(): int;

	/**
	 * 例外が作られたファイル名を取得する
	 * <p>例外が作られたファイル名を取得します。</p>
	 * @return string <p>例外が作られたファイル名を返します。</p>
	 * @link http://php.net/manual/ja/throwable.getfile.php
	 * @since PHP 7
	 */
	public function getFile(): string;

	/**
	 * オブジェクトのインスタンスが作られた行番号を取得する
	 * <p>スローされたオブジェクトのインスタンスが作られた行番号を返します。</p>
	 * @return int <p>スローされたオブジェクトのインスタンスが作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/throwable.getline.php
	 * @since PHP 7
	 */
	public function getLine(): int;

	/**
	 * メッセージを取得する
	 * <p>スローされたオブジェクトに関連づけられたメッセージを返します。</p>
	 * @return string <p>スローされたオブジェクトに関連づけられたメッセージを返します。</p>
	 * @link http://php.net/manual/ja/throwable.getmessage.php
	 * @since PHP 7
	 */
	public function getMessage(): string;

	/**
	 * ひとつ前の Throwable を返す
	 * <p>ひとつ前の Throwable (たとえば <code>Exception::__construct()</code> の第三パラメータで指定したもの) を返します。</p>
	 * @return Throwable <p>ひとつ前の Throwable が存在すればそれを返します。 存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/throwable.getprevious.php
	 * @since PHP 7
	 */
	public function getPrevious(): \Throwable;

	/**
	 * スタックトレースを取得する
	 * <p>スタックトレースの配列を返します。</p>
	 * @return array <p>スタックトレースの配列を返します。その書式は <code>debug_backtrace()</code> と同じです。</p>
	 * @link http://php.net/manual/ja/throwable.gettrace.php
	 * @since PHP 7
	 */
	public function getTrace(): array;

	/**
	 * スタックトレースを文字列として取得する
	 * @return string <p>スタックトレースを文字列として返します。</p>
	 * @link http://php.net/manual/ja/throwable.gettraceasstring.php
	 * @since PHP 7
	 */
	public function getTraceAsString(): string;
}

