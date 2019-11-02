<?php



namespace {

	/**
	 * 拡張属性を取得する
	 * <p>この関数は、ファイルの拡張属性の値を取得します。</p><p>拡張属性には二種類の異なる名前空間、つまり、ユーザーとルートがあります。 ユーザー名前空間は、すべてのユーザーで利用可能ですが、ルート名前空間は、ルート権限を有するユーザーのみ利用可能です。 xattr はデフォルトでユーザー名前空間で処理を行いますが、 <code>flags</code> 引数によりこれを変更することができます。</p>
	 * @param string $filename <p>属性を取得するファイル。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @param int $flags <p></p> <b>サポートされる xattr のフラグ</b>   <b><code>XATTR_DONTFOLLOW</code></b> シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。   <b><code>XATTR_ROOT</code></b> root (信頼された) 名前空間に属性を設定します。root 権限が必要です。
	 * @return string <p>値を含む文字列、あるいは属性が存在しない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xattr-get.php
	 * @see xattr_list(), xattr_set(), xattr_remove()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_get(string $filename, string $name, int $flags = 0): string {}

	/**
	 * 拡張属性の一覧を取得する
	 * <p>この関数は、ファイルの拡張属性の名前の一覧を取得します。</p><p>拡張属性には二種類の異なる名前空間、つまり、ユーザーとルートがあります。 ユーザー名前空間は、すべてのユーザーで利用可能ですが、ルート名前空間は、ルート権限を有するユーザーのみ利用可能です。 xattr はデフォルトでユーザー名前空間で処理を行いますが、 <code>flags</code> 引数によりこれを変更することができます。</p>
	 * @param string $filename <p>ファイルのパス。</p>
	 * @param int $flags <p></p> <b>サポートされる xattr のフラグ</b>   <b><code>XATTR_DONTFOLLOW</code></b> シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。   <b><code>XATTR_ROOT</code></b> root (信頼された) 名前空間に属性を設定します。root 権限が必要です。
	 * @return array <p>この関数は、拡張属性の名前を配列で返します。</p>
	 * @link https://php.net/manual/ja/function.xattr-list.php
	 * @see xattr_get()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_list(string $filename, int $flags = 0): array {}

	/**
	 * 拡張属性を削除する
	 * <p>この関数は、ファイルの拡張属性を削除します。</p><p>拡張属性には二種類の異なる名前空間、つまり、ユーザーとルートがあります。 ユーザー名前空間は、すべてのユーザーで利用可能ですが、ルート名前空間は、ルート権限を有するユーザーのみ利用可能です。 xattr はデフォルトでユーザー名前空間で処理を行いますが、 <code>flags</code> 引数によりこれを変更することができます。</p>
	 * @param string $filename <p>属性を削除するファイル。</p>
	 * @param string $name <p>削除する属性の名前。</p>
	 * @param int $flags <p></p> <b>サポートされる xattr のフラグ</b>   <b><code>XATTR_DONTFOLLOW</code></b> シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。   <b><code>XATTR_ROOT</code></b> root (信頼された) 名前空間に属性を設定します。root 権限が必要です。
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xattr-remove.php
	 * @see xattr_list(), xattr_set(), xattr_get()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_remove(string $filename, string $name, int $flags = 0): bool {}

	/**
	 * 拡張属性を設定する
	 * <p>この関数は、ファイルの拡張属性の値を設定します。</p><p>拡張属性には二種類の異なる名前空間、つまり、ユーザーとルートがあります。 ユーザー名前空間は、すべてのユーザーで利用可能ですが、ルート名前空間は、ルート権限を有するユーザーのみ利用可能です。 xattr はデフォルトでユーザー名前空間で処理を行いますが、 <code>flags</code> 引数によりこれを変更することができます。</p>
	 * @param string $filename <p>属性を設定するファイル。</p>
	 * @param string $name <p>拡張属性の名前。もし属性が存在しない場合は新しく作成され、 存在する場合は上書きされます。この振る舞いは、 <code>flags</code> パラメータを使用することで変更可能です。</p>
	 * @param string $value <p>属性の値。</p>
	 * @param int $flags <p></p> <b>サポートされる xattr のフラグ</b>   <b><code>XATTR_CREATE</code></b> 拡張属性が既に存在する場合、関数は失敗します。   <b><code>XATTR_REPLACE</code></b> 拡張属性が存在しない場合、関数は失敗します。   <b><code>XATTR_DONTFOLLOW</code></b> シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。   <b><code>XATTR_ROOT</code></b> root (信頼された) 名前空間に属性を設定します。root 権限が必要です。
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xattr-set.php
	 * @see xattr_get(), xattr_remove()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_set(string $filename, string $name, string $value, int $flags = 0): bool {}

	/**
	 * ファイルシステムが拡張属性をサポートしているかどうかを調べる
	 * <p>この関数は、指定したファイルを保持するファイルシステムが 拡張属性をサポートしているかどうかを調べます。ファイルに対する 読み込みアクセス権限を必要とします。</p>
	 * @param string $filename <p>調べるファイルのパス。</p>
	 * @param int $flags <p></p> <b>サポートされる xattr のフラグ</b>   <b><code>XATTR_DONTFOLLOW</code></b> シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。
	 * @return bool <p>この関数は、ファイルシステムが拡張属性をサポートしている場合に <b><code>TRUE</code></b>、 していない場合に <b><code>FALSE</code></b>、そして判断できない場合 (たとえばパスが 間違っていたりファイルへのアクセス権限がない場合) には <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xattr-supported.php
	 * @see xattr_get(), xattr_list()
	 * @since PECL xattr >= 1.0.0
	 */
	function xattr_supported(string $filename, int $flags = 0): bool {}

	/**
	 * 拡張属性が既に存在する場合、関数は失敗します。
	 */
	define('XATTR_CREATE', null);

	/**
	 * シンボリックリンクのリンク先をたどらず、リンクそのものを操作します。
	 */
	define('XATTR_DONTFOLLOW', null);

	/**
	 * 拡張属性が存在しない場合、関数は失敗します。
	 */
	define('XATTR_REPLACE', null);

	/**
	 * root (信頼された) 名前空間に属性を設定します。 root 権限が必要です。
	 */
	define('XATTR_ROOT', null);

}
