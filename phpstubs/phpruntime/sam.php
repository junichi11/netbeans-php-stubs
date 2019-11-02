<?php



namespace {

	/**
	 * 自動的に処理します。
	 */
	define('SAM_AUTO', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_BOOLEAN', null);

	/**
	 * 接続の属性で、接続するエンタープライズサービスバスの名前を設定します。
	 */
	define('SAM_BUS', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_BYTE', null);

	/**
	 * メッセージ本文の型指定子。
	 */
	define('SAM_BYTES', null);

	/**
	 * リクエストを受信、送信および削除する際に使用する属性で、 特定のメッセージを指定します。
	 */
	define('SAM_CORRELID', null);

	/**
	 * メッセージヘッダのプロパティです。
	 */
	define('SAM_DELIVERYMODE', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_DOUBLE', null);

	/**
	 * 接続の属性で、接続先エンドポイントを指定します。
	 */
	define('SAM_ENDPOINTS', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_FLOAT', null);

	/**
	 * 接続の属性で、メッセージングサーバーのホスト名を設定します。
	 */
	define('SAM_HOST', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_INT', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_LONG', null);

	/**
	 * 手動で (スクリプトで制御して) 処理します。
	 */
	define('SAM_MANUAL', null);

	/**
	 * リクエストを受信および削除する際に使用する属性で、 特定のメッセージを指定します。
	 */
	define('SAM_MESSAGEID', null);

	/**
	 * MQTT (MQ Telemetry Transport) プロトコルを使用するための 接続プロトコル定義です。
	 */
	define('SAM_MQTT', null);

	/**
	 * 任意で指定する接続オプションで、MQTT サーバーに対して このクライアントに関する事前のすべての接続データの削除を指示します。 また、クライアントとの接続が明示的に解除されたり 予期せず解除されたりしたら、購読を削除するよう指示します。
	 */
	define('SAM_MQTT_CLEANSTART', null);

	/**
	 * 接続の属性で、リクエストメッセージをメッセージングサーバー上で 持続させないことを指定します。
	 */
	define('SAM_NON_PERSISTENT', null);

	/**
	 * 接続の属性で、接続時に認証が必要なメッセージングサーバーに対する 接続パスワードを指定します。
	 */
	define('SAM_PASSWORD', null);

	/**
	 * 接続の属性で、リクエストメッセージをメッセージングサーバー上で 持続させることを指定します。これにより、 処理に失敗した際にメッセージを失うことを防ぎます。
	 */
	define('SAM_PERSISTENT', null);

	/**
	 * 接続の属性で、メッセージングサーバーと接続する際のポート番号を設定します。
	 */
	define('SAM_PORT', null);

	/**
	 * リクエストを配送する際の優先度を設定するオプション名です。
	 */
	define('SAM_PRIORITY', null);

	/**
	 * メッセージのプロパティで、 そのスクリプトが応答あるいは返信の配送先として想定しているキューを指定します。
	 */
	define('SAM_REPLY_TO', null);

	/**
	 * 接続プロトコルを指定します。IBM Realtime Transport プロトコルを使用してビジネスインテグレーションメッセージングサーバーと通信します。
	 */
	define('SAM_RTT', null);

	/**
	 * 型指定子。SAM_Message オブジェクトにプロパティを設定する際に使用します。
	 */
	define('SAM_STRING', null);

	/**
	 * 接続の属性で、ターゲットチェイン識別子を指定します。
	 */
	define('SAM_TARGETCHAIN', null);

	/**
	 * メッセージ本文の型指定子。
	 */
	define('SAM_TEXT', null);

	/**
	 * メッセージ送信時のオプション名。 メッセージを保持し続ける時間をミリ秒で指定します。
	 */
	define('SAM_TIMETOLIVE', null);

	/**
	 * 接続の属性で、トランザクションの振る舞いを指定します。SAM_AUTO (デフォルト) あるいは SAM_MANUAL のいずれかです。
	 */
	define('SAM_TRANSACTIONS', null);

	/**
	 * 接続の属性で、接続時に認証が必要なメッセージングサーバーに対する 接続アカウントを指定します。
	 */
	define('SAM_USERID', null);

	/**
	 * 受信時のプロパティで、キューや購読からメッセージを取得する際のタイムアウトを指定します。
	 */
	define('SAM_WAIT', null);

	/**
	 * 接続プロトコルを指定します。IBM WebSphere MQSeries プロトコルを使用してメッセージングサーバーと通信します。
	 */
	define('SAM_WMQ', null);

	/**
	 * 接続プロトコルを指定します。IBM WebSphere MQSeries プロトコルを使用してローカルのメッセージングサーバーと通信します。
	 */
	define('SAM_WMQ_BINDINGS', null);

	/**
	 * 接続プロトコルを指定します。IBM WebSphere MQSeries プロトコルを使用してリモートのメッセージングサーバーと通信します。
	 */
	define('SAM_WMQ_CLIENT', null);

	/**
	 * リクエストを送信する際に使用するオプション名です。 ターゲットクライアントモードを指定します。デフォルトの 'jms' あるいは 'mq' のいずれかを指定します。 デフォルトの 'jms' は、RFH2 ヘッダがメッセージとともに送信されることを意味します。 一方、'mq' の場合は RFH2 は含まれません。
	 */
	define('SAM_WMQ_TARGET_CLIENT', null);

	/**
	 * 接続プロトコルを指定します。IBM WebSphere Platform Messaging プロトコルを使用して WebSphere Application Server メッセージングサーバーと通信します。
	 */
	define('SAM_WPM', null);

}
