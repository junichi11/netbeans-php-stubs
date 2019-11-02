<?php



namespace {

	/**
	 * シェル引数として使用される文字列をエスケープする
	 * <p><b>escapeshellarg()</b> は、文字列をシングルクオート で括り、既存のシングルクオートを全てクオート/エスケープします。こ れにより、文字列を直接シェル関数に渡し、単一の安全な引数として処 理することを可能にします。この関数は、ユーザー入力からの入力を シェル関数への引数として渡す際にエスケープするために使用する必要 があります。シェル関数には、<code>exec()</code>, <code>system()</code>そして バックティック演算子 を含むシェル関数が含まれます。</p><p>Windows では、<b>escapeshellarg()</b> は、パーセント記号と感嘆符 (遅延環境変数の展開) とダブルクォートをスペースに置き換えます。 そして、文字列をダブルクォートで囲みます。</p>
	 * @param string $arg <p>エスケープされる引数</p>
	 * @return string <p>エスケープされた文字列</p>
	 * @link https://php.net/manual/ja/function.escapeshellarg.php
	 * @see escapeshellcmd(), exec(), popen(), system()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function escapeshellarg(string $arg): string {}

	/**
	 * シェルのメタ文字をエスケープする
	 * <p><b>escapeshellcmd()</b> は、文字列中においてシェルコマンドを だまして勝手なコマンドを実行する可能性がある文字をエスケープします。 この関数は、ユーザーに入力されたデータを関数 <code>exec()</code> または <code>system()</code> または、 バックティック演算子 に渡す前に全てエスケープを行う場合に使用するべきです。</p><p><i>&amp;#;`|&#42;&#63;~&lt;&gt;^()[]{}$\</i>、<i>\x0A</i> および <i>\xFF</i> については、その文字の前にバックスラッシュが 追加されます。<i>'</i> および <i>"</i> は、対になっていない場合にのみエスケープされます。Windows では、 これらの文字に加えて <i>%</i> と <i>!</i> がスペースに置き換えられます。</p>
	 * @param string $command <p>エスケープされるコマンド</p>
	 * @return string <p>エスケープされた文字列</p>
	 * @link https://php.net/manual/ja/function.escapeshellcmd.php
	 * @see escapeshellarg(), exec(), popen(), system()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function escapeshellcmd(string $command): string {}

	/**
	 * 外部プログラムを実行する
	 * <p><b>exec()</b> は指定されたコマンド <code>command</code> を実行します。</p>
	 * @param string $command <p>実行するコマンド</p>
	 * @param array $output <p>引数 <code>output</code> が存在する場合、指定した配列は、 コマンドからの出力の各行で埋められます。 <i>\n</i> のような後に続く空白は、この配列には含まれません。 配列に既に何らかの要素が 含まれる場合は、<b>exec()</b> は配列の最後に追加される ことに注意してください。関数が要素を追加することを望まないのなら、 それが <b>exec()</b> に渡される前に、配列の <code>unset()</code> を呼び出してください。</p>
	 * @param int $return_var <p>引数<code>return_var</code>が、引数 <code>output</code> と共に存在する場合、実行したコマンドの ステータスがこの変数に書かれます。</p>
	 * @return string <p>コマンド結果の最後の行を返します。コマンドを実行し、 一切干渉を受けずに直接コマンドから全てのデータを受けとる必要が あるならば、<code>PassThru()</code> 関数を使ってください。</p><p>実行されたコマンドの出力を取得するには、必ず <code>output</code> パラメータを設定・使用してください。</p>
	 * @link https://php.net/manual/ja/function.exec.php
	 * @see system(), passthru(), escapeshellcmd(), pcntl_exec()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function exec(string $command, array &$output = NULL, int &$return_var = NULL): string {}

	/**
	 * 外部プログラムを実行し、未整形の出力を表示する
	 * <p><b>passthru()</b>関数は<code>exec()</code>関数と同様、 <code>command</code>を実行します。 引数 <code>return_var</code> を指定した場合、 Unix コマンドのステータスで置換されます。 この関数は Unix コマンドからの出力がバイナリデータであり、 ブラウザーへ直接返す必要がある場合、<code>exec()</code> もしくは<code>system()</code>の代わりに使用する必要があります。 よく使うのは、直接画像ストリームを出力することができる pbmplus ユーティリティの様なものを実行する場合です。content-type を <i>image/gif</i> に設定して、gifを出力するpbmplus プログラムを呼び出すことにより、直接画像を出力する PHP スクリプトを作成 することができます。</p>
	 * @param string $command <p>実行するコマンド</p>
	 * @param int $return_var <p>引数<code>return_var</code>が存在する場合、 Unix コマンドのステータスがこの変数に書かれます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.passthru.php
	 * @see exec(), system(), popen(), escapeshellcmd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function passthru(string $command, int &$return_var = NULL): void {}

	/**
	 * proc_open() で開かれたプロセスを閉じ、 そのプロセスの終了コードを返す
	 * <p><b>proc_close()</b> は <code>pclose()</code> と似ていますが、<code>proc_open()</code> で開かれたプロセスに対してのみ機能するという点で異なります。 <b>proc_close()</b> は、プロセスが終了するまで待った後で、 終了コードを返します。もし、そのプロセスに対してパイプが開かれていた場合は、 デッドロックを避けるため、<code>fclose()</code> 関数で、 この関数を呼び出す前にそれらを閉じておかなくてはなりません - パイプが開いている間、子プロセスは終了できないからです。</p>
	 * @param resource $process <p>閉じられる <code>proc_open()</code> リソース</p>
	 * @return int <p>実行していたプロセスの終了状態を返します。 エラーが発生した場合は <i>-1</i> を返します。</p> <p><b>注意</b>:</p> <p>PHP のコンパイル時に --enable-sigchild を指定した場合は、この関数の返り値は未定義となります。</p>
	 * @link https://php.net/manual/ja/function.proc-close.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function proc_close($process): int {}

	/**
	 * proc_open() で開かれたプロセスに関する情報を取得する
	 * <p><b>proc_get_status()</b> は、<code>proc_open()</code> で開かれたプロセスに関する情報を取得します。</p>
	 * @param resource $process <p>評価される <code>proc_open()</code> リソース</p>
	 * @return array <p>成功時は集められた情報の配列、失敗時は <b><code>FALSE</code></b> 。 返される配列は次のような要素を持ちます:</p>   要素 型 説明     command <code>string</code>  <code>proc_open()</code> に指定されたコマンド文字列。    pid <code>int</code> プロセス ID   running <code>bool</code>  もしプロセスがまだ動いている場合は、<b><code>TRUE</code></b> 、すでに終了している場合は <b><code>FALSE</code></b>。    signaled <code>bool</code>  子プロセスが、キャッチされていないシグナルにより終了した場合に <b><code>TRUE</code></b> となります。Windows では常に <b><code>FALSE</code></b> にセットされます。    stopped <code>bool</code>  子プロセスが、シグナルにより停止した時に <b><code>TRUE</code></b> となります。 Windows では常に <b><code>FALSE</code></b> にセットされます。    exitcode <code>int</code>  プロセスが返した終了コード (<i>running</i> が <b><code>FALSE</code></b> の時のみ意味を持ちます)。 正しい値を返すのは関数を最初にコールした時のみで、次に コールした際には <i>-1</i> を返します。    termsig <code>int</code>  プロセスを終了させたシグナルの番号です (<i>signaled</i> が <b><code>TRUE</code></b> の時のみ意味を持ちます)。    stopsig <code>int</code>  プロセスを停止させたシグナルの番号です (<i>stopped</i> が <b><code>TRUE</code></b> の時のみ意味を持ちます)。
	 * @link https://php.net/manual/ja/function.proc-get-status.php
	 * @see proc_open()
	 * @since PHP 5, PHP 7
	 */
	function proc_get_status($process): array {}

	/**
	 * 現在のプロセスの優先度を変更する
	 * <p><b>proc_nice()</b> は、現在のプロセスの優先度を <code>increment</code> で指定された値に変更します。 <code>increment</code> が正数の場合、 現在のプロセスの優先度をより低くし、<code>increment</code> が負数の場合は優先度が上がります。</p><p><b>proc_nice()</b> は、<code>proc_open()</code> やそれに関連する関数とは関係ありません。</p>
	 * @param int $increment <p>The new priority value, the value of this may differ on platforms.</p> <p>on Unix, a low value, such as <i>-20</i> means high priority wheras a positive value have a lower priority.</p> <p>For Windows the <code>increment</code> parameter have the following meanings:</p>    Priority class Possible values     High priority  <code>increment</code> <i>&lt; -9</i>    Above normal priority  <code>increment</code> <i>&lt; -4</i>    Normal priority  <code>increment</code> <i>&lt; 5</i> &amp; <code>increment</code> <i>&gt; -5</i>    Below normal priority  <code>increment</code> <i>&gt; 5</i>    Idle priority  <code>increment</code> <i>&gt; 9</i>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 ユーザーが優先度を変更する権限を持っていないなど、 エラーが発生した場合は <b><code>E_WARNING</code></b> レベルのエラーも発行されます。</p>
	 * @link https://php.net/manual/ja/function.proc-nice.php
	 * @since PHP 5, PHP 7
	 */
	function proc_nice(int $increment): bool {}

	/**
	 * コマンドを実行し、入出力用にファイルポインタを開く
	 * <p><b>proc_open()</b> は <code>popen()</code> と よく似ていますが、プログラムの実行をさらに細かく制御できる点で違います。</p>
	 * @param string $cmd <p>実行されるコマンド。</p>
	 * @param array $descriptorspec <p>数値添字の配列で、ディスクリプタ番号をキーとし、PHP がその ディスクリプタをどのように子プロセスに渡すかを表すのが 対応する値となります。 0 が標準入力 (stdin)、1 が標準出力 (stdout) で、 2 が標準エラー出力 (stderr) となります。</p> <p>各要素は、次のようになります。</p><ul> <li> プロセスに渡すパイプをあらわす配列。 最初の要素はディスクリプタの型で、2 番目の要素がその型に対応するオプションとなります。 使用できる型は <i>pipe</i> (2 番目の要素は、 プロセスにパイプの読み込み側を渡すのなら <i>r</i>、 書き込み側を渡すのなら <i>w</i>) および <i>file</i> (2 番目の要素はファイル名) です。 </li> <li> 実際のファイルディスクリプタ (オープンしたファイルやソケット、 <b><code>STDIN</code></b> など) をあらわすストリームリソース。 </li> </ul> <p>ファイルディスクリプタの番号は、特に 0, 1, 2 に限られているわけでは ありません。有効であるどのようなファイルディスクリプタの番号も指定でき、 それは子プロセスに渡されます。これにより、あるスクリプトと、 子プロセスとして起動している別のスクリプトとの間で通信ができます。 特に、これは PGP や GPG、openssl といったプログラムにパスフレーズを より安全な方法で渡したいとき威力を発揮します。 補助的なファイルディスクリプタを介して、そのようなプログラムの 状態を取得するのにも便利です。</p>
	 * @param array $pipes <p>PHP 側で生成されたパイプの終端にあたる ファイルポインタの配列。</p>
	 * @param string $cwd <p>コマンドの初期作業ディレクトリ。 <i>完全</i>パスである必要があります。 デフォルト値 (現在の PHP プロセスの作業ディレクトリ) を使用したい場合は <b><code>NULL</code></b> を指定します。</p>
	 * @param array $env <p>実行するコマンドのための環境変数の配列。 現在の PHP プロセスと同じ環境変数を使用する場合は <b><code>NULL</code></b> を指定します。</p>
	 * @param array $other_options <p>その他の追加オプションを指定することが可能です。 現在サポートされているオプションは次の通りです。</p><ul> <li> <i>suppress_errors</i> (windows のみ): <b><code>TRUE</code></b> にすると、この関数が出力するエラーを抑制します。 </li> <li> <i>bypass_shell</i> (windows のみ): <b><code>TRUE</code></b> にすると、<i>cmd.exe</i> シェルをバイパスします。 </li> </ul>
	 * @return resource <p>プロセスを表すリソースを返します。このリソースは、使用し終えた際に <code>proc_close()</code> を使用して開放する必要があります。 失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.proc-open.php
	 * @see popen(), exec(), system(), passthru(), stream_select()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function proc_open(string $cmd, array $descriptorspec, array &$pipes, string $cwd = NULL, array $env = NULL, array $other_options = NULL) {}

	/**
	 * proc_open でオープンされたプロセスを強制終了する
	 * <p>終了させる (<code>proc_open()</code> を用いて生成された) <code>process</code> にシグナルを送信します。 <b>proc_terminate()</b> は即座に返され、 プロセスの終了を待ちません。</p><p><b>proc_terminate()</b> により、プロセスを終了させ、 他のタスクを継続することができます。<code>proc_get_status()</code> 関数を使用して (停止したかどうかを確認するために) プロセスをポーリングすることができます。</p>
	 * @param resource $process <p>終了させる <code>proc_open()</code> リソース。</p>
	 * @param int $signal <p>このオプションパラメータは POSIX オペレーティングシステムでのみ有用です。 <i>kill(2)</i> システムコールを使用して、 プロセスに送信するシグナルを指定することができます。 デフォルトは <i>SIGTERM</i> です。</p>
	 * @return bool <p>実行していたプロセスの終了状態を返します。</p>
	 * @link https://php.net/manual/ja/function.proc-terminate.php
	 * @see proc_open(), proc_close(), proc_get_status()
	 * @since PHP 5, PHP 7
	 */
	function proc_terminate($process, int $signal = 15): bool {}

	/**
	 * シェルによりコマンドを実行し、文字列として出力全体を返す
	 * <p>この関数は バックティック演算子 と等価です。</p>
	 * @param string $cmd <p>実行するコマンド</p>
	 * @return string <p>実行されたコマンドからの出力を返します。 エラーが発生した場合やコマンドが何も出力しなかった場合は <b><code>NULL</code></b> を返します。</p> <p><b>注意</b>:</p> <p>この関数は、エラーが発生した場合だけでなくプログラムが何も出力しなかった場合にも <b><code>NULL</code></b> を返します。 そのため、実行に失敗したかどうかをこの関数では判断できません。 プログラムの終了コードを調べる必要があるときには <code>exec()</code> を使いましょう。</p>
	 * @link https://php.net/manual/ja/function.shell-exec.php
	 * @see exec(), escapeshellcmd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shell_exec(string $cmd): string {}

	/**
	 * 外部プログラムを実行し、出力を表示する
	 * <p><b>system()</b> は、指定した <code>command</code> を実行し、結果を出力する C 言語の system 関数に似ています。</p><p>PHP をサーバーモジュールとして実行している場合、 <b>system()</b> のコールにより、各行を出力した後、 Web サーバーの出力バッファが自動的にクリアされます。</p><p>コマンドを実行し、何の加工もせずに全てのデータをコマンドから直接 返す必要がある場合、<code>passthru()</code> 関数を使用してください。</p>
	 * @param string $command <p>実行するコマンド。</p>
	 * @param int $return_var <p>引数 <code>return_var</code> が存在する場合、 実行したコマンドの返すステータスがこの変数に書かれます。</p>
	 * @return string <p>成功時はコマンド出力の最後の行を返し、失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.system.php
	 * @see exec(), passthru(), popen(), escapeshellcmd(), pcntl_exec()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function system(string $command, int &$return_var = NULL): string {}

}
