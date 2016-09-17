<?php
/**
 * @package capital_a8c_dangit
 * @version 1.0
 */
/*
Plugin Name: a8c capitalization
Plugin URI: 
Description: Capitalizes the Automattic products that tend to get miscapitalized.
Author: Team capital_a8c_dangit
Version: 1.0
Author URI: 
*/
// Basically modified from capital_P_dangit
add_filter( 'the_title', 'capital_a8c_dangit', 11 );
add_filter( 'the_content', 'capital_a8c_dangit', 11 );
add_filter( 'comment_text', 'capital_a8c_dangit', 31 );
function capital_a8c_dangit( $text ) {
// Simple replacement for titles
			$bad = array('Vaultpress', 'JetPack', 'Woocommerce','jetPack', 'CloudUp', 'SimpleNote',);
			$good = array('VaultPress', 'Jetpack', 'WooCommerce', 'Jetpack', 'Cloudup', 'Simplenote',);
	        $current_filter = current_filter();
	        if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
	                return str_replace( $bad, $good, $text );
// Still here? Use the more judicious replacement
	        static $dblq = false;
	        if ( false === $dblq ) {
	                $dblq = _x( '&#8220;', 'opening curly double quote' );
	        }
	        return str_replace ( $bad, $good, $text );
	       }
