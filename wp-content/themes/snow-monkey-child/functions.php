<?php
	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style(
			get_stylesheet(),
			get_stylesheet_uri(),
			[ get_template() ]
		);
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
