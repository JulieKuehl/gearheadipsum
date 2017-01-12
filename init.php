<?php

/*
Plugin Name: Gearhead Ipsum - Lorem Ipsum, Now With More Power!
Plugin URI: http://gearheadipsum.com/
Description: This is not just a plugin, it symbolizes the hunger for more power held by an entire generation summed up in one small phrase: "Hold my beer and watch this". When activated you will pull several Gs. Also, you need to use the shortcode [get-gears].
Author: Julie Kuehl
Version: 1.0.0
Author URI: http://juliekuehl.com/
*/

/* TODO, maybe
 *
 * Finish implementing matching feature set to baconipsum.com
 * Improve statistical model of sentence generation
 * Add control over sentence length and other attributes
 * Implement a widget that can be used
 * Add more gears
 * Fix the (non-working) filler_option
 */

require_once( dirname( __FILE__ ) . '/class-custom-lipsum.php' );

$strings = array(
	'start_with'         => 'Gearhead ipsum dolor sit amet',
	'all_option'         => 'All Gears',
	'filler_option'      => 'Gears Plus a Few Spare Parts',
	'submit_button_desc' => 'Give my Ipsum more power!',
);

$tuna_ipsum_obj =& new CustomLipsum( 'gear.txt', $strings );
add_shortcode( 'get-gears', array( &$tuna_ipsum_obj, 'get_content' ) );
