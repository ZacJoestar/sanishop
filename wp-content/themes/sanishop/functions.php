<?php
/**
 * Created by PhpStorm.
 * User: zac
 * Date: 04/03/2018
 * Time: 19:02
 */

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );