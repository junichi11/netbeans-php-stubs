<?php



namespace {

	/**
	 * ID3v2 フレームの長い名前を取得する
	 * <p><b>id3_get_frame_long_name()</b> は、 ID3v2 フレームの長い名前を返します。</p>
	 * @param string $frameId <p>ID3v2 フレーム。</p>
	 * @return string <p>フレームの長い名前、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.id3-get-frame-long-name.php
	 * @see id3_get_frame_short_name()
	 * @since PECL id3 >= 0.2
	 */
	function id3_get_frame_long_name(string $frameId): string {}

	/**
	 * ID3v2 フレームの短い名前を取得する
	 * <p><b>id3_get_frame_short_name()</b> は、 ID3v2 フレームの短い名前を返します。</p>
	 * @param string $frameId <p>ID3v2 フレーム。</p>
	 * @return string <p>フレームの短い名前、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p><p><b>id3_get_frame_short_name()</b> が返す値は、 <code>id3_get_tag()</code> の返す配列で用いられます。</p>
	 * @link https://php.net/manual/ja/function.id3-get-frame-short-name.php
	 * @see id3_get_frame_long_name()
	 * @since PECL id3 >= 0.2
	 */
	function id3_get_frame_short_name(string $frameId): string {}

	/**
	 * ジャンルの ID を取得する
	 * <p><b>id3_get_genre_id()</b> は、ジャンルの ID を返します。</p>
	 * @param string $genre <p>ジャンル名を表す文字列。</p>
	 * @return int <p>ジャンルの ID あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.id3-get-genre-id.php
	 * @see id3_get_genre_name(), id3_get_genre_list()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_id(string $genre): int {}

	/**
	 * 使用可能なジャンルの一覧を取得する
	 * <p><b>id3_get_genre_list()</b> は、ID3 タグに格納されている すべてのジャンルを配列で返します。この一覧は Eric Kemp によって作成されたもので、後に WinAmp によって拡張されました。</p><p>この関数は、選択可能なジャンルの一覧を利用者に提供するのに便利です。 ID3 タグを更新する際には、ジャンルは 0 から 147 までの整数値で 指定しなければなりません。</p>
	 * @return array <p>ID3 タグに格納されているすべてのジャンルを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.id3-get-genre-list.php
	 * @see id3_get_genre_name(), id3_get_genre_id()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_list(): array {}

	/**
	 * ジャンル ID に対応する名前を取得する
	 * <p><b>id3_get_genre_name()</b> は、ジャンル ID に対応する名前を返します。</p>
	 * @param int $genre_id <p>0 から 147 までの整数値。</p>
	 * @return string <p>名前を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.id3-get-genre-name.php
	 * @see id3_get_genre_list(), id3_get_genre_id()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_name(int $genre_id): string {}

	/**
	 * ID3 タグに含まれるすべての情報を取得する
	 * <p><b>id3_get_tag()</b> は、指定したファイルの ID3 タグに 含まれるすべての情報を取得するために使用されます。</p>
	 * @param string $filename <p>MP3 ファイルへのパス。</p> <p>ファイル名のかわりに、ストリームリソースを渡すことも可能です。</p>
	 * @param int $version <p>MP3 ファイルがバージョン 1.x およびバージョン 2.x の両方のタグを 含んでいる場合に、タグのバージョンを指定します。</p> <p>バージョン 0.2 以降、<b>id3_get_tag()</b> は ID3 タグのバージョン 2.2、2.3 および 2.4 にも対応するようになりました。 これらのタグに関する情報を取得するには、2 番目の引数に ID3_V2_2、ID3_V2_3 あるいは ID3_V2_4 のいずれかの定数を指定します。 ID3 v2.x タグは、ID3 v1.x タグに比べてはるかに多くの情報を MP3 ファイルに含めることが可能です。</p>
	 * @return array <p><i>title</i> や <i>artist</i> といったキーを含む連想配列を返します。</p><p><i>genre</i> には 0 から 147 までの整数値が格納されています。 <code>id3_get_genre_name()</code> を使用することで、 この数値をジャンル名に変換することが可能です。</p>
	 * @link https://php.net/manual/ja/function.id3-get-tag.php
	 * @see id3_set_tag(), id3_remove_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_tag(string $filename, int $version = ID3_BEST): array {}

	/**
	 * ID3 タグのバージョンを取得する
	 * <p><b>id3_get_version()</b> は、MP3 ファイル内の ID3 タグのバージョンを取得します。</p><p>あるファイルが ID3 v1.1 タグを含んでいるのなら、そのファイルは 常に 1.0 タグも含んでいます。というのも、バージョン 1.1 は単に 1.0 を拡張したものであるからです。</p>
	 * @param string $filename <p>MP3 ファイルへのパス。</p> <p>ファイル名のかわりに、ストリームリソースを渡すことも可能です。</p>
	 * @return int <p>MP3 ファイル内の ID3 タグのバージョンを返します。 ID3 v1.x のタグおよび v2.x のタグを同時に保持することも可能なので、 この関数の返す値を利用する際には 定義済みの定数 <b><code>ID3_V1_0</code></b>、 <b><code>ID3_V1_1</code></b> および <b><code>ID3_V2</code></b> とのビット比較を行わなければなりません。</p>
	 * @link https://php.net/manual/ja/function.id3-get-version.php
	 * @see id3_set_tag(), id3_get_tag(), id3_remove_tag()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_version(string $filename): int {}

	/**
	 * 既存の ID3 タグを削除する
	 * <p><b>id3_remove_tag()</b> は、ID3 タグに格納されている 情報を削除するために使用されます。</p>
	 * @param string $filename <p>MP3 ファイルへのパス。</p> <p>ファイル名のかわりに、ストリームリソースを渡すことも可能です。</p>
	 * @param int $version <p>MP3 ファイルにはバージョン 1.x および 2.x のタグを両方含められるので、 ここでタグのバージョンを指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.id3-remove-tag.php
	 * @see id3_set_tag(), id3_get_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_remove_tag(string $filename, int $version = ID3_V1_0): bool {}

	/**
	 * ID3 タグに格納されている情報を更新する
	 * <p><b>id3_set_tag()</b> は、ID3 タグに格納されている情報を 変更するために使用されます。タグが存在しない場合は、新たに追加されます。</p>
	 * @param string $filename <p>MP3 ファイルへのパス。</p> <p>ファイル名のかわりに、ストリームリソースを渡すことも可能です。</p>
	 * @param array $tag <p>タグのキーと値を含む連想配列。</p> <p>連想配列の中で使用できるキーは以下のようになります。</p> <p></p> <b>連想配列内のキー</b>   キー とりうる値 使用可能なバージョン     title 最大 30 文字までの文字列 v1.0, v1.1   artist 最大 30 文字までの文字列 v1.0, v1.1   album 最大 30 文字までの文字列 v1.0, v1.1   year 4 桁の数値 v1.0, v1.1   genre 0 から 147 までの整数値 v1.0, v1.1   comment 最大 30 文字 (v1.1 では 28 文字) までの文字列 v1.0, v1.1   track 0 から 255 までの整数値 v1.1
	 * @param int $version <p>MP3 ファイルにはバージョン 1.x および 2.x のタグを両方含められるので、 ここでタグのバージョンを指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.id3-set-tag.php
	 * @see id3_remove_tag(), id3_get_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_set_tag(string $filename, array $tag, int $version = ID3_V1_0): bool {}

	/**
	 * <b><code>ID3_BEST</code></b> は、 どのバージョンのタグを使用するのかを id3 関数自身に決定させる場合に 用います。
	 */
	define('ID3_BEST', null);

	/**
	 * <b><code>ID3_V1_0</code></b> は、 ID3 V1.0 タグを利用する場合に用います。このタグには title、artist、album、genre、year および comment といったフィールドが含まれます。
	 */
	define('ID3_V1_0', null);

	/**
	 * <b><code>ID3_V1_1</code></b> は、 ID3 V1.1 タグを利用する場合に用います。このタグには v1.0 タグのすべての情報に加えてトラック番号が含まれます。
	 */
	define('ID3_V1_1', null);

	/**
	 * <b><code>ID3_V2_1</code></b> は、 ID3 V2.1 タグを利用する場合に用います。
	 */
	define('ID3_V2_1', null);

	/**
	 * <b><code>ID3_V2_2</code></b> は、 ID3 V2.2 タグを利用する場合に用います。
	 */
	define('ID3_V2_2', null);

	/**
	 * <b><code>ID3_V2_3</code></b> は、 ID3 V2.3 タグを利用する場合に用います。
	 */
	define('ID3_V2_3', null);

	/**
	 * <b><code>ID3_V2_4</code></b> は、 ID3 V2.4 タグを利用する場合に用います。
	 */
	define('ID3_V2_4', null);

}
