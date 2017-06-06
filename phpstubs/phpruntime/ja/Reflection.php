<?php

// Start of Reflection v.7.0.19

/**
 * ReflectionException クラスです。
 * @link http://php.net/manual/ja/class.reflectionexception.php
 */
class ReflectionException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * リフレクションクラスです。
 * @link http://php.net/manual/ja/class.reflection.php
 */
class Reflection  {

	/**
	 * @param $modifiers
	 */
	public static function getModifierNames($modifiers) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflection.export.php
	 * @param Reflector $reflector <p>
	 * エクスポートするリフレクション。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export(Reflector $reflector, bool $return = false): string {}

}

/**
 * <b>Reflector</b> は、
 * すべてのエクスポート可能なリフレクションクラスが実装しているインターフェイスです。
 * @link http://php.net/manual/ja/class.reflector.php
 */
interface Reflector  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflector.export.php
	 * @return string
	 */
	abstract public static function export(): string;

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflector.tostring.php
	 * @return string
	 */
	abstract public function __toString(): string;

}

/**
 * <b>ReflectionFunction</b> の親クラスです。
 * 詳細はこのクラスの説明を参照ください。
 * @link http://php.net/manual/ja/class.reflectionfunctionabstract.php
 */
abstract class ReflectionFunctionAbstract implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数のクローンを作成する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数が名前空間内にあるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
	 * @return bool 名前空間内にある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * クロージャであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
	 * @return bool この関数が <b>Closure</b> である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 非推奨であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
	 * @return bool 非推奨である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部関数かどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
	 * @return bool 内部関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ユーザー定義関数であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
	 * @return bool ユーザー定義関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * この関数がジェネレータかどうかを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
	 * @return bool この関数がジェネレータである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 * 処理に失敗した場合に <b>NULL</b> を返します。
	 */
	public function isGenerator(): bool {}

	public function isVariadic() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャにバインドした this ポインタを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this ポインタを返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャに関連づけられたスコープを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass 成功した場合にクラスを返します。失敗した場合は <b>NULL</b> を返します。
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
	 * @return string ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b>FALSE</b>
	 * を返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 終了行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getendline.php
	 * @return int ユーザー定義関数の終了行番号を返します。不明な場合は <b>FALSE</b> を返します。
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの情報を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension 拡張モジュールの情報を <b>ReflectionExtension</b>
	 * オブジェクトで返します。
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
	 * @return string 拡張モジュールの名前を返します。
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getname.php
	 * @return string 関数の名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
	 * @return string 名前空間名を返します。
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * パラメータ数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int パラメータの数を返します。
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * 必須パラメータの数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int 必須パラメータの数を返します。
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
	 * @return array パラメータを <b>ReflectionParameter</b> オブジェクトの配列で返します。
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数の短い名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
	 * @return string 関数の短い名前を返します。
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 開始行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
	 * @return int 開始行番号を返します。
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的変数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
	 * @return array 静的変数の配列を返します。
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照返しかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
	 * @return bool 参照返しである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function returnsReference(): bool {}

	public function hasReturnType() {}

	public function getReturnType() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflector.export.php
	 * @return string
	 */
	abstract public static function export(): string;

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflector.tostring.php
	 * @return string
	 */
	abstract public function __toString(): string;

}

/**
 * <b>ReflectionFunction</b> クラスは
 * 関数についての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector {
	const IS_DEPRECATED = 262144;

	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionFunction オブジェクトを作成する
	 * @link http://php.net/manual/ja/reflectionfunction.construct.php
	 * @param mixed $name <p>
	 * 調べたい関数あるいはクロージャの名前。
	 * </p>
	 */
	public function __construct($name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflectionfunction.tostring.php
	 * @return string その関数について、
	 * <b>ReflectionFunction::export</b> のような出力を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数をエクスポートする
	 * @link http://php.net/manual/ja/reflectionfunction.export.php
	 * @param string $name <p>
	 * エクスポートするリフレクション。
	 * </p>
	 * @param string $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export(string $name, string $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数が無効になっているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunction.isdisabled.php
	 * @return bool 無効になっている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDisabled(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数を起動する
	 * @link http://php.net/manual/ja/reflectionfunction.invoke.php
	 * @param mixed $parameter [optional]
	 * @param mixed $_ [optional]
	 * @return mixed 起動した関数の結果を返します。
	 */
	public function invoke($parameter = null, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 引数を指定して関数を起動する
	 * @link http://php.net/manual/ja/reflectionfunction.invokeargs.php
	 * @param array $args <p>
	 * 関数に渡す引数を含む配列。
	 * <b>call_user_func_array</b> と同じように動作します。
	 * </p>
	 * @return mixed 起動した関数の結果を返します。
	 */
	public function invokeArgs(array $args) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * この関数に動的に作成されたクロージャを返す
	 * @link http://php.net/manual/ja/reflectionfunction.getclosure.php
	 * @return Closure <b>Closure</b> を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getClosure(): Closure {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数のクローンを作成する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数が名前空間内にあるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
	 * @return bool 名前空間内にある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * クロージャであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
	 * @return bool この関数が <b>Closure</b> である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 非推奨であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
	 * @return bool 非推奨である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部関数かどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
	 * @return bool 内部関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ユーザー定義関数であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
	 * @return bool ユーザー定義関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * この関数がジェネレータかどうかを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
	 * @return bool この関数がジェネレータである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 * 処理に失敗した場合に <b>NULL</b> を返します。
	 */
	public function isGenerator(): bool {}

	public function isVariadic() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャにバインドした this ポインタを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this ポインタを返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャに関連づけられたスコープを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass 成功した場合にクラスを返します。失敗した場合は <b>NULL</b> を返します。
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
	 * @return string ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b>FALSE</b>
	 * を返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 終了行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getendline.php
	 * @return int ユーザー定義関数の終了行番号を返します。不明な場合は <b>FALSE</b> を返します。
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの情報を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension 拡張モジュールの情報を <b>ReflectionExtension</b>
	 * オブジェクトで返します。
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
	 * @return string 拡張モジュールの名前を返します。
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getname.php
	 * @return string 関数の名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
	 * @return string 名前空間名を返します。
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * パラメータ数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int パラメータの数を返します。
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * 必須パラメータの数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int 必須パラメータの数を返します。
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
	 * @return array パラメータを <b>ReflectionParameter</b> オブジェクトの配列で返します。
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数の短い名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
	 * @return string 関数の短い名前を返します。
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 開始行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
	 * @return int 開始行番号を返します。
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的変数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
	 * @return array 静的変数の配列を返します。
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照返しかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
	 * @return bool 参照返しである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function returnsReference(): bool {}

	public function hasReturnType() {}

	public function getReturnType() {}

}

/**
 * The <b>ReflectionGenerator</b> class reports
 * information about a generator.
 * @link http://php.net/manual/ja/class.reflectiongenerator.php
 */
class ReflectionGenerator  {

	/**
	 * (PHP 7)<br/>
	 * Constructs a ReflectionGenerator object
	 * @link http://php.net/manual/ja/reflectiongenerator.construct.php
	 * @param Generator $generator <p>
	 * A generator object.
	 * </p>
	 */
	public function __construct(Generator $generator) {}

	/**
	 * (PHP 7)<br/>
	 * Gets the currently executing line of the generator
	 * @link http://php.net/manual/ja/reflectiongenerator.getexecutingline.php
	 * @return int the line number of the currently executing statement in the generator.
	 */
	public function getExecutingLine(): int {}

	/**
	 * (PHP 7)<br/>
	 * Gets the file name of the currently executing generator
	 * @link http://php.net/manual/ja/reflectiongenerator.getexecutingfile.php
	 * @return string the full path and file name of the currently executing generator.
	 */
	public function getExecutingFile(): string {}

	/**
	 * (PHP 7)<br/>
	 * Gets the trace of the executing generator
	 * @link http://php.net/manual/ja/reflectiongenerator.gettrace.php
	 * @param int $options [optional] <p>
	 * The value of <i>options</i> can be any of the following
	 * the following flags.
	 * </p>
	 * <p>
	 * <table>
	 * Available options
	 * <tr valign="top">
	 * <td>Option</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * <b>DEBUG_BACKTRACE_PROVIDE_OBJECT</b>
	 * </td>
	 * <td>
	 * Default.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * <b>DEBUG_BACKTRACE_IGNORE_ARGS</b>
	 * </td>
	 * <td>
	 * Don't include the argument information for functions in the stack
	 * trace.
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return array the trace of the currently executing generator.
	 */
	public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}

	/**
	 * (PHP 7)<br/>
	 * Gets the function name of the generator
	 * @link http://php.net/manual/ja/reflectiongenerator.getfunction.php
	 * @return ReflectionFunctionAbstract a <b>ReflectionFunctionAbstract</b> class. This will
	 * be <b>ReflectionFunction</b> for functions, or
	 * <b>ReflectionMethod</b> for methods.
	 */
	public function getFunction(): ReflectionFunctionAbstract {}

	/**
	 * (PHP 7)<br/>
	 * Gets the $this value of the generator
	 * @link http://php.net/manual/ja/reflectiongenerator.getthis.php
	 * @return object the $this value, or <b>NULL</b> if the generator was
	 * not created in a class context.
	 */
	public function getThis() {}

	/**
	 * (PHP 7)<br/>
	 * Gets the executing <b>Generator</b> object
	 * @link http://php.net/manual/ja/reflectiongenerator.getexecutinggenerator.php
	 * @return Generator the currently executing <b>Generator</b> object.
	 */
	public function getExecutingGenerator(): Generator {}

}

/**
 * <b>ReflectionParameter</b> クラスは、
 * 関数またはメソッドのパラメータに関する情報を取得します。
 * @link http://php.net/manual/ja/class.reflectionparameter.php
 */
class ReflectionParameter implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * クローンする
	 * @link http://php.net/manual/ja/reflectionparameter.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflectionparameter.export.php
	 * @param string $function <p>
	 * 関数名。
	 * </p>
	 * @param string $parameter <p>
	 * パラメータ名。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string エクスポート結果を返します。
	 */
	public static function export(string $function, string $parameter, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * コンストラクタ
	 * @link http://php.net/manual/ja/reflectionparameter.construct.php
	 * @param string $function <p>
	 * パラメータを調べたい関数。
	 * </p>
	 * @param string $parameter <p>
	 * パラメータ。
	 * </p>
	 */
	public function __construct(string $function, string $parameter) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflectionparameter.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータ名を取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getname.php
	 * @return string パラメータ名を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照渡しかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionparameter.ispassedbyreference.php
	 * @return bool パラメータが参照渡しである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPassedByReference(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このパラメータが値渡し可能かどうかを返す
	 * @link http://php.net/manual/ja/reflectionparameter.canbepassedbyvalue.php
	 * @return bool このパラメータが値渡し可能な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function canBePassedByValue(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.3, PHP 7)<br/>
	 * 宣言している関数を取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getdeclaringfunction.php
	 * @return ReflectionFunctionAbstract <b>ReflectionFunction</b> オブジェクトを返します。
	 */
	public function getDeclaringFunction(): ReflectionFunctionAbstract {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 宣言しているクラスを取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getdeclaringclass.php
	 * @return ReflectionClass <b>ReflectionClass</b> オブジェクトを返します。
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * タイプヒントつきのクラスを取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getclass.php
	 * @return ReflectionClass <b>ReflectionClass</b> オブジェクトを返します。
	 */
	public function getClass(): ReflectionClass {}

	public function hasType() {}

	public function getType() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 配列を受け取るパラメータであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionparameter.isarray.php
	 * @return bool 配列を受け取るパラメータである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isArray(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * パラメータが callable かどうかを返す
	 * @link http://php.net/manual/ja/reflectionparameter.iscallable.php
	 * @return bool パラメータが callable の場合に <b>TRUE</b>、そうではない場合に <b>FALSE</b> を返します。
	 * 失敗した場合は <b>NULL</b> を返します。
	 */
	public function isCallable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * null を許可するかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionparameter.allowsnull.php
	 * @return bool <b>NULL</b> を許可する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function allowsNull(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.3, PHP 7)<br/>
	 * パラメータの位置を取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getposition.php
	 * @return int パラメータの位置を取得します。左から右へ数え、最初のパラメータが 0 番目となります。
	 */
	public function getPosition(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * 省略可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionparameter.isoptional.php
	 * @return bool 省略可能である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isOptional(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * デフォルト値が存在するかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionparameter.isdefaultvalueavailable.php
	 * @return bool デフォルト値が存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultValueAvailable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * パラメータのデフォルト値を取得する
	 * @link http://php.net/manual/ja/reflectionparameter.getdefaultvalue.php
	 * @return mixed パラメータのデフォルト対を返します。
	 */
	public function getDefaultValue() {}

	/**
	 * (PHP 5 &gt;= 5.4.6, PHP 7)<br/>
	 * このパラメータのデフォルト値が定数かどうかを返す
	 * @link http://php.net/manual/ja/reflectionparameter.isdefaultvalueconstant.php
	 * @return bool デフォルト値が定数である場合に <b>TRUE</b>、そうではない場合に <b>FALSE</b> を返します。
	 * 失敗した場合は <b>NULL</b> を返します。
	 */
	public function isDefaultValueConstant(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.6, PHP 7)<br/>
	 * デフォルト値が定数あるいは null の場合に、その定数名を返す
	 * @link http://php.net/manual/ja/reflectionparameter.getdefaultvalueconstantname.php
	 * @return string 成功した場合に文字列、失敗した場合に <b>NULL</b> を返します。
	 */
	public function getDefaultValueConstantName(): string {}

	public function isVariadic() {}

}

/**
 * The <b>ReflectionType</b> class reports
 * information about a function's return type.
 * @link http://php.net/manual/ja/class.reflectiontype.php
 */
class ReflectionType  {

	final private function __clone() {}

	/**
	 * (PHP 7)<br/>
	 * Checks if null is allowed
	 * @link http://php.net/manual/ja/reflectiontype.allowsnull.php
	 * @return bool <b>TRUE</b> if <b>NULL</b> is allowed, otherwise <b>FALSE</b>
	 */
	public function allowsNull(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if it is a built-in type
	 * @link http://php.net/manual/ja/reflectiontype.isbuiltin.php
	 * @return bool <b>TRUE</b> if it's a built-in type, otherwise <b>FALSE</b>
	 */
	public function isBuiltin(): bool {}

	/**
	 * (PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/ja/reflectiontype.tostring.php
	 * @return string the type of the parameter.
	 */
	public function __toString(): string {}

}

/**
 * <b>ReflectionMethod</b> クラスは
 * メソッドについての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	const IS_ABSTRACT = 2;
	const IS_FINAL = 4;

	public $name;
	public $class;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドをエクスポートする
	 * @link http://php.net/manual/ja/reflectionmethod.export.php
	 * @param string $class <p>
	 * クラス名。
	 * </p>
	 * @param string $name <p>
	 * メソッド名。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export(string $class, string $name, bool $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionMethod を作成する
	 * @link http://php.net/manual/ja/reflectionmethod.construct.php
	 * @param mixed $class <p>
	 * メソッドを含むクラスの名前あるいはオブジェクト (クラスのインスタンス)。
	 * </p>
	 * @param string $name <p>
	 * メソッドの名前。
	 * </p>
	 */
	public function __construct($class, string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionMethod オブジェクトの文字列表現を返す
	 * @link http://php.net/manual/ja/reflectionmethod.tostring.php
	 * @return string <b>ReflectionMethod</b> のインスタンスの文字列表現を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * public メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.ispublic.php
	 * @return bool public メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPublic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * private メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isprivate.php
	 * @return bool private メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPrivate(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * protected メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isprotected.php
	 * @return bool protected メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isProtected(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 抽象メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isabstract.php
	 * @return bool 抽象メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * final メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isfinal.php
	 * @return bool final メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的メソッドであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isstatic.php
	 * @return bool 静的メソッドである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isStatic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * コンストラクタであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isconstructor.php
	 * @return bool コンストラクタである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isConstructor(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デストラクタであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionmethod.isdestructor.php
	 * @return bool デストラクタである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDestructor(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このメソッドに動的に作成されたクロージャを返す
	 * @link http://php.net/manual/ja/reflectionmethod.getclosure.php
	 * @param object $object <p>
	 * 静的メソッドの場合は不要、その他のメソッドの場合は必須となります。
	 * </p>
	 * @return Closure <b>Closure</b> を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getClosure($object): Closure {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドの修飾子を取得する
	 * @link http://php.net/manual/ja/reflectionmethod.getmodifiers.php
	 * @return int 修飾子をあらわす数値を返します。修飾子の一覧は以下のとおりです。
	 * これらの修飾子の実際の意味については
	 * 定義済みの定数 に説明があります。
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 実行する
	 * @link http://php.net/manual/ja/reflectionmethod.invoke.php
	 * @param object $object <p>
	 * メソッドを実行するオブジェクト。静的メソッドを実行する場合は、このパラメータには
	 * null を渡すことができます。
	 * </p>
	 * @param mixed $parameter [optional] <p>
	 * メソッドに渡すパラメータ。可変長のパラメータを渡すことができます。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return mixed メソッドの結果を返します。
	 */
	public function invoke($object, $parameter = null, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 実行する
	 * @link http://php.net/manual/ja/reflectionmethod.invokeargs.php
	 * @param object $object <p>
	 * メソッドを実行するオブジェクト。静的メソッドを実行する場合は、このパラメータには
	 * null を渡すことができます。
	 * </p>
	 * @param array $args <p>
	 * メソッドに渡すパラメータを配列で指定します。
	 * </p>
	 * @return mixed メソッドの結果を返します。
	 */
	public function invokeArgs($object, array $args) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドが宣言されているクラスを取得する
	 * @link http://php.net/manual/ja/reflectionmethod.getdeclaringclass.php
	 * @return ReflectionClass そのメソッドが属するクラスをあらわす <b>ReflectionClass</b>
	 * オブジェクトを返します。
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドのプロトタイプを (存在すれば) 取得する
	 * @link http://php.net/manual/ja/reflectionmethod.getprototype.php
	 * @return ReflectionMethod メソッドのプロトタイプの <b>ReflectionMethod</b> オブジェクトを返します。
	 */
	public function getPrototype(): ReflectionMethod {}

	/**
	 * (PHP 5 &gt;= 5.3.2, PHP 7)<br/>
	 * メソッドのアクセス範囲を設定する
	 * @link http://php.net/manual/ja/reflectionmethod.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> を指定すると、アクセスできるようになります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setAccessible(bool $accessible): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数のクローンを作成する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数が名前空間内にあるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.innamespace.php
	 * @return bool 名前空間内にある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * クロージャであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isclosure.php
	 * @return bool この関数が <b>Closure</b> である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 非推奨であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isdeprecated.php
	 * @return bool 非推奨である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部関数かどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isinternal.php
	 * @return bool 内部関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ユーザー定義関数であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isuserdefined.php
	 * @return bool ユーザー定義関数である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * この関数がジェネレータかどうかを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.isgenerator.php
	 * @return bool この関数がジェネレータである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 * 処理に失敗した場合に <b>NULL</b> を返します。
	 */
	public function isGenerator(): bool {}

	public function isVariadic() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャにバインドした this ポインタを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this ポインタを返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * クロージャに関連づけられたスコープを返す
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass 成功した場合にクラスを返します。失敗した場合は <b>NULL</b> を返します。
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getdoccomment.php
	 * @return string ドキュメントコメントが存在する場合はそれを返します。それ以外の場合は <b>FALSE</b>
	 * を返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 終了行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getendline.php
	 * @return int ユーザー定義関数の終了行番号を返します。不明な場合は <b>FALSE</b> を返します。
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの情報を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension 拡張モジュールの情報を <b>ReflectionExtension</b>
	 * オブジェクトで返します。
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getextensionname.php
	 * @return string 拡張モジュールの名前を返します。
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関数名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getname.php
	 * @return string 関数の名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間名を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnamespacename.php
	 * @return string 名前空間名を返します。
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * パラメータ数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int パラメータの数を返します。
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * 必須パラメータの数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int 必須パラメータの数を返します。
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータを取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getparameters.php
	 * @return array パラメータを <b>ReflectionParameter</b> オブジェクトの配列で返します。
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 関数の短い名前を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getshortname.php
	 * @return string 関数の短い名前を返します。
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 開始行番号を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstartline.php
	 * @return int 開始行番号を返します。
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的変数を取得する
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.getstaticvariables.php
	 * @return array 静的変数の配列を返します。
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照返しかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionfunctionabstract.returnsreference.php
	 * @return bool 参照返しである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function returnsReference(): bool {}

	public function hasReturnType() {}

	public function getReturnType() {}

}

/**
 * <b>ReflectionClass</b> クラスは
 * クラスについての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionclass.php
 */
class ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 4;

	public $name;


	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスをエクスポートする
	 * @link http://php.net/manual/ja/reflectionclass.export.php
	 * @param mixed $argument <p>
	 * エクスポートするリフレクション。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export($argument, bool $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionClass を作成する
	 * @link http://php.net/manual/ja/reflectionclass.construct.php
	 * @param mixed $argument <p>
	 * 調べたいクラスのクラス名をあらわす文字列か、そのクラスのオブジェクト。
	 * </p>
	 */
	public function __construct($argument) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionClass オブジェクトの文字列表現を返す
	 * @link http://php.net/manual/ja/reflectionclass.tostring.php
	 * @return string この <b>ReflectionClass</b> インスタンスの文字列表現を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getname.php
	 * @return string クラスの名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールあるいはコアで定義された内部クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinternal.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ユーザー定義であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isuserdefined.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isUserDefined(): bool {}

	public function isAnonymous() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのインスタンス化が可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinstantiable.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInstantiable(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスがクローン可能かどうかを返す
	 * @link http://php.net/manual/ja/reflectionclass.iscloneable.php
	 * @return bool このクラスがクローン可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isCloneable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスが定義されているファイルのファイル名を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getfilename.php
	 * @return string クラスが定義されているファイルのファイル名を返します。
	 * そのクラスが PHP のコアあるいは PHP の拡張モジュール内で定義されている場合は
	 * <b>FALSE</b> を返します。
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 開始行を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstartline.php
	 * @return int 開始行を返します。
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 終了行を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getendline.php
	 * @return int ユーザー定義クラスの定義の終了行を返します。不明な場合は <b>FALSE</b> を返します。
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getdoccomment.php
	 * @return string ドキュメントコメントが存在すればそれを返します。存在しなければ <b>FALSE</b> を返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのコンストラクタを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstructor.php
	 * @return object クラスのコンストラクタを表す <b>ReflectionMethod</b> オブジェクトを返します。
	 * クラスのコンストラクタがない場合は <b>NULL</b> を返します。
	 */
	public function getConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * メソッドが定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * 調べたいメソッドの名前。
	 * </p>
	 * @return bool メソッドが定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasMethod(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスメソッドの <b>ReflectionMethod</b> を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * 調べたいメソッドの名前。
	 * </p>
	 * @return ReflectionMethod <b>ReflectionMethod</b> を返します。
	 */
	public function getMethod(string $name): ReflectionMethod {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドの配列を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmethods.php
	 * @param int $filter [optional] <p>
	 * 結果をフィルタして、特定の属性を持つメソッドだけを含めるようにします。
	 * デフォルトは、何もフィルタしません。
	 * </p>
	 * <p>
	 * <b>ReflectionMethod::IS_STATIC</b>、
	 * <b>ReflectionMethod::IS_PUBLIC</b>、
	 * <b>ReflectionMethod::IS_PROTECTED</b>、
	 * <b>ReflectionMethod::IS_PRIVATE</b>、
	 * <b>ReflectionMethod::IS_ABSTRACT</b>、
	 * <b>ReflectionMethod::IS_FINAL</b>
	 * の任意の組み合わせ。
	 * 指定した属性の いずれか を持つすべてのメソッドを返します。
	 * </p>
	 * その他のビット演算 (~ など) は期待通りの挙動にはなりません。
	 * つまり、たとえば static ではないメソッドをすべて取得するなどといったことはできません。
	 * @return array 各メソッドを表す <b>ReflectionMethod</b> オブジェクトの配列を返します。
	 */
	public function getMethods(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * プロパティが定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * 調べたいプロパティの名前。
	 * </p>
	 * @return bool プロパティが定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasProperty(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのプロパティを表す <b>ReflectionProperty</b> を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * プロパティの名前。
	 * </p>
	 * @return ReflectionProperty <b>ReflectionProperty</b> を返します。
	 */
	public function getProperty(string $name): ReflectionProperty {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getproperties.php
	 * @param int $filter [optional] <p>
	 * オプションのフィルタで、取得したいプロパティの型を絞り込みます。
	 * ReflectionProperty の定数
	 * で設定し、デフォルトではすべてのプロパティ型を取得します。
	 * </p>
	 * @return array <b>ReflectionProperty</b> オブジェクトの配列を返します。
	 */
	public function getProperties(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 定数が定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * 調べたい定数の名前。
	 * </p>
	 * @return bool 定数が定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasConstant(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 定数を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstants.php
	 * @return array 定数の配列を返します。
	 * キーは名前を保持し、値は定数の値を保持します。
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 定義されている定数を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * 定数の名前。
	 * </p>
	 * @return mixed 定数の値を返します。
	 */
	public function getConstant(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * インターフェイスを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getinterfaces.php
	 * @return array インターフェイスの連想配列を返します。インターフェイス名が連想配列のキー、対応する値が
	 * <b>ReflectionClass</b> オブジェクトとなります。
	 */
	public function getInterfaces(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * インターフェイスの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getinterfacenames.php
	 * @return array インターフェイス名の配列を返します。
	 */
	public function getInterfaceNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * このクラスがインターフェイスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinterface.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInterface(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスが使うトレイトの配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraits.php
	 * @return array トレイト名をキー、トレイトの
	 * <b>ReflectionClass</b> のインスタンスを値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraits(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスが使うトレイトの名前の配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraitnames.php
	 * @return array トレイト名を値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraitNames(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * トレイトのエイリアスの配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraitaliases.php
	 * @return array 新しいメソッド名をキー、その元の名前
	 * ("TraitName::original" 形式) を値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraitAliases(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * トレイトであるかどうかを返す
	 * @link http://php.net/manual/ja/reflectionclass.istrait.php
	 * @return bool これがトレイトである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function isTrait(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 抽象クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isabstract.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * final クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isfinal.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラス修飾子を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmodifiers.php
	 * @return int 修飾子定数 のビットマスクを返します。
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのインスタンスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * 比べたいオブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInstance($object): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した引数でクラスの新しいインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * 可変長の引数を受け付け、それを <b>call_user_func</b>
	 * と同じ方式でクラスのコンストラクタに渡します。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return object
	 */
	public function newInstance($args, $_ = null) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * コンストラクタを起動せずに新しいクラスのインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstancewithoutconstructor.php
	 * @return object
	 */
	public function newInstanceWithoutConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * 指定した引数でクラスの新しいインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * クラスのコンストラクタに渡すパラメータを配列で指定します。
	 * </p>
	 * @return object クラスの新しいインスタンスを返します。
	 */
	public function newInstanceArgs(array $args = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 親クラスを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getparentclass.php
	 * @return ReflectionClass <b>ReflectionClass</b> を返します。
	 */
	public function getParentClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * サブクラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * 調べたいクラス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSubclassOf(string $class): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的なプロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstaticproperties.php
	 * @return array 静的なプロパティを配列で返します。
	 */
	public function getStaticProperties(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 静的なプロパティの値を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * 値を返したい静的プロパティの名前。
	 * </p>
	 * @param mixed $def_value [optional] <p>
	 * 指定した名前の静的プロパティがそのクラスに存在しない場合に返す、デフォルト値。
	 * プロパティが存在せず、かつこの引数も省略されていた場合は、
	 * <b>ReflectionException</b> が発生します。
	 * </p>
	 * @return mixed 静的プロパティの値を返します。
	 */
	public function getStaticPropertyValue(string $name, &$def_value = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 静的なプロパティの値を設定する
	 * @link http://php.net/manual/ja/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * プロパティの名前。
	 * </p>
	 * @param string $value <p>
	 * 新しいプロパティの値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setStaticPropertyValue(string $name, string $value): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デフォルトプロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getdefaultproperties.php
	 * @return array デフォルトプロパティの配列を返します。プロパティ名が配列のキー、
	 * そしてそのプロパティのデフォルト値が配列の値 (デフォルト値が存在しない場合は <b>NULL</b>) となります。
	 * この関数は静的なプロパティとそうでないプロパティを区別せず、
	 * アクセス修飾子も考慮しません。
	 */
	public function getDefaultProperties(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 反復処理が可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isiterateable.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isIterateable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * インターフェイスの実装を調べる
	 * @link http://php.net/manual/ja/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * インターフェイスの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function implementsInterface(string $interface): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスを定義する拡張モジュールを表す <b>ReflectionExtension</b> オブジェクトを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getextension.php
	 * @return ReflectionExtension クラスを定義する拡張モジュールを表す <b>ReflectionExtension</b> オブジェクトを返します。
	 * ユーザー定義のクラスの場合は <b>NULL</b> を返します。
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスを定義する拡張モジュールの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getextensionname.php
	 * @return string クラスを定義する拡張モジュールの名前を返します。
	 * ユーザー定義のクラスの場合は <b>FALSE</b> を返します。
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間内にあるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.innamespace.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間の名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getnamespacename.php
	 * @return string 名前空間の名前を返します。
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 短い名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getshortname.php
	 * @return string クラスの短い名前を返します。
	 */
	public function getShortName(): string {}

}

/**
 * <b>ReflectionObject</b> クラスは
 * オブジェクトについての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 4;

	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflectionobject.export.php
	 * @param string $argument <p>
	 * エクスポートするリフレクション。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export(string $argument, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionObject を作成する
	 * @link http://php.net/manual/ja/reflectionobject.construct.php
	 * @param object $argument <p>
	 * オブジェクトのインスタンス。
	 * </p>
	 */
	public function __construct($argument) {}

	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionClass オブジェクトの文字列表現を返す
	 * @link http://php.net/manual/ja/reflectionclass.tostring.php
	 * @return string この <b>ReflectionClass</b> インスタンスの文字列表現を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getname.php
	 * @return string クラスの名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールあるいはコアで定義された内部クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinternal.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ユーザー定義であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isuserdefined.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isUserDefined(): bool {}

	public function isAnonymous() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのインスタンス化が可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinstantiable.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInstantiable(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスがクローン可能かどうかを返す
	 * @link http://php.net/manual/ja/reflectionclass.iscloneable.php
	 * @return bool このクラスがクローン可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isCloneable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスが定義されているファイルのファイル名を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getfilename.php
	 * @return string クラスが定義されているファイルのファイル名を返します。
	 * そのクラスが PHP のコアあるいは PHP の拡張モジュール内で定義されている場合は
	 * <b>FALSE</b> を返します。
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 開始行を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstartline.php
	 * @return int 開始行を返します。
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 終了行を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getendline.php
	 * @return int ユーザー定義クラスの定義の終了行を返します。不明な場合は <b>FALSE</b> を返します。
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getdoccomment.php
	 * @return string ドキュメントコメントが存在すればそれを返します。存在しなければ <b>FALSE</b> を返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのコンストラクタを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstructor.php
	 * @return object クラスのコンストラクタを表す <b>ReflectionMethod</b> オブジェクトを返します。
	 * クラスのコンストラクタがない場合は <b>NULL</b> を返します。
	 */
	public function getConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * メソッドが定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * 調べたいメソッドの名前。
	 * </p>
	 * @return bool メソッドが定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasMethod(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスメソッドの <b>ReflectionMethod</b> を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * 調べたいメソッドの名前。
	 * </p>
	 * @return ReflectionMethod <b>ReflectionMethod</b> を返します。
	 */
	public function getMethod(string $name): ReflectionMethod {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * メソッドの配列を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmethods.php
	 * @param int $filter [optional] <p>
	 * 結果をフィルタして、特定の属性を持つメソッドだけを含めるようにします。
	 * デフォルトは、何もフィルタしません。
	 * </p>
	 * <p>
	 * <b>ReflectionMethod::IS_STATIC</b>、
	 * <b>ReflectionMethod::IS_PUBLIC</b>、
	 * <b>ReflectionMethod::IS_PROTECTED</b>、
	 * <b>ReflectionMethod::IS_PRIVATE</b>、
	 * <b>ReflectionMethod::IS_ABSTRACT</b>、
	 * <b>ReflectionMethod::IS_FINAL</b>
	 * の任意の組み合わせ。
	 * 指定した属性の いずれか を持つすべてのメソッドを返します。
	 * </p>
	 * その他のビット演算 (~ など) は期待通りの挙動にはなりません。
	 * つまり、たとえば static ではないメソッドをすべて取得するなどといったことはできません。
	 * @return array 各メソッドを表す <b>ReflectionMethod</b> オブジェクトの配列を返します。
	 */
	public function getMethods(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * プロパティが定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * 調べたいプロパティの名前。
	 * </p>
	 * @return bool プロパティが定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasProperty(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのプロパティを表す <b>ReflectionProperty</b> を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * プロパティの名前。
	 * </p>
	 * @return ReflectionProperty <b>ReflectionProperty</b> を返します。
	 */
	public function getProperty(string $name): ReflectionProperty {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getproperties.php
	 * @param int $filter [optional] <p>
	 * オプションのフィルタで、取得したいプロパティの型を絞り込みます。
	 * ReflectionProperty の定数
	 * で設定し、デフォルトではすべてのプロパティ型を取得します。
	 * </p>
	 * @return array <b>ReflectionProperty</b> オブジェクトの配列を返します。
	 */
	public function getProperties(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 定数が定義されているかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * 調べたい定数の名前。
	 * </p>
	 * @return bool 定数が定義されている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasConstant(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 定数を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstants.php
	 * @return array 定数の配列を返します。
	 * キーは名前を保持し、値は定数の値を保持します。
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 定義されている定数を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * 定数の名前。
	 * </p>
	 * @return mixed 定数の値を返します。
	 */
	public function getConstant(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * インターフェイスを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getinterfaces.php
	 * @return array インターフェイスの連想配列を返します。インターフェイス名が連想配列のキー、対応する値が
	 * <b>ReflectionClass</b> オブジェクトとなります。
	 */
	public function getInterfaces(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * インターフェイスの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getinterfacenames.php
	 * @return array インターフェイス名の配列を返します。
	 */
	public function getInterfaceNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * このクラスがインターフェイスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinterface.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInterface(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスが使うトレイトの配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraits.php
	 * @return array トレイト名をキー、トレイトの
	 * <b>ReflectionClass</b> のインスタンスを値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraits(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * このクラスが使うトレイトの名前の配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraitnames.php
	 * @return array トレイト名を値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraitNames(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * トレイトのエイリアスの配列を返す
	 * @link http://php.net/manual/ja/reflectionclass.gettraitaliases.php
	 * @return array 新しいメソッド名をキー、その元の名前
	 * ("TraitName::original" 形式) を値とする配列を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function getTraitAliases(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * トレイトであるかどうかを返す
	 * @link http://php.net/manual/ja/reflectionclass.istrait.php
	 * @return bool これがトレイトである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 * エラー時には <b>NULL</b> を返します。
	 */
	public function isTrait(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 抽象クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isabstract.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * final クラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isfinal.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラス修飾子を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getmodifiers.php
	 * @return int 修飾子定数 のビットマスクを返します。
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスのインスタンスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * 比べたいオブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isInstance($object): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した引数でクラスの新しいインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * 可変長の引数を受け付け、それを <b>call_user_func</b>
	 * と同じ方式でクラスのコンストラクタに渡します。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return object
	 */
	public function newInstance($args, $_ = null) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * コンストラクタを起動せずに新しいクラスのインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstancewithoutconstructor.php
	 * @return object
	 */
	public function newInstanceWithoutConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * 指定した引数でクラスの新しいインスタンスを作成する
	 * @link http://php.net/manual/ja/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * クラスのコンストラクタに渡すパラメータを配列で指定します。
	 * </p>
	 * @return object クラスの新しいインスタンスを返します。
	 */
	public function newInstanceArgs(array $args = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 親クラスを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getparentclass.php
	 * @return ReflectionClass <b>ReflectionClass</b> を返します。
	 */
	public function getParentClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * サブクラスであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * 調べたいクラス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSubclassOf(string $class): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的なプロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstaticproperties.php
	 * @return array 静的なプロパティを配列で返します。
	 */
	public function getStaticProperties(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 静的なプロパティの値を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * 値を返したい静的プロパティの名前。
	 * </p>
	 * @param mixed $def_value [optional] <p>
	 * 指定した名前の静的プロパティがそのクラスに存在しない場合に返す、デフォルト値。
	 * プロパティが存在せず、かつこの引数も省略されていた場合は、
	 * <b>ReflectionException</b> が発生します。
	 * </p>
	 * @return mixed 静的プロパティの値を返します。
	 */
	public function getStaticPropertyValue(string $name, &$def_value = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 静的なプロパティの値を設定する
	 * @link http://php.net/manual/ja/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * プロパティの名前。
	 * </p>
	 * @param string $value <p>
	 * 新しいプロパティの値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setStaticPropertyValue(string $name, string $value): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デフォルトプロパティを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getdefaultproperties.php
	 * @return array デフォルトプロパティの配列を返します。プロパティ名が配列のキー、
	 * そしてそのプロパティのデフォルト値が配列の値 (デフォルト値が存在しない場合は <b>NULL</b>) となります。
	 * この関数は静的なプロパティとそうでないプロパティを区別せず、
	 * アクセス修飾子も考慮しません。
	 */
	public function getDefaultProperties(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 反復処理が可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.isiterateable.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isIterateable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * インターフェイスの実装を調べる
	 * @link http://php.net/manual/ja/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * インターフェイスの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function implementsInterface(string $interface): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスを定義する拡張モジュールを表す <b>ReflectionExtension</b> オブジェクトを取得する
	 * @link http://php.net/manual/ja/reflectionclass.getextension.php
	 * @return ReflectionExtension クラスを定義する拡張モジュールを表す <b>ReflectionExtension</b> オブジェクトを返します。
	 * ユーザー定義のクラスの場合は <b>NULL</b> を返します。
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスを定義する拡張モジュールの名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getextensionname.php
	 * @return string クラスを定義する拡張モジュールの名前を返します。
	 * ユーザー定義のクラスの場合は <b>FALSE</b> を返します。
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間内にあるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionclass.innamespace.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 名前空間の名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getnamespacename.php
	 * @return string 名前空間の名前を返します。
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 短い名前を取得する
	 * @link http://php.net/manual/ja/reflectionclass.getshortname.php
	 * @return string クラスの短い名前を返します。
	 */
	public function getShortName(): string {}

}

/**
 * <b>ReflectionProperty</b> クラスは
 * クラスのプロパティについての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionproperty.php
 */
class ReflectionProperty implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;

	public $name;
	public $class;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * クローンする
	 * @link http://php.net/manual/ja/reflectionproperty.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflectionproperty.export.php
	 * @param mixed $class
	 * @param string $name <p>
	 * プロパティ名。
	 * </p>
	 * @param bool $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string
	 */
	public static function export($class, string $name, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionProperty オブジェクトを作成する
	 * @link http://php.net/manual/ja/reflectionproperty.construct.php
	 * @param mixed $class <p>
	 * プロパティを含むクラスの名前。
	 * </p>
	 * @param string $name <p>
	 * 調べたいプロパティの名前。
	 * </p>
	 */
	public function __construct($class, string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflectionproperty.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プロパティ名を取得する
	 * @link http://php.net/manual/ja/reflectionproperty.getname.php
	 * @return string 調べているプロパティの名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 値を取得する
	 * @link http://php.net/manual/ja/reflectionproperty.getvalue.php
	 * @param object $object [optional] <p>
	 * 静的でないプロパティの場合は、プロパティを取得したいオブジェクトを指定しなければなりません。
	 * オブジェクトを指定せずにデフォルトのプロパティを取得したい場合は、かわりに
	 * <b>ReflectionClass::getDefaultProperties</b>
	 * を使います。
	 * </p>
	 * @return mixed プロパティの現在の値を返します。
	 */
	public function getValue($object = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プロパティの値を設定する
	 * @link http://php.net/manual/ja/reflectionproperty.setvalue.php
	 * @param object $object <p>
	 * 静的でないプロパティの場合は、プロパティを変更したいオブジェクトを指定しなければなりません。
	 * 静的なプロパティの場合はこのパラメータを省略し、
	 * <i>value</i> だけを指定しなければなりません。
	 * </p>
	 * @param mixed $value <p>
	 * 新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setValue($object, $value): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * public プロパティであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionproperty.ispublic.php
	 * @return bool public プロパティである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPublic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * private プロパティであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionproperty.isprivate.php
	 * @return bool private プロパティである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPrivate(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * protected プロパティであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionproperty.isprotected.php
	 * @return bool protected プロパティである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isProtected(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 静的プロパティであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionproperty.isstatic.php
	 * @return bool 静的プロパティである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isStatic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デフォルトプロパティであるかどうかを調べる
	 * @link http://php.net/manual/ja/reflectionproperty.isdefault.php
	 * @return bool プロパティがコンパイル時に宣言された者である場合に <b>TRUE</b>、
	 * 実行時に作られたものである場合に <b>FALSE</b> を返します。
	 */
	public function isDefault(): bool {}

	public function getModifiers() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 宣言しているクラスを取得する
	 * @link http://php.net/manual/ja/reflectionproperty.getdeclaringclass.php
	 * @return ReflectionClass <b>ReflectionClass</b> オブジェクトを返します。
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * プロパティのドキュメントコメントを取得する
	 * @link http://php.net/manual/ja/reflectionproperty.getdoccomment.php
	 * @return string プロパティのドキュメントコメントを返します。
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プロパティのアクセス範囲を設定する
	 * @link http://php.net/manual/ja/reflectionproperty.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> を指定すると、アクセスできるようになります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setAccessible(bool $accessible): void {}

}

/**
 * <b>ReflectionExtension</b> クラスは
 * 拡張モジュールについての情報を報告します。
 * @link http://php.net/manual/ja/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * クローンする
	 * @link http://php.net/manual/ja/reflectionextension.clone.php
	 * @return void 値は返しません。もしコールされれば致命的なエラーとなります。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * エクスポートする
	 * @link http://php.net/manual/ja/reflectionextension.export.php
	 * @param string $name <p>
	 * エクスポートするリフレクション。
	 * </p>
	 * @param string $return [optional] <p>
	 * <b>TRUE</b> に設定すると、エクスポートを発行するのではなく返します。
	 * <b>FALSE</b> (デフォルト) の場合はその逆です。
	 * </p>
	 * @return string <i>return</i> パラメータを
	 * <b>TRUE</b> に設定すると、エクスポートを文字列で返します。それ以外の場合は
	 * <b>NULL</b> を返します。
	 */
	public static function export(string $name, string $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ReflectionExtension を作成する
	 * @link http://php.net/manual/ja/reflectionextension.construct.php
	 * @param string $name <p>
	 * 拡張モジュールの名前。
	 * </p>
	 */
	public function __construct(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列に変換する
	 * @link http://php.net/manual/ja/reflectionextension.tostring.php
	 * @return string エクスポートした拡張モジュールを文字列で返します。
	 * <b>ReflectionExtension::export</b>
	 * と同じ形式となります。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュール名を取得する
	 * @link http://php.net/manual/ja/reflectionextension.getname.php
	 * @return string 拡張モジュールの名前を返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールのバージョンを取得する
	 * @link http://php.net/manual/ja/reflectionextension.getversion.php
	 * @return string 拡張モジュールのバージョンを返します。
	 */
	public function getVersion(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの関数を取得する
	 * @link http://php.net/manual/ja/reflectionextension.getfunctions.php
	 * @return array <b>ReflectionFunction</b> オブジェクトの連想配列を返します。
	 * 拡張モジュール内で定義されている関数名がキーとなります。
	 * 関数が定義されていない場合は空の配列を返します。
	 */
	public function getFunctions(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 定数を取得する
	 * @link http://php.net/manual/ja/reflectionextension.getconstants.php
	 * @return array 定数名をキーとする連想配列を返します。
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの ini エントリを取得する
	 * @link http://php.net/manual/ja/reflectionextension.getinientries.php
	 * @return array ini エントリをキー、定義されている値をキーに対応する値とした連想配列を返します。
	 */
	public function getINIEntries(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラスを取得する
	 * @link http://php.net/manual/ja/reflectionextension.getclasses.php
	 * @return array <b>ReflectionClass</b> オブジェクトの配列を返します。
	 * 各要素が、拡張モジュール内のクラスを表します。
	 * クラスが定義されていない場合は空の配列を返します。
	 */
	public function getClasses(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クラス名を取得する
	 * @link http://php.net/manual/ja/reflectionextension.getclassnames.php
	 * @return array 拡張モジュールで定義されているクラス名の配列を返します。
	 * クラスが定義されていない場合は空の配列を返します。
	 */
	public function getClassNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 依存性を取得する
	 * @link http://php.net/manual/ja/reflectionextension.getdependencies.php
	 * @return array 依存する拡張モジュールをキー、そして
	 * Required、Optional
	 * あるいは Conflicts
	 * のいずれかを値とする連想配列を返します。
	 */
	public function getDependencies(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 拡張モジュールの情報を表示する
	 * @link http://php.net/manual/ja/reflectionextension.info.php
	 * @return void 拡張モジュールの情報を返します。
	 */
	public function info(): void {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * この拡張モジュールが永続性のあるものかどうかを返す
	 * @link http://php.net/manual/ja/reflectionextension.ispersistent.php
	 * @return void この拡張モジュールが extension
	 * で読み込まれたものである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isPersistent(): void {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * この拡張モジュールが一時的なものかどうかを返す
	 * @link http://php.net/manual/ja/reflectionextension.istemporary.php
	 * @return void この拡張モジュールが <b>dl</b> で読み込まれたものである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isTemporary(): void {}

}

/**
 * @link http://php.net/manual/ja/class.reflectionzendextension.php
 */
class ReflectionZendExtension implements Reflector {
	public $name;


	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Clone のハンドラ
	 * @link http://php.net/manual/ja/reflectionzendextension.clone.php
	 * @return void
	 */
	final private function __clone(): void {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * エクスポート
	 * @link http://php.net/manual/ja/reflectionzendextension.export.php
	 * @param string $name <p>
	 * </p>
	 * @param string $return [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function export(string $name, string $return = null): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * コンストラクタ
	 * @link http://php.net/manual/ja/reflectionzendextension.construct.php
	 * @param string $name <p>
	 * </p>
	 */
	public function __construct(string $name) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * 文字列変換のハンドラ
	 * @link http://php.net/manual/ja/reflectionzendextension.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * 名前を取得する
	 * @link http://php.net/manual/ja/reflectionzendextension.getname.php
	 * @return string
	 */
	public function getName(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * バージョンを取得する
	 * @link http://php.net/manual/ja/reflectionzendextension.getversion.php
	 * @return string
	 */
	public function getVersion(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * 作者を取得する
	 * @link http://php.net/manual/ja/reflectionzendextension.getauthor.php
	 * @return string
	 */
	public function getAuthor(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * URL を取得する
	 * @link http://php.net/manual/ja/reflectionzendextension.geturl.php
	 * @return string
	 */
	public function getURL(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * 著作権情報を取得する
	 * @link http://php.net/manual/ja/reflectionzendextension.getcopyright.php
	 * @return string
	 */
	public function getCopyright(): string {}

}
// End of Reflection v.7.0.19
?>
