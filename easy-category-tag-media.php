<?php
/*
Plugin Name: Easy Category Tag Media
Plugin URI: http://dollaa.com
Description: Plugin help you add categorys and tags to attachments files
Version: 1.0.2
Author: Son Pham
Author URI: http://ituts.org
License: GPLv2
*/

//apply category to attchments file
function easy_add_categorys() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'easy_add_categorys' );

// apply tags to attachments file
function easy_add_tags() {
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'easy_add_tags' );
?>