<?php



/**
 * 詳細なエラー情報を返す
 * <p>サーバー上での直近のリクエストに関する詳細なエラーメッセージを返します。</p><p>サーバーによっては、この関数は <code>yaz_error()</code> と同じ 文字列を返すことがあります。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return string <p>エラーの詳細情報を文字列で返します。直近の処理が成功したか、あるいは サーバーから詳細な情報が提供されていない場合には、空の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-addinfo.php
 * @see yaz_error(), yaz_errno()
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_addinfo($id): string {}

/**
 * CCL パーサを設定する
 * <p>この関数は、アクセスポイント(CCL限定辞)が定義するサーバーに関して CCL クエリパーサと RPN へのマッピングを設定します。</p><p>特定の CCL クエリを後で RPN にマップするには、 <code>yaz_ccl_parse()</code> 関数をコールしてください。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param array $config <p>設定の配列。配列の各キーが CCL フィールドの名前で、対応する値は RPN へのマッピングを指定する文字列です。</p> <p>マッピングは、属性型と属性値の組が並んだものです。 属性型と属性値は、等号（<i>=</i>）で区切られ、 組と組の間は空白で区切られます。</p> <p>詳細な情報は » CCL のページを 参照ください。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-ccl-conf.php
 * @see yaz_ccl_parse()
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_ccl_conf($id, array $config): void {}

/**
 * CCL パーサを起動する
 * <p>この関数は、CCL パーサを起動します。パーサは、指定された CCL FIND クエリを RPN クエリに変換します。これは検索を実行する <code>yaz_search()</code> 関数に渡すためのものです。</p><p>有効な CCL フィールドの組を定義するには、この関数の前に <code>yaz_ccl_conf()</code> をコールします。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $query <p>CCL FIND クエリ。</p>
 * @param array $result <p>関数が成功した場合、キー <i>rpn</i> に有効な RPN クエリを含む配列となります。</p> <p>失敗した場合は、以下の 3 つの添え字を含む配列となり、失敗の原因を示します。</p><ul> <li> <p><i>errorcode</i> - CCL エラーコード（整数）</p> </li> <li> <p><i>errorstring</i> - CCL エラー文字列</p> </li> <li> <p><i>errorpos</i> - クエリが失敗したおおよその位置 （文字の位置を整数で表す）</p> </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-ccl-parse.php
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_ccl_parse($id, string $query, array &$result): bool {}

/**
 * YAZ 接続をクローズする
 * <p><code>id</code> で指定した接続をクローズします。</p><p><b>注意</b>:</p><p>この関数は、<i>persistent</i> オプションを <b><code>FALSE</code></b> にして <code>yaz_connect()</code> でオープンした 持続的でない接続のみをクローズします。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-close.php
 * @see yaz_connect()
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_close($id): bool {}

/**
 * Z39.50 サーバーへの接続を準備する
 * <p>この関数は、成功した場合に接続リソース、失敗した場合にゼロを返します。</p><p><b>yaz_connect()</b> は Z39.50 サーバーへの接続を準備します。 この関数は非ブロックモードで動作し、接続を確立しようとしません - 単にあとで <code>yaz_wait()</code> がコールされた際に 接続を実行する準備を行うだけです。</p><p><b>注意</b>:</p><p>» YAZ プロキシ は、フリーで使用可能な Z39.50 のプロキシです。</p>
 * @param string $zurl <p><i>host[:port][/database]</i> という形式の文字列です。 port が省略された場合、210 が使用されます。database が省略された 場合、<i>Default</i> が使用されます。</p>
 * @param mixed $options <p>文字列が指定された場合、 Z39.50 V2 認証文字列(OpenAuth)として処理されます。</p> <p>配列が指定された場合、その配列の内容はオプションとして処理されます。</p>  user  <p>認証用のユーザー名</p>   group  <p>認証用のグループ</p>   password  <p>認証用のパスワード</p>   cookie  <p>セッションクッキー（YAZ プロキシ）</p>   proxy  <p>接続用プロキシ（YAZ プロキシ）</p>   persistent  <p>論理値。<b><code>TRUE</code></b> の場合、接続は持続的となります。<b><code>FALSE</code></b> の 場合、接続は持続的ではありません。デフォルトでは 接続は持続的です。</p>  <p><b>注意</b>:</p> <p>持続的な接続をオープンした場合、後でそれを <code>yaz_close()</code> によってクローズすることは できません。</p>    piggyback  <p>論理値。<b><code>TRUE</code></b> の場合、検索時の piggyback が有効になります。 <b><code>FALSE</code></b> の場合、piggyback が無効になります。デフォルトでは piggyback は有効です。</p> <p>piggyback を有効にするとより効率的となり、 通常、レコードを最初に取得する際のネットワーク往復時間を 節約することが可能です。しかし、少数の Z39.50 ターゲットは piggyback をサポートしていないか、エレメント集合名を無視します。 この場合、piggyback を無効とする必要があります。</p>   charset  <p>Z39.50 の言語および文字セットネゴシエーションに使用する 文字セットを指定する文字列。以下のような文字列を使用します。 <i>ISO-8859-1</i>、<i>UTF-8</i>、 <i>UTF-16</i> 。</p> <p>ほとんどの Z39.50 サーバーはこの機能をサポートしません（そのため、 無視されます）。ほとんどのサーバーは、クエリやメッセージに ISO-8859-1 エンコーディングを使用します。MARC21/USMARC レコードは この設定の影響を受けません。</p>   preferredMessageSize  <p>ターゲットから取得される全レコードの最大バイト数を指定する整数値。 詳細な情報は » Z39.50 standard を参照ください。</p>  <p><b>注意</b>:</p> <p>このオプションは PECL YAZ 1.0.5 以降でサポートされます。</p>    maximumRecordSize  <p>ターゲットから取得される単一のレコードの最大バイト数を指定する 整数値。この項目は、 » Z39.50 standard の Exceptional-record-size として参照されます。</p>  <p><b>注意</b>:</p> <p>このオプションは PECL YAZ 1.0.5 以降でサポートされます。</p>
 * @return mixed <p>成功した場合に接続リソース、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-connect.php
 * @see yaz_close()
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_connect(string $zurl, $options = NULL) {}

/**
 * セッション内のデータベースを指定する
 * <p>この関数は、検索、取得等で使用する１つまたは複数のデータベースを指定します。 <code>yaz_connect()</code> をコールする際に指定したデータベースを上書きします。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $databases <p>ひとつあるいは複数のデータベースを表す文字列。複数のデータベースは、可算記号 <i>+</i> で区切ります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-database.php
 * @since PHP 4 >= 4.0.6, PECL yaz >= 0.9.0
 */
function yaz_database($id, string $databases): bool {}

/**
 * 取得時の要素集合の名前を指定する
 * <p>この関数は、取得時の要素集合の名前を指定します。</p><p>この関数は、<code>yaz_search()</code> あるいは <code>yaz_present()</code> をコールする前に、 取得するレコードの要素集合の名前を指定するために使用します。</p><p><b>注意</b>:</p><p>この関数が動作していないように見える場合は、 <code>yaz_connect()</code> の <i>piggybacking</i> オプションについての説明を 参照ください。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $elementset <p>ほとんどのサーバーは、 <i>F</i>（完全版）および <i>B</i>（短縮版） をサポートします。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-element.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_element($id, string $elementset): bool {}

/**
 * エラー番号を返す
 * <p><code>id</code> で表される サーバーの（直近のリクエストについての）エラー番号を返します。</p><p><b>yaz_errno()</b> は、各ターゲットへのネットワーク接続が 確立された後(つまり、<code>yaz_wait()</code>の後)に コールされる必要があり、直近の操作(例えば検索)が成功したか 失敗したかを判定します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return int <p>エラーコードを返します。エラーコードは Z39.50 診断コード （通常は Bib-1 診断）あるいは PHP/YAZ が生成するクライアント側の エラーコード（たとえば "Connect failed"、"Init Rejected" など） のいずれかです。</p>
 * @link http://php.net/manual/ja/function.yaz-errno.php
 * @see yaz_error(), yaz_addinfo()
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_errno($id): int {}

/**
 * エラーの内容を返す
 * <p><b>yaz_error()</b> は、<code>yaz_errno()</code> で返された直近のエラー番号に対応する英語のメッセージを返します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return string <p><code>id</code> で表される(直近のリクエストの) サーバーに関するエラーメッセージを返します。 直近の操作が成功した場合には空の文字列が返されます。</p>
 * @link http://php.net/manual/ja/function.yaz-error.php
 * @see yaz_errno(), yaz_addinfo()
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_error($id): string {}

/**
 * 拡張サービスのリクエストを準備する
 * <p>この関数は、拡張サービスのリクエストを準備します。 拡張サービスとは、レコードの更新や蔵書の注文、データベースの管理などの Z39.50 のさまざまな機能のことです。</p><p><b>注意</b>:</p><p>Z39.50 サーバーの多くは、拡張サービスをサポートしていません。</p><p><b>yaz_es()</b> は、拡張サービスリクエストのパッケージを作成し、 それを操作キューに配置します。リクエストをサーバーに送信するには <code>yaz_wait()</code> を使用します。 <code>yaz_wait()</code> の処理が完了すると、拡張サービス操作の結果が <code>yaz_es_result()</code> で取得できるようになります。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $type <p>拡張サービスの形式を表す文字列。 <i>itemorder</i> (蔵書の注文)、 <i>create</i> (データベースの作成)、 <i>drop</i> (データベースの削除)、 <i>commit</i> (操作のコミット)、 <i>update</i> (レコードの更新)、 <i>xmlupdate</i> (XMLの更新) のいずれかです。 個々の形式については、以下の節で指定されます。</p>
 * @param array $args <p>拡張サービスのオプションに加えてパッケージ固有のオプションを指定する配列。 オプションの形式は、ZOOM C の C API で提供されているものと同じです。 ZOOM » Extended Services を参照ください。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-es.php
 * @see yaz_es_result()
 * @since PECL yaz >= 0.9.0
 */
function yaz_es($id, string $type, array $args): void {}

/**
 * 拡張サービスの結果を調査する
 * <p>この関数は、サーバーから返された直近の拡張サービスの結果を調査します。 拡張サービスは、<b>yaz_item_order()</b> あるいは <code>yaz_es()</code> で起動します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return array <p>要素 <i>targetReference</i> を持つ配列を返します。 この要素には (サーバー側で生成して返された) 拡張サービス操作への参照が格納されます。</p>
 * @link http://php.net/manual/ja/function.yaz-es-result.php
 * @see yaz_es()
 * @since PHP 4 >= 4.2.0, PECL yaz >= 0.9.0
 */
function yaz_es_result($id): array {}

/**
 * 接続に関するオプションの値を返す
 * <p><code>name</code> で指定したオプションの値を返します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $name <p>オプションの名前。</p>
 * @return string <p>指定したオプションの値を返します。オプションが設定されていない場合は 空文字列を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-get-option.php
 * @see yaz_set_option()
 * @since PECL yaz >= 0.9.0
 */
function yaz_get_option($id, string $name): string {}

/**
 * 直近の検索に関するヒット数を返す
 * <p><b>yaz_hits()</b> は、直近の検索に関するヒット数を返します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param array $searchresult <p>詳細な検索結果情報の配列。</p>
 * @return int <p>直近の検索に関するヒット数を返します。検索が行われていない場合は 0 を返します。</p><p>検索結果配列がもし指定されていた場合、そこには Z39.50 サーバーが返す情報が 含まれます。この情報の形式は、検索結果の応答の一部である SearchResult-1 フォーマットとなります。 SearchResult-1 フォーマットは、さまざまなクエリ(サブクエリ)のヒット数に 関する情報を取得するために使用可能です。 特に、クエリ内の個々の検索語句に関するヒット数を得ることが可能です。 最初のサブクエリについての情報が $array[0] に、2 番目のサブクエリについての 情報が $array[1] に、というような形式となります。</p> <b>検索結果の項目</b>     要素 説明     <i>id</i> サブクエリの ID2 (string)   <i>count</i> 結果のカウント / ヒット数 (integer)   <i>subquery.term</i> サブクエリの語句 (string)   <i>interpretation.term</i> 解釈されたサブクエリの語句 (string)   <i>recommendation.term</i> 推奨されるサブクエリの語句 (string)    <p><b>注意</b>:</p> <p>SearchResult 機能を使用するには、PECL YAZ 1.0.5 以降 および YAZ 2.1.9 以降が必要です。</p>  <p><b>注意</b>:</p> <p>SearchResult 機能をサポートしている Z39.50 実装は ほとんどありません。</p>
 * @link http://php.net/manual/ja/function.yaz-hits.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_hits($id, array &$searchresult = NULL): int {}

/**
 * ILL リクエストパッケージを関して Z39.50 Item Order を準備する
 * <p>この関数は、Transport ILL (Profile/1) への Z39.50 Item Order Extended Service 用のプロファイルを使用する Extended Services リクエストを準備します。 » このページ および » 仕様 を参照ください。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param array $args <p>送信する Item Order リクエストに関する情報を有するハッシュ配列とする必要があります。 このハッシュ配列のキーは、対応する ASN.1 タグのパス名です。たとえば、 Item-ID 以下に ISBN がある場合のキーは item-id,ISBN となります。</p> <p>ILL-Request パラメータは次のようになります。</p> <pre> protocol-version-num transaction-id,initial-requester-id,person-or-institution-symbol,person transaction-id,initial-requester-id,person-or-institution-symbol,institution transaction-id,initial-requester-id,name-of-person-or-institution,name-of-person transaction-id,initial-requester-id,name-of-person-or-institution,name-of-institution transaction-id,transaction-group-qualifier transaction-id,transaction-qualifier transaction-id,sub-transaction-qualifier service-date-time,this,date service-date-time,this,time service-date-time,original,date service-date-time,original,time requester-id,person-or-institution-symbol,person requester-id,person-or-institution-symbol,institution requester-id,name-of-person-or-institution,name-of-person requester-id,name-of-person-or-institution,name-of-institution responder-id,person-or-institution-symbol,person responder-id,person-or-institution-symbol,institution responder-id,name-of-person-or-institution,name-of-person responder-id,name-of-person-or-institution,name-of-institution transaction-type delivery-address,postal-address,name-of-person-or-institution,name-of-person delivery-address,postal-address,name-of-person-or-institution,name-of-institution delivery-address,postal-address,extended-postal-delivery-address delivery-address,postal-address,street-and-number delivery-address,postal-address,post-office-box delivery-address,postal-address,city delivery-address,postal-address,region delivery-address,postal-address,country delivery-address,postal-address,postal-code delivery-address,electronic-address,telecom-service-identifier delivery-address,electronic-address,telecom-service-addreess billing-address,postal-address,name-of-person-or-institution,name-of-person billing-address,postal-address,name-of-person-or-institution,name-of-institution billing-address,postal-address,extended-postal-delivery-address billing-address,postal-address,street-and-number billing-address,postal-address,post-office-box billing-address,postal-address,city billing-address,postal-address,region billing-address,postal-address,country billing-address,postal-address,postal-code billing-address,electronic-address,telecom-service-identifier billing-address,electronic-address,telecom-service-addreess ill-service-type requester-optional-messages,can-send-RECEIVED requester-optional-messages,can-send-RETURNED requester-optional-messages,requester-SHIPPED requester-optional-messages,requester-CHECKED-IN search-type,level-of-service search-type,need-before-date search-type,expiry-date search-type,expiry-flag place-on-hold client-id,client-name client-id,client-status client-id,client-identifier item-id,item-type item-id,call-number item-id,author item-id,title item-id,sub-title item-id,sponsoring-body item-id,place-of-publication item-id,publisher item-id,series-title-number item-id,volume-issue item-id,edition item-id,publication-date item-id,publication-date-of-component item-id,author-of-article item-id,title-of-article item-id,pagination item-id,ISBN item-id,ISSN item-id,additional-no-letters item-id,verification-reference-source copyright-complicance retry-flag forward-flag requester-note forward-note </pre> <p>Extended Services Request パッケージおよび ItemOrder パッケージにも 次のようないくつかのパラメータがあります。</p> <pre> package-name user-id contact-name contact-phone contact-email itemorder-item </pre>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-itemorder.php
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_itemorder($id, array $args): void {}

/**
 * (Z39.50による)取得の準備を行う
 * <p>この関数は、検索に成功した後でレコードを取得するための準備を行います。</p><p>この関数をコールする前に、取得するレコードの範囲を指定するために まず <code>yaz_range()</code> をコールしておく必要があります。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-present.php
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_present($id): bool {}

/**
 * 取得するレコードの範囲を指定する
 * <p>取得するレコードの範囲を指定します。</p><p>この関数は、<code>yaz_search()</code> あるいは <code>yaz_present()</code> の前にコールしなければなりません。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param int $start <p>取得する最初のレコードの位置を指定します。レコード番号は 1 から <code>yaz_hits()</code> までです。</p>
 * @param int $number <p>取得するレコードの数を指定します。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-range.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_range($id, int $start, int $number): void {}

/**
 * レコードを返す
 * <p><b>yaz_record()</b> 関数は、現在の結果セットの <code>pos</code> で指定した位置にあるレコードを調べます。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param int $pos <p>レコードの位置。結果セット内の位置は 1, 2, ... $hits で表されます。 ここで、$hits は <code>yaz_hits()</code> が返す値です。</p>
 * @param string $type <p><code>type</code> は、返されるレコードの型を指定します。</p>  <p><b>注意</b>:</p> <p>Z39.50/SRW サーバーから適切な形式でレコードが返されたことを 確認するのは、アプリケーション側の役目です。このパラメータは 単にクライアント側（PHP/YAZ 内）での型変換についてのみ設定します。</p>  <p>レコードを文字列/配列に変換することに加え、PHP/YAZ はレコードの 文字セットを変換することも可能です。 特に USMARC/MARC21 の場合に文字セット変換が推奨されます。なぜなら これらは一般的に結果を MARC-8 文字セットで返しますが、ブラウザでは この文字セットがサポートされていないからです。変換を指定するには、 <i>; charset=</i>from<i>, </i>to を追加します。 from はレコードの元の文字セットで、 to は結果の文字セット（PHP によって 表示されるもの）です。</p>   <i>string</i>   <p>レコードは、単純な形式の文字列で返されます。 このモードではすべての MARC レコードが ISO2709 の行単位 フォーマットに変換されますが、これは非常に読みにくいものです。 XML レコードおよび SUTRS は、本来のフォーマットのまま返されます。 GRS-1 は（醜い）行単位フォーマットで返されます。</p> <p>このフォーマットが役に立つのは、結果を手っ取り早く表示したい場合 - デバッグ中など - の場合です。適切な形式で表示するのには適していません。</p>   <i>xml</i>   <p>レコードは、可能ならば XML 文字列として返されます。 このモードでは、すべての MARC レコードは » MARCXML に変換されます。 XML レコードおよび SUTRS は、本来のフォーマットのままで返されます。 GRS-1 はサポートしていません。</p> <p>このフォーマットは <code>string</code> と似ていますが、 MARC レコードが MARCXML に変換される点が違います。</p> <p>このフォーマットは、レコードが XML パーサや XSLT プロセッサに 渡される場合に役立ちます。</p>   <i>raw</i>   <p>レコードは、その本来のフォーマットのままで返されます。 MARC、XML および SUTRS で使用可能です。GRS-1 では動作しません。</p> <p>MARC レコードは ISO2709 文字列として返されます。XML および SUTRS は文字列として返されます。</p>   <i>syntax</i>   <p>レコードの構文が文字列で返されます。たとえば <i>USmarc</i>、<i>GRS-1</i>、 <i>XML</i> などです。</p>   <i>database</i>   <p>レコードの該当位置に関連するデータベースの名前を文字列で返します。</p>   <i>array</i>   <p>レコードは、GRS-1 の構造を反映した配列で返されます。 この型は MARC および GRS-1 で使用可能です。XML、SUTRS はサポートされておらず、実際のレコードが XML あるいは SUTRS であった場合は空文字列が返されます。</p> <p>返される配列には、GRS-1 の各リーフ/内部ノードに対応するリストが 含まれます。個々のリスト内にもリストがあり、 最初の要素が <i>path</i> でその次が <i>data</i> です（もし data が存在する場合）。</p> <p>path は、ルートから各リーフまでの（構造化された GRS-1 レコードの） ツリーコンポーネントの一覧を保持します。各コンポーネントはタグ型で、 タグの値は <i>(</i>type<i>,</i> value のような形式のペアとなります。</p> <p>tags 文字列は、一般に type 3 の tag に対応します。 MARC は配列で返すことも可能です（内部で GRS-1 に変換されます）。</p>
 * @return string <p>位置 <code>pos</code> のレコードを返します。もし指定した位置に レコードが存在しない場合は空文字列を返します。</p><p>もし指定した位置にデータベースのレコードが存在しない場合、 空文字列が返されます。</p>
 * @link http://php.net/manual/ja/function.yaz-record.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_record($id, int $pos, string $type): string {}

/**
 * スキャンの準備をする
 * <p>この関数は、指定した接続上で Z39.50 スキャンリクエストの 準備をします。</p><p>実際にスキャンリクエストをサーバーへ送信して応答を受信するには、 <code>yaz_wait()</code> をコールする必要があります。 <code>yaz_wait()</code> のコールが完了した後、応答を処理するために <code>yaz_error()</code> および <code>yaz_scan_result()</code> をコールします。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $type <p>現時点では <i>rpn</i> 型のみがサポートされています。</p>
 * @param string $startterm <p>スキャンを開始する項目の位置。</p> <p>開始項目の形式は、パラメータ <code>type</code> で与えられます。</p> <p>このパラメータの構文は、 <code>yaz_search()</code> で説明した RPN クエリに似ています。 startterm は、ゼロ以上の <i>@attr</i> 演算子の後に トークンがひとつだけ続く形式となります。</p>
 * @param array $flags <p>オプションのパラメータで、スキャンリクエストの動作を制御する 追加情報を指定します。現在、次の3つの添字が flags 配列から 読み込まれます。 <i>number</i>（リクエストされた語の数）、 <i>position</i>（要求された語の位置）、 <i>stepSize</i>（要求されたステップ数）</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-scan.php
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_scan($id, string $type, string $startterm, array $flags = NULL): void {}

/**
 * スキャンリクエストの結果を返す
 * <p><b>yaz_scan_result()</b> は、直近の <code>yaz_scan()</code> の実行時にサーバーから受信した 項目と関連情報を返します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param array $result <p>指定された場合、この配列にスキャン時の応答から得られた追加情報が 代入されます。</p><ul> <li> <p><i>number</i> - 返されたエントリの数。</p> </li> <li> <p><i>stepsize</i> - ステップサイズ。</p> </li> <li> <p><i>position</i> - 項目の位置。</p> </li> <li> <p><i>status</i> - スキャンステータス。</p> </li> </ul>
 * @return array <p>配列 (0..n-1) を返します。n は返された項目の数です。個々の値は ペアになっており、最初の値が項目名、2 つめの値が結果の数となります。</p>
 * @link http://php.net/manual/ja/function.yaz-scan-result.php
 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
 */
function yaz_scan_result($id, array &$result = NULL): array {}

/**
 * 取得するスキーマを指定する
 * <p><b>yaz_schema()</b> は取得するスキーマを指定します。</p><p>この関数は、 <code>yaz_search()</code> あるいは <code>yaz_present()</code> より前にコールしなければなりません。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $schema <p>ドット記法の（<i>1.2.840.10003.13.4</i> のような） OID あるいは登録されているスキーマのひとつ、たとえば <i>GILS-schema</i>、<i>Holdings</i>、 <i>Zthes</i> などのいずれかで指定する必要があります。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-schema.php
 * @since PHP 4 >= 4.2.0, PECL yaz >= 0.9.0
 */
function yaz_schema($id, string $schema): void {}

/**
 * 検索を準備する
 * <p><b>yaz_search()</b> は、指定した接続で検索を行う準備をします。</p><p><code>yaz_connect()</code> と同様にこの関数は非ブロックモードで 動作し、後で <code>yaz_wait()</code> がコールされたときのために 検索の準備をするだけです。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $type <p>クエリの型を表します。現在は <i>"rpn"</i> のみがサポート されており、この場合 3 番目の引数には Type-1 クエリを前置表記で 指定します。</p>
 * @param string $query <p>RPN クエリは、Z39.50 規格により定義された Type-1 クエリのテキスト 表現です。しかし、YAZ により使用されるテキスト表現では、演算子が オペランドの前にある前置表記が使用されます。クエリ文字列はトークンの 並びであり、このトークンでは 2 重引用符で括られない限り空白文字は 無視されます。アットマーク(<i>@</i>)で始まるトークンは 演算子とみなされ、そうでない場合は検索項目として処理されます。</p>  <b>RPN 演算子</b>     構文 説明      <i>@and</i> query1 query2  query1 および query2 の積集合     <i>@or</i> query1 query2  query1 および query2 の和集合     <i>@not</i> query1 query2  query1 であり、query2 でない     <i>@set</i> name  結果セットへのリファレンス     <i>@attrset</i> set query  クエリの属性セットを指定します。この構造が使用できるのは 全てのクエリの始めに一回だけです。     <i>@attr</i> [set] type=value query  クエリに属性を適用します。型と値は属性型と属性値をそれぞれ指定する 整数です。この組みが指定された場合、属性の組を指定します。     <p>属性についての情報は » Z39.50 Maintenance Agency サイトにあります。</p>  <p><b>注意</b>:</p> <p>もう少しわかりやすい記法を利用したい場合は、CCL パーサ関数 - <code>yaz_ccl_conf()</code> および <code>yaz_ccl_parse()</code> を使用してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-search.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_search($id, string $type, string $query): bool {}

/**
 * 接続に関するひとつあるいは複数のオプションを設定する
 * <p>指定した接続について、ひとつあるいは複数のオプションを設定します。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $name <p>文字列あるいは配列です。</p> <p>文字列を指定すると、指定するオプションの名前として扱われます。 その <code>value</code> を指定する必要があります。</p> <p>配列を指定すると、連想配列（オプション名 -&gt; オプションの値）として 扱われます。</p>  <b>PHP/YAZ 接続オプション</b>     名前 説明     implementationName サーバーの実装名。   implementationVersion サーバーの実装バージョン。   implementationId サーバーの実装 ID 。   schema  取得するスキーマ。デフォルトではスキーマを使用しません。 このオプションを設定することは、<code>yaz_schema()</code> を使用することと等価です。    preferredRecordSyntax  取得するレコードの構文。 デフォルトでは構文を 使用しません。このオプションを設定することは、 <code>yaz_syntax()</code> を使用することと等価です。    start  <code>yaz_search()</code> あるいは <code>yaz_present()</code> で取得する最初のレコードのオフセット。最初のレコードの 番号は 0 で、2 番目のレコードは 1 です。 このオプションを <i>count</i> とともに設定する ことは、<code>yaz_range()</code> をコールすることと 同じですが、<code>yaz_range()</code> ではレコードの 番号が 1 から始まる点が違います。    count  <code>yaz_search()</code> あるいは <code>yaz_present()</code> で取得するレコードの最大数。    elementSetName  取得するエレメントセットの名前。このオプションを設定することは、 <code>yaz_element()</code> を使用することと等価です。
 * @param string $value <p>オプションの新しい値。変更前の値が文字列である場合にのみ これを使用します。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-set-option.php
 * @since PECL yaz >= 0.9.0
 */
function yaz_set_option($id, string $name, string $value): void {}

/**
 * ソート条件を設定する
 * <p>この関数は、ソート条件を設定して Z39.50 Sort を有効にします。</p><p>この関数は、<code>yaz_search()</code> の<i>前に</i> コールします。この関数を単独で使用しても何も意味はありません。 <code>yaz_search()</code> と組み合わせて使用した場合、 検索応答が受信されてから全ての Z39.50 Present で取得される前に Z39.50 Sort が送信されます。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $criteria <p>field1 flags1 field2 flags2 のような 形式の文字列。field1 は最初にソートする属性を、そして field2 は 2 番目の属性を… のように指定します。</p> <p>フィールドは、カンマで区切られた 型 = 値 の組からなる数値属性の 組み合わせ（例 <i>1=4,2=1</i>）、または 文字列の方法を指定することも可能です（例 <i>title</i>）。 フラグは次の文字の並びからなり、空白により区切ることはありません。</p> <p></p> <b>ソートフラグ</b>  <i>a</i>   <p>昇順ソート</p>   <i>d</i>   <p>降順ソート</p>   <i>i</i>   <p>大文字小文字を区別しないソート</p>   <i>s</i>   <p>大文字小文字を区別するソート</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-sort.php
 * @since PHP 4 >= 4.0.7, PECL yaz >= 0.9.0
 */
function yaz_sort($id, string $criteria): void {}

/**
 * 取得用に適当なレコード構文を指定する
 * <p><b>yaz_syntax()</b> は、取得するレコードの構文を指定します。</p><p>この関数は <code>yaz_search()</code> あるいは <code>yaz_present()</code> より前にコールしなければなりません。</p>
 * @param resource $id <p><code>yaz_connect()</code> が返す接続リソース。</p>
 * @param string $syntax <p>ドット記法の（<i>1.2.840.10003.5.10</i> のような） OID あるいは登録されている構文のひとつ（たとえば sutrs、 usmarc、grs1、xml など）のいずれかで指定する必要があります。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yaz-syntax.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_syntax($id, string $syntax): void {}

/**
 * Z39.50 リクエストが完了するまで待つ
 * <p>この関数は、関数 <code>yaz_connect()</code>、 <code>yaz_search()</code>、<code>yaz_present()</code>、 <code>yaz_scan()</code>、<code>yaz_itemorder()</code> により準備された発行済のリクエストを、ネットワーク経由で（ブロック モードで）伝送します。</p><p><b>yaz_wait()</b>は、全てのターゲットが全てのリクエストを 完了したか、（エラーの場合には）中断された場合に処理を戻します。</p>
 * @param array $options <p>オプションの連想配列。</p>  <i>timeout</i>   <p>タイムアウトの秒数を設定します。ターゲットが時間内に応答しなかった 場合は動作していないとみなされ、<b>yaz_wait()</b> は終了します。タイムアウトのデフォルト値は 15 秒です。</p>   <i>event</i>   <p>論理型の値。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 イベントモードでは、成功した場合にリソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yaz-wait.php
 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
 */
function yaz_wait(array &$options = NULL) {}

