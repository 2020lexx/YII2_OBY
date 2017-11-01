<?php
//
// @pablo - ajax timer functions
//
// 
defined('AJAX_EXEC') or die('Restricted access');

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


$ti=array(

array("h4","tbt_d",5000,"l0_home","

jQuery('#inner_tbt_d').text(data);
console.log('got h1 data');

    			" ), 
array("h5","tbt_e",1000,"","

var d = new Date();
jQuery('#inner_tbt_e').text(d.toLocaleTimeString());

				 " ),
    		);


?>