<?php



/**
 * @link http://php.net/manual/ja/class.svm.php
 * @since PECL svm >= 0.1.0
 */
class SVM {

	/**
	 * @var integer <p>The basic C_SVC SVM type. The default, and a good starting point</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const C_SVC = 0;

	/**
	 * @var integer <p>The NU_SVC type uses a different, more flexible, error weighting</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const NU_SVC = 1;

	/**
	 * @var integer <p>One class SVM type. Train just on a single class, using outliers as negative examples</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const ONE_CLASS = 2;

	/**
	 * @var integer <p>A SVM type for regression (predicting a value rather than just a class)</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const EPSILON_SVR = 3;

	/**
	 * @var integer <p>A NU style SVM regression type</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const NU_SVR = 4;

	/**
	 * @var integer <p>A very simple kernel, can work well on large document classification problems</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const KERNEL_LINEAR = 0;

	/**
	 * @var integer <p>A polynomial kernel</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const KERNEL_POLY = 1;

	/**
	 * @var integer <p>The common Gaussian RBD kernel. Handles non-linear problems well and is a good default for classification</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const KERNEL_RBF = 2;

	/**
	 * @var integer <p>A kernel based on the sigmoid function. Using this makes the SVM very similar to a two layer sigmoid based neural network</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const KERNEL_SIGMOID = 3;

	/**
	 * @var integer <p>A precomputed kernel - currently unsupported.</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const KERNEL_PRECOMPUTED = 4;

	/**
	 * @var integer <p>The options key for the SVM type</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_TYPE = 101;

	/**
	 * @var integer <p>The options key for the kernel type</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_KERNEL_TYPE = 102;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_DEGREE = 103;

	/**
	 * @var integer <p>Training parameter, boolean, for whether to use the shrinking heuristics</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_SHRINKING = 104;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_PROPABILITY = 105;

	/**
	 * @var integer <p>Algorithm parameter for Poly, RBF and Sigmoid kernel types.</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_GAMMA = 201;

	/**
	 * @var integer <p>The option key for the nu parameter, only used in the NU_ SVM types</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_NU = 202;

	/**
	 * @var integer <p>The option key for the Epsilon parameter, used in epsilon regression</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_EPS = 203;

	/**
	 * @var integer <p>Training parameter used by Episilon SVR regression</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_P = 204;

	/**
	 * @var integer <p>Algorithm parameter for poly and sigmoid kernels</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_COEF_ZERO = 205;

	/**
	 * @var integer <p>The option for the cost parameter that controls tradeoff between errors and generality - effectively the penalty for misclassifying training examples.</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_C = 206;

	/**
	 * @var integer <p>Memory cache size, in MB</p>
	 * @link http://php.net/manual/ja/class.svm.php
	 */
	const OPT_CACHE_SIZE = 207;

	/**
	 * SVM オブジェクトを新規構築
	 * <p>訓練データを受け取る準備ができている SVM オブジェクトを新規構成します。</p>
	 * @return self <p>libsvm ライブラリが読み込まれなかった場合、SVMException をスローします。</p>
	 * @link http://php.net/manual/ja/svm.construct.php
	 * @since PECL svm >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * Test training params on subsets of the training data
	 * <p>Crossvalidate can be used to test the effectiveness of the current parameter set on a subset of the training data. Given a problem set and a n "folds", it separates the problem set into n subsets, and the repeatedly trains on one subset and tests on another. While the accuracy will generally be lower than a SVM trained on the enter data set, the accuracy score returned should be relatively useful, so it can be used to test different training parameters.</p>
	 * @param array $problem <p>The problem data. This can either be in the form of an array, the URL of an SVMLight formatted file, or a stream to an opened SVMLight formatted datasource.</p>
	 * @param int $number_of_folds <p>The number of sets the data should be divided into and cross tested. A higher number means smaller training sets and less reliability. 5 is a good number to start with.</p>
	 * @return float <p>The correct percentage, expressed as a floating point number from 0-1. In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will returned instead.</p>
	 * @link http://php.net/manual/ja/svm.crossvalidate.php
	 * @since PECL svm >= 0.1.0
	 */
	public function crossvalidate(array $problem, int $number_of_folds): float {}

	/**
	 * 現在の訓練パラメータを返す
	 * <p>訓練パラメータを含む配列を取得します。 パラメータは、所定の SVM 定数がキーになります。</p>
	 * @return array <p>構成の設定配列を返します。</p>
	 * @link http://php.net/manual/ja/svm.getoptions.php
	 * @since PECL svm >= 0.1.0
	 */
	public function getOptions(): array {}

	/**
	 * 訓練パラメータを設定
	 * <p>1 つ以上の訓練パラメータを設定します。</p>
	 * @param array $params <p>訓練パラメータの配列。SVM 定数がキーになります。</p>
	 * @return bool <p>成功した場合に TRUE を返し、エラーの場合に SVMExceptionFALSE をスローします。</p>
	 * @link http://php.net/manual/ja/svm.setoptions.php
	 * @since PECL svm >= 0.1.0
	 */
	public function setOptions(array $params): bool {}

	/**
	 * Create a SVMModel based on training data
	 * <p>Train a support vector machine based on the supplied training data.</p>
	 * @param array $problem <p>The problem can be provided in three different ways. An array, where the data should start with the class label (usually 1 or -1) then followed by a sparse data set of dimension =&gt; data pairs. A URL to a file containing a SVM Light formatted problem, with the each line being a new training example, the start of each line containing the class (1, -1) then a series of tab separated data values shows as key:value. A opened stream pointing to a data source formatted as in the file above.</p>
	 * @param array $weights <p>Weights are an optional set of weighting parameters for the different classes, to help account for unbalanced training sets. For example, if the classes were 1 and -1, and -1 had significantly more example than one, the weight for -1 could be 0.5. Weights should be in the range 0-1.</p>
	 * @return SVMModel <p>Returns an SVMModel that can be used to classify previously unseen data. Throws SVMException on error</p>
	 * @link http://php.net/manual/ja/svm.train.php
	 * @since PECL svm >= 0.1.0
	 */
	public function train(array $problem, array $weights = NULL): \SVMModel {}
}

/**
 * <p>SVMModel は、訓練処理の結果です。 それは、以前は目に見えなかったデータを分類するために使用できます。</p>
 * @link http://php.net/manual/ja/class.svmmodel.php
 * @since PECL svm >= 0.1.0
 */
class SVMModel {

	/**
	 * SVMModel を新規構築
	 * <p>SVMModel を新規構築します。 モデルは、通常は SVM::train 関数から作成されますが、 しかし、保管されたモデルが直接復元されるかもしれません。</p>
	 * @param string $filename <p>このモデルを読み込むべき、保管されたモデルファイルのファイル名</p>
	 * @return self <p>エラー時に SVMException をスローします。</p>
	 * @link http://php.net/manual/ja/svmmodel.construct.php
	 * @since PECL svm >= 0.1.0
	 */
	public function __construct(string $filename = NULL) {}

	/**
	 * モデルが確率情報を持つ場合 TRUE を返す
	 * <p>モデルが確率情報を含む場合 TRUE を返します。</p>
	 * @return bool <p>ブール値を返します</p>
	 * @link http://php.net/manual/ja/svmmodel.checkprobabilitymodel.php
	 * @since PECL svm >= 0.1.5
	 */
	public function checkProbabilityModel(): bool {}

	/**
	 * モデルが訓練されたラベルを取得
	 * <p>モデルが訓練されたラベルの配列を返します。 回帰および 1 つのクラスのモデルでは、空の配列が返されます。</p>
	 * @return array <p>ラベルの配列を返します</p>
	 * @link http://php.net/manual/ja/svmmodel.getlabels.php
	 * @since PECL svm >= 0.1.5
	 */
	public function getLabels(): array {}

	/**
	 * モデルが訓練されたクラスの個数を返す
	 * <p>モデルが訓練されたクラスの個数を返します。 １つのクラスおよび複数の回帰モデルにたいしては、2 を返します。</p>
	 * @return int <p>整数のクラスの個数を返します</p>
	 * @link http://php.net/manual/ja/svmmodel.getnrclass.php
	 * @since PECL svm >= 0.1.5
	 */
	public function getNrClass(): int {}

	/**
	 * モデルが訓練された SVM の種類を取得
	 * <p>使用された SVM モデルの種類を表現する整数値を返します。例) SVM::C_SVC</p>
	 * @return int <p>整数の SVM の種類を返します</p>
	 * @link http://php.net/manual/ja/svmmodel.getsvmtype.php
	 * @since PECL svm >= 0.1.5
	 */
	public function getSvmType(): int {}

	/**
	 * 回帰モデルに対するσ（シグマ）値を取得
	 * <p>回帰モデルに対するσ（シグマ）値を返します。 確率情報がないか、またはモデルが SVR ではない場合、0 が返されます。</p>
	 * @return float <p>σ（シグマ）値を返します</p>
	 * @link http://php.net/manual/ja/svmmodel.getsvrprobability.php
	 * @since PECL svm >= 0.1.5
	 */
	public function getSvrProbability(): float {}

	/**
	 * 保管された SVM モデルを読み込み
	 * <p>識別および回帰の準備ができたモデルファイルを読み込みます。</p>
	 * @param string $filename <p>モデルのファイル名</p>
	 * @return bool <p>エラー時に SVMException をスローします。 成功時に true を返します。</p>
	 * @link http://php.net/manual/ja/svmmodel.load.php
	 * @since PECL svm >= 0.1.00.1.0
	 */
	public function load(string $filename): bool {}

	/**
	 * Predict a value for previously unseen data
	 * <p>This function accepts an array of data and attempts to predict the class or regression value based on the model extracted from previously trained data.</p>
	 * @param array $data <p>The array to be classified. This should be a series of key =&gt; value pairs in increasing key order, but not necessarily continuous.</p>
	 * @return float <p>Float the predicted value. This will be a class label in the case of classification, a real value in the case of regression. Throws SVMException on error</p>
	 * @link http://php.net/manual/ja/svmmodel.predict.php
	 * @since PECL svm >= 0.1.0
	 */
	public function predict(array $data): float {}

	/**
	 * Return class probabilities for previous unseen data
	 * <p>This function accepts an array of data and attempts to predict the class, as with the predict function. Additionally, however, this function returns an array of probabilities, one per class in the model, which represent the estimated chance of the data supplied being a member of that class. Requires that the model to be used has been trained with the probability parameter set to true.</p>
	 * @param array $data <p>The array to be classified. This should be a series of key =&gt; value pairs in increasing key order, but not necessarily continuous.</p>
	 * @return float <p>Float the predicted value. This will be a class label in the case of classification, a real value in the case of regression. Throws SVMException on error</p>
	 * @link http://php.net/manual/ja/svmmodel.predict-probability.php
	 * @since PECL svm >= 0.1.4
	 */
	public function predict_probability(array $data): float {}

	/**
	 * モデルをファイルに保管
	 * <p>後で使用するために、モデルデータをファイルに保管します。</p>
	 * @param string $filename <p>モデルを保管するファイル</p>
	 * @return bool <p>エラー時に SVMException をスローします。 成功時に true を返します。</p>
	 * @link http://php.net/manual/ja/svmmodel.save.php
	 * @since PECL svm >= 0.1.0
	 */
	public function save(string $filename): bool {}
}

