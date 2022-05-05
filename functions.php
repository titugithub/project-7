<?php



get_template_part('/inc/acf');






function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		

}
add_action('after_setup_theme', 'halim_setup');

// Custom Posts
function halim_custom_posts() {

    // gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallery', 'halim'),
            'singular_name' => __('gallery', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'show_in_rest' => true
    ));



}
add_action('init', 'halim_custom_posts');



