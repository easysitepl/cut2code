<?php

function button( $atts ) {
	extract( shortcode_atts( array(
		'text' => '',
		'color' => '',
		'url' => '#',
		'align' => '',
	), $atts ) );

	return '<a href="' . $url . '" class="' . $color . 'button" style="float:'. $align .'">' . $text . '</a>';
}
add_shortcode( 'button', 'button' );

function column( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'width' => '',
		'last' => '',
	), $atts ) );
	return '<div class="column ' . $last . '" style="width:' . $width . 'px;">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'column', 'column' );

function message( $atts, $content = null ) {
	return '<div style="background:yellow; padding:10px;">' . do_shortcode($content) . '<div class="clr"></div></div>';
}
add_shortcode( 'message', 'message' );

?>