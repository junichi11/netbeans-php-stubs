<?php



/**
 * <p>SplBool クラスは bool 型をより強力に型付けするために使用します。</p>
 * @link http://php.net/manual/ja/class.splbool.php
 * @since PECL spl_types >= 0.1.0
 */
class SplBool extends \SplEnum {

	/**
	 * @var boolean
	 * @link http://php.net/manual/ja/class.splbool.php
	 */
	const __default = false;

	/**
	 * @var boolean
	 * @link http://php.net/manual/ja/class.splbool.php
	 */
	const false = false;

	/**
	 * @var boolean
	 * @link http://php.net/manual/ja/class.splbool.php
	 */
	const true = true;

	/**
	 * すべての定数 (取り得る値) を配列で返す
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $include_default <p><i>__default</i> プロパティを含めるか否か。</p>
	 * @return array
	 * @link http://php.net/manual/ja/splenum.getconstlist.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function getConstList(bool $include_default = false): array {}
}

/**
 * <p>SplEnum は、PHP ネイティブで列挙型のオブジェクトを作成します。</p>
 * @link http://php.net/manual/ja/class.splenum.php
 * @since PECL spl_types >= 0.1.0
 */
class SplEnum extends \SplType {

	/**
	 * @var NULL
	 * @link http://php.net/manual/ja/class.splenum.php
	 */
	const __default = null;

	/**
	 * 何らかの型の新しい値を作成する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $initial_value <p>継承先のクラスに依存する、型と初期値。</p>
	 * @param bool $strict <p>オブジェクトの厳密性を設定するかどうか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/spltype.construct.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function __construct($initial_value = NULL, bool $strict = NULL) {}

	/**
	 * すべての定数 (取り得る値) を配列で返す
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $include_default <p><i>__default</i> プロパティを含めるか否か。</p>
	 * @return array
	 * @link http://php.net/manual/ja/splenum.getconstlist.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function getConstList(bool $include_default = false): array {}
}

/**
 * <p>SplFloat クラスは float 型をより強力に型付けするために使用します。</p>
 * @link http://php.net/manual/ja/class.splfloat.php
 * @since PECL spl_types >= 0.1.0
 */
class SplFloat extends \SplType {

	/**
	 * @var float
	 * @link http://php.net/manual/ja/class.splfloat.php
	 */
	const __default = 0;

	/**
	 * 何らかの型の新しい値を作成する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $initial_value <p>継承先のクラスに依存する、型と初期値。</p>
	 * @param bool $strict <p>オブジェクトの厳密性を設定するかどうか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/spltype.construct.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function __construct($initial_value = NULL, bool $strict = NULL) {}
}

/**
 * <p>SplInt クラスは integer 型をより強力に型付けするために使用します。</p>
 * @link http://php.net/manual/ja/class.splint.php
 * @since PECL spl_types >= 0.1.0
 */
class SplInt extends \SplType {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.splint.php
	 */
	const __default = 0;

	/**
	 * 何らかの型の新しい値を作成する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $initial_value <p>継承先のクラスに依存する、型と初期値。</p>
	 * @param bool $strict <p>オブジェクトの厳密性を設定するかどうか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/spltype.construct.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function __construct($initial_value = NULL, bool $strict = NULL) {}
}

/**
 * <p>SplString クラスは、文字列型をより強力に型付けするために使用します。</p>
 * @link http://php.net/manual/ja/class.splstring.php
 * @since PECL spl_types >= 0.1.0
 */
class SplString extends \SplType {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.splstring.php
	 */
	const __default = '';

	/**
	 * 何らかの型の新しい値を作成する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $initial_value <p>継承先のクラスに依存する、型と初期値。</p>
	 * @param bool $strict <p>オブジェクトの厳密性を設定するかどうか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/spltype.construct.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function __construct($initial_value = NULL, bool $strict = NULL) {}
}

/**
 * <p>すべての SPL 型の親クラスです。</p>
 * @link http://php.net/manual/ja/class.spltype.php
 * @since PECL spl_types >= 0.1.0
 */
abstract class SplType {

	/**
	 * @var NULL
	 * @link http://php.net/manual/ja/class.spltype.php
	 */
	const __default = null;

	/**
	 * 何らかの型の新しい値を作成する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $initial_value <p>継承先のクラスに依存する、型と初期値。</p>
	 * @param bool $strict <p>オブジェクトの厳密性を設定するかどうか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/spltype.construct.php
	 * @since PECL spl_types >= 0.1.0
	 */
	public function __construct($initial_value = NULL, bool $strict = NULL) {}
}

