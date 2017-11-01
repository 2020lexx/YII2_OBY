<?php
//
// @pablo - ajax json class
//

// no direct access
defined('AJAX_EXEC') or die('Restricted access');

class AjaxClass
{

    public $internal_call = false;

    public function __construct()
    {
     
       
    }
    //
    // l0 arrays
    //
    //	array id, father div id, div id, class, main color function, x%, y%, width%, height%, ajax query (if js interval is not code)
    //
    public function level0_init($l0)
    {
		switch($l0){
			case "l0_home":
				$l0_response=array(
		  	array("h1","body","tbt_a","class1","rgba(221,51,51,0.8)",0,0,50,20,"action=tbt_ut_menu&tbt_ax_post=post_1"),
			array("h2","body","tbt_b","class1","#0f0",0,20,50,10,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
		  	array("h3","body","tbt_c","class1","#a00",50,0,50,30,"action=tbt_ax_home_slide"),
			array("h4","body","tbt_d","class1","#004",0,30,50,40,"action=tbt_ax_timestamp"),
			array("h5","body","tbt_e","class1","#0d0",50,30,50,70,"action=tbt_ax_fnc&tbt_ax_post=post_1"), 
			);
			break; 
		}

	 	// if internal call return no jason
	 	if($this->internal_call){ 
	 	   $this->internal_call=false;
	 	   return $l0_response;
	 	}

		return json_encode($l0_response);
    }

    public function level1_init($l1)
    {
		switch ($l1) {
			case "l1_home":
				$l1_response=array(
                    array("page1",
						"h1","h2","h3","h4"
						)
                    ); 
				break;
			
			default:
				 
				break;
		}
		
		// if internal call return no jason
	 	if($this->internal_call){ 
	 	   $this->internal_call=false;
	 	   return $l1_response;
	 	}

		return json_encode($l1_response);
	  
    }
    //
    //  time interval scripts
    //
    //	function id, id_div, interval(msec), level0 id array element
    //
    //	- if the function is only js the ajax_query on level0_init MUST be empty 
    //	- if the function call ajax_query:
    //		- it MUST be setted on level0_init 
    //		- js code MUST be the return function to process ajax response
    //		- l0 id array of this function MUST be setted (where the element is on level 0)
    //		- ajax response got: el[] + data
    //	
    public function time_interval_init()
    {
    	 $js_code ="";
    	// get functions
    	include_once("tbt_timer_fnc.php"); 
    	 
    	// ---- not beyond this line ----
 
	  	foreach ($ti  as $ti_key=>$ti_val) {
    		 
    		// check if this is js code or ajax query 
    		if(empty($ti_val[3])){
    			// js code
    			$js_timer_code_fnc=$ti_val[4];
    			$js_reponse_code_fnc="";
    		} else {
    			// get the element l0_
    			$this->internal_call=true;
            	foreach ($this->level0_init($ti_val[3]) as $l0_key => $l0_value) {
    			 	if($l0_value[0]==$ti_val[0]){
    					// get the all element data of 
    					$l0_element=$l0_value;
    				}
    			}   
    			// process ajax response ;
	    			$js_timer_code_fnc="
var el_".$ti_val[0]." = ".json_encode($l0_element).";
el_".$ti_val[0]."[10] = 'fnc_ajax_response_".$ti_val[0]."(el,data)'; 
tbt_ajax_as(el_".$ti_val[0].");";
					$js_reponse_code_fnc="
function fnc_ajax_response_".$ti_val[0]."(el,data){
	".$ti_val[4]."
}";
	    		
    		}

	    		// javascript timer functions
	    	 	 
	    		 $js_code=$js_code."
var timer_".$ti_val[0]."=setInterval(fnc_timer_".$ti_val[0].",".$ti_val[2].");
function fnc_timer_".$ti_val[0]."(){
if((jQuery.inArray('".$ti_val[1]."',tbt_dashboard)==(-1))||(tbt_dashboard_el['".$ti_val[1]."'][6]!='".$ti_val[0]."')){ return; }
".$js_timer_code_fnc."};
".$js_reponse_code_fnc;   
    	 	}
	    	 
    	 
    	return $js_code;
   	 }

}
?>