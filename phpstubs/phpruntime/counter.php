<?php



/**
 * このフラグを指定すると、既存のカウンタと同じ名前で <code>counter_create()</code> を実行したときに既存のカウンタを上書きしません。
 */
define('COUNTER_FLAG_NO_OVERWRITE', null);

/**
 * このフラグを指定したカウンタは、持続的なリソースとなります。
 */
define('COUNTER_FLAG_PERSIST', null);

/**
 * このフラグを指定したカウンタは保存され、別に起動した PHP でも使用できるようになります。
 */
define('COUNTER_FLAG_SAVE', null);

/**
 * この定数を渡すと、カウンタリソースあるいはオブジェクトが持続的なものかどうか (<b><code>COUNTER_FLAG_PERSIST</code></b> フラグが立っているかどうか) を知ることができます。
 */
define('COUNTER_META_IS_PERISTENT', null);

/**
 * この定数を渡すと、カウンタリソースあるいはオブジェクトの名前を取得することができます。
 */
define('COUNTER_META_NAME', null);

/**
 * カウンタはリセットされません。
 */
define('COUNTER_RESET_NEVER', null);

/**
 * PHP を起動するたびにカウンタをリセットします。
 */
define('COUNTER_RESET_PER_LOAD', null);

/**
 * リクエストのたびにカウンタをリセットします。
 */
define('COUNTER_RESET_PER_REQUEST', null);

