<?php



/**
 * C 言語と同様にスラッシュで文字列をクォートする
 * <p><code>charlist</code> パラメータに羅列された文字の前にバックスラッシュを付けた文字列を返します。</p>
 * @param string $str <p>エスケープしたい文字列。</p>
 * @param string $charlist <p>エスケープの対象となる文字を並べたもの。 <code>charlist</code> が <i>\n</i>, <i>\r</i> 等の文字を含んでいる場合、 C言語と同様の手法によりエスケープされます。 アスキーコードが32未満または126より大きい文字は、8進表現に変換されます。</p> <p>charlist 引数の文字の列びを定義する際には、 範囲の最初と最後で指定する文字集合に含まれる文字の種類を把握するようにしてください。</p>  <code> &lt;&#63;php<br>echo addcslashes('foo[ ]', 'A..z');<br>// 出力:  \f\o\o\[ \]<br>// 全ての大文字と小文字はエスケープされます。<br>// ... しかし、[\]^_` もエスケープされてしまいます。<br>&#63;&gt;  </code>   また、ある範囲を指定する最初の文字がその範囲の2番目の文字よりも大きな ASCII 値を有している場合、範囲は定義されません。 最初と最後の文字とピリオド文字のみがエスケープされます。 ある文字の ASCII 値を見つけるには、 <code>ord()</code> 関数を使用してください。   <code> &lt;&#63;php<br>echo addcslashes("zoo['.']", 'z..A');<br>// 出力:  \zoo['\.']<br>&#63;&gt;  </code>   <p>0, a, b, f, n, r, t そして v といった文字をエスケープするときには注意しましょう。 変換結果はそれぞれ \0, \a, \b, \f, \n, \r, \t そして \v となりますが、 これらはすべて、C 言語では定義済みのエスケープシーケンスです。 その多くは C 言語に由来する他の言語でもエスケープシーケンスとして定義されており、 PHP も例外ではありません。つまり、<code>charlist</code> にこれらの文字を定義した状態で <b>addcslashes()</b> を使って他の言語のコードを生成したときに、 期待通りの結果が得られない可能性があるということです。</p>
 * @return string <p>エスケープされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.addcslashes.php
 * @see stripcslashes(), stripslashes(), addslashes(), htmlspecialchars(), quotemeta()
 * @since PHP 4, PHP 5, PHP 7
 */
function addcslashes(string $str, string $charlist): string {}

/**
 * 文字列をスラッシュでクォートする
 * <p>エスケープすべき文字の前にバックスラッシュを付けて返します。 エスケープすべき文字とは、シングルクォート(<i>'</i>), ダブルクォート(<i>"</i>),バックスラッシュ (<i>\</i>) ,NUL (<b><code>NULL</code></b> バイト) です。</p><p><b>addslashes()</b> 関数 を使う例として、PHPが評価する文字列データを入力する場合が挙げられます。たとえば、<i>O'Reilly</i> というデータを $str に格納して評価する場合、$str をエスケープする(つまり eval("echo '".addslashes($str)."';"); する) 必要があります。</p><p>セキュリティ上の理由で、データベースパラメータをエスケープするには DBMS 固有のエスケープ関数 (たとえば MySQL 用の <code>mysqli_real_escape_string()</code> や、 PostgreSQL 用の <code>pg_escape_literal()</code>、<code>pg_escape_string()</code>) を使うべきです。 識別子(例: テーブル名やフィールド名)をエスケープするときは、データベースパラメータとは別の仕様をDBMSは使います。 PostgreSQL の <code>pg_escape_identifier()</code> のように、DBMS によっては識別子用のエスケープ関数を提供しているものもありますが、全ての DBMS が提供しているわけではありません。 提供されていない場合は、お使いのデータベースシステムのマニュアルを参照し、適切なエスケープ方法を調べるようにしてください。</p><p>お使いの DBMS がエスケープ関数を提供しておらず、 DBMS が 特別な文字をエスケープするのに <i>\</i> を使っている場合、 その DBMS に適切なエスケープ方法である場合に限って、 <b>addslashes()</b> 関数を使うことができます。 ほとんどのデータベース上では、 <b>addslashes()</b>関数を パラメータのエスケープに使うと、セキュリティ問題が起きる原因となりうることに注意してください。</p><p>PHP 5.4 より前のバージョンでは、 magic_quotes_gpc が デフォルトで <i>on</i> だったため、 原則として <b>addslashes()</b> 関数がすべての GET, POST, COOKIE のデータに対して実行されていました。 magic_quotes_gpc によって既にエスケープされた文字列に対して <b>addslashes()</b>関数 を絶対に実行してはいけません。2重エスケープになるからです。 <code>get_magic_quotes_gpc()</code>関数 で既にエスケープが行われているかを簡単にチェックできます。</p>
 * @param string $str <p>エスケープしたい文字列。</p>
 * @return string <p>エスケープされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.addslashes.php
 * @see stripcslashes(), stripslashes(), addcslashes(), htmlspecialchars(), quotemeta(), get_magic_quotes_gpc()
 * @since PHP 4, PHP 5, PHP 7
 */
function addslashes(string $str): string {}

/**
 * バイナリのデータを16進表現に変換する
 * <p><code>str</code> を16進表現に変換したASCII文字列を返します。変換は、上位ニブルからバイト毎に行われます。</p>
 * @param string $str <p>文字列。</p>
 * @return string <p>指定した文字列を16進表現に変換したものを返します。</p>
 * @link http://php.net/manual/ja/function.bin2hex.php
 * @see hex2bin(), pack()
 * @since PHP 4, PHP 5, PHP 7
 */
function bin2hex(string $str): string {}

/**
 * rtrim() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>rtrim()</code>.</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $character_mask <p><code>character_mask</code> パラメータにより、 削除する文字を指定することも可能です。 削除したい全ての文字をリストにしてください。<i>..</i> を文字の範囲を指定する際に使用可能です。</p>
 * @return string
 * @link http://php.net/manual/ja/function.chop.php
 * @since PHP 4, PHP 5, PHP 7
 */
function chop(string $str, string $character_mask = NULL): string {}

/**
 * 特定の文字を返す
 * <p><code>ascii</code>で指定された、1文字からなる文字列を返します。</p><p>この関数は<code>ord()</code>の逆の動作をします。</p>
 * @param int $ascii <p>拡張 ASCII コード。</p> <p>妥当な範囲 (0..255) 外の値を渡した場合は、255 とのビット AND を行います。 この処理は、以下のコードと同様のアルゴリズムです。</p> <code> while ($ascii &lt; 0) {<br>    $ascii += 256;<br>}<br>$ascii %= 256; </code>
 * @return string <p>指定した文字を返します。</p>
 * @link http://php.net/manual/ja/function.chr.php
 * @see sprintf(), ord()
 * @since PHP 4, PHP 5, PHP 7
 */
function chr(int $ascii): string {}

/**
 * 文字列をより小さな部分に分割する
 * <p>文字列をより小さな部分に分割する際に使用され、 <code>base64_encode()</code> の出力を RFC 2045の規約に基づいた出力に変換するといった用途に適しています。 この関数は、<code>chunklen</code> 文字毎に文字列 <code>end</code> を挿入します。</p>
 * @param string $body <p>分割したい文字列。</p>
 * @param int $chunklen <p>各部分の長さ。</p>
 * @param string $end <p>行末の区切り。</p>
 * @return string <p>分割した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.chunk-split.php
 * @see str_split(), explode(), split(), wordwrap()
 * @since PHP 4, PHP 5, PHP 7
 */
function chunk_split(string $body, int $chunklen = 76, string $end = "\r\n"): string {}

/**
 * キリル文字セットを他のものに変換する
 * <p>キリル文字セットを、別の文字セットに変換します。</p>
 * @param string $str <p>変換したい文字列。</p>
 * @param string $from <p>変換元のキリル文字セットを一文字で表したもの。</p>
 * @param string $to <p>変換先のキリル文字セットを一文字で表したもの。</p>
 * @return string <p>変換した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.convert-cyr-string.php
 * @see mb_convert_encoding(), iconv()
 * @since PHP 4, PHP 5, PHP 7
 */
function convert_cyr_string(string $str, string $from, string $to): string {}

/**
 * uuencode された文字列をデコードする
 * <p><b>convert_uudecode()</b> は、uuencode された文字列をデコードします。</p><p><b>注意</b>:  <b>convert_uudecode()</b> neither accepts the <i>begin</i> nor the <i>end</i> line, which are part of uuencoded <i>files</i>. </p>
 * @param string $data <p>uuencode されたデータ。</p>
 * @return string <p>デコードしたデータを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.convert-uudecode.php
 * @see convert_uuencode()
 * @since PHP 5, PHP 7
 */
function convert_uudecode(string $data): string {}

/**
 * 文字列を uuencode する
 * <p><b>convert_uuencode()</b> は、uuencode アルゴリズムを使用して文字列をエンコードします。</p><p>uuencode はすべての文字(バイナリを含む)を表示可能な文字に変換し、 ネットワーク上での転送を可能にします。uuencode されたデータは、 元のデータより約 35% 大きくなります。</p><p><b>注意</b>:  <b>convert_uuencode()</b> neither produces the <i>begin</i> nor the <i>end</i> line, which are part of uuencoded <i>files</i>. </p>
 * @param string $data <p>エンコードしたいデータ。</p>
 * @return string <p>uuencode されたデータを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.convert-uuencode.php
 * @see convert_uudecode(), base64_encode()
 * @since PHP 5, PHP 7
 */
function convert_uuencode(string $data): string {}

/**
 * 文字列で使用されている文字に関する情報を返す
 * <p><code>string</code> において各バイト値 (0..255) が存在する数をかぞえ、様々な手法で返します。</p>
 * @param string $string <p>調べたい文字列。</p>
 * @param int $mode <p>返り値を参照ください。</p>
 * @return mixed <p><code>mode</code> の値により、 <b>count_chars()</b> は以下の値のどれかを返します。</p><ul> <li>  0 - 各バイト値をキー、各バイトの出現回数を値とする配列。  </li> <li>  1 - 0と同じですが、各バイト値の出現回数がゼロより大きいものの一覧となります。  </li> <li>  2 - 0と同じですが、各バイト値の出現回数がゼロであるものの一覧となります。  </li> <li>  3 - すべての一意な文字を含む文字列を返します。  </li> <li>  4 - 使用されていない全ての文字を含む文字列を返します。  </li> </ul>
 * @link http://php.net/manual/ja/function.count-chars.php
 * @see strpos(), substr_count()
 * @since PHP 4, PHP 5, PHP 7
 */
function count_chars(string $string, int $mode = 0) {}

/**
 * 文字列の crc32 多項式計算を行う
 * <p><code>str</code> の 32 ビット長の CRC (cyclic redundancy checksum) チェックサムを生成します。 これは通常、送信したデータの整合性を検証するために使用します。</p><p>PHP の整数型は符号付きで、多くの crc32 チェックサムは 32 ビットシステム上では負の整数になります。 しかし、64 ビット環境では <b>crc32()</b> の結果はすべて正の整数となります。</p><p>つまり、符号なしの <b>crc32()</b> チェックサムの文字列表記を 十進形式で取得するには、 <code>sprintf()</code> もしくは <code>printf()</code> の "%u" フォーマッタを使う必要があります。</p><p>チェックサムの十六進表記を取得するには、<code>sprintf()</code> あるいは <code>printf()</code> の "%x" フォーマッタを使うか、あるいは変換関数 <code>dechex()</code> を使います。これらはいずれも、 <b>crc32()</b> の結果を符号なし整数に変換することも行います。</p><p>64 ビット環境でも、返り値が大きくなると負の整数を返すことが考えられます。 その場合は十六進変換がうまくいかないので、負の整数については オフセット 0xFFFFFFFF######## を与えます。 十六進表現は最もよく使われる形式なので、この処理が壊れないようにしました。 32 ビット環境から 64 ビット環境に移したときに ほぼ 50% の確率で十進形式での比較が失敗してしまいますが、 それよりも十六進表記のほうを優先したのです。</p><p>今思えば、この関数が整数値を返すようにしたというのがまずい判断でした。 最初から、<code>md5()</code> のように十六進形式の文字列をを直接返すようにしておけばよかったのでしょう。</p><p>移植性を考慮した選択肢として、より汎用的な <code>hash()</code> を使う方法もあります。 <code>hash("crc32b", $str)</code> は <code>str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT)</code> と同じ文字列を返します。</p>
 * @param string $str <p>データ。</p>
 * @return int <p><code>str</code> の crc32 チェックサムを整数値で返します。</p>
 * @link http://php.net/manual/ja/function.crc32.php
 * @see hash(), md5(), sha1()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function crc32(string $str): int {}

/**
 * 文字列の一方向のハッシュ化を行う
 * <p><b>crypt()</b> 文字列のハッシュを返します。 Unix 標準の DES ベースのアルゴリズムか、 あるいはシステム上で使えるその他のアルゴリズムを使用します。</p><p><code>salt</code> パラメータは必須ではありませんが、これを省略すると <b>crypt()</b> が作るハッシュが弱いものになってしまいます。 PHP 5.6 以降は、このパラメータを省略した場合に E_NOTICE が発生するようになりました。 十分に強いソルトを指定して、セキュリティを確保しましょう。</p><p><code>password_hash()</code> は、強力なハッシュを使い、協力なソルトを生成して、それを複数回自動的に適用します。 <code>password_hash()</code> は <b>crypt()</b> のシンプルなラッパーであり、既存のパスワードハッシュと互換性があります。 <code>password_hash()</code> を使うことを推奨します。</p><p>複数のハッシュ方式をサポートしているオペレーティングシステムもあります。 実際、標準の DES ベースのアルゴリズムを MD5 ベースのものに置き換えることもあります。 ハッシュ方式は、salt 引数によって決まります。 PHP 5.3 より前のバージョンでは、PHP のインストール時に、 システムの crypt() 関数から使用できるアルゴリズムを判別します。 salt を省略した場合は、標準の 2 文字 (DES) の salt を自動生成します。 あるいは、MD5 crypt() が使えれば 12 文字 (MD5) の salt を自動生成します。 PHP の定数 <b><code>CRYPT_SALT_LENGTH</code></b> には、 ハッシュで使用できる salt の最大長が格納されています。</p><p>標準の DES ベースの場合、<b>crypt()</b> は出力の最初の 2 文字を salt として使用します。また、 <code>str</code> の最初の 8 文字しか使用しません。 つまり、最初の 8 文字が同じである長い文字列は、 同じ salt を使う限り同じ結果となります。</p><p>crypt() が複数のハッシュ方式をサポートしているシステムでは、 その方式が使用可能かどうかによって次の定数群が 0 か 1 に設定されます。</p><p><b>注意</b>:</p><p>PHP 5.3.0 以降、PHP 自身にもそれぞれの実装が含まれるようになりました。 システム側でそのアルゴリズムがサポートされていない場合にこの実装を使用します。</p>
 * @param string $str <p>ハッシュしたい文字列。</p>  <b>警告</b> <p><b><code>CRYPT_BLOWFISH</code></b> を使うと、 <code>str</code> が最大 72 文字までに切り詰められます。</p>
 * @param string $salt <p>ハッシュのもととなる salt 文字列。省略した場合の挙動は アルゴリズムの実装によって決まるので、予期せぬ結果となることがあり得ます。</p>
 * @return string <p>ハッシュした文字列を返します。 失敗した場合は、salt とは異なることが保証されている 13 文字未満の文字列を返します。</p> <b>警告</b> <p>パスワードを検証するときの文字列比較関数は、 タイミング攻撃に対して脆弱ではないものでなければいけません。 これをもちいて、<b>crypt()</b> の出力と既知のハッシュとを比較します。 PHP 5.6 以降には、このために使える <code>hash_equals()</code> 関数が追加されました。</p>
 * @link http://php.net/manual/ja/function.crypt.php
 * @see hash_equals(), password_hash(), md5()
 * @since PHP 4, PHP 5, PHP 7
 */
function crypt(string $str, string $salt = NULL): string {}

/**
 * 文字列を文字列により分割する
 * <p>文字列の配列を返します。この配列の各要素は、 <code>string</code> を文字列 <code>delimiter</code> で区切った部分文字列となります。</p>
 * @param string $delimiter <p>区切り文字列。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $limit <p><code>limit</code> に正の値が指定された場合、返される配列には 最大 <code>limit</code> の要素が含まれ、その最後の要素には <code>string</code> の残りの部分が全て含まれます。</p> <p>もし <code>limit</code> パラメータが負の場合、 最後の -<code>limit</code> 個の要素を除く全ての構成要素が返されます。</p> <p><code>limit</code> パラメータがゼロの場合は、1 を指定したものとみなされます。</p>
 * @return array <p><code>string</code> の内容を <code>delimiter</code> で分割した文字列の配列を返します。</p><p>空の文字列 ("") が <code>delimiter</code> として使用された場合、 <b>explode()</b> は <b><code>FALSE</code></b> を返します。<code>delimiter</code> に引数 <code>string</code> に含まれていない値が含まれている場合は、 <code>limit</code> が負の値なら空の配列、そうでなければ 引数 <code>string</code> を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.explode.php
 * @see preg_split(), str_split(), mb_split(), str_word_count(), strtok(), implode()
 * @since PHP 4, PHP 5, PHP 7
 */
function explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array {}

/**
 * フォーマットされた文字列をストリームに書き込む
 * <p><code>format</code> によって作成された文字列を <code>handle</code> で指定したストリームに書き込みます。</p>
 * @param resource $handle <p><code>fopen()</code> を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $format <p><code>format</code> については、 <code>sprintf()</code> のドキュメントで説明されています。</p>
 * @param mixed $args
 * @param mixed $_
 * @return int <p>書き込まれた文字列の長さを返します。</p>
 * @link http://php.net/manual/ja/function.fprintf.php
 * @see printf(), sprintf(), sscanf(), fscanf(), vsprintf(), number_format()
 * @since PHP 5, PHP 7
 */
function fprintf($handle, string $format, $args = NULL, $_ = NULL): int {}

/**
 * htmlspecialchars() および htmlentities() で使用される変換テーブルを返す
 * <p><b>get_html_translation_table()</b> は、 <code>htmlspecialchars()</code> および <code>htmlentities()</code> において内部的に使用される変換テーブルを返します。</p><p><b>注意</b>:</p><p>特殊文字はいくつかの方法でエンコードすることができます。 例えば、<i>"</i> は <i>&amp;quot;</i>, <i>&amp;#34;</i> もしくは <i>&amp;#x22</i> としてエンコードすることができます。 <b>get_html_translation_table()</b> の返す値は、 <code>htmlspecialchars()</code> や <code>htmlentities()</code> で使っている形式だけです。</p>
 * @param int $table <p>どちらのテーブルを返すか。<b><code>HTML_ENTITIES</code></b> あるいは <b><code>HTML_SPECIALCHARS</code></b>。</p>
 * @param int $flags <p>以下のフラグのビットマスクによる組み合わせで、 どのクォートをテーブルに含めるのか、そしてどのドキュメント形式用のテーブルにするのかを指定します。 デフォルトは <i>ENT_COMPAT | ENT_HTML401</i> です。</p> <b>使用可能な <code>flags</code> 定数</b>   定数名 説明     <b><code>ENT_COMPAT</code></b> テーブルにダブルクォート用のエンティティを含めますが、シングルクォート用は含めません。   <b><code>ENT_QUOTES</code></b> テーブルにダブルクォート用、シングルクォート用の両方のエンティティを含めます。   <b><code>ENT_NOQUOTES</code></b> テーブルにダブルクォート用、シングルクォート用のどちらのエンティティも含めません。   <b><code>ENT_HTML401</code></b> HTML 4.01 用のテーブル。   <b><code>ENT_XML1</code></b> XML 1 用のテーブル。   <b><code>ENT_XHTML</code></b> XHTML 用のテーブル。   <b><code>ENT_HTML5</code></b> HTML 5 用のテーブル。
 * @param string $encoding <p>使用するエンコーディング。省略した場合のデフォルト値は、 PHP 5.4.0 より前のバージョンでは ISO-8859-1、そして PHP 5.4.0 以降では UTF-8 となります。</p> <p>以下の文字セットをサポートします。</p> <b>サポートする文字セット</b>   文字セット エイリアス 説明     ISO-8859-1 ISO8859-1  西欧、Latin-1    ISO-8859-5 ISO8859-5  ほとんど使われないキリル文字セット (Latin/Cyrillic)。    ISO-8859-15 ISO8859-15  西欧、Latin-9 。Latin-1(ISO-8859-1) に欠けている ユーロ記号やフランス・フィンランドの文字を追加したもの。    UTF-8    ASCII 互換のマルチバイト 8 ビット Unicode 。    cp866 ibm866, 866  DOS 固有のキリル文字セット。    cp1251 Windows-1251, win-1251, 1251  Windows 固有のキリル文字セット。    cp1252 Windows-1252, 1252  西欧のための Windows 固有の文字セット。    KOI8-R koi8-ru, koi8r  ロシア語。    BIG5 950  繁体字中国語。主に台湾で使用されます。    GB2312 936  簡体字中国語。国の標準文字セットです。    BIG5-HKSCS    Big5 に香港の拡張を含めたもの。繁体字中国語。    Shift_JIS SJIS, SJIS-win, cp932, 932  日本語。    EUC-JP EUCJP, eucJP-win  日本語。    MacRoman    Mac OS で使われる文字セット。    <i>''</i>    空文字列を指定すると、 スクリプトのエンコーディング (Zend multibyte)、 default_charset、 そして現在のロケール (<code>nl_langinfo()</code> および <code>setlocale()</code> を参照ください) の順でエンコーディングを検出します。 この方法はおすすめしません。     <p><b>注意</b>:  これら以外の文字セットは理解できません。 かわりにデフォルトのエンコーディングを使用し、警告を発生させます。 </p>
 * @return array <p>変換テーブルを配列で返します。元の文字がキー、そしてエンティティが値となります。</p>
 * @link http://php.net/manual/ja/function.get-html-translation-table.php
 * @see htmlspecialchars(), htmlentities(), html_entity_decode()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_html_translation_table(int $table = HTML_SPECIALCHARS, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = "UTF-8"): array {}

/**
 * 論理表記のヘブライ語を物理表記に変換する
 * <p>論理表記のヘブライ語を物理表記に変換します。</p><p>この関数は、単語の分断をできるだけ回避しようとします。</p>
 * @param string $hebrew_text <p>ヘブライ語の入力文字列。</p>
 * @param int $max_chars_per_line <p>このオプションのパラメータは、 出力される行毎の最大文字数を返します。</p>
 * @return string <p>物理表記の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.hebrev.php
 * @see hebrevc()
 * @since PHP 4, PHP 5, PHP 7
 */
function hebrev(string $hebrew_text, int $max_chars_per_line = 0): string {}

/**
 * 論理表記のヘブライ語を、改行の変換も含めて物理表記に変換する
 * <p>この関数は、<code>hebrev()</code> に似ていますが、 改行 (\n) を "&lt;br&gt;\n" に変換するところが異なります。</p><p>この関数は、単語の分断をできるだけ回避しようとします。</p>
 * @param string $hebrew_text <p>ヘブライ語の入力文字列。</p>
 * @param int $max_chars_per_line <p>このオプションのパラメータは、 出力される行毎の最大文字数を返します。</p>
 * @return string <p>物理表記の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.hebrevc.php
 * @see hebrev()
 * @since PHP 4, PHP 5, PHP 7
 */
function hebrevc(string $hebrew_text, int $max_chars_per_line = 0): string {}

/**
 * 16進エンコードされたバイナリ文字列をデコードする
 * <p>16進エンコードされたバイナリ文字列をデコードします。</p><p>これは、16進数を2進数に変換する関数では<i>ありません</i>。 2進数への変換には <code>base_convert()</code> 関数を使いましょう。</p>
 * @param string $data <p>16進表現のデータ。</p>
 * @return string <p>指定したデータを2進表現に変換したものを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.hex2bin.php
 * @see bin2hex(), unpack()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function hex2bin(string $data): string {}

/**
 * HTML エンティティを適切な文字に変換する
 * <p><b>html_entity_decode()</b> は <code>htmlentities()</code> の反対で、<code>string</code> にあるすべての HTML エンティティを適切な文字に変換します。</p><p>厳密に言うと、この関数は次の二つの条件を満たすすべての (数値エンティティを含む) エンティティをデコードします。それ以外のエンティティは、何も変換しません。 1) 選択したドキュメントタイプで必然的に有効になるもの。つまり XML の場合には、DTD で定義されている名前付きエンティティはデコードしません。 2) 選択したエンコーディングに関連づけられている符号化文字集合に含まれる文字で、 選択したドキュメントタイプで許可されているもの。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $flags <p>以下のフラグのビットマスクによる組み合わせで、クォートの扱いやドキュメントの形式を指定します。 デフォルトは <i>ENT_COMPAT | ENT_HTML401</i> です。</p> <b>使用可能な <code>flags</code> 定数</b>   定数名 説明     <b><code>ENT_COMPAT</code></b> ダブルクォートを変換し、シングルクォートはそのままにします。   <b><code>ENT_QUOTES</code></b> ダブルクォート、シングルクォートの両方を変換します。   <b><code>ENT_NOQUOTES</code></b> ダブルクォート、シングルクォートの両方とも変換しません。   <b><code>ENT_HTML401</code></b>  コードを HTML 4.01 として処理します。    <b><code>ENT_XML1</code></b>  コードを XML 1 として処理します。    <b><code>ENT_XHTML</code></b>  コードを XHTML として処理します。    <b><code>ENT_HTML5</code></b>  コードを HTML 5 として処理します。
 * @param string $encoding <p>オプションの引数。文字を変換するときに使うエンコーディングを定義します。</p> <p>省略した場の <code>encoding</code> のデフォルト値は、varies PHP のバージョンによって異なります。 PHP 5.6.0 以降では、デフォルト値として default_charset の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、 <i>UTF-8</i> で、それより前のバージョンの PHP のデフォルト値は <i>ISO-8859-1</i> でした。</p> <p>技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、 default_charset の指定が入力とは違う文字セットになっている場合は、 適切な値を指定しておくことを強く推奨します。</p> <p>以下の文字セットをサポートします。</p> <b>サポートする文字セット</b>   文字セット エイリアス 説明     ISO-8859-1 ISO8859-1  西欧、Latin-1    ISO-8859-5 ISO8859-5  ほとんど使われないキリル文字セット (Latin/Cyrillic)。    ISO-8859-15 ISO8859-15  西欧、Latin-9 。Latin-1(ISO-8859-1) に欠けている ユーロ記号やフランス・フィンランドの文字を追加したもの。    UTF-8    ASCII 互換のマルチバイト 8 ビット Unicode 。    cp866 ibm866, 866  DOS 固有のキリル文字セット。    cp1251 Windows-1251, win-1251, 1251  Windows 固有のキリル文字セット。    cp1252 Windows-1252, 1252  西欧のための Windows 固有の文字セット。    KOI8-R koi8-ru, koi8r  ロシア語。    BIG5 950  繁体字中国語。主に台湾で使用されます。    GB2312 936  簡体字中国語。国の標準文字セットです。    BIG5-HKSCS    Big5 に香港の拡張を含めたもの。繁体字中国語。    Shift_JIS SJIS, SJIS-win, cp932, 932  日本語。    EUC-JP EUCJP, eucJP-win  日本語。    MacRoman    Mac OS で使われる文字セット。    <i>''</i>    空文字列を指定すると、 スクリプトのエンコーディング (Zend multibyte)、 default_charset、 そして現在のロケール (<code>nl_langinfo()</code> および <code>setlocale()</code> を参照ください) の順でエンコーディングを検出します。 この方法はおすすめしません。     <p><b>注意</b>:  これら以外の文字セットは理解できません。 かわりにデフォルトのエンコーディングを使用し、警告を発生させます。 </p>
 * @return string <p>デコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.php-entity-decode.php
 * @see htmlentities(), htmlspecialchars(), get_html_translation_table(), urldecode()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function html_entity_decode(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")'): string {}

/**
 * 適用可能な文字を全て HTML エンティティに変換する
 * <p>この関数は<code>htmlspecialchars()</code>と同じですが、 HTML エンティティと等価な意味を有する文字をHTMLエンティティに変換します。</p><p>もしデコード (逆の処理) をしたい場合、 <code>html_entity_decode()</code> を使用することができます。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $flags <p>以下のフラグを組み合わせたビットマスクです。 クォートや無効な符号単位シーケンス、そして文書型の扱いを指定します。 デフォルトは <i>ENT_COMPAT | ENT_HTML401</i> です。</p> <b>利用可能な <code>flags</code> 定数</b>   定数名 説明     <b><code>ENT_COMPAT</code></b> ダブルクオートは変換しますがシングルクオートは変換しません。   <b><code>ENT_QUOTES</code></b> シングルクオートとダブルクオートを共に変換します。   <b><code>ENT_NOQUOTES</code></b> シングルクオートとダブルクオートは共に変換されません。   <b><code>ENT_IGNORE</code></b>  無効な符号単位シーケンスを含む文字列を渡したときに、 空の文字列を返すのではなく無効な部分を切り捨てるようになります。 このフラグは使わないようにしましょう。 » セキュリティの問題が発生する可能性があります。    <b><code>ENT_SUBSTITUTE</code></b>  無効な符号単位シーケンスを含む文字列を渡したときに、 空の文字列を返すのではなく Unicode の置換文字に置き換えます。 UTF-8 の場合は U+FFFD、それ以外の場合は &amp;#FFFD; となります。    <b><code>ENT_DISALLOWED</code></b>  指定した文書型において無効な符号位置を、Unicode の代替文字である U+FFFD (UTF-8) あるいは &amp;#FFFD; で置き換えます。 これを設定しなければ、無効な符号位置をそのまま残します。 これは、外部コンテンツを埋め込んだ XML 文書を整形式に保つために有用です。    <b><code>ENT_HTML401</code></b>  コードを HTML 4.01 として処理します。    <b><code>ENT_XML1</code></b>  コードを XML 1 として処理します。    <b><code>ENT_XHTML</code></b>  コードを XHTML として処理します。    <b><code>ENT_HTML5</code></b>  コードを HTML 5 として処理します。
 * @param string $encoding <p>オプションの引数。文字を変換するときに使うエンコーディングを定義します。</p> <p>省略した場の <code>encoding</code> のデフォルト値は、varies PHP のバージョンによって異なります。 PHP 5.6.0 以降では、デフォルト値として default_charset の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、 <i>UTF-8</i> で、それより前のバージョンの PHP のデフォルト値は <i>ISO-8859-1</i> でした。</p> <p>技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、 default_charset の指定が入力とは違う文字セットになっている場合は、 適切な値を指定しておくことを強く推奨します。</p> <p>以下の文字セットをサポートします。</p> <b>サポートする文字セット</b>   文字セット エイリアス 説明     ISO-8859-1 ISO8859-1  西欧、Latin-1    ISO-8859-5 ISO8859-5  ほとんど使われないキリル文字セット (Latin/Cyrillic)。    ISO-8859-15 ISO8859-15  西欧、Latin-9 。Latin-1(ISO-8859-1) に欠けている ユーロ記号やフランス・フィンランドの文字を追加したもの。    UTF-8    ASCII 互換のマルチバイト 8 ビット Unicode 。    cp866 ibm866, 866  DOS 固有のキリル文字セット。    cp1251 Windows-1251, win-1251, 1251  Windows 固有のキリル文字セット。    cp1252 Windows-1252, 1252  西欧のための Windows 固有の文字セット。    KOI8-R koi8-ru, koi8r  ロシア語。    BIG5 950  繁体字中国語。主に台湾で使用されます。    GB2312 936  簡体字中国語。国の標準文字セットです。    BIG5-HKSCS    Big5 に香港の拡張を含めたもの。繁体字中国語。    Shift_JIS SJIS, SJIS-win, cp932, 932  日本語。    EUC-JP EUCJP, eucJP-win  日本語。    MacRoman    Mac OS で使われる文字セット。    <i>''</i>    空文字列を指定すると、 スクリプトのエンコーディング (Zend multibyte)、 default_charset、 そして現在のロケール (<code>nl_langinfo()</code> および <code>setlocale()</code> を参照ください) の順でエンコーディングを検出します。 この方法はおすすめしません。     <p><b>注意</b>:  これら以外の文字セットは理解できません。 かわりにデフォルトのエンコーディングを使用し、警告を発生させます。 </p>
 * @param bool $double_encode <p><code>double_encode</code> をオフにすると、PHP は既存の html エンティティをエンコードしません。 デフォルトでは、既存のエンティティも含めてすべてを変換します。</p>
 * @return string <p>エンコードした文字列を返します。</p><p>入力文字列の中に、指定した <code>encoding</code> で無効な符号単位シーケンスが含まれる場合は、 <b><code>ENT_IGNORE</code></b> あるいは <b><code>ENT_SUBSTITUTE</code></b> フラグが設定されていない限りは空文字列を返します。</p>
 * @link http://php.net/manual/ja/function.phpentities.php
 * @see html_entity_decode(), get_html_translation_table(), htmlspecialchars(), nl2br(), urlencode()
 * @since PHP 4, PHP 5, PHP 7
 */
function htmlentities(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")', bool $double_encode = TRUE): string {}

/**
 * 特殊文字を HTML エンティティに変換する
 * <p>文字の中には HTML において特殊な意味を持つものがあり、 それらの本来の値を表示したければ HTML の表現形式に変換してやらなければなりません。 この関数は、これらの変換を行った結果の文字列を返します。 入力文字列の中で名前付きエンティティに関連づけられたものを すべて変換する必要がある場合には、代わりに <code>htmlentities()</code> を使用してください。</p><p>この関数への入力文字列と最終的なドキュメントとの間で文字セットが一致している場合は、 この関数を使えば HTML ドキュメントに組み込むための準備として十分です。 しかし、この関数への入力の中に、最終的なドキュメントの文字セットでは符号化できない文字がある場合もあります。 そんな文字も (数値エンティティや名前つきエンティティなどで) 残したい場合は、 この関数と <code>htmlentities()</code> (これは、名前付きエンティティに対応する文字しか置換しません) を使うだけでは不十分です。そんな場合は <code>mb_encode_numericentity()</code> を使う必要があります。</p><p></p>
 * @param string $string <p>変換される文字列。</p>
 * @param int $flags <p>以下のフラグを組み合わせたビットマスクです。 クォートや無効な符号単位シーケンス、そして文書型の扱いを指定します。 デフォルトは <i>ENT_COMPAT | ENT_HTML401</i> です。</p> <b>利用可能な <code>flags</code> 定数</b>   定数名 説明     <b><code>ENT_COMPAT</code></b> ダブルクオートは変換しますがシングルクオートは変換しません。   <b><code>ENT_QUOTES</code></b> シングルクオートとダブルクオートを共に変換します。   <b><code>ENT_NOQUOTES</code></b> シングルクオートとダブルクオートは共に変換されません。   <b><code>ENT_IGNORE</code></b>  無効な符号単位シーケンスを含む文字列を渡したときに、 空の文字列を返すのではなく無効な部分を切り捨てるようになります。 このフラグは使わないようにしましょう。 » セキュリティの問題が発生する可能性があります。    <b><code>ENT_SUBSTITUTE</code></b>  無効な符号単位シーケンスを含む文字列を渡したときに、 空の文字列を返すのではなく Unicode の置換文字に置き換えます。 UTF-8 の場合は U+FFFD、それ以外の場合は &amp;#xFFFD; となります。    <b><code>ENT_DISALLOWED</code></b>  指定した文書型において無効な符号位置を、Unicode の代替文字である U+FFFD (UTF-8) あるいは &amp;#xFFFD; で置き換えます。 これを設定しなければ、無効な符号位置をそのまま残します。 これは、外部コンテンツを埋め込んだ XML 文書を整形式に保つために有用です。    <b><code>ENT_HTML401</code></b>  コードを HTML 4.01 として処理します。    <b><code>ENT_XML1</code></b>  コードを XML 1 として処理します。    <b><code>ENT_XHTML</code></b>  コードを XHTML として処理します。    <b><code>ENT_HTML5</code></b>  コードを HTML 5 として処理します。
 * @param string $encoding <p>オプションの引数。文字を変換するときに使うエンコーディングを定義します。</p> <p>省略した場の <code>encoding</code> のデフォルト値は、varies PHP のバージョンによって異なります。 PHP 5.6.0 以降では、デフォルト値として default_charset の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、 <i>UTF-8</i> で、それより前のバージョンの PHP のデフォルト値は <i>ISO-8859-1</i> でした。</p> <p>技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、 default_charset の指定が入力とは違う文字セットになっている場合は、 適切な値を指定しておくことを強く推奨します。</p> <p>この関数を使ううえでは <i>ISO-8859-1</i> と <i>ISO-8859-15</i>、 <i>UTF-8</i>、<i>cp866</i>、 <i>cp1251</i>、<i>cp1252</i> そして <i>KOI8-R</i> は事実上同等です。 <code>string</code> 自体がそのエンコーディングにおける有効な文字列である限り、 これらのエンコーディングでは <b>htmlspecialchars()</b> の影響が及ぶ文字がみな同じ位置にあるからです。</p> <p>以下の文字セットをサポートします。</p> <b>サポートする文字セット</b>   文字セット エイリアス 説明     ISO-8859-1 ISO8859-1  西欧、Latin-1    ISO-8859-5 ISO8859-5  ほとんど使われないキリル文字セット (Latin/Cyrillic)。    ISO-8859-15 ISO8859-15  西欧、Latin-9 。Latin-1(ISO-8859-1) に欠けている ユーロ記号やフランス・フィンランドの文字を追加したもの。    UTF-8    ASCII 互換のマルチバイト 8 ビット Unicode 。    cp866 ibm866, 866  DOS 固有のキリル文字セット。    cp1251 Windows-1251, win-1251, 1251  Windows 固有のキリル文字セット。    cp1252 Windows-1252, 1252  西欧のための Windows 固有の文字セット。    KOI8-R koi8-ru, koi8r  ロシア語。    BIG5 950  繁体字中国語。主に台湾で使用されます。    GB2312 936  簡体字中国語。国の標準文字セットです。    BIG5-HKSCS    Big5 に香港の拡張を含めたもの。繁体字中国語。    Shift_JIS SJIS, SJIS-win, cp932, 932  日本語。    EUC-JP EUCJP, eucJP-win  日本語。    MacRoman    Mac OS で使われる文字セット。    <i>''</i>    空文字列を指定すると、 スクリプトのエンコーディング (Zend multibyte)、 default_charset、 そして現在のロケール (<code>nl_langinfo()</code> および <code>setlocale()</code> を参照ください) の順でエンコーディングを検出します。 この方法はおすすめしません。     <p><b>注意</b>:  これら以外の文字セットは理解できません。 かわりにデフォルトのエンコーディングを使用し、警告を発生させます。 </p>
 * @param bool $double_encode <p><code>double_encode</code> をオフにすると、PHP は既存の html エンティティをエンコードしません。 デフォルトでは、既存のエンティティも含めてすべてを変換します。</p>
 * @return string <p>変換後の文字列を返します。</p><p>入力の <code>string</code> の中に エンコーディング <code>encoding</code> における無効なコードユニットシーケンスが含まれており、 かつ <b><code>ENT_IGNORE</code></b> フラグが設定されていなければ、 <b>htmlspecialchars()</b> は空文字列を返します。</p>
 * @link http://php.net/manual/ja/function.phpspecialchars.php
 * @see get_html_translation_table(), htmlspecialchars_decode(), strip_tags(), htmlentities(), nl2br()
 * @since PHP 4, PHP 5, PHP 7
 */
function htmlspecialchars(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")', bool $double_encode = TRUE): string {}

/**
 * 特殊な HTML エンティティを文字に戻す
 * <p>この関数は <code>htmlspecialchars()</code> の反対です。 特殊な HTML エンティティを文字に戻します。</p><p>変換されるエンティティは次のものです。<i>&amp;amp;</i>、 <i>&amp;quot;</i> (<b><code>ENT_NOQUOTES</code></b> が設定されていない場合)、 <i>&amp;#039;</i> (<b><code>ENT_QUOTES</code></b> が設定されている場合)、 <i>&amp;lt;</i> および <i>&amp;gt;</i>。</p>
 * @param string $string <p>デコードする文字列。</p>
 * @param int $flags <p>以下のフラグのビットマスクによる組み合わせで、クォートの扱いやドキュメントの形式を指定します。 デフォルトは <i>ENT_COMPAT | ENT_HTML401</i> です。</p> <b>使用可能な <code>flags</code> 定数</b>   定数名 説明     <b><code>ENT_COMPAT</code></b> ダブルクォートを変換し、シングルクォートはそのままにします。   <b><code>ENT_QUOTES</code></b> ダブルクォート、シングルクォートの両方を変換します。   <b><code>ENT_NOQUOTES</code></b> ダブルクォート、シングルクォートの両方をそのままにします。   <b><code>ENT_HTML401</code></b>  コードを HTML 4.01 として処理します。    <b><code>ENT_XML1</code></b>  コードを XML 1 として処理します。    <b><code>ENT_XHTML</code></b>  コードを XHTML として処理します。    <b><code>ENT_HTML5</code></b>  コードを HTML 5 として処理します。
 * @return string <p>デコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.phpspecialchars-decode.php
 * @see htmlspecialchars(), html_entity_decode(), get_html_translation_table()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function htmlspecialchars_decode(string $string, int $flags = ENT_COMPAT | ENT_HTML401): string {}

/**
 * 配列要素を文字列により連結する
 * <p>配列の要素を <code>glue</code> 文字列で連結します。</p><p><b>注意</b>:</p><p><b>implode()</b>は、歴史的な理由により、引数をどちら の順番でも受けつけることが可能です。しかし、 <code>explode()</code> との統一性の観点からは、 ドキュメントに記述された引数の順番を使用する方が混乱が少なくなるでしょう。</p>
 * @param string $glue <p>デフォルトは空文字列です。</p>
 * @param array $pieces <p>連結したい文字列の配列。</p>
 * @return string <p>すべての配列要素の順序を変えずに、各要素間に <code>glue</code> 文字列をはさんで 1 つの文字列にして返します。</p>
 * @link http://php.net/manual/ja/function.implode.php
 * @see explode(), preg_split(), http_build_query()
 * @since PHP 4, PHP 5, PHP 7
 */
function implode(string $glue, array $pieces): string {}

/**
 * implode() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>implode()</code>.</p>
 * @param string $glue <p>デフォルトは空文字列です。</p>
 * @param array $pieces <p>連結したい文字列の配列。</p>
 * @return string
 * @link http://php.net/manual/ja/function.join.php
 * @since PHP 4, PHP 5, PHP 7
 */
function join(string $glue, array $pieces): string {}

/**
 * 文字列の最初の文字を小文字にする
 * <p><code>str</code> の最初の文字がアルファベットであれば、 それを小文字にします。</p><p>「アルファベット」かどうかというのは現在のロケールにより決定されます。 たとえば、デフォルトの "C" ロケールでは、a ウムラウト (ä) は変換されません。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.lcfirst.php
 * @see ucfirst(), strtolower(), strtoupper(), ucwords()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function lcfirst(string $str): string {}

/**
 * 二つの文字列のレーベンシュタイン距離を計算する
 * <p>レーベンシュタイン距離は、<code>str1</code> を <code>str2</code> に変換するために置換、挿入、削除 しなければならない最小の文字数として定義されます。アルゴリズムの複雑さは、 <i>O(m&#42;n)</i> です。 ここで、<i>n</i> および <i>m</i> はそれぞれ <code>str1</code> および <code>str2</code> の長さです (O(max(n,m)&#42;&#42;3) となる <code>similar_text()</code> よりは良いですが、 まだかなりの計算量です)。</p><p>上記の最も簡単な形式では、この関数はパラメータとして引数を二つだけとり、 <code>str1</code> から <code>str2</code> に変換する際に必要な 挿入、置換、削除演算の数のみを計算します。</p><p>2 番目の形式では、挿入、置換、削除演算のコストを定義する 3 番目のパラメータが追加されます。この形式は 1 番目の形式より一般的で 汎用性が高いですが、効率的ではありません。</p>
 * @param string $str1 <p>レーベンシュタイン距離を計算する文字列のひとつ。</p>
 * @param string $str2 <p>レーベンシュタイン距離を計算する文字列のひとつ。</p>
 * @return int <p>この関数は、引数で指定した二つの文字列のレーベンシュタイン距離を返します。 引数文字列の一つが 255 文字の制限より長い場合に -1 を返します。</p>
 * @link http://php.net/manual/ja/function.levenshtein.php
 * @see soundex(), similar_text(), metaphone()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function levenshtein(string $str1, string $str2): int {}

/**
 * 数値に関するフォーマット情報を得る
 * <p>ローカルな数値および通貨フォーマット情報を有する連想配列を返します。</p>
 * @return array <p><b>localeconv()</b> は、 <code>setlocale()</code> で設定された現在のロケールに基づきデータを返します。 返される連想配列は、次のフィールドを有します。</p>   配列要素 説明     decimal_point 小数点文字   thousands_sep 千毎の区切り文字   grouping 数値集合を有する配列   int_curr_symbol 国際通貨記号 (すなわち、USD)   currency_symbol ローカルな通貨記号 (すなわち、$)   mon_decimal_point 通貨用の小数点文字   mon_thousands_sep 通貨用の千毎の区切り文字   mon_grouping 通貨集合を有する配列   positive_sign 正の値を表す記号   negative_sign 負の値を表す記号   int_frac_digits 国際分割桁   frac_digits ローカルな分割桁   p_cs_precedes  currency_symbol が正の値を前に置く場合に<b><code>TRUE</code></b>、後に置く場合に <b><code>FALSE</code></b>    p_sep_by_space  正の値から currency_symbol を1文字の空白で区切る場合に<b><code>TRUE</code></b>、 そうでない場合に<b><code>FALSE</code></b>    n_cs_precedes  currency_symbol が負の値を前に置く場合に<b><code>TRUE</code></b>、後に置く場合に <b><code>FALSE</code></b>    n_sep_by_space  負の値から currency_symbol を1文字の空白で区切る場合に<b><code>TRUE</code></b>、 そうでない場合に<b><code>FALSE</code></b>    p_sign_posn  <ul> <li>0 - 量および通貨記号を括る括弧</li> <li>1 - 量および通貨記号の前に置く符号文字列</li> <li>2 - 量および通貨記号の後に置く符号文字列</li> <li>3 - 通貨記号の直前に置く符号文字列</li> <li>4 - 通貨記号の直後に置く符号文字列</li> </ul>    n_sign_posn  <ul> <li>0 - 量および通貨記号を括る括弧</li> <li>1 - 量および通貨記号の前に置く符号文字列</li> <li>2 - 量および通貨記号の後に置く符号文字列</li> <li>3 - 通貨記号の直前に置く符号文字列</li> <li>4 - 通貨記号の直後に置く符号文字列</li> </ul>    <p><i>n_sign_posn</i> や <i>n_sign_posn</i> は、フォーマッタオプションの文字列を含みます。それぞれの数字は 上に一覧されている条件の 1 つを表します。</p><p>groupingフィールドには、グループ化する方法を表す数字を定義する配 列が含まれます。例えば、nl_NL ロケール用の通貨 groupingフィールド (UTF-8 モードでのユーロ記号) には、 3、3を値とする要素数2の配列が含まれます。この配列のより高い添字に は、より左側のグループに関するものが含まれます。 ある配列要素が、<b><code>CHAR_MAX</code></b> に等しい場合、 さらにグループは行われません。配列要素が0に等しい場合、 前の要素が使用されています。</p>
 * @link http://php.net/manual/ja/function.localeconv.php
 * @see setlocale()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function localeconv(): array {}

/**
 * 文字列の最初から空白 (もしくはその他の文字) を取り除く
 * <p>文字列の最初から空白 (もしくはその他の文字) を取り除きます。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $character_mask <p><code>character_mask</code>パラメータにより、削除する 文字を指定することも可能です。削除したい全ての文字をリストに してください。<i>..</i>を文字の範囲を指定する際に 使用可能です。</p>
 * @return string <p>この関数は文字列の最初から空白文字を取り除き、 取り除かれた文字列を返します。2番目のパラメータを指定しない場合、 <b>ltrim()</b>は以下の文字を削除します。</p><ul> <li>  " " (ASCII <i>32</i> (<i>0x20</i>)), 通常の空白。  </li> <li>  "\t" (ASCII <i>9</i> (<i>0x09</i>)), タブ。  </li> <li>  "\n" (ASCII <i>10</i> (<i>0x0A</i>)), 改行。  </li> <li>  "\r" (ASCII <i>13</i> (<i>0x0D</i>)), 復帰。  </li> <li>  "\0" (ASCII <i>0</i> (<i>0x00</i>)), <i>NUL</i> バイト。  </li> <li>  "\x0B" (ASCII <i>11</i> (<i>0x0B</i>)), 垂直タブ。  </li> </ul>
 * @link http://php.net/manual/ja/function.ltrim.php
 * @see trim(), rtrim()
 * @since PHP 4, PHP 5, PHP 7
 */
function ltrim(string $str, string $character_mask = NULL): string {}

/**
 * 文字列のmd5ハッシュ値を計算する
 * <p>» RSA Data Security, Inc. の MD5メッセージダイジェストアルゴリズム を用いて <code>str</code> の MD5 ハッシュ値を計算し、 そのハッシュを返します。</p>
 * @param string $str <p>文字列。</p>
 * @param bool $raw_output <p>オプションの<code>raw_output</code> に <b><code>TRUE</code></b> が指定された場合、 md5 ダイジェストが 16 バイト長のバイナリ形式で返されます。</p>
 * @return string <p>32 文字の 16 進数からなるハッシュを返します。</p>
 * @link http://php.net/manual/ja/function.md5.php
 * @see md5_file(), sha1_file(), crc32(), sha1(), hash(), crypt(), password_hash()
 * @since PHP 4, PHP 5, PHP 7
 */
function md5(string $str, bool $raw_output = FALSE): string {}

/**
 * 指定したファイルのMD5ハッシュ値を計算する
 * <p>» RSA Data Security, Inc. MD5 メッセージダイジェストアルゴリズムを用いて <code>filename</code>パラメータで指定したファイルの MD5ハッシュを計算し、そのハッシュを返します。 ハッシュは、32 文字の 16 進数です。</p>
 * @param string $filename <p>ファイル名</p>
 * @param bool $raw_output <p><b><code>TRUE</code></b> の場合、長さ 16 の生のバイナリフォーマットで ダイジェストを返します。</p>
 * @return string <p>成功時は文字列、そうでなければ <b><code>FALSE</code></b></p>
 * @link http://php.net/manual/ja/function.md5-file.php
 * @see md5(), sha1_file(), crc32()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function md5_file(string $filename, bool $raw_output = FALSE): string {}

/**
 * 文字列の metaphone キーを計算する
 * <p><code>str</code> の metaphone キーを計算します。</p><p><code>soundex()</code> と同様に metaphone は、 発音が似た単語について同じキーを作成します。metaphone は、 英語の発音の基本的ルールを知っているので、 <code>soundex()</code> よりも正確です。 metaphone が生成するキーは可変長です。</p><p>metaphone は、Lawrence Philips &lt;lphilips at verity dot com&gt; により 開発されました。["Practical Algorithms for Programmers", Binstock &amp; Rex, Addison Wesley, 1995] で解説されています。</p>
 * @param string $str <p>入力文字列。</p>
 * @param int $phonemes <p>このパラメータは、返される metaphone キーの長さを最大 <code>phonemes</code> 文字までに制限します。 デフォルト値の <i>0</i> は、無制限であることを意味します。</p>
 * @return string <p>metaphone キーを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.metaphone.php
 * @since PHP 4, PHP 5, PHP 7
 */
function metaphone(string $str, int $phonemes = 0): string {}

/**
 * 数値を金額文字列にフォーマットする
 * <p><b>money_format()</b> は、<code>number</code> をフォーマットして返します。この関数は C のライブラリ関数 <b>strfmon()</b> をラップしたものですが、一度に 変換できる数値がひとつだけであるという点が異なります。</p>
 * @param string $format <p>フォーマット指定の書式は以下の順になります。</p><ul> <li><p><i>%</i> 文字</p></li> <li><p>フラグ(オプション)</p></li> <li><p>フィールドの幅(オプション)</p></li> <li><p>左精度(オプション)</p></li> <li><p>右精度(オプション)</p></li> <li><p>変換文字(必須)</p></li> </ul> <p></p>フラグ <p>以下のフラグのうちひとつあるいは複数が使用可能です。</p>  <i>=</i>f   <p>文字 <i>=</i> の後に続く(シングルバイトの)文字 f が、数値埋め文字として使用されます。 デフォルトはスペース文字です。</p>   <i>^</i>   <p>グループ化文字(現在のロケールで定義されている)を使用しないようにします。</p>   <i>+</i> あるいは <i>(</i>   <p>正の数、負の数の書式を指定します。<i>+</i> が使用された場合、 <i>+</i> および <i>-</i> に該当する そのロケールの符号マークが使用されます。<i>(</i> が使用された場合、負の数は括弧で囲まれます。何も指定しなかった場合、 デフォルトは <i>+</i> です。</p>   <i>!</i>   <p>出力文字列から通貨記号を除きます。</p>   <i>-</i>   <p>指定した場合、すべてのフィールドを左詰め(右側に数値埋め文字が追加される) にします。デフォルトはこれと反対で、すべてのフィールドを右詰め (左側に数値埋め文字が追加される)にします。</p>   <p></p>フィールドの幅 <p></p>  w   <p>10 進の数値形式の文字列で、フィールドの幅の最小値を指定します。フラグ <i>-</i> が使用されていない限り、フィールドは 右詰めとなります。デフォルト値は 0(ゼロ) です。</p>   <p></p>左精度 <p></p>  <i>#</i>n   <p>10 進の基準文字(例: 小数点)より左側の最大の桁数 (n) を指定します。これは通常、 n より少ない桁数の数値に対して 数値埋め文字を使用することで、出力の桁位置をそろえるために 使用されます。実際の桁数が n より 大きい場合、この設定は無視されます。</p> <p><i>^</i> フラグでグループ化文字が抑止されていない場合、 (もし存在するなら)数値埋め文字が追加される前にグループ化文字が 挿入されます。グループ化文字は数値埋め文字には適用されません。 たとえ数値埋め文字が数字であったとしても同様です。</p> <p>位置あわせを確実にするため、出力中の数値の前後に表れる文字(たとえば 通貨記号や符号など)は、必要に応じて(正の数と負の数の長さをそろえるなど の理由で)スペース文字が付加されることがあります。</p>   <p></p> 右精度  <p></p>  <i>.</i>p   <p>ピリオドに続く数値(p) で、10 進の基準文字以降の桁数を指定します。 p の値が 0(ゼロ)であった場合、基準文字と それ以降の数値は省略されます。右精度が指定されていない場合、 使用中の現在のロケールからデフォルト値を検出します。 フォーマットされる数値は、フォーマット前にこの桁数に丸められます。</p>   <p></p> 変換文字  <p></p>  <i>i</i>   <p>ロケールの国際通貨フォーマット(例: USA ロケールでは USD 1,234.56)によってフォーマットします。</p>   <i>n</i>   <p>ロケールの国内通貨フォーマット(例: de_DE ロケールでは EU1.234,56) によってフォーマットします。</p>   <i>%</i>   <p><i>%</i> 文字を返します。</p>
 * @param float $number <p>フォーマットする数値。</p>
 * @return string <p>フォーマットした文字列を返します。 フォーマット文字列の前後の文字は、そのまま返されます。 <code>number</code> が非数値の場合は <b><code>NULL</code></b> を返し、 <b><code>E_WARNING</code></b> を発行します。</p>
 * @link http://php.net/manual/ja/function.money-format.php
 * @see setlocale(), sscanf(), sprintf(), printf(), number_format()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function money_format(string $format, float $number): string {}

/**
 * 改行文字の前に HTML の改行タグを挿入する
 * <p><code>string</code> に含まれるすべての改行文字 (<i>\r\n</i>、 <i>\n\r</i>、<i>\n</i> および <i>\r</i>) の前に <code>&lt;br /&gt;</code> あるいは <code>&lt;br&gt;</code> を挿入して返します。</p>
 * @param string $string <p>入力文字列。</p>
 * @param bool $is_xhtml <p>XHTML 準拠の改行を使うか否か。</p>
 * @return string <p>変更後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.nl2br.php
 * @see htmlspecialchars(), htmlentities(), wordwrap(), str_replace()
 * @since PHP 4, PHP 5, PHP 7
 */
function nl2br(string $string, bool $is_xhtml = TRUE): string {}

/**
 * 言語およびロケール情報を検索する
 * <p><b>nl_langinfo()</b> はロケールカテゴリの独立した要素にアクセスするために使用されます。 <code>localeconv()</code> と異なり、全ての要素を返します。 <b>nl_langinfo()</b> はいかなる特定要素も取得可能です。</p>
 * @param int $item <p><code>item</code> は要素の整数値、もしくは要素の定数名です。 以下は、使用される <code>item</code> に対する定数名と説明の一覧です。 これらの定数のいくつかは特定のロケールに対して未定義、 もしくは値がありません。</p> <b>nl_langinfo 定数</b>     定数 説明     <i>LC_TIME カテゴリの定数</i>   <b><code>ABDAY_(1-7)</code></b> 一週間中の n 番目の曜日名の略式表記   <b><code>DAY_(1-7)</code></b> 一週間中の n 番目の曜日名 (DAY_1 = 日曜日)   <b><code>ABMON_(1-12)</code></b> n 番目の月の名前の略式表記   <b><code>MON_(1-12)</code></b> n 番目の月の名前   <b><code>AM_STR</code></b> 午前を表す文字列   <b><code>PM_STR</code></b> 午後を表す文字列   <b><code>D_T_FMT</code></b>  <code>strftime()</code> で日時を表すためのフォーマット文字列として使用することが可能な文字列   <b><code>D_FMT</code></b>  <code>strftime()</code> で日付を表すためのフォーマット文字列として使用することが可能な文字列   <b><code>T_FMT</code></b>  <code>strftime()</code> で時刻を表すためのフォーマット文字列として使用することが可能な文字列   <b><code>T_FMT_AMPM</code></b>  <code>strftime()</code> でAM/PM付き 12 時間表記を表すためのフォーマット文字列として使用することが可能な文字列   <b><code>ERA</code></b> ロケール固有の元号付きフォーマット   <b><code>ERA_YEAR</code></b> ロケール固有の元号付きフォーマットでの年   <b><code>ERA_D_T_FMT</code></b> ロケール固有の元号付きフォーマットでの日時 (<code>strftime()</code> で使用可能な文字列)   <b><code>ERA_D_FMT</code></b> ロケール固有の元号付きフォーマットでの日付 (<code>strftime()</code> で使用可能な文字列)   <b><code>ERA_T_FMT</code></b> ロケール固有の元号付きフォーマットでの時刻 (<code>strftime()</code> で使用可能な文字列)   <i>LC_MONETARY カテゴリの定数</i>   <b><code>INT_CURR_SYMBOL</code></b> 国際通貨記号   <b><code>CURRENCY_SYMBOL</code></b> 地域通貨記号   <b><code>CRNCYSTR</code></b>  <b><code>CURRENCY_SYMBOL</code></b> と同じ値   <b><code>MON_DECIMAL_POINT</code></b> 小数点文字   <b><code>MON_THOUSANDS_SEP</code></b> 1000 単位桁区切り (3 桁ごとのグループ化) の区切り文字   <b><code>MON_GROUPING</code></b> 'grouping' と同じ   <b><code>POSITIVE_SIGN</code></b> 正値の表示に使用される記号   <b><code>NEGATIVE_SIGN</code></b> 負値の表示に使用される記号   <b><code>INT_FRAC_DIGITS</code></b> 国際的な方法で表現する際の小数点以下の桁数   <b><code>FRAC_DIGITS</code></b> 地域的な方法で表現する際の小数点以下の桁数   <b><code>P_CS_PRECEDES</code></b>  <b><code>CURRENCY_SYMBOL</code></b> の前に正値がある場合 1 を返す   <b><code>P_SEP_BY_SPACE</code></b>  <b><code>CURRENCY_SYMBOL</code></b> と正値がスペースで区切られる場合 1 を返す   <b><code>N_CS_PRECEDES</code></b>  <b><code>CURRENCY_SYMBOL</code></b> の前に負値がある場合 1 を返す   <b><code>N_SEP_BY_SPACE</code></b>  <b><code>CURRENCY_SYMBOL</code></b> と負値がスペースで区切られる場合 1 を返す   <b><code>P_SIGN_POSN</code></b>  <ul> <li>  量および <b><code>CURRENCY_SYMBOL</code></b> を括弧で括る場合、0 を返す  </li> <li>  量および <b><code>CURRENCY_SYMBOL</code></b> の前に符号文字列を置く場合、1 を返す  </li> <li>  量および <b><code>CURRENCY_SYMBOL</code></b> の後に符号文字列を置く場合、2 を返す  </li> <li>  <b><code>CURRENCY_SYMBOL</code></b> の直前に符号文字列を置く場合、3 を返す  </li> <li>  <b><code>CURRENCY_SYMBOL</code></b> の直後に符号文字列を置く場合、4 を返す  </li> </ul>    <b><code>N_SIGN_POSN</code></b>   <i>LC_NUMERIC カテゴリの定数</i>   <b><code>DECIMAL_POINT</code></b> 小数点文字   <b><code>RADIXCHAR</code></b>  <b><code>DECIMAL_POINT</code></b> と同じ値   <b><code>THOUSANDS_SEP</code></b> 1000 単位桁区切り (3 桁ごとのグループ化) の区切り文字   <b><code>THOUSEP</code></b>  <b><code>THOUSANDS_SEP</code></b> と同じ値   <b><code>GROUPING</code></b>     <i>LC_MESSAGES カテゴリの定数</i>   <b><code>YESEXPR</code></b>  <i>"はい"</i> の入力にマッチさせるための正規表現   <b><code>NOEXPR</code></b>  <i>"いいえ"</i> の入力にマッチさせるための正規表現   <b><code>YESSTR</code></b>  <i>"はい"</i> のための出力文字列   <b><code>NOSTR</code></b>  <i>"いいえ"</i> のための出力文字列   <i>LC_CTYPE カテゴリの定数</i>   <b><code>CODESET</code></b> 文字エンコーディング名の文字列を返す
 * @return string <p>要素を文字列で返します。<code>item</code> が有効でない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.nl-langinfo.php
 * @see setlocale(), localeconv()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function nl_langinfo(int $item): string {}

/**
 * 数字を千位毎にグループ化してフォーマットする
 * <p>この関数は 1 つか 2 つもしくは 4 つのパラメータを受け取ります (3 つはありません) :</p><p>パラメータが 1 つだけ渡された場合、 <code>number</code> は千位毎にカンマ (",") が追加され、 小数なしでフォーマットされます。</p><p>パラメータが 2 つ渡された場合、<code>number</code> は <code>decimals</code> 桁の小数の前にドット (".") 、 千位毎にカンマ (",") が追加されてフォーマットされます。</p><p>パラメータが 4 つ全て渡された場合、<code>number</code> はドット (".") の代わりに <code>dec_point</code> が <code>decimals</code> 桁の小数の前に、千位毎にカンマ (",") の代わりに <code>thousands_sep</code> が追加されてフォーマットされます。</p>
 * @param float $number <p>フォーマットする数値。</p>
 * @param int $decimals <p>小数点以下の桁数。</p>
 * @param string $dec_point <p>小数点を表す区切り文字。</p>
 * @param string $thousands_sep <p>千位毎の区切り文字。</p>
 * @return string <p><code>number</code> をフォーマットした結果を返します。</p>
 * @link http://php.net/manual/ja/function.number-format.php
 * @see money_format(), sprintf(), printf(), sscanf()
 * @since PHP 4, PHP 5, PHP 7
 */
function number_format(float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ","): string {}

/**
 * 文字の ASCII 値を返す
 * <p><code>string</code> の先頭文字の ASCII 値を返します。</p><p>この関数は <code>chr()</code> と逆の動作をします。</p>
 * @param string $string <p>文字。</p>
 * @return int <p>ASCII 値を返します。</p>
 * @link http://php.net/manual/ja/function.ord.php
 * @see chr()
 * @since PHP 4, PHP 5, PHP 7
 */
function ord(string $string): int {}

/**
 * 文字列を処理し、変数に代入する
 * <p>URL 経由で渡されるクエリ文字列と同様に <code>encoded_string</code> を処理し、現在のスコープに変数をセットします。 (or in the array if <code>result</code> is provided)</p>
 * @param string $encoded_string <p>入力文字列。</p>
 * @param array $result <p>2 番目の引数 <code>result</code> が指定された場合、 変数は、代わりに配列の要素としてこの変数に保存されます。</p>  <b>警告</b> <p>Using this function without the <code>result</code> parameter is highly <i>DISCOURAGED</i> and <i>DEPRECATED</i> as of PHP 7.2.</p> <p>Dynamically setting variables in function's scope suffers from exactly same problems as register_globals.</p> <p>Read section on security of Using Register Globals explaining why it is dangerous.</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.parse-str.php
 * @see parse_url(), pathinfo(), http_build_query(), urldecode()
 * @since PHP 4, PHP 5, PHP 7
 */
function parse_str(string $encoded_string, array &$result = NULL): void {}

/**
 * フォーマット済みの文字列を出力する
 * <p><code>format</code> にしたがって、出力を生成します。</p>
 * @param string $format <p><code>format</code> についての説明は <code>sprintf()</code> を参照ください。</p>
 * @param mixed $args
 * @param mixed $_
 * @return int <p>出力した文字列の長さを返します。</p>
 * @link http://php.net/manual/ja/function.printf.php
 * @see print, sprintf(), vprintf(), sscanf(), fscanf(), flush()
 * @since PHP 4, PHP 5, PHP 7
 */
function printf(string $format, $args = NULL, $_ = NULL): int {}

/**
 * quoted-printable 文字列を 8 ビット文字列に変換する
 * <p>この関数は、quoted printable 文字列をデコードし、 8 ビットバイナリ文字列を返します (» RFC2821 の section 4.5.2 ではなく » RFC2045 の section 6.7 によれば、付随するピリオドは行の開始から削除されません) 。</p><p>この関数は <code>imap_qprint()</code> に似ていますが、 動作に IMAP モジュールを必要としないという違いがあります。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>8 ビットバイナリ文字列を返します。</p>
 * @link http://php.net/manual/ja/function.quoted-printable-decode.php
 * @since PHP 4, PHP 5, PHP 7
 */
function quoted_printable_decode(string $str): string {}

/**
 * 8 ビット文字列を quoted-printable 文字列に変換する
 * <p>» RFC2045 の section 6.7 に従って作成した quoted printable 文字列を返します。</p><p>この関数は <code>imap_8bit()</code> に似ていますが、 動作に IMAP モジュールを必要としないという違いがあります。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>エンコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.quoted-printable-encode.php
 * @see quoted_printable_decode()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function quoted_printable_encode(string $str): string {}

/**
 * メタ文字をクォートする
 * <p>文字列 <code>str</code> について、</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>メタ文字をクォートした文字列を返します。 空文字を <code>str</code> に渡した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.quotemeta.php
 * @see addslashes(), addcslashes(), htmlentities(), htmlspecialchars(), nl2br(), stripslashes(), stripcslashes(), ereg(), preg_quote()
 * @since PHP 4, PHP 5, PHP 7
 */
function quotemeta(string $str): string {}

/**
 * 文字列の最後から空白 (もしくはその他の文字) を取り除く
 * <p>この関数は文字列 <code>str</code> の最後から空白文字 (あるいはその他の文字) を取り除き、 取り除かれた文字列を返します。</p><p>2 番目のパラメータを指定しない場合、 <b>rtrim()</b> は以下の文字を削除します。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $character_mask <p><code>character_mask</code> パラメータにより、 削除する文字を指定することも可能です。 削除したい全ての文字をリストにしてください。<i>..</i> を文字の範囲を指定する際に使用可能です。</p>
 * @return string <p>変更後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.rtrim.php
 * @see trim(), ltrim()
 * @since PHP 4, PHP 5, PHP 7
 */
function rtrim(string $str, string $character_mask = NULL): string {}

/**
 * ロケール情報を設定する
 * <p>ロケール情報を設定します。</p>
 * @param int $category <p><code>category</code>は、名前付きの定数(または文字列)であり、 ロケール設定により影響を受ける関数のカテゴリを指定します。</p><ul> <li>  <b><code>LC_ALL</code></b> 以下のものすべて  </li> <li>  <b><code>LC_COLLATE</code></b> 文字列の比較用。<code>strcoll()</code> 参照  </li> <li>  <b><code>LC_CTYPE</code></b> 文字の分類と変換。たとえば <code>strtoupper()</code>  </li> <li>  <b><code>LC_MONETARY</code></b> <code>localeconv()</code> 用  </li> <li>  <b><code>LC_NUMERIC</code></b> 数字の区切り文字用(<code>localeconv()</code> も参照ください)  </li> <li>  <b><code>LC_TIME</code></b> 日時。<code>strftime()</code>でフォーマットに使用  </li> <li>  <b><code>LC_MESSAGES</code></b> システムの応答用(PHP が <i>libintl</i> とともにコンパイルされている場合のみ使用可能)  </li> </ul>
 * @param string $locale <p><code>locale</code>が <b><code>NULL</code></b> もしくは空の文字列 <i>""</i> の場合、ロケール名は上記のカテゴリと同じ名前の環境変数の値、 または環境変数 "LANG" からセットされます。</p> <p><code>locale</code> が <i>"0"</i> の場合、 ロケール設定は適用されず、単に現在の設定が返されます。</p> <p><code>locale</code> が配列もしくは追加のパラメータが続く場合、 それぞれの配列要素もしくはパラメータは成功するまで新規ロケールとしてセットされます。 これは、ロケールが異なるシステムで異なる名前を持っている、 もしくはロケールが利用できない場合のフォールバックを提供するといった場合に有用です。</p>
 * @param string $_ <p>(オプションの文字列あるいは配列で、ロケール設定が成功するまで続けます)</p>
 * @return string <p>現在の新しいロケールを返します。ロケール機能が未実装、 指定されたロケールが存在しない、カテゴリ名が無効などの場合は <b><code>FALSE</code></b> を返します。</p><p>また、カテゴリ名が無効の場合は警告メッセージが発生します。 カテゴリやロケール名は、 » RFC 1766 や » ISO 639 にあります。 ロケールの命名方式は、システムによって異なります。</p> <p><b>注意</b>:</p> <p><b>setlocale()</b> の戻り値は、 PHP が実行されているシステムに依存します。 システムの <i>setlocale</i> 関数が返す値を返すためです。</p>
 * @link http://php.net/manual/ja/function.setlocale.php
 * @since PHP 4, PHP 5, PHP 7
 */
function setlocale(int $category, string $locale, string $_ = NULL): string {}

/**
 * 文字列の sha1 ハッシュを計算する
 * <p>» US Secure Hash Algorithm 1 を使用して <code>str</code> の sha1 ハッシュを計算します。</p>
 * @param string $str <p>入力文字列。</p>
 * @param bool $raw_output <p>オプションの <code>raw_output</code> に <b><code>TRUE</code></b> が指定された場合、sha1 ダイジェストは 20 バイト長のバイナリ形式で返されます。 それ以外の場合は、返り値は 40 文字の 16 進数となります。</p>
 * @return string <p>sha1 ハッシュを文字列で返します。</p>
 * @link http://php.net/manual/ja/function.sha1.php
 * @see sha1_file(), crc32(), md5(), hash(), crypt(), password_hash()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function sha1(string $str, bool $raw_output = FALSE): string {}

/**
 * ファイルの sha1 ハッシュを計算する
 * <p>» US Secure Hash Algorithm 1 を使用して <code>filename</code> の sha1 ハッシュを計算し、そのハッシュを 返します。ハッシュは 40 文字の 16 進数となります。</p>
 * @param string $filename <p>ハッシュしたいファイルのファイル名。</p>
 * @param bool $raw_output <p><b><code>TRUE</code></b> を指定すると、長さ 20 のバイナリフォーマットで ダイジェストを返します。</p>
 * @return string <p>成功した場合に文字列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.sha1-file.php
 * @see sha1(), md5_file(), crc32()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function sha1_file(string $filename, bool $raw_output = FALSE): string {}

/**
 * 二つの文字列の間の類似性を計算する
 * <p>この関数は、Programming Classics: Implementing the World's Best Algorithms by Oliver (ISBN 0-131-00413-1) に記述されたように二つの文字列の間の類似性を計算します。 この実装は Oliver の擬似コードの様にスタックを使用せず、 プロセス全体の速度が改善されるかどうかにかかわらず再帰呼び出しを行うことに注意してください。 このアルゴリズムの複雑さは、O(N&#42;&#42;3) であることにも注意してください。 ただし、N は最も長い文字列の長さです。</p>
 * @param string $first <p>最初の文字列。</p>
 * @param string $second <p>次の文字列。</p>
 * @param float $percent <p>3 番目の引数としてリファレンスを渡すことにより、 <b>similar_text()</b> は類似性をパーセントで計算します。</p>
 * @return int <p>両方の文字列でマッチした文字の数を返します。</p>
 * @link http://php.net/manual/ja/function.similar-text.php
 * @see levenshtein(), soundex()
 * @since PHP 4, PHP 5, PHP 7
 */
function similar_text(string $first, string $second, float &$percent = NULL): int {}

/**
 * 文字列の soundex キーを計算する
 * <p><code>str</code> の soundex キーを計算します。</p><p>soundex キーには、似たような発音の単語に関して同じ soundex キーが生成されるという特性があります。 このため、発音は知っているが、スペルがわからない場合に、 データベースを検索することを容易にすることができます。 soundex 関数は、ある文字から始まる 4 文字の文字列を返します。</p><p>この soundex 関数についての説明は、Donald Knuth の "The Art Of Computer Programming, vol. 3: Sorting And Searching", Addison-Wesley (1973), pp. 391-392 にあります。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>soundex キーを文字列で返します。</p>
 * @link http://php.net/manual/ja/function.soundex.php
 * @see levenshtein(), metaphone(), similar_text()
 * @since PHP 4, PHP 5, PHP 7
 */
function soundex(string $str): string {}

/**
 * フォーマットされた文字列を返す
 * <p>フォーマット文字列 <code>format</code> に基づき生成された文字列を返します。</p>
 * @param string $format <p>フォーマット文字列は 0 個以上のディレクティブ（指示子） により構成されます。ディレクティブには、そのまま結果にコピーされる (<i>%</i> を除く) 通常の文字と<i>変換指定子 (conversion specifications)</i> があり、 取り出される際はどちらもそれ自身がパラメータとなります。このことは <b>sprintf()</b> の場合だけでなく <code>printf()</code> の場合も同様です。</p> <p>各変換指定子は、パーセント記号 (<i>%</i>) の後に これらの要素が一つ以上続いたものになります。</p><ol> <li>  オプションの<i>符号指定子</i>。これは、 数値で符号 (- あるいは +) を使用するよう指定します。 デフォルトでは、数値が負の場合の - 符号のみが使用されます。 この指定子により、正の数にも強制的に + 符号をつけることができます。  </li> <li>  オプションの<i>パディング指定子</i>。これは、 文字列が正しい長さになるまでどんな文字で埋めるかということを 指定します。これは空白かまたは <i>0</i> (文字 '0') のいずれかです。デフォルトでは空白で埋められます。 これ以外のパディング文字を指定するには、その文字の前に 単一引用符 (<i>'</i>) を置きます。 後述の例を参照ください。  </li> <li>  オプションの<i>アラインメント指定子</i>。これは、 結果を左寄せまたは右寄せにしたい場合に指定します。 デフォルトは右寄せです。ここで <i>-</i> 文字を指定すると左寄せとなります。  </li> <li>  オプションの数字。これは<i>表示幅指定子</i>です。 結果を（最低）何桁にするかを指定します。  </li> <li>  オプションの<i>精度指定子</i> (ピリオド (<i>.</i>) に続けてオプションで桁数指定文字列を書いたもの)。 これは、浮動小数点数に対して数字を何桁まで表示するかを指定します。 文字列に対して使用した場合は、これは切り捨て位置として働きます。 この文字数を超える文字を切り捨てられます。 さらに、数値の桁埋めに使う文字を指定することもできます。桁埋め文字は、ピリオドと数値の間に指定します。  </li> <li> <p><i>型指定子</i>。引数を何の型として扱うかを指定します。 指定できる型を以下に示します。</p> <ul> <li> <i>%</i> - パーセント文字。引数は不要です。 </li> <li> <i>b</i> - 引数を整数として扱い、 2 進数として表現します。 </li> <li> <i>c</i> - 引数を整数として扱い、その ASCII 値の文字として表現します。 </li> <li> <i>d</i> - 引数を整数として扱い、 10 進数として表現します。 </li> <li> <i>e</i> - 引数を科学記法として扱います (例 1.2e+2)。 精度の指定子は、PHP 5.2.1 以降では小数点以下の桁数を表します。 それより前のバージョンでは、有効数字の桁数 (ひとつ小さい値) を意味していました。 </li> <li> <i>E</i> - <i>%e</i> と同じですが、 大文字を使います (例 1.2E+2)。 </li> <li> <i>f</i> - 引数を double として扱い、 浮動小数点数として表現します。 </li> <li> <i>F</i> - 引数を float として扱い、 浮動小数点数として表現します (ロケールに依存しません)。 PHP 5.0.3 以降で使用可能です。 </li> <li> <i>g</i> - <i>%e</i> および <i>%f</i> の短縮形。 </li> <li> <i>G</i> - <i>%E</i> および <i>%f</i> の短縮形。 </li> <li> <i>o</i> - 引数を整数として扱い、 8 進数として表現します。 </li> <li> <i>s</i> - 引数を文字列として扱い、表現します。 </li> <li> <i>u</i> - 引数を整数として扱い、符号無しの 10 進数として表現します。 </li> <li> <i>x</i> - 引数を整数として扱い、16 進数として (小文字で)表現します。 </li> <li> <i>X</i> - 引数を整数として扱い、16 進数として (大文字で)表現します。 </li> </ul> </li> </ol> <p>変数を適切な型に強制することができます。</p> <b>型の処理</b>   型 指定子     <i>string</i> <i>s</i>   <i>integer</i>  <i>d</i>, <i>u</i>, <i>c</i>, <i>o</i>, <i>x</i>, <i>X</i>, <i>b</i>    <i>double</i>  <i>g</i>, <i>G</i>, <i>e</i>, <i>E</i>, <i>f</i>, <i>F</i>      <b>警告</b> <p>マルチバイト文字列と幅指定を組み合わせて使うと、予期せぬ結果になる可能性があります。</p>  <p>フォーマット文字列における引数の 番号付け/交換 をサポートしています。以下に例を示します。</p> <p><b>例1 引数の交換</b></p>  <code> &lt;&#63;php<br>$num = 5;<br>$location = 'tree';<br><br>$format = 'There are %d monkeys in the %s';<br>echo sprintf($format, $num, $location);<br>&#63;&gt;  </code>   この出力は、"There are 5 monkeys in the tree" のようになります。 ここで、フォーマット文字列が別のファイルにある場合を考えてみましょう。 これは、出力を国際化したりする場合に行われる可能性があります。 たとえばフォーマット文字列が次のように書き換えられたとすると、  <p><b>例2 引数の交換</b></p>  <code> &lt;&#63;php<br>$format = 'The %s contains %d monkeys';<br>echo sprintf($format, $num, $location);<br>&#63;&gt;  </code>   ここで、問題が発生します。フォーマット文字列における置換指示子の順番は、 コードにおける引数の順番と一致していません。 だからといってコードを変更するのではなく、 むしろ置換指示子が参照するフォーマット文字列のほうで指示を行う方が望ましいでしょう。 フォーマット文字列を次のように書き換えてみましょう。  <p><b>例3 引数の交換</b></p>  <code> &lt;&#63;php<br>$format = 'The %2$s contains %1$d monkeys';<br>echo sprintf($format, $num, $location);<br>&#63;&gt;  </code>   こうすることによるもうひとつの利点は、 同じ置換指示子を複数回使用する際にコードに引数を追加せずにすむことです。 例えば、次のようになります。  <p><b>例4 引数の交換</b></p>  <code> &lt;&#63;php<br>$format = 'The %2$s contains %1$d monkeys.<br>           That\'s a nice %2$s full of %1$d monkeys.';<br>echo sprintf($format, $num, $location);<br>&#63;&gt;  </code>   引数の交換を使うときには、 <i>位置指定子</i> <i>n$</i> をパーセント記号 (<i>%</i>) の直後に置かなければならず、 間に他の指定を入れてはいけません。次の例を示します。  <p><b>例5 桁埋め文字の指定</b></p>  <code> &lt;&#63;php<br>echo sprintf("%'.9d\n", 123);<br>echo sprintf("%'.09d\n", 123);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> ......123 000000123 </pre>    <p><b>例6 位置指定子と他の指定との共用</b></p>  <code> &lt;&#63;php<br>$format = 'The %2$s contains %1$04d monkeys';<br>echo sprintf($format, $num, $location);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> The tree contains 0005 monkeys </pre>    <p><b>注意</b>:</p> <p><b><code>PHP_INT_MAX</code></b> より大きい位置指定子を指定すると、 <b>sprintf()</b> は警告を発します。</p>   <b>警告</b> <p>型指定子 <i>c</i> は、パディングや幅指定を無視します。</p>
 * @param mixed $args
 * @param mixed $_
 * @return string <p>フォーマット文字列 <code>format</code> に基づき生成された文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.sprintf.php
 * @see printf(), sscanf(), fscanf(), vsprintf(), number_format(), date()
 * @since PHP 4, PHP 5, PHP 7
 */
function sprintf(string $format, $args = NULL, $_ = NULL): string {}

/**
 * フォーマット文字列に基づき入力を処理する
 * <p>関数 <b>sscanf()</b> は、<code>printf()</code> の入力版です。<b>sscanf()</b> は、文字列 <code>str</code> を読み込み、これを指定したフォーマット <code>format</code> に基づき解釈します。 このフォーマットは、<code>sprintf()</code>のマニュアルに記述されています。</p><p>フォーマット文字列の中のあらゆる空白文字は、入力文字列の中の 空白文字列にマッチします。つまり、フォーマット文字列の中にタブ文字 \t が含まれていても、それは入力中の半角スペースにマッチしてしまうということです。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $format <p><code>str</code> を解釈するフォーマット。 <code>sprintf()</code> のドキュメントにある説明と比べて、以下の違いがあります。</p><ul> <li> ロケールに対応していません。 </li> <li> <i>F</i>、<i>g</i>、<i>G</i> および <i>b</i> はサポートしていません。 </li> <li> <i>D</i> は十進数値を表します。 </li> <li> <i>i</i> は基数検出つきの整数値を表します。 </li> <li> <i>n</i> は処理する文字数を表します。 </li> <li> <i>s</i> stops reading at any whitespace character. </li> </ul>
 * @param mixed $_ <p>オプションで指定する参照渡しの変数に、 パースされた値が格納されます。</p>
 * @return mixed <p>この関数のパラメータが二つだけの場合、処理された値は配列として返されます。 それ以外の場合は、もしオプションのパラメータが渡されればこの関数は 割り当てられた値の数を返します。オプションのパラメータは 参照渡しにする必要があります。</p><p><code>format</code> で期待する部分文字列のほうが 実際に <code>str</code> に存在するものより多い場合は <i>-1</i> を返します。</p>
 * @link http://php.net/manual/ja/function.sscanf.php
 * @see fscanf(), printf(), sprintf()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function sscanf(string $str, string $format, &$_ = NULL) {}

/**
 * CSV 文字列をパースして配列に格納する
 * <p>CSV 形式の文字列入力のフィールドをパースして、 読み込んだフィールドの内容を配列で返します。</p><p><b>注意</b>:</p><p>この関数はロケール設定を考慮します。もし LC_CTYPE が例えば <i>en_US.UTF-8</i> の場合、 1 バイトエンコーディングの文字列は間違って読み込まれるかもしれません。</p>
 * @param string $input <p>パースする文字列。</p>
 * @param string $delimiter <p>フィールド区切り文字 (1 文字のみ)。</p>
 * @param string $enclosure <p>フィールド囲み文字 (1 文字のみ)。</p>
 * @param string $escape <p>エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ (<i>\</i>)。</p> <p><b>注意</b>:  Usually an <code>enclosure</code> character is escpaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <i>""</i> and <i>\"</i> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
 * @return array <p>読み込んだフィールドの内容を配列で返します。</p>
 * @link http://php.net/manual/ja/function.str-getcsv.php
 * @see fgetcsv()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function str_getcsv(string $input, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): array {}

/**
 * 大文字小文字を区別しない str_replace()
 * <p>この関数は、<code>subject</code> の中に現れるすべての <code>search</code>(大文字小文字を区別しない)を <code>replace</code> に置き換えた文字列あるいは配列を返します。 一般に、凝った置換ルールが必要ないのであれば、 <code>preg_replace()</code> で <i>i</i> 修正子を使用するかわりにこの関数を使用すべきです。</p>
 * @param mixed $search <p>探したい値。<i>needle (針)</i> と呼ばれることもあります。 配列を使えば、複数の値を指定することもできます。</p>
 * @param mixed $replace <p>見つかった <code>search</code> を置き換える値。 配列を使えば、複数の値を指定することもできます。</p>
 * @param mixed $subject <p>検索・置換の対象となる文字列あるいは配列。 <i>haystack (干し草の山)</i> と呼ばれることもあります。</p> <p><code>subject</code> が配列の場合は、そのすべての要素に 対して検索と置換が行われ、返される結果も配列となります。</p>
 * @param int $count <p>指定した場合は、マッチして置換が行われた箇所の個数がここに格納されます。</p>
 * @return mixed <p>置換した文字列あるいは配列を返します。</p>
 * @link http://php.net/manual/ja/function.str-ireplace.php
 * @see str_replace(), preg_replace(), strtr()
 * @since PHP 5, PHP 7
 */
function str_ireplace($search, $replace, $subject, int &$count = NULL) {}

/**
 * 文字列を固定長の他の文字列で埋める
 * <p>この関数は文字列 <code>input</code> の左、右または両側を指定した長さで埋めます。オプションの引数 <code>pad_string</code> が指定されていない場合は、 <code>input</code> は空白で埋められ、それ以外の場合は、 <code>pad_string</code> からの文字で制限まで埋められます。</p>
 * @param string $input <p>入力文字列。</p>
 * @param int $pad_length <p><code>pad_length</code> の値が負、 または入力文字列の長さ以下である場合、埋める操作は行われません。 <code>input</code> をそのまま返します。</p>
 * @param string $pad_string <p><b>注意</b>:</p> <p>必要とされる埋める文字数が <code>pad_string</code> の長さで均等に分割できない場合、<code>pad_string</code> は切り捨てられます。</p>
 * @param int $pad_type <p>オプションの引数 <code>pad_type</code> には、 <b><code>STR_PAD_RIGHT</code></b>, <b><code>STR_PAD_LEFT</code></b>, <b><code>STR_PAD_BOTH</code></b> を指定可能です。 <code>pad_type</code>が指定されない場合、 <b><code>STR_PAD_RIGHT</code></b> を仮定します。</p>
 * @return string <p>埋めた後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.str-pad.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function str_pad(string $input, int $pad_length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string {}

/**
 * 文字列を反復する
 * <p><code>input</code> を <code>multiplier</code> 回を繰り返した文字列を返します。</p>
 * @param string $input <p>繰り返す文字列。</p>
 * @param int $multiplier <p><code>input</code> を繰り返す回数。</p> <p><code>multiplier</code> は 0 以上でなければなりません。 <code>multiplier</code> が 0 に設定された場合、この関数は空文字を返します。</p>
 * @return string <p>繰り返した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.str-repeat.php
 * @see str_pad(), substr_count()
 * @since PHP 4, PHP 5, PHP 7
 */
function str_repeat(string $input, int $multiplier): string {}

/**
 * 検索文字列に一致したすべての文字列を置換する
 * <p>この関数は、<code>subject</code> の中の <code>search</code> を全て <code>replace</code> に置換します。</p><p>(正規表現のような) 技巧的な置換ルールを必要としない場合、 <code>preg_replace()</code> の代わりにこの関数を常用するべきです。</p>
 * @param mixed $search <p>探したい値。<i>needle (針)</i> と呼ばれることもあります。 配列を使えば、複数の値を指定することもできます。</p>
 * @param mixed $replace <p>見つかった <code>search</code> を置き換える値。 配列を使えば、複数の値を指定することもできます。</p>
 * @param mixed $subject <p>検索・置換の対象となる文字列あるいは配列。 <i>haystack (干し草の山)</i> と呼ばれることもあります。</p> <p><code>subject</code> が配列の場合、 <code>subject</code> の各エントリについて検索と置換が行われ、 返り値は同様に配列となります。</p>
 * @param int $count <p>指定した場合は、マッチして置換が行われた箇所の個数がここに格納されます。</p>
 * @return mixed <p>この関数は、置換後の文字列あるいは配列を返します。</p>
 * @link http://php.net/manual/ja/function.str-replace.php
 * @see str_ireplace(), substr_replace(), preg_replace(), strtr()
 * @since PHP 4, PHP 5, PHP 7
 */
function str_replace($search, $replace, $subject, int &$count = NULL) {}

/**
 * 文字列に rot13 変換を行う
 * <p>引数 <code>str</code> に対して ROT13 変換を施し、 その結果の文字列を返します。</p><p>ROT13 は、各文字をアルファベット順に 13 文字シフトさせ、 アルファベット以外の文字はそのままとするエンコードを行います。 エンコードとデコードは同じ関数で行われます。 引数にエンコードされた文字列を指定した場合には、元の文字列が返されます。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>指定した文字列を ROT13 変換した結果を返します。</p>
 * @link http://php.net/manual/ja/function.str-rot13.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function str_rot13(string $str): string {}

/**
 * 文字列をランダムにシャッフルする
 * <p><b>str_shuffle()</b> は文字列をシャッフルします。 考えられるすべての順列のうちのひとつを作成します。</p><p>この関数が生成する値は、暗号学的に安全ではありません。そのため、これを暗号として使ってはいけません。暗号学的に安全な値が必要な場合は、<code>random_int()</code> か <code>random_bytes()</code> あるいは <code>openssl_random_pseudo_bytes()</code> を使いましょう。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>シャッフルされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.str-shuffle.php
 * @see shuffle(), rand()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function str_shuffle(string $str): string {}

/**
 * 文字列を配列に変換する
 * <p>文字列を配列に変換します。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $split_length <p>分割した部分の最大長。</p>
 * @return array <p>オプションのパラメータ <code>split_length</code> が指定されている場合、 返される配列の各要素は、<code>split_length</code> の長さとなります。それ以外の場合、1 文字ずつ分割された配列となります。</p><p><code>split_length</code> が 1 より小さい場合に <b><code>FALSE</code></b> を返します。<code>split_length</code> が <code>string</code> の長さより大きい場合、文字列全体が 最初の(そして唯一の)要素となる配列を返します。</p>
 * @link http://php.net/manual/ja/function.str-split.php
 * @see chunk_split(), preg_split(), explode(), count_chars(), str_word_count()
 * @since PHP 5, PHP 7
 */
function str_split(string $string, int $split_length = 1): array {}

/**
 * 文字列に使用されている単語についての情報を返す
 * <p><code>string</code> に含まれる単語数を数えます。 オプションの <code>format</code> が指定されていない場合、 見つかった単語の数を整数値で返します。 <code>format</code> が指定されている場合は結果が配列で返され、 配列の内容は <code>format</code> に依存します。 <code>format</code> に設定できる値と対応する出力については 以下で示します。</p><p>この関数を使用するうえで、'単語' は「ロケールに依存したアルファベットから なる文字列で、その先頭以外の部分に "'" および "-" を含 めることができる」ものと定義されています。</p>
 * @param string $string <p>文字列。</p>
 * @param int $format <p>この関数の戻り値を設定します。現在サポートされている値は 以下のとおりです。</p><ul> <li>  0 - 見つかった単語の数を返します。  </li> <li>  1 - <code>string</code> の中に見つかった単語を含む 配列を返します。  </li> <li>  2 - 連想配列を返します。<code>string</code> の中での 単語の開始位置がキー、単語自体を対応する値となります。  </li> </ul>
 * @param string $charlist <p>'単語' とみなされる文字に追加する文字のリスト。</p>
 * @return mixed <p>選択した <code>format</code> に応じて、配列あるいは整数を返します。</p>
 * @link http://php.net/manual/ja/function.str-word-count.php
 * @see explode(), preg_split(), split(), count_chars(), substr_count()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function str_word_count(string $string, int $format = 0, string $charlist = NULL) {}

/**
 * 大文字小文字を区別しないバイナリセーフな文字列比較を行う
 * <p>大文字小文字を区別しないバイナリセーフな文字列比較を行います。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @return int <p><code>str1</code> が <code>str2</code> より小さい場合は負、<code>str1</code> が <code>str2</code> より大きい場合は正、等しい場合は 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strcasecmp.php
 * @see strcmp(), preg_match(), substr_compare(), strncasecmp(), stristr(), substr()
 * @since PHP 4, PHP 5, PHP 7
 */
function strcasecmp(string $str1, string $str2): int {}

/**
 * strstr() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>strstr()</code>.</p>
 * @param string $haystack <p>入力文字列。</p>
 * @param mixed $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param bool $before_needle <p><b><code>TRUE</code></b> にすると、<b>strstr()</b> の返り値は、<code>haystack</code> の中で最初に <code>needle</code> があらわれる箇所より前の部分となります (needle は含めません)。</p>
 * @return string
 * @link http://php.net/manual/ja/function.strchr.php
 * @since PHP 4, PHP 5, PHP 7
 */
function strchr(string $haystack, $needle, bool $before_needle = FALSE): string {}

/**
 * バイナリセーフな文字列比較
 * <p>この比較は大文字小文字を区別することに注意してください。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @return int <p><code>str1</code> が <code>str2</code> よりも小さければ &lt; 0 を、<code>str1</code>が <code>str2</code>よりも大きければ &gt; 0 を、 等しければ 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strcmp.php
 * @see strcasecmp(), preg_match(), substr_compare(), strncmp(), strstr(), substr()
 * @since PHP 4, PHP 5, PHP 7
 */
function strcmp(string $str1, string $str2): int {}

/**
 * ロケールに基づく文字列比較
 * <p>この比較は大文字小文字を区別すること、そして、 <code>strcmp()</code> とは異なり、 バイナリセーフではないことに注意してください。</p><p><b>strcoll()</b> は比較を行う際に現在のロケールを使用します。 ロケールが C または POSIX の場合、この関数は <code>strcmp()</code> と等価です。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @return int <p><code>str1</code> が <code>str2</code> より小さい場合に 0 未満の値、<code>str1</code> が <code>str2</code> より大きい場合に 0 より大きな値、 両者が等しい場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strcoll.php
 * @see preg_match(), strcmp(), strcasecmp(), substr(), stristr(), strncasecmp(), strncmp(), strstr(), setlocale()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function strcoll(string $str1, string $str2): int {}

/**
 * マスクにマッチしない最初のセグメントの長さを返す
 * <p><code>subject</code> において <code>mask</code> の文字がどれも含まれて<i>いない</i>最初のセグメントの長さを返します。</p><p><code>start</code> と <code>length</code> を省略した場合は、<code>subject</code> の全体を調べます。 これらのパラメータを指定した場合は、 <i>strcspn(substr($subject, $start, $length), $mask)</i> のようにするのと同じ動きになります (詳細は substr を参照ください)。</p>
 * @param string $subject <p>調べたい文字列。</p>
 * @param string $mask <p>許可しない文字をすべて含む文字列。</p>
 * @param int $start <p><code>subject</code> の中で調べ始める位置。</p> <p><code>start</code> に非負の値を指定した場合は、 <b>strcspn()</b> は、 <code>subject</code> の <code>start</code> 番目の文字から調べ始めます。 たとえば '<i>abcdef</i>' という文字列があったとすると、 <i>0</i> 番目の文字が '<i>a</i>' で <i>2</i> 番目の文字は '<i>c</i>' のようになります。</p> <p><code>start</code> に負の値を指定した場合は、 <b>strcspn()</b> は、 <code>subject</code> の後ろから <code>start</code> 番目の文字から調べ始めます。</p>
 * @param int $length <p><code>subject</code> の中での調べるセグメントの長さ。</p> <p><code>length</code> に非負の値を指定した場合は、 <code>subject</code> の開始位置から <code>length</code> 文字ぶんだけ調べます。</p> <p><code>length</code> に負の値を指定した場合は、 <code>subject</code> の開始位置から調べ始めて、 <code>subject</code> の末尾から <code>length</code> 文字目のところまで調べます。</p>
 * @return int <p><code>subject</code> の中で、 <code>mask</code> の文字をまったく<i>含まない</i> 最初のセグメントの長さを返します。</p> <p><b>注意</b>:</p> <p><code>start</code> を指定した場合は、その位置から長さを数え始めます。 <code>subject</code> の先頭から数えるわけではありません。</p>
 * @link http://php.net/manual/ja/function.strcspn.php
 * @see strspn()
 * @since PHP 4, PHP 5, PHP 7
 */
function strcspn(string $subject, string $mask, int $start = NULL, int $length = NULL): int {}

/**
 * 文字列から HTML および PHP タグを取り除く
 * <p>この関数は、指定した文字列 (<code>str</code>) から全ての NUL バイトと HTML および PHP タグを取り除きます。 この関数は、<code>fgetss()</code> 関数と同じタグ除去アルゴリズムを使用します。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $allowable_tags <p>オプションの2番目の引数により、取り除かないタグを指定できます。</p>  <p><b>注意</b>:</p> <p>HTML コメントや PHP タグも削除されるようになりました。この機能はハードコードされており、 <code>allowable_tags</code> で変更することはできません。</p>   <p><b>注意</b>:</p> <p>PHP 5.3.4 以降では、<code>allowable_tags</code> で使えるのは自己終了型でない XHTML タグだけになりました。 自己終了型の XHTML タグは無視されます。たとえば、 <i>&lt;br&gt;</i> と <i>&lt;br/&gt;</i> の両方を許可したい場合は、以下のようにしなければいけません。</p>   <code> &lt;&#63;php<br>strip_tags($input, '&lt;br&gt;');<br>&#63;&gt;  </code>
 * @return string <p>タグを除去した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.strip-tags.php
 * @see htmlspecialchars()
 * @since PHP 4, PHP 5, PHP 7
 */
function strip_tags(string $str, string $allowable_tags = NULL): string {}

/**
 * addcslashes() でクォートされた文字列をアンクォートする
 * <p>バックスラッシュを取り除いた文字列を返します。C言語と同様に <i>\n</i>, <i>\r</i> ..., 8進表現, 16進表現を認識します。</p>
 * @param string $str <p>元に戻したい文字列。</p>
 * @return string <p>元に戻した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.stripcslashes.php
 * @see addcslashes()
 * @since PHP 4, PHP 5, PHP 7
 */
function stripcslashes(string $str): string {}

/**
 * 大文字小文字を区別せずに文字列が最初に現れる位置を探す
 * <p>文字列 <code>haystack</code> の中で <code>needle</code> が最初に現れる位置を探します。</p><p><code>strpos()</code> と異なり、<b>stripos()</b> は大文字小文字を区別しません。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param string $needle <p><code>needle</code> は、 ひとつまたは複数の文字であることに注意しましょう。</p> <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param int $offset <p>指定すると、文字列内での検索開始位置がその位置になります。 負の数を指定すると、文字列の末尾からこの数だけ戻った場所から検索を開始します。</p>
 * @return int <p>needle が見つかった位置を、 <code>haystack</code> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。</p><p>needle が見つからない場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.stripos.php
 * @see mb_stripos(), strpos(), strrpos(), strripos(), stristr(), substr(), str_ireplace()
 * @since PHP 5, PHP 7
 */
function stripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * クォートされた文字列のクォート部分を取り除く
 * <p>クォートされた文字列を元に戻します。</p><p><b>注意</b>:</p><p>magic_quotes_sybase が on の場合はバックスラッシュは取り除かれず、そのかわりに 2 つの アポストロフィが 1 つに置き換えられます。</p><p><b>stripslashes()</b> の使用例は、PHP ディレクティブ magic_quotes_gpc が <i>on</i> (PHP 5.4 より前のバージョンでのデフォルト値) かつ、 データをエスケープして (データベースのような) ある場所に挿入していない場合です。 例えば、単純に HTML フォームからのデータを直接出力するような場合です。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>バックスラッシュが取り除かれた文字列を返します(<i>\' </i> が <i>'</i> になるなど)。 2 つ並んだバックスラッシュ (<i>\\</i>) は 1 つのバックスラッシュ (<i>\</i>) になります。</p>
 * @link http://php.net/manual/ja/function.stripslashes.php
 * @see addslashes(), get_magic_quotes_gpc()
 * @since PHP 4, PHP 5, PHP 7
 */
function stripslashes(string $str): string {}

/**
 * 大文字小文字を区別しない strstr()
 * <p><code>haystack</code> において <code>needle</code> が最初に見つかった位置を含めてそこから最後までを返します。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param mixed $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param bool $before_needle <p><b><code>TRUE</code></b> にすると、<b>stristr()</b> の返り値は、<code>haystack</code> の中で最初に <code>needle</code> があらわれる箇所より前の部分となります (needle は含めません)。</p>
 * @return string <p>マッチした部分文字列を返します。<code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.stristr.php
 * @see strstr(), strrchr(), stripos(), strpbrk(), preg_match()
 * @since PHP 4, PHP 5, PHP 7
 */
function stristr(string $haystack, $needle, bool $before_needle = FALSE): string {}

/**
 * 文字列の長さを得る
 * <p>与えられた <code>string</code> の長さを返します。</p>
 * @param string $string <p>長さを調べる文字列。</p>
 * @return int <p>成功した場合に <code>string</code> の長さ、 <code>string</code> が空の文字列だった場合に <i>0</i> を返します。</p>
 * @link http://php.net/manual/ja/function.strlen.php
 * @see count(), grapheme_strlen(), iconv_strlen(), mb_strlen()
 * @since PHP 4, PHP 5, PHP 7
 */
function strlen(string $string): int {}

/**
 * "自然順"アルゴリズムにより大文字小文字を区別しない文字列比較を行う
 * <p>この関数は、人間が行うような手法でアルファベットまたは数字の 文字列の順序を比較するアルゴリズムを実装します。この関数の動作は、 <code>strnatcmp()</code> に似ていますが、 比較が大文字小文字を区別しない違いがあります。 詳細な情報については、Martin Pool の » 自然順文字列比較 のページを参照ください。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @return int <p>他の文字列比較関数と同様に、この関数は、 <code>str1</code>が<code>str2</code> より小さい場合に &lt; 0、<code>str1</code>が <code>str2</code>より大きい場合に &gt; 0 、等しい場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strnatcasecmp.php
 * @see preg_match(), strcmp(), strcasecmp(), substr(), stristr(), strncasecmp(), strncmp(), strstr(), setlocale()
 * @since PHP 4, PHP 5, PHP 7
 */
function strnatcasecmp(string $str1, string $str2): int {}

/**
 * "自然順"アルゴリズムにより文字列比較を行う
 * <p>この関数は、人間が行うような手法でアルファベットまたは数字の 文字列の順序を比較するアルゴリズムを実装します。この手法は、"自然順" と言われます。 この比較は、大文字小文字を区別することに注意してください。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @return int <p>他の文字列比較関数と同様に、この関数は、 <code>str1</code> が <code>str2</code> より小さいに場合に &lt; 0、<code>str1</code> が <code>str2</code> より大きい場合に &gt; 0 、等しい場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strnatcmp.php
 * @see preg_match(), strcasecmp(), substr(), stristr(), strcmp(), strncmp(), strncasecmp(), strnatcasecmp(), strstr(), natsort(), natcasesort()
 * @since PHP 4, PHP 5, PHP 7
 */
function strnatcmp(string $str1, string $str2): int {}

/**
 * バイナリセーフで大文字小文字を区別しない文字列比較を、最初の n 文字について行う
 * <p>この関数は、<code>strcasecmp()</code> に似ていますが、 各文字列から比較する文字数(の上限)(<code>len</code>) を指定できるという違いがあります。どちらかの文字列が <code>len</code>より短い場合、その文字列の長さが比較時に使用されます。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @param int $len <p>比較する文字列の長さ。</p>
 * @return int <p><code>str1</code> が <code>str2</code> より短い場合に &lt; 0 を返し、<code>str1</code> が <code>str2</code> より大きい場合に &gt; 0、等しい場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strncasecmp.php
 * @see strncmp(), preg_match(), substr_compare(), strcasecmp(), stristr(), substr()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function strncasecmp(string $str1, string $str2, int $len): int {}

/**
 * 最初の n 文字についてバイナリセーフな文字列比較を行う
 * <p>この関数は <code>strcmp()</code> に似ていますが、 各文字列から(最大)文字数(<code>len</code>) を比較に使用するところが異なります。</p><p>比較は大文字小文字を区別することに注意してください。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>次の文字列。</p>
 * @param int $len <p>比較する文字数。</p>
 * @return int <p><code>str1</code> が <code>str2</code> より小さい場合に &lt; 0、<code>str1</code> が <code>str2</code> より大きい場合に &gt; 0 、等しい場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.strncmp.php
 * @see strncasecmp(), preg_match(), substr_compare(), strcmp(), strstr(), substr()
 * @since PHP 4, PHP 5, PHP 7
 */
function strncmp(string $str1, string $str2, int $len): int {}

/**
 * 文字列の中から任意の文字を探す
 * <p><b>strpbrk()</b> は、文字列 <code>haystack</code> から <code>char_list</code> を探します。</p>
 * @param string $haystack <p><code>char_list</code> を探す文字列。</p>
 * @param string $char_list <p>このパラメータは大文字小文字を区別します。</p>
 * @return string <p>見つかった文字から始まる文字列、あるいは見つからなかった場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.strpbrk.php
 * @see strpos(), strstr(), preg_match()
 * @since PHP 5, PHP 7
 */
function strpbrk(string $haystack, string $char_list): string {}

/**
 * 文字列内の部分文字列が最初に現れる場所を見つける
 * <p>文字列 <code>haystack</code> の中で、 <code>needle</code> が最初に現れる位置を探します。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param mixed $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param int $offset <p>指定すると、文字列内での検索開始位置がその位置になります。 負の数を指定すると、文字列の末尾からこの数だけ戻った場所から検索を開始します。</p>
 * @return int <p>needle が見つかった位置を、 <code>haystack</code> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。</p><p>needle が見つからない場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.strpos.php
 * @see stripos(), strrpos(), strripos(), strstr(), strpbrk(), substr(), preg_match()
 * @since PHP 4, PHP 5, PHP 7
 */
function strpos(string $haystack, $needle, int $offset = 0): int {}

/**
 * 文字列中に文字が最後に現れる場所を取得する
 * <p>この関数は、文字列 <code>haystack</code> の中で <code>needle</code> が最後に現れた位置から、 <code>haystack</code> の終わりまでを返します。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param mixed $needle <p><code>needle</code> がひとつ以上の文字を含んでいる場合は、 最初のもののみが使われます。この動作は、 <code>strstr()</code> とは異なります。</p> <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @return string <p>この関数は、部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.strrchr.php
 * @see strstr(), strrpos()
 * @since PHP 4, PHP 5, PHP 7
 */
function strrchr(string $haystack, $needle): string {}

/**
 * 文字列を逆順にする
 * <p><code>string</code> を逆順にして返します。</p>
 * @param string $string <p>逆順にしたい文字列。</p>
 * @return string <p>逆順にした文字列を返します。</p>
 * @link http://php.net/manual/ja/function.strrev.php
 * @since PHP 4, PHP 5, PHP 7
 */
function strrev(string $string): string {}

/**
 * 文字列中で、特定の(大文字小文字を区別しない)文字列が最後に現れた位置を探す
 * <p>文字列 <code>haystack</code> の中で、 <code>needle</code> が最後に現れる位置を探します。</p><p><code>strrpos()</code> と異なり、<b>strripos()</b> は大文字小文字を区別しません。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param string $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param int $offset <p>指定すると、文字列の開始位置からこの文字数だけ進んだところで検索を中止します。 負の値を指定すると、文字列の最後からこの文字数だけ戻ったところから逆向きに検索を開始します。</p>
 * @return int <p>needle が見つかった位置を、 <code>haystack</code> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。</p><p>needle が見つからない場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.strripos.php
 * @see strpos(), stripos(), strrpos(), strrchr(), stristr(), substr()
 * @since PHP 5, PHP 7
 */
function strripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * 文字列中に、ある部分文字列が最後に現れる場所を探す
 * <p>文字列 <code>haystack</code> の中で、 <code>needle</code> が最後に現れる位置を探します。</p>
 * @param string $haystack <p>検索を行う文字列。</p>
 * @param string $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param int $offset <p>指定すると、文字列の開始位置からこの文字数だけ進んだところで検索を中止します。 負の値を指定すると、文字列の最後からこの文字数だけ戻ったところから逆向きに検索を開始します。</p>
 * @return int <p>needle が見つかった位置を、 <code>haystack</code> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。</p><p>needle が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.strrpos.php
 * @see strpos(), stripos(), strripos(), strrchr(), substr()
 * @since PHP 4, PHP 5, PHP 7
 */
function strrpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * 指定したマスク内に含まれる文字からなる文字列の最初のセグメントの長さを探す
 * <p><code>subject</code> の中で、 <code>mask</code> 内の文字<i>だけ</i>を含む最初の部分の長さを返します。</p><p><code>start</code> と <code>length</code> を省略した場合は、<code>subject</code> 全体を調べます。 指定した場合は、<i>strspn(substr($subject, $start, $length), $mask)</i> (詳細は substr を参照ください) をコールするのと同じ働きをします。</p><p>たとえば、</p>
 * @param string $subject <p>調べたい文字列。</p>
 * @param string $mask <p>許可する文字の一覧。</p>
 * @param int $start <p><code>subject</code> の中で調べ始める位置。</p> <p><code>start</code> に非負の値を指定すると、 <b>strspn()</b> は <code>subject</code> の <code>start</code> 番目の位置から調査を始めます。 たとえば、文字列 '<i>abcdef</i>' において <i>0</i> 番目の位置にある文字は '<i>a</i>' で <i>2</i> 番目の位置にある文字は '<i>c</i>' のようになります。</p> <p><code>start</code> に負の値を指定すると、 <b>strspn()</b> は <code>subject</code> の最後から <code>start</code> 番目の位置から調査を始めます。</p>
 * @param int $length <p><code>subject</code> 内で調べる部分の長さ。</p> <p><code>length</code> に非負の値を指定すると、 <code>subject</code> の開始位置から <code>length</code> 文字ぶんの範囲を調査します。</p> <p><code>length</code> に負の値を指定すると、 <code>subject</code> の調査範囲は 開始位置から始まって <code>subject</code> の最後から <code>length</code> だけさかのぼったところまでとなります。</p>
 * @return int <p><code>subject</code> の中で、全て <code>mask</code> の中の文字からなる最初のセグメントの長さを返します。</p> <p><b>注意</b>:</p> <p><code>start</code> パラメータを設定した場合は、返される長さはその位置からのものとなります。 <code>subject</code> の先頭からの長さではありません。</p>
 * @link http://php.net/manual/ja/function.strspn.php
 * @see strcspn()
 * @since PHP 4, PHP 5, PHP 7
 */
function strspn(string $subject, string $mask, int $start = NULL, int $length = NULL): int {}

/**
 * 文字列が最初に現れる位置を見つける
 * <p><code>haystack</code> の中で <code>needle</code> が最初に現れる場所を含めてそこから文字列の終わりまでを返します。</p><p><b>注意</b>:</p><p>この関数は大文字小文字を区別することに注意してください。 大文字小文字を区別しない検索を行う場合は、<code>stristr()</code> を使用してください。</p><p><b>注意</b>:</p><p>もし特定の <code>haystack</code> に <code>needle</code> があるかどうかを調べるだけの場合、 より高速でメモリ消費も少ない <code>strpos()</code> を代わりに使用してください。</p>
 * @param string $haystack <p>入力文字列。</p>
 * @param mixed $needle <p><code>needle</code> が文字列でない場合は、 それを整数に変換し、その番号に対応する文字として扱います。</p>
 * @param bool $before_needle <p><b><code>TRUE</code></b> にすると、<b>strstr()</b> の返り値は、<code>haystack</code> の中で最初に <code>needle</code> があらわれる箇所より前の部分となります (needle は含めません)。</p>
 * @return string <p>部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.strstr.php
 * @see stristr(), strrchr(), strpos(), strpbrk(), preg_match()
 * @since PHP 4, PHP 5, PHP 7
 */
function strstr(string $haystack, $needle, bool $before_needle = FALSE): string {}

/**
 * 文字列をトークンに分割する
 * <p><b>strtok()</b> は文字列 (<code>str</code>) を 何らかの文字 <code>token</code> によって区切られている小さな文字列 (トークン) に分割します。 "This is an example string" のような文字列がある場合、 空白文字をトークンとするとこの文字列を個々の単語に分割することができます。</p><p>strtok は最初のコールの時のみ string 引数を使用することに注意してください。 strtok は、文字列のどこにいるのかの情報を保持しているため、 2回目以降のコールではトークンのみを必要とします。 最初からやりなおす場合や新しい文字列をトークンに分割する場合、 初期化するために再度string引数を指定してstrtokをコールします。 文字列は、引数の文字のどれかが見つかったはトークンに分割されます。</p>
 * @param string $str <p>より小さい文字列 (トークン) に分割する文字列。</p>
 * @param string $token <p><code>str</code> を分割する際に使用する区切り文字。</p>
 * @return string <p>文字列トークンを返します。</p>
 * @link http://php.net/manual/ja/function.strtok.php
 * @see split(), explode()
 * @since PHP 4, PHP 5, PHP 7
 */
function strtok(string $str, string $token): string {}

/**
 * 文字列を小文字にする
 * <p><code>string</code> のアルファベット部分をすべて小文字にして返します｡</p><p>「アルファベット部分」は現在のロケールにより決定されます。 つまり、たとえばデフォルトの「C」ロケールである場合は、 A ウムラウト (Ä) のような文字は変換されません。</p>
 * @param string $string <p>入力文字列。</p>
 * @return string <p>小文字に変換した文字列を返します。</p>
 * @link http://php.net/manual/ja/function.strtolower.php
 * @see strtoupper(), ucfirst(), ucwords(), mb_strtolower()
 * @since PHP 4, PHP 5, PHP 7
 */
function strtolower(string $string): string {}

/**
 * 文字列を大文字にする
 * <p><code>string</code> のアルファベット部分をすべて大文字にして返します｡</p><p>「アルファベット部分」は現在のロケールにより決定されます。 つまり、たとえばデフォルトの「C」ロケールである場合は、 a ウムラウト (ä) のような文字は変換されません。</p>
 * @param string $string <p>入力文字列。</p>
 * @return string <p>大文字にした文字列を返します。</p>
 * @link http://php.net/manual/ja/function.strtoupper.php
 * @see strtolower(), ucfirst(), ucwords(), mb_strtoupper()
 * @since PHP 4, PHP 5, PHP 7
 */
function strtoupper(string $string): string {}

/**
 * 文字の変換あるいは部分文字列の置換を行う
 * <p>引数を三つ渡した場合、この関数は <code>str</code> のコピーを返します。その際に、文字列中に <code>from</code> の各文字 (シングルバイト) があれば <code>to</code> の対応する文字に変換します。つまり、すべての <i>$from[$n]</i> が <i>$to[$n]</i> に置換されることになります。ここで <i>$n</i> は、どちらの引数でも共通に有効なオフセットです。</p><p><code>from</code> と <code>to</code> の長さが異なる場合、長い方の余分な文字は無視されます。 返される文字列の長さは、もとの <code>str</code> と同じになります。</p><p>引数を二つだけ渡す場合は、二番目の引数を <i>array('from' =&gt; 'to', ...)</i> 形式の配列にしなければなりません。 返される値は文字列で、もとの文字列中にある配列のキーと同じ部分を対応する値で置換したものとなります。 一番長いキーから順に調べます。一度部分文字列の置換を行うと、 置換後の文字列がさらに置換の対象となることはありません。</p><p>この場合は、配列のキーと値は任意の長さにすることができますが、キーを空にすることだけはできません。 さらに、返される文字列の長さはもとの <code>str</code> とは異なる可能性があります。 しかし、この関数が最も効率的に働くのは、すべてのキーが同じ長さである場合です。</p>
 * @param string $str <p>変換する文字列。</p>
 * @param string $from <p><code>to</code> に変換される文字列。</p>
 * @param string $to <p><code>from</code> を置換する文字列。</p>
 * @return string <p>変換後の文字列を返します。</p><p><code>replace_pairs</code> の中に空文字列 (<i>""</i>) のキーがある場合は <b><code>FALSE</code></b> を返します。 <code>str</code> がスカラー値でない場合は文字列への変換をせず、 警告を発して <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.strtr.php
 * @see str_replace(), preg_replace()
 * @since PHP 4, PHP 5, PHP 7
 */
function strtr(string $str, string $from, string $to): string {}

/**
 * 文字列の一部分を返す
 * <p>文字列 <code>string</code> の、<code>start</code> で指定された位置から <code>length</code> バイト分の文字列を返します。</p>
 * @param string $string <p>入力文字列。最低 1 文字以上を指定しなければなりません。</p>
 * @param int $start <p><code>start</code> が正の場合、返される文字列は、 <code>string</code> の 0 から数えて <code>start</code>番目から始まる文字列となります。 例えば、文字列'<i>abcdef</i>'において位置 <i>0</i>にある文字は、'<i>a</i>'であり、 位置<i>2</i>には'<i>c</i>'があります。</p> <p><code>start</code> が負の場合、返される文字列は、 <code>string</code>の後ろから数えて <code>start</code>番目から始まる文字列となります。</p> <p><code>string</code> の長さが <code>start</code> 文字より短い場合は <b><code>FALSE</code></b> が返されます。</p> <p></p> <p><b>例1 負の <code>start</code> の使用</b></p>  <code> &lt;&#63;php<br>$rest = substr("abcdef", -1);    // "f" を返す<br>$rest = substr("abcdef", -2);    // "ef" を返す<br>$rest = substr("abcdef", -3, 1); // "d" を返す<br>&#63;&gt;  </code>
 * @param int $length <p><code>length</code> が指定され、かつ正である場合、 返される文字列は <code>start</code> (<code>string</code> の長さに依存します) から数えて<code>length</code>文字数分となります。</p> <p><code>length</code> が指定され、かつ負である場合、 <code>string</code> の終端からその文字数分の文字が省略されます (<code>start</code> が負の場合は、 開始位置を算出したあとで)。 もし <code>start</code> が切り出し位置を超える場合、 <b><code>FALSE</code></b> が返されます。</p> <p><code>length</code> が指定され、かつ <i>0</i>、<b><code>NULL</code></b>、もしくは <b><code>FALSE</code></b> であれば、空の文字が返されます。</p> <p><code>length</code> を省略した場合は、 <code>start</code> の位置から文字列の最後までの部分文字列を返します。</p>  <p><b>例2 負の <code>length</code> の使用</b></p>  <code> &lt;&#63;php<br>$rest = substr("abcdef", 0, -1);  // "abcde" を返す<br>$rest = substr("abcdef", 2, -1);  // "cde" を返す<br>$rest = substr("abcdef", 4, -4);  // false を返す<br>$rest = substr("abcdef", -3, -1); // "de" を返す<br>&#63;&gt;  </code>
 * @return string <p><code>string</code> の一部を返します。失敗した場合に <b><code>FALSE</code></b> を返します。あるいは空文字列を返します。</p>
 * @link http://php.net/manual/ja/function.substr.php
 * @see strrchr(), substr_replace(), preg_match(), trim(), mb_substr(), wordwrap()
 * @since PHP 4, PHP 5, PHP 7
 */
function substr(string $string, int $start, int $length = NULL): string {}

/**
 * 指定した位置から指定した長さの 2 つの文字列について、バイナリ対応で比較する
 * <p><b>substr_compare()</b> は、<code>main_str</code> の <code>offset</code> 文字目以降の最大 <code>length</code> 文字を、<code>str</code> と比較します。</p>
 * @param string $main_str <p>比較したい最初の文字列。</p>
 * @param string $str <p>比較したい二番目の文字列。</p>
 * @param int $offset <p>比較を開始する位置。 負の値を指定した場合は、文字列の最後から数えます。</p>
 * @param int $length <p>比較する長さ。デフォルト値は、 <code>main_str</code> の長さから <code>offset</code> を引いたものと <code>str</code> の長さのうち、長いほうです。</p>
 * @param bool $case_insensitivity <p><code>case_insensitivity</code> が <b><code>TRUE</code></b> の場合、 大文字小文字を区別せずに比較します。</p>
 * @return int <p><code>main_str</code> の <code>offset</code> 以降が <code>str</code> より小さい場合に負の数、 <code>str</code> より大きい場合に正の数、 等しい場合に 0 を返します。<code>offset</code> が <code>main_str</code> の長さ以上であるか、あるいは <code>length</code> が設定されていて 1 未満である場合 (PHP 5.5.11 より前のバージョン)、<b>substr_compare()</b> は警告を表示して <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.substr-compare.php
 * @see strncmp()
 * @since PHP 5, PHP 7
 */
function substr_compare(string $main_str, string $str, int $offset, int $length = NULL, bool $case_insensitivity = FALSE): int {}

/**
 * 副文字列の出現回数を数える
 * <p><b>substr_count()</b> は、文字列 <code>haystack</code> の中での副文字列 <code>needle</code> の出現回数を返します。 <code>needle</code> は英大小文字を区別することに注意してください。</p><p><b>注意</b>:</p><p>この関数は重なり合う副文字列をカウントしません。以下の例を見てください !</p>
 * @param string $haystack <p>検索対象の文字列</p>
 * @param string $needle <p>検索する副文字列</p>
 * @param int $offset <p>開始位置のオフセット。 負の数を指定すると、文字列の末尾から数えます。</p>
 * @param int $length <p>指定したオフセット以降に副文字列で検索する最大長。 オフセットと長さの総和が <code>haystack</code> の長さよりも長い場合、警告が発生します。 負の数を指定すると、<code>haystack</code> の末尾から数えます。</p>
 * @return int <p>この関数は 整数 を返します。</p>
 * @link http://php.net/manual/ja/function.substr-count.php
 * @see count_chars(), strpos(), substr(), strstr()
 * @since PHP 4, PHP 5, PHP 7
 */
function substr_count(string $haystack, string $needle, int $offset = 0, int $length = NULL): int {}

/**
 * 文字列の一部を置換する
 * <p><b>substr_replace()</b>は、文字列 <code>string</code>の <code>start</code> および (オプションの) <code>length</code> パラメータで区切られた部分を <code>replacement</code> で指定した文字列に置換します。</p>
 * @param mixed $string <p>入力文字列。</p> <p>文字列の配列を指定することもでき、各文字列について順に置換を行います。 この場合、他のパラメータ <code>replacement</code>、<code>start</code> および <code>length</code> がスカラ値なら それを各入力文字列に順次適用し、配列なら各入力文字列に対応する要素の値を適用します。</p>
 * @param mixed $replacement <p>置換する文字列。</p>
 * @param mixed $start <p><code>start</code> が負ではない場合、置換は <code>string</code> で <code>start</code> 番目の文字から始まります。</p> <p><code>start</code> が負の場合、置換は <code>string</code> の終端から <code>start</code> 番目の文字から始まります。</p>
 * @param mixed $length <p>正の値を指定した場合、 <code>string</code> の置換される部分の長さを表します。 負の場合、置換を停止する位置が <code>string</code> の終端から何文字目であるかを表します。このパラメータが省略された場合、 デフォルト値は strlen(<code>string</code>)、すなわち、 <code>string</code> の終端まで置換することになります。 当然、もし <code>length</code> がゼロだったら、 この関数は <code>string</code> の最初から <code>start</code> の位置に <code>replacement</code> を挿入するということになります。</p>
 * @return mixed <p>結果の文字列を返します。もし、<code>string</code> が配列の場合、配列が返されます。</p>
 * @link http://php.net/manual/ja/function.substr-replace.php
 * @see str_replace(), substr()
 * @since PHP 4, PHP 5, PHP 7
 */
function substr_replace($string, $replacement, $start, $length = NULL) {}

/**
 * 文字列の先頭および末尾にあるホワイトスペースを取り除く
 * <p>この関数は <code>str</code> の最初および最後から空白文字を取り除き、 取り除かれた文字列を返します。2番目のパラメータを指定しない場合、 <b>trim()</b>は以下の文字を削除します。</p>
 * @param string $str <p>ホワイトスペースを取り除く <code>string</code></p>
 * @param string $character_mask <p><code>character_mask</code>パラメータにより、削除する 文字を指定することも可能です。削除したい全ての文字をリストに してください。<i>..</i>を文字の範囲を指定する際に 使用可能です。</p>
 * @return string <p>ホワイトスペースを取り除いた文字列</p>
 * @link http://php.net/manual/ja/function.trim.php
 * @see ltrim(), rtrim(), str_replace()
 * @since PHP 4, PHP 5, PHP 7
 */
function trim(string $str, string $character_mask = " \t\n\r\0\x0B"): string {}

/**
 * 文字列の最初の文字を大文字にする
 * <p><code>str</code> の最初の文字がアルファベットであれば、 それを大文字にします。</p><p>「アルファベット」かどうかというのは現在のロケールにより決定されます。 たとえば、デフォルトの "C" ロケールでは、a ウムラウト (ä) は変換されません。</p>
 * @param string $str <p>入力文字列。</p>
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.ucfirst.php
 * @see lcfirst(), strtolower(), strtoupper(), ucwords()
 * @since PHP 4, PHP 5, PHP 7
 */
function ucfirst(string $str): string {}

/**
 * 文字列の各単語の最初の文字を大文字にする
 * <p>文字がアルファベットの場合、<code>str</code> の各単語の最初の文字を大文字にしたものを返します。</p><p>単語の定義は、<code>delimiters</code> で指定した任意の文字 (デフォルトはスペース、フォームフィード、改行、キャリッジリターン、 水平タブ、垂直タブ) の直後にある、あらゆる文字からなる文字列です。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $delimiters <p>オプションの <code>delimiters</code> で、単語の区切り文字を指定します。</p>
 * @return string <p>変更後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.ucwords.php
 * @see strtoupper(), strtolower(), ucfirst(), mb_convert_case()
 * @since PHP 4, PHP 5, PHP 7
 */
function ucwords(string $str, string $delimiters = " \t\r\n\f\v"): string {}

/**
 * フォーマットされた文字列をストリームに書き込む
 * <p><code>format</code> によって作成された文字列を <code>handle</code> で指定したストリームに書き込みます。</p><p><code>fprintf()</code> と同様の動作をしますが、 可変引数ではなく引数の配列を受け取って処理します。</p>
 * @param resource $handle
 * @param string $format <p><code>format</code> については、 <code>sprintf()</code> のドキュメントで説明されています。</p>
 * @param array $args
 * @return int <p>出力された文字列の長さを返します。</p>
 * @link http://php.net/manual/ja/function.vfprintf.php
 * @see printf(), sprintf(), sscanf(), fscanf(), vsprintf(), number_format()
 * @since PHP 5, PHP 7
 */
function vfprintf($handle, string $format, array $args): int {}

/**
 * フォーマットされた文字列を出力する
 * <p><code>format</code>に基づき文字列フォーマットされた文字列を出力します (フォーマットは <code>sprintf()</code> のドキュメントに既述されています)。</p><p><code>printf()</code> と動作は同じですが、可変長の引数ではなく、 配列を引数として受け取ります。</p>
 * @param string $format <p><code>format</code> についての説明は <code>sprintf()</code> を参照ください。</p>
 * @param array $args
 * @return int <p>出力された文字列の長さを返します。</p>
 * @link http://php.net/manual/ja/function.vprintf.php
 * @see printf(), sprintf(), vsprintf()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function vprintf(string $format, array $args): int {}

/**
 * フォーマットされた文字列を返す
 * <p><code>sprintf()</code>と動作は同じですが、 可変長の引数ではなく配列を引数とします。</p>
 * @param string $format <p><code>format</code> についての説明は <code>sprintf()</code> を参照ください。</p>
 * @param array $args
 * @return string <p>(<code>sprintf()</code>のドキュメントに記述された) <code>format</code> に基づきフォーマットされた文字列として配列値を返します。</p>
 * @link http://php.net/manual/ja/function.vsprintf.php
 * @see sprintf(), vprintf()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function vsprintf(string $format, array $args): string {}

/**
 * 指定した文字数で文字列を分割する
 * <p>指定した文字数で、指定した文字を用いて文字列を分割します。</p>
 * @param string $str <p>入力文字列。</p>
 * @param int $width <p>文字列を分割するときの文字数。</p>
 * @param string $break <p>オプションのパラメータ <code>break</code> を用いて行を分割します。</p>
 * @param bool $cut <p><code>cut</code> を <b><code>TRUE</code></b> に設定すると、 文字列は常に指定した <code>width</code> でラップされます。このため、 指定した幅よりも長い単語がある場合には、分割されます (2 番目の例を参照ください)。 <b><code>FALSE</code></b> にすると、たとえ <code>width</code> が単語の長さより短かった場合でも、その単語を分割しません。</p>
 * @return string <p>受け取った文字列を指定した長さで分割したものを返します。</p>
 * @link http://php.net/manual/ja/function.wordwrap.php
 * @see nl2br(), chunk_split()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function wordwrap(string $str, int $width = 75, string $break = "\n", bool $cut = FALSE): string {}

