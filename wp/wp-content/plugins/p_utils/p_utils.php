<?php
/**
* Plugin Name: 0x Utils Module
* Description: This plugin call the utility functions 
* Version: 1.0
* Author: @pablo
*/
 

// template test
function tbt_ut_menu(){
	
	$css_page=plugins_url().'/zx_utils/ut_css.css'; 

	 // header files only on one page
	$html_head_code="<style type='text/css'>".file_get_contents($css_page)."</style>";

	$html_menu_code="
	<br><br>
	<div class='menu'>
		<div class='menu_item'><a href='#'>
			<div class='menu_des' style='border-bottom: 1px solid #10baaf'>Web Sites</div>
			<div class='menu_id' style='color:#10baaf;border-right: 1px solid #10baaf;'>W</div>
			</a>
		</div>
		<div class='menu_item'><a href='#'>
			<div class='menu_des'  style='border-bottom: 1px solid #9f473d'>Blog</div>
			<div class='menu_id' style='color:#9f473d;border-right: 1px solid #9f473d;'>B</div>
			</a>
		</div>
		<div class='menu_item'><a href='#'>
			<div class='menu_des'  style='border-bottom: 1px solid #e78337'>Eventi</div>
			<div class='menu_id' style='color:#e78337;border-right: 1px solid #e78337;'>E</div>
			</a>
		</div>
	</div>";

	echo $html_head_code.$html_menu_code;

	die();

	//
}
 // add
add_action( 'wp_ajax_tbt_ut_menu', 'tbt_ut_menu' );
add_action( 'wp_ajax_nopriv_tbt_ut_menu', 'tbt_ut_menu' ); // need this to serve non logged in users


 

?>