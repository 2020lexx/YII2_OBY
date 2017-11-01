<?php
//
// @pablo - ajax json sets
//

define('AJAX_EXEC',1);
require_once('ajax_json_class.php');

// level 1
// page id , [level0 array ids], ...
$l1_blog=array(
	array("page1","b1","b2","b3","b4","b5"),
	array("page2","b1","b3"),
	);
$l1_web=array(
	array("page1","w1","w2","w3","w4"), 
	);

// level 0
// array id, father div id, div id, class, main color function, x%, y%, width%, height%, ajax query (if js interval is not code)
$l0_blog=array(
  	array("b1","body","tbt_a","class1","#9f473d",0,0,50,20,"action=tbt_bl_fnc&tbt_bl_post=post_1"),
	array("b2","body","tbt_b","class1","#9f473d",0,20,50,10,"action=tbt_bl_fnc&tbt_bl_post=post_1"),
  	array("b3","body","tbt_c","class1","#9f473d",50,0,48,30,"action=tbt_bl_home_slide"),
	array("b4","body","tbt_d","class1","#9f473d",0,30,50,70,"action=tbt_bl_post_holder&tbt_bl_post_id=1"),
 	array("b5","body","tbt_e","class1","#9f473d",75,30,23,70,"action=tbt_bl_recent_comments&tbt_bl_post=post_1"), 
	);
$l0_web=array(
  	array("w1","body","tbt_a","class1","#10baaf",0,0,50,10,""),
	 array("w2","body","tbt_b","class1","#10baaf",50,0,50,10,""),
  	array("w3","body","tbt_c","class1","#10baaf",0,10,50,90,"action=tbt_ws_template_test&tm_nb=000&tm_pg=a"),
	array("w4","body","tbt_d","class1","#10baaf",50,10,50,90,"action=tbt_ws_template_test&tm_nb=000&tm_pg=b"),
	 
//	array("b5","body","tbt_e","class1","#0d0",50,30,48,100,"action=tbt_ax_fnc&tbt_ax_post=post_1"), 
	);

// get post data
$request_ax=$_POST['rdata'];
// get data from arrays
$response_ax=$ $request_ax;   
// reponse ax request
echo json_encode($response_ax);

die();
?>