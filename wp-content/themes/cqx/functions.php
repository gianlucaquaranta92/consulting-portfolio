<?php
/**
 * CQXunctions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CQX
 * @since CQX 1.0
 */



function cqx_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'cqx'),
    ]);
}
add_action('after_setup_theme', 'cqx_register_menus');



// Enqueue styles and scripts
function cqx_scripts() {
    wp_enqueue_style('topslot-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css', array(), null);
	
	wp_enqueue_script(
		'general',
		get_template_directory_uri() . '/assets/js/general.js', 
		array('jquery'), 
		null, 
		true 
		);
    
}
add_action('wp_enqueue_scripts', 'cqx_scripts');


// Allow SVG uploads in WordPress
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Fix for the SVG preview in the media library
function svg_media_type($response, $attachment_id) {
    if (strpos(get_post_mime_type($attachment_id), 'image/svg+xml') !== false) {
        $response['data'] = wp_get_attachment_url($attachment_id);
        $response['type'] = 'image/svg+xml';
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'svg_media_type', 10, 2);


// Gutenberg Blocks registration
add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks() {

    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'hero_block',
            'title'             => __('Hero Block'),
            'description'       => __('The main hero block built for the home-page'),
            'render_template'   => 'template-parts/blocks/hero-block.php', 
            'category'          => 'formatting',
            'icon'              => 'heart',
            'keywords'          => array('hero', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('hero-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
 
        acf_register_block_type(array(
            'name'              => 'services_block',
            'title'             => __('Services Block'),
            'description'       => __('The main services block built for the home-page'),
            'render_template'   => 'template-parts/blocks/services-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('services', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('services-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
        acf_register_block_type(array(
            'name'              => 'counters_block',
            'title'             => __('Counters Block'),
            'description'       => __('The main counters block built for the home-page'),
            'render_template'   => 'template-parts/blocks/counter-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('counters', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('counters-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
        acf_register_block_type(array(
            'name'              => 'img-text_block',
            'title'             => __('Image & text Block'),
            'description'       => __('The main img-text block built for the home-page'),
            'render_template'   => 'template-parts/blocks/img-text-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('img-text', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('img-text-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        )); 
        acf_register_block_type(array(
            'name'              => 'text-columns-block',
            'title'             => __('Text Columns block'),
            'description'       => __('The main img-text block built for the home-page'),
            'render_template'   => 'template-parts/blocks/text-columns-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('img-text', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('text-columns-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
        acf_register_block_type(array(
            'name'              => 'clients-slider-block',
            'title'             => __('Clients Slider block'),
            'description'       => __('The main img-text block built for the home-page'),
            'render_template'   => 'template-parts/blocks/clients-slider-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('img-text', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('clients-slider-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
        acf_register_block_type(array(
            'name'              => 'cta-block',
            'title'             => __('CTA block'),
            'description'       => __('The Call to action block with you in the background.'),
            'render_template'   => 'template-parts/blocks/cta-block.php', 
            'category'          => 'formatting',
            'icon'              => 'dashicons-screenoptions',
            'keywords'          => array('img-text', 'acf', 'block'),
            'supports'          => array('align' => true),
            'enqueue_assets'    => function() {
                wp_enqueue_style('cta-block-style', get_template_directory_uri() . '/assets/css/hero-block.css');
            }
        ));
    }
}

//Add the option ACF page

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'  => 'Global Settings',
        'menu_title'  => 'Global Settings',
        'menu_slug'   => 'global-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}



// Splide
function enqueue_splide() {
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');
    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_splide');
