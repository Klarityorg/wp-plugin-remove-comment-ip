<?php
/**
 * Plugin Name: Klarity remove ip
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: Klarity remove ip
 * Author: Klarity
 * Author URI: https://github.com/Klarityorg
 * Version: 1.0.0
 * License: MIT
 *
 * @package Klarity
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpb_remove_commentsip( $comment_author_ip ) {
	return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );
