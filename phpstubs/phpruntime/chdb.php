<?php



namespace {

	/**
	 * <p>読み込まれた chdb ファイルを表現します。</p>
	 * @link https://php.net/manual/ja/class.chdb.php
	 * @since PECL chdb >= 0.1.0
	 */
	class chdb {

		/**
		 * chdb クラスのインスタンスを生成します。
		 * <p>chdb のファイルをメモリにマップすることによって読み込みます。</p><p><b>注意</b>:</p><p>指定されたファイルに対して中身が正しいかがチェックされます。これはありがちな間違い(たとえば、chdb でないファイルを読み込んだり、どういうわけか今動いている chdb と互換性がなかったりする場合)を起こす可能性を避けるためのものです。悪意があるユーザーが細工した chdb ファイルを読み込むと危険な場合があるため、chdb ファイルは PHP の共有ライブラリに対して用いられるセキュリティ設定と同程度にしか信頼してはいけませんし、そのように扱うべきです。</p>
		 * @param string $pathname <p>読み込むファイル名</p>
		 * @return self
		 * @link https://php.net/manual/ja/chdb.construct.php
		 * @since PECL chdb >= 0.1.0
		 */
		public function __construct(string $pathname) {}

		/**
		 * キーに対応した値を取得する
		 * <p>chdb データベースから、キーに対応した値を取得します。</p>
		 * @param string $key <p>値を取得するためのキー</p>
		 * @return string <p>与えられた <code>key</code> に対応した値を含む文字列を返します。対応する値が見つからなかった場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/chdb.get.php
		 * @since PECL chdb >= 0.1.0
		 */
		public function get(string $key): string {}
	}

	/**
	 * chdb ファイルを作成する
	 * <p><b>chdb_create()</b> 関数は、特定のキーと値のペアを含む chdb ファイルを作成します。</p><p><b>注意</b>:</p><p>エンディアンが異なる環境で作られた chdb ファイルは移植性がありません。それを除けば、異なるアーキテクチャ上であっても移植性があります。また、バージョンが異なる chdb 間の互換性は保証されません。</p>
	 * @param string $pathname <p>作成する chdb のファイルパス名</p> <p>指定されたパスと同じファイルが既にある場合は上書きされます。</p>
	 * @param array $data <p>chdb ファイルに格納するキーと値のペアを含んだ配列</p> <p>キーと値はファイルに書き出される前に文字列に変換されます。これは chdb が文字列型しかサポートしていないからです。キーにも値にも、バイナリ文字列を使えることに注意してください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.chdb-create.php
	 * @since PECL chdb >= 0.1.0
	 */
	function chdb_create(string $pathname, array $data): bool {}

}
