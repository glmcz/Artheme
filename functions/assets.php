<?php

add_action('wp_enqueue_scripts', 'artalk_assets');

/* new jQuery override*/
function modify_jquery_version() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery',
            'http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js', false, '2.0.s');
        wp_enqueue_script('jquery');
    }
}
if (!is_admin()) {
    add_action('init', 'modify_jquery_version');
}


/* */
/* SCRIPTS */
function artalk_assets(){
	global $wp_query;
	$dir = get_stylesheet_directory_uri();
	$ver = '1.0.23';
	$deps = array();



	// modernizr
	/*wp_enqueue_script(
		'modernizr',
		$dir.'/bower_components/foundation/js/vendor/modernizr.js',
		array(),
		$ver,
		false
	);
	$deps[] = 'modernizr';*/
	// webfontloader
	wp_enqueue_script(
		'jquery',
		$dir.'/assets/scripts/jquery-2.2.0.min.js',
		array(),
		'2.2.0',
		false
	);
	$deps[] = 'jquery';

	wp_enqueue_script(
		'bootstrap4-js',
		$dir.'/assets/scripts/bootstrap-4.js',
		array(),
		$ver,
		false
	);
	$deps[] = 'bootstrap4-js';
        
	// webfontloader
	wp_enqueue_script(
		'webfontloader',
		$dir.'/assets/scripts/webfontloader/webfont.js',
		array(),
		$ver,
		false
	);
	$deps[] = 'webfontloader';
        
        // scripts for home
        if ( is_home() || is_category( array('artservis','arena','magazine') ) || is_single() ) {
                    $theme_scripts = array(
                        'slick.min',
                    'artalk.featured'
            );
            foreach ( $theme_scripts as $script_handle ) {
                    wp_enqueue_script(
                            $script_handle,
                            $dir.'/assets/scripts/'.$script_handle.'.js',
                            $deps,
                            $ver,
                            true
                    );
                    $deps[] = $script_handle;
            }
        }

    if (is_single()) {
        // jQuery-Collision
        wp_enqueue_script(
            'jQuery-Collision',
            $dir . '/assets/scripts/jquery-collision.min.js',
            array(),
            $ver,
            false
        );
        $deps[] = 'jQuery-Collision';

        // citation positioner
        wp_enqueue_script(
            'citation-positioner',
            $dir . '/assets/scripts/citation-positioner.js',
            array(),
            $ver,
            true
        );
        $deps[] = 'citation-positioner';
    }

    wp_enqueue_style(
        'font-awesome',
        $dir.'/font-awesome-4.7.0/css/font-awesome.min.css',
        array(),
        $ver
    );



	// foundation
	/*wp_enqueue_script(
		'foundation',
		$dir.'/bower_components/foundation/js/foundation.min.js',
		array('modernizr','jquery','fastclick'),
		$ver,
		true
	);
	$deps[] = 'foundation';*/

	//@TODO rewrite is_single() to a custom artalk_has_gallery() check
	/*if ( is_home() || is_category( array('artservis','arena','magazine') ) || is_single() ) {

		// slick
		wp_enqueue_style('slick', $dir.'/bower_components/slick.js/slick/slick.css', array(), $ver);
		wp_enqueue_script(
			'slick',
			$dir.'/bower_components/slick.js/slick/slick.min.js',
			array('jquery'),
			$ver,
			true
		);
		$deps[] = 'slick';
	}

	if ( is_home() || is_archive() || is_search() || is_author() ) {

		// masonry
		wp_enqueue_script('jquery-masonry');
		$deps[] = 'jquery-masonry';

		// handlebars
		wp_enqueue_script(
			'handlebars',
			$dir.'/assets/vendor/handlebars.min.js',
			array(),
			'3.0.0',
			true
		);
		$deps[] = 'handlebars';

		// imagesLoaded
		wp_enqueue_script(
			'imagesloaded',
			$dir.'/bower_components/imagesloaded/imagesloaded.pkgd.min.js',
			array(),
			'3.1.8',
			true
		);
		$deps[] = 'imagesloaded';
	}*/

	// main style, dashicons & scripts
	/*wp_enqueue_style('artalk', $dir.'/style.css', array( 'dashicons' ), $ver);
	$theme_scripts = array(
		'artalk.gallery',
		'artalk.navigation',
		'artalk.featured',
		'artalk.loader',
		'artalk.utils',
		'mau.sticky', // @TODO move to vendors
		'artalk',
	);
	foreach ( $theme_scripts as $script_handle ) {
		wp_enqueue_script(
			$script_handle,
			$dir.'/assets/scripts/build/'.$script_handle.'.min.js',
			$deps,
			$ver,
			true
		);
		$deps[] = $script_handle;
	}*/


	/*wp_localize_script( 'artalk', 'ArtalkL10n', array(
		'loading'   => __('Načítám...','artalk'),
		'thats_all' => __("No more posts",'artalk'),
	) );

	wp_localize_script( 'artalk', 'ArtalkData', array(
		'query' => (object) $wp_query->query,
	) );*/

}