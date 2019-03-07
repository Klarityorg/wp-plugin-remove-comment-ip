<?php
// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
}

function wpb_remove_commentsip( $comment_author_ip ) {
	return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );
