<?php



/**
 * すべてのレスポンスデータをクライアントにフラッシュする
 * <p>この関数は、すべてのレスポンスデータをクライアントにフラッシュし、 リクエストを終わらせます。 これにより、クライアントへの接続を開いたままにすることなく、 時間のかかる処理を実行することができます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fastcgi-finish-request.php
 * @since PHP 5 >= 5.3.3, PHP 7
 */
function fastcgi_finish_request(): bool {}

