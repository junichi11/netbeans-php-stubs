<?php



namespace {

	/**
	 * MQSeries MQBACK
	 * <p><b>mqseries_back()</b> (MQBACK) は、キューマネージャに対して、 直近の同期ポイント以降に get あるいは put されたすべてのメッセージを戻すことを指示します。 作業ユニットの一部として put されたメッセージは削除されます。 作業ユニットの一部として取得したメッセージはキューに戻されます。</p><p><b>mqseries_back()</b> は、 <code>mqseries_begin()</code> と組み合わせた場合にのみ動作します。 また、mqclient インターフェイスを介さずに 直接キューマネージャに接続した場合にのみ動作します。</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-back.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_begin()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_back($hconn, &$compCode, &$reason): void {}

	/**
	 * MQseries MQBEGIN
	 * <p><b>mqseries_begin()</b> (MQBEGIN) をコールすると、作業ユニットを開始します。 これはキューマネージャが扱うものですが、外部のリソースマネージャを使用することもあります。</p><p><b>mqseries_begin()</b> は作業ユニットを開始します。作業ユニットを終了させるには <code>mqseries_back()</code> あるいは <code>mqseries_cmit()</code> を使用します。</p>
	 * @param resource $hconn
	 * @param array $beginOptions
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-begin.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_back(), mqseries_cmit()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_begin($hconn, array $beginOptions, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCLOSE
	 * <p><b>mqseries_close()</b> (MQCLOSE) をコールするとオブジェクトへのアクセスを破棄します。これは <code>mqseries_open()</code> (MQOPEN) コールの逆の意味です。</p>
	 * @param resource $hconn
	 * @param resource $hobj
	 * @param int $options
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-close.php
	 * @see mqseries_open(), mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_close($hconn, $hobj, int $options, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCMIT
	 * <p><b>mqseries_cmit()</b> (MQCMIT) は、キューマネージャに対して、 アプリケーションが同期ポイントに達したことと 直近の同期ポイント以降に get あるいは put されたすべてのメッセージを確定させることを指示します。 作業ユニットの一部として put されたメッセージは他のアプリケーションでも使用できるようになります。 作業ユニットの一部として取得したメッセージは削除されます。</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-cmit.php
	 * @see mqseries_begin(), mqseries_back(), mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_cmit($hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCONN
	 * <p>The <b>mqseries_conn()</b> (MQCONN) をコールすると、アプリケーションプログラムをキューマネージャに接続します。 これによって取得した接続ハンドルを、 アプリケーション側でそれ以降のメッセージキューコールの際に使用します。</p>
	 * @param string $qManagerName <p>キューマネージャ名。</p> <p>アプリケーションが接続したいキューマネージャの名前。</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-conn.php
	 * @see mqseries_disc()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_conn(string $qManagerName, &$hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCONNX
	 * <p>The <b>mqseries_connx()</b> (MQCONNX) call connects an application program to a queue manager. It provides a queue manager connection handle, which is used by the application on subsequent MQ calls.</p><p>The <b>mqseries_connx()</b> call is like the <code>mqseries_conn()</code> (MQCONN) call, except that MQCONNX allows options to be specified to control the way that the call works.</p>
	 * @param string $qManagerName <p>Name of queue manager.</p> <p>Name of the queue manager the application wishes to connect.</p>
	 * @param array $connOptions
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-connx.php
	 * @see mqseries_disc()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_connx(string $qManagerName, array &$connOptions, &$hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQDISC
	 * <p><b>mqseries_disc()</b> (MQDISC) をコールすると、キューマネージャとアプリケーションプログラムとの間の接続を切断します。 <code>mqseries_conn()</code> (MQCONN) や <code>mqseries_connx()</code> (MQCONNX) の逆の意味です。</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-disc.php
	 * @see mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_disc($hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQGET
	 * <p>The <b>mqseries_get()</b> (MQGET) call retrieves a message from a local queue that has been opened using the <code>mqseries_open()</code> (MQOPEN) call</p>
	 * @param resource $hConn <p>Connection handle.</p> <p>This handle represents the connection to the queue manager.</p>
	 * @param resource $hObj <p>Object handle.</p> <p>This handle represents the object to be used.</p>
	 * @param array $md <p>Message descriptor (MQMD).</p>
	 * @param array $gmo <p>Get message options (MQGMO).</p>
	 * @param int $bufferLength <p>Expected length of the result buffer</p>
	 * @param string $msg <p>Buffer holding the message that was retrieved from the object.</p>
	 * @param int $data_length <p>Actual buffer length</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-get.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_put()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_get($hConn, $hObj, array &$md, array &$gmo, int &$bufferLength, string &$msg, int &$data_length, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQINQ
	 * <p><b>mqseries_inq()</b> (MQINQ) は、整数の配列と文字列を返します。 これはオブジェクトの属性を表します。</p>
	 * @param resource $hconn
	 * @param resource $hobj
	 * @param int $selectorCount <p>セレクタの数。</p>
	 * @param array $selectors <p>属性セレクタの配列。</p>
	 * @param int $intAttrCount
	 * @param resource $intAttr <p>整数属性の配列。</p>
	 * @param int $charAttrLength <p>文字属性バッファの長さ。</p>
	 * @param resource $charAttr <p>文字属性。</p>
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-inq.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_inq($hconn, $hobj, int $selectorCount, array $selectors, int $intAttrCount, &$intAttr, int $charAttrLength, &$charAttr, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQOPEN
	 * <p><b>mqseries_open()</b> (MQOPEN) は、オブジェクトへのアクセスを確立します。</p>
	 * @param resource $hconn
	 * @param array $objDesc <p>オブジェクト記述子 (MQOD)。</p>
	 * @param int $option
	 * @param resource $hobj
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-open.php
	 * @see mqseries_close()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_open($hconn, array &$objDesc, int $option, &$hobj, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQPUT
	 * <p>The <b>mqseries_put()</b> (MQPUT) は、メッセージをキューあるいは配送リストにおきます。 キューあるいは配送リストを事前にオープンしておく必要があります。</p>
	 * @param resource $hConn <p>接続ハンドル。</p> <p>このハンドルは、キューマネージャへの接続を表します。</p>
	 * @param resource $hObj <p>オブジェクトハンドル。</p> <p>このハンドルは、使用するオブジェクトを表します。</p>
	 * @param array $md <p>メッセージ記述子 (MQMD)。</p>
	 * @param array $pmo <p>Put メッセージのオプション (MQPMO)。</p>
	 * @param string $message <p>実際にキューに置くメッセージ。</p>
	 * @param resource $compCode <p>完了コード。</p>
	 * @param resource $reason <p>compCode の原因を表すコード。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-put.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_get()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_put($hConn, $hObj, array &$md, array &$pmo, string $message, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQPUT1
	 * <p>The <b>mqseries_put1()</b> (MQPUT1) call puts one message on a queue. The queue need not be open.</p><p>You can use both the <code>mqseries_put()</code> and <b>mqseries_put1()</b> calls to put messages on a queue; which call to use depends on the circumstances. Use the <code>mqseries_put()</code> (MQPUT) call to place multiple messages on the same queue. Use the <b>mqseries_put1()</b> (MQPUT1) call to put only one message on a queue. This call encapsulates the MQOPEN, MQPUT, and MQCLOSE calls into a single call, minimizing the number of calls that must be issued.</p>
	 * @param resource $hconn
	 * @param resource $objDesc <p>Object descriptor. (MQOD)</p> <p>This is a structure which identifies the queue to which the message is added.</p>
	 * @param resource $msgDesc <p>Message descriptor (MQMD).</p>
	 * @param resource $pmo <p>Put message options (MQPMO).</p>
	 * @param string $buffer
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-put1.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_get()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_put1($hconn, &$objDesc, &$msgDesc, &$pmo, string $buffer, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQSET
	 * <p>The <b>mqseries_set()</b> (MQSET) call is used to change the attributes of an object represented by a handle. The object must be a queue.</p>
	 * @param resource $hConn <p>Connection handle.</p> <p>This handle represents the connection to the queue manager.</p>
	 * @param resource $hObj <p>Object handle.</p> <p>This handle represents the object to be used.</p>
	 * @param int $selectorCount <p>Count of selectors.</p>
	 * @param array $selectors <p>Array of attribute selectors.</p>
	 * @param int $intAttrCount <p>Count of integer attributes.</p>
	 * @param array $intAttrs <p>Array of integer attributes.</p>
	 * @param int $charAttrLength <p>Length of character attributes buffer.</p>
	 * @param array $charAttrs <p>Character attributes.</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mqseries-set.php
	 * @see mqseries_inq()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_set($hConn, $hObj, int $selectorCount, array $selectors, int $intAttrCount, array $intAttrs, int $charAttrLength, array $charAttrs, &$compCode, &$reason): void {}

	/**
	 * 結果コード (MQRC) に対応するエラーメッセージを返す
	 * <p><b>mqseries_strerror()</b> は、結果コードに対応するメッセージを返します。</p>
	 * @param int $reason <p>compCode の原因を表すコード。</p>
	 * @return string <p>原因コードのメッセージを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.mqseries-strerror.php
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_strerror(int $reason): string {}

	/**
	 * MQCC_FAILED
	 */
	define('MQSERIES_MQCC_FAILED', null);

	/**
	 * MQCC_OK
	 */
	define('MQSERIES_MQCC_OK', null);

	/**
	 * MQCC_UNKNOWN
	 */
	define('MQSERIES_MQCC_UNKNOWN', null);

	/**
	 * MQCC_WARNING
	 */
	define('MQSERIES_MQCC_WARNING', null);

}
