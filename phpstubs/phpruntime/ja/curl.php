<?php

// Start of curl v.7.0.19

/**
 * <b>CURLOPT_POSTFIELDS</b> でファイルのアップロードをするには、
 * <b>CURLFile</b> を使わなければいけません。
 * @link http://php.net/manual/ja/class.curlfile.php
 */
class CURLFile  {
	public $name;
	public $mime;
	public $postname;


	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * CURLFile オブジェクトを作る
	 * @link http://php.net/manual/ja/curlfile.construct.php
	 * @param string $filename <p>
	 * アップロードするファイルへのパス。
	 * </p>
	 * @param string $mimetype [optional] <p>
	 * ファイルの Mimetype。
	 * </p>
	 * @param string $postname [optional] <p>
	 * アップロードデータの中で使うファイルの名前。
	 * </p>
	 */
	public function __construct(string $filename, string $mimetype = null, string $postname = null) {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/curlfile.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * MIME タイプを取得する
	 * @link http://php.net/manual/ja/curlfile.getmimetype.php
	 * @return string MIME タイプを返します。
	 */
	public function getMimeType(): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * MIME タイプを設定する
	 * @link http://php.net/manual/ja/curlfile.setmimetype.php
	 * @param string $mime <p>
	 * POST データで用いる MIME タイプ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMimeType(string $mime): void {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * POST 用のファイル名を取得する
	 * @link http://php.net/manual/ja/curlfile.getpostfilename.php
	 * @return string POST 用のファイル名を返します。
	 */
	public function getPostFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * POST 用のファイル名を設定する
	 * @link http://php.net/manual/ja/curlfile.setpostfilename.php
	 * @param string $postname <p>
	 * POST データで用いるファイル名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setPostFilename(string $postname): void {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * アンシリアライズ用ハンドラ
	 * @link http://php.net/manual/ja/curlfile.wakeup.php
	 * @return void 値を返しません。
	 */
	public function __wakeup(): void {}

}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * cURL セッションを初期化する
 * @link http://php.net/manual/ja/function.curl-init.php
 * @param string $url [optional] <p>
 * <i>url</i>を指定した場合、オプション
 * CURLOPT_URL がそのパラメータの値に設定されます。関数
 * <b>curl_setopt</b> により、
 * この値をマニュアルで設定することも可能です。
 * </p>
 * <p>
 * open_basedir
 * が設定されている場合、cURL で
 * file プロトコルは使えなくなります。
 * </p>
 * @return resource 成功した場合に cURL ハンドル、エラー時に <b>FALSE</b> を返します。
 */
function curl_init(string $url = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * cURL ハンドルを、その設定も含めてコピーする
 * @link http://php.net/manual/ja/function.curl-copy-handle.php
 * @param resource $ch
 * @return resource 新しい cURL ハンドルを返します。
 */
function curl_copy_handle($ch) {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * cURL のバージョンを返す
 * @link http://php.net/manual/ja/function.curl-version.php
 * @param int $age [optional]
 * @return array 以下の要素からなる連想配列を返します。
 * <tr valign="top">
 * <td>インデックス</td>
 * <td>値の説明</td>
 * </tr>
 * <tr valign="top">
 * <td>version_number</td>
 * <td>cURL の 24 ビットのバージョン番号</td>
 * </tr>
 * <tr valign="top">
 * <td>version</td>
 * <td>cURL バージョン番号を表す文字列</td>
 * </tr>
 * <tr valign="top">
 * <td>ssl_version_number</td>
 * <td>OpenSSL の 24 ビットのバージョン番号</td>
 * </tr>
 * <tr valign="top">
 * <td>ssl_version</td>
 * <td>OpenSSL バージョン番号を表す文字列</td>
 * </tr>
 * <tr valign="top">
 * <td>libz_version</td>
 * <td>zlib バージョンを表す文字列</td>
 * </tr>
 * <tr valign="top">
 * <td>host</td>
 * <td>cURL をビルドしたホストについての情報</td>
 * </tr>
 * <tr valign="top">
 * <td>age</td>
 * <td></td>
 * </tr>
 * <tr valign="top">
 * <td>features</td>
 * <td>定数 CURL_VERSION_XXX のビットマスク</td>
 * </tr>
 * <tr valign="top">
 * <td>protocols</td>
 * <td>cURL がサポートするプロトコル名の配列</td>
 * </tr>
 */
function curl_version(int $age = CURLVERSION_NOW): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * cURL 転送用オプションを設定する
 * @link http://php.net/manual/ja/function.curl-setopt.php
 * @param resource $ch
 * @param int $option <p>
 * 設定したい CURLOPT_XXX オプション。
 * </p>
 * @param mixed $value <p>
 * <i>option</i> に設定する値。
 * </p>
 * <p>
 * <i>value</i> には、
 * <i>option</i> の以下の値に関して
 * bool 値を指定する必要があります。
 * <tr valign="top">
 * オプション</td>
 * <i>value</i> への設定値</td>
 * 注記</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_AUTOREFERER</b></td>
 * <b>TRUE</b> を設定すると、Location: によるリダイレクトを
 * たどる際には自動的に Referer: フィールドをリクエストに
 * 追加します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_BINARYTRANSFER</b></td>
 * <b>TRUE</b> を設定すると、<b>CURLOPT_RETURNTRANSFER</b>
 * が使用された場合に出力結果を何も加工せずに返します。
 * </td>
 * PHP 5.1.3 以降では、このオプションは何の効果もありません。
 * <b>CURLOPT_RETURNTRANSFER</b> を使ったときには
 * 常に出力をそのまま返すようになりました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_COOKIESESSION</b></td>
 * <b>TRUE</b> を設定すると、クッキーの "セッション" を新しく開始します。
 * 以前のセッションで読み込まれていた "セッションクッキー" は無視するよう、
 * libcurl に指示します。デフォルトでは、それがセッションクッキーであるか
 * どうかにかかわらず libcurl はすべてのクッキーを読み込んで保存します。
 * セッションクッキーとは、有効期限が指定されておらず "セッション" の間のみ
 * 有効であるクッキーのことです。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CERTINFO</b></td>
 * <b>TRUE</b> を設定すると、セキュアな転送時に SSL 証明書の情報を
 * STDERR に出力します。
 * </td>
 * cURL 7.19.1 で追加されました。
 * PHP 5.3.2 以降で使用可能です。これを使うには、<b>CURLOPT_VERBOSE</b>
 * を on にしておかなければなりません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CONNECT_ONLY</b></td>
 * <b>TRUE</b> を設定すると、プロキシの認証や接続の確立などをすべて行いますが、データは転送しません。
 * このオプションは、HTTP や SMTP そして POP3 用に実装されています。
 * </td>
 * 7.15.2 で追加されました。
 * PHP 5.5.0 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CRLF</b></td>
 * <b>TRUE</b> を設定すると、転送時に Unix 形式の改行を CRLF 形式に変換します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DNS_USE_GLOBAL_CACHE</b></td>
 * <b>TRUE</b> を設定すると、グローバル DNS キャッシュを利用します。
 * このオプションはスレッドセーフではありません。また、デフォルトで
 * 有効になっています。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FAILONERROR</b></td>
 * <b>TRUE</b> を設定すると、HTTP で 400 以上のコードが返ってきた際に
 * 処理失敗と判断します。デフォルトでは、コードの値を無視して
 * ページの内容を取得します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_FALSESTART</b></td>
 * <b>TRUE</b> にすると、TLS false start を有効にします。
 * </td>
 * cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FILETIME</b></td>
 * <b>TRUE</b> を設定すると、ドキュメントの更新日時を取得しようと試みます。
 * この値を取得するには、<b>curl_getinfo</b> で
 * <i>CURLINFO_FILETIME</i> オプションを用います。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FOLLOWLOCATION</b></td>
 * <b>TRUE</b> を設定すると、サーバーが HTTP ヘッダの一部として送ってくる
 * "Location: " ヘッダの内容をたどります
 * （これは再帰的に行われます。<b>CURLOPT_MAXREDIRS</b>
 * が指定されていない限り、送ってくる "Location: "
 * ヘッダの内容をずっとたどり続けることに注意しましょう）。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FORBID_REUSE</b></td>
 * <b>TRUE</b> を設定すると、処理が終了した際に明示的に接続を切断します。
 * 接続を再利用しません。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FRESH_CONNECT</b></td>
 * <b>TRUE</b> を設定すると、キャッシュされている接続を利用せずに
 * 新しい接続を確立します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTP_USE_EPRT</b></td>
 * <b>TRUE</b> を設定すると、FTP のダウンロードに EPRT（および LPRT）
 * を利用します。<b>FALSE</b> の場合は EPRT・LPRT を無効にして PORT
 * を利用します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTP_USE_EPSV</b></td>
 * <b>TRUE</b> を設定すると、FTP 転送の際にまず EPSV コマンドの利用を
 * 試みます。失敗した場合は PASV を利用します。<b>FALSE</b> を設定すると、
 * EPSV を無効にします。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTP_CREATE_MISSING_DIRS</b></td>
 * <b>TRUE</b> を設定すると、FTP の操作中にパスが存在しなかったときに
 * ディレクトリを作成します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTPAPPEND</b></td>
 * <b>TRUE</b> を設定すると、リモートファイルを上書きせずに追記します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TCP_NODELAY</b></td>
 * <b>TRUE</b> にすると、TCP の Nagle アルゴリズムを解除します。解除すると、小さなパケットがネットワーク上を流れる回数をできるだけ減らそうと試みます。
 * </td>
 * PHP 5.2.1 以降のバージョンで、libcurl 7.11.2 以降と組み合わせてコンパイルしたときに利用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTPASCII</b></td>
 * <b>CURLOPT_TRANSFERTEXT</b> のエイリアスです。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTPLISTONLY</b></td>
 * <b>TRUE</b> を設定すると、FTP でディレクトリ名のみ表示します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HEADER</b></td>
 * <b>TRUE</b> を設定すると、ヘッダの内容も出力します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLINFO_HEADER_OUT</b></td>
 * <b>TRUE</b> を設定すると、リクエスト文字列を追跡します。
 * </td>
 * PHP 5.1.3 以降で使用可能です。プレフィックスが <b>CURLINFO_</b>
 * となっているのは意図的なものです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTPGET</b></td>
 * <b>TRUE</b> を設定すると、HTTP のリクエスト形式を GET に戻します。
 * GET はデフォルト設定なので、リクエスト形式が変更されている
 * 場合にのみ必要となります。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTPPROXYTUNNEL</b></td>
 * <b>TRUE</b> にすると、指定された HTTP プロキシを介してトンネルします。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_MUTE</b></td>
 * <b>TRUE</b> を設定すると、cURL 関数に関連する出力を完全に抑えます。
 * </td>
 * cURL 7.15.5 で削除されました (かわりに CURLOPT_RETURNTRANSFER が使えます)
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_NETRC</b></td>
 * <b>TRUE</b> を設定すると、リモートサイトと接続を確立する際に用いる
 * ユーザー名やパスワードを、~/.netrc から取得します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_NOBODY</b></td>
 * <b>TRUE</b> を設定すると、出力から本文を削除します。
 * リクエストメソッドは HEAD となります。これを <b>FALSE</b>
 * に変更してもリクエストメソッドは GET には変わりません。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_NOPROGRESS</b></td>
 * <b>TRUE</b> を設定すると、cURL 転送の進捗状況表示を無効にします。
 * <p>
 * PHP は、このオプションを自動的に <b>TRUE</b> に設定します。
 * これを変更するのは、デバッグ時のみにすべきです。
 * </p>
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_NOSIGNAL</b></td>
 * <b>TRUE</b> を設定すると、cURL 関数が PHP プロセスに送信するシグナルを
 * 無視します。マルチスレッド SAPI ではデフォルトで on となっており、
 * そのためタイムアウトオプションもまだ利用されています。
 * </td>
 * cURL 7.10 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PATH_AS_IS</b></td>
 * <b>TRUE</b> にすると、ドットの連続を処理しません。
 * </td>
 * cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PIPEWAIT</b></td>
 * <b>TRUE</b> にすると、パイプライン化/多重化を待ちます。
 * </td>
 * cURL 7.42.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_POST</b></td>
 * <b>TRUE</b> を設定すると、HTTP POST を行います。POST は、
 * application/x-www-form-urlencoded 形式で
 * 行われます。これは一般的な HTML のフォームと同じ形式です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PUT</b></td>
 * <b>TRUE</b> を設定すると、HTTP PUT を行います。PUT するファイルは
 * <b>CURLOPT_INFILE</b> および
 * <b>CURLOPT_INFILESIZE</b>
 * で指定されている必要があります。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_RETURNTRANSFER</b></td>
 * <b>TRUE</b> を設定すると、<b>curl_exec</b> の返り値を
 * 文字列で返します。通常はデータを直接出力します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SAFE_UPLOAD</b></td>
 * <b>TRUE</b> にすると、<b>CURLOPT_POSTFIELDS</b>
 * でのファイルアップロードの際の @ プレフィックスを無効にします。
 * つまり、@ で始まる値を安全に渡せるようになるということです。
 * アップロードには <b>CURLFile</b> が使われるでしょう。
 * </td>
 * PHP 5.5.0 で追加され、デフォルトは <b>FALSE</b> でした。
 * PHP 5.6.0 以降は、デフォルトが <b>TRUE</b> に変わります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SASL_IR</b></td>
 * <b>TRUE</b> にすると、最初のパケット内の最初のレスポンスの送信を有効にします。
 * </td>
 * cURL 7.31.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_ENABLE_ALPN</b></td>
 * <b>FALSE</b> にすると、SSL ハンドシェイクの際の ALPN を無効にします
 * (SSL バックエンドの libcurl がそれに対応するビルドである場合)。
 * これは、http2 ネゴシエーションに使えます。
 * </td>
 * cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_ENABLE_NPN</b></td>
 * <b>FALSE</b> にすると、SSL ハンドシェイクの際の NPN を無効にします
 * (SSL バックエンドの libcurl がそれに対応するビルドである場合)。
 * これは、http2 ネゴシエーションに使えます。
 * </td>
 * cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_VERIFYPEER</b></td>
 * <b>FALSE</b> を設定すると、cURL はサーバー証明書の検証を行いません。
 * 別の証明書を <b>CURLOPT_CAINFO</b> オプションで
 * 指定するか、<b>CURLOPT_CAPATH</b> オプションで
 * 証明ディレクトリを指定します。
 * </td>
 * cURL 7.10 以降、デフォルト値は <b>TRUE</b> です。また、
 * cURL 7.10 以降、デフォルトでインストールされています。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_VERIFYSTATUS</b></td>
 * <b>TRUE</b> にすると、証明書のステータスを検証します。
 * </td>
 * cURL 7.41.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TCP_FASTOPEN</b></td>
 * <b>TRUE</b> にすると、TCP Fast Open を有効にします。
 * </td>
 * cURL 7.49.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TFTP_NO_OPTIONS</b></td>
 * <b>TRUE</b> にすると、TFTP オプションリクエストを送信しません。
 * </td>
 * cURL 7.48.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TRANSFERTEXT</b></td>
 * <b>TRUE</b> を設定すると、FTP 転送を ASCII モードで行います。
 * LDAP の場合は、データを HTML ではなくプレーンテキストで取得します。
 * Windows システムでは STDOUT
 * に対してバイナリモードを設定しないでください。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_UNRESTRICTED_AUTH</b></td>
 * <b>TRUE</b> を設定すると、（<b>CURLOPT_FOLLOWLOCATION</b>
 * を利用して）場所をたどっていく際にユーザー名とパスワードを送信し続けます。
 * これは、たとえホスト名が変わっても続けられます。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_UPLOAD</b></td>
 * <b>TRUE</b> を設定すると、アップロードの準備をします。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_VERBOSE</b></td>
 * <b>TRUE</b> を設定すると、詳細な情報を出力します。情報は
 * STDERR か、または
 * <b>CURLOPT_STDERR</b>
 * で指定したファイルに出力されます。
 * </td>
 * </td>
 * </tr>
 * </p>
 * <p>
 * <i>value</i> には、
 * <i>option</i> の以下の値に関して
 * 整数値を指定する必要があります。
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> への設定値</td>
 * <td>注記</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_BUFFERSIZE</b></td>
 * 1 回の読み込みに用いるバッファのサイズ。しかしながら、必ず
 * このバッファいっぱいまで読み込まれることを保証するものではありません。
 * </td>
 * cURL 7.10 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CLOSEPOLICY</b></td>
 * <b>CURLCLOSEPOLICY_*</b> のいずれかの値。
 * <p>
 * このオプションは非推奨となりました。cURL で実装されることがなく、指定しても何の効果もありませんでした。
 * </p>
 * </td>
 * PHP 5.6.0 で削除されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CONNECTTIMEOUT</b></td>
 * 接続の試行を待ち続ける秒数。0 は永遠に待ち続けることを意味します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CONNECTTIMEOUT_MS</b></td>
 * 接続の試行を待ち続けるミリ秒数。0 は永遠に待ち続けることを意味します。
 * システムの標準の名前解決を使うように libcurl をビルドしている場合は、
 * 接続のタイムアウトは秒単位の精度となり、最小のタイムアウトは 1 秒となります。
 * </td>
 * cURL 7.16.2 で追加されました。PHP 5.2.3 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DNS_CACHE_TIMEOUT</b></td>
 * DNS エントリをメモリ内に保持し続ける秒数。デフォルトでは
 * 120（2 分）に設定されています。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_EXPECT_100_TIMEOUT_MS</b></td>
 * 期待するタイムアウト。連続100リクエストの時間をミリ秒で指定します。
 * デフォルトは1000ミリ秒です。
 * </td>
 * cURL 7.36.0 で追加されました。PHP 7.0.7 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTPSSLAUTH</b></td>
 * （使用可能な場合の）FTP 認証方法。
 * CURLFTPAUTH_SSL（まず SSL を試す）、
 * CURLFTPAUTH_TLS（まず TLS を試す）あるいは
 * CURLFTPAUTH_DEFAULT（cURL が決める）のいずれかです。
 * </td>
 * cURL 7.12.2 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HEADEROPT</b></td>
 * How to deal with headers. One of the following constants:
 * <b>CURLHEADER_UNIFIED</b>: the headers specified in
 * <b>CURLOPT_HTTPHEADER</b> will be used in requests
 * both to servers and proxies. With this option enabled,
 * <b>CURLOPT_PROXYHEADER</b> will not have any effect.
 * <b>CURLHEADER_SEPARATE</b>: makes
 * <b>CURLOPT_HTTPHEADER</b> headers only get sent to
 * a server and not to a proxy. Proxy headers must be set with
 * <b>CURLOPT_PROXYHEADER</b> to get used. Note that if
 * a non-CONNECT request is sent to a proxy, libcurl will send both
 * server headers and proxy headers. When doing CONNECT, libcurl will
 * send <b>CURLOPT_PROXYHEADER</b> headers only to the
 * proxy and then <b>CURLOPT_HTTPHEADER</b> headers
 * only to the server.
 * Defaults to <b>CURLHEADER_SEPARATE</b> as of cURL
 * 7.42.1, and <b>CURLHEADER_UNIFIED</b> before.
 * </td>
 * Added in cURL 7.37.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTP_VERSION</b></td>
 * <i>CURL_HTTP_VERSION_NONE</i> (デフォルト。
 * 使用するバージョンを決めるのは cURL にまかせる)、
 * <i>CURL_HTTP_VERSION_1_0</i> (HTTP/1.0 を使用する)、
 * あるいは <i>CURL_HTTP_VERSION_1_1</i> (HTTP/1.1 を使用する)
 * のいずれかです。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTPAUTH</b></td>
 * <p>
 * 使用する HTTP 認証方法。以下の中から選びます。
 * <i>CURLAUTH_BASIC</i>、
 * <i>CURLAUTH_DIGEST</i>、
 * <i>CURLAUTH_GSSNEGOTIATE</i>、
 * <i>CURLAUTH_NTLM</i>、
 * <i>CURLAUTH_ANY</i> および
 * <i>CURLAUTH_ANYSAFE</i>。
 * </p>
 * <p>
 * 2 つ以上の方法を組み合わせるには、ビット演算子 |（or）
 * を使用します。このような場合、cURL はサーバーがサポートしている方法を
 * 問い合わせたうえで最適な方法を選択します。
 * </p>
 * <p>
 * <i>CURLAUTH_ANY</i> は
 * CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM
 * のエイリアスです。
 * </p>
 * <p>
 * <i>CURLAUTH_ANYSAFE</i> は
 * CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM
 * のエイリアスです。
 * </p>
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_INFILESIZE</b></td>
 * ファイルをリモートサイトにアップロードする際のファイルサイズ。
 * このオプションを指定しても、libcurl がそれ以上のデータを送信するのは止められないことに注意しましょう。
 * 実際に何が送信されるのかは
 * <b>CURLOPT_READFUNCTION</b> に依存します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_LOW_SPEED_LIMIT</b></td>
 * 1 秒あたりのバイト数で、転送速度がこれより遅い期間が
 * <b>CURLOPT_LOW_SPEED_TIME</b> 秒以上続いた場合に
 * PHP は転送を終了します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_LOW_SPEED_TIME</b></td>
 * 転送速度が <b>CURLOPT_LOW_SPEED_LIMIT</b>
 * より遅い期間がどれだけ続いた場合に転送を異常終了させるかを、
 * 秒単位で指定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_MAXCONNECTS</b></td>
 * 許可される持続的接続の最大数。もしこの値に達した場合、
 * どの接続を閉じるのかを <b>CURLOPT_CLOSEPOLICY</b>
 * によって決定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_MAXREDIRS</b></td>
 * HTTP のリダイレクト先を追いかける最大値。
 * <b>CURLOPT_FOLLOWLOCATION</b> とあわせて使用します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PORT</b></td>
 * 接続先のポート番号。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_POSTREDIR</b></td>
 * <b>CURLOPT_FOLLOWLOCATION</b> が設定されているときに、
 * どの形式のリダイレクトの場合に HTTP POST メソッドを維持するのかを、
 * 1 (301 Moved Permanently)、2 (302 Found)、4 (303 See Other) のビットマスクで指定します。
 * </td>
 * cURL 7.19.1 で追加されました。PHP 5.3.2 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROTOCOLS</b></td>
 * <p>
 * <b>CURLPROTO_*</b> の値のビットマスク。使用すると、
 * 転送時に libcurl がどのプロトコルを使用するのかに制約を加えます。
 * さまざまなプロトコルに対応するよう libcurl をビルドしていた場合でも、
 * これによって特定の転送プロトコルのみを使用するように制限することができます。
 * デフォルトでは、libcurl がサポートしているすべてのプロトコルの使用を許可します。
 * <b>CURLOPT_REDIR_PROTOCOLS</b> も参照ください。
 * </p>
 * <p>
 * 使用できるプロトコルオプションは次のとおりです。
 * <i>CURLPROTO_HTTP</i>,
 * <i>CURLPROTO_HTTPS</i>,
 * <i>CURLPROTO_FTP</i>,
 * <i>CURLPROTO_FTPS</i>,
 * <i>CURLPROTO_SCP</i>,
 * <i>CURLPROTO_SFTP</i>,
 * <i>CURLPROTO_TELNET</i>,
 * <i>CURLPROTO_LDAP</i>,
 * <i>CURLPROTO_LDAPS</i>,
 * <i>CURLPROTO_DICT</i>,
 * <i>CURLPROTO_FILE</i>,
 * <i>CURLPROTO_TFTP</i>,
 * <i>CURLPROTO_ALL</i>
 * </p>
 * </td>
 * cURL 7.19.4 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXYAUTH</b></td>
 * プロキシ接続に使用する HTTP 認証の方法。
 * <b>CURLOPT_HTTPAUTH</b> で説明したのと同じオプションを
 * 指定可能です。プロキシ認証でサポートされているのは、今のところ
 * <i>CURLAUTH_BASIC</i> および
 * <i>CURLAUTH_NTLM</i> のみです。
 * </td>
 * cURL 7.10.7 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXYPORT</b></td>
 * プロキシ接続のポート番号。このポート番号は、
 * <b>CURLOPT_PROXY</b> で指定することも可能です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXYTYPE</b></td>
 * <i>CURLPROXY_HTTP</i>（デフォルト）、
 * <b>CURLPROXY_SOCKS4</b>、
 * <b>CURLPROXY_SOCKS5</b>、
 * <b>CURLPROXY_SOCKS4A</b> あるいは
 * <b>CURLPROXY_SOCKS5_HOSTNAME</b>。
 * </td>
 * cURL 7.10 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_REDIR_PROTOCOLS</b></td>
 * <b>CURLPROTO_*</b> の値のビットマスク。使用すると、
 * <b>CURLOPT_FOLLOWLOCATION</b> が有効な場合のリダイレクト時の転送に
 * libcurl がどのプロトコルを使用するのかに制約を加えます。これによって、
 * リダイレクト時に特定の転送プロトコルのみを使用するように制限することができます。
 * デフォルトでは、libcurl がサポートしているすべてのプロトコルのうち
 * FILE と SCP 以外のすべての使用を許可します。この挙動は 7.19.4
 * より前のバージョンとは異なります。7.19.4 より前のバージョンでは、
 * サポートするすべてのプロトコルを無条件に許可していました。
 * プロトコル定数の値は <b>CURLOPT_PROTOCOLS</b> を参照ください。
 * </td>
 * cURL 7.19.4 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_RESUME_FROM</b></td>
 * 転送を途中から再開する場合のバイトオフセット。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_OPTIONS</b></td>
 * Set SSL behavior options, which is a bitmask of any of the following constants:
 * <b>CURLSSLOPT_ALLOW_BEAST</b>: do not attempt to use
 * any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.
 * <b>CURLSSLOPT_NO_REVOKE</b>: disable certificate
 * revocation checks for those SSL backends where such behavior is
 * present.
 * </td>
 * Added in cURL 7.25.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_VERIFYHOST</b></td>
 * 1 は SSL ピア証明書に一般名が存在するかどうかを調べます。
 * 2 はそれに加え、その名前がホスト名と一致することを検証します。
 * 本番環境では、このオプションの値は常に
 * 2 (デフォルト値) にしておかなければなりません。
 * </td>
 * 値 1 は、cURL 7.28.1 以降では使えなくなりました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLVERSION</b></td>
 * <b>CURL_SSLVERSION_DEFAULT</b> (0)、
 * <b>CURL_SSLVERSION_TLSv1</b> (1)、
 * <b>CURL_SSLVERSION_SSLv2</b> (2)、
 * <b>CURL_SSLVERSION_SSLv3</b> (3)、
 * <b>CURL_SSLVERSION_TLSv1_0</b> (4)、
 * <b>CURL_SSLVERSION_TLSv1_1</b> (5)、
 * <b>CURL_SSLVERSION_TLSv1_2</b> (6) のいずれかの値。
 * <p>
 * この値は何も設定せず、デフォルトに任せるのが最適です。
 * 2 や 3 を設定すると、SSLv2 および SSLv3 の既知の脆弱性の影響を受けるため、非常に危険です。
 * </p>
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_STREAM_WEIGHT</b></td>
 * Set the numerical stream weight (a number between 1 and 256).
 * </td>
 * Added in cURL 7.46.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TIMECONDITION</b></td>
 * <b>CURLOPT_TIMEVALUE</b> の扱いを決定します。
 * <b>CURLOPT_TIMEVALUE</b> で指定した時刻以降に
 * 変更されたページのみを返す場合は
 * <i>CURL_TIMECOND_IFMODSINCE</i> を使用します。
 * <b>CURLOPT_HEADER</b> が <b>TRUE</b> だと仮定すると、
 * ページが変更されていない場合は
 * "304 Not Modified" ヘッダが返されます。
 * <i>CURL_TIMECOND_IFUNMODSINCE</i> は反対の意味です。
 * デフォルトは <i>CURL_TIMECOND_IFMODSINCE</i>
 * です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TIMEOUT</b></td>
 * cURL 関数の実行にかけられる時間の最大値。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TIMEOUT_MS</b></td>
 * cURL 関数の実行にかけられる最大のミリ秒数。
 * システムの標準の名前解決を使うように libcurl をビルドしている場合は、
 * 接続のタイムアウトは秒単位の精度となり、最小のタイムアウトは 1 秒となります。
 * </td>
 * cURL 7.16.2 で追加されました。PHP 5.2.3 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_TIMEVALUE</b></td>
 * 1970 年 1 月 1 日からの経過秒数。この値は
 * <b>CURLOPT_TIMECONDITION</b> で使用されます。デフォルトでは
 * <i>CURL_TIMECOND_IFMODSINCE</i> が設定されます。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_MAX_RECV_SPEED_LARGE</b></td>
 * ダウンロード速度 (単位は「バイト/秒」) の転送中累加平均がこの値を超えると、
 * 転送を一時停止して、平均速度がこのパラメータの値以下に落ちるまで待ちます。
 * デフォルトは無制限です。
 * </td>
 * cURL 7.15.5 で追加されました。PHP 5.4.0 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_MAX_SEND_SPEED_LARGE</b></td>
 * アップロード速度 (単位は「バイト/秒」) の転送中累加平均がこの値を超えると、
 * 転送を一時停止して、平均速度がこのパラメータの値以下に落ちるまで待ちます。
 * デフォルトは無制限です。
 * </td>
 * cURL 7.15.5 で追加されました。PHP 5.4.0 以降で使用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSH_AUTH_TYPES</b></td>
 * <b>CURLSSH_AUTH_PUBLICKEY</b>,
 * <b>CURLSSH_AUTH_PASSWORD</b>,
 * <b>CURLSSH_AUTH_HOST</b>,
 * <b>CURLSSH_AUTH_KEYBOARD</b>
 * のビットマスク。
 * <b>CURLSSH_AUTH_ANY</b> にすると libcurl がいずれかひとつを選択します。
 * </td>
 * cURL 7.16.1 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_IPRESOLVE</b></td>
 * ホスト名の解決にどの形式の IP アドレスを使うのかを、アプリケーションが選べるようにします。
 * 複数のバージョンの IP アドレスで解決できるホスト名のときに使うもので、指定できる値は
 * <b>CURL_IPRESOLVE_WHATEVER</b>、
 * <b>CURL_IPRESOLVE_V4</b> そして
 * <b>CURL_IPRESOLVE_V6</b> です。
 * デフォルトは <b>CURL_IPRESOLVE_WHATEVER</b> です。
 * </td>
 * cURL 7.10.8 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTP_FILEMETHOD</b></td>
 * FTP(S) サーバー上のファイルに到達するために使う方法を curl に伝えます。利用可能な値は
 * <b>CURLFTPMETHOD_MULTICWD</b>、
 * <b>CURLFTPMETHOD_NOCWD</b> および
 * <b>CURLFTPMETHOD_SINGLECWD</b> です。
 * </td>
 * cURL 7.15.1 で追加されました。PHP 5.3.0 以降で使用可能です。
 * </td>
 * </tr>
 * </p>
 * <p>
 * <i>value</i> は、
 * <i>option</i> パラメータの
 * 以下の値に関して文字列である必要があります。
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> への設定値</td>
 * <td>注記</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CAINFO</b></td>
 * 接続先を検証するための証明書を保持するファイル名。
 * これは <b>CURLOPT_SSL_VERIFYPEER</b> を使用する場合に
 * のみ意味を持ちます。
 * </td>
 * 絶対パスで指定しなければならないでしょう。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CAPATH</b></td>
 * 複数の証明書ファイルを保持するディレクトリ。このオプションは
 * <b>CURLOPT_SSL_VERIFYPEER</b> とともに使用します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_COOKIE</b></td>
 * HTTP リクエストにおける
 * "Cookie: " ヘッダの内容。
 * クッキーが複数ある場合は、セミコロンとスペースで区切られる
 * (例 "fruit=apple; colour=red")
 * ことに注意しましょう。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_COOKIEFILE</b></td>
 * クッキーのデータを保持するファイルの名前。クッキーファイルは、
 * Netscape フォーマットあるいは
 * HTTP ヘッダを単純にファイルにダンプしたものが使用可能です。
 * 名前が空文字列の場合はクッキーを読み込みませんが、クッキーの処理は有効なままです。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_COOKIEJAR</b></td>
 * ハンドルを閉じる際 (curl_close のコール後など) に、
 * すべての内部クッキーを保存するファイルの名前。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CUSTOMREQUEST</b></td>
 * HTTP リクエストで
 * "GET" あるいは "HEAD" 以外に
 * 使用するカスタムメソッド。これが有用なのは、"DELETE"
 * やその他のあまり知られていない HTTP リクエストを実行する場合です。
 * 使用可能な値は "GET"、
 * "POST"、"CONNECT" などです。
 * HTTP リクエストの内容をすべて指定するわけではありません。つまり、
 * "GET /index.html HTTP/1.0\r\n\r\n" のような
 * 記述は間違いだということです。
 * <p>
 * 使用しようとしているメソッドをサーバーがサポートしていることを
 * 確かめるまで、これを使用しないでください。
 * </p>
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DEFAULT_PROTOCOL</b></td>
 * <p>
 * The default protocol to use if the URL is missing a scheme name.
 * </p></td>
 * Added in cURL 7.45.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DNS_INTERFACE</b></td>
 * <p>
 * Set the name of the network interface that the DNS resolver should bind to.
 * This must be an interface name (not an address).
 * </p></td>
 * Added in cURL 7.33.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DNS_LOCAL_IP4</b></td>
 * <p>
 * Set the local IPv4 address that the resolver should bind to. The argument
 * should contain a single numerical IPv4 address as a string.
 * </p></td>
 * Added in cURL 7.33.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_DNS_LOCAL_IP6</b></td>
 * <p>
 * Set the local IPv6 address that the resolver should bind to. The argument
 * should contain a single numerical IPv6 address as a string.
 * </p></td>
 * Added in cURL 7.33.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_EGDSOCKET</b></td>
 * <b>CURLOPT_RANDOM_FILE</b> と似ていますが、
 * Entropy Gathering Daemon ソケットを使用してファイル名を生成する点が
 * 違います。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_ENCODING</b></td>
 * "Accept-Encoding: " ヘッダの内容。
 * これにより、応答のデコードを可能にします。サポートされる
 * エンコーディングは "identity"、
 * "deflate" および "gzip"
 * です。もし空文字列 "" が指定された場合、
 * サポートされるエンコーディングをすべて含むヘッダが送信されます。
 * </td>
 * cURL 7.10 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FTPPORT</b></td>
 * FTP で "PORT" を使用するための IP アドレスを取得する際に使用される値。
 * "PORT" は、リモートサーバーに対してこちらが指定した IP アドレスに
 * 接続するよう指示します。この値に設定できる内容は IP アドレス、ホスト名、
 * ネットワークインターフェイス名（Unix）、あるいは単に '-' を指定する
 * ことでシステムのデフォルト IP アドレスを指定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_INTERFACE</b></td>
 * 使用するネットワークインターフェイスの名前。
 * インターフェイス名、IP アドレスあるいはホスト名が指定可能です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_KEYPASSWD</b></td>
 * <b>CURLOPT_SSLKEY</b>
 * あるいは <b>CURLOPT_SSH_PRIVATE_KEYFILE</b> 秘密鍵を使うときに必須となるパスワード。
 * </td>
 * cURL 7.16.1 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_KRB4LEVEL</b></td>
 * KRB4（Kerberos 4）セキュリティレベル。以下の値のいずれか
 * （セキュリティの低い順です）が指定可能です。
 * "clear"、
 * "safe"、
 * "confidential"、
 * "private"。
 * 文字列がこれらのどれでもなかった場合は、
 * "private" が使用されます。このオプションを <b>NULL</b>
 * にすると KRB4 セキュリティを無効にします。現時点では、KRB4
 * セキュリティは FTP 転送にのみ使用可能です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_LOGIN_OPTIONS</b></td>
 * Can be used to set protocol specific login options, such as the
 * preferred authentication mechanism via "AUTH=NTLM" or "AUTH=*",
 * and should be used in conjunction with the
 * <b>CURLOPT_USERNAME</b> option.
 * </td>
 * Added in cURL 7.34.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PINNEDPUBLICKEY</b></td>
 * Set the pinned public key.
 * The string can be the file name of your pinned public key. The file
 * format expected is "PEM" or "DER". The string can also be any
 * number of base64 encoded sha256 hashes preceded by "sha256//" and
 * separated by ";".
 * </td>
 * Added in cURL 7.39.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_POSTFIELDS</b></td>
 * HTTP "POST" で送信するすべてのデータ。
 * ファイルを送信するには、ファイル名の先頭に @
 * をつけてフルパスを指定します。ファイルタイプを明示的に指定するには、ファイル名の後に
 * ';type=mimetype' 形式で続けます。
 * このパラメータは
 * 'para1=val1&#38;#38;para2=val2&#38;#38;...'
 * のように url エンコードされた文字列形式で渡すこともできますし、
 * フィールド名をキー、データを値とする配列で渡すこともできます。
 * <i>value</i> が配列の場合、
 * Content-Type ヘッダには
 * multipart/form-data を設定します。
 * PHP 5.2.0 以降、このオプションに
 * @ プレフィックスつきでファイルを渡したときは
 * <i>value</i> が配列でなければならなくなりました。
 * PHP 5.5.0 以降、@ プレフィックスは非推奨になりました。
 * また、ファイルを <b>CURLFile</b> で送信できるようになりました。
 * @ プレフィックスを無効化して、
 * @ で始まる値を安全に渡せるようにするには、
 * <b>CURLOPT_SAFE_UPLOAD</b> オプションを <b>TRUE</b> と設定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PRIVATE</b></td>
 * この cURL ハンドルに関連づけるデータ。ここで関連づけたデータは、
 * <b>curl_getinfo</b> の
 * <b>CURLINFO_PRIVATE</b> オプションで取得できます。
 * cURL はデータを一切加工しません。
 * cURL マルチハンドルを使う場合は一般的に、この値が cURL ハンドルを特定する一意なキーとなります。
 * </td>
 * cURL 7.10.3 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXY</b></td>
 * リクエストを経由させる HTTP プロキシ。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXY_SERVICE_NAME</b></td>
 * The proxy authentication service name.
 * </td>
 * Added in cURL 7.34.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXYUSERPWD</b></td>
 * プロキシに接続するためのユーザー名とパスワード。
 * "[username]:[password]" 形式で指定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_RANDOM_FILE</b></td>
 * 使用するファイル名を、SSL の乱数生成器を使用して作成します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_RANGE</b></td>
 * 取得するデータの範囲を
 * "X-Y" 形式で指定します。X あるいは Y は省略可能です。
 * HTTP 転送では、いくつかの範囲をカンマで区切った
 * "X-Y,N-M" のような形式もサポートしています。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_REFERER</b></td>
 * HTTP リクエストで使用される "Referer: "
 * ヘッダの内容。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SERVICE_NAME</b></td>
 * The authentication service name.
 * </td>
 * Added in cURL 7.43.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</b></td>
 * 32 桁の十六進文字列。この文字列は、リモートホストの公開鍵の MD5 チェックサムでなければなりません。
 * md5sum がマッチしない限り、libcurl はホストとの接続を拒否します。
 * このオプションは、SCP および SFTP でのみ有効です。
 * </td>
 * cURL 7.17.1 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSH_PUBLIC_KEYFILE</b></td>
 * 公開鍵のファイル名。指定しなかった場合、libcurl はデフォルトの場所を探します。デフォルトは、
 * 環境変数 HOME が設定されていれば $HOME/.ssh/id_dsa.pub、設定されていなければ
 * カレントディレクトリの "id_dsa.pub" です。
 * </td>
 * cURL 7.16.1 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSH_PRIVATE_KEYFILE</b></td>
 * 秘密鍵のファイル名。指定しなかった場合、libcurl はデフォルトの場所を探します。デフォルトは、
 * 環境変数 HOME が設定されていれば $HOME/.ssh/id_dsa、設定されていなければ
 * カレントディレクトリの "id_dsa" です。
 * ファイルがパスワードで保護されている場合は、パスワードを
 * <b>CURLOPT_KEYPASSWD</b> に設定します。
 * </td>
 * cURL 7.16.1 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSL_CIPHER_LIST</b></td>
 * SSL で使用する暗号のリスト。例えば
 * RC4-SHA および TLSv1 が
 * 使用可能です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLCERT</b></td>
 * PEM フォーマットの証明書を含むファイルの名前。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLCERTPASSWD</b></td>
 * <b>CURLOPT_SSLCERT</b>
 * 証明書を使用する際に必要なパスワード。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLCERTTYPE</b></td>
 * 証明書の形式。サポートされるフォーマットは
 * "PEM"（デフォルト）、"DER"
 * および "ENG" です。
 * </td>
 * cURL 7.9.3 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLENGINE</b></td>
 * <b>CURLOPT_SSLKEY</b> で指定した SSL 秘密鍵の
 * 暗号化エンジンの ID 。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLENGINE_DEFAULT</b></td>
 * 非対称暗号化で使用する暗号化エンジンの ID 。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLKEY</b></td>
 * SSL 秘密鍵を含むファイルの名前。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLKEYPASSWD</b></td>
 * <b>CURLOPT_SSLKEY</b> で指定した SSL 秘密鍵を
 * 使用するために必要なパスワード。
 * <p>
 * このオプションには重要なパスワードが含まれます。PHP スクリプトを
 * 安全な状態におくことを忘れないでください。
 * </p>
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SSLKEYTYPE</b></td>
 * <b>CURLOPT_SSLKEY</b> で指定した SSL 秘密鍵の
 * 形式。サポートされる型は以下のとおりです。
 * "PEM"（デフォルト）、"DER"
 * および "ENG" 。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_UNIX_SOCKET_PATH</b></td>
 * Enables the use of Unix domain sockets as connection endpoint and
 * sets the path to the given string.
 * </td>
 * Added in cURL 7.40.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_URL</b></td>
 * 取得する URL 。<b>curl_init</b> でセッションを
 * 初期化する際に指定することも可能です。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_USERAGENT</b></td>
 * HTTP リクエストで使用される "User-Agent: "
 * ヘッダの内容。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_USERNAME</b></td>
 * The user name to use in authentication.
 * </td>
 * Added in cURL 7.19.1. Available since PHP 5.5.0.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_USERPWD</b></td>
 * 接続に使用するユーザー名とパスワード。
 * "[username]:[password]" 形式で指定します。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_XOAUTH2_BEARER</b></td>
 * Specifies the OAuth 2.0 access token.
 * </td>
 * Added in cURL 7.33.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * </p>
 * <p>
 * <i>value</i> には、
 * <i>option</i> の以下の値に関して
 * 配列を指定する必要があります。
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> への設定値</td>
 * <td>注記</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_CONNECT_TO</b></td>
 * Connect to a specific host and port instead of the URL's host and port.
 * Accepts an array of strings with the format
 * HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT.
 * </td>
 * Added in cURL 7.49.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTP200ALIASES</b></td>
 * エラーではなく正常な応答として扱われる、HTTP 200 レスポンスの配列。
 * </td>
 * cURL 7.10.3 で追加されました。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HTTPHEADER</b></td>
 * 設定する HTTP ヘッダフィールドの配列。
 * array('Content-type: text/plain', 'Content-length: 100')
 * 形式。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_POSTQUOTE</b></td>
 * FTP リクエストの実行後に、サーバー上で実行する FTP コマンドの配列。
 * </td>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROXYHEADER</b></td>
 * An array of custom HTTP headers to pass to proxies.
 * </td>
 * Added in cURL 7.37.0. Available since PHP 7.0.7.
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_QUOTE</b></td>
 * FTP リクエストの前にサーバー上で実行する FTP コマンドの配列。
 * </td>
 * </td>
 * </tr>
 * </p>
 * <p>
 * <i>value</i> はストリームリソース（例えば
 * <b>fopen</b> が作成するもの）であり、以下の
 * <i>option</i> パラメータに設定します。
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> に設定する内容</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_FILE</b></td>
 * 転送内容が書き込まれるファイル。デフォルトは STDOUT
 * （ブラウザウィンドウ）。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_INFILE</b></td>
 * アップロード時に転送内容を読み込むファイル。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_STDERR</b></td>
 * STDERR の代わりにエラーを出力する場所。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_WRITEHEADER</b></td>
 * 転送のヘッダ部分が書き込まれるファイル。
 * </td>
 * </tr>
 * </p>
 * <p>
 * <i>value</i> には、
 * <i>option</i> の以下の値に関して
 * 有効な関数あるいはクロージャの名前を指定する必要があります。
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> への設定値</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_HEADERFUNCTION</b></td>
 * 二つのパラメータをとるコールバック。
 * 最初のパラメータは CURL リソースで、2 番目は書き込む
 * ヘッダデータの文字列です。このコールバック関数を使用するにあたり、
 * ヘッダデータを書き込む処理を実装するのはあなたの役目となります。
 * 書き込んだデータのバイト数を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PASSWDFUNCTION</b></td>
 * 三つのパラメータをとるコールバック。
 * 最初のパラメータは CURL リソースで、2 番目はパスワード
 * プロンプトの文字列、そして 3 番目はパスワードの最大長です。
 * 入力されたパスワードを文字列で返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_PROGRESSFUNCTION</b></td>
 * <p>
 * 五つのパラメータをとるコールバック。
 * 最初のパラメータは cURL 利ソールで、2 番目はこの転送でダウンロードしようとしている総バイト数、
 * 3 番目はこれまでにダウンロードしたバイト数、4 番目はこの転送でアップロードしようとしている総バイト数、
 * そして 5 番目はこれまでにアップロードしたバイト数です。
 * </p>
 * <p>
 * このコールバックが呼ばれるのは、<b>CURLOPT_NOPROGRESS</b>
 * が <b>FALSE</b> の場合だけです。
 * </p>
 * <p>
 * ゼロ以外の値を返すと、転送を強制終了できます。このとき、この転送にはエラー
 * <b>CURLE_ABORTED_BY_CALLBACK</b>
 * が設定されます。
 * </p>
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_READFUNCTION</b></td>
 * 三つのパラメータをとるコールバック。
 * 最初のパラメータは CURL リソースで、2 番目は
 * <b>CURLOPT_INFILE</b> で cURL に渡したストリームリソース、
 * そして最後が読み込むデータの最大量です。
 * コールバックは、要求したデータ量以下の長さの文字列を返さなければなりません。
 * 一般的には、渡されたストリームリソースから読み込んだデータを返します。
 * EOF を伝えるには空文字列を返さなければなりません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_WRITEFUNCTION</b></td>
 * 二つのパラメータをとるコールバック。
 * 最初のパラメータは CURL リソースで、2 番目は書き込む
 * データの文字列です。データの保存には、
 * このコールバック関数を使わなければなりません。
 * 書き込んだデータの正確なバイト数を返す必要があります。
 * 返さなければ、エラーで転送が異常終了します。
 * </td>
 * </tr>
 * </p>
 * <p>
 * その他の値
 * <tr valign="top">
 * <td>オプション</td>
 * <td><i>value</i> への設定値</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLOPT_SHARE</b></td>
 * <b>curl_share_init</b> の結果。
 * この cURL ハンドルに、共有ハンドルからのデータを使わせるようにします。
 * </td>
 * </tr>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function curl_setopt($ch, int $option, $value): bool {}

/**
 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
 * CURL 転送用の複数のオプションを設定する
 * @link http://php.net/manual/ja/function.curl-setopt-array.php
 * @param resource $ch
 * @param array $options <p>
 * 設定するオプションとその値を指定した配列。キーとして使用できるのは、
 * 有効な <b>curl_setopt</b> 定数か、
 * その定数に対応する整数値だけです。
 * </p>
 * @return bool すべてのオプションがうまく設定できた場合に <b>TRUE</b> を返します。
 * うまく設定できないオプションがあった時点で即時に <b>FALSE</b>
 * が返され、<i>options</i>
 * 配列に含まれるそれ以降のオプションは無視されます。
 */
function curl_setopt_array($ch, array $options): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * cURL セッションを実行する
 * @link http://php.net/manual/ja/function.curl-exec.php
 * @param resource $ch
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 しかし、オプション <b>CURLOPT_RETURNTRANSFER</b>
 * が設定されていると、
 * 成功した場合に取得結果、失敗した場合に <b>FALSE</b> を返します。
 */
function curl_exec($ch) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 指定した伝送に関する情報を得る
 * @link http://php.net/manual/ja/function.curl-getinfo.php
 * @param resource $ch
 * @param int $opt [optional] <p>
 * これは、以下のいずれかの定数となります。
 * <b>CURLINFO_EFFECTIVE_URL</b> - 直近の有効な URL
 * @return mixed <i>opt</i> を指定した場合は、その値を返します。
 * それ以外の場合は、以下の要素をもつ連想配列を返します
 * (それぞれの要素が <i>opt</i> に対応します)。
 * 失敗した場合は <b>FALSE</b> を返します。
 * "url"
 * "content_type"
 * "http_code"
 * "header_size"
 * "request_size"
 * "filetime"
 * "ssl_verify_result"
 * "redirect_count"
 * "total_time"
 * "namelookup_time"
 * "connect_time"
 * "pretransfer_time"
 * "size_upload"
 * "size_download"
 * "speed_download"
 * "speed_upload"
 * "download_content_length"
 * "upload_content_length"
 * "starttransfer_time"
 * "redirect_time"
 * "certinfo"
 * "primary_ip"
 * "primary_port"
 * "local_ip"
 * "local_port"
 * "redirect_url"
 * "request_header" (これが設定されるのは、事前に <b>curl_setopt</b>
 * をコールしたときに <b>CURLINFO_HEADER_OUT</b> を設定した場合のみです)
 * プライベートデータはこの連想配列には含まれず、<b>CURLINFO_PRIVATE</b> オプションで個別に取得しなければいけないことに注意しましょう。
 */
function curl_getinfo($ch, int $opt = null) {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * 現在のセッションに関する直近のエラー文字列を返す
 * @link http://php.net/manual/ja/function.curl-error.php
 * @param resource $ch
 * @return string エラーメッセージ、あるいはエラーが発生しなかった場合は ''
 * (空文字) を返します。
 */
function curl_error($ch): string {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * 直近のエラー番号を返す
 * @link http://php.net/manual/ja/function.curl-errno.php
 * @param resource $ch
 * @return int エラー番号を返します。エラーが発生しない場合、
 * 0 (ゼロ) を返します。
 */
function curl_errno($ch): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * cURL セッションを閉じる
 * @link http://php.net/manual/ja/function.curl-close.php
 * @param resource $ch
 * @return void 値を返しません。
 */
function curl_close($ch): void {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * エラーコードの説明を返す
 * @link http://php.net/manual/ja/function.curl-strerror.php
 * @param int $errornum <p>
 * cURL エラーコード 定数のいずれか。
 * </p>
 * @return string エラーの説明を返します。無効なエラーコードを指定した場合は <b>NULL</b> を返します。
 */
function curl_strerror(int $errornum): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * エラーの内容を表す文字列を返す
 * @link http://php.net/manual/ja/function.curl-multi-strerror.php
 * @param int $errornum <p>
 * CURLM エラーコード 定数のいずれか。
 * </p>
 * @return string 有効なエラーコードを指定した場合は、それに対応する文字列を返します。それ以外の場合は <b>NULL</b> を返します。
 */
function curl_multi_strerror(int $errornum): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * libcurl セッションハンドルのすべてのオプションをリセットする
 * @link http://php.net/manual/ja/function.curl-reset.php
 * @param resource $ch
 * @return void 値を返しません。
 */
function curl_reset($ch): void {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 指定した文字列を URL エンコードする
 * @link http://php.net/manual/ja/function.curl-escape.php
 * @param resource $ch
 * @param string $str <p>
 * エンコードする文字列。
 * </p>
 * @return string エスケープした文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function curl_escape($ch, string $str): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * URL エンコードされた文字列をデコードする
 * @link http://php.net/manual/ja/function.curl-unescape.php
 * @param resource $ch
 * @param string $str <p>
 * デコード対象の文字列。
 * </p>
 * @return string デコードした文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function curl_unescape($ch, string $str): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 接続の中断と再開をする
 * @link http://php.net/manual/ja/function.curl-pause.php
 * @param resource $ch
 * @param int $bitmask <p>
 * 定数 <b>CURLPAUSE_*</b> のいずれか。
 * </p>
 * @return int エラーコードを返します (エラーがない場合は <b>CURLE_OK</b> を返します)。
 */
function curl_pause($ch, int $bitmask): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 新規 cURL マルチハンドルを返す
 * @link http://php.net/manual/ja/function.curl-multi-init.php
 * @return resource 成功した場合に cURL マルチハンドルリソース、失敗した場合に <b>FALSE</b> を返します。
 */
function curl_multi_init() {}

/**
 * (PHP 5, PHP 7)<br/>
 * cURL マルチハンドルに、通常の cURL ハンドルを追加する
 * @link http://php.net/manual/ja/function.curl-multi-add-handle.php
 * @param resource $mh
 * @param resource $ch
 * @return int 成功した場合に 0、あるいはエラーコード
 * <b>CURLM_XXX</b> のいずれかを返します。
 */
function curl_multi_add_handle($mh, $ch): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * cURL ハンドルのセットからマルチハンドルを削除する
 * @link http://php.net/manual/ja/function.curl-multi-remove-handle.php
 * @param resource $mh
 * @param resource $ch
 * @return int 成功した場合に 0、失敗した場合にエラーコード <b>CURLM_XXX</b> のいずれかを返します。
 * codes.
 */
function curl_multi_remove_handle($mh, $ch): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * curl_multi 接続のアクティビティを待つ
 * @link http://php.net/manual/ja/function.curl-multi-select.php
 * @param resource $mh
 * @param float $timeout [optional] <p>
 * レスポンスを待つ秒数。
 * </p>
 * @return int 成功した場合は、記述子セットに含まれる記述子の数を返します。
 * どの記述子上にもアクティビティがなかった場合は、結果が 0 になることもあります。
 * select に失敗した場合は -1 を返し、それ以外の失敗時は
 * (select システムコールから) タイムアウトします。
 */
function curl_multi_select($mh, float $timeout = 1.0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在の cURL ハンドルから、サブ接続を実行する
 * @link http://php.net/manual/ja/function.curl-multi-exec.php
 * @param resource $mh
 * @param int $still_running <p>
 * 処理が実行中かどうかを表すフラグへの参照。
 * </p>
 * @return int cURL 定義済み定数 で定義された
 * cURL コードを返します。
 * </p>
 * <p>
 * これは、マルチスタック全体に関するエラーのみを返します。この関数が
 * <b>CURLM_OK</b> を返したとしても、各転送で個別にエラーが発生している可能性があります。
 */
function curl_multi_exec($mh, int &$still_running): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>CURLOPT_RETURNTRANSFER</b> が設定されている場合に、cURL ハンドルの内容を返す
 * @link http://php.net/manual/ja/function.curl-multi-getcontent.php
 * @param resource $ch
 * @return string <b>CURLOPT_RETURNTRANSFER</b> が設定されている場合に、
 * cURL ハンドルの内容を返します。
 */
function curl_multi_getcontent($ch): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在の転送についての情報を表示する
 * @link http://php.net/manual/ja/function.curl-multi-info-read.php
 * @param resource $mh
 * @param int $msgs_in_queue [optional] <p>
 * まだキューの中に残っているメッセージの数。
 * </p>
 * @return array 成功した場合にメッセージの連想配列、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <table>
 * 配列の内容
 * <tr valign="top">
 * <td>キー</td>
 * <td>値</td>
 * </tr>
 * <tr valign="top">
 * <td>msg</td>
 * <td>定数 <b>CURLMSG_DONE</b>。その他の返り値は現在は存在しません。</td>
 * </tr>
 * <tr valign="top">
 * <td>result</td>
 * <td>定数 <b>CURLE_*</b> のいずれか。すべて OK なら
 * <b>CURLE_OK</b> が返ります。</td>
 * </tr>
 * <tr valign="top">
 * <td>handle</td>
 * <td>curl が扱うハンドルの型を表すリソース。</td>
 * </tr>
 * </table>
 */
function curl_multi_info_read($mh, int &$msgs_in_queue = null): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * cURL ハンドルのセットを閉じる
 * @link http://php.net/manual/ja/function.curl-multi-close.php
 * @param resource $mh
 * @return void 値を返しません。
 */
function curl_multi_close($mh): void {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * cURL マルチハンドル用のオプションを設定する
 * @link http://php.net/manual/ja/function.curl-multi-setopt.php
 * @param resource $mh <p>
 * </p>
 * @param int $option <p>
 * <b>CURLMOPT_*</b> 定数のいずれか。
 * </p>
 * @param mixed $value <p>
 * <i>option</i> に設定する値。
 * </p>
 * <p>
 * <i>value</i> には int 型の値を指定しなければいけません。
 * <i>option</i> パラメータの値によって、それぞれ次のようになります。
 * <tr valign="top">
 * オプション</td>
 * <i>value</i> の設定値</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_PIPELINING</b></td>
 * 1 を渡せば有効に、そして 0 を渡せば無効になります。
 * マルチハンドルでのパイプライン化を有効にすると、このハンドルによる転送で、
 * 可能な限り HTTP パイプライン化を試みます。
 * つまり、二番目のリクエストを追加したときに既存の接続が使える場合は、
 * 既存の接続に「パイプ」でつなぎます。
 * cURL 7.43.0 以降では、2 を渡すと、既存の HTTP/2 接続上での新しい転送で、
 * 可能な限り多重化を試みます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_MAXCONNECTS</b></td>
 * 同時に開く接続の最大数を指定します。これを libcurl がキャッシュします。
 * デフォルトのサイズは、
 * <b>curl_multi_add_handle</b> で追加したハンドル数の四倍に収まるように拡大されます。
 * キャッシュがいっぱいになると、キャッシュ内で一番古い接続を閉じ、
 * 開いている接続の数が増えないようにします。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</b></td>
 * パイプライン化のチャンク長の閾値をバイト単位で指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</b></td>
 * パイプライン化のペナルティの閾値をバイト単位で指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_MAX_HOST_CONNECTIONS</b></td>
 * 単一のホストへの最大接続数を指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_MAX_PIPELINE_LENGTH</b></td>
 * 単一のパイプライン内での最大リクエスト数を指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_MAX_TOTAL_CONNECTIONS</b></td>
 * 同時にオープンする接続の最大数を指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLMOPT_PUSHFUNCTION</b></td>
 * Pass a callable that will be registered to handle server
 * pushes and should have the following signature:
 * int<b>pushfunction</b>
 * <b>resource<i>parent_ch</i></b>
 * <b>resource<i>pushed_ch</i></b>
 * <b>array<i>headers</i></b>
 * <i>parent_ch</i>
 * <p>
 * The parent cURL handle (the request the client made).
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function curl_multi_setopt($mh, int $option, $value): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * curl 共有ハンドルを初期化する
 * @link http://php.net/manual/ja/function.curl-share-init.php
 * @return resource "cURL Share Handle" 型のリソースを返します。
 */
function curl_share_init() {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * cURL 共有ハンドルを閉じる
 * @link http://php.net/manual/ja/function.curl-share-close.php
 * @param resource $sh <p>
 * <b>curl_share_init</b> が返す cURL 共有ハンドル。
 * </p>
 * @return void 値を返しません。
 */
function curl_share_close($sh): void {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * cURL 共有ハンドルのオプションを設定する
 * @link http://php.net/manual/ja/function.curl-share-setopt.php
 * @param resource $sh <p>
 * <b>curl_share_init</b> が返す cURL 共有ハンドル。
 * </p>
 * @param int $option <p>
 * <tr valign="top">
 * オプション</td>
 * 説明</td>
 * </tr>
 * <tr valign="top">
 * <b>CURLSHOPT_SHARE</b></td>
 * 共有させるデータの種類を指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURLSHOPT_UNSHARE</b></td>
 * 共有させないデータの種類を指定します。
 * </td>
 * </tr>
 * </p>
 * @param string $value <p>
 * <tr valign="top">
 * 値</td>
 * 説明</td>
 * </tr>
 * <tr valign="top">
 * <b>CURL_LOCK_DATA_COOKIE</b></td>
 * クッキーのデータを共有する。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURL_LOCK_DATA_DNS</b></td>
 * DNS キャッシュを共有する。cURL マルチハンドルを使うときには、
 * 同じマルチハンドルに追加されたすべてのハンドルがデフォルトで DNS キャッシュを共有することに注意しましょう。
 * </td>
 * </tr>
 * <tr valign="top">
 * <b>CURL_LOCK_DATA_SSL_SESSION</b></td>
 * SSL セッション ID を共有し、同一サーバーへの再接続時の SSL ハンドシェイクの所要時間を削減する。
 * 同じハンドル内では、デフォルトで SSL セッション ID が再利用されることに注意しましょう。
 * </td>
 * </tr>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function curl_share_setopt($sh, int $option, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * CURLFile オブジェクトを作る
 * @link http://php.net/manual/ja/function.curl-file-create.php
 * @param $filename
 * @param $mimetype [optional]
 * @param $postname [optional]
 */
function curl_file_create($filename, $mimetype, $postname) {}


/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_AUTOREFERER', 58);
define ('CURLOPT_BINARYTRANSFER', 19914);
define ('CURLOPT_BUFFERSIZE', 98);
define ('CURLOPT_CAINFO', 10065);
define ('CURLOPT_CAPATH', 10097);
define ('CURLOPT_CONNECTTIMEOUT', 78);
define ('CURLOPT_COOKIE', 10022);
define ('CURLOPT_COOKIEFILE', 10031);
define ('CURLOPT_COOKIEJAR', 10082);

/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_COOKIESESSION', 96);
define ('CURLOPT_CRLF', 27);
define ('CURLOPT_CUSTOMREQUEST', 10036);
define ('CURLOPT_DNS_CACHE_TIMEOUT', 92);
define ('CURLOPT_DNS_USE_GLOBAL_CACHE', 91);
define ('CURLOPT_EGDSOCKET', 10077);
define ('CURLOPT_ENCODING', 10102);
define ('CURLOPT_FAILONERROR', 45);
define ('CURLOPT_FILE', 10001);
define ('CURLOPT_FILETIME', 69);

/**
 * open_basedir あるいは
 * safe_mode が有効な場合は、
 * この定数は使用できません。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_FOLLOWLOCATION', 52);
define ('CURLOPT_FORBID_REUSE', 75);
define ('CURLOPT_FRESH_CONNECT', 74);
define ('CURLOPT_FTPAPPEND', 50);
define ('CURLOPT_FTPLISTONLY', 48);
define ('CURLOPT_FTPPORT', 10017);
define ('CURLOPT_FTP_USE_EPRT', 106);
define ('CURLOPT_FTP_USE_EPSV', 85);
define ('CURLOPT_HEADER', 42);
define ('CURLOPT_HEADERFUNCTION', 20079);
define ('CURLOPT_HTTP200ALIASES', 10104);
define ('CURLOPT_HTTPGET', 80);
define ('CURLOPT_HTTPHEADER', 10023);
define ('CURLOPT_HTTPPROXYTUNNEL', 61);
define ('CURLOPT_HTTP_VERSION', 84);
define ('CURLOPT_INFILE', 10009);
define ('CURLOPT_INFILESIZE', 14);
define ('CURLOPT_INTERFACE', 10062);
define ('CURLOPT_KRB4LEVEL', 10063);
define ('CURLOPT_LOW_SPEED_LIMIT', 19);
define ('CURLOPT_LOW_SPEED_TIME', 20);
define ('CURLOPT_MAXCONNECTS', 71);
define ('CURLOPT_MAXREDIRS', 68);
define ('CURLOPT_NETRC', 51);
define ('CURLOPT_NOBODY', 44);
define ('CURLOPT_NOPROGRESS', 43);
define ('CURLOPT_NOSIGNAL', 99);
define ('CURLOPT_PORT', 3);
define ('CURLOPT_POST', 47);
define ('CURLOPT_POSTFIELDS', 10015);
define ('CURLOPT_POSTQUOTE', 10039);
define ('CURLOPT_PREQUOTE', 10093);

/**
 * PHP 5.2.4 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PRIVATE', 10103);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PROGRESSFUNCTION', 20056);
define ('CURLOPT_PROXY', 10004);
define ('CURLOPT_PROXYPORT', 59);

/**
 * cURL 7.10 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PROXYTYPE', 101);
define ('CURLOPT_PROXYUSERPWD', 10006);
define ('CURLOPT_PUT', 54);
define ('CURLOPT_QUOTE', 10028);
define ('CURLOPT_RANDOM_FILE', 10076);
define ('CURLOPT_RANGE', 10007);
define ('CURLOPT_READDATA', 10009);
define ('CURLOPT_READFUNCTION', 20012);
define ('CURLOPT_REFERER', 10016);
define ('CURLOPT_RESUME_FROM', 21);
define ('CURLOPT_RETURNTRANSFER', 19913);
define ('CURLOPT_SHARE', 10100);
define ('CURLOPT_SSLCERT', 10025);
define ('CURLOPT_SSLCERTPASSWD', 10026);
define ('CURLOPT_SSLCERTTYPE', 10086);
define ('CURLOPT_SSLENGINE', 10089);
define ('CURLOPT_SSLENGINE_DEFAULT', 90);
define ('CURLOPT_SSLKEY', 10087);
define ('CURLOPT_SSLKEYPASSWD', 10026);
define ('CURLOPT_SSLKEYTYPE', 10088);
define ('CURLOPT_SSLVERSION', 32);
define ('CURLOPT_SSL_CIPHER_LIST', 10083);
define ('CURLOPT_SSL_VERIFYHOST', 81);
define ('CURLOPT_SSL_VERIFYPEER', 64);
define ('CURLOPT_STDERR', 10037);
define ('CURLOPT_TELNETOPTIONS', 10070);
define ('CURLOPT_TIMECONDITION', 33);
define ('CURLOPT_TIMEOUT', 13);
define ('CURLOPT_TIMEVALUE', 34);
define ('CURLOPT_TRANSFERTEXT', 53);
define ('CURLOPT_UNRESTRICTED_AUTH', 105);
define ('CURLOPT_UPLOAD', 46);
define ('CURLOPT_URL', 10002);
define ('CURLOPT_USERAGENT', 10018);
define ('CURLOPT_USERPWD', 10005);
define ('CURLOPT_VERBOSE', 41);
define ('CURLOPT_WRITEFUNCTION', 20011);
define ('CURLOPT_WRITEHEADER', 10029);
define ('CURLE_ABORTED_BY_CALLBACK', 42);
define ('CURLE_BAD_CALLING_ORDER', 44);
define ('CURLE_BAD_CONTENT_ENCODING', 61);
define ('CURLE_BAD_DOWNLOAD_RESUME', 36);
define ('CURLE_BAD_FUNCTION_ARGUMENT', 43);
define ('CURLE_BAD_PASSWORD_ENTERED', 46);
define ('CURLE_COULDNT_CONNECT', 7);
define ('CURLE_COULDNT_RESOLVE_HOST', 6);
define ('CURLE_COULDNT_RESOLVE_PROXY', 5);
define ('CURLE_FAILED_INIT', 2);
define ('CURLE_FILE_COULDNT_READ_FILE', 37);
define ('CURLE_FTP_ACCESS_DENIED', 9);
define ('CURLE_FTP_BAD_DOWNLOAD_RESUME', 36);
define ('CURLE_FTP_CANT_GET_HOST', 15);
define ('CURLE_FTP_CANT_RECONNECT', 16);
define ('CURLE_FTP_COULDNT_GET_SIZE', 32);
define ('CURLE_FTP_COULDNT_RETR_FILE', 19);
define ('CURLE_FTP_COULDNT_SET_ASCII', 29);
define ('CURLE_FTP_COULDNT_SET_BINARY', 17);
define ('CURLE_FTP_COULDNT_STOR_FILE', 25);
define ('CURLE_FTP_COULDNT_USE_REST', 31);
define ('CURLE_FTP_PARTIAL_FILE', 18);
define ('CURLE_FTP_PORT_FAILED', 30);
define ('CURLE_FTP_QUOTE_ERROR', 21);
define ('CURLE_FTP_USER_PASSWORD_INCORRECT', 10);
define ('CURLE_FTP_WEIRD_227_FORMAT', 14);
define ('CURLE_FTP_WEIRD_PASS_REPLY', 11);
define ('CURLE_FTP_WEIRD_PASV_REPLY', 13);
define ('CURLE_FTP_WEIRD_SERVER_REPLY', 8);
define ('CURLE_FTP_WEIRD_USER_REPLY', 12);
define ('CURLE_FTP_WRITE_ERROR', 20);
define ('CURLE_FUNCTION_NOT_FOUND', 41);
define ('CURLE_GOT_NOTHING', 52);
define ('CURLE_HTTP_NOT_FOUND', 22);
define ('CURLE_HTTP_PORT_FAILED', 45);
define ('CURLE_HTTP_POST_ERROR', 34);
define ('CURLE_HTTP_RANGE_ERROR', 33);
define ('CURLE_HTTP_RETURNED_ERROR', 22);
define ('CURLE_LDAP_CANNOT_BIND', 38);
define ('CURLE_LDAP_SEARCH_FAILED', 39);
define ('CURLE_LIBRARY_NOT_FOUND', 40);
define ('CURLE_MALFORMAT_USER', 24);
define ('CURLE_OBSOLETE', 50);
define ('CURLE_OK', 0);
define ('CURLE_OPERATION_TIMEDOUT', 28);
define ('CURLE_OPERATION_TIMEOUTED', 28);
define ('CURLE_OUT_OF_MEMORY', 27);
define ('CURLE_PARTIAL_FILE', 18);
define ('CURLE_READ_ERROR', 26);
define ('CURLE_RECV_ERROR', 56);
define ('CURLE_SEND_ERROR', 55);
define ('CURLE_SHARE_IN_USE', 57);
define ('CURLE_SSL_CACERT', 60);
define ('CURLE_SSL_CERTPROBLEM', 58);
define ('CURLE_SSL_CIPHER', 59);
define ('CURLE_SSL_CONNECT_ERROR', 35);
define ('CURLE_SSL_ENGINE_NOTFOUND', 53);
define ('CURLE_SSL_ENGINE_SETFAILED', 54);
define ('CURLE_SSL_PEER_CERTIFICATE', 51);
define ('CURLE_SSL_PINNEDPUBKEYNOTMATCH', 90);
define ('CURLE_TELNET_OPTION_SYNTAX', 49);
define ('CURLE_TOO_MANY_REDIRECTS', 47);
define ('CURLE_UNKNOWN_TELNET_OPTION', 48);
define ('CURLE_UNSUPPORTED_PROTOCOL', 1);
define ('CURLE_URL_MALFORMAT', 3);
define ('CURLE_URL_MALFORMAT_USER', 4);
define ('CURLE_WRITE_ERROR', 23);
define ('CURLINFO_CONNECT_TIME', 3145733);
define ('CURLINFO_CONTENT_LENGTH_DOWNLOAD', 3145743);
define ('CURLINFO_CONTENT_LENGTH_UPLOAD', 3145744);
define ('CURLINFO_CONTENT_TYPE', 1048594);
define ('CURLINFO_EFFECTIVE_URL', 1048577);
define ('CURLINFO_FILETIME', 2097166);

/**
 * PHP 5.1.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_HEADER_OUT', 2);
define ('CURLINFO_HEADER_SIZE', 2097163);
define ('CURLINFO_HTTP_CODE', 2097154);
define ('CURLINFO_LASTONE', 44);
define ('CURLINFO_NAMELOOKUP_TIME', 3145732);
define ('CURLINFO_PRETRANSFER_TIME', 3145734);

/**
 * PHP 5.2.4 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_PRIVATE', 1048597);
define ('CURLINFO_REDIRECT_COUNT', 2097172);
define ('CURLINFO_REDIRECT_TIME', 3145747);
define ('CURLINFO_REQUEST_SIZE', 2097164);
define ('CURLINFO_SIZE_DOWNLOAD', 3145736);
define ('CURLINFO_SIZE_UPLOAD', 3145735);
define ('CURLINFO_SPEED_DOWNLOAD', 3145737);
define ('CURLINFO_SPEED_UPLOAD', 3145738);
define ('CURLINFO_SSL_VERIFYRESULT', 2097165);
define ('CURLINFO_STARTTRANSFER_TIME', 3145745);
define ('CURLINFO_TOTAL_TIME', 3145731);
define ('CURLMSG_DONE', 1);
define ('CURLVERSION_NOW', 3);
define ('CURLM_BAD_EASY_HANDLE', 2);
define ('CURLM_BAD_HANDLE', 1);
define ('CURLM_CALL_MULTI_PERFORM', -1);
define ('CURLM_INTERNAL_ERROR', 4);
define ('CURLM_OK', 0);
define ('CURLM_OUT_OF_MEMORY', 3);
define ('CURLM_ADDED_ALREADY', 7);

/**
 * cURL 7.10 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_HTTP', 0);

/**
 * PHP 5.2.10 および cURL 7.10 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_SOCKS4', 4);

/**
 * cURL 7.10 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_SOCKS5', 5);
define ('CURLSHOPT_NONE', 0);
define ('CURLSHOPT_SHARE', 1);
define ('CURLSHOPT_UNSHARE', 2);
define ('CURL_HTTP_VERSION_1_0', 1);
define ('CURL_HTTP_VERSION_1_1', 2);
define ('CURL_HTTP_VERSION_NONE', 0);
define ('CURL_LOCK_DATA_COOKIE', 2);
define ('CURL_LOCK_DATA_DNS', 3);
define ('CURL_LOCK_DATA_SSL_SESSION', 4);
define ('CURL_NETRC_IGNORED', 0);
define ('CURL_NETRC_OPTIONAL', 1);
define ('CURL_NETRC_REQUIRED', 2);
define ('CURL_SSLVERSION_DEFAULT', 0);
define ('CURL_SSLVERSION_SSLv2', 2);
define ('CURL_SSLVERSION_SSLv3', 3);
define ('CURL_SSLVERSION_TLSv1', 1);
define ('CURL_TIMECOND_IFMODSINCE', 1);
define ('CURL_TIMECOND_IFUNMODSINCE', 2);
define ('CURL_TIMECOND_LASTMOD', 3);
define ('CURL_TIMECOND_NONE', 0);
define ('CURL_VERSION_IPV6', 1);
define ('CURL_VERSION_KERBEROS4', 2);
define ('CURL_VERSION_LIBZ', 8);
define ('CURL_VERSION_SSL', 4);
define ('CURLOPT_HTTPAUTH', 107);
define ('CURLAUTH_ANY', -17);
define ('CURLAUTH_ANYSAFE', -18);
define ('CURLAUTH_BASIC', 1);
define ('CURLAUTH_DIGEST', 2);
define ('CURLAUTH_GSSNEGOTIATE', 4);
define ('CURLAUTH_NONE', 0);
define ('CURLAUTH_NTLM', 8);
define ('CURLINFO_HTTP_CONNECTCODE', 2097174);
define ('CURLOPT_FTP_CREATE_MISSING_DIRS', 110);
define ('CURLOPT_PROXYAUTH', 111);
define ('CURLE_FILESIZE_EXCEEDED', 63);
define ('CURLE_LDAP_INVALID_URL', 62);
define ('CURLINFO_HTTPAUTH_AVAIL', 2097175);
define ('CURLINFO_RESPONSE_CODE', 2097154);
define ('CURLINFO_PROXYAUTH_AVAIL', 2097176);
define ('CURLOPT_FTP_RESPONSE_TIMEOUT', 112);
define ('CURLOPT_IPRESOLVE', 113);
define ('CURLOPT_MAXFILESIZE', 114);
define ('CURL_IPRESOLVE_V4', 1);
define ('CURL_IPRESOLVE_V6', 2);
define ('CURL_IPRESOLVE_WHATEVER', 0);
define ('CURLE_FTP_SSL_FAILED', 64);

/**
 * PHP 5.2.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPSSL_ALL', 3);

/**
 * PHP 5.2.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPSSL_CONTROL', 2);

/**
 * PHP 5.2.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPSSL_NONE', 0);

/**
 * PHP 5.2.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPSSL_TRY', 1);

/**
 * PHP 5.2.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_FTP_SSL', 119);
define ('CURLOPT_NETRC_FILE', 10118);

/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPAUTH_DEFAULT', 0);

/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPAUTH_SSL', 1);

/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTPAUTH_TLS', 2);

/**
 * PHP 5.1.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_FTPSSLAUTH', 129);
define ('CURLOPT_FTP_ACCOUNT', 10134);

/**
 * PHP 5.2.1 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_TCP_NODELAY', 121);
define ('CURLINFO_OS_ERRNO', 2097177);
define ('CURLINFO_NUM_CONNECTS', 2097178);
define ('CURLINFO_SSL_ENGINES', 4194331);
define ('CURLINFO_COOKIELIST', 4194332);
define ('CURLOPT_COOKIELIST', 10135);
define ('CURLOPT_IGNORE_CONTENT_LENGTH', 136);
define ('CURLOPT_FTP_SKIP_PASV_IP', 137);
define ('CURLOPT_FTP_FILEMETHOD', 138);
define ('CURLOPT_CONNECT_ONLY', 141);
define ('CURLOPT_LOCALPORT', 139);
define ('CURLOPT_LOCALPORTRANGE', 140);
define ('CURLFTPMETHOD_MULTICWD', 1);
define ('CURLFTPMETHOD_NOCWD', 2);
define ('CURLFTPMETHOD_SINGLECWD', 3);
define ('CURLINFO_FTP_ENTRY_PATH', 1048606);
define ('CURLOPT_FTP_ALTERNATIVE_TO_USER', 10147);

/**
 * PHP 5.4.0 および cURL 7.15.5 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_MAX_RECV_SPEED_LARGE', 30146);

/**
 * PHP 5.4.0 および cURL 7.15.5 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_MAX_SEND_SPEED_LARGE', 30145);
define ('CURLE_SSL_CACERT_BADFILE', 77);
define ('CURLOPT_SSL_SESSIONID_CACHE', 150);

/**
 * PHP 5.5.0 および cURL 7.16.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_PIPELINING', 3);

/**
 * PHP 5.3.0 および cURL 7.16.1 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLE_SSH', 79);
define ('CURLOPT_FTP_SSL_CCC', 154);
define ('CURLOPT_SSH_AUTH_TYPES', 151);
define ('CURLOPT_SSH_PRIVATE_KEYFILE', 10153);
define ('CURLOPT_SSH_PUBLIC_KEYFILE', 10152);
define ('CURLFTPSSL_CCC_ACTIVE', 2);
define ('CURLFTPSSL_CCC_NONE', 0);
define ('CURLFTPSSL_CCC_PASSIVE', 1);
define ('CURLOPT_CONNECTTIMEOUT_MS', 156);
define ('CURLOPT_HTTP_CONTENT_DECODING', 158);
define ('CURLOPT_HTTP_TRANSFER_DECODING', 157);
define ('CURLOPT_TIMEOUT_MS', 155);

/**
 * PHP 5.5.0 および cURL 7.16.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_MAXCONNECTS', 6);
define ('CURLOPT_KRBLEVEL', 10063);
define ('CURLOPT_NEW_DIRECTORY_PERMS', 160);
define ('CURLOPT_NEW_FILE_PERMS', 159);
define ('CURLOPT_APPEND', 50);
define ('CURLOPT_DIRLISTONLY', 48);
define ('CURLOPT_USE_SSL', 119);
define ('CURLUSESSL_ALL', 3);
define ('CURLUSESSL_CONTROL', 2);
define ('CURLUSESSL_NONE', 0);
define ('CURLUSESSL_TRY', 1);
define ('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5', 10162);
define ('CURLOPT_PROXY_TRANSFER_MODE', 166);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_ALL', 5);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_CONT', 0);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_RECV', 1);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_RECV_CONT', 0);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_SEND', 4);

/**
 * PHP 5.5.0 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPAUSE_SEND_CONT', 0);
define ('CURL_READFUNC_PAUSE', 268435457);
define ('CURL_WRITEFUNC_PAUSE', 268435457);

/**
 * PHP 5.5.23 と PHP 5.6.7 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_SOCKS4A', 6);

/**
 * PHP 5.5.23 と PHP 5.6.7 および cURL 7.18.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_SOCKS5_HOSTNAME', 7);

/**
 * PHP 5.3.7 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_REDIRECT_URL', 1048607);
define ('CURLINFO_APPCONNECT_TIME', 3145761);

/**
 * PHP 5.4.7 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_PRIMARY_IP', 1048608);
define ('CURLOPT_ADDRESS_SCOPE', 171);
define ('CURLOPT_CRLFILE', 10169);
define ('CURLOPT_ISSUERCERT', 10170);
define ('CURLOPT_KEYPASSWD', 10026);
define ('CURLSSH_AUTH_ANY', -1);
define ('CURLSSH_AUTH_DEFAULT', -1);
define ('CURLSSH_AUTH_HOST', 4);
define ('CURLSSH_AUTH_KEYBOARD', 8);
define ('CURLSSH_AUTH_NONE', 0);
define ('CURLSSH_AUTH_PASSWORD', 2);
define ('CURLSSH_AUTH_PUBLICKEY', 1);
define ('CURLINFO_CERTINFO', 4194338);
define ('CURLOPT_CERTINFO', 172);
define ('CURLOPT_PASSWORD', 10174);
define ('CURLOPT_POSTREDIR', 161);
define ('CURLOPT_PROXYPASSWORD', 10176);
define ('CURLOPT_PROXYUSERNAME', 10175);

/**
 * PHP 5.5.0 および cURL 7.19.1 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_USERNAME', 10173);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_REDIR_POST_301', 1);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_REDIR_POST_302', 2);

/**
 * PHP 7.0.7 および cURL 7.18.2 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_REDIR_POST_ALL', 7);
define ('CURLAUTH_DIGEST_IE', 16);
define ('CURLINFO_CONDITION_UNMET', 2097187);
define ('CURLOPT_NOPROXY', 10177);
define ('CURLOPT_PROTOCOLS', 181);
define ('CURLOPT_REDIR_PROTOCOLS', 182);
define ('CURLOPT_SOCKS5_GSSAPI_NEC', 180);
define ('CURLOPT_SOCKS5_GSSAPI_SERVICE', 10179);
define ('CURLOPT_TFTP_BLKSIZE', 178);
define ('CURLPROTO_ALL', -1);
define ('CURLPROTO_DICT', 512);
define ('CURLPROTO_FILE', 1024);
define ('CURLPROTO_FTP', 4);
define ('CURLPROTO_FTPS', 8);
define ('CURLPROTO_HTTP', 1);
define ('CURLPROTO_HTTPS', 2);
define ('CURLPROTO_LDAP', 128);
define ('CURLPROTO_LDAPS', 256);
define ('CURLPROTO_SCP', 16);
define ('CURLPROTO_SFTP', 32);
define ('CURLPROTO_TELNET', 64);
define ('CURLPROTO_TFTP', 2048);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROXY_HTTP_1_0', 1);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTP_CREATE_DIR', 1);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTP_CREATE_DIR_NONE', 0);

/**
 * PHP 7.0.7 および cURL 7.19.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLFTP_CREATE_DIR_RETRY', 2);
define ('CURLOPT_SSH_KNOWNHOSTS', 10183);
define ('CURLINFO_RTSP_CLIENT_CSEQ', 2097189);
define ('CURLINFO_RTSP_CSEQ_RECV', 2097191);
define ('CURLINFO_RTSP_SERVER_CSEQ', 2097190);
define ('CURLINFO_RTSP_SESSION_ID', 1048612);
define ('CURLOPT_FTP_USE_PRET', 188);
define ('CURLOPT_MAIL_FROM', 10186);
define ('CURLOPT_MAIL_RCPT', 10187);
define ('CURLOPT_RTSP_CLIENT_CSEQ', 193);
define ('CURLOPT_RTSP_REQUEST', 189);
define ('CURLOPT_RTSP_SERVER_CSEQ', 194);
define ('CURLOPT_RTSP_SESSION_ID', 10190);
define ('CURLOPT_RTSP_STREAM_URI', 10191);
define ('CURLOPT_RTSP_TRANSPORT', 10192);
define ('CURLPROTO_IMAP', 4096);
define ('CURLPROTO_IMAPS', 8192);
define ('CURLPROTO_POP3', 16384);
define ('CURLPROTO_POP3S', 32768);
define ('CURLPROTO_RTSP', 262144);
define ('CURLPROTO_SMTP', 65536);
define ('CURLPROTO_SMTPS', 131072);
define ('CURL_RTSPREQ_ANNOUNCE', 3);
define ('CURL_RTSPREQ_DESCRIBE', 2);
define ('CURL_RTSPREQ_GET_PARAMETER', 8);
define ('CURL_RTSPREQ_OPTIONS', 1);
define ('CURL_RTSPREQ_PAUSE', 6);
define ('CURL_RTSPREQ_PLAY', 5);
define ('CURL_RTSPREQ_RECEIVE', 11);
define ('CURL_RTSPREQ_RECORD', 10);
define ('CURL_RTSPREQ_SET_PARAMETER', 9);
define ('CURL_RTSPREQ_SETUP', 4);
define ('CURL_RTSPREQ_TEARDOWN', 7);

/**
 * PHP 5.4.7 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_LOCAL_IP', 1048617);

/**
 * PHP 5.4.7 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_LOCAL_PORT', 2097194);

/**
 * PHP 5.4.7 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLINFO_PRIMARY_PORT', 2097192);
define ('CURLOPT_FNMATCH_FUNCTION', 20200);
define ('CURLOPT_WILDCARDMATCH', 197);
define ('CURLPROTO_RTMP', 524288);
define ('CURLPROTO_RTMPE', 2097152);
define ('CURLPROTO_RTMPS', 8388608);
define ('CURLPROTO_RTMPT', 1048576);
define ('CURLPROTO_RTMPTE', 4194304);
define ('CURLPROTO_RTMPTS', 16777216);
define ('CURL_FNMATCHFUNC_FAIL', 2);
define ('CURL_FNMATCHFUNC_MATCH', 0);
define ('CURL_FNMATCHFUNC_NOMATCH', 1);
define ('CURLPROTO_GOPHER', 33554432);
define ('CURLAUTH_ONLY', 2147483648);
define ('CURLOPT_RESOLVE', 10203);
define ('CURLOPT_TLSAUTH_PASSWORD', 10205);
define ('CURLOPT_TLSAUTH_TYPE', 10206);
define ('CURLOPT_TLSAUTH_USERNAME', 10204);
define ('CURL_TLSAUTH_SRP', 1);
define ('CURLOPT_ACCEPT_ENCODING', 10102);
define ('CURLOPT_TRANSFER_ENCODING', 207);

/**
 * PHP 7.0.7 および cURL 7.22.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLAUTH_NTLM_WB', 32);
define ('CURLGSSAPI_DELEGATION_FLAG', 2);
define ('CURLGSSAPI_DELEGATION_POLICY_FLAG', 1);
define ('CURLOPT_GSSAPI_DELEGATION', 210);
define ('CURLOPT_ACCEPTTIMEOUT_MS', 212);
define ('CURLOPT_DNS_SERVERS', 10211);
define ('CURLOPT_MAIL_AUTH', 10217);

/**
 * PHP 5.5.0 および cURL 7.25.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SSL_OPTIONS', 216);
define ('CURLOPT_TCP_KEEPALIVE', 213);
define ('CURLOPT_TCP_KEEPIDLE', 214);
define ('CURLOPT_TCP_KEEPINTVL', 215);

/**
 * PHP 5.5.0 および cURL 7.25.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLSSLOPT_ALLOW_BEAST', 1);

/**
 * PHP 7.0.7 および cURL 7.25.1 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_REDIR_POST_303', 4);

/**
 * PHP 7.0.7 および cURL 7.28.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLSSH_AUTH_AGENT', 16);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE', 30010);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE', 30009);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_MAX_HOST_CONNECTIONS', 7);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_MAX_PIPELINE_LENGTH', 8);

/**
 * PHP 7.0.7 および cURL 7.30.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLMOPT_MAX_TOTAL_CONNECTIONS', 13);

/**
 * PHP 7.0.7 および cURL 7.31.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SASL_IR', 218);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_DNS_INTERFACE', 10221);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_DNS_LOCAL_IP4', 10222);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_DNS_LOCAL_IP6', 10223);

/**
 * PHP 7.0.7 および cURL 7.33.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_XOAUTH2_BEARER', 10220);
define ('CURL_HTTP_VERSION_2_0', 3);

/**
 * PHP 5.5.24、PHP 5.6.8 および cURL 7.33.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_VERSION_HTTP2', 65536);

/**
 * PHP 7.0.7 および cURL 7.34.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_LOGIN_OPTIONS', 10224);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_SSLVERSION_TLSv1_0', 4);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_SSLVERSION_TLSv1_1', 5);

/**
 * PHP 5.5.19 および 5.6.3 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_SSLVERSION_TLSv1_2', 6);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_EXPECT_100_TIMEOUT_MS', 227);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SSL_ENABLE_ALPN', 226);

/**
 * PHP 7.0.7 および cURL 7.36.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SSL_ENABLE_NPN', 225);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLHEADER_SEPARATE', 1);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLHEADER_UNIFIED', 0);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_HEADEROPT', 229);

/**
 * PHP 7.0.7 および cURL 7.37.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PROXYHEADER', 10228);

/**
 * PHP 7.0.7 および cURL 7.38.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLAUTH_NEGOTIATE', 4);

/**
 * PHP 7.0.7 および cURL 7.39.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PINNEDPUBLICKEY', 10230);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_UNIX_SOCKET_PATH', 10231);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROTO_SMB', 67108864);

/**
 * PHP 7.0.7 および cURL 7.40.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPROTO_SMBS', 134217728);

/**
 * PHP 7.0.7 および cURL 7.41.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SSL_VERIFYSTATUS', 232);

/**
 * PHP 7.0.7 および cURL 7.42.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PATH_AS_IS', 234);

/**
 * PHP 7.0.7 および cURL 7.42.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SSL_FALSESTART', 233);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_HTTP_VERSION_2', 3);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PIPEWAIT', 237);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_PROXY_SERVICE_NAME', 10235);

/**
 * PHP 7.0.7 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_SERVICE_NAME', 10236);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPIPE_NOTHING', 0);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPIPE_HTTP1', 1);

/**
 * PHP 7.0.0 および cURL 7.43.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLPIPE_MULTIPLEX', 2);

/**
 * PHP 7.0.7 および cURL 7.44.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLSSLOPT_NO_REVOKE', 2);

/**
 * PHP 7.0.7 および cURL 7.45.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_DEFAULT_PROTOCOL', 10238);

/**
 * PHP 7.0.7 および cURL 7.46.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURLOPT_STREAM_WEIGHT', 239);

/**
 * PHP 7.0.7 および cURL 7.47.0 以降で使用可能です。
 * @link http://php.net/manual/ja/curl.constants.php
 */
define ('CURL_HTTP_VERSION_2TLS', 4);
define ('CURLOPT_SAFE_UPLOAD', -1);

// End of curl v.7.0.19
?>
