<?php 


function udacity_scripts() {
	/**
	 * Enqueue styles.
	 */
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('icon-font', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.min.css', array(), false, 'all');
	wp_enqueue_style('modal-overlay', get_template_directory_uri() . '/assets/css/modal-overlay.css', array(), false, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
	wp_enqueue_style('blue', get_template_directory_uri() . '/assets/css/blue.css', array(), false, 'all');
	wp_enqueue_style('zoomslider', get_template_directory_uri() . '/assets/css/zoomslider.css', array(), false, 'all');
	wp_enqueue_style( 'udacity-style', get_stylesheet_uri() );
	/**
	 * Enqueue scripts.
	 */
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery_min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), false, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('classie_js', get_template_directory_uri() . '/assets/js/classie.js', array(), false, true);
	wp_enqueue_script('fakeLoader', get_template_directory_uri() . '/assets/js/fakeLoader.min.js', array(), false, true);
	wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), false, true);
	wp_enqueue_script('zoomslider-js', get_template_directory_uri() . '/assets/js/jquery.zoomslider.min.js', array(), false, true);
	wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), false, false);
	wp_enqueue_script( 'main_script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), false, true );

	$data = array(
		'stylesheet_directory' => get_stylesheet_directory_uri(),
	);

	wp_localize_script( 'main_script', 'ajax', $data);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'udacity_scripts' );

require get_template_directory() . '/inc/options.php';