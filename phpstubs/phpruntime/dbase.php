<?php



namespace {

	/**
	 * Adds a record to a database
	 * <p>Adds the given data to the database.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @param array $record <p>An indexed array of data. The number of items must be equal to the number of fields in the database, otherwise <b>dbase_add_record()</b> will fail.</p>  <p><b>注意</b>:</p> <p>If you're using <code>dbase_get_record()</code> return value for this parameter, remember to reset the key named <i>deleted</i>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbase-add-record.php
	 * @see dbase_delete_record(), dbase_replace_record()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_add_record($dbase_identifier, array $record): bool {}

	/**
	 * Closes a database
	 * <p>Closes the given database link identifier.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbase-close.php
	 * @see dbase_open(), dbase_create()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_close($dbase_identifier): bool {}

	/**
	 * Creates a database
	 * <p><b>dbase_create()</b> creates a dBase database with the given definition. If the file already exists, it is not truncated. <code>dbase_pack()</code> can be called to force truncation.</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p><p><b>注意</b>:</p><p>この関数の動作は、open_basedir の設定に依存します。</p>
	 * @param string $filename <p>The name of the database. It can be a relative or absolute path to the file where dBase will store your data.</p>
	 * @param array $fields <p>An array of arrays, each array describing the format of one field of the database. Each field consists of a name, a character indicating the field type, and optionally, a length, a precision and a nullable flag. The supported field types are listed in the introduction section.</p>  <p><b>注意</b>:</p> <p>The fieldnames are limited in length and must not exceed 10 chars.</p>
	 * @param int $type <p>The type of database to be created. Either <b><code>DBASE_TYPE_DBASE</code></b> or <b><code>DBASE_TYPE_FOXPRO</code></b>.</p>
	 * @return resource <p>Returns a database link identifier if the database is successfully created, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/ja/function.dbase-create.php
	 * @see dbase_open(), dbase_close()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_create(string $filename, array $fields, int $type = DBASE_TYPE_DBASE) {}

	/**
	 * Deletes a record from a database
	 * <p>Marks the given record to be deleted from the database.</p><p><b>注意</b>:</p><p>To actually remove the record from the database, you must also call <code>dbase_pack()</code>.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @param int $record_number <p>An integer which spans from 1 to the number of records in the database (as returned by <code>dbase_numrecords()</code>).</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbase-delete-record.php
	 * @see dbase_add_record(), dbase_replace_record()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_delete_record($dbase_identifier, int $record_number): bool {}

	/**
	 * Gets the header info of a database
	 * <p>Returns information on the column structure of the given database link identifier.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @return array <p>An indexed array with an entry for each column in the database. The array index starts at 0.</p><p>Each array element contains an associative array of column information, as described here:</p>  name   The name of the column    type   The human-readable name for the dbase type of the column (i.e. date, boolean, etc.) The supported field types are listed in the introduction section.    length   The number of bytes this column can hold    precision   The number of digits of decimal precision for the column    format   A suggested <code>printf()</code> format specifier for the column    offset   The byte offset of the column from the start of the row   <p>If the database header information cannot be read, <b><code>FALSE</code></b> is returned.</p>
	 * @link https://php.net/manual/ja/function.dbase-get-header-info.php
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_get_header_info($dbase_identifier): array {}

	/**
	 * Gets a record from a database as an indexed array
	 * <p>Gets a record from a database as an indexed array.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @param int $record_number <p>The index of the record between <i>1</i> and <i>dbase_numrecords($dbase_identifier)</i>.</p>
	 * @return array <p>An indexed array with the record. This array will also include an associative key named <i>deleted</i> which is set to 1 if the record has been marked for deletion (see <code>dbase_delete_record()</code>).</p><p>各フィールドは適切な PHP の型に変換されますが、以下に挙げる例外があります。</p><ul> <li>  Date は文字列のままになります。  </li> <li>  DateTime は文字列に変換されます。  </li> <li>  <b><code>PHP_INT_MIN</code></b>..<b><code>PHP_INT_MAX</code></b> の範囲外の Integer は文字列になります。  </li> <li>  dbase 7.0.0 より前のバージョンでは、boolean (<i>L</i>) が <i>1</i> あるいは <i>0</i> に変換されていました。  </li> </ul><p>On error, <b>dbase_get_record()</b> will return <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/ja/function.dbase-get-record.php
	 * @see dbase_get_record_with_names()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_get_record($dbase_identifier, int $record_number): array {}

	/**
	 * Gets a record from a database as an associative array
	 * <p>Gets a record from a dBase database as an associative array.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @param int $record_number <p>The index of the record between <i>1</i> and <i>dbase_numrecords($dbase_identifier)</i>.</p>
	 * @return array <p>An associative array with the record. This will also include a key named <i>deleted</i> which is set to 1 if the record has been marked for deletion (see <code>dbase_delete_record()</code>). Therefore it is not possible to retrieve the value of a field named <i>deleted</i> with this function.</p><p>各フィールドは適切な PHP の型に変換されますが、以下に挙げる例外があります。</p><ul> <li>  Date は文字列のままになります。  </li> <li>  DateTime は文字列に変換されます。  </li> <li>  <b><code>PHP_INT_MIN</code></b>..<b><code>PHP_INT_MAX</code></b> の範囲外の Integer は文字列になります。  </li> <li>  dbase 7.0.0 より前のバージョンでは、boolean (<i>L</i>) が <i>1</i> あるいは <i>0</i> に変換されていました。  </li> </ul><p>On error, <b>dbase_get_record_with_names()</b> will return <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/ja/function.dbase-get-record-with-names.php
	 * @see dbase_get_record()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_get_record_with_names($dbase_identifier, int $record_number): array {}

	/**
	 * Gets the number of fields of a database
	 * <p>Gets the number of fields (columns) in the specified database.</p><p><b>注意</b>:</p><p>Field numbers are between 0 and <i>dbase_numfields($db)-1</i>, while record numbers are between 1 and <i>dbase_numrecords($db)</i>.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @return int <p>The number of fields in the database, or <b><code>FALSE</code></b> if an error occurs.</p>
	 * @link https://php.net/manual/ja/function.dbase-numfields.php
	 * @see dbase_numrecords()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_numfields($dbase_identifier): int {}

	/**
	 * Gets the number of records in a database
	 * <p>Gets the number of records (rows) in the specified database.</p><p><b>注意</b>:</p><p>Records which are marked as deleted are counted as well.</p><p><b>注意</b>:</p><p>Record numbers are between 1 and <i>dbase_numrecords($db)</i>, while field numbers are between 0 and <i>dbase_numfields($db)-1</i>.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @return int <p>The number of records in the database, or <b><code>FALSE</code></b> if an error occurs.</p>
	 * @link https://php.net/manual/ja/function.dbase-numrecords.php
	 * @see dbase_numfields()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_numrecords($dbase_identifier): int {}

	/**
	 * Opens a database
	 * <p><b>dbase_open()</b> opens a dBase database with the given access mode.</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p><p><b>注意</b>:</p><p>この関数の動作は、open_basedir の設定に依存します。</p>
	 * @param string $filename <p>The name of the database. It can be a relative or absolute path to the file where dBase will store your data.</p>
	 * @param int $mode <p>An integer which correspond to those for the <b>open()</b> system call (Typically 0 means read-only, 1 means write-only, and 2 means read and write).</p>  <p><b>注意</b>:</p> <p>You can't open a dBase file in write-only mode as the function will fail to read the headers information and thus you can't use 1 as <code>mode</code>.</p>  <p>As of dbase 7.0.0 you can use <b><code>DBASE_RDONLY</code></b> and <b><code>DBASE_RDWR</code></b>, respectively, to specify the <code>mode</code>.</p>
	 * @return resource <p>Returns a database link identifier if the database is successfully opened, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/ja/function.dbase-open.php
	 * @see dbase_create(), dbase_close()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_open(string $filename, int $mode) {}

	/**
	 * Packs a database
	 * <p>Packs the specified database by permanently deleting all records marked for deletion using <code>dbase_delete_record()</code>. Note that the file will be truncated after successful packing (contrary to dBASE III's PACK command).</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbase-pack.php
	 * @see dbase_delete_record()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_pack($dbase_identifier): bool {}

	/**
	 * Replaces a record in a database
	 * <p>Replaces the given record in the database with the given data.</p>
	 * @param resource $dbase_identifier <p>The database link identifier, returned by <code>dbase_open()</code> or <code>dbase_create()</code>.</p>
	 * @param array $record <p>An indexed array of data. The number of items must be equal to the number of fields in the database, otherwise <b>dbase_replace_record()</b> will fail.</p>  <p><b>注意</b>:</p> <p>If you're using <code>dbase_get_record()</code> return value for this parameter, remember to reset the key named <i>deleted</i>.</p>
	 * @param int $record_number <p>An integer which spans from 1 to the number of records in the database (as returned by <code>dbase_numrecords()</code>).</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbase-replace-record.php
	 * @see dbase_add_record(), dbase_delete_record()
	 * @since PHP 5 < 5.3.0, dbase 5, dbase 7
	 */
	function dbase_replace_record($dbase_identifier, array $record, int $record_number): bool {}

	/**
	 * Open database for reading only. Used with <code>dbase_open()</code>. (Available as of dbase 7.0.0)
	 */
	define('DBASE_RDONLY', null);

	/**
	 * Open database for reading and writing. Used with <code>dbase_open()</code>. (Available as of dbase 7.0.0)
	 */
	define('DBASE_RDWR', null);

	/**
	 * Create dBASE style database. Used with <code>dbase_create()</code>. (Available as of dbase 7.0.0)
	 */
	define('DBASE_TYPE_DBASE', null);

	/**
	 * Create FoxPro style database. Used with <code>dbase_create()</code>. (Available as of dbase 7.0.0)
	 */
	define('DBASE_TYPE_FOXPRO', null);

	/**
	 * The extension version. (Available as of dbase 7.0.0)
	 */
	define('DBASE_VERSION', null);

}
