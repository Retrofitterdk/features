<?php
/**
 * Admin-related functions and filters.
 *
 * @package    Toot
 * @subpackage Admin
 * @author     Justin Tadlock <justintadlock@gmail.com>
 * @copyright  Copyright (c) 2017, Justin Tadlock
 * @link       http://themehybrid.com/plugins/toot
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/**
 * Help sidebar for all of the help tabs.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function features_get_help_sidebar_text() {

	// Get docs and help links.
	$docs_link = sprintf( '<li><a href="https://themehybrid.com/docs">%s</a></li>', esc_html__( 'Documentation', 'toot' ) );
	$help_link = sprintf( '<li><a href="https://themehybrid.com/board/topics">%s</a></li>', esc_html__( 'Support Forums', 'toot' ) );

	// Return the text.
	return sprintf(
		'<p><strong>%s</strong></p><ul>%s%s</ul>',
		esc_html__( 'For more information:', 'toot' ),
		$docs_link,
		$help_link
	);
}
