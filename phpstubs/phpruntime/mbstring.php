<?php



/**
 * 文字列が、指定したエンコーディングで有効なものかどうかを調べる
 * <p>そのバイトストリームが指定したエンコーディングで有効なものかどうかを調べます。 これは、いわゆる「不正なエンコーディングによる攻撃」を防ぐのに役立ちます。</p><p></p>
 * @param string $var <p>調べるバイトストリーム。省略した場合は、 リクエスト開始時からのすべての入力が対象となります。</p>
 * @param string $encoding <p>期待するエンコーディング。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-check-encoding.php
 * @since PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7
 */
function mb_check_encoding(string $var = NULL, string $encoding = 'mb_internal_encoding()'): bool {}

/**
 * Get a specific character
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $cp
 * @param string $encoding
 * @return string <p>Returns a specific character失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.mb-chr.php
 * @see mb_ord(), chr()
 * @since PHP 7 >= 7.2.0
 */
function mb_chr(int $cp, string $encoding = NULL): string {}

/**
 * 文字列に対してケースフォルディングを行う
 * <p><code>mode</code> で指定された方法で <code>string</code> に対してケースフォルディングを行います。</p>
 * @param string $str <p>変換される文字列。</p>
 * @param int $mode <p>変換モード。 <b><code>MB_CASE_UPPER</code></b>、 <b><code>MB_CASE_LOWER</code></b> あるいは <b><code>MB_CASE_TITLE</code></b> のいずれかです。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p><code>mode</code> で指定された方法で <code>string</code> に対してケースフォルディングを行った結果を返します。</p>
 * @link http://php.net/manual/ja/function.mb-convert-case.php
 * @see mb_strtolower(), mb_strtoupper(), strtolower(), strtoupper(), ucfirst(), ucwords()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mb_convert_case(string $str, int $mode, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 文字エンコーディングを変換する
 * <p>文字列 <code>str</code>の文字エンコーディングを、 オプションで指定した <code>from_encoding</code> から <code>to_encoding</code> に変換します。</p>
 * @param string $str <p>変換する文字列。</p>
 * @param string $to_encoding <p><code>str</code> の変換後の文字エンコーディング。</p>
 * @param mixed $from_encoding <p>変換前の文字エンコーディング名を指定します。 これは、配列またはカンマ区切りの文字列とすることが可能です。 <code>from_encoding</code> を指定しなかった場合は、内部文字エンコーディングを使用します。</p> <p> サポートされる文字エンコーディングを参照ください。</p>
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-convert-encoding.php
 * @see mb_detect_order()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_convert_encoding(string $str, string $to_encoding, $from_encoding  = 'mb_internal_encoding()'): string {}

/**
 * カナを("全角かな"、"半角かな"等に)変換する
 * <p>文字列 <code>str</code> に関して「半角」-「全角」変換を行います。 この関数は、日本語のみで使用可能です。</p>
 * @param string $str <p>変換される文字列。</p>
 * @param string $option <p>変換オプション。</p> <p>以下のオプションを組み合わせて指定します。</p> <b>使用可能な変換オプション</b>   オプション 意味     <i>r</i>  「全角」英字を「半角」に変換します。    <i>R</i>  「半角」英字を「全角」に変換します。    <i>n</i>  「全角」数字を「半角」に変換します。    <i>N</i>  「半角」数字を「全角」に変換します。    <i>a</i>  「全角」英数字を「半角」に変換します。    <i>A</i>  「半角」英数字を「全角」に変換します （"a", "A" オプションに含まれる文字は、U+0022, U+0027, U+005C, U+007Eを除く U+0021 - U+007E の範囲です）。    <i>s</i>  「全角」スペースを「半角」に変換します（U+3000 -&gt; U+0020）。    <i>S</i>  「半角」スペースを「全角」に変換します（U+0020 -&gt; U+3000）。    <i>k</i>  「全角カタカナ」を「半角カタカナ」に変換します。    <i>K</i>  「半角カタカナ」を「全角カタカナ」に変換します。    <i>h</i>  「全角ひらがな」を「半角カタカナ」に変換します。    <i>H</i>  「半角カタカナ」を「全角ひらがな」に変換します。    <i>c</i>  「全角カタカナ」を「全角ひらがな」に変換します。    <i>C</i>  「全角ひらがな」を「全角カタカナ」に変換します。    <i>V</i>  濁点付きの文字を一文字に変換します。"K", "H" と共に使用します。
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-convert-kana.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_convert_kana(string $str, string $option = "KV", string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 変数の文字コードを変換する
 * <p>エンコーディング <code>from_encoding</code> の変数 <code>vars</code> をエンコーディング <code>to_encoding</code> に変換します。</p><p><b>mb_convert_variables()</b> は、エンコーディング検出のために Array または Object の文字列を結合します。これは、 エンコーディング検出は短い文字列では失敗する傾向があるためです。このため、 1 つの配列またはオブジェクトで異なるエンコーディングを混ぜることはできません。</p>
 * @param string $to_encoding <p>文字列の変換後のエンコーディング。</p>
 * @param mixed $from_encoding <p><code>from_encoding</code> には配列またはカンマ区切りの文字列を指定し、 <code>from-coding</code> からエンコーディングの検出を試みます。 <code>from_encoding</code> が省略された場合、<i>detect_order</i> を使用します。</p>
 * @param mixed $vars <p><code>vars</code>(3番目以降の引数)は、変換する変数への リファレンスです。文字列、配列、オブジェクトを指定することが可能です。 <b>mb_convert_variables()</b> は全てのパラメータが 同じエンコーディングを有することを仮定します。</p>
 * @param mixed $_ <p>追加の変数。</p>
 * @return string <p>成功時に変換前の文字エンコーディングを返し、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-convert-variables.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_convert_variables(string $to_encoding, $from_encoding, &$vars, &$_ = NULL): string {}

/**
 * MIME ヘッダフィールドの文字列をデコードする
 * <p>エンコードされた MIME ヘッダの文字列 <code>str</code> をデコードします。</p>
 * @param string $str <p>デコードする文字列。</p>
 * @return string <p>内部文字エンコーディングでデコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-decode-mimeheader.php
 * @see mb_encode_mimeheader()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_decode_mimeheader(string $str): string {}

/**
 * HTML 数値エンティティを文字にデコードする
 * <p>文字列 <code>str</code> において指定した文字領域にある数値エンティティを変換し、 変換後の文字列を返します。</p>
 * @param string $str <p>デコードする文字列。</p>
 * @param array $convmap <p><code>convmap</code> は変換するコード領域を指定する配列です。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @param bool $is_hex
 * @return string <p>変換された文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-decode-numericentity.php
 * @see mb_encode_numericentity()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_decode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()', bool $is_hex = FALSE): string {}

/**
 * 文字エンコーディングを検出する
 * <p>文字列 <code>str</code> の文字エンコーディングを検出します。</p>
 * @param string $str <p>検出する文字列。</p>
 * @param mixed $encoding_list <p><code>encoding_list</code> は文字エンコーディングのリストで、 エンコーディング検出の順番を配列またはカンマ区切りのリストで指定します。</p> <p><code>encoding_list</code> が省略された場合、 detect_order が使用されます。</p>
 * @param bool $strict <p><code>strict</code> は、 厳格なエンコーディング検出を行うかどうかを指定します。 デフォルトは <b><code>FALSE</code></b> です。</p>
 * @return string <p>検出した文字エンコーディングを返します。 指定した文字列からエンコーディングを検出できなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-detect-encoding.php
 * @see mb_detect_order()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_detect_encoding(string $str, $encoding_list  = 'mb_detect_order()', bool $strict = FALSE): string {}

/**
 * 文字エンコーディング検出順序を設定あるいは取得する
 * <p>自動文字エンコーディング検出の順番を <code>encoding_list</code> に設定します。</p>
 * @param mixed $encoding_list <p><code>encoding_list</code> は、 配列またはカンマ区切りの文字エンコーディングのリストです。サポートされる文字エンコーディングを参照ください。</p> <p><code>encoding_list</code> が省略された場合は、 現在の文字エンコーディング検出順を配列で返します。</p> <p>この設定は、<code>mb_detect_encoding()</code> および <code>mb_send_mail()</code> に影響します。</p> <p><i>mbstring</i> が現在実装しているのは、 以下のエンコーディングを検出するフィルタです。 以下のエンコーディングにおいて無効なバイトシーケンスがあった場合、 エンコーディング検出は失敗します。</p>  <i>UTF-8</i>, <i>UTF-7</i>, <i>ASCII</i>, <i>EUC-JP</i>,<i>SJIS</i>, <i>eucJP-win</i>, <i>SJIS-win</i>, <i>JIS</i>, <i>ISO-2022-JP</i>  <p><i>ISO-8859-&#42;</i>の場合、<i>mbstring</i> は常に <i>ISO-8859-&#42;</i> として検出します。</p> <p><i>UTF-16</i>, <i>UTF-32</i>, <i>UCS2</i>, <i>UCS4</i> の場合、 エンコーディング検出は常に失敗します。</p>
 * @return mixed <p>検出順序を設定する場合は、成功した場合に <b><code>TRUE</code></b> を返し、失敗したときに <b><code>FALSE</code></b> を返します。</p><p>検出順序を取得する場合は、エンコーディングの配列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-detect-order.php
 * @see mb_internal_encoding(), mb_http_input(), mb_http_output(), mb_send_mail()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_detect_order($encoding_list  = 'mb_detect_order()') {}

/**
 * MIMEヘッダの文字列をエンコードする
 * <p>MIME ヘッダエンコーディング方式によって文字列 <code>str</code> をエンコードします。</p>
 * @param string $str <p>エンコードする文字列。 <code>mb_internal_encoding()</code> と同じエンコーディングにしなければいけません。</p>
 * @param string $charset <p><code>charset</code> は、<code>str</code> の変換後の文字セット名です。デフォルトは、現在の NLS 設定 (<i>mbstring.language</i>) によって決まります。</p>
 * @param string $transfer_encoding <p><code>transfer_encoding</code> は MIME エンコーディングの 方式を指定します。<i>"B"</i> (Base64) または <i>"Q"</i> (Quoted-Printable) のどちらかでなければなりません。 デフォルトは <i>"B"</i> です。</p>
 * @param string $linefeed <p><code>linefeed</code> は EOL (行末) のマーカで、 <b>mb_encode_mimeheader()</b> が行を折りたたむ (» RFC 用語で、 ある一定より長い行を複数行に分割することを言います。 分割する長さは、現在 74 文字に固定されています) 際に利用します。 デフォルトは <i>"\r\n"</i> (CRLF) です。</p>
 * @param int $indent <p>最初の行の字下げ (ヘッダで <code>str</code> の前におく文字数)。</p>
 * @return string <p>文字列を ASCII 表現に変換したものを返します。</p>
 * @link http://php.net/manual/ja/function.mb-encode-mimeheader.php
 * @see mb_decode_mimeheader()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_encode_mimeheader(string $str, string $charset = 'mb_language() によって決まる値', string $transfer_encoding = "B", string $linefeed = "\r\n", int $indent = 0): string {}

/**
 * 文字を HTML 数値エンティティにエンコードする
 * <p><code>str</code>の中で指定した文字コードを 文字コードから HTML 数値エンティティに変換します。</p>
 * @param string $str <p>エンコードする文字列。</p>
 * @param array $convmap <p><code>convmap</code> は、変換するコード領域を指定する配列です。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @param bool $is_hex
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-encode-numericentity.php
 * @see mb_decode_numericentity()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_encode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()', bool $is_hex = FALSE): string {}

/**
 * 既知のエンコーディング・タイプのエイリアスを取得
 * <p>既知の <code>encoding</code> タイプに関するエイリアスの配列を返します。</p>
 * @param string $encoding <p>エイリアスに関してチェックするエンコーディングタイプ。</p>
 * @return array <p>成功した場合、数値で索引がつけられたエンコーディング・エイリアスの配列を返し、 失敗した場合に <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.mb-encoding-aliases.php
 * @see mb_list_encodings()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function mb_encoding_aliases(string $encoding): array {}

/**
 * マルチバイト対応の正規表現マッチ
 * <p>マルチバイト対応の正規表現マッチを行います。</p>
 * @param string $pattern <p>検索パターン。</p>
 * @param string $string <p>検索文字列。</p>
 * @param array $regs <p><code>pattern</code> 内のカッコで囲まれた部分文字列にマッチするものが あった場合、第3引数 <code>regs</code> が指定されていると、 配列 <code>regs</code> の要素としてマッチ結果が格納されます。 マッチするものがなかった場合、<code>regs</code> は空の配列となります。</p> <p>$regs[1] には最初の左括弧で指定された部分文字列が入ります。 $regs[2] には2番目の左括弧で指定された部分文字列が入ります。 以下同様です。 $regs[0] にはマッチした文字列全体のコピーが入ります。</p>
 * @return int <p><code>string</code> 内に <code>pattern</code> にマッチする文字列があったらマッチした文字列のバイト長を返し、 マッチしなかった場合やエラーが起こった場合は <b><code>FALSE</code></b> を返します。</p><p>オプションのパラメータ <code>regs</code> が渡されなかった場合、 あるいはマッチした文字列の長さが <i>0</i> だった場合、 この関数は <i>1</i> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg.php
 * @see mb_regex_encoding(), mb_eregi()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg(string $pattern, string $string, array &$regs = NULL): int {}

/**
 * マルチバイト文字列が正規表現に一致するか調べる
 * <p>マルチバイト文字列に対する正規表現マッチングを行います。</p>
 * @param string $pattern <p>正規表現パターン。</p>
 * @param string $string <p>評価する文字列。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return bool <p><code>string</code> が正規表現 <code>pattern</code> に一致する場合に<b><code>TRUE</code></b> 、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-match.php
 * @see mb_regex_encoding(), mb_ereg()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_match(string $pattern, string $string, string $option = "msr"): bool {}

/**
 * マルチバイト文字列に正規表現による置換を行う
 * <p><code>string</code> から <code>pattern</code> にマッチする文字列を探し、 見つかった文字列を <code>replacement</code> で置換します。</p>
 * @param string $pattern <p>正規表現パターン。</p> <p>マルチバイト文字を <code>pattern</code> で使用することができます。</p>
 * @param string $replacement <p>置換文字列。</p>
 * @param string $string <p>調べたい文字列。</p>
 * @param string $option 検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。
 * @return string <p>成功した場合に結果の文字列、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-replace.php
 * @see mb_regex_encoding(), mb_eregi_replace()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr"): string {}

/**
 * マルチバイト文字列にコールバック関数を用いた正規表現による置換を行う
 * <p><code>string</code>から <code>pattern</code>にマッチする文字列を検索し、 一致した文字列を<code>callback</code>関数の出力で置換します。</p><p>この関数の動作は<code>mb_ereg_replace()</code>とほぼ同じですが、 <code>replacement</code>パラメータの代わりに <code>callback</code>を指定するところが異なります。</p>
 * @param string $pattern <p>正規表現パターン。</p> <p><code>pattern</code>ではマルチバイト文字列を使用可能です。</p>
 * @param callable $callback <p>コールバック関数で、 <code>subject</code>文字列で一致した要素を配列で 指定してコールされます。 このコールバック関数は、置換した文字列を返す必要があります。</p> <p>しばしば、 <b>mb_ereg_replace_callback()</b>の <code>callback</code>関数が必要となるのは一度だけである 場合があります。 この場合、 <b>mb_ereg_replace_callback()</b>をコールする際の コールバックに 匿名関数 を使用することができます。 このようにすることで、 コールに関する全ての情報を一つの場所に集約し、 他のどこでも使用されないコールバック関数の名前を 関数の名前空間にばらまかないですみます。</p>
 * @param string $string <p>チェックされる<code>string</code>。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return string <p>成功した際に <code>string</code>、 そうでない場合はエラー時に <b><code>FALSE</code></b> を 返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-replace-callback.php
 * @see mb_regex_encoding(), mb_ereg_replace()
 * @since PHP 5 >= 5.4.1, PHP 7
 */
function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr"): string {}

/**
 * 指定したマルチバイト文字列が正規表現に一致するか調べる
 * <p>指定したマルチバイト文字列に対するマルチバイト正規表現マッチングを行います。</p>
 * @param string $pattern <p>検索パターン。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return bool <p><b>mb_ereg_search()</b>は、マルチバイト文字列が正規表現に 一致するかどうか調べ、一致する場合に<b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。検索対象の文字列は、 <code>mb_ereg_search_init()</code> により設定します。 正規表現 <code>pattern</code> を省略した場合は、 前回のものを再利用します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search.php
 * @see mb_regex_encoding(), mb_ereg_search_init()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search(string $pattern = NULL, string $option = "ms"): bool {}

/**
 * 次の正規表現検索を開始する位置を取得する
 * <p>次の正規表現マッチングを開始する位置を返します。</p>
 * @return int <p><b>mb_ereg_search_getpos()</b> は、 <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code> で検索を開始する位置を返します。 位置は、文字列の先頭からのバイト数で表した値です。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-getpos.php
 * @see mb_regex_encoding(), mb_ereg_search_setpos()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_getpos(): int {}

/**
 * マルチバイト文字列が正規表現に一致する部分があるか調べる
 * <p>直近のマルチバイト正規表現マッチングの結果を取得します。</p>
 * @return array <p>直前の <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code> で一致した部分文字列を含む 配列を返します。一致する部分があった場合には、一致した部分文字列全体が 最初の要素に、最初の括弧でグループ化された部分が 2 番目の要素に、そして 2 番目の括弧でグループ化された部分が 3 番目の要素にといったようになります。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-getregs.php
 * @see mb_regex_encoding(), mb_ereg_search_init()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_getregs(): array {}

/**
 * マルチバイト正規表現検索用の文字列と正規表現を設定する
 * <p><b>mb_ereg_search_init()</b> は、マルチバイト対応の正規 表現検索において検索対象の文字列 <code>string</code> および正規表現 <code>pattern</code> を設定します。 この設定は、<code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code> で使用されます。</p>
 * @param string $string <p>検索文字列。</p>
 * @param string $pattern <p>検索パターン。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-init.php
 * @see mb_regex_encoding(), mb_ereg_search_regs()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_init(string $string, string $pattern = NULL, string $option = "msr"): bool {}

/**
 * 指定したマルチバイト文字列が正規表現に一致する部分の位置と長さを返す
 * <p>マルチバイト文字列の中で正規表現に一致した部分の位置と長さを配列で返します。</p><p>検索対象の文字列は、<code>mb_ereg_search_init()</code> により設定します。省略した場合は、前回のものが利用されます。</p>
 * @param string $pattern <p>検索パターン。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return array <p>ふたつの要素からなる配列を返します。最初の要素はオフセットをバイト単位で表したもので、 マッチしたのが検索文字列の先頭から何バイト目かを示します。 二番目の要素はマッチした部分の長さをバイト単位で表したものです。</p><p>エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-pos.php
 * @see mb_regex_encoding(), mb_ereg_search_init()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_pos(string $pattern = NULL, string $option = "ms"): array {}

/**
 * 指定したマルチバイト文字列が正規表現に一致する部分を取得する
 * <p>マルチバイト正規表現にマッチした部分を返します。</p>
 * @param string $pattern <p>検索パターン。</p>
 * @param string $option <p>検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。</p>
 * @return array <p><b>mb_ereg_search_regs()</b> は、マルチバイト文字列の 中に正規表現に一致する部分があるかどうか調べ、一致した場合にはそれを 配列で返します。配列の最初の要素には一致した部分文字列全体、2 番目の 要素は最初の括弧でグループ化された部分、3 番目の要素は2番目の括弧で グループ化された部分といったようになります。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-regs.php
 * @see mb_regex_encoding(), mb_ereg_search_init()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_regs(string $pattern = NULL, string $option = "ms"): array {}

/**
 * 次の正規表現検索を開始する位置を設定する
 * <p><b>mb_ereg_search_setpos()</b> は、 <code>mb_ereg_search()</code> で検索を開始する位置を設定します。</p>
 * @param int $position <p>設定する位置。負の値を指定すると、文字列の末尾から数えます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-ereg-search-setpos.php
 * @see mb_regex_encoding(), mb_ereg_search_init()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_ereg_search_setpos(int $position): bool {}

/**
 * Regular expression match ignoring case with multibyte support
 * <p>Executes the case insensitive regular expression match with multibyte support.</p>
 * @param string $pattern <p>The regular expression pattern.</p>
 * @param string $string <p>The <code>string</code> being searched.</p>
 * @param array $regs <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>regs</code>, the matches will be stored in the elements of the array <code>regs</code>. If no matches are found, <code>regs</code> is set to an empty array.</p> <p>$regs[1] will contain the substring which starts at the first left parenthesis; $regs[2] will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string matched.</p>
 * @return int <p>Returns the byte length of the matched string if a match for <code>pattern</code> was found in <code>string</code>, or <b><code>FALSE</code></b> if no matches were found or an error occurred.</p><p>If the optional parameter <code>regs</code> was not passed or the length of the matched string is <i>0</i>, this function returns <i>1</i>.</p>
 * @link http://php.net/manual/ja/function.mb-eregi.php
 * @see mb_regex_encoding(), mb_ereg()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_eregi(string $pattern, string $string, array &$regs = NULL): int {}

/**
 * マルチバイト文字列に大文字小文字を区別せずに正規表現による置換を行う
 * <p><code>string</code> において、 正規表現 <code>pattern</code> にマッチする文字列を <code>replacement</code> に置換します。</p>
 * @param string $pattern <p>正規表現パターン。マルチバイト文字を使用できます。 大文字小文字は区別しません。</p>
 * @param string $replace <p>置換する文字列。</p>
 * @param string $string <p>検索対象となる文字列。</p>
 * @param string $option 検索オプション。説明は、<code>mb_regex_set_options()</code> を参照してください。
 * @return string <p>結果の文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-eregi-replace.php
 * @see mb_regex_encoding(), mb_ereg_replace()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri"): string {}

/**
 * mbstring の内部設定値を取得する
 * <p><b>mb_get_info()</b> は、mbstring の内部設定パラメータを返します。</p>
 * @param string $type <p><code>type</code> が指定されない場合または "all" が指定された場合、"internal_encoding", "http_output", "http_input", "func_overload", "mail_charset", "mail_header_encoding", "mail_body_encoding" の設定値を有する連想配列が返されます。</p> <p><code>type</code> に "http_output", "http_input", "internal_encoding", "func_overload" が指定された場合、 指定された設定パラメータが返されます。</p>
 * @return mixed <p><code>type</code> が指定されていない場合は型情報を含む配列、 それ以外の場合は指定した <code>type</code> の値を返します。</p>
 * @link http://php.net/manual/ja/function.mb-get-info.php
 * @see mb_regex_encoding(), mb_http_output()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_get_info(string $type = "all") {}

/**
 * HTTP 入力文字エンコーディングを検出する
 * <p>HTTP 入力文字エンコーディングを検出します。</p>
 * @param string $type <p>HTTP 入力の型を表す文字列を入力してください。 GET の場合は "G"、POST の場合は "P"、 COOKIE の場合は "C"、文字列の場合は "S" 、 リストの場合は "L" 、リスト全体（<code>array</code> を返す） の場合は "I" です。 <code>type</code> が省略された場合、 直近に処理された入力型が返されます。</p>
 * @return mixed <p><code>type</code> の文字エンコーディング名を返します。 <b>mb_http_input()</b> が指定した HTTP 入力の処理を行っていない場合、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-http-input.php
 * @see mb_internal_encoding(), mb_http_output(), mb_detect_order()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_http_input(string $type = "") {}

/**
 * HTTP 出力文字エンコーディングを設定あるいは取得する
 * <p>HTTP 出力文字エンコーディングを設定あるいは取得します。 この関数を実行した後、 出力は内部エンコーディングから <code>encoding</code> に変換されます。</p>
 * @param string $encoding <p><code>encoding</code> が設定された場合、 <b>mb_http_output()</b> は HTTP 出力文字エンコーディングを <code>encoding</code>に設定します。</p> <p><code>encoding</code> が省略された場合、 <b>mb_http_output()</b> は現在の HTTP 出力文字エンコーディングを返します。</p>
 * @return mixed <p><code>encoding</code> が省略された場合、 <b>mb_http_output()</b> は現在の HTTP 出力文字エンコーディングを返します。それ以外の場合、 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-http-output.php
 * @see mb_internal_encoding(), mb_http_input(), mb_detect_order()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_http_output(string $encoding = 'mb_http_output()') {}

/**
 * 内部文字エンコーディングを設定あるいは取得する
 * <p>内部文字エンコーディングを設定あるいは取得します。</p>
 * @param string $encoding <p><code>encoding</code> は、HTTP 入力文字エンコーディング変換、 HTTP 出力文字エンコーディング変換および mbstring モジュールの文字列関数においてデフォルトの文字エンコーディングとして使用されます。 マルチバイト正規表現用のエンコーディングは、ここで扱う内部文字エンコーディングとは別であることに注意してください。</p>
 * @return mixed <p><code>encoding</code> が設定された場合、 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 このとき、マルチバイト正規表現用のエンコーディングは変更されません。 <code>encoding</code> が省略された場合、 現在の内部文字エンコーディング名を返します。</p>
 * @link http://php.net/manual/ja/function.mb-internal-encoding.php
 * @see mb_http_input(), mb_http_output(), mb_detect_order(), mb_regex_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_internal_encoding(string $encoding = 'mb_internal_encoding()') {}

/**
 * 現在の言語を設定あるいは取得する
 * <p>現在の言語を設定あるいは取得します。</p>
 * @param string $language <p>e-mail メッセージのエンコーディングとして使用します。有効な言語は、"Japanese", "ja","English","en", "uni" (UTF-8) です。 <code>mb_send_mail()</code> は、e-mail をエンコードする際にこの設定を使用します。</p> <p>言語とその設定は、Japanese の場合は ISO-2022-JP/Base64、uni の場合は UTF-8/Base64、English の場合は ISO-8859-1/quoted printable です。</p>
 * @return mixed <p><code>language</code> が設定され、 <code>language</code> が有効な場合、<b><code>TRUE</code></b>が返されます。 そうでない場合、<b><code>FALSE</code></b>が返されます。 <code>language</code> が省略された場合、 言語の名前が文字列として返されます。事前に言語が設定されていない場合、 <b><code>FALSE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.mb-language.php
 * @see mb_send_mail()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_language(string $language = 'mb_language()') {}

/**
 * サポートするすべてのエンコーディングの配列を返す
 * <p>サポートするすべてのエンコーディングの配列を返します。</p>
 * @return array <p>数値添字の配列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-list-encodings.php
 * @since PHP 5, PHP 7
 */
function mb_list_encodings(): array {}

/**
 * Get code point of character
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $str
 * @param string $encoding
 * @return int <p>Returns a code point of character失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.mb-ord.php
 * @see mb_chr(), ord()
 * @since PHP 7 >= 7.2.0
 */
function mb_ord(string $str, string $encoding = NULL): int {}

/**
 * 出力バッファ内で文字エンコーディングを変換するコールバック関数
 * <p><b>mb_output_handler()</b> は、 <code>ob_start()</code> のコールバック関数です。 <b>mb_output_handler()</b> は、出力バッファの文字を 内部文字エンコーディングから HTTP 出力文字エンコーディングに変換します。</p>
 * @param string $contents <p>出力バッファの中身。</p>
 * @param int $status <p>出力バッファの状態。</p>
 * @return string <p>変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-output-handler.php
 * @see ob_start()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_output_handler(string $contents, int $status): string {}

/**
 * GET/POST/COOKIE データをパースし、グローバル変数を設定する
 * <p>GET/POST/COOKIE データをパースし、 グローバル変数を設定します。PHPは、生の POST/COOKIE を提供しないため、 現状では GET データでのみ使用可能です。この関数は、URL エンコードされたデータをパース、エンコーディングを検出、 内部エンコーディングへ変換し、配列<code>result</code> またはグローバル配列に設定します。</p>
 * @param string $encoded_string <p>URL エンコードされたデータ。</p>
 * @param array $result <p>デコードされ、文字エンコーディング変換された文字列が含まれます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-parse-str.php
 * @see mb_detect_order(), mb_internal_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_parse_str(string $encoded_string, array &$result = NULL): bool {}

/**
 * MIME 文字設定を文字列で得る
 * <p>指定したエンコーディングの MIME <i>charset</i> 文字列を取得します。</p>
 * @param string $encoding <p>調べるエンコーディング。</p>
 * @return string <p>文字エンコーディング <code>encoding</code> 用の MIME <i>charset</i> 文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mb-preferred-mime-name.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_preferred_mime_name(string $encoding): string {}

/**
 * 現在のマルチバイト正規表現用のエンコーディングを取得または設定する
 * <p>現在のマルチバイト正規表現用のエンコーディングを取得または設定する</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return mixed <p>encoding が設定された場合、成功した場合に TRUE を、失敗した場合に FALSE を返します。 このとき、内部文字エンコーディングは変更されません。 encoding が省略された場合、現在のマルチバイト用の正規表現関数で用いる文字エンコーディング名を返します。</p>
 * @link http://php.net/manual/ja/function.mb-regex-encoding.php
 * @see mb_internal_encoding(), mb_ereg()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_regex_encoding(string $encoding = 'mb_regex_encoding()') {}

/**
 * マルチバイト正規表現関数のデフォルトオプションを取得または設定する
 * <p><code>options</code> で表されるオプションを、 マルチバイト対応の正規表現関数のデフォルトに設定します。</p>
 * @param string $options <p>設定するオプション。文字列で設定し、各文字がオプションを表します。 モードを設定する際には、モード文字は最後に指定しなければなりません。 オプションは複数指定できますが、モードはひとつしか指定できません。</p>  <b>Regex のオプション</b>   オプション 意味     i 曖昧なマッチをオンにする   x 拡張パターン形式を有効にする   m  <i>'.'</i> が改行にマッチする   s  <i>'^'</i> -&gt; <i>'\A'</i>, <i>'$'</i> -&gt; <i>'\Z'</i>    p  <i>m</i> と <i>s</i> を両方指定するのと同じ   l 最も長くマッチするものを探す   n 空のマッチを無視する   e 結果のコードを <code>eval()</code> する     <b>Regex 構文モード</b>   モード 意味     j Java (Sun java.util.regex)   u GNU regex   g grep   c Emacs   r Ruby   z Perl   b POSIX Basic regex   d POSIX Extended regex
 * @return string <p>以前設定されていたオプション文字列を返します。 <code>options</code> を省略した場合は、 現在設定されているオプションを返します。</p>
 * @link http://php.net/manual/ja/function.mb-regex-set-options.php
 * @see mb_split(), mb_ereg(), mb_eregi()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mb_regex_set_options(string $options = 'mb_regex_set_options()'): string {}

/**
 * Description
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $str
 * @param string $encoding
 * @return string
 * @link http://php.net/manual/ja/function.mb-scrub.php
 * @since PHP 7 >= 7.2.0
 */
function mb_scrub(string $str, string $encoding = NULL): string {}

/**
 * エンコード変換を行ってメールを送信する
 * <p>email を送信します。ヘッダと本文は <code>mb_language()</code> の設定に基づき変換、エンコードされます。 これは <code>mail()</code> のラッパー関数です。詳細は、 <code>mail()</code> を参照ください。</p>
 * @param string $to <p>送信先のメールアドレス。 各アドレスをカンマで区切ると、複数の宛先を <code>to</code> に指定できます。 このパラメータは、自動的にはエンコードされません。</p>
 * @param string $subject <p>メールの件名。</p>
 * @param string $message <p>メールの本文。</p>
 * @param mixed $additional_headers
 * @param string $additional_parameter <p><code>additional_parameter</code> は、MTA へ渡す コマンドライン引数です。sendmail を利用する際に正しい Return-Path を設定するためなどに利用すると便利です。</p> <p>このパラメータはコマンドの実行を防止するために内部的に <code>escapeshellcmd()</code> によってエスケープされます。 <code>escapeshellcmd()</code> はコマンドの実行を防止しますが、 別のパラメータを追加することは許してしまいます。セキュリティ上の理由から、 このパラメータは検証されるべきです。</p> <p><code>escapeshellcmd()</code> が自動的に適用されるため、 インターネット RFC でメールアドレスとして許可さているいくつかの文字を使用することができません。 これらの文字を使用することが必須であるプログラムでは <code>mail()</code> を使うことはできません。</p> <p>この方法でエンベロープの sender ヘッダ（-f）を設定する際は、 'X-Warning' ヘッダが付加されないように Web サーバーの実行ユーザーを sendmail 設定に追加しておく必要があるかもしれません。 sendmail を利用している場合、これは /etc/mail/trusted-users で設定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-send-mail.php
 * @see mail(), mb_encode_mimeheader(), mb_language()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_send_mail(string $to, string $subject, string $message, $additional_headers = NULL, string $additional_parameter = NULL): bool {}

/**
 * マルチバイト文字列を正規表現により分割する
 * <p>マルチバイト文字列 <code>string</code> において、正規表現 <code>pattern</code> により文字列を分割し、 結果を配列として返します。</p>
 * @param string $pattern <p>正規表現パターン。</p>
 * @param string $string <p>分割する文字列。</p>
 * @param int $limit オプションの引数 <code>limit</code> を指定した場合は、 最大 <code>limit</code> 個の要素に分割されます。
 * @return array <p>結果を配列で返します。</p>
 * @link http://php.net/manual/ja/function.mb-split.php
 * @see mb_regex_encoding(), mb_ereg()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function mb_split(string $pattern, string $string, int $limit = -1): array {}

/**
 * 文字列の一部を得る
 * <p><b>mb_strcut()</b> は、ある文字列からの部分文字列の抽出を <code>mb_substr()</code> と同じ方法で行います。ただし、 処理は文字単位ではなくバイト単位で行います。 切り出し位置がたまたまマルチバイト文字の 2 バイト目以降だった場合、 切り出しはその文字の最初のバイトから行われます。この挙動もまた <code>substr()</code> 関数と異なるところです。 <code>substr()</code> の場合は、 マルチバイト文字の 2 バイト目以降であってもその位置から切り出しを行い、 結果的に壊れたバイト列を返すことになります。</p>
 * @param string $str <p>取り出しの対象となる文字列。</p>
 * @param int $start <p><code>start</code> が非負である場合に返される文字列は、 <code>str</code> の <code>start</code> <i>バイト</i>目以降の文字列となります (ゼロから数えます)。 たとえば、文字列 '<i>abcdef</i>' の <i>0</i> バイト目は '<i>a</i>' で、 <i>2</i> バイト目は '<i>c</i>' のようになります。</p> <p><code>start</code> が負の数の場合に返される文字列は、 <code>str</code> の後ろから数えて <code>start</code> バイト目以降となります。</p>
 * @param int $length <p><i>バイト</i>単位での長さ。 省略したり <i>NULL</i> を指定したりした場合は、 文字列の最後までの全バイトを取り出します。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p><b>mb_strcut()</b> は、 <code>start</code> および <code>length</code> パラメータで指定した <code>str</code> の一部を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strcut.php
 * @see mb_substr(), mb_internal_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strcut(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 指定した幅で文字列を丸める
 * <p>文字列 <code>str</code> を指定した幅 <code>width</code> で丸めます。</p>
 * @param string $str <p>丸めたい文字列。</p>
 * @param int $start <p>開始位置のオフセット。文字列の始めからの文字数 (最初の文字は 0) です。 負のオフセットは、文字列の末尾からのオフセットと解釈されます。</p>
 * @param int $width <p>丸める幅。負の値は、文字列の末尾からの幅を数えます。</p>
 * @param string $trimmarker <p>丸めた後にその文字列の最後に追加される文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p>丸められた文字列を返します。 <code>trimmarker</code> が設定された場合、 <code>width</code> にマッチする最後の文字を <code>trimmarker</code> で置き換えます。</p>
 * @link http://php.net/manual/ja/function.mb-strimwidth.php
 * @see mb_strwidth(), mb_internal_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strimwidth(string $str, int $start, int $width, string $trimmarker = "", string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 大文字小文字を区別せず、 文字列の中で指定した文字列が最初に現れる位置を探す
 * <p><b>mb_stripos()</b> は、 <code>needle</code> が <code>haystack</code> の中で最初に現れる位置を返します。 <code>mb_strpos()</code> とは異なり、 <b>mb_stripos()</b> は大文字小文字を区別しません。 <code>needle</code> が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @param string $haystack <p><code>needle</code> が最初に現れる位置を見つける文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param int $offset <p><code>haystack</code> の中で、検索を開始する位置。 負のオフセットは、文字列の末尾からのオフセットと解釈されます。</p>
 * @param string $encoding <p>使用する文字エンコーディング名。 省略した場合は内部文字エンコーディングが用いられます。</p>
 * @return int <p><code>needle</code> が <code>haystack</code> の中で最初に現れる位置を返します。<code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-stripos.php
 * @see stripos(), strpos(), mb_strpos()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_stripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 大文字小文字を区別せず、 文字列の中で指定した文字列が最初に現れる位置を探す
 * <p><b>mb_stristr()</b> は、 <code>haystack</code> の中で最初に <code>needle</code> が現れる場所を探し、 <code>haystack</code> の部分文字列を返します。 <code>mb_strstr()</code> とは異なり、 <b>mb_stristr()</b> は大文字小文字を区別しません。 <code>needle</code> が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @param string $haystack <p><code>needle</code> が最初に現れる位置を見つける文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param bool $before_needle <p>この関数が <code>haystack</code> のどの部分を返すのかを指定します。 <b><code>TRUE</code></b> の場合は、<code>haystack</code> の先頭から <code>needle</code> が最初に現れる位置までを返します (needle を含めません)。 <b><code>FALSE</code></b> の場合は、<code>needle</code> が最初に現れる位置から <code>haystack</code> の最後までを返します (needle を含めます)。</p>
 * @param string $encoding <p>使用する文字エンコーディング名。 省略した場合は内部文字エンコーディングが用いられます。</p>
 * @return string <p><code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-stristr.php
 * @see stristr(), strstr(), mb_strstr()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_stristr(string $haystack, string $needle, bool $before_needle = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 文字列の長さを得る
 * <p>文字列の長さを取得します。</p>
 * @param string $str <p>長さを調べたい文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return int <p>文字エンコーディング <code>encoding</code> の文字列 <code>str</code> の文字数を返します。 マルチバイト文字の一文字は1個として数えられます。</p><p>無効な <code>encoding</code> を指定した場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.mb-strlen.php
 * @see mb_internal_encoding(), grapheme_strlen(), iconv_strlen(), strlen()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strlen(string $str, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 文字列の中に指定した文字列が最初に現れる位置を見つける
 * <p>ある文字列の中で別の文字列が最初に現れる位置を見つけます。</p><p>マルチバイト文字列に正しくマッチするように <code>strpos()</code> を拡張したもので、 最初の 1 文字目の位置が 0 、2 文字目の文字が 1 というようになります。</p>
 * @param string $haystack <p>調べたい文字列。</p>
 * @param string $needle <p><code>haystack</code> の中から探す文字列。 <code>strpos()</code> とは違い、 数値を指定しても文字コードの値と見なされることはありません。</p>
 * @param int $offset <p>検索オフセット。 指定されない場合は、0 が使用されます。 負のオフセットは、文字列の末尾からのオフセットと解釈されます。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return int <p>文字列 <code>haystack</code> の中で <code>needle</code> が最初に現れる位置を数字で返します。 <code>needle</code> が見付からなかった場合、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strpos.php
 * @see mb_internal_encoding(), strpos()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 別の文字列の中で、ある文字が最後に現れる場所を見つける
 * <p><b>mb_strrchr()</b> は、 <code>haystack</code> の中で最後に <code>needle</code> が現れる場所を探し、 <code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @param string $haystack <p><code>needle</code> が最後に現れる位置を探す文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param bool $part <p>この関数が <code>haystack</code> のどの部分を返すのかを指定します。 <b><code>TRUE</code></b> の場合は、<code>haystack</code> の先頭から <code>needle</code> が最後に現れる位置までを返します。 <b><code>FALSE</code></b> の場合は、<code>needle</code> が最後に現れる位置から <code>haystack</code> の最後までを返します。</p>
 * @param string $encoding <p>使用する文字エンコーディングの名前。 省略した場合は内部文字エンコーディングを使用します。</p>
 * @return string <p><code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strrchr.php
 * @see strrchr(), mb_strstr(), mb_strrichr()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_strrchr(string $haystack, string $needle, bool $part = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 大文字小文字を区別せず、 別の文字列の中である文字が最後に現れる場所を探す
 * <p><b>mb_strrichr()</b> は、 <code>haystack</code> の中で最後に <code>needle</code> が現れる場所を探し、 <code>haystack</code> の部分文字列を返します。 <code>mb_strrchr()</code> とは異なり、 <b>mb_strrichr()</b> は大文字小文字を区別しません。 <code>needle</code> が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @param string $haystack <p><code>needle</code> が最後に現れる位置を探す文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param bool $part <p>この関数が <code>haystack</code> のどの部分を返すのかを指定します。 <b><code>TRUE</code></b> の場合は、<code>haystack</code> の先頭から <code>needle</code> が最後に現れる位置までを返します。 <b><code>FALSE</code></b> の場合は、<code>needle</code> が最後に現れる位置から <code>haystack</code> の最後までを返します。</p>
 * @param string $encoding <p>使用する文字エンコーディングの名前。 省略した場合は内部文字エンコーディングを使用します。</p>
 * @return string <p><code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strrichr.php
 * @see mb_stristr(), mb_strrchr()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_strrichr(string $haystack, string $needle, bool $part = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 大文字小文字を区別せず、 文字列の中で指定した文字列が最後に現れる位置を探す
 * <p><b>mb_strripos()</b> は、マルチバイト対応の <code>strripos()</code> 操作を、文字数に基づいて行います。 <code>needle</code> の位置を <code>haystack</code> の先頭から順に数えていきます。 最初の文字の位置は 0、二番目の文字の位置は 1 という具合です。 <code>mb_strrpos()</code> とは異なり、 <b>mb_strripos()</b> は大文字小文字を区別しません。</p>
 * @param string $haystack <p><code>needle</code> が最後に現れる位置を見つける文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param int $offset <p><code>haystack</code> の中で、検索を開始する位置。</p>
 * @param string $encoding <p>使用する文字エンコーディング名。 省略した場合は内部文字エンコーディングが用いられます。</p>
 * @return int <p><code>needle</code> が <code>haystack</code> の中で最後に現れる位置を返します。<code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strripos.php
 * @see strripos(), strrpos(), mb_strrpos()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_strripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 文字列の中に指定した文字列が最後に現れる位置を見つける
 * <p><b>mb_strrpos()</b> は、マルチバイト対応の <code>strrpos()</code> 操作を、文字数に基づいて行います。 <code>needle</code> の位置を <code>haystack</code> の先頭から順に数えていきます。 最初の文字の位置は 0、二番目の文字の位置は 1 という具合です。</p>
 * @param string $haystack <p><code>needle</code> が最後に登場する場所を調べたい文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で見つけたい文字列。</p>
 * @param int $offset 指定すると、文字列中の任意の文字位置から検索を開始することができます。 負の値を指定すると、文字の終端より前の任意の位置で検索を終了します。
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return int <p>文字列 <code>haystack</code> の中で <code>needle</code> が最後に現れる位置を数字で返します。 <code>needle</code> が見付からなかった場合、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strrpos.php
 * @see mb_strpos(), mb_internal_encoding(), strrpos()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strrpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 文字列の中で、指定した文字列が最初に現れる位置を見つける
 * <p><b>mb_strstr()</b> は、 <code>haystack</code> の中で最初に <code>needle</code> が現れる場所を探し、 <code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @param string $haystack <p><code>needle</code> が最初に現れる位置を見つける文字列。</p>
 * @param string $needle <p><code>haystack</code> の中で探す文字列。</p>
 * @param bool $before_needle <p>この関数が <code>haystack</code> のどの部分を返すのかを指定します。 <b><code>TRUE</code></b> の場合は、<code>haystack</code> の先頭から <code>needle</code> が最初に現れる位置までを返します (needle を含めません)。 <b><code>FALSE</code></b> の場合は、<code>needle</code> が最初に現れる位置から <code>haystack</code> の最後までを返します (needle を含めます)。</p>
 * @param string $encoding <p>使用する文字エンコーディング名。 省略した場合は内部文字エンコーディングが用いられます。</p>
 * @return string <p><code>haystack</code> の部分文字列を返します。 <code>needle</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strstr.php
 * @see stristr(), strstr(), mb_stristr()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function mb_strstr(string $haystack, string $needle, bool $before_needle = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 文字列を小文字にする
 * <p><code>str</code> のすべてのアルファベットを小文字にして返します。</p>
 * @param string $str <p>小文字にしたい文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p><code>str</code> のすべてのアルファベットを小文字にしたものを返します。</p>
 * @link http://php.net/manual/ja/function.mb-strtolower.php
 * @see mb_strtoupper(), mb_convert_case(), strtolower()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mb_strtolower(string $str, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 文字列を大文字にする
 * <p><code>str</code> のすべてのアルファベットを大文字にして返します。</p>
 * @param string $str <p>大文字に変換したい文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p><code>str</code> のすべてのアルファベットを大文字にしたものを返します。</p>
 * @link http://php.net/manual/ja/function.mb-strtoupper.php
 * @see mb_strtolower(), mb_convert_case(), strtoupper()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mb_strtoupper(string $str, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 文字列の幅を返す
 * <p><code>string</code> <code>str</code> の幅を返します。 半角文字は <i>1</i> として、 全角文字は <i>2</i> として数えます。</p><p>全角文字は次のとおりです。 <i>U+1100</i>-<i>U+115F</i>、 <i>U+11A3</i>-<i>U+11A7</i>、 <i>U+11FA</i>-<i>U+11FF</i>、 <i>U+2329</i>-<i>U+232A</i>、 <i>U+2E80</i>-<i>U+2E99</i>、 <i>U+2E9B</i>-<i>U+2EF3</i>、 <i>U+2F00</i>-<i>U+2FD5</i>、 <i>U+2FF0</i>-<i>U+2FFB</i>、 <i>U+3000</i>-<i>U+303E</i>、 <i>U+3041</i>-<i>U+3096</i>、 <i>U+3099</i>-<i>U+30FF</i>、 <i>U+3105</i>-<i>U+312D</i>、 <i>U+3131</i>-<i>U+318E</i>、 <i>U+3190</i>-<i>U+31BA</i>、 <i>U+31C0</i>-<i>U+31E3</i>、 <i>U+31F0</i>-<i>U+321E</i>、 <i>U+3220</i>-<i>U+3247</i>、 <i>U+3250</i>-<i>U+32FE</i>、 <i>U+3300</i>-<i>U+4DBF</i>、 <i>U+4E00</i>-<i>U+A48C</i>、 <i>U+A490</i>-<i>U+A4C6</i>、 <i>U+A960</i>-<i>U+A97C</i>、 <i>U+AC00</i>-<i>U+D7A3</i>、 <i>U+D7B0</i>-<i>U+D7C6</i>、 <i>U+D7CB</i>-<i>U+D7FB</i>、 <i>U+F900</i>-<i>U+FAFF</i>、 <i>U+FE10</i>-<i>U+FE19</i>、 <i>U+FE30</i>-<i>U+FE52</i>、 <i>U+FE54</i>-<i>U+FE66</i>、 <i>U+FE68</i>-<i>U+FE6B</i>、 <i>U+FF01</i>-<i>U+FF60</i>、 <i>U+FFE0</i>-<i>U+FFE6</i>、 <i>U+1B000</i>-<i>U+1B001</i>、 <i>U+1F200</i>-<i>U+1F202</i>、 <i>U+1F210</i>-<i>U+1F23A</i>、 <i>U+1F240</i>-<i>U+1F248</i>、 <i>U+1F250</i>-<i>U+1F251</i>、 <i>U+20000</i>-<i>U+2FFFD</i>、 <i>U+30000</i>-<i>U+3FFFD</i>。 他のすべての文字は半角の文字です。</p>
 * @param string $str <p>幅を取得したい文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return int <p>文字列 <code>str</code> の幅を返します。</p>
 * @link http://php.net/manual/ja/function.mb-strwidth.php
 * @see mb_strimwidth(), mb_internal_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_strwidth(string $str, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * 置換文字を設定あるいは取得する
 * <p>入力文字エンコーディングが無効、 または出力文字エンコーディングに文字コードが存在しない場合の代替文字を指定します。 無効な文字は、<b><code>NULL</code></b> (出力しない)、文字列または整数値 (Unicode 文字コード値) に置換することが可能です。</p><p>この設定は、<code>mb_convert_encoding()</code>、 <code>mb_convert_variables()</code>、 <code>mb_output_handler()</code>、 および <code>mb_send_mail()</code> に影響します。</p>
 * @param mixed $substchar <p>Unicode 値の整数または文字列を以下のように指定します。</p><ul> <li>  <i>"none"</i>: 出力しない  </li> <li>  <i>"long"</i>: 文字コードの値を出力する (例: <i>U+3000</i>、<i>JIS+7E7E</i>)  </li> <li>  <i>"entity"</i>: 文字エンティティを出力する (例: <i>&amp;#x200;</i>)  </li> </ul>
 * @return mixed <p><code>substchar</code> が設定された場合、成功時に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 <code>substchar</code> が設定されない場合は、現在の設定を返します。</p>
 * @link http://php.net/manual/ja/function.mb-substitute-character.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_substitute_character($substchar  = 'mb_substitute_character()') {}

/**
 * 文字列の一部を得る
 * <p>文字数に基づきマルチバイト対応の <code>substr()</code> 処理を行います。位置は、 <code>str</code> の始めから数えられます。 最初の文字の位置は 0、2 番目の文字の位置は 1、といったようになります。</p>
 * @param string $str <p>部分文字列を取り出したい文字列。</p>
 * @param int $start <p><code>start</code> が非負である場合に返される文字列は、 <code>str</code> の <code>start</code> <i>バイト</i>目以降の文字列となります (ゼロから数えます)。 たとえば、文字列 '<i>abcdef</i>' の <i>0</i> バイト目は '<i>a</i>' で、 <i>2</i> バイト目は '<i>c</i>' のようになります。</p> <p><code>start</code> が負の数の場合に返される文字列は、 <code>str</code> の後ろから数えて <code>start</code> バイト目以降となります。</p>
 * @param int $length <p><code>str</code> の中から取り出す最大文字数。 省略したり <i>NULL</i> を渡したりした場合は、 文字列の最後までの全バイトを取り出します。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return string <p><b>mb_substr()</b> は、<code>start</code> および <code>length</code> パラメータで指定した <code>str</code> の一部を返します。</p>
 * @link http://php.net/manual/ja/function.mb-substr.php
 * @see mb_strcut(), mb_internal_encoding()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function mb_substr(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * 部分文字列の出現回数を数える
 * <p>文字列 <code>haystack</code> の中での部分文字列 <code>needle</code> の出現回数を数えます。</p>
 * @param string $haystack <p>調べたい文字列。</p>
 * @param string $needle <p>見つける文字列。</p>
 * @param string $encoding <p><code>encoding</code> パラメータには文字エンコーディングを指定します。省略した場合は、 内部文字エンコーディングを使用します。</p>
 * @return int <p>文字列 <code>haystack</code> の中での部分文字列 <code>needle</code> の出現回数を返します。</p>
 * @link http://php.net/manual/ja/function.mb-substr-count.php
 * @see mb_strpos(), mb_substr(), substr_count()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mb_substr_count(string $haystack, string $needle, string $encoding = 'mb_internal_encoding()'): int {}

define('MB_CASE_LOWER', 1);

define('MB_CASE_TITLE', 2);

define('MB_CASE_UPPER', 0);

define('MB_OVERLOAD_MAIL', 1);

define('MB_OVERLOAD_REGEX', 4);

define('MB_OVERLOAD_STRING', 2);

