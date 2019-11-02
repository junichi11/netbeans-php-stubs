<?php



namespace {

	/**
	 * <p>リフレクションクラスです。</p>
	 * @link https://php.net/manual/ja/class.reflection.php
	 * @since PHP 5, PHP 7
	 */
	class Reflection {

		/**
		 * エクスポートする
		 * <p>リフレクションをエクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param \Reflector $reflector <p>エクスポートするリフレクション。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflection.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(\Reflector $reflector, bool $return = FALSE): string {}

		/**
		 * Gets modifier names
		 * <p>Gets modifier names.</p>
		 * @param int $modifiers <p>Bitfield of the modifiers to get.</p>
		 * @return array <p>An array of modifier names.</p>
		 * @link https://php.net/manual/ja/reflection.getmodifiernames.php
		 * @since PHP 5, PHP 7
		 */
		public static function getModifierNames(int $modifiers): array {}
	}

	/**
	 * <p><b>ReflectionClass</b> クラスは クラスについての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionclass.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionClass implements \Reflector {

		/**
		 * @var integer <p>抽象メソッドを持っているので  abstract クラスであることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionclass.php
		 */
		const IS_IMPLICIT_ABSTRACT = 16;

		/**
		 * @var integer <p>その定義から  abstract クラスであることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionclass.php
		 */
		const IS_EXPLICIT_ABSTRACT = 32;

		/**
		 * @var integer <p>final クラスを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionclass.php
		 */
		const IS_FINAL = 64;

		/**
		 * @var mixed <p>クラス名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionclass.php#reflectionclass.props.name
		 */
		public $name;

		/**
		 * ReflectionClass を作成する
		 * <p>新しい ReflectionClass オブジェクトを作成します。</p>
		 * @param mixed $argument <p>調べたいクラスのクラス名をあらわす文字列か、そのクラスのオブジェクト。</p>
		 * @return self <p>Returns constructed ReflectionClass instance.</p>
		 * @link https://php.net/manual/ja/reflectionclass.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($argument) {}

		/**
		 * ReflectionClass オブジェクトの文字列表現を返す
		 * <p>ReflectionClass オブジェクトの文字列表現を返します。</p>
		 * @return string <p>この ReflectionClass インスタンスの文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * クラスをエクスポートする
		 * <p>調べているクラスをエクスポートします。</p>
		 * @param mixed $argument <p>エクスポートするリフレクション。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export($argument, bool $return = FALSE): string {}

		/**
		 * 定義されている定数を取得する
		 * <p>定義されている定数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name <p>定数の名前。</p>
		 * @return mixed <p>定数の値を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstant.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstant(string $name) {}

		/**
		 * 定数を取得する
		 * <p>可視性にかかわらず、クラスで定義されているすべての定数を取得します。</p>
		 * @return array <p>定数の配列を返します。 キーは名前を保持し、値は定数の値を保持します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * クラスのコンストラクタを取得する
		 * <p>クラスのコンストラクタを取得します。</p>
		 * @return object <p>クラスのコンストラクタを表す ReflectionMethod オブジェクトを返します。 クラスのコンストラクタがない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstructor(): object {}

		/**
		 * デフォルトプロパティを取得する
		 * <p>クラスのデフォルトプロパティ (継承したプロパティを含む) を取得します。</p><p><b>注意</b>:</p><p>このメソッドで static プロパティを扱えるのは、内部クラスの場合だけです。 ユーザー定義クラスで使った場合は、 クラスの static なプロパティのデフォルト値はこのメソッドでは追跡できません。</p>
		 * @return array <p>デフォルトプロパティの配列を返します。プロパティ名が配列のキー、 そしてそのプロパティのデフォルト値が配列の値 (デフォルト値が存在しない場合は <b><code>NULL</code></b>) となります。 この関数は静的なプロパティとそうでないプロパティを区別せず、 アクセス修飾子も考慮しません。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getdefaultproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getDefaultProperties(): array {}

		/**
		 * ドキュメントコメントを取得する
		 * <p>クラスのドキュメントコメントを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ドキュメントコメントが存在すればそれを返します。存在しなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getdoccomment.php
		 * @since PHP 5, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * 終了行を取得する
		 * <p>ユーザー定義クラスの定義の終了行を取得します。</p>
		 * @return int <p>ユーザー定義クラスの定義の終了行を返します。不明な場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getendline.php
		 * @since PHP 5, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを取得する
		 * <p>クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを取得します。</p>
		 * @return ReflectionExtension <p>クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを返します。 ユーザー定義のクラスの場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getextension.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * クラスを定義する拡張モジュールの名前を取得する
		 * <p>クラスを定義する拡張モジュールの名前を取得します。</p>
		 * @return string <p>クラスを定義する拡張モジュールの名前を返します。 ユーザー定義のクラスの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getextensionname.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * クラスが定義されているファイルのファイル名を取得する
		 * <p>クラスが定義されているファイルのファイル名を取得します。</p>
		 * @return string <p>クラスが定義されているファイルのファイル名を返します。 そのクラスが PHP のコアあるいは PHP の拡張モジュール内で定義されている場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getfilename.php
		 * @since PHP 5, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * インターフェイスの名前を取得する
		 * <p>インターフェイスの名前を取得します。</p>
		 * @return array <p>インターフェイス名の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getinterfacenames.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getInterfaceNames(): array {}

		/**
		 * インターフェイスを取得する
		 * <p>インターフェイスを取得します。</p>
		 * @return array <p>インターフェイスの連想配列を返します。インターフェイス名が連想配列のキー、対応する値が ReflectionClass オブジェクトとなります。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getinterfaces.php
		 * @since PHP 5, PHP 7
		 */
		public function getInterfaces(): array {}

		/**
		 * クラスメソッドの ReflectionMethod を取得する
		 * <p>クラスメソッドに関する ReflectionMethod を取得します。</p>
		 * @param string $name <p>調べたいメソッドの名前。</p>
		 * @return ReflectionMethod <p>ReflectionMethod を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmethod.php
		 * @since PHP 5, PHP 7
		 */
		public function getMethod(string $name): \ReflectionMethod {}

		/**
		 * メソッドの配列を取得する
		 * <p>クラスのメソッドの配列を取得します。</p>
		 * @param int $filter <p>結果をフィルタして、特定の属性を持つメソッドだけを含めるようにします。 デフォルトは、何もフィルタしません。</p> <p><b><code>ReflectionMethod::IS_STATIC</code></b>、 <b><code>ReflectionMethod::IS_PUBLIC</code></b>、 <b><code>ReflectionMethod::IS_PROTECTED</code></b>、 <b><code>ReflectionMethod::IS_PRIVATE</code></b>、 <b><code>ReflectionMethod::IS_ABSTRACT</code></b>、 <b><code>ReflectionMethod::IS_FINAL</code></b> の任意の組み合わせ。 指定した属性の <i>いずれか</i> を持つすべてのメソッドを返します。</p> <p><b>注意</b>:  その他のビット演算 (<i>~</i> など) は期待通りの挙動にはなりません。 つまり、たとえば static ではないメソッドをすべて取得するなどといったことはできません。 </p>
		 * @return array <p>各メソッドを表す ReflectionMethod オブジェクトの配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmethods.php
		 * @see get_class_methods()
		 * @since PHP 5, PHP 7
		 */
		public function getMethods(int $filter = NULL): array {}

		/**
		 * クラス修飾子を取得する
		 * <p>このクラスのアクセス修飾子のビットフィールドを返します。</p>
		 * @return int <p> 修飾子定数 のビットマスクを返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * クラスの名前を取得する
		 * <p>クラスの名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>クラスの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 名前空間の名前を取得する
		 * <p>名前空間の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>名前空間の名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * 親クラスを取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>ReflectionClass を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getparentclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getParentClass(): \ReflectionClass {}

		/**
		 * プロパティを取得する
		 * <p>プロパティを取得します。</p>
		 * @param int $filter <p>オプションのフィルタで、取得したいプロパティの型を絞り込みます。 ReflectionProperty の定数 で設定し、デフォルトではすべてのプロパティ型を取得します。</p>
		 * @return array <p>ReflectionProperty オブジェクトの配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperties(int $filter = NULL): array {}

		/**
		 * クラスのプロパティを表す ReflectionProperty を取得する
		 * <p>クラスのプロパティを表す ReflectionProperty を取得します。</p>
		 * @param string $name <p>プロパティの名前。</p>
		 * @return ReflectionProperty <p>ReflectionProperty を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getproperty.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperty(string $name): \ReflectionProperty {}

		/**
		 * Gets a ReflectionClassConstant for a class's constant
		 * <p>Gets a ReflectionClassConstant for a class's property.</p>
		 * @param string $name <p>The class constant name.</p>
		 * @return ReflectionClassConstant <p>A ReflectionClassConstant.</p>
		 * @link https://php.net/manual/ja/reflectionclass.getreflectionconstant.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstant(string $name): \ReflectionClassConstant {}

		/**
		 * Gets class constants
		 * <p>Retrieves reflected constants.</p>
		 * @return array <p>An array of ReflectionClassConstant objects.</p>
		 * @link https://php.net/manual/ja/reflectionclass.getreflectionconstants.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstants(): array {}

		/**
		 * 短い名前を取得する
		 * <p>名前空間部分を除いた、クラスの短い名前を取得します。</p>
		 * @return string <p>クラスの短い名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * 開始行を取得する
		 * <p>開始行を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>開始行を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstartline.php
		 * @since PHP 5, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * 静的なプロパティを取得する
		 * <p>静的なプロパティを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>静的なプロパティを配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstaticproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getStaticProperties(): array {}

		/**
		 * 静的なプロパティの値を取得する
		 * <p>このクラスの静的なプロパティの値を取得します。</p>
		 * @param string $name <p>値を返したい静的プロパティの名前。</p>
		 * @param mixed $def_value <p>指定した名前の静的プロパティがそのクラスに存在しない場合に返す、デフォルト値。 プロパティが存在せず、かつこの引数も省略されていた場合は、 ReflectionException が発生します。</p>
		 * @return mixed <p>静的プロパティの値を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getStaticPropertyValue(string $name, &$def_value = NULL) {}

		/**
		 * トレイトのエイリアスの配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>新しいメソッド名をキー、その元の名前 (<i>"TraitName::original"</i> 形式) を値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraitaliases.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitAliases(): array {}

		/**
		 * このクラスが使うトレイトの名前の配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>トレイト名を値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraitnames.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitNames(): array {}

		/**
		 * このクラスが使うトレイトの配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>トレイト名をキー、トレイトの ReflectionClass のインスタンスを値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraits.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraits(): array {}

		/**
		 * 定数が定義されているかどうかを調べる
		 * <p>そのクラスで特定の定数が定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたい定数の名前。</p>
		 * @return bool <p>定数が定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasconstant.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasConstant(string $name): bool {}

		/**
		 * メソッドが定義されているかどうかを調べる
		 * <p>そのクラスで特定のメソッドが定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたいメソッドの名前。</p>
		 * @return bool <p>メソッドが定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasmethod.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasMethod(string $name): bool {}

		/**
		 * プロパティが定義されているかどうかを調べる
		 * <p>特定のプロパティが定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたいプロパティの名前。</p>
		 * @return bool <p>プロパティが定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasproperty.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasProperty(string $name): bool {}

		/**
		 * インターフェイスの実装を調べる
		 * <p>インターフェイスを実装しているかどうかを調べます。</p>
		 * @param string $interface <p>インターフェイスの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.implementsinterface.php
		 * @see interface_exists()
		 * @since PHP 5, PHP 7
		 */
		public function implementsInterface(string $interface): bool {}

		/**
		 * 名前空間内にあるかどうかを調べる
		 * <p>このクラスが名前空間内で定義されているかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * 抽象クラスであるかどうかを調べる
		 * <p>抽象クラスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * Checks if class is anonymous
		 * <p>Checks if a class is an anonymous class.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isanonymous.php
		 * @since PHP 7
		 */
		public function isAnonymous(): bool {}

		/**
		 * このクラスがクローン可能かどうかを返す
		 * <p>このクラスがクローン可能かどうかを返します。</p>
		 * @return bool <p>このクラスがクローン可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.iscloneable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCloneable(): bool {}

		/**
		 * final クラスであるかどうかを調べる
		 * <p>final クラスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * クラスのインスタンスであるかどうかを調べる
		 * <p>あるオブジェクトがクラスのインスタンスであるかどうかを調べます。</p>
		 * @param object $object <p>比べたいオブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinstance.php
		 * @see is_a()
		 * @since PHP 5, PHP 7
		 */
		public function isInstance(object $object): bool {}

		/**
		 * クラスのインスタンス化が可能であるかどうかを調べる
		 * <p>クラスのインスタンス化が可能であるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinstantiable.php
		 * @since PHP 5, PHP 7
		 */
		public function isInstantiable(): bool {}

		/**
		 * このクラスがインターフェイスであるかどうかを調べる
		 * <p>このクラスがインターフェイスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinterface.php
		 * @since PHP 5, PHP 7
		 */
		public function isInterface(): bool {}

		/**
		 * 拡張モジュールあるいはコアで定義された内部クラスであるかどうかを調べる
		 * <p>そのクラスが拡張モジュールやコアで定義された内部クラスである (ユーザーが定義したものではない) かどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinternal.php
		 * @since PHP 5, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Check whether this class is iterable
		 * <p>Check whether this class is iterable (i.e. can be used inside foreach).</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isiterable.php
		 * @since PHP 7 >= 7.2.0
		 */
		public function isIterable(): bool {}

		/**
		 * 反復処理が可能であるかどうかを調べる
		 * <p>反復処理が可能であるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isiterateable.php
		 * @since PHP 5, PHP 7
		 */
		public function isIterateable(): bool {}

		/**
		 * サブクラスであるかどうかを調べる
		 * <p>指定したクラスを継承している、あるいは指定したインターフェイスを実装しているかどうかを調べます。</p>
		 * @param string $class <p>調べたいクラス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.issubclassof.php
		 * @see is_subclass_of(), get_parent_class()
		 * @since PHP 5, PHP 7
		 */
		public function isSubclassOf(string $class): bool {}

		/**
		 * トレイトであるかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>これがトレイトである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.istrait.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTrait(): bool {}

		/**
		 * ユーザー定義であるかどうかを調べる
		 * <p>そのクラスが (内部クラスではなく) ユーザーが定義したものであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isuserdefined.php
		 * @since PHP 5, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * 指定した引数でクラスの新しいインスタンスを作成する
		 * <p>クラスの新しいインスタンスを作成します。指定した引数をクラスのコンストラクタに渡します。</p>
		 * @param mixed $args <p>可変長の引数を受け付け、それを <code>call_user_func()</code> と同じ方式でクラスのコンストラクタに渡します。</p>
		 * @param mixed $_
		 * @return object
		 * @link https://php.net/manual/ja/reflectionclass.newinstance.php
		 * @since PHP 5, PHP 7
		 */
		public function newInstance($args, $_ = NULL): object {}

		/**
		 * 指定した引数でクラスの新しいインスタンスを作成する
		 * <p>クラスの新しいインスタンスを作成します。指定した引数をクラスのコンストラクタに渡します。</p>
		 * @param array $args <p>クラスのコンストラクタに渡すパラメータを配列で指定します。</p>
		 * @return object <p>クラスの新しいインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.newinstanceargs.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function newInstanceArgs(array $args = NULL): object {}

		/**
		 * コンストラクタを起動せずに新しいクラスのインスタンスを作成する
		 * <p>クラスの新しいインスタンスを、そのクラスのコンストラクタを実行せずに作成します。</p>
		 * @return object
		 * @link https://php.net/manual/ja/reflectionclass.newinstancewithoutconstructor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function newInstanceWithoutConstructor(): object {}

		/**
		 * 静的なプロパティの値を設定する
		 * <p>静的なプロパティの値を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name <p>プロパティの名前。</p>
		 * @param string $value <p>新しいプロパティの値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionclass.setstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setStaticPropertyValue(string $name, string $value): void {}
	}

	/**
	 * <p>The <b>ReflectionClassConstant</b> class reports information about a class constant.</p>
	 * @link https://php.net/manual/ja/class.reflectionclassconstant.php
	 * @since PHP 7 >= 7.1.0
	 */
	class ReflectionClassConstant implements \Reflector {

		/**
		 * @var mixed <p>Name of the class constant. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link https://php.net/manual/ja/class.reflectionclassconstant.php#reflectionclassconstant.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>Name of the class where the class constant is defined. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link https://php.net/manual/ja/class.reflectionclassconstant.php#reflectionclassconstant.props.class
		 */
		public $class;

		/**
		 * Constructs a ReflectionClassConstant
		 * <p>Constructs a new ReflectionClassConstant object.</p>
		 * @param mixed $class <p>Either a <code>string</code> containing the name of the class to reflect, or an <code>object</code>.</p>
		 * @param string $name <p>The name of the class constant.</p>
		 * @return self <p>Returns constructed ReflectionClassConstant instance.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.construct.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function __construct($class, string $name) {}

		/**
		 * Returns the string representation of the ReflectionClassConstant object
		 * <p>Returns the string representation of the ReflectionClassConstant object.</p>
		 * @return string <p>A string representation of this ReflectionClassConstant instance.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.tostring.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p>Exports a reflection.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $class <p>エクスポートするリフレクション。</p>
		 * @param string $name <p>The class constant name.</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionclassconstant.export.php
		 * @since PHP 7 >= 7.1.0
		 */
		public static function export($class, string $name, bool $return = NULL): string {}

		/**
		 * Gets declaring class
		 * <p>Gets the declaring class.</p>
		 * @return ReflectionClass <p>A ReflectionClass object.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.getdeclaringclass.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * Gets doc comments
		 * <p>Gets doc comments from a class constant.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.getdoccomment.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getDocComment(): string {}

		/**
		 * Gets the class constant modifiers
		 * <p>Returns a bitfield of the access modifiers for this class constant.</p>
		 * @return int <p>A numeric representation of the modifiers. The actual meanings of these modifiers are described in the predefined constants.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.getmodifiers.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getModifiers(): int {}

		/**
		 * Get name of the constant
		 * @return string <p>Returns the constant's name.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.getname.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getName(): string {}

		/**
		 * Gets value
		 * <p>Gets the class constant's value.</p>
		 * @return mixed <p>The value of the class constant.</p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.getvalue.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getValue() {}

		/**
		 * Checks if class constant is private
		 * <p>Checks if the class constant is private.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is private, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.isprivate.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isPrivate(): bool {}

		/**
		 * Checks if class constant is protected
		 * <p>Checks if the class constant is protected.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is protected, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.isprotected.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isProtected(): bool {}

		/**
		 * Checks if class constant is public
		 * <p>Checks if the class constant is public.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is public, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectionclassconstant.ispublic.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isPublic(): bool {}
	}

	/**
	 * <p>ReflectionException クラスです。</p>
	 * @link https://php.net/manual/ja/class.reflectionexception.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionException extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p><b>ReflectionExtension</b> クラスは 拡張モジュールについての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionextension.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionExtension implements \Reflector {

		/**
		 * @var mixed <p>拡張モジュールの名前。 <code>ReflectionExtension::getName()</code> メソッドをコールするのと同じ。</p>
		 * @link https://php.net/manual/ja/class.reflectionextension.php#reflectionextension.props.name
		 */
		public $name;

		/**
		 * クローンする
		 * <p>このメソッドは、オブジェクトをクローンさせないようにします。 Reflection オブジェクトはクローンすることができません。</p>
		 * @return void <p>値は返しません。もしコールされれば致命的なエラーとなります。</p>
		 * @link https://php.net/manual/ja/reflectionextension.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * ReflectionExtension を作成する
		 * <p>ReflectionExtension オブジェクトを作成します。</p>
		 * @param string $name <p>拡張モジュールの名前。</p>
		 * @return self <p>ReflectionExtension オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name) {}

		/**
		 * 文字列に変換する
		 * <p>調べた拡張モジュールをエクスポートし、文字列として返します。 これは、<code>ReflectionExtension::export()</code> のパラメータ <code>return</code> を <b><code>TRUE</code></b> に設定するのと同じ意味です。</p>
		 * @return string <p>エクスポートした拡張モジュールを文字列で返します。 <code>ReflectionExtension::export()</code> と同じ形式となります。</p>
		 * @link https://php.net/manual/ja/reflectionextension.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * エクスポートする
		 * <p>拡張モジュールの情報をエクスポートします。この関数の出力フォーマットは CLI で引数 <i>--re [extension]</i> を指定したときのものと同じです。</p>
		 * @param string $name <p>エクスポートするリフレクション。</p>
		 * @param string $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $name, string $return = 'FALSE'): string {}

		/**
		 * クラス名を取得する
		 * <p>拡張モジュールで定義されているのクラス名の一覧を取得します。</p>
		 * @return array <p>拡張モジュールで定義されているクラス名の配列を返します。 クラスが定義されていない場合は空の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getclassnames.php
		 * @since PHP 5, PHP 7
		 */
		public function getClassNames(): array {}

		/**
		 * クラスを取得する
		 * <p>拡張モジュールのクラス一覧を取得します。</p>
		 * @return array <p>ReflectionClass オブジェクトの配列を返します。 各要素が、拡張モジュール内のクラスを表します。 クラスが定義されていない場合は空の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getclasses.php
		 * @since PHP 5, PHP 7
		 */
		public function getClasses(): array {}

		/**
		 * 定数を取得する
		 * <p>拡張モジュールで定義されている定数を取得します。</p>
		 * @return array <p>定数名をキーとする連想配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * 依存性を取得する
		 * <p>必須の依存性、衝突する依存性の両方を取得します。</p>
		 * @return array <p>依存する拡張モジュールをキー、そして <i>Required</i>、<i>Optional</i> あるいは <i>Conflicts</i> のいずれかを値とする連想配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getdependencies.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDependencies(): array {}

		/**
		 * 拡張モジュールの関数を取得する
		 * <p>拡張モジュールで定義されている関数を取得します。</p>
		 * @return array <p>ReflectionFunction オブジェクトの連想配列を返します。 拡張モジュール内で定義されている関数名がキーとなります。 関数が定義されていない場合は空の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getfunctions.php
		 * @see get_extension_funcs()
		 * @since PHP 5, PHP 7
		 */
		public function getFunctions(): array {}

		/**
		 * 拡張モジュールの ini エントリを取得する
		 * <p>拡張モジュールの ini エントリを取得します。</p>
		 * @return array <p>ini エントリをキー、定義されている値をキーに対応する値とした連想配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getinientries.php
		 * @see ini_get_all()
		 * @since PHP 5, PHP 7
		 */
		public function getINIEntries(): array {}

		/**
		 * 拡張モジュール名を取得する
		 * <p>拡張モジュールの名前を取得します。</p>
		 * @return string <p>拡張モジュールの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 拡張モジュールのバージョンを取得する
		 * <p>拡張モジュールのバージョンを取得します。</p>
		 * @return string <p>拡張モジュールのバージョンを返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.getversion.php
		 * @since PHP 5, PHP 7
		 */
		public function getVersion(): string {}

		/**
		 * 拡張モジュールの情報を表示する
		 * <p>指定した拡張モジュールに関する "<code>phpinfo()</code>" の情報を表示します。</p>
		 * @return void <p>拡張モジュールの情報を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.info.php
		 * @see phpinfo()
		 * @since PHP 5 >= 5.2.4, PHP 7
		 */
		public function info(): void {}

		/**
		 * この拡張モジュールが永続性のあるものかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>この拡張モジュールが <i>extension</i> で読み込まれたものである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.ispersistent.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isPersistent(): void {}

		/**
		 * この拡張モジュールが一時的なものかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>この拡張モジュールが <code>dl()</code> で読み込まれたものである場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionextension.istemporary.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTemporary(): void {}
	}

	/**
	 * <p><b>ReflectionFunction</b> クラスは 関数についての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionfunction.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionFunction extends \ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var integer <p>非推奨の関数であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionfunction.php
		 */
		const IS_DEPRECATED = 262144;

		/**
		 * @var mixed <p>関数名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionfunction.php#reflectionfunction.props.name
		 */
		public $name;

		/**
		 * 関数のクローンを作成する
		 * <p>関数のクローンを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * ReflectionFunction オブジェクトを作成する
		 * <p>ReflectionFunction オブジェクトを作成します。</p>
		 * @param mixed $name <p>調べたい関数あるいはクロージャの名前。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($name) {}

		/**
		 * 文字列に変換する
		 * <p>文字列に変換します。</p>
		 * @return string <p>その関数について、 <code>ReflectionFunction::export()</code> のような出力を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 関数をエクスポートする
		 * <p>調べた関数をエクスポートします。</p>
		 * @param string $name <p>エクスポートするリフレクション。</p>
		 * @param string $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $name, string $return = NULL): string {}

		/**
		 * この関数に動的に作成されたクロージャを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return Closure <p>Closure を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.getclosure.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosure(): \Closure {}

		/**
		 * クロージャに関連づけられたスコープを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>成功した場合にクラスを返します。失敗した場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * クロージャにバインドした this ポインタを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return object <p>$this ポインタを返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * ドキュメントコメントを取得する
		 * <p>関数のドキュメントコメントを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * 終了行番号を取得する
		 * <p>終了行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>ユーザー定義関数の終了行番号を返します。不明な場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * 拡張モジュールの情報を取得する
		 * <p>関数の拡張モジュール情報を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionExtension <p>拡張モジュールの情報を ReflectionExtension オブジェクトで返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * 拡張モジュールの名前を取得する
		 * <p>拡張モジュールの名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>拡張モジュールの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * ファイル名を取得する
		 * <p>ユーザー定義関数のファイル名を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * 関数名を取得する
		 * <p>関数の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 名前空間名を取得する
		 * <p>クラスが定義されている名前空間の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>名前空間名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * パラメータ数を取得する
		 * <p>関数で定義されているパラメータの数を、必須と任意の両方を含めて取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * 必須パラメータの数を取得する
		 * <p>関数で定義されている必須パラメータの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>必須パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * パラメータを取得する
		 * <p>パラメータを <code>ReflectionParameter</code> の配列で取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>パラメータを ReflectionParameter オブジェクトの配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * 関数の短い名前を取得する
		 * <p>関数の短い名前 (名前空間部分を除いた名前) を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の短い名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * 開始行番号を取得する
		 * <p>関数の開始行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>開始行番号を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * 静的変数を取得する
		 * <p>静的変数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>静的変数の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * 関数が名前空間内にあるかどうかを調べる
		 * <p>関数が名前空間内で定義されているかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>名前空間内にある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * 関数を起動する
		 * <p>調べた関数を起動します。</p>
		 * @param mixed $_ <p>渡す引数のリスト。可変長の引数を指定でき、 <code>call_user_func()</code> と同じようにして関数に渡されます。</p>
		 * @return mixed <p>起動した関数の結果を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.invoke.php
		 * @see call_user_func()
		 * @since PHP 5, PHP 7
		 */
		public function invoke($_ = NULL) {}

		/**
		 * 引数を指定して関数を起動する
		 * <p>関数を起動して、その引数を配列として渡します。</p>
		 * @param array $args <p>関数に渡す引数を含む配列。 <code>call_user_func_array()</code> と同じように動作します。</p>
		 * @return mixed <p>起動した関数の結果を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.invokeargs.php
		 * @see call_user_func_array()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function invokeArgs(array $args) {}

		/**
		 * クロージャであるかどうかを調べる
		 * <p>この関数が Closure であるかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数が Closure である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * 非推奨であるかどうかを調べる
		 * <p>この関数が非推奨であるかどうかを調べます。</p>
		 * @return bool <p>非推奨である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * 関数が無効になっているかどうかを調べる
		 * <p>disable_functions ディレクティブで関数が無効になっているかどうかを調べます。</p>
		 * @return bool <p>無効になっている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunction.isdisabled.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDisabled(): bool {}

		/**
		 * この関数がジェネレータかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数がジェネレータである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 処理に失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * 内部関数かどうかを調べる
		 * <p>この関数が内部関数なのかユーザー定義関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>内部関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * ユーザー定義関数であるかどうかを調べる
		 * <p>この関数がユーザー定義関数なのか内部関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>ユーザー定義関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * 参照返しかどうかを調べる
		 * <p>関数が参照を返すかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>参照返しである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}
	}

	/**
	 * <p>ReflectionFunction の親クラスです。 詳細はこのクラスの説明を参照ください。</p>
	 * @link https://php.net/manual/ja/class.reflectionfunctionabstract.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var mixed <p>関数名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionfunctionabstract.php#reflectionfunctionabstract.props.name
		 */
		public $name;

		/**
		 * 関数のクローンを作成する
		 * <p>関数のクローンを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 文字列に変換する
		 * <p>文字列に変換します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void <p>文字列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.tostring.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		abstract public function __toString(): void;

		/**
		 * クロージャに関連づけられたスコープを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>成功した場合にクラスを返します。失敗した場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * クロージャにバインドした this ポインタを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return object <p>$this ポインタを返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * ドキュメントコメントを取得する
		 * <p>関数のドキュメントコメントを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * 終了行番号を取得する
		 * <p>終了行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>ユーザー定義関数の終了行番号を返します。不明な場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * 拡張モジュールの情報を取得する
		 * <p>関数の拡張モジュール情報を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionExtension <p>拡張モジュールの情報を ReflectionExtension オブジェクトで返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * 拡張モジュールの名前を取得する
		 * <p>拡張モジュールの名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>拡張モジュールの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * ファイル名を取得する
		 * <p>ユーザー定義関数のファイル名を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * 関数名を取得する
		 * <p>関数の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 名前空間名を取得する
		 * <p>クラスが定義されている名前空間の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>名前空間名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * パラメータ数を取得する
		 * <p>関数で定義されているパラメータの数を、必須と任意の両方を含めて取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * 必須パラメータの数を取得する
		 * <p>関数で定義されている必須パラメータの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>必須パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * パラメータを取得する
		 * <p>パラメータを <code>ReflectionParameter</code> の配列で取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>パラメータを ReflectionParameter オブジェクトの配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * 関数の短い名前を取得する
		 * <p>関数の短い名前 (名前空間部分を除いた名前) を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の短い名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * 開始行番号を取得する
		 * <p>関数の開始行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>開始行番号を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * 静的変数を取得する
		 * <p>静的変数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>静的変数の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * 関数が名前空間内にあるかどうかを調べる
		 * <p>関数が名前空間内で定義されているかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>名前空間内にある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * クロージャであるかどうかを調べる
		 * <p>この関数が Closure であるかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数が Closure である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * 非推奨であるかどうかを調べる
		 * <p>この関数が非推奨であるかどうかを調べます。</p>
		 * @return bool <p>非推奨である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * この関数がジェネレータかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数がジェネレータである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 処理に失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * 内部関数かどうかを調べる
		 * <p>この関数が内部関数なのかユーザー定義関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>内部関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * ユーザー定義関数であるかどうかを調べる
		 * <p>この関数がユーザー定義関数なのか内部関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>ユーザー定義関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * 参照返しかどうかを調べる
		 * <p>関数が参照を返すかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>参照返しである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}
	}

	/**
	 * <p>The <b>ReflectionGenerator</b> class reports information about a generator.</p>
	 * @link https://php.net/manual/ja/class.reflectiongenerator.php
	 * @since PHP 7
	 */
	class ReflectionGenerator {

		/**
		 * Constructs a ReflectionGenerator object
		 * <p>Constructs a ReflectionGenerator object.</p>
		 * @param \Generator $generator <p>A generator object.</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.construct.php
		 * @since PHP 7
		 */
		public function __construct(\Generator $generator) {}

		/**
		 * Gets the file name of the currently executing generator
		 * <p>Get the full path and file name of the currently executing generator.</p>
		 * @return string <p>Returns the full path and file name of the currently executing generator.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.getexecutingfile.php
		 * @since PHP 7
		 */
		public function getExecutingFile(): string {}

		/**
		 * Gets the executing Generator object
		 * <p>Get the executing Generator object</p>
		 * @return Generator <p>Returns the currently executing Generator object.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.getexecutinggenerator.php
		 * @since PHP 7
		 */
		public function getExecutingGenerator(): \Generator {}

		/**
		 * Gets the currently executing line of the generator
		 * <p>Get the currently executing line number of the generator.</p>
		 * @return int <p>Returns the line number of the currently executing statement in the generator.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.getexecutingline.php
		 * @since PHP 7
		 */
		public function getExecutingLine(): int {}

		/**
		 * Gets the function name of the generator
		 * <p>Enables the function name of the generator to be obtained by returning a class derived from ReflectionFunctionAbstract.</p>
		 * @return ReflectionFunctionAbstract <p>Returns a ReflectionFunctionAbstract class. This will be ReflectionFunction for functions, or ReflectionMethod for methods.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.getfunction.php
		 * @since PHP 7
		 */
		public function getFunction(): \ReflectionFunctionAbstract {}

		/**
		 * Gets the $this value of the generator
		 * <p>Get the <i>$this</i> value that the generator has access to.</p>
		 * @return object <p>Returns the <i>$this</i> value, or <b><code>NULL</code></b> if the generator was not created in a class context.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.getthis.php
		 * @since PHP 7
		 */
		public function getThis(): object {}

		/**
		 * Gets the trace of the executing generator
		 * <p>Get the trace of the currently executing generator.</p>
		 * @param int $options <p>The value of <code>options</code> can be any of the following flags.</p> <p></p> <b>Available options</b>   Option Description      <b><code>DEBUG_BACKTRACE_PROVIDE_OBJECT</code></b>   Default.     <b><code>DEBUG_BACKTRACE_IGNORE_ARGS</code></b>   Don't include the argument information for functions in the stack trace.
		 * @return array <p>Returns the trace of the currently executing generator.</p>
		 * @link https://php.net/manual/ja/reflectiongenerator.gettrace.php
		 * @since PHP 7
		 */
		public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}
	}

	/**
	 * <p><b>ReflectionMethod</b> クラスは メソッドについての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionmethod.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionMethod extends \ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var integer <p>メソッドが static であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_STATIC = 1;

		/**
		 * @var integer <p>メソッドが public であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_PUBLIC = 256;

		/**
		 * @var integer <p>メソッドが protected であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_PROTECTED = 512;

		/**
		 * @var integer <p>メソッドが private であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_PRIVATE = 1024;

		/**
		 * @var integer <p>メソッドが abstract であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_ABSTRACT = 2;

		/**
		 * @var integer <p>メソッドが final であることを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php
		 */
		const IS_FINAL = 4;

		/**
		 * @var mixed <p>メソッド名</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php#reflectionmethod.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>クラス名</p>
		 * @link https://php.net/manual/ja/class.reflectionmethod.php#reflectionmethod.props.class
		 */
		public $class;

		/**
		 * 関数のクローンを作成する
		 * <p>関数のクローンを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * ReflectionMethod を作成する
		 * <p>新しい ReflectionMethod を作成します。</p>
		 * @param mixed $class <p>メソッドを含むクラスの名前あるいはオブジェクト (クラスのインスタンス)。</p>
		 * @param string $name <p>メソッドの名前。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($class, string $name) {}

		/**
		 * ReflectionMethod オブジェクトの文字列表現を返す
		 * <p>ReflectionMethod オブジェクトの文字列表現を返します。</p>
		 * @return string <p>ReflectionMethod のインスタンスの文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * メソッドをエクスポートする
		 * <p>ReflectionMethod をエクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $class <p>クラス名。</p>
		 * @param string $name <p>メソッド名。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $class, string $name, bool $return = FALSE): string {}

		/**
		 * このメソッドに動的に作成されたクロージャを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param object $object <p>静的メソッドの場合は不要、その他のメソッドの場合は必須となります。</p>
		 * @return Closure <p>Closure を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.getclosure.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosure(object $object): \Closure {}

		/**
		 * クロージャに関連づけられたスコープを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>成功した場合にクラスを返します。失敗した場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * クロージャにバインドした this ポインタを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return object <p>$this ポインタを返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * メソッドが宣言されているクラスを取得する
		 * <p>そのメソッドが宣言されているクラスを取得します。</p>
		 * @return ReflectionClass <p>そのメソッドが属するクラスをあらわす ReflectionClass オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.getdeclaringclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * ドキュメントコメントを取得する
		 * <p>関数のドキュメントコメントを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * 終了行番号を取得する
		 * <p>終了行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>ユーザー定義関数の終了行番号を返します。不明な場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * 拡張モジュールの情報を取得する
		 * <p>関数の拡張モジュール情報を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionExtension <p>拡張モジュールの情報を ReflectionExtension オブジェクトで返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * 拡張モジュールの名前を取得する
		 * <p>拡張モジュールの名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>拡張モジュールの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * ファイル名を取得する
		 * <p>ユーザー定義関数のファイル名を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * メソッドの修飾子を取得する
		 * <p>このメソッドのアクセス修飾子のビットフィールドを返します。</p>
		 * @return int <p>修飾子をあらわす数値を返します。修飾子の一覧は以下のとおりです。 これらの修飾子の実際の意味については 定義済みの定数 に説明があります。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * 関数名を取得する
		 * <p>関数の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 名前空間名を取得する
		 * <p>クラスが定義されている名前空間の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>名前空間名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * パラメータ数を取得する
		 * <p>関数で定義されているパラメータの数を、必須と任意の両方を含めて取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * 必須パラメータの数を取得する
		 * <p>関数で定義されている必須パラメータの数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>必須パラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * パラメータを取得する
		 * <p>パラメータを <code>ReflectionParameter</code> の配列で取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>パラメータを ReflectionParameter オブジェクトの配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * メソッドのプロトタイプを (存在すれば) 取得する
		 * <p>メソッドのプロトタイプを取得します。</p>
		 * @return ReflectionMethod <p>メソッドのプロトタイプの ReflectionMethod オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.getprototype.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPrototype(): \ReflectionMethod {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * 関数の短い名前を取得する
		 * <p>関数の短い名前 (名前空間部分を除いた名前) を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>関数の短い名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * 開始行番号を取得する
		 * <p>関数の開始行番号を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>開始行番号を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * 静的変数を取得する
		 * <p>静的変数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>静的変数の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * 関数が名前空間内にあるかどうかを調べる
		 * <p>関数が名前空間内で定義されているかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>名前空間内にある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * 実行する
		 * <p>メソッドを実行します。</p>
		 * @param object $object <p>メソッドを実行するオブジェクト。静的メソッドを実行する場合は、このパラメータには <code>null</code> を渡すことができます。</p>
		 * @param mixed $_ <p>メソッドに渡すパラメータ。可変長のパラメータを渡すことができます。</p>
		 * @return mixed <p>メソッドの結果を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.invoke.php
		 * @see call_user_func()
		 * @since PHP 5, PHP 7
		 */
		public function invoke(object $object, $_ = NULL) {}

		/**
		 * 実行する
		 * <p>リフレクション対象のメソッドを実行し、その引数を配列として渡します。</p>
		 * @param object $object <p>メソッドを実行するオブジェクト。静的メソッドを実行する場合は、このパラメータには <code>null</code> を渡すことができます。</p>
		 * @param array $args <p>メソッドに渡すパラメータを配列で指定します。</p>
		 * @return mixed <p>メソッドの結果を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.invokeargs.php
		 * @see call_user_func_array()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function invokeArgs(object $object, array $args) {}

		/**
		 * 抽象メソッドであるかどうかを調べる
		 * <p>抽象メソッドであるかどうかを調べます。</p>
		 * @return bool <p>抽象メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * クロージャであるかどうかを調べる
		 * <p>この関数が Closure であるかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数が Closure である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * コンストラクタであるかどうかを調べる
		 * <p>コンストラクタであるかどうかを調べます。</p>
		 * @return bool <p>コンストラクタである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function isConstructor(): bool {}

		/**
		 * 非推奨であるかどうかを調べる
		 * <p>この関数が非推奨であるかどうかを調べます。</p>
		 * @return bool <p>非推奨である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * デストラクタであるかどうかを調べる
		 * <p>デストラクタであるかどうかを調べます。</p>
		 * @return bool <p>デストラクタである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isdestructor.php
		 * @since PHP 5, PHP 7
		 */
		public function isDestructor(): bool {}

		/**
		 * final メソッドであるかどうかを調べる
		 * <p>final メソッドであるかどうかを調べます。</p>
		 * @return bool <p>final メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * この関数がジェネレータかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>この関数がジェネレータである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 処理に失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * 内部関数かどうかを調べる
		 * <p>この関数が内部関数なのかユーザー定義関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>内部関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * private メソッドであるかどうかを調べる
		 * <p>private メソッドであるかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>private メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isprivate.php
		 * @since PHP 5, PHP 7
		 */
		public function isPrivate(): bool {}

		/**
		 * protected メソッドであるかどうかを調べる
		 * <p>protected メソッドであるかどうかを調べます。</p>
		 * @return bool <p>protected メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isprotected.php
		 * @since PHP 5, PHP 7
		 */
		public function isProtected(): bool {}

		/**
		 * public メソッドであるかどうかを調べる
		 * <p>public メソッドであるかどうかを調べます。</p>
		 * @return bool <p>public メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.ispublic.php
		 * @since PHP 5, PHP 7
		 */
		public function isPublic(): bool {}

		/**
		 * 静的メソッドであるかどうかを調べる
		 * <p>静的メソッドであるかどうかを調べます。</p>
		 * @return bool <p>静的メソッドである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.isstatic.php
		 * @since PHP 5, PHP 7
		 */
		public function isStatic(): bool {}

		/**
		 * ユーザー定義関数であるかどうかを調べる
		 * <p>この関数がユーザー定義関数なのか内部関数なのかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>ユーザー定義関数である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * 参照返しかどうかを調べる
		 * <p>関数が参照を返すかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>参照返しである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}

		/**
		 * メソッドのアクセス範囲を設定する
		 * <p>メソッドをアクセス可能にします。たとえば、protected や private なメソッドを実行できるようにします。</p>
		 * @param bool $accessible <p><b><code>TRUE</code></b> を指定すると、アクセスできるようになります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionmethod.setaccessible.php
		 * @since PHP 5 >= 5.3.2, PHP 7
		 */
		public function setAccessible(bool $accessible): void {}
	}

	/**
	 * @link https://php.net/manual/ja/class.reflectionnamedtype.php
	 * @since PHP 7 >= 7.1.0
	 */
	class ReflectionNamedType extends \ReflectionType {

		/**
		 * To string
		 * <p>Gets the parameter type name.</p>
		 * @return string <p>Returns the type of the parameter.</p>
		 * @link https://php.net/manual/ja/reflectiontype.tostring.php
		 * @since PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Checks if null is allowed
		 * <p>Checks whether the parameter allows <b><code>NULL</code></b>.</p>
		 * @return bool <p><b><code>TRUE</code></b> if <b><code>NULL</code></b> is allowed, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectiontype.allowsnull.php
		 * @since PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * Get the text of the type hint
		 * @return string <p>Returns the text of the type hint.</p>
		 * @link https://php.net/manual/ja/reflectionnamedtype.getname.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getName(): string {}

		/**
		 * Checks if it is a built-in type
		 * <p>Checks if the type is a built-in type in PHP.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's a built-in type, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectiontype.isbuiltin.php
		 * @since PHP 7
		 */
		public function isBuiltin(): bool {}
	}

	/**
	 * <p><b>ReflectionObject</b> クラスは オブジェクトについての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionobject.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionObject extends \ReflectionClass implements \Reflector {

		/**
		 * @var mixed <p>オブジェクトのクラス名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionobject.php#reflectionobject.props.name
		 */
		public $name;

		/**
		 * ReflectionObject を作成する
		 * <p>ReflectionObject を作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param object $argument <p>オブジェクトのインスタンス。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionobject.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(object $argument) {}

		/**
		 * ReflectionClass オブジェクトの文字列表現を返す
		 * <p>ReflectionClass オブジェクトの文字列表現を返します。</p>
		 * @return string <p>この ReflectionClass インスタンスの文字列表現を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * エクスポートする
		 * <p>リフレクションをエクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $argument <p>エクスポートするリフレクション。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p><code>return</code> パラメータを <b><code>TRUE</code></b> に設定すると、エクスポートを文字列で返します。それ以外の場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionobject.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $argument, bool $return = NULL): string {}

		/**
		 * 定義されている定数を取得する
		 * <p>定義されている定数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name <p>定数の名前。</p>
		 * @return mixed <p>定数の値を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstant.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstant(string $name) {}

		/**
		 * 定数を取得する
		 * <p>可視性にかかわらず、クラスで定義されているすべての定数を取得します。</p>
		 * @return array <p>定数の配列を返します。 キーは名前を保持し、値は定数の値を保持します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * クラスのコンストラクタを取得する
		 * <p>クラスのコンストラクタを取得します。</p>
		 * @return object <p>クラスのコンストラクタを表す ReflectionMethod オブジェクトを返します。 クラスのコンストラクタがない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstructor(): object {}

		/**
		 * デフォルトプロパティを取得する
		 * <p>クラスのデフォルトプロパティ (継承したプロパティを含む) を取得します。</p><p><b>注意</b>:</p><p>このメソッドで static プロパティを扱えるのは、内部クラスの場合だけです。 ユーザー定義クラスで使った場合は、 クラスの static なプロパティのデフォルト値はこのメソッドでは追跡できません。</p>
		 * @return array <p>デフォルトプロパティの配列を返します。プロパティ名が配列のキー、 そしてそのプロパティのデフォルト値が配列の値 (デフォルト値が存在しない場合は <b><code>NULL</code></b>) となります。 この関数は静的なプロパティとそうでないプロパティを区別せず、 アクセス修飾子も考慮しません。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getdefaultproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getDefaultProperties(): array {}

		/**
		 * ドキュメントコメントを取得する
		 * <p>クラスのドキュメントコメントを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>ドキュメントコメントが存在すればそれを返します。存在しなければ <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getdoccomment.php
		 * @since PHP 5, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * 終了行を取得する
		 * <p>ユーザー定義クラスの定義の終了行を取得します。</p>
		 * @return int <p>ユーザー定義クラスの定義の終了行を返します。不明な場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getendline.php
		 * @since PHP 5, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを取得する
		 * <p>クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを取得します。</p>
		 * @return ReflectionExtension <p>クラスを定義する拡張モジュールを表す ReflectionExtension オブジェクトを返します。 ユーザー定義のクラスの場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getextension.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * クラスを定義する拡張モジュールの名前を取得する
		 * <p>クラスを定義する拡張モジュールの名前を取得します。</p>
		 * @return string <p>クラスを定義する拡張モジュールの名前を返します。 ユーザー定義のクラスの場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getextensionname.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * クラスが定義されているファイルのファイル名を取得する
		 * <p>クラスが定義されているファイルのファイル名を取得します。</p>
		 * @return string <p>クラスが定義されているファイルのファイル名を返します。 そのクラスが PHP のコアあるいは PHP の拡張モジュール内で定義されている場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getfilename.php
		 * @since PHP 5, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * インターフェイスの名前を取得する
		 * <p>インターフェイスの名前を取得します。</p>
		 * @return array <p>インターフェイス名の配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getinterfacenames.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getInterfaceNames(): array {}

		/**
		 * インターフェイスを取得する
		 * <p>インターフェイスを取得します。</p>
		 * @return array <p>インターフェイスの連想配列を返します。インターフェイス名が連想配列のキー、対応する値が ReflectionClass オブジェクトとなります。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getinterfaces.php
		 * @since PHP 5, PHP 7
		 */
		public function getInterfaces(): array {}

		/**
		 * クラスメソッドの ReflectionMethod を取得する
		 * <p>クラスメソッドに関する ReflectionMethod を取得します。</p>
		 * @param string $name <p>調べたいメソッドの名前。</p>
		 * @return ReflectionMethod <p>ReflectionMethod を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmethod.php
		 * @since PHP 5, PHP 7
		 */
		public function getMethod(string $name): \ReflectionMethod {}

		/**
		 * メソッドの配列を取得する
		 * <p>クラスのメソッドの配列を取得します。</p>
		 * @param int $filter <p>結果をフィルタして、特定の属性を持つメソッドだけを含めるようにします。 デフォルトは、何もフィルタしません。</p> <p><b><code>ReflectionMethod::IS_STATIC</code></b>、 <b><code>ReflectionMethod::IS_PUBLIC</code></b>、 <b><code>ReflectionMethod::IS_PROTECTED</code></b>、 <b><code>ReflectionMethod::IS_PRIVATE</code></b>、 <b><code>ReflectionMethod::IS_ABSTRACT</code></b>、 <b><code>ReflectionMethod::IS_FINAL</code></b> の任意の組み合わせ。 指定した属性の <i>いずれか</i> を持つすべてのメソッドを返します。</p> <p><b>注意</b>:  その他のビット演算 (<i>~</i> など) は期待通りの挙動にはなりません。 つまり、たとえば static ではないメソッドをすべて取得するなどといったことはできません。 </p>
		 * @return array <p>各メソッドを表す ReflectionMethod オブジェクトの配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmethods.php
		 * @see get_class_methods()
		 * @since PHP 5, PHP 7
		 */
		public function getMethods(int $filter = NULL): array {}

		/**
		 * クラス修飾子を取得する
		 * <p>このクラスのアクセス修飾子のビットフィールドを返します。</p>
		 * @return int <p> 修飾子定数 のビットマスクを返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * クラスの名前を取得する
		 * <p>クラスの名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>クラスの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 名前空間の名前を取得する
		 * <p>名前空間の名前を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>名前空間の名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * 親クラスを取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>ReflectionClass を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getparentclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getParentClass(): \ReflectionClass {}

		/**
		 * プロパティを取得する
		 * <p>プロパティを取得します。</p>
		 * @param int $filter <p>オプションのフィルタで、取得したいプロパティの型を絞り込みます。 ReflectionProperty の定数 で設定し、デフォルトではすべてのプロパティ型を取得します。</p>
		 * @return array <p>ReflectionProperty オブジェクトの配列を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperties(int $filter = NULL): array {}

		/**
		 * クラスのプロパティを表す ReflectionProperty を取得する
		 * <p>クラスのプロパティを表す ReflectionProperty を取得します。</p>
		 * @param string $name <p>プロパティの名前。</p>
		 * @return ReflectionProperty <p>ReflectionProperty を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getproperty.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperty(string $name): \ReflectionProperty {}

		/**
		 * Gets a ReflectionClassConstant for a class's constant
		 * <p>Gets a ReflectionClassConstant for a class's property.</p>
		 * @param string $name <p>The class constant name.</p>
		 * @return ReflectionClassConstant <p>A ReflectionClassConstant.</p>
		 * @link https://php.net/manual/ja/reflectionclass.getreflectionconstant.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstant(string $name): \ReflectionClassConstant {}

		/**
		 * Gets class constants
		 * <p>Retrieves reflected constants.</p>
		 * @return array <p>An array of ReflectionClassConstant objects.</p>
		 * @link https://php.net/manual/ja/reflectionclass.getreflectionconstants.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstants(): array {}

		/**
		 * 短い名前を取得する
		 * <p>名前空間部分を除いた、クラスの短い名前を取得します。</p>
		 * @return string <p>クラスの短い名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * 開始行を取得する
		 * <p>開始行を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>開始行を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstartline.php
		 * @since PHP 5, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * 静的なプロパティを取得する
		 * <p>静的なプロパティを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>静的なプロパティを配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstaticproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getStaticProperties(): array {}

		/**
		 * 静的なプロパティの値を取得する
		 * <p>このクラスの静的なプロパティの値を取得します。</p>
		 * @param string $name <p>値を返したい静的プロパティの名前。</p>
		 * @param mixed $def_value <p>指定した名前の静的プロパティがそのクラスに存在しない場合に返す、デフォルト値。 プロパティが存在せず、かつこの引数も省略されていた場合は、 ReflectionException が発生します。</p>
		 * @return mixed <p>静的プロパティの値を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.getstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getStaticPropertyValue(string $name, &$def_value = NULL) {}

		/**
		 * トレイトのエイリアスの配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>新しいメソッド名をキー、その元の名前 (<i>"TraitName::original"</i> 形式) を値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraitaliases.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitAliases(): array {}

		/**
		 * このクラスが使うトレイトの名前の配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>トレイト名を値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraitnames.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitNames(): array {}

		/**
		 * このクラスが使うトレイトの配列を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>トレイト名をキー、トレイトの ReflectionClass のインスタンスを値とする配列を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.gettraits.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraits(): array {}

		/**
		 * 定数が定義されているかどうかを調べる
		 * <p>そのクラスで特定の定数が定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたい定数の名前。</p>
		 * @return bool <p>定数が定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasconstant.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasConstant(string $name): bool {}

		/**
		 * メソッドが定義されているかどうかを調べる
		 * <p>そのクラスで特定のメソッドが定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたいメソッドの名前。</p>
		 * @return bool <p>メソッドが定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasmethod.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasMethod(string $name): bool {}

		/**
		 * プロパティが定義されているかどうかを調べる
		 * <p>特定のプロパティが定義されているかどうかを調べます。</p>
		 * @param string $name <p>調べたいプロパティの名前。</p>
		 * @return bool <p>プロパティが定義されている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.hasproperty.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasProperty(string $name): bool {}

		/**
		 * インターフェイスの実装を調べる
		 * <p>インターフェイスを実装しているかどうかを調べます。</p>
		 * @param string $interface <p>インターフェイスの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.implementsinterface.php
		 * @see interface_exists()
		 * @since PHP 5, PHP 7
		 */
		public function implementsInterface(string $interface): bool {}

		/**
		 * 名前空間内にあるかどうかを調べる
		 * <p>このクラスが名前空間内で定義されているかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * 抽象クラスであるかどうかを調べる
		 * <p>抽象クラスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * Checks if class is anonymous
		 * <p>Checks if a class is an anonymous class.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isanonymous.php
		 * @since PHP 7
		 */
		public function isAnonymous(): bool {}

		/**
		 * このクラスがクローン可能かどうかを返す
		 * <p>このクラスがクローン可能かどうかを返します。</p>
		 * @return bool <p>このクラスがクローン可能である場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.iscloneable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCloneable(): bool {}

		/**
		 * final クラスであるかどうかを調べる
		 * <p>final クラスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * クラスのインスタンスであるかどうかを調べる
		 * <p>あるオブジェクトがクラスのインスタンスであるかどうかを調べます。</p>
		 * @param object $object <p>比べたいオブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinstance.php
		 * @see is_a()
		 * @since PHP 5, PHP 7
		 */
		public function isInstance(object $object): bool {}

		/**
		 * クラスのインスタンス化が可能であるかどうかを調べる
		 * <p>クラスのインスタンス化が可能であるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinstantiable.php
		 * @since PHP 5, PHP 7
		 */
		public function isInstantiable(): bool {}

		/**
		 * このクラスがインターフェイスであるかどうかを調べる
		 * <p>このクラスがインターフェイスであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinterface.php
		 * @since PHP 5, PHP 7
		 */
		public function isInterface(): bool {}

		/**
		 * 拡張モジュールあるいはコアで定義された内部クラスであるかどうかを調べる
		 * <p>そのクラスが拡張モジュールやコアで定義された内部クラスである (ユーザーが定義したものではない) かどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isinternal.php
		 * @since PHP 5, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Check whether this class is iterable
		 * <p>Check whether this class is iterable (i.e. can be used inside foreach).</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isiterable.php
		 * @since PHP 7 >= 7.2.0
		 */
		public function isIterable(): bool {}

		/**
		 * 反復処理が可能であるかどうかを調べる
		 * <p>反復処理が可能であるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isiterateable.php
		 * @since PHP 5, PHP 7
		 */
		public function isIterateable(): bool {}

		/**
		 * サブクラスであるかどうかを調べる
		 * <p>指定したクラスを継承している、あるいは指定したインターフェイスを実装しているかどうかを調べます。</p>
		 * @param string $class <p>調べたいクラス。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.issubclassof.php
		 * @see is_subclass_of(), get_parent_class()
		 * @since PHP 5, PHP 7
		 */
		public function isSubclassOf(string $class): bool {}

		/**
		 * トレイトであるかどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>これがトレイトである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.istrait.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTrait(): bool {}

		/**
		 * ユーザー定義であるかどうかを調べる
		 * <p>そのクラスが (内部クラスではなく) ユーザーが定義したものであるかどうかを調べます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.isuserdefined.php
		 * @since PHP 5, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * 指定した引数でクラスの新しいインスタンスを作成する
		 * <p>クラスの新しいインスタンスを作成します。指定した引数をクラスのコンストラクタに渡します。</p>
		 * @param mixed $args <p>可変長の引数を受け付け、それを <code>call_user_func()</code> と同じ方式でクラスのコンストラクタに渡します。</p>
		 * @param mixed $_
		 * @return object
		 * @link https://php.net/manual/ja/reflectionclass.newinstance.php
		 * @since PHP 5, PHP 7
		 */
		public function newInstance($args, $_ = NULL): object {}

		/**
		 * 指定した引数でクラスの新しいインスタンスを作成する
		 * <p>クラスの新しいインスタンスを作成します。指定した引数をクラスのコンストラクタに渡します。</p>
		 * @param array $args <p>クラスのコンストラクタに渡すパラメータを配列で指定します。</p>
		 * @return object <p>クラスの新しいインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/reflectionclass.newinstanceargs.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function newInstanceArgs(array $args = NULL): object {}

		/**
		 * コンストラクタを起動せずに新しいクラスのインスタンスを作成する
		 * <p>クラスの新しいインスタンスを、そのクラスのコンストラクタを実行せずに作成します。</p>
		 * @return object
		 * @link https://php.net/manual/ja/reflectionclass.newinstancewithoutconstructor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function newInstanceWithoutConstructor(): object {}

		/**
		 * 静的なプロパティの値を設定する
		 * <p>静的なプロパティの値を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name <p>プロパティの名前。</p>
		 * @param string $value <p>新しいプロパティの値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionclass.setstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setStaticPropertyValue(string $name, string $value): void {}
	}

	/**
	 * <p><b>ReflectionParameter</b> クラスは、 関数またはメソッドのパラメータに関する情報を取得します。</p>
	 * <p>関数パラメータの内部を調べる際には、まず ReflectionFunction クラスまたは ReflectionMethod クラスのインスタンスを作成する必要があります。次に、 <code>ReflectionFunctionAbstract::getParameters()</code> メソッドを使ってパラメータの配列を取得します。</p>
	 * @link https://php.net/manual/ja/class.reflectionparameter.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionParameter implements \Reflector {

		/**
		 * @var mixed <p>パラメータ名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionparameter.php#reflectionparameter.props.name
		 */
		public $name;

		/**
		 * クローンする
		 * <p>クローンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionparameter.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * コンストラクタ
		 * <p>ReflectionParameter クラスのコンストラクタです。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $function <p>パラメータを調べたい関数。</p>
		 * @param string $parameter <p>パラメータ。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $function, string $parameter) {}

		/**
		 * 文字列に変換する
		 * <p>文字列に変換します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionparameter.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * null を許可するかどうかを調べる
		 * <p>パラメータが <b><code>NULL</code></b> を許可するかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p><b><code>NULL</code></b> を許可する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.allowsnull.php
		 * @since PHP 5, PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * このパラメータが値渡し可能かどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>このパラメータが値渡し可能な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.canbepassedbyvalue.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function canBePassedByValue(): bool {}

		/**
		 * エクスポートする
		 * <p>エクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $function <p>関数名。</p>
		 * @param string $parameter <p>パラメータ名。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string <p>エクスポート結果を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $function, string $parameter, bool $return = NULL): string {}

		/**
		 * タイプヒントつきのクラスを取得する
		 * <p>パラメータとしてタイプヒントされたクラスを、ReflectionClass オブジェクトとして取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>ReflectionClass オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getClass(): \ReflectionClass {}

		/**
		 * 宣言しているクラスを取得する
		 * <p>宣言しているクラスを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>ReflectionClass オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getdeclaringclass.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * 宣言している関数を取得する
		 * <p>宣言している関数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionFunctionAbstract <p>ReflectionFunction オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getdeclaringfunction.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDeclaringFunction(): \ReflectionFunctionAbstract {}

		/**
		 * パラメータのデフォルト値を取得する
		 * <p>ユーザー定義の関数あるいはメソッドで、パラメータのデフォルト値を取得します。 省略可能なパラメータでない場合は ReflectionException がスローされます。</p>
		 * @return mixed <p>パラメータのデフォルト対を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getdefaultvalue.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function getDefaultValue() {}

		/**
		 * デフォルト値が定数あるいは null の場合に、その定数名を返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>成功した場合に文字列、失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getdefaultvalueconstantname.php
		 * @since PHP 5 >= 5.4.6, PHP 7
		 */
		public function getDefaultValueConstantName(): string {}

		/**
		 * パラメータ名を取得する
		 * <p>パラメータ名を取得します。</p>
		 * @return string <p>パラメータ名を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * パラメータを取得する
		 * <p>パラメータを <code>ReflectionParameter</code> の配列で取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array <p>パラメータを ReflectionParameter オブジェクトの配列で返します。</p>
		 * @link https://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * パラメータの位置を取得する
		 * <p>パラメータの位置を取得します。</p>
		 * @return int <p>パラメータの位置を取得します。左から右へ数え、最初のパラメータが 0 番目となります。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.getposition.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getPosition(): int {}

		/**
		 * Gets a parameter's type
		 * <p>Gets the associated type of a parameter.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a parameter type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/reflectionparameter.gettype.php
		 * @since PHP 7
		 */
		public function getType(): \ReflectionType {}

		/**
		 * Checks if parameter has a type
		 * <p>Checks if the parameter has a type associated with it.</p>
		 * @return bool <p><b><code>TRUE</code></b> if a type is specified, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/reflectionparameter.hastype.php
		 * @since PHP 7
		 */
		public function hasType(): bool {}

		/**
		 * 配列を受け取るパラメータであるかどうかを調べる
		 * <p>配列を受け取るパラメータであるかどうかを調べます。</p>
		 * @return bool <p>配列を受け取るパラメータである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.isarray.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isArray(): bool {}

		/**
		 * パラメータが callable かどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>パラメータが <code>callable</code> の場合に <b><code>TRUE</code></b>、そうではない場合に <b><code>FALSE</code></b> を返します。 失敗した場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.iscallable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCallable(): bool {}

		/**
		 * デフォルト値が存在するかどうかを調べる
		 * <p>パラメータのデフォルト値が存在するかどうかを調べます。</p>
		 * @return bool <p>デフォルト値が存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.isdefaultvalueavailable.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function isDefaultValueAvailable(): bool {}

		/**
		 * このパラメータのデフォルト値が定数かどうかを返す
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>デフォルト値が定数である場合に <b><code>TRUE</code></b>、そうではない場合に <b><code>FALSE</code></b> を返します。 失敗した場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.isdefaultvalueconstant.php
		 * @since PHP 5 >= 5.4.6, PHP 7
		 */
		public function isDefaultValueConstant(): bool {}

		/**
		 * 省略可能であるかどうかを調べる
		 * <p>パラメータが省略可能であるかどうかを調べます。</p>
		 * @return bool <p>省略可能である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.isoptional.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function isOptional(): bool {}

		/**
		 * 参照渡しかどうかを調べる
		 * <p>パラメータが参照渡しであるかどうかを調べます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return bool <p>パラメータが参照渡しである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionparameter.ispassedbyreference.php
		 * @since PHP 5, PHP 7
		 */
		public function isPassedByReference(): bool {}

		/**
		 * Checks if the parameter is variadic
		 * <p>Checks if the parameter was declared as a variadic parameter.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/ja/reflectionparameter.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}
	}

	/**
	 * <p><b>ReflectionProperty</b> クラスは クラスのプロパティについての情報を報告します。</p>
	 * @link https://php.net/manual/ja/class.reflectionproperty.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionProperty implements \Reflector {

		/**
		 * @var integer <p>static プロパティを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php
		 */
		const IS_STATIC = 1;

		/**
		 * @var integer <p>public プロパティを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php
		 */
		const IS_PUBLIC = 256;

		/**
		 * @var integer <p>protected プロパティを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php
		 */
		const IS_PROTECTED = 512;

		/**
		 * @var integer <p>private プロパティを示します。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php
		 */
		const IS_PRIVATE = 1024;

		/**
		 * @var mixed <p>プロパティ名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php#reflectionproperty.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>プロパティが定義されているクラス名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionproperty.php#reflectionproperty.props.class
		 */
		public $class;

		/**
		 * クローンする
		 * <p>クローンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionproperty.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * ReflectionProperty オブジェクトを作成する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $class <p>プロパティを含むクラスの名前。</p>
		 * @param string $name <p>調べたいプロパティの名前。</p>
		 * @return self <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($class, string $name) {}

		/**
		 * 文字列に変換する
		 * <p>文字列に変換します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionproperty.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * エクスポートする
		 * <p>エクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param mixed $class
		 * @param string $name <p>プロパティ名。</p>
		 * @param bool $return <p><b><code>TRUE</code></b> に設定すると、エクスポートを発行するのではなく返します。 <b><code>FALSE</code></b> (デフォルト) の場合はその逆です。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionproperty.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export($class, string $name, bool $return = NULL): string {}

		/**
		 * 宣言しているクラスを取得する
		 * <p>宣言しているクラスを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return ReflectionClass <p>ReflectionClass オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.getdeclaringclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * プロパティのドキュメントコメントを取得する
		 * <p>プロパティのドキュメントコメントを取得します。</p>
		 * @return string <p>プロパティのドキュメントコメントを返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets the property modifiers
		 * <p>Gets the modifiers.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>A numeric representation of the modifiers.</p>
		 * @link https://php.net/manual/ja/reflectionproperty.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * プロパティ名を取得する
		 * <p>プロパティ名を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string <p>調べているプロパティの名前を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * 値を取得する
		 * <p>プロパティの値を取得します。</p>
		 * @param object $object <p>静的でないプロパティの場合は、プロパティを取得したいオブジェクトを指定しなければなりません。 オブジェクトを指定せずにデフォルトのプロパティを取得したい場合は、かわりに <code>ReflectionClass::getDefaultProperties()</code> を使います。</p>
		 * @return mixed <p>プロパティの現在の値を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.getvalue.php
		 * @since PHP 5, PHP 7
		 */
		public function getValue(object $object = NULL) {}

		/**
		 * デフォルトプロパティであるかどうかを調べる
		 * <p>そのプロパティがコンパイル時に宣言されたものなのか、実行時に動的に宣言されたものなのかを調べます。</p>
		 * @return bool <p>プロパティがコンパイル時に宣言された者である場合に <b><code>TRUE</code></b>、 実行時に作られたものである場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.isdefault.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefault(): bool {}

		/**
		 * private プロパティであるかどうかを調べる
		 * <p>private プロパティであるかどうかを調べます。</p>
		 * @return bool <p>private プロパティである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.isprivate.php
		 * @since PHP 5, PHP 7
		 */
		public function isPrivate(): bool {}

		/**
		 * protected プロパティであるかどうかを調べる
		 * <p>protected プロパティであるかどうかを調べます。</p>
		 * @return bool <p>protected プロパティである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.isprotected.php
		 * @since PHP 5, PHP 7
		 */
		public function isProtected(): bool {}

		/**
		 * public プロパティであるかどうかを調べる
		 * <p>public プロパティであるかどうかを調べます。</p>
		 * @return bool <p>public プロパティである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.ispublic.php
		 * @since PHP 5, PHP 7
		 */
		public function isPublic(): bool {}

		/**
		 * 静的プロパティであるかどうかを調べる
		 * <p>静的プロパティであるかどうかを調べます。</p>
		 * @return bool <p>静的プロパティである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.isstatic.php
		 * @since PHP 5, PHP 7
		 */
		public function isStatic(): bool {}

		/**
		 * プロパティのアクセス範囲を設定する
		 * <p>プロパティをアクセス可能にします。たとえば、protected や private なプロパティにアクセスできるようにします。</p>
		 * @param bool $accessible <p><b><code>TRUE</code></b> を指定すると、アクセスできるようになります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.setaccessible.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setAccessible(bool $accessible): void {}

		/**
		 * プロパティの値を設定する
		 * <p>プロパティの値を設定 (変更) します。</p>
		 * @param object $object <p>静的でないプロパティの場合は、プロパティを変更したいオブジェクトを指定しなければなりません。 静的なプロパティの場合はこのパラメータを省略し、 <code>value</code> だけを指定しなければなりません。</p>
		 * @param mixed $value <p>新しい値。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/reflectionproperty.setvalue.php
		 * @since PHP 5, PHP 7
		 */
		public function setValue(object $object, $value): void {}
	}

	/**
	 * <p>The <b>ReflectionType</b> class reports information about a function's return type.</p>
	 * @link https://php.net/manual/ja/class.reflectiontype.php
	 * @since PHP 7
	 */
	class ReflectionType {

		/**
		 * To string
		 * <p>Gets the parameter type name.</p>
		 * @return string <p>Returns the type of the parameter.</p>
		 * @link https://php.net/manual/ja/reflectiontype.tostring.php
		 * @since PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Checks if null is allowed
		 * <p>Checks whether the parameter allows <b><code>NULL</code></b>.</p>
		 * @return bool <p><b><code>TRUE</code></b> if <b><code>NULL</code></b> is allowed, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectiontype.allowsnull.php
		 * @since PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * Checks if it is a built-in type
		 * <p>Checks if the type is a built-in type in PHP.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's a built-in type, otherwise <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/reflectiontype.isbuiltin.php
		 * @since PHP 7
		 */
		public function isBuiltin(): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.reflectionzendextension.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class ReflectionZendExtension implements \Reflector {

		/**
		 * @var mixed <p>拡張モジュール名。読み込み専用で、書き込もうとすると ReflectionException をスローします。</p>
		 * @link https://php.net/manual/ja/class.reflectionzendextension.php#reflectionzendextension.props.name
		 */
		public $name;

		/**
		 * Clone のハンドラ
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return void
		 * @link https://php.net/manual/ja/reflectionzendextension.clone.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * コンストラクタ
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name
		 * @return self
		 * @link https://php.net/manual/ja/reflectionzendextension.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(string $name) {}

		/**
		 * 文字列変換のハンドラ
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.tostring.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * エクスポート
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @param string $name
		 * @param bool $return
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.export.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public static function export(string $name, bool $return = NULL): string {}

		/**
		 * 作者を取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.getauthor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getAuthor(): string {}

		/**
		 * 著作権情報を取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.getcopyright.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getCopyright(): string {}

		/**
		 * 名前を取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.getname.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * URL を取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.geturl.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getURL(): string {}

		/**
		 * バージョンを取得する
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflectionzendextension.getversion.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getVersion(): string {}
	}

	/**
	 * <p><b>Reflector</b> は、 すべてのエクスポート可能なリフレクションクラスが実装しているインターフェイスです。</p>
	 * @link https://php.net/manual/ja/class.reflector.php
	 * @since PHP 5, PHP 7
	 */
	interface Reflector {

		/**
		 * 文字列に変換する
		 * <p>文字列に変換します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflector.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string;

		/**
		 * エクスポートする
		 * <p>エクスポートします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/reflector.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(): string;
	}

}
