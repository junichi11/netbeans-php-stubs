<?php



/**
 * 現在のページにブックマークを追加する
 * <p>現在のページにブックマークを追加します。たいてい、ブックマークは PDFビューア上でページの左側にツリー形式で表示されます。 ブックマークをクリックすると、該当ページにジャンプします。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>ブックマークの表示に使用するテキスト。</p>
 * @param int $parent <p>新しいブックマークの親となる、 事前にこの関数で作成されたブックマーク。</p>
 * @param int $open <p><code>open</code> がゼロでない場合、ブックマークは PDF ビューア上で開いた形で表示されます。</p>
 * @return int <p>返り値はブックマークへの参照です。この値は、作成したブックマークを 他のブックマークの親として使用する場合にのみ使われます。 成功した場合には、この値はゼロより大きくなります。 エラーが発生した場合にはゼロを返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-bookmark.php
 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_bookmark($psdoc, string $text, int $parent = 0, int $open = 0): int {}

/**
 * ファイルを実行するためのリンクを追加する
 * <p>クリックした際にファイルが実行されるハイパーリンクを、 指定した場所に設定します。ハイパーリンクのリンク元は矩形で表され、 その左下の座標は (llx, lly)、そして右上の座標が (urx, ury) となります。 この矩形はデフォルトでは細い青線で表されます。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $llx <p>左下角の x 座標。</p>
 * @param float $lly <p>左下角の y 座標。</p>
 * @param float $urx <p>右上角の x 座標。</p>
 * @param float $ury <p>右上角の y 座標。</p>
 * @param string $filename <p>リンクがクリックされた際に開始するプログラムのパス。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-launchlink.php
 * @see ps_add_locallink(), ps_add_pdflink(), ps_add_weblink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_launchlink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename): bool {}

/**
 * 同一ドキュメント内のページへのリンクを追加する
 * <p>指定した位置に、同一ドキュメント内のページへのハイパーリンクを設定します。 リンクをクリックすると、そのページに移動します。ドキュメントの最初の ページのページ番号は 1 です。</p><p>ハイパーリンクのリンク元は矩形で表され、その左下の座標は (<code>llx</code>, <code>lly</code>)、 そして右上の座標が (<code>urx</code>, <code>ury</code>) となります。この矩形はデフォルトでは細い青線で表されます。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $llx <p>左下角の x 座標。</p>
 * @param float $lly <p>左下角の y 座標。</p>
 * @param float $urx <p>右上角の x 座標。</p>
 * @param float $ury <p>右上角の y 座標。</p>
 * @param int $page <p>リンクがクリックされた際に開始するページ。</p>
 * @param string $dest <p><code>dest</code> は、ドキュメントがどのように 表示されるかを指定します。とりうる値は <i>fitpage</i> または <i>fitwidth</i>、 <i>fitheight</i>、<i>fitbbox</i> のいずれかです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-locallink.php
 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_locallink($psdoc, float $llx, float $lly, float $urx, float $ury, int $page, string $dest): bool {}

/**
 * 現在のページに注釈を追加する
 * <p>ページの特定の位置に注釈を追加します。注釈は、 テキストが記入された小さな矩形で、ページ上のどこにでも配置できます。 折りたたんで保持することもでき、折りたたまれている場合は、 指定したアイコンをプレースホルダとして使います。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $llx <p>左下角の x 座標。</p>
 * @param float $lly <p>左下角の y 座標。</p>
 * @param float $urx <p>右上角の x 座標。</p>
 * @param float $ury <p>右上角の y 座標。</p>
 * @param string $contents <p>注釈のテキスト。</p>
 * @param string $title <p>注釈のヘッダに表示される、タイトル。</p>
 * @param string $icon <p>注釈が折りたたまれた際に表示されるアイコン。 <i>comment</i>、<i>insert</i>、 <i>note</i>、<i>paragraph</i>、 <i>newparagraph</i>、<i>key</i> あるいは <i>help</i> のいずれかが設定できます。</p>
 * @param int $open <p><code>open</code> がゼロでない場合、 PDF ビューア上でドキュメントをオープンすると、 注釈は折りたたまれずに表示されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-note.php
 * @see ps_add_pdflink(), ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_note($psdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open): bool {}

/**
 * 別の PDF ドキュメントのページへのリンクを追加する
 * <p>指定した位置に、別の PDF ドキュメントへのハイパーリンクを設定します。 リンクをクリックすると、そのドキュメントの指定されたページに移動します。 ドキュメントの最初のページのページ番号は 1 です。</p><p>ハイパーリンクのリンク元は矩形で表され、その左下の座標は (<code>llx</code>, <code>lly</code>)、 そして右上の座標が (<code>urx</code>, <code>ury</code>) となります。この矩形はデフォルトでは細い青線で表されます。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $llx <p>左下角の x 座標。</p>
 * @param float $lly <p>左下角の y 座標。</p>
 * @param float $urx <p>右上角の x 座標。</p>
 * @param float $ury <p>右上角の y 座標。</p>
 * @param string $filename <p>リンクがクリックされた際に開かれる PDF ドキュメントの名前。</p>
 * @param int $page <p>対象 PDF ドキュメントのページ番号。</p>
 * @param string $dest <p><code>dest</code> は、ドキュメントがどのように 表示されるかを指定します。とりうる値は <i>fitpage</i> または <i>fitwidth</i>、 <i>fitheight</i>、<i>fitbbox</i> のいずれかです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-pdflink.php
 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_pdflink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $dest): bool {}

/**
 * Web 上の場所へのリンクを追加する
 * <p>指定した位置に、Web ページを指すハイパーリンクを設定します。 ハイパーリンクのリンク元はは矩形で表され、その左下の座標は (<code>llx</code>, <code>lly</code>)、 そして右上の座標が (<code>urx</code>, <code>ury</code>) となります。 この矩形はデフォルトでは細い青線で表されます。</p><p>注釈は、 ドキュメントを印刷したり表示したりするときには表示されません。 しかし、Acrobat Distiller&#63; あるいは Ghostview でドキュメントを pdf に変換すると表示されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $llx <p>左下角の x 座標。</p>
 * @param float $lly <p>左下角の y 座標。</p>
 * @param float $urx <p>右上角の x 座標。</p>
 * @param float $ury <p>右上角の y 座標。</p>
 * @param string $url <p>リンクがクリックされた際に開かれるハイパーリンクの URL。 例えば <i>http://www.php.net</i></p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-add-weblink.php
 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_pdflink()
 * @since PECL ps >= 1.1.0
 */
function ps_add_weblink($psdoc, float $llx, float $lly, float $urx, float $ury, string $url): bool {}

/**
 * 反時計回りに円弧を描く
 * <p>(<code>x</code>, <code>y</code>) を中心とした円の一部を描きます。円弧は <code>alpha</code> で指定された角度からはじまり <code>beta</code> で指定された角度で終わります。反時計回りに描かれます (時計回りに描くには <code>ps_arcn()</code> を使用します)。 また、<code>alpha</code> で指定された角度からはじまって <code>beta</code> で指定された角度で終わるサブパスが、 現在のパスに追加されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>円の中心の x 座標。</p>
 * @param float $y <p>円の中心の y 座標。</p>
 * @param float $radius <p>円の半径。</p>
 * @param float $alpha <p>開始位置の角度を度単位で指定。</p>
 * @param float $beta <p>終了位置の角度を度単位で指定。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-arc.php
 * @see ps_arcn()
 * @since PECL ps >= 1.1.0
 */
function ps_arc($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

/**
 * 時計回りに円弧を描く
 * <p>(<code>x</code>, <code>y</code>) を中心とした円の一部を描きます。円弧は <code>alpha</code> で指定された角度からはじまり <code>beta</code> で指定された角度で終わります。 時計回りに描かれます (反時計回りに描くには <code>ps_arc()</code> を使用します)。 また、<code>beta</code> で指定された角度からはじまって <code>alpha</code> で指定された角度で終わるサブパスが、カレントパスに追加されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>円の中心の x 座標。</p>
 * @param float $y <p>円の中心の y 座標。</p>
 * @param float $radius <p>円の半径。</p>
 * @param float $alpha <p>開始位置の角度を度単位で指定。</p>
 * @param float $beta <p>終了位置の角度を度単位で指定。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-arcn.php
 * @see ps_arc()
 * @since PECL ps >= 1.1.0
 */
function ps_arcn($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

/**
 * 新しいページを開始する
 * <p>新しいページを開始します。<code>width</code> や <code>height</code> というパラメータを見ると いかにもページ単位でサイズを変えられるように思えますが、PostScript ではこれは不可能です。最初に <b>ps_begin_page()</b> を呼んだ際に指定されたサイズが、ドキュメント全体に適用されます。 2 回目以降に呼ばれた場合はこのパラメータは意味を持たず、 単に新しいページが作られるだけです。しかし、もしあなたが PostScript ドキュメントを PDF に変換しようと考えているのなら話は別です。 この関数はドキュメントの各ページごとに pdfmark を設定するので、 PDF に変換した後はページごとにサイズを変えることができます。</p><p>PostScript はさまざまなページサイズを知らないので、pslib ではドキュメントの各ページに対してバウンディングボックスを設定します。 このサイズは PostScript ビューアによって評価され、 ドキュメントヘッダの BoundingBox より優先されます。 左下角が (0, 0) ではない BoundingBox を設定すると、 予期せぬ結果を引き起こすことがあります。なぜなら、 ページ単位のバウンディングボックスは常に左下角が (0, 0) であり、 これが全体の設定より優先されるからです。</p><p>個々のページの情報はカプセル化して保存されています。どういうことかというと、 あるページで設定した情報のほとんどは次のページに引き継がれないということです。</p><p>最初の <b>ps_begin_page()</b> 呼び出しまでに一度も <code>ps_findfont()</code> が呼び出されていなかった場合は、 PostScript ドキュメントのヘッダが出力され、 バウンディングボックスが最初のページのサイズに設定されます。 バウンディングボックスの左下角は (0, 0) に設定されます。もしすでに <code>ps_findfont()</code> が呼ばれていた場合は既にヘッダが出力されてしまっており、 ドキュメントに適切なバウンディングボックスが設定されていないことになります。 このようなことを避けるために、<code>ps_findfont()</code> や <b>ps_begin_page()</b> を実行する前にはいつも <code>ps_set_info()</code> を実行し、 <i>BoundingBox</i> や <i>Orientation</i> の値を設定しておくべきです。</p><p><b>注意</b>:</p><p>pslib のバージョン 0.2.6 まででは、 <code>ps_set_info()</code> によって事前に設定されていたり <code>ps_findfont()</code> が事前にコールされていない限り、 この関数は常に BoundingBox および Orientation を上書きします。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $width <p>ピクセル単位のページの幅 (例: A4 の場合は 596)。</p>
 * @param float $height <p>ピクセル単位のページの高さ (例: A4 の場合は 842)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-begin-page.php
 * @see ps_end_page(), ps_findfont(), ps_set_info()
 * @since PECL ps >= 1.1.0
 */
function ps_begin_page($psdoc, float $width, float $height): bool {}

/**
 * 新しいパターンを開始する
 * <p>新しいパターンを開始します。パターンとは、 領域を塗りつぶすための描画データを含むページのようなものです。 <code>ps_setcolor()</code> をコールする際に <i>pattern</i> に色空間を指定すると、 これは色のように使用されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $width <p>ピクセル単位のパターンの幅。</p>
 * @param float $height <p>ピクセル単位のパターンの高さ。</p>
 * @param float $xstep
 * @param float $ystep
 * @param int $painttype <p>1 あるいは 2 でなければなりません。</p>
 * @return int <p>パターンの ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-begin-pattern.php
 * @see ps_end_pattern(), ps_setcolor(), ps_shading_pattern()
 * @since PECL ps >= 1.2.0
 */
function ps_begin_pattern($psdoc, float $width, float $height, float $xstep, float $ystep, int $painttype): int {}

/**
 * 新しいテンプレートを開始する
 * <p>新しいテンプレートを開始します。テンプレートは、postscript 言語からコールされます。パターンと似ていますが、画像のように使用されます。 テンプレートは、ドキュメント内で何回も使用される描画内容、 例えば会社のロゴなどに対して使用されることが多いでしょう。 テンプレート内では、すべての描画関数が使用されます。 テンプレートは、<code>ps_place_image()</code> によって配置されるまでは描画されません。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $width <p>ピクセル単位のテンプレートの幅。</p>
 * @param float $height <p>ピクセル単位のテンプレートの高さ。</p>
 * @return int <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-begin-template.php
 * @see ps_end_template()
 * @since PECL ps >= 1.2.0
 */
function ps_begin_template($psdoc, float $width, float $height): int {}

/**
 * 円を描く
 * <p>(<code>x</code>, <code>y</code>) を中心とする円を描きます。描画開始位置は (<code>x</code>+<code>radius</code>, <code>y</code>) です。もしパスの外部でこの関数が呼び出された場合、 新しいパスを開始します。パスの内部で呼び出された場合は、 円をサブパスとして追加します。ひとつ前の描画処理の終点が (<code>x</code>+<code>radius</code>, <code>y</code>) でなかった場合、パスに隙間ができることになります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>円の中心の x 座標。</p>
 * @param float $y <p>円の中心の y 座標。</p>
 * @param float $radius <p>円の半径。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-circle.php
 * @see ps_arc(), ps_arcn()
 * @since PECL ps >= 1.1.0
 */
function ps_circle($psdoc, float $x, float $y, float $radius): bool {}

/**
 * 現在のパスを描画範囲として指定する
 * <p>現在のパスを、描画範囲の境界として定義します。 この領域の外に描画された内容は、見えなくなります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-clip.php
 * @see ps_closepath()
 * @since PECL ps >= 1.1.0
 */
function ps_clip($psdoc): bool {}

/**
 * PostScript ドキュメントを閉じる
 * <p>PostScript ドキュメントを閉じます。</p><p>この関数は、PostScript ドキュメントのトレーラーを書き込みます。 また、ブックマークツリーも書き込みます。<b>ps_close()</b> は、リソースの開放は行いません。これは <code>ps_delete()</code> が行います。</p><p>もし事前にコールされていない場合、この関数は <code>ps_delete()</code> からもコールされます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-close.php
 * @see ps_open_file(), ps_delete()
 * @since PECL ps >= 1.1.0
 */
function ps_close($psdoc): bool {}

/**
 * 画像を閉じ、メモリを開放する
 * <p>画像を閉じ、そのリソースを開放します。 いったん閉じられた後は、画像を使用することはできません。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $imageid <p><code>ps_open_image()</code> あるいは <code>ps_open_image_file()</code> が返す、 画像のリソース ID。</p>
 * @return void <p>成功した場合に <b><code>NULL</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-close-image.php
 * @see ps_open_image(), ps_open_image_file()
 * @since PECL ps >= 1.1.0
 */
function ps_close_image($psdoc, int $imageid): void {}

/**
 * パスを閉じる
 * <p>パスの終了点と開始点をつなげます。出来上がったパスは、 描画、塗りつぶし、切り取りなどに使用されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-closepath.php
 * @see ps_clip(), ps_closepath_stroke()
 * @since PECL ps >= 1.1.0
 */
function ps_closepath($psdoc): bool {}

/**
 * パスを閉じ、描画する
 * <p>パスの終了点を開始点とつなげ、出来上がった線を描画します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-closepath-stroke.php
 * @see ps_closepath()
 * @since PECL ps >= 1.1.0
 */
function ps_closepath_stroke($psdoc): bool {}

/**
 * 次の行にテキストを続ける
 * <p>最終行の次の行からテキストを出力します。行間隔は "leading" の値が用いられます。この値は <code>ps_set_value()</code> を用いて指定する必要があります。 実際のテキストの出力位置は、"textx" と "texty" の値によって決まります。 この値は <code>ps_get_value()</code> を用いて取得することができます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>出力するテキスト。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-continue-text.php
 * @see ps_show(), ps_show_xy(), ps_show_boxed()
 * @since PECL ps >= 1.1.0
 */
function ps_continue_text($psdoc, string $text): bool {}

/**
 * 曲線を描く
 * <p>現在のパスに対して、3 つの制御点を指定して 3 次ベジエ曲線を追加します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x1 <p>最初の制御点の x 座標。</p>
 * @param float $y1 <p>最初の制御点の y 座標。</p>
 * @param float $x2 <p>2 番目の制御点の x 座標。</p>
 * @param float $y2 <p>2 番目の制御点の y 座標。</p>
 * @param float $x3 <p>3 番目の制御点の x 座標。</p>
 * @param float $y3 <p>3 番目の制御点の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-curveto.php
 * @see ps_lineto()
 * @since PECL ps >= 1.1.0
 */
function ps_curveto($psdoc, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

/**
 * PostScript ドキュメントの全リソースを削除する
 * <p>ドキュメントが使用していたメモリを開放します。また、 もし事前に <code>ps_close()</code> でファイルが閉じられていない場合はファイルを閉じます。 どんな場合でも、事前に <code>ps_close()</code> でファイルを閉じておくべきです。なぜなら <code>ps_close()</code> はファイルをただ閉じるだけではなく、トレーラーを出力するからです。 ここには、ドキュメントのページ数やブックマーク階層といった情報が含まれます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-delete.php
 * @see ps_close()
 * @since PECL ps >= 1.1.0
 */
function ps_delete($psdoc): bool {}

/**
 * ページを終了する
 * <p><code>ps_begin_page()</code> によって開始したページを終了します。 ページを終了しても、現在の描画コンテキストはそのままになります。つまり、 もしページ内部でフォントが読み込まれたのなら、 それを再読み込みしてしなければなりません。 また、行の幅や色などのその他の描画パラメータも再設定する必要があります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-end-page.php
 * @see ps_begin_page()
 * @since PECL ps >= 1.1.0
 */
function ps_end_page($psdoc): bool {}

/**
 * パターンを終了する
 * <p><code>ps_begin_pattern()</code> によって開始したパターンを終了します。 パターンが終了すると、領域の塗りつぶし時にそれを使用できるようになります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-end-pattern.php
 * @see ps_begin_pattern()
 * @since PECL ps >= 1.2.0
 */
function ps_end_pattern($psdoc): bool {}

/**
 * テンプレートを終了する
 * <p><code>ps_begin_template()</code> によって開始したテンプレートを終了します。 テンプレートが終了すると、それを画像のように使用できるようになります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-end-template.php
 * @see ps_begin_template()
 * @since PECL ps >= 1.2.0
 */
function ps_end_template($psdoc): bool {}

/**
 * 現在のパスを塗りつぶす
 * <p><code>ps_lineto()</code> のような描画関数によって事前に作成されたパスを塗りつぶします。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-fill.php
 * @see ps_fill_stroke(), ps_stroke()
 * @since PECL ps >= 1.1.0
 */
function ps_fill($psdoc): bool {}

/**
 * 現在のパスを塗りつぶし、線を引く
 * <p><code>ps_lineto()</code> のような描画関数によって事前に作成されたパスを塗りつぶし、描画します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-fill-stroke.php
 * @see ps_fill(), ps_stroke()
 * @since PECL ps >= 1.1.0
 */
function ps_fill_stroke($psdoc): bool {}

/**
 * フォントを読み込む
 * <p>あとで使用するために、フォントを読み込みます。読み込んだフォントを実際に利用するためには、 <code>ps_setfont()</code> で設定しなければなりません。 文字の間隔を計算するため、この関数は adobe フォントメトリックファイルを必要とします。 ページの内部で読み込まれたフォントは、 そのページ内でのみ有効となります。ドキュメント全体で使われるフォントは、 最初の <code>ps_begin_page()</code> の実行より前に読み込まれなければなりません。 ページとページの間で <b>ps_findfont()</b> が呼ばれた場合は、それ以降のページでフォントが有効になります。</p><p>afm ファイルの名前は、 <code>fontname</code><i>.afm</i> でなければなりません。 フォントを埋め込む場合は、フォントのアウトラインを含む <code>fontname</code><i>.pfb</i> が存在しなければなりません。</p><p>最初のページを処理する前に <b>ps_findfont()</b> をコール際、 postscript ヘッダが出力されます。ここには、ドキュメント全体に適用される BoundingBox が含まれます。 通常は、BoundingBox を設定するのは最初に <code>ps_begin_page()</code> がコールされたときで、これは <b>ps_findfont()</b> をコールした後になります。 したがって、<b>ps_findfont()</b> のコール時にはまだ BoundingBox が設定されておらず、警告が発生してしまいます。 こうなることを避けるため、<b>ps_findfont()</b> をコールする前に <code>ps_set_parameter()</code> をコールし、BoundingBox を設定しておくべきです。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $fontname <p>フォントの名前。</p>
 * @param string $encoding <p><b>ps_findfont()</b> は、<code>encoding</code> で渡されたファイルを読み込もうと試みます。 エンコーディングファイルは、 <b>dvips(1)</b> で使われるものと同形式です。 そこにはフォントエンコーディングベクタ（現在は利用されていませんが、 存在する必要があります）が含まれており、また afm ファイルから 生成されたリゲチャのリストを拡張するための拡張リゲチャが含まれています。</p> <p><code>encoding</code> は <b><code>NULL</code></b> または空文字列とすることも可能で、 その場合はデフォルトエンコーディング（TeXBase1）が用いられます。</p> <p>encoding が <i>builtin</i> と指定された場合は、 エンコード処理は行われずにフォント固有のエンコーディングがそのまま用いられます。 これは、記号フォントを扱う場合に便利です。</p>
 * @param bool $embed <p>0 より大きい値を設定すると、フォントがドキュメントに埋め込まれます。 これを使用するには、フォントのアウトライン (.pfb ファイル) が必要です。</p>
 * @return int <p>成功した場合にフォントの ID を、失敗した場合にゼロを返します。 ID は正の数値です。</p>
 * @link http://php.net/manual/ja/function.ps-findfont.php
 * @see ps_begin_page(), ps_setfont()
 * @since PECL ps >= 1.1.0
 */
function ps_findfont($psdoc, string $fontname, string $encoding, bool $embed = false): int {}

/**
 * 生成された PS データを含むバッファの内容を取得する
 * <p>この関数は、まだ実装されていません。常に空の文字列を返します。 メモリ内でのデータ作成が求められる場合に、postscript ファイルを内部バッファに読み込み、バッファの内容をこの関数で取得する、 という実装を計画中です。 現在は、メモリ内で作成されたデータはバッファリングされず直接ブラウザに送られます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return string
 * @link http://php.net/manual/ja/function.ps-get-buffer.php
 * @see ps_open_file()
 * @since PECL ps >= 1.1.0
 */
function ps_get_buffer($psdoc): string {}

/**
 * パラメータを取得する
 * <p><code>ps_set_parameter()</code> で直接設定されたか、 あるいは他の関数で間接的に設定されたパラメータの値を取得します。 パラメータは文字列値として定義されます。この関数は、 同じく <code>ps_set_parameter()</code> で設定されたリソースを取得するためには利用できません。</p><p>パラメータ <code>name</code> は、以下の値をとります。</p><p></p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの名前。</p><p>現在アクティブなフォントのエンコーディング。</p><p>元になる pslib ライブラリのバージョン。書式は &lt;major&gt;.&lt;minor&gt;.&lt;subminor&gt;</p><p>現在の描画スコープ。object, document, null, page, pattern, path, template, prolog, font, glyph。</p><p>リゲチャを溶かす文字。たとえば、リゲチャ `ff' を含むフォントで `|' がこの文字に指定されていた場合は、 `f|f' はリゲチャ `ff' ではなく 2 つの独立した `f' となります。</p><p>画像の符号化に使用するエンコーディング。 <i>hex</i> あるいは <i>85</i>。 hex エンコーディングは、画像の各バイトを postscript ファイルの 2 バイトであらわします。85 は Ascii85 エンコーディングを表します。</p><p>行番号を段落単位でつける場合は <i>paragraph</i>、 ボックス内でつける場合は <i>box</i> を設定します。</p><p>テキストを <code>ps_show_boxed()</code> で出力する場合にのみ使用します。 <b><code>TRUE</code></b> を設定すると、 改行時にキャリッジリターンが付加されます。</p><p>テキストを <code>ps_show_boxed()</code> で出力する場合にのみ使用します。 <b><code>TRUE</code></b> を設定すると、 キャリッジリターンで新しい段落を開始します。</p><p>テキストを <code>ps_show_boxed()</code> で出力する場合にのみ使用します。 <b><code>TRUE</code></b> を設定すると、 ハイフネーション辞書が設定されており存在する場合に、 段落のハイフネーション処理が行われます。</p><p>ハイフネーションパターンの辞書のファイル名。</p>
 * @param resource $psdoc
 * @param string $name
 * @param float $modifier
 * @return string <p>成功した場合にパラメータの値を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-get-parameter.php
 * @see ps_set_parameter()
 * @since PECL ps >= 1.1.0
 */
function ps_get_parameter($psdoc, string $name, float $modifier = NULL): string {}

/**
 * 値を取得する
 * <p><code>ps_set_value()</code> で設定された値を取得します。 値は浮動小数点数値として定義されます。</p><p>パラメータ <code>name</code> には以下の値を設定できます。</p><p></p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの名前。</p><p>現在アクティブなフォント自身。</p><p>パラメータ <code>modifier</code> で渡された ID の画像の幅。</p><p>パラメータ <code>modifier</code> で渡された ID の画像の高さ。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントにおける、 大文字の M の高さ。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの ascender (上に突き出している部分の長さ)。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの descender (下に突き出している部分の長さ)。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの斜体の角度。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの下線の位置。</p><p>現在アクティブなフォント、 あるいはパラメータ <code>modifier</code> で指定された ID を持つフォントの下線の太さ。</p><p>現在のテキスト出力位置の x 座標。</p><p>現在のテキスト出力位置の y 座標。</p><p>現在のテキストのレンダリングモード。</p><p>ベースライン上部の空間。</p><p>テキストの行間隔をポイント数で指定。</p><p>単語と単語の間の空白の幅を、空白文字の幅を基準として指定。</p><p>文字と文字の間の空白。0.0 でない場合は、リゲチャは常に分解されます。</p><p>単語の末尾で、ハイフネーションの対象となる最小文字数。</p><p>各段落の最初の n 行を字下げします。</p><p>parindent が 0.0 でない場合に、段落内で字下げする行数。</p><p>段落と段落の間隔。</p><p>行番号を表示するために、各行の先頭に置く空白。</p><p>行番号と行の内容の間隔。</p><p>pslib のメジャーバージョン番号。</p><p>pslib のマイナーバージョン番号。</p><p>pslib の詳細バージョン番号。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $name <p>値の名前。</p>
 * @param float $modifier <p><code>modifier</code> は、値を取得しようとしている リソースを指定します。たとえばフォントや画像の ID が考えられます。</p>
 * @return float <p>成功した場合にパラメータの値を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-get-value.php
 * @see ps_set_value()
 * @since PECL ps >= 1.1.0
 */
function ps_get_value($psdoc, string $name, float $modifier = NULL): float {}

/**
 * 単語をハイフネーションする
 * <p>渡された単語をハイフネーションします。<b>ps_hyphenate()</b> は、(<code>ps_set_value()</code> で設定した) hyphenminchars の値と (<code>ps_set_parameter()</code> で設定した) hyphendict パラメータの内容を評価します。 hyphendict は、この関数を呼ぶ前に必ず設定しておかなければなりません。</p><p>この関数を利用するためには、LC_CTYPE が適切に設定されている必要があります。 PostScript 拡張が初期化される際、環境変数の値が利用されます。 Unix 環境を利用している方は、詳細な情報は locale の man ページを見てください。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p><code>text</code> にはアルファベット以外の文字を 含むべきではありません。ハイフンで分割できる位置が、 整数値の配列として返されます。配列の個々の要素の内容は、 <code>text</code> 内でハイフンを入れられる場所の 次の文字の位置を表します。</p>
 * @return array <p>テキスト内で改行を入れられる位置を表す整数値の配列、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-hyphenate.php
 * @see ps_show_boxed()
 * @since PECL ps >= 1.1.1
 */
function ps_hyphenate($psdoc, string $text): array {}

/**
 * 外部ファイルを生の PostScript コードとして読み込む
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す postscript ファイルの ID リソース。</p>
 * @param string $file
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-include-file.php
 * @since PECL ps >= 1.3.4
 */
function ps_include_file($psdoc, string $file): bool {}

/**
 * 直線を描く
 * <p>現在の位置から指定された座標までの直線を現在のパスに追加します。 直線の開始位置を指定するには <code>ps_moveto()</code> を利用します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>直線の終了地点の x 座標。</p>
 * @param float $y <p>直線の終了地点の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-lineto.php
 * @see ps_moveto()
 * @since PECL ps >= 1.1.0
 */
function ps_lineto($psdoc, float $x, float $y): bool {}

/**
 * スポット色を作成する
 * <p>現在の塗りつぶし色からスポット色を作成します。塗りつぶし色の色空間は rgb, cmyk または グレースケールのいずれかでなければなりません。 スポット色には任意の名前をつけることができます。 スポット色には、<code>ps_setcolor()</code> を用いてどんな色でも設定できます。 ドキュメントが印刷されずに postscript ビューアで表示される場合にも、 指定した色空間の色が使用されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $name <p>スポット色の名前、例えば Pantone 5565。</p>
 * @param int $reserved
 * @return int <p>成功した場合にスポット色の ID を、失敗した場合にゼロを返します。</p>
 * @link http://php.net/manual/ja/function.ps-makespotcolor.php
 * @see ps_setcolor()
 * @since PECL ps >= 1.1.0
 */
function ps_makespotcolor($psdoc, string $name, int $reserved = 0): int {}

/**
 * 現在位置を設定する
 * <p>現在位置を新しい座標に指定します。前回のパスが終了してからはじめて <b>ps_moveto()</b> が呼ばれた場合、新しいパスを開始します。 もしすでにパスが開始されているときに呼ばれた場合は、 単に現在位置を設定し、サブパスを開始します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>移動する位置の x 座標。</p>
 * @param float $y <p>移動する位置の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-moveto.php
 * @see ps_lineto()
 * @since PECL ps >= 1.1.0
 */
function ps_moveto($psdoc, float $x, float $y): bool {}

/**
 * 新しい PostScript ドキュメントオブジェクトを作成する
 * <p>新しいドキュメントのインスタンスを生成します。 ディスク上やメモリ内にファイルを作ることはありません。 ドキュメントのインスタンスがすべてを設定します。 <b>ps_new()</b> の後には、通常は <code>ps_open_file()</code> がコールされます。これにより、 実際に postscript ドキュメントが作成されます。</p>
 * @return resource <p>成功した場合に PostScript ドキュメントのリソースを、 失敗した場合に <b><code>FALSE</code></b> を返します。 この返り値は、その他のすべての関数の最初の引数として渡されます。</p>
 * @link http://php.net/manual/ja/function.ps-new.php
 * @see ps_delete()
 * @since PECL ps >= 1.1.0
 */
function ps_new() {}

/**
 * 出力用のファイルを開く
 * <p>ディスク上に新しいファイルを作成し、PostScript ドキュメントをその中に書き込みます。<code>ps_close()</code> が呼ばれると、ファイルは閉じられます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $filename <p>postscript ファイルの名前。 <code>filename</code> が渡されなかった場合、 ドキュメントはメモリ内に作成され、内容は直接ブラウザに出力されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-open-file.php
 * @see ps_close()
 * @since PECL ps >= 1.1.0
 */
function ps_open_file($psdoc, string $filename = NULL): bool {}

/**
 * 後で配置するために画像を読み込む
 * <p>すでにメモリ上にある画像を読み込みます。現在は <code>source</code> は評価されず、常に <i>memory</i> と仮定されます。 画像データは、左上から右下に向かってピクセルデータを順に並べたものです。 各ピクセルは、色コンポーネント <code>components</code> で構成されており、このコンポーネントの大きさは <code>bpc</code> ビットです。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $type <p>画像の形式。<i>png</i>、 <i>jpeg</i> あるいは <i>eps</i>。</p>
 * @param string $source <p>使用されません。</p>
 * @param string $data <p>画像データ。</p>
 * @param int $lenght
 * @param int $width <p>画像の幅。</p>
 * @param int $height <p>画像の高さ。</p>
 * @param int $components <p>各ピクセルのコンポーネントの数。 1 (グレースケール画像)、 3 (rgb 画像) あるいは 4 (cmyk, rgba 画像)。</p>
 * @param int $bpc <p>コンポーネント単位のビット数 (ほとんどの場合は 8)</p>
 * @param string $params
 * @return int <p>成功した場合に画像の ID を、失敗した場合にゼロを返します。 ID は、0 より大きい正の数値です。</p>
 * @link http://php.net/manual/ja/function.ps-open-image.php
 * @see ps_open_image_file(), ps_place_image(), ps_close_image()
 * @since PECL ps >= 1.1.0
 */
function ps_open_image($psdoc, string $type, string $source, string $data, int $lenght, int $width, int $height, int $components, int $bpc, string $params): int {}

/**
 * ファイルから画像を開く
 * <p>後で使用するために、画像を読み込みます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $type <p>画像の形式。<i>png</i>、 <i>jpeg</i> あるいは <i>eps</i>。</p>
 * @param string $filename <p>画像データを含むファイルの名前。</p>
 * @param string $stringparam <p>使用されません。</p>
 * @param int $intparam <p>使用されません。</p>
 * @return int <p>成功した場合に画像の ID を、失敗した場合にゼロを返します。 ID は、0 より大きい正の数値です。</p>
 * @link http://php.net/manual/ja/function.ps-open-image-file.php
 * @see ps_open_image(), ps_place_image(), ps_close_image()
 * @since PECL ps >= 1.1.0
 */
function ps_open_image_file($psdoc, string $type, string $filename, string $stringparam = NULL, int $intparam = 0): int {}

/**
 * GD 画像を受け取り、PS ドキュメントにはめ込む画像を返す
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す postscript ファイルの ID リソース。</p>
 * @param int $gd
 * @return int
 * @link http://php.net/manual/ja/function.ps-open-memory-image.php
 * @since PECL ps >= 1.1.0
 */
function ps_open_memory_image($psdoc, int $gd): int {}

/**
 * 画像をページに配置する
 * <p>以前に読み込まれている画像をページに配置します。画像の縮尺は変更できます。 画像を回転させる場合は、事前に <code>ps_rotate()</code> で座標系を回転させておきます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $imageid <p><code>ps_open_image()</code> あるいは <code>ps_open_image_file()</code> が返す、 画像のリソース ID。</p>
 * @param float $x <p>画像の左下角の x 座標。</p>
 * @param float $y <p>画像の左下角の y 座標。</p>
 * @param float $scale <p>画像の拡大率。1.0 を指定すると、解像度は 72 dpi となります。 これにより、各ピクセルが 1 ポイントと等しくなるからです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-place-image.php
 * @see ps_open_image(), ps_open_image_file()
 * @since PECL ps >= 1.1.0
 */
function ps_place_image($psdoc, int $imageid, float $x, float $y, float $scale): bool {}

/**
 * 矩形を描く
 * <p>（<code>x</code>, <code>y</code>）を左下の角とする 矩形を描きます。描画は左下の角から始まって同じ位置で終わります。 もしパスの外部でこの関数が呼び出された場合、新しいパスを開始します。 パスの内部で呼び出された場合は、矩形をサブパスとして追加します。一つ前の描画処理が 左下角の位置で終わっていなかった場合は、パスに隙間ができることになります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>矩形の左下角の x 座標。</p>
 * @param float $y <p>矩形の左下角の y 座標。</p>
 * @param float $width <p>画像の幅。</p>
 * @param float $height <p>画像の高さ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-rect.php
 * @see ps_arc(), ps_lineto()
 * @since PECL ps >= 1.1.0
 */
function ps_rect($psdoc, float $x, float $y, float $width, float $height): bool {}

/**
 * 以前に保存されたコンテキストを復元する
 * <p>以前に保存されている描画コンテキストを復元します。 すべての <code>ps_save()</code> 呼び出しには、対応する <b>ps_restore()</b> の呼び出しが必要です。 座標系変換、線の設定、色の設定などは、すべて <code>ps_save()</code> のコール前の状態に戻ります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-restore.php
 * @see ps_save()
 * @since PECL ps >= 1.1.0
 */
function ps_restore($psdoc): bool {}

/**
 * 回転の程度を設定する
 * <p>座標系の回転を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $rot <p>回転角度を度単位で指定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-rotate.php
 * @see ps_scale(), ps_translate()
 * @since PECL ps >= 1.1.0
 */
function ps_rotate($psdoc, float $rot): bool {}

/**
 * 現在のコンテキストを保存する
 * <p>現在の描画コンテキストを保存します。 そこには色や変換・回転その他の情報が含まれています。保存されたコンテキストは <code>ps_restore()</code> で復元できます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-save.php
 * @see ps_restore()
 * @since PECL ps >= 1.1.0
 */
function ps_save($psdoc): bool {}

/**
 * 縮尺を設定する
 * <p>座標系の、水平方向・垂直方向の縮尺をそれぞれ設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>水平方向の倍率。</p>
 * @param float $y <p>垂直方向の倍率。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-scale.php
 * @see ps_rotate(), ps_translate()
 * @since PECL ps >= 1.1.0
 */
function ps_scale($psdoc, float $x, float $y): bool {}

/**
 * 注記の枠線の色を設定する
 * <p><code>ps_add_weblink()</code> や <code>ps_add_pdflink()</code> などの関数で追加されたリンクは、 pdf に変換して pdf ビューアで見た際には矩形で囲まれて表示されます。 この矩形は、postscript ドキュメントでは表示されません。 この関数は、矩形の枠線の色を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $red <p>枠線の色の red 要素。</p>
 * @param float $green <p>枠線の色の green 要素。</p>
 * @param float $blue <p>枠線の色の blue 要素。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-border-color.php
 * @see ps_set_border_dash(), ps_set_border_style()
 * @since PECL ps >= 1.1.0
 */
function ps_set_border_color($psdoc, float $red, float $green, float $blue): bool {}

/**
 * 注記の枠線の、破線の状態を設定する
 * <p><code>ps_add_weblink()</code> や <code>ps_add_pdflink()</code> などの関数で追加されたリンクは、 pdf に変換して pdf ビューアで見た際には矩形で囲まれて表示されます。 この矩形は、postscript ドキュメントでは表示されません。 この関数は、破線の「線」の部分と「空白」の部分の長さを設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $black <p>破線の長さ。</p>
 * @param float $white <p>破線と破線の間隔。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-border-dash.php
 * @see ps_set_border_color(), ps_set_border_style()
 * @since PECL ps >= 1.1.0
 */
function ps_set_border_dash($psdoc, float $black, float $white): bool {}

/**
 * 注記の枠線の形式を設定する
 * <p><code>ps_add_weblink()</code> や <code>ps_add_pdflink()</code> などの関数で追加されたリンクは、 pdf に変換して pdf ビューアで見た際には矩形で囲まれて表示されます。 この矩形は、postscript ドキュメントでは表示されません。 この関数は、その線の形式と幅を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $style <p><code>style</code> は、 <i>solid</i>（実線） または <i>dashed</i>（破線）のいずれかを設定できます。</p>
 * @param float $width <p>枠線の幅。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-border-style.php
 * @see ps_set_border_color(), ps_set_border_dash()
 * @since PECL ps >= 1.1.0
 */
function ps_set_border_style($psdoc, string $style, float $width): bool {}

/**
 * ドキュメントの情報を設定する
 * <p>ドキュメントの情報フィールドを設定します。この情報は、PostScript ファイルのヘッダにコメントとして表示されます。 ドキュメントが pdf に変換された場合にも、 このフィールドはドキュメントの情報として使用されます。</p><p>通常 <i>BoundingBox</i> は最初のページの設定と同じ値を 設定しておきます。 <code>ps_findfont()</code> が事前に呼ばれていなかった場合のみ、この設定が利用されます。そのような場合、 もしこの関数で明示的に設定していなければ BoundingBox は空白のままとなります。</p><p>postscript ファイルのヘッダが既に書き込まれている場合には、 この関数は何の意味も持ちません。この関数は、最初のページの前、 あるいは <code>ps_findfont()</code> が最初にコールされる前にコールされる必要があります。</p>
 * @param resource $p
 * @param string $key <p>設定する情報フィールドの名前。設定できる値は <i>Keywords</i>、<i>Subject</i>、 <i>Title</i>、<i>Creator</i>、 <i>Author</i>、<i>BoundingBox</i> および <i>Orientation</i> です。 このうちのいくつかは、PostScript ビューアに対して意味を持つものであることに注意しましょう。</p>
 * @param string $val
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-info.php
 * @see ps_findfont(), ps_begin_page()
 * @since PECL ps >= 1.1.0
 */
function ps_set_info($p, string $key, string $val): bool {}

/**
 * パラメータを設定する
 * <p>多くの関数で利用されるパラメータを設定します。 パラメータは文字列値として定義されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $name <p>使用できる名称については <code>ps_get_parameter()</code> を参照ください。</p>
 * @param string $value <p>パラメータの値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-parameter.php
 * @see ps_get_parameter(), ps_set_value()
 * @since PECL ps >= 1.1.0
 */
function ps_set_parameter($psdoc, string $name, string $value): bool {}

/**
 * テキストの出力位置を設定する
 * <p>テキストを出力する位置を設定します。別の方法として、x と y の値を別々に <code>ps_set_value()</code> で設定することもできます。 この場合の設定項目は、それぞれ <i>textx</i> と <i>texty</i> となります。</p><p>テキストを所定の位置に出力したいのなら、テキストの位置を指定してから <code>ps_show()</code> をコールするよりも、 <code>ps_show_xy()</code> を使用するほうが便利です。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>新しいテキスト位置の x 座標。</p>
 * @param float $y <p>新しいテキスト位置の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-text-pos.php
 * @see ps_set_value(), ps_show()
 * @since PECL ps >= 1.1.0
 */
function ps_set_text_pos($psdoc, float $x, float $y): bool {}

/**
 * 値を設定する
 * <p>多くの関数で利用される値を設定します。 パラメータは浮動小数点数値として定義されます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $name <p><code>name</code> は以下のうちのひとつです。</p>  textrendering  <p>テキストをどのように見せるか。</p>   textx  <p>出力テキストの x 座標。</p>   texty  <p>出力テキストの y 座標。</p>   wordspacing  <p>単語の間隔を空白文字に対する比率で設定する。</p>   leading  <p>行間をピクセルで指定する。</p>
 * @param float $value <p>パラメータの値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-set-value.php
 * @see ps_get_value(), ps_set_parameter()
 * @since PECL ps >= 1.1.0
 */
function ps_set_value($psdoc, string $name, float $value): bool {}

/**
 * 色を設定する
 * <p>描画色、塗りつぶし色、あるいはその両方を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $type <p><code>type</code> は <i>both</i>、<i>fill</i>、 あるいは <i>fillstroke</i> のいずれかです。</p>
 * @param string $colorspace <p>colorspace は <i>gray</i>、 <i>rgb</i>、<i>cmyk</i>、 <i>spot</i>、<i>pattern</i> のいずれかです。 colorspace の値によって、以下のパラメータのうち最初のひとつ・最初の３つ あるいはすべてが利用されます。</p>
 * @param float $c1 <p>colorspace の値によって、red 成分 (rgb の場合)、 cyan 成分 (cmyk の場合)、グレースケール (gray の場合)、 スポット色の ID あるいはパターンの ID のいずれかとなります。</p>
 * @param float $c2 <p>colorspace の値によって、green 成分 (rgb の場合)、 magenta 成分 (cmyk の場合) のいずれかとなります。</p>
 * @param float $c3 <p>colorspace の値によって、blue 成分 (rgb の場合)、 yellow 成分 (cmyk の場合) のいずれかとなります。</p>
 * @param float $c4 <p>colorspace が cmyk の場合にのみ設定され、black 成分の値を指定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setcolor.php
 * @since PECL ps >= 1.1.0
 */
function ps_setcolor($psdoc, string $type, string $colorspace, float $c1, float $c2, float $c3, float $c4): bool {}

/**
 * 破線の形状を設定する
 * <p>破線の「線」の部分と「空白」の部分の長さを設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $on <p>破線の長さ。</p>
 * @param float $off <p>破線と破線の間隔の長さ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setdash.php
 * @see ps_setpolydash()
 * @since PECL ps >= 1.1.0
 */
function ps_setdash($psdoc, float $on, float $off): bool {}

/**
 * 平面度を設定する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $value <p><code>value</code> は 0.2 から 1 までの間でなければなりません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setflat.php
 * @since PECL ps >= 1.1.0
 */
function ps_setflat($psdoc, float $value): bool {}

/**
 * 以降の出力で用いるフォントを設定する
 * <p>フォントを設定します。このフォントは、事前に <code>ps_findfont()</code> で読み込まれている必要があります。 フォントを設定せずにテキストを出力するとエラーとなります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $fontid <p><code>ps_findfont()</code> が返す、フォント ID。</p>
 * @param float $size <p>フォントのサイズ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setfont.php
 * @see ps_findfont(), ps_set_text_pos()
 * @since PECL ps >= 1.1.0
 */
function ps_setfont($psdoc, int $fontid, float $size): bool {}

/**
 * グレー値を設定する
 * <p>以降の描画処理で使われるグレー値を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $gray <p>値は 0（白）から 1（黒）までの間でなければなりません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setgray.php
 * @see ps_setcolor()
 * @since PECL ps >= 1.1.0
 */
function ps_setgray($psdoc, float $gray): bool {}

/**
 * 線端の形状を設定する
 * <p>線端をどのように表示するかを設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $type <p>線端の形式。 <i>PS_LINECAP_BUTT</i>、 <i>PS_LINECAP_ROUND</i> あるいは <i>PS_LINECAP_SQUARED</i> のいずれか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setlinecap.php
 * @see ps_setlinejoin(), ps_setlinewidth(), ps_setmiterlimit()
 * @since PECL ps >= 1.1.0
 */
function ps_setlinecap($psdoc, int $type): bool {}

/**
 * 線の連結方法を設定する
 * <p>線がどのように連結されるかを設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $type <p>線の連結方式。 <i>PS_LINEJOIN_MITER</i>、 <i>PS_LINEJOIN_ROUND</i> あるいは <i>PS_LINEJOIN_BEVEL</i> のいずれか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setlinejoin.php
 * @see ps_setlinecap(), ps_setlinewidth(), ps_setmiterlimit()
 * @since PECL ps >= 1.1.0
 */
function ps_setlinejoin($psdoc, int $type): bool {}

/**
 * 線幅を設定する
 * <p>以降の描画処理での線幅を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $width <p>線の幅 (ポイント数)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setlinewidth.php
 * @see ps_setlinecap(), ps_setlinejoin(), ps_setmiterlimit()
 * @since PECL ps >= 1.1.0
 */
function ps_setlinewidth($psdoc, float $width): bool {}

/**
 * miter limit 値を設定する
 * <p>2 本の直線が小さい角度で連結され、かつ連結方法が <i>PS_LINEJOIN_MITER</i> に設定されている場合、 出来上がる線の角の部分が非常に長くなります。miter limit は、miter length (角の長さ) と線幅の比率の最大値です。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $value <p>miter length と線幅の比率の最大値。大きな値 (&gt; 10) を設定すると、2 本の直線が狭い角度で交わる際に、 角の部分が非常に長くなってしまいます。 よくわからない場合はデフォルトのままにしておきましょう。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setmiterlimit.php
 * @see ps_setlinecap(), ps_setlinejoin(), ps_setlinewidth()
 * @since PECL ps >= 1.1.0
 */
function ps_setmiterlimit($psdoc, float $value): bool {}

/**
 * overprint モードを設定する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す postscript ファイルの ID リソース。</p>
 * @param int $mode
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setoverprintmode.php
 * @since PECL ps >= 1.3.0
 */
function ps_setoverprintmode($psdoc, int $mode): bool {}

/**
 * 破線の形状を設定する
 * <p>破線の「線」の部分と「空白」の部分の長さを設定します。 <b>ps_setpolydash()</b> は、 より複雑な破線パターンを設定するために用いられます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $arr <p><code>arr</code> は「線」の部分の長さと 「空白」の部分の長さを互い違いにならべたリストです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-setpolydash.php
 * @see ps_setdash()
 * @since PECL ps >= 1.1.0
 */
function ps_setpolydash($psdoc, float $arr): bool {}

/**
 * 以降の出力で用いるシェーディングを作成する
 * <p>シェーディングを作成します。これは <code>ps_shfill()</code> や <code>ps_shading_pattern()</code> で用いられます。</p><p>シェーディングの色には、<i>pattern</i> 以外の任意の色空間が利用できます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $type <p>シェーディングの種類で、<i>radial</i> (放射状) または <i>axial</i> (直線状) のいずれかです。 シェーディングは現在の塗りつぶし色で始まり、 <code>c1</code> から <code>c4</code> までのパラメータで指定される色で終わります (パラメータの意味は <code>ps_setcolor()</code> を参照ください)。</p>
 * @param float $x0
 * @param float $y0
 * @param float $x1
 * @param float $y1
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 * @param string $optlist <p>type が <i>radial</i> の場合、<code>optlist</code> にはパラメータ <i>r0</i> と <i>r1</i> が含まれる必要があります。これらはそれぞれ開始位置と終了位置を表す 円の半径です。</p>
 * @return int <p>成功した場合にパターンの ID を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-shading.php
 * @see ps_shading_pattern(), ps_shfill()
 * @since PECL ps >= 1.3.0
 */
function ps_shading($psdoc, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist): int {}

/**
 * シェーディング用のパターンを作成する
 * <p>シェーディング用のパターンを作成します。これは <code>ps_shading()</code> を呼ぶ前に行わなければなりません。 シェーディングパターンは、標準のパターンと同じように用いられます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $shadingid <p>事前に <code>ps_shading()</code> で作成したシェーディングの ID。</p>
 * @param string $optlist <p>このパラメータは、現在使用されていません。</p>
 * @return int <p>成功した場合にパターンの ID を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-shading-pattern.php
 * @see ps_shading(), ps_shfill()
 * @since PECL ps >= 1.3.0
 */
function ps_shading_pattern($psdoc, int $shadingid, string $optlist): int {}

/**
 * 範囲をシェーディングで塗りつぶす
 * <p>範囲をシェーディングで塗りつぶします。シェーディングは事前に <code>ps_shading()</code> で作られている必要があります。 この関数は、<code>ps_shading_pattern()</code> でシェーディングからパターンを作成し、 それを塗りつぶし色として使用するのと同じことを行います。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $shadingid <p>事前に <code>ps_shading()</code> で作成したシェーディングの ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-shfill.php
 * @see ps_shading(), ps_shading_pattern()
 * @since PECL ps >= 1.3.0
 */
function ps_shfill($psdoc, int $shadingid): bool {}

/**
 * テキストを出力する
 * <p>現在の位置にテキストを出力します。テキストの位置を設定するには、 関数 <code>ps_set_value()</code> の値 <i>textx</i> および <i>texty</i> に x 座標と y 座標を設定します。 事前に <code>ps_setfont()</code> でフォントが設定されていない場合、この関数はエラーを返します。</p><p><b>ps_show()</b> は、以下のようなパラメータや値 (それぞれ <code>ps_set_parameter()</code> や <code>ps_set_value()</code> で設定されたもの) の内容を評価します。</p><p>連続する 2 つのグリフ間の距離です。値がゼロ以外の場合、リゲチャは 解消されます。ゼロ未満の値を指定することも可能です。</p><p>このパラメータを "false" に設定するとカーニングが無効になります。 デフォルトではカーニングが有効になっています。</p><p>このパラメータを "false" に設定するとリゲチャを使用しないようになります。 デフォルトではリゲチャを使用するようになっています。</p><p>このパラメータを "true" に設定すると下線が引かれます。 デフォルトでは下線が無効になっています。</p><p>このパラメータを "true" に設定すると上線が引かれます。 デフォルトでは上線が無効になっています。</p><p>このパラメータを "true" に設定すると打ち消し線が引かれます。 デフォルトでは打ち消し線が無効になっています。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>出力するテキスト。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-show.php
 * @see ps_continue_text(), ps_show_xy(), ps_setfont()
 * @since PECL ps >= 1.1.0
 */
function ps_show($psdoc, string $text): bool {}

/**
 * テキストを現在の位置に出力する
 * <p>テキストを現在の位置に出力します。最大 <code>len</code> 文字までしか出力しません。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す postscript ファイルの ID リソース。</p>
 * @param string $text <p>出力するテキスト。</p>
 * @param int $len <p>表示する最大文字数。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-show2.php
 * @since PECL ps >= 1.1.0
 */
function ps_show2($psdoc, string $text, int $len): bool {}

/**
 * テキストをボックス内に出力する
 * <p>与えられたボックスの中にテキストを出力します。ボックスの左下の座標が (<code>left</code>, <code>bottom</code>) となります。 必要に応じて改行が挿入されます。連続する空白文字は、ひとつとして扱われ、 タブ文字は空白文字として扱われます。</p><p>パラメータ <code>hyphenation</code> が <b><code>TRUE</code></b> に設定されており、またパラメータ <code>hyphendict</code> に有効なハイフネーションファイルが設定されている場合に、 テキストのハイフネーションが行われます。 行間隔の設定は、値 <i>leading</i> で行います。 TeX と同様に、段落と段落の間には空行が挿入されます。 値 <i>parindent</i> が 0.0 より大きく設定されている場合、 最初の n 行は字下げされます。n の行数は、値 <i>numindentlines</i> で設定します。 最初の m 段落を字下げしないようにするには、 値 <i>parindentskip</i> に正の数値を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>指定したボックスの中に出力するテキスト。</p>
 * @param float $left <p>ボックスの左下角の x 座標。</p>
 * @param float $bottom <p>ボックスの左下角の y 座標。</p>
 * @param float $width <p>ボックスの幅。</p>
 * @param float $height <p>ボックスの高さ。</p>
 * @param string $hmode <p>パラメータ <code>hmode</code> は "justify"（均等割付）・ "fulljustify"（完全な均等割付）・"right"（右寄せ）・"left"（左寄せ）・ "center"（センタリング）のどれかの値を設定します。 "justify" と "fulljustify" の違いは、ボックスの最終行の処理です。 fulljustify モードでは、 段落の最後の行である場合を除いて最終行も均等割付をします。 justify モードでは、最終行は常に左寄せとなります。</p>
 * @param string $feature
 * @return int <p>書くことができなかった文字数を返します。</p>
 * @link http://php.net/manual/ja/function.ps-show-boxed.php
 * @see ps_continue_text()
 * @since PECL ps >= 1.1.0
 */
function ps_show_boxed($psdoc, string $text, float $left, float $bottom, float $width, float $height, string $hmode, string $feature = NULL): int {}

/**
 * 指定された位置にテキストを出力する
 * <p>指定された位置にテキストを出力します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>出力するテキスト。</p>
 * @param float $x <p>テキストを囲むボックスの左下角の x 座標。</p>
 * @param float $y <p>テキストを囲むボックスの左下角の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-show-xy.php
 * @see ps_continue_text(), ps_show()
 * @since PECL ps >= 1.1.0
 */
function ps_show_xy($psdoc, string $text, float $x, float $y): bool {}

/**
 * テキストを指定した位置に出力する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $psdoc
 * @param string $text
 * @param int $len
 * @param float $xcoor
 * @param float $ycoor
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-show-xy2.php
 * @since PECL ps >= 1.1.0
 */
function ps_show_xy2($psdoc, string $text, int $len, float $xcoor, float $ycoor): bool {}

/**
 * 文字列のジオメトリを取得する
 * <p>この関数は <code>ps_stringwidth()</code> と似ていますが、 返り値は、テキストの幅、ascender および descender を含む配列形式になります。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>ジオメトリを計算するテキスト。</p>
 * @param int $fontid <p>使用するフォントの ID。フォントが指定されていない場合は、 現在のフォントが使用されます。</p>
 * @param float $size <p>フォントのサイズ。指定されていない場合は現在のサイズが使用されます。</p>
 * @return array <p>文字の寸法を格納した配列です。'width' には <code>ps_stringwidth()</code> で返される文字列の幅が入ります。 下に突き出している部分の長さの最大値が 'descender' に、 また上に突き出している部分の長さの最大値が 'ascender' に入ります。</p>
 * @link http://php.net/manual/ja/function.ps-string-geometry.php
 * @see ps_continue_text(), ps_stringwidth()
 * @since PECL ps >= 1.2.0
 */
function ps_string_geometry($psdoc, string $text, int $fontid = 0, float $size = 0.0): array {}

/**
 * 文字列の幅を取得する
 * <p>指定されたフォントとサイズで出力した場合に、 文字列の幅が何ポイントになるかを計算します。 正確な幅を計算するため、この関数は Adobe のフォントメトリックファイルを必要とします。カーニングが有効になっている場合、 それも考慮して計算します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param string $text <p>幅を計算するテキスト。</p>
 * @param int $fontid <p>使用するフォントの ID。フォントが指定されていない場合は、 現在のフォントが使用されます。</p>
 * @param float $size <p>フォントのサイズ。指定されていない場合は現在のサイズが使用されます。</p>
 * @return float <p>文字列の幅をポイント数で返します。</p>
 * @link http://php.net/manual/ja/function.ps-stringwidth.php
 * @see ps_string_geometry()
 * @since PECL ps >= 1.1.0
 */
function ps_stringwidth($psdoc, string $text, int $fontid = 0, float $size = 0.0): float {}

/**
 * 現在のパスを描画する
 * <p><code>ps_lineto()</code> のような関数で事前に組み立てられたパスを描画します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-stroke.php
 * @see ps_closepath_stroke(), ps_fill(), ps_fill_stroke()
 * @since PECL ps >= 1.1.0
 */
function ps_stroke($psdoc): bool {}

/**
 * グリフを出力する
 * <p>現在のフォントのフォントエンコーディングベクタの中で <code>ord</code> 番目の位置にあるグリフを出力します。 フォントエンコーディングは、<code>ps_findfont()</code> でフォントを読み込む際に設定することができます。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $ord <p>フォントエンコーディングベクタの中でのグリフの位置。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-symbol.php
 * @see ps_symbol_name(), ps_symbol_width()
 * @since PECL ps >= 1.2.0
 */
function ps_symbol($psdoc, int $ord): bool {}

/**
 * グリフ名を取得する
 * <p>この関数は、有効なグリフ名を取得するために Adobe のフォントメトリックファイルを必要とします。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $ord <p><code>ord</code> は、フォントエンコーディングベクタ の中でのグリフの位置です。</p>
 * @param int $fontid <p>使用するフォントの ID。フォントが指定されていない場合は、 現在のフォントが使用されます。</p>
 * @return string <p>指定されたフォントのグリフ名を返します。</p>
 * @link http://php.net/manual/ja/function.ps-symbol-name.php
 * @see ps_symbol(), ps_symbol_width()
 * @since PECL ps >= 1.2.0
 */
function ps_symbol_name($psdoc, int $ord, int $fontid = 0): string {}

/**
 * グリフの幅を取得する
 * <p>指定されたフォントとサイズで出力した場合に、 グリフの幅が何ポイントになるかを計算します。正確な幅を計算するため、 この関数は Adobe のフォントメトリックファイルを必要とします。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param int $ord <p><code>ord</code> は、 フォントエンコーディングベクタの中でのグリフの位置です。</p>
 * @param int $fontid <p>使用するフォントの ID。フォントが指定されていない場合は、 現在のフォントが使用されます。</p>
 * @param float $size <p>フォントのサイズ。指定されていない場合は現在のサイズが使用されます。</p>
 * @return float <p>グリフの幅をポイント数で返します。</p>
 * @link http://php.net/manual/ja/function.ps-symbol-width.php
 * @see ps_symbol(), ps_symbol_name()
 * @since PECL ps >= 1.2.0
 */
function ps_symbol_width($psdoc, int $ord, int $fontid = 0, float $size = 0.0): float {}

/**
 * 座標変換を設定する
 * <p>新しい座標系の原点を設定します。</p>
 * @param resource $psdoc <p><code>ps_new()</code> が返す、postscript ファイルのリソース ID。</p>
 * @param float $x <p>変換後の座標系の原点の x 座標。</p>
 * @param float $y <p>変換後の座標系の原点の y 座標。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ps-translate.php
 * @see ps_scale(), ps_rotate()
 * @since PECL ps >= 1.1.0
 */
function ps_translate($psdoc, float $x, float $y): bool {}

/**
 * ps_LINECAP_BUTT
 */
define('ps_LINECAP_BUTT', null);

/**
 * ps_LINECAP_ROUND
 */
define('ps_LINECAP_ROUND', null);

/**
 * ps_LINECAP_SQUARED
 */
define('ps_LINECAP_SQUARED', null);

/**
 * ps_LINEJOIN_BEVEL
 */
define('ps_LINEJOIN_BEVEL', null);

/**
 * ps_LINEJOIN_MITER
 */
define('ps_LINEJOIN_MITER', null);

/**
 * ps_LINEJOIN_ROUND
 */
define('ps_LINEJOIN_ROUND', null);

