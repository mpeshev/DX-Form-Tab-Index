<?php
/**
 * Plugin Name: DX Form Tab Index
 * Description: Add a tab-index to your Comments form for easy switch textarea -> Post button
 * Author: nofearinc
 * Version: 0.6
 */

DX_Form_Tab_Index::init();

/**
 * Class-helper for tab index
 * 
 * @author nofearinc
 *
 */
class DX_Form_Tab_Index {
	
	// Init required scripts and setup
	function init() {
		add_action( 'wp', array( __CLASS__, 'form_tab_setup' ) );
	}
	
	// Do the work
	// Initialize the script only for single posts
	function form_tab_setup() {
		if( is_single() ) {
			add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_tab_script' ) );
		}
	}
	
	// Enqueue JS file for the work
	function enqueue_tab_script() {
		wp_enqueue_script( 'dx-form-tab', plugins_url('dx-form-tab-index.js', __FILE__ ), array('jquery'), '0.6' );
	}
}