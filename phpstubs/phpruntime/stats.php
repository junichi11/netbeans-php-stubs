<?php



namespace {

	/**
	 * 値の配列の絶対偏差を返す
	 * <p><code>a</code> に含まれる値の絶対偏差を返します。</p>
	 * @param array $a <p>入力配列</p>
	 * @return float <p><code>a</code> に含まれる値の絶対偏差。 <code>a</code> が空の場合、または、配列ではない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-absolute-deviation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_absolute_deviation(array $a): float {}

	/**
	 * ベータ分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ベータ分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, alpha, beta は、この順に、ベータ分布の累積分布関数、確率変数、形状母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, alpha, beta のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_beta(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * 二項分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>二項分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, n, p は、この順に、二項分布の累積分布関数、成功回数、試行回数、各試行での成功確率を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, n, p のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_binomial(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * コーシー分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>コーシー分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, x0, gamma は、この順に、コーシー分布の累積分布関数、確率変数、位置母数、尺度母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, x0, gamma のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-cauchy.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_cauchy(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * カイ二乗分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>カイ二乗分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, k は、この順に、カイ二乗分布の累積分布関数、確率変数、自由度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, k のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_chisquare(float $par1, float $par2, int $which): float {}

	/**
	 * 指数分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>指数分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, lambda は、この順に、指数分布の累積分布関数、確率変数、rate 母数を表します。 The following table lists the return value and parameters by <code>which</code>. CDF, x, and lambda denotes cumurative distribution function, the value of the random variable, and the rate parameter of the exponential distribution, respectively.</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, lambda のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_exponential(float $par1, float $par2, int $which): float {}

	/**
	 * F 分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>F 分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, d1, d2 は、この順に、F 分布の累積分布関数、確率変数、自由度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, d1, d2 のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_f(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ガンマ分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ガンマ分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, k, theta は、この順に、ガンマ分布の累積分布関数、確率変数、形状母数、尺度母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, k, theta のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_gamma(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ラプラス分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ラプラス分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, mu, b は、この順に、ラプラス分布の累積分布関数、確率変数、位置母数、尺度母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, mu, b のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-laplace.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_laplace(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ロジスティック分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ロジスティック分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, mu, s は、この順に、ロジスティック分布の累積分布関数、確率変数、位置母数、尺度母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, mu, s のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-logistic.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_logistic(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * 負の二項分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>負の二項分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, k, lambda は、この順に、負の二項分布の累積分布関数、成功回数、試行回数、各試行での成功確率を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, r, p のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-negative-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_negative_binomial(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * 非心カイ二乗分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>非心カイ二乗分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, k, lambda は、この順に、非心カイ二乗分布の累積分布関数、確率変数、自由度、非心度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, k, lambda のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-noncentral-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_chisquare(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * 非心 F 分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>非心 F 分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>, <code>par4</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, nu1, nu2, lambda は、この順に、非心 F 分布の累積分布関数、確率変数、自由度、非心度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param float $par4 <p>第四引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, nu1, nu2, lambda のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-noncentral-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_f(float $par1, float $par2, float $par3, float $par4, int $which): float {}

	/**
	 * 非心 t 分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>非心 t 分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, nu, mu は、この順に、非心 t 分布の累積分布関数、確率変数、自由度、非心度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, nu, mu のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-noncentral-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_t(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * 正規分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>正規分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, mu, sigma は、この順に、正規分布の累積分布関数、確率変数、平均、標準偏差を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, mu, sigma のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_normal(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ポアソン分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ポアソン分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, lambda は、この順に、ポアソン分布の累積分布関数、確率変数、母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, lambda のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-poisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_poisson(float $par1, float $par2, int $which): float {}

	/**
	 * t 分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>t 分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, nu は、この順に、t 分布の累積分布関数、確率変数、自由度を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, nu のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_t(float $par1, float $par2, int $which): float {}

	/**
	 * 一様分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>一様分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, a, b は、この順に、一様分布の累積分布関数、確率変数、下限、上限を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, a, b のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-uniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_uniform(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ワイブル分布のパラメータのいずれかを、その他のパラメータの値から計算する
	 * <p>ワイブル分布の累積分布関数、その逆関数、またはパラメータのいずれかを戻します。 戻り値の種類とパラメータ (<code>par1</code>, <code>par2</code>, <code>par3</code>) は <code>which</code> によって決められます。</p><p>次の表は、<code>which</code> ごとの戻り値とパラメータを示したものです。 CDF, x, k, lambda は、この順に、ワイブル分布の累積分布関数、確率変数、形状母数、尺度母数を表します。</p>
	 * @param float $par1 <p>第一引数</p>
	 * @param float $par2 <p>第二引数</p>
	 * @param float $par3 <p>第三引数</p>
	 * @param int $which <p>計算される値を決めるフラグ</p>
	 * @return float <p><code>which</code> によって決まる、CDF, x, k, lambda のいずれかの値を戻します。</p>
	 * @link https://php.net/manual/ja/function.stats-cdf-weibull.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_weibull(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * ふたつのデータセットの共分散を計算する
	 * <p><code>a</code> と <code>b</code> の共分散を返します。</p>
	 * @param array $a <p>ひとつめの配列</p>
	 * @param array $b <p>ふたつめの配列</p>
	 * @return float <p><code>a</code> と <code>b</code> の共分散。 失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-covariance.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_covariance(array $a, array $b): float {}

	/**
	 * ベータ分布の確率密度関数
	 * <p>形状母数 <code>a</code>, <code>b</code> のベータ分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $a <p>形状母数</p>
	 * @param float $b <p>形状母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_beta(float $x, float $a, float $b): float {}

	/**
	 * コーシー分布の確率密度関数
	 * <p>位置母数 <code>ave</code>, 尺度母数 <code>stdev</code> のコーシー分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $ave <p>位置母数</p>
	 * @param float $stdev <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-cauchy.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_cauchy(float $x, float $ave, float $stdev): float {}

	/**
	 * カイ二乗分布の確率密度関数
	 * <p>自由度 <code>dfr</code> のカイ二乗分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $dfr <p>自由度</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_chisquare(float $x, float $dfr): float {}

	/**
	 * 指数分布の確率密度関数
	 * <p>尺度母数 <code>scale</code> の指数分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $scale <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_exponential(float $x, float $scale): float {}

	/**
	 * F 分布の確率密度関数
	 * <p>自由度 <code>dfr1</code>, <code>dfr2</code> の F 分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $dfr1 <p>自由度</p>
	 * @param float $dfr2 <p>自由度</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_f(float $x, float $dfr1, float $dfr2): float {}

	/**
	 * ガンマ分布の確率密度関数
	 * <p>形状母数 <code>shape</code>, 尺度母数 <code>scale</code> のガンマ分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数</p>
	 * @param float $shape <p>形状母数</p>
	 * @param float $scale <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_gamma(float $x, float $shape, float $scale): float {}

	/**
	 * ラプラス分布の確率密度関数
	 * <p>位置母数 <code>ave</code>, 尺度母数 <code>stdev</code> のラプラス分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $ave <p>位置母数</p>
	 * @param float $stdev <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-laplace.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_laplace(float $x, float $ave, float $stdev): float {}

	/**
	 * ロジスティック分布の確率密度関数
	 * <p>位置母数 <code>ave</code>, 尺度母数 <code>stdev</code> のロジスティック分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $ave <p>位置母数</p>
	 * @param float $stdev <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-logistic.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_logistic(float $x, float $ave, float $stdev): float {}

	/**
	 * 正規分布の確率密度関数
	 * <p>平均 <code>ave</code>, 標準偏差 <code>stdev</code> の正規分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $ave <p>平均</p>
	 * @param float $stdev <p>標準偏差</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_normal(float $x, float $ave, float $stdev): float {}

	/**
	 * 二項分布の確率質量関数
	 * <p>試行回数 <code>n</code>, 成功確率 <code>pi</code> の二項分布にしたがう確率変数の <code>x</code> における確率質量を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $n <p>試行回数</p>
	 * @param float $pi <p>成功確率</p>
	 * @return float <p><code>x</code> における確率質量。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-pmf-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_binomial(float $x, float $n, float $pi): float {}

	/**
	 * 超幾何分布の確率質量関数
	 * <p>失敗回数 <code>n2</code>, 成功サンプル数 <code>N1</code>, 失敗サンプル数 <code>N2</code> の超幾何分布にしたがう確率変数の <code>n1</code> における確率質量を返します。</p>
	 * @param float $n1 <p>成功回数</p>
	 * @param float $n2 <p>失敗回数</p>
	 * @param float $N1 <p>成功サンプル数</p>
	 * @param float $N2 <p>失敗サンプル数</p>
	 * @return float <p><code>n1</code> における確率質量。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-pmf-hypergeometric.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_hypergeometric(float $n1, float $n2, float $N1, float $N2): float {}

	/**
	 * 負の二項分布の確率密度関数
	 * <p>成功回数 <code>n</code>, 成功確率 <code>pi</code> の負の二項分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $n <p>成功回数</p>
	 * @param float $pi <p>成功確率</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-pmf-negative-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_negative_binomial(float $x, float $n, float $pi): float {}

	/**
	 * ポアソン分布の確率質量関数
	 * <p>母数 <code>lb</code> のポアソン分布にしたがう確率変数の <code>x</code> における確率質量を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $lb <p>母数</p>
	 * @return float <p><code>x</code> における確率質量。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-pmf-poisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_poisson(float $x, float $lb): float {}

	/**
	 * t 分布の確率密度関数
	 * <p>自由度 <code>dfr</code> の t 分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $dfr <p>自由度</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_t(float $x, float $dfr): float {}

	/**
	 * 一様分布の確率密度関数
	 * <p>下限 <code>a</code>, 上限 <code>b</code> の一様分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $a <p>下限</p>
	 * @param float $b <p>上限</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-uniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_uniform(float $x, float $a, float $b): float {}

	/**
	 * ワイブル分布の確率密度関数
	 * <p>形状母数 <code>a</code>, 尺度母数 <code>b</code> のワイブル分布にしたがう確率変数の <code>x</code> における確率密度を返します。</p>
	 * @param float $x <p>確率変数の値</p>
	 * @param float $a <p>形状母数</p>
	 * @param float $b <p>尺度母数</p>
	 * @return float <p><code>x</code> における確率密度。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-dens-weibull.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_weibull(float $x, float $a, float $b): float {}

	/**
	 * 値の配列の調和平均を返す
	 * <p><code>a</code> に含まれる値の調和平均を返します。</p>
	 * @param array $a <p>入力配列</p>
	 * @return number <p><code>a</code> に含まれる値の調和平均。 <code>a</code> が空の場合、または、配列ではない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-harmonic-mean.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_harmonic_mean(array $a) {}

	/**
	 * 配列内のデータの尖度を計算する
	 * <p><code>a</code> に含まれる値の尖度を返します。</p>
	 * @param array $a <p>入力配列</p>
	 * @return float <p><code>a</code> に含まれる値の尖度。 <code>a</code> が空の場合、または、配列ではない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-kurtosis.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_kurtosis(array $a): float {}

	/**
	 * ベータ分布から無作為な値を生成する
	 * <p>パラメータ A および B で表されるベータ分布から、無作為な値を返します。 ベータ分布の確率密度は、0 &lt; x &lt; 1 に対して x^(a-1) &#42; (1-x)^(b-1) / B(a,b) となります。R. C. H. Cheng の手法を用います。</p>
	 * @param float $a <p>形状母数</p>
	 * @param float $b <p>形状母数</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_beta(float $a, float $b): float {}

	/**
	 * カイ二乗分布から無作為な値を生成する
	 * <p>自由度 <code>df</code> のカイ二乗分布からの無作為な値を返します。</p>
	 * @param float $df <p>自由度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_chisquare(float $df): float {}

	/**
	 * 指数分布から無作為な値を生成する
	 * <p>尺度母数 <code>av</code> の指数分布からの無作為な値を返します。</p>
	 * @param float $av <p>尺度母数</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_exponential(float $av): float {}

	/**
	 * F 分布から無作為な値を生成する
	 * <p>分子の自由度が "dfn"、分母の自由度が "dfd" の F (分散比) 分布から、無作為な値を返します。カイ二乗の変量の比を直接生成します。</p>
	 * @param float $dfn <p>分子の自由度</p>
	 * @param float $dfd <p>分母の自由度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_f(float $dfn, float $dfd): float {}

	/**
	 * low (それ自身は含まない) と high (それ自身は含まない) の間の一様な浮動小数点数値を生成する
	 * <p><code>low</code> と <code>high</code> の間の一様分布からの無作為な値を返します。</p>
	 * @param float $low <p>下限</p>
	 * @param float $high <p>上限</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-funiform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_funiform(float $low, float $high): float {}

	/**
	 * ガンマ分布から無作為な値を生成する
	 * <p>密度 (A&#42;&#42;R)/Gamma(R) &#42; X&#42;&#42;(R-1) &#42; Exp(-A&#42;X) のガンマ分布から、 無作為な値を生成します。</p>
	 * @param float $a <p>ガンマ分布の位置母数 (<code>a</code> &gt; 0)。</p>
	 * @param float $r <p>ガンマ分布の形状母数 (<code>r</code> &gt; 0)。</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_gamma(float $a, float $r): float {}

	/**
	 * 二項分布から無作為な値を生成する
	 * <p>試行回数を <code>n</code>, 各試行で事象の発生する確率を <code>pp</code> とする二項分布からの無作為な値を返します。</p>
	 * @param int $n <p>試行回数</p>
	 * @param float $pp <p>各試行で事象の発生する確率</p>
	 * @return int <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-ibinomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ibinomial(int $n, float $pp): int {}

	/**
	 * 負の二項分布から無作為な値を生成する
	 * <p>成功回数 <code>n</code>, 成功確率 <code>p</code> の負の二項分布からの無作為な値を返します。</p>
	 * @param int $n <p>成功回数</p>
	 * @param float $p <p>成功確率</p>
	 * @return int <p>無作為な値。失敗回数を表します。</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-ibinomial-negative.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ibinomial_negative(int $n, float $p): int {}

	/**
	 * 1 から 2147483562 までの間の無作為な整数値を生成する
	 * <p>1 から 2147483562 までの間の無作為な整数値を返します。</p>
	 * @return int <p>無作為な整数値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-int.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_int(): int {}

	/**
	 * ポアソン分布から無作為な値を生成する
	 * <p>母数 <code>mu</code> のポアソン分布からの無作為な値を返します。</p>
	 * @param float $mu <p>母数</p>
	 * @return int <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-ipoisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ipoisson(float $mu): int {}

	/**
	 * LOW (それ自身を含む) と HIGH (それ自身を含む) の間の一様分布から整数値を生成する
	 * <p><code>low</code> (それ自身を含む) と <code>high</code> (それ自身を含む) の間の離散一様分布からの無作為な整数値を返します。</p>
	 * @param int $low <p>下限</p>
	 * @param int $high <p>上限</p>
	 * @return int <p>無作為な整数値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-iuniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_iuniform(int $low, int $high): int {}

	/**
	 * 非心カイ二乗分布から無作為な値を生成する
	 * <p>自由度 <code>df</code>, 非心度 <code>xnonc</code> の非心カイ二乗分布からの無作為な値を返します。</p>
	 * @param float $df <p>自由度</p>
	 * @param float $xnonc <p>非心度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-noncentral-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_chisquare(float $df, float $xnonc): float {}

	/**
	 * 非心 F 分布から無作為な値を生成する
	 * <p>分子の自由度が <code>dfn</code>, 分母の自由度が <code>dfd</code>, 非心度 <code>xnonc</code> の非心 F 分布からの無作為な値を返します。</p>
	 * @param float $dfn <p>分子の自由度</p>
	 * @param float $dfd <p>分母の自由度</p>
	 * @param float $xnonc <p>非心度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-noncentral-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_f(float $dfn, float $dfd, float $xnonc): float {}

	/**
	 * 非心 t 分布から無作為な値を生成する
	 * <p>自由度 <code>df</code>, 非心度 <code>xnonc</code> の非心 t 分布からの無作為な値を返します。</p>
	 * @param float $df <p>自由度</p>
	 * @param float $xnonc <p>非心度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-noncentral-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_t(float $df, float $xnonc): float {}

	/**
	 * 正規分布から無作為な値を生成する
	 * <p>平均 <code>av</code>, 標準偏差 <code>sd</code> の正規分布からの無作為な値を返します。</p>
	 * @param float $av <p>平均</p>
	 * @param float $sd <p>標準偏差</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_normal(float $av, float $sd): float {}

	/**
	 * t 分布から無作為な値を生成する
	 * <p>自由度 <code>df</code> の t 分布からの無作為な値を返します。</p>
	 * @param float $df <p>自由度</p>
	 * @return float <p>無作為な値</p>
	 * @link https://php.net/manual/ja/function.stats-rand-gen-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_t(float $df): float {}

	/**
	 * 乱数生成器のシードを取得する
	 * <p>乱数生成器の現在のシードを返します。</p>
	 * @return array <p>ふたつの整数値を含む配列</p>
	 * @link https://php.net/manual/ja/function.stats-rand-get-seeds.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_get_seeds(): array {}

	/**
	 * 乱数ジェネレータ用のふたつのシードを生成する
	 * <p><code>phrase</code> から乱数ジェネレータ用のふたつのシードを生成します。</p>
	 * @param string $phrase <p>入力フレーズ</p>
	 * @return array <p>ふたつの整数値を含む配列</p>
	 * @link https://php.net/manual/ja/function.stats-rand-phrase-to-seeds.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_phrase_to_seeds(string $phrase): array {}

	/**
	 * 0 から 1 までの無作為な浮動小数点数を生成する
	 * <p>0 から 1 (区間の両端は含まない) までの一様分布からの無作為な浮動小数点数を返します。</p>
	 * @return float <p>無作為な浮動小数点数</p>
	 * @link https://php.net/manual/ja/function.stats-rand-ranf.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_ranf(): float {}

	/**
	 * 乱数生成器のシードを設定する
	 * <p><code>iseed1</code> と <code>iseed2</code> を統計関数で使われる乱数生成器のシードとして設定します。</p>
	 * @param int $iseed1 <p>乱数のシードとして使われる値</p>
	 * @param int $iseed2 <p>乱数のシードとして使われる値</p>
	 * @return void <p>戻り値はありません。</p>
	 * @link https://php.net/manual/ja/function.stats-rand-setall.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_setall(int $iseed1, int $iseed2): void {}

	/**
	 * 配列内のデータの歪度を計算する
	 * <p><code>a</code> に含まれる値の歪度を返します。</p>
	 * @param array $a <p>入力配列</p>
	 * @return float <p><code>a</code> に含まれる値の歪度。 <code>a</code> が空の場合、または、配列ではない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-skew.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_skew(array $a): float {}

	/**
	 * 標準偏差を返す
	 * <p><code>a</code> に含まれる値の標準偏差を返します。</p>
	 * @param array $a <p>標準偏差を取得したいデータの配列。配列のすべての値が <code>float</code> にキャストされることに注意しましょう。</p>
	 * @param bool $sample <p><code>a</code> が、母集団の抽出標本であることを表します。デフォルトは <b><code>FALSE</code></b> です。</p>
	 * @return float <p>成功した場合に標準偏差、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-standard-deviation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_standard_deviation(array $a, bool $sample = FALSE): float {}

	/**
	 * 二項係数を返す
	 * <p><code>n</code> 個から <code>x</code> 個を選ぶ二項係数を返します。</p>
	 * @param int $x <p>集合から選ぶ個数</p>
	 * @param int $n <p>集合の要素数</p>
	 * @return float <p>二項係数を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-binomial-coef.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_binomial_coef(int $x, int $n): float {}

	/**
	 * ふたつのデータセットに対するピアソンの相関係数を返す
	 * <p><code>arr1</code> と <code>arr2</code> の間のピアソンの相関係数を返します。</p>
	 * @param array $arr1 <p>ひとつめの配列</p>
	 * @param array $arr2 <p>ふたつめの配列</p>
	 * @return float <p><code>arr1</code> と <code>arr2</code> の間のピアソンの相関係数。 失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-correlation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_correlation(array $arr1, array $arr2): float {}

	/**
	 * 整数値の階乗を返す
	 * <p>整数値 <code>n</code> の階乗を返します。</p>
	 * @param int $n <p>整数値</p>
	 * @return float <p><code>n</code> の階乗</p>
	 * @link https://php.net/manual/ja/function.stats-stat-factorial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_factorial(int $n): float {}

	/**
	 * 独立二群の t 検定値を返す
	 * <p>独立二群 <code>arr1</code> と <code>arr2</code> の t 検定値を返します。</p>
	 * @param array $arr1 <p>ひとつめの値の集合</p>
	 * @param array $arr2 <p>ふたつめの値の集合</p>
	 * @return float <p>t 検定値。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-independent-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_independent_t(array $arr1, array $arr2): float {}

	/**
	 * ふたつのベクトルの内積を返す
	 * <p><code>arr1</code> と <code>arr2</code> の内積を返します。</p>
	 * @param array $arr1 <p>ひとつめの配列</p>
	 * @param array $arr2 <p>ふたつめの配列</p>
	 * @return float <p><code>arr1</code> と <code>arr2</code> の内積。 失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-innerproduct.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_innerproduct(array $arr1, array $arr2): float {}

	/**
	 * 対応のある二群の t 検定値を返す
	 * <p>対応のある二群 <code>arr1</code> と <code>arr2</code> に対する t 検定値を返します。</p>
	 * @param array $arr1 <p>ひとつめのサンプル</p>
	 * @param array $arr2 <p>ふたつめのサンプル</p>
	 * @return float <p>t 検定値。失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-paired-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_paired_t(array $arr1, array $arr2): float {}

	/**
	 * パーセンタイル値を返す
	 * <p>配列 <code>arr</code> に含まれる値の <code>perc</code> パーセンタイル値を返します。</p>
	 * @param array $arr <p>入力配列</p>
	 * @param float $perc <p>パーセンタイル</p>
	 * @return float <p>入力配列のパーセンタイル値を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-percentile.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_percentile(array $arr, float $perc): float {}

	/**
	 * ベクトルのべき乗和を返す
	 * <p>配列 <code>arr</code> として表されたベクトルの <code>power</code> 乗和を返します。</p>
	 * @param array $arr <p>入力配列</p>
	 * @param float $power <p>べき数</p>
	 * @return float <p>入力配列のべき乗和を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-stat-powersum.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_powersum(array $arr, float $power): float {}

	/**
	 * 分散を返す
	 * <p><code>a</code> に含まれる値の分散を返します。</p>
	 * @param array $a <p>標準偏差を取得したいデータの配列。配列のすべての値が <code>float</code> にキャストされることに注意しましょう。</p>
	 * @param bool $sample <p><code>a</code> が、母集団の抽出標本であることを表します。デフォルトは <b><code>FALSE</code></b> です。</p>
	 * @return float <p>成功した場合に分散、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.stats-variance.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_variance(array $a, bool $sample = FALSE): float {}

}
