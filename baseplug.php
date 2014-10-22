<?php
/**
* Plugin Name: Base Plugin file
* Plugin URI: http://domain.com/
* Description: This is what the plugin does
* Version: 1.0
* Author: Plugin Author's Name
* Author URI: Author's website
* License: GPL12
*/

/** Listing of all Functions */

function the_init_function() {
    /** Output at init*/
    echo "<!-- output at init -->";
}




/** Registering all hooks*/
add_action( 'init', 'the_init_function' );



/**
* All Actions:
* This is a listing of all currently available wp frontend actions
*
* muplugins_loaded	After must-use plugins are loaded
* registered_taxonomy	For category, post_tag, etc.
* registered_post_type	For post, page, etc.
* plugins_loaded	After active plugins and pluggable functions are loaded
* sanitize_comment_cookies
* setup_theme
* load_textdomain	For the default domain
* after_setup_theme	Generally used to initialize theme settings/options. This is the first action hook available to themes, triggered immediately after the active theme's functions.php file is loaded. add_theme_support() should be called here, since the init action hook is too late to add some features. At this stage, the current user is not yet authenticated.
* auth_cookie_malformed
* auth_cookie_valid
* set_current_user
* init	Typically used by plugins to initialize. The current user is already authenticated by this time.
* └─ widgets_init	Used to register sidebars. Fired at 'init' priority 1 (and so before 'init' actions with priority ≥ 1!)
* register_sidebar	For each sidebar and footer area
* wp_register_sidebar_widget	For each widget
* wp_default_scripts	(ref array)
* wp_default_styles	(ref array)
* admin_bar_init
* add_admin_bar_menus
* wp_loaded	After WordPress is fully loaded
* parse_request	Allows manipulation of HTTP request handling (ref array)
* send_headers	Allows customization of HTTP headers (ref array)
* parse_query	After query variables are set (ref array)
* pre_get_posts	Exposes the query-variables object before a query is executed. (ref array)
* posts_selection
* wp	After WP object is set up (ref array)
* template_redirect
* get_header
* wp_enqueue_scripts
* twentyeleven_enqueue_color_scheme (Specific to Twenty Eleven)
* wp_head
* wp_print_styles
* wp_print_scripts
* get_search_form
* loop_start	(ref array)
* the_post	(ref array) Allows modification of the post object immediately after query
* get_template_part_content	Template part for the content
* loop_end	(ref array)
* get_sidebar
* dynamic_sidebar
* get_search_form
* pre_get_comments	(ref array)
* wp_meta
* get_footer
* get_sidebar	This 'sidebar' is a footer area
* twentyeleven_credits	(Specific to Twenty Eleven)
* wp_footer
* wp_print_footer_scripts
* admin_bar_menu	(ref array)
* wp_before_admin_bar_render
* wp_after_admin_bar_render
* shutdown
*/
