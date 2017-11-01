<?php
/**
* Plugin Name: Main Ajax
* Description: Main Ajax WP Interface
* Version: 1.0
* Author: @pablo
**/
 

// enqueue and localise scripts
wp_enqueue_script( 'ax-handle', plugin_dir_url( __FILE__ ) . 'main-ax.js', array( 'jquery' ) );
wp_localize_script( 'ax-handle', 'tbt_ax_send', array( 'tbt_ax_url' => admin_url( 'admin-ajax.php' ) ) );

  

// functions
function tbt_ax_action(){
 	$var = $_POST['tbt_ax_post'];
  	$post_data=theme_blog_i("1");

	echo "got from:".$post_data ;// this is passed back to the javascript function
	die();// wordpress may print out a spurious zero without this - can be particularly bad if using json
}
// add
add_action( 'wp_ajax_tbt_ax_fnc', 'tbt_ax_action' );
add_action( 'wp_ajax_nopriv_tbt_ax_fnc', 'tbt_ax_action' ); // need this to serve non logged in users

function tbt_ax_home_slide(){
	dynamic_sidebar("Big Sidebar");
	//echo "slide";
	die();

	//
}
 // add
add_action( 'wp_ajax_tbt_ax_home_slide', 'tbt_ax_home_slide' );
add_action( 'wp_ajax_nopriv_tbt_ax_home_slide', 'tbt_ax_home_slide' ); // need this to serve non logged in users




// shortcode
function hello_world_ajax_frontend(){
$the_form = '
<form id="theForm">
<input id="submit_button" value = "Click This" type="button" onClick="submit_me();" />
</form>
<div id="posting1"> 
 </div> 
 <div id="posting2"> 
 </div>';
return $the_form;
}
add_shortcode("hw_ajax_frontend", "hello_world_ajax_frontend");
?>
