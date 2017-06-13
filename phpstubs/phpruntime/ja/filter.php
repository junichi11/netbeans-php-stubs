<?php

// Start of filter v.7.1.5

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 指定した名前の変数を外部から受け取り、オプションでそれをフィルタリングする
 * @link http://php.net/manual/ja/function.filter-input.php
 * @param int $type <p>
 * <b>INPUT_GET</b>、<b>INPUT_POST</b>、
 * <b>INPUT_COOKIE</b>、<b>INPUT_SERVER</b> あるいは
 * <b>INPUT_ENV</b> のいずれか。
 * </p>
 * @param string $variable_name <p>
 * 取得する変数の名前。
 * </p>
 * @param int $filter [optional]
 * @param mixed $options [optional] <p>
 * オプションあるいはフラグの論理和の連想配列。
 * オプションを指定可能なフィルタの場合、この配列の "flags"
 * フィールドにフラグを指定します。
 * </p>
 * @return mixed 成功した場合は要求された変数の値、フィルタリングに失敗した場合に <b>FALSE</b>、
 * あるいは変数 <i>variable_name</i> が設定されていない場合に
 * <b>NULL</b> を返します。フラグ <b>FILTER_NULL_ON_FAILURE</b>
 * が指定されている場合は、変数が設定されていなければ <b>FALSE</b>、
 * フィルタリングに失敗したら <b>NULL</b> を返します。
 */
function filter_input(int $type, string $variable_name, int $filter = FILTER_DEFAULT, $options = null) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 指定したフィルタでデータをフィルタリングする
 * @link http://php.net/manual/ja/function.filter-var.php
 * @param mixed $variable <p>
 * フィルタリングする値。値をフィルタリングする前に、
 * 内部的に 文字列への変換
 * が行われることに注意しましょう。
 * </p>
 * @param int $filter [optional]
 * @param mixed $options [optional] <p>
 * オプションあるいはフラグの論理和の連想配列。
 * オプションを指定可能なフィルタの場合、この配列の "flags"
 * フィールドにフラグを指定します。
 * "callback" フィルタの場合は、callable 型を渡さなければなりません。
 * コールバックは、フィルタリングする値を引数として受け取り、
 * 処理後の値を返すようにしなければなりません。
 * </p>
 * <p>
 * <code>
 * // オプションを許可するフィルタは、このような形式となります
 * $options = array(
 * 'options' => array(
 * 'default' => 3, // フィルタが失敗した場合に返す値
 * // その他のオプションをここに書きます
 * 'min_range' => 0
 * ),
 * 'flags' => FILTER_FLAG_ALLOW_OCTAL,
 * );
 * $var = filter_var('0755', FILTER_VALIDATE_INT, $options);
 * // フラグのみを許可するフィルタは、それを直接記述します
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
 * // フラグのみを許可するフィルタは、配列として渡すこともできます
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,
 * array('flags' => FILTER_NULL_ON_FAILURE));
 * // コールバック検証フィルタ
 * function foo($value)
 * {
 * // 期待する書式: Surname, GivenNames
 * if (strpos($value, ", ") === false) return false;
 * list($surname, $givennames) = explode(", ", $value, 2);
 * $empty = (empty($surname) || empty($givennames));
 * $notstrings = (!is_string($surname) || !is_string($givennames));
 * if ($empty || $notstrings) {
 * return false;
 * } else {
 * return $value;
 * }
 * }
 * $var = filter_var('Doe, Jane Sue', FILTER_CALLBACK, array('options' => 'foo'));
 * </code>
 * </p>
 * @return mixed フィルタリングされたデータ、あるいは処理に失敗した場合に
 * <b>FALSE</b> を返します。
 */
function filter_var($variable, int $filter = FILTER_DEFAULT, $options = null) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 外部から変数を受け取り、オプションでそれらをフィルタリングする
 * @link http://php.net/manual/ja/function.filter-input-array.php
 * @param int $type <p>
 * <b>INPUT_GET</b>、<b>INPUT_POST</b>、
 * <b>INPUT_COOKIE</b>、<b>INPUT_SERVER</b> あるいは
 * <b>INPUT_ENV</b> のいずれか。
 * </p>
 * @param mixed $definition [optional] <p>
 * 引数を定義する配列。配列のキーとして使用できるのは
 * 変数名を string で表したものです。
 * 対応する値に使用できるのは、フィルタの型か配列 (フィルタ・フラグ・オプションを指定したもの) です。
 * 配列の値として配列を使用する場合に使用できるキーは、
 * filter (フィルタの型)、
 * flags (フィルタに適用するフラグ)
 * および options (フィルタに適用するオプション)
 * です。理解を深めるために、以下の例を参照ください。
 * </p>
 * <p>
 * このパラメータには、フィルタ定数 を表す整数値を指定することもできます。
 * こうすると、入力配列のすべての値がそのフィルタで処理されます。
 * </p>
 * @param bool $add_empty [optional] <p>
 * 存在しないキーは <b>NULL</b> として返り値に追加します。
 * </p>
 * @return mixed 成功した場合は要求された変数の値を含む配列、
 * あるいは失敗した場合に <b>FALSE</b> を返します。
 * 配列の値は、フィルタリングに失敗した場合には <b>FALSE</b>、
 * 変数が設定されていない場合は <b>NULL</b> となります。
 * フラグ <b>FILTER_NULL_ON_FAILURE</b>
 * が指定されている場合は、変数が設定されていないときに <b>FALSE</b>、
 * フィルタリングに失敗した場合に <b>NULL</b> となります。
 */
function filter_input_array(int $type, $definition = null, bool $add_empty = true) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 複数の変数を受け取り、オプションでそれらをフィルタリングする
 * @link http://php.net/manual/ja/function.filter-var-array.php
 * @param array $data <p>
 * 文字列キーの配列。フィルタリングするデータを保持します。
 * </p>
 * @param mixed $definition [optional] <p>
 * 引数を定義する配列。配列のキーとして使用できるのは
 * 変数名を string で表したものです。
 * 対応する値に使用できるのは、
 * フィルタの型か配列 (フィルタ・フラグ・オプションを指定したもの) です。
 * 配列の値として配列を使用する場合に使用できるキーは、
 * filter (フィルタの型)、
 * flags (フィルタに適用するフラグ)
 * および options (フィルタに適用するオプション)
 * です。理解を深めるために、以下の例を参照ください。
 * </p>
 * <p>
 * このパラメータには、フィルタ定数 を表す整数値を指定することもできます。
 * こうすると、入力配列のすべての値がそのフィルタで処理されます。
 * </p>
 * @param bool $add_empty [optional] <p>
 * 存在しないキーは <b>NULL</b> として返り値に追加します。
 * </p>
 * @return mixed 成功した場合は要求された変数の値を含む配列、
 * あるいは失敗した場合に <b>FALSE</b> を返します。
 * 配列の値は、フィルタリングに失敗した場合には <b>FALSE</b>、
 * 変数が設定されていない場合は <b>NULL</b> となります。
 */
function filter_var_array(array $data, $definition = null, bool $add_empty = true) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * サポートされるフィルタの一覧を返す
 * @link http://php.net/manual/ja/function.filter-list.php
 * @return array サポートされる全フィルタの名前の配列を返します。
 * フィルタが存在しない場合は空の配列を返します。
 * この配列のインデックスはフィルタの ID ではありません。
 * ID を取得するには <b>filter_id</b>
 * にフィルタ名を渡します。
 */
function filter_list(): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 指定した型の変数が存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.filter-has-var.php
 * @param int $type <p>
 * <b>INPUT_GET</b>、<b>INPUT_POST</b>、
 * <b>INPUT_COOKIE</b>、<b>INPUT_SERVER</b>、
 * <b>INPUT_ENV</b> のいずれか。
 * </p>
 * @param string $variable_name <p>
 * 調べたい変数の名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function filter_has_var(int $type, string $variable_name): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * フィルタの名前からフィルタ ID を返す
 * @link http://php.net/manual/ja/function.filter-id.php
 * @param string $filtername <p>
 * 取得したいフィルタの名前。
 * </p>
 * @return int フィルタの ID を返します。フィルタが存在しない場合は <b>FALSE</b> を返します。
 */
function filter_id(string $filtername): int {}


/**
 * POST 変数。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_POST', 0);

/**
 * GET 変数。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_GET', 1);

/**
 * COOKIE 変数。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_COOKIE', 2);

/**
 * ENV 変数。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_ENV', 4);

/**
 * SERVER 変数。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_SERVER', 5);

/**
 * SESSION 変数
 * (まだ実装されていません)。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_SESSION', 6);

/**
 * REQUEST 変数
 * (まだ実装されていません)。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('INPUT_REQUEST', 99);

/**
 * フィルタしない。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_NONE', 0);

/**
 * 入力値としてスカラーを要求するために使用するフラグ。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_REQUIRE_SCALAR', 33554432);

/**
 * 入力として配列を要求します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_REQUIRE_ARRAY', 16777216);

/**
 * 常に配列として返します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FORCE_ARRAY', 67108864);

/**
 * 失敗した場合に FALSE ではなく NULL を使用します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_NULL_ON_FAILURE', 134217728);

/**
 * "int" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_INT', 257);

/**
 * "boolean" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_BOOLEAN', 258);

/**
 * "float" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_FLOAT', 259);

/**
 * "validate_regexp" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_REGEXP', 272);
define ('FILTER_VALIDATE_DOMAIN', 277);

/**
 * "validate_url" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_URL', 273);

/**
 * "validate_email" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_EMAIL', 274);

/**
 * "validate_ip" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_IP', 275);

/**
 * "validate_mac_address" フィルタの ID。
 * (PHP 5.5.0 以降で使用可能)
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_VALIDATE_MAC', 276);

/**
 * デフォルト ("unsafe_raw") フィルタの ID。
 * これは <b>FILTER_UNSAFE_RAW</b> と同等です。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_DEFAULT', 516);

/**
 * "unsafe_raw" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_UNSAFE_RAW', 516);

/**
 * "string" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_STRING', 513);

/**
 * "stripped" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_STRIPPED', 513);

/**
 * "encoded" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_ENCODED', 514);

/**
 * "special_chars" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_SPECIAL_CHARS', 515);
define ('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 522);

/**
 * "email" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_EMAIL', 517);

/**
 * "url" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_URL', 518);

/**
 * "number_int" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_NUMBER_INT', 519);

/**
 * "number_float" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_NUMBER_FLOAT', 520);

/**
 * "magic_quotes" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_SANITIZE_MAGIC_QUOTES', 521);

/**
 * "callback" フィルタの ID。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_CALLBACK', 1024);

/**
 * "int" フィルタで 8 進表記 (0[0-7]+) を許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ALLOW_OCTAL', 1);

/**
 * "int" フィルタで 16 進表記 (0x[0-9a-fA-F]+) を許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ALLOW_HEX', 2);

/**
 * ASCII 値が 32 未満の文字を取り除きます。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_STRIP_LOW', 4);

/**
 * ASCII 値が 127 より大きい文字を取り除きます。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_STRIP_HIGH', 8);
define ('FILTER_FLAG_STRIP_BACKTICK', 512);

/**
 * ASCII 値が 32 未満の文字をエンコードします。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ENCODE_LOW', 16);

/**
 * ASCII 値が 127 より大きい文字をエンコードします。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ENCODE_HIGH', 32);

/**
 * &#38;#38; をエンコードします。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ENCODE_AMP', 64);

/**
 * ' および " をエンコードしません。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

/**
 * (現在は使用されていません)
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_EMPTY_STRING_NULL', 256);

/**
 * "number_float" フィルタで小数を許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ALLOW_FRACTION', 4096);

/**
 * "number_float" フィルタで桁区切り文字 (,) を許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ALLOW_THOUSAND', 8192);

/**
 * "number_float" フィルタで科学記法 (e, E)
 * を許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);
define ('FILTER_FLAG_SCHEME_REQUIRED', 65536);
define ('FILTER_FLAG_HOST_REQUIRED', 131072);

/**
 * "validate_url" フィルタでパスを必須とします。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_PATH_REQUIRED', 262144);

/**
 * "validate_url" フィルタでクエリ文字列を必須とします。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_QUERY_REQUIRED', 524288);

/**
 * "validate_ip" フィルタで IPv4 アドレスのみを許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_IPV4', 1048576);

/**
 * "validate_ip" フィルタで IPv6 アドレスのみを許可します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_IPV6', 2097152);

/**
 * "validate_ip" フィルタで予約済みアドレスを拒否します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_NO_RES_RANGE', 4194304);

/**
 * "validate_ip" フィルタでプライベートアドレスを拒否します。
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_NO_PRIV_RANGE', 8388608);
define ('FILTER_FLAG_HOSTNAME', 1048576);

/**
 * Accepts Unicode characters in the local part in "validate_email" filter.
 * (PHP 7.1.0 以降で利用可能)
 * @link http://php.net/manual/ja/filter.constants.php
 */
define ('FILTER_FLAG_EMAIL_UNICODE', 1048576);

// End of filter v.7.1.5
?>
