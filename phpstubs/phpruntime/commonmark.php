<?php



namespace CommonMark {

	/**
	 * Parsing
	 * <p>Shall parse <code>content</code></p>
	 * @param string $content <p>markdown string</p>
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Parser\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Parser\Normalize</code></b> (<code>integer</code>)       <b><code>CommonMark\Parser\ValidateUTF8</code></b> (<code>integer</code>)       <b><code>CommonMark\Parser\Smart</code></b> (<code>integer</code>)
	 * @return CommonMark\Node <p>Shall return root CommonMark\Node</p>
	 * @link https://php.net/manual/ja/function.commonmark-parse.php
	 * @since cmark >= 1.0.0
	 */
	function Parse(string $content, int $options = NULL): \CommonMark\Node {}

	/**
	 * Rendering
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>integer</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/ja/function.commonmark-render.php
	 * @since cmark >= 1.0.0
	 */
	function Render(\CommonMark\Node $node, int $options = NULL, int $width = NULL): string {}

}

namespace CommonMark\Render {

	/**
	 * Rendering
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>integer</code>)
	 * @return string
	 * @link https://php.net/manual/ja/function.commonmark-render-html.php
	 * @since cmark >= 1.0.0
	 */
	function HTML(\CommonMark\Node $node, int $options = NULL): string {}

	/**
	 * Rendering
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>integer</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/ja/function.commonmark-render-latex.php
	 * @since cmark >= 1.0.0
	 */
	function Latex(\CommonMark\Node $node, int $options = NULL, int $width = NULL): string {}

	/**
	 * Rendering
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>integer</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/ja/function.commonmark-render-man.php
	 * @since cmark >= 1.0.0
	 */
	function Man(\CommonMark\Node $node, int $options = NULL, int $width = NULL): string {}

	/**
	 * Rendering
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>integer</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>integer</code>)
	 * @return string
	 * @link https://php.net/manual/ja/function.commonmark-render-xml.php
	 * @since cmark >= 1.0.0
	 */
	function XML(\CommonMark\Node $node, int $options = NULL): string {}

}
