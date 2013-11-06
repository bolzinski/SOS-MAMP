<?php

//needed to add this for wp-admin -- enable 'posts' to be assigned "featured-image", these
//can then be output in the loop via the the_post_thumbnail() built-in WP function
add_theme_support( 'post-thumbnails' );

// function sos_truncate_string( $long_string, $length ) {
// 	 $new_string = substr($long_string, 0, $length);
// 		return $new_string;
// 		}
// }

function sos_truncate_string($long_string, $length) {
	 $new_string = substr($long_string, 0, $length);
	 if (strlen($long_string) > $length) {
	 		$new_string = $new_string . "...";
	 }
	 
	 return $new_string;
}

?>