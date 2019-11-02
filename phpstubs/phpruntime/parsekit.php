<?php



namespace {

	/**
	 * PHP ファイルをコンパイルし、結果を op コードの配列で返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
	 * @param string $filename <p>コンパイルするファイル名を含む文字列。 <code>include</code> の引数と同じ形式です。</p>
	 * @param array $errors <p>コンパイル時に発生したエラー (致命的なエラーを含む) の二次元配列。参照で返されます。</p>
	 * @param int $options <p><b><code>PARSEKIT_QUIET</code></b> あるいは <b><code>PARSEKIT_SIMPLE</code></b> のいずれかです。 返される出力の冗長性を設定します。</p>
	 * @return array <p>複雑な形式の配列を返します。詳細は以下に示します。</p>
	 * @link https://php.net/manual/ja/function.parsekit-compile-file.php
	 * @see parsekit_compile_string()
	 * @since PECL parsekit >= 0.2.0
	 */
	function parsekit_compile_file(string $filename, array &$errors = NULL, int $options = PARSEKIT_QUIET): array {}

	/**
	 * PHP コードの文字列をコンパイルし、結果を op コードの配列で返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
	 * @param string $phpcode <p>php コードを含む文字列。<code>eval()</code> の引数と同じ形式です。</p>
	 * @param array $errors <p>コンパイル時に発生したエラー (致命的なエラーを含む) の二次元配列。参照で返されます。</p>
	 * @param int $options <p><b><code>PARSEKIT_QUIET</code></b> あるいは <b><code>PARSEKIT_SIMPLE</code></b> のいずれかです。 返される出力の冗長性を設定します。</p>
	 * @return array <p>複雑な形式の配列を返します。詳細は以下に示します。</p>
	 * @link https://php.net/manual/ja/function.parsekit-compile-string.php
	 * @see parsekit_compile_file()
	 * @since PECL parsekit >= 0.2.0
	 */
	function parsekit_compile_string(string $phpcode, array &$errors = NULL, int $options = PARSEKIT_QUIET): array {}

	/**
	 * 関数の引数に関する情報を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
	 * @param mixed $function <p>関数を表す文字列、あるいはクラス/メソッドを表す配列。</p>
	 * @return array <p>引数の情報を含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.parsekit-func-arginfo.php
	 * @since PECL parsekit >= 0.3.0
	 */
	function parsekit_func_arginfo($function): array {}

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_EXTENDED_VALUE', null);

	/**
	 * Node 型
	 */
	define('PARSEKIT_IS_CONST', null);

	/**
	 * Node 型
	 */
	define('PARSEKIT_IS_TMP_VAR', null);

	/**
	 * Node 型
	 */
	define('PARSEKIT_IS_UNUSED', null);

	/**
	 * Node 型
	 */
	define('PARSEKIT_IS_VAR', null);

	/**
	 * 完全な詳細を返しますが、不必要な NULL エントリは返しません。
	 */
	define('PARSEKIT_QUIET', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_CONST', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_EA_TYPE', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_JMP_ADDR', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_OPARRAY', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_OPLINE', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_RESULT_VAR', null);

	/**
	 * 省略した opcode 記法で返します。
	 */
	define('PARSEKIT_SIMPLE', null);

	/**
	 * Opnode フラグ
	 */
	define('PARSEKIT_USAGE_UNKNOWN', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD_ARRAY_ELEMENT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD_CHAR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD_INTERFACE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD_STRING', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ADD_VAR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_ADD', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_BW_AND', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_BW_OR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_BW_XOR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_CONCAT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_DIM', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_DIV', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_MOD', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_MUL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_REF', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_SL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_SR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ASSIGN_SUB', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BEGIN_SILENCE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BOOL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BOOL_NOT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BOOL_XOR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BRK', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BW_AND', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BW_NOT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BW_OR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_BW_XOR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CASE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CAST', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CATCH', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CLONE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CONCAT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_CONT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DECLARE_CLASS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DECLARE_FUNCTION', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DECLARE_INHERITED_CLASS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DIV', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DO_FCALL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_DO_FCALL_BY_NAME', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ECHO', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_END_SILENCE', null);

	/**
	 * Function 型
	 */
	define('PARSEKIT_ZEND_EVAL_CODE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_EXIT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_EXT_FCALL_BEGIN', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_EXT_FCALL_END', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_EXT_NOP', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_EXT_STMT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FE_FETCH', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FE_RESET', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_CLASS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_CONSTANT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_FUNC_ARG', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_IS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_R', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_RW', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_TMP_VAR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_UNSET', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_DIM_W', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_FUNC_ARG', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_IS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_FUNC_ARG', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_IS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_R', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_RW', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_UNSET', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_OBJ_W', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_R', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_RW', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_UNSET', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FETCH_W', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_FREE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_HANDLE_EXCEPTION', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IMPORT_CLASS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IMPORT_CONST', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IMPORT_FUNCTION', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INCLUDE_OR_EVAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_ARRAY', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_CTOR_CALL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_FCALL_BY_NAME', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_METHOD_CALL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_STATIC_METHOD_CALL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INIT_STRING', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_INSTANCEOF', null);

	/**
	 * Class 型
	 */
	define('PARSEKIT_ZEND_INTERNAL_CLASS', null);

	/**
	 * Function 型
	 */
	define('PARSEKIT_ZEND_INTERNAL_FUNCTION', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_EQUAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_IDENTICAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_NOT_EQUAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_NOT_IDENTICAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_SMALLER', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_IS_SMALLER_OR_EQUAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ISSET_ISEMPTY', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ISSET_ISEMPTY_DIM_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ISSET_ISEMPTY_PROP_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_ISSET_ISEMPTY_VAR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMP', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMP_NO_CTOR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMPNZ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMPNZ_EX', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMPZ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMPZ_EX', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_JMPZNZ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_MOD', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_MUL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_NEW', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_NOP', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_OP_DATA', null);

	/**
	 * Function 型
	 */
	define('PARSEKIT_ZEND_OVERLOADED_FUNCTION', null);

	/**
	 * Function 型
	 */
	define('PARSEKIT_ZEND_OVERLOADED_FUNCTION_TEMPORARY', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_POST_DEC', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_POST_DEC_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_POST_INC', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_POST_INC_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_PRE_DEC', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_PRE_DEC_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_PRE_INC', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_PRE_INC_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_PRINT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_QM_ASSIGN', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_RAISE_ABSTRACT_ERROR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_RECV', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_RECV_INIT', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_RETURN', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SEND_REF', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SEND_VAL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SEND_VAR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SEND_VAR_NO_REF', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SL', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SR', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SUB', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_SWITCH_FREE', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_THROW', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_TICKS', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_UNSET_DIM_OBJ', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_UNSET_VAR', null);

	/**
	 * Class 型
	 */
	define('PARSEKIT_ZEND_USER_CLASS', null);

	/**
	 * Function 型
	 */
	define('PARSEKIT_ZEND_USER_FUNCTION', null);

	/**
	 * Opcode
	 */
	define('PARSEKIT_ZEND_VERIFY_ABSTRACT_CLASS', null);

}
