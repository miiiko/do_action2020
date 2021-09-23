<?php
	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style(
			get_stylesheet(),
			get_stylesheet_uri(),
			[ get_template() ]
		);
		wp_enqueue_style( 'fullcalendar-style', get_stylesheet_directory_uri() . '/fullcalendar/main.min.css');
		wp_enqueue_script( 'fullcalendar-main-script', get_stylesheet_directory_uri() . '/fullcalendar/main.min.js', array(), '5.9.0', true );
		wp_enqueue_script( 'fullcalendar-script', get_stylesheet_directory_uri() . '/fullcalendar/calendar.js', array(), '1.0.0', true );
	} );
	function post_has_archive($args, $post_type){
		if('post' == $post_type){
			$args['rewrite'] = true;
			$args['has_archive'] ='news';
		}
		return $args;
	}
	add_filter('register_post_type_args', 'post_has_archive', 10, 2);
?>
