<?php



/**
 * <p><b><code>CURLOPT_POSTFIELDS</code></b> でファイルのアップロードをするには、 <b>CURLFile</b> を使わなければいけません。</p>
 * @link http://php.net/manual/ja/class.curlfile.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
class CURLFile {

	/**
	 * @var mixed <p>アップロードするファイルの名前。</p>
	 * @link http://php.net/manual/ja/class.curlfile.php#curlfile.props.name
	 */
	public $name;

	/**
	 * @var mixed <p>ファイルの MIME タイプ (デフォルトは <i>application/octet-stream</i>)。</p>
	 * @link http://php.net/manual/ja/class.curlfile.php#curlfile.props.mime
	 */
	public $mime;

	/**
	 * @var mixed <p>アップロードするデータの中のファイルの名前 (デフォルトは name プロパティ)。</p>
	 * @link http://php.net/manual/ja/class.curlfile.php#curlfile.props.postname
	 */
	public $postname;

	/**
	 * CURLFile オブジェクトを作る
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>CURLFile オブジェクトを作ります。これは、<b><code>CURLOPT_POSTFIELDS</code></b> でファイルをアップロードするときに使います。</p>
	 * @param string $filename <p>アップロードするファイルへのパス。</p>
	 * @param string $mimetype <p>ファイルの Mimetype。</p>
	 * @param string $postname <p>アップロードデータの中で使うファイルの名前。</p>
	 * @return self <p>CURLFile オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/curlfile.construct.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function __construct(string $filename, string $mimetype = NULL, string $postname = NULL) {}

	/**
	 * アンシリアライズ用ハンドラ
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/curlfile.wakeup.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function __wakeup(): void {}

	/**
	 * ファイル名を取得する
	 * @return string <p>ファイル名を返します。</p>
	 * @link http://php.net/manual/ja/curlfile.getfilename.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getFilename(): string {}

	/**
	 * MIME タイプを取得する
	 * @return string <p>MIME タイプを返します。</p>
	 * @link http://php.net/manual/ja/curlfile.getmimetype.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getMimeType(): string {}

	/**
	 * POST 用のファイル名を取得する
	 * @return string <p>POST 用のファイル名を返します。</p>
	 * @link http://php.net/manual/ja/curlfile.getpostfilename.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getPostFilename(): string {}

	/**
	 * MIME タイプを設定する
	 * @param string $mime <p>POST データで用いる MIME タイプ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/curlfile.setmimetype.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function setMimeType(string $mime): void {}

	/**
	 * POST 用のファイル名を設定する
	 * @param string $postname <p>POST データで用いるファイル名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/curlfile.setpostfilename.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function setPostFilename(string $postname): void {}
}

/**
 * cURL セッションを閉じる
 * <p>cURL セッションを閉じ、全てのリソースを開放します。 cURL ハンドル <code>ch</code> も削除されます。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.curl-close.php
 * @see curl_init(), curl_multi_close()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function curl_close($ch): void {}

/**
 * cURL ハンドルを、その設定も含めてコピーする
 * <p>cURL ハンドルをコピーし、同じ設定を保持します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return resource <p>新しい cURL ハンドルを返します。</p>
 * @link http://php.net/manual/ja/function.curl-copy-handle.php
 * @since PHP 5, PHP 7
 */
function curl_copy_handle($ch) {}

/**
 * 直近のエラー番号を返す
 * <p>直近の cURL 処理に関するエラー番号を返します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return int <p>エラー番号を返します。エラーが発生しない場合、 <i>0</i> (ゼロ) を返します。</p>
 * @link http://php.net/manual/ja/function.curl-errno.php
 * @see curl_error()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function curl_errno($ch): int {}

/**
 * 現在のセッションに関する直近のエラー文字列を返す
 * <p>直近の cURL 操作に関するエラーメッセージをクリアテキストで返します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return string <p>エラーメッセージ、あるいはエラーが発生しなかった場合は <i>''</i> (空文字) を返します。</p>
 * @link http://php.net/manual/ja/function.curl-error.php
 * @see curl_errno()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function curl_error($ch): string {}

/**
 * 指定した文字列を URL エンコードする
 * <p>この関数は、指定した文字列を » RFC 3986 に従って URL エンコードします。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param string $str <p>エンコードする文字列。</p>
 * @return string <p>エスケープした文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-escape.php
 * @see curl_unescape(), urlencode(), rawurlencode()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_escape($ch, string $str): string {}

/**
 * cURL セッションを実行する
 * <p>指定した cURL セッションを実行します。</p><p>この関数は、cURL セッションを初期化し、 オプションを全て設定した後にコールする必要があります。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 しかし、オプション <b><code>CURLOPT_RETURNTRANSFER</code></b> が設定されていると、 成功した場合に取得結果、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.curl-exec.php
 * @see curl_multi_exec()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function curl_exec($ch) {}

/**
 * CURLFile オブジェクトを作る
 * <p>オブジェクト指向型</p><p>手続き型</p><p>CURLFile オブジェクトを作ります。これは、<b><code>CURLOPT_POSTFIELDS</code></b> でファイルをアップロードするときに使います。</p>
 * @param string $filename <p>アップロードするファイルへのパス。</p>
 * @param string $mimetype <p>ファイルの Mimetype。</p>
 * @param string $postname <p>アップロードデータの中で使うファイルの名前。</p>
 * @return CURLFile <p>CURLFile オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/curlfile.construct.php
 * @see curl_setopt()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_file_create(string $filename, string $mimetype = NULL, string $postname = NULL): \CURLFile {}

/**
 * 指定した伝送に関する情報を得る
 * <p>直近の転送に関する情報を取得します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param int $opt <p>これは、以下のいずれかの定数となります。</p><ul> <li>  <b><code>CURLINFO_EFFECTIVE_URL</code></b> - 直近の有効な URL  </li> <li>  <b><code>CURLINFO_HTTP_CODE</code></b> - 最後に受け取った HTTP コード  </li> <li>  <b><code>CURLINFO_FILETIME</code></b> - ドキュメントを取得するのにかかった時間。 <b><code>CURLOPT_FILETIME</code></b> が有効な状態で用いる。 取得できなかった場合は -1  </li> <li>  <b><code>CURLINFO_TOTAL_TIME</code></b> - 直近の伝送にかかった秒数  </li> <li>  <b><code>CURLINFO_NAMELOOKUP_TIME</code></b> - 名前解決が完了するまでにかかった秒数  </li> <li>  <b><code>CURLINFO_CONNECT_TIME</code></b> - 接続を確立するまでにかかった秒数  </li> <li>  <b><code>CURLINFO_PRETRANSFER_TIME</code></b> - 開始からファイル伝送がはじまるまでにかかった秒数  </li> <li>  <b><code>CURLINFO_STARTTRANSFER_TIME</code></b> - 最初のバイトの伝送がはじまるまでの秒数  </li> <li>  <b><code>CURLINFO_REDIRECT_COUNT</code></b> - リダイレクト処理の回数 (<b><code>CURLOPT_FOLLOWLOCATION</code></b> オプションが有効な場合)  </li> <li>  <b><code>CURLINFO_REDIRECT_TIME</code></b> - 伝送が始まるまでのリダイレクト処理の秒数 (<b><code>CURLOPT_FOLLOWLOCATION</code></b> オプションが有効な場合)  </li> <li>  <b><code>CURLINFO_REDIRECT_URL</code></b> - <b><code>CURLOPT_FOLLOWLOCATION</code></b> オプションが無効な場合: 直近のトランザクションで見つかったリダイレクト先 URL。これを、次に手動でリクエストしなければいけません。 <b><code>CURLOPT_FOLLOWLOCATION</code></b> オプションが有効な場合: これは空になります。 この場合のリダイレクト先 URL は、<b><code>CURLINFO_EFFECTIVE_URL</code></b> となります。  </li> <li>  <b><code>CURLINFO_PRIMARY_IP</code></b> - 直近の接続の IP アドレス  </li> <li>  <b><code>CURLINFO_PRIMARY_PORT</code></b> - 直近の接続の接続先ポート  </li> <li>  <b><code>CURLINFO_LOCAL_IP</code></b> - 直近の接続の接続元 IP アドレス  </li> <li>  <b><code>CURLINFO_LOCAL_PORT</code></b> - 直近の接続の接続元ポート  </li> <li>  <b><code>CURLINFO_SIZE_UPLOAD</code></b> - アップロードされたバイト数  </li> <li>  <b><code>CURLINFO_SIZE_DOWNLOAD</code></b> - ダウンロードされたバイト数  </li> <li>  <b><code>CURLINFO_SPEED_DOWNLOAD</code></b> - 平均のダウンロード速度  </li> <li>  <b><code>CURLINFO_SPEED_UPLOAD</code></b> - 平均のアップロード速度  </li> <li>  <b><code>CURLINFO_HEADER_SIZE</code></b> - 受信したヘッダのサイズ  </li> <li>  <b><code>CURLINFO_HEADER_OUT</code></b> - 送信したリクエスト文字列。 これを動作させるには、<code>curl_setopt()</code> をコールする際に <b><code>CURLINFO_HEADER_OUT</code></b> オプションを使うようにしておく必要があります。  </li> <li>  <b><code>CURLINFO_REQUEST_SIZE</code></b> - 発行されたリクエストのサイズ。現在は HTTP リクエストの場合のみ  </li> <li>  <b><code>CURLINFO_SSL_VERIFYRESULT</code></b> - <b><code>CURLOPT_SSL_VERIFYPEER</code></b> を設定した際に要求される SSL 証明書の認証結果  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_DOWNLOAD</code></b> - ダウンロードされるサイズ。 <i>Content-Length:</i> フィールドの内容を取得する  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_UPLOAD</code></b> - アップロードされるサイズ。  </li> <li>  <b><code>CURLINFO_CONTENT_TYPE</code></b> - 要求されたドキュメントの <i>Content-Type:</i>。 NULL は、サーバーが適切な <i>Content-Type:</i> ヘッダを返さなかったことを示す  </li> <li>  <b><code>CURLINFO_PRIVATE</code></b> - この cURL ハンドルに関連づけられたプライベートデータ。 事前に <code>curl_setopt()</code> の <b><code>CURLOPT_PRIVATE</code></b> オプションで設定したもの。  </li> <li>  <b><code>CURLINFO_RESPONSE_CODE</code></b> - 直近のレスポンスコード。  </li> <li>  <b><code>CURLINFO_HTTP_CONNECTCODE</code></b> - CONNECT のレスポンスコード。  </li> <li>  <b><code>CURLINFO_HTTPAUTH_AVAIL</code></b> - 直前のレスポンスから判断する、利用可能な認証方式のビットマスク。  </li> <li>  <b><code>CURLINFO_PROXYAUTH_AVAIL</code></b> - 直前のレスポンスから判断する、プロキシ認証方式のビットマスク。  </li> <li>  <b><code>CURLINFO_OS_ERRNO</code></b> - 接続に失敗したときのエラー番号。OS やシステムによって異なります。  </li> <li>  <b><code>CURLINFO_NUM_CONNECTS</code></b> - curl が直前の転送を実行するために要した接続数。  </li> <li>  <b><code>CURLINFO_SSL_ENGINES</code></b> - サポートする OpenSSL 暗号エンジン。  </li> <li>  <b><code>CURLINFO_COOKIELIST</code></b> - すべての既知のクッキー。  </li> <li>  <b><code>CURLINFO_FTP_ENTRY_PATH</code></b> - FTP サーバーのエントリパス。  </li> <li>  <b><code>CURLINFO_APPCONNECT_TIME</code></b> - リモートホストとの SSL/SSH 接続／ハンドシェイク が完了するまでに要した秒数。  </li> <li>  <b><code>CURLINFO_CERTINFO</code></b> - TLS 証明書チェイン。  </li> <li>  <b><code>CURLINFO_CONDITION_UNMET</code></b> - 時間の条件が満たされなかったことに関する情報。  </li> <li>  <b><code>CURLINFO_RTSP_CLIENT_CSEQ</code></b> - 次の RTSP クライアントの CSeq。  </li> <li>  <b><code>CURLINFO_RTSP_CSEQ_RECV</code></b> - 直前に受け取った CSeq。  </li> <li>  <b><code>CURLINFO_RTSP_SERVER_CSEQ</code></b> - 次の RTSP サーバーの CSeq。  </li> <li>  <b><code>CURLINFO_RTSP_SESSION_ID</code></b> - RTSP セッション ID。  </li> </ul>
 * @return mixed <p><code>opt</code> を指定した場合は、その値を返します。 それ以外の場合は、以下の要素をもつ連想配列を返します (それぞれの要素が <code>opt</code> に対応します)。 失敗した場合は <b><code>FALSE</code></b> を返します。</p><ul> <li>  "url"  </li> <li>  "content_type"  </li> <li>  "http_code"  </li> <li>  "header_size"  </li> <li>  "request_size"  </li> <li>  "filetime"  </li> <li>  "ssl_verify_result"  </li> <li>  "redirect_count"  </li> <li>  "total_time"  </li> <li>  "namelookup_time"  </li> <li>  "connect_time"  </li> <li>  "pretransfer_time"  </li> <li>  "size_upload"  </li> <li>  "size_download"  </li> <li>  "speed_download"  </li> <li>  "speed_upload"  </li> <li>  "download_content_length"  </li> <li>  "upload_content_length"  </li> <li>  "starttransfer_time"  </li> <li>  "redirect_time"  </li> <li>  "certinfo"  </li> <li>  "primary_ip"  </li> <li>  "primary_port"  </li> <li>  "local_ip"  </li> <li>  "local_port"  </li> <li>  "redirect_url"  </li> <li>  "request_header" (これが設定されるのは、事前に <code>curl_setopt()</code> をコールしたときに <b><code>CURLINFO_HEADER_OUT</code></b> を設定した場合のみです)  </li> </ul> プライベートデータはこの連想配列には含まれず、<b><code>CURLINFO_PRIVATE</code></b> オプションで個別に取得しなければいけないことに注意しましょう。
 * @link http://php.net/manual/ja/function.curl-getinfo.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function curl_getinfo($ch, int $opt = NULL) {}

/**
 * cURL セッションを初期化する
 * <p>新規セッションを初期化し、cURL ハンドルを返します。このハンドルは、関数 <code>curl_setopt()</code>, <code>curl_exec()</code>, <code>curl_close()</code> で使用します。</p>
 * @param string $url <p><code>url</code>を指定した場合、オプション CURLOPT_URL がそのパラメータの値に設定されます。関数 <code>curl_setopt()</code> により、 この値をマニュアルで設定することも可能です。</p>  <p><b>注意</b>:</p> <p>open_basedir が設定されている場合、cURL で <i>file</i> プロトコルは使えなくなります。</p>
 * @return resource <p>成功した場合に cURL ハンドル、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-init.php
 * @see curl_close(), curl_multi_init()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function curl_init(string $url = NULL) {}

/**
 * cURL マルチハンドルに、通常の cURL ハンドルを追加する
 * <p><code>ch</code> ハンドルを、マルチハンドル <code>mh</code> に追加します。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return int <p>成功した場合に 0、あるいはエラーコード <b><code>CURLM_XXX</code></b> のいずれかを返します。</p>
 * @link http://php.net/manual/ja/function.curl-multi-add-handle.php
 * @see curl_multi_remove_handle(), curl_multi_init(), curl_init()
 * @since PHP 5, PHP 7
 */
function curl_multi_add_handle($mh, $ch): int {}

/**
 * cURL ハンドルのセットを閉じる
 * <p>cURL ハンドルのセットを閉じます。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.curl-multi-close.php
 * @see curl_multi_init(), curl_close()
 * @since PHP 5, PHP 7
 */
function curl_multi_close($mh): void {}

/**
 * Return the last multi curl error number
 * <p>Return an integer containing the last multi curl error number.</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @return int <p>Return an integer containing the last multi curl error number, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.curl-multi-errno.php
 * @see curl_errno()
 * @since PHP 7 >= 7.1.0
 */
function curl_multi_errno($mh): int {}

/**
 * 現在の cURL ハンドルから、サブ接続を実行する
 * <p>スタック内の各ハンドルを処理します。 このメソッドは、ハンドルがデータの読み書きを要するかどうかにかかわらずコール可能です。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @param int $still_running <p>処理が実行中かどうかを表すフラグへの参照。</p>
 * @return int <p>cURL 定義済み定数 で定義された cURL コードを返します。</p> <p><b>注意</b>:</p> <p>これは、マルチスタック全体に関するエラーのみを返します。この関数が <b><code>CURLM_OK</code></b> を返したとしても、各転送で個別にエラーが発生している可能性があります。</p>
 * @link http://php.net/manual/ja/function.curl-multi-exec.php
 * @see curl_multi_init(), curl_multi_select(), curl_exec()
 * @since PHP 5, PHP 7
 */
function curl_multi_exec($mh, int &$still_running): int {}

/**
 * CURLOPT_RETURNTRANSFER が設定されている場合に、cURL ハンドルの内容を返す
 * <p><b><code>CURLOPT_RETURNTRANSFER</code></b> に何らかのハンドルが設定されている場合に、 この関数はその cURL ハンドルの内容を文字列形式で返します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return string <p><b><code>CURLOPT_RETURNTRANSFER</code></b> が設定されている場合に、 cURL ハンドルの内容を返します。</p>
 * @link http://php.net/manual/ja/function.curl-multi-getcontent.php
 * @see curl_multi_init()
 * @since PHP 5, PHP 7
 */
function curl_multi_getcontent($ch): string {}

/**
 * 現在の転送についての情報を表示する
 * <p>マルチハンドルに対して、個別の転送にメッセージ/情報が残っているかどうかを問い合わせます。 メッセージには、転送時のエラーコードや転送が完了したという情報が残っている可能性があります。</p><p>この関数を繰り返しコールすると、毎回新しい結果を返します。<b><code>FALSE</code></b> が返されると、その時点でもう取得する結果がないことを意味します。 <code>msgs_in_queue</code> がさす値は、 この関数をコールした後に残っているメッセージの数となります。</p><p>返されたリソースがさすデータは、 <code>curl_multi_remove_handle()</code> をコールした後には残りません。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @param int $msgs_in_queue <p>まだキューの中に残っているメッセージの数。</p>
 * @return array <p>成功した場合にメッセージの連想配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>配列の内容</b>   キー 値     <i>msg</i> 定数 <b><code>CURLMSG_DONE</code></b>。その他の返り値は現在は存在しません。   <i>result</i> 定数 <b><code>CURLE_&#42;</code></b> のいずれか。すべて OK なら <b><code>CURLE_OK</code></b> が返ります。   <i>handle</i> curl が扱うハンドルの型を表すリソース。
 * @link http://php.net/manual/ja/function.curl-multi-info-read.php
 * @see curl_multi_init()
 * @since PHP 5, PHP 7
 */
function curl_multi_info_read($mh, int &$msgs_in_queue = NULL): array {}

/**
 * 新規 cURL マルチハンドルを返す
 * <p>複数の cURL ハンドルを非同期で実行できるようにします。</p>
 * @return resource <p>成功した場合に cURL マルチハンドルリソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-multi-init.php
 * @see curl_init(), curl_multi_close()
 * @since PHP 5, PHP 7
 */
function curl_multi_init() {}

/**
 * cURL ハンドルのセットからマルチハンドルを削除する
 * <p>指定した <code>ch</code> ハンドルを、<code>mh</code> ハンドルから削除します。 <code>ch</code> ハンドルが削除されてからも、このハンドルで <code>curl_exec()</code> を実行できます。 使用中の <code>ch</code> ハンドルを削除する際には、 そのハンドルにかかわる進行中の転送をきちんと停止します。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return int <p>成功した場合に 0、失敗した場合にエラーコード <b><code>CURLM_XXX</code></b> のいずれかを返します。 codes.</p>
 * @link http://php.net/manual/ja/function.curl-multi-remove-handle.php
 * @see curl_init(), curl_multi_init(), curl_multi_add_handle()
 * @since PHP 5, PHP 7
 */
function curl_multi_remove_handle($mh, $ch): int {}

/**
 * curl_multi 接続のアクティビティを待つ
 * <p>curl_multi 接続に関するアクティビティがあるまでブロックします。</p>
 * @param resource $mh <p><code>curl_multi_init()</code> が返す cURL マルチハンドル。</p>
 * @param float $timeout <p>レスポンスを待つ秒数。</p>
 * @return int <p>成功した場合は、記述子セットに含まれる記述子の数を返します。 どの記述子上にもアクティビティがなかった場合は、結果が 0 になることもあります。 select に失敗した場合は -1 を返し、それ以外の失敗時は (select システムコールから) タイムアウトします。</p>
 * @link http://php.net/manual/ja/function.curl-multi-select.php
 * @see curl_multi_init()
 * @since PHP 5, PHP 7
 */
function curl_multi_select($mh, float $timeout = 1.0): int {}

/**
 * cURL マルチハンドル用のオプションを設定する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mh
 * @param int $option <p><b><code>CURLMOPT_&#42;</code></b> 定数のいずれか。</p>
 * @param mixed $value <p><code>option</code> に設定する値。</p> <p><code>value</code> には <code>int</code> 型の値を指定しなければいけません。 <code>option</code> パラメータの値によって、それぞれ次のようになります。</p>   オプション  <code>value</code> の設定値     <b><code>CURLMOPT_PIPELINING</code></b>  1 を渡せば有効に、そして 0 を渡せば無効になります。 マルチハンドルでのパイプライン化を有効にすると、このハンドルによる転送で、 可能な限り HTTP パイプライン化を試みます。 つまり、二番目のリクエストを追加したときに既存の接続が使える場合は、 既存の接続に「パイプ」でつなぎます。 cURL 7.43.0 以降では、2 を渡すと、既存の HTTP/2 接続上での新しい転送で、 可能な限り多重化を試みます。    <b><code>CURLMOPT_MAXCONNECTS</code></b>  同時に開く接続の最大数を指定します。これを libcurl がキャッシュします。 デフォルトのサイズは、 <code>curl_multi_add_handle()</code> で追加したハンドル数の四倍に収まるように拡大されます。 キャッシュがいっぱいになると、キャッシュ内で一番古い接続を閉じ、 開いている接続の数が増えないようにします。    <b><code>CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</code></b>  パイプライン化のチャンク長の閾値をバイト単位で指定します。    <b><code>CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</code></b>  パイプライン化のペナルティの閾値をバイト単位で指定します。    <b><code>CURLMOPT_MAX_HOST_CONNECTIONS</code></b>  単一のホストへの最大接続数を指定します。    <b><code>CURLMOPT_MAX_PIPELINE_LENGTH</code></b>  単一のパイプライン内での最大リクエスト数を指定します。    <b><code>CURLMOPT_MAX_TOTAL_CONNECTIONS</code></b>  同時にオープンする接続の最大数を指定します。    <b><code>CURLMOPT_PUSHFUNCTION</code></b>  Pass a <code>callable</code> that will be registered to handle server pushes and should have the following signature:  int pushfunction ( resource <code>$parent_ch</code> , resource <code>$pushed_ch</code> , array <code>$headers</code> )   <code>parent_ch</code>   <p>The parent cURL handle (the request the client made).</p>   <code>pushed_ch</code>   <p>A new cURL handle for the pushed request.</p>   <code>headers</code>   <p>The push promise headers.</p>   The push function is supposed to return either <b><code>CURL_PUSH_OK</code></b> if it can handle the push, or <b><code>CURL_PUSH_DENY</code></b> to reject it.
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-multi-setopt.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_multi_setopt($mh, int $option, $value): bool {}

/**
 * エラーの内容を表す文字列を返す
 * <p>指定した CURLM エラーコードに対応するエラーメッセージの文字列を返します。</p>
 * @param int $errornum <p>» CURLM エラーコード 定数のいずれか。</p>
 * @return string <p>有効なエラーコードを指定した場合は、それに対応する文字列を返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-multi-strerror.php
 * @see curl_strerror()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_multi_strerror(int $errornum): string {}

/**
 * 接続の中断と再開をする
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param int $bitmask <p>定数 <b><code>CURLPAUSE_&#42;</code></b> のいずれか。</p>
 * @return int <p>エラーコードを返します (エラーがない場合は <b><code>CURLE_OK</code></b> を返します)。</p>
 * @link http://php.net/manual/ja/function.curl-pause.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_pause($ch, int $bitmask): int {}

/**
 * libcurl セッションハンドルのすべてのオプションをリセットする
 * <p>指定した cURL ハンドルに設定されているすべてのオプションを初期化してデフォルト値に戻します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.curl-reset.php
 * @see curl_setopt()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_reset($ch): void {}

/**
 * cURL 転送用オプションを設定する
 * <p>指定した cURL セッションハンドルのオプションを設定します。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param int $option <p>設定したい <i>CURLOPT_XXX</i> オプション。</p>
 * @param mixed $value <p><code>option</code> に設定する値。</p> <p><code>value</code> には、 <code>option</code> の以下の値に関して bool 値を指定する必要があります。</p>   オプション  <code>value</code> への設定値 注記     <b><code>CURLOPT_AUTOREFERER</code></b>  <b><code>TRUE</code></b> を設定すると、<i>Location:</i> によるリダイレクトを たどる際には自動的に <i>Referer:</i> フィールドをリクエストに 追加します。      <b><code>CURLOPT_BINARYTRANSFER</code></b>  <b><code>TRUE</code></b> を設定すると、<b><code>CURLOPT_RETURNTRANSFER</code></b> が使用された場合に出力結果を何も加工せずに返します。   PHP 5.1.3 以降では、このオプションは何の効果もありません。 <b><code>CURLOPT_RETURNTRANSFER</code></b> を使ったときには 常に出力をそのまま返すようになりました。    <b><code>CURLOPT_COOKIESESSION</code></b>  <b><code>TRUE</code></b> を設定すると、クッキーの "セッション" を新しく開始します。 以前のセッションで読み込まれていた "セッションクッキー" は無視するよう、 libcurl に指示します。デフォルトでは、それがセッションクッキーであるか どうかにかかわらず libcurl はすべてのクッキーを読み込んで保存します。 セッションクッキーとは、有効期限が指定されておらず "セッション" の間のみ 有効であるクッキーのことです。      <b><code>CURLOPT_CERTINFO</code></b>  <b><code>TRUE</code></b> を設定すると、セキュアな転送時に SSL 証明書の情報を <i>STDERR</i> に出力します。   cURL 7.19.1 で追加されました。 PHP 5.3.2 以降で使用可能です。これを使うには、<b><code>CURLOPT_VERBOSE</code></b> を on にしておかなければなりません。    <b><code>CURLOPT_CONNECT_ONLY</code></b>  <b><code>TRUE</code></b> を設定すると、プロキシの認証や接続の確立などをすべて行いますが、データは転送しません。 このオプションは、HTTP や SMTP そして POP3 用に実装されています。   7.15.2 で追加されました。 PHP 5.5.0 以降で使用可能です。    <b><code>CURLOPT_CRLF</code></b>  <b><code>TRUE</code></b> を設定すると、転送時に Unix 形式の改行を CRLF 形式に変換します。      <b><code>CURLOPT_DNS_USE_GLOBAL_CACHE</code></b>  <b><code>TRUE</code></b> を設定すると、グローバル DNS キャッシュを利用します。 このオプションはスレッドセーフではありません。また、デフォルトで 有効になっています。      <b><code>CURLOPT_FAILONERROR</code></b>  <b><code>TRUE</code></b> を設定すると、HTTP で 400 以上のコードが返ってきた際に 処理失敗と判断します。デフォルトでは、コードの値を無視して ページの内容を取得します。      <b><code>CURLOPT_SSL_FALSESTART</code></b>  <b><code>TRUE</code></b> にすると、TLS false start を有効にします。   cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_FILETIME</code></b>  <b><code>TRUE</code></b> を設定すると、ドキュメントの更新日時を取得しようと試みます。 この値を取得するには、<code>curl_getinfo()</code> で <code>CURLINFO_FILETIME</code> オプションを用います。      <b><code>CURLOPT_FOLLOWLOCATION</code></b>  <b><code>TRUE</code></b> を設定すると、サーバーが HTTP ヘッダの一部として送ってくる <i>"Location: "</i> ヘッダの内容をたどります （これは再帰的に行われます。<b><code>CURLOPT_MAXREDIRS</code></b> が指定されていない限り、送ってくる <i>"Location: "</i> ヘッダの内容をずっとたどり続けることに注意しましょう）。      <b><code>CURLOPT_FORBID_REUSE</code></b>  <b><code>TRUE</code></b> を設定すると、処理が終了した際に明示的に接続を切断します。 接続を再利用しません。      <b><code>CURLOPT_FRESH_CONNECT</code></b>  <b><code>TRUE</code></b> を設定すると、キャッシュされている接続を利用せずに 新しい接続を確立します。      <b><code>CURLOPT_FTP_USE_EPRT</code></b>  <b><code>TRUE</code></b> を設定すると、FTP のダウンロードに EPRT（および LPRT） を利用します。<b><code>FALSE</code></b> の場合は EPRT・LPRT を無効にして PORT を利用します。      <b><code>CURLOPT_FTP_USE_EPSV</code></b>  <b><code>TRUE</code></b> を設定すると、FTP 転送の際にまず EPSV コマンドの利用を 試みます。失敗した場合は PASV を利用します。<b><code>FALSE</code></b> を設定すると、 EPSV を無効にします。      <b><code>CURLOPT_FTP_CREATE_MISSING_DIRS</code></b>  <b><code>TRUE</code></b> を設定すると、FTP の操作中にパスが存在しなかったときに ディレクトリを作成します。      <b><code>CURLOPT_FTPAPPEND</code></b>  <b><code>TRUE</code></b> を設定すると、リモートファイルを上書きせずに追記します。      <b><code>CURLOPT_TCP_NODELAY</code></b>  <b><code>TRUE</code></b> にすると、TCP の Nagle アルゴリズムを解除します。解除すると、小さなパケットがネットワーク上を流れる回数をできるだけ減らそうと試みます。   PHP 5.2.1 以降のバージョンで、libcurl 7.11.2 以降と組み合わせてコンパイルしたときに利用可能です。    <b><code>CURLOPT_FTPASCII</code></b>  <b><code>CURLOPT_TRANSFERTEXT</code></b> のエイリアスです。      <b><code>CURLOPT_FTPLISTONLY</code></b>  <b><code>TRUE</code></b> を設定すると、FTP でディレクトリ名のみ表示します。      <b><code>CURLOPT_HEADER</code></b>  <b><code>TRUE</code></b> を設定すると、ヘッダの内容も出力します。      <b><code>CURLINFO_HEADER_OUT</code></b>  <b><code>TRUE</code></b> を設定すると、リクエスト文字列を追跡します。   PHP 5.1.3 以降で使用可能です。プレフィックスが <b><code>CURLINFO_</code></b> となっているのは意図的なものです。    <b><code>CURLOPT_HTTPGET</code></b>  <b><code>TRUE</code></b> を設定すると、HTTP のリクエスト形式を GET に戻します。 GET はデフォルト設定なので、リクエスト形式が変更されている 場合にのみ必要となります。      <b><code>CURLOPT_HTTPPROXYTUNNEL</code></b>  <b><code>TRUE</code></b> にすると、指定された HTTP プロキシを介してトンネルします。      <b><code>CURLOPT_MUTE</code></b>  <b><code>TRUE</code></b> を設定すると、cURL 関数に関連する出力を完全に抑えます。   cURL 7.15.5 で削除されました (かわりに CURLOPT_RETURNTRANSFER が使えます)    <b><code>CURLOPT_NETRC</code></b>  <b><code>TRUE</code></b> を設定すると、リモートサイトと接続を確立する際に用いる ユーザー名やパスワードを、~/.netrc から取得します。      <b><code>CURLOPT_NOBODY</code></b>  <b><code>TRUE</code></b> を設定すると、出力から本文を削除します。 リクエストメソッドは HEAD となります。これを <b><code>FALSE</code></b> に変更してもリクエストメソッドは GET には変わりません。      <b><code>CURLOPT_NOPROGRESS</code></b>  <b><code>TRUE</code></b> を設定すると、cURL 転送の進捗状況表示を無効にします。  <p><b>注意</b>:</p> <p>PHP は、このオプションを自動的に <b><code>TRUE</code></b> に設定します。 これを変更するのは、デバッグ時のみにすべきです。</p>       <b><code>CURLOPT_NOSIGNAL</code></b>  <b><code>TRUE</code></b> を設定すると、cURL 関数が PHP プロセスに送信するシグナルを 無視します。マルチスレッド SAPI ではデフォルトで on となっており、 そのためタイムアウトオプションもまだ利用されています。   cURL 7.10 で追加されました。    <b><code>CURLOPT_PATH_AS_IS</code></b>  <b><code>TRUE</code></b> にすると、ドットの連続を処理しません。   cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_PIPEWAIT</code></b>  <b><code>TRUE</code></b> にすると、パイプライン化/多重化を待ちます。   cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_POST</code></b>  <b><code>TRUE</code></b> を設定すると、HTTP POST を行います。POST は、 <i>application/x-www-form-urlencoded</i> 形式で 行われます。これは一般的な HTML のフォームと同じ形式です。      <b><code>CURLOPT_PUT</code></b>  <b><code>TRUE</code></b> を設定すると、HTTP PUT を行います。PUT するファイルは <b><code>CURLOPT_INFILE</code></b> および <b><code>CURLOPT_INFILESIZE</code></b> で指定されている必要があります。      <b><code>CURLOPT_RETURNTRANSFER</code></b>  <b><code>TRUE</code></b> を設定すると、<code>curl_exec()</code> の返り値を 文字列で返します。通常はデータを直接出力します。      <b><code>CURLOPT_SAFE_UPLOAD</code></b>  <b><code>TRUE</code></b> にすると、<b><code>CURLOPT_POSTFIELDS</code></b> でのファイルアップロードの際の <i>@</i> プレフィックスを無効にします。 つまり、<i>@</i> で始まる値を安全に渡せるようになるということです。 アップロードには CURLFile が使われるでしょう。   PHP 5.5.0 で追加され、デフォルトは <b><code>FALSE</code></b> でした。 PHP 5.6.0 以降は、デフォルトが <b><code>TRUE</code></b> に変わります。    <b><code>CURLOPT_SASL_IR</code></b>  <b><code>TRUE</code></b> にすると、最初のパケット内の最初のレスポンスの送信を有効にします。   cURL 7.31.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_SSL_ENABLE_ALPN</code></b>  <b><code>FALSE</code></b> にすると、SSL ハンドシェイクの際の ALPN を無効にします (SSL バックエンドの libcurl がそれに対応するビルドである場合)。 これは、http2 ネゴシエーションに使えます。   cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_SSL_ENABLE_NPN</code></b>  <b><code>FALSE</code></b> にすると、SSL ハンドシェイクの際の NPN を無効にします (SSL バックエンドの libcurl がそれに対応するビルドである場合)。 これは、http2 ネゴシエーションに使えます。   cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_SSL_VERIFYPEER</code></b>  <b><code>FALSE</code></b> を設定すると、cURL はサーバー証明書の検証を行いません。 別の証明書を <b><code>CURLOPT_CAINFO</code></b> オプションで 指定するか、<b><code>CURLOPT_CAPATH</code></b> オプションで 証明ディレクトリを指定します。   cURL 7.10 以降、デフォルト値は <b><code>TRUE</code></b> です。また、 cURL 7.10 以降、デフォルトでインストールされています。    <b><code>CURLOPT_SSL_VERIFYSTATUS</code></b>  <b><code>TRUE</code></b> にすると、証明書のステータスを検証します。   cURL 7.41.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_TCP_FASTOPEN</code></b>  <b><code>TRUE</code></b> にすると、TCP Fast Open を有効にします。   cURL 7.49.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_TFTP_NO_OPTIONS</code></b>  <b><code>TRUE</code></b> にすると、TFTP オプションリクエストを送信しません。   cURL 7.48.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_TRANSFERTEXT</code></b>  <b><code>TRUE</code></b> を設定すると、FTP 転送を ASCII モードで行います。 LDAP の場合は、データを HTML ではなくプレーンテキストで取得します。 Windows システムでは <i>STDOUT</i> に対してバイナリモードを設定しないでください。      <b><code>CURLOPT_UNRESTRICTED_AUTH</code></b>  <b><code>TRUE</code></b> を設定すると、（<b><code>CURLOPT_FOLLOWLOCATION</code></b> を利用して）場所をたどっていく際にユーザー名とパスワードを送信し続けます。 これは、たとえホスト名が変わっても続けられます。      <b><code>CURLOPT_UPLOAD</code></b>  <b><code>TRUE</code></b> を設定すると、アップロードの準備をします。      <b><code>CURLOPT_VERBOSE</code></b>  <b><code>TRUE</code></b> を設定すると、詳細な情報を出力します。情報は <i>STDERR</i> か、または <b><code>CURLOPT_STDERR</code></b> で指定したファイルに出力されます。       <p><code>value</code> には、 <code>option</code> の以下の値に関して 整数値を指定する必要があります。</p>   オプション  <code>value</code> への設定値 注記     <b><code>CURLOPT_BUFFERSIZE</code></b>  1 回の読み込みに用いるバッファのサイズ。しかしながら、必ず このバッファいっぱいまで読み込まれることを保証するものではありません。   cURL 7.10 で追加されました。    <b><code>CURLOPT_CLOSEPOLICY</code></b>  <b><code>CURLCLOSEPOLICY_&#42;</code></b> のいずれかの値。  <p><b>注意</b>:</p> <p>このオプションは非推奨となりました。cURL で実装されることがなく、指定しても何の効果もありませんでした。</p>    PHP 5.6.0 で削除されました。    <b><code>CURLOPT_CONNECTTIMEOUT</code></b>  接続の試行を待ち続ける秒数。0 は永遠に待ち続けることを意味します。      <b><code>CURLOPT_CONNECTTIMEOUT_MS</code></b>  接続の試行を待ち続けるミリ秒数。0 は永遠に待ち続けることを意味します。 システムの標準の名前解決を使うように libcurl をビルドしている場合は、 接続のタイムアウトは秒単位の精度となり、最小のタイムアウトは 1 秒となります。   cURL 7.16.2 で追加されました。PHP 5.2.3 以降で使用可能です。    <b><code>CURLOPT_DNS_CACHE_TIMEOUT</code></b>  DNS エントリをメモリ内に保持し続ける秒数。デフォルトでは 120（2 分）に設定されています。      <b><code>CURLOPT_EXPECT_100_TIMEOUT_MS</code></b>  期待するタイムアウト。連続100リクエストの時間をミリ秒で指定します。 デフォルトは1000ミリ秒です。   cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。    <b><code>CURLOPT_FTPSSLAUTH</code></b>  （使用可能な場合の）FTP 認証方法。 <i>CURLFTPAUTH_SSL</i>（まず SSL を試す）、 <i>CURLFTPAUTH_TLS</i>（まず TLS を試す）あるいは <i>CURLFTPAUTH_DEFAULT</i>（cURL が決める）のいずれかです。   cURL 7.12.2 で追加されました。    <b><code>CURLOPT_HEADEROPT</code></b>  How to deal with headers. One of the following constants:  <b><code>CURLHEADER_UNIFIED</code></b>: the headers specified in <b><code>CURLOPT_HTTPHEADER</code></b> will be used in requests both to servers and proxies. With this option enabled, <b><code>CURLOPT_PROXYHEADER</code></b> will not have any effect.   <b><code>CURLHEADER_SEPARATE</code></b>: makes <b><code>CURLOPT_HTTPHEADER</code></b> headers only get sent to a server and not to a proxy. Proxy headers must be set with <b><code>CURLOPT_PROXYHEADER</code></b> to get used. Note that if a non-CONNECT request is sent to a proxy, libcurl will send both server headers and proxy headers. When doing CONNECT, libcurl will send <b><code>CURLOPT_PROXYHEADER</code></b> headers only to the proxy and then <b><code>CURLOPT_HTTPHEADER</code></b> headers only to the server.   Defaults to <b><code>CURLHEADER_SEPARATE</code></b> as of cURL 7.42.1, and <b><code>CURLHEADER_UNIFIED</code></b> before.    Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP_VERSION</code></b>  <code>CURL_HTTP_VERSION_NONE</code> (デフォルト。 使用するバージョンを決めるのは cURL にまかせる)、 <code>CURL_HTTP_VERSION_1_0</code> (HTTP/1.0 を使用する)、 あるいは <code>CURL_HTTP_VERSION_1_1</code> (HTTP/1.1 を使用する) のいずれかです。      <b><code>CURLOPT_HTTPAUTH</code></b>  <p>使用する HTTP 認証方法。以下の中から選びます。 <code>CURLAUTH_BASIC</code>、 <code>CURLAUTH_DIGEST</code>、 <code>CURLAUTH_GSSNEGOTIATE</code>、 <code>CURLAUTH_NTLM</code>、 <code>CURLAUTH_ANY</code> および <code>CURLAUTH_ANYSAFE</code>。</p> <p>2 つ以上の方法を組み合わせるには、ビット演算子 <i>|</i>（or） を使用します。このような場合、cURL はサーバーがサポートしている方法を 問い合わせたうえで最適な方法を選択します。</p> <p><code>CURLAUTH_ANY</code> は <i>CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</i> のエイリアスです。</p> <p><code>CURLAUTH_ANYSAFE</code> は <i>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</i> のエイリアスです。</p>      <b><code>CURLOPT_INFILESIZE</code></b>  ファイルをリモートサイトにアップロードする際のファイルサイズ。 このオプションを指定しても、libcurl がそれ以上のデータを送信するのは止められないことに注意しましょう。 実際に何が送信されるのかは <b><code>CURLOPT_READFUNCTION</code></b> に依存します。      <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b>  1 秒あたりのバイト数で、転送速度がこれより遅い期間が <b><code>CURLOPT_LOW_SPEED_TIME</code></b> 秒以上続いた場合に PHP は転送を終了します。      <b><code>CURLOPT_LOW_SPEED_TIME</code></b>  転送速度が <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b> より遅い期間がどれだけ続いた場合に転送を異常終了させるかを、 秒単位で指定します。      <b><code>CURLOPT_MAXCONNECTS</code></b>  許可される持続的接続の最大数。もしこの値に達した場合、 どの接続を閉じるのかを <b><code>CURLOPT_CLOSEPOLICY</code></b> によって決定します。      <b><code>CURLOPT_MAXREDIRS</code></b>  HTTP のリダイレクト先を追いかける最大値。 <b><code>CURLOPT_FOLLOWLOCATION</code></b> とあわせて使用します。      <b><code>CURLOPT_PORT</code></b>  接続先のポート番号。      <b><code>CURLOPT_POSTREDIR</code></b>  <b><code>CURLOPT_FOLLOWLOCATION</code></b> が設定されているときに、 どの形式のリダイレクトの場合に HTTP POST メソッドを維持するのかを、 1 (301 Moved Permanently)、2 (302 Found)、4 (303 See Other) のビットマスクで指定します。   cURL 7.19.1 で追加されました。PHP 5.3.2 以降で使用可能です。    <b><code>CURLOPT_PROTOCOLS</code></b>  <p><b><code>CURLPROTO_&#42;</code></b> の値のビットマスク。使用すると、 転送時に libcurl がどのプロトコルを使用するのかに制約を加えます。 さまざまなプロトコルに対応するよう libcurl をビルドしていた場合でも、 これによって特定の転送プロトコルのみを使用するように制限することができます。 デフォルトでは、libcurl がサポートしているすべてのプロトコルの使用を許可します。 <b><code>CURLOPT_REDIR_PROTOCOLS</code></b> も参照ください。</p> <p>使用できるプロトコルオプションは次のとおりです。 <code>CURLPROTO_HTTP</code>, <code>CURLPROTO_HTTPS</code>, <code>CURLPROTO_FTP</code>, <code>CURLPROTO_FTPS</code>, <code>CURLPROTO_SCP</code>, <code>CURLPROTO_SFTP</code>, <code>CURLPROTO_TELNET</code>, <code>CURLPROTO_LDAP</code>, <code>CURLPROTO_LDAPS</code>, <code>CURLPROTO_DICT</code>, <code>CURLPROTO_FILE</code>, <code>CURLPROTO_TFTP</code>, <code>CURLPROTO_ALL</code></p>   cURL 7.19.4 で追加されました。    <b><code>CURLOPT_PROXYAUTH</code></b>  プロキシ接続に使用する HTTP 認証の方法。 <b><code>CURLOPT_HTTPAUTH</code></b> で説明したのと同じオプションを 指定可能です。プロキシ認証でサポートされているのは、今のところ <code>CURLAUTH_BASIC</code> および <code>CURLAUTH_NTLM</code> のみです。   cURL 7.10.7 で追加されました。    <b><code>CURLOPT_PROXYPORT</code></b>  プロキシ接続のポート番号。このポート番号は、 <b><code>CURLOPT_PROXY</code></b> で指定することも可能です。      <b><code>CURLOPT_PROXYTYPE</code></b>  <code>CURLPROXY_HTTP</code>（デフォルト）、 <b><code>CURLPROXY_SOCKS4</code></b>、 <b><code>CURLPROXY_SOCKS5</code></b>、 <b><code>CURLPROXY_SOCKS4A</code></b> あるいは <b><code>CURLPROXY_SOCKS5_HOSTNAME</code></b>。   cURL 7.10 で追加されました。    <b><code>CURLOPT_REDIR_PROTOCOLS</code></b>  <b><code>CURLPROTO_&#42;</code></b> の値のビットマスク。使用すると、 <b><code>CURLOPT_FOLLOWLOCATION</code></b> が有効な場合のリダイレクト時の転送に libcurl がどのプロトコルを使用するのかに制約を加えます。これによって、 リダイレクト時に特定の転送プロトコルのみを使用するように制限することができます。 デフォルトでは、libcurl がサポートしているすべてのプロトコルのうち FILE と SCP 以外のすべての使用を許可します。この挙動は 7.19.4 より前のバージョンとは異なります。7.19.4 より前のバージョンでは、 サポートするすべてのプロトコルを無条件に許可していました。 プロトコル定数の値は <b><code>CURLOPT_PROTOCOLS</code></b> を参照ください。   cURL 7.19.4 で追加されました。    <b><code>CURLOPT_RESUME_FROM</code></b>  転送を途中から再開する場合のバイトオフセット。      <b><code>CURLOPT_SSL_OPTIONS</code></b>  Set SSL behavior options, which is a bitmask of any of the following constants:  <b><code>CURLSSLOPT_ALLOW_BEAST</code></b>: do not attempt to use any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.   <b><code>CURLSSLOPT_NO_REVOKE</code></b>: disable certificate revocation checks for those SSL backends where such behavior is present.    Added in cURL 7.25.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_VERIFYHOST</code></b>  1 は SSL ピア証明書に一般名が存在するかどうかを調べます。 2 はそれに加え、その名前がホスト名と一致することを検証します。 本番環境では、このオプションの値は常に 2 (デフォルト値) にしておかなければなりません。   値 1 は、cURL 7.28.1 以降では使えなくなりました。    <b><code>CURLOPT_SSLVERSION</code></b>  <b><code>CURL_SSLVERSION_DEFAULT</code></b> (0)、 <b><code>CURL_SSLVERSION_TLSv1</code></b> (1)、 <b><code>CURL_SSLVERSION_SSLv2</code></b> (2)、 <b><code>CURL_SSLVERSION_SSLv3</code></b> (3)、 <b><code>CURL_SSLVERSION_TLSv1_0</code></b> (4)、 <b><code>CURL_SSLVERSION_TLSv1_1</code></b> (5)、 <b><code>CURL_SSLVERSION_TLSv1_2</code></b> (6) のいずれかの値。  <p><b>注意</b>:</p> <p>この値は何も設定せず、デフォルトに任せるのが最適です。 2 や 3 を設定すると、SSLv2 および SSLv3 の既知の脆弱性の影響を受けるため、非常に危険です。</p>       <b><code>CURLOPT_STREAM_WEIGHT</code></b>  Set the numerical stream weight (a number between 1 and 256).   Added in cURL 7.46.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TIMECONDITION</code></b>  <b><code>CURLOPT_TIMEVALUE</code></b> の扱いを決定します。 <b><code>CURLOPT_TIMEVALUE</code></b> で指定した時刻以降に 変更されたページのみを返す場合は <code>CURL_TIMECOND_IFMODSINCE</code> を使用します。 <b><code>CURLOPT_HEADER</code></b> が <b><code>TRUE</code></b> だと仮定すると、 ページが変更されていない場合は <i>"304 Not Modified"</i> ヘッダが返されます。 <code>CURL_TIMECOND_IFUNMODSINCE</code> は反対の意味です。 デフォルトは <code>CURL_TIMECOND_IFMODSINCE</code> です。      <b><code>CURLOPT_TIMEOUT</code></b>  cURL 関数の実行にかけられる時間の最大値。      <b><code>CURLOPT_TIMEOUT_MS</code></b>  cURL 関数の実行にかけられる最大のミリ秒数。 システムの標準の名前解決を使うように libcurl をビルドしている場合は、 接続のタイムアウトは秒単位の精度となり、最小のタイムアウトは 1 秒となります。   cURL 7.16.2 で追加されました。PHP 5.2.3 以降で使用可能です。    <b><code>CURLOPT_TIMEVALUE</code></b>  1970 年 1 月 1 日からの経過秒数。この値は <b><code>CURLOPT_TIMECONDITION</code></b> で使用されます。デフォルトでは <code>CURL_TIMECOND_IFMODSINCE</code> が設定されます。      <b><code>CURLOPT_MAX_RECV_SPEED_LARGE</code></b>  ダウンロード速度 (単位は「バイト/秒」) の転送中累加平均がこの値を超えると、 転送を一時停止して、平均速度がこのパラメータの値以下に落ちるまで待ちます。 デフォルトは無制限です。   cURL 7.15.5 で追加されました。PHP 5.4.0 以降で使用可能です。    <b><code>CURLOPT_MAX_SEND_SPEED_LARGE</code></b>  アップロード速度 (単位は「バイト/秒」) の転送中累加平均がこの値を超えると、 転送を一時停止して、平均速度がこのパラメータの値以下に落ちるまで待ちます。 デフォルトは無制限です。   cURL 7.15.5 で追加されました。PHP 5.4.0 以降で使用可能です。    <b><code>CURLOPT_SSH_AUTH_TYPES</code></b>  <b><code>CURLSSH_AUTH_PUBLICKEY</code></b>, <b><code>CURLSSH_AUTH_PASSWORD</code></b>, <b><code>CURLSSH_AUTH_HOST</code></b>, <b><code>CURLSSH_AUTH_KEYBOARD</code></b> のビットマスク。 <b><code>CURLSSH_AUTH_ANY</code></b> にすると libcurl がいずれかひとつを選択します。   cURL 7.16.1 で追加されました。    <b><code>CURLOPT_IPRESOLVE</code></b>  ホスト名の解決にどの形式の IP アドレスを使うのかを、アプリケーションが選べるようにします。 複数のバージョンの IP アドレスで解決できるホスト名のときに使うもので、指定できる値は <b><code>CURL_IPRESOLVE_WHATEVER</code></b>、 <b><code>CURL_IPRESOLVE_V4</code></b> そして <b><code>CURL_IPRESOLVE_V6</code></b> です。 デフォルトは <b><code>CURL_IPRESOLVE_WHATEVER</code></b> です。   cURL 7.10.8 で追加されました。    <b><code>CURLOPT_FTP_FILEMETHOD</code></b>  FTP(S) サーバー上のファイルに到達するために使う方法を curl に伝えます。利用可能な値は <b><code>CURLFTPMETHOD_MULTICWD</code></b>、 <b><code>CURLFTPMETHOD_NOCWD</code></b> および <b><code>CURLFTPMETHOD_SINGLECWD</code></b> です。   cURL 7.15.1 で追加されました。PHP 5.3.0 以降で使用可能です。     <p><code>value</code> は、 <code>option</code> パラメータの 以下の値に関して文字列である必要があります。</p>   オプション  <code>value</code> への設定値 注記     <b><code>CURLOPT_CAINFO</code></b>  接続先を検証するための証明書を保持するファイル名。 これは <b><code>CURLOPT_SSL_VERIFYPEER</code></b> を使用する場合に のみ意味を持ちます。   絶対パスで指定しなければならないでしょう。    <b><code>CURLOPT_CAPATH</code></b>  複数の証明書ファイルを保持するディレクトリ。このオプションは <b><code>CURLOPT_SSL_VERIFYPEER</code></b> とともに使用します。      <b><code>CURLOPT_COOKIE</code></b>  HTTP リクエストにおける <i>"Cookie: "</i> ヘッダの内容。 クッキーが複数ある場合は、セミコロンとスペースで区切られる (例 "<i>fruit=apple; colour=red</i>") ことに注意しましょう。      <b><code>CURLOPT_COOKIEFILE</code></b>  クッキーのデータを保持するファイルの名前。クッキーファイルは、 Netscape フォーマットあるいは HTTP ヘッダを単純にファイルにダンプしたものが使用可能です。 名前が空文字列の場合はクッキーを読み込みませんが、クッキーの処理は有効なままです。      <b><code>CURLOPT_COOKIEJAR</code></b>  ハンドルを閉じる際 (curl_close のコール後など) に、 すべての内部クッキーを保存するファイルの名前。      <b><code>CURLOPT_CUSTOMREQUEST</code></b>  HTTP リクエストで <i>"GET"</i> あるいは <i>"HEAD"</i> 以外に 使用するカスタムメソッド。これが有用なのは、<i>"DELETE"</i> やその他のあまり知られていない HTTP リクエストを実行する場合です。 使用可能な値は <i>"GET"</i>、 <i>"POST"</i>、<i>"CONNECT"</i> などです。 HTTP リクエストの内容をすべて指定するわけではありません。つまり、 <i>"GET /index.html HTTP/1.0\r\n\r\n"</i> のような 記述は間違いだということです。  <p><b>注意</b>:</p> <p>使用しようとしているメソッドをサーバーがサポートしていることを 確かめるまで、これを使用しないでください。</p>       <b><code>CURLOPT_DEFAULT_PROTOCOL</code></b> <p>The default protocol to use if the URL is missing a scheme name.</p>  Added in cURL 7.45.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_INTERFACE</code></b> <p>Set the name of the network interface that the DNS resolver should bind to. This must be an interface name (not an address).</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP4</code></b> <p>Set the local IPv4 address that the resolver should bind to. The argument should contain a single numerical IPv4 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP6</code></b> <p>Set the local IPv6 address that the resolver should bind to. The argument should contain a single numerical IPv6 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_EGDSOCKET</code></b>  <b><code>CURLOPT_RANDOM_FILE</code></b> と似ていますが、 Entropy Gathering Daemon ソケットを使用してファイル名を生成する点が 違います。      <b><code>CURLOPT_ENCODING</code></b>  <i>"Accept-Encoding: "</i> ヘッダの内容。 これにより、応答のデコードを可能にします。サポートされる エンコーディングは <i>"identity"</i>、 <i>"deflate"</i> および <i>"gzip"</i> です。もし空文字列 <i>""</i> が指定された場合、 サポートされるエンコーディングをすべて含むヘッダが送信されます。   cURL 7.10 で追加されました。    <b><code>CURLOPT_FTPPORT</code></b>  FTP で "PORT" を使用するための IP アドレスを取得する際に使用される値。 "PORT" は、リモートサーバーに対してこちらが指定した IP アドレスに 接続するよう指示します。この値に設定できる内容は IP アドレス、ホスト名、 ネットワークインターフェイス名（Unix）、あるいは単に '-' を指定する ことでシステムのデフォルト IP アドレスを指定します。      <b><code>CURLOPT_INTERFACE</code></b>  使用するネットワークインターフェイスの名前。 インターフェイス名、IP アドレスあるいはホスト名が指定可能です。      <b><code>CURLOPT_KEYPASSWD</code></b>  <b><code>CURLOPT_SSLKEY</code></b> あるいは <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b> 秘密鍵を使うときに必須となるパスワード。   cURL 7.16.1 で追加されました。    <b><code>CURLOPT_KRB4LEVEL</code></b>  KRB4（Kerberos 4）セキュリティレベル。以下の値のいずれか （セキュリティの低い順です）が指定可能です。 <i>"clear"</i>、 <i>"safe"</i>、 <i>"confidential"</i>、 <i>"private"</i>。 文字列がこれらのどれでもなかった場合は、 <i>"private"</i> が使用されます。このオプションを <b><code>NULL</code></b> にすると KRB4 セキュリティを無効にします。現時点では、KRB4 セキュリティは FTP 転送にのみ使用可能です。      <b><code>CURLOPT_LOGIN_OPTIONS</code></b>  Can be used to set protocol specific login options, such as the preferred authentication mechanism via "AUTH=NTLM" or "AUTH=&#42;", and should be used in conjunction with the <b><code>CURLOPT_USERNAME</code></b> option.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PINNEDPUBLICKEY</code></b>  Set the pinned public key. The string can be the file name of your pinned public key. The file format expected is "PEM" or "DER". The string can also be any number of base64 encoded sha256 hashes preceded by "sha256//" and separated by ";".   Added in cURL 7.39.0. Available since PHP 7.0.7.    <b><code>CURLOPT_POSTFIELDS</code></b>   HTTP "POST" で送信するすべてのデータ。 ファイルを送信するには、ファイル名の先頭に <i>@</i> をつけてフルパスを指定します。ファイルタイプを明示的に指定するには、ファイル名の後に '<i>;type=mimetype</i>' 形式で続けます。 このパラメータは '<i>para1=val1&amp;para2=val2&amp;...</i>' のように url エンコードされた文字列形式で渡すこともできますし、 フィールド名をキー、データを値とする配列で渡すこともできます。 <code>value</code> が配列の場合、 <i>Content-Type</i> ヘッダには <i>multipart/form-data</i> を設定します。   PHP 5.2.0 以降、このオプションに <i>@</i> プレフィックスつきでファイルを渡したときは <code>value</code> が配列でなければならなくなりました。   PHP 5.5.0 以降、<i>@</i> プレフィックスは非推奨になりました。 また、ファイルを CURLFile で送信できるようになりました。 <i>@</i> プレフィックスを無効化して、 <i>@</i> で始まる値を安全に渡せるようにするには、 <b><code>CURLOPT_SAFE_UPLOAD</code></b> オプションを <b><code>TRUE</code></b> と設定します。       <b><code>CURLOPT_PRIVATE</code></b>  この cURL ハンドルに関連づけるデータ。ここで関連づけたデータは、 <code>curl_getinfo()</code> の <b><code>CURLINFO_PRIVATE</code></b> オプションで取得できます。 cURL はデータを一切加工しません。 cURL マルチハンドルを使う場合は一般的に、この値が cURL ハンドルを特定する一意なキーとなります。   cURL 7.10.3 で追加されました。    <b><code>CURLOPT_PROXY</code></b>  リクエストを経由させる HTTP プロキシ。      <b><code>CURLOPT_PROXY_SERVICE_NAME</code></b>  The proxy authentication service name.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PROXYUSERPWD</code></b>  プロキシに接続するためのユーザー名とパスワード。 <i>"[username]:[password]"</i> 形式で指定します。      <b><code>CURLOPT_RANDOM_FILE</code></b>  使用するファイル名を、SSL の乱数生成器を使用して作成します。      <b><code>CURLOPT_RANGE</code></b>  取得するデータの範囲を <i>"X-Y"</i> 形式で指定します。X あるいは Y は省略可能です。 HTTP 転送では、いくつかの範囲をカンマで区切った <i>"X-Y,N-M"</i> のような形式もサポートしています。      <b><code>CURLOPT_REFERER</code></b>  HTTP リクエストで使用される <i>"Referer: "</i> ヘッダの内容。      <b><code>CURLOPT_SERVICE_NAME</code></b>  The authentication service name.   Added in cURL 7.43.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</code></b>  32 桁の十六進文字列。この文字列は、リモートホストの公開鍵の MD5 チェックサムでなければなりません。 md5sum がマッチしない限り、libcurl はホストとの接続を拒否します。 このオプションは、SCP および SFTP でのみ有効です。   cURL 7.17.1 で追加されました。    <b><code>CURLOPT_SSH_PUBLIC_KEYFILE</code></b>  公開鍵のファイル名。指定しなかった場合、libcurl はデフォルトの場所を探します。デフォルトは、 環境変数 HOME が設定されていれば $HOME/.ssh/id_dsa.pub、設定されていなければ カレントディレクトリの "id_dsa.pub" です。   cURL 7.16.1 で追加されました。    <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b>  秘密鍵のファイル名。指定しなかった場合、libcurl はデフォルトの場所を探します。デフォルトは、 環境変数 HOME が設定されていれば $HOME/.ssh/id_dsa、設定されていなければ カレントディレクトリの "id_dsa" です。 ファイルがパスワードで保護されている場合は、パスワードを <b><code>CURLOPT_KEYPASSWD</code></b> に設定します。   cURL 7.16.1 で追加されました。    <b><code>CURLOPT_SSL_CIPHER_LIST</code></b>  SSL で使用する暗号のリスト。例えば <i>RC4-SHA</i> および <i>TLSv1</i> が 使用可能です。      <b><code>CURLOPT_SSLCERT</code></b>  PEM フォーマットの証明書を含むファイルの名前。      <b><code>CURLOPT_SSLCERTPASSWD</code></b>  <b><code>CURLOPT_SSLCERT</code></b> 証明書を使用する際に必要なパスワード。      <b><code>CURLOPT_SSLCERTTYPE</code></b>  証明書の形式。サポートされるフォーマットは <i>"PEM"</i>（デフォルト）、<i>"DER"</i> および <i>"ENG"</i> です。   cURL 7.9.3 で追加されました。    <b><code>CURLOPT_SSLENGINE</code></b>  <b><code>CURLOPT_SSLKEY</code></b> で指定した SSL 秘密鍵の 暗号化エンジンの ID 。      <b><code>CURLOPT_SSLENGINE_DEFAULT</code></b>  非対称暗号化で使用する暗号化エンジンの ID 。      <b><code>CURLOPT_SSLKEY</code></b>  SSL 秘密鍵を含むファイルの名前。      <b><code>CURLOPT_SSLKEYPASSWD</code></b>  <b><code>CURLOPT_SSLKEY</code></b> で指定した SSL 秘密鍵を 使用するために必要なパスワード。  <p><b>注意</b>:</p> <p>このオプションには重要なパスワードが含まれます。PHP スクリプトを 安全な状態におくことを忘れないでください。</p>       <b><code>CURLOPT_SSLKEYTYPE</code></b>  <b><code>CURLOPT_SSLKEY</code></b> で指定した SSL 秘密鍵の 形式。サポートされる型は以下のとおりです。 <i>"PEM"</i>（デフォルト）、<i>"DER"</i> および <i>"ENG"</i> 。      <b><code>CURLOPT_UNIX_SOCKET_PATH</code></b>  Enables the use of Unix domain sockets as connection endpoint and sets the path to the given <code>string</code>.   Added in cURL 7.40.0. Available since PHP 7.0.7.    <b><code>CURLOPT_URL</code></b>  取得する URL 。<code>curl_init()</code> でセッションを 初期化する際に指定することも可能です。      <b><code>CURLOPT_USERAGENT</code></b>  HTTP リクエストで使用される <i>"User-Agent: "</i> ヘッダの内容。      <b><code>CURLOPT_USERNAME</code></b>  The user name to use in authentication.   Added in cURL 7.19.1. Available since PHP 5.5.0.    <b><code>CURLOPT_USERPWD</code></b>  接続に使用するユーザー名とパスワード。 <i>"[username]:[password]"</i> 形式で指定します。      <b><code>CURLOPT_XOAUTH2_BEARER</code></b>  Specifies the OAuth 2.0 access token.   Added in cURL 7.33.0. Available since PHP 7.0.7.     <p><code>value</code> には、 <code>option</code> の以下の値に関して 配列を指定する必要があります。</p>   オプション  <code>value</code> への設定値 注記     <b><code>CURLOPT_CONNECT_TO</code></b>  Connect to a specific host and port instead of the URL's host and port. Accepts an array of strings with the format <i>HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT</i>.   Added in cURL 7.49.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP200ALIASES</code></b>  エラーではなく正常な応答として扱われる、HTTP 200 レスポンスの配列。   cURL 7.10.3 で追加されました。    <b><code>CURLOPT_HTTPHEADER</code></b>  設定する HTTP ヘッダフィールドの配列。 <code> array('Content-type: text/plain', 'Content-length: 100') </code> 形式。      <b><code>CURLOPT_POSTQUOTE</code></b>  FTP リクエストの実行後に、サーバー上で実行する FTP コマンドの配列。      <b><code>CURLOPT_PROXYHEADER</code></b>  An array of custom HTTP headers to pass to proxies.   Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_QUOTE</code></b>  FTP リクエストの前にサーバー上で実行する FTP コマンドの配列。       <p><code>value</code> はストリームリソース（例えば <code>fopen()</code> が作成するもの）であり、以下の <code>option</code> パラメータに設定します。</p>   オプション  <code>value</code> に設定する内容     <b><code>CURLOPT_FILE</code></b>  転送内容が書き込まれるファイル。デフォルトは <i>STDOUT</i> （ブラウザウィンドウ）。    <b><code>CURLOPT_INFILE</code></b>  アップロード時に転送内容を読み込むファイル。    <b><code>CURLOPT_STDERR</code></b>  <i>STDERR</i> の代わりにエラーを出力する場所。    <b><code>CURLOPT_WRITEHEADER</code></b>  転送のヘッダ部分が書き込まれるファイル。     <p><code>value</code> には、 <code>option</code> の以下の値に関して 有効な関数あるいはクロージャの名前を指定する必要があります。</p>   オプション  <code>value</code> への設定値     <b><code>CURLOPT_HEADERFUNCTION</code></b>  二つのパラメータをとるコールバック。 最初のパラメータは CURL リソースで、2 番目は書き込む ヘッダデータの文字列です。このコールバック関数を使用するにあたり、 ヘッダデータを書き込む処理を実装するのはあなたの役目となります。 書き込んだデータのバイト数を返します。    <b><code>CURLOPT_PASSWDFUNCTION</code></b>  三つのパラメータをとるコールバック。 最初のパラメータは CURL リソースで、2 番目はパスワード プロンプトの文字列、そして 3 番目はパスワードの最大長です。 入力されたパスワードを文字列で返します。    <b><code>CURLOPT_PROGRESSFUNCTION</code></b>  <p>五つのパラメータをとるコールバック。 最初のパラメータは cURL 利ソールで、2 番目はこの転送でダウンロードしようとしている総バイト数、 3 番目はこれまでにダウンロードしたバイト数、4 番目はこの転送でアップロードしようとしている総バイト数、 そして 5 番目はこれまでにアップロードしたバイト数です。</p>  <p><b>注意</b>:</p> <p>このコールバックが呼ばれるのは、<b><code>CURLOPT_NOPROGRESS</code></b> が <b><code>FALSE</code></b> の場合だけです。</p>  <p>ゼロ以外の値を返すと、転送を強制終了できます。このとき、この転送にはエラー <b><code>CURLE_ABORTED_BY_CALLBACK</code></b> が設定されます。</p>    <b><code>CURLOPT_READFUNCTION</code></b>  三つのパラメータをとるコールバック。 最初のパラメータは CURL リソースで、2 番目は <b><code>CURLOPT_INFILE</code></b> で cURL に渡したストリームリソース、 そして最後が読み込むデータの最大量です。 コールバックは、要求したデータ量以下の長さの文字列を返さなければなりません。 一般的には、渡されたストリームリソースから読み込んだデータを返します。 <i>EOF</i> を伝えるには空文字列を返さなければなりません。    <b><code>CURLOPT_WRITEFUNCTION</code></b>  二つのパラメータをとるコールバック。 最初のパラメータは CURL リソースで、2 番目は書き込む データの文字列です。データの保存には、 このコールバック関数を使わなければなりません。 書き込んだデータの正確なバイト数を返す必要があります。 返さなければ、エラーで転送が異常終了します。     <p>その他の値</p>   オプション  <code>value</code> への設定値     <b><code>CURLOPT_SHARE</code></b>  <code>curl_share_init()</code> の結果。 この cURL ハンドルに、共有ハンドルからのデータを使わせるようにします。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-setopt.php
 * @see curl_setopt_array()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function curl_setopt($ch, int $option, $value): bool {}

/**
 * CURL 転送用の複数のオプションを設定する
 * <p>cURL セッション用の複数のオプションを設定します。 この関数が便利なのは大量の cURL オプションを設定する場合で、 何度も繰り返して <code>curl_setopt()</code> をコールせずにすみます。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param array $options <p>設定するオプションとその値を指定した配列。キーとして使用できるのは、 有効な <code>curl_setopt()</code> 定数か、 その定数に対応する整数値だけです。</p>
 * @return bool <p>すべてのオプションがうまく設定できた場合に <b><code>TRUE</code></b> を返します。 うまく設定できないオプションがあった時点で即時に <b><code>FALSE</code></b> が返され、<code>options</code> 配列に含まれるそれ以降のオプションは無視されます。</p>
 * @link http://php.net/manual/ja/function.curl-setopt-array.php
 * @see curl_setopt()
 * @since PHP 5 >= 5.1.3, PHP 7
 */
function curl_setopt_array($ch, array $options): bool {}

/**
 * cURL 共有ハンドルを閉じる
 * <p>cURL 共有ハンドルを閉じ、すべてのリソースを解放します。</p>
 * @param resource $sh <p><code>curl_share_init()</code> が返す cURL 共有ハンドル。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.curl-share-close.php
 * @see curl_share_init()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_share_close($sh): void {}

/**
 * Return the last share curl error number
 * <p>Return an integer containing the last share curl error number.</p>
 * @param resource $sh <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
 * @return int <p>Returns an integer containing the last share curl error number, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.curl-share-errno.php
 * @see curl_errno()
 * @since PHP 7 >= 7.1.0
 */
function curl_share_errno($sh): int {}

/**
 * curl 共有ハンドルを初期化する
 * <p>複数の cURL ハンドルで、データを共有できるようにします。</p>
 * @return resource <p>"cURL Share Handle" 型のリソースを返します。</p>
 * @link http://php.net/manual/ja/function.curl-share-init.php
 * @see curl_share_setopt(), curl_share_close()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_share_init() {}

/**
 * cURL 共有ハンドルのオプションを設定する
 * <p>指定した cURL 共有ハンドルに、オプションを設定します。</p>
 * @param resource $sh <p><code>curl_share_init()</code> が返す cURL 共有ハンドル。</p>
 * @param int $option <p></p>   オプション 説明     <b><code>CURLSHOPT_SHARE</code></b>  共有させるデータの種類を指定します。    <b><code>CURLSHOPT_UNSHARE</code></b>  共有させないデータの種類を指定します。
 * @param string $value <p></p>   値 説明     <b><code>CURL_LOCK_DATA_COOKIE</code></b>  クッキーのデータを共有する。    <b><code>CURL_LOCK_DATA_DNS</code></b>  DNS キャッシュを共有する。cURL マルチハンドルを使うときには、 同じマルチハンドルに追加されたすべてのハンドルがデフォルトで DNS キャッシュを共有することに注意しましょう。    <b><code>CURL_LOCK_DATA_SSL_SESSION</code></b>  SSL セッション ID を共有し、同一サーバーへの再接続時の SSL ハンドシェイクの所要時間を削減する。 同じハンドル内では、デフォルトで SSL セッション ID が再利用されることに注意しましょう。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-share-setopt.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_share_setopt($sh, int $option, string $value): bool {}

/**
 * Return string describing the given error code
 * <p>Returns a text error message describing the given error code.</p>
 * @param int $errornum <p>One of the » cURL error codes constants.</p>
 * @return string <p>Returns error description or <b><code>NULL</code></b> for invalid error code.</p>
 * @link http://php.net/manual/ja/function.curl-share-strerror.php
 * @see curl_share_errno(), curl_strerror()
 * @since PHP 7 >= 7.1.0
 */
function curl_share_strerror(int $errornum): string {}

/**
 * エラーコードの説明を返す
 * <p>指定したエラーコードに対応するエラーメッセージを返します。</p>
 * @param int $errornum <p>» cURL エラーコード 定数のいずれか。</p>
 * @return string <p>エラーの説明を返します。無効なエラーコードを指定した場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-strerror.php
 * @see curl_errno(), curl_error()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_strerror(int $errornum): string {}

/**
 * URL エンコードされた文字列をデコードする
 * <p>この関数は、URL エンコードされた文字列をデコードします。</p>
 * @param resource $ch <p><code>curl_init()</code> が返す cURL ハンドル。</p>
 * @param string $str <p>デコード対象の文字列。</p>
 * @return string <p>デコードした文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.curl-unescape.php
 * @see curl_escape(), urlencode(), urldecode(), rawurlencode(), rawurldecode()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function curl_unescape($ch, string $str): string {}

/**
 * cURL のバージョンを返す
 * <p>cURL のバージョンについての情報を返します。</p>
 * @param int $age
 * @return array <p>以下の要素からなる連想配列を返します。</p>   インデックス 値の説明     version_number cURL の 24 ビットのバージョン番号   version cURL バージョン番号を表す文字列   ssl_version_number OpenSSL の 24 ビットのバージョン番号   ssl_version OpenSSL バージョン番号を表す文字列   libz_version zlib バージョンを表す文字列   host cURL をビルドしたホストについての情報   age     features 定数 <i>CURL_VERSION_XXX</i> のビットマスク   protocols cURL がサポートするプロトコル名の配列
 * @link http://php.net/manual/ja/function.curl-version.php
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function curl_version(int $age = CURLVERSION_NOW): array {}

define('CURL_HTTP_VERSION_1_0', null);

define('CURL_HTTP_VERSION_1_1', null);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 */
define('CURL_HTTP_VERSION_2', null);

/**
 * PHP 7.0.7 および cURL 7.49.0 以降で使用可能です。
 */
define('CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE', null);

/**
 * PHP 7.0.7 および cURL 7.47.0 以降で使用可能です。
 */
define('CURL_HTTP_VERSION_2TLS', null);

define('CURL_HTTP_VERSION_NONE', null);

define('CURL_NETRC_IGNORED', null);

define('CURL_NETRC_OPTIONAL', null);

define('CURL_NETRC_REQUIRED', null);

/**
 * PHP 7.1.0 および cURL 7.44.0 以降で使用可能です。
 */
define('CURL_PUSH_DENY', null);

/**
 * PHP 7.1.0 および cURL 7.44.0 以降で使用可能です。
 */
define('CURL_PUSH_OK', null);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 */
define('CURL_REDIR_POST_301', null);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 */
define('CURL_REDIR_POST_302', null);

/**
 * PHP 7.0.7 および cURL 7.25.1 以降で使用可能です。
 */
define('CURL_REDIR_POST_303', null);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 */
define('CURL_REDIR_POST_ALL', null);

define('CURL_SSLVERSION_DEFAULT', null);

define('CURL_SSLVERSION_SSLv2', null);

define('CURL_SSLVERSION_SSLv3', null);

define('CURL_SSLVERSION_TLSv1', null);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 */
define('CURL_SSLVERSION_TLSv1_0', null);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 */
define('CURL_SSLVERSION_TLSv1_1', null);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 */
define('CURL_SSLVERSION_TLSv1_2', null);

define('CURL_TIMECOND_IFMODSINCE', null);

define('CURL_TIMECOND_IFUNMODSINCE', null);

define('CURL_TIMECOND_LASTMOD', null);

/**
 * PHP 5.5.24、PHP 5.6.8 および cURL 7.33.0 以降で使用可能です。
 */
define('CURL_VERSION_HTTP2', null);

define('CURL_VERSION_IPV6', null);

define('CURL_VERSION_KERBEROS4', null);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 */
define('CURL_VERSION_KERBEROS5', null);

define('CURL_VERSION_LIBZ', null);

/**
 * PHP 7.0.7 および cURL 7.47.0 以降で使用可能です。
 */
define('CURL_VERSION_PSL', null);

define('CURL_VERSION_SSL', null);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 */
define('CURL_VERSION_UNIX_SOCKETS', null);

/**
 * PHP の configure 時に <b>--with-curlwrappers</b> を指定しているかどうか。PHP 5.5.0 で PECL に移動しました。
 */
define('CURL_WRAPPERS_ENABLED', null);

define('CURLAUTH_ANY', null);

define('CURLAUTH_ANYSAFE', null);

define('CURLAUTH_BASIC', null);

define('CURLAUTH_DIGEST', null);

define('CURLAUTH_GSSNEGOTIATE', null);

/**
 * PHP 7.0.7 および cURL 7.38.0 以降で使用可能です。
 */
define('CURLAUTH_NEGOTIATE', null);

define('CURLAUTH_NTLM', null);

/**
 * PHP 7.0.7 および cURL 7.22.0 以降で使用可能です。
 */
define('CURLAUTH_NTLM_WB', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLCLOSEPOLICY_CALLBACK', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLCLOSEPOLICY_LEAST_RECENTLY_USED', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLCLOSEPOLICY_LEAST_TRAFFIC', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLCLOSEPOLICY_OLDEST', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLCLOSEPOLICY_SLOWEST', null);

define('CURLE_ABORTED_BY_CALLBACK', null);

define('CURLE_BAD_CALLING_ORDER', null);

define('CURLE_BAD_CONTENT_ENCODING', null);

define('CURLE_BAD_FUNCTION_ARGUMENT', null);

define('CURLE_BAD_PASSWORD_ENTERED', null);

define('CURLE_COULDNT_CONNECT', null);

define('CURLE_COULDNT_RESOLVE_HOST', null);

define('CURLE_COULDNT_RESOLVE_PROXY', null);

define('CURLE_FAILED_INIT', null);

define('CURLE_FILE_COULDNT_READ_FILE', null);

define('CURLE_FILESIZE_EXCEEDED', null);

define('CURLE_FTP_ACCESS_DENIED', null);

define('CURLE_FTP_BAD_DOWNLOAD_RESUME', null);

define('CURLE_FTP_CANT_GET_HOST', null);

define('CURLE_FTP_CANT_RECONNECT', null);

define('CURLE_FTP_COULDNT_GET_SIZE', null);

define('CURLE_FTP_COULDNT_RETR_FILE', null);

define('CURLE_FTP_COULDNT_SET_ASCII', null);

define('CURLE_FTP_COULDNT_SET_BINARY', null);

define('CURLE_FTP_COULDNT_STOR_FILE', null);

define('CURLE_FTP_COULDNT_USE_REST', null);

define('CURLE_FTP_PORT_FAILED', null);

define('CURLE_FTP_QUOTE_ERROR', null);

define('CURLE_FTP_SSL_FAILED', null);

define('CURLE_FTP_USER_PASSWORD_INCORRECT', null);

define('CURLE_FTP_WEIRD_227_FORMAT', null);

define('CURLE_FTP_WEIRD_PASS_REPLY', null);

define('CURLE_FTP_WEIRD_PASV_REPLY', null);

define('CURLE_FTP_WEIRD_SERVER_REPLY', null);

define('CURLE_FTP_WEIRD_USER_REPLY', null);

define('CURLE_FTP_WRITE_ERROR', null);

define('CURLE_FUNCTION_NOT_FOUND', null);

define('CURLE_GOT_NOTHING', null);

define('CURLE_HTTP_NOT_FOUND', null);

define('CURLE_HTTP_PORT_FAILED', null);

define('CURLE_HTTP_POST_ERROR', null);

define('CURLE_HTTP_RANGE_ERROR', null);

define('CURLE_LDAP_CANNOT_BIND', null);

define('CURLE_LDAP_INVALID_URL', null);

define('CURLE_LDAP_SEARCH_FAILED', null);

define('CURLE_LIBRARY_NOT_FOUND', null);

define('CURLE_MALFORMAT_USER', null);

define('CURLE_OBSOLETE', null);

define('CURLE_OK', null);

define('CURLE_OPERATION_TIMEOUTED', null);

define('CURLE_OUT_OF_MEMORY', null);

define('CURLE_PARTIAL_FILE', null);

define('CURLE_READ_ERROR', null);

define('CURLE_RECV_ERROR', null);

define('CURLE_SEND_ERROR', null);

define('CURLE_SHARE_IN_USE', null);

/**
 * PHP 5.3.0 および cURL 7.16.1 以降で使用可能です。
 */
define('CURLE_SSH', null);

define('CURLE_SSL_CACERT', null);

define('CURLE_SSL_CERTPROBLEM', null);

define('CURLE_SSL_CIPHER', null);

define('CURLE_SSL_CONNECT_ERROR', null);

define('CURLE_SSL_ENGINE_NOTFOUND', null);

define('CURLE_SSL_ENGINE_SETFAILED', null);

define('CURLE_SSL_PEER_CERTIFICATE', null);

define('CURLE_TELNET_OPTION_SYNTAX', null);

define('CURLE_TOO_MANY_REDIRECTS', null);

define('CURLE_UNKNOWN_TELNET_OPTION', null);

define('CURLE_UNSUPPORTED_PROTOCOL', null);

define('CURLE_URL_MALFORMAT', null);

define('CURLE_URL_MALFORMAT_USER', null);

define('CURLE_WRITE_ERROR', null);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 */
define('CURLFTP_CREATE_DIR', null);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 */
define('CURLFTP_CREATE_DIR_NONE', null);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 */
define('CURLFTP_CREATE_DIR_RETRY', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLFTPAUTH_DEFAULT', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLFTPAUTH_SSL', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLFTPAUTH_TLS', null);

/**
 * PHP 5.2.0 以降で使用可能です。
 */
define('CURLFTPSSL_ALL', null);

/**
 * PHP 5.2.0 以降で使用可能です。
 */
define('CURLFTPSSL_CONTROL', null);

/**
 * PHP 5.2.0 以降で使用可能です。
 */
define('CURLFTPSSL_NONE', null);

/**
 * PHP 5.2.0 以降で使用可能です。
 */
define('CURLFTPSSL_TRY', null);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 */
define('CURLHEADER_SEPARATE', null);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 */
define('CURLHEADER_UNIFIED', null);

define('CURLINFO_CONNECT_TIME', null);

define('CURLINFO_CONTENT_LENGTH_DOWNLOAD', null);

define('CURLINFO_CONTENT_LENGTH_UPLOAD', null);

define('CURLINFO_CONTENT_TYPE', null);

define('CURLINFO_EFFECTIVE_URL', null);

define('CURLINFO_FILETIME', null);

/**
 * PHP 5.1.3 以降で使用可能です。
 */
define('CURLINFO_HEADER_OUT', null);

define('CURLINFO_HEADER_SIZE', null);

define('CURLINFO_HTTP_CODE', null);

/**
 * PHP 5.4.7 以降で使用可能です。
 */
define('CURLINFO_LOCAL_IP', null);

/**
 * PHP 5.4.7 以降で使用可能です。
 */
define('CURLINFO_LOCAL_PORT', null);

define('CURLINFO_NAMELOOKUP_TIME', null);

define('CURLINFO_PRETRANSFER_TIME', null);

/**
 * PHP 5.4.7 以降で使用可能です。
 */
define('CURLINFO_PRIMARY_IP', null);

/**
 * PHP 5.4.7 以降で使用可能です。
 */
define('CURLINFO_PRIMARY_PORT', null);

/**
 * PHP 5.2.4 以降で使用可能です。
 */
define('CURLINFO_PRIVATE', null);

define('CURLINFO_REDIRECT_COUNT', null);

define('CURLINFO_REDIRECT_TIME', null);

/**
 * PHP 5.3.7 以降で使用可能です。
 */
define('CURLINFO_REDIRECT_URL', null);

define('CURLINFO_REQUEST_SIZE', null);

define('CURLINFO_SIZE_DOWNLOAD', null);

define('CURLINFO_SIZE_UPLOAD', null);

define('CURLINFO_SPEED_DOWNLOAD', null);

define('CURLINFO_SPEED_UPLOAD', null);

define('CURLINFO_SSL_VERIFYRESULT', null);

define('CURLINFO_STARTTRANSFER_TIME', null);

define('CURLINFO_TOTAL_TIME', null);

define('CURLM_BAD_EASY_HANDLE', null);

define('CURLM_BAD_HANDLE', null);

define('CURLM_CALL_MULTI_PERFORM', null);

define('CURLM_INTERNAL_ERROR', null);

define('CURLM_OK', null);

define('CURLM_OUT_OF_MEMORY', null);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 */
define('CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE', null);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 */
define('CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE', null);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 */
define('CURLMOPT_MAX_HOST_CONNECTIONS', null);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 */
define('CURLMOPT_MAX_PIPELINE_LENGTH', null);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 */
define('CURLMOPT_MAX_TOTAL_CONNECTIONS', null);

/**
 * PHP 5.5.0 および cURL 7.16.3 以降で使用可能です。
 */
define('CURLMOPT_MAXCONNECTS', null);

/**
 * PHP 5.5.0 および cURL 7.16.0 以降で使用可能です。
 */
define('CURLMOPT_PIPELINING', null);

/**
 * PHP 7.1.0 および cURL 7.44.0 以降で使用可能です。
 */
define('CURLMOPT_PUSHFUNCTION', null);

define('CURLMSG_DONE', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLOPT_AUTOREFERER', null);

define('CURLOPT_BINARYTRANSFER', null);

define('CURLOPT_BUFFERSIZE', null);

define('CURLOPT_CAINFO', null);

define('CURLOPT_CAPATH', null);

/**
 * PHP 5.6.0 で削除されました。
 */
define('CURLOPT_CLOSEPOLICY', null);

/**
 * PHP 7.0.7 および cURL 7.49.0 以降で使用可能です。
 */
define('CURLOPT_CONNECT_TO', null);

define('CURLOPT_CONNECTTIMEOUT', null);

define('CURLOPT_CONNECTTIMEOUT_MS', null);

define('CURLOPT_COOKIE', null);

define('CURLOPT_COOKIEFILE', null);

define('CURLOPT_COOKIEJAR', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLOPT_COOKIESESSION', null);

define('CURLOPT_CRLF', null);

define('CURLOPT_CUSTOMREQUEST', null);

/**
 * PHP 7.0.7 および cURL 7.45.0 以降で使用可能です。
 */
define('CURLOPT_DEFAULT_PROTOCOL', null);

define('CURLOPT_DNS_CACHE_TIMEOUT', null);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 */
define('CURLOPT_DNS_INTERFACE', null);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 */
define('CURLOPT_DNS_LOCAL_IP4', null);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 */
define('CURLOPT_DNS_LOCAL_IP6', null);

define('CURLOPT_DNS_USE_GLOBAL_CACHE', null);

define('CURLOPT_EGDSOCKET', null);

define('CURLOPT_ENCODING', null);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 */
define('CURLOPT_EXPECT_100_TIMEOUT_MS', null);

define('CURLOPT_FAILONERROR', null);

define('CURLOPT_FILE', null);

define('CURLOPT_FILETIME', null);

/**
 * open_basedir あるいは safe_mode が有効な場合は、 この定数は使用できません。
 */
define('CURLOPT_FOLLOWLOCATION', null);

define('CURLOPT_FORBID_REUSE', null);

define('CURLOPT_FRESH_CONNECT', null);

define('CURLOPT_FTP_CREATE_MISSING_DIRS', null);

/**
 * PHP 5.2.0 以降で使用可能です。
 */
define('CURLOPT_FTP_SSL', null);

define('CURLOPT_FTP_USE_EPRT', null);

define('CURLOPT_FTP_USE_EPSV', null);

define('CURLOPT_FTPAPPEND', null);

define('CURLOPT_FTPASCII', null);

define('CURLOPT_FTPLISTONLY', null);

define('CURLOPT_FTPPORT', null);

/**
 * PHP 5.1.0 以降で使用可能です。
 */
define('CURLOPT_FTPSSLAUTH', null);

define('CURLOPT_HEADER', null);

define('CURLOPT_HEADERFUNCTION', null);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 */
define('CURLOPT_HEADEROPT', null);

define('CURLOPT_HTTP200ALIASES', null);

define('CURLOPT_HTTP_VERSION', null);

define('CURLOPT_HTTPAUTH', null);

define('CURLOPT_HTTPGET', null);

define('CURLOPT_HTTPHEADER', null);

define('CURLOPT_HTTPPROXYTUNNEL', null);

define('CURLOPT_INFILE', null);

define('CURLOPT_INFILESIZE', null);

define('CURLOPT_INTERFACE', null);

define('CURLOPT_KEYPASSWD', null);

define('CURLOPT_KRB4LEVEL', null);

/**
 * PHP 7.0.7 および cURL 7.34.0 以降で使用可能です。
 */
define('CURLOPT_LOGIN_OPTIONS', null);

define('CURLOPT_LOW_SPEED_LIMIT', null);

define('CURLOPT_LOW_SPEED_TIME', null);

/**
 * PHP 5.4.0 および cURL 7.15.5 以降で使用可能です。
 */
define('CURLOPT_MAX_RECV_SPEED_LARGE', null);

/**
 * PHP 5.4.0 および cURL 7.15.5 以降で使用可能です。
 */
define('CURLOPT_MAX_SEND_SPEED_LARGE', null);

define('CURLOPT_MAXCONNECTS', null);

define('CURLOPT_MAXREDIRS', null);

define('CURLOPT_MUTE', null);

define('CURLOPT_NETRC', null);

define('CURLOPT_NOBODY', null);

define('CURLOPT_NOPROGRESS', null);

define('CURLOPT_NOSIGNAL', null);

define('CURLOPT_PASSWDFUNCTION', null);

/**
 * PHP 7.0.7 および cURL 7.42.0 以降で使用可能です。
 */
define('CURLOPT_PATH_AS_IS', null);

/**
 * PHP 7.0.7 および cURL 7.39.0 以降で使用可能です。
 */
define('CURLOPT_PINNEDPUBLICKEY', null);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLOPT_PIPEWAIT', null);

define('CURLOPT_PORT', null);

define('CURLOPT_POST', null);

define('CURLOPT_POSTFIELDS', null);

define('CURLOPT_POSTQUOTE', null);

/**
 * PHP 5.2.4 以降で使用可能です。
 */
define('CURLOPT_PRIVATE', null);

/**
 * PHP 5.3.0 以降で使用可能です。
 */
define('CURLOPT_PROGRESSFUNCTION', null);

define('CURLOPT_PROXY', null);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLOPT_PROXY_SERVICE_NAME', null);

define('CURLOPT_PROXYAUTH', null);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 */
define('CURLOPT_PROXYHEADER', null);

define('CURLOPT_PROXYPORT', null);

/**
 * cURL 7.10 以降で使用可能です。
 */
define('CURLOPT_PROXYTYPE', null);

define('CURLOPT_PROXYUSERPWD', null);

define('CURLOPT_PUT', null);

define('CURLOPT_QUOTE', null);

define('CURLOPT_RANDOM_FILE', null);

define('CURLOPT_RANGE', null);

define('CURLOPT_READFUNCTION', null);

define('CURLOPT_REFERER', null);

define('CURLOPT_RESUME_FROM', null);

define('CURLOPT_RETURNTRANSFER', null);

/**
 * PHP 7.0.7 および cURL 7.31.0 以降で使用可能です。
 */
define('CURLOPT_SASL_IR', null);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLOPT_SERVICE_NAME', null);

define('CURLOPT_SSH_AUTH_TYPES', null);

define('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5', null);

define('CURLOPT_SSH_PRIVATE_KEYFILE', null);

define('CURLOPT_SSH_PUBLIC_KEYFILE', null);

define('CURLOPT_SSL_CIPHER_LIST', null);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 */
define('CURLOPT_SSL_ENABLE_ALPN', null);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 */
define('CURLOPT_SSL_ENABLE_NPN', null);

/**
 * PHP 7.0.7 および cURL 7.42.0 以降で使用可能です。
 */
define('CURLOPT_SSL_FALSESTART', null);

/**
 * PHP 5.5.0 および cURL 7.25.0 以降で使用可能です。
 */
define('CURLOPT_SSL_OPTIONS', null);

define('CURLOPT_SSL_VERIFYHOST', null);

define('CURLOPT_SSL_VERIFYPEER', null);

/**
 * PHP 7.0.7 および cURL 7.41.0 以降で使用可能です。
 */
define('CURLOPT_SSL_VERIFYSTATUS', null);

define('CURLOPT_SSLCERT', null);

define('CURLOPT_SSLCERTPASSWD', null);

define('CURLOPT_SSLCERTTYPE', null);

define('CURLOPT_SSLENGINE', null);

define('CURLOPT_SSLENGINE_DEFAULT', null);

define('CURLOPT_SSLKEY', null);

define('CURLOPT_SSLKEYPASSWD', null);

define('CURLOPT_SSLKEYTYPE', null);

define('CURLOPT_SSLVERSION', null);

define('CURLOPT_STDERR', null);

/**
 * PHP 7.0.7 および cURL 7.46.0 以降で使用可能です。
 */
define('CURLOPT_STREAM_WEIGHT', null);

/**
 * PHP 7.0.7 および cURL 7.49.0 以降で使用可能です。
 */
define('CURLOPT_TCP_FASTOPEN', null);

/**
 * PHP 5.2.1 以降で使用可能です。
 */
define('CURLOPT_TCP_NODELAY', null);

/**
 * PHP 7.0.7 および cURL 7.48.0 以降で使用可能です。
 */
define('CURLOPT_TFTP_NO_OPTIONS', null);

define('CURLOPT_TIMECONDITION', null);

define('CURLOPT_TIMEOUT', null);

define('CURLOPT_TIMEOUT_MS', null);

define('CURLOPT_TIMEVALUE', null);

define('CURLOPT_TRANSFERTEXT', null);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 */
define('CURLOPT_UNIX_SOCKET_PATH', null);

define('CURLOPT_UNRESTRICTED_AUTH', null);

define('CURLOPT_UPLOAD', null);

define('CURLOPT_URL', null);

define('CURLOPT_USERAGENT', null);

/**
 * PHP 5.5.0 および cURL 7.19.1 以降で使用可能です。
 */
define('CURLOPT_USERNAME', null);

define('CURLOPT_USERPWD', null);

define('CURLOPT_VERBOSE', null);

define('CURLOPT_WRITEFUNCTION', null);

define('CURLOPT_WRITEHEADER', null);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 */
define('CURLOPT_XOAUTH2_BEARER', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_ALL', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_CONT', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_RECV', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_RECV_CONT', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_SEND', null);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPAUSE_SEND_CONT', null);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLPIPE_HTTP1', null);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLPIPE_MULTIPLEX', null);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 */
define('CURLPIPE_NOTHING', null);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 */
define('CURLPROTO_SMB', null);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 */
define('CURLPROTO_SMBS', null);

/**
 * cURL 7.10 以降で使用可能です。
 */
define('CURLPROXY_HTTP', null);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 */
define('CURLPROXY_HTTP_1_0', null);

/**
 * PHP 5.2.10 および cURL 7.10 以降で使用可能です。
 */
define('CURLPROXY_SOCKS4', null);

/**
 * PHP 5.5.23 と PHP 5.6.7 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPROXY_SOCKS4A', null);

/**
 * cURL 7.10 以降で使用可能です。
 */
define('CURLPROXY_SOCKS5', null);

/**
 * PHP 5.5.23 と PHP 5.6.7 および cURL 7.18.0 以降で使用可能です。
 */
define('CURLPROXY_SOCKS5_HOSTNAME', null);

/**
 * PHP 7.0.7 および cURL 7.28.0 以降で使用可能です。
 */
define('CURLSSH_AUTH_AGENT', null);

define('CURLSSH_AUTH_ANY', null);

define('CURLSSH_AUTH_DEFAULT', null);

define('CURLSSH_AUTH_HOST', null);

define('CURLSSH_AUTH_KEYBOARD', null);

define('CURLSSH_AUTH_NONE', null);

define('CURLSSH_AUTH_PASSWORD', null);

define('CURLSSH_AUTH_PUBLICKEY', null);

/**
 * PHP 5.5.0 および cURL 7.25.0 以降で使用可能です。
 */
define('CURLSSLOPT_ALLOW_BEAST', null);

/**
 * PHP 7.0.7 および cURL 7.44.0 以降で使用可能です。
 */
define('CURLSSLOPT_NO_REVOKE', null);

define('CURLVERSION_NOW', null);

