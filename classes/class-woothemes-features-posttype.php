<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 * WooThemes Features Posttype Class
 *
 * Re-usable class for registering feature posttype.
 *
 * @package WordPress
 * @subpackage WooThemes_Features
 * @category Plugin
 * @author Matty
 * @since 1.3.0
 */
class Woothemes_Features_Posttype {
	private $token;

	public function __construct( $token ) {
		$this->token = $token;
	}

	/**
	 * Register the post type.
	 *
	 * @access public
	 * @param string $token
	 * @param string 'Features'
	 * @param string 'Features'
	 * @param array $supports
	 * @return void
	 */
	public function register () {
		$labels = array(
			'name' => _x( 'Features', 'post type general name', 'woothemes-features' ),
			'singular_name' => _x( 'Feature', 'post type singular name', 'woothemes-features' ),
			'add_new' => _x( 'Add New', 'feature', 'woothemes-features' ),
			'add_new_item' => sprintf( __( 'Add New %s', 'woothemes-features' ), __( 'Feature', 'woothemes-features' ) ),
			'edit_item' => sprintf( __( 'Edit %s', 'woothemes-features' ), __( 'Feature', 'woothemes-features' ) ),
			'new_item' => sprintf( __( 'New %s', 'woothemes-features' ), __( 'Feature', 'woothemes-features' ) ),
			'all_items' => sprintf( __( 'All %s', 'woothemes-features' ), __( 'Features', 'woothemes-features' ) ),
			'view_item' => sprintf( __( 'View %s', 'woothemes-features' ), __( 'Feature', 'woothemes-features' ) ),
			'search_items' => sprintf( __( 'Search %a', 'woothemes-features' ), __( 'Features', 'woothemes-features' ) ),
			'not_found' =>  sprintf( __( 'No %s Found', 'woothemes-features' ), __( 'Features', 'woothemes-features' ) ),
			'not_found_in_trash' => sprintf( __( 'No %s Found In Trash', 'woothemes-features' ), __( 'Features', 'woothemes-features' ) ),
			'parent_item_colon' => '',
			'menu_name' => __( 'Features', 'woothemes-features' )

		);

		$single_slug = apply_filters( 'woothemes_features_single_slug', _x( 'feature', 'single post url slug', 'woothemes-features' ) );
		$archive_slug = apply_filters( 'woothemes_features_archive_slug', _x( 'features', 'post archive url slug', 'woothemes-features' ) );

		$args = array(
			'labels' => $labels,
			'description'         => feature_get_archive_description(),
			'public' => true,
			'publicly_queryable' => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'show_in_rest'        => true,
			'show_in_menu' => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-flag',
			'menu_position'       => null,
			'delete_with_user'    => false,
			'hierarchical' => true,
			'query_var' => $this->token,
			'capability_type' => 'post',
			'has_archive' => feature_get_rewrite_base(),
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
			// The rewrite handles the URL structure.
			'rewrite' => array(
				'slug'       => 'feature_get_testimonial_rewrite_slug'(),
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),
		);
		register_post_type( $this->token, apply_filters( 'woothemes_features_post_type_args', $args ) );
	} // End register_post_type()


} // End Class
?>
