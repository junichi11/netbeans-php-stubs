<?php



namespace {

	/**
	 * 指定した型の変数が存在するかどうかを調べる
	 * @param int $type <p><b><code>INPUT_GET</code></b>、<b><code>INPUT_POST</code></b>、 <b><code>INPUT_COOKIE</code></b>、<b><code>INPUT_SERVER</code></b>、 <b><code>INPUT_ENV</code></b> のいずれか。</p>
	 * @param string $variable_name <p>調べたい変数の名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.filter-has-var.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_has_var(int $type, string $variable_name): bool {}

	/**
	 * フィルタの名前からフィルタ ID を返す
	 * @param string $filtername <p>取得したいフィルタの名前。</p>
	 * @return int <p>フィルタの ID を返します。フィルタが存在しない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.filter-id.php
	 * @see filter_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_id(string $filtername): int {}

	/**
	 * 指定した名前の変数を外部から受け取り、オプションでそれをフィルタリングする
	 * @param int $type <p><b><code>INPUT_GET</code></b>、<b><code>INPUT_POST</code></b>、 <b><code>INPUT_COOKIE</code></b>、<b><code>INPUT_SERVER</code></b> あるいは <b><code>INPUT_ENV</code></b> のいずれか。</p>
	 * @param string $variable_name <p>取得する変数の名前。</p>
	 * @param int $filter <p>適用するフィルタの ID。フィルタの型 に、利用できるフィルタの一覧があります。</p> <p>省略した場合は <b><code>FILTER_DEFAULT</code></b> を使います。これは <b><code>FILTER_UNSAFE_RAW</code></b> と同等です。 結果的に、デフォルトでは何もフィルタリングをしません。</p>
	 * @param mixed $options <p>オプションあるいはフラグの論理和の連想配列。 オプションを指定可能なフィルタの場合、この配列の "flags" フィールドにフラグを指定します。</p>
	 * @return mixed <p>成功した場合は要求された変数の値、フィルタリングに失敗した場合に <b><code>FALSE</code></b>、 あるいは変数 <code>variable_name</code> が設定されていない場合に <b><code>NULL</code></b> を返します。フラグ <b><code>FILTER_NULL_ON_FAILURE</code></b> が指定されている場合は、変数が設定されていなければ <b><code>FALSE</code></b>、 フィルタリングに失敗したら <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.filter-input.php
	 * @see filter_var(), filter_input_array(), filter_var_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_input(int $type, string $variable_name, int $filter = FILTER_DEFAULT, $options = NULL) {}

	/**
	 * 外部から変数を受け取り、オプションでそれらをフィルタリングする
	 * <p>この関数を使用すると、大量のデータを取得する際に <code>filter_input()</code> を繰り返しコールする必要がなくなるので便利です。</p>
	 * @param int $type <p><b><code>INPUT_GET</code></b>、<b><code>INPUT_POST</code></b>、 <b><code>INPUT_COOKIE</code></b>、<b><code>INPUT_SERVER</code></b> あるいは <b><code>INPUT_ENV</code></b> のいずれか。</p>
	 * @param mixed $definition <p>引数を定義する配列。配列のキーとして使用できるのは 変数名を <code>string</code> で表したものです。 対応する値に使用できるのは、フィルタの型か配列 (フィルタ・フラグ・オプションを指定したもの) です。 配列の値として配列を使用する場合に使用できるキーは、 <i>filter</i> (フィルタの型)、 <i>flags</i> (フィルタに適用するフラグ) および <i>options</i> (フィルタに適用するオプション) です。理解を深めるために、以下の例を参照ください。</p> <p>このパラメータには、フィルタ定数 を表す整数値を指定することもできます。 こうすると、入力配列のすべての値がそのフィルタで処理されます。</p>
	 * @param bool $add_empty <p>存在しないキーは <b><code>NULL</code></b> として返り値に追加します。</p>
	 * @return mixed <p>成功した場合は要求された変数の値を含む配列、 あるいは失敗した場合に <b><code>FALSE</code></b> を返します。 配列の値は、フィルタリングに失敗した場合には <b><code>FALSE</code></b>、 変数が設定されていない場合は <b><code>NULL</code></b> となります。 フラグ <b><code>FILTER_NULL_ON_FAILURE</code></b> が指定されている場合は、変数が設定されていないときに <b><code>FALSE</code></b>、 フィルタリングに失敗した場合に <b><code>NULL</code></b> となります。</p>
	 * @link https://php.net/manual/ja/function.filter-input-array.php
	 * @see filter_input(), filter_var_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_input_array(int $type, $definition = NULL, bool $add_empty = true) {}

	/**
	 * サポートされるフィルタの一覧を返す
	 * @return array <p>サポートされる全フィルタの名前の配列を返します。 フィルタが存在しない場合は空の配列を返します。 この配列のインデックスはフィルタの ID ではありません。 ID を取得するには <code>filter_id()</code> にフィルタ名を渡します。</p>
	 * @link https://php.net/manual/ja/function.filter-list.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_list(): array {}

	/**
	 * 指定したフィルタでデータをフィルタリングする
	 * @param mixed $variable <p>フィルタリングする値。値をフィルタリングする前に、 内部的に 文字列への変換 が行われることに注意しましょう。</p>
	 * @param int $filter <p>適用するフィルタの ID。フィルタの型 に、利用できるフィルタの一覧があります。</p> <p>省略した場合は <b><code>FILTER_DEFAULT</code></b> を使います。これは <b><code>FILTER_UNSAFE_RAW</code></b> と同等です。 結果的に、デフォルトでは何もフィルタリングをしません。</p>
	 * @param mixed $options <p>オプションあるいはフラグの論理和の連想配列。 オプションを指定可能なフィルタの場合、この配列の "flags" フィールドにフラグを指定します。 "callback" フィルタの場合は、<code>callable</code> 型を渡さなければなりません。 コールバックは、フィルタリングする値を引数として受け取り、 処理後の値を返すようにしなければなりません。</p> <p></p> <code> &lt;&#63;php<br>// オプションを許可するフィルタは、このような形式となります<br>$options = array(<br>    'options' =&gt; array(<br>        'default' =&gt; 3, // フィルタが失敗した場合に返す値<br>        // その他のオプションをここに書きます<br>        'min_range' =&gt; 0<br>    ),<br>    'flags' =&gt; FILTER_FLAG_ALLOW_OCTAL,<br>);<br>$var = filter_var('0755', FILTER_VALIDATE_INT, $options);<br><br>// フラグのみを許可するフィルタは、それを直接記述します<br>$var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);<br><br>// フラグのみを許可するフィルタは、配列として渡すこともできます<br>$var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,<br>                  array('flags' =&gt; FILTER_NULL_ON_FAILURE));<br><br>// コールバック検証フィルタ<br>function foo($value)<br>{<br>    // 期待する書式: Surname, GivenNames<br>    if (strpos($value, ", ") === false) return false;<br>    list($surname, $givennames) = explode(", ", $value, 2);<br>    $empty = (empty($surname) || empty($givennames));<br>    $notstrings = (!is_string($surname) || !is_string($givennames));<br>    if ($empty || $notstrings) {<br>        return false;<br>    } else {<br>        return $value;<br>    }<br>}<br>$var = filter_var('Doe, Jane Sue', FILTER_CALLBACK, array('options' =&gt; 'foo'));<br>&#63;&gt;  </code>
	 * @return mixed <p>フィルタリングされたデータ、あるいは処理に失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.filter-var.php
	 * @see filter_var_array(), filter_input(), filter_input_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_var($variable, int $filter = FILTER_DEFAULT, $options = NULL) {}

	/**
	 * 複数の変数を受け取り、オプションでそれらをフィルタリングする
	 * <p>この関数を使用すると、大量の変数を取得する際に <code>filter_var()</code> を繰り返しコールする必要がなくなるので便利です。</p>
	 * @param array $data <p>文字列キーの配列。フィルタリングするデータを保持します。</p>
	 * @param mixed $definition <p>引数を定義する配列。配列のキーとして使用できるのは 変数名を <code>string</code> で表したものです。 対応する値に使用できるのは、 フィルタの型か配列 (フィルタ・フラグ・オプションを指定したもの) です。 配列の値として配列を使用する場合に使用できるキーは、 <i>filter</i> (フィルタの型)、 <i>flags</i> (フィルタに適用するフラグ) および <i>options</i> (フィルタに適用するオプション) です。理解を深めるために、以下の例を参照ください。</p> <p>このパラメータには、フィルタ定数 を表す整数値を指定することもできます。 こうすると、入力配列のすべての値がそのフィルタで処理されます。</p>
	 * @param bool $add_empty <p>存在しないキーは <b><code>NULL</code></b> として返り値に追加します。</p>
	 * @return mixed <p>成功した場合は要求された変数の値を含む配列、 あるいは失敗した場合に <b><code>FALSE</code></b> を返します。 配列の値は、フィルタリングに失敗した場合には <b><code>FALSE</code></b>、 変数が設定されていない場合は <b><code>NULL</code></b> となります。</p>
	 * @link https://php.net/manual/ja/function.filter-var-array.php
	 * @see filter_input_array(), filter_var(), filter_input()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_var_array(array $data, $definition = NULL, bool $add_empty = TRUE) {}

	/**
	 * "callback" フィルタの ID。
	 */
	define('FILTER_CALLBACK', 1024);

	/**
	 * デフォルト ("unsafe_raw") フィルタの ID。 これは <b><code>FILTER_UNSAFE_RAW</code></b> と同等です。
	 */
	define('FILTER_DEFAULT', 516);

	/**
	 * "number_float" フィルタで小数を許可します。
	 */
	define('FILTER_FLAG_ALLOW_FRACTION', 4096);

	/**
	 * "int" フィルタで 16 進表記 (<i>0x[0-9a-fA-F]+</i>) を許可します。
	 */
	define('FILTER_FLAG_ALLOW_HEX', 2);

	/**
	 * "int" フィルタで 8 進表記 (<i>0[0-7]+</i>) を許可します。
	 */
	define('FILTER_FLAG_ALLOW_OCTAL', 1);

	/**
	 * "number_float" フィルタで科学記法 (<i>e</i>, <i>E</i>) を許可します。
	 */
	define('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);

	/**
	 * "number_float" フィルタで桁区切り文字 (<i>,</i>) を許可します。
	 */
	define('FILTER_FLAG_ALLOW_THOUSAND', 8192);

	/**
	 * Accepts Unicode characters in the local part in "validate_email" filter. (PHP 7.1.0 以降で利用可能)
	 */
	define('FILTER_FLAG_EMAIL_UNICODE', 1048576);

	/**
	 * (現在は使用されていません)
	 */
	define('FILTER_FLAG_EMPTY_STRING_NULL', 256);

	/**
	 * <i>&amp;</i> をエンコードします。
	 */
	define('FILTER_FLAG_ENCODE_AMP', 64);

	/**
	 * ASCII 値が 127 より大きい文字をエンコードします。
	 */
	define('FILTER_FLAG_ENCODE_HIGH', 32);

	/**
	 * ASCII 値が 32 未満の文字をエンコードします。
	 */
	define('FILTER_FLAG_ENCODE_LOW', 16);

	/**
	 * "validate_ip" フィルタで IPv4 アドレスのみを許可します。
	 */
	define('FILTER_FLAG_IPV4', 1048576);

	/**
	 * "validate_ip" フィルタで IPv6 アドレスのみを許可します。
	 */
	define('FILTER_FLAG_IPV6', 2097152);

	/**
	 * <i>'</i> および <i>"</i> をエンコードしません。
	 */
	define('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

	/**
	 * "validate_ip" フィルタでプライベートアドレスを拒否します。
	 */
	define('FILTER_FLAG_NO_PRIV_RANGE', 8388608);

	/**
	 * "validate_ip" フィルタで予約済みアドレスを拒否します。
	 */
	define('FILTER_FLAG_NO_RES_RANGE', 4194304);

	/**
	 * フィルタしない。
	 */
	define('FILTER_FLAG_NONE', 0);

	/**
	 * "validate_url" フィルタでパスを必須とします。
	 */
	define('FILTER_FLAG_PATH_REQUIRED', 262144);

	/**
	 * "validate_url" フィルタでクエリ文字列を必須とします。
	 */
	define('FILTER_FLAG_QUERY_REQUIRED', 524288);

	/**
	 * ASCII 値が 127 より大きい文字を取り除きます。
	 */
	define('FILTER_FLAG_STRIP_HIGH', 8);

	/**
	 * ASCII 値が 32 未満の文字を取り除きます。
	 */
	define('FILTER_FLAG_STRIP_LOW', 4);

	/**
	 * 常に配列として返します。
	 */
	define('FILTER_FORCE_ARRAY', 67108864);

	/**
	 * 失敗した場合に FALSE ではなく NULL を使用します。
	 */
	define('FILTER_NULL_ON_FAILURE', 134217728);

	/**
	 * 入力として配列を要求します。
	 */
	define('FILTER_REQUIRE_ARRAY', 16777216);

	/**
	 * 入力値としてスカラーを要求するために使用するフラグ。
	 */
	define('FILTER_REQUIRE_SCALAR', 33554432);

	/**
	 * "email" フィルタの ID。
	 */
	define('FILTER_SANITIZE_EMAIL', 517);

	/**
	 * "encoded" フィルタの ID。
	 */
	define('FILTER_SANITIZE_ENCODED', 514);

	/**
	 * "magic_quotes" フィルタの ID。
	 */
	define('FILTER_SANITIZE_MAGIC_QUOTES', 521);

	/**
	 * "number_float" フィルタの ID。
	 */
	define('FILTER_SANITIZE_NUMBER_FLOAT', 520);

	/**
	 * "number_int" フィルタの ID。
	 */
	define('FILTER_SANITIZE_NUMBER_INT', 519);

	/**
	 * "special_chars" フィルタの ID。
	 */
	define('FILTER_SANITIZE_SPECIAL_CHARS', 515);

	/**
	 * "string" フィルタの ID。
	 */
	define('FILTER_SANITIZE_STRING', 513);

	/**
	 * "stripped" フィルタの ID。
	 */
	define('FILTER_SANITIZE_STRIPPED', 513);

	/**
	 * "url" フィルタの ID。
	 */
	define('FILTER_SANITIZE_URL', 518);

	/**
	 * "unsafe_raw" フィルタの ID。
	 */
	define('FILTER_UNSAFE_RAW', 516);

	/**
	 * "boolean" フィルタの ID。
	 */
	define('FILTER_VALIDATE_BOOLEAN', 258);

	/**
	 * "validate_email" フィルタの ID。
	 */
	define('FILTER_VALIDATE_EMAIL', 274);

	/**
	 * "float" フィルタの ID。
	 */
	define('FILTER_VALIDATE_FLOAT', 259);

	/**
	 * "int" フィルタの ID。
	 */
	define('FILTER_VALIDATE_INT', 257);

	/**
	 * "validate_ip" フィルタの ID。
	 */
	define('FILTER_VALIDATE_IP', 275);

	/**
	 * "validate_mac_address" フィルタの ID。 (PHP 5.5.0 以降で使用可能)
	 */
	define('FILTER_VALIDATE_MAC', 276);

	/**
	 * "validate_regexp" フィルタの ID。
	 */
	define('FILTER_VALIDATE_REGEXP', 272);

	/**
	 * "validate_url" フィルタの ID。
	 */
	define('FILTER_VALIDATE_URL', 273);

	/**
	 * COOKIE 変数。
	 */
	define('INPUT_COOKIE', 2);

	/**
	 * ENV 変数。
	 */
	define('INPUT_ENV', 4);

	/**
	 * GET 変数。
	 */
	define('INPUT_GET', 1);

	/**
	 * POST 変数。
	 */
	define('INPUT_POST', 0);

	/**
	 * REQUEST 変数 (まだ実装されていません)。
	 */
	define('INPUT_REQUEST', 99);

	/**
	 * SERVER 変数。
	 */
	define('INPUT_SERVER', 5);

	/**
	 * SESSION 変数 (まだ実装されていません)。
	 */
	define('INPUT_SESSION', 6);

}
