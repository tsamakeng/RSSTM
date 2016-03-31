<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
/*
require('./wp-blog-header.php');
*/

define('SMARTY_DIR', './Smarty-3.1.12/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

require('./rsstmtesting/JQueryAccordion.php');
?>
