<?php



/**
 * map ファイルの読み込みと照合を行う
 * <p>この関数は、map ファイルを読み込み、照合を行います。 続いて、フィールドの数および情報を保存します。</p><p>データベースのロックを行わないため、PHP でオープンしている間は、 filePro データベースの修正を避ける必要があります。</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p>
 * @param string $directory <p>map ディレクトリ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro.php
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro(string $directory): bool {}

/**
 * filePro データベース中のフィールド数を返す
 * <p>オープンした filePro データベースのフィールド（カラム）の数を返します。</p>
 * @return int <p>オープンした filePro データベースのフィールド数、 あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-fieldcount.php
 * @see filepro()
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_fieldcount(): int {}

/**
 * フィールド名を取得する
 * <p><code>field_number</code> に対応するフィールド名を返します。</p>
 * @param int $field_number <p>フィールド番号。</p>
 * @return string <p>フィールド名を表す文字列、あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-fieldname.php
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_fieldname(int $field_number): string {}

/**
 * フィールド型を取得する
 * <p><code>field_number</code> に対応した編集フィールド型を返します。</p>
 * @param int $field_number <p>フィールド番号。</p>
 * @return string <p>編集フィールド型を表す文字列、あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-fieldtype.php
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_fieldtype(int $field_number): string {}

/**
 * フィールド幅を取得する
 * <p><code>field_number</code> に対応するフィールドの幅を返します。</p>
 * @param int $field_number <p>フィールド番号。</p>
 * @return int <p>フィールドの幅を表す整数値、あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-fieldwidth.php
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_fieldwidth(int $field_number): int {}

/**
 * filePro データベースからデータを取得する
 * <p>データベースの指定された位置から読み込んだデータを返します。</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p>
 * @param int $row_number <p>行番号。ゼロから 全行数マイナス 1 までの間である必要があります (0..<code>filepro_rowcount()</code> - 1)。</p>
 * @param int $field_number <p>フィールド番号。ゼロから 全フィールド数マイナス 1 までの間である必要があります (0..<code>filepro_fieldcount()</code> - 1)。</p>
 * @return string <p>指定したデータ、あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-retrieve.php
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_retrieve(int $row_number, int $field_number): string {}

/**
 * filePro データベースの行の数を返します
 * <p>オープンされた filePro データベースにおける行の数を返します。</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p>
 * @return int <p>オープンされた filePro データベースにおける行の数を返します。 エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.filepro-rowcount.php
 * @see filepro()
 * @since PHP 4, PHP 5 < 5.2.0, PHP 7
 */
function filepro_rowcount(): int {}

