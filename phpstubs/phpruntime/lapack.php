<?php



namespace {

	/**
	 * <p>LAPACK is written in Fortran 90 and provides routines for solving systems of simultaneous linear equations, least-squares solutions of linear systems of equations, eigenvalue problems, and singular value problems. This extension wraps the LAPACKE C bindings to allow access to several processes exposed by the library. Most functions work with arrays of arrays, representing rectangular matrices in row major order - so a two by two matrix [1 2; 3 4] would be array(array(1, 2), array(3, 4)).</p>
	 * <p>All of the functions are called statically, for example $eig = Lapack::eigenvalues($a);</p>
	 * @link https://php.net/manual/ja/class.lapack.php
	 * @since PECL lapack >= 0.1.0
	 */
	class Lapack {

		/**
		 * This function returns the eigenvalues for a given square matrix
		 * <p>Calculate the eigenvalues for a square matrix, and optionally calculate the left and right eigenvectors.</p>
		 * @param array $a <p>The matrix to calculate the eigenvalues for.</p>
		 * @param array $left <p>Optional parameter - if an array is passed here, it will be filled with the left eigenvectors</p>
		 * @param array $right <p>Optional parameter - if an array is passed here, it will be filled with the right eigenvectors</p>
		 * @return array <p>Returns an array of arrays representing the eigenvalues for the array.</p>
		 * @link https://php.net/manual/ja/lapack.eigenvalues.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function eigenValues(array $a, array $left = NULL, array $right = NULL): array {}

		/**
		 * Return an identity matrix
		 * <p>Return a size n identity matrix</p>
		 * @param int $n <p>The height and width of the identity matrix.</p>
		 * @return array <p>Will return a an array of n arrays, each containing n entries. The diagonals of the matrix will be 1s, the other positions 0.</p>
		 * @link https://php.net/manual/ja/lapack.identity.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function identity(int $n): array {}

		/**
		 * Calculate the linear least squares solution of a matrix using QR factorisation
		 * <p>Solve the linear least squares problem, find min x in || B - Ax || Returns an array representing x. Expects arrays of arrays, and will return an array of arrays in the dimension B num cols x A num cols. Uses QR or LQ factorisation on matrix A.</p>
		 * @param array $a <p>Matrix A</p>
		 * @param array $b <p>Matrix B</p>
		 * @return array <p>Array of the solution matrix</p>
		 * @link https://php.net/manual/ja/lapack.leastsquaresbyfactorisation.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function leastSquaresByFactorisation(array $a, array $b): array {}

		/**
		 * Solve the linear least squares problem, using SVD
		 * <p>Solve the linear least squares problem, find min x in || B - Ax || Returns an array representing x. Expects arrays of arrays, and will return an array of arrays in the dimension B num cols x A num cols. Uses SVD with a divide and conquer algorithm.</p>
		 * @param array $a <p>Matrix A</p>
		 * @param array $b <p>Matrix B</p>
		 * @return array <p>Returns the solution as an array of arrays.</p>
		 * @link https://php.net/manual/ja/lapack.leastsquaresbysvd.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function leastSquaresBySVD(array $a, array $b): array {}

		/**
		 * Calculate the inverse of a matrix
		 * <p>Find the pseudoinverse of a matrix A.</p>
		 * @param array $a <p>Matrix to invert</p>
		 * @return array <p>Inverted matrix (array of arrays).</p>
		 * @link https://php.net/manual/ja/lapack.pseudoinverse.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function pseudoInverse(array $a): array {}

		/**
		 * Calculated the singular values of a matrix
		 * <p>Calculate the singular values of the matrix A.</p>
		 * @param array $a <p>The matrix to calculate the singular values for</p>
		 * @return array <p>The singular values</p>
		 * @link https://php.net/manual/ja/lapack.singularvalues.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function singularValues(array $a): array {}

		/**
		 * Solve a system of linear equations
		 * <p>This function computes the solution to the system of linear equations with a square matrix A and multiple right-hand sides B. Solves A &#42; X = B for multiple B.</p>
		 * @param array $a <p>Square matrix of linear equations</p>
		 * @param array $b <p>Right hand side to be solved for</p>
		 * @return array <p>Matrix X</p>
		 * @link https://php.net/manual/ja/lapack.solvelinearequation.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function solveLinearEquation(array $a, array $b): array {}
	}

	/**
	 * <p>Exception thrown when an error is caught in the LAPACK functions</p>
	 * @link https://php.net/manual/ja/class.lapackexception.php
	 * @since PECL lapack >= 0.1.0
	 */
	class lapackexception extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

}
