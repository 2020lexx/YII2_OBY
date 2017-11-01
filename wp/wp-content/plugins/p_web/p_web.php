<?php
/**
* Plugin Name: 0x Web Sites Module
* Description: This plugin call the static generated pages of the web sites
* Version: 1.0
* Author: @pablo
*/
/*

out pages are on: .web_st/out/[customer code]

*/

// template test
function tbt_ws_template_test(){
	
	// get template number and page A or B
	$tm_number=$_POST['tm_nb'];
	$tm_page=$_POST['tm_pg'];
	
	// get name of the files
	$ws_page=get_home_path()."_main/_web_st/templates/".$tm_number."/page_".$tm_page.".html";
	$css_page=get_home_path()."_main/_web_st/templates/".$tm_number."/ws_css.css";
	$js_page=get_home_path()."_main/_web_st/templates/".$tm_number."/ws_js.js";
	
	// header files only on one page
	$html_head_code=($tm_page=="a")?"<style type='text/css'>".file_get_contents($css_page)."</style><script type='text/javascript'>".file_get_contents($js_page)."</script>":"";
	// get files's content and put all together
	$html_code=$html_head_code.file_get_contents($ws_page);

	// page  sets
	switch ($tm_page){
		case "a":
			$html_code=str_replace( "[event_code]",tbt_ws_event(), $html_code);
		break;
		case "b":
			$h1_head="company";
			$h4_head="servizi informatici";
			$phone="888888";
			$email="info@mail.it";
			$address="V. E.de Nicola 14<br>46028 - Sermide";
			$open_hours="lun/ver 8:30-12:30 15:00-18:00<br>sab 8:30-12:30 ";
			$adress_coords="45.0011737,11.2948665";

			// insert data
			$html_code=str_replace( "[address_coords]",$address_coords, $html_code);
		break;
		default:
		break;

	}
	
	
	echo $html_code;
	die();
}
 // add
add_action( 'wp_ajax_tbt_ws_template_test', 'tbt_ws_template_test' );
add_action( 'wp_ajax_nopriv_tbt_ws_template_test', 'tbt_ws_template_test' ); // need this to serve non logged in users


function tbt_ax_timestamp(){
	echo "ajax response in zweb:".time();
	//echo "slide";
	die();

	//
}
 // add
add_action( 'wp_ajax_tbt_ax_timestamp', 'tbt_ax_timestamp' );
add_action( 'wp_ajax_nopriv_tbt_ax_timestamp', 'tbt_ax_timestamp' ); // need this to serve non logged in users

function tbt_ws_event(){

	$html_code_s_template='
			<div class="ws_ev">
				<div class="ws_ev_cl">
					[calendar]
				</div>
				<div class="ws_ev_tl1">
					[ev_tl_1]
				</div>
				<div class="ws_ev_tl2">
					[ev_tl_2]
				</div>
				<div class="ws_ev_soc">
					[social]
				</div>
			</div>';
	$total_events=4;
	$event_number=1;
	// query db
	$s_event = [];
	$s_event['calendar']="dddd";
	$s_event['ev_tl_1']="GO LIVE EVENT!!";
	$s_event['ev_tl_2']="platform presentation";
	$s_event['social']='
						<a href="#"><img src="../_web_st/templates/000/imgs/face.png" /></a>
						<a href="#"><img src="../_web_st/templates/000/imgs/google.png" /></a>
						<a href="#"><img src="../_web_st/templates/000/imgs/inst.png" /></a>
						<a href="#"><img src="../_web_st/templates/000/imgs/pin.png" /></a>
						<a href="#"><img src="../_web_st/templates/000/imgs/twitter.png" /></a>
					';


	while($event_number<=$total_events){
		// insert data
		$html_code_s=$html_code_s_template;
	  	foreach ($s_event as $key => $value) {
			# code...
			$html_code_s=str_replace( "[".$key."]",$value, $html_code_s);
			
		}    
		$html_code=$html_code_s.$html_code;
		$event_number++;
		}
	return '<div id="event">'.$html_code.'</div>';

}
 
function tbt_ws_showdata(){

	$html_code_s_template="
	<div class='ws_ev_date'>
	<div class='ws_ev_dotw'>[date_of_the_week]</div>
	<div class='ws_ev_m'>[month_name]</div>
	<div class='ws_ev_dn'>[date_number]</div>
	<div class='ws_ev_yn'>[year_number]</div>
	</div>
	<div class='ws_ev_hour'>
	<div class='hour_min'>[hour]:[min]</div>
	</div>"

}
?>