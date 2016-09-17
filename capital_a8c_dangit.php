<?php
/**
 * @package capital_a8c_dangit
 * @version 1.0
 */
/*
Plugin Name: a8c capitalization
Plugin URI: 
Description: Capitalizes the Automattic products that tend to get miscapitalized.
Author: Team capital_WC_dangit
Version: 1.0
Author URI: http://automattic/

*/
function capital_WC_dangit( $text ) {
    // Simple replacement for titles
    $current_filter = current_filter();
    if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
        return str_replace( 'Woocommerce', 'WooCommerce', $text );
    // Still here? Use the more judicious replacement
   static $dblq = false;
    if ( false === $dblq ) {
        $dblq = _x( '&#8220;', 'opening curly double quote' );
    }
    return str_replace(
        array( ' Woocommerce', '&#8216;Woocommerce', $dblq . 'Woocommerce', '>Woocommerce', '(Woocommerce', ),
        array( ' WooCommerce', '&#8216;WooCommerce', $dblq . 'WooCommerce', '>WooCommerce', '(WooCommerce', ),
    $text ); 
}

add_filter( 'the_title', 'capital_WC_dangit', 11 );
add_filter( 'the_content', 'capital_WC_dangit', 11 );
add_filter( 'comment_text', 'capital_WC_dangit', 31 );



function capital_vp_dangit( $text ) {
// Simple replacement for titles
	        $current_filter = current_filter();
	        if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
	                return str_replace( 'Vaultpress', 'VaultPress', $text );
// Still here? Use the more judicious replacement
	        static $dblq = false;
	        if ( false === $dblq ) {
	                $dblq = _x( '&#8220;', 'opening curly double quote' );
	        }
	        return str_replace(
	                array( ' Vaultpress', '&#8216;Vaultpress', $dblq . 'Vaultpress', '>Vaultpress', '(Vaultpress' ),
	                array( ' VaultPress', '&#8216;VaultPress', $dblq . 'VaultPress', '>VaultPress', '(VaultPress' ),
	        $text );

	    }


add_filter( 'the_title', 'capital_vp_dangit', 11 );
add_filter( 'the_content', 'capital_vp_dangit', 11 );
add_filter( 'comment_text', 'capital_vp_dangit', 31 );



function capital_jp_dangit( $text ) {
	        // Simple replacement for titles
	        $current_filter = current_filter();
	        if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
	                return str_replace( 'JetPack', 'Jetpack', $text );
	        // Still here? Use the more judicious replacement
	        static $dblq = false;
	        if ( false === $dblq ) {
	                $dblq = _x( '&#8220;', 'opening curly double quote' );
	        }
	        return str_replace(
	                array( ' JetPack', '&#8216;JetPack', $dblq . 'JetPack', '>JetPack', '(JetPack', ),
	                array( ' Jetpack', '&#8216;Jetpack', $dblq . 'Jetpack', '>Jetpack', '(Jetpack', ),
	        $text );
	}

add_filter( 'the_title', 'capital_jp_dangit', 11 );
add_filter( 'the_content', 'capital_jp_dangit', 11 );
add_filter( 'comment_text', 'capital_jp_dangit', 31 );


function capital_jp1_dangit( $text ) {
	        // Simple replacement for titles
	        $current_filter = current_filter();
	        if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
	                return str_replace( 'JetPack', 'Jetpack', $text );
	        // Still here? Use the more judicious replacement
	        static $dblq = false;
	        if ( false === $dblq ) {
	                $dblq = _x( '&#8220;', 'opening curly double quote' );
	        }
	        return str_replace(
	                array( ' jetPack', '&#8216;jetPack', $dblq . 'jetPack', '>jetPack', '(jetPack', ),
	                array( ' Jetpack', '&#8216;Jetpack', $dblq . 'Jetpack', '>Jetpack', '(Jetpack', ),
	        $text );
	}

add_filter( 'the_title', 'capital_jp1_dangit', 11 );
add_filter( 'the_content', 'capital_jp1_dangit', 11 );
add_filter( 'comment_text', 'capital_jp1_dangit', 31 );