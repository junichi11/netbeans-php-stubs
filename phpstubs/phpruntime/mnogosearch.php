<?php



/**
 * 種々の検索の制約を設定する
 * <p><b>udm_add_search_limit()</b> は、検索の制約を追加します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> から返された、エージェントへのリンク。</p>
 * @param int $var <p>パラメータを定義し、制限を示します。 <code>var</code> には以下の値が設定できます。</p><ul> <li>  <b><code>UDM_LIMIT_URL</code></b> - データベースのサブセクションにおける検索を制限するためにドキュメント URL に制限を課します。この機能は、SQL の % および _ LIKE ワイルドカードをサポートします。ただし、% は (ゼロを含む) 任意の数の文字の並びで、 _ は 1 文字だけにマッチします。 例えば、http://www.example.__/catalog は http://www.example.com/catalog および http://www.example.net/catalog を表すことが可能です。  </li> <li>  <b><code>UDM_LIMIT_TAG</code></b> - サイト TAG 制約を定義します。indexer-conf において特定の TAG を様々なサイトやあるサイトの一部に割り付けることが可能です。 mnoGoSearch 3.1.x のタグは複数行とすることが可能で、メタ記号 % および _ を含むことが可能です。メタ記号は、 タグ集合により中からの検索が可能となります。 例えば、ABCDおよびABCEを有するリンクがあり、 検索の制約がABC_であるとすると、この検索は両方のタグについて行われます。  </li> <li>  <b><code>UDM_LIMIT_LANG</code></b> - ドキュメントの言語に関する制限を定義します。  </li> <li>  <b><code>UDM_LIMIT_CAT</code></b> - ドキュメントのカテゴリに関する制限を定義します。 カテゴリはタグ機能に似ていますが、ネストすることが可能です。 このため、あるカテゴリの中に他のカテゴリを有するといったことが可能です。 各レベルについて 2 つの文字を使用する必要があります。0-F の 16 進数または 0-Z の 36 進数を使用してください。この場合、'Auto' のような最上位のカテゴリは 01 になります。このカテゴリが 'Ford' のようなサブカテゴリを有している場合、トップカテゴリが 01(親カテゴリ)、 'Ford' が 01 となります。この結果をまとめると 0101 となります。' Auto' が 'VW' という名前の他のサブカテゴリを有している場合、 'Ford' カテゴリに属しているためにその ID は 01 になるかもしれませんが、 通常は次のカテゴリであるために 02 になります。このため、その ID は 0102 となるでしょう。VW が 'Engine' という名前のサブカテゴリを 有している場合には、その ID は再び 01 になり、'VW' が ID02 を有しており、'Auto' の ID が 01 であるので、まとめると、010201 となります。このカテゴリに関してサイトの検索を行う場合には、URL に cat=010201 を指定します。  </li> <li> <p><b><code>UDM_LIMIT_DATE</code></b> - ドキュメントの更新時刻についての制限を定義します。</p> <p>パラメータの書式は、最初に &lt; あるいは &gt; があり、その後に空白を置かずに unixtime 形式の日付を続けます。例えば以下のようになります。</p> <p></p>   <code> &lt;&#63;php<br>udm_add_search_limit($udm, UDM_LIMIT_DATE, "&amp;lt;908012006");<br>&#63;&gt;  </code>   <p>&gt; 文字が使用された場合、更新時刻がその日付以降のドキュメントのみが検索対象となります。 &lt; の場合はそれ以前となります。</p> </li> </ul>
 * @param string $val <p>現在のパラメータの値を定義します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-add-search-limit.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_add_search_limit($agent, int $var, string $val): bool {}

/**
 * mnoGoSearch セッションを確保する
 * <p>mnoGoSearch セッションを割り当てます。</p>
 * @param string $dbaddr <p><code>dbaddr</code> - URL 形式のデータベース名。SQL データベースへ接続する際のオプション (型、ホスト、データベース名、 ポート、ユーザー、パスワード)。 組み込みのテキストファイルサポートには関係ありません。 フォーマットは以下のようになります。 <i>DBType:[//[DBUser[:DBPass]@]DBHost[:DBPort]]/DBName/</i> 現在、サポートされている DBType の値は mysql, pgsql, msql, solid, mssql, oracle, ibase です。 実際、ネーティブなライブラリのサポートは重要ではありません。しかし、 ODBC ユーザーは、サポートされる値の一つを指定する必要があります。 使用するデータベース型がサポートされていない場合、<i>unknown</i> を代わりに使用することも可能です。</p>
 * @param string $dbmode <p><code>dbmode</code> - 単語の記憶用 SQL データベース モードを選択可能です。<code>dbmode</code> でとりうる値は <i>single</i>、<i>multi</i>、<i>crc</i> あるいは <i>crc-multi</i> です。 <i>single</i> を指定した場合、全ての単語が同じ テーブルに保存されます。<i>multi</i> を選択した場合、 単語はその長さに応じて別々のテーブルに保存されます。通常は "multi" モードの方が通常高速ですが、データベース上でより多くのテーブルを 必要とします。"crc" モードが選択された場合、mnoGoSearch は、単語の 代わりに CRC32 アルゴリズムで計算された 32 ビット整数の単語 ID を 保存します。このモードで必要なディスク容量はより小さいですが、 "single" および "multi" モードと比較してより高速です。 <i>crc-multi</i> は、"crc" モードと同じ記憶構造を 使用しますが、"multi" モードのように単語長に応じて別々のデータベースに 単語を保存します。</p>
 * @return resource <p>成功した場合に mnogosearch エージェント ID、失敗した場合に <b><code>FALSE</code></b> を返します。この関数は、データベースパラメータを有するセッションを 生成します。</p>
 * @link http://php.net/manual/ja/function.udm-alloc-agent.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_alloc_agent(string $dbaddr, string $dbmode = NULL) {}

/**
 * mnoGoSearch セッションを割り当てる
 * <p><b>udm_alloc_agent_array()</b> は、 複数データベース接続にエージェントを作成します。</p>
 * @param array $databases <p><code>databases</code> の各要素にはデータベースの URL を指定します。 これは <code>udm_alloc_agent()</code> の最初のパラメータと同じ形式です。</p>
 * @return resource <p>成功した場合にリソースリンク ID、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-alloc-agent-array.php
 * @see udm_alloc_agent()
 * @since PHP 4 >= 4.3.3, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_alloc_agent_array(array $databases) {}

/**
 * mnoGoSearch API バージョンを取得する
 * <p>mnoGoSearch API バージョン番号を取得します。</p><p>この関数により、利用可能なAPI関数をユーザーが調べることが可能となります。 例えば、<code>udm_get_doc_count()</code> 関数は mnoGoSearch 3.1.11 以降でのみ利用可能です。</p>
 * @return int <p><b>udm_api_version()</b> は、mnoGoSearch API バージョン番号を返します。 例えば、mnoGoSearch 3.1.10 APIを使用している場合、 この関数は、<i>30110</i> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-api-version.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_api_version(): int {}

/**
 * 現在のカテゴリと同じレベルのカテゴリを全て取得する
 * <p>現在のカテゴリと同じレベルの全てのカテゴリの一覧を配列として返します。</p><p>この関数は、カテゴリツリーのブラウザを開発する際に有用です。</p>
 * @param resource $agent <p>事前の <b>&gt;udm_alloc_agent()</b> のコールにより返されたエージェント ID。</p>
 * @param string $category
 * @return array <p>カテゴリツリーにおける現在の <code>category</code> と同レベルのカテゴリの一覧を配列で返します。</p><p>返される配列は、組で構成されています。偶数添字番号の要素にはカテゴリパス、 奇数要素には、対応するカテゴリ名が含まれます。</p>  <pre>$array[0] will contain '020300' $array[1] will contain 'Audi' $array[2] will contain '020301' $array[3] will contain 'BMW' $array[4] will contain '020302' $array[5] will contain 'Opel' ... etc.</pre>
 * @link http://php.net/manual/ja/function.udm-cat-list.php
 * @see udm_cat_path()
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_cat_list($agent, string $category): array {}

/**
 * 現在のカテゴリへのパスを取得する
 * <p>ツリーのルートから <code>category</code> が指す現在のカテゴリまでのパスを記述した配列を返します。</p>
 * @param resource $agent <p>事前の <b>&gt;udm_alloc_agent()</b> のコールにより返されたエージェントへのリンク。</p>
 * @param string $category
 * @return array <p>返される配列は、組で構成されています。偶数添字番号の要素にはカテゴリパス、 奇数要素には、対応するカテゴリ名が含まれます。</p><p>たとえば、<i>$array=udm_cat_path($agent, '02031D');</i> をコールすると以下のような配列を返します。</p> <pre> $array[0] will contain '' $array[1] will contain 'Root' $array[2] will contain '02' $array[3] will contain 'Sport' $array[4] will contain '0203' $array[5] will contain 'Auto' $array[4] will contain '02031D' $array[5] will contain 'Ferrari' </pre>
 * @link http://php.net/manual/ja/function.udm-cat-path.php
 * @see udm_cat_list()
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_cat_path($agent, string $category): array {}

/**
 * 指定した charset が mnogosearch で認識されるかどうか調べる
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $agent
 * @param string $charset
 * @return bool
 * @link http://php.net/manual/ja/function.udm-check-charset.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_check_charset($agent, string $charset): bool {}

/**
 * mnoGoSearch 検索に関する全ての制約をクリアする
 * <p><b>udm_clear_search_limits()</b> は、 検索に関する制約をリセットします。</p>
 * @param resource $agent <p>事前の <b>&gt;udm_alloc_agent()</b> のコールにより返されたエージェントへのリンク。</p>
 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
 * @link http://php.net/manual/ja/function.udm-clear-search-limits.php
 * @see udm_add_search_limit()
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_clear_search_limits($agent): bool {}

/**
 * 指定した文字列の CRC32 チェックサムを計算する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $agent
 * @param string $str
 * @return int
 * @link http://php.net/manual/ja/function.udm-crc32.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_crc32($agent, string $str): int {}

/**
 * mnoGoSearch エラー番号を取得する
 * <p>数字のエージェントエラーコードを受信します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> へのコールから返されるエージェント ID へのリンク。</p>
 * @return int <p>mnoGoSearch エラー番号を返します。 エラーがない場合にゼロを返します。</p>
 * @link http://php.net/manual/ja/function.udm-errno.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_errno($agent): int {}

/**
 * mnoGoSearch エラーメッセージを得る
 * <p>エージェントエラーメッセージを取得します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> をコールした際に得られたエージェント ID へのリンク。</p>
 * @return string <p><b>udm_error()</b> は mnoGoSearch エラーメッセージを返します。 エラーがない場合には、空の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.udm-error.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_error($agent): string {}

/**
 * 検索を実行する
 * <p>検索を行います。</p><p>検索を行います。最初の引数はセッション、次の引数はクエリ本体です。 検索の実行は、探す単語を入力し、投稿ボタンを押すだけで可能です。 例えば、"mysql odbc"。この例で引用符は他のテキストから区別するために 使用されており、クエリに引用符 " を使用する必要はありません。 mnoGoSearch は、単語 "mysql" および/または単語 "odbc" を含む全ての 文書を見付けます。最も大きな重みを有する文書が最初に表示されます。 検索モードに ALL を使用している場合、検索は入力した単語(とその他の 単語)を共に含む文書を返します。モードANYを使用している場合、検索は、 入力した単語のどれかを含む文書のリストを返します。より高度な結果を 得たい場合には、クエリ言語を使用することも可能です。この場合は、 検索フォームで検索モード "bool" を選択する必要があります。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> をコールした際に得られたエージェント ID へのリンク。</p>
 * @param string $query <p>mnoGoSearch では次の論理演算子が使用可能です。</p> <p>&amp; - 論理積。例えば、"mysql &amp; odbc"。 mnoGoSearch は、単語 "mysql" および単語 "odbc" を含む全ての URL を見付けます。</p> <p>| - 論理和。例えば、"mysql|odbc"。 mnoGoSearch は、単語 "mysql" または単語 "odbc"を含む全ての URL を見付けます。</p> <p>~ - 論理否定。例えば、"mysql &amp; ~odbc"。 mnoGoSearch は、単語 "mysql" を含み、同時に単語 "odbc" を含まない全てのURLを探します。~ は、指定した単語を 結果から除外するだけであることに注意してください。クエリ "~odbc" は何も見付けません!</p> <p>() - より複雑なクエリを作成するためのグループ化コマンド。例えば、 "(mysql | msql) &amp; ~postgres"。クエリ言語は、簡単であり、 同時に強力です。クエリは通常の論理式と同等と考えてください。</p>
 * @return resource <p>成功した場合に結果リンク ID、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-find.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_find($agent, string $query) {}

/**
 * mnoGoSearch セッションを開放する
 * <p>エージェントセッション用に確保されたメモリを開放します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> から返されたエージェント ID へのリンク。</p>
 * @return int <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-free-agent.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_free_agent($agent): int {}

/**
 * ispell データ用に確保されたメモリを解放する
 * <p>ispell データ用に確保されたメモリを解放します。</p>
 * @param int $agent <p><code>udm_alloc_agent()</code> により得られるエージェントリンク ID。</p>
 * @return bool <p><b>udm_free_ispell_data()</b> は、常に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-free-ispell-data.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_free_ispell_data(int $agent): bool {}

/**
 * mnoGoSearch 結果を開放する
 * <p>結果用に確保されたメモリを開放します。</p>
 * @param resource $res <p><code>udm_find()</code> から返された結果 ID へのリンク。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-free-res.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_free_res($res): bool {}

/**
 * データベース内のドキュメントの総数を得る
 * <p><b>udm_get_doc_count()</b> は、データベース内の ドキュメントの数を返します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> のコールにより取得した、エージェント ID へのリンク。</p>
 * @return int <p>ドキュメントの数を返します。</p>
 * @link http://php.net/manual/ja/function.udm-get-doc-count.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_get_doc_count($agent): int {}

/**
 * mnoGoSearch 結果フィールドを取得する
 * <p>Fetch a mnoGoSearch result field.</p>
 * @param resource $res <p><code>res</code> - <code>udm_find()</code> から返された結果 ID へのリンク。</p>
 * @param int $row <p><code>row</code> - カレントページのリンク番号。0 から <code>UDM_PARAM_NUM_ROWS-1</code> までの番号。</p>
 * @param int $field <p><code>field</code> - フィールド ID。次の値のどれか。</p><ul> <li>  <b><code>UDM_FIELD_URL</code></b> - ドキュメント URL フィールド。  </li> <li>  <b><code>UDM_FIELD_CONTENT</code></b> - ドキュメント <i>Content-type</i> フィールド (例えば、 <i>text/html</i>)。  </li> <li>  <b><code>UDM_FIELD_CATEGORY</code></b> - ドキュメントの category フィールド。 カテゴリツリーのルートから現在のカテゴリまでの完全なパスを 取得するには <code>udm_cat_path()</code> を使用します (このパラメータは、PHP 4.0.6 以降でのみ使用可能です)。  </li> <li>  <b><code>UDM_FIELD_TITLE</code></b> - ドキュメントの title フィールド。  </li> <li>  <b><code>UDM_FIELD_KEYWORDS</code></b> - ドキュメント keywords フィールド(META KEYWORDS タグから)。  </li> <li>  <b><code>UDM_FIELD_DESC</code></b> - ドキュメント description フィールド (META DESCRIPTION タグから)。  </li> <li>  <b><code>UDM_FIELD_TEXT</code></b> - ドキュメント body テキスト (最初の数行で ドキュメントの内容に関するアイデアを示す)。  </li> <li>  <b><code>UDM_FIELD_SIZE</code></b> - ドキュメントのサイズ。  </li> <li>  <b><code>UDM_FIELD_URLID</code></b> - リンクへのユニークな URL ID。  </li> <li>  <b><code>UDM_FIELD_RATING</code></b> - (mnoGoSearch で計算された)ページのレーティング。  </li> <li>  <b><code>UDM_FIELD_MODIFIED</code></b> - unixtime 形式の last-modified フィールド。  </li> <li>  <b><code>UDM_FIELD_ORDER</code></b> - 見つかったドキュメントの中の現在のドキュメントの数。  </li> <li>  <b><code>UDM_FIELD_CRC</code></b> - ドキュメント CRC。  </li> </ul>
 * @return string <p><b>udm_get_res_field()</b> は、成功時に結果フィールド、 エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-get-res-field.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_get_res_field($res, int $row, int $field): string {}

/**
 * mnoGoSearch 結果パラメータを取得する
 * <p>mnoGoSearch 結果パラメータを取得します。</p>
 * @param resource $res <p><code>res</code> - <code>udm_find()</code> から返された結果 ID へのリンク。</p>
 * @param int $param <p><code>param</code> - パラメータ ID であり、次の値のどれかとなります。</p><ul> <li>  UDM_PARAM_NUM_ROWS - カレントのページで見付かったリンクの数。 全ての検索ページでの最後のページでの UDM_PARAM_PAGE_SIZE、残りの リンクに等しい。  </li> <li>  UDM_PARAM_FOUND - クエリにマッチする結果の合計の数。  </li> <li>  UDM_PARAM_WORDINFO - 見付かった単語に関する情報。例えば、"a good book" に関するクエリは "a: stopword, good:5637, book: 120" を返します。  </li> <li>  UDM_PARAM_SEARCHTIME - 秒単位の検索時間。  </li> <li>  UDM_PARAM_FIRST_DOC - カレントのページに表示される最初の ドキュメントの数。  </li> <li>  UDM_PARAM_LAST_DOC - カレントのページに表示される最後の ドキュメントの数。  </li> </ul>
 * @return string <p><b>udm_get_res_param()</b> は成功時に結果パラメータを返します。 エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-get-res-param.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_get_res_param($res, int $param): string {}

/**
 * 指定した文字列の Hash32 チェックサムを返す
 * <p><b>udm_hash32()</b> は、文字列 <code>str</code> を受け取り、その 32 ビットハッシュ値を返します。</p>
 * @param resource $agent <p>事前の <b>&gt;udm_alloc_agent()</b> のコールにより返されたエージェントへのリンク。</p>
 * @param string $str <p>入力文字列。</p>
 * @return int <p>32 ビットのハッシュ値を返します。</p>
 * @link http://php.net/manual/ja/function.udm-hash32.php
 * @see udm_alloc_agent()
 * @since PHP 4 >= 4.3.3, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_hash32($agent, string $str): int {}

/**
 * ispell データを読み込む
 * <p><b>udm_load_ispell_data()</b> は、 ispell データを読み込みます。</p><p>この関数を使用した後に ispell データに割り当てられていたメモリを 開放するには、<code>udm_free_ispell_data()</code> を使用します。 たとえ <b><code>UDM_ISPELL_TYPE_SERVER</code></b> モードを使用していたとしても同様です。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> のコールにより取得した、 エージェントのリンク ID。</p>
 * @param int $var <p>ispell データの取得元を示すパラメータ。とりうる値は以下のとおりです。</p><ul> <li>  UDM_ISPELL_TYPE_DB - ispell データを SQL によって読み込むことを 示します。この場合、パラメータ <code>val1</code> および <code>val2</code> は無視されるので空白にしておきます。 <code>flag</code> は <i>1</i> に設定します。   <p><b>注意</b>:</p> <p><code>flag</code> は、指定した場所から ispell データを 読み込んだ後でそれを並べ替えることを示します (ispell を正常に 機能させるために必要です)。ispell データをファイルから読み込む 場合は <b>udm_load_ispell_data()</b> を何度かコールする ことになりますが、並べ替えを毎回行う必要はなく、最後にコールした 後にのみ行います。DB モードではすべてのデータが 1 度のコールで 読み込まれるので、このパラメータは <i>1</i> で なければなりません。このモードでエラーが発生した場合 (たとえば ispell テーブルが存在しないなど)、この関数は <b><code>FALSE</code></b> を返し、 エラーコードとエラーメッセージは <code>udm_error()</code> および <code>udm_errno()</code> で取得できます。</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_AFFIX</code></b> - ispell データをファイルから読み込み、また 接辞ファイルを読み込むことを指定します。この場合、<code>val1</code> はどの接辞を読み込むかを表す 2 文字の言語コードとなります。 また <code>val2</code> はファイルのパスです。 相対パスが指定された場合は、このモジュールは <b><code>UDM_CONF_DIR</code></b> でなく 現在のパス、つまりスクリプトの実行パスからの相対パスとして検索する ことに注意しましょう。ファイルが存在しないなどの理由でエラーが 発生した場合、この関数は <b><code>FALSE</code></b> を返し、エラーメッセージが 表示されます。エラーメッセージの内容を <code>udm_error()</code> および <code>udm_errno()</code> で取得することはできません。なぜなら、これらの関数は SQL に 関連付けられたメッセージを返すものだからです。<b><code>UDM_ISPELL_TYPE_DB</code></b> における <code>flag</code> パラメータの説明を参照ください。</p> <p></p>  <p><b>例1 <b>udm_load_ispell_data()</b> の例</b></p>  <code> &lt;&#63;php<br>if ((! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_AFFIX, 'en', '/opt/ispell/en.aff', 0)) ||<br>    (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_AFFIX, 'ru', '/opt/ispell/ru.aff', 0)) ||<br>    (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_SPELL, 'en', '/opt/ispell/en.dict', 0)) ||<br>    (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_SPELL, 'ru', '/opt/ispell/ru.dict', 1))) {<br>    exit;<br>}<br>&#63;&gt;  </code>    <p><b>注意</b>:</p> <p>最後のコール時にのみ <code>flag</code> を <i>1</i> とします。</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_SPELL</code></b> - ispell データをファイルから読み込み、 ispell ディレクトリファイルを読み込むことを指定します。この場合、 <code>val1</code> はどの接辞を読み込むかを表す 2 文字の言語コードとなります。また <code>val2</code> はファイルのパスです。 相対パスが指定された場合は、このモジュールは <b><code>UDM_CONF_DIR</code></b> でなく 現在のパス、つまりスクリプトの実行パスからの相対パスとして検索する ことに注意しましょう。ファイルが存在しないなどの理由でエラーが 発生した場合、この関数は <b><code>FALSE</code></b> を返し、エラーメッセージが 表示されます。エラーメッセージの内容を <code>udm_error()</code> および <code>udm_errno()</code> で取得することはできません。なぜなら、これらの関数は SQL に 関連付けられたメッセージを返すものだからです。<b><code>UDM_ISPELL_TYPE_DB</code></b> における <code>flag</code> パラメータの説明を参照ください。</p>   <code> &lt;&#63;php<br>if ((! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_AFFIX, 'en', '/opt/ispell/en.aff', 0)) ||<br>   (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_AFFIX, 'ru', '/opt/ispell/ru.aff', 0)) ||<br>   (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_SPELL, 'en', '/opt/ispell/en.dict', 0)) ||<br>   (! udm_load_ispell_data($udm, UDM_ISPELL_TYPE_SPELL, 'ru', '/opt/ispell/ru.dict', 1))) {<br> exit;<br> }<br>&#63;&gt;  </code>    <p><b>注意</b>:</p> <p>最後のコール時にのみ <code>flag</code> を <i>1</i> とします。</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_SERVER</code></b> - spell サーバーのサポートを有効にします。 <code>val1</code> パラメータで、spell サーバーが 稼動しているホストのアドレスを指定します。<code>val2</code> は現在は使われていません。しかし将来のリリースでは spell サーバーの ポート番号を指定するようになります。<code>flag</code> はこの場合は必要ありません。なぜなら spell サーバーに保存されている データは既に並べ替えられているからです。</p> <p>spelld サーバーは、設定ファイル (デフォルトは /usr/local/mnogosearch/etc/spelld.conf) から スペルデータを読み込み、それを並び替えた上でメモリに保存します。 クライアントとサーバーの間の通信方法は 2 通りあります。 インデクサは search.cgi サーバーから (インデクサを高速に開始するため) 全データを受け取り、それを正規化した形式でクライアント (search.cgi) に渡します。 DB モードや TEXT モードに比べ、これは (全スペルデータの読み込みや 並べ替えをしないことで) 一番高速に検索を実行します。</p> <p><b><code>UDM_ISPELL_TYPE_SERVER</code></b> モードでは、 <b>udm_load_ispell_data()</b> 関数は実際には ispell データを読み込みません。単にサーバーのアドレスを定義する だけです。実際には、<code>udm_find()</code> 関数で検索を 行う際にこのサーバーが自動的に使用されます。spell サーバーが 稼動していなかったりホストの指定が間違っていたりなどの理由で エラーが発生した場合、メッセージは何も返されず、ispell による 変換は動作しません。</p>  <p><b>注意</b>:</p> <p>この関数は、mnoGoSearch 3.1.12以降でのみ利用可能です。</p>  例   <code> &lt;&#63;php<br>if (!udm_load_ispell_data($udm, UDM_ISPELL_TYPE_SERVER, '', '', 1)) {<br>    echo "Error loading ispell data from server&lt;br /&gt;\n";<br>    exit;<br>}<br>&#63;&gt;  </code>   </li> </ul> <p>いちばん高速なモードは <b><code>UDM_ISPELL_TYPE_SERVER</code></b> です。 <b><code>UDM_ISPELL_TYPE_TEXT</code></b> はそれより遅く、 <b><code>UDM_ISPELL_TYPE_DB</code></b> が一番遅くなります。この関係は mnoGoSearch 3.1.10 - 3.1.11 において成り立ちます。 将来のバージョンでは DB モードの高速化を行い、TEXT モードより 高速になる予定です。</p>
 * @param string $val1
 * @param string $val2
 * @param int $flag
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-load-ispell-data.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_load_ispell_data($agent, int $var, string $val1, string $val2, int $flag): bool {}

/**
 * mnoGoSearch エージェントのセッションパラメータを設定する
 * <p>mnoGoSearch セッションパラメータを定義します。</p>
 * @param resource $agent <p><code>udm_alloc_agent()</code> のコールにより取得した、 エージェントのリンク ID。</p>
 * @param int $var <p>以下のパラメータおよびそれらの値が利用可能です。</p><ul> <li>  <b><code>UDM_PARAM_PAGE_NUM</code></b> - 検索結果のページ番号を選択するために 使用されます (結果は、ページ毎に <b><code>UDM_PARAM_PAGE_SIZE</code></b> 個の結果を有する 0 から始まるページで返されます)。  </li> <li>  <b><code>UDM_PARAM_PAGE_SIZE</code></b> - 1 ページに表示される検索結果の数です。  </li> <li>  <b><code>UDM_PARAM_SEARCH_MODE</code></b> - 検索モード。次の値が利用可能です。 <b><code>UDM_MODE_ALL</code></b> - 全ての単語を検索します。; <b><code>UDM_MODE_ANY</code></b> - いずれかの単語で検索します。; <b><code>UDM_MODE_PHRASE</code></b> - 熟語で検索します。; <b><code>UDM_MODE_BOOL</code></b> - 論理値で検索します。論理値検索に関する詳細については <code>udm_find()</code> を参照ください。  </li> <li>  <b><code>UDM_PARAM_CACHE_MODE</code></b> - 検索結果のキャッシュモードをオンまたは オフにします。有効の場合、検索エンジンは検索結果をディスクに 保存します。似たような検索が後で実行された場合、エンジンは より高速にキャッシュから結果を得ることが可能です。 利用可能な値: <b><code>UDM_CACHE_ENABLED</code></b>, <b><code>UDM_CACHE_DISABLED</code></b>.  </li> <li>  <b><code>UDM_PARAM_TRACK_MODE</code></b> - クエリ追跡モードをオンまたはオフにします。 バージョン 3.1.2 以降、mnoGoSearch はクエリ追跡モードをサポート しています。追跡は SQL バージョンにのみ実装されており、組み込み データベースでは利用できません。追跡を使用するには、テーブルを 追跡サポート用に作成する必要があります。MySQL の場合、 create/mysql/track.txt を使用してください。検索実行時に、 フロントエンドはクエリ単語、見つけたドキュメントの数、カレントの 秒単位の Unix タイムスタンプを保存するためにこれらのテーブルを 使用します。 利用可能な値: <b><code>UDM_TRACK_ENABLED</code></b>, <b><code>UDM_TRACK_DISABLED</code></b>.  </li> <li>  <b><code>UDM_PARAM_PHRASE_MODE</code></b> - 熟語を用いたインデックスデータベースか どうかを定義します (indexer.confにおける"phrase" パラメータ)。 使用可能な値: <b><code>UDM_PHRASE_ENABLED</code></b> および <b><code>UDM_PHRASE_DISABLED</code></b>。 熟語検索が有効な場合 (<b><code>UDM_PHRASE_ENABLED</code></b>) でも、全てのモード (<i>ANY</i>、<i>ALL</i>、<i>BOOL</i>、<i>PHRASE</i>) で検索が可能であることに注意してください。 mnoGoSearch のバージョン 3.1.10 で、SQL と組み込みデータベース モードでのみ熟語検索がサポートされました。一方、3.1.11 で キャッシュモードでも熟語検索がサポートされ始めました。   熟語検索の例:   <i>"Arizona desert"</i> - このクエリは、"Arizona desert" を熟語として含む 全てのドキュメントを返します。熟語の前後に二重引用符が 必要であることに注意してください。  </li> <li>  <b><code>UDM_PARAM_CHARSET</code></b> - ローカルな charset を定義します。利用可能な値: mnoGoSearch によりサポートされるcharset、 例えば、koi8-r, cp1251, ...  </li> <li>  <b><code>UDM_PARAM_STOPFILE</code></b> - stopword ファイルの名前とパスを定義します。 (mnoGoSearch と若干違いがあります。つまり、mnoGoSearch においては、 相対パスまたはパスが入力されなかった場合、<b><code>UDM_CONF_DIR</code></b> からの 相対パスとしてこのファイルが探されます。一方このモジュールは、 カレントのパス、すなわち PHP スクリプトが実行されるパスからの 相対パスで探します)。  </li> <li>  <b><code>UDM_PARAM_STOPTABLE</code></b> - 指定した SQL テーブルから停止単語をロード します。複数の StopwordTable コマンドを使用可能です。このコマンドは、 SQL データベースサポートを有効にせずにコンパイルした場合は 使用できません。  </li> <li>  <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b> - 指定したドキュメント部分の重み係数を 表します。現在、body, title, keywords, description, url が サポートされています。この機能を有効にするには、indexer.conf の &#42;Weight コマンドに 2 の累乗を指定してください。ここで次のような 重みを指定した場合を考えてみましょう。  <pre> URLWeight 1 BodyWeight 2 TitleWeight 4 KeywordWeight 8 DescWeight 16 </pre>  同じドキュメントにいくつかの単語が複数回現れる場合、 indexerが単語の重みに OR 演算子を使用するので、異なった ドキュメントの部分に単語が現れる回数を検出可能です。本文にのみ現れる 単語は、(2進標記で) 重み集合 00000010 を有します。すべての ドキュメント部分で使用される単語は、重み集合 00011111 を有します。   このパラメータの値は、16進数文字列 <i>ABCDE</i> です。各桁は、単語重みの 対応するビットの因子です。上で指定した重み設定は次のようになります。  <pre> E is a factor for weight 1 (URL Weight bit) D is a factor for weight 2 (BodyWeight bit) C is a factor for weight 4 (TitleWeight bit) B is a factor for weight 8 (KeywordWeight bit) A is a factor for weight 16 (DescWeight bit) </pre>  例:   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=00001 は、URL のみを検索します。   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=00100 は、Title のみを検索します。   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=11100 は、Title, Keywords, Desctription を 検索しますが、URL と Body は検索しません。   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=F9421 は、次の検索を行います。  <pre> Description with factor 15 (F hex) Keywords with factor 9 Title with factor 4 Body with factor 2 URL with factor 1 </pre>  <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b> 変数が省略された場合、元の重みの値は ソート結果から引き出されます。上記で指定した重み設定の場合、 ドキュメントの Description は、最大重み 16 を有するドキュメントの description を意味します。  </li> <li>  <b><code>UDM_PARAM_WORD_MATCH</code></b> - 単語にマッチ。このパラメータを単語検索型を 選択する際に使用可能です。この機能は、"single" および "multi" モードで SQL データベースおよび組み込みのデータベースを使用する 場合にのみ動作します。この機能は、cachemode および他のモードでは 動作しません。これは、これらのモードが単語 CRC を使用しており、 部分文字列検索をサポートしていないからです。 利用可能な値は次のようになります。  <b><code>UDM_MATCH_BEGIN</code></b> - 単語の始めにマッチ <b><code>UDM_MATCH_END</code></b> - 単語の終りにマッチ <b><code>UDM_MATCH_WORD</code></b> - 単語全体にマッチ <b><code>UDM_MATCH_SUBSTR</code></b> - 単語の部分文字列にマッチ </li> <li>  <b><code>UDM_PARAM_MIN_WORD_LEN</code></b> - 単語の最短長を定義します。 この制限より短い単語は、stopword とみなされます。このパラメータは その値自身も範囲に含むことに注意してください。つまり、 <b><code>UDM_PARAM_MIN_WORD_LEN</code></b>=3 の場合、3 文字の長さの単語は stopword と 見なされませんが、2 文字の単語はstopwordとみなされます。 デフォルトは 1 です。  </li> <li>  <b><code>UDM_PARAM_ISPELL_PREFIXES</code></b> - 利用可能な値は <b><code>UDM_PREFIXES_ENABLED</code></b> および <b><code>UDM_PREFIXES_DISABLED</code></b> で、それぞれプレフィックスの使用を有効あるいは 無効とします。例えば検索クエリに "tested" が含まれていた場合、 "test" や "testing" などといった単語も対象とします。デフォルトでは このようなサフィックスのみがサポートされています。プレフィックスは しばしば単語の意味を変えてしまいます。たとえば、"tested" を検索した際の結果として "untested" が出てきてほしいと思う人は ほとんどいないでしょう。プレフィックスのサポートは、サイトの スペルチェックのために使用すると便利です。ispell を有効にするには、 <code>udm_load_ispell_data()</code> で ispell データを 読み込む必要があります。  </li> <li>  <b><code>UDM_PARAM_CROSS_WORDS</code></b> - クロスワードのサポートを有効あるいは無効にします。 利用可能な値: <b><code>UDM_CROSS_WORDS_ENABLED</code></b> および <b><code>UDM_CROSS_WORDS_DISABLED</code></b>   クロスワード機能により、&lt;a href="xxx"&gt; と &lt;/a&gt; の間の 単語もリンク先ドキュメントに設定します。これは SQL データベース モードで動作し、組み込みのデータベースやキャッシュモードでは 使用できません。  </li> <li>  <b><code>UDM_PARAM_VARDIR</code></b> - 組み込みのデータベースやキャッシュモードを 使用する際に、インデクサがデータを保存するディレクトリへの パスを指定します。デフォルトでは、mnoGoSearch をインストールした ディレクトリの下の <i>/var</i> ディレクトリが 使用されます。文字列値のみを指定可能です。  </li> </ul>
 * @param string $val
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.udm-set-agent-param.php
 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
 */
function udm_set_agent_param($agent, int $var, string $val): bool {}

define('UDM_CACHE_DISABLED', null);

define('UDM_CACHE_ENABLED', null);

define('UDM_CROSS_WORDS_DISABLED', null);

define('UDM_CROSS_WORDS_ENABLED', null);

define('UDM_CROSSWORDS_DISABLED', null);

define('UDM_CROSSWORDS_ENABLED', null);

define('UDM_FIELD_CATEGORY', null);

define('UDM_FIELD_CHARSET', null);

define('UDM_FIELD_CONTENT', null);

define('UDM_FIELD_CRC', null);

define('UDM_FIELD_DESC', null);

define('UDM_FIELD_DESCRIPTION', null);

define('UDM_FIELD_KEYWORDS', null);

define('UDM_FIELD_LANG', null);

define('UDM_FIELD_MODIFIED', null);

define('UDM_FIELD_ORDER', null);

define('UDM_FIELD_RATING', null);

define('UDM_FIELD_SCORE', null);

define('UDM_FIELD_SIZE', null);

define('UDM_FIELD_TEXT', null);

define('UDM_FIELD_TITLE', null);

define('UDM_FIELD_URL', null);

define('UDM_FIELD_URLID', null);

define('UDM_ISPELL_PREFIX_DISABLED', null);

define('UDM_ISPELL_PREFIX_ENABLED', null);

define('UDM_ISPELL_PREFIXES_DISABLED', null);

define('UDM_ISPELL_PREFIXES_ENABLED', null);

define('UDM_ISPELL_TYPE_AFFIX', null);

define('UDM_ISPELL_TYPE_DB', null);

define('UDM_ISPELL_TYPE_SERVER', null);

define('UDM_ISPELL_TYPE_SPELL', null);

define('UDM_LIMIT_CAT', null);

define('UDM_LIMIT_DATE', null);

define('UDM_LIMIT_LANG', null);

define('UDM_LIMIT_TAG', null);

define('UDM_LIMIT_URL', null);

define('UDM_MATCH_BEGIN', null);

define('UDM_MATCH_END', null);

define('UDM_MATCH_SUBSTR', null);

define('UDM_MATCH_WORD', null);

define('UDM_MODE_ALL', null);

define('UDM_MODE_ANY', null);

define('UDM_MODE_BOOL', null);

define('UDM_MODE_PHRASE', null);

define('UDM_PARAM_BROWSER_CHARSET', null);

define('UDM_PARAM_CACHE_MODE', null);

define('UDM_PARAM_CHARSET', null);

define('UDM_PARAM_CROSS_WORDS', null);

define('UDM_PARAM_CROSSWORDS', null);

define('UDM_PARAM_DATADIR', null);

define('UDM_PARAM_FIRST_DOC', null);

define('UDM_PARAM_FOUND', null);

define('UDM_PARAM_HLBEG', null);

define('UDM_PARAM_HLEND', null);

define('UDM_PARAM_ISPELL_PREFIX', null);

define('UDM_PARAM_ISPELL_PREFIXES', null);

define('UDM_PARAM_LAST_DOC', null);

define('UDM_PARAM_LOCAL_CHARSET', null);

define('UDM_PARAM_MAX_WORD_LEN', null);

define('UDM_PARAM_MAX_WORDLEN', null);

define('UDM_PARAM_MIN_WORD_LEN', null);

define('UDM_PARAM_MIN_WORDLEN', null);

define('UDM_PARAM_NUM_ROWS', null);

define('UDM_PARAM_PAGE_NUM', null);

define('UDM_PARAM_PAGE_SIZE', null);

define('UDM_PARAM_PHRASE_MODE', null);

define('UDM_PARAM_PREFIX', null);

define('UDM_PARAM_PREFIXES', null);

define('UDM_PARAM_QSTRING', null);

define('UDM_PARAM_REMOTE_ADDR', null);

define('UDM_PARAM_SEARCH_MODE', null);

define('UDM_PARAM_SEARCH_TIME', null);

define('UDM_PARAM_SEARCHD', null);

define('UDM_PARAM_SEARCHTIME', null);

define('UDM_PARAM_STOP_FILE', null);

define('UDM_PARAM_STOP_TABLE', null);

define('UDM_PARAM_STOPFILE', null);

define('UDM_PARAM_STOPTABLE', null);

define('UDM_PARAM_SYNONYM', null);

define('UDM_PARAM_TRACK_MODE', null);

define('UDM_PARAM_VARDIR', null);

define('UDM_PARAM_WEIGHT_FACTOR', null);

define('UDM_PARAM_WORD_INFO', null);

define('UDM_PARAM_WORD_MATCH', null);

define('UDM_PARAM_WORDINFO', null);

define('UDM_PHRASE_DISABLED', null);

define('UDM_PHRASE_ENABLED', null);

define('UDM_PREFIX_DISABLED', null);

define('UDM_PREFIX_ENABLED', null);

define('UDM_PREFIXES_DISABLED', null);

define('UDM_PREFIXES_ENABLED', null);

define('UDM_TRACK_DISABLED', null);

define('UDM_TRACK_ENABLED', null);

