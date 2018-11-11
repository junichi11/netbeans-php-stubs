<?php



/**
 * <p>アクションは、Yaf の個別のファイルで定義します (Yaf_Controller_Abstract を参照ください)。 アクションメソッドには <b>Yaf_Action_Abstract</b> クラスも使えます。</p>
 * <p>Yaf から呼び出すためのエントリポイント (PHP 5.3 以降は新たなマジックメソッド __invoke が使えます。 しかし Yaf は PHP 5.3 以降専用ではないので、そのときには 実行するマジックメソッドを別に選択します) が必要なので、抽象メソッド <code>Yaf_Action_Abstract::execute()</code> をアクションクラスで実装する必要があります。</p>
 * @link http://php.net/manual/ja/class.yaf-action-abstract.php
 * @since Yaf >=1.0.0
 */
class Yaf_Action_Abstract extends \Yaf_Controller_Abstract {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-action-abstract.php#yaf-action-abstract.props.controller
	 */
	protected $_controller;

	/**
	 * Yaf_Controller_Abstract はクローンできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.clone.php
	 * @since Yaf >=1.0.0
	 */
	final private function __clone() {}

	/**
	 * Yaf_Controller_Abstract のコンストラクタ
	 * <p><b>Yaf_Controller_Abstract::__construct()</b> は final メソッドなので、 オーバーライドできません。 <code>Yaf_Controller_Abstract::init()</code> を参照ください。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-controller-abstract.construct.php
	 * @since Yaf >=1.0.0
	 */
	final private function __construct() {}

	/**
	 * The display purpose
	 * @param string $tpl
	 * @param array $parameters
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-controller-abstract.display.php
	 * @since Yaf >=1.0.0
	 */
	protected function display(string $tpl, array $parameters = NULL): bool {}

	/**
	 * アクションのエントリポイント
	 * <p>このメソッドは、アクションで常に定義しないといけません。これがアクションのエントリポイントになります。 <b>Yaf_Action_Abstract::execute()</b> は引数をとることもあります。</p><p><b>注意</b>:</p><p>リクエストから取得した値は安全ではありません。 使う前にフィルタリングが必要です。</p>
	 * @param mixed $arg
	 * @param mixed $_
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-action-abstract.execute.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function execute($arg = NULL, $_ = NULL);

	/**
	 * 別のアクションに転送する
	 * <p>現在の実行プロセスを別のアクションに転送します。</p><p><b>注意</b>:</p><p>このメソッドは、その場ですぐに次のアクションに切り替えるわけではなく、 現在の実行フローが終わってから次のアクションに転送します。</p>
	 * @param string $action <p>移動先のアクション名。</p>
	 * @param array $paramters <p>呼び出しの引数。</p>
	 * @return void <p>失敗した場合は FALSE を返します。</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.forward.php
	 * @since Yaf >=1.0.0
	 */
	public function forward(string $action, array $paramters = NULL): void {}

	/**
	 * コントローラオブジェクトを取得する
	 * <p>現在のコントローラオブジェクトを取得します。</p>
	 * @return Yaf_Controller_Abstract <p>Yaf_Controller_Abstract のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/yaf-action-abstract.getcontroller.php
	 * @since Yaf >=1.0.0
	 */
	public function getController(): \Yaf_Controller_Abstract {}

	/**
	 * The getInvokeArg purpose
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getinvokearg.php
	 * @since Yaf >=1.0.0
	 */
	public function getInvokeArg(string $name): void {}

	/**
	 * The getInvokeArgs purpose
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getinvokeargs.php
	 * @since Yaf >=1.0.0
	 */
	public function getInvokeArgs(): void {}

	/**
	 * モジュール名を取得する
	 * <p>コントローラのモジュール名を取得します。</p>
	 * @return string
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function getModuleName(): string {}

	/**
	 * 現在のリクエストオブジェクトを取得する
	 * <p>現在のリクエストオブジェクトを取得します。</p>
	 * @return Yaf_Request_Abstract <p>Yaf_Request_Abstract instance</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequest(): \Yaf_Request_Abstract {}

	/**
	 * 現在のレスポンスオブジェクトを取得する
	 * <p>現在のレスポンスオブジェクトを取得します。</p>
	 * @return Yaf_Response_Abstract <p>Yaf_Response_Abstract instance</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getresponse.php
	 * @since Yaf >=1.0.0
	 */
	public function getResponse(): \Yaf_Response_Abstract {}

	/**
	 * ビューエンジンを取得する
	 * <p>ビューエンジンを取得します。</p>
	 * @return Yaf_View_Interface
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getview.php
	 * @since Yaf >=1.0.0
	 */
	public function getView(): \Yaf_View_Interface {}

	/**
	 * The getViewpath purpose
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getviewpath.php
	 * @since Yaf >=1.0.0
	 */
	public function getViewpath(): void {}

	/**
	 * コントローラを初期化する
	 * <p><code>Yaf_Controller_Abstract::__construct()</code> は final メソッドなので、 オーバーライドできません。しかし、かわりに <b>Yaf_Controller_Abstract::init()</b> を定義できます。 これは、コントローラオブジェクトのインスタンスができた直後に呼ばれます。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.init.php
	 * @since Yaf >=1.0.0
	 */
	public function init(): void {}

	/**
	 * The initView purpose
	 * @param array $options
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.initview.php
	 * @since Yaf >=1.0.0
	 */
	public function initView(array $options = NULL): void {}

	/**
	 * URL にリダイレクトする
	 * <p>302 ヘッダを送出して、URL にリダイレクトします。</p>
	 * @param string $url <p>場所を表す URL。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.redirect.php
	 * @since Yaf >=1.0.0
	 */
	public function redirect(string $url): bool {}

	/**
	 * ビューテンプレートをレンダリングする
	 * @param string $tpl
	 * @param array $parameters
	 * @return string
	 * @link http://php.net/manual/ja/yaf-controller-abstract.render.php
	 * @since Yaf >=1.0.0
	 */
	protected function render(string $tpl, array $parameters = NULL): string {}

	/**
	 * The setViewpath purpose
	 * @param string $view_directory
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.setviewpath.php
	 * @since Yaf >=1.0.0
	 */
	public function setViewpath(string $view_directory): void {}
}

/**
 * <p>Yaf_Application はアプリケーションのブートストラップ機能を提供します。 再利用可能なリソース、共有できるモジュールベースのブートストラップクラス、 そして依存関係のチェックなどです。</p>
 * <p><b>注意</b>:</p>
 * <p>Yaf_Application はシングルトンパターンを実装しており、 シリアライズやデシリアライズはできません。これは、 PHPUnit を使って Yaf 用のテストケースを書こうとしたときに問題の原因となります。</p>
 * <p>PHPUnit の @backupGlobals アノテーションを使えば グローバル変数のバックアップやりストア操作を制御できるので、 この問題に対応できます。</p>
 * @link http://php.net/manual/ja/class.yaf-application.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class Yaf_Application extends \Yaf_Application {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.config
	 */
	protected $config;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.dispatcher
	 */
	protected $dispatcher;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.app
	 */
	protected static $_app;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.modules
	 */
	protected $_modules;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.running
	 */
	protected $_running;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-application.php#yaf-application.props.environ
	 */
	protected $_environ;

	/**
	 * Yaf_Application はクローンできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Application のコンストラクタ
	 * <p>Yaf_Application のインスタンスを作成します。</p>
	 * @param mixed $config <p>ini ファイルへのパス、あるいは設定の配列。</p> <p>ini ファイルを指定する場合は、 yaf.environ で定義した名前のセクションが必要です。 デフォルトは "product" です。</p> <p><b>注意</b>:</p> <p>ini ファイルをアプリケーションの設定コンテナとして使うのなら、 yaf.cache_config でパフォーマンスを改善できます。 performance.</p>  <p>設定項目とそのデフォルト値の一覧を示します。</p> <p><b>例1 ini ファイルの例</b></p>   <pre>[product] ;this one should alway be defined, and have no default value application.directory=APPLICATION_PATH ;following configs have default value, you may no need to define them application.library = APPLICATION_PATH . "/library" application.dispatcher.throwException=1 application.dispatcher.catchException=1 application.baseUri="" ;the php script ext name ap.ext=php ;the view template ext name ap.view.ext=phtml ap.dispatcher.defaultModuel=Index ap.dispatcher.defaultController=Index ap.dispatcher.defaultAction=index ;defined modules ap.modules=Index</pre>
	 * @param string $envrion <p>最終的な設定として、どのセクションを読み込むか。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-application.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct($config, string $envrion = NULL) {}

	/**
	 * デストラクタ
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.destruct.php
	 * @since Yaf >=1.0.0
	 */
	public function __destruct() {}

	/**
	 * Yaf_Application はシリアライズできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.sleep.php
	 * @since Yaf >=1.0.0
	 */
	private function __sleep(): void {}

	/**
	 * Yaf_Application はデシリアライズできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.wakeup.php
	 * @since Yaf >=1.0.0
	 */
	private function __wakeup(): void {}

	/**
	 * アプリケーションのインスタンスを取得する
	 * <p>Yaf_Application のインスタンスを取得します。 別の方法として、 <code>Yaf_Dispatcher::getApplication()</code> も使えます。</p>
	 * @return void <p>Yaf_Application のインスタンスを返します。まだ Yaf_Application を初期化していない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-application.app.php
	 * @since Yaf >=1.0.0
	 */
	public static function app(): void {}

	/**
	 * ブートストラップをコールする
	 * <p>ブートストラップを実行します。"_init" で始まる名前のすべてのメソッドを その定義順に実行します。bootstrap パラメータを省略した場合は、 application.directory からブートストラップを探します。</p>
	 * @param \Yaf_Bootstrap_Abstract $bootstrap <p>Yaf_Bootstrap_Abstract のインスタンス。</p>
	 * @return void <p>Yaf_Application のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/yaf-application.bootstrap.php
	 * @since Yaf >=1.0.0
	 */
	public function bootstrap(\Yaf_Bootstrap_Abstract $bootstrap = NULL): void {}

	/**
	 * 直近のエラー情報を消す
	 * @return Yaf_Application
	 * @link http://php.net/manual/ja/yaf-application.clearlasterror.php
	 * @since Yaf >=2.1.2
	 */
	public function clearLastError(): \Yaf_Application {}

	/**
	 * 環境を取得する
	 * <p>環境を取得します。これは yaf.environ で定義されており、デフォルト値は "product" です。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.environ.php
	 * @since Yaf >=1.0.0
	 */
	public function environ(): void {}

	/**
	 * コールバックを実行する
	 * <p>このメソッドは一般的に、Yaf_Application を crontab で実行させるときに使います。 crontab では、オートローダーやブートストラップの仕組みも使えます。</p>
	 * @param callable $entry <p>有効なコールバック。</p>
	 * @param string $_ <p>コールバックに渡すパラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.execute.php
	 * @since Yaf >=1.0.0
	 */
	public function execute(callable $entry, string $_): void {}

	/**
	 * アプリケーションディレクトリを取得する
	 * @return Yaf_Application
	 * @link http://php.net/manual/ja/yaf-application.getappdirectory.php
	 * @since Yaf >=2.1.4
	 */
	public function getAppDirectory(): \Yaf_Application {}

	/**
	 * 設定情報を取得する
	 * @return Yaf_Config_Abstract <p>Yaf_Config_Abstract のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/yaf-application.getconfig.php
	 * @since Yaf >=1.0.0
	 */
	public function getConfig(): \Yaf_Config_Abstract {}

	/**
	 * Yaf_Dispatcher のインスタンスを取得する
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-application.getdispatcher.php
	 * @since Yaf >=1.0.0
	 */
	public function getDispatcher(): \Yaf_Dispatcher {}

	/**
	 * 直近で発生したエラーのメッセージを取得する
	 * @return string
	 * @link http://php.net/manual/ja/yaf-application.getlasterrormsg.php
	 * @since Yaf >=2.1.2
	 */
	public function getLastErrorMsg(): string {}

	/**
	 * 直近で発生したエラーのコードを取得する
	 * @return int
	 * @link http://php.net/manual/ja/yaf-application.getlasterrorno.php
	 * @since Yaf >=2.1.2
	 */
	public function getLastErrorNo(): int {}

	/**
	 * 定義済みのモジュール名を取得する
	 * <p>設定で定義したモジュールのリストを取得します。 何も定義していない場合は "Index" だけになります。</p>
	 * @return array
	 * @link http://php.net/manual/ja/yaf-application.getmodules.php
	 * @since Yaf >=1.0.0
	 */
	public function getModules(): array {}

	/**
	 * Yaf_Application を開始する
	 * <p>Yaf_Application を実行します。つまり、Yaf_Application がリクエストを受け取ってルーティングし、コントローラのアクションにディスパッチして レスポンスをレンダリングできるようにします。最終的に、レスポンスをクライアントに返します。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-application.run.php
	 * @since Yaf >=1.0.0
	 */
	public function run(): void {}

	/**
	 * アプリケーションディレクトリを変更する
	 * @param string $directory
	 * @return Yaf_Application
	 * @link http://php.net/manual/ja/yaf-application.setappdirectory.php
	 * @since Yaf >=2.1.4
	 */
	public function setAppDirectory(string $directory): \Yaf_Application {}
}

/**
 * <p>ブートストラップとは、アプリケーションを実行する前の初期設定に使う仕組みのことです。</p>
 * <p>ユーザーが自前のブートストラップクラスを定義するには、 <b>Yaf_Bootstrap_Abstract</b> を継承します。</p>
 * <p>ブートストラップクラスで定義したメソッドの中で "_init" で始まるものがすべて、定義した順に <code>Yaf_Application::bootstrap()</code> から呼ばれます。</p>
 * @link http://php.net/manual/ja/class.yaf-bootstrap-abstract.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
abstract class Yaf_Bootstrap_Abstract {

	/**
	 * ブートストラップをコールする
	 * <p>ブートストラップを実行します。"_init" で始まる名前のすべてのメソッドを その定義順に実行します。bootstrap パラメータを省略した場合は、 application.directory からブートストラップを探します。</p>
	 * @param \Yaf_Bootstrap_Abstract $bootstrap <p>Yaf_Bootstrap_Abstract のインスタンス。</p>
	 * @return void <p>Yaf_Application のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/yaf-application.bootstrap.php
	 * @since Yaf >=1.0.0
	 */
	public function bootstrap(\Yaf_Bootstrap_Abstract $bootstrap = NULL): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-config-abstract.php
 * @since Yaf >=1.0.0
 */
abstract class Yaf_Config_Abstract {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-config-abstract.php#yaf-config-abstract.props.config
	 */
	protected $_config;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-config-abstract.php#yaf-config-abstract.props.readonly
	 */
	protected $_readonly;

	/**
	 * ゲッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param mixed $value
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-config-abstract.get.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function get(string $name, $value);

	/**
	 * 設定項目が読み込み専用かどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-config-abstract.readonly.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function readonly(): bool;

	/**
	 * セッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return Yaf_Config_Abstract
	 * @link http://php.net/manual/ja/yaf-config-abstract.set.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function set(): \Yaf_Config_Abstract;

	/**
	 * 配列に変換する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array
	 * @link http://php.net/manual/ja/yaf-config-abstract.toarray.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function toArray(): array;
}

/**
 * <p>Yaf_Config_Ini を使うと、設定データをおなじみの INI 形式で保存でき、アプリケーションからもオブジェクトのプロパティとして読めるようになります。 INI フォーマットを拡張して、設定データを階層構造で扱えるようにしたり 設定セクション間での継承を設定できるようにしたりしています。 設定データの階層は、キーをピリオド(".")で区切って表します。 セクションの継承を表すには、セクション名の後にコロン(":") を続け、その後に継承元のセクション名を指定します。</p>
 * <p><b>注意</b>:</p>
 * <p>Yaf_Config_Ini は、PHP の関数 parse_ini_file() を利用します。 この関数のドキュメントも読んで、その振る舞いを知っておきましょう。 特殊な値、たとえば "<b><code>TRUE</code></b>"、"<b><code>FALSE</code></b>"、"yes"、"no"、そして "<b><code>NULL</code></b>" の扱いも、parse_ini_file() に従います。</p>
 * @link http://php.net/manual/ja/class.yaf-config-ini.php
 * @since Yaf >=1.0.0
 */
class Yaf_Config_Ini extends \Yaf_Config_Abstract implements \Iterator, \ArrayAccess, \Countable {

	/**
	 * Yaf_Config_Ini のコンストラクタ
	 * <p>Yaf_Config_Ini のコンストラクタです。</p>
	 * @param string $config_file <p>INI ファイルへのパス。</p>
	 * @param string $section <p>INI ファイルの中でパースしたいセクション。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-config-ini.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $config_file, string $section = NULL) {}

	/**
	 * The __get purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.get.php
	 * @since Yaf >=1.0.0
	 */
	public function __get(string $name = NULL): void {}

	/**
	 * The __isset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.isset.php
	 * @since Yaf >=1.0.0
	 */
	public function __isset(string $name): void {}

	/**
	 * The __set purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param mixed $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.set.php
	 * @since Yaf >=1.0.0
	 */
	public function __set(string $name, $value): void {}

	/**
	 * The count purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.count.php
	 * @since Yaf >=1.0.0
	 */
	public function count(): void {}

	/**
	 * The current purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.current.php
	 * @since Yaf >=1.0.0
	 */
	public function current(): void {}

	/**
	 * ゲッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param mixed $value
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-config-abstract.get.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function get(string $name, $value);

	/**
	 * The key purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.key.php
	 * @since Yaf >=1.0.0
	 */
	public function key(): void {}

	/**
	 * The next purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.next.php
	 * @since Yaf >=1.0.0
	 */
	public function next(): void {}

	/**
	 * The offsetExists purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.offsetexists.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetExists(string $name): void {}

	/**
	 * The offsetGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.offsetget.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetGet(string $name): void {}

	/**
	 * The offsetSet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.offsetset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetSet(string $name, string $value): void {}

	/**
	 * The offsetUnset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.offsetunset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetUnset(string $name): void {}

	/**
	 * The readonly purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.readonly.php
	 * @since Yaf >=1.0.0
	 */
	public function readonly(): void {}

	/**
	 * The rewind purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.rewind.php
	 * @since Yaf >=1.0.0
	 */
	public function rewind(): void {}

	/**
	 * セッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return Yaf_Config_Abstract
	 * @link http://php.net/manual/ja/yaf-config-abstract.set.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function set(): \Yaf_Config_Abstract;

	/**
	 * PHP の配列を返す
	 * <p>Yaf_Config_Ini から PHP の配列を返します。</p>
	 * @return array
	 * @link http://php.net/manual/ja/yaf-config-ini.toarray.php
	 * @since Yaf >=1.0.0
	 */
	public function toArray(): array {}

	/**
	 * The valid purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-ini.valid.php
	 * @since Yaf >=1.0.0
	 */
	public function valid(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-config-simple.php
 * @since Yaf >=1.0.0
 */
class Yaf_Config_Simple extends \Yaf_Config_Abstract implements \Iterator, \ArrayAccess, \Countable {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-config-simple.php#yaf-config-simple.props.readonly
	 */
	protected $_readonly;

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $config_file
	 * @param string $section
	 * @return self
	 * @link http://php.net/manual/ja/yaf-config-simple.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $config_file, string $section = NULL) {}

	/**
	 * The __get purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.get.php
	 * @since Yaf >=1.0.0
	 */
	public function __get(string $name = NULL): void {}

	/**
	 * The __isset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.isset.php
	 * @since Yaf >=1.0.0
	 */
	public function __isset(string $name): void {}

	/**
	 * The __set purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.set.php
	 * @since Yaf >=1.0.0
	 */
	public function __set(string $name, string $value): void {}

	/**
	 * The count purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.count.php
	 * @since Yaf >=1.0.0
	 */
	public function count(): void {}

	/**
	 * The current purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.current.php
	 * @since Yaf >=1.0.0
	 */
	public function current(): void {}

	/**
	 * ゲッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param mixed $value
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-config-abstract.get.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function get(string $name, $value);

	/**
	 * The key purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.key.php
	 * @since Yaf >=1.0.0
	 */
	public function key(): void {}

	/**
	 * The next purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.next.php
	 * @since Yaf >=1.0.0
	 */
	public function next(): void {}

	/**
	 * The offsetExists purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.offsetexists.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetExists(string $name): void {}

	/**
	 * The offsetGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.offsetget.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetGet(string $name): void {}

	/**
	 * The offsetSet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.offsetset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetSet(string $name, string $value): void {}

	/**
	 * The offsetUnset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.offsetunset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetUnset(string $name): void {}

	/**
	 * The readonly purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.readonly.php
	 * @since Yaf >=1.0.0
	 */
	public function readonly(): void {}

	/**
	 * The rewind purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.rewind.php
	 * @since Yaf >=1.0.0
	 */
	public function rewind(): void {}

	/**
	 * セッター
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return Yaf_Config_Abstract
	 * @link http://php.net/manual/ja/yaf-config-abstract.set.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function set(): \Yaf_Config_Abstract;

	/**
	 * PHP の配列を返す
	 * <p>Yaf_Config_Simple から PHP の配列を返します。</p>
	 * @return array
	 * @link http://php.net/manual/ja/yaf-config-simple.toarray.php
	 * @since Yaf >=1.0.0
	 */
	public function toArray(): array {}

	/**
	 * The valid purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-config-simple.valid.php
	 * @since Yaf >=1.0.0
	 */
	public function valid(): void {}
}

/**
 * <p><b>Yaf_Controller_Abstract</b> は Yaf システムの中心となるクラスです。 MVC は Model-View-Controller の略で、 アプリケーションのロジックと表示のロジックを切り離すためのデザインパターンです。</p>
 * <p>すべてのカスタムコントローラは <b>Yaf_Controller_Abstract</b> を継承する必要があります。</p>
 * <p>カスタムコントローラでは __construct を定義できません。そのため、 <b>Yaf_Controller_Abstract</b> ではマジックメソッド <code>Yaf_Controller_Abstract::init()</code> を用意しています。</p>
 * <p>カスタムコントローラで init() メソッドを定義すると、 コントローラのインスタンスを作成するときにそれが呼ばれます。</p>
 * <p>アクションには引数を持たせることができます。 リクエストが来たときに、もしリクエストのパラメータ (<code>Yaf_Request_Abstract::getParam()</code> を参照ください) に同名の変数があれば、Yaf はアクションのメソッド (<code>Yaf_Action_Abstract::execute()</code> を参照ください) にそれを渡します。</p>
 * <p><b>注意</b>:</p>
 * <p>これらの引数は何もフィルタリングせずそのまま取り込まれるので、 実際に使う前には注意しないといけません。</p>
 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php
 * @since Yaf >=1.0.0
 */
abstract class Yaf_Controller_Abstract {

	/**
	 * @var mixed <p>アクションメソッドを個別の PHP スクリプトとして定義することもできます。 そのときには、このプロパティと Yaf_Action_Abstract を利用します。</p>  <p><b>例1 別ファイルでのアクションの定義</b></p>  <code> &lt;&#63;php<br>class IndexController extends Yaf_Controller_Abstract {<br>    protected $actions = array(<br>        /&#42;&#42; now dummyAction is defined in a separate file &#42;/<br>        "dummy" =&gt; "actions/Dummy_action.php",<br>    );<br><br>    /&#42; action method may have arguments &#42;/<br>    public indexAction($name, $id) {<br>       /&#42; $name and $id are unsafe raw data &#42;/<br>       assert($name == $this-&gt;getRequest()-&gt;getParam("name"));<br>       assert($id   == $this-&gt;_request-&gt;getParam("id"));<br>    }<br>}<br>&#63;&gt;  </code>    <p><b>例2 Dummy_action.php</b></p>  <code> &lt;&#63;php<br>class DummyAction extends Yaf_Action_Abstract {<br>    /&#42; a action class shall define this method  as the entry point &#42;/<br>    public execute() {<br>    }<br>}<br>&#63;&gt;  </code>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.actions
	 */
	public $actions;

	/**
	 * @var mixed <p>モジュール名</p>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.module
	 */
	protected $_module;

	/**
	 * @var mixed <p>コントローラ名</p>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.name
	 */
	protected $_name;

	/**
	 * @var mixed <p>現在のリクエストオブジェクト</p>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.request
	 */
	protected $_request;

	/**
	 * @var mixed <p>現在のレスポンスオブジェクト</p>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.response
	 */
	protected $_response;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.invoke-args
	 */
	protected $_invoke_args;

	/**
	 * @var mixed <p>ビューエンジンオブジェクト</p>
	 * @link http://php.net/manual/ja/class.yaf-controller-abstract.php#yaf-controller-abstract.props.view
	 */
	protected $_view;

	/**
	 * Yaf_Controller_Abstract はクローンできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.clone.php
	 * @since Yaf >=1.0.0
	 */
	final private function __clone() {}

	/**
	 * Yaf_Controller_Abstract のコンストラクタ
	 * <p><b>Yaf_Controller_Abstract::__construct()</b> は final メソッドなので、 オーバーライドできません。 <code>Yaf_Controller_Abstract::init()</code> を参照ください。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-controller-abstract.construct.php
	 * @since Yaf >=1.0.0
	 */
	final private function __construct() {}

	/**
	 * The display purpose
	 * @param string $tpl
	 * @param array $parameters
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-controller-abstract.display.php
	 * @since Yaf >=1.0.0
	 */
	protected function display(string $tpl, array $parameters = NULL): bool {}

	/**
	 * アクションのエントリポイント
	 * <p>このメソッドは、アクションで常に定義しないといけません。これがアクションのエントリポイントになります。 <b>Yaf_Action_Abstract::execute()</b> は引数をとることもあります。</p><p><b>注意</b>:</p><p>リクエストから取得した値は安全ではありません。 使う前にフィルタリングが必要です。</p>
	 * @param mixed $arg
	 * @param mixed $_
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-action-abstract.execute.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function execute($arg = NULL, $_ = NULL);

	/**
	 * 別のアクションに転送する
	 * <p>現在の実行プロセスを別のアクションに転送します。</p><p><b>注意</b>:</p><p>このメソッドは、その場ですぐに次のアクションに切り替えるわけではなく、 現在の実行フローが終わってから次のアクションに転送します。</p>
	 * @param string $action <p>移動先のアクション名。</p>
	 * @param array $paramters <p>呼び出しの引数。</p>
	 * @return void <p>失敗した場合は FALSE を返します。</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.forward.php
	 * @since Yaf >=1.0.0
	 */
	public function forward(string $action, array $paramters = NULL): void {}

	/**
	 * The getInvokeArg purpose
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getinvokearg.php
	 * @since Yaf >=1.0.0
	 */
	public function getInvokeArg(string $name): void {}

	/**
	 * The getInvokeArgs purpose
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getinvokeargs.php
	 * @since Yaf >=1.0.0
	 */
	public function getInvokeArgs(): void {}

	/**
	 * モジュール名を取得する
	 * <p>コントローラのモジュール名を取得します。</p>
	 * @return string
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function getModuleName(): string {}

	/**
	 * The getParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $default
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparam.php
	 * @since Yaf >=1.0.0
	 */
	public function getParam(string $name, string $default = NULL): void {}

	/**
	 * 現在のリクエストオブジェクトを取得する
	 * <p>現在のリクエストオブジェクトを取得します。</p>
	 * @return Yaf_Request_Abstract <p>Yaf_Request_Abstract instance</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequest(): \Yaf_Request_Abstract {}

	/**
	 * 現在のレスポンスオブジェクトを取得する
	 * <p>現在のレスポンスオブジェクトを取得します。</p>
	 * @return Yaf_Response_Abstract <p>Yaf_Response_Abstract instance</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getresponse.php
	 * @since Yaf >=1.0.0
	 */
	public function getResponse(): \Yaf_Response_Abstract {}

	/**
	 * ビューエンジンを取得する
	 * <p>ビューエンジンを取得します。</p>
	 * @return Yaf_View_Interface
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getview.php
	 * @since Yaf >=1.0.0
	 */
	public function getView(): \Yaf_View_Interface {}

	/**
	 * The getViewpath purpose
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.getviewpath.php
	 * @since Yaf >=1.0.0
	 */
	public function getViewpath(): void {}

	/**
	 * コントローラを初期化する
	 * <p><code>Yaf_Controller_Abstract::__construct()</code> は final メソッドなので、 オーバーライドできません。しかし、かわりに <b>Yaf_Controller_Abstract::init()</b> を定義できます。 これは、コントローラオブジェクトのインスタンスができた直後に呼ばれます。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.init.php
	 * @since Yaf >=1.0.0
	 */
	public function init(): void {}

	/**
	 * The initView purpose
	 * @param array $options
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.initview.php
	 * @since Yaf >=1.0.0
	 */
	public function initView(array $options = NULL): void {}

	/**
	 * URL にリダイレクトする
	 * <p>302 ヘッダを送出して、URL にリダイレクトします。</p>
	 * @param string $url <p>場所を表す URL。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-controller-abstract.redirect.php
	 * @since Yaf >=1.0.0
	 */
	public function redirect(string $url): bool {}

	/**
	 * ビューテンプレートをレンダリングする
	 * @param string $tpl
	 * @param array $parameters
	 * @return string
	 * @link http://php.net/manual/ja/yaf-controller-abstract.render.php
	 * @since Yaf >=1.0.0
	 */
	protected function render(string $tpl, array $parameters = NULL): string {}

	/**
	 * The setViewpath purpose
	 * @param string $view_directory
	 * @return void
	 * @link http://php.net/manual/ja/yaf-controller-abstract.setviewpath.php
	 * @since Yaf >=1.0.0
	 */
	public function setViewpath(string $view_directory): void {}
}

/**
 * <p><b>Yaf_Dispatcher</b> の役割は、 リクエスト環境の初期化、やってきたリクエストのルーティング、 そして見つかったアクションへのディスパッチです。 あらゆるレスポンスを取りまとめ、処理が完了した後でそれを返します。</p>
 * <p><b>Yaf_Dispatcher</b> はシングルトンパターンを実装しています。 つまり、同時に複数のインスタンスは作れないということです。 そのため、このクラスをレジストリとして使い、 ディスパッチ中に他のオブジェクトから参照させることもできます。</p>
 * @link http://php.net/manual/ja/class.yaf-dispatcher.php
 * @since Yaf >=1.0.0
 */
final class Yaf_Dispatcher {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.router
	 */
	protected $_router;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.view
	 */
	protected $_view;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.request
	 */
	protected $_request;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.plugins
	 */
	protected $_plugins;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.instance
	 */
	protected static $_instance;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.auto-render
	 */
	protected $_auto_render;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.return-response
	 */
	protected $_return_response;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.instantly-flush
	 */
	protected $_instantly_flush;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.default-module
	 */
	protected $_default_module;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.default-controller
	 */
	protected $_default_controller;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-dispatcher.php#yaf-dispatcher.props.default-action
	 */
	protected $_default_action;

	/**
	 * Yaf_Dispatcher はクローンできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-dispatcher.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Dispatcher のコンストラクタ
	 * @return self
	 * @link http://php.net/manual/ja/yaf-dispatcher.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * Yaf_Dispatcher はシリアライズできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-dispatcher.sleep.php
	 * @since Yaf >=1.0.0
	 */
	private function __sleep(): void {}

	/**
	 * Yaf_Dispatcher はデシリアライズできない
	 * @return void
	 * @link http://php.net/manual/ja/yaf-dispatcher.wakeup.php
	 * @since Yaf >=1.0.0
	 */
	private function __wakeup(): void {}

	/**
	 * 自動レンダリングのオン/オフを切り替える
	 * <p>Yaf_Dispatcher は リクエストをディスパッチした後で自動的にレンダリングします。 これを無効にするには、 <code>flag</code> を <b><code>TRUE</code></b> としてこのメソッドを実行します。</p><p><b>注意</b>:</p><p>アクションで <b><code>FALSE</code></b> を返せば、そのアクションでの自動レンダリングを回避できます。</p>
	 * @param bool $flag <p>bool</p> <p><b>注意</b>:</p> <p>2.2.0 以降は、このパラメータを省略した場合に現在の状態を返すようになりました。</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.autorender.php
	 * @since Yaf >=1.0.0
	 */
	public function autoRender(bool $flag = NULL): \Yaf_Dispatcher {}

	/**
	 * 例外のキャッチのオン/オフを切り替える
	 * <p>application.dispatcher.throwException が On (あるいは <b>Yaf_Dispatcher::throwException(TRUE)()</b> で有効にした) 他愛、Yaf でエラーが発生したときに例外をスローします。</p><p>そのとき、<b>Yaf_Dispatcher::catchException()</b> を有効にする (あるいは application.dispatcher.catchException で有効にする) と、 もし ErrorController::error を定義していれば キャッチしなかった例外はすべて ErrorController::error に送られます。</p>
	 * @param bool $flag <p>bool</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.catchexception.php
	 * @since Yaf >=1.0.0
	 */
	public function catchException(bool $flag = NULL): \Yaf_Dispatcher {}

	/**
	 * ビューのレンダリングを無効にする
	 * <p>ビューエンジンを無効にします。ユーザーが自分自身で出力しているようなアプリケーションで利用します。</p><p><b>注意</b>:</p><p>アクションで <b><code>FALSE</code></b> を返せば、そのアクションでの自動レンダリングを回避できます。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-dispatcher.disableview.php
	 * @since Yaf >=1.0.0
	 */
	public function disableView(): bool {}

	/**
	 * リクエストをディスパッチする
	 * <p>このメソッドが、 Yaf_Dispatcher の主要な作業をします。 リクエストオブジェクトを受け取ります。</p><p>ディスパッチ処理には、次の三段階があります。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return Yaf_Response_Abstract
	 * @link http://php.net/manual/ja/yaf-dispatcher.dispatch.php
	 * @since Yaf >=1.0.0
	 */
	public function dispatch(\Yaf_Request_Abstract $request): \Yaf_Response_Abstract {}

	/**
	 * ビューのレンダリングを有効にする
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.enableview.php
	 * @since Yaf >=1.0.0
	 */
	public function enableView(): \Yaf_Dispatcher {}

	/**
	 * その場でのフラッシュのオン/オフを切り替える
	 * @param bool $flag <p>bool</p> <p><b>注意</b>:</p> <p>2.2.0 以降は、このパラメータを省略した場合に現在の状態を返すようになりました。</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.flushinstantly.php
	 * @since Yaf >=1.0.0
	 */
	public function flushInstantly(bool $flag = NULL): \Yaf_Dispatcher {}

	/**
	 * アプリケーションを取得する
	 * <p>Yaf_Application のインスタンスを取得します。 <code>Yaf_Application::app()</code> と同じです。</p>
	 * @return Yaf_Application
	 * @link http://php.net/manual/ja/yaf-dispatcher.getapplication.php
	 * @since Yaf >=1.0.0
	 */
	public function getApplication(): \Yaf_Application {}

	/**
	 * ディスパッチャのインスタンスを取得する
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.getinstance.php
	 * @since Yaf >=1.0.0
	 */
	public static function getInstance(): \Yaf_Dispatcher {}

	/**
	 * リクエストのインスタンスを取得する
	 * @return Yaf_Request_Abstract
	 * @link http://php.net/manual/ja/yaf-dispatcher.getrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequest(): \Yaf_Request_Abstract {}

	/**
	 * ルーターのインスタンスを取得する
	 * @return Yaf_Router
	 * @link http://php.net/manual/ja/yaf-dispatcher.getrouter.php
	 * @since Yaf >=1.0.0
	 */
	public function getRouter(): \Yaf_Router {}

	/**
	 * ビューを初期化して返す
	 * @param string $templates_dir
	 * @param array $options
	 * @return Yaf_View_Interface
	 * @link http://php.net/manual/ja/yaf-dispatcher.initview.php
	 * @since Yaf >=1.0.0
	 */
	public function initView(string $templates_dir, array $options = NULL): \Yaf_View_Interface {}

	/**
	 * プラグインを登録する
	 * <p>プラグイン (Yaf_Plugin_Abstract を参照) を登録します。ふつうは、プラグインの登録はブートストラップ (Yaf_Bootstrap_Abstract を参照) で行います。</p>
	 * @param \Yaf_Plugin_Abstract $plugin
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.registerplugin.php
	 * @since Yaf >=1.0.0
	 */
	public function registerPlugin(\Yaf_Plugin_Abstract $plugin): \Yaf_Dispatcher {}

	/**
	 * The returnResponse purpose
	 * @param bool $flag
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.returnresponse.php
	 * @since Yaf >=1.0.0
	 */
	public function returnResponse(bool $flag): \Yaf_Dispatcher {}

	/**
	 * デフォルトのアクション名を変更する
	 * @param string $action
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setdefaultaction.php
	 * @since Yaf >=1.0.0
	 */
	public function setDefaultAction(string $action): \Yaf_Dispatcher {}

	/**
	 * デフォルトのコントローラ名を変更する
	 * @param string $controller
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setdefaultcontroller.php
	 * @since Yaf >=1.0.0
	 */
	public function setDefaultController(string $controller): \Yaf_Dispatcher {}

	/**
	 * デフォルトのモジュール名を変更する
	 * @param string $module
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setdefaultmodule.php
	 * @since Yaf >=1.0.0
	 */
	public function setDefaultModule(string $module): \Yaf_Dispatcher {}

	/**
	 * エラーハンドラを設定する
	 * <p>Yaf のエラーハンドラを設定します。application.dispatcher.throwException がオフの場合は、予期せぬエラーが発生した場合に Yaf はキャッチ可能なエラーを発生させます。</p><p>従って、このエラーハンドラが呼ばれる一方でエラーも発生します。</p>
	 * @param \call $callback <p>コールバック。</p>
	 * @param int $error_types
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.seterrorhandler.php
	 * @since Yaf >=1.0.0
	 */
	public function setErrorHandler(\call $callback, int $error_types): \Yaf_Dispatcher {}

	/**
	 * The setRequest purpose
	 * @param \Yaf_Request_Abstract $request
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function setRequest(\Yaf_Request_Abstract $request): \Yaf_Dispatcher {}

	/**
	 * カスタムビューエンジンを設定する
	 * <p>このメソッドは、Yaf_View_Simple ではなくカスタムビューエンジンを使いたいときに利用します。</p>
	 * @param \Yaf_View_Interface $view <p>Yaf_View_Interface のインスタンス。</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setview.php
	 * @since Yaf >=1.0.0
	 */
	public function setView(\Yaf_View_Interface $view): \Yaf_Dispatcher {}

	/**
	 * 例外のスローのオン/オフを切り替える
	 * <p>予期せぬエラーが発生した場合に例外をスローするかどうかを切り替えます。 オンにすると、Yaf はキャッチ可能なエラーを発生させるのではなく例外をスローするようになります。</p><p> application.dispatcher.throwException を使って同じ設定をすることもできます。</p>
	 * @param bool $flag <p>bool</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.throwexception.php
	 * @since Yaf >=1.0.0
	 */
	public function throwException(bool $flag = NULL): \Yaf_Dispatcher {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception extends \Exception {

	/**
	 * @var string <p>例外メッセージ</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.message
	 */
	protected $message;

	/**
	 * @var int <p>例外コード</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.code
	 */
	protected $code;

	/**
	 * @var string <p>例外が作られたファイル名</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.file
	 */
	protected $file;

	/**
	 * @var int <p>例外が作られた行</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.line
	 */
	protected $line;

	/**
	 * 例外をコピーする
	 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @since PHP 5, PHP 7
	 */
	final private function __clone() {}

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * 例外の文字列表現
	 * <p>例外を文字列で表現したものを返します。</p>
	 * @return string <p>例外を文字列で表現したものを返します。</p>
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @since PHP 5, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * 例外コードを取得する
	 * <p>例外コードを返します。</p>
	 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @since PHP 5, PHP 7
	 */
	final public function getCode() {}

	/**
	 * 例外が作られたファイルを取得する
	 * <p>例外が作られたファイルの名前を取得します。</p>
	 * @return string <p>例外が作られたファイルの名前を返します。</p>
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @since PHP 5, PHP 7
	 */
	final public function getFile(): string {}

	/**
	 * 例外が作られた行を取得する
	 * <p>例外が作られた行番号を取得します。</p>
	 * @return int <p>例外が作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @since PHP 5, PHP 7
	 */
	final public function getLine(): int {}

	/**
	 * 例外メッセージを取得する
	 * <p>例外メッセージを返します。</p>
	 * @return string <p>例外メッセージ文字列を返します。</p>
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @since PHP 5, PHP 7
	 */
	final public function getMessage(): string {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}

	/**
	 * スタックトレースを取得する
	 * <p>例外のスタックトレースを返します。</p>
	 * @return array <p>例外のスタックトレースを配列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTrace(): array {}

	/**
	 * スタックトレースを文字列で取得する
	 * <p>例外のスタックトレースを文字列で返します。</p>
	 * @return string <p>例外のスタックトレースを文字列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTraceAsString(): string {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-dispatchfailed.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_DispatchFailed extends \Yaf_Exception {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-loadfailed.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_LoadFailed extends \Yaf_Exception {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-loadfailed-action.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_LoadFailed_Action extends \Yaf_Exception_LoadFailed {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-loadfailed-controller.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_LoadFailed_Controller extends \Yaf_Exception_LoadFailed {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-loadfailed-module.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_LoadFailed_Module extends \Yaf_Exception_LoadFailed {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-loadfailed-view.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_LoadFailed_View extends \Yaf_Exception_LoadFailed {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-routerfailed.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_RouterFailed extends \Yaf_Exception {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-startuperror.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_StartupError extends \Yaf_Exception {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-exception-typeerror.php
 * @since Yaf >=1.0.0
 */
class Yaf_Exception_TypeError extends \Yaf_Exception {

	/**
	 * コンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-exception.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The getPrevious purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-exception.getprevious.php
	 * @since Yaf >=1.0.0
	 */
	public function getPrevious(): void {}
}

/**
 * <p><b>Yaf_Loader</b> は、 Yaf 用に包括的なオートローディング機能を導入します。</p>
 * <p>最初に Yaf_Application のインスタンスを取得するときに、 <b>Yaf_Loader</b> はシングルトンのインスタンスを作って それを spl_autoload に登録します。このインスタンスを取得するには <code>Yaf_Loader::getInstance()</code> を使います。</p>
 * <p><b>Yaf_Loader</b> は、クラスのロードを一度だけ試みます。 失敗した場合の挙動は yaf.use_spl_auload によって変わります。もしこの設定が On なら <code>Yaf_Loader::autoload()</code> は <b><code>FALSE</code></b> を返し、 他のオートロード関数でやり直せるようになります。この設定が Off (デフォルト) の場合は <code>Yaf_Loader::autoload()</code> が <b><code>TRUE</code></b> を返します。 そして、より重要なのは、このときに警告メッセージが出ることです (このメッセージを見れば、なぜロードできなかったのかがわかります)。</p>
 * <p><b>注意</b>:</p>
 * <p>yaf.use_spl_autoload はできるだけ Off のままにしておきましょう。 ただし、何かのライブラリが自前のオートロード機構を持っていて、 それを置き換えるのが不可能だという場合は別です。</p>
 * <p>デフォルトでは、<b>Yaf_Loader</b> はすべてのライブラリ (クラスを定義したスクリプト) が グローバル ライブラリディレクトリ に格納されているものとみなします。このディレクトリは、 php.ini (yaf.library) で指定します。</p>
 * <p><b>Yaf_Loader</b> がクラス (ライブラリ) を探すときに ローカルクラスディレクトリ (application.ini で定義するもので、デフォルトは application.directory . "/library") も検索対象とさせたい場合は、クラスのプレフィックスを <code>Yaf_Loader::registerLocalNameSpace()</code> で登録する必要があります。</p>
 * <p>いくつか例を示します (APPLICATION_PATH は application.directory であるものとします)。</p>
 * <p><b>例1 設定の例</b></p>
 * <p><b>例2 localnamespace の登録</b></p>
 * <p><b>例3 クラスのロード</b></p>
 * <p><b>例4 名前空間つきのクラスのロード</b></p>
 * <p>すべてのフォルダの先頭が大文字になっているのが気になる場合は、php.ini で yaf.lowcase_path = On とすれば小文字にすることもできます。</p>
 * <p><b>Yaf_Loader</b> は MVC クラスを読み込むようにも作られています。 次のような規約に従います。</p>
 * <p><b>例5 MVC クラスのロード</b></p>
 * <p><b>例6 MVC クラスかどうかの区別</b></p>
 * <p><b>例7 MVC のロード</b></p>
 * <p><b>注意</b>:</p>
 * <p>2.1.18 からは、Yaf はユーザースクリプト側からのコントローラのオートロードに対応しました (つまり、ユーザーが書いた PHP スクリプトからオートロードを実行できるということです。 ブートストラップやプラグインから、コントローラの静的プロパティにアクセスできます)。 しかし、オートローダーがコントローラクラスを探す場所は、デフォルトのモジュールフォルダつまり "APPLICATION_PATH/controllers/" だけになります。</p>
 * @link http://php.net/manual/ja/class.yaf-loader.php
 * @since Yaf >=1.0.0
 */
class Yaf_Loader {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-loader.php#yaf-loader.props.local-ns
	 */
	protected $_local_ns;

	/**
	 * @var mixed <p>デフォルトでは、この値は application.directory . "/library" となります。この値を変更するには、application.ini (application.library) で設定するか、あるいは <code>Yaf_Loader::setLibraryPath()</code> をコールします。</p>
	 * @link http://php.net/manual/ja/class.yaf-loader.php#yaf-loader.props.library
	 */
	protected $_library;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-loader.php#yaf-loader.props.global-library
	 */
	protected $_global_library;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-loader.php#yaf-loader.props.instance
	 */
	static $_instance;

	/**
	 * The __clone purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * The __construct purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-loader.construct.php
	 * @since Yaf >=1.0.0
	 */
	private function __construct() {}

	/**
	 * The __sleep purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.sleep.php
	 * @since Yaf >=1.0.0
	 */
	private function __sleep(): void {}

	/**
	 * The __wakeup purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.wakeup.php
	 * @since Yaf >=1.0.0
	 */
	private function __wakeup(): void {}

	/**
	 * The autoload purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.autoload.php
	 * @since Yaf >=1.0.0
	 */
	public function autoload(): void {}

	/**
	 * The clearLocalNamespace purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.clearlocalnamespace.php
	 * @since Yaf >=1.0.0
	 */
	public function clearLocalNamespace(): void {}

	/**
	 * The getInstance purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.getinstance.php
	 * @since Yaf >=1.0.0
	 */
	public static function getInstance(): void {}

	/**
	 * ライブラリパスを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $is_global
	 * @return Yaf_Loader
	 * @link http://php.net/manual/ja/yaf-loader.getlibrarypath.php
	 * @since Yaf >=2.1.4
	 */
	public function getLibraryPath(bool $is_global = false): \Yaf_Loader {}

	/**
	 * The getLocalNamespace purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.getlocalnamespace.php
	 * @since Yaf >=1.0.0
	 */
	public function getLocalNamespace(): void {}

	/**
	 * The import purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.import.php
	 * @since Yaf >=1.0.0
	 */
	public static function import(): void {}

	/**
	 * The isLocalName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-loader.islocalname.php
	 * @since Yaf >=1.0.0
	 */
	public function isLocalName(): void {}

	/**
	 * ローカルクラスプレフィックスを登録する
	 * <p>ローカルクラスプレフィックスを登録します。 Yaf_Loader がクラスを探すときには、二つのライブラリディレクトリを探します。 一方は application.ini の application.library.directory(in で設定したもので、これをローカルライブラリディレクトリと呼びます。 もう一方は php.ini の yaf.library で設定したもので、これをグローバルライブラリディレクトリと呼びます。 同一サーバー内のいろんなアプリケーションで共有できるからです。</p><p>オートロード時に、Yaf_Loader がどちらのライブラリディレクトリを探すのかを判断します。 その際には、存在しないクラス名のプレフィックスを判断材料にします。 プレフィックスの名前が localnamespace として登録されていれば ローカルライブラリディレクトリから探し、そうでなければグローバルライブラリディレクトリから探します。</p><p><b>注意</b>:</p><p>yaf.library が設定されていない場合、グローバルライブラリディレクトリは ローカルライブラリディレクトリと同じ場所であるとみなします。 その場合、オートロード時にはすべてローカルライブラリディレクトリを探します。 Yaf アプリケーションを強くするには、 自分のクラスはローカルクラスとして登録するようにしましょう。</p>
	 * @param mixed $prefix <p>クラス名のプレフィックスを表す文字列あるいは配列。 ローカルライブラリパスにある、このプレフィックスを含むすべてのクラスが読み込まれます。</p>
	 * @return void <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-loader.registerlocalnamespace.php
	 * @since Yaf >=1.0.0
	 */
	public function registerLocalNamespace($prefix): void {}

	/**
	 * ライブラリパスを変更する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $directory
	 * @param bool $is_global
	 * @return Yaf_Loader
	 * @link http://php.net/manual/ja/yaf-loader.setlibrarypath.php
	 * @since Yaf >=2.1.4
	 */
	public function setLibraryPath(string $directory, bool $is_global = false): \Yaf_Loader {}
}

/**
 * <p>プラグインを使えば、フレームワークの拡張やカスタマイズを簡単に行えます。</p>
 * <p>プラグインは、クラスとして定義します。 実際のクラスの定義はコンポーネントによって異なります。 このインターフェイスを実装する必要があるかもしれませんが、 プラグイン自体がクラスであるという事実は変わりません。</p>
 * <p>プラグインを Yaf にロードするには <code>Yaf_Dispatcher::registerPlugin()</code> を使います。登録を済ませれば、このインターフェイスに従って実装した すべてのメソッドが適切な場面で呼ばれます。</p>
 * @link http://php.net/manual/ja/class.yaf-plugin-abstract.php
 * @since Yaf >=1.0.0
 */
class Yaf_Plugin_Abstract {

	/**
	 * The dispatchLoopShutdown purpose
	 * <p>これは、Yaf プラグインのフックシステム内での最後のフックです。 このメソッドを実装したカスタムプラグインは、 ディスパッチループが終了したときに呼ばれます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.dispatchloopshutdown.php
	 * @since Yaf >=1.0.0
	 */
	public function dispatchLoopShutdown(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * The dispatchLoopStartup purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.dispatchloopstartup.php
	 * @since Yaf >=1.0.0
	 */
	public function dispatchLoopStartup(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * The postDispatch purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.postdispatch.php
	 * @since Yaf >=1.0.0
	 */
	public function postDispatch(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * The preDispatch purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.predispatch.php
	 * @since Yaf >=1.0.0
	 */
	public function preDispatch(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * The preResponse purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.preresponse.php
	 * @since Yaf >=1.0.0
	 */
	public function preResponse(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * プラグインを登録する
	 * <p>プラグイン (Yaf_Plugin_Abstract を参照) を登録します。ふつうは、プラグインの登録はブートストラップ (Yaf_Bootstrap_Abstract を参照) で行います。</p>
	 * @param \Yaf_Plugin_Abstract $plugin
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.registerplugin.php
	 * @since Yaf >=1.0.0
	 */
	public function registerPlugin(\Yaf_Plugin_Abstract $plugin): \Yaf_Dispatcher {}

	/**
	 * The routerShutdown purpose
	 * <p>このフックが動くのは、ルーティングが終了したときです。 このフックは、ログインのチェックなどでよく使います。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.routershutdown.php
	 * @since Yaf >=1.0.0
	 */
	public function routerShutdown(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}

	/**
	 * RouterStartup フック
	 * <p>これは、Yaf プラグインのフックシステム内での最初のフックです。 このメソッドを実装したカスタムプラグインは、 ルーティングを始める前に呼ばれます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @param \Yaf_Response_Abstract $response
	 * @return void
	 * @link http://php.net/manual/ja/yaf-plugin-abstract.routerstartup.php
	 * @since Yaf >=1.0.0
	 */
	public function routerStartup(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response): void {}
}

/**
 * <p><b>Yaf_Registry</b> のすべてのメソッドは静的メソッドとして宣言されており、 どこからでもアクセスできます。これを使えば、コードのどこからでも必要に応じて 任意のデータを保存したり取得したりすることができます。</p>
 * @link http://php.net/manual/ja/class.yaf-registry.php
 * @since Yaf >=1.0.0
 */
class Yaf_Registry {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-registry.php#yaf-registry.props.instance
	 */
	static $_instance;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-registry.php#yaf-registry.props.entries
	 */
	protected $_entries;

	/**
	 * The __clone purpose
	 * @return void
	 * @link http://php.net/manual/ja/yaf-registry.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Registry はシングルトンを実装する
	 * @return self
	 * @link http://php.net/manual/ja/yaf-registry.construct.php
	 * @since Yaf >=1.0.0
	 */
	private function __construct() {}

	/**
	 * アイテムをレジストリから削除する
	 * <p>アイテムをレジストリから削除します。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-registry.del.php
	 * @since Yaf >=1.0.0
	 */
	public static function del(string $name): void {}

	/**
	 * アイテムをレジストリから取得する
	 * <p>アイテムをレジストリから取得します。</p>
	 * @param string $name
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-registry.get.php
	 * @since Yaf >=1.0.0
	 */
	public static function get(string $name) {}

	/**
	 * アイテムが存在するかどうかを調べる
	 * <p>アイテムが存在するかどうかを調べます。</p>
	 * @param string $name
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-registry.has.php
	 * @since Yaf >=1.0.0
	 */
	public static function has(string $name): bool {}

	/**
	 * アイテムをレジストリに追加する
	 * <p>アイテムをレジストリに追加します。</p>
	 * @param string $name
	 * @param string $value
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-registry.set.php
	 * @since Yaf >=1.0.0
	 */
	public static function set(string $name, string $value): bool {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-request-abstract.php
 * @since Yaf >=1.0.0
 */
class Yaf_Request_Abstract {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php
	 */
	const SCHEME_HTTP = 'http';

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php
	 */
	const SCHEME_HTTPS = 'https';

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.module
	 */
	public $module;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.controller
	 */
	public $controller;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.action
	 */
	public $action;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.method
	 */
	public $method;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.params
	 */
	protected $params;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.language
	 */
	protected $language;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.exception
	 */
	protected $_exception;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.base-uri
	 */
	protected $_base_uri;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.uri
	 */
	protected $uri;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.dispatched
	 */
	protected $dispatched;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-request-abstract.php#yaf-request-abstract.props.routed
	 */
	protected $routed;

	/**
	 * The getActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function getActionName(): void {}

	/**
	 * The getBaseUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function getBaseUri(): void {}

	/**
	 * The getControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function getControllerName(): void {}

	/**
	 * ENV 変数を取得する
	 * <p>ENV 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getenv.php
	 * @since Yaf >=1.0.0
	 */
	public function getEnv(string $name, string $default = NULL): void {}

	/**
	 * The getException purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getexception.php
	 * @since Yaf >=1.0.0
	 */
	public function getException(): void {}

	/**
	 * The getLanguage purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getlanguage.php
	 * @since Yaf >=1.0.0
	 */
	public function getLanguage(): void {}

	/**
	 * The getMethod purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmethod.php
	 * @since Yaf >=1.0.0
	 */
	public function getMethod(): void {}

	/**
	 * The getModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function getModuleName(): void {}

	/**
	 * The getParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $default
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparam.php
	 * @since Yaf >=1.0.0
	 */
	public function getParam(string $name, string $default = NULL): void {}

	/**
	 * The getParams purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparams.php
	 * @since Yaf >=1.0.0
	 */
	public function getParams(): void {}

	/**
	 * The getRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getrequesturi.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequestUri(): void {}

	/**
	 * SERVER 変数を取得する
	 * <p>SERVER 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getserver.php
	 * @since Yaf >=1.0.0
	 */
	public function getServer(string $name, string $default = NULL): void {}

	/**
	 * The isCli purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.iscli.php
	 * @since Yaf >=1.0.0
	 */
	public function isCli(): void {}

	/**
	 * The isDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function isDispatched(): void {}

	/**
	 * The isGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isget.php
	 * @since Yaf >=1.0.0
	 */
	public function isGet(): void {}

	/**
	 * The isHead purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ishead.php
	 * @since Yaf >=1.0.0
	 */
	public function isHead(): void {}

	/**
	 * The isOptions purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isoptions.php
	 * @since Yaf >=1.0.0
	 */
	public function isOptions(): void {}

	/**
	 * The isPost purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ispost.php
	 * @since Yaf >=1.0.0
	 */
	public function isPost(): void {}

	/**
	 * The isPut purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isput.php
	 * @since Yaf >=1.0.0
	 */
	public function isPut(): void {}

	/**
	 * The isRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function isRouted(): void {}

	/**
	 * The isXmlHttpRequest purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isxmlhttprequest.php
	 * @since Yaf >=1.0.0
	 */
	public function isXmlHttpRequest(): void {}

	/**
	 * The setActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $action
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function setActionName(string $action): void {}

	/**
	 * ベース URI を設定する
	 * <p>ベース URI を設定します。ベース URI はルーティング時に使います。 ルーティングの際にはリクエスト URI を使ってリクエストを振り分けますが、 そのときに、ベース URI を使ってリクエスト URI の先頭部分を読み飛ばします。 たとえば、リクエスト URI が a/b/c でベース URI が "a/b" の場合、"/c" の部分だけを使ってルーティングします。</p><p><b>注意</b>:</p><p>普通はこれを設定する必要はありません。Yaf が自動的に判断します。</p>
	 * @param string $uir <p>ベース URI。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-request-abstract.setbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function setBaseUri(string $uir): bool {}

	/**
	 * The setControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $controller
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function setControllerName(string $controller): void {}

	/**
	 * The setDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function setDispatched(): void {}

	/**
	 * The setModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $module
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function setModuleName(string $module): void {}

	/**
	 * The setParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setparam.php
	 * @since Yaf >=1.0.0
	 */
	public function setParam(string $name, string $value = NULL): void {}

	/**
	 * The setRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $uir
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrequesturi.php
	 * @since Yaf >=2.1.0
	 */
	public function setRequestUri(string $uir): void {}

	/**
	 * The setRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $flag
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function setRouted(string $flag = NULL): void {}
}

/**
 * <p>クライアントからのあらゆるリクエストは、 <b>Yaf_Request_Http</b> として初期化されます。 URI のクエリ文字列や POST パラメータなどの情報は、このクラスのメソッド経由で取得できます。</p>
 * <p><b>注意</b>:</p>
 * <p>セキュリティの観点から、Yaf では $_GET/$_POST が読み込み専用となっています。つまり、 これらのグローバル変数の値を書き換えたとしても、 <b>Yaf_Request_Http::getQurey()</b> や <code>Yaf_Request_Http::getPost()</code> からはそれを取得できないということです。</p>
 * <p>しかし、ユニットテストの際などに、どうしても書き換えが必要になることもあります。 Yaf のビルド時に --enable-yaf-debug を指定すると、ユーザーがスクリプトで設定した値も Yaf で読み込めるようになります。</p>
 * <p>その際に、Yaf は E_STRICT レベルの警告 「Strict Standards: you are running yaf in debug mode」を発します。</p>
 * @link http://php.net/manual/ja/class.yaf-request-http.php
 * @since Yaf >=1.0.0
 */
class Yaf_Request_Http extends \Yaf_Request_Abstract {

	/**
	 * The __clone purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-http.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Request_Http のコンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $request_uri
	 * @param string $base_uri
	 * @return self
	 * @link http://php.net/manual/ja/yaf-request-http.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $request_uri = NULL, string $base_uri = NULL) {}

	/**
	 * クライアントからの変数を取得する
	 * <p>クライアントからの変数を取得します。このメソッドは、まずリクエストのパラメータから <code>name</code> を探し、見つからない場合は POST、GET、Cookie、Server を調べます。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-request-http.get.php
	 * @since Yaf >=1.0.0
	 */
	public function get(string $name, string $default = NULL) {}

	/**
	 * The getActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function getActionName(): void {}

	/**
	 * The getBaseUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function getBaseUri(): void {}

	/**
	 * The getControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function getControllerName(): void {}

	/**
	 * Cookie 変数を取得する
	 * <p>Cookie 変数を取得します。</p>
	 * @param string $name <p>クッキー名。</p>
	 * @param string $default <p>このパラメータを指定すると、クッキーが見つからない場合にこの値を返すようになります。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-request-http.getcookie.php
	 * @since Yaf >=1.0.0
	 */
	public function getCookie(string $name, string $default = NULL) {}

	/**
	 * ENV 変数を取得する
	 * <p>ENV 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getenv.php
	 * @since Yaf >=1.0.0
	 */
	public function getEnv(string $name, string $default = NULL): void {}

	/**
	 * The getException purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getexception.php
	 * @since Yaf >=1.0.0
	 */
	public function getException(): void {}

	/**
	 * The getFiles purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-http.getfiles.php
	 * @since Yaf >=1.0.0
	 */
	public function getFiles(): void {}

	/**
	 * The getLanguage purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getlanguage.php
	 * @since Yaf >=1.0.0
	 */
	public function getLanguage(): void {}

	/**
	 * The getMethod purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmethod.php
	 * @since Yaf >=1.0.0
	 */
	public function getMethod(): void {}

	/**
	 * The getModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function getModuleName(): void {}

	/**
	 * The getParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $default
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparam.php
	 * @since Yaf >=1.0.0
	 */
	public function getParam(string $name, string $default = NULL): void {}

	/**
	 * The getParams purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparams.php
	 * @since Yaf >=1.0.0
	 */
	public function getParams(): void {}

	/**
	 * POST 変数を取得する
	 * <p>POST 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-request-http.getpost.php
	 * @since Yaf >=1.0.0
	 */
	public function getPost(string $name, string $default = NULL) {}

	/**
	 * クエリパラメータを取得する
	 * <p>GET 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-request-http.getquery.php
	 * @since Yaf >=1.0.0
	 */
	public function getQuery(string $name, string $default = NULL) {}

	/**
	 * Retrieve Raw request body
	 * <p>Retrieve Raw request body</p>
	 * @return mixed <p>Return string on success, FALSE on failure.</p>
	 * @link http://php.net/manual/ja/yaf-request-http.getraw.php
	 * @since Yaf >=3.0.7
	 */
	public function getRaw() {}

	/**
	 * The getRequest purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-http.getrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequest(): void {}

	/**
	 * The getRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getrequesturi.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequestUri(): void {}

	/**
	 * SERVER 変数を取得する
	 * <p>SERVER 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getserver.php
	 * @since Yaf >=1.0.0
	 */
	public function getServer(string $name, string $default = NULL): void {}

	/**
	 * The isCli purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.iscli.php
	 * @since Yaf >=1.0.0
	 */
	public function isCli(): void {}

	/**
	 * The isDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function isDispatched(): void {}

	/**
	 * The isGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isget.php
	 * @since Yaf >=1.0.0
	 */
	public function isGet(): void {}

	/**
	 * The isHead purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ishead.php
	 * @since Yaf >=1.0.0
	 */
	public function isHead(): void {}

	/**
	 * The isOptions purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isoptions.php
	 * @since Yaf >=1.0.0
	 */
	public function isOptions(): void {}

	/**
	 * The isPost purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ispost.php
	 * @since Yaf >=1.0.0
	 */
	public function isPost(): void {}

	/**
	 * The isPut purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isput.php
	 * @since Yaf >=1.0.0
	 */
	public function isPut(): void {}

	/**
	 * The isRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function isRouted(): void {}

	/**
	 * Ajax リクエストかどうかを調べる
	 * <p>そのリクエストが Ajax リクエストであるかどうかを調べます。</p><p><b>注意</b>:</p><p>このメソッドはリクエストヘッダーの HTTP_X_REQUESTED_WITH を見て判断しますが、 Javascript ライブラリの中には、Ajax リクエストの際にこのヘッダーをセットしないものがあります。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-request-http.isxmlhttprequest.php
	 * @since Yaf >=1.0.0
	 */
	public function isXmlHttpRequest(): bool {}

	/**
	 * The setActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $action
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function setActionName(string $action): void {}

	/**
	 * ベース URI を設定する
	 * <p>ベース URI を設定します。ベース URI はルーティング時に使います。 ルーティングの際にはリクエスト URI を使ってリクエストを振り分けますが、 そのときに、ベース URI を使ってリクエスト URI の先頭部分を読み飛ばします。 たとえば、リクエスト URI が a/b/c でベース URI が "a/b" の場合、"/c" の部分だけを使ってルーティングします。</p><p><b>注意</b>:</p><p>普通はこれを設定する必要はありません。Yaf が自動的に判断します。</p>
	 * @param string $uir <p>ベース URI。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-request-abstract.setbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function setBaseUri(string $uir): bool {}

	/**
	 * The setControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $controller
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function setControllerName(string $controller): void {}

	/**
	 * The setDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function setDispatched(): void {}

	/**
	 * The setModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $module
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function setModuleName(string $module): void {}

	/**
	 * The setParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setparam.php
	 * @since Yaf >=1.0.0
	 */
	public function setParam(string $name, string $value = NULL): void {}

	/**
	 * The setRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $uir
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrequesturi.php
	 * @since Yaf >=2.1.0
	 */
	public function setRequestUri(string $uir): void {}

	/**
	 * The setRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $flag
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function setRouted(string $flag = NULL): void {}
}

/**
 * <p><b>Yaf_Request_Simple</b> は、 テスト用に使うためのクラスです。 つまり、特定のリクエストを CLI モードでシミュレートしたりするときに使います。</p>
 * @link http://php.net/manual/ja/class.yaf-request-simple.php
 * @since Yaf >=1.0.0
 */
class Yaf_Request_Simple extends \Yaf_Request_Abstract {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.yaf-request-simple.php
	 */
	const SCHEME_HTTP = 'http';

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.yaf-request-simple.php
	 */
	const SCHEME_HTTPS = 'https';

	/**
	 * The __clone purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Request_Simple のコンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $method
	 * @param string $module
	 * @param string $controller
	 * @param string $action
	 * @param array $params
	 * @return self
	 * @link http://php.net/manual/ja/yaf-request-simple.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $method = NULL, string $module = NULL, string $controller = NULL, string $action = NULL, array $params = NULL) {}

	/**
	 * The get purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.get.php
	 * @since Yaf >=1.0.0
	 */
	public function get(): void {}

	/**
	 * The getActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function getActionName(): void {}

	/**
	 * The getBaseUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function getBaseUri(): void {}

	/**
	 * The getControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function getControllerName(): void {}

	/**
	 * The getCookie purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.getcookie.php
	 * @since Yaf >=1.0.0
	 */
	public function getCookie(): void {}

	/**
	 * ENV 変数を取得する
	 * <p>ENV 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getenv.php
	 * @since Yaf >=1.0.0
	 */
	public function getEnv(string $name, string $default = NULL): void {}

	/**
	 * The getException purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getexception.php
	 * @since Yaf >=1.0.0
	 */
	public function getException(): void {}

	/**
	 * The getFiles purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.getfiles.php
	 * @since Yaf >=1.0.0
	 */
	public function getFiles(): void {}

	/**
	 * The getLanguage purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getlanguage.php
	 * @since Yaf >=1.0.0
	 */
	public function getLanguage(): void {}

	/**
	 * The getMethod purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmethod.php
	 * @since Yaf >=1.0.0
	 */
	public function getMethod(): void {}

	/**
	 * The getModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function getModuleName(): void {}

	/**
	 * The getParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $default
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparam.php
	 * @since Yaf >=1.0.0
	 */
	public function getParam(string $name, string $default = NULL): void {}

	/**
	 * The getParams purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getparams.php
	 * @since Yaf >=1.0.0
	 */
	public function getParams(): void {}

	/**
	 * The getPost purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.getpost.php
	 * @since Yaf >=1.0.0
	 */
	public function getPost(): void {}

	/**
	 * The getQuery purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.getquery.php
	 * @since Yaf >=1.0.0
	 */
	public function getQuery(): void {}

	/**
	 * The getRequest purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.getrequest.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequest(): void {}

	/**
	 * The getRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getrequesturi.php
	 * @since Yaf >=1.0.0
	 */
	public function getRequestUri(): void {}

	/**
	 * SERVER 変数を取得する
	 * <p>SERVER 変数を取得します。</p>
	 * @param string $name <p>変数名。</p>
	 * @param string $default <p>このパラメータを指定すると、変数が見つからない場合にこの値を返すようになります。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.getserver.php
	 * @since Yaf >=1.0.0
	 */
	public function getServer(string $name, string $default = NULL): void {}

	/**
	 * The isCli purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.iscli.php
	 * @since Yaf >=1.0.0
	 */
	public function isCli(): void {}

	/**
	 * The isDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function isDispatched(): void {}

	/**
	 * The isGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isget.php
	 * @since Yaf >=1.0.0
	 */
	public function isGet(): void {}

	/**
	 * The isHead purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ishead.php
	 * @since Yaf >=1.0.0
	 */
	public function isHead(): void {}

	/**
	 * The isOptions purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isoptions.php
	 * @since Yaf >=1.0.0
	 */
	public function isOptions(): void {}

	/**
	 * The isPost purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.ispost.php
	 * @since Yaf >=1.0.0
	 */
	public function isPost(): void {}

	/**
	 * The isPut purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isput.php
	 * @since Yaf >=1.0.0
	 */
	public function isPut(): void {}

	/**
	 * The isRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.isrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function isRouted(): void {}

	/**
	 * The isXmlHttpRequest purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-simple.isxmlhttprequest.php
	 * @since Yaf >=1.0.0
	 */
	public function isXmlHttpRequest(): void {}

	/**
	 * The setActionName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $action
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setactionname.php
	 * @since Yaf >=1.0.0
	 */
	public function setActionName(string $action): void {}

	/**
	 * ベース URI を設定する
	 * <p>ベース URI を設定します。ベース URI はルーティング時に使います。 ルーティングの際にはリクエスト URI を使ってリクエストを振り分けますが、 そのときに、ベース URI を使ってリクエスト URI の先頭部分を読み飛ばします。 たとえば、リクエスト URI が a/b/c でベース URI が "a/b" の場合、"/c" の部分だけを使ってルーティングします。</p><p><b>注意</b>:</p><p>普通はこれを設定する必要はありません。Yaf が自動的に判断します。</p>
	 * @param string $uir <p>ベース URI。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-request-abstract.setbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function setBaseUri(string $uir): bool {}

	/**
	 * The setControllerName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $controller
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setcontrollername.php
	 * @since Yaf >=1.0.0
	 */
	public function setControllerName(string $controller): void {}

	/**
	 * The setDispatched purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setdispatched.php
	 * @since Yaf >=1.0.0
	 */
	public function setDispatched(): void {}

	/**
	 * The setModuleName purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $module
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setmodulename.php
	 * @since Yaf >=1.0.0
	 */
	public function setModuleName(string $module): void {}

	/**
	 * The setParam purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setparam.php
	 * @since Yaf >=1.0.0
	 */
	public function setParam(string $name, string $value = NULL): void {}

	/**
	 * The setRequestUri purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $uir
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrequesturi.php
	 * @since Yaf >=2.1.0
	 */
	public function setRequestUri(string $uir): void {}

	/**
	 * The setRouted purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $flag
	 * @return void
	 * @link http://php.net/manual/ja/yaf-request-abstract.setrouted.php
	 * @since Yaf >=1.0.0
	 */
	public function setRouted(string $flag = NULL): void {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-response-abstract.php
 * @since Yaf >=1.0.0
 */
class Yaf_Response_Abstract {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.yaf-response-abstract.php
	 */
	const DEFAULT_BODY = "content";

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-response-abstract.php#yaf-response-abstract.props.header
	 */
	protected $_header;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-response-abstract.php#yaf-response-abstract.props.body
	 */
	protected $_body;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-response-abstract.php#yaf-response-abstract.props.sendheader
	 */
	protected $_sendheader;

	/**
	 * The __clone purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * The __construct purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-response-abstract.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * The __destruct purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.destruct.php
	 * @since Yaf >=1.0.0
	 */
	public function __destruct() {}

	/**
	 * The __toString purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.tostring.php
	 * @since Yaf >=1.0.0
	 */
	private function __toString(): void {}

	/**
	 * 本文に追記する
	 * <p>既存のコンテンツブロックの後にコンテンツを追加します。</p>
	 * @param string $content
	 * @param string $key <p>コンテンツのキー。キーを指定しない場合は、 Yaf_Response_Abstract::DEFAULT_BODY を使います。</p> <p><b>注意</b>:</p> <p>このパラメータは 2.2.0 で導入されました。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-response-abstract.appendbody.php
	 * @since Yaf >=1.0.0
	 */
	public function appendBody(string $content, string $key = NULL): bool {}

	/**
	 * The clearBody purpose
	 * <p>既存のコンテンツを消去します。</p>
	 * @param string $key <p>コンテンツのキー。キーを指定しない場合は、すべてのコンテンツを消去します。</p> <p><b>注意</b>:</p> <p>このパラメータは 2.2.0 で導入されました。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-response-abstract.clearbody.php
	 * @since Yaf >=1.0.0
	 */
	public function clearBody(string $key = NULL): bool {}

	/**
	 * The clearHeaders purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.clearheaders.php
	 * @since Yaf >=1.0.0
	 */
	public function clearHeaders(): void {}

	/**
	 * コンテンツを取得する
	 * <p>コンテンツを取得します。</p>
	 * @param string $key <p>コンテンツのキー。キーを指定しない場合は、Yaf_Response_Abstract::DEFAULT_BODY を使います。<b><code>NULL</code></b> を渡すと、すべてのコンテンツを配列で返します。 as a array</p> <p><b>注意</b>:</p> <p>このパラメータは 2.2.0 で導入されました。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-response-abstract.getbody.php
	 * @since Yaf >=1.0.0
	 */
	public function getBody(string $key = NULL) {}

	/**
	 * The getHeader purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.getheader.php
	 * @since Yaf >=1.0.0
	 */
	public function getHeader(): void {}

	/**
	 * The prependBody purpose
	 * <p>既存のコンテンツブロックの前にコンテンツを追加します。</p>
	 * @param string $content
	 * @param string $key <p>コンテンツのキー。キーを指定しない場合は、 Yaf_Response_Abstract::DEFAULT_BODY を使います。</p> <p><b>注意</b>:</p> <p>このパラメータは 2.2.0 で導入されました。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-response-abstract.prependbody.php
	 * @since Yaf >=1.0.0
	 */
	public function prependBody(string $content, string $key = NULL): bool {}

	/**
	 * レスポンスを送信する
	 * <p>レスポンスを送信します。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.response.php
	 * @since Yaf >=1.0.0
	 */
	public function response(): void {}

	/**
	 * The setAllHeaders purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.setallheaders.php
	 * @since Yaf >=1.0.0
	 */
	protected function setAllHeaders(): void {}

	/**
	 * コンテンツをレスポンスに設定する
	 * <p>コンテンツをレスポンスに設定します。</p>
	 * @param string $content
	 * @param string $key <p>コンテンツのキー。キーを指定しない場合は、 Yaf_Response_Abstract::DEFAULT_BODY を使います。</p> <p><b>注意</b>:</p> <p>このパラメータは 2.2.0 で導入されました。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-response-abstract.setbody.php
	 * @since Yaf >=1.0.0
	 */
	public function setBody(string $content, string $key = NULL): bool {}

	/**
	 * The setHeader purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.setheader.php
	 * @since Yaf >=1.0.0
	 */
	public function setHeader(): void {}

	/**
	 * The setRedirect purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-response-abstract.setredirect.php
	 * @since Yaf >=1.0.0
	 */
	public function setRedirect(): void {}
}

/**
 * <p><b>Yaf_Route_Interface</b> を使うと、開発者がカスタムルートを定義できるようになります。</p>
 * @link http://php.net/manual/ja/class.yaf-route-interface.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Interface {

	/**
	 * Assemble a request
	 * <p>this method returns a url according to the argument info, and append query strings to the url according to the argument query.</p><p>a route should implement this method according to its own route rules, and do a reverse progress.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-interface.assemble.php
	 * @since Yaf >=2.3.0
	 */
	abstract public function assemble(array $info, array $query = NULL): string;

	/**
	 * リクエストをルーティングする
	 * <p><b>Yaf_Route_Interface::route()</b> は、ルーターを自作するときに唯一実装する必要のあるメソッドです。</p><p><b>注意</b>:</p><p>2.3.0 以降では、実装すべきメソッドがひとつ増えました。 <code>Yaf_Route_Interface::assemble()</code> を参照ください。</p><p>このメソッドが <b><code>TRUE</code></b> を返せば、そこでルーティングが終わります。それ以外の場合は Yaf_Router はルートスタックの次のルーターにリクエストを転送します。</p><p>このメソッドは、 <code>Yaf_Request_Abstract::setControllerName()</code>、 <code>Yaf_Request_Abstract::setActionName()</code> および <code>Yaf_Request_Abstract::setModuleName()</code> を使って ルーティング結果を request に設定します。</p><p>リクエストをルーティングしたことを示すため、このメソッドは最後に <code>Yaf_Request_Abstract::setRouted()</code> を呼ぶ必要があります。</p>
	 * @param \Yaf_Request_Abstract $request <p>Yaf_Request_Abstract のインスタンスを返します。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-route-interface.route.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function route(\Yaf_Request_Abstract $request): bool;
}

/**
 * <p><b>Yaf_Route_Map</b> は標準で組み込まれているルートです。 単純に URI エンドポイント (URI の中で、ベース URL の後に続く部分。 <code>Yaf_Request_Abstract::setBaseUri()</code> を参照ください) をコントローラ名やアクション名に変換します (どちらになるかは <code>Yaf_Route_Map::__construct()</code> に渡すパラメータで決まります)。 その規則は次のとおりです。 A =&gt; controller A. A/B/C =&gt; controller A_B_C. A/B/C/D/E =&gt; controller A_B_C_D_E.</p>
 * <p><code>Yaf_Route_Map::__construct()</code> の二番目のパラメータを指定すると、 URI の中でデリミタより前の部分だけを使ってルーティングを行います。 デリミタ以降の部分は、ルーティングリクエストのパラメータとして使います (<code>Yaf_Route_Map::__construct()</code> のサンプルを参照ください)。</p>
 * @link http://php.net/manual/ja/class.yaf-route-map.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Map implements \Yaf_Route_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-map.php#yaf-route-map.props.ctl-router
	 */
	protected $_ctl_router;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-map.php#yaf-route-map.props.delimeter
	 */
	protected $_delimeter;

	/**
	 * The __construct purpose
	 * @param string $controller_prefer <p>結果をコントローラとみなすかアクションとみなすか。</p>
	 * @param string $delimiter
	 * @return self
	 * @link http://php.net/manual/ja/yaf-route-map.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $controller_prefer = 'false', string $delimiter = "") {}

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-map.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * The route purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-route-map.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}

	/**
	 * ベース URI を設定する
	 * <p>ベース URI を設定します。ベース URI はルーティング時に使います。 ルーティングの際にはリクエスト URI を使ってリクエストを振り分けますが、 そのときに、ベース URI を使ってリクエスト URI の先頭部分を読み飛ばします。 たとえば、リクエスト URI が a/b/c でベース URI が "a/b" の場合、"/c" の部分だけを使ってルーティングします。</p><p><b>注意</b>:</p><p>普通はこれを設定する必要はありません。Yaf が自動的に判断します。</p>
	 * @param string $uir <p>ベース URI。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-request-abstract.setbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function setBaseUri(string $uir): bool {}
}

/**
 * <p><b>Yaf_Route_Regex</b> は、 Yaf の組み込みのルートのなかでも一番柔軟性の高いものです。</p>
 * @link http://php.net/manual/ja/class.yaf-route-regex.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Regex extends \Yaf_Route_Interface implements \Yaf_Route_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-regex.php#yaf-route-regex.props.route
	 */
	protected $_route;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-regex.php#yaf-route-regex.props.default
	 */
	protected $_default;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-regex.php#yaf-route-regex.props.maps
	 */
	protected $_maps;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-regex.php#yaf-route-regex.props.verify
	 */
	protected $_verify;

	/**
	 * Yaf_Route_Regex のコンストラクタ
	 * @param string $match <p>正規表現のパターン。リクエストの URI とマッチさせます。 もしマッチしなければ Yaf_Route_Regex は <b><code>FALSE</code></b> を返します。</p>
	 * @param array $route <p>リクエスト URI がパターンにマッチしたときに、 Yaf_Route_Regex はこれを使ってルーティング先を判断します。</p> <p>この配列で指定するモジュール、コントローラ、アクションはすべて任意指定で、 値を省略したときにはデフォルト設定を利用します。</p>
	 * @param array $map <p>マッチした結果に代入する名前の配列。</p>
	 * @param array $verify
	 * @param string $reverse <p>URL を組み立てるときに使う文字列。 <code>Yaf_Route_Regex::assemble()</code> を参照ください。</p> <p><b>注意</b>:</p> <p>このパラメータは 2.3.0 で導入されました。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-route-regex.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $match, array $route, array $map = NULL, array $verify = NULL, string $reverse = NULL) {}

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-regex.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * The route purpose
	 * <p>リクエストをルーティングします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool <p><b>Yaf_Route_Regex::_construct()</b> の引数で指定したパターンにリクエスト URI がマッチした場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-route-regex.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}
}

/**
 * <p>使いかたについては、 <code>Yaf_Route_Rewrite::__construct()</code> のサンプルを参照ください。</p>
 * @link http://php.net/manual/ja/class.yaf-route-rewrite.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Rewrite extends \Yaf_Route_Interface implements \Yaf_Route_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-rewrite.php#yaf-route-rewrite.props.route
	 */
	protected $_route;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-rewrite.php#yaf-route-rewrite.props.default
	 */
	protected $_default;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-rewrite.php#yaf-route-rewrite.props.verify
	 */
	protected $_verify;

	/**
	 * Yaf_Route_Rewrite のコンストラクタ
	 * @param string $match <p>リクエストの URI とマッチさせるパターン。 もしマッチしなければ Yaf_Route_Rewrite は <b><code>FALSE</code></b> を返します。</p> <p>:name 形式を使って、マッチしたセグメントに名前を付けることができます。 また、&#42; で残りの URL セグメントにマッチさせられます。</p>
	 * @param array $route <p>リクエスト URI がパターンにマッチしたときに、 Yaf_Route_Rewrite はこれを使ってルーティング先のモジュール、コントローラ、アクションを判断します。</p> <p>この配列で指定するモジュール、コントローラ、アクションはすべて任意指定で、 値を省略したときにはデフォルト設定を利用します。</p>
	 * @param array $verify
	 * @return self
	 * @link http://php.net/manual/ja/yaf-route-rewrite.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $match, array $route, array $verify = NULL) {}

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-rewrite.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * The route purpose
	 * @param \Yaf_Request_Abstract $request
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-route-rewrite.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}
}

/**
 * <p><b>Yaf_Route_Simple</b> は、クエリ文字列を見てルート情報を取得します。</p>
 * <p><b>Yaf_Route_Simple</b> に対して必要な設定は、 $_GET のどのキーがモジュールでどのキーがコントローラ、 そしてどのキーがアクションなのかを指定することです。</p>
 * <p><code>Yaf_Route_Simple::route()</code> は常に <b><code>TRUE</code></b> を返します。 そこで、<b>Yaf_Route_Simple</b> はルートスタックの先頭に置く必要があります。 そうしないと、他のルートは決して呼ばれなくなります。</p>
 * @link http://php.net/manual/ja/class.yaf-route-simple.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Simple implements \Yaf_Route_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-simple.php#yaf-route-simple.props.controller
	 */
	protected $controller;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-simple.php#yaf-route-simple.props.module
	 */
	protected $module;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-simple.php#yaf-route-simple.props.action
	 */
	protected $action;

	/**
	 * Yaf_Route_Simple のコンストラクタ
	 * <p>Yaf_Route_Simple は、ルート情報をクエリ文字列から取得します。 コンストラクタのパラメータを使って、$_GET からルート情報を探します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $module_name <p>モジュールの情報を取得するキー。</p>
	 * @param string $controller_name <p>コントローラの情報を取得するキー。</p>
	 * @param string $action_name <p>アクションの情報を取得するキー。</p>
	 * @return self <p>常に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-route-simple.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $module_name, string $controller_name, string $action_name) {}

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-simple.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * リクエストをルーティングする
	 * <p>see <code>Yaf_Route_Simple::__construct()</code></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool <p>常に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-route-simple.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}
}

/**
 * <p>デフォルトでは、Yaf_Router が持っているルートは <b>Yaf_Route_Static</b> だけです。</p>
 * <p><b>Yaf_Route_Static</b> は、 要件の 80% を満たせるように作られています。</p>
 * <p><b>Yaf_Route_Static</b> のインスタンスを作る必要はありません。 また、Yaf_Router のルートスタックに追加する必要もありません。 というのもこのクラスは常に Yaf_Router のルートスタックに含まれており、最後に呼ばれるようになっているからです。</p>
 * @link http://php.net/manual/ja/class.yaf-route-static.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Static implements \Yaf_Router {

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-static.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * The match purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $uri
	 * @return void
	 * @link http://php.net/manual/ja/yaf-route-static.match.php
	 * @since Yaf >=1.0.0
	 */
	public function match(string $uri): void {}

	/**
	 * リクエストをルーティングする
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool <p>常に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-route-static.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-route-supervar.php
 * @since Yaf >=1.0.0
 */
class Yaf_Route_Supervar implements \Yaf_Route_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-route-supervar.php#yaf-route-supervar.props.var-name
	 */
	protected $_var_name;

	/**
	 * The __construct purpose
	 * <p>Yaf_Route_Supervar は Yaf_Route_Static と似ています。違うところは、 Yaf_Route_Supervar がクエリ文字列からパス情報を探すところです。 パラメータ supervar_name がキーとなります。</p>
	 * @param string $supervar_name <p>キーの名前。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-route-supervar.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct(string $supervar_name) {}

	/**
	 * Assemble a url
	 * <p>Assemble a url.</p>
	 * @param array $info
	 * @param array $query
	 * @return string
	 * @link http://php.net/manual/ja/yaf-route-supervar.assemble.php
	 * @since Yaf >=2.3.0
	 */
	public function assemble(array $info, array $query = NULL): string {}

	/**
	 * The route purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool <p><code>Yaf_Route_Supervar::__construct()</code> で指定したキーが $_GET に存在すれば <b><code>TRUE</code></b>、存在しなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/yaf-route-supervar.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}
}

/**
 * <p><b>Yaf_Router</b> は、フレームワークの標準のルーターです。 ルーティングとは、URI エンドポイント (URI の中で、ベース URL の後に続く部分。 <code>Yaf_Request_Abstract::setBaseUri()</code> を参照ください) を受け取ってそこからパラメータを抽出し、 リクエストを受け取るモジュールやコントローラそしてアクションを判断する処理のことです。 モジュール、コントローラ、アクション、そしてその他のパラメータは Yaf_Request_Abstract オブジェクトにまとめられ、 そして Yaf_Dispatcher で処理します。 ルーティングが行われるのは一度だけで、リクエストを最初に受け取ってから 最初のコントローラにディスパッチする前に行われます。 <b>Yaf_Router</b> は、mod_rewrite 風の機能を PHP を使って実現できるような設計になっています。 Ruby on Rails のルーティング方式を参考にしており、 ウェブサーバーの URL リライト機能に関する事前知識は不要です。 Apache の場合は、次のような mod_rewrite ルールを書けば使えます。</p>
 * <p><b>例1 Apache 用のリライトルール</b></p>
 * <p><b>例2 Apache 用のリライトルール</b></p>
 * <p><b>例3 Lighttpd 用のリライトルール</b></p>
 * <p><b>例4 Nginx 用のリライトルール</b></p>
 * @link http://php.net/manual/ja/class.yaf-router.php
 * @since Yaf >=1.0.0
 */
class Yaf_Router {

	/**
	 * @var mixed <p>登録されたルートスタック。</p>
	 * @link http://php.net/manual/ja/class.yaf-router.php#yaf-router.props.routes
	 */
	protected $_routes;

	/**
	 * @var mixed <p>ルーティングを終えた後に、 今回のリクエストで使ったルートの名前がここに入ります。 この名前を取得するには <code>Yaf_Router::getCurrentRoute()</code> を使います。</p>
	 * @link http://php.net/manual/ja/class.yaf-router.php#yaf-router.props.current
	 */
	protected $_current;

	/**
	 * Yaf_Router のコンストラクタ
	 * @return self
	 * @link http://php.net/manual/ja/yaf-router.construct.php
	 * @since Yaf >=1.0.0
	 */
	public function __construct() {}

	/**
	 * 設定で定義したルートをルーターに追加する
	 * <p>設定で定義したルートを Yaf_Router のスタックに追加します。</p>
	 * @param \Yaf_Config_Abstract $config
	 * @return bool <p>Yaf_Config_Abstract のインスタンスを返します。 ここには有効なルート設定が含まれています。</p>
	 * @link http://php.net/manual/ja/yaf-router.addconfig.php
	 * @since Yaf >=1.0.0
	 */
	public function addConfig(\Yaf_Config_Abstract $config): bool {}

	/**
	 * 新しいルートをルーターに追加する
	 * <p>Yaf_Router はデフォルトのルートとして Yaf_Route_Static を使います。ルーターのルートスタックにそれ以外のルートを追加するときに、このメソッドを使います。</p><p>ルートスタックに後から追加したルートのほうが先に呼ばれます。 どれかひとつのルーターが <b><code>TRUE</code></b> を返せば、そこでルーティングが終わります。それ以外の場合は 次のルーターを呼びます。</p>
	 * @param string $name
	 * @param \Yaf_Route_Abstract $route
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-router.addroute.php
	 * @since Yaf >=1.0.0
	 */
	public function addRoute(string $name, \Yaf_Route_Abstract $route): bool {}

	/**
	 * 使われているルート名を取得する
	 * <p>ルーティングプロセスで使われているルート名を取得します。</p><p><b>注意</b>:</p><p>このメソッドはルーティングが終わってから呼ぶ必要があります。 終わる前に呼ぶと、常に <b><code>NULL</code></b> を返します。</p>
	 * @return string <p>ルート名を文字列で返します。</p>
	 * @link http://php.net/manual/ja/yaf-router.getcurrentroute.php
	 * @since Yaf >=1.0.0
	 */
	public function getCurrentRoute(): string {}

	/**
	 * 名前を指定してルートを取得する
	 * <p>名前を指定してルートを取得します。 <code>Yaf_Router::getCurrentRoute()</code> も参照ください。</p>
	 * @param string $name
	 * @return Yaf_Route_Interface
	 * @link http://php.net/manual/ja/yaf-router.getroute.php
	 * @since Yaf >=1.0.0
	 */
	public function getRoute(string $name): \Yaf_Route_Interface {}

	/**
	 * 登録済みのルートを取得する
	 * <p>登録済みのルートを取得します。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/yaf-router.getroutes.php
	 * @since Yaf >=1.0.0
	 */
	public function getRoutes() {}

	/**
	 * The route purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \Yaf_Request_Abstract $request
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-router.route.php
	 * @since Yaf >=1.0.0
	 */
	public function route(\Yaf_Request_Abstract $request): bool {}

	/**
	 * ベース URI を設定する
	 * <p>ベース URI を設定します。ベース URI はルーティング時に使います。 ルーティングの際にはリクエスト URI を使ってリクエストを振り分けますが、 そのときに、ベース URI を使ってリクエスト URI の先頭部分を読み飛ばします。 たとえば、リクエスト URI が a/b/c でベース URI が "a/b" の場合、"/c" の部分だけを使ってルーティングします。</p><p><b>注意</b>:</p><p>普通はこれを設定する必要はありません。Yaf が自動的に判断します。</p>
	 * @param string $uir <p>ベース URI。</p>
	 * @return bool <p>bool</p>
	 * @link http://php.net/manual/ja/yaf-request-abstract.setbaseuri.php
	 * @since Yaf >=1.0.0
	 */
	public function setBaseUri(string $uir): bool {}
}

/**
 * @link http://php.net/manual/ja/class.yaf-session.php
 * @since Yaf >=1.0.0
 */
class Yaf_Session implements \Iterator, \ArrayAccess, \Countable {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-session.php#yaf-session.props.instance
	 */
	protected static $_instance;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-session.php#yaf-session.props.session
	 */
	protected $_session;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-session.php#yaf-session.props.started
	 */
	protected $_started;

	/**
	 * The __clone purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.clone.php
	 * @since Yaf >=1.0.0
	 */
	private function __clone() {}

	/**
	 * Yaf_Session のコンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-session.construct.php
	 * @since Yaf >=1.0.0
	 */
	private function __construct() {}

	/**
	 * The __get purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.get.php
	 * @since Yaf >=1.0.0
	 */
	public function __get(string $name): void {}

	/**
	 * The __isset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.isset.php
	 * @since Yaf >=1.0.0
	 */
	public function __isset(string $name): void {}

	/**
	 * The __set purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.set.php
	 * @since Yaf >=1.0.0
	 */
	public function __set(string $name, string $value): void {}

	/**
	 * The __sleep purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.sleep.php
	 * @since Yaf >=1.0.0
	 */
	private function __sleep(): void {}

	/**
	 * The __unset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.unset.php
	 * @since Yaf >=1.0.0
	 */
	public function __unset(string $name): void {}

	/**
	 * The __wakeup purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.wakeup.php
	 * @since Yaf >=1.0.0
	 */
	private function __wakeup(): void {}

	/**
	 * The count purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.count.php
	 * @since Yaf >=1.0.0
	 */
	public function count(): void {}

	/**
	 * The current purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.current.php
	 * @since Yaf >=1.0.0
	 */
	public function current(): void {}

	/**
	 * The del purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.del.php
	 * @since Yaf >=1.0.0
	 */
	public function del(string $name): void {}

	/**
	 * The getInstance purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.getinstance.php
	 * @since Yaf >=1.0.0
	 */
	public static function getInstance(): void {}

	/**
	 * The has purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.has.php
	 * @since Yaf >=1.0.0
	 */
	public function has(string $name): void {}

	/**
	 * The key purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.key.php
	 * @since Yaf >=1.0.0
	 */
	public function key(): void {}

	/**
	 * The next purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.next.php
	 * @since Yaf >=1.0.0
	 */
	public function next(): void {}

	/**
	 * The offsetExists purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.offsetexists.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetExists(string $name): void {}

	/**
	 * The offsetGet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.offsetget.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetGet(string $name): void {}

	/**
	 * The offsetSet purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.offsetset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetSet(string $name, string $value): void {}

	/**
	 * The offsetUnset purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.offsetunset.php
	 * @since Yaf >=1.0.0
	 */
	public function offsetUnset(string $name): void {}

	/**
	 * The rewind purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.rewind.php
	 * @since Yaf >=1.0.0
	 */
	public function rewind(): void {}

	/**
	 * The start purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.start.php
	 * @since Yaf >=1.0.0
	 */
	public function start(): void {}

	/**
	 * The valid purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-session.valid.php
	 * @since Yaf >=1.0.0
	 */
	public function valid(): void {}
}

/**
 * <p>Yaf では、組み込みのビューエンジン Yaf_View_Simple のかわりにカスタムビューを自作できるようになっています。 その実例は、 <code>Yaf_Dispatcher::setView()</code> を参照ください。</p>
 * @link http://php.net/manual/ja/class.yaf-view-interface.php
 * @since Yaf >=1.0.0
 */
class Yaf_View_Interface {

	/**
	 * 値をビューエンジンに代入する
	 * <p>値をビューエンジンに代入します。これで、テンプレートから名前を指定してその値にアクセスできるようになります。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @param string $value
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-interface.assign.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function assign(string $name, string $value = NULL): bool;

	/**
	 * テンプレートをレンダリングして出力する
	 * <p>テンプレートをレンダリングし、結果をすぐに出力します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $tpl
	 * @param array $tpl_vars
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-interface.display.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function display(string $tpl, array $tpl_vars = NULL): bool;

	/**
	 * The getScriptPath purpose
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-view-interface.getscriptpath.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function getScriptPath(): void;

	/**
	 * テンプレートをレンダリングする
	 * <p>テンプレートをレンダリングし、結果を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $tpl
	 * @param array $tpl_vars
	 * @return string
	 * @link http://php.net/manual/ja/yaf-view-interface.render.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function render(string $tpl, array $tpl_vars = NULL): string;

	/**
	 * The setScriptPath purpose
	 * <p>テンプレートのベースディレクトリを設定します。これは通常、 Yaf_Dispatcher から呼ばれます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $template_dir <p>テンプレートディレクトリへの絶対パス。デフォルトは application.directory . "/views" です。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-view-interface.setscriptpath.php
	 * @since Yaf >=1.0.0
	 */
	abstract public function setScriptPath(string $template_dir): void;

	/**
	 * カスタムビューエンジンを設定する
	 * <p>このメソッドは、Yaf_View_Simple ではなくカスタムビューエンジンを使いたいときに利用します。</p>
	 * @param \Yaf_View_Interface $view <p>Yaf_View_Interface のインスタンス。</p>
	 * @return Yaf_Dispatcher
	 * @link http://php.net/manual/ja/yaf-dispatcher.setview.php
	 * @since Yaf >=1.0.0
	 */
	public function setView(\Yaf_View_Interface $view): \Yaf_Dispatcher {}
}

/**
 * <p><b>Yaf_View_Simple</b> は Yaf の組み込みテンプレートエンジンです。 シンプルながらも高速なテンプレートエンジンで、PHP スクリプトテンプレートだけに対応しています。</p>
 * @link http://php.net/manual/ja/class.yaf-view-simple.php
 * @since Yaf >=1.0.0
 */
class Yaf_View_Simple implements \Yaf_View_Interface {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-view-simple.php#yaf-view-simple.props.tpl-vars
	 */
	protected $_tpl_vars;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.yaf-view-simple.php#yaf-view-simple.props.tpl-dir
	 */
	protected $_tpl_dir;

	/**
	 * Yaf_View_Simple のコンストラクタ
	 * @param string $template_dir <p>テンプレートのベースディレクトリ。デフォルトは APPLICATOIN . "/views" です。</p>
	 * @param array $options <p></p> <pre>エンジンのオプション。Yaf 2.1.13 からは、短いタグ "&lt;&#63;=$var&#63;&gt;" を ("short_open_tag" の値にかかわらず) テンプレートで使えるようになりました。 オプション "short_tag" をオフにすると、テンプレートで短いタグを使わないようにできます。</pre>
	 * @return self
	 * @link http://php.net/manual/ja/yaf-view-simple.construct.php
	 * @since Yaf >=1.0.0
	 */
	final public function __construct(string $template_dir, array $options = NULL) {}

	/**
	 * Retrieve assigned variable
	 * <p>代入した変数を取得します。</p><p><b>注意</b>:</p><p>2.1.11 からは、パラメータを空にできます。</p>
	 * @param string $name <p>代入した変数名。</p> <p>空にすると、すべての変数を返します。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-view-simple.get.php
	 * @since Yaf >=1.0.0
	 */
	public function __get(string $name = NULL): void {}

	/**
	 * The __isset purpose
	 * @param string $name
	 * @return void
	 * @link http://php.net/manual/ja/yaf-view-simple.isset.php
	 * @since Yaf >=1.0.0
	 */
	public function __isset(string $name): void {}

	/**
	 * 値をエンジンに設定する
	 * <p><code>Yaf_View_Simple::assign()</code> をもっと簡単にするもうひとつの方法です。</p>
	 * @param string $name <p>変数名。</p>
	 * @param mixed $value <p>変数の値。</p>
	 * @return void
	 * @link http://php.net/manual/ja/yaf-view-simple.set.php
	 * @since Yaf >=1.0.0
	 */
	public function __set(string $name, $value): void {}

	/**
	 * 値を代入する
	 * <p>変数をビューエンジンに代入します。</p>
	 * @param string $name <p>文字列あるいは配列。</p> <p>文字列の場合は、次の引数 $value が必須となります。</p>
	 * @param mixed $value <p>代入する値。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-simple.assign.php
	 * @since Yaf >=1.0.0
	 */
	public function assign(string $name, $value = NULL): bool {}

	/**
	 * The assignRef purpose
	 * <p><code>Yaf_View_Simple::assign()</code> とは異なり、 このメソッドは参照で値をエンジンに代入します。</p>
	 * @param string $name <p>テンプレート内でのアクセスに使う名前。</p>
	 * @param mixed $value <p>代入する値。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-simple.assignref.php
	 * @since Yaf >=1.0.0
	 */
	public function assignRef(string $name, &$value): bool {}

	/**
	 * 代入した値をクリアする
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name <p>代入した変数名。</p> <p>空の場合は、すべての変数をクリアします。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-simple.clear.php
	 * @since Yaf >=2.2.0
	 */
	public function clear(string $name = NULL): bool {}

	/**
	 * レンダリングして表示する
	 * <p>テンプレートをレンダリングして、結果をすぐに返します。</p>
	 * @param string $tpl
	 * @param array $tpl_vars
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-simple.display.php
	 * @since Yaf >=1.0.0
	 */
	public function display(string $tpl, array $tpl_vars = NULL): bool {}

	/**
	 * テンプレートをレンダリングする
	 * <p>文字列のテンプレートをレンダリングして結果を返します。</p>
	 * @param string $tpl_content <p>文字列のテンプレート。</p>
	 * @param array $tpl_vars
	 * @return string
	 * @link http://php.net/manual/ja/yaf-view-simple.eval.php
	 * @since Yaf >=2.2.0
	 */
	public function eval(string $tpl_content, array $tpl_vars = NULL): string {}

	/**
	 * テンプレートのディレクトリを取得する
	 * @return string
	 * @link http://php.net/manual/ja/yaf-view-simple.getscriptpath.php
	 * @since Yaf >=1.0.0
	 */
	public function getScriptPath(): string {}

	/**
	 * テンプレートをレンダリングする
	 * <p>テンプレートをレンダリングして、結果を返します。</p>
	 * @param string $tpl
	 * @param array $tpl_vars
	 * @return string
	 * @link http://php.net/manual/ja/yaf-view-simple.render.php
	 * @since Yaf >=1.0.0
	 */
	public function render(string $tpl, array $tpl_vars = NULL): string {}

	/**
	 * テンプレートのディレクトリを設定する
	 * @param string $template_dir
	 * @return bool
	 * @link http://php.net/manual/ja/yaf-view-simple.setscriptpath.php
	 * @since Yaf >=1.0.0
	 */
	public function setScriptPath(string $template_dir): bool {}
}

define('YAF_ENVIRON', null);

define('YAF_ERR_AUTOLOAD_FAILED', null);

define('YAF_ERR_CALL_FAILED', null);

define('YAF_ERR_DISPATCH_FAILED', null);

define('YAF_ERR_NOTFOUND_ACTION', null);

define('YAF_ERR_NOTFOUND_CONTROLLER', null);

define('YAF_ERR_NOTFOUND_MODULE', null);

define('YAF_ERR_NOTFOUND_VIEW', null);

define('YAF_ERR_ROUTE_FAILED', null);

define('YAF_ERR_STARTUP_FAILED', null);

define('YAF_ERR_TYPE_ERROR', null);

define('YAF_VERSION', null);

