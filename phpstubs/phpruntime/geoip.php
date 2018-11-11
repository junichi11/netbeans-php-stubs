<?php



/**
 * Get the Autonomous System Numbers (ASN)
 * <p>The <b>geoip_asnum_by_name()</b> function will return the Autonomous System Numbers (ASN) associated with an IP address.</p>
 * @param string $hostname <p>The hostname or IP address.</p>
 * @return string <p>Returns the ASN on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
 * @link http://php.net/manual/ja/function.geoip-asnum-by-name.php
 * @since PECL geoip >= 1.1.0
 */
function geoip_asnum_by_name(string $hostname): string {}

/**
 * 二文字の大陸コードを取得する
 * <p><b>geoip_continent_code_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応する二文字の大陸コードを返します。</p>
 * @param string $hostname <p>場所を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には二文字の大陸コード、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p> <b>大陸コード</b>   コード 大陸名     <i>AF</i> アフリカ   <i>AN</i> 南極   <i>AS</i> アジア   <i>EU</i> ヨーロッパ   <i>NA</i> 北アメリカ   <i>OC</i> オセアニア   <i>SA</i> 南アメリカ
 * @link http://php.net/manual/ja/function.geoip-continent-code-by-name.php
 * @see geoip_country_code_by_name()
 * @since PECL geoip >= 1.0.3
 */
function geoip_continent_code_by_name(string $hostname): string {}

/**
 * 三文字の国コードを取得する
 * <p><b>geoip_country_code3_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応する三文字の国コードを返します。</p>
 * @param string $hostname <p>場所を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には三文字の国コード、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-country-code3-by-name.php
 * @see geoip_country_code_by_name(), geoip_country_name_by_name()
 * @since PECL geoip >= 0.2.0
 */
function geoip_country_code3_by_name(string $hostname): string {}

/**
 * 二文字の国コードを取得する
 * <p><b>geoip_country_code_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応する二文字の国コードを返します。</p>
 * @param string $hostname <p>場所を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には二文字の ISO 国コード、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-country-code-by-name.php
 * @see geoip_country_code3_by_name(), geoip_country_name_by_name()
 * @since PECL geoip >= 0.2.0
 */
function geoip_country_code_by_name(string $hostname): string {}

/**
 * 完全な国名を取得する
 * <p><b>geoip_country_name_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応する完全な国名を返します。</p>
 * @param string $hostname <p>場所を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には国名、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-country-name-by-name.php
 * @see geoip_country_code_by_name(), geoip_country_code3_by_name()
 * @since PECL geoip >= 0.2.0
 */
function geoip_country_name_by_name(string $hostname): string {}

/**
 * GeoIP データベースの情報を取得する
 * <p><b>geoip_database_info()</b> 関数は、 GeoIP データベースのバージョンを返します。 このバージョンはバイナリファイルの内部で定義されています。</p><p>この関数を引数なしでコールすると、GeoIP Free Country Edition のバージョンを返します。</p>
 * @param int $database <p>データベースの型を整数値で指定します。この拡張モジュールで定義されている さまざまな定数 (例: GEOIP_&#42;_EDITION) を使用することができます。</p>
 * @return string <p>対応するデータベースのバージョン、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-database-info.php
 * @since PECL geoip >= 0.2.0
 */
function geoip_database_info(int $database = GEOIP_COUNTRY_EDITION): string {}

/**
 * GeoIP データベースが使用可能かどうかを調べる
 * <p><b>geoip_db_avail()</b> 関数は、対応する GeoIP データベースが存在し、ディスク上にオープンできるかどうかを調べます。</p><p>これは、そのファイルが適切なデータベース形式かどうかを調べるものではありません。 単にそのファイルが読み込み可能かどうかを調べるだけです。</p>
 * @param int $database <p>データベースの形式を表す整数値。この拡張モジュールで定義している さまざまな定数 (GEOIP_&#42;_EDITION) を使用することができます。</p>
 * @return bool <p>データベースが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b>、 エラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-db-avail.php
 * @since PECL geoip >= 1.0.1
 */
function geoip_db_avail(int $database): bool {}

/**
 * 対応する GeoIP データベースのファイル名を返す
 * <p><b>geoip_db_filename()</b> 関数は、 対応する GeoIP データベースのファイル名を返します。</p><p>これは、そのファイルが存在するかどうかを表すものではありません。 単に、ライブラリがデータベースを探す先を返すだけのものです。</p>
 * @param int $database <p>データベースの形式を表す整数値。この拡張モジュールで定義している さまざまな定数 (GEOIP_&#42;_EDITION) を使用することができます。</p>
 * @return string <p>対応するデータベースのファイル名、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-db-filename.php
 * @since PECL geoip >= 1.0.1
 */
function geoip_db_filename(int $database): string {}

/**
 * すべての GeoIP データベース形式についての詳細情報を返す
 * <p><b>geoip_db_get_all_info()</b> 関数は、 すべての GeoIP データベース形式についての詳細情報を多次元配列で返します。</p><p>この関数は、データベースがインストールされていない場合でも使用可能です。 その場合は、使用できないことが返されます。</p><p>返される連想配列のキーは、次のようになります。</p><p></p>
 * @return array <p>連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-db-get-all-info.php
 * @since PECL geoip >= 1.0.1
 */
function geoip_db_get_all_info(): array {}

/**
 * Get the second level domain name
 * <p>The <b>geoip_domain_by_name()</b> function will return the second level domain names associated with a hostname or an IP address.</p><p>This function is currently only available to users who have bought a commercial GeoIP Domain Edition. A warning will be issued if the proper database cannot be located.</p>
 * @param string $hostname <p>The hostname or IP address.</p>
 * @return string <p>Returns the domain name on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
 * @link http://php.net/manual/ja/function.geoip-domain-by-name.php
 * @since PECL geoip >= 1.1.0
 */
function geoip_domain_by_name(string $hostname): string {}

/**
 * インターネット接続方式を取得する
 * <p><b>geoip_id_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応するインターネット接続方式を返します。</p><p>返り値は数値で、以下の定数と比較できます。</p><p></p>
 * @param string $hostname <p>接続方式を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return int <p>接続方式を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-id-by-name.php
 * @since PECL geoip >= 0.2.0
 */
function geoip_id_by_name(string $hostname): int {}

/**
 * インターネットサービスプロバイダ (ISP) 名を取得する
 * <p><b>geoip_isp_by_name()</b> 関数は、 IP アドレスに対応するインターネットサービスプロバイダ (ISP) 名を返します。</p><p>現在この関数を使用できるのは、商用の GeoIP ISP Edition を購入した人だけです。 適切なデータベースが見つからない場合には警告が発生します。</p>
 * @param string $hostname <p>ホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には ISP 名、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-isp-by-name.php
 * @since PECL geoip >= 1.0.2
 */
function geoip_isp_by_name(string $hostname): string {}

/**
 * Get the Internet connection speed
 * <p>The <b>geoip_netspeedcell_by_name()</b> function will return the Internet connection type and speed corresponding to a hostname or an IP address.</p><p>This function is only available if using GeoIP Library version 1.4.8 or newer.</p><p>This function is currently only available to users who have bought a commercial GeoIP NetSpeedCell Edition. A warning will be issued if the proper database cannot be located.</p><p>The return value is a string, common values are:</p><p></p>
 * @param string $hostname <p>The hostname or IP address.</p>
 * @return string <p>Returns the connection speed on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
 * @link http://php.net/manual/ja/function.geoip-netspeedcell-by-name.php
 * @since PECL geoip >= 1.1.0
 */
function geoip_netspeedcell_by_name(string $hostname): string {}

/**
 * 組織名を取得する
 * <p><b>geoip_org_by_name()</b> 関数は、 その IP アドレスが割り当てられている組織の名前を返します。</p><p>現在この関数を使用できるのは、商用の GeoIP Organization, ISP あるいは AS Edition を購入した人だけです。 適切なデータベースが見つからない場合には警告が発生します。</p>
 * @param string $hostname <p>ホスト名あるいは IP アドレス。</p>
 * @return string <p>成功した場合には組織名、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-org-by-name.php
 * @since PECL geoip >= 0.2.0
 */
function geoip_org_by_name(string $hostname): string {}

/**
 * GeoIP データベースで見つかった詳細な都市情報を返す
 * <p><b>geoip_record_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応するレコード情報を返します。</p><p>この関数は、GeoLite City Edition および商用の GeoIP City Edition のどちらでも使用可能です。 適切なデータベースが見つからない場合には警告が発生します。</p><p>返される連想配列には、以下のようなさまざまな名前のキーが含まれます。</p><p></p>
 * @param string $hostname <p>レコードを探す対象となるホスト名あるいは IP アドレス。</p>
 * @return array <p>成功した場合には連想配列、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-record-by-name.php
 * @since PECL geoip >= 0.2.0
 */
function geoip_record_by_name(string $hostname): array {}

/**
 * 国コードおよび地域を取得する
 * <p><b>geoip_region_by_name()</b> 関数は、 ホスト名あるいは IP アドレスに対応する国および地域を返します。</p><p>現在この関数を使用できるのは、商用の GeoIP Region Edition を購入した人だけです。 適切なデータベースが見つからない場合には警告が発生します。</p><p>返される連想配列には、以下のようなさまざまな名前のキーが含まれます。</p><p></p>
 * @param string $hostname <p>地域を探す対象となるホスト名あるいは IP アドレス。</p>
 * @return array <p>成功した場合には連想配列、 アドレスがデータベースで見つからない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-region-by-name.php
 * @since PECL geoip >= 0.2.0
 */
function geoip_region_by_name(string $hostname): array {}

/**
 * 国コードと地域コードから地域名を返す
 * <p><b>geoip_region_name_by_code()</b> 関数は、 国コードと地域コードの組み合わせに対応する地域名を返します。</p><p>アメリカの場合、地域コードは各州の名前を二文字で略したものとなります。 カナダの場合、地域コードは Canada Post による二文字の州コードに対応します。</p><p>それ以外の場所では、GeoIP は FIPS 10-4 コードを用いて地域を表します。 FIPS 10-4 コードの詳細な一覧は » http://www.maxmind.com/app/fips10_4 で確認できます。</p><p>この関数は、GeoIP Library バージョン 1.4.1 以降を使っている場合に使用可能です。 データは直接 GeoIP Library から受け取り、データベースは使用しません。</p>
 * @param string $country_code <p>二文字の国コード (<code>geoip_country_code_by_name()</code> を参照ください)。</p>
 * @param string $region_code <p>二文字 (あるいは二桁) の地域コード (<code>geoip_region_by_name()</code> を参照ください)。</p>
 * @return string <p>成功した場合は地域名、国コードと地域コードの組に対応する地域が見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-region-name-by-code.php
 * @since PECL geoip >= 1.0.4
 */
function geoip_region_name_by_code(string $country_code, string $region_code): string {}

/**
 * Set a custom directory for the GeoIP database
 * <p>The <b>geoip_setup_custom_directory()</b> function will change the default directory of the GeoIP database. This is equivalent to changing geoip.custom_directory.</p>
 * @param string $path <p>The full path of where the GeoIP database is on disk.</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.geoip-setup-custom-directory.php
 * @since PECL geoip >= 1.1.0
 */
function geoip_setup_custom_directory(string $path): void {}

/**
 * 国コードと地域コードからタイムゾーンを返す
 * <p><b>geoip_time_zone_by_country_and_region()</b> 関数は、 国コードと地域コードの組み合わせに対応するタイムゾーンを返します。</p><p>アメリカの場合、地域コードは各州の名前を二文字で略したものとなります。 カナダの場合、地域コードは Canada Post による二文字の州コードに対応します。</p><p>それ以外の場所では、GeoIP は FIPS 10-4 コードを用いて地域を表します。 FIPS 10-4 コードの詳細な一覧は » http://www.maxmind.com/app/fips10_4 で確認できます。</p><p>この関数は、GeoIP Library バージョン 1.4.1 以降を使っている場合に使用可能です。 データは直接 GeoIP Library から受け取り、データベースは使用しません。</p>
 * @param string $country_code <p>二文字の国コード (<code>geoip_country_code_by_name()</code> を参照ください)。</p>
 * @param string $region_code <p>二文字 (あるいは二桁) の地域コード (<code>geoip_region_by_name()</code> を参照ください)。</p>
 * @return string <p>成功した場合はタイムゾーン、国コードと地域コードの組に対応するタイムゾーンが見つからなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.geoip-time-zone-by-country-and-region.php
 * @since PECL geoip >= 1.0.4
 */
function geoip_time_zone_by_country_and_region(string $country_code, string $region_code = NULL): string {}

define('GEOIP_ASNUM_EDITION', null);

define('GEOIP_CABLEDSL_SPEED', null);

define('GEOIP_CITY_EDITION_REV0', null);

define('GEOIP_CITY_EDITION_REV1', null);

define('GEOIP_CORPORATE_SPEED', null);

define('GEOIP_COUNTRY_EDITION', null);

define('GEOIP_DIALUP_SPEED', null);

define('GEOIP_DOMAIN_EDITION', null);

define('GEOIP_ISP_EDITION', null);

define('GEOIP_NETSPEED_EDITION', null);

define('GEOIP_ORG_EDITION', null);

define('GEOIP_PROXY_EDITION', null);

define('GEOIP_REGION_EDITION_REV0', null);

define('GEOIP_REGION_EDITION_REV1', null);

define('GEOIP_UNKNOWN_SPEED', null);

