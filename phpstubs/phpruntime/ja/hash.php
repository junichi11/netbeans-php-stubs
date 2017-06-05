<?php

// Start of hash v.1.0

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * ハッシュ値 (メッセージダイジェスト) を生成する
 * @link http://php.net/manual/ja/function.hash.php
 * @param string $algo <p>
 * 選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。
 * </p>
 * @param string $data <p>
 * ハッシュするメッセージ。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を設定すると、生のバイナリデータを出力します。
 * <b>FALSE</b> の場合は小文字の 16 進数値となります。
 * </p>
 * @return string <i>raw_output</i> が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。
 */
function hash(string $algo, string $data, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * ファイルの内容から、ハッシュ値を生成する
 * @link http://php.net/manual/ja/function.hash-file.php
 * @param string $algo <p>
 * 選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。
 * </p>
 * @param string $filename <p>
 * ハッシュ対象となるファイルの位置を示す URL。
 * fopen ラッパーをサポートしています。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を設定すると、生のバイナリデータを出力します。
 * <b>FALSE</b> の場合は小文字の 16 進数値となります。
 * </p>
 * @return string <i>raw_output</i> が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。
 */
function hash_file(string $algo, string $filename, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * HMAC 方式を使用してハッシュ値を生成する
 * @link http://php.net/manual/ja/function.hash-hmac.php
 * @param string $algo <p>
 * 選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。
 * サポートするアルゴリズムの一覧は <b>hash_algos</b> を参照ください。
 * </p>
 * @param string $data <p>
 * ハッシュするメッセージ。
 * </p>
 * @param string $key <p>
 * HMAC 方式でのメッセージダイジェストを生成するために使用する
 * 共有の秘密鍵。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を設定すると、生のバイナリデータを出力します。
 * <b>FALSE</b> の場合は小文字の 16 進数値となります。
 * </p>
 * @return string <i>raw_output</i> が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。
 * <i>algo</i> が未知の場合は <b>FALSE</b> を返します。
 */
function hash_hmac(string $algo, string $data, string $key, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * HMAC 方式を使用して、指定されたファイルの内容からハッシュ値を生成する
 * @link http://php.net/manual/ja/function.hash-hmac-file.php
 * @param string $algo <p>
 * 選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。
 * サポートするアルゴリズムの一覧は <b>hash_algos</b> を参照ください。
 * </p>
 * @param string $filename <p>
 * ハッシュ対象となるファイルの位置を示す URL。
 * fopen ラッパーをサポートしています。
 * </p>
 * @param string $key <p>
 * HMAC 方式でのメッセージダイジェストを生成するために使用する
 * 共有の秘密鍵。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を設定すると、生のバイナリデータを出力します。
 * <b>FALSE</b> の場合は小文字の 16 進数値となります。
 * </p>
 * @return string <i>raw_output</i> が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。
 */
function hash_hmac_file(string $algo, string $filename, string $key, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * 段階的なハッシュコンテキストを初期化する
 * @link http://php.net/manual/ja/function.hash-init.php
 * @param string $algo <p>
 * 選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。
 * サポートされているアルゴリズムの一覧については、<b>hash_algos</b> を参照してください。
 * </p>
 * @param int $options [optional] <p>
 * ハッシュ生成の際に使用するオプションで、現在は、ただひとつ
 * <b>HASH_HMAC</b> のみをサポートしています。これが
 * 指定された場合、<i>key</i> を
 * 必ず指定しなければなりません。
 * </p>
 * @param string $key [optional] <p>
 * <i>options</i> に <b>HASH_HMAC</b>
 * が指定された場合に、HMAC 形式のハッシュで使用される共有の秘密鍵を
 * 設定する必要があります。
 * </p>
 * @return resource <b>hash_update</b>、
 * <b>hash_update_stream</b>、<b>hash_update_file</b>
 * および <b>hash_final</b> で使用するハッシュコンテキストリソースを
 * 返します。
 */
function hash_init(string $algo, int $options = 0, string $key = null) {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * アクティブなハッシュコンテキストにデータを投入する
 * @link http://php.net/manual/ja/function.hash-update.php
 * @param resource $context <p>
 * <b>hash_init</b> が返すハッシュコンテキスト。
 * </p>
 * @param string $data <p>
 * ハッシュダイジェストに含めるメッセージ。
 * </p>
 * @return bool <b>TRUE</b> を返します。
 */
function hash_update($context, string $data): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * アクティブなハッシュコンテキストに、オープンしているストリームから
データを投入する
 * @link http://php.net/manual/ja/function.hash-update-stream.php
 * @param resource $context <p>
 * <b>hash_init</b> が返すハッシュコンテキスト。
 * </p>
 * @param resource $handle <p>
 * ストリーム作成用の関数が返す、オープンしているファイルハンドル。
 * </p>
 * @param int $length [optional] <p>
 * <i>handle</i> からハッシュコンテキストにコピーする
 * 最大文字数。
 * </p>
 * @return int <i>handle</i> からハッシュコンテキストに追加された
 * 実際のバイト数を返します。
 */
function hash_update_stream($context, $handle, int $length = -1): int {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * アクティブなハッシュコンテキストに、ファイルからデータを投入する
 * @link http://php.net/manual/ja/function.hash-update-file.php
 * @param resource $hcontext <p>
 * <b>hash_init</b> が返すハッシュコンテキスト。
 * </p>
 * @param string $filename <p>
 * ハッシュ対象となるファイルの位置を示す URL。
 * fopen ラッパーをサポートしています。
 * </p>
 * @param resource $scontext [optional] <p>
 * <b>stream_context_create</b> が返す
 * ストリームコンテキスト。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function hash_update_file($hcontext, string $filename, $scontext = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * 段階的なハッシュ処理を終了し、出来上がったダイジェストを返す
 * @link http://php.net/manual/ja/function.hash-final.php
 * @param resource $context <p>
 * <b>hash_init</b> が返すハッシュコンテキスト。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を設定すると、生のバイナリデータを出力します。
 * <b>FALSE</b> の場合は小文字の 16 進数値となります。
 * </p>
 * @return string <i>raw_output</i> が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。
 */
function hash_final($context, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * ハッシュコンテキストをコピーする
 * @link http://php.net/manual/ja/function.hash-copy.php
 * @param resource $context <p>
 * <b>hash_init</b> が返すハッシュコンテキスト。
 * </p>
 * @return resource ハッシュコンテキストリソースのコピーを返します。
 */
function hash_copy($context) {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL hash &gt;= 1.1)<br/>
 * 登録されているハッシュアルゴリズムの一覧を返す
 * @link http://php.net/manual/ja/function.hash-algos.php
 * @return array サポートされているハッシュアルゴリズムの一覧を、数値添字の
 * 配列として返します。
 */
function hash_algos(): array {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * PBKDF2 を使ってパスワードからキーを生成する
 * @link http://php.net/manual/ja/function.hash-pbkdf2.php
 * @param $algo
 * @param $password
 * @param $salt
 * @param $iterations
 * @param $length [optional]
 * @param $raw_output [optional]
 * @return mixed 小文字の16進数を含む文字列が返されます。<i>raw_output</i> が <b>TRUE</b> の場合、派生キーの生のバイナリ表現が返されます。
 */
function hash_pbkdf2($algo, $password, $salt, $iterations, $length, $raw_output) {}

/**
 * @param $known_string
 * @param $user_string
 */
function hash_equals($known_string, $user_string) {}


/**
 * <b>hash_init</b> のオプションのフラグです。
 * 現在のハッシュコンテキストに対して HMAC digest-keying
 * アルゴリズムが適用されることを示します。
 * @link http://php.net/manual/ja/hash.constants.php
 */
define ('HASH_HMAC', 1);

// End of hash v.1.0
?>
