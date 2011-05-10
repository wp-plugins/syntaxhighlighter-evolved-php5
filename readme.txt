=== SyntaxHighlighter Evolved PHP5 ===
Contributors: sandrobilbeisi, apollox2
Donate link: http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/donate/
Tags: syntax, hightligher, applescript, code, CSS, html, php, sourcecode
Requires at least: 2.7
Tested up to: 3.1.2
Stable tag: 1.4.1

Adds support for the PHP5 language to the SyntaxHighlighter Evolved plugin using [php5] tag.

== Description ==

<b>SyntaxHighlighter Evolved PHP5</b> is a plugin for self-hosted WordPress that adds support to Alex Mills' (Viper007) [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) plugin for the PHP5 language using the brush provided by [David Chambers](http://davidchambersdesign.com/php-brush-for-syntaxhighlighter/).  It is based on the [SyntaxHighlighter JavaScript package by Alex Gorbatchev](http://alexgorbatchev.com/SyntaxHighlighter/).
-this plugin follows the programming conventions outlined by Viper007: [Alex Mills](http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/adding-a-new-brush-language/)
-this plugin is based on similar work by apollox2: [Scott Selikoff](http://www.selikoff.net/) [SyntaxHighlighter Evolved AppleScript](http://wordpress.org/extend/plugins/syntaxhighlighter-evolved-applescript/)

== Installation ==

###Prerequisite###

In order to use SyntaxHighlighter Evolved PHP5, you must first install [SyntaxHighlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/).

###Installation###

Extract all files from the ZIP file, making sure to keep the file/folder structure intact, and then upload it to /wp-content/plugins/.

###Plugin Activation###

Go to the admin area of your WordPress install and click on the "Plugins" menu. Click on "Activate" for the "SyntaxHighlighter Evolved: PHP5" plugin.

###Plugin Usage###

Just wrap your code in [sourcecode language="php5"]your code here[/sourcecode]
or
wrap your code in [php5], such as [php5]code here[/php5] .

The shortcodes accept a wide variety of parameters. For details, see the bottom of the SyntaxHighlighter Evolved's settings page.

== Frequently Asked Questions ==

= The code is just being displayed raw. It isn't being converted into a code box or anything. What's wrong?  =

Make sure your theme's `footer.php` file has `<?php wp_footer(); ?>` somewhere inside of it, otherwise the plugin won't be able to do it's thing.

== Screenshots ==

1. This is a sample image of the plugin in action as applied to PHP5 code.

== Upgrade Notice ==

= 1.4.1 =
This is the first peer-reviewed and published version.

== Changelog ==

= 1.4.1 = 
* Peer review and quality assurance; first version to be officially published

= 1.4.0 =
* Updated php5 brush stylesheet and script to version 3.0.83, as provided by [David Chambers](http://davidchambersdesign.com).

= 1.3.0 =
* Added support for accessing plugin via [php5].

= 1.2.0 =
* Bug fixes.

= 1.1.0 =
* Initial release