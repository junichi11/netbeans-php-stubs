<?php



/**
 * 8 ビット文字列を quoted-printable 文字列に変換する
 * <p>(» RFC2045, section 6.7 に基づき) 8 ビット文字列を quoted-printable 文字列に変換します。</p>
 * @param string $string <p>変換する 8 ビット文字列。</p>
 * @return string <p>quoted-printable 文字列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-8bit.php
 * @see imap_qprint()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_8bit(string $string): string {}

/**
 * 発生した IMAP 警告メッセージを返す
 * <p>直近に <b>imap_alerts()</b> をコールして以来、 またはページ処理を開始して以来生成された 全 IMAP 警告メッセージの配列を返します。</p><p><b>imap_alerts()</b> がコールされた場合、 その処理後に警告のスタックはクリアされます。IMAP の仕様では、 これらのメッセージをユーザーに渡すことが規定されています。</p>
 * @return array <p>全ての IMAP 警告メッセージの配列、あるいは警告メッセージが発生していない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-alerts.php
 * @see imap_errors()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_alerts(): array {}

/**
 * 指定されたメールボックスに文字列メッセージを追加する
 * <p>指定したメールボックス <code>mbox</code> に文字列メッセージ <code>message</code> を追加します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックスの名前。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param string $message <p>追加したいメッセージを表す文字列。</p> <p>Cyrus IMAP サーバーと通信する際には、改行コードとして "\n" のかわりに "\r\n" を使用する必要があります。さもなくば、操作は失敗します。</p>
 * @param string $options <p>指定した場合は、 <code>options</code> もそのメールボックスに書きこまれます。</p>
 * @param string $internal_date <p>このパラメータが設定されていると、追加したメッセージに INTERNALDATE を設定します。 このパラメータは、rfc2060 の日付時刻値の仕様を満たす文字列でなければなりません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-append.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_append($imap_stream, string $mailbox, string $message, string $options = NULL, string $internal_date = NULL): bool {}

/**
 * BASE64 でエンコードされたテキストをデコードする
 * <p>BASE64 でエンコードされたテキスト <code>text</code> をデコードします。</p>
 * @param string $text <p>エンコードされたテキスト。</p>
 * @return string <p>デコードしたメッセージを文字列で返します。</p>
 * @link http://php.net/manual/ja/function.imap-base64.php
 * @see imap_binary(), base64_encode(), base64_decode()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_base64(string $text): string {}

/**
 * 8 ビット文字列を base64 文字列に変換する
 * <p>（» RFC2045, Section 6.8 に基づき）8 ビット文字列を base64 文字列に変換します。</p>
 * @param string $string <p>8 ビット文字列。</p>
 * @return string <p>base64 エンコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-binary.php
 * @see imap_base64()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_binary(string $string): string {}

/**
 * メッセージ本文を読む
 * <p><b>imap_body()</b> は、現在のメールボックスにある <code>msg_number</code> 番目のメッセージの本文を返します。</p><p><b>imap_body()</b> は、メッセージの本文と全く同じ コピーのみを返します。マルチパート MIME エンコードされたメッセージの 一部を展開するには、その構造を解析するために <b>imap_fetch_structure()</b> を使用し、単一の部分要素の コピーを展開する際には、 <code>imap_fetchbody()</code> を使用する必要があります。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $options <p>オプションの <code>options</code> はビットマスクであり、 以下の要素の組み合わせとなります。</p><ul> <li>  <b><code>FT_UID</code></b> - <code>msg_number</code> は UID です  </li> <li>  <b><code>FT_PEEK</code></b> - 既に設定されていない場合、\Seen フラグを設定しない  </li> <li>  <b><code>FT_INTERNAL</code></b> - 内部フォーマットで文字列を返す。 CRLF に正規化しない。  </li> </ul>
 * @return string <p>指定したメッセージの本文を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.imap-body.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_body($imap_stream, int $msg_number, int $options = 0): string {}

/**
 * 指定したメッセージの指定した body セクションの構造を読み込む
 * <p>指定したメッセージの指定した body セクションの構造を読み込みます。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param string $section <p>読み込む body セクション。</p>
 * @return object <p>オブジェクトの情報を返します。オブジェクトの構造やプロパティについての詳細は <code>imap_fetchstructure()</code> を参照ください。</p>
 * @link http://php.net/manual/ja/function.imap-bodystruct.php
 * @see imap_fetchstructure()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_bodystruct($imap_stream, int $msg_number, string $section): object {}

/**
 * 現在のメールボックスをチェックする
 * <p>現在のメールボックスに関する情報を調べます。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return object <p>以下のプロパティをもつオブジェクトの情報を返します。</p><ul> <li>  <b><code>Date</code></b> - 現在のシステム時刻を » RFC2822 にしたがってフォーマットしたもの。  </li> <li>  <b><code>Driver</code></b> - メールボックスにアクセスする際に使用するプロトコル: POP3、IMAP、NNTP  </li> <li>  <b><code>Mailbox</code></b> - メールボックスの名前。  </li> <li>  <b><code>Nmsgs</code></b> - メールボックス内のメッセージの数。  </li> <li>  <b><code>Recent</code></b> - メールボックス内の新規メッセージの数。  </li> </ul><p>失敗した場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-check.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_check($imap_stream): object {}

/**
 * メッセージのフラグをクリアする
 * <p>この関数は、指定したシーケンス <code>sequence</code> のメッセージのフラグから、指定したフラグ <code>flag</code> を削除します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $sequence <p>メッセージ番号のシーケンス。 <i>X,Y</i> のようにメッセージを列挙したり、 <i>X:Y</i> のようにしてその間のすべてのメッセージを指定したりできます。</p>
 * @param string $flag <p>設定可能なフラグは "\\Seen"、 "\\Answered"、"\\Flagged"、"\\Deleted" および "\\Draft" です (» RFC2060 で定義されています)。</p>
 * @param int $options <p>オプション <code>options</code> はビットマスクであり、 以下の組み合わせとなります。</p><ul> <li>  <b><code>ST_UID</code></b> - シーケンス引数はシーケンス番号の代わりに UID を含みます。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-clearflag-full.php
 * @see imap_setflag_full()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_clearflag_full($imap_stream, string $sequence, string $flag, int $options = 0): bool {}

/**
 * IMAP ストリームをクローズする
 * <p>IMAP ストリームをクローズします。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $flag <p><b><code>CL_EXPUNGE</code></b> を指定した場合、メールボックスを閉じる前に暗黙のうちに 削除マークがついた全てのメッセージを削除します。 <code>imap_expunge()</code> を使用して、同じことを行うこともできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-close.php
 * @see imap_open()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_close($imap_stream, int $flag = 0): bool {}

/**
 * imap_createmailbox() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_createmailbox()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。 この名前に国際化文字を含む場合には、 <code>imap_utf7_encode()</code> でエンコードする必要があります。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.imap-create.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_create($imap_stream, string $mailbox): bool {}

/**
 * 新しいメールボックスを作る
 * <p><b>imap_createmailbox()</b> は <code>mailbox</code> で指定された新しいメールボックスを作成します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。 この名前に国際化文字を含む場合には、 <code>imap_utf7_encode()</code> でエンコードする必要があります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-createmailbox.php
 * @see imap_renamemailbox(), imap_deletemailbox()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_createmailbox($imap_stream, string $mailbox): bool {}

/**
 * 現在のメールボックスから削除するメッセージに印を付ける
 * <p><code>msg_number</code> が指すメッセージに 削除予定のマークをします。削除マークを付けられたメッセージは、 <code>imap_expunge()</code> がコールされるか <code>imap_close()</code> に <b><code>CL_EXPUNGE</code></b> を付けてコールされるかのどちらかが行われるまでメールボックスに残ったままになります。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $options <p><code>FT_UID</code> を指定すると、 引数 <code>msg_number</code> を <code>UID</code> として処理することを関数に指示できます。</p>
 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
 * @link http://php.net/manual/ja/function.imap-delete.php
 * @see imap_undelete(), imap_expunge(), imap_close()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_delete($imap_stream, int $msg_number, int $options = 0): bool {}

/**
 * メールボックスを削除する
 * <p>指定したメールボックス <code>mailbox</code> を削除します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-deletemailbox.php
 * @see imap_createmailbox(), imap_renamemailbox(), imap_open()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_deletemailbox($imap_stream, string $mailbox): bool {}

/**
 * 発生したすべての IMAP エラーを返す
 * <p>ページのリクエストの間かエラースタックがリセットされて以来 生じた全ての IMAP エラー (存在すれば) を返します。</p><p><b>imap_errors()</b> がコールされると、 処理の終了後にエラースタックがクリアされます。</p>
 * @return array <p>この関数は、最後に <b>imap_errors()</b> コールを行ってから、またはそのページの処理を開始してから 発生した全ての IMAP エラーメッセージの配列を返します。 エラーメッセージが存在しない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-errors.php
 * @see imap_last_error(), imap_alerts()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_errors(): array {}

/**
 * 削除用にマークされたすべてのメッセージを削除する
 * <p><code>imap_delete()</code>、<code>imap_mail_move()</code>、 あるいは <code>imap_setflag_full()</code> で削除用マークを設定されたすべてのメッセージを削除します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-expunge.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_expunge($imap_stream): bool {}

/**
 * 指定したメッセージのヘッダ情報の概要を読む
 * <p>この関数は、指定された <code>sequence</code> のメールヘッダを取得してその内容の概要を返します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $sequence <p>メッセージのシーケンスを指定します。 <i>X,Y</i> 形式で列挙したり、 <i>X:Y</i> 形式でその範囲内のすべてのメッセージを取得したりできます。</p>
 * @param int $options <p><code>sequence</code> には、メッセージのインデックスか、もし <code>flags</code> に FT_UID が含まれている場合は UID が含まれます。</p>
 * @return array <p>オブジェクトの配列を返します。各要素が、 それぞれひとつのメッセージのヘッダを表します。 オブジェクトで定義されるのは、存在するプロパティのみです。 以下のプロパティがあります。</p><ul> <li>  <i>subject</i> - メッセージの題名(subject)  </li> <li>  <i>from</i> - 送信者  </li> <li>  <i>to</i> - 受信者  </li> <li>  <i>date</i> - 送信日  </li> <li>  <i>message_id</i> - Message-ID  </li> <li>  <i>references</i> - このメッセージ ID への参照です  </li> <li>  <i>in_reply_to</i> - このメッセージ ID への返信です  </li> <li>  <i>size</i> - サイズ（バイト数）  </li> <li>  <i>uid</i> - メールボックスにおけるこのメッセージの UID  </li> <li>  <i>msgno</i> - メールボックスにおけるこのメッセージのシーケンス番号  </li> <li>  <i>recent</i> - このメッセージには recent フラグが立てられています  </li> <li>  <i>flagged</i> - フラグが立てられています  </li> <li>  <i>answered</i> - 返信済みフラグが立てられています  </li> <li>  <i>deleted</i> - 削除フラグが立てられています  </li> <li>  <i>seen</i> - 既読フラグが立てられています  </li> <li>  <i>draft</i> - 草稿フラグが立てられています  </li> <li>  <i>udate</i> - 受信日時の UNIX タイムスタンプ  </li> </ul>
 * @link http://php.net/manual/ja/function.imap-fetch-overview.php
 * @see imap_fetchheader()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_fetch_overview($imap_stream, string $sequence, int $options = 0): array {}

/**
 * メッセージ本文中の特定のセクションを取り出す
 * <p>指定されたメッセージ本文中の特定のセクションを取得します。 本文パートは、この関数ではデコードされません。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param string $section <p>パート番号。ピリオドで区切られた整数文字列を指定します。 これは、IMAP4 仕様における本文パートのリストへのインデックスとなります。</p>
 * @param int $options <p>ビットマスクであり、以下の組合わせとなります。</p><ul> <li>  <b><code>FT_UID</code></b> - <code>msg_number</code>は UID である  </li> <li>  <b><code>FT_PEEK</code></b> - 既に設定されていない場合、 \Seen フラグを設定しない  </li> <li>  <b><code>FT_INTERNAL</code></b> - 内部フォーマットで文字列を返す。CRLF に正規化しない。  </li> </ul>
 * @return string <p>指定されたメッセージ本文中の特定のセクションをテキスト文字列で返します。</p>
 * @link http://php.net/manual/ja/function.imap-fetchbody.php
 * @see imap_savebody(), imap_fetchstructure()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_fetchbody($imap_stream, int $msg_number, string $section, int $options = 0): string {}

/**
 * メッセージのヘッダを返す
 * <p>指定したメッセージについて、フィルタリング されていない完全な » RFC2822 フォーマットのヘッダをテキスト文字列として取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $options <p>オプション <code>options</code> は次のようになります。</p><ul> <li>  <b><code>FT_UID</code></b> - 引数 <code>msgno</code> は UID です。  </li> <li>  <b><code>FT_INTERNAL</code></b> - 返される文字列は "internal" フォーマットです。CRLF に正規化しません。  </li> <li>  <b><code>FT_PREFETCHTEXT</code></b> - RFC822.TEXT を、 同時に事前に取得しておく必要があります。これは、メッセージテキスト 全体を取得したい場合（例:「ローカルファイルに保存する」操作）に IMAP 接続で余分な RTT を回避します。  </li> </ul>
 * @return string <p>指定したメッセージのヘッダをテキスト文字列で返します。</p>
 * @link http://php.net/manual/ja/function.imap-fetchheader.php
 * @see imap_fetch_overview()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_fetchheader($imap_stream, int $msg_number, int $options = 0): string {}

/**
 * メッセージの特定のセクションに対する MIME ヘッダを取り出します
 * <p>指定したメッセージの本文の特定のセクションの MIME ヘッダを取り出します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号</p>
 * @param string $section <p>パート番号。ピリオドで区切られた整数文字列を指定します。 これは、IMAP4 の仕様に従って本文パートのリストにインデックスを付けます。</p>
 * @param int $options <p>ビットマスク。以下の組合わせとなります。</p><ul> <li>  <b><code>FT_UID</code></b> - <code>msg_number</code> は UID です  </li> <li>  <b><code>FT_PEEK</code></b> - 既に設定されていない場合、\Seen フラグを設定しません  </li> <li>  <b><code>FT_INTERNAL</code></b> - 返される文字列は内部フォーマットです。 CRLF に正規化しません。  </li> </ul>
 * @return string <p>指定したメッセージの本文の特定のセクションの MIME ヘッダを文字列として返します。</p>
 * @link http://php.net/manual/ja/function.imap-fetchmime.php
 * @see imap_fetchbody(), imap_fetchstructure(), imap_fetchheader()
 * @since PHP 5 >= 5.3.6, PHP 7
 */
function imap_fetchmime($imap_stream, int $msg_number, string $section, int $options = 0): string {}

/**
 * 特定のメッセージの構造を読み込む
 * <p>この関数は、指定したメッセージに関するすべての構造化された情報を取り出します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $options <p>オプションのパラメータで、<code>FT_UID</code> のみが指定可能です。 これは、<code>msg_number</code> を <code>UID</code> として処理することを関数に指定するためのものです。</p>
 * @return object <p>オブジェクトを返します。このオブジェクトには、 MIME の添付の各要素に類似のオブジェクトとしてエンベロープ、 内部の日付、サイズ、フラグそして本体が含まれます。 返されるオブジェクトの構造は次のようになります。</p> <b> <b>imap_fetchstructure()</b> が返すオブジェクト </b>   type 最初の body 部の型   encoding body 部を転送する際のエンコード法   ifsubtype subtype 文字列がある場合に <b><code>TRUE</code></b>    subtype  MIME の subtype   ifdescription description 文字列がある場合に <b><code>TRUE</code></b>    description 内容を記述する文字列   ifid identification 文字列がある場合に <b><code>TRUE</code></b>    id Identification 文字列   lines 行数   bytes バイト数   ifdisposition disposition 文字列がある場合に <b><code>TRUE</code></b>    disposition Disposition 文字列   ifdparameters  dparameters 配列が存在する場合に <b><code>TRUE</code></b>    dparameters オブジェクトの配列。各オブジェクトは <i>"attribute"</i> および <i>"value"</i> というプロパティを保持し、それぞれ <i>Content-disposition</i> MIME ヘッダの 対応するパラメータを表す。   ifparameters 配列 parameters が存在する場合に <b><code>TRUE</code></b>    parameters オブジェクトの配列。各オブジェクトは <i>"attribute"</i> および <i>"value"</i> というプロパティを保持する。   parts オブジェクトの配列であり、その構造はトップレベルオブジェクトと 同じです。それぞれが MIME body 部に対応しています。     <b>最初の body 部の型 (使用するライブラリによって異なるため、定数を使うことを推奨します)</b>   値 型 定数     0 text TYPETEXT   1 multipart TYPEMULTIPART   2 message TYPEMESSAGE   3 application TYPEAPPLICATION   4 audio TYPEAUDIO   5 image TYPEIMAGE   6 video TYPEVIDEO   7 model TYPEMODEL   8 other TYPEOTHER    <b>転送時のエンコーディング (使用するライブラリによって異なるため、定数を使うことを推奨します)</b>   値 型 定数     0 7bit ENC7BIT   1 8bit ENC8BIT   2 Binary ENCBINARY   3 Base64 ENCBASE64   4 Quoted-Printable ENCQUOTEDPRINTABLE   5 other ENCOTHER
 * @link http://php.net/manual/ja/function.imap-fetchstructure.php
 * @see imap_fetchbody(), imap_bodystruct()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_fetchstructure($imap_stream, int $msg_number, int $options = 0): object {}

/**
 * imap_body() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_body()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $options <p>オプションの <code>options</code> はビットマスクであり、 以下の要素の組み合わせとなります。</p><ul> <li>  <b><code>FT_UID</code></b> - <code>msg_number</code> は UID です  </li> <li>  <b><code>FT_PEEK</code></b> - 既に設定されていない場合、\Seen フラグを設定しない  </li> <li>  <b><code>FT_INTERNAL</code></b> - 内部フォーマットで文字列を返す。 CRLF に正規化しない。  </li> </ul>
 * @return string
 * @link http://php.net/manual/ja/function.imap-fetchtext.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_fetchtext($imap_stream, int $msg_number, int $options = 0): string {}

/**
 * IMAP キャッシュをクリアする
 * <p>指定した型のエントリのキャッシュを破棄します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $caches <p>破棄したいキャッシュを指定します。以下の定数 <b><code>IMAP_GC_ELT</code></b> (メッセージキャッシュ要素)、 <b><code>IMAP_GC_ENV</code></b> (エンベロープおよびボディ)、 <b><code>IMAP_GC_TEXTS</code></b> (テキスト) の組み合わせとなります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-gc.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function imap_gc($imap_stream, int $caches): bool {}

/**
 * クオータレベルの設定、メールボックス毎の使用状況を取得する
 * <p>クオータレベルの設定、メールボックス毎の使用状況を取得します。</p><p>この関数の非管理者向けバージョンは、 PHP の <code>imap_get_quotaroot()</code> 関数を参照ください。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $quota_root <p><code>quota_root</code> は、通常 <i>user.name</i> という形式にする必要があります。 name は、情報を取得したいメールボックスの名前です。</p>
 * @return array <p>指定したメールボックスの limit と usage をキーとした整数値を配列として返します。 limit の値は、このメールボックスで最大使用可能な大きさを表します。 usage の値は、このメールボックスの現在の使用状況を示します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>PHP 4.3 では、この関数は » RFC2087 で述べられている機能をより適切に反映するようになっています。 返り値の配列からは、サポートするリソース （例:メッセージ、あるいはサブフォルダ）数の制限をなくし、 名前つきリソースを独立した配列のキーとして受信するようにしました。 各キーの値は配列となっており、その中に usage と values の値が格納されています。</p><p>過去との互換性を保つため、旧来のアクセス方法も使用可能です。 しかし新しい方法に変更することを推奨します。</p>
 * @link http://php.net/manual/ja/function.imap-get-quota.php
 * @see imap_open(), imap_set_quota(), imap_get_quotaroot()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function imap_get_quota($imap_stream, string $quota_root): array {}

/**
 * ユーザー単位のクォータ設定を取得する
 * <p>ユーザー単位のクォータ設定を取得します。 limit の値は、このユーザーがメールボックスで使用可能な総容量を表します。 usage の値は、ユーザーが現在メールボックスで使用している容量を表します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $quota_root <p><code>quota_root</code> はどのメールボックスを調べるかを 指定します（例: INBOX）。</p>
 * @return array <p>指定したユーザーのメールボックスに関連する整数値を配列で返します。 すべての値にはリソース名に基づいたキーがつけられており、 usage および limit 値を保持する配列が関連付けられています。</p><p>コールが失敗した場合、およびサーバーからの応答内容をパースできなかった場合には この関数は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-get-quotaroot.php
 * @see imap_open(), imap_set_quota(), imap_get_quota()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function imap_get_quotaroot($imap_stream, string $quota_root): array {}

/**
 * 与えられたメールボックスの ACL を取得する
 * <p>指定したメールボックスの ACL を取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return array <p>"folder" =&gt; "acl" 形式の連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-getacl.php
 * @see imap_setacl()
 * @since PHP 5, PHP 7
 */
function imap_getacl($imap_stream, string $mailbox): array {}

/**
 * メールボックスのリストを読み込み、各ボックスに関する詳細な情報を返す
 * <p>メールボックスの情報を取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array <p>メールボックス情報を有するオブジェクトの配列を返します。各オブジェクトには、 メールボックスの完全な名前である <code>name</code>、 このメールボックスの階層の区切りを示す属性 <code>delimiter</code>、 そして <code>attributes</code> が存在します。 <code>attributes</code> はビットマスクであり、 次のものについて調べることができます。</p><ul> <li> <p><b><code>LATT_NOINFERIORS</code></b> - このメールボックスには 「子供」がいないか、またはいないかもしれません（このボックスの中にメールボックスはありません）。 このメールボックスに対して <code>imap_createmailbox()</code> をコールしても動作しません。</p> </li> <li> <p><b><code>LATT_NOSELECT</code></b> - 単なるコンテナであり、 メールボックスではありません - これをオープンすることはできません。</p> </li> <li> <p><b><code>LATT_MARKED</code></b> - このメールボックスにはマークがつけられています。 これは、最後に確認したとき以降に新たなメッセージが到着しているかもしれないということを意味します。 すべての IMAP サーバーがこの機能を提供しているとは限りません。</p> </li> <li> <p><b><code>LATT_UNMARKED</code></b> - このメールボックスにはマークがつけられておらず、 新たなメッセージを含んでいません。 <b><code>MARKED</code></b> あるいは <b><code>UNMARKED</code></b> が提供されている場合は、 その IMAP サーバーがこのメールボックスに対してマーク機能を提供しているとみなせます。</p> </li> </ul>
 * @link http://php.net/manual/ja/function.imap-getmailboxes.php
 * @see imap_getsubscribed()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_getmailboxes($imap_stream, string $ref, string $pattern): array {}

/**
 * 購読中の全メールボックスの一覧を取得する
 * <p>購読中のメールボックスの情報を取得します。</p><p><code>imap_getmailboxes()</code> と同じ動作をしますが、 ユーザーが購読しているメールボックスのみを返すという点が異なります。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p><code>ref</code> は、通常は <code>imap_open()</code> で指定したサーバー情報です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array <p>メールボックス情報を有するオブジェクトの配列を返します。各オブジェクトには、 メールボックスの完全な名前である <code>name</code>、 このメールボックスの階層の区切りを示す属性 <code>delimiter</code>、 そして <code>attributes</code> が存在します。 <code>attributes</code> はビットマスクであり、 次のものについて調べることができます。</p><ul> <li>  <b><code>LATT_NOINFERIORS</code></b> - このメールボックスには 「子供」はいません（このボックスの中にメールボックスはありません）。  </li> <li>  <b><code>LATT_NOSELECT</code></b> - 単なるコンテナであり、 メールボックスではありません - これをオープンすることはできません。  </li> <li>  <b><code>LATT_MARKED</code></b> - このメールボックスにはマークが つけられています。UW-IMAPD でのみ使用されます。  </li> <li>  <b><code>LATT_UNMARKED</code></b> - このメールボックスにはマークが つけられていません。UW-IMAPD でのみ使用されます。  </li> </ul>
 * @link http://php.net/manual/ja/function.imap-getsubscribed.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_getsubscribed($imap_stream, string $ref, string $pattern): array {}

/**
 * imap_headerinfo() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_headerinfo()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $fromlength <p><i>fetchfrom</i> プロパティの文字数。 ゼロ以上でなければなりません。</p>
 * @param int $subjectlength <p><i>fetchsubject</i> プロパティの文字数。 ゼロ以上でなければなりません。</p>
 * @param string $defaulthost
 * @return object
 * @link http://php.net/manual/ja/function.imap-header.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_header($imap_stream, int $msg_number, int $fromlength = 0, int $subjectlength = 0, string $defaulthost = NULL): object {}

/**
 * メッセージヘッダを読み込む
 * <p>指定したメッセージ番号についての情報を、そのヘッダを読み込んで取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $fromlength <p><i>fetchfrom</i> プロパティの文字数。 ゼロ以上でなければなりません。</p>
 * @param int $subjectlength <p><i>fetchsubject</i> プロパティの文字数。 ゼロ以上でなければなりません。</p>
 * @param string $defaulthost
 * @return object <p>エラー時には <b><code>FALSE</code></b>、成功時には 以下のプロパティをもつオブジェクトを返します。</p><ul> <li>  toaddress - 完全な to: 行。最大 1024 文字。  </li> <li>  to - To: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  fromaddress - 完全な from: 行。最大 1024 文字。  </li> <li>  from - From: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  ccaddress - 完全な cc: 行。最大 1024 文字。  </li> <li>  cc - Cc: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  bccaddress - 完全な bcc: 行。最大 1024 文字。  </li> <li>  bcc - Bcc: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  reply_toaddress - 完全な Reply-To: 行。最大 1024 文字。  </li> <li>  reply_to - Reply-To: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  senderaddress - 完全な sender: 行。最大 1024 文字。  </li> <li>  sender - Sender: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、<i>adl</i>、 <i>mailbox</i> および <i>host</i>  </li> <li>  return_pathaddress - 完全な Return-Path: 行。最大 1024 文字。  </li> <li>  return_path - Return-Path: 行から、次のプロパティを含むオブジェクトの配列を返します。 <i>personal</i>、 <i>adl</i>、<i>mailbox</i> および <i>host</i>  </li> <li>  remail -  </li> <li>  date - ヘッダにあるメッセージの日付。  </li> <li>  Date - date と同じ。  </li> <li>  subject - メッセージの件名。  </li> <li>  Subject - subject と同じ。  </li> <li>  in_reply_to -  </li> <li>  message_id -  </li> <li>  newsgroups -  </li> <li>  followup_to -  </li> <li>  references -  </li> <li>  Recent - 最近の既読メッセージは <i>R</i>、 最新の未読メッセージは <i>N</i>、 最新でないメッセージは ' '。  </li> <li>  Unseen - 最新でない未読メッセージは <i>U</i>、 既読、あるいは最新の未読メッセージは ' '。  </li> <li>  Flagged - フラグがたっている場合は <i>F</i>、 そうでない場合は ' '。  </li> <li>  Answered - 返信した場合は <i>A</i>、 していない場合は ' '。  </li> <li>  Deleted - 削除された場合は <i>D</i>、 されていない場合は ' '。  </li> <li>  Draft - 草稿である場合は <i>X</i>、 そうでない場合は ' '。  </li> <li>  Msgno - メッセージ番号。  </li> <li>  MailDate -  </li> <li>  Size - メッセージのサイズ。  </li> <li>  udate - メールメッセージの日付を Unix time で表したもの。  </li> <li>  fetchfrom - from 行を <code>fromlength</code> 文字に適合させたもの。  </li> <li>  fetchsubject - subject 行を <code>subjectlength</code> 文字に適合させたもの。  </li> </ul>
 * @link http://php.net/manual/ja/function.imap-headerinfo.php
 * @see imap_fetch_overview()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_headerinfo($imap_stream, int $msg_number, int $fromlength = 0, int $subjectlength = 0, string $defaulthost = NULL): object {}

/**
 * メールボックス内のすべてのメッセージのヘッダを返す
 * <p>メールボックス内のすべてのメッセージのヘッダを返します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return array <p>ヘッダ情報でフォーマットされた文字列の配列を返します。1 つの メールメッセージ毎に 1 つの要素が格納されます。</p>
 * @link http://php.net/manual/ja/function.imap-headers.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_headers($imap_stream): array {}

/**
 * ページリクエスト時に生じた直近の IMAP エラーを返す
 * <p>現在のページに生じた直近の IMAP エラーメッセージの全文を返します。 エラースタックは変更されません。 <b>imap_last_error()</b> を続けてコールした際、 コール間に新規エラーが生じていない場合は同じエラーが返されます。</p>
 * @return string <p>現在のページに生じた直近の IMAP エラーメッセージの全文を返します。 エラーメッセージが存在しない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-last-error.php
 * @see imap_errors()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_last_error(): string {}

/**
 * メールボックスのリストを読み込む
 * <p>メールボックスのリストを読み込みます。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array <p>メールボックスの名前を含む配列を返します。 または失敗時に false を返します。</p>
 * @link http://php.net/manual/ja/function.imap-list.php
 * @see imap_getmailboxes(), imap_lsub()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_list($imap_stream, string $ref, string $pattern): array {}

/**
 * imap_list() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_list()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array
 * @link http://php.net/manual/ja/function.imap-listmailbox.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_listmailbox($imap_stream, string $ref, string $pattern): array {}

/**
 * 指定したテキストにマッチするメールボックスの一覧を返す
 * <p><code>content</code> をテキストに持つメールボックスの名前を 配列で返します。</p><p>この関数は <code>imap_listmailbox()</code> に似ていますが、 メールボックス内に文字列 <code>content</code> が存在するか どうかを調べる点が違います。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @param string $content <p>検索する文字列。</p>
 * @return array <p><code>content</code> をテキストに持つメールボックスの名前を 配列で返します。</p>
 * @link http://php.net/manual/ja/function.imap-listscan.php
 * @see imap_listmailbox(), imap_search()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_listscan($imap_stream, string $ref, string $pattern, string $content): array {}

/**
 * imap_lsub() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_lsub()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array
 * @link http://php.net/manual/ja/function.imap-listsubscribed.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_listsubscribed($imap_stream, string $ref, string $pattern): array {}

/**
 * 購読しているすべてのメールボックスの一覧を得る
 * <p>購読しているすべてのメールボックスの配列を取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @return array <p>購読しているすべてのメールボックスの配列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-lsub.php
 * @see imap_list(), imap_getmailboxes()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_lsub($imap_stream, string $ref, string $pattern): array {}

/**
 * e-mail メッセージを送信する
 * <p>この関数は、Cc および Bcc 受信者の正確な処理を行って email を送信することが可能です。</p><p>パラメータ <code>to</code>、<code>cc</code> および <code>bcc</code> は全て文字列で、 » RFC822 アドレスリストとしてパースされます。</p>
 * @param string $to <p>受信者。</p>
 * @param string $subject <p>メールの件名。</p>
 * @param string $message <p>メールの本文。 <code>imap_mail_compose()</code> を参照ください。</p>
 * @param string $additional_headers <p>メールに設定する追加ヘッダ文字列。</p>
 * @param string $cc
 * @param string $bcc <p><code>bcc</code> で指定した受信者は mail を受信しますが、 ヘッダからは除外されます。</p>
 * @param string $rpath <p>リターンパスを指定するために <code>rpath</code> パラメータを使用してください。この関数は、 複数のユーザー用のメールクライアントとして PHP を使用する際に有用です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-mail.php
 * @see mail(), imap_mail_compose()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mail(string $to, string $subject, string $message, string $additional_headers = NULL, string $cc = NULL, string $bcc = NULL, string $rpath = NULL): bool {}

/**
 * 指定したエンベロープおよびボディセクションに基づいて MIME メッセージを作成する
 * <p>指定したエンベロープ <code>envelope</code> およびボディセクション <code>body</code> に基づいて MIME メッセージを作成します。</p>
 * @param array $envelope <p>ヘッダフィールドの連想配列。使えるキーは "remail", "return_path", "date", "from", "reply_to", "in_reply_to", "subject", "to", "cc", "bcc", "message_id" および "custom_headers" (その他のヘッダの連想配列) です。</p>
 * @param array $body <p>本文の配列。</p> <p>本文は、以下のキーからなる連想配列です。 "type", "encoding", "charset", "type.parameters", "subtype", "id", "description", "disposition.type", "disposition", "contents.data", "lines", "bytes" および "md5"。</p>
 * @return string <p>MIME メッセージを返します。</p>
 * @link http://php.net/manual/ja/function.imap-mail-compose.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mail_compose(array $envelope, array $body): string {}

/**
 * 指定されたメッセージをメールボックスにコピーする
 * <p><code>msglist</code> で指定されたメッセージを、 指定したメールボックスにコピーします。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $msglist <p><code>msglist</code> は、 (» RFC2060 に記述されたように) ただのメッセージ番号ではなく、範囲を示します。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param int $options <p><code>options</code> はビットマスクであり、以下の組み合わせです。</p><ul> <li>  <b><code>CP_UID</code></b> - UIDS を含む処理の数  </li> <li>  <b><code>CP_MOVE</code></b> - コピー後にメールボックスからメッセージを削除する  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-mail-copy.php
 * @see imap_mail_move()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mail_copy($imap_stream, string $msglist, string $mailbox, int $options = 0): bool {}

/**
 * 指定されたメッセージをメールボックスに移動する
 * <p><code>msglist</code> で指定されたメッセージを、 指定されたメールボックス <code>mbox</code> に移動します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $msglist <p><code>msglist</code> は、 (» RFC2060 に記述されたように) ただのメッセージ番号ではなく、範囲を示します。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param int $options <p><code>options</code> はビットマスクであり、ひとつのオプションをとります。</p><ul> <li>  <b><code>CP_UID</code></b> - UIDS を含む処理の数  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-mail-move.php
 * @see imap_mail_copy()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mail_move($imap_stream, string $msglist, string $mailbox, int $options = 0): bool {}

/**
 * 現在のメールボックスに関する情報を得る
 * <p>サーバーにおける現在のメールボックスのステータスを調べます。この関数は <code>imap_status()</code> に似ていますが、 メールボックス内の全メッセージのサイズを合計します。このため、 実行時間が幾分余計にかかります。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return object <p>以下のプロパティを有するオブジェクトを返します。</p> <b>Mailbox のプロパティ</b>   Date 最終変更日 (現在の日付時刻)   Driver ドライバ   Mailbox メールボックスの名前   Nmsgs メッセージ数   Recent 最近のメッセージの数   Unread 未読のメッセージの数   Deleted 削除されたメッセージの数   Size メールボックスのサイズ   <p>Returns <b><code>FALSE</code></b> on failure.</p>
 * @link http://php.net/manual/ja/function.imap-mailboxmsginfo.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mailboxmsginfo($imap_stream): object {}

/**
 * MIME ヘッダ要素をデコードする
 * <p>非 ASCII テキストの MIME メッセージヘッダエクステンションをデコードします (» RFC2047 を参照ください)。</p>
 * @param string $text <p>MIME テキスト。</p>
 * @return array <p>デコードされた要素は、オブジェクトの配列で返されます。 各オブジェクトは、二つのプロパティ <i>charset</i> と <i>text</i> を有しています。</p><p>要素がエンコードされていない場合、言い替えるとプレーンな US-ASCII の場合は この要素の <i>charset</i> プロパティは <i>default</i> に設定されます。</p>
 * @link http://php.net/manual/ja/function.imap-mime-header-decode.php
 * @see imap_utf8()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_mime_header_decode(string $text): array {}

/**
 * 指定した UID のメッセージ番号を返す
 * <p>指定した <code>uid</code> のメッセージ番号を返します。</p><p>この関数は、<code>imap_uid()</code> の逆の動作となります。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $uid <p>メッセージの UID。</p>
 * @return int <p>指定した <code>uid</code> のメッセージ番号を返します。</p>
 * @link http://php.net/manual/ja/function.imap-msgno.php
 * @see imap_uid()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_msgno($imap_stream, int $uid): int {}

/**
 * Decode a modified UTF-7 string to UTF-8
 * <p>Decode a modified UTF-7 (as specified in RFC 2060, section 5.1.3) string to UTF-8.</p><p><b>注意</b>:</p><p>This function is only available, if libcclient exports utf8_to_mutf7().</p>
 * @param string $in <p>A string encoded in modified UTF-7.</p>
 * @return string <p>Returns <code>in</code> converted to UTF-8, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.imap-mutf7-to-utf8.php
 * @see imap_utf8_to_mutf7()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function imap_mutf7_to_utf8(string $in): string {}

/**
 * 現在のメールボックスのメッセージ数を取得する
 * <p>現在のメールボックスにあるメッセージ数を返します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return int <p>現在のメールボックスのメッセージ数を整数として返します。 またはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-num-msg.php
 * @see imap_num_recent(), imap_status()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_num_msg($imap_stream): int {}

/**
 * 現在のメールボックスにある新規メッセージ数を取得する
 * <p>現在のメールボックスにある新しいメッセージの数を返します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return int <p>現在のメールボックスにある新しいメッセージの数を返します。</p>
 * @link http://php.net/manual/ja/function.imap-num-recent.php
 * @see imap_num_msg(), imap_status()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_num_recent($imap_stream): int {}

/**
 * メールボックスへの IMAP ストリームをオープンする
 * <p><code>mailbox</code> への IMAP ストリームをオープンします。</p><p>この関数は、POP3 や NNTP サーバーへのストリームをオープンする際にも使用可能です。 しかし、いくつかの関数および機能は IMAP サーバーでしか利用できません。</p>
 * @param string $mailbox <p>メールボックス名(mailbox)は、サーバー名の部分と使用するサーバーにおける メールボックスへのパスから構成されます。特別な名前 <i>INBOX</i> は、 カレントユーザーの個人メールボックスを意味します。 ASCII 空間で出力可能な文字以外の外国文字を含むメールボックス名は <code>imap_utf7_encode()</code> でエンコードする必要があります。</p> <p>サーバー部は '{' および '}' で括られ、サーバー名または IP アドレス、オプションの ':' から始まるポート指定子、('/' で始まる)オプションのプロトコル指定子 から構成されます。</p> <p>サーバー部は、全ての mailbox パラメータで必須です。</p> <p><i>{</i> で始まる名前はすべてリモート名で、 <i>"{" remote_system_name [":" port] [flags] "}" [mailbox_name]</i> のような形式となります。</p><ul> <li>  <i>remote_system_name</i> - Internet ドメイン名 あるいは括弧でかこまれたサーバーの IP アドレス。  </li> <li>  <i>port</i> - オプションの TCP ポート番号。デフォルトは そのサービスのデフォルトポート。  </li> <li>  <i>flags</i> - オプションのフラグ。以下の表を参照ください。  </li> <li>  <i>mailbox_name</i> - リモートメールボックス名。デフォルトは INBOX 。  </li> </ul> <p></p> <b>オプションのフラグ名</b>   フラグ 説明      <i>/service=</i><i>service</i>  メールボックスにアクセスするサービス。デフォルトは "imap" 。    <i>/user=</i><i>user</i>  サーバーへのログイン時のユーザー名。    <i>/authuser=</i><i>user</i>  リモートの認証ユーザー。指定されていた場合は、このユーザーのパスワードが 認証に使用されます（例: administrator）。   <i>/anonymous</i> 匿名ユーザーとしてアクセスします。   <i>/debug</i> プロトコルの通信内容をアプリケーションのデバッグログに記録します。   <i>/secure</i> ネットワーク越しにプレーンテキストのパスワードを送信しません。    <i>/imap</i>, <i>/imap2</i>, <i>/imap2bis</i>, <i>/imap4</i>, <i>/imap4rev1</i>   <i>/service=imap</i> と同じです。   <i>/pop3</i>  <i>/service=pop3</i> と同じです。   <i>/nntp</i>  <i>/service=nntp</i> と同じです。   <i>/norsh</i> 事前に認証済みの IMAP セッションを確立する際に、rsh や ssh を使用しません。   <i>/ssl</i> セッションの暗号化に <i>Secure Socket Layer</i> を使用します。   <i>/validate-cert</i> TLS/SSL サーバーの証明書を検証します（デフォルトの挙動です）。   <i>/novalidate-cert</i> TLS/SSL サーバーの証明書を検証しません。サーバーが自己証明の 証明書を使用している際に必要となります。   <i>/tls</i> セッションの暗号化に <i>start-TLS</i> の使用を強制し、それを サポートしていないサーバーとの接続を拒否します。   <i>/notls</i> たとえサーバーがそれをサポートしていたとしても、 セッションで <i>start-TLS</i> による暗号化を使用しません。   <i>/readonly</i> 読み込み専用でのメールボックスのオープンを要求します（IMAP のみ。 NNTP では無視され、SMTP および POP3 ではエラーとなります）。
 * @param string $username <p>ユーザー名。</p>
 * @param string $password <p><code>username</code> のパスワード。</p>
 * @param int $options <p><code>options</code> はビットマスクであり、以下の組み合わせとなります。</p><ul> <li>  <b><code>OP_READONLY</code></b> - メールボックスを読み込み専用でオープンします。  </li> <li>  <b><code>OP_ANONYMOUS</code></b> - news に関して .newsrc を使用せず、更新もしません（NNTP のみ）。  </li> <li>  <b><code>OP_HALFOPEN</code></b> - IMAP 及び NNTP 名について、 接続をオープンしますがメールボックスはオープンしません。  </li> <li>  <b><code>CL_EXPUNGE</code></b> - メールボックスを閉じる際に、 自動的にメールボックスを削除します（<code>imap_delete()</code> および <code>imap_expunge()</code> も参照ください）。  </li> <li>  <b><code>OP_DEBUG</code></b> - プロトコルネゴシエーションをデバッグします。  </li> <li>  <b><code>OP_SHORTCACHE</code></b> - 短い（<i>elt</i>-only）キャッシングを行います。  </li> <li>  <b><code>OP_SILENT</code></b> - イベントを受信しません（内部で使用します）。  </li> <li>  <b><code>OP_PROTOTYPE</code></b> - ドライバのプロトタイプを返します。  </li> <li>  <b><code>OP_SECURE</code></b> - セキュアでない認証を行いません。  </li> </ul>
 * @param int $n_retries <p>接続試行の最大数。</p>
 * @param array $params <p>接続パラメータ。次の (文字列の) キーを使って接続パラメータを設定することができます。</p><ul> <li>  <i>DISABLE_AUTHENTICATOR</i> - 認証プロパティを無効にする  </li> </ul>
 * @return resource <p>成功した場合は IMAP ストリームを、失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-open.php
 * @see imap_close()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_open(string $mailbox, string $username, string $password, int $options = 0, int $n_retries = 0, array $params = NULL) {}

/**
 * IMAP ストリームがアクティブかどうかを調べる
 * <p><b>imap_ping()</b> はストリームに ping を行い、 まだアクティブであるかどうかを調べます。これにより新しいメールの到着を知ることもあります。 これは、定期的に「メールのチェック」を行い、サーバーとの 「接続を保持し続ける」ためのお勧めの方法です。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @return bool <p>ストリームがまだ有効であれば <b><code>TRUE</code></b> を、そうでなければ <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-ping.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_ping($imap_stream): bool {}

/**
 * quoted-printable 文字列を 8 ビット文字列に変換する
 * <p>（» RFC2045, section 6.7 に基づき）quoted-printable 文字列を 8 ビット文字列に変換します。</p>
 * @param string $string <p>quoted-printable 文字列。</p>
 * @return string <p>8 ビット文字列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-qprint.php
 * @see imap_8bit()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_qprint(string $string): string {}

/**
 * imap_renamemailbox() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_renamemailbox()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $old_mbox <p>古いメールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param string $new_mbox <p>新しいメールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.imap-rename.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_rename($imap_stream, string $old_mbox, string $new_mbox): bool {}

/**
 * メールボックスの名前を変更する
 * <p>この関数は、古いメールボックスを新しいメールボックスにリネーム します（<code>mbox</code> 名のフォーマットについては <code>imap_open()</code> を参照ください）。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $old_mbox <p>古いメールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param string $new_mbox <p>新しいメールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-renamemailbox.php
 * @see imap_createmailbox(), imap_deletemailbox()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_renamemailbox($imap_stream, string $old_mbox, string $new_mbox): bool {}

/**
 * 新規メールボックスへの IMAP ストリームを再度オープンする
 * <p>IMAP または NNTP サーバー上の新しい <code>mailbox</code> に対して指定されたストリームを再オープンします。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param int $options <p><code>options</code> はビットマスクであり、以下の組み合わせとなります。</p><ul> <li>  <b><code>OP_READONLY</code></b> - メールボックスを読み込み専用でオープンします。  </li> <li>  <b><code>OP_ANONYMOUS</code></b> - ニュースに関して .newsrc を使用せず、更新もしません（NNTP のみ）。  </li> <li>  <b><code>OP_HALFOPEN</code></b> - IMAP および NNTP 名について、接続をオープンするがメールボックスをオープンしません。  </li> <li>  <b><code>OP_EXPUNGE</code></b> - 何も警告せずにリサイクルストリームを削除します。  </li> <li>  <b><code>CL_EXPUNGE</code></b> - メールボックスを閉じた際に、自動的に メールボックスを削除する（<code>imap_delete()</code> および <code>imap_expunge()</code> も参照ください）。  </li> </ul>
 * @param int $n_retries <p>接続試行の最大数。</p>
 * @return bool <p>ストリームを再度オープンした場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-reopen.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_reopen($imap_stream, string $mailbox, int $options = 0, int $n_retries = 0): bool {}

/**
 * アドレス文字列を解釈します
 * <p>» RFC2822 の定義に基づき、アドレス文字列をパースします。</p>
 * @param string $address <p>アドレスを含む文字列。</p>
 * @param string $default_host <p>デフォルトのホスト名。</p>
 * @return array <p>オブジェクトの配列を返します。オブジェクトのプロパティは以下のとおりです。</p><ul> <li>  mailbox - メールボックス名（ユーザー名）。  </li> <li>  host - ホスト名。  </li> <li>  personal - 個人名。  </li> <li>  adl - ドメインソースルート。  </li> </ul>
 * @link http://php.net/manual/ja/function.imap-rfc822-parse-adrlist.php
 * @see imap_rfc822_parse_headers()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_rfc822_parse_adrlist(string $address, string $default_host): array {}

/**
 * 文字列からメールヘッダを解釈する
 * <p>複数のヘッダ要素を含むオブジェクトを取得します。 <code>imap_header()</code> と同じようなものです。</p>
 * @param string $headers <p>パースされたヘッダデータ。</p>
 * @param string $defaulthost <p>デフォルトのホスト名。</p>
 * @return object <p><code>imap_header()</code> が返すオブジェクトと似たものを返します。 フラグおよび他の要素は IMAP サーバーから取得するいう点が異なります。</p>
 * @link http://php.net/manual/ja/function.imap-rfc822-parse-headers.php
 * @see imap_rfc822_parse_adrlist()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_rfc822_parse_headers(string $headers, string $defaulthost = "UNKNOWN"): object {}

/**
 * 指定したメールボックス、ホスト、個人情報を、 電子メールアドレスとして適当な形式にして返す
 * <p>指定された情報を » RFC822 の定義に基づき 適切にフォーマットされた電子メールアドレスにして返します。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param string $host <p>email のホスト部分。</p>
 * @param string $personal <p>アカウント所有者の名前。</p>
 * @return string <p>» RFC822 の定義に基づき 適切にフォーマットされた電子メールアドレスを返します。</p>
 * @link http://php.net/manual/ja/function.imap-rfc822-write-address.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_rfc822_write_address(string $mailbox, string $host, string $personal): string {}

/**
 * 指定した本文部をファイルに保存する
 * <p>指定したメッセージの本文全体、あるいはその一部を保存します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param mixed $file <p>保存先ファイルへのパスを表す文字列、あるいは <code>fopen()</code> が返すファイル記述子。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param string $part_number <p>パート番号。ピリオドで区切られた整数文字列を指定します。 これは、IMAP4 仕様における本文パートのリストへのインデックスとなります。</p>
 * @param int $options <p>ビットマスクであり、以下の組合わせとなります。</p><ul> <li>  <b><code>FT_UID</code></b> - <code>msg_number</code>は UID である  </li> <li>  <b><code>FT_PEEK</code></b> - 既に設定されていない場合、 \Seen フラグを設定しない  </li> <li>  <b><code>FT_INTERNAL</code></b> - 内部フォーマットで文字列を返す。CRLF に正規化しない。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-savebody.php
 * @see imap_fetchbody()
 * @since PHP 5 >= 5.1.3, PHP 7
 */
function imap_savebody($imap_stream, $file, int $msg_number, string $part_number = "", int $options = 0): bool {}

/**
 * imap_listscan() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_listscan()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @param string $content <p>検索する文字列。</p>
 * @return array
 * @link http://php.net/manual/ja/function.imap-scan.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_scan($imap_stream, string $ref, string $pattern, string $content): array {}

/**
 * imap_listscan() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>imap_listscan()</code>.</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $ref <p>通常、<code>ref</code> は <code>imap_open()</code> で述べられているサーバー定義です。</p>
 * @param string $pattern <p>検索を開始するメールボックスの階層を指定します。</p> <p><code>pattern</code> の中で使用できる特別な文字として '<i>&#42;</i>' および '<i>%</i>' があります。 '<i>&#42;</i>' は、すべてのメールボックスを意味します。 <code>pattern</code> に '<i>&#42;</i>' を指定すると、 メールボックス階層全体のリストが得られます。 '<i>%</i>' は現在のレベルのみを意味します。 '<i>%</i>' を <code>pattern</code> に指定すると、 トップレベルのメールボックスのみを返します。<i>UW_IMAPD</i> の場合、 '<i>~/mail/%</i>' は ~/mail ディレクトリ内のすべてのメールボックスを返しますが、 そのディレクトリのサブフォルダにあるメールボックスは返しません。</p>
 * @param string $content <p>検索する文字列。</p>
 * @return array
 * @link http://php.net/manual/ja/function.imap-scanmailbox.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_scanmailbox($imap_stream, string $ref, string $pattern, string $content): array {}

/**
 * 指定した検索条件にマッチするメッセージを配列として返す
 * <p>この関数は、指定した IMAP ストリームの現在オープンしているメールボックス において検索を行います。</p><p>例えば、Mom から送られた全ての未回答のメッセージにマッチさせるには、 "UNANSWERED FROM mom" を使用します。 検索は、大文字小文字が区別されずに行われます。 検索条件のリストは、UW c-client のソースコードからのものであり、 不完全または不正確である可能性があります (» RFC2060, section 6.4.4 も参照ください)。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $criteria <p>空白で区切られた文字列で、以下のキーワードが使用可能です。 複数の単語からなるキーワード（例 <i>FROM "joey smith"</i>） は全て引用符で括る必要があります。 結果は、すべての <code>criteria</code> エントリにマッチすることになります。</p><ul> <li>  ALL - 他の検索条件にマッチする全メッセージを返す  </li> <li>  ANSWERED - \\ANSWERED フラグが設定されているメッセージにマッチ  </li> <li>  BCC "string" - Bcc: フィールドに "string" を有するメッセージにマッチ  </li> <li>  BEFORE "date" - "date" より前の Date: を有するメッセージにマッチ  </li> <li>  BODY "string" - メッセージ本体に "string" を有するメッセージにマッチ  </li> <li>  CC "string" - Cc: フィールドに "string" を有するメッセージにマッチ  </li> <li>  DELETED - 削除されたメッセージにマッチ  </li> <li>  FLAGGED - \\FLAGGED フラグ（重要または緊急を表すものとして 使用されることがあります）が設定されているメッセージにマッチ  </li> <li>  FROM "string" - From: フィールドに "string" を有するメッセージにマッチ  </li> <li>  KEYWORD "string" - キーワードとして "string" を有するメッセージにマッチ  </li> <li>  NEW - 新規メッセージにマッチ  </li> <li>  OLD - 古いメッセージにマッチ  </li> <li>  ON "date" - Date: が "date" であるメッセージにマッチ  </li> <li>  RECENT - \\RECENT フラグが設定されているメッセージにマッチ  </li> <li>  SEEN - 既読の（\\SEEN フラグが設定されている）メッセージにマッチ  </li> <li>  SINCE "date" - Date: が "date" 以降であるメッセージにマッチ  </li> <li>  SUBJECT "string" - Subject: に "string" を有するメッセージにマッチ  </li> <li>  TEXT "string" - テキスト "string" を有するメッセージにマッチ  </li> <li>  TO "string" - To: に "string" を有するメッセージにマッチ  </li> <li>  UNANSWERED - 未回答のメッセージにマッチ  </li> <li>  UNDELETED - 削除されていないメッセージにマッチ  </li> <li>  UNFLAGGED - フラグが設定されていないメッセージにマッチ  </li> <li>  UNKEYWORD "string" - キーワード "string" を有さないメッセージにマッチ  </li> <li>  UNSEEN - 未読のメッセージにマッチ  </li> </ul>
 * @param int $options <p><code>options</code> に指定できる値は <b><code>SE_UID</code></b> です。これを指定すると、 メッセージ番号ではなく UID を含む配列を返します。</p>
 * @param string $charset <p>文字列の検索の際に使う MIME 文字セット。</p>
 * @return array <p>メッセージ番号あるいは UID の配列を返します。</p><p>検索条件 <code>criteria</code> を処理できなかった場合や 結果が見つからなかった場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-search.php
 * @see imap_listscan()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_search($imap_stream, string $criteria, int $options = SE_FREE, string $charset = NULL): array {}

/**
 * 指定したメールボックスにクォータを設定する
 * <p>メールボックス単位でクォータ上限(最大容量)を設定します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $quota_root <p>クォータを設定するメールボックス。 これは、メールボックスの IMAP 標準フォーマット 'user.name' に基づき指定する必要があります。</p>
 * @param int $quota_limit <p><code>quota_root</code> の最大サイズ (KB 単位)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-set-quota.php
 * @see imap_open(), imap_get_quota()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function imap_set_quota($imap_stream, string $quota_root, int $quota_limit): bool {}

/**
 * 指定したメールボックスの ACL を設定する
 * <p>指定したメールボックスの ACL を設定します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param string $id <p>権限を付与するユーザー。</p>
 * @param string $rights <p>そのユーザーに付与する権限。空文字列を渡すと、acl を削除します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-setacl.php
 * @see imap_getacl()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imap_setacl($imap_stream, string $mailbox, string $id, string $rights): bool {}

/**
 * メッセージにフラグをセットする
 * <p>この関数は、指定した <code>sequence</code> のメッセージの フラグに指定した <code>flag</code> を設定し、保存します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $sequence <p>メッセージ番号のシーケンス。 <i>X,Y</i> 形式でメッセージを列挙したり、 <i>X:Y</i> 形式で範囲内のすべてのメッセージを指定したりすることができます。</p>
 * @param string $flag <p>設定可能なフラグは、(» RFC2060 で定義された) <i>\Seen</i>、 <i>\Answered</i>、<i>\Flagged</i>、 <i>\Deleted</i> および <i>\Draft</i> です。</p>
 * @param int $options <p><code>options</code> はビットマスクであり、以下の組み合わせとなります。</p><ul> <li>  <b><code>ST_UID</code></b> - シーケンス引数はシーケンス番号の代わりに UID を含みます。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-setflag-full.php
 * @see imap_clearflag_full()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_setflag_full($imap_stream, string $sequence, string $flag, int $options = NIL): bool {}

/**
 * メッセージヘッダの配列をソートする
 * <p>指定したパラメータにより取得したメッセージ番号をソートします。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $criteria <p>criteria は、次のどれかとします (ひとつのみ)。</p><ul> <li>  <b><code>SORTDATE</code></b> - メッセージの日付  </li> <li>  <b><code>SORTARRIVAL</code></b> - 到着日付  </li> <li>  <b><code>SORTFROM</code></b> - 最初の From アドレスのメールボックス  </li> <li>  <b><code>SORTSUBJECT</code></b> - メッセージ Subject  </li> <li>  <b><code>SORTTO</code></b> - 最初の To アドレスのメールボックス  </li> <li>  <b><code>SORTCC</code></b> - 最初の cc アドレスのメールボックス  </li> <li>  <b><code>SORTSIZE</code></b> - メッセージのサイズ（バイト単位）  </li> </ul>
 * @param int $reverse <p>これを 1 にすると、逆順にソートします。</p>
 * @param int $options <p><code>options</code> はビットマスクで、以下の組み合わせとなります。</p><ul> <li>  <b><code>SE_UID</code></b> - シーケンス番号の代わりに UID を返す  </li> <li>  <b><code>SE_NOPREFETCH</code></b> - 検索したメッセージを事前取得しない  </li> </ul>
 * @param string $search_criteria <p>IMAP2 フォーマットの検索条件文字列。詳細は <code>imap_search()</code> を参照ください。</p>
 * @param string $charset <p>文字列の検索の際に使う MIME 文字セット。</p>
 * @return array <p>指定したパラメータでソートしたメッセージ番号の配列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-sort.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_sort($imap_stream, int $criteria, int $reverse, int $options = 0, string $search_criteria = NULL, string $charset = NULL): array {}

/**
 * 現在のメールボックス以外のメールボックスのステータス情報を返す
 * <p>指定したメールボックス <code>mailbox</code> についてのステータス情報を取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @param int $options <p>以下のフラグが使用できます。</p><ul> <li>  <b><code>SA_MESSAGES</code></b> - $status-&gt;messages にメールボックスのメッセージ数を設定する  </li> <li>  <b><code>SA_RECENT</code></b> - $status-&gt;recent にメールボックスの最近のメッセージ数を設定する  </li> <li>  <b><code>SA_UNSEEN</code></b> - $status-&gt;unseen にメールボックスの未読の(新規)メッセージ数を設定する  </li> <li>  <b><code>SA_UIDNEXT</code></b> - $status-&gt;uidnext にメールボックスの次の UID を設定する  </li> <li>  <b><code>SA_UIDVALIDITY</code></b> - メールボックスの UID がもはや有効ではない場合に変化する定数を $status-&gt;uidvalidity に設定する  </li> <li>  <b><code>SA_ALL</code></b> - 上記のものをすべて設定する  </li> </ul>
 * @return object <p>この関数は、ステータス情報を含むオブジェクトを返します。このオブジェクトには <i>messages</i>、 <i>recent</i>、<i>unseen</i>、 <i>uidnext</i> および <i>uidvalidity</i> というプロパティが含まれます。</p><p><i>flags</i> にも、 上の各定数に対応するビットマスクを設定することができます。</p>
 * @link http://php.net/manual/ja/function.imap-status.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_status($imap_stream, string $mailbox, int $options): object {}

/**
 * メールボックスを購読する
 * <p>新規メールボックスを購読します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-subscribe.php
 * @see imap_unsubscribe()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_subscribe($imap_stream, string $mailbox): bool {}

/**
 * スレッド化したメッセージのツリーを返す
 * <p>スレッド化されたメッセージのツリーを取得します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $options
 * @return array <p><b>imap_thread()</b> は、<i>REFERENCES</i> でスレッド化したメッセージのツリーを含む連想配列を返します。 エラー時には <b><code>FALSE</code></b> を返します。</p><p>現在のメールボックス内のすべてのメッセージが、結果の配列の 3 つの エントリで表されます。</p><ul> <li><p>$thread["XX.num"] - 現在のメッセージ番号。</p></li> <li><p>$thread["XX.next"]</p></li> <li><p>$thread["XX.branch"]</p></li> </ul>
 * @link http://php.net/manual/ja/function.imap-thread.php
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imap_thread($imap_stream, int $options = SE_FREE): array {}

/**
 * imap タイムアウトを設定あるいは取得する
 * <p>imap タイムアウトを設定あるいは取得します。</p>
 * @param int $timeout_type <p><b><code>IMAP_OPENTIMEOUT</code></b>、 <b><code>IMAP_READTIMEOUT</code></b>、 <b><code>IMAP_WRITETIMEOUT</code></b> あるいは <b><code>IMAP_CLOSETIMEOUT</code></b> のいずれか。</p>
 * @param int $timeout <p>タイムアウト秒数。</p>
 * @return mixed <p><code>timeout</code> が設定されている場合は、 この関数は成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>timeout</code> が省略されていたり、-1 と評価される値が設定されている場合は、 現在のタイムアウト値 <code>timeout_type</code> を整数で返します。</p>
 * @link http://php.net/manual/ja/function.imap-timeout.php
 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
 */
function imap_timeout(int $timeout_type, int $timeout = -1) {}

/**
 * 指定したメッセージシーケンス番号の UID を返す
 * <p>この関数は、指定したメッセージシーケンス番号の UID を返します。 メッセージ番号はメールボックスの内容を変更する度に変わる可能性が ありますが、UID はユニークな ID であり時間が経過しても変わりません。</p><p>この関数は、<code>imap_msgno()</code> の逆関数です。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @return int <p>指定したメッセージの UID を返します。</p>
 * @link http://php.net/manual/ja/function.imap-uid.php
 * @see imap_msgno()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_uid($imap_stream, int $msg_number): int {}

/**
 * 削除マークがついているメッセージのマークをはずす
 * <p>指定したメッセージについて、 <code>imap_delete()</code> または <code>imap_mail_move()</code> で設定された削除フラグをはずします。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param int $msg_number <p>メッセージ番号。</p>
 * @param int $flags
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-undelete.php
 * @see imap_delete(), imap_mail_move()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_undelete($imap_stream, int $msg_number, int $flags = 0): bool {}

/**
 * メールボックスの購読をやめる
 * <p>指定されたメールボックス <code>mailbox</code> の購読を中止します。</p>
 * @param resource $imap_stream <p><code>imap_open()</code> が返す IMAP ストリーム。</p>
 * @param string $mailbox <p>メールボックス名。詳細は <code>imap_open()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-unsubscribe.php
 * @see imap_subscribe()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_unsubscribe($imap_stream, string $mailbox): bool {}

/**
 * 修正版 UTF-7 エンコードされた文字列をデコードする
 * <p>修正版 UTF-7 の <code>text</code> を ISO-8859-1 文字列に デコードします。</p><p>この関数は、ある種の非 ASCII 文字を含むメールボックス名をデコードする際に 必要となります。</p>
 * @param string $text <p>修正版 UTF-7 エンコーディングの文字列。このエンコーディングについては » RFC 2060, section 5.1.3 で定義されています (元の UTF-7 は » RFC1642 で定義されています)。</p>
 * @return string <p><code>text</code> と同じ内容の文字を ISO-8859-1 でエンコード した文字列を返します。<code>text</code> に修正版 UTF-7 として 不正な文字が含まれていた場合、あるいは <code>text</code> に ISO-8859-1 文字セットの範囲外の文字が含まれていた場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imap-utf7-decode.php
 * @see imap_utf7_encode()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_utf7_decode(string $text): string {}

/**
 * ISO-8859-1 文字列を修正版 UTF-7 テキストに変換する
 * <p><code>data</code> を修正版 UTF-7 テキストに変換します。</p><p>この関数は、ある種の非 ASCII 文字を含むメールボックス名をエンコード する際に必要となります。</p>
 * @param string $data <p>ISO-8859-1 文字列。</p>
 * @return string <p><code>data</code> を修正版 UTF-7 でエンコードした文字列を返します。 このエンコーディングについては » RFC 2060, section 5.1.3 で定義されています (元の UTF-7 は » RFC1642 で定義されています)。</p>
 * @link http://php.net/manual/ja/function.imap-utf7-encode.php
 * @see imap_utf7_decode()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_utf7_encode(string $data): string {}

/**
 * MIME エンコードされたテキストを UTF-8 に変換する
 * <p>指定した <code>mime_encoded_text</code> を UTF-8 に変換します。</p>
 * @param string $mime_encoded_text <p>MIME エンコードされた文字列。 MIME エンコーディング方法および UTF-8 の仕様については、それぞれ » RFC2047 および » RFC2044 を参照ください。</p>
 * @return string <p>UTF-8 エンコードされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.imap-utf8.php
 * @see imap_mime_header_decode()
 * @since PHP 4, PHP 5, PHP 7
 */
function imap_utf8(string $mime_encoded_text): string {}

/**
 * Encode a UTF-8 string to modified UTF-7
 * <p>Encode a UTF-8 string to modified UTF-7 (as specified in RFC 2060, section 5.1.3).</p><p><b>注意</b>:</p><p>This function is only available, if libcclient exports utf8_to_mutf7().</p>
 * @param string $in <p>A UTF-8 encoded string.</p>
 * @return string <p>Returns <code>in</code> converted to modified UTF-7, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.imap-utf8-to-mutf7.php
 * @see imap_mutf7_to_utf8()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function imap_utf8_to_mutf7(string $in): string {}

/**
 * <code>imap_close()</code> のコール時に、メールボックスを 閉じる前に中身を削除します。
 */
define('CL_EXPUNGE', null);

/**
 * <code>imap_mail_copy()</code> でコピーを行った後に 現在のメールボックスからメッセージを削除します。
 */
define('CP_MOVE', null);

/**
 * シーケンス番号が UID を含んでいます。
 */
define('CP_UID', null);

/**
 * body 部のエンコーディング: 7 bit SMTP semantic data
 */
define('ENC7BIT', null);

/**
 * body 部のエンコーディング: 8 bit SMTP semantic data
 */
define('ENC8BIT', null);

/**
 * body 部のエンコーディング: base-64 encoded data
 */
define('ENCBASE64', null);

/**
 * body 部のエンコーディング: 8 bit binary data
 */
define('ENCBINARY', null);

/**
 * body 部のエンコーディング: unknown
 */
define('ENCOTHER', null);

/**
 * body 部のエンコーディング: human-readable 8-as-7 bit data
 */
define('ENCQUOTEDPRINTABLE', null);

/**
 * 返される文字列は内部フォーマットであり、CRLF に正規化しません。
 */
define('FT_INTERNAL', null);

define('FT_NOT', null);

/**
 * まだ設定されていない場合に \Seen フラグを設定しません。
 */
define('FT_PEEK', null);

define('FT_PREFETCHTEXT', null);

/**
 * パラメータは UID です。
 */
define('FT_UID', null);

define('IMAP_CLOSETIMEOUT', null);

/**
 * ガベージコレクタでメッセージキャッシュ要素を消去します。
 */
define('IMAP_GC_ELT', null);

/**
 * ガベージコレクタでエンベロープおよびボディを消去します。
 */
define('IMAP_GC_ENV', null);

/**
 * ガベージコレクタでテキストを消去します。
 */
define('IMAP_GC_TEXTS', null);

define('IMAP_OPENTIMEOUT', null);

define('IMAP_READTIMEOUT', null);

define('IMAP_WRITETIMEOUT', null);

define('LATT_HASCHILDREN', null);

define('LATT_HASNOCHILDREN', null);

/**
 * このメールボックスはマークされています。UW-IMAPD でのみ使用されます。
 */
define('LATT_MARKED', null);

/**
 * このメールボックスには「子供」はいません（このメールボックスの配下には メールボックスはありません）。
 */
define('LATT_NOINFERIORS', null);

/**
 * これは単なるコンテナであり、メールボックスではありません。 オープンすることはできません。
 */
define('LATT_NOSELECT', null);

define('LATT_REFERRAL', null);

/**
 * このメールボックスはマークされていません。UW-IMAPD でのみ使用されます。
 */
define('LATT_UNMARKED', null);

define('NIL', null);

/**
 * ニュースで .newsrc を使用せず、更新も行いません （NNTP のみ）。
 */
define('OP_ANONYMOUS', null);

define('OP_DEBUG', null);

define('OP_EXPUNGE', null);

/**
 * IMAP や NNTP において、接続はオープンするがメールボックスを開きません。
 */
define('OP_HALFOPEN', null);

define('OP_PROTOTYPE', null);

/**
 * メールボックスを読み込み専用で開きます。
 */
define('OP_READONLY', null);

define('OP_SECURE', null);

define('OP_SHORTCACHE', null);

define('OP_SILENT', null);

define('SA_ALL', null);

define('SA_MESSAGES', null);

define('SA_RECENT', null);

define('SA_UIDNEXT', null);

define('SA_UIDVALIDITY', null);

define('SA_UNSEEN', null);

define('SE_FREE', null);

/**
 * 検索されたメッセージを事前にフェッチすることはありません。
 */
define('SE_NOPREFETCH', null);

/**
 * シーケンス番号のかわりに UID を返します。
 */
define('SE_UID', null);

define('SO_FREE', null);

define('SO_NOSERVER', null);

/**
 * <code>imap_sort()</code> のソート条件。 到着日でソートします。
 */
define('SORTARRIVAL', null);

/**
 * <code>imap_sort()</code> のソート条件。 メールボックスの最初の Co アドレスでソートします。
 */
define('SORTCC', null);

/**
 * <code>imap_sort()</code> のソート条件。 メッセージの日付でソートします。
 */
define('SORTDATE', null);

/**
 * <code>imap_sort()</code> のソート条件。 メールボックスの最初の From アドレスでソートします。
 */
define('SORTFROM', null);

/**
 * <code>imap_sort()</code> のソート条件。 メッセージのサイズ（バイト単位）でソートします。
 */
define('SORTSIZE', null);

/**
 * <code>imap_sort()</code> のソート条件。 メッセージの表題でソートします。
 */
define('SORTSUBJECT', null);

/**
 * <code>imap_sort()</code> のソート条件。 メールボックスの最初の To アドレスでソートします。
 */
define('SORTTO', null);

define('ST_SET', null);

define('ST_SILENT', null);

/**
 * シーケンスの引数に、番号ではなく UID を含んでいます。
 */
define('ST_UID', null);

/**
 * 最初の body 部の型: application data
 */
define('TYPEAPPLICATION', null);

/**
 * 最初の body 部の型: audio
 */
define('TYPEAUDIO', null);

/**
 * 最初の body 部の型: static image
 */
define('TYPEIMAGE', null);

/**
 * 最初の body 部の型: encapsulated message
 */
define('TYPEMESSAGE', null);

/**
 * 最初の body 部の型: model
 */
define('TYPEMODEL', null);

/**
 * 最初の body 部の型: multiple part
 */
define('TYPEMULTIPART', null);

/**
 * 最初の body 部の型: unknown
 */
define('TYPEOTHER', null);

/**
 * 最初の body 部の型: unformatted text
 */
define('TYPETEXT', null);

/**
 * 最初の body 部の型: video
 */
define('TYPEVIDEO', null);

