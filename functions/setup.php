<?php

function camelot_setup() {
	add_editor_style('theme/assets/css/editor.css');
	add_theme_support('post-thumbnails');
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	));
	add_theme_support( 'title-tag' );
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 970);
	register_nav_menu('social', __('Social Links Menu', 'camelot'));
	register_nav_menu('contact', __('Contact Links Menu', 'camelot'));
}
add_action('init', 'camelot_setup');

if (! isset($content_width))
	$content_width = 600;

function camelot_excerpt_readmore() {
	return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Read more', 'camelot') . ' <i class="fa fa-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'camelot_excerpt_readmore');

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

add_theme_support( 'html5', array(
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );