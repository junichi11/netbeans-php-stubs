<?php



namespace {

	/**
	 * 指定したハッシュに関する情報を返す
	 * <p><code>password_hash()</code> がサポートするアルゴリズムで生成した有効なハッシュを渡すと、 そのハッシュに関する情報の配列を返します。</p>
	 * @param string $hash <p><code>password_hash()</code> が作ったハッシュ。</p>
	 * @return array <p>三つの要素を持つ連想配列を返します。</p><ul> <li>  <i>algo</i> には、そのハッシュの パスワードアルゴリズム定数 が含まれます。  </li> <li>  <i>algoName</i> には、そのアルゴリズムの名前が含まれます。  </li> <li>  <i>options</i> には、 <code>password_hash()</code> を呼んだときのオプションが含まれます。  </li> </ul>
	 * @link https://php.net/manual/ja/function.password-get-info.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_get_info(string $hash): array {}

	/**
	 * パスワードハッシュを作る
	 * <p><b>password_hash()</b> は、強力な一方向ハッシュアルゴリズムを使って 新しいパスワードハッシュを作ります。 <b>password_hash()</b> は <code>crypt()</code> と互換性があるので、 <code>crypt()</code> が作ったパスワードハッシュは <b>password_hash()</b> でも使えます。</p><p>現在、これらのアルゴリズムに対応しています。</p><p></p><p>サポートするオプション</p><p></p><p><i>salt</i> - パスワードのハッシュに使うソルトを手動で設定します。 これは、自動生成されたソルトを上書きすることに注意しましょう。</p><p>省略した場合は、パスワードをハッシュするたびに <b>password_hash()</b> がランダムなソルトを自動生成します。これは意図したとおりの操作モードです。</p><p>このソルト・オプションは、PHP 7.0.0 で非推奨になりました。 このオプションは指定せずに、デフォルトで生成されるソルトを使うことを推奨します。</p><p><i>cost</i> - 利用するアルゴリズムのコストを表します。 値の例については <code>crypt()</code> のページを参照ください。</p><p>省略した場合のデフォルトは <i>10</i> です。この値でもかまいませんが、 ハードウェアの性能が許すならもう少し高くすることもできます。</p>
	 * @param string $password <p>ユーザーのパスワード。</p>  <b>警告</b> <p><b><code>PASSWORD_BCRYPT</code></b> をアルゴリズムに指定すると、 <code>password</code> が最大 72 文字までに切り詰められます。</p>
	 * @param int $algo <p>パスワードのハッシュに使うアルゴリズムを表す パスワードアルゴリズム定数。</p>
	 * @param array $options <p>オプションを含む連想配列。各アルゴリズムがサポートするオプションについては、 パスワードアルゴリズム定数 のページを参照ください。</p> <p>省略した場合は、ランダムな salt を生成してデフォルトのコストを使います。</p>
	 * @return string <p>ハッシュしたパスワードを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>使ったアルゴリズムやコスト、そしてソルトもハッシュの一部として返されます。 つまり、ハッシュを検証するために必要な情報は、すべてそこに含まれているということです。 そのため、<code>password_verify()</code> でハッシュを検証するときに、 ソルトやアルゴリズムの情報を別に保存する必要はありません。</p>
	 * @link https://php.net/manual/ja/function.password-hash.php
	 * @see password_verify(), crypt()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_hash(string $password, int $algo, array $options = NULL): string {}

	/**
	 * 指定したハッシュがオプションにマッチするかどうかを調べる
	 * <p>指定したハッシュが、特定のアルゴリズムとオプションを満たしているかどうかを調べます。 満たしていない場合は、ハッシュを再計算する必要があるとみなします。</p>
	 * @param string $hash <p><code>password_hash()</code> が作ったハッシュ。</p>
	 * @param int $algo <p>パスワードのハッシュに使うアルゴリズムを表す パスワードアルゴリズム定数。</p>
	 * @param array $options <p>オプションを含む連想配列。各アルゴリズムがサポートするオプションについては、 パスワードアルゴリズム定数 のページを参照ください。</p>
	 * @return bool <p>指定した <code>algo</code> と <code>options</code> にマッチするためにハッシュの再計算が必要な場合は <b><code>TRUE</code></b>、 それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.password-needs-rehash.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_needs_rehash(string $hash, int $algo, array $options = NULL): bool {}

	/**
	 * パスワードがハッシュにマッチするかどうかを調べる
	 * <p>指定したハッシュがパスワードにマッチするかどうかを調べます。</p><p><code>password_hash()</code> は、 アルゴリズムやコスト、ソルトといった情報もハッシュに含めて返すことに注意しましょう。 したがって、ハッシュの検証に必要な情報はすべてそこに含まれていることになります。 これで、検証関数がハッシュの検証をするときに、ソルトやアルゴリズム情報を別の場所から取得する必要がなくなります。</p><p>この関数は、タイミング攻撃に対して安全です。</p>
	 * @param string $password <p>ユーザーのパスワード。</p>
	 * @param string $hash <p><code>password_hash()</code> が作ったハッシュ。</p>
	 * @return bool <p>パスワードとハッシュがマッチする場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.password-verify.php
	 * @see password_hash(), sodium_crypto_pwhash_str_verify()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_verify(string $password, string $hash): bool {}

	/**
	 * <p>Argon2lib がハッシュの計算に用いるメモリのデフォルト値。</p> <p>PHP 7.2.0 以降で利用可能です。</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_MEMORY_COST', 65536);

	/**
	 * <p>Argon2lib が用いるデフォルトのスレッド数。</p> <p>PHP 7.2.0 以降で利用可能です。</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_THREADS', 1);

	/**
	 * <p>Argon2lib がハッシュの計算にかける時間のデフォルト値。</p> <p>PHP 7.2.0 以降で利用可能です。</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_TIME_COST', 4);

	/**
	 * <p><b><code>PASSWORD_ARGON2I</code></b> を使うと、 Argon2 アルゴリズムで新たなパスワードハッシュを作ります。</p> <p>サポートするオプション</p> <ul> <li> <p><i>memory_cost</i> (<code>integer</code>) - Argon2 ハッシュの計算に用いるメモリの最大値 (バイト数) を設定します。 デフォルトは <b><code>PASSWORD_ARGON2_DEFAULT_MEMORY_COST</code></b> です。</p> </li> <li> <p><i>time_cost</i> (<code>integer</code>) - Argon2 ハッシュの計算にかける時間の最大値を設定します。 デフォルトは <b><code>PASSWORD_ARGON2_DEFAULT_TIME_COST</code></b> です。</p> </li> <li> <p><i>threads</i> (<code>integer</code>) - Argon2 ハッシュの計算に用いるスレッド数を設定します。 デフォルトは <b><code>PASSWORD_ARGON2_DEFAULT_THREADS</code></b> です。</p> </li> </ul> <p>PHP 7.2.0 以降で利用可能です。</p>
	 */
	define('PASSWORD_ARGON2I', 2);

	/**
	 * <p><b><code>PASSWORD_BCRYPT</code></b> を使うと、 <b><code>CRYPT_BLOWFISH</code></b> アルゴリズムで新たなパスワードハッシュを作ります。</p> <p>これは常に、"$2y$" crypt フォーマットを使ったハッシュになります。 長さは常に 60 文字です。</p> <p>サポートするオプション</p> <ul> <li> <p><i>salt</i> (<code>string</code>) - パスワードのハッシュに使うソルトを手動で設定します。 これは、自動生成されたソルトを上書きすることに注意しましょう。</p> <p>省略した場合は、パスワードをハッシュするたびに <code>password_hash()</code> がランダムなソルトを自動生成します。これは意図したとおりの操作モードです。 および PHP 7.0.0 以降でソルト・オプションは非推奨になりました。</p> </li> <li> <p><i>cost</i> (<code>integer</code>) - 利用するアルゴリズムのコストを表します。 値の例については <code>crypt()</code> のページを参照ください。</p> <p>省略した場合のデフォルトは <i>10</i> です。この値でもかまいませんが、 ハードウェアの性能が許すならもう少し高くすることもできます。</p> </li> </ul>
	 */
	define('PASSWORD_BCRYPT', 1);

	/**
	 * <p>アルゴリズムを指定しなかったときのデフォルトとして使うアルゴリズム。 PHP のバージョンが上がるときに、 その時点でより強力なハッシュアルゴリズムに対応していればデフォルトが変わる可能性があります。</p> <p>この定数の値は、今後変わる可能性がある (きっと変わる) ことに注意しましょう。 つまり、生成されるハッシュの長さも変わる可能性があるということです。 したがって、<b><code>PASSWORD_DEFAULT</code></b> を使う場合は、 ハッシュの格納先は 60 文字以上でも格納できるようにしておく必要があります (255 文字程度にしておくことをおすすめします)。</p> <p>この定数の値</p> <ul> <li>  PHP 5.5.0 - <b><code>PASSWORD_BCRYPT</code></b>  </li> </ul>
	 */
	define('PASSWORD_DEFAULT', 1);

}
