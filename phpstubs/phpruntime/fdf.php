<?php



/**
 * FDF ドキュメントに javascript コードを追加する
 * <p>スクリプトを FDF に追加します。Acrobat は、FDF が読み込まれた際に それをドキュメントレベルのスクリプトとして追加します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $script_name <p>スクリプト名。</p>
 * @param string $script_code <p>スクリプトのコード。コード内での改行は、できるだけ '\r' を使用するようにしてください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-add-doc-javascript.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_add_doc_javascript($fdf_document, string $script_name, string $script_code): bool {}

/**
 * テンプレートを FDF ドキュメントに追加する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param int $newpage
 * @param string $filename
 * @param string $template
 * @param int $rename
 * @return bool
 * @link http://php.net/manual/ja/function.fdf-add-template.php
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_add_template($fdf_document, int $newpage, string $filename, string $template, int $rename): bool {}

/**
 * FDF ドキュメントを閉じる
 * <p>FDF ドキュメントを閉じます。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.fdf-close.php
 * @see fdf_open()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_close($fdf_document): void {}

/**
 * 新規 FDF ドキュメントを作成する
 * <p>新規 FDF ドキュメントを作成します。</p><p>この関数は、PDF ドキュメントの入力フィールドにデータを書きこみたい場合に必要です。</p>
 * @return resource <p>FDF ドキュメントハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-create.php
 * @see fdf_close(), fdf_save(), fdf_open()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_create() {}

/**
 * 各ドキュメントの値に対してユーザー定義関数をコールする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param callable $function
 * @param mixed $userdata
 * @return bool
 * @link http://php.net/manual/ja/function.fdf-enum-values.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_enum_values($fdf_document, callable $function, $userdata = NULL): bool {}

/**
 * 直近の fdf 操作に関するエラーコードを返す
 * <p>直近の FDF 関数コールによって設定されたエラーコードを取得します。</p><p>エラーの内容についてのテキストを取得するには <code>fdf_error()</code> を使用します。</p>
 * @return int <p>エラーコードを表す整数値、あるいはエラーがない場合にゼロを返します。</p>
 * @link http://php.net/manual/ja/function.fdf-errno.php
 * @see fdf_error()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_errno(): int {}

/**
 * 直近の fdf エラーコードについての説明を返す
 * <p><code>error_code</code> で指定したエラーコードについての説明テキストを取得します。</p>
 * @param int $error_code <p><code>fdf_errno()</code> で取得したエラーコード。 省略した場合は、直近の操作で設定された内部エラーコードを使用します。</p>
 * @return string <p>エラーメッセージを表す文字列、あるいは何も問題がない場合は <i>no error</i> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-error.php
 * @see fdf_errno()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_error(int $error_code = -1): string {}

/**
 * フィールドの外観を取得する
 * <p><code>field</code> の外観 (つまり /AP キーの値) を取得し、ファイルに保存します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $field
 * @param int $face <p><b><code>FDFNormalAP</code></b>、<b><code>FDFRolloverAP</code></b> および <b><code>FDFDownAP</code></b> のいずれか。</p>
 * @param string $filename <p>ここに外観を保存します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-get-ap.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_ap($fdf_document, string $field, int $face, string $filename): bool {}

/**
 * FDF に埋め込まれている、アップロードされたファイルを展開する
 * <p>「ファイル選択」フィールド <code>fieldname</code> によって アップロードされたファイルを展開し、それを <code>savepath</code> に保存します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname
 * @param string $savepath <p>ファイル名または既存のディレクトリ名を指定し、ディレクトリ名を 指定した場合はその下に元のファイル名で保存されます。 同名のファイルが存在した場合は上書きします。</p>  <p><b>注意</b>:</p> <p><code>savepath</code> にディレクトリを使用してファイルを 保存してその名前を調べる以外には、元のファイル名を知る方法はないと 思われます。</p>
 * @return array <p>返される配列は以下のようなフィールドを保持します。</p><ul> <li> <code>path</code> - ファイルが保存された場所 </li> <li> <code>size</code> - 保存されたファイルのバイト数 </li> <li> <code>type</code> - (もし FDF 指定されていた場合) FDF の mimetype </li> </ul>
 * @link http://php.net/manual/ja/function.fdf-get-attachment.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_attachment($fdf_document, string $fieldname, string $savepath): array {}

/**
 * /Encoding キーの値を取得する
 * <p><i>/Encoding</i> キーの値を取得します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return string <p>エンコーディングを文字列で返します。 デフォルトの <i>PDFDocEncoding/Unicode</i> スキームを使用している場合は空の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-get-encoding.php
 * @see fdf_set_encoding()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_encoding($fdf_document): string {}

/**
 * /F キーの値を得る
 * <p><i>/F</i> キーの値を取得します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return string <p>キーの値を文字列を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-get-file.php
 * @see fdf_set_file()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_get_file($fdf_document): string {}

/**
 * フィールドのフラグを取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param string $fieldname
 * @param int $whichflags
 * @return int
 * @link http://php.net/manual/ja/function.fdf-get-flags.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_flags($fdf_document, string $fieldname, int $whichflags): int {}

/**
 * フィールドのオプション配列から値を取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param string $fieldname
 * @param int $element
 * @return mixed
 * @link http://php.net/manual/ja/function.fdf-get-opt.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_opt($fdf_document, string $fieldname, int $element = -1) {}

/**
 * /STATUS キーの値を得る
 * <p><i>/STATUS</i> キーの値を取得します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return string <p>キーの値を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.fdf-get-status.php
 * @see fdf_set_status()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_get_status($fdf_document): string {}

/**
 * フィールドの値を得る
 * <p>指定したフィールドの値を取得します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールドの名前を表す文字列。</p>
 * @param int $which <p>このオプションパラメータを渡すことで、配列フィールドの 要素が取得可能です。番号はゼロから始まります。配列以外のフィールドでは、 このオプションは無視されます。</p>
 * @return mixed <p>フィールドの値を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-get-value.php
 * @see fdf_set_value()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_get_value($fdf_document, string $fieldname, int $which = -1) {}

/**
 * FDF API あるいはファイルのバージョンを取得する
 * <p>指定したドキュメントの FDF バージョン、 あるいはパラメータを指定しなかった場合はツールキット API のバージョンを返します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return string <p>バージョンを表す文字列を返します。 現在の FDF ツールキット 5.0 では API のバージョン番号は <i>5.0</i> で、 ドキュメントのバージョン番号は <i>1.2</i> <i>1.3</i> あるいは <i>1.4</i> です。</p>
 * @link http://php.net/manual/ja/function.fdf-get-version.php
 * @see fdf_set_version()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_get_version($fdf_document = NULL): string {}

/**
 * FDF 固有の出力ヘッダをセットする
 * <p>この関数は、簡便に FDF の出力に適当な HTTP ヘッダを付加できるよう 用意されており、<i>Content-type:</i> を <i>application/vnd.fdf</i> に設定します。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.fdf-header.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_header(): void {}

/**
 * 次のフィールド名を得る
 * <p>指定したフィールドの後のフィールドの名前を返します。 この名前をその他の関数で使用します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。 省略した場合は最初のフィールドとみなされます。</p>
 * @return string <p>フィールド名を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.fdf-next-field-name.php
 * @see fdf_get_value()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_next_field_name($fdf_document, string $fieldname = NULL): string {}

/**
 * FDF ドキュメントをオープンする
 * <p>フォームデータを含むファイルをオープンします。</p><p><code>fdf_open_string()</code> を用いて、 PDF フォームの POST リクエストを処理することもできます。</p>
 * @param string $filename <p>FDF ファイルへのパス。このファイルは、PDF フォームから返されたものか、 <code>fdf_create()</code> および <code>fdf_save()</code> で作成したものである必要があります。</p>
 * @return resource <p>FDF ドキュメントのハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-open.php
 * @see fdf_open_string(), fdf_close(), fdf_create(), fdf_save()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_open(string $filename) {}

/**
 * 文字列から FDF ドキュメントを読み込む
 * <p>文字列からデータを読み込みます。</p><p><b>fdf_open_string()</b> を $HTTP_FDF_DATA とあわせて使用することで、リモート クライアントからの FDF フォーム入力を処理することが可能です。</p>
 * @param string $fdf_data <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <b>fdf_open_string()</b> が返す FDF ドキュメントハンドル。</p>
 * @return resource <p>FDF ドキュメントハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-open-string.php
 * @see fdf_open(), fdf_close(), fdf_create(), fdf_save_string()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_open_string(string $fdf_data) {}

/**
 * フォームのターゲットフレームを設定する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param string $fieldname
 * @param int $item
 * @return bool
 * @link http://php.net/manual/ja/function.fdf-remove-item.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_remove_item($fdf_document, string $fieldname, int $item): bool {}

/**
 * FDF ドキュメントを保存する
 * <p>FDF ドキュメントを保存します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $filename <p>指定した場合は、結果の FDF がここに書き込まれます。 それ以外の場合は、この関数は FDF をデフォルトの PHP 出力ストリームに書き込みます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-save.php
 * @see fdf_close(), fdf_create(), fdf_save_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_save($fdf_document, string $filename = NULL): bool {}

/**
 * FDF ドキュメントを文字列として返す
 * <p>FDF ドキュメントを文字列として返します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @return string <p>ドキュメントを表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-save-string.php
 * @see fdf_open_string(), fdf_close(), fdf_create(), fdf_save()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_save_string($fdf_document): string {}

/**
 * フィールドの外観を設定する
 * <p>フィールドの外観 (すなわち、<i>/AP</i> キーの値) を設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $field_name
 * @param int $face <p><b><code>FDFNormalAP</code></b>、<b><code>FDFRolloverAP</code></b> および <b><code>FDFDownAP</code></b> のいずれかが使用可能です。</p>
 * @param string $filename
 * @param int $page_number
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-ap.php
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_set_ap($fdf_document, string $field_name, int $face, string $filename, int $page_number): bool {}

/**
 * FDF 文字エンコーディングを設定する
 * <p>FDF ドキュメントの文字エンコーディングを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $encoding <p>エンコーディング名。現在サポートしているのは "<i>Shift-JIS</i>"、"<i>UHC</i>"、 "<i>GBK</i>"、"<i>BigFive</i>" です。</p> <p>空の文字列を指定すると、エンコーディングをデフォルトの <i>PDFDocEncoding/Unicode</i> スキームに設定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-encoding.php
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function fdf_set_encoding($fdf_document, string $encoding): bool {}

/**
 * FDF データを表示する PDF ドキュメントを設定する
 * <p>フォームの結果を表示する PDF ドキュメントとして、もとのフォームとは別のものを指定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $url <p>絶対 URL で指定する必要があります。</p>
 * @param string $target_frame <p>このパラメータを使用して、ドキュメントを表示するフレームを指定します。 このパラメータのデフォルト値を <code>fdf_set_target_frame()</code> で指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-file.php
 * @see fdf_get_file(), fdf_set_target_frame()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_set_file($fdf_document, string $url, string $target_frame = NULL): bool {}

/**
 * フィールドのフラグを設定する
 * <p>指定したフィールドのフラグを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。</p>
 * @param int $whichFlags
 * @param int $newFlags
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-flags.php
 * @see fdf_set_opt()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function fdf_set_flags($fdf_document, string $fieldname, int $whichFlags, int $newFlags): bool {}

/**
 * フィールドの javascript アクションを設定する
 * <p>指定したフィールドの javascript アクションを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。</p>
 * @param int $trigger
 * @param string $script
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-javascript-action.php
 * @see fdf_set_submit_form_action()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function fdf_set_javascript_action($fdf_document, string $fieldname, int $trigger, string $script): bool {}

/**
 * Acrobat が FDF をオープンした際に実行される javascript のコードを追加する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $fdf_document
 * @param string $script
 * @param bool $before_data_import
 * @return bool
 * @link http://php.net/manual/ja/function.fdf-set-on-import-javascript.php
 * @see fdf_add_doc_javascript(), fdf_set_javascript_action()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_set_on_import_javascript($fdf_document, string $script, bool $before_data_import): bool {}

/**
 * フィールドのオプションを設定する
 * <p>指定したフィールドのオプションを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。</p>
 * @param int $element
 * @param string $str1
 * @param string $str2
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-opt.php
 * @see fdf_set_flags()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function fdf_set_opt($fdf_document, string $fieldname, int $element, string $str1, string $str2): bool {}

/**
 * /STATUS キーの値を設定する
 * <p><i>/STATUS</i> キーの値を設定します。 クライアントが FDF とともにステータスセットを受信すると、その内容を アラートボックスに表示します</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $status
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-status.php
 * @see fdf_get_status()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_set_status($fdf_document, string $status): bool {}

/**
 * フィールドの投稿フォームアクションを設定する
 * <p>指定したフィールドの投稿フォームアクションを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。</p>
 * @param int $trigger
 * @param string $script
 * @param int $flags
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-submit-form-action.php
 * @see fdf_set_javascript_action()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function fdf_set_submit_form_action($fdf_document, string $fieldname, int $trigger, string $script, int $flags): bool {}

/**
 * フォームの表示対象となるフレームを設定する
 * <p><b>fdf_save_file()</b> で定義した PDF の結果を出力する 対象のフレームを設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $frame_name <p>フレーム名を表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-target-frame.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_set_target_frame($fdf_document, string $frame_name): bool {}

/**
 * フィールドの値を設定する
 * <p>指定したフィールドに値 <code>value</code> を設定します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $fieldname <p>FDF フィールド名を表す文字列。</p>
 * @param mixed $value <p>このパラメータは、配列形式でない限り文字列で保存されます。 配列の場合は、配列のすべての要素が配列として保存されます。</p>
 * @param int $isName <p><b>注意</b>:</p> <p>FDF ツールキットの古いバージョンでは、最後のパラメータは フィールドの値を PDF Name に変換する (= 1) か、PDF String に設定する (= 0) かを定義します。</p> <p>ツールキットの現在のバージョン 5.0 では、もはやこのパラメータは 使用されません。PHP 4.3 以降、互換性を確保するためにこのパラメータが オプションとして残されていますが、内部ではこのパラメータは無視されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-value.php
 * @see fdf_get_value(), fdf_remove_item()
 * @since PHP 4, PHP 5, PHP 7
 */
function fdf_set_value($fdf_document, string $fieldname, $value, int $isName = NULL): bool {}

/**
 * FDF ファイルのバージョン番号を設定する
 * <p>指定したドキュメントの FDF バージョンを <code>version</code> に設定します。</p><p>この拡張モジュールが提供する機能のうちのいくつかは、新しいバージョンの FDF でのみ動作します。</p>
 * @param resource $fdf_document <p><code>fdf_create()</code>、 <code>fdf_open()</code> あるいは <code>fdf_open_string()</code> が返す FDF ドキュメントハンドル。</p>
 * @param string $version <p>バージョンを表す文字列。 現在の FDF ツールキット 5.0 では、これは <i>1.2</i>、 <i>1.3</i> あるいは <i>1.4</i> となります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fdf-set-version.php
 * @see fdf_get_version()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function fdf_set_version($fdf_document, string $version): bool {}

define('FDFAA', null);

define('FDFAction', null);

define('FDFAP', null);

define('FDFAPRef', null);

define('FDFAS', null);

define('FDFCalculate', null);

define('FDFClearFf', null);

define('FDFClrF', null);

define('FDFDown', null);

define('FDFDownAP', null);

define('FDFEnter', null);

define('FDFExit', null);

define('FDFFf', null);

define('FDFFile', null);

define('FDFFlags', null);

define('FDFFormat', null);

define('FDFID', null);

define('FDFIF', null);

define('FDFKeystroke', null);

define('FDFNormalAP', null);

define('FDFRolloverAP', null);

define('FDFSetF', null);

define('FDFSetFf', null);

define('FDFStatus', null);

define('FDFUp', null);

define('FDFValidate', null);

define('FDFValue', null);

