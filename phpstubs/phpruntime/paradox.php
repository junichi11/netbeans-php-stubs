<?php



namespace {

	/**
	 * paradox データベースを閉じる
	 * <p>paradox データベースを閉じます。この関数は、ファイルは閉じません。 この後で <code>fclose()</code> をコールする必要があります。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-close.php
	 * @see px_open_fp(), px_new()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_close($pxdoc): bool {}

	/**
	 * 新しい paradox データベースを作成する
	 * <p>新しい paradox データベースファイルを作成します。 実際のファイルは、事前に <code>fopen()</code> でオープンしておく必要があります。 ファイルが書き込み可能であることを確認してください。</p><p><b>注意</b>:</p><p>この関数をコールすると「テーブル名が空である」という警告が発生しますが、 これは無視できます。単に、<code>px_set_parameter()</code> を使用して後からテーブル名を設定すればよいのです。</p><p><b>注意</b>:</p><p>paradox のファイルフォーマットについての資料が不足しているため、 この関数は、きわめて実験的なものです。 この関数で作成したデータベースファイルは <code>px_open_fp()</code> や Paradox ソフトウェアでオープンできます。 しかしそこから先の道のりは大変でしょう。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param resource $file <p><code>fopen()</code> が返すファイルハンドル。</p>
	 * @param array $fielddesc <p><b>fielddesc</b> は、各フィールドの設定を保持する配列です。 それぞれのフィールド設定は、2 つあるいは 3 つの要素を含む配列です。 最初の要素は常に文字列で、フィールドの名前を表します。 10 文字より長くなってはいけません。2 番目の要素にはフィールドの型を指定します。 これは、 フィールド型の定数 の表の中のどれかになります。文字列フィールドや bcd フィールドでは、 3 番目の要素でその要素の精度を指定します。 フィールド定義の中に blob フィールドが含まれている場合は、 確実にすべての値を格納できるだけのフィールドサイズを確保するか、 あるいは blob を保存する際に <code>px_set_blob_file()</code> でファイルを指定しなければなりません。さもないと、 フィールドのデータが切り詰められてしまいます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-create-fp.php
	 * @see px_new(), px_put_record(), fopen()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_create_fp($pxdoc, $file, array $fielddesc): bool {}

	/**
	 * 日付を文字列に変換する
	 * <p>paradox ファイルに保存されている日付を、人間が理解しやすい形式に変換します。 paradox の日付は、0000 年 1 月 1 日からの経過日数で保存されています。 この関数は利便性を高めるためだけのもので、 以下の例のように数学関数やカレンダー関数で同等のことを実現できます。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param int $value <p>PX_FIELD_DATE 型の paradox データベースフィールドに格納される値。</p>
	 * @param string $format <p><code>date()</code> で使用するのと同じ形式の文字列フォーマット。 この関数がサポートするプレースホルダは、<code>date()</code> でサポートしているもの (Y, y, m, n, d, j, L) のサブセットです。</p>
	 * @return string <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-date2string.php
	 * @see px_timestamp2string(), jdtogregorian()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_date2string($pxdoc, int $value, string $format): string {}

	/**
	 * paradox データベースのリソースを削除する
	 * <p>paradox ファイルのリソースを削除し、メモリを開放します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-delete.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_delete($pxdoc): bool {}

	/**
	 * paradox データベースからレコードを削除する
	 * <p>この関数は、データベースからレコードを削除します。 データベースファイル内の領域を開放するわけではなく、単に削除マークをつけます。 その後、新しいレコードが挿入される際にこの領域が再利用されます。</p><p><b>注意</b>:</p><p>この関数は、pxlib &gt;= 0.6.0 が使用されている場合にのみ有効です。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param int $num <p>レコード番号は人為的な番号で、レコードがデータベースに格納された順番を表します。 最初のレコードの番号は 0 です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-delete-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_delete_record($pxdoc, int $num): bool {}

	/**
	 * 単一のフィールドの仕様を返す
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param int $fieldno <p>フィールド番号。最初のフィールドが 0 番となります。 0 より小さい番号やフィールド数以上の番号を指定すると、 エラーが発生します。</p>
	 * @return array <p><b>fieldno</b> 番目のデータベースフィールドの仕様を、 連想配列で返します。 <i>name</i>、<i>type</i> および <i>size</i> という 3 つのフィールドが含まれます。</p>
	 * @link https://php.net/manual/ja/function.px-get-field.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_field($pxdoc, int $fieldno): array {}

	/**
	 * paradox ファイルに関する多くの情報を返す
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @return array <p>paradox ファイルに関する多くの情報を含む連想配列を返します。 この配列は、将来的にさらに拡張される予定です。</p>  fileversion  <p>ファイルのバージョンを 10 倍した値。例えば 70。</p>   tablename  <p>ファイルに格納されているテーブルの名前。pxlib が作成したデータベースの場合は、 ファイル名から拡張子を取り除いたものになります。</p>   numrecords  <p>このテーブルのレコード数。</p>   numfields  <p>このテーブルのフィールド数。</p>   headersize  <p>ヘッダが使用しているバイト数。通常は 0x800。</p>   recordsize  <p>各レコードが使用しているバイト数。すべてのフィールドサイズの和です (バージョン 1.4.2 以降で使用可能です)。</p>   maxtablesize  <p>データブロックのバイト数に 0x400 をかけた値。</p>   numdatablocks  <p>ファイル内のデータブロック数。各データブロックには 複数のレコードが含まれます。そのレコード数は、 レコードサイズおよびデータブロックサイズ (maxtablesize) に依存します。データブロック内が完全にデータで埋め尽くされる必要はありません。</p>   numindexfields  <p>プライマリインデックスに使用されるフィールドの数。 このフィールドは、常にフィールド番号 1 番から始まります。</p>   codepage  <p>文字データのフィールドをエンコードするために使用される DOS コードページ。<code>px_set_targetencoding()</code> で対象のエンコーディングが指定されていない場合、これが、 <code>px_get_record()</code> あるいは <code>px_retrieve_record()</code> でレコードが関連付けられた際の 文字フィールドのエンコーディングとなります。</p>
	 * @link https://php.net/manual/ja/function.px-get-info.php
	 * @see px_numfields(), px_numrecords()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_info($pxdoc): array {}

	/**
	 * パラメータを取得する
	 * <p>さまざまなパラメータを取得します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param string $name <p><code>name</code> は、以下のいずれかです。</p>   tablename  <p>データベースヘッダに格納されるテーブル名。</p>   targetencoding  <p>出力用のエンコーディング。 <code>px_get_record()</code> あるいは <code>px_retrieve_record()</code> で文字フィールドから読み込まれたデータは、 targetencoding で記録されます。指定されていない場合は、 データベースファイルに保存されている形式が使用されます。</p>   inputencoding  <p>入力データをデータベースに保存する際のエンコーディング。 文字フィールドのデータをデータベースに保存する際には、 データをこのエンコーディングに変換することになります。</p>
	 * @return string <p>パラメータの値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-get-parameter.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_get_parameter($pxdoc, string $name): string {}

	/**
	 * paradox データベースのレコードを返す
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param int $num <p>レコード番号は人為的な番号で、レコードがデータベースに格納された順番を表します。 最初のレコードの番号は 0 です。</p>
	 * @param int $mode <p>返される配列のキーを小文字または大文字に変換するために、 オプションの <code>mode</code> に <b><code>PX_KEYTOLOWER</code></b> あるいは <b><code>PX_KEYTOUPPER</code></b> を指定することができます。<code>mode</code> が渡されなかったりあるいは 0 であった場合は、 キーはフィールド名そのものとなります。 要素の値にはフィールドの値が含まれます。 NULL 値もそのまま残ります。NULL は 0.0、0 あるいは 空の文字列とはことなる値です。<b><code>PX_FIELD_TIME</code></b> 型のフィールドは、深夜 0 時から数えたミリ秒数を整数で返します。 timestamp は浮動小数点値で、ユリウス暦の開始時からの経過ミリ秒数を返します。 timestamp (<b><code>PX_FIELD_TIMESTAMP</code></b>) および date (<b><code>PX_FIELD_DATE</code></b>) は浮動小数点値で、 それぞれユリウス暦の開始時からの経過ミリ秒数、日数を返します。 これらの値を文字列表現に変換するには <code>px-timestamp2string()</code> および <code>px-date2string()</code> を使用します。</p>
	 * @return array <p>paradox データベースから、<code>num</code> 番目のレコードを返します。 レコードは連想配列形式で返され、フィールド名がキーとなります。</p>
	 * @link https://php.net/manual/ja/function.px-get-record.php
	 * @see px_retrieve_record()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_record($pxdoc, int $num, int $mode = 0): array {}

	/**
	 * データベーススキーマを返す
	 * <p><b>px_get_schema()</b> は、データベーススキーマを返します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param int $mode <p>返される配列のキーを小文字または大文字に変換するために、 オプションの <code>mode</code> に <b><code>PX_KEYTOLOWER</code></b> あるいは <b><code>PX_KEYTOUPPER</code></b> を指定することができます。<code>mode</code> が渡されなかったりあるいは 0 であった場合は、 キーはフィールド名そのものとなります。</p>
	 * @return array <p>データベースファイルのスキーマを連想配列で返します。 キーの名前はフィールド名と等しくなります。 配列の各要素もまた連想配列となっており、2 つのフィールド <i>type</i> および <i>size</i> が含まれます。<i>type</i> は、 フィールド型の定数 の中のいずれかです。 <i>size</i> は、レコード内でこのフィールドが使用するバイト数です。 すべてのフィールドのサイズを合計したものが、 <code>px-get-info()</code> で得られるレコードサイズと等しくなります。</p>
	 * @link https://php.net/manual/ja/function.px-get-schema.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_schema($pxdoc, int $mode = 0): array {}

	/**
	 * 値を取得する
	 * <p>さまざまな値を取得します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param string $name <p><code>name</code> は以下のいずれかです。</p>  numprimkeys  <p>プライマリキーの数。paradox データベースは、 常に最初の <i>numprimkeys</i> フィールドを プライマリキーとして扱います。</p>
	 * @return float <p>パラメータの値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-get-value.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_get_value($pxdoc, string $name): float {}

	/**
	 * paradox データベースにレコードを挿入する
	 * <p>データベースに新しいレコードを挿入します。新しいレコードは、 必ずデータベースの最後に格納されるとは限りません。 最初に見つかった空きスロットの位置に格納されることになります。</p><p>レコードのデータは、フィールド値の配列として渡します。 配列の要素がデータベースのフィールドに対応していなければなりません。 配列の要素数がデータベースのフィールド数より少ない場合は、 それ以降のフィールドには null が設定されます。</p><p>ほとんどのフィールドは、その型に対応する PHP の型でデータを渡します。 例えば PX_FIELD_LONG、PX_FIELD_SHORT および PX_FIELD_AUTOINC の場合は long 型、PX_FIELD_CURRENCy および PX_FIELD_NUMBER の場合は double 型が使用されます。blob 型や alpha 型のフィールドには、文字列を使用します。</p><p>PX_FIELD_TIME および PX_FIELD_DATE については long 型を指定します。 前者は深夜 0 時からの経過ミリ秒数、後者は 0000 年 1 月 1 日からの 経過日数を指定します。以下に、現在の日付および時刻を paradox のフィールドで使用できる値に変換する例を 2 種類示します。</p><p><b>注意</b>:</p><p>この関数は、pxlib &gt;= 0.6.0 が使用されている場合にのみ有効です。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param array $data <p><code>px_retrieve_record()</code> などが返す、 フィールド値を含む連想配列あるいは数値添字配列。</p>
	 * @return int <p>失敗した場合には <b><code>FALSE</code></b>、成功した場合にはレコード数を返します。</p>
	 * @link https://php.net/manual/ja/function.px-insert-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_insert_record($pxdoc, array $data): int {}

	/**
	 * 新しい paradox オブジェクトを作成する
	 * <p>新しい paradox オブジェクトを作成します。この関数は、 その他の関数をコールする前にコールする必要があります。 <b>px_new()</b> は、ディスク上にファイルを作成するのではなく、 ただ単に paradox オブジェクトのインスタンスを作成するだけです。 オブジェクト指向のインターフェイスを使用している場合は、 この関数をコールしてはいけません。代わりに <i>new paradox_db()</i> を使用してください。</p>
	 * @return resource <p>失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-new.php
	 * @see px_delete(), px_open_fp()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_new() {}

	/**
	 * データベース内のフィールドの数を返す
	 * <p>データベースファイル内のフィールドの数を返します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @return int <p>データベースファイル内のフィールドの数を返します。この関数の返す値は、 <code>px_get_info()</code> が返す配列における要素 <i>numfields</i> の値と等しくなります。</p>
	 * @link https://php.net/manual/ja/function.px-numfields.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_numfields($pxdoc): int {}

	/**
	 * データベース内のレコードの数を返す
	 * <p>データベースファイル内のレコードの数を取得します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @return int <p>データベースファイル内のレコードの数を返します。この関数の返す値は、 <code>px_get_info()</code> が返す配列における要素 <i>numrecords</i> の値と等しくなります。</p>
	 * @link https://php.net/manual/ja/function.px-numrecords.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_numrecords($pxdoc): int {}

	/**
	 * paradox データベースをオープンする
	 * <p>既存の paradox データベースファイルをオープンします。事前に <code>fopen()</code> で実際のファイルをオープンしておく必要があります。 この関数は、プライマリインデックスファイルをオープンして、 それを paradox データベースのように扱うために使用することもできます。 この機能は、プライマリインデックスの内容を調査したい人のためにサポートされています。 データベースファイルへのアクセスを高速化するなどのために使用することはできません。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param resource $file <p><code>file</code> は、 実際のデータベースファイルをパラメータに指定して <code>fopen()</code> をコールしたときの返り値です。レコードの更新や挿入を考えているのならば、 ファイルが書き込み可能でなければならないことに注意しましょう。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-open-fp.php
	 * @see fopen(), px_new()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_open_fp($pxdoc, $file): bool {}

	/**
	 * paradox データベースにレコードを保存する
	 * <p>paradox データベースにレコードを保存します。たとえ空きスロットがあったとしても、 レコードは常にデータベースの最後に追記されます。 最初に見つかった空きスロットにデータを書き込みたい場合は、 <code>px_insert_record()</code> を使用します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param array $record <p>例えば <code>px_retrieve_record()</code> が返すような形式でのフィールド値を含む、 連想配列あるいは数値添字配列。</p>
	 * @param int $recpos <p>このオプションパラメータで、データベース内の現在の位置以降の レコード番号を指定します。この関数は、必要なだけ空のレコードを追加します。 このパラメータが必要になることは、まずないでしょう。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-put-record.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_put_record($pxdoc, array $record, int $recpos = -1): bool {}

	/**
	 * paradox データベースのレコードを返す
	 * <p>この関数は <code>px_get_record()</code> と非常によく似ていますが、 関数内でデータを取得するために使用している方法が違います。 この関数は、各フィールドの値を取得するのに pxlib の機能を使用しており、 結果としてより多くのフィールド型をサポートしています。</p><p><b>注意</b>:</p><p>この関数は、pxlib &gt;= 0.6.0 が使用されている場合にのみ有効です。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param int $num <p>レコード番号は人為的な番号で、レコードがデータベースに格納された順番を表します。 最初のレコードの番号は 0 です。</p>
	 * @param int $mode <p>キーを小文字または大文字に変換するために、 オプションの <code>mode</code> に <b><code>PX_KEYTOLOWER</code></b> あるいは <b><code>PX_KEYTOUPPER</code></b> を指定することができます。<code>mode</code> が渡されなかったりあるいは 0 であった場合は、 キーはフィールド名そのものとなります。 要素の値にはフィールドの値が含まれます。 NULL 値もそのまま残ります。NULL は 0.0、0 あるいは 空の文字列とはことなる値です。<b><code>PX_FIELD_TIME</code></b> 型のフィールドは、深夜 0 時から数えたミリ秒数を整数で返します。 timestamp は浮動小数点値で、ユリウス暦の開始時からの経過ミリ秒数を返します。</p>
	 * @return array <p>paradox データベースから、<code>num</code> 番目のレコードを返します。 レコードは連想配列形式で返され、フィールド名がキーとなります。</p>
	 * @link https://php.net/manual/ja/function.px-retrieve-record.php
	 * @see px_get_record()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_retrieve_record($pxdoc, int $num, int $mode = 0): array {}

	/**
	 * blob を読み込むファイル名を設定する
	 * <p>blob の読み込みあるいは書き込みを行おうとしているファイルの名前を設定します。 この関数をコールしていない場合、もしデータがレコードの一部であるが blob ファイルに保存されていないときには、 <code>px_get_record()</code> あるいは <code>px_retrieve_record()</code> は blob フィールドのデータのみを返します。 blob データが blob フィールドのサイズに収まるほど小さい場合は、 それはレコード内に保存されます。</p><p><b>px_set_blob_file()</b> をコールせずに <code>px_put_record()</code>、 <code>px_insert_record()</code> あるいは <code>px_update_record()</code> をコールすると、 データベースファイルに収まらない場合にデータが切り詰められます。</p><p>この関数を 2 度コールすると、 最初の blob ファイルを閉じて新しいほうをオープンします。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param string $filename <p>ファイルの名前。拡張子は <i>.MB</i> でなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-set-blob-file.php
	 * @since PECL paradox >= 1.3.0
	 */
	function px_set_blob_file($pxdoc, string $filename): bool {}

	/**
	 * パラメータを設定する
	 * <p>さまざまなパラメータを設定します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param string $name <p>設定したいパラメータの内容に応じて、<code>name</code> には以下のいずれかを指定します。</p>   tablename  <p>データベースヘッダに格納されるテーブル名。</p>   targetencoding  <p>出力用のエンコーディング。文字フィールドから読み込まれたデータは、 targetencoding で記録されます。</p>   inputencoding  <p>入力データをデータベースに保存する際のエンコーディング。</p>
	 * @param string $value <p>パラメータに設定する値。inputencoding および targetencoding の場合は、iconv あるいは recode が理解できるエンコーディング名 (例: iso-8859-1、utf-8、cp850) である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-set-parameter.php
	 * @see px_get_info()
	 * @since PECL paradox >= 1.1.0
	 */
	function px_set_parameter($pxdoc, string $name, string $value): bool {}

	/**
	 * テーブルの名前を設定する (非推奨)
	 * <p><code>px_create_fp()</code> で作成した、paradox データベースのテーブル名を設定します。この関数は非推奨です。代わりに <code>px_set_parameter()</code> を使用してください。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param string $name
	 * @return void <p>成功した場合に <b><code>NULL</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-set-tablename.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_set_tablename($pxdoc, string $name): void {}

	/**
	 * 文字フィールドのエンコーディングを設定する (非推奨)
	 * <p>文字フィールドからデータを取得する際のエンコーディングを設定します。 すべての文字フィールドは、この関数で設定したエンコーディングに変換されます。 エンコーディングが指定されていない場合は、データベースファイルで指定した DOS コードページでデータが返されます。 <code>encoding</code> には iconv あるいは recode が理解できる文字列 ID を指定することができます。 Unix システムでは、<i>iconv -l</i> を実行すると使用可能なエンコーディングの一覧を取得できます。</p><p>この関数は非推奨です。代わりに <code>px_set_parameter()</code> を使用してください。</p><p>データベースファイルに保存されている DOS コードページを知るには <code>px_get_info()</code> も参照ください。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す paradox データベースのリソース ID。</p>
	 * @param string $encoding <p>出力用のエンコーディング。文字フィールドから読み込まれたデータは targetencoding で記録されます。</p>
	 * @return bool <p>エンコーディングが設定されていない場合は <b><code>FALSE</code></b> を返します。 これは、例えば未知のエンコーディングが設定されていたり、 pxlib がコード変換をサポートしていない場合にも起こります。 後者の場合は警告が発生します。</p>
	 * @link https://php.net/manual/ja/function.px-set-targetencoding.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_set_targetencoding($pxdoc, string $encoding): bool {}

	/**
	 * 値を設定する
	 * <p>さまざまな値を設定します。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param string $name <p><code>name</code> は以下のいずれかです。</p>   numprimkeys  <p>プライマリキーの数。paradox データベースは、 常に最初の <i>numprimkeys</i> フィールドを プライマリキーとして扱います。</p>
	 * @param float $value
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-set-value.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_set_value($pxdoc, string $name, float $value): bool {}

	/**
	 * タイムスタンプを文字列に変換する
	 * <p>paradox ファイルに保存されているタイムスタンプを、 人間が理解しやすい形式に変換します。 paradox のタイムスタンプは、0000 年 1 月 1 日からの経過ミリ秒数で保存されています。 この関数は利便性を高めるためだけのもので、 以下の例のように数学関数やカレンダー関数で同等のことを実現できます。</p>
	 * @param resource $pxdoc <p>paradox データベースのリソース ID。</p>
	 * @param float $value <p>paradox データベースフィールドに保存された、 PX_FIELD_TIME 型あるいは PX_FIELD_TIMESTAMP 型の値。</p>
	 * @param string $format <p><code>date()</code> で使用するのと同じ形式の文字列フォーマット。 この関数がサポートするプレースホルダは、<code>date()</code> でサポートしているもの (Y, y, m, n, d, j, H, h, G, g, i, s, A, a, L) のサブセットです。</p>
	 * @return string <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-timestamp2string.php
	 * @see px_date2string(), jdtogregorian()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_timestamp2string($pxdoc, float $value, string $format): string {}

	/**
	 * paradox データベースのレコードを更新する
	 * <p>データベース内のレコードを更新します。レコード番号は 0 から始まります。</p><p>レコードのデータは、フィールド値の配列として渡します。 配列の要素がデータベースのフィールドに対応していなければなりません。 配列の要素数がデータベースのフィールド数より少ない場合は、 それ以降のフィールドには null が設定されます。</p><p><b>注意</b>:</p><p>この関数は、pxlib &gt;= 0.6.0 が使用されている場合にのみ有効です。</p>
	 * @param resource $pxdoc <p><code>px_new()</code> が返す、 paradox データベースのリソース ID。</p>
	 * @param array $data <p><code>px_retrieve_record()</code> が返すフィールド値を含む連想配列。</p>
	 * @param int $num <p>レコード番号は人為的な番号で、レコードがデータベースに格納された順番を表します。 最初のレコードの番号は 0 です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.px-update-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_update_record($pxdoc, array $data, int $num): bool {}

	/**
	 * 固定長の文字データ
	 */
	define('PX_FIELD_ALPHA', null);

	/**
	 * 自動インクリメントの整数 (PX_FIELD_LONG と似ています)
	 */
	define('PX_FIELD_AUTOINC', null);

	/**
	 * bcd フォーマットで保存された十進数 (サポートされません)
	 */
	define('PX_FIELD_BCD', null);

	/**
	 * バイナリラージオブジェクト (サポートされません)
	 */
	define('PX_FIELD_BLOB', null);

	/**
	 * 255 バイトをこえないバイト配列 (サポートされません)
	 */
	define('PX_FIELD_BYTES', null);

	/**
	 * PX_FIELD_NUMBER と同じ
	 */
	define('PX_FIELD_CURRENCY', null);

	/**
	 * 日付。0000 年 1 月 1 日からの経過日数
	 */
	define('PX_FIELD_DATE', null);

	/**
	 * バイナリラージオブジェクト
	 */
	define('PX_FIELD_FMTMEMOBLOB', null);

	/**
	 * 画像 (基本的に blob です。サポートされません)
	 */
	define('PX_FIELD_GRAPHIC', null);

	/**
	 * Boolean
	 */
	define('PX_FIELD_LOGICAL', null);

	/**
	 * Long 型の整数 (4 バイト)
	 */
	define('PX_FIELD_LONG', null);

	/**
	 * バイナリラージオブジェクト
	 */
	define('PX_FIELD_MEMOBLOB', null);

	/**
	 * Double
	 */
	define('PX_FIELD_NUMBER', null);

	/**
	 * OLE オブジェクト (基本的に blob です。サポートされません)
	 */
	define('PX_FIELD_OLE', null);

	/**
	 * Short 型の整数 (2 バイト)
	 */
	define('PX_FIELD_SHORT', null);

	/**
	 * 時刻。深夜 0 時からの経過ミリ秒数
	 */
	define('PX_FIELD_TIME', null);

	/**
	 * タイムスタンプ。0000 年 1 月 1 日からの経過ミリ秒数
	 */
	define('PX_FIELD_TIMESTAMP', null);

	/**
	 * インクリメンタルなセカンダリインデックス
	 */
	define('PX_FILE_INC_SEC_INDEX', null);

	/**
	 * インクリメンタルなセカンダリインデックス
	 */
	define('PX_FILE_INC_SEC_INDEX_G', null);

	/**
	 * インデックス化されたデータベース
	 */
	define('PX_FILE_INDEX_DB', null);

	/**
	 * インクリメンタルでないセカンダリインデックス
	 */
	define('PX_FILE_NON_INC_SEC_INDEX', null);

	/**
	 * インクリメンタルでないセカンダリインデックス
	 */
	define('PX_FILE_NON_INC_SEC_INDEX_G', null);

	/**
	 * インデックス化されていないデータベース
	 */
	define('PX_FILE_NON_INDEX_DB', null);

	/**
	 * プライマリインデックス
	 */
	define('PX_FILE_PRIM_INDEX', null);

	/**
	 * セカンダリインデックス
	 */
	define('PX_FILE_SEC_INDEX', null);

	/**
	 * セカンダリインデックス
	 */
	define('PX_FILE_SEC_INDEX_G', null);

	/**
	 * すべてのフィールド名を小文字にします
	 */
	define('PX_KEYTOLOWER', null);

	/**
	 * すべてのフィールド名を大文字にします
	 */
	define('PX_KEYTOUPPER', null);

}
