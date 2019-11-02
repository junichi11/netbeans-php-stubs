<?php



namespace {

	/**
	 * <p>Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.</p>
	 * @link https://php.net/manual/ja/class.solrclient.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrClient {

		/**
		 * @var integer <p>Used when updating the search servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const SEARCH_SERVLET_TYPE = 1;

		/**
		 * @var integer <p>Used when updating the update servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const UPDATE_SERVLET_TYPE = 2;

		/**
		 * @var integer <p>Used when updating the threads servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const THREADS_SERVLET_TYPE = 4;

		/**
		 * @var integer <p>Used when updating the ping servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const PING_SERVLET_TYPE = 8;

		/**
		 * @var integer <p>Used when updating the terms servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const TERMS_SERVLET_TYPE = 16;

		/**
		 * @var integer <p>Used when retrieving system information from the system servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const SYSTEM_SERVLET_TYPE = 32;

		/**
		 * @var string <p>This is the initial value for the search servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_SEARCH_SERVLET = 'select';

		/**
		 * @var string <p>This is the initial value for the update servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_UPDATE_SERVLET = 'update';

		/**
		 * @var string <p>This is the initial value for the threads servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_THREADS_SERVLET = 'admin/threads';

		/**
		 * @var string <p>This is the initial value for the ping servlet.</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_PING_SERVLET = 'admin/ping';

		/**
		 * @var string <p>This is the initial value for the terms servlet used for the TermsComponent</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_TERMS_SERVLET = 'terms';

		/**
		 * @var string <p>This is the initial value for the system servlet used to obtain Solr Server information</p>
		 * @link https://php.net/manual/ja/class.solrclient.php
		 */
		const DEFAULT_SYSTEM_SERVLET = 'admin/system';

		/**
		 * Constructor for the SolrClient object
		 * <p>Constructor for the SolrClient object</p>
		 * @param array $clientOptions <p>This is an array containing one of the following keys :</p> <p></p> <pre>- secure (Boolean value indicating whether or not to connect in secure mode) - hostname (The hostname for the Solr server) - port (The port number) - path (The path to solr) - wt (The name of the response writer e.g. xml, json) - login (The username used for HTTP Authentication, if any) - password (The HTTP Authentication password) - proxy_host (The hostname for the proxy server, if any) - proxy_port (The proxy port) - proxy_login (The proxy username) - proxy_password (The proxy password) - timeout (This is maximum time in seconds allowed for the http data transfer operation. Default is 30 seconds) - ssl_cert (File name to a PEM-formatted file containing the private key + private certificate (concatenated in that order) ) - ssl_key (File name to a PEM-formatted private key file only) - ssl_keypassword (Password for private key) - ssl_cainfo (Name of file holding one or more CA certificates to verify peer with) - ssl_capath (Name of directory holding multiple CA certificates to verify peer with ) Please note the if the ssl_cert file only contains the private certificate, you have to specify a separate ssl_key file The ssl_keypassword option is required if the ssl_cert or ssl_key options are set.</pre>
		 * @return self
		 * @link https://php.net/manual/ja/solrclient.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct(array $clientOptions) {}

		/**
		 * SolrClient に対するデストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>SolrClient に対するデストラクタ</p>
		 * @link https://php.net/manual/ja/solrclient.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a document to the index
		 * <p>This method adds a document to the index.</p>
		 * @param \SolrInputDocument $doc <p>The SolrInputDocument instance.</p>
		 * @param bool $overwrite <p>Whether to overwrite existing document or not. If <b><code>FALSE</code></b> there will be duplicates (several documents with the same ID).</p>  <b>警告</b> <p>PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.</p> <p>$allowDups = false is the same as $overwrite = true</p>
		 * @param int $commitWithin <p>Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.</p> <p>When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a commit when the oldest add in the buffer is due.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> object or throws an Exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.adddocument.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addDocument(\SolrInputDocument $doc, bool $overwrite = TRUE, int $commitWithin = 0): \SolrUpdateResponse {}

		/**
		 * Adds a collection of SolrInputDocument instances to the index
		 * <p>Adds a collection of documents to the index.</p>
		 * @param array $docs <p>An array containing the collection of SolrInputDocument instances. This array must be an actual variable.</p>
		 * @param bool $overwrite <p>Whether to overwrite existing documents or not. If <b><code>FALSE</code></b> there will be duplicates (several documents with the same ID).</p>  <b>警告</b> <p>PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.</p> <p>$allowDups = false is the same as $overwrite = true</p>
		 * @param int $commitWithin <p>Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.</p> <p>When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a commit when the oldest add in the buffer is due.</p>
		 * @return void <p>Returns a <code>SolrUpdateResponse</code> object or throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.adddocuments.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addDocuments(array $docs, bool $overwrite = TRUE, int $commitWithin = 0): void {}

		/**
		 * Finalizes all add/deletes made to the index
		 * <p>This method finalizes all add/deletes made to the index.</p>
		 * @param bool $softCommit <p>This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)</p> <p>A soft commit is much faster since it only makes index changes visible and does not fsync index files or write a new index descriptor. If the JVM crashes or there is a loss of power, changes that occurred after the last hard commit will be lost. Search collections that have near-real-time requirements (that want index changes to be quickly visible to searches) will want to soft commit often but hard commit less frequently.</p>
		 * @param bool $waitSearcher <p>block until a new searcher is opened and registered as the main query searcher, making the changes visible.</p>
		 * @param bool $expungeDeletes <p>Merge segments with deletes away. (Solr1.4+)</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse object on success or throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.commit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function commit(bool $softCommit = FALSE, bool $waitSearcher = TRUE, bool $expungeDeletes = FALSE): \SolrUpdateResponse {}

		/**
		 * Delete by Id
		 * <p>Deletes the document with the specified ID. Where ID is the value of the uniqueKey field declared in the schema</p>
		 * @param string $id <p>The value of the uniqueKey field declared in the schema</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.deletebyid.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteById(string $id): \SolrUpdateResponse {}

		/**
		 * Deletes by Ids
		 * <p>Deletes a collection of documents with the specified set of ids.</p>
		 * @param array $ids <p>An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted. This must be an actual php variable.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.deletebyids.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByIds(array $ids): \SolrUpdateResponse {}

		/**
		 * Removes all documents matching any of the queries
		 * <p>Removes all documents matching any of the queries</p>
		 * @param array $queries <p>The array of queries. This must be an actual php variable.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success and throws a SolrClientException on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.deletebyqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByQueries(array $queries): \SolrUpdateResponse {}

		/**
		 * Deletes all documents matching the given query
		 * <p>Deletes all documents matching the given query.</p>
		 * @param string $query <p>The query</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.deletebyquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByQuery(string $query): \SolrUpdateResponse {}

		/**
		 * Get Document By Id. Utilizes Solr Realtime Get (RTG)
		 * <p>Get Document By Id. Utilizes Solr Realtime Get (RTG).</p>
		 * @param string $id <p>Document ID</p>
		 * @return SolrQueryResponse <p><code>SolrQueryResponse</code></p>
		 * @link https://php.net/manual/ja/solrclient.getbyid.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getById(string $id): \SolrQueryResponse {}

		/**
		 * Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)
		 * <p>Get Documents by their Ids. Utilizes Solr Realtime Get (RTG).</p>
		 * @param array $ids <p>Document ids</p>
		 * @return SolrQueryResponse <p><code>SolrQueryResponse</code></p>
		 * @link https://php.net/manual/ja/solrclient.getbyids.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getByIds(array $ids): \SolrQueryResponse {}

		/**
		 * Returns the debug data for the last connection attempt
		 * <p>Returns the debug data for the last connection attempt</p>
		 * @return string <p>Returns a string on success and null if there is nothing to return.</p>
		 * @link https://php.net/manual/ja/solrclient.getdebug.php
		 * @since PECL solr >= 0.9.7
		 */
		public function getDebug(): string {}

		/**
		 * Returns the client options set internally
		 * <p>Returns the client options set internally. Very useful for debugging. The values returned are readonly and can only be set when the object is instantiated.</p>
		 * @return array <p>Returns an array containing all the options for the SolrClient object set internally.</p>
		 * @link https://php.net/manual/ja/solrclient.getoptions.php
		 * @since PECL solr >= 0.9.6
		 */
		public function getOptions(): array {}

		/**
		 * Defragments the index
		 * <p>Defragments the index for faster search performance.</p>
		 * @param int $maxSegments <p>Optimizes down to at most this number of segments. Since Solr 1.3</p>
		 * @param bool $softCommit <p>This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)</p>
		 * @param bool $waitSearcher <p>Block until a new searcher is opened and registered as the main query searcher, making the changes visible.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success or throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.optimize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function optimize(int $maxSegments = 1, bool $softCommit = TRUE, bool $waitSearcher = TRUE): \SolrUpdateResponse {}

		/**
		 * Checks if Solr server is still up
		 * <p>Checks if the Solr server is still alive. Sends a HEAD request to the Apache Solr server.</p>
		 * @return SolrPingResponse <p>Returns a <code>SolrPingResponse</code> object on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.ping.php
		 * @since PECL solr >= 0.9.2
		 */
		public function ping(): \SolrPingResponse {}

		/**
		 * Sends a query to the server
		 * <p>Sends a query to the server.</p>
		 * @param \SolrParams $query <p>A <code>SolrParams</code> object. It is recommended to use <code>SolrQuery</code> for advanced queries.</p>
		 * @return SolrQueryResponse <p>Returns a <code>SolrQueryResponse</code> object on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.query.php
		 * @since PECL solr >= 0.9.2
		 */
		public function query(\SolrParams $query): \SolrQueryResponse {}

		/**
		 * Sends a raw update request
		 * <p>Sends a raw XML update request to the server</p>
		 * @param string $raw_request <p>An XML string with the raw request to the server.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success. Throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.request.php
		 * @since PECL solr >= 0.9.2
		 */
		public function request(string $raw_request): \SolrUpdateResponse {}

		/**
		 * Rollbacks all add/deletes made to the index since the last commit
		 * <p>Rollbacks all add/deletes made to the index since the last commit. It neither calls any event listeners nor creates a new searcher.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success or throws a SolrClientException on failure.</p>
		 * @link https://php.net/manual/ja/solrclient.rollback.php
		 * @since PECL solr >= 0.9.2
		 */
		public function rollback(): \SolrUpdateResponse {}

		/**
		 * Sets the response writer used to prepare the response from Solr
		 * <p>Sets the response writer used to prepare the response from Solr</p>
		 * @param string $responseWriter <p>One of the following:</p> <ul> <li><i>json</i></li> <li><i>phps</i></li> <li><i>xml</i></li> </ul>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/solrclient.setresponsewriter.php
		 * @since PECL solr >= 0.9.11
		 */
		public function setResponseWriter(string $responseWriter): void {}

		/**
		 * Changes the specified servlet type to a new value
		 * <p>Changes the specified servlet type to a new value</p>
		 * @param int $type <p>One of the following :</p> <p></p> <pre>- SolrClient::SEARCH_SERVLET_TYPE - SolrClient::UPDATE_SERVLET_TYPE - SolrClient::THREADS_SERVLET_TYPE - SolrClient::PING_SERVLET_TYPE - SolrClient::TERMS_SERVLET_TYPE</pre>
		 * @param string $value <p>The new value for the servlet</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrclient.setservlet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setServlet(int $type, string $value): bool {}

		/**
		 * Retrieve Solr Server information
		 * <p>Retrieve Solr Server information</p>
		 * @return void <p>Returns a <code>SolrGenericResponse</code> object on success.</p>
		 * @link https://php.net/manual/ja/solrclient.system.php
		 * @since PECL solr >= 2.0.0
		 */
		public function system(): void {}

		/**
		 * スレッドの状態をチェック
		 * <p>スレッドの状態をチェック</p>
		 * @return void <p>SolrGenericResponse オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/solrclient.threads.php
		 * @since PECL solr >= 0.9.2
		 */
		public function threads(): void {}
	}

	/**
	 * <p>クライアントからサーバーにリクエスト中にエラーがある際にスローされる例外。</p>
	 * @link https://php.net/manual/ja/class.solrclientexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrClientException extends \SolrException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrclientexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link https://php.net/manual/ja/class.solrcollapsefunction.php
	 * @since PECL solr >= 2.2.0
	 */
	class SolrCollapseFunction {

		/**
		 * @var string
		 * @link https://php.net/manual/ja/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_IGNORE = 'ignore';

		/**
		 * @var string
		 * @link https://php.net/manual/ja/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_EXPAND = 'expand';

		/**
		 * @var string
		 * @link https://php.net/manual/ja/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_COLLAPSE = 'collapse';

		/**
		 * Constructor
		 * <p>Collapse Function constructor</p>
		 * @param string $field <p>The field name to collapse on.</p> <p>In order to collapse a result. The field type must be a single valued String, Int or Float.</p>
		 * @return self
		 * @link https://php.net/manual/ja/solrcollapsefunction.construct.php
		 * @since PECL solr >= 2.2.0
		 */
		public function __construct(string $field = NULL) {}

		/**
		 * Returns a string representing the constructed collapse function
		 * <p>Returns a string representing the constructed collapse function</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.tostring.php
		 * @since PECL solr >= 2.2.0
		 */
		public function __toString(): string {}

		/**
		 * Returns the field that is being collapsed on
		 * <p>Returns the field that is being collapsed on.</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.getfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getField(): string {}

		/**
		 * Returns collapse hint
		 * <p>Returns collapse hint</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.gethint.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getHint(): string {}

		/**
		 * Returns max parameter
		 * <p>Returns max parameter</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.getmax.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getMax(): string {}

		/**
		 * Returns min parameter
		 * <p>Returns min parameter</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.getmin.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getMin(): string {}

		/**
		 * Returns null policy
		 * <p>Returns null policy used or null</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrcollapsefunction.getnullpolicy.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getNullPolicy(): string {}

		/**
		 * Returns size parameter
		 * <p>Gets the initial size of the collapse data structures when collapsing on a numeric field only</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrcollapsefunction.getsize.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getSize(): int {}

		/**
		 * Sets the field to collapse on
		 * <p>The field name to collapse on. In order to collapse a result. The field type must be a single valued String, Int or Float.</p>
		 * @param string $fieldName
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.setfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setField(string $fieldName): \SolrCollapseFunction {}

		/**
		 * Sets collapse hint
		 * <p>Sets collapse hint</p>
		 * @param string $hint <p>Currently there is only one hint available "top_fc", which stands for top level FieldCache</p>
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.sethint.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setHint(string $hint): \SolrCollapseFunction {}

		/**
		 * Selects the group heads by the max value of a numeric field or function query
		 * <p>Selects the group heads by the max value of a numeric field or function query.</p>
		 * @param string $max
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.setmax.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setMax(string $max): \SolrCollapseFunction {}

		/**
		 * Sets the initial size of the collapse data structures when collapsing on a numeric field only
		 * <p>Sets the initial size of the collapse data structures when collapsing on a numeric field only</p>
		 * @param string $min
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.setmin.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setMin(string $min): \SolrCollapseFunction {}

		/**
		 * Sets the NULL Policy
		 * <p>Sets the NULL Policy. One of the 3 policies defined as class constants shall be passed. Accepts ignore, expand, or collapse policies.</p>
		 * @param string $nullPolicy
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.setnullpolicy.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setNullPolicy(string $nullPolicy): \SolrCollapseFunction {}

		/**
		 * Sets the initial size of the collapse data structures when collapsing on a numeric field only
		 * <p>Sets the initial size of the collapse data structures when collapsing on a numeric field only.</p>
		 * @param int $size
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/ja/solrcollapsefunction.setsize.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setSize(int $size): \SolrCollapseFunction {}
	}

	/**
	 * @link https://php.net/manual/ja/class.solrdismaxquery.php
	 * @since No version information available, might only be in Git
	 */
	class SolrDisMaxQuery extends \SolrQuery implements \Serializable {

		/**
		 * Class Constructor
		 * <p>Class constructor initializes the object and sets the q parameter if passed</p>
		 * @param string $q <p>Search Query (q parameter)</p>
		 * @return self
		 * @link https://php.net/manual/ja/solrdismaxquery.construct.php
		 * @since No version information available, might only be in Git
		 */
		public function __construct(string $q = NULL) {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrquery.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a Phrase Bigram Field (pf2 parameter)
		 * <p>Adds a Phrase Bigram Field (pf2 parameter) output format: field~slop^boost OR field^boost Slop is optional</p>
		 * @param string $field
		 * @param string $boost
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.addbigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addBigramPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Adds a boost query field with value and optional boost (bq parameter)
		 * <p>Adds a Boost Query field with value [and boost] (bq parameter)</p>
		 * @param string $field
		 * @param string $value
		 * @param string $boost
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.addboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function addBoostQuery(string $field, string $value, string $boost = NULL): \SolrDisMaxQuery {}

		/**
		 * Overrides main filter query, determines which documents to include in the main group
		 * <p>Overrides main filter query, determines which documents to include in the main group.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Orders the documents within the expanded groups (expand.sort parameter)
		 * <p>Orders the documents within the expanded groups (expand.sort parameter).</p>
		 * @param string $field <p>field name</p>
		 * @param string $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants.</p> <p>Default: SolrQuery::ORDER_DESC</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandSortField(string $field, string $order = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date
		 * <p>This method allows you to specify a field which should be treated as a facet.</p><p>It can be used multiple times with different field names to indicate multiple facet fields</p>
		 * @param string $dateField <p>The name of the date field.</p>
		 * @return SolrQuery <p>Returns a SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateField(string $dateField): \SolrQuery {}

		/**
		 * Adds another facet.date.other parameter
		 * <p>Sets the facet.date.other parameter. Accepts an optional field override</p>
		 * @param string $value <p>The value to use.</p>
		 * @param string $field_override <p>The field name for the override.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Adds another field to the facet
		 * <p>Adds another field to the facet</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetField(string $field): \SolrQuery {}

		/**
		 * Adds a facet query
		 * <p>Adds a facet query</p>
		 * @param string $facetQuery <p>The facet query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetQuery(string $facetQuery): \SolrQuery {}

		/**
		 * Specifies which fields to return in the result
		 * <p>This method is used to used to specify a set of fields to return, thereby restricting the amount of data returned in the response.</p><p>It should be called multiple time, once for each field name.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/ja/solrquery.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $field): \SolrQuery {}

		/**
		 * Specifies a filter query
		 * <p>Specifies a filter query</p>
		 * @param string $fq <p>The filter query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addfilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Add a field to be used to group results
		 * <p>The name of the field by which to group results. The field must be single-valued, and either be indexed or a field type that has a value source and works in a function query, such as ExternalFileField. It must also be a string-based field, such as StrField or TextField Uses group.field parameter</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.addgroupfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupField(string $value): \SolrQuery {}

		/**
		 * Allows grouping results based on the unique values of a function query (group.func parameter)
		 * <p>Adds a group function (group.func parameter) Allows grouping results based on the unique values of a function query.</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addgroupfunction.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupFunction(string $value): \SolrQuery {}

		/**
		 * Allows grouping of documents that match the given query
		 * <p>Allows grouping of documents that match the given query. Adds query to the group.query parameter</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addgroupquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupQuery(string $value): \SolrQuery {}

		/**
		 * Add a group sort field (group.sort parameter)
		 * <p>Allow sorting group documents, using group sort field (group.sort parameter).</p>
		 * @param string $field <p>Field name</p>
		 * @param int $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.addgroupsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupSortField(string $field, int $order = NULL): \SolrQuery {}

		/**
		 * Maps to hl.fl
		 * <p>Maps to hl.fl. This is used to specify that highlighted snippets should be generated for a particular field</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addhighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addHighlightField(string $field): \SolrQuery {}

		/**
		 * Sets a field to use for similarity
		 * <p>Maps to mlt.fl. It specifies that a field should be used for similarity.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addmltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltField(string $field): \SolrQuery {}

		/**
		 * Maps to mlt.qf
		 * <p>Maps to mlt.qf. It is used to specify query fields and their boosts</p>
		 * @param string $field <p>The name of the field</p>
		 * @param float $boost <p>Its boost value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addmltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltQueryField(string $field, float $boost): \SolrQuery {}

		/**
		 * Adds a Phrase Field (pf parameter)
		 * <p>Adds a Phrase Field (pf parameter)</p>
		 * @param string $field <p>field name</p>
		 * @param string $boost
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.addphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Add a query field with optional boost (qf parameter)
		 * <p>Add a query field with optional boost (qf parameter)</p>
		 * @param string $field <p>field name</p>
		 * @param string $boost <p>Boost value. Boosts documents with matching terms.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.addqueryfield.php
		 * @since No version information available, might only be in Git
		 */
		public function addQueryField(string $field, string $boost = NULL): \SolrDisMaxQuery {}

		/**
		 * Used to control how the results should be sorted
		 * <p>Used to control how the results should be sorted.</p>
		 * @param string $field <p>The name of the field</p>
		 * @param int $order <p>The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addsortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addSortField(string $field, int $order = SolrQuery::ORDER_DESC): \SolrQuery {}

		/**
		 * Requests a return of sub results for values within the given facet
		 * <p>Requests a return of sub results for values within the given facet. Maps to the stats.facet field</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addstatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsFacet(string $field): \SolrQuery {}

		/**
		 * Maps to stats.field parameter
		 * <p>Maps to stats.field parameter This methods adds another stats.field parameter.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addstatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsField(string $field): \SolrQuery {}

		/**
		 * Adds a Trigram Phrase Field (pf3 parameter)
		 * <p>Adds a Trigram Phrase Field (pf3 parameter)</p>
		 * @param string $field <p>Field Name</p>
		 * @param string $boost <p>Field Boost</p>
		 * @param string $slop <p>Field Slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.addtrigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addTrigramPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Adds a field to User Fields Parameter (uf)
		 * <p>Adds a field to The User Fields Parameter (uf)</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.adduserfield.php
		 * @since No version information available, might only be in Git
		 */
		public function addUserField(string $field): \SolrDisMaxQuery {}

		/**
		 * Collapses the result set to a single document per group
		 * <p>Collapses the result set to a single document per group before it forwards the result set to the rest of the search components.</p><p>So all downstream components (faceting, highlighting, etc...) will work with the collapsed result set.</p>
		 * @param \SolrCollapseFunction $collapseFunction
		 * @return SolrQuery <p>Returns the current <code>SolrQuery</code> object</p>
		 * @link https://php.net/manual/ja/solrquery.collapse.php
		 * @since No version information available, might only be in Git
		 */
		public function collapse(\SolrCollapseFunction $collapseFunction): \SolrQuery {}

		/**
		 * Returns true if group expanding is enabled
		 * <p>Returns <b><code>TRUE</code></b> if group expanding is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpand(): bool {}

		/**
		 * Returns the expand filter queries
		 * <p>Returns the expand filter queries</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandfilterqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandFilterQueries(): array {}

		/**
		 * Returns the expand query expand.q parameter
		 * <p>Returns the expand query expand.q parameter</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandQuery(): array {}

		/**
		 * Returns The number of rows to display in each group (expand.rows)
		 * <p>Returns The number of rows to display in each group (expand.rows)</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandRows(): int {}

		/**
		 * Returns an array of fields
		 * <p>Returns an array of fields</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandSortFields(): array {}

		/**
		 * Returns the value of the facet parameter
		 * <p>Returns the value of the facet parameter.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacet(): bool {}

		/**
		 * Returns the value for the facet.date.end parameter
		 * <p>Returns the value for the facet.date.end parameter. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateEnd(string $field_override = NULL): string {}

		/**
		 * Returns all the facet.date fields
		 * <p>Returns all the facet.date fields</p>
		 * @return array <p>Returns all the facet.date fields as an array or <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatefields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateFields(): array {}

		/**
		 * Returns the value of the facet.date.gap parameter
		 * <p>Returns the value of the facet.date.gap parameter. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateGap(string $field_override = NULL): string {}

		/**
		 * Returns the value of the facet.date.hardend parameter
		 * <p>Returns the value of the facet.date.hardend parameter. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateHardEnd(string $field_override = NULL): string {}

		/**
		 * Returns the value for the facet.date.other parameter
		 * <p>Returns the value for the facet.date.other parameter. This method accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return array <p>Returns an <code>array</code> on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateOther(string $field_override = NULL): array {}

		/**
		 * Returns the lower bound for the first date range for all date faceting on this field
		 * <p>Returns the lower bound for the first date range for all date faceting on this field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateStart(string $field_override = NULL): string {}

		/**
		 * Returns all the facet fields
		 * <p>Returns all the facet fields</p>
		 * @return array <p>Returns an array of all the fields and <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetFields(): array {}

		/**
		 * Returns the maximum number of constraint counts that should be returned for the facet fields
		 * <p>Returns the maximum number of constraint counts that should be returned for the facet fields. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetLimit(string $field_override = NULL): int {}

		/**
		 * Returns the value of the facet.method parameter
		 * <p>Returns the value of the facet.method parameter. This accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMethod(string $field_override = NULL): string {}

		/**
		 * Returns the minimum counts for facet fields should be included in the response
		 * <p>Returns the minimum counts for facet fields should be included in the response. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMinCount(string $field_override = NULL): int {}

		/**
		 * Returns the current state of the facet.missing parameter
		 * <p>Returns the current state of the facet.missing parameter. This accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMissing(string $field_override = NULL): bool {}

		/**
		 * Returns an offset into the list of constraints to be used for pagination
		 * <p>Returns an offset into the list of constraints to be used for pagination. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetOffset(string $field_override = NULL): int {}

		/**
		 * Returns the facet prefix
		 * <p>Returns the facet prefix</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetPrefix(string $field_override = NULL): string {}

		/**
		 * Returns all the facet queries
		 * <p>Returns all the facet queries</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetQueries(): array {}

		/**
		 * Returns the facet sort type
		 * <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT)</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetSort(string $field_override = NULL): int {}

		/**
		 * Returns the list of fields that will be returned in the response
		 * <p>Returns the list of fields that will be returned in the response</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFields(): array {}

		/**
		 * Returns an array of filter queries
		 * <p>Returns an array of filter queries. These are queries that can be used to restrict the super set of documents that can be returned, without influencing score</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfilterqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFilterQueries(): array {}

		/**
		 * Returns true if grouping is enabled
		 * <p>Returns true if grouping is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroup(): bool {}

		/**
		 * Returns group cache percent value
		 * <p>Returns group cache percent value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupCachePercent(): int {}

		/**
		 * Returns the group.facet parameter value
		 * <p>Returns the group.facet parameter value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFacet(): bool {}

		/**
		 * Returns group fields (group.field parameter values)
		 * <p>Returns group fields (group.field parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFields(): array {}

		/**
		 * Returns the group.format value
		 * <p>Returns the group.format value</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrquery.getgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFormat(): string {}

		/**
		 * Returns group functions (group.func parameter values)
		 * <p>Returns group functions (group.func parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupfunctions.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFunctions(): array {}

		/**
		 * Returns the group.limit value
		 * <p>Returns the group.limit value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupLimit(): int {}

		/**
		 * Returns the group.main value
		 * <p>Returns the group.main value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupMain(): bool {}

		/**
		 * Returns the group.ngroups value
		 * <p>Returns the group.ngroups value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupNGroups(): bool {}

		/**
		 * Returns the group.offset value
		 * <p>Returns the group.offset value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupOffset(): int {}

		/**
		 * Returns all the group.query parameter values
		 * <p>Returns all the group.query parameter values</p>
		 * @return array <p><code>array</code></p>
		 * @link https://php.net/manual/ja/solrquery.getgroupqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupQueries(): array {}

		/**
		 * Returns the group.sort value
		 * <p>Returns the group.sort value</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupSortFields(): array {}

		/**
		 * Returns the group.truncate value
		 * <p>Returns the group.truncate value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupTruncate(): bool {}

		/**
		 * Returns the state of the hl parameter
		 * <p>Returns a boolean indicating whether or not to enable highlighted snippets to be generated in the query response.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlight(): bool {}

		/**
		 * Returns the highlight field to use as backup or default
		 * <p>Returns the highlight field to use as backup or default. It accepts an optional override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightAlternateField(string $field_override = NULL): string {}

		/**
		 * Returns all the fields that Solr should generate highlighted snippets for
		 * <p>Returns all the fields that Solr should generate highlighted snippets for</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFields(): array {}

		/**
		 * Returns the formatter for the highlighted output
		 * <p>Returns the formatter for the highlighted output</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFormatter(string $field_override = NULL): string {}

		/**
		 * Returns the text snippet generator for highlighted text
		 * <p>Returns the text snippet generator for highlighted text. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragmenter(string $field_override = NULL): string {}

		/**
		 * Returns the number of characters of fragments to consider for highlighting
		 * <p>Returns the number of characters of fragments to consider for highlighting. Zero implies no fragmenting. The entire field should be used.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragsize(string $field_override = NULL): int {}

		/**
		 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
		 * <p>Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightHighlightMultiTerm(): bool {}

		/**
		 * Returns the maximum number of characters of the field to return
		 * <p>Returns the maximum number of characters of the field to return</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAlternateFieldLength(string $field_override = NULL): int {}

		/**
		 * Returns the maximum number of characters into a document to look for suitable snippets
		 * <p>Returns the maximum number of characters into a document to look for suitable snippets</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAnalyzedChars(): int {}

		/**
		 * Returns whether or not the collapse contiguous fragments into a single fragment
		 * <p>Returns whether or not the collapse contiguous fragments into a single fragment. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMergeContiguous(string $field_override = NULL): bool {}

		/**
		 * Returns the maximum number of characters from a field when using the regex fragmenter
		 * <p>Returns the maximum number of characters from a field when using the regex fragmenter</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexMaxAnalyzedChars(): int {}

		/**
		 * Returns the regular expression for fragmenting
		 * <p>Returns the regular expression used for fragmenting</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexPattern(): string {}

		/**
		 * Returns the deviation factor from the ideal fragment size
		 * <p>Returns the factor by which the regex fragmenter can deviate from the ideal fragment size to accomodate the regular expression</p>
		 * @return float <p>Returns a double on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexSlop(): float {}

		/**
		 * Returns if a field will only be highlighted if the query matched in this particular field
		 * <p>Returns if a field will only be highlighted if the query matched in this particular field.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRequireFieldMatch(): bool {}

		/**
		 * Returns the text which appears after a highlighted term
		 * <p>Returns the text which appears after a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePost(string $field_override = NULL): string {}

		/**
		 * Returns the text which appears before a highlighted term
		 * <p>Returns the text which appears before a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePre(string $field_override = NULL): string {}

		/**
		 * Returns the maximum number of highlighted snippets to generate per field
		 * <p>Returns the maximum number of highlighted snippets to generate per field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSnippets(string $field_override = NULL): int {}

		/**
		 * Returns the state of the hl.usePhraseHighlighter parameter
		 * <p>Returns whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightUsePhraseHighlighter(): bool {}

		/**
		 * Returns whether or not MoreLikeThis results should be enabled
		 * <p>Returns whether or not MoreLikeThis results should be enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMlt(): bool {}

		/**
		 * Returns whether or not the query will be boosted by the interesting term relevance
		 * <p>Returns whether or not the query will be boosted by the interesting term relevance</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltBoost(): bool {}

		/**
		 * Returns the number of similar documents to return for each result
		 * <p>Returns the number of similar documents to return for each result</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltCount(): int {}

		/**
		 * Returns all the fields to use for similarity
		 * <p>Returns all the fields to use for similarity</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltFields(): array {}

		/**
		 * Returns the maximum number of query terms that will be included in any generated query
		 * <p>Returns the maximum number of query terms that will be included in any generated query</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumQueryTerms(): int {}

		/**
		 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
		 * <p>Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumTokens(): int {}

		/**
		 * Returns the maximum word length above which words will be ignored
		 * <p>Returns the maximum word length above which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxWordLength(): int {}

		/**
		 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
		 * <p>Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinDocFrequency(): int {}

		/**
		 * Returns the frequency below which terms will be ignored in the source document
		 * <p>Returns the frequency below which terms will be ignored in the source document</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinTermFrequency(): int {}

		/**
		 * Returns the minimum word length below which words will be ignored
		 * <p>Returns the minimum word length below which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinWordLength(): int {}

		/**
		 * Returns the query fields and their boosts
		 * <p>Returns the query fields and their boosts</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltqueryfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltQueryFields(): array {}

		/**
		 * 主なクエリーを返す
		 * <p>主な検索クエリーを返します。</p>
		 * @return string <p>成功した場合は文字列、設定されなかった場合には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrquery.getquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getQuery(): string {}

		/**
		 * Returns the maximum number of documents
		 * <p>Returns the maximum number of documents from the complete result set to return to the client for every request</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRows(): int {}

		/**
		 * Returns all the sort fields
		 * <p>Returns all the sort fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if none of the parameters was set.</p>
		 * @link https://php.net/manual/ja/solrquery.getsortfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getSortFields(): array {}

		/**
		 * Returns the offset in the complete result set
		 * <p>Returns the offset in the complete result set for the queries where the set of returned documents should begin.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStart(): int {}

		/**
		 * Returns whether or not stats is enabled
		 * <p>Returns whether or not stats is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStats(): bool {}

		/**
		 * Returns all the stats facets that were set
		 * <p>Returns all the stats facets that were set</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstatsfacets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFacets(): array {}

		/**
		 * Returns all the statistics fields
		 * <p>Returns all the statistics fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstatsfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFields(): array {}

		/**
		 * Returns whether or not the TermsComponent is enabled
		 * <p>Returns whether or not the TermsComponent is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTerms(): bool {}

		/**
		 * Returns the field from which the terms are retrieved
		 * <p>Returns the field from which the terms are retrieved</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsField(): string {}

		/**
		 * Returns whether or not to include the lower bound in the result set
		 * <p>Returns whether or not to include the lower bound in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeLowerBound(): bool {}

		/**
		 * Returns whether or not to include the upper bound term in the result set
		 * <p>Returns whether or not to include the upper bound term in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeUpperBound(): bool {}

		/**
		 * Returns the maximum number of terms Solr should return
		 * <p>Returns the maximum number of terms Solr should return</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLimit(): int {}

		/**
		 * Returns the term to start at
		 * <p>Returns the term to start at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLowerBound(): string {}

		/**
		 * Returns the maximum document frequency
		 * <p>Returns the maximum document frequency</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMaxCount(): int {}

		/**
		 * Returns the minimum document frequency to return in order to be included
		 * <p>Returns the minimum document frequency to return in order to be included</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMinCount(): int {}

		/**
		 * Returns the term prefix
		 * <p>Returns the prefix to which matching terms must be restricted. This will restrict matches to only terms that start with the prefix</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsPrefix(): string {}

		/**
		 * Whether or not to return raw characters
		 * <p>Returns a boolean indicating whether or not to return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsReturnRaw(): bool {}

		/**
		 * Returns an integer indicating how terms are sorted
		 * <p>SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order. SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsSort(): int {}

		/**
		 * Returns the term to stop at
		 * <p>Returns the term to stop at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsUpperBound(): string {}

		/**
		 * Returns the time in milliseconds allowed for the query to finish
		 * <p>Returns the time in milliseconds allowed for the query to finish.</p>
		 * @return int <p>Returns and integer on success and <b><code>NULL</code></b> if it is not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTimeAllowed(): int {}

		/**
		 * Removes phrase bigram field (pf2 parameter)
		 * <p>Removes a Bigram Phrase Field (pf2 parameter) that was previously added using <code>SolrDisMaxQuery::addBigramPhraseField()</code></p>
		 * @param string $field <p>The Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removebigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeBigramPhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a boost query partial by field name (bq)
		 * <p>Removes a boost query partial from the existing query, only if <code>SolrDisMaxQuery::addBoostQuery()</code> was used.</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removeboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function removeBoostQuery(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes an expand filter query
		 * <p>Removes an expand filter query.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.removeexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes an expand sort field from the expand.sort parameter
		 * <p>Removes an expand sort field from the expand.sort parameter.</p>
		 * @param string $field <p>field name</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.removeexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet date fields
		 * <p>The name of the field</p>
		 * @param string $field <p>The name of the date field to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.date.other parameters
		 * <p>Removes one of the facet.date.other parameters</p>
		 * @param string $value <p>The value</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Removes one of the facet.date parameters
		 * <p>Removes one of the facet.date parameters</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.query parameters
		 * <p>Removes one of the facet.query parameters.</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetQuery(string $value): \SolrQuery {}

		/**
		 * Removes a field from the list of fields
		 * <p>Removes a field from the list of fields</p>
		 * @param string $field <p>Name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeField(string $field): \SolrQuery {}

		/**
		 * Removes a filter query
		 * <p>Removes a filter query.</p>
		 * @param string $fq <p>The filter query to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes one of the fields used for highlighting
		 * <p>Removes one of the fields used for highlighting.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removehighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeHighlightField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis fields
		 * <p>Removes one of the moreLikeThis fields.</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removemltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis query fields
		 * <p>Removes one of the moreLikeThis query fields.</p>
		 * @param string $queryField <p>The query field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removemltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltQueryField(string $queryField): \SolrQuery {}

		/**
		 * Removes a Phrase Field (pf parameter)
		 * <p>Removes a Phrase Field (pf parameter) that was previously added using SolrDisMaxQuery::addPhraseField</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removephrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removePhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a Query Field (qf parameter)
		 * <p>Removes a Query Field (qf parameter) from the field list added by <code>SolrDisMaxQuery::addQueryField()</code></p><p>qf: When building DisjunctionMaxQueries from the user's query it specifies the fields to search in, and boosts for those fields.</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removequeryfield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeQueryField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes one of the sort fields
		 * <p>Removes one of the sort fields</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removesortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the stats.facet parameters
		 * <p>Removes one of the stats.facet parameters</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removestatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsFacet(string $value): \SolrQuery {}

		/**
		 * Removes one of the stats.field parameters
		 * <p>Removes one of the stats.field parameters</p>
		 * @param string $field <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removestatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsField(string $field): \SolrQuery {}

		/**
		 * Removes a Trigram Phrase Field (pf3 parameter)
		 * <p>Removes a Trigram Phrase Field (pf3 parameter)</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removetrigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeTrigramPhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a field from The User Fields Parameter (uf)
		 * <p>Removes a field from The User Fields Parameter (uf)</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.removeuserfield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeUserField(string $field): \SolrDisMaxQuery {}

		/**
		 * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter
		 * <p>Sets Bigram Phrase Fields (pf2) and their boosts (and slops)</p>
		 * @param string $fields <p>Fields boosts (slops)</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setbigramphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setBigramPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets Bigram Phrase Slop (ps2 parameter)
		 * <p>Sets Bigram Phrase Slop (ps2 parameter). A default slop for Bigram phrase fields.</p>
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setbigramphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setBigramPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Sets a Boost Function (bf parameter)
		 * <p>Sets Boost Function (bf parameter).</p><p>Functions (with optional boosts) that will be included in the user's query to influence the score. Any function supported natively by Solr can be used, along with a boost value. e.g.:</p><p>recip(rord(myfield),1,2,3)^1.5</p>
		 * @param string $function
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setboostfunction.php
		 * @since No version information available, might only be in Git
		 */
		public function setBoostFunction(string $function): \SolrDisMaxQuery {}

		/**
		 * Directly Sets Boost Query Parameter (bq)
		 * <p>Sets Boost Query Parameter (bq)</p>
		 * @param string $q <p>query</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function setBoostQuery(string $q): \SolrDisMaxQuery {}

		/**
		 * Toggles the echoHandler parameter
		 * <p>If set to true, Solr places the name of the handle used in the response to the client for debugging purposes.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setechohandler.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoHandler(bool $flag): \SolrQuery {}

		/**
		 * Determines what kind of parameters to include in the response
		 * <p>Instructs Solr what kinds of Request parameters should be included in the response for debugging purposes, legal values include:</p><p></p>
		 * @param string $type <p>The type of parameters to include</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setechoparams.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoParams(string $type): \SolrQuery {}

		/**
		 * Enables/Disables the Expand Component
		 * <p>Enables/Disables the Expand Component.</p>
		 * @param bool $value <p>Bool flag</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpand(bool $value): \SolrQuery {}

		/**
		 * Sets the expand.q parameter
		 * <p>Sets the expand.q parameter.</p><p>Overrides the main q parameter, determines which documents to include in the main group.</p>
		 * @param string $q
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandQuery(string $q): \SolrQuery {}

		/**
		 * Sets the number of rows to display in each group (expand.rows). Server Default 5
		 * <p>Sets the number of rows to display in each group (expand.rows). Server Default 5</p>
		 * @param int $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandRows(int $value): \SolrQuery {}

		/**
		 * Sets the explainOther common query parameter
		 * <p>Sets the explainOther common query parameter</p>
		 * @param string $query <p>The Lucene query to identify a set of documents</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setexplainother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setExplainOther(string $query): \SolrQuery {}

		/**
		 * Maps to the facet parameter. Enables or disables facetting
		 * <p>Enables or disables faceting.</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacet(bool $flag): \SolrQuery {}

		/**
		 * Maps to facet.date.end
		 * <p>Maps to facet.date.end</p>
		 * @param string $value <p>See facet.date.end</p>
		 * @param string $field_override <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateEnd(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.gap
		 * <p>Maps to facet.date.gap</p>
		 * @param string $value <p>See facet.date.gap</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateGap(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.hardend
		 * <p>Maps to facet.date.hardend</p>
		 * @param bool $value <p>See facet.date.hardend</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateHardEnd(bool $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.start
		 * <p>Maps to facet.date.start</p>
		 * @param string $value <p>See facet.date.start</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateStart(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the minimum document frequency used for determining term count
		 * <p>Sets the minimum document frequency used for determining term count</p>
		 * @param int $frequency
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetenumcachemindefaultfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.limit
		 * <p>Maps to facet.limit. Sets the maximum number of constraint counts that should be returned for the facet fields.</p>
		 * @param int $limit <p>The maximum number of constraint counts</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetLimit(int $limit, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the type of algorithm to use when faceting a field
		 * <p>Specifies the type of algorithm to use when faceting a field. This method accepts optional field override.</p>
		 * @param string $method <p>The method to use.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMethod(string $method, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.mincount
		 * <p>Sets the minimum counts for facet fields that should be included in the response</p>
		 * @param int $mincount <p>The minimum count</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMinCount(int $mincount, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.missing
		 * <p>Used to indicate that in addition to the Term-based constraints of a facet field, a count of all matching results which have no value for the field should be computed</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns this feature on. <b><code>FALSE</code></b> disables it.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMissing(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the offset into the list of constraints to allow for pagination
		 * <p>Sets the offset into the list of constraints to allow for pagination.</p>
		 * @param int $offset <p>The offset</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetOffset(int $offset, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies a string prefix with which to limits the terms on which to facet
		 * <p>Specifies a string prefix with which to limits the terms on which to facet.</p>
		 * @param string $prefix <p>The prefix string</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetPrefix(string $prefix, string $field_override = NULL): \SolrQuery {}

		/**
		 * Determines the ordering of the facet field constraints
		 * <p>Determines the ordering of the facet field constraints</p>
		 * @param int $facetSort <p>Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetSort(int $facetSort, string $field_override = NULL): \SolrQuery {}

		/**
		 * Enable/Disable result grouping (group parameter)
		 * <p>Enable/Disable result grouping (group parameter)</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroup(bool $value): \SolrQuery {}

		/**
		 * Enables caching for result grouping
		 * <p>Setting this parameter to a number greater than 0 enables caching for result grouping. Result Grouping executes two searches; this option caches the second search. The server default value is 0. Testing has shown that group caching only improves search time with Boolean, wildcard, and fuzzy queries. For simple queries like term or "match all" queries, group caching degrades performance. group.cache.percent parameter</p>
		 * @param int $percent
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupCachePercent(int $percent): \SolrQuery {}

		/**
		 * Sets group.facet parameter
		 * <p>Determines whether to compute grouped facets for the field facets specified in facet.field parameters. Grouped facets are computed based on the first specified group.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFacet(bool $value): \SolrQuery {}

		/**
		 * Sets the group format, result structure (group.format parameter)
		 * <p>Sets the group.format parameter. If this parameter is set to simple, the grouped documents are presented in a single flat list, and the start and rows parameters affect the numbers of documents instead of groups. Accepts: grouped/simple</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFormat(string $value): \SolrQuery {}

		/**
		 * Specifies the number of results to return for each group. The server default value is 1
		 * <p>Specifies the number of results to return for each group. The server default value is 1.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupLimit(int $value): \SolrQuery {}

		/**
		 * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple
		 * <p>If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple.</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupMain(string $value): \SolrQuery {}

		/**
		 * If true, Solr includes the number of groups that have matched the query in the results
		 * <p>If true, Solr includes the number of groups that have matched the query in the results.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupNGroups(bool $value): \SolrQuery {}

		/**
		 * Sets the group.offset parameter
		 * <p>Sets the group.offset parameter.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupOffset(int $value): \SolrQuery {}

		/**
		 * If true, facet counts are based on the most relevant document of each group matching the query
		 * <p>If true, facet counts are based on the most relevant document of each group matching the query. The server default value is false. group.truncate parameter</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupTruncate(bool $value): \SolrQuery {}

		/**
		 * Enables or disables highlighting
		 * <p>Setting it to <b><code>TRUE</code></b> enables highlighted snippets to be generated in the query response.</p><p>Setting it to <b><code>FALSE</code></b> disables highlighting</p>
		 * @param bool $flag <p>Enable or disable highlighting</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlight(bool $flag): \SolrQuery {}

		/**
		 * Specifies the backup field to use
		 * <p>If a snippet cannot be generated because there were no matching terms, one can specify a field to use as the backup or default summary</p>
		 * @param string $field <p>The name of the backup field</p>
		 * @param string $field_override <p>The name of the field we are overriding this setting for.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightAlternateField(string $field, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify a formatter for the highlight output
		 * <p>Specify a formatter for the highlight output.</p>
		 * @param string $formatter <p>Currently the only legal value is "simple"</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.sethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFormatter(string $formatter, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets a text snippet generator for highlighted text
		 * <p>Specify a text snippet generator for highlighted text.</p>
		 * @param string $fragmenter <p>The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragmenter(string $fragmenter, string $field_override = NULL): \SolrQuery {}

		/**
		 * The size of fragments to consider for highlighting
		 * <p>Sets the size, in characters, of fragments to consider for highlighting. "0" indicates that the whole field value should be used (no fragmenting).</p>
		 * @param int $size <p>The size, in characters, of fragments to consider for highlighting</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragsize(int $size, string $field_override = NULL): \SolrQuery {}

		/**
		 * Use SpanScorer to highlight phrase terms
		 * <p>Use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @param bool $flag <p>Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightHighlightMultiTerm(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of characters of the field to return
		 * <p>If SolrQuery::setHighlightAlternateField() was passed the value <b><code>TRUE</code></b>, this parameter specifies the maximum number of characters of the field to return</p><p>Any value less than or equal to 0 means unlimited.</p>
		 * @param int $fieldLength <p>The length of the field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the number of characters into a document to look for suitable snippets
		 * <p>Specifies the number of characters into a document to look for suitable snippets</p>
		 * @param int $value <p>The number of characters into a document to look for suitable snippets</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAnalyzedChars(int $value): \SolrQuery {}

		/**
		 * Whether or not to collapse contiguous fragments into a single fragment
		 * <p>Whether or not to collapse contiguous fragments into a single fragment</p>
		 * @param bool $flag
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMergeContiguous(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify the maximum number of characters to analyze
		 * <p>Specify the maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @param int $maxAnalyzedChars <p>The maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): \SolrQuery {}

		/**
		 * Specify the regular expression for fragmenting
		 * <p>Specifies the regular expression for fragmenting. This could be used to extract sentences</p>
		 * @param string $value <p>The regular expression for fragmenting. This could be used to extract sentences</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexPattern(string $value): \SolrQuery {}

		/**
		 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
		 * <p>The factor by which the regex fragmenter can stray from the ideal fragment size ( specfied by SolrQuery::setHighlightFragsize )to accommodate the regular expression</p>
		 * @param float $factor <p>The factor by which the regex fragmenter can stray from the ideal fragment size</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexSlop(float $factor): \SolrQuery {}

		/**
		 * Require field matching during highlighting
		 * <p>If <b><code>TRUE</code></b>, then a field will only be highlighted if the query matched in this particular field.</p><p>This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b><code>TRUE</code></b></p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRequireFieldMatch(bool $flag): \SolrQuery {}

		/**
		 * Sets the text which appears after a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p>
		 * @param string $simplePost <p>Sets the text which appears after a highlighted term</p> <p></p> <pre>The default is &lt;/em&gt;</pre>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.sethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePost(string $simplePost, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the text which appears before a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p><p></p>
		 * @param string $simplePre <p>The text which appears before a highlighted term</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePre(string $simplePre, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the maximum number of highlighted snippets to generate per field
		 * <p>Sets the maximum number of highlighted snippets to generate per field</p>
		 * @param int $value <p>The maximum number of highlighted snippets to generate per field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSnippets(int $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Whether to highlight phrase terms only when they appear within the query phrase
		 * <p>Sets whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightUsePhraseHighlighter(bool $flag): \SolrQuery {}

		/**
		 * Set Minimum "Should" Match (mm)
		 * <p>Set Minimum "Should" Match parameter (mm). If the default query operator is AND then mm=100%, if the default query operator (q.op) is OR, then mm=0%.</p>
		 * @param string $value <p>Minimum match value/expression</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setminimummatch.php
		 * @since No version information available, might only be in Git
		 */
		public function setMinimumMatch(string $value): \SolrDisMaxQuery {}

		/**
		 * Enables or disables moreLikeThis
		 * <p>Enables or disables moreLikeThis</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it and <b><code>FALSE</code></b> turns it off.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMlt(bool $flag): \SolrQuery {}

		/**
		 * Set if the query will be boosted by the interesting term relevance
		 * <p>Set if the query will be boosted by the interesting term relevance</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltBoost(bool $flag): \SolrQuery {}

		/**
		 * Set the number of similar documents to return for each result
		 * <p>Set the number of similar documents to return for each result</p>
		 * @param int $count <p>The number of similar documents to return for each result</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltCount(int $count): \SolrQuery {}

		/**
		 * Sets the maximum number of query terms included
		 * <p>Sets the maximum number of query terms that will be included in any generated query.</p>
		 * @param int $value <p>The maximum number of query terms that will be included in any generated query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumQueryTerms(int $value): \SolrQuery {}

		/**
		 * Specifies the maximum number of tokens to parse
		 * <p>Specifies the maximum number of tokens to parse in each example doc field that is not stored with TermVector support.</p>
		 * @param int $value <p>The maximum number of tokens to parse</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumTokens(int $value): \SolrQuery {}

		/**
		 * Sets the maximum word length
		 * <p>Sets the maximum word length above which words will be ignored.</p>
		 * @param int $maxWordLength <p>The maximum word length above which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxWordLength(int $maxWordLength): \SolrQuery {}

		/**
		 * Sets the mltMinDoc frequency
		 * <p>The frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @param int $minDocFrequency <p>Sets the frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinDocFrequency(int $minDocFrequency): \SolrQuery {}

		/**
		 * Sets the frequency below which terms will be ignored in the source docs
		 * <p>Sets the frequency below which terms will be ignored in the source docs</p>
		 * @param int $minTermFrequency <p>The frequency below which terms will be ignored in the source docs</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinTermFrequency(int $minTermFrequency): \SolrQuery {}

		/**
		 * Sets the minimum word length
		 * <p>Sets the minimum word length below which words will be ignored.</p>
		 * @param int $minWordLength <p>The minimum word length below which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinWordLength(int $minWordLength): \SolrQuery {}

		/**
		 * Exclude the header from the returned results
		 * <p>Exclude the header from the returned results.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> excludes the header from the result.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setomitheader.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setOmitHeader(bool $flag): \SolrQuery {}

		/**
		 * Sets Phrase Fields and their boosts (and slops) using pf2 parameter
		 * <p>Sets Phrase Fields (pf) and their boosts (and slops)</p>
		 * @param string $fields <p>Fields, boosts [, slops]</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets the default slop on phrase queries (ps parameter)
		 * <p>Sets the default amount of slop on phrase queries built with "pf", "pf2" and/or "pf3" fields (affects boosting). "ps" parameter</p>
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * 検索クエリーを設定
		 * <p>検索クエリーを設定します。</p>
		 * @param string $query <p>検索クエリー</p>
		 * @return SolrQuery <p>現行の SolrQuery オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/solrquery.setquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setQuery(string $query): \SolrQuery {}

		/**
		 * Set Query Alternate (q.alt parameter)
		 * <p>Set Query Alternate (q.alt parameter)</p><p>When the main <i>q</i> parameter is not specified or is blank. The <i>q.alt</i> parameter is used</p>
		 * @param string $q <p>Query String</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setqueryalt.php
		 * @since No version information available, might only be in Git
		 */
		public function setQueryAlt(string $q): \SolrDisMaxQuery {}

		/**
		 * Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)
		 * <p>The Query Phrase Slop is the amount of slop permitted on phrase queries explicitly included in the user's query string with the <i>qf</i> parameter.</p><p>slop refers to the number of positions one token needs to be moved in relation to another token in order to match a phrase specified in a query.</p>
		 * @param string $slop <p>Amount of slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setqueryphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setQueryPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Specifies the maximum number of rows to return in the result
		 * <p>Specifies the maximum number of rows to return in the result</p>
		 * @param int $rows <p>The maximum number of rows to return</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.setrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setRows(int $rows): \SolrQuery {}

		/**
		 * Flag to show debug information
		 * <p>Whether to show debug info</p>
		 * @param bool $flag <p>Whether to show debug info. <b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setshowdebuginfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setShowDebugInfo(bool $flag): \SolrQuery {}

		/**
		 * Specifies the number of rows to skip
		 * <p>Specifies the number of rows to skip. Useful in pagination of results.</p>
		 * @param int $start <p>The number of rows to skip.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.setstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStart(int $start): \SolrQuery {}

		/**
		 * Enables or disables the Stats component
		 * <p>Enables or disables the Stats component.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns on the stats component and <b><code>FALSE</code></b> disables it.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStats(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables the TermsComponent
		 * <p>Enables or disables the TermsComponent</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it. <b><code>FALSE</code></b> turns it off</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTerms(bool $flag): \SolrQuery {}

		/**
		 * Sets the name of the field to get the Terms from
		 * <p>Sets the name of the field to get the terms from</p>
		 * @param string $fieldname <p>The field name</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsField(string $fieldname): \SolrQuery {}

		/**
		 * Include the lower bound term in the result set
		 * <p>Include the lower bound term in the result set.</p>
		 * @param bool $flag <p>Include the lower bound term in the result set</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeLowerBound(bool $flag): \SolrQuery {}

		/**
		 * Include the upper bound term in the result set
		 * <p>Include the upper bound term in the result set.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeUpperBound(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of terms to return
		 * <p>Sets the maximum number of terms to return</p>
		 * @param int $limit <p>The maximum number of terms to return. All the terms will be returned if the limit is negative.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLimit(int $limit): \SolrQuery {}

		/**
		 * Specifies the Term to start from
		 * <p>Specifies the Term to start from</p>
		 * @param string $lowerBound <p>The lower bound Term</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLowerBound(string $lowerBound): \SolrQuery {}

		/**
		 * Sets the maximum document frequency
		 * <p>Sets the maximum document frequency.</p>
		 * @param int $frequency <p>The maximum document frequency.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMaxCount(int $frequency): \SolrQuery {}

		/**
		 * Sets the minimum document frequency
		 * <p>Sets the minimum doc frequency to return in order to be included</p>
		 * @param int $frequency <p>The minimum frequency</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMinCount(int $frequency): \SolrQuery {}

		/**
		 * Restrict matches to terms that start with the prefix
		 * <p>Restrict matches to terms that start with the prefix</p>
		 * @param string $prefix <p>Restrict matches to terms that start with the prefix</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsPrefix(string $prefix): \SolrQuery {}

		/**
		 * Return the raw characters of the indexed term
		 * <p>If true, return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsReturnRaw(bool $flag): \SolrQuery {}

		/**
		 * Specifies how to sort the returned terms
		 * <p>If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first). If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order</p>
		 * @param int $sortType <p>SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsSort(int $sortType): \SolrQuery {}

		/**
		 * Sets the term to stop at
		 * <p>Sets the term to stop at</p>
		 * @param string $upperBound <p>The term to stop at</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsUpperBound(string $upperBound): \SolrQuery {}

		/**
		 * Sets Tie Breaker parameter (tie parameter)
		 * <p>Sets Tie Breaker parameter (tie parameter)</p>
		 * @param string $tieBreaker <p>The <i>tie</i> parameter specifies a float value (which should be something much less than 1) to use as tiebreaker in DisMax queries.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.settiebreaker.php
		 * @since No version information available, might only be in Git
		 */
		public function setTieBreaker(string $tieBreaker): \SolrDisMaxQuery {}

		/**
		 * The time allowed for search to finish
		 * <p>The time allowed for a search to finish. This value only applies to the search and not to requests in general. Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be returned, if there are any.</p>
		 * @param int $timeAllowed <p>The time allowed for a search to finish.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTimeAllowed(int $timeAllowed): \SolrQuery {}

		/**
		 * Directly Sets Trigram Phrase Fields (pf3 parameter)
		 * <p>Directly Sets Trigram Phrase Fields (pf3 parameter)</p>
		 * @param string $fields <p>Trigram Phrase Fields</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.settrigramphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setTrigramPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets Trigram Phrase Slop (ps3 parameter)
		 * <p>Sets Trigram Phrase Slop (ps3 parameter)</p>
		 * @param string $slop <p>Phrase slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.settrigramphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setTrigramPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Sets User Fields parameter (uf)
		 * <p>Sets User Fields parameter (uf)</p><p>User Fields: Specifies which schema fields the end user shall be allowed to query.</p>
		 * @param string $fields <p>Fields names separated by space</p> <p>This parameter supports wildcards.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.setuserfields.php
		 * @since No version information available, might only be in Git
		 */
		public function setUserFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Switch QueryParser to be DisMax Query Parser
		 * <p>Switch QueryParser to be DisMax Query Parser</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.usedismaxqueryparser.php
		 * @since No version information available, might only be in Git
		 */
		public function useDisMaxQueryParser(): \SolrDisMaxQuery {}

		/**
		 * Switch QueryParser to be EDisMax
		 * <p>Switch QueryParser to be EDisMax. By default the query builder uses edismax, if it was switched using <code>SolrDisMaxQuery::useDisMaxQueryParser()</code>, it can be switched back using this method.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/ja/solrdismaxquery.useedismaxqueryparser.php
		 * @since No version information available, might only be in Git
		 */
		public function useEDisMaxQueryParser(): \SolrDisMaxQuery {}
	}

	/**
	 * <p>Represents a Solr document retrieved from a query response.</p>
	 * @link https://php.net/manual/ja/class.solrdocument.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrDocument implements \ArrayAccess, \Iterator, \Serializable {

		/**
		 * @var integer <p>Default mode for sorting fields within the document.</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_DEFAULT = 1;

		/**
		 * @var integer <p>Sorts the fields in ascending order</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_ASC = 1;

		/**
		 * @var integer <p>Sorts the fields in descending order</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_DESC = 2;

		/**
		 * @var integer <p>Sorts the fields by field name.</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_FIELD_NAME = 1;

		/**
		 * @var integer <p>Sorts the fields by number of values in each field.</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_FIELD_VALUE_COUNT = 2;

		/**
		 * @var integer <p>Sorts the fields by thier boost values.</p>
		 * @link https://php.net/manual/ja/class.solrdocument.php
		 */
		const SORT_FIELD_BOOST_VALUE = 4;

		/**
		 * SolrDocument オブジェクトのコピーを作成
		 * <p>SolrDocument オブジェクトのコピーを作成します。直接呼出しされません。</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrdocument.clone.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __clone() {}

		/**
		 * コンストラクタ
		 * <p>SolrDocument に対するコンストラクタ</p>
		 * @return self
		 * @link https://php.net/manual/ja/solrdocument.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>SolrDocument に対するデストラクタ</p>
		 * @return void
		 * @link https://php.net/manual/ja/solrdocument.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * プロパティとしてフィールドにアクセス
		 * <p>プロパティとしてフィールドにアクセスするためのマジックメソッド</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return SolrDocumentField <p>SolrDocumentField インスタンスを返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.get.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __get(string $fieldName): \SolrDocumentField {}

		/**
		 * フィールドが存在するかチェック
		 * <p>フィールドが存在するかチェックします。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.isset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __isset(string $fieldName): bool {}

		/**
		 * Adds another field to the document
		 * <p>Adds another field to the document. Used to set the fields as new properties.</p>
		 * @param string $fieldName <p>Name of the field.</p>
		 * @param string $fieldValue <p>Field value.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.set.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __set(string $fieldName, string $fieldValue): bool {}

		/**
		 * 文書からフィールドを除去
		 * <p>フィールドがオブジェクトのプロパティとしてアクセスされる場合、文書からフィールドを除去します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.unset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __unset(string $fieldName): bool {}

		/**
		 * 文書にフィールドを追加
		 * <p>このメソッドは、SolrDocument インスタンスにフィールドを追加します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @param string $fieldValue <p>フィールドの値</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $fieldName, string $fieldValue): bool {}

		/**
		 * Drops all the fields in the document
		 * <p>Resets the current object. Discards all the fields and resets the document boost to zero.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.clear.php
		 * @since PECL solr >= 0.9.2
		 */
		public function clear(): bool {}

		/**
		 * 現行のフィールドを取得
		 * <p>現行のフィールドを取得します。</p>
		 * @return SolrDocumentField <p>フィールドを返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.current.php
		 * @since PECL solr >= 0.9.2
		 */
		public function current(): \SolrDocumentField {}

		/**
		 * 文書からフィールドを除去
		 * <p>文書からフィールドを除去します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.deletefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteField(string $fieldName): bool {}

		/**
		 * Checks if a field exists in the document
		 * <p>Checks if the requested field as a valid fieldname in the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the field is present and <b><code>FALSE</code></b> if it does not.</p>
		 * @link https://php.net/manual/ja/solrdocument.fieldexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function fieldExists(string $fieldName): bool {}

		/**
		 * Returns an array of child documents (SolrDocument)
		 * <p>Returns an array of child documents (SolrDocument)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrdocument.getchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocuments(): array {}

		/**
		 * Returns the number of child documents
		 * <p>Returns the number of child documents</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrdocument.getchilddocumentscount.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocumentsCount(): int {}

		/**
		 * 名前でフィールドを取得
		 * <p>名前でフィールドを取得します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return SolrDocumentField <p>成功時には SolrDocumentField、失敗時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.getfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getField(string $fieldName): \SolrDocumentField {}

		/**
		 * この文書内のフィールド数を返す
		 * <p>この文書内のフィールド数を返します。 複数値のフィールドは１回だけ数えられます。</p>
		 * @return int <p>成功時には整数、失敗時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.getfieldcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldCount(): int {}

		/**
		 * 文書内のフィールド名の配列を返す
		 * <p>文書内のフィールド名の配列を返します。</p>
		 * @return array <p>この文書内のフィールド名を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.getfieldnames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldNames(): array {}

		/**
		 * Returns a SolrInputDocument equivalent of the object
		 * <p>Returns a SolrInputDocument equivalent of the object. This is useful if one wishes to resubmit/update a document retrieved from a query.</p>
		 * @return SolrInputDocument <p>Returns a SolrInputDocument on success and <b><code>NULL</code></b> on failure.</p>
		 * @link https://php.net/manual/ja/solrdocument.getinputdocument.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInputDocument(): \SolrInputDocument {}

		/**
		 * Checks whether the document has any child documents
		 * <p>Checks whether the document has any child documents</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrdocument.haschilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function hasChildDocuments(): bool {}

		/**
		 * 現行のキーを返す
		 * <p>現行のキーを返します。</p>
		 * @return string <p>現行のキーを返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.key.php
		 * @since PECL solr >= 0.9.2
		 */
		public function key(): string {}

		/**
		 * Merges source to the current SolrDocument
		 * <p>Merges source to the current SolrDocument.</p>
		 * @param \SolrDocument $sourceDoc <p>The source document.</p>
		 * @param bool $overwrite <p>If this is <b><code>TRUE</code></b> then fields with the same name in the destination document will be overwritten.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.merge.php
		 * @since PECL solr >= 0.9.2
		 */
		public function merge(\SolrDocument $sourceDoc, bool $overwrite = TRUE): bool {}

		/**
		 * 内部ポインタを次のフィールドに移動
		 * <p>内部ポインタを次のフィールドに移動します。</p>
		 * @return void <p>この関数に返り値はありません。</p>
		 * @link https://php.net/manual/ja/solrdocument.next.php
		 * @since PECL solr >= 0.9.2
		 */
		public function next(): void {}

		/**
		 * 特定のフィールドが存在するかどうかチェック
		 * <p>特定のフィールドが存在するかどうかチェックします。これは、オブジェクトが配列として扱われる際に使用されます。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.offsetexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetExists(string $fieldName): bool {}

		/**
		 * フィールドを取得
		 * <p>これは、オブジェクトが配列として扱われる際に、フィールドを取得するために使用されます。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return SolrDocumentField <p>SolrDocumentField オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.offsetget.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetGet(string $fieldName): \SolrDocumentField {}

		/**
		 * 文書にフィールドを追加
		 * <p>オブジェクトが配列として扱われる際に、文書にフィールドを追加するために使用されます。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @param string $fieldValue <p>このフィールドに対する値</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.offsetset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetSet(string $fieldName, string $fieldValue): void {}

		/**
		 * フィールドを除去
		 * <p>文書からフィールドを除去します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return void <p>返り値はありません。</p>
		 * @link https://php.net/manual/ja/solrdocument.offsetunset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetUnset(string $fieldName): void {}

		/**
		 * SolrDocument::clear()へのエイリアス
		 * <p>これは、SolrDocument::clear()へのエイリアスです。</p>
		 * @link https://php.net/manual/ja/solrdocument.reset.php
		 * @since PECL solr >= 0.9.2
		 */
		function reset() {}

		/**
		 * 内部ポインタを先頭にリセット
		 * <p>内部ポインタを先頭にリセットします。</p>
		 * @return void <p>この関数に返り値はありません。</p>
		 * @link https://php.net/manual/ja/solrdocument.rewind.php
		 * @since PECL solr >= 0.9.2
		 */
		public function rewind(): void {}

		/**
		 * カスタムのシリアライズで使われます
		 * <p>カスタムのシリアライズで使われます.</p>
		 * @return string <p>シリアライズされた Solr 文書を表現する文字列を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function serialize(): string {}

		/**
		 * Sorts the fields in the document
		 * @param int $sortOrderBy <p>The sort criteria.</p>
		 * @param int $sortDirection <p>The sort direction.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.sort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function sort(int $sortOrderBy, int $sortDirection = SolrDocument::SORT_ASC): bool {}

		/**
		 * 文書の配列表現を返す
		 * <p>文書の配列表現を返します。</p>
		 * @return array <p>文書の配列表現を返します。</p>
		 * @link https://php.net/manual/ja/solrdocument.toarray.php
		 * @since PECL solr >= 0.9.2
		 */
		public function toArray(): array {}

		/**
		 * Custom serialization of SolrDocument objects
		 * <p>Custom serialization of SolrDocument objects</p>
		 * @param string $serialized <p>An XML representation of the document.</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/ja/solrdocument.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * Checks if the current position internally is still valid
		 * <p>Checks if the current position internally is still valid. It is used during foreach operations.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> if the current position is no longer valid.</p>
		 * @link https://php.net/manual/ja/solrdocument.valid.php
		 * @since PECL solr >= 0.9.2
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Solr 文書のフィールドを表現します。そのプロパティは全て読み取り専用です。</p>
	 * @link https://php.net/manual/ja/class.solrdocumentfield.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrDocumentField {

		/**
		 * @var string <p>フィールド名</p>
		 * @link https://php.net/manual/ja/class.solrdocumentfield.php#solrdocumentfield.props.name
		 */
		public $name;

		/**
		 * @var float <p>フィールドの boost 値</p>
		 * @link https://php.net/manual/ja/class.solrdocumentfield.php#solrdocumentfield.props.boost
		 */
		public $boost;

		/**
		 * @var array <p>このフィールドに対する値の配列</p>
		 * @link https://php.net/manual/ja/class.solrdocumentfield.php#solrdocumentfield.props.values
		 */
		public $values;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrdocumentfield.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrdocumentfield.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}
	}

	/**
	 * <p>これは、Solr エクステンションクラスによってスローされる全ての例外に対する基底クラスです。</p>
	 * @link https://php.net/manual/ja/class.solrexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrException extends \Exception {

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Solr サーバーからのレスポンスを表現</p>
	 * @link https://php.net/manual/ja/class.solrgenericresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrGenericResponse extends \SolrResponse {

		/**
		 * @var integer <p>文書は、SolrObject インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrgenericresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var integer <p>文書は、SolrDocument インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrgenericresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var integer <p>レスポンスの HTTP ステータス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var integer <p>Solr 文書を SolrObject または SolrDocument インスタンスとしてパースするかどうか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>リクエスト中にエラーがあったか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>HTTP ステータスについての詳細メッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>リクエスト URL</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>リクエスト中に送信される生のヘッダ文字列</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>サーバーに送信される生のリクエスト</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Solr サーバーからのレスポンスヘッダ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>サーバーからのレスポンスメッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>PHP シリアライズ形式でのレスポンス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrgenericresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrgenericresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * シリアライズされた PHP データとして XML レスポンスを返す
		 * <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @return string <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * レスポンスの HTTP ステータスを返す
		 * <p>レスポンスの HTTP ステータスを返します。</p>
		 * @return int <p>レスポンスの HTTP ステータスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * HTTP ステータスに関する詳細を返す
		 * <p>HTTP ステータスに関する詳細を返します。</p>
		 * @return string <p>HTTP ステータスに関する詳細を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストを返す
		 * <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストヘッダを返す
		 * <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Solr サーバーからの生のレスポンスを返す
		 * <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Solr サーバーからの生のレスポンスヘッダを返す
		 * <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * リクエストが送られた完全な URL を返す
		 * <p>リクエストが送られた完全な URL を返します。</p>
		 * @return string <p>リクエストが送られた完全な URL を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * サーバーからの XML レスポンスを表現する SolrObject を返す
		 * <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @return SolrObject <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * パースモードを設定
		 * <p>パースモードを設定します。</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC は、SolrDocument インスタンス内の文書をパースします。 SolrResponse::PARSE_SOLR_OBJ は、SolrObjects 内に文書をパースします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * リクエストが成功したか
		 * <p>サーバーへのリクエストが成功したかチェックするために使用されます。</p>
		 * @return bool <p>成功した場合 <b><code>TRUE</code></b> 、失敗した場合 <b><code>FALSE</code></b> 。</p>
		 * @link https://php.net/manual/ja/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>規則外の、または無効な引数がメソッドに渡されると、このオブジェクトがスローされます。</p>
	 * @link https://php.net/manual/ja/class.solrillegalargumentexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrIllegalArgumentException extends \SolrException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrillegalargumentexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>オブジェクトに対して規則外の、またはサポートされていない操作が実行されると、このオブジェクトがスローされます。</p>
	 * @link https://php.net/manual/ja/class.solrillegaloperationexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrIllegalOperationException extends \SolrException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrillegaloperationexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>このクラスは、Solr インデックスにサブミットされようとしている Solr 文書を表現します。</p>
	 * @link https://php.net/manual/ja/class.solrinputdocument.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrInputDocument {

		/**
		 * @var integer <p>フィールドを昇順でソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_DEFAULT = 1;

		/**
		 * @var integer <p>フィールドを昇順でソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_ASC = 1;

		/**
		 * @var integer <p>フィールドを降順でソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_DESC = 2;

		/**
		 * @var integer <p>フィールドを名前でソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_FIELD_NAME = 1;

		/**
		 * @var integer <p>フィールドを値の数でソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_FIELD_VALUE_COUNT = 2;

		/**
		 * @var integer <p>boost 値でフィールドをソート</p>
		 * @link https://php.net/manual/ja/class.solrinputdocument.php
		 */
		const SORT_FIELD_BOOST_VALUE = 4;

		/**
		 * SolrDocument のコピーを作成
		 * <p>直接呼出しされてはいけません。SolrInputDocument のディープコピー作成に使用されます。</p>
		 * @return void <p>SolrInputDocument インスタンスを新規作成。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.clone.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __clone() {}

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrinputdocument.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrinputdocument.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a child document for block indexing
		 * <p>Adds a child document to construct a document block with nested documents.</p>
		 * @param \SolrInputDocument $child <p>A <code>SolrInputDocument</code> object.</p>
		 * @return void
		 * @link https://php.net/manual/ja/solrinputdocument.addchilddocument.php
		 * @since PECL solr >= 2.3.0
		 */
		public function addChildDocument(\SolrInputDocument $child): void {}

		/**
		 * Adds an array of child documents
		 * <p>Adds an array of child documents to the current input document.</p>
		 * @param array $docs <p>An <code>array</code> of <code>SolrInputDocument</code> objects.</p>
		 * @return void
		 * @link https://php.net/manual/ja/solrinputdocument.addchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function addChildDocuments(array &$docs): void {}

		/**
		 * 文書にフィールドを追加
		 * <p>複数値の項目に対しては、もし有効な boost 値が指定されると、 指定された値とこのフィールドに対する現行の boost 値 とが掛け算されます。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @param string $fieldValue <p>このフィールドに対する値</p>
		 * @param float $fieldBoostValue <p>フィールドに対するインデキシング時間の boost。 負の値にはできませんが、それでも 1.0 未満の価格を渡せます。しかし、それらはゼロより大きくなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $fieldName, string $fieldValue, float $fieldBoostValue = 0.0): bool {}

		/**
		 * 入力した文書をリセット
		 * <p>全フィールドをドロップして文書をリセットし、文書の boost をゼロにリセットします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.clear.php
		 * @since PECL solr >= 0.9.2
		 */
		public function clear(): bool {}

		/**
		 * 文書からフィールドを除去
		 * <p>文書からフィールドを除去します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.deletefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteField(string $fieldName): bool {}

		/**
		 * フィールドが存在するかチェック
		 * <p>フィールドが存在するかチェックします。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return bool <p>フィールドが見つかった場合 <b><code>TRUE</code></b> 、見つからなかった場合 <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.fieldexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function fieldExists(string $fieldName): bool {}

		/**
		 * 文書に対する現行の boost 値を取得
		 * <p>文書に対する現行の boost 値を取得します。</p>
		 * @return float <p>成功した場合は boost 値、失敗した場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.getboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getBoost(): float {}

		/**
		 * Returns an array of child documents (SolrInputDocument)
		 * <p>Returns an array of child documents (SolrInputDocument)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrinputdocument.getchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocuments(): array {}

		/**
		 * Returns the number of child documents
		 * <p>Returns the number of child documents</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrinputdocument.getchilddocumentscount.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocumentsCount(): int {}

		/**
		 * 名前でフィールドを取得
		 * <p>文書内のフィールドを取得します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return SolrDocumentField <p>成功時には SolrDocumentField オブジェクト、失敗時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.getfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getField(string $fieldName): \SolrDocumentField {}

		/**
		 * 特定のフィールドに対する boost 値を取得
		 * <p>特定のフィールドに対する boost 値を取得します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @return float <p>フィールドの boost 値、またはエラーがあった場合には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.getfieldboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldBoost(string $fieldName): float {}

		/**
		 * 文書内のフィールド数を返す
		 * <p>文書内のフィールド数を返します。</p>
		 * @return int <p>成功した場合に整数、失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/solrinputdocument.getfieldcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldCount(): int {}

		/**
		 * 文書内のフィールドを全て含む配列を返す
		 * <p>文書内のフィールドを全て含む配列を返します。</p>
		 * @return array <p>成功時には配列、失敗時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.getfieldnames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldNames(): array {}

		/**
		 * Returns true if the document has any child documents
		 * <p>Checks whether the document has any child documents</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrinputdocument.haschilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function hasChildDocuments(): bool {}

		/**
		 * Merges one input document into another
		 * <p>Merges one input document into another.</p>
		 * @param \SolrInputDocument $sourceDoc <p>The source document.</p>
		 * @param bool $overwrite <p>If this is <b><code>TRUE</code></b> it will replace matching fields in the destination document.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 In the future, this will be modified to return the number of fields in the new document.</p>
		 * @link https://php.net/manual/ja/solrinputdocument.merge.php
		 * @since PECL solr >= 0.9.2
		 */
		public function merge(\SolrInputDocument $sourceDoc, bool $overwrite = TRUE): bool {}

		/**
		 * これは、SolrInputDocument::clear のエイリアスです
		 * <p>これは、SolrInputDocument::clear のエイリアスです</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.reset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function reset(): bool {}

		/**
		 * この文書に対する boost 値を設定
		 * <p>この文書に対する boost 値を設定します。</p>
		 * @param float $documentBoostValue <p>この文書に対するインデキシング時間の boost 値</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.setboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setBoost(float $documentBoostValue): bool {}

		/**
		 * フィールドに対するインデキシング時間の boost 値を設定
		 * <p>フィールドに対するインデキシング時間の boost 値を設定します。 これは、このフィールドに対する現行の boost 値を置換します。</p>
		 * @param string $fieldName <p>フィールド名</p>
		 * @param float $fieldBoostValue <p>インデキシング時間の boost 値</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrinputdocument.setfieldboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFieldBoost(string $fieldName, float $fieldBoostValue): bool {}

		/**
		 * Sorts the fields within the document
		 * @param int $sortOrderBy <p>The sort criteria</p>
		 * @param int $sortDirection <p>The sort direction</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.sort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function sort(int $sortOrderBy, int $sortDirection = SolrInputDocument::SORT_ASC): bool {}

		/**
		 * 入力した文書の配列表現を返す
		 * <p>入力した文書の配列表現を返します。</p>
		 * @return array <p>フィールドを含む配列を返します。失敗時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrinputdocument.toarray.php
		 * @since PECL solr >= 0.9.2
		 */
		public function toArray(): array {}
	}

	/**
	 * @link https://php.net/manual/ja/class.solrmissingmandatoryparameterexception.php
	 * @since No version information available, might only be in Git
	 */
	class SolrMissingMandatoryParameterException extends \SolrException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>リクエスト中に Solr サーバーに送信される名前と値のペアの集合を表現します。</p>
	 * @link https://php.net/manual/ja/class.solrmodifiableparams.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrModifiableParams extends \SolrParams implements \Serializable {

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrmodifiableparams.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrmodifiableparams.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * これは、SolrParams::addParam に対するエイリアスです
		 * <p>これは、SolrParams::addParam に対するエイリアスです。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParams インスタンスを返します</p>
		 * @link https://php.net/manual/ja/solrparams.add.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function add(string $name, string $value): \SolrParams {}

		/**
		 * オブジェクトにパラメータを追加
		 * <p>オブジェクトにパラメータを追加します。 これは、複数回指定されることのあるパラメータで使われます。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParam オブジェクト、失敗時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.addparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addParam(string $name, string $value): \SolrParams {}

		/**
		 * これは、SolrParams::getParam に対するエイリアスです。
		 * <p>これは、SolrParams::getParam に対するエイリアスです。</p>
		 * @param string $param_name <p>パラメータ名</p>
		 * @return mixed <p>パラメータの種類により、配列または文字列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.get.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function get(string $param_name) {}

		/**
		 * パラメータ値を返す
		 * <p>param_name という名前のパラメータを返します。</p>
		 * @param string $param_name <p>パラメータ名</p>
		 * @return mixed <p>パラメータの種類により、文字列または配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getparam.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParam(string $param_name = NULL) {}

		/**
		 * URL エンコードされていないパラメータの配列を返す
		 * <p>URL エンコードされていないパラメータの配列を返します</p>
		 * @return array <p>URL エンコードされていないパラメータの配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParams(): array {}

		/**
		 * URL エンコードされたパラメータの配列を返す
		 * <p>URL エンコードされたパラメータに対する配列を返します</p>
		 * @return array <p>URL エンコードされたパラメータに対する配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getpreparedparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getPreparedParams(): array {}

		/**
		 * カスタムのシリアライズで使われます
		 * <p>カスタムのシリアライズで使われます</p>
		 * @return string <p>カスタムのシリアライズで使われます</p>
		 * @link https://php.net/manual/ja/solrparams.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function serialize(): string {}

		/**
		 * SolrParams::setParam のエイリアス
		 * <p>SolrParams::setParam のエイリアス</p>
		 * @link https://php.net/manual/ja/solrparams.set.php
		 * @since PECL solr >= 0.9.2
		 */
		function set() {}

		/**
		 * パラメータを指定された値に設定
		 * <p>クエリーパラメータを指定された値に設定します。 これは、一回だけ指定可能なパラメータで使われます。 同じパラメータ名で後で呼び出すと、既存の値を上書きします。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParam オブジェクト、値の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.setparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParam(string $name, string $value): \SolrParams {}

		/**
		 * オブジェクト内の名前と値のペアのパラメータを全て返します
		 * <p>オブジェクト内の名前と値のペアのパラメータを全て返します</p>
		 * @param bool $url_encode <p>URL エンコードされた値が返されるかどうか</p>
		 * @return string <p>成功時に文字列、失敗時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.tostring.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function toString(bool $url_encode = FALSE): string {}

		/**
		 * カスタムのシリアライズで使われます
		 * <p>カスタムのシリアライズで使われます</p>
		 * @param string $serialized <p>オブジェクトのシリアライズされた表現</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrparams.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>これはオブジェクトで、そのプロパティは、配列の文法を使用してアクセスされることもできます。 その全てのプロパティは読み取り専用です。</p>
	 * @link https://php.net/manual/ja/class.solrobject.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrObject implements \ArrayAccess {

		/**
		 * Solr オブジェクトを生成
		 * <p>Solr オブジェクトを生成します。</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrobject.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrobject.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * 全てのプロパティ名の配列を返す
		 * <p>全てのプロパティ名の配列を返します。</p>
		 * @return array <p>配列を返します。</p>
		 * @link https://php.net/manual/ja/solrobject.getpropertynames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getPropertyNames(): array {}

		/**
		 * プロパティが存在するかチェック
		 * <p>プロパティが存在するかチェックします。これは、オブジェクトが配列として扱われる際に使用されます。</p>
		 * @param string $property_name <p>プロパティ名</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrobject.offsetexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetExists(string $property_name): bool {}

		/**
		 * プロパティを取得するために使用される
		 * <p>プロパティの値を取得するために使用されます。これは、オブジェクトが配列として扱われる際に使用されます。</p>
		 * @param string $property_name <p>プロパティ名</p>
		 * @return mixed <p>プロパティの値を返します。</p>
		 * @link https://php.net/manual/ja/solrobject.offsetget.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetGet(string $property_name) {}

		/**
		 * プロパティに対して値を設定
		 * <p>プロパティに対して値を設定します。 これは、オブジェクトが配列として扱われる際に使用されます。 このオブジェクトは読み込み専用です。これは、決して試みられてはいけません。</p>
		 * @param string $property_name <p>プロパティ名</p>
		 * @param string $property_value <p>新しい値</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrobject.offsetset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetSet(string $property_name, string $property_value): void {}

		/**
		 * プロパティに対して値の設定を解除
		 * <p>プロパティに対して値の設定を解除します。これは、オブジェクトが配列として扱われる際に使用されます。 このオブジェクトは読み込み専用です。これは、決して試みられてはいけません。</p>
		 * @param string $property_name <p>プロパティ名</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrobject.offsetunset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetUnset(string $property_name): void {}
	}

	/**
	 * <p>リクエスト中に Solr サーバーに送信される、名前と値のペアの集合を表します。</p>
	 * @link https://php.net/manual/ja/class.solrparams.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrParams implements \Serializable {

		/**
		 * これは、SolrParams::addParam に対するエイリアスです
		 * <p>これは、SolrParams::addParam に対するエイリアスです。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParams インスタンスを返します</p>
		 * @link https://php.net/manual/ja/solrparams.add.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function add(string $name, string $value): \SolrParams {}

		/**
		 * オブジェクトにパラメータを追加
		 * <p>オブジェクトにパラメータを追加します。 これは、複数回指定されることのあるパラメータで使われます。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParam オブジェクト、失敗時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.addparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addParam(string $name, string $value): \SolrParams {}

		/**
		 * これは、SolrParams::getParam に対するエイリアスです。
		 * <p>これは、SolrParams::getParam に対するエイリアスです。</p>
		 * @param string $param_name <p>パラメータ名</p>
		 * @return mixed <p>パラメータの種類により、配列または文字列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.get.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function get(string $param_name) {}

		/**
		 * パラメータ値を返す
		 * <p>param_name という名前のパラメータを返します。</p>
		 * @param string $param_name <p>パラメータ名</p>
		 * @return mixed <p>パラメータの種類により、文字列または配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getparam.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParam(string $param_name = NULL) {}

		/**
		 * URL エンコードされていないパラメータの配列を返す
		 * <p>URL エンコードされていないパラメータの配列を返します</p>
		 * @return array <p>URL エンコードされていないパラメータの配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParams(): array {}

		/**
		 * URL エンコードされたパラメータの配列を返す
		 * <p>URL エンコードされたパラメータに対する配列を返します</p>
		 * @return array <p>URL エンコードされたパラメータに対する配列を返します</p>
		 * @link https://php.net/manual/ja/solrparams.getpreparedparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getPreparedParams(): array {}

		/**
		 * カスタムのシリアライズで使われます
		 * <p>カスタムのシリアライズで使われます</p>
		 * @return string <p>カスタムのシリアライズで使われます</p>
		 * @link https://php.net/manual/ja/solrparams.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function serialize(): string {}

		/**
		 * SolrParams::setParam のエイリアス
		 * <p>SolrParams::setParam のエイリアス</p>
		 * @link https://php.net/manual/ja/solrparams.set.php
		 * @since PECL solr >= 0.9.2
		 */
		function set() {}

		/**
		 * パラメータを指定された値に設定
		 * <p>クエリーパラメータを指定された値に設定します。 これは、一回だけ指定可能なパラメータで使われます。 同じパラメータ名で後で呼び出すと、既存の値を上書きします。</p>
		 * @param string $name <p>パラメータ名</p>
		 * @param string $value <p>パラメータ値</p>
		 * @return SolrParams <p>成功時に SolrParam オブジェクト、値の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.setparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParam(string $name, string $value): \SolrParams {}

		/**
		 * オブジェクト内の名前と値のペアのパラメータを全て返します
		 * <p>オブジェクト内の名前と値のペアのパラメータを全て返します</p>
		 * @param bool $url_encode <p>URL エンコードされた値が返されるかどうか</p>
		 * @return string <p>成功時に文字列、失敗時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrparams.tostring.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function toString(bool $url_encode = FALSE): string {}

		/**
		 * カスタムのシリアライズで使われます
		 * <p>カスタムのシリアライズで使われます</p>
		 * @param string $serialized <p>オブジェクトのシリアライズされた表現</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrparams.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>サーバーへの ping リクエストに対するレスポンスを表現</p>
	 * @link https://php.net/manual/ja/class.solrpingresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrPingResponse extends \SolrResponse {

		/**
		 * @var integer <p>文書は、SolrObject インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrpingresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var integer <p>文書は、SolrDocument インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrpingresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrpingresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrpingresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * シリアライズされた PHP データとして XML レスポンスを返す
		 * <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @return string <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * レスポンスの HTTP ステータスを返す
		 * <p>レスポンスの HTTP ステータスを返します。</p>
		 * @return int <p>レスポンスの HTTP ステータスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * HTTP ステータスに関する詳細を返す
		 * <p>HTTP ステータスに関する詳細を返します。</p>
		 * @return string <p>HTTP ステータスに関する詳細を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストを返す
		 * <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストヘッダを返す
		 * <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Solr サーバーからの生のレスポンスを返す
		 * <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Solr サーバーからの生のレスポンスヘッダを返す
		 * <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * リクエストが送られた完全な URL を返す
		 * <p>リクエストが送られた完全な URL を返します。</p>
		 * @return string <p>リクエストが送られた完全な URL を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * サーバーからのレスポンスを返す
		 * <p>サーバーからのレスポンスを返します。 HEAD リクエストとしてのリクエストなので、これは空になるはずです。</p>
		 * @return string <p>空文字列を返します。</p>
		 * @link https://php.net/manual/ja/solrpingresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): string {}

		/**
		 * パースモードを設定
		 * <p>パースモードを設定します。</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC は、SolrDocument インスタンス内の文書をパースします。 SolrResponse::PARSE_SOLR_OBJ は、SolrObjects 内に文書をパースします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * リクエストが成功したか
		 * <p>サーバーへのリクエストが成功したかチェックするために使用されます。</p>
		 * @return bool <p>成功した場合 <b><code>TRUE</code></b> 、失敗した場合 <b><code>FALSE</code></b> 。</p>
		 * @link https://php.net/manual/ja/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Represents a collection of name-value pairs sent to the Solr server during a request.</p>
	 * @link https://php.net/manual/ja/class.solrquery.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrQuery extends \SolrModifiableParams implements \Serializable {

		/**
		 * @var integer <p>Used to specify that the sorting should be in acending order</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const ORDER_ASC = 0;

		/**
		 * @var integer <p>Used to specify that the sorting should be in descending order</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const ORDER_DESC = 1;

		/**
		 * @var integer <p>Used to specify that the facet should sort by index</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const FACET_SORT_INDEX = 0;

		/**
		 * @var integer <p>Used to specify that the facet should sort by count</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const FACET_SORT_COUNT = 1;

		/**
		 * @var integer <p>Used in the TermsComponent</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const TERMS_SORT_INDEX = 0;

		/**
		 * @var integer <p>Used in the TermsComponent</p>
		 * @link https://php.net/manual/ja/class.solrquery.php
		 */
		const TERMS_SORT_COUNT = 1;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @param string $q <p>任意の検索クエリ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrquery.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct(string $q = NULL) {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrquery.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Overrides main filter query, determines which documents to include in the main group
		 * <p>Overrides main filter query, determines which documents to include in the main group.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Orders the documents within the expanded groups (expand.sort parameter)
		 * <p>Orders the documents within the expanded groups (expand.sort parameter).</p>
		 * @param string $field <p>field name</p>
		 * @param string $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants.</p> <p>Default: SolrQuery::ORDER_DESC</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandSortField(string $field, string $order = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date
		 * <p>This method allows you to specify a field which should be treated as a facet.</p><p>It can be used multiple times with different field names to indicate multiple facet fields</p>
		 * @param string $dateField <p>The name of the date field.</p>
		 * @return SolrQuery <p>Returns a SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateField(string $dateField): \SolrQuery {}

		/**
		 * Adds another facet.date.other parameter
		 * <p>Sets the facet.date.other parameter. Accepts an optional field override</p>
		 * @param string $value <p>The value to use.</p>
		 * @param string $field_override <p>The field name for the override.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Adds another field to the facet
		 * <p>Adds another field to the facet</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetField(string $field): \SolrQuery {}

		/**
		 * Adds a facet query
		 * <p>Adds a facet query</p>
		 * @param string $facetQuery <p>The facet query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addfacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetQuery(string $facetQuery): \SolrQuery {}

		/**
		 * Specifies which fields to return in the result
		 * <p>This method is used to used to specify a set of fields to return, thereby restricting the amount of data returned in the response.</p><p>It should be called multiple time, once for each field name.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/ja/solrquery.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $field): \SolrQuery {}

		/**
		 * Specifies a filter query
		 * <p>Specifies a filter query</p>
		 * @param string $fq <p>The filter query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addfilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Add a field to be used to group results
		 * <p>The name of the field by which to group results. The field must be single-valued, and either be indexed or a field type that has a value source and works in a function query, such as ExternalFileField. It must also be a string-based field, such as StrField or TextField Uses group.field parameter</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.addgroupfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupField(string $value): \SolrQuery {}

		/**
		 * Allows grouping results based on the unique values of a function query (group.func parameter)
		 * <p>Adds a group function (group.func parameter) Allows grouping results based on the unique values of a function query.</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addgroupfunction.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupFunction(string $value): \SolrQuery {}

		/**
		 * Allows grouping of documents that match the given query
		 * <p>Allows grouping of documents that match the given query. Adds query to the group.query parameter</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.addgroupquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupQuery(string $value): \SolrQuery {}

		/**
		 * Add a group sort field (group.sort parameter)
		 * <p>Allow sorting group documents, using group sort field (group.sort parameter).</p>
		 * @param string $field <p>Field name</p>
		 * @param int $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.addgroupsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupSortField(string $field, int $order = NULL): \SolrQuery {}

		/**
		 * Maps to hl.fl
		 * <p>Maps to hl.fl. This is used to specify that highlighted snippets should be generated for a particular field</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addhighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addHighlightField(string $field): \SolrQuery {}

		/**
		 * Sets a field to use for similarity
		 * <p>Maps to mlt.fl. It specifies that a field should be used for similarity.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addmltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltField(string $field): \SolrQuery {}

		/**
		 * Maps to mlt.qf
		 * <p>Maps to mlt.qf. It is used to specify query fields and their boosts</p>
		 * @param string $field <p>The name of the field</p>
		 * @param float $boost <p>Its boost value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addmltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltQueryField(string $field, float $boost): \SolrQuery {}

		/**
		 * Used to control how the results should be sorted
		 * <p>Used to control how the results should be sorted.</p>
		 * @param string $field <p>The name of the field</p>
		 * @param int $order <p>The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.addsortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addSortField(string $field, int $order = SolrQuery::ORDER_DESC): \SolrQuery {}

		/**
		 * Requests a return of sub results for values within the given facet
		 * <p>Requests a return of sub results for values within the given facet. Maps to the stats.facet field</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addstatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsFacet(string $field): \SolrQuery {}

		/**
		 * Maps to stats.field parameter
		 * <p>Maps to stats.field parameter This methods adds another stats.field parameter.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.addstatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsField(string $field): \SolrQuery {}

		/**
		 * Collapses the result set to a single document per group
		 * <p>Collapses the result set to a single document per group before it forwards the result set to the rest of the search components.</p><p>So all downstream components (faceting, highlighting, etc...) will work with the collapsed result set.</p>
		 * @param \SolrCollapseFunction $collapseFunction
		 * @return SolrQuery <p>Returns the current <code>SolrQuery</code> object</p>
		 * @link https://php.net/manual/ja/solrquery.collapse.php
		 * @since No version information available, might only be in Git
		 */
		public function collapse(\SolrCollapseFunction $collapseFunction): \SolrQuery {}

		/**
		 * Returns true if group expanding is enabled
		 * <p>Returns <b><code>TRUE</code></b> if group expanding is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpand(): bool {}

		/**
		 * Returns the expand filter queries
		 * <p>Returns the expand filter queries</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandfilterqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandFilterQueries(): array {}

		/**
		 * Returns the expand query expand.q parameter
		 * <p>Returns the expand query expand.q parameter</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandQuery(): array {}

		/**
		 * Returns The number of rows to display in each group (expand.rows)
		 * <p>Returns The number of rows to display in each group (expand.rows)</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandRows(): int {}

		/**
		 * Returns an array of fields
		 * <p>Returns an array of fields</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getexpandsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandSortFields(): array {}

		/**
		 * Returns the value of the facet parameter
		 * <p>Returns the value of the facet parameter.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacet(): bool {}

		/**
		 * Returns the value for the facet.date.end parameter
		 * <p>Returns the value for the facet.date.end parameter. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateEnd(string $field_override = NULL): string {}

		/**
		 * Returns all the facet.date fields
		 * <p>Returns all the facet.date fields</p>
		 * @return array <p>Returns all the facet.date fields as an array or <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatefields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateFields(): array {}

		/**
		 * Returns the value of the facet.date.gap parameter
		 * <p>Returns the value of the facet.date.gap parameter. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateGap(string $field_override = NULL): string {}

		/**
		 * Returns the value of the facet.date.hardend parameter
		 * <p>Returns the value of the facet.date.hardend parameter. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateHardEnd(string $field_override = NULL): string {}

		/**
		 * Returns the value for the facet.date.other parameter
		 * <p>Returns the value for the facet.date.other parameter. This method accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return array <p>Returns an <code>array</code> on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateOther(string $field_override = NULL): array {}

		/**
		 * Returns the lower bound for the first date range for all date faceting on this field
		 * <p>Returns the lower bound for the first date range for all date faceting on this field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateStart(string $field_override = NULL): string {}

		/**
		 * Returns all the facet fields
		 * <p>Returns all the facet fields</p>
		 * @return array <p>Returns an array of all the fields and <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetFields(): array {}

		/**
		 * Returns the maximum number of constraint counts that should be returned for the facet fields
		 * <p>Returns the maximum number of constraint counts that should be returned for the facet fields. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetLimit(string $field_override = NULL): int {}

		/**
		 * Returns the value of the facet.method parameter
		 * <p>Returns the value of the facet.method parameter. This accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMethod(string $field_override = NULL): string {}

		/**
		 * Returns the minimum counts for facet fields should be included in the response
		 * <p>Returns the minimum counts for facet fields should be included in the response. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMinCount(string $field_override = NULL): int {}

		/**
		 * Returns the current state of the facet.missing parameter
		 * <p>Returns the current state of the facet.missing parameter. This accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMissing(string $field_override = NULL): bool {}

		/**
		 * Returns an offset into the list of constraints to be used for pagination
		 * <p>Returns an offset into the list of constraints to be used for pagination. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetOffset(string $field_override = NULL): int {}

		/**
		 * Returns the facet prefix
		 * <p>Returns the facet prefix</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetPrefix(string $field_override = NULL): string {}

		/**
		 * Returns all the facet queries
		 * <p>Returns all the facet queries</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetQueries(): array {}

		/**
		 * Returns the facet sort type
		 * <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT)</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetSort(string $field_override = NULL): int {}

		/**
		 * Returns the list of fields that will be returned in the response
		 * <p>Returns the list of fields that will be returned in the response</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFields(): array {}

		/**
		 * Returns an array of filter queries
		 * <p>Returns an array of filter queries. These are queries that can be used to restrict the super set of documents that can be returned, without influencing score</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getfilterqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFilterQueries(): array {}

		/**
		 * Returns true if grouping is enabled
		 * <p>Returns true if grouping is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroup(): bool {}

		/**
		 * Returns group cache percent value
		 * <p>Returns group cache percent value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupCachePercent(): int {}

		/**
		 * Returns the group.facet parameter value
		 * <p>Returns the group.facet parameter value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFacet(): bool {}

		/**
		 * Returns group fields (group.field parameter values)
		 * <p>Returns group fields (group.field parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFields(): array {}

		/**
		 * Returns the group.format value
		 * <p>Returns the group.format value</p>
		 * @return string
		 * @link https://php.net/manual/ja/solrquery.getgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFormat(): string {}

		/**
		 * Returns group functions (group.func parameter values)
		 * <p>Returns group functions (group.func parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupfunctions.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFunctions(): array {}

		/**
		 * Returns the group.limit value
		 * <p>Returns the group.limit value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupLimit(): int {}

		/**
		 * Returns the group.main value
		 * <p>Returns the group.main value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupMain(): bool {}

		/**
		 * Returns the group.ngroups value
		 * <p>Returns the group.ngroups value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupNGroups(): bool {}

		/**
		 * Returns the group.offset value
		 * <p>Returns the group.offset value</p>
		 * @return int
		 * @link https://php.net/manual/ja/solrquery.getgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupOffset(): int {}

		/**
		 * Returns all the group.query parameter values
		 * <p>Returns all the group.query parameter values</p>
		 * @return array <p><code>array</code></p>
		 * @link https://php.net/manual/ja/solrquery.getgroupqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupQueries(): array {}

		/**
		 * Returns the group.sort value
		 * <p>Returns the group.sort value</p>
		 * @return array
		 * @link https://php.net/manual/ja/solrquery.getgroupsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupSortFields(): array {}

		/**
		 * Returns the group.truncate value
		 * <p>Returns the group.truncate value</p>
		 * @return bool
		 * @link https://php.net/manual/ja/solrquery.getgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupTruncate(): bool {}

		/**
		 * Returns the state of the hl parameter
		 * <p>Returns a boolean indicating whether or not to enable highlighted snippets to be generated in the query response.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlight(): bool {}

		/**
		 * Returns the highlight field to use as backup or default
		 * <p>Returns the highlight field to use as backup or default. It accepts an optional override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightAlternateField(string $field_override = NULL): string {}

		/**
		 * Returns all the fields that Solr should generate highlighted snippets for
		 * <p>Returns all the fields that Solr should generate highlighted snippets for</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFields(): array {}

		/**
		 * Returns the formatter for the highlighted output
		 * <p>Returns the formatter for the highlighted output</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFormatter(string $field_override = NULL): string {}

		/**
		 * Returns the text snippet generator for highlighted text
		 * <p>Returns the text snippet generator for highlighted text. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragmenter(string $field_override = NULL): string {}

		/**
		 * Returns the number of characters of fragments to consider for highlighting
		 * <p>Returns the number of characters of fragments to consider for highlighting. Zero implies no fragmenting. The entire field should be used.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragsize(string $field_override = NULL): int {}

		/**
		 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
		 * <p>Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightHighlightMultiTerm(): bool {}

		/**
		 * Returns the maximum number of characters of the field to return
		 * <p>Returns the maximum number of characters of the field to return</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAlternateFieldLength(string $field_override = NULL): int {}

		/**
		 * Returns the maximum number of characters into a document to look for suitable snippets
		 * <p>Returns the maximum number of characters into a document to look for suitable snippets</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAnalyzedChars(): int {}

		/**
		 * Returns whether or not the collapse contiguous fragments into a single fragment
		 * <p>Returns whether or not the collapse contiguous fragments into a single fragment. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMergeContiguous(string $field_override = NULL): bool {}

		/**
		 * Returns the maximum number of characters from a field when using the regex fragmenter
		 * <p>Returns the maximum number of characters from a field when using the regex fragmenter</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexMaxAnalyzedChars(): int {}

		/**
		 * Returns the regular expression for fragmenting
		 * <p>Returns the regular expression used for fragmenting</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexPattern(): string {}

		/**
		 * Returns the deviation factor from the ideal fragment size
		 * <p>Returns the factor by which the regex fragmenter can deviate from the ideal fragment size to accomodate the regular expression</p>
		 * @return float <p>Returns a double on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexSlop(): float {}

		/**
		 * Returns if a field will only be highlighted if the query matched in this particular field
		 * <p>Returns if a field will only be highlighted if the query matched in this particular field.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRequireFieldMatch(): bool {}

		/**
		 * Returns the text which appears after a highlighted term
		 * <p>Returns the text which appears after a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePost(string $field_override = NULL): string {}

		/**
		 * Returns the text which appears before a highlighted term
		 * <p>Returns the text which appears before a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePre(string $field_override = NULL): string {}

		/**
		 * Returns the maximum number of highlighted snippets to generate per field
		 * <p>Returns the maximum number of highlighted snippets to generate per field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSnippets(string $field_override = NULL): int {}

		/**
		 * Returns the state of the hl.usePhraseHighlighter parameter
		 * <p>Returns whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightUsePhraseHighlighter(): bool {}

		/**
		 * Returns whether or not MoreLikeThis results should be enabled
		 * <p>Returns whether or not MoreLikeThis results should be enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMlt(): bool {}

		/**
		 * Returns whether or not the query will be boosted by the interesting term relevance
		 * <p>Returns whether or not the query will be boosted by the interesting term relevance</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltBoost(): bool {}

		/**
		 * Returns the number of similar documents to return for each result
		 * <p>Returns the number of similar documents to return for each result</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltCount(): int {}

		/**
		 * Returns all the fields to use for similarity
		 * <p>Returns all the fields to use for similarity</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltFields(): array {}

		/**
		 * Returns the maximum number of query terms that will be included in any generated query
		 * <p>Returns the maximum number of query terms that will be included in any generated query</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumQueryTerms(): int {}

		/**
		 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
		 * <p>Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumTokens(): int {}

		/**
		 * Returns the maximum word length above which words will be ignored
		 * <p>Returns the maximum word length above which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxWordLength(): int {}

		/**
		 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
		 * <p>Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinDocFrequency(): int {}

		/**
		 * Returns the frequency below which terms will be ignored in the source document
		 * <p>Returns the frequency below which terms will be ignored in the source document</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinTermFrequency(): int {}

		/**
		 * Returns the minimum word length below which words will be ignored
		 * <p>Returns the minimum word length below which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinWordLength(): int {}

		/**
		 * Returns the query fields and their boosts
		 * <p>Returns the query fields and their boosts</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getmltqueryfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltQueryFields(): array {}

		/**
		 * 主なクエリーを返す
		 * <p>主な検索クエリーを返します。</p>
		 * @return string <p>成功した場合は文字列、設定されなかった場合には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrquery.getquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getQuery(): string {}

		/**
		 * Returns the maximum number of documents
		 * <p>Returns the maximum number of documents from the complete result set to return to the client for every request</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRows(): int {}

		/**
		 * Returns all the sort fields
		 * <p>Returns all the sort fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if none of the parameters was set.</p>
		 * @link https://php.net/manual/ja/solrquery.getsortfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getSortFields(): array {}

		/**
		 * Returns the offset in the complete result set
		 * <p>Returns the offset in the complete result set for the queries where the set of returned documents should begin.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStart(): int {}

		/**
		 * Returns whether or not stats is enabled
		 * <p>Returns whether or not stats is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStats(): bool {}

		/**
		 * Returns all the stats facets that were set
		 * <p>Returns all the stats facets that were set</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstatsfacets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFacets(): array {}

		/**
		 * Returns all the statistics fields
		 * <p>Returns all the statistics fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getstatsfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFields(): array {}

		/**
		 * Returns whether or not the TermsComponent is enabled
		 * <p>Returns whether or not the TermsComponent is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.getterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTerms(): bool {}

		/**
		 * Returns the field from which the terms are retrieved
		 * <p>Returns the field from which the terms are retrieved</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsField(): string {}

		/**
		 * Returns whether or not to include the lower bound in the result set
		 * <p>Returns whether or not to include the lower bound in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeLowerBound(): bool {}

		/**
		 * Returns whether or not to include the upper bound term in the result set
		 * <p>Returns whether or not to include the upper bound term in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeUpperBound(): bool {}

		/**
		 * Returns the maximum number of terms Solr should return
		 * <p>Returns the maximum number of terms Solr should return</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLimit(): int {}

		/**
		 * Returns the term to start at
		 * <p>Returns the term to start at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLowerBound(): string {}

		/**
		 * Returns the maximum document frequency
		 * <p>Returns the maximum document frequency</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMaxCount(): int {}

		/**
		 * Returns the minimum document frequency to return in order to be included
		 * <p>Returns the minimum document frequency to return in order to be included</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMinCount(): int {}

		/**
		 * Returns the term prefix
		 * <p>Returns the prefix to which matching terms must be restricted. This will restrict matches to only terms that start with the prefix</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsPrefix(): string {}

		/**
		 * Whether or not to return raw characters
		 * <p>Returns a boolean indicating whether or not to return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsReturnRaw(): bool {}

		/**
		 * Returns an integer indicating how terms are sorted
		 * <p>SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order. SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsSort(): int {}

		/**
		 * Returns the term to stop at
		 * <p>Returns the term to stop at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsUpperBound(): string {}

		/**
		 * Returns the time in milliseconds allowed for the query to finish
		 * <p>Returns the time in milliseconds allowed for the query to finish.</p>
		 * @return int <p>Returns and integer on success and <b><code>NULL</code></b> if it is not set.</p>
		 * @link https://php.net/manual/ja/solrquery.gettimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTimeAllowed(): int {}

		/**
		 * Removes an expand filter query
		 * <p>Removes an expand filter query.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.removeexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes an expand sort field from the expand.sort parameter
		 * <p>Removes an expand sort field from the expand.sort parameter.</p>
		 * @param string $field <p>field name</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.removeexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet date fields
		 * <p>The name of the field</p>
		 * @param string $field <p>The name of the date field to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.date.other parameters
		 * <p>Removes one of the facet.date.other parameters</p>
		 * @param string $value <p>The value</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Removes one of the facet.date parameters
		 * <p>Removes one of the facet.date parameters</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.query parameters
		 * <p>Removes one of the facet.query parameters.</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetQuery(string $value): \SolrQuery {}

		/**
		 * Removes a field from the list of fields
		 * <p>Removes a field from the list of fields</p>
		 * @param string $field <p>Name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeField(string $field): \SolrQuery {}

		/**
		 * Removes a filter query
		 * <p>Removes a filter query.</p>
		 * @param string $fq <p>The filter query to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removefilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes one of the fields used for highlighting
		 * <p>Removes one of the fields used for highlighting.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removehighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeHighlightField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis fields
		 * <p>Removes one of the moreLikeThis fields.</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removemltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis query fields
		 * <p>Removes one of the moreLikeThis query fields.</p>
		 * @param string $queryField <p>The query field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removemltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltQueryField(string $queryField): \SolrQuery {}

		/**
		 * Removes one of the sort fields
		 * <p>Removes one of the sort fields</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removesortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the stats.facet parameters
		 * <p>Removes one of the stats.facet parameters</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removestatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsFacet(string $value): \SolrQuery {}

		/**
		 * Removes one of the stats.field parameters
		 * <p>Removes one of the stats.field parameters</p>
		 * @param string $field <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.removestatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsField(string $field): \SolrQuery {}

		/**
		 * Toggles the echoHandler parameter
		 * <p>If set to true, Solr places the name of the handle used in the response to the client for debugging purposes.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setechohandler.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoHandler(bool $flag): \SolrQuery {}

		/**
		 * Determines what kind of parameters to include in the response
		 * <p>Instructs Solr what kinds of Request parameters should be included in the response for debugging purposes, legal values include:</p><p></p>
		 * @param string $type <p>The type of parameters to include</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setechoparams.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoParams(string $type): \SolrQuery {}

		/**
		 * Enables/Disables the Expand Component
		 * <p>Enables/Disables the Expand Component.</p>
		 * @param bool $value <p>Bool flag</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpand(bool $value): \SolrQuery {}

		/**
		 * Sets the expand.q parameter
		 * <p>Sets the expand.q parameter.</p><p>Overrides the main q parameter, determines which documents to include in the main group.</p>
		 * @param string $q
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandQuery(string $q): \SolrQuery {}

		/**
		 * Sets the number of rows to display in each group (expand.rows). Server Default 5
		 * <p>Sets the number of rows to display in each group (expand.rows). Server Default 5</p>
		 * @param int $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/ja/solrquery.setexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandRows(int $value): \SolrQuery {}

		/**
		 * Sets the explainOther common query parameter
		 * <p>Sets the explainOther common query parameter</p>
		 * @param string $query <p>The Lucene query to identify a set of documents</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setexplainother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setExplainOther(string $query): \SolrQuery {}

		/**
		 * Maps to the facet parameter. Enables or disables facetting
		 * <p>Enables or disables faceting.</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacet(bool $flag): \SolrQuery {}

		/**
		 * Maps to facet.date.end
		 * <p>Maps to facet.date.end</p>
		 * @param string $value <p>See facet.date.end</p>
		 * @param string $field_override <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateEnd(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.gap
		 * <p>Maps to facet.date.gap</p>
		 * @param string $value <p>See facet.date.gap</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateGap(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.hardend
		 * <p>Maps to facet.date.hardend</p>
		 * @param bool $value <p>See facet.date.hardend</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateHardEnd(bool $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.start
		 * <p>Maps to facet.date.start</p>
		 * @param string $value <p>See facet.date.start</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateStart(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the minimum document frequency used for determining term count
		 * <p>Sets the minimum document frequency used for determining term count</p>
		 * @param int $frequency
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetenumcachemindefaultfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.limit
		 * <p>Maps to facet.limit. Sets the maximum number of constraint counts that should be returned for the facet fields.</p>
		 * @param int $limit <p>The maximum number of constraint counts</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetLimit(int $limit, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the type of algorithm to use when faceting a field
		 * <p>Specifies the type of algorithm to use when faceting a field. This method accepts optional field override.</p>
		 * @param string $method <p>The method to use.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMethod(string $method, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.mincount
		 * <p>Sets the minimum counts for facet fields that should be included in the response</p>
		 * @param int $mincount <p>The minimum count</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMinCount(int $mincount, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.missing
		 * <p>Used to indicate that in addition to the Term-based constraints of a facet field, a count of all matching results which have no value for the field should be computed</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns this feature on. <b><code>FALSE</code></b> disables it.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMissing(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the offset into the list of constraints to allow for pagination
		 * <p>Sets the offset into the list of constraints to allow for pagination.</p>
		 * @param int $offset <p>The offset</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetOffset(int $offset, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies a string prefix with which to limits the terms on which to facet
		 * <p>Specifies a string prefix with which to limits the terms on which to facet.</p>
		 * @param string $prefix <p>The prefix string</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetPrefix(string $prefix, string $field_override = NULL): \SolrQuery {}

		/**
		 * Determines the ordering of the facet field constraints
		 * <p>Determines the ordering of the facet field constraints</p>
		 * @param int $facetSort <p>Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetSort(int $facetSort, string $field_override = NULL): \SolrQuery {}

		/**
		 * Enable/Disable result grouping (group parameter)
		 * <p>Enable/Disable result grouping (group parameter)</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroup(bool $value): \SolrQuery {}

		/**
		 * Enables caching for result grouping
		 * <p>Setting this parameter to a number greater than 0 enables caching for result grouping. Result Grouping executes two searches; this option caches the second search. The server default value is 0. Testing has shown that group caching only improves search time with Boolean, wildcard, and fuzzy queries. For simple queries like term or "match all" queries, group caching degrades performance. group.cache.percent parameter</p>
		 * @param int $percent
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupCachePercent(int $percent): \SolrQuery {}

		/**
		 * Sets group.facet parameter
		 * <p>Determines whether to compute grouped facets for the field facets specified in facet.field parameters. Grouped facets are computed based on the first specified group.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFacet(bool $value): \SolrQuery {}

		/**
		 * Sets the group format, result structure (group.format parameter)
		 * <p>Sets the group.format parameter. If this parameter is set to simple, the grouped documents are presented in a single flat list, and the start and rows parameters affect the numbers of documents instead of groups. Accepts: grouped/simple</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFormat(string $value): \SolrQuery {}

		/**
		 * Specifies the number of results to return for each group. The server default value is 1
		 * <p>Specifies the number of results to return for each group. The server default value is 1.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupLimit(int $value): \SolrQuery {}

		/**
		 * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple
		 * <p>If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple.</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupMain(string $value): \SolrQuery {}

		/**
		 * If true, Solr includes the number of groups that have matched the query in the results
		 * <p>If true, Solr includes the number of groups that have matched the query in the results.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupNGroups(bool $value): \SolrQuery {}

		/**
		 * Sets the group.offset parameter
		 * <p>Sets the group.offset parameter.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupOffset(int $value): \SolrQuery {}

		/**
		 * If true, facet counts are based on the most relevant document of each group matching the query
		 * <p>If true, facet counts are based on the most relevant document of each group matching the query. The server default value is false. group.truncate parameter</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.setgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupTruncate(bool $value): \SolrQuery {}

		/**
		 * Enables or disables highlighting
		 * <p>Setting it to <b><code>TRUE</code></b> enables highlighted snippets to be generated in the query response.</p><p>Setting it to <b><code>FALSE</code></b> disables highlighting</p>
		 * @param bool $flag <p>Enable or disable highlighting</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlight(bool $flag): \SolrQuery {}

		/**
		 * Specifies the backup field to use
		 * <p>If a snippet cannot be generated because there were no matching terms, one can specify a field to use as the backup or default summary</p>
		 * @param string $field <p>The name of the backup field</p>
		 * @param string $field_override <p>The name of the field we are overriding this setting for.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightAlternateField(string $field, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify a formatter for the highlight output
		 * <p>Specify a formatter for the highlight output.</p>
		 * @param string $formatter <p>Currently the only legal value is "simple"</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.sethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFormatter(string $formatter, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets a text snippet generator for highlighted text
		 * <p>Specify a text snippet generator for highlighted text.</p>
		 * @param string $fragmenter <p>The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragmenter(string $fragmenter, string $field_override = NULL): \SolrQuery {}

		/**
		 * The size of fragments to consider for highlighting
		 * <p>Sets the size, in characters, of fragments to consider for highlighting. "0" indicates that the whole field value should be used (no fragmenting).</p>
		 * @param int $size <p>The size, in characters, of fragments to consider for highlighting</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragsize(int $size, string $field_override = NULL): \SolrQuery {}

		/**
		 * Use SpanScorer to highlight phrase terms
		 * <p>Use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @param bool $flag <p>Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightHighlightMultiTerm(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of characters of the field to return
		 * <p>If SolrQuery::setHighlightAlternateField() was passed the value <b><code>TRUE</code></b>, this parameter specifies the maximum number of characters of the field to return</p><p>Any value less than or equal to 0 means unlimited.</p>
		 * @param int $fieldLength <p>The length of the field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the number of characters into a document to look for suitable snippets
		 * <p>Specifies the number of characters into a document to look for suitable snippets</p>
		 * @param int $value <p>The number of characters into a document to look for suitable snippets</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAnalyzedChars(int $value): \SolrQuery {}

		/**
		 * Whether or not to collapse contiguous fragments into a single fragment
		 * <p>Whether or not to collapse contiguous fragments into a single fragment</p>
		 * @param bool $flag
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMergeContiguous(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify the maximum number of characters to analyze
		 * <p>Specify the maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @param int $maxAnalyzedChars <p>The maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): \SolrQuery {}

		/**
		 * Specify the regular expression for fragmenting
		 * <p>Specifies the regular expression for fragmenting. This could be used to extract sentences</p>
		 * @param string $value <p>The regular expression for fragmenting. This could be used to extract sentences</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexPattern(string $value): \SolrQuery {}

		/**
		 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
		 * <p>The factor by which the regex fragmenter can stray from the ideal fragment size ( specfied by SolrQuery::setHighlightFragsize )to accommodate the regular expression</p>
		 * @param float $factor <p>The factor by which the regex fragmenter can stray from the ideal fragment size</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexSlop(float $factor): \SolrQuery {}

		/**
		 * Require field matching during highlighting
		 * <p>If <b><code>TRUE</code></b>, then a field will only be highlighted if the query matched in this particular field.</p><p>This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b><code>TRUE</code></b></p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRequireFieldMatch(bool $flag): \SolrQuery {}

		/**
		 * Sets the text which appears after a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p>
		 * @param string $simplePost <p>Sets the text which appears after a highlighted term</p> <p></p> <pre>The default is &lt;/em&gt;</pre>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/ja/solrquery.sethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePost(string $simplePost, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the text which appears before a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p><p></p>
		 * @param string $simplePre <p>The text which appears before a highlighted term</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePre(string $simplePre, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the maximum number of highlighted snippets to generate per field
		 * <p>Sets the maximum number of highlighted snippets to generate per field</p>
		 * @param int $value <p>The maximum number of highlighted snippets to generate per field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSnippets(int $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Whether to highlight phrase terms only when they appear within the query phrase
		 * <p>Sets whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.sethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightUsePhraseHighlighter(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables moreLikeThis
		 * <p>Enables or disables moreLikeThis</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it and <b><code>FALSE</code></b> turns it off.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMlt(bool $flag): \SolrQuery {}

		/**
		 * Set if the query will be boosted by the interesting term relevance
		 * <p>Set if the query will be boosted by the interesting term relevance</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltBoost(bool $flag): \SolrQuery {}

		/**
		 * Set the number of similar documents to return for each result
		 * <p>Set the number of similar documents to return for each result</p>
		 * @param int $count <p>The number of similar documents to return for each result</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltCount(int $count): \SolrQuery {}

		/**
		 * Sets the maximum number of query terms included
		 * <p>Sets the maximum number of query terms that will be included in any generated query.</p>
		 * @param int $value <p>The maximum number of query terms that will be included in any generated query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumQueryTerms(int $value): \SolrQuery {}

		/**
		 * Specifies the maximum number of tokens to parse
		 * <p>Specifies the maximum number of tokens to parse in each example doc field that is not stored with TermVector support.</p>
		 * @param int $value <p>The maximum number of tokens to parse</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumTokens(int $value): \SolrQuery {}

		/**
		 * Sets the maximum word length
		 * <p>Sets the maximum word length above which words will be ignored.</p>
		 * @param int $maxWordLength <p>The maximum word length above which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxWordLength(int $maxWordLength): \SolrQuery {}

		/**
		 * Sets the mltMinDoc frequency
		 * <p>The frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @param int $minDocFrequency <p>Sets the frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinDocFrequency(int $minDocFrequency): \SolrQuery {}

		/**
		 * Sets the frequency below which terms will be ignored in the source docs
		 * <p>Sets the frequency below which terms will be ignored in the source docs</p>
		 * @param int $minTermFrequency <p>The frequency below which terms will be ignored in the source docs</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinTermFrequency(int $minTermFrequency): \SolrQuery {}

		/**
		 * Sets the minimum word length
		 * <p>Sets the minimum word length below which words will be ignored.</p>
		 * @param int $minWordLength <p>The minimum word length below which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinWordLength(int $minWordLength): \SolrQuery {}

		/**
		 * Exclude the header from the returned results
		 * <p>Exclude the header from the returned results.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> excludes the header from the result.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setomitheader.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setOmitHeader(bool $flag): \SolrQuery {}

		/**
		 * 検索クエリーを設定
		 * <p>検索クエリーを設定します。</p>
		 * @param string $query <p>検索クエリー</p>
		 * @return SolrQuery <p>現行の SolrQuery オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/solrquery.setquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setQuery(string $query): \SolrQuery {}

		/**
		 * Specifies the maximum number of rows to return in the result
		 * <p>Specifies the maximum number of rows to return in the result</p>
		 * @param int $rows <p>The maximum number of rows to return</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.setrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setRows(int $rows): \SolrQuery {}

		/**
		 * Flag to show debug information
		 * <p>Whether to show debug info</p>
		 * @param bool $flag <p>Whether to show debug info. <b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setshowdebuginfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setShowDebugInfo(bool $flag): \SolrQuery {}

		/**
		 * Specifies the number of rows to skip
		 * <p>Specifies the number of rows to skip. Useful in pagination of results.</p>
		 * @param int $start <p>The number of rows to skip.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/ja/solrquery.setstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStart(int $start): \SolrQuery {}

		/**
		 * Enables or disables the Stats component
		 * <p>Enables or disables the Stats component.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns on the stats component and <b><code>FALSE</code></b> disables it.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStats(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables the TermsComponent
		 * <p>Enables or disables the TermsComponent</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it. <b><code>FALSE</code></b> turns it off</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.setterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTerms(bool $flag): \SolrQuery {}

		/**
		 * Sets the name of the field to get the Terms from
		 * <p>Sets the name of the field to get the terms from</p>
		 * @param string $fieldname <p>The field name</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsField(string $fieldname): \SolrQuery {}

		/**
		 * Include the lower bound term in the result set
		 * <p>Include the lower bound term in the result set.</p>
		 * @param bool $flag <p>Include the lower bound term in the result set</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeLowerBound(bool $flag): \SolrQuery {}

		/**
		 * Include the upper bound term in the result set
		 * <p>Include the upper bound term in the result set.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeUpperBound(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of terms to return
		 * <p>Sets the maximum number of terms to return</p>
		 * @param int $limit <p>The maximum number of terms to return. All the terms will be returned if the limit is negative.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLimit(int $limit): \SolrQuery {}

		/**
		 * Specifies the Term to start from
		 * <p>Specifies the Term to start from</p>
		 * @param string $lowerBound <p>The lower bound Term</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLowerBound(string $lowerBound): \SolrQuery {}

		/**
		 * Sets the maximum document frequency
		 * <p>Sets the maximum document frequency.</p>
		 * @param int $frequency <p>The maximum document frequency.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMaxCount(int $frequency): \SolrQuery {}

		/**
		 * Sets the minimum document frequency
		 * <p>Sets the minimum doc frequency to return in order to be included</p>
		 * @param int $frequency <p>The minimum frequency</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMinCount(int $frequency): \SolrQuery {}

		/**
		 * Restrict matches to terms that start with the prefix
		 * <p>Restrict matches to terms that start with the prefix</p>
		 * @param string $prefix <p>Restrict matches to terms that start with the prefix</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsPrefix(string $prefix): \SolrQuery {}

		/**
		 * Return the raw characters of the indexed term
		 * <p>If true, return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsReturnRaw(bool $flag): \SolrQuery {}

		/**
		 * Specifies how to sort the returned terms
		 * <p>If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first). If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order</p>
		 * @param int $sortType <p>SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsSort(int $sortType): \SolrQuery {}

		/**
		 * Sets the term to stop at
		 * <p>Sets the term to stop at</p>
		 * @param string $upperBound <p>The term to stop at</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsUpperBound(string $upperBound): \SolrQuery {}

		/**
		 * The time allowed for search to finish
		 * <p>The time allowed for a search to finish. This value only applies to the search and not to requests in general. Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be returned, if there are any.</p>
		 * @param int $timeAllowed <p>The time allowed for a search to finish.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/ja/solrquery.settimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTimeAllowed(int $timeAllowed): \SolrQuery {}
	}

	/**
	 * <p>クエリーリクエストに対するレスポンスを表現</p>
	 * @link https://php.net/manual/ja/class.solrqueryresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrQueryResponse extends \SolrResponse {

		/**
		 * @var integer <p>文書は、SolrObject インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrqueryresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var integer <p>文書は、SolrDocument インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrqueryresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var integer <p>レスポンスの HTTP ステータス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var integer <p>Solr 文書を SolrObject または SolrDocument インスタンスとしてパースするかどうか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>リクエスト中にエラーがあったか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>HTTP ステータスについての詳細メッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>リクエスト URL</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>リクエスト中に送信される生のヘッダ文字列</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>サーバーに送信される生のリクエスト</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Solr サーバーからのレスポンスヘッダ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>サーバーからのレスポンスメッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>PHP シリアライズ形式でのレスポンス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrqueryresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrqueryresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * シリアライズされた PHP データとして XML レスポンスを返す
		 * <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @return string <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * レスポンスの HTTP ステータスを返す
		 * <p>レスポンスの HTTP ステータスを返します。</p>
		 * @return int <p>レスポンスの HTTP ステータスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * HTTP ステータスに関する詳細を返す
		 * <p>HTTP ステータスに関する詳細を返します。</p>
		 * @return string <p>HTTP ステータスに関する詳細を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストを返す
		 * <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストヘッダを返す
		 * <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Solr サーバーからの生のレスポンスを返す
		 * <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Solr サーバーからの生のレスポンスヘッダを返す
		 * <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * リクエストが送られた完全な URL を返す
		 * <p>リクエストが送られた完全な URL を返します。</p>
		 * @return string <p>リクエストが送られた完全な URL を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * サーバーからの XML レスポンスを表現する SolrObject を返す
		 * <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @return SolrObject <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * パースモードを設定
		 * <p>パースモードを設定します。</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC は、SolrDocument インスタンス内の文書をパースします。 SolrResponse::PARSE_SOLR_OBJ は、SolrObjects 内に文書をパースします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * リクエストが成功したか
		 * <p>サーバーへのリクエストが成功したかチェックするために使用されます。</p>
		 * @return bool <p>成功した場合 <b><code>TRUE</code></b> 、失敗した場合 <b><code>FALSE</code></b> 。</p>
		 * @link https://php.net/manual/ja/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Solr サーバーからのレスポンスを表現</p>
	 * @link https://php.net/manual/ja/class.solrresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrResponse {

		/**
		 * @var integer <p>文書は、SolrObject インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var integer <p>文書は、SolrDocument インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var integer <p>レスポンスの HTTP ステータス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var integer <p>Solr 文書を SolrObject または SolrDocument インスタンスとしてパースするかどうか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>リクエスト中にエラーがあったか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>HTTP ステータスについての詳細メッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>リクエスト URL</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>リクエスト中に送信される生のヘッダ文字列</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>サーバーに送信される生のリクエスト</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Solr サーバーからのレスポンスヘッダ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>サーバーからのレスポンスメッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>PHP シリアライズ形式でのレスポンス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * シリアライズされた PHP データとして XML レスポンスを返す
		 * <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @return string <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * レスポンスの HTTP ステータスを返す
		 * <p>レスポンスの HTTP ステータスを返します。</p>
		 * @return int <p>レスポンスの HTTP ステータスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * HTTP ステータスに関する詳細を返す
		 * <p>HTTP ステータスに関する詳細を返します。</p>
		 * @return string <p>HTTP ステータスに関する詳細を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストを返す
		 * <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストヘッダを返す
		 * <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Solr サーバーからの生のレスポンスを返す
		 * <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Solr サーバーからの生のレスポンスヘッダを返す
		 * <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * リクエストが送られた完全な URL を返す
		 * <p>リクエストが送られた完全な URL を返します。</p>
		 * @return string <p>リクエストが送られた完全な URL を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * サーバーからの XML レスポンスを表現する SolrObject を返す
		 * <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @return SolrObject <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * パースモードを設定
		 * <p>パースモードを設定します。</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC は、SolrDocument インスタンス内の文書をパースします。 SolrResponse::PARSE_SOLR_OBJ は、SolrObjects 内に文書をパースします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * リクエストが成功したか
		 * <p>サーバーへのリクエストが成功したかチェックするために使用されます。</p>
		 * @return bool <p>成功した場合 <b><code>TRUE</code></b> 、失敗した場合 <b><code>FALSE</code></b> 。</p>
		 * @link https://php.net/manual/ja/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Solr サーバー自身によって生成されたエラーがあると、このオブジェクトがスローされます。</p>
	 * @link https://php.net/manual/ja/class.solrserverexception.php
	 * @since PECL Solr >= 1.1.0, >=2.0.0
	 */
	class SolrServerException extends \SolrException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var integer <p>例外が生成された、カーネル空間の PHP ソースファイルの行</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>例外が生成された、カーネル空間の PHP ソースファイル</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>例外が生成された、カーネル空間の関数</p>
		 * @link https://php.net/manual/ja/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外がスローされた際の内部情報を返す
		 * <p>例外がスローされた際の内部情報を返します。</p>
		 * @return array <p>エラーがスローされた際の内部情報を含む配列を返します。エクステンション開発者によるデバッグのためだけに使われます。</p>
		 * @link https://php.net/manual/ja/solrserverexception.getinternalinfo.php
		 * @since PECL solr >= 1.1.0, >=2.0.0
		 */
		public function getInternalInfo(): array {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>更新リクエストに対するレスポンスを表現</p>
	 * @link https://php.net/manual/ja/class.solrupdateresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrUpdateResponse extends \SolrResponse {

		/**
		 * @var integer <p>文書は、SolrObject インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrupdateresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var integer <p>文書は、SolrDocument インスタンスとしてパースされなければなりません</p>
		 * @link https://php.net/manual/ja/class.solrupdateresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var integer <p>レスポンスの HTTP ステータス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var integer <p>Solr 文書を SolrObject または SolrDocument インスタンスとしてパースするかどうか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>リクエスト中にエラーがあったか</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>HTTP ステータスについての詳細メッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>リクエスト URL</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>リクエスト中に送信される生のヘッダ文字列</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>サーバーに送信される生のリクエスト</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Solr サーバーからのレスポンスヘッダ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>サーバーからのレスポンスメッセージ</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>PHP シリアライズ形式でのレスポンス</p>
		 * @link https://php.net/manual/ja/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * コンストラクタ
		 * <p>コンストラクタ</p>
		 * @return self <p>ありません</p>
		 * @link https://php.net/manual/ja/solrupdateresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * デストラクタ
		 * <p>デストラクタ</p>
		 * @return void <p>ありません</p>
		 * @link https://php.net/manual/ja/solrupdateresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * シリアライズされた PHP データとして XML レスポンスを返す
		 * <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @return string <p>シリアライズされた PHP データとして XML レスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * レスポンスの HTTP ステータスを返す
		 * <p>レスポンスの HTTP ステータスを返します。</p>
		 * @return int <p>レスポンスの HTTP ステータスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * HTTP ステータスに関する詳細を返す
		 * <p>HTTP ステータスに関する詳細を返します。</p>
		 * @return string <p>HTTP ステータスに関する詳細を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストを返す
		 * <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Solr サーバーに送られた生のリクエストヘッダを返す
		 * <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @return string <p>Solr サーバーに送られた生のリクエストヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Solr サーバーからの生のレスポンスを返す
		 * <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Solr サーバーからの生のレスポンスヘッダを返す
		 * <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @return string <p>Solr サーバーからの生のレスポンスヘッダを返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * リクエストが送られた完全な URL を返す
		 * <p>リクエストが送られた完全な URL を返します。</p>
		 * @return string <p>リクエストが送られた完全な URL を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * サーバーからの XML レスポンスを表現する SolrObject を返す
		 * <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @return SolrObject <p>サーバーからの XML レスポンスを表現する SolrObject を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * パースモードを設定
		 * <p>パースモードを設定します。</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC は、SolrDocument インスタンス内の文書をパースします。 SolrResponse::PARSE_SOLR_OBJ は、SolrObjects 内に文書をパースします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * リクエストが成功したか
		 * <p>サーバーへのリクエストが成功したかチェックするために使用されます。</p>
		 * @return bool <p>成功した場合 <b><code>TRUE</code></b> 、失敗した場合 <b><code>FALSE</code></b> 。</p>
		 * @link https://php.net/manual/ja/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>エクステンションの現行バージョンを取得し、クエリ句を準備するための ユーティリティ・メソッドを含みます。</p>
	 * <p>クエリ文字列をエスケープしたり、XML レスポンスをパースするためのメソッドも含みます。</p>
	 * @link https://php.net/manual/ja/class.solrutils.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrUtils {

		/**
		 * Parses an response XML string into a SolrObject
		 * <p>This method parses an response XML string from the Apache Solr server into a SolrObject. It throws a SolrException if there was an error.</p>
		 * @param string $xmlresponse <p>The XML response string from the Solr server.</p>
		 * @param int $parse_mode <p>Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC</p>
		 * @return SolrObject <p>Returns the SolrObject representing the XML response.</p><p>If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.</p><p>If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/ja/solrutils.digestxmlresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function digestXmlResponse(string $xmlresponse, int $parse_mode = 0): \SolrObject {}

		/**
		 * Escapes a lucene query string
		 * <p>Lucene supports escaping special characters that are part of the query syntax.</p><p>The current list special characters are:</p><p></p><p>These characters are part of the query syntax and must be escaped</p>
		 * @param string $str <p>This is the query string to be escaped.</p>
		 * @return string <p>Returns the escaped string失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/solrutils.escapequerychars.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function escapeQueryChars(string $str): string {}

		/**
		 * Solr エクステンションの現行バージョンを返す
		 * <p>Solr の現行バージョンを返します。</p>
		 * @return string <p>Apache Solr エクステンションの現行バージョン。</p>
		 * @link https://php.net/manual/ja/solrutils.getsolrversion.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function getSolrVersion(): string {}

		/**
		 * Prepares a phrase from an unescaped lucene string
		 * <p>Prepares a phrase from an unescaped lucene string.</p>
		 * @param string $str <p>The lucene phrase.</p>
		 * @return string <p>Returns the phrase contained in double quotes.</p>
		 * @link https://php.net/manual/ja/solrutils.queryphrase.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function queryPhrase(string $str): string {}
	}

	/**
	 * Apache Solr エクステンションの現行バージョンを返す
	 * <p>この関数は、エクステンションの現行バージョンを文字列として返します。</p>
	 * @return string <p>成功時に文字列、失敗時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.solr-get-version.php
	 * @see SolrUtils::getSolrVersion()
	 * @since PECL solr >= 0.9.1
	 */
	function solr_get_version(): string {}

	define('SOLR_EXTENSION_VERSION', null);

	define('SOLR_MAJOR_VERSION', null);

	define('SOLR_MINOR_VERSION', null);

	define('SOLR_PATCH_VERSION', null);

}
