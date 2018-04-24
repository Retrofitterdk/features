<?php
/**
 * Plugin rewrite functions.
 *
 * @package    Toot
 * @subpackage Includes
 * @author     Justin Tadlock <justintadlock@gmail.com>
 * @copyright  Copyright (c) 2017, Justin Tadlock
 * @link       http://themehybrid.com/plugins/toot
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Returns the testimonial rewrite slug used for single testimonials.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function feature_get_testimonial_rewrite_slug() {
	$rewrite_base     = feature_get_rewrite_base();
	$feature_base = feature_get_testimonial_rewrite_base();

	$slug = $feature_base ? trailingslashit( $rewrite_base ) . $feature_base : $rewrite_base;

	return apply_filters( 'feature_get_testimonial_rewrite_slug()', $slug );
}

/**
 * Returns the category rewrite slug used for category archives.

 * @since  1.0.0
 * @access public
 * @return string
 */
function feature_get_category_rewrite_slug() {
	$rewrite_base  = feature_get_rewrite_base();
	$category_base = feature_get_category_rewrite_base();

	$slug = $category_base ? trailingslashit( $rewrite_base ) . $category_base : $rewrite_base;

	return apply_filters( 'feature_get_category_rewrite_slug', $slug );
}
