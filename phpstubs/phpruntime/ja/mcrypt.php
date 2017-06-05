<?php

// Start of mcrypt v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した暗号のキーの長さを得る
 * @link http://php.net/manual/ja/function.mcrypt-get-key-size.php
 * @param int $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @return int そのアルゴリズムでサポートする最長のキーサイズをバイト数で返します。
 * 失敗した場合に <b>FALSE</b> を返します.
 */
function mcrypt_get_key_size(int $cipher): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した暗号のブロックサイズを得る
 * @link http://php.net/manual/ja/function.mcrypt-get-block-size.php
 * @param int $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @return int ブロックサイズを整数値で返します。
 */
function mcrypt_get_block_size(int $cipher): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した暗号の名前を得る
 * @link http://php.net/manual/ja/function.mcrypt-get-cipher-name.php
 * @param int $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @return string 暗号の名前、あるいは暗号が存在しない場合に <b>FALSE</b> を返します。
 */
function mcrypt_get_cipher_name(int $cipher): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 乱数ソースから初期化ベクトル(IV)を生成する
 * @link http://php.net/manual/ja/function.mcrypt-create-iv.php
 * @param int $size <p>
 * IV のサイズ。
 * </p>
 * @param int $source [optional] <p>
 * IV のソース。
 * <b>MCRYPT_RAND</b> (システムの乱数生成器)、
 * <b>MCRYPT_DEV_RANDOM</b> (/dev/random
 * からデータを読む)および <b>MCRYPT_DEV_URANDOM</b>
 * (/dev/urandom からデータを読む) を指定できます。
 * 5.3.0 より前は、 Windows でサポートされているのは <b>MCRYPT_RAND</b>
 * のみでした。
 * </p>
 * <p>
 * このパラメータのデフォルト値は、PHP 5.6.0 より前のバージョンでは
 * <b>MCRYPT_DEV_RANDOM</b> でした。
 * </p>
 * <b>MCRYPT_DEV_RANDOM</b> は、エントロピーが使えるようになるまでブロックする可能性があることに注意しましょう。
 * @return string 初期化ベクトル、あるいはエラー時に <b>FALSE</b> を返します。
 */
function mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * サポートされる全ての暗号を配列として取得する
 * @link http://php.net/manual/ja/function.mcrypt-list-algorithms.php
 * @param string $lib_dir [optional] <p>
 * すべてのアルゴリズムが存在するディレクトリを指定します。
 * 指定しない場合は、<i>php.ini</i> の
 * mcrypt.algorithms_dir ディレクティブを使用します。
 * </p>
 * @return array サポートするすべてのアルゴリズムを配列で返します。
 */
function mcrypt_list_algorithms(string $lib_dir = 'ini_get("mcrypt.algorithms_dir")'): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * サポートされる全てのモードの配列を取得する
 * @link http://php.net/manual/ja/function.mcrypt-list-modes.php
 * @param string $lib_dir [optional] <p>
 * すべてのモードが存在するディレクトリを指定します。
 * 指定しない場合は、
 * <i>php.ini</i> ディレクティブ mcrypt.modes_dir を使用します。
 * </p>
 * @return array サポートするすべてのモードを配列で返します。
 */
function mcrypt_list_modes(string $lib_dir = 'ini_get("mcrypt.modes_dir")'): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定した暗号/モードの組み合わせに属する IV の大きさを返す
 * @link http://php.net/manual/ja/function.mcrypt-get-iv-size.php
 * @param string $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @param string $mode 定数 <b>MCRYPT_MODE_モード名</b>、あるいは文字列
 * "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
 * <p>
 * ECB モードでは IV は要求されないため、IV は無視されます。
 * 暗号化と復号の際には、同じ IV(開始位置)を必要とします。さもないと
 * 暗号化処理は失敗します。
 * </p>
 * @return int 初期化ベクトル(IV)の大きさをバイト数で返します。
 * エラーの際には <b>FALSE</b> を返します。IV
 * が指定した暗号/モードで無視される場合には、ゼロを返します。
 */
function mcrypt_get_iv_size(string $cipher, string $mode): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したパラメータでプレーンテキストを暗号化する
 * @link http://php.net/manual/ja/function.mcrypt-encrypt.php
 * @param string $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @param string $key <p>
 * データを暗号化する際のキー。
 * 指定した暗号化方式に対応していないサイズのキーを渡された場合は、
 * 警告を発して <b>FALSE</b> を返します。
 * </p>
 * @param string $data <p>
 * 指定した <i>cipher</i> および <i>mode</i> で暗号化するデータ。
 * データの大きさが n * blocksize でない場合、データは、
 * '\0'で埋められます。
 * </p>
 * <p>
 * 返される暗号化されたテキストは、<i>data</i>
 * で指定したデータの大きさよりも大きくなる可能性があります。
 * </p>
 * @param string $mode 定数 <b>MCRYPT_MODE_モード名</b>、あるいは文字列
 * "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
 * @param string $iv [optional] CBC, CFB, OFB モードおよび
 * STREAM モードのいくつかのアルゴリズムの初期化の際に使用されます。
 * 指定した IV のサイズがそのモードでサポートされていない場合、
 * あるいは IV を必要とするモードで IV が指定されなかった場合は、
 * この関数は警告を発して <b>FALSE</b> を返します。</p>
 * @return string 暗号化されたデータを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv = null): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したパラメータで暗号化されたテキストを復号する
 * @link http://php.net/manual/ja/function.mcrypt-decrypt.php
 * @param string $cipher <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @param string $key <p>
 * データを暗号化した際のキー。
 * 指定した暗号化方式に対応していないサイズのキーを渡された場合は、
 * 警告を発して <b>FALSE</b> を返します。
 * </p>
 * @param string $data <p>
 * このデータが、指定した <i>cipher</i> および <i>mode</i> で復号されます。
 * データの大きさが n * blocksize でない場合、データは、
 * '\0' で埋められます。
 * </p>
 * @param string $mode 定数 <b>MCRYPT_MODE_モード名</b>、あるいは文字列
 * "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
 * @param string $iv [optional] CBC, CFB, OFB モードおよび
 * STREAM モードのいくつかのアルゴリズムの初期化の際に使用されます。
 * 指定した IV のサイズがそのモードでサポートされていない場合、
 * あるいは IV を必要とするモードで IV が指定されなかった場合は、
 * この関数は警告を発して <b>FALSE</b> を返します。</p>
 * @return string 復号されたデータを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv = null): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 使用するアルゴリズムおよびモードのモジュールをオープンする
 * @link http://php.net/manual/ja/function.mcrypt-module-open.php
 * @param string $algorithm <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @param string $algorithm_directory <p>
 * 暗号化モジュールの位置を指定する際には
 * <i>algorithm_directory</i> を使います。
 * ディレクトリ名を指定した場合には、これが使用されます。
 * これらの一つに空の文字列("")を指定した場合、<i>php.ini</i> ディレクティブ
 * <i>mcrypt.algorithms_dir</i> に設定された値を使います。
 * これらが設定されていない場合、libmcrypt をコンパイルした際の
 * デフォルトのディレクトリ (通常は/usr/local/lib/libmcrypt)
 * を使います。
 * </p>
 * @param string $mode 定数 <b>MCRYPT_MODE_モード名</b>、あるいは文字列
 * "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
 * @param string $mode_directory <p>
 * 暗号化モジュールの位置を指定する際には
 * <i>mode_directory</i> を使います。
 * ディレクトリ名を指定した場合には、これが使用されます。
 * これらの一つに空の文字列("")を指定した場合、<i>php.ini</i> ディレクティブ
 * mcrypt.modes_dir に設定された値を使います。
 * これらが設定されていない場合、libmcrypt をコンパイルした際の
 * デフォルトのディレクトリ (通常は/usr/local/lib/libmcrypt)
 * を使います。
 * </p>
 * @return resource 通常は暗号化記述子を返します。エラー時は <b>FALSE</b> を返します。
 */
function mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory) {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 暗号化に必要な全てのバッファを初期化する
 * @link http://php.net/manual/ja/function.mcrypt-generic-init.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @param string $key <p>
 * キーの最大長は、<b>mcrypt_enc_get_key_size</b> を
 * コールした際に得られるキー長であり、この値より小さな値は全て有効です。
 * </p>
 * @param string $iv <p>
 * IV は通常そのアルゴリズムのブロック長と同じ大きさですが、
 * <b>mcrypt_enc_get_iv_size</b> をコールする
 * ことにより、その大きさを得る必要があります。IV は ECB では
 * 無視されます。IV は CFB、CBC、STREAM、nOFB では必須です。
 * IV はランダムで一意である必要があります(しかし、秘密ではある必要は
 * ありません)。暗号化と復号で同じ IV を使用する必要があります。
 * IV を使用したくない場合にはゼロに設定しますが、これは推奨されません。
 * </p>
 * @return int この関数は、エラー時に負の値を返します。キー長が不正な場合に
 * -3、メモリの確保に問題があった場合に -4、そしてそれ以外の返り値は
 * その他のエラーとなります。エラーが警告を発生させた場合、それが
 * 表示されます。間違ったパラメータが渡された場合には <b>FALSE</b>
 * が返されます。
 */
function mcrypt_generic_init($td, string $key, string $iv): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * データを暗号化する
 * @link http://php.net/manual/ja/function.mcrypt-generic.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * <p>
 * この関数をコールする前には、常にキーと IV を用いて
 * <b>mcrypt_generic_init</b> で暗号化ハンドルを
 * 初期化しておくべきです。暗号化が終了したら、
 * <b>mcrypt_generic_deinit</b> をコールして
 * 暗号化バッファを開放すべきです。使用例は
 * <b>mcrypt_module_open</b> を参照ください。
 * </p>
 * @param string $data <p>
 * 暗号化するデータ。
 * </p>
 * @return string 暗号化したデータを返します。
 */
function mcrypt_generic($td, string $data): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * データを復号する
 * @link http://php.net/manual/ja/function.mdecrypt-generic.php
 * @param resource $td <p>
 * <b>mcrypt_module_open</b> が返す暗号化記述子。
 * </p>
 * @param string $data <p>
 * 暗号化されたデータ。
 * </p>
 * @return string
 */
function mdecrypt_generic($td, string $data): string {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * 暗号化モジュールを終了する
 * @link http://php.net/manual/ja/function.mcrypt-generic-deinit.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mcrypt_generic_deinit($td): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンしたモジュールのセルフテストを実行する
 * @link http://php.net/manual/ja/function.mcrypt-enc-self-test.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return int セルフテストが成功した場合は <b>FALSE</b>
 * を返します。エラーの場合は <b>TRUE</b> を返します。
 */
function mcrypt_enc_self_test($td): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードの暗号がブロックモードで動作するかどうかを調べる
 * @link http://php.net/manual/ja/function.mcrypt-enc-is-block-algorithm-mode.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return bool モードがブロックアルゴリズムを使用している場合に <b>TRUE</b>、
 * その他の場合に <b>FALSE</b> を返します。
 */
function mcrypt_enc_is_block_algorithm_mode($td): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードの暗号がブロックアルゴリズムであるかどうかを調べる
 * @link http://php.net/manual/ja/function.mcrypt-enc-is-block-algorithm.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return bool アルゴリズムがブロックアルゴリズムである場合に <b>TRUE</b>、
 * ストリームアルゴリズムである場合に <b>FALSE</b> を返します。
 */
function mcrypt_enc_is_block_algorithm($td): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードがブロック出力を行うかどうかを調べる
 * @link http://php.net/manual/ja/function.mcrypt-enc-is-block-mode.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return bool バイトブロックを出力するモードの場合に <b>TRUE</b>、
 * バイト出力を行うモードの場合に <b>FALSE</b> を返します。
 */
function mcrypt_enc_is_block_mode($td): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたアルゴリズムのブロックサイズを返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-block-size.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return int 指定したアルゴリズムのブロック長をバイト単位で返します。
 */
function mcrypt_enc_get_block_size($td): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードでサポートされる最大キー長を返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-key-size.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return int そのアルゴリズムでサポートされる最大キー長をバイト単位で返します。
 */
function mcrypt_enc_get_key_size($td): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたアルゴリズムでサポートされるキー長を配列にして返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-supported-key-sizes.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return array 暗号化記述子で指定したアルゴリズムでサポートされるキー長を配列と
 * して返します。返された配列が空の場合、1 と
 * <b>mcrypt_enc_get_key_size</b> の値の間のすべての
 * キー長がアルゴリズムでサポートされます。
 */
function mcrypt_enc_get_supported_key_sizes($td): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたアルゴリズムの IV の大きさを返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-iv-size.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return int この関数は、暗号化記述子で指定したアルゴリズムの iv の大きさを
 * バイト単位で返します。
 * この関数が '0' を返す場合、IV は
 * そのアルゴリズムでは無視されます。
 */
function mcrypt_enc_get_iv_size($td): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたアルゴリズムの名前を返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-algorithms-name.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return string オープンしたアルゴリズムの名前を文字列で返します。
 */
function mcrypt_enc_get_algorithms_name($td): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードの名前を返す
 * @link http://php.net/manual/ja/function.mcrypt-enc-get-modes-name.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return string 名前を表す文字列を返します。
 */
function mcrypt_enc_get_modes_name($td): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したモジュールのセルフテストを実行する
 * @link http://php.net/manual/ja/function.mcrypt-module-self-test.php
 * @param string $algorithm <b>MCRYPT_暗号名</b> 定数のいずれか、
 * あるいはアルゴリズム名をあらわす文字列。</p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータ <i>lib_dir</i> により、
 * システム上での algorithm モジュールの位置を指定することが可能です。
 * </p>
 * @return bool この関数は、セルフテストが成功した場合 <b>TRUE</b>、失敗した場合に <b>FALSE</b>
 * を返します。
 */
function mcrypt_module_self_test(string $algorithm, string $lib_dir = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したモジュールがブロックアルゴリズムであるかどうかを返す
 * @link http://php.net/manual/ja/function.mcrypt-module-is-block-algorithm-mode.php
 * @param string $mode <p>
 * 調べたいモード。
 * </p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータ <i>lib_dir</i> により、
 * システム上での mode モジュールの位置を指定することが可能です。
 * </p>
 * @return bool この関数は、mode がブロックアルゴリズムを使用する場合に <b>TRUE</b>、
 * その他の場合に <b>FALSE</b> を返します。(例: stream の場合に <b>FALSE</b>、
 * cbc、cfb、ofb の場合に <b>TRUE</b>)
 */
function mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したアルゴリズムがブロックアルゴリズムであるかを調べる
 * @link http://php.net/manual/ja/function.mcrypt-module-is-block-algorithm.php
 * @param string $algorithm <p>
 * 調べたいアルゴリズム。
 * </p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータ <i>lib_dir</i> により、
 * システム上での algorithm モジュールの位置を指定することが可能です。
 * </p>
 * @return bool この関数は、指定したアルゴリズムがブロックアルゴリズムの場合に
 * <b>TRUE</b>、ストリームアルゴリズムの場合に <b>FALSE</b> を返します。
 */
function mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したモードがブロック出力を行うかどうかを返す
 * @link http://php.net/manual/ja/function.mcrypt-module-is-block-mode.php
 * @param string $mode 定数 <b>MCRYPT_MODE_モード名</b>、あるいは文字列
 * "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータ
 * <i>lib_dir</i> により、システム上での mode モジュールの
 * 位置を指定することが可能です。
 * </p>
 * @return bool この関数は、ブロック出力を行うモードの場合に <b>TRUE</b>、バイトのみを
 * 出力する場合に <b>FALSE</b> を返します(例: cbc と ecb の場合に <b>TRUE</b>、
 * cfb と streamの場合に <b>FALSE</b>)。
 */
function mcrypt_module_is_block_mode(string $mode, string $lib_dir = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定したアルゴリズムのブロック長を返す
 * @link http://php.net/manual/ja/function.mcrypt-module-get-algo-block-size.php
 * @param string $algorithm <p>
 * アルゴリズム名。
 * </p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータで、
 * システム上でのモードモジュールの位置を指定することが可能です。
 * </p>
 * @return int 指定したアルゴリズムでサポートされるブロック長をバイト単位で返します。
 */
function mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir = null): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたモードでサポートされる最大キー長を返す
 * @link http://php.net/manual/ja/function.mcrypt-module-get-algo-key-size.php
 * @param string $algorithm <p>
 * アルゴリズム名。
 * </p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータで、
 * システム上でのモードモジュールの位置を指定することが可能です。
 * </p>
 * @return int この関数は、指定したアルゴリズムでサポートされる最大キー長をバイト単位で返します。
 */
function mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir = null): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * オープンされたアルゴリズムでサポートされるキーのサイズを配列として返す
 * @link http://php.net/manual/ja/function.mcrypt-module-get-supported-key-sizes.php
 * @param string $algorithm <p>
 * 使用するアルゴリズム。
 * </p>
 * @param string $lib_dir [optional] <p>
 * オプションのパラメータ <i>lib_dir</i> により、
 * システムでアルゴリズムモジュールがある場所を指定することが可能です。
 * </p>
 * @return array 指定したアルゴリズムでサポートするキーサイズの配列を返します。
 * 空の配列を返した場合は、そのアルゴリズムでは 1 から
 * <b>mcrypt_module_get_algo_key_size</b>
 * までのすべてのキーサイズをサポートすることになります。
 */
function mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir = null): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * mcrypt モジュールを閉じる
 * @link http://php.net/manual/ja/function.mcrypt-module-close.php
 * @param resource $td <p>
 * 暗号化記述子。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mcrypt_module_close($td): bool {}

define ('MCRYPT_ENCRYPT', 0);
define ('MCRYPT_DECRYPT', 1);
define ('MCRYPT_DEV_RANDOM', 0);
define ('MCRYPT_DEV_URANDOM', 1);
define ('MCRYPT_RAND', 2);
define ('MCRYPT_3DES', "tripledes");
define ('MCRYPT_ARCFOUR_IV', "arcfour-iv");
define ('MCRYPT_ARCFOUR', "arcfour");
define ('MCRYPT_BLOWFISH', "blowfish");
define ('MCRYPT_BLOWFISH_COMPAT', "blowfish-compat");
define ('MCRYPT_CAST_128', "cast-128");
define ('MCRYPT_CAST_256', "cast-256");
define ('MCRYPT_CRYPT', "crypt");
define ('MCRYPT_DES', "des");
define ('MCRYPT_ENIGNA', "crypt");
define ('MCRYPT_GOST', "gost");
define ('MCRYPT_LOKI97', "loki97");
define ('MCRYPT_PANAMA', "panama");
define ('MCRYPT_RC2', "rc2");
define ('MCRYPT_RIJNDAEL_128', "rijndael-128");
define ('MCRYPT_RIJNDAEL_192', "rijndael-192");
define ('MCRYPT_RIJNDAEL_256', "rijndael-256");
define ('MCRYPT_SAFER64', "safer-sk64");
define ('MCRYPT_SAFER128', "safer-sk128");
define ('MCRYPT_SAFERPLUS', "saferplus");
define ('MCRYPT_SERPENT', "serpent");
define ('MCRYPT_THREEWAY', "threeway");
define ('MCRYPT_TRIPLEDES', "tripledes");
define ('MCRYPT_TWOFISH', "twofish");
define ('MCRYPT_WAKE', "wake");
define ('MCRYPT_XTEA', "xtea");
define ('MCRYPT_IDEA', "idea");
define ('MCRYPT_MARS', "mars");
define ('MCRYPT_RC6', "rc6");
define ('MCRYPT_SKIPJACK', "skipjack");
define ('MCRYPT_MODE_CBC', "cbc");
define ('MCRYPT_MODE_CFB', "cfb");
define ('MCRYPT_MODE_ECB', "ecb");
define ('MCRYPT_MODE_NOFB', "nofb");
define ('MCRYPT_MODE_OFB', "ofb");
define ('MCRYPT_MODE_STREAM', "stream");

// End of mcrypt v.7.0.19
?>
