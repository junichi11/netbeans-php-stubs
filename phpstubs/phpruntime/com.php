<?php



namespace {

	/**
	 * グローバルユニーク ID (GUID) を生成する
	 * <p>グローバルユニーク ID (GUID) を生成します。</p><p>GUID は DCE UUID と同様の方法で生成されますが、Microsoft の 規約により、GUID が中括弧で囲まれるという点が異なります。</p>
	 * @return string <p>GUID を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.com-create-guid.php
	 * @since PHP 5, PHP 7
	 */
	function com_create_guid(): string {}

	/**
	 * COM オブジェクトのイベントを PHP オブジェクトに接続する
	 * <p><code>comobject</code> が生成したイベントを PHP オブジェクト <code>sinkobject</code> に通知するよう、COM に指示します。</p><p>この機能を利用する際には注意しましょう。もし以下の例のようなことを 行いたいのであれば、Web サーバー上でそれを行うことには まったく意味がありません。</p>
	 * @param \variant $comobject
	 * @param object $sinkobject <p><code>sinkobject</code> には、要求されるディスパッチ インターフェイスと同じ名前のメソッドを持つクラスのインスタンスを 指定する必要があります。この要求を満たすクラスを作成するために、 <code>com_print_typeinfo()</code> を使用することができます。</p>
	 * @param mixed $sinkinterface <p>PHP は <code>comobject</code> に関連するタイプライブラリで 指定されたデフォルトのディスパッチインターフェイスを使用しようと しますが、使用させたいインターフェイス名を <code>sinkinterface</code> に指定することで、それを 上書きすることが可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.com-event-sink.php
	 * @see com_print_typeinfo(), com_message_pump()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_event_sink(\variant $comobject, object $sinkobject, $sinkinterface = NULL): bool {}

	/**
	 * すでに実行中の COM オブジェクトのインスタンスへのハンドルを返す
	 * <p><b>com_get_active_object()</b> は、新しい COM オブジェクトのインスタンスを作成することに 似ています。しかし、オブジェクトがすでに実行中の場合には そのオブジェクトが返されるという点が違います。 OLE アプリケーションは、既知のアプリケーションを一度だけ起動させる ことを許可するために、"<i>Running Object Table</i>" というものを使用します。 この関数は、実行中のインスタンスのハンドルを取得するために COM ライブラリ関数 GetActiveObject() を公開します。</p>
	 * @param string $progid <p><code>progid</code> は、アクセスしたいオブジェクトの ProgID あるいは CLSID (たとえば <i>Word.Application</i>) である必要があります。</p>
	 * @param int $code_page <p>COM クラスの場合と同様の働きをします。</p>
	 * @return variant <p>要求されたオブジェクトが実行中の場合は、他の COM オブジェクトと 同様にスクリプトへ返されます。</p>
	 * @link https://php.net/manual/ja/function.com-get-active-object.php
	 * @since PHP 5, PHP 7
	 */
	function com_get_active_object(string $progid, int $code_page = NULL): \variant {}

	/**
	 * タイプライブラリを読み込む
	 * <p>タイプライブラリを読み込んで定数をエンジン内に登録し、それらが <code>define()</code> を使用して定義されているかのように 扱えるようにします。</p><p>あまり融通の利く方法ではありませんが、  設定を利用して定数の 事前読み込みと登録をすませるほうがずっと効率的であることに 注意しましょう。</p><p> を有効にすると、 PHP がインスタンス化した COM オブジェクトに関連付けられている定数を 自動的に登録しようと試みます。これは COM オブジェクト自身の提供する インターフェイスに依存し、常に可能であるとは限りません。</p>
	 * @param string $typelib_name <p><code>typelib_name</code> は、以下のいずれかの形式となります。</p><ul> <li> <p><i>.tlb</i> ファイル、あるいはタイプライブラリを含む 実行モジュールのファイル名。</p> </li> <li> <p>タイプライブラリの GUID の後にバージョン番号を続ける。たとえば <i>{00000200-0000-0010-8000-00AA006D2EA4},2,0</i> のような形式。</p> </li> <li> <p>タイプライブラリ名。たとえば <i>Microsoft OLE DB ActiveX Data Objects 1.0 Library</i> のような形式。</p> </li> </ul> PHP は、この順序でタイプライブラリ名の解決を試みます。リストの下の ほうにいくほど検索処理のコストが高くなります。タイプライブラリ名に よる検索は、一致するものが見つかるまでレジストリを物理的に列挙していく という方法をとっています。
	 * @param bool $case_insensitive <p><code>case_insensitive</code> は、 <code>define()</code> 関数の同名のパラメータと同じ働きをします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.com-load-typelib.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function com_load_typelib(string $typelib_name, bool $case_insensitive = true): bool {}

	/**
	 * COM メッセージを処理し、timeoutms ミリ秒の間待つ
	 * <p>この関数は、<code>timeoutms</code> ミリ秒が経過するか キューにメッセージが到着するまで待機します。</p><p>この関数の目的は、別々の場所にある COM のコールを振り分け、同期の 問題をうまく処理することです。これにより、発生するイベントを 効率的にスクリプトで待ち受けられるようになり、バックグラウンドで 動作している他のコードやイベントも処理できるようになります。 COM オブジェクトのイベントを使用している間は、 <code>com_event_sink()</code> 関数の例で示したように この関数をループ内で使用すべきです。</p>
	 * @param int $timeoutms <p>タイムアウト。ミリ秒単位で指定します。</p> <p><code>timeoutms</code> の値を指定しなかった場合は 0 であるとみなされます。0 という値は、一切待機しないことを 意味します。処理待ち状態のメッセージがあればそれを処理し、 なければこの関数はすぐに <b><code>FALSE</code></b> を返します。</p>
	 * @return bool <p>タイムアウトの前に メッセージが到着した場合は、そのメッセージが処理されて 関数は <b><code>TRUE</code></b> を返します。メッセージを処理することなく タイムアウトが発生した場合は、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.com-message-pump.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_message_pump(int $timeoutms = 0): bool {}

	/**
	 * ディスパッチインターフェイスのために、PHP のクラス定義を出力する
	 * <p>この関数の目的は、イベントシンクに使用するスケルトンクラスの作成を支援することです。 You may also use it to generate a dump of any COM object, provided that it supports enough of the introspection interfaces, and that you know the name of the interface you want to display.</p>
	 * @param object $comobject <p><code>comobject</code> は、COM オブジェクトのインスタンスか あるいはタイプライブラリの名前 (<code>com_load_typelib()</code> の規則にしたがって名前解決されます) のいずれかです。</p>
	 * @param string $dispinterface <p>結果を表示したいインターフェイスで、 このインターフェイスは <i>IDispatch</i> を継承したものです。</p>
	 * @param bool $wantsink <p><b><code>TRUE</code></b> の場合、対応するシンクインターフェイスが代わりに表示されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.com-print-typeinfo.php
	 * @see com_event_sink(), com_load_typelib()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_print_typeinfo(object $comobject, string $dispinterface = NULL, bool $wantsink = FALSE): bool {}

	/**
	 * variant の絶対値を返す
	 * <p>variant の絶対値を返します。</p>
	 * @param mixed $val <p>variant。</p>
	 * @return mixed <p><code>val</code> の絶対値を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-abs.php
	 * @see abs()
	 * @since PHP 5, PHP 7
	 */
	function variant_abs($val) {}

	/**
	 * 2 つの variant 値を「加算」し、結果を返す
	 * <p>(MSDN ライブラリによる) 以下の規則に従い、 <code>left</code> を <code>right</code> に加算します。この規則は Visual Basic の規則と一致します。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <p>結果を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-add.php
	 * @see variant_sub()
	 * @since PHP 5, PHP 7
	 */
	function variant_add($left, $right) {}

	/**
	 * 2 つの variant の論理積を計算し、結果を返す
	 * <p>以下の表に基づいた論理 AND 処理を行います。通常の AND 操作とは 少し違いがあることに注意しましょう。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の AND 規則</b>   <code>left</code> <code>right</code> 結果     <b><code>TRUE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>TRUE</code></b> <b><code>FALSE</code></b> <b><code>FALSE</code></b>   <b><code>TRUE</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>   <b><code>FALSE</code></b> <b><code>TRUE</code></b> <b><code>FALSE</code></b>   <b><code>FALSE</code></b> <b><code>FALSE</code></b> <b><code>FALSE</code></b>   <b><code>FALSE</code></b> <b><code>NULL</code></b> <b><code>FALSE</code></b>   <b><code>NULL</code></b> <b><code>TRUE</code></b> <b><code>NULL</code></b>   <b><code>NULL</code></b> <b><code>FALSE</code></b> <b><code>FALSE</code></b>   <b><code>NULL</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>
	 * @link https://php.net/manual/ja/function.variant-and.php
	 * @see variant_or()
	 * @since PHP 5, PHP 7
	 */
	function variant_and($left, $right) {}

	/**
	 * variant を、別の型の新しい variant に変換する
	 * <p>この関数は、<code>variant</code> のコピーを作成して、 それを指定した <code>type</code> に強制的に変換します。</p><p>この関数は、COM ライブラリの VariantChangeType() をラップしたものです。 詳細な情報は MSDN ライブラリを参照ください。</p>
	 * @param \variant $variant <p>variant。</p>
	 * @param int $type <p><code>type</code> は、定数 <b><code>VT_XXX</code></b> の中のひとつでなければなりません。</p>
	 * @return variant <p>与えられた <code>type</code> の variant を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-cast.php
	 * @see variant_set_type()
	 * @since PHP 5, PHP 7
	 */
	function variant_cast(\variant $variant, int $type): \variant {}

	/**
	 * 2 つの variant 値を連結し、その結果を返す
	 * <p><code>left</code> と <code>right</code> を連結し、その結果を返します。</p><p>この関数は、理論上は <code>$left</code> <i>.</i> <code>$right</code> と等価です。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <p>連結した結果を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-cat.php
	 * @since PHP 5, PHP 7
	 */
	function variant_cat($left, $right) {}

	/**
	 * 2 つの variant を比較する
	 * <p><code>left</code> と <code>right</code> を比較します。</p><p>この関数はスカラー値のみを比較します。配列や variant レコードは比較しません。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @param int $lcid <p>文字列の比較に使用する有効なロケール識別子です (これは文字列の比較に影響します)。</p>
	 * @param int $flags <p><code>flags</code> は、以下のひとつあるいは複数の値を OR で組み合わせたもので、文字列の比較に影響します。</p> <b>Variant の比較フラグ</b>   値 意味     <b><code>NORM_IGNORECASE</code></b> 大文字小文字を区別せずに比較する   <b><code>NORM_IGNORENONSPACE</code></b> 非スペーシング文字を無視する   <b><code>NORM_IGNORESYMBOLS</code></b> 記号を無視する   <b><code>NORM_IGNOREWIDTH</code></b> 全角半角を区別しない   <b><code>NORM_IGNOREKANATYPE</code></b> ひらがなカタカナを区別しない   <b><code>NORM_IGNOREKASHIDA</code></b> アラビア語の kashida 文字を無視する
	 * @return int <p>以下のいずれかを返します。</p> <b>Variant の比較結果</b>   値 意味     <b><code>VARCMP_LT</code></b>  <code>left</code> は <code>right</code> より小さい    <b><code>VARCMP_EQ</code></b>  <code>left</code> は <code>right</code> と等しい    <b><code>VARCMP_GT</code></b>  <code>left</code> は <code>right</code> より大きい    <b><code>VARCMP_NULL</code></b>  <code>left</code> と <code>right</code> のいずれか、あるいは両方が <b><code>NULL</code></b>
	 * @link https://php.net/manual/ja/function.variant-cmp.php
	 * @since PHP 5, PHP 7
	 */
	function variant_cmp($left, $right, int $lcid = NULL, int $flags = NULL): int {}

	/**
	 * Unix タイムスタンプを、日付形式の variant で返す
	 * <p>unix タイムスタンプ値 <code>timestamp</code> を <b><code>VT_DATE</code></b> 型の variant に変換します。 これにより、PHP の unix 的な部分と COM とのやりとりが容易になります。</p>
	 * @param int $timestamp <p>unix タイムスタンプ。</p>
	 * @return variant <p><b><code>VT_DATE</code></b> 型の variant を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-date-from-timestamp.php
	 * @see variant_date_to_timestamp(), mktime(), time()
	 * @since PHP 5, PHP 7
	 */
	function variant_date_from_timestamp(int $timestamp): \variant {}

	/**
	 * 日付/時刻の variant 値を Unix タイムスタンプに変換する
	 * <p><code>variant</code> を、<b><code>VT_DATE</code></b> (あるいはそれに似た型) から Unix タイムスタンプに変換します。 これにより、PHP の Unix 的な部分と COM とのやりとりが容易になります。</p>
	 * @param \variant $variant <p>variant。</p>
	 * @return int <p>unix タイムスタンプを返します。</p>
	 * @link https://php.net/manual/ja/function.variant-date-to-timestamp.php
	 * @see variant_date_from_timestamp(), date(), strftime()
	 * @since PHP 5, PHP 7
	 */
	function variant_date_to_timestamp(\variant $variant): int {}

	/**
	 * 2 つの variant の除算結果を返す
	 * <p><code>left</code> を <code>right</code> で割り、その結果を返します。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の除算規則</b>   もし～なら このようにします     両者ともに文字列型・日付型・文字・論理型 Double 型を返す   一方が文字列型で、もう一方が文字 除算結果を double 型で返す   一方が数値で、もう一方が文字列 除算結果を double 型で返す   両者ともに数値 除算結果を double 型で返す   どちらか一方が NULL NULL が返される    <code>right</code> が空の値で <code>left</code> がそれ以外の型 com_exception コード <b><code>DISP_E_DIVBYZERO</code></b> がスローされる    <code>left</code> が空の値で <code>right</code> がそれ以外の型 double 型の 0 が返される   両者ともに空の値 com_exception コード <b><code>DISP_E_OVERFLOW</code></b> がスローされる
	 * @link https://php.net/manual/ja/function.variant-div.php
	 * @see variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_div($left, $right) {}

	/**
	 * 2 つの variant のビット値が等しいかどうかを調べる
	 * <p>2 つの variant のビット値が等しいかどうかを調べます。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <p><code>left</code> の各ビットが <code>right</code> の対応するビットに等しい場合に <b><code>TRUE</code></b> を、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-eqv.php
	 * @since PHP 5, PHP 7
	 */
	function variant_eqv($left, $right) {}

	/**
	 * variant の整数部を返す
	 * <p>variant の整数部を取得します。</p>
	 * @param mixed $variant <p>variant。</p>
	 * @return mixed <p><code>variant</code> が負の数の場合、variant の値以上の 最初の整数値を返します。それ以外の場合は <code>variant</code> の値の整数部分を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-fix.php
	 * @see variant_int(), variant_round(), floor(), ceil(), round()
	 * @since PHP 5, PHP 7
	 */
	function variant_fix($variant) {}

	/**
	 * variant オブジェクトの型を返す
	 * <p>variant オブジェクトの型を返します。</p>
	 * @param \variant $variant <p>variant オブジェクト。</p>
	 * @return int <p>この関数は、<code>variant</code> の型を表す整数値を返します。 <code>variant</code> は COM、 DOTNET あるいは VARIANT クラスのインスタンスです。 返される値は、<b><code>VT_XXX</code></b> 定数のいずれかと比較することが可能です。</p><p>COM および DOTNET オブジェクトの返す値は、通常 <b><code>VT_DISPATCH</code></b> です。これらのクラスに対して この関数が動作する理由は、単に COM および DOTNET が VARIANT を 継承しているからというだけのことです。</p><p>PHP のバージョン 5 より前では、この情報は VARIANT クラスの インスタンスからしか取得できません。そのためには 擬似プロパティ <code>type</code> の値を読み取ります。 これについてのより詳細な情報は VARIANT クラスを参照ください。</p>
	 * @link https://php.net/manual/ja/function.variant-get-type.php
	 * @since PHP 5, PHP 7
	 */
	function variant_get_type(\variant $variant): int {}

	/**
	 * variants を整数に変換し、除算の結果を返す
	 * <p><code>left</code> および <code>right</code> を 整数値に変換し、整数の除算を行います。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の整数除算規則</b>   もし～なら このようにします     両者ともに文字列型・日付型・文字・論理型 除算結果を integer 型で返す   一方が文字列型で、もう一方が文字 除算   一方が数値で、もう一方が文字列 除算   両者ともに数値 除算   どちらか一方が NULL NULL が返される   両者ともに空の値 com_exception コード <b><code>DISP_E_DIVBYZERO</code></b> がスローされる
	 * @link https://php.net/manual/ja/function.variant-idiv.php
	 * @see variant_div()
	 * @since PHP 5, PHP 7
	 */
	function variant_idiv($left, $right) {}

	/**
	 * 2 つの variant のビット implication を行う
	 * <p>ビットの implication 操作を行います。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant Implication テーブル</b>   <code>left</code> <code>right</code> 結果     <b><code>TRUE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>TRUE</code></b> <b><code>FALSE</code></b> <b><code>TRUE</code></b>   <b><code>TRUE</code></b> <b><code>NULL</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>FALSE</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>NULL</code></b> <b><code>TRUE</code></b>   <b><code>NULL</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>NULL</code></b> <b><code>FALSE</code></b> <b><code>NULL</code></b>   <b><code>NULL</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>
	 * @link https://php.net/manual/ja/function.variant-imp.php
	 * @since PHP 5, PHP 7
	 */
	function variant_imp($left, $right) {}

	/**
	 * variant の整数部を返す
	 * <p>variant の整数部を返します。</p>
	 * @param mixed $variant <p>variant。</p>
	 * @return mixed <p><code>variant</code> が負の数の場合、variant の値以上の 最初の整数値を返します。それ以外の場合は <code>variant</code> の値の整数部分を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-int.php
	 * @see variant_fix(), variant_round(), floor(), ceil(), round()
	 * @since PHP 5, PHP 7
	 */
	function variant_int($variant) {}

	/**
	 * 2 つの variant の除算を行い、剰余を返す
	 * <p><code>left</code> を <code>right</code> で除算し、剰余を返します。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <p>除算の剰余を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-mod.php
	 * @see variant_div(), variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_mod($left, $right) {}

	/**
	 * 2 つの variant の乗算を行い、その結果を返す
	 * <p><code>left</code> と <code>right</code> の乗算を行います。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の乗算規則</b>   もし～なら このようにします     両者ともに文字列型・日付型・文字・論理型 乗算   一方が文字列型で、もう一方が文字 乗算   一方が数値で、もう一方が文字列 乗算   両者ともに数値 乗算   どちらか一方が NULL NULL が返される   両者ともに空の値 空の文字列が返される
	 * @link https://php.net/manual/ja/function.variant-mul.php
	 * @see variant_div(), variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_mul($left, $right) {}

	/**
	 * variant の論理否定演算を行う
	 * <p><code>variant</code> の論理否定演算を行います。</p>
	 * @param mixed $variant <p>variant。</p>
	 * @return mixed <p>論理否定演算の結果を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-neg.php
	 * @since PHP 5, PHP 7
	 */
	function variant_neg($variant) {}

	/**
	 * variant のビット否定演算を行う
	 * <p><code>variant</code> のビット否定演算を行い、その結果を返します。</p>
	 * @param mixed $variant <p>variant。</p>
	 * @return mixed <p>ビット否定演算の結果を返します。 <code>variant</code> が <b><code>NULL</code></b> の場合、 結果も <b><code>NULL</code></b> となります。</p>
	 * @link https://php.net/manual/ja/function.variant-not.php
	 * @since PHP 5, PHP 7
	 */
	function variant_not($variant) {}

	/**
	 * 2 つの variant の論理和を計算する
	 * <p>論理 OR 処理を行います。通常の OR 操作とは少し違いがあることに注意しましょう。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の OR 規則</b>   <code>left</code> <code>right</code> 結果     <b><code>TRUE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>TRUE</code></b> <b><code>FALSE</code></b> <b><code>TRUE</code></b>   <b><code>TRUE</code></b> <b><code>NULL</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>FALSE</code></b> <b><code>FALSE</code></b>   <b><code>FALSE</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>   <b><code>NULL</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>NULL</code></b> <b><code>FALSE</code></b> <b><code>NULL</code></b>   <b><code>NULL</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>
	 * @link https://php.net/manual/ja/function.variant-or.php
	 * @see variant_and(), variant_xor()
	 * @since PHP 5, PHP 7
	 */
	function variant_or($left, $right) {}

	/**
	 * 2 つの variant の累乗計算を行い、その結果を返す
	 * <p><code>left</code> の <code>right</code> 乗を返します。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <p><code>left</code> の <code>right</code> 乗を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-pow.php
	 * @see pow()
	 * @since PHP 5, PHP 7
	 */
	function variant_pow($left, $right) {}

	/**
	 * 指定した桁で variant を丸める
	 * <p><code>variant</code> を、 <code>decimals</code> で指定した桁で丸めた結果を返します。</p>
	 * @param mixed $variant <p>variant。</p>
	 * @param int $decimals <p>小数点の位置。</p>
	 * @return mixed <p>丸めた結果を返します。</p>
	 * @link https://php.net/manual/ja/function.variant-round.php
	 * @see round()
	 * @since PHP 5, PHP 7
	 */
	function variant_round($variant, int $decimals) {}

	/**
	 * variant オブジェクトに新しい値を代入する
	 * <p><code>value</code> を variant に変換し、それを <code>variant</code> オブジェクトに代入します。 新しい variant オブジェクトは作成されず、 <code>variant</code> の元の値は開放されます。</p>
	 * @param \variant $variant <p>variant。</p>
	 * @param mixed $value
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.variant-set.php
	 * @since PHP 5, PHP 7
	 */
	function variant_set(\variant $variant, $value): void {}

	/**
	 * variant を「その場で」別の型に変換する
	 * <p>この関数は <code>variant_cast()</code> に似ていますが、 「その場で」変換されるという点が異なります。新しい variant は 作成されません。この関数に渡すパラメータの意味は <code>variant_cast()</code> の場合と同じです。</p>
	 * @param \variant $variant <p>variant。</p>
	 * @param int $type
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.variant-set-type.php
	 * @see variant_cast()
	 * @since PHP 5, PHP 7
	 */
	function variant_set_type(\variant $variant, int $type): void {}

	/**
	 * 左の variant から右の variant を引き、その結果を返す
	 * <p><code>right</code> を <code>left</code> から引きます。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の減算規則</b>   もし～なら このようにします     両者ともに文字列型 減算   一方が文字列型で、もう一方が文字 減算   一方が数値で、もう一方が文字列 減算   両者ともに数値 減算   どちらか一方が NULL NULL が返される   両者ともに空の値 空の文字列が返される
	 * @link https://php.net/manual/ja/function.variant-sub.php
	 * @see variant_add()
	 * @since PHP 5, PHP 7
	 */
	function variant_sub($left, $right) {}

	/**
	 * 2 つの variant の排他的論理和を計算する
	 * <p>排他的論理和を計算します。</p>
	 * @param mixed $left <p>左オペランド。</p>
	 * @param mixed $right <p>右オペランド。</p>
	 * @return mixed <b>Variant の XOR 規則</b>   <code>left</code> <code>right</code> 結果     <b><code>TRUE</code></b> <b><code>TRUE</code></b> <b><code>FALSE</code></b>   <b><code>TRUE</code></b> <b><code>FALSE</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>TRUE</code></b> <b><code>TRUE</code></b>   <b><code>FALSE</code></b> <b><code>FALSE</code></b> <b><code>FALSE</code></b>   <b><code>NULL</code></b> <b><code>NULL</code></b> <b><code>NULL</code></b>
	 * @link https://php.net/manual/ja/function.variant-xor.php
	 * @see variant_or(), variant_and()
	 * @since PHP 5, PHP 7
	 */
	function variant_xor($left, $right) {}

	/**
	 * すべてのクラスコンテキストを表します。 <b><code>CLSCTX_INPROC_HANDLER</code></b> と <b><code>CLSCTX_SERVER</code></b> を OR で連結したものです。
	 */
	define('CLSCTX_ALL', null);

	/**
	 * このクラスのオブジェクトを管理するコードはプロセス内ハンドラです。 これは DLL で、クライアントプロセスで動きます。 クラスのインスタンスがリモートでアクセスされるときに、 このクラスのクライアント側の構造を実装します。
	 */
	define('CLSCTX_INPROC_HANDLER', null);

	/**
	 * このクラスのコードを作成および管理するコードは DLL で、 クラスのコンテキストを指定する呼び出し元の関数と同じプロセスで動きます。
	 */
	define('CLSCTX_INPROC_SERVER', null);

	/**
	 * このクラスのオブジェクトを作成および管理する EXE コードで、 同じマシンで動きますが別のプロセス空間にロードされます。
	 */
	define('CLSCTX_LOCAL_SERVER', null);

	/**
	 * リモートコンテキスト。 このクラスのオブジェクトを作成および管理するコードは、別のコンピュータで動きます。
	 */
	define('CLSCTX_REMOTE_SERVER', null);

	/**
	 * プロセス内、ローカル、リモートのすべてのサーバーコードを表します。 <b><code>CLSCTX_INPROC_SERVER</code></b>、 <b><code>CLSCTX_LOCAL_SERVER</code></b> および <b><code>CLSCTX_REMOTE_SERVER</code></b> を OR で連結したものです。
	 */
	define('CLSCTX_SERVER', null);

	/**
	 * ANSI コードページのデフォルト。
	 */
	define('CP_ACP', null);

	/**
	 * Macintosh コードページ。
	 */
	define('CP_MACCP', null);

	/**
	 * OEM コードページのデフォルト。
	 */
	define('CP_OEMCP', null);

	/**
	 * <i>SYMBOL</i> 変換。
	 */
	define('CP_SYMBOL', null);

	/**
	 * 現在のスレッドの ANSI コードページ。
	 */
	define('CP_THREAD_ACP', null);

	/**
	 * Unicode (UTF-7)。
	 */
	define('CP_UTF7', null);

	/**
	 * Unicode (UTF-8)。
	 */
	define('CP_UTF8', null);

	/**
	 * ゼロ除算エラー。
	 */
	define('DISP_E_DIVBYZERO', null);

	/**
	 * 期待する形式であたいを表すことができないことを意味するエラー。
	 */
	define('DISP_E_OVERFLOW', null);

	/**
	 * iMoniker COM ステータスコード。 その関数が使えないことを表します。
	 */
	define('MK_E_UNAVAILABLE', null);

	/**
	 * 大文字小文字を区別しない。
	 */
	define('NORM_IGNORECASE', null);

	/**
	 * カナの型を無視する。
	 */
	define('NORM_IGNOREKANATYPE', null);

	/**
	 * 使えるかどうかは、元となるライブラリに依存します。
	 */
	define('NORM_IGNOREKASHIDA', null);

	/**
	 * 空白文字以外を無視する。
	 */
	define('NORM_IGNORENONSPACE', null);

	/**
	 * 記号を無視する。
	 */
	define('NORM_IGNORESYMBOLS', null);

	/**
	 * 文字幅を無視する。
	 */
	define('NORM_IGNOREWIDTH', null);

	/**
	 * ふたつのパラメータが等しい。
	 */
	define('VARCMP_EQ', null);

	/**
	 * 左の <i>bstr</i> のほうが右の <i>bstr</i> より大きい。
	 */
	define('VARCMP_GT', null);

	/**
	 * 左の <i>bstr</i> のほうが右の <i>bstr</i> より小さい。
	 */
	define('VARCMP_LT', null);

	/**
	 * 両方の式が NULL である。
	 */
	define('VARCMP_NULL', null);

	/**
	 * 型インジケータを <b><code>VT_ARRAY</code></b> と OR 演算子で組み合わせると、 その値は <i>SAFEARRAY</i> へのポインタとなります。 <b><code>VT_ARRAY</code></b> は、次のデータ型と OR で連結可能です。 <b><code>VT_I1</code></b>, <b><code>VT_UI1</code></b>, <b><code>VT_I2</code></b>, <b><code>VT_UI2</code></b>, <b><code>VT_I4</code></b>, <b><code>VT_UI4</code></b>, <b><code>VT_INT</code></b>, <b><code>VT_UINT</code></b>, <b><code>VT_R4</code></b>, <b><code>VT_R8</code></b>, <b><code>VT_BOOL</code></b>, <b><code>VT_DECIMAL</code></b>, <b><code>VT_ERROR</code></b>, <b><code>VT_CY</code></b>, <b><code>VT_DATE</code></b>, <b><code>VT_BSTR</code></b>, <b><code>VT_DISPATCH</code></b>, <b><code>VT_UNKNOWN</code></b> および <b><code>VT_VARIANT</code></b>.
	 */
	define('VT_ARRAY', null);

	/**
	 * Boolean 値。
	 */
	define('VT_BOOL', null);

	/**
	 * Null 終端の Unicode 文字列へのポインタ。
	 */
	define('VT_BSTR', null);

	/**
	 * 型インジケータを <b><code>VT_BYREF</code></b> と OR 演算子で組み合わせると、 その値は参照となります。参照型はデータへの参照として扱われます。 C++ における参照型と同じです。
	 */
	define('VT_BYREF', null);

	/**
	 * 8 バイト整数値をふたつつなげたもの (スケールは 10,000)。
	 */
	define('VT_CY', null);

	/**
	 * 64 ビット浮動小数点値で、1899 年 12 月 31 日からの経過日数 (秒ではありません) を表します。たとえば <i>January 1, 1900</i> は 2.0、 <i>January 2, 1900</i> は 3.0 のようになります。 格納されるときは <b><code>VT_R8</code></b> と同じ形式になります。
	 */
	define('VT_DATE', null);

	/**
	 * 十進型。
	 */
	define('VT_DECIMAL', null);

	/**
	 * 指定したオブジェクトへのポインタのポインタ。
	 */
	define('VT_DISPATCH', null);

	/**
	 * 型インジケータが <b><code>VT_EMPTY</code></b> であるプロパティには、 何もデータが関連づけられていません。つまり、この値のサイズはゼロです。
	 */
	define('VT_EMPTY', null);

	/**
	 * エラーコード。エラーに関連づけられたステータスコードです。
	 */
	define('VT_ERROR', null);

	/**
	 * 1 バイト符号つき整数値。
	 */
	define('VT_I1', null);

	/**
	 * 2 バイト符号つき整数値。
	 */
	define('VT_I2', null);

	/**
	 * 4 バイト符号つき整数値。
	 */
	define('VT_I4', null);

	/**
	 * 4 バイト符号つき整数値 (<b><code>VT_I4</code></b> と同じ)。
	 */
	define('VT_INT', null);

	/**
	 * NULL ポインタへの参照。
	 */
	define('VT_NULL', null);

	/**
	 * 32 ビット IEEE 浮動小数点値。
	 */
	define('VT_R4', null);

	/**
	 * 64 ビット IEEE 浮動小数点値。
	 */
	define('VT_R8', null);

	/**
	 * 1 バイト符号なし整数値。
	 */
	define('VT_UI1', null);

	/**
	 * 2 バイト符号なし整数値。
	 */
	define('VT_UI2', null);

	/**
	 * 4 バイト符号なし整数値。
	 */
	define('VT_UI4', null);

	/**
	 * 4 バイト符号なし整数値 (<b><code>VT_I4</code></b> と同じ)。
	 */
	define('VT_UINT', null);

	/**
	 * IUnknown インターフェイスを実装したオブジェクトへのポインタ。
	 */
	define('VT_UNKNOWN', null);

	/**
	 * 対応する値を表す型インジケータ。 <b><code>VT_VARIANT</code></b> を使うのは、 <b><code>VT_BYREF</code></b> と組み合わせる場合のみです。
	 */
	define('VT_VARIANT', null);

}
