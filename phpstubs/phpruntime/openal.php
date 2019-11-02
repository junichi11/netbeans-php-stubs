<?php



namespace {

	/**
	 * OpenAL バッファを生成する
	 * @return resource <p>成功した場合に Open AL (バッファ) リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-buffer-create.php
	 * @see openal_buffer_loadwav(), openal_buffer_data()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_create() {}

	/**
	 * バッファのデータを読み込む
	 * @param resource $buffer <p>Open AL (バッファ) リソース (事前に <code>openal_buffer_create()</code> で作成したもの)。</p>
	 * @param int $format <p><code>data</code> のフォーマット。 <b><code>AL_FORMAT_MONO8</code></b>、 <b><code>AL_FORMAT_MONO16</code></b>、 <b><code>AL_FORMAT_STEREO8</code></b> そして <b><code>AL_FORMAT_STEREO16</code></b> のいずれか。</p>
	 * @param string $data <p><code>format</code> および <code>freq</code> で指定した、バイナリ音声データブロック。</p>
	 * @param int $freq <p>Hz 単位で指定した <code>data</code> の周波数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-buffer-data.php
	 * @see openal_buffer_loadwav(), openal_stream()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_data($buffer, int $format, string $data, int $freq): bool {}

	/**
	 * OpenAL バッファを削除する
	 * @param resource $buffer <p>Open AL (バッファ) リソース (事前に <code>openal_buffer_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-buffer-destroy.php
	 * @see openal_buffer_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_destroy($buffer): bool {}

	/**
	 * OpenAL バッファのプロパティを取得する
	 * @param resource $buffer <p>Open AL (バッファ) リソース (事前に <code>openal_buffer_create()</code> で作成したもの)。</p>
	 * @param int $property <p>特定のプロパティ。 <b><code>AL_FREQUENCY</code></b>、 <b><code>AL_BITS</code></b>、 <b><code>AL_CHANNELS</code></b> そして <b><code>AL_SIZE</code></b> のいずれか。</p>
	 * @return int <p>要求された <code>property</code> の値を整数で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-buffer-get.php
	 * @see openal_buffer_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_get($buffer, int $property): int {}

	/**
	 * .wav ファイルをバッファに読み込む
	 * @param resource $buffer <p>Open AL (バッファ) リソース (事前に <code>openal_buffer_create()</code> で作成したもの)。</p>
	 * @param string $wavfile <p><i>ローカル</i>ファイルシステム上の .wav ファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-buffer-loadwav.php
	 * @see openal_buffer_data(), openal_stream()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_loadwav($buffer, string $wavfile): bool {}

	/**
	 * 音声処理コンテキストを作成する
	 * @param resource $device <p>Open AL (デバイス) リソース (事前に <code>openal_device_open()</code> で作成したもの)。</p>
	 * @return resource <p>成功した場合に Open AL (コンテキスト) リソース、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-context-create.php
	 * @see openal_device_open(), openal_context_destroy()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_create($device) {}

	/**
	 * 指定したコンテキストを現在のコンテキストにする
	 * @param resource $context <p>Open AL (コンテキスト) リソース (事前に <code>openal_context_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-context-current.php
	 * @see openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_current($context): bool {}

	/**
	 * コンテキストを削除する
	 * @param resource $context <p>Open AL (コンテキスト) リソース (事前に <code>openal_context_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-context-destroy.php
	 * @see openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_destroy($context): bool {}

	/**
	 * 指定したコンテキストを処理する
	 * @param resource $context <p>Open AL (コンテキスト) リソース (事前に <code>openal_context_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-context-process.php
	 * @see openal_context_create(), openal_context_current(), openal_context_suspend()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_process($context): bool {}

	/**
	 * 指定したコンテキストをサスペンドする
	 * @param resource $context <p>Open AL (コンテキスト) リソース (事前に <code>openal_context_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-context-suspend.php
	 * @see openal_context_create(), openal_context_current(), openal_context_process()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_suspend($context): bool {}

	/**
	 * OpenAL デバイスを閉じる
	 * @param resource $device <p>閉じようとしている Open AL (デバイス) リソース (事前に <code>openal_device_open()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-device-close.php
	 * @see openal_device_open()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_device_close($device): bool {}

	/**
	 * OpenAL 音声レイヤを初期化する
	 * @param string $device_desc <p><code>device_desc</code> で指定した音声デバイスをオープンします。 <code>device_desc</code> が指定されなかった場合は、 最初に見つかった音声デバイスが使用されます。</p>
	 * @return resource <p>成功した場合に Open AL (デバイス) リソース、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-device-open.php
	 * @see openal_device_close(), openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_device_open(string $device_desc = NULL) {}

	/**
	 * リスナーのプロパティを取得する
	 * @param int $property <p>取得するプロパティ。 <b><code>AL_GAIN</code></b> (float)、 <b><code>AL_POSITION</code></b> (array(float,float,float))、 <b><code>AL_VELOCITY</code></b> (array(float,float,float)) そして <b><code>AL_ORIENTATION</code></b> (array(float,float,float)) のいずれか。</p>
	 * @return mixed <p>float あるいは float の配列 (どちらか適切なほう) を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-listener-get.php
	 * @see openal_listener_set()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_listener_get(int $property) {}

	/**
	 * リスナーのプロパティを設定する
	 * @param int $property <p>設定するプロパティ。 <b><code>AL_GAIN</code></b> (float)、 <b><code>AL_POSITION</code></b> (array(float,float,float))、 <b><code>AL_VELOCITY</code></b> (array(float,float,float)) そして <b><code>AL_ORIENTATION</code></b> (array(float,float,float)) のいずれか。</p>
	 * @param mixed $setting <p>設定する値。float あるいは float の配列のうち適切なもの。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-listener-set.php
	 * @see openal_listener_get()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_listener_set(int $property, $setting): bool {}

	/**
	 * ソースリソースを生成する
	 * @return resource <p>成功した場合に Open AL (ソース) リソース、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-create.php
	 * @see openal_source_set(), openal_source_play(), openal_source_destroy()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_create() {}

	/**
	 * ソースリソースを削除する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-destroy.php
	 * @see openal_source_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_destroy($source): bool {}

	/**
	 * OpenAL ソースのプロパティを取得する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @param int $property <p>取得するプロパティ。 <b><code>AL_SOURCE_RELATIVE</code></b> (int)、 <b><code>AL_SOURCE_STATE</code></b> (int)、 <b><code>AL_PITCH</code></b> (float)、 <b><code>AL_GAIN</code></b> (float)、 <b><code>AL_MIN_GAIN</code></b> (float)、 <b><code>AL_MAX_GAIN</code></b> (float)、 <b><code>AL_MAX_DISTANCE</code></b> (float)、 <b><code>AL_ROLLOFF_FACTOR</code></b> (float)、 <b><code>AL_CONE_OUTER_GAIN</code></b> (float)、 <b><code>AL_CONE_INNER_ANGLE</code></b> (float)、 <b><code>AL_CONE_OUTER_ANGLE</code></b> (float)、 <b><code>AL_REFERENCE_DISTANCE</code></b> (float)、 <b><code>AL_POSITION</code></b> (array(float,float,float))、 <b><code>AL_VELOCITY</code></b> (array(float,float,float))、 <b><code>AL_DIRECTION</code></b> (array(float,float,float)) のいずれか。</p>
	 * @return mixed <p>取得したプロパティに関連付けられた型を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-get.php
	 * @see openal_source_create(), openal_source_set(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_get($source, int $property) {}

	/**
	 * ソースを一時停止する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-pause.php
	 * @see openal_source_stop(), openal_source_play(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_pause($source): bool {}

	/**
	 * ソースの再生を開始する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-play.php
	 * @see openal_source_stop(), openal_source_pause(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_play($source): bool {}

	/**
	 * ソースを巻き戻す
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-rewind.php
	 * @see openal_source_stop(), openal_source_pause(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_rewind($source): bool {}

	/**
	 * ソースのプロパティを設定する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @param int $property <p>設定するプロパティ。 <b><code>AL_BUFFER</code></b> (OpenAL (ソース))、 <b><code>AL_LOOPING</code></b> (bool)、 <b><code>AL_SOURCE_RELATIVE</code></b> (int)、 <b><code>AL_SOURCE_STATE</code></b> (int)、 <b><code>AL_PITCH</code></b> (float)、 <b><code>AL_GAIN</code></b> (float)、 <b><code>AL_MIN_GAIN</code></b> (float)、 <b><code>AL_MAX_GAIN</code></b> (float)、 <b><code>AL_MAX_DISTANCE</code></b> (float)、 <b><code>AL_ROLLOFF_FACTOR</code></b> (float)、 <b><code>AL_CONE_OUTER_GAIN</code></b> (float)、 <b><code>AL_CONE_INNER_ANGLE</code></b> (float)、 <b><code>AL_CONE_OUTER_ANGLE</code></b> (float)、 <b><code>AL_REFERENCE_DISTANCE</code></b> (float)、 <b><code>AL_POSITION</code></b> (array(float,float,float))、 <b><code>AL_VELOCITY</code></b> (array(float,float,float))、 <b><code>AL_DIRECTION</code></b> (array(float,float,float)) のいずれか。</p>
	 * @param mixed $setting <p>指定した <code>property</code> に代入する値。 代入できる値については、<code>property</code> の説明を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-set.php
	 * @see openal_source_create(), openal_source_get(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_set($source, int $property, $setting): bool {}

	/**
	 * ソースの再生を停止する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-source-stop.php
	 * @see openal_source_play(), openal_source_pause(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_stop($source): bool {}

	/**
	 * ソースのストリーム再生を開始する
	 * @param resource $source <p>Open AL (ソース) リソース (事前に <code>openal_source_create()</code> で作成したもの)。</p>
	 * @param int $format <p><code>data</code> のフォーマット。 <b><code>AL_FORMAT_MONO8</code></b>、 <b><code>AL_FORMAT_MONO16</code></b>、 <b><code>AL_FORMAT_STEREO8</code></b> そして <b><code>AL_FORMAT_STEREO16</code></b> のいずれか。</p>
	 * @param int $rate <p>データをストリームに流す際の周波数を Hz 単位で指定します。</p>
	 * @return resource <p>成功した場合にストリームリソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openal-stream.php
	 * @see openal_source_create(), fwrite()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_stream($source, int $format, int $rate) {}

	/**
	 * バッファ設定
	 */
	define('AL_BITS', null);

	/**
	 * ソース/リスナー 設定 (Integer)
	 */
	define('AL_BUFFER', null);

	/**
	 * バッファ設定
	 */
	define('AL_CHANNELS', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_CONE_INNER_ANGLE', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_CONE_OUTER_ANGLE', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_CONE_OUTER_GAIN', null);

	/**
	 * ソース/リスナー 設定 (Float Vector)
	 */
	define('AL_DIRECTION', null);

	/**
	 * OpenAL が理解する boolean 値
	 */
	define('AL_FALSE', null);

	/**
	 * PCM フォーマット
	 */
	define('AL_FORMAT_MONO16', null);

	/**
	 * PCM フォーマット
	 */
	define('AL_FORMAT_MONO8', null);

	/**
	 * PCM フォーマット
	 */
	define('AL_FORMAT_STEREO16', null);

	/**
	 * PCM フォーマット
	 */
	define('AL_FORMAT_STEREO8', null);

	/**
	 * バッファ設定
	 */
	define('AL_FREQUENCY', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_GAIN', null);

	/**
	 * ソースの状態
	 */
	define('AL_INITIAL', null);

	/**
	 * ソースの状態
	 */
	define('AL_LOOPING', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_MAX_DISTANCE', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_MAX_GAIN', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_MIN_GAIN', null);

	/**
	 * ソース/リスナー 設定 (Float Vector)
	 */
	define('AL_ORIENTATION', null);

	/**
	 * ソースの状態
	 */
	define('AL_PAUSED', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_PITCH', null);

	/**
	 * ソースの状態
	 */
	define('AL_PLAYING', null);

	/**
	 * ソース/リスナー 設定 (Float Vector)
	 */
	define('AL_POSITION', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_REFERENCE_DISTANCE', null);

	/**
	 * ソース/リスナー 設定 (Float)
	 */
	define('AL_ROLLOFF_FACTOR', null);

	/**
	 * バッファ設定
	 */
	define('AL_SIZE', null);

	/**
	 * ソース/リスナー 設定 (Integer)
	 */
	define('AL_SOURCE_RELATIVE', null);

	/**
	 * ソース/リスナー 設定 (Integer)
	 */
	define('AL_SOURCE_STATE', null);

	/**
	 * ソースの状態
	 */
	define('AL_STOPPED', null);

	/**
	 * OpenAL が理解する boolean 値
	 */
	define('AL_TRUE', null);

	/**
	 * ソース/リスナー 設定 (Float Vector)
	 */
	define('AL_VELOCITY', null);

	/**
	 * コンテキスト属性
	 */
	define('ALC_FREQUENCY', null);

	/**
	 * コンテキスト属性
	 */
	define('ALC_REFRESH', null);

	/**
	 * コンテキスト属性
	 */
	define('ALC_SYNC', null);

}
