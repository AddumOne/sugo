<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'animate','owl-carousel','nivo-lightbox','superfish' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function total_home_section(){
	$total_home_sections = apply_filters('total_home_sections',
	array(
		'slider',
		'about',
		'featured',
		'portfolio',
		'service',
		'team',
		'counter',
		'testimonial',
		'blog',
		'logo',
		'cta',
		'contact'
		)
	);
	return $total_home_sections;
}