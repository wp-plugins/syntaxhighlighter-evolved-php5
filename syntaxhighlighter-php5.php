<?php
/*
Plugin Name: SyntaxHighlighter Evolved: PHP5
Plugin URI: http://www.sandrobilbeisi.org/wp/web-development/syntaxhighlighter-evolved-php5/
Description: Adds support for the PHP5 language to the SyntaxHighlighter Evolved plugin.
Author: Sandro Bilbeisi
Version: 1.4.3
Author URI: http://www.sandrobilbeisi.org/
License: GPLv2
based on the new PHP brush by David Chambers : http://davidchambersdesign.com/php-brush-for-syntaxhighlighter/
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_php5_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_php5_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_php5_regscript() {
	wp_register_script( 'syntaxhighlighter-brush-php5', plugins_url('syntaxhighlighter-evolved-php5/scripts/shBrushPhp5.js'), array('syntaxhighlighter-core'), '1.4.3');
	/*wp_register_style(  'syntaxhighlighter-theme-php5', plugins_url('syntaxhighlighter-evolved-php5/styles/shThemePHP5.css'), array('syntaxhighlighter-core'), '1.4.0');*/
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_php5_addlang( $brushes ) {
	$brushes['php5'] = 'php5';
	$brushes['php5'] = 'php5';
	return $brushes;
}
?>