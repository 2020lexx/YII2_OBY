<?php

/*
 @pablo
 level0 scripts

*/


define('AJAX_EXEC',1);
require_once('ajax_json_class.php');
$init_levels= new AjaxClass;
 ?>
<!DOCTYPE html>
<html>
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

<link rel="stylesheet" media="all" type="text/css" href="../../css/main_style.css">


<script type="text/javascript" src="js/jquery.knob.js"></script>


<script type="text/javascript" src="tbt_main_scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ColorPropsPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ScrollToPlugin.min.js"></script>
<style type="text/css">.tp-caption.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.tp-caption.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.tp-caption.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}</style>
<style type="text/css">.tp-caption.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.tp-caption.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.tp-caption.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}</style>

<!--<<link rel="stylesheet" id="redux-google-fonts-css" href="http://fonts.googleapis.com/css?family=Open+Sans&amp;ver=1440000036" type="text/css" media="all">
link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:400,300' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.5.9&ver=4.3.1"></script>
<script type="text/javascript" src="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.5.9&ver=4.3.1"></script>
<link rel="stylesheet" id="rs-plugin-settings-css" href="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.5.9&ver=4.3.1" type="text/css" media="all">



<style type="text/css">
body{
	background-color: #333333;
	font-family: "Source Sans Pro";
}
.class1 {
  background: transparent;
  position:absolute;
 border:1px #cecece;}
.class2 {
  background: #00f!important;
  position:absolute;

}
/* common class for divs */
.div_common{
	z-index:-1;
	overflow: hidden;
	margin: 0px;
	padding: 0px;
}
/* common class for inner div */
.inner_common{
	height: 100%; 
}
.tbt_signal {
 	z-index: 1000;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 60px 60px;
} 
.zoom_class{
	z-index:1001;
	background-color: #444;
	border:1px solid #ccc;
}
.zoom_inner{
	height: 100%;
	margin-top: -3%;
	overflow: hidden; 
}
.zoomed_class{
	visibility: hidden;
	z-index: -1;
}
.zoom_cmds{
	z-index:1002;
	background-color: transparent;
	width: 4%;
	height: 6%;
	position:relative;
	left:96%;
	background-image: url('../zx_web_st/templates/000/imgs/zoom_cl.png');
    background-repeat: no-repeat;
    background-position:center; 
    margin:5px;
    -webkit-transition: 1s ease-in-out;
    -moz-transition: 1s ease-in-out;
    -o-transition: 1s ease-in-out;
    transition: 1s ease-in-out;
}
.zoom_cmds:hover{
	cursor: pointer;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
.zoom_class_signal{
	z-index:1002;
}
</style>
</head>
<body id="mainBody">  
 <form id="theForm">
<input id="submit_button" value = "1" type="button" onClick="f1();" />
<input id="submit_button" value = "2" type="button" onClick="f2();" /> 
<input id="submit_button" value = "3" type="button" onClick="f3();" /> 
<input id="submit_button" value = "4" type="button" onClick="f4();" /> 
<input id="submit_button" value = "5" type="button" onClick="f5();" /> 
<input id="submit_button" value = "6" type="button" onClick="f6();" /> 
<input id="submit_button" value = "7" type="button" onClick="f7();" /> 
<input id="submit_button" value = "8" type="button" onClick="f8();" />  
<input id="submit_button" value = "9" type="button" onClick="f9();" />  
</form>
<div id="ajax_response"></div> 
<script type="text/javascript">
// test //
function f1(){
	resize();
 /* tbt_div_create(tbt_div[0]);
   tbt_div_s.push(tbt_div[0][2]);*/
  	for(var i=0;i<tbt_div.length;i++){
	 	 tbt_level0_create(tbt_div[i]);
		 // create array with div data
	 	  tbt_div_s.push(tbt_div[i][2]);
	 }      
	//tbt_signal_create("tbt_div1","#F00",0,0,50,20);*/
}
function f2(){ 

  tbt_ajax_ajs("l0_web");
  tbt_ajax_ajs("l1_web");

  tbt_ajax_ajs("l0_blog"); 
  tbt_ajax_ajs("l1_blog"); 
	 // load level0 web 
 }
function f3(){
	// set page1
  tbt_level1_set("l1_blog","page1");
 }
 function f4(){
  // set page2
  tbt_level1_set("l1_blog","page2");
 }
function f5(){
	// tbt_level0_zoom(tbt_level0[0][1][0],"on");
	// h1,body,tbt_a,class1,rgba(221,51,51,0.8),0,0,50,20,action=tbt_ax_fnc&tbt_ax_post=post_1
  
	tbt_div_zoom("ws_b2a2","","on");
}

function f6(){
	tbt_div_zoom("initial","action=tbt_bl_single_post&tbt_bl_post_id=1","on");
}
function f7(){
 // set page2
  tbt_level1_set("l1_web","page1");
 	 
	
	 

}
function f8(){
	tbt_level0_set(tbt_level0[0][1]);
	
	//tbt_ajax_ajs("l0_blog"); // load level0 blog
	console.log("dash:"+tbt_dashboard);
	console.log("dash_el:"+tbt_dashboard_el);
  	
}
function f9(){
	console.log("level0:"+tbt_level0);
	console.log(tbt_dashboard);
  tbt_level1_set("l1_home","page1");
 	 
//tbt_level0_set(tbt_level0[1][1]);

	//alert(tbt_level1[0][1]);
	/*for(var i=0;i<tbt_level0.length;i++){
	 	console.log(tbt_level0[i][4][4]);
		 
	 } */
}
// console.log(ajax_query[0] );



// 

/*  level 0 var:

	t..[0][0]=l0_home  (context)
	t..[1][0]=l0_blog 
	
	t..[0][1][0]=1st element of 1st context
	t..[0][1][1]=2nd element of 1st context

	t..[1][1][0]=1st element of 2nd context
	t..[1][1][1]=2nd elemenet of 2nd context

	t..[0][1][0][1]=1st div data element of 1st element of 1st context

*/
/*  level 1 var:

	t..[0][0]=l1_home  (context)
	t..[1][0]=l1_blog 
	
	t..[0][1][0]=1st element of 1st context
	t..[0][1][1]=2nd element of 1st context

	t..[1][1][0]=1st element of 2nd context
	t..[1][1][1]=2nd elemenet of 2nd context

	t..[0][1][0][1]=1st div data element of 1st element of 1st context

*/
 var tbt_level0= [];
 var tbt_level1= [];
 		
	
/* 
    dashboard var: got the div elements active on page
*/
var tbt_dashboard=[];
/* 
	active element data: ['tbt_a']=>[x,y,h,w,class,id];
*/
var tbt_dashboard_el=[];

//////////////////////////////////////////////////////////////////
var tbt_div_e = [];
var tbt_div = [];
var tbt_div_s = [];  // array with div id dat
var main_w;
var main_h;
var border_mode="1px #ededed";

jQuery(document).ready( function() {
	init();
 	logo(.01*jQuery( window ).width(),.80*jQuery( window ).height(),1);
    resize();  
});

// timer functions
<?php echo $init_levels->time_interval_init(); ?>

function init(){
	// init levels vars
	var tbt_level0_el=["l0_home"];
	tbt_level0_el.push(<?php echo $init_levels->level0_init("l0_home"); ?>);
	tbt_level0.push(tbt_level0_el);
	var tbt_level1_el=["l1_home"];
	tbt_level1_el.push(<?php echo $init_levels->level1_init("l1_home"); ?>);
	tbt_level1.push(tbt_level1_el);

}
function resize(){
	 main_w=jQuery( window ).width()-10;
	 main_h=jQuery( window ).height()-10;
}
//
// @pablo - da
//
// @pablo - level 0 create set
//
function tbt_level0_set(el_set){ 
	// check if element must be created,changed or deleted
 	jQuery.each(el_set,function(index, el) {tbt_level0_create(el); });
 	// check if all dashboard's elements will be used
	// get delete elementes array
	var del_array =tbt_dashboard; 
	jQuery.each(el_set,function(index, el_set_el) { del_array = jQuery.map(del_array,function(n,i){ return n !== el_set_el[2] ? n : null;	});  });  
	// delete elements
    jQuery.each(del_array,function(index, el) { tbt_level0_delete(["","",el]); } );
	 
}
//
// @pablo - level 1 set
//
function tbt_level1_set(l1_set,page_set){
 	// check 1st (l1_xxx) (l1_blog) 
	arr_l1 = jQuery.map(tbt_level1,function(n,i) { return n[0] == l1_set ? tbt_level1[i] : null;});
 	// check 2nd (pageX) (page1)
 	arr_l1_p = jQuery.map(arr_l1[1], function(n,i) { return n[0] == page_set ? arr_l1[1][i] : null;}); 
	// get element array (b1,b2,..)
	arr_l1_p_el = jQuery.grep(arr_l1_p, function(n) { return n !== page_set; });  
 	// change l1_xxx to l0_xxx
	arr_l1_l0 = arr_l1[0].replace("1","0");
	// create a new level0_set with this elements
	arr_l0 = jQuery.map(tbt_level0,function(n,i){ return n[0] == arr_l1_l0 ? n : null;}); 
	//  get an array of l0 elements matched with l1_p_el
	arr_l0_el=[];arr_l0_el_el=[];	
	jQuery.each(arr_l1_p_el,function(index, arr_l1_p_el_el) {  arr_l0_el_el = jQuery.map(arr_l0[1] ,function(n,i){   return  arr_l1_p_el_el == n[0] ? n : null; });  arr_l0_el.push(arr_l0_el_el);  });  
	// call level0 create function
	tbt_level0_set(arr_l0_el); 
	   
}
//
// @pablo - level0 delete function
//
function tbt_level0_delete(el){
	id_div=el[2];
	// delete div 
	// fadeout and remove
 	// TweenLite.to("#inner_"+id_div, .5, { autoAlpha:0,ease: Linear.easeNone});
 	TweenLite.to(["#inner_"+id_div,"#"+id_div,"#signal_"+id_div],.5, { autoAlpha:0,ease: Linear.easeNone,onComplete:tbt_remove_element,onCompleteParams:[id_div]});
 	/*del_el = new TimelineLite({onComplete:tbt_remove_element,onCompleteParams:[id_div]});
 	del_el.to("#"+id_div,.5, { autoAlpha:0,ease: Linear.easeNone});
	del_el.to("#signal_"+id_div,.5, { autoAlpha:0,ease: Linear.easeNone}); */
 	//** OTT del_el.add(TweenLite.to("#"+id_div,.5, { autoAlpha:0,ease: Linear.easeNone}));
	//** OTT del_el.add(TweenLite.to("#signal_"+id_div,.5, { autoAlpha:0,ease: Linear.easeNone}));
 	// remove element on dashboard var
 	tbt_dashboard.splice(jQuery.inArray(id_div,tbt_dashboard),1);
}
function tbt_remove_element(id_div){
	// remove DOM element
 	jQuery("#"+id_div+",#signal_"+id_div).remove();
}
//
// @pablo - level0 create function
// 1.0
//
   
function tbt_level0_create(el){
	// vars
	id_element=el[0];id_div_append=el[1];id_div=el[2];id_class=el[3];id_color=el[4];
	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];aj_query=el[9];
	coord_x=(id_x*main_w)/100;coord_y=(id_y*main_h)/100;
	border_mode="1px solid "+id_color;
 	// check if div is displayed
 	if(jQuery("#"+id_div).length){
 		console.log("exists:"+id_div);
  		// get index of id_source from tbt_div_s[] and then get data from tbt_div[]
  		// get actual element data
  	 	//els=tbt_div[jQuery.inArray(id_div,tbt_div_s)];
	 	// get actual element data
  	 	els=tbt_dashboard_el[id_div];
	 	//	console.log(id_source + " -" + tbt_div_s + "->"+jQuery.inArray(id_source,tbt_div_s));
	 	id_x_s=els[0];id_y_s=els[1];w_s=els[2];h_s=els[3];
		id_class_s=els[4];
		coord_x_s=(id_x_s*main_w)/100;coord_y_s=(id_y_s*main_h)/100;
		// check if the div is the same
		// reorder array
		el_comp=el.slice(5,10);
		el_comp.splice(4,0,el[3]);
		// strictly compare arrays
		el_comp_arr=jQuery.map(el_comp,function(n,i){console.log("n:"+n+" i:"+i+" el:"+els[i]); return n == els[i] ? 0 : 1 });
		 
		if(jQuery.inArray(1,el_comp_arr) == -1 ){
			// this element is the same so skip all process
			console.log("same element skip");
			return;
		} 
		// set class 
 		if(id_class!=id_class_s){ jQuery("#"+id_div).removeClass(id_class_s).addClass(id_class);}  
		// erase signal and clear div signal
		TweenLite.to(["#signal_"+id_div,"#inner_"+id_div], 1, { autoAlpha:0,ease: Linear.easeNone});
		 
		
	} else {
		console.log("create:"+id_div);
		// create div
		coord_x_s=coord_x;coord_y_s=coord_y;w_s=0;h_s=0;
		element="<div id='"+id_div+"' class='div_common "+id_class+"'></div>";
		inner_div="<div id='inner_"+id_div+"' class='inner_common inner_"+id_class+"'></div>";
		jQuery(id_div_append).append(element);jQuery("#"+id_div).append(inner_div);
		// put on dashboard var
		tbt_dashboard.push(id_div);
	}
	// put or update dashboard el
	tbt_dashboard_el[id_div]=[id_x,id_y,id_w,id_h,id_class,aj_query,id_element];
	console.log({x:Math.ceil(coord_x),y:Math.ceil(coord_y),width:id_w+"%",height:id_h+"%"});
	//var tl = new TimelineMax({onComplete:tbt_signal_create,onCompleteParams:[id_div,id_color,coord_x,coord_y,id_w,id_h]});
    //	var tl = new TimelineLite({});
 	TweenLite.to( "#"+id_div,2,{x:Math.ceil(coord_x),y:Math.ceil(coord_y),width:((id_w*main_w)/100),height:((id_h*main_h)/100),
 							border:border_mode,ease: Power4.easeOut,onComplete:tbt_level0_create_complete,onCompleteParams:[el]});
 	/* tl.fromTo( "#"+id_div,2,{x:Math.ceil(coord_x_s),y:Math.ceil(coord_y_s),width:w_s+"%",height:h_s+"%"},
 							{x:Math.ceil(coord_x),y:Math.ceil(coord_y),width:id_w+"%",height:id_h+"%",
 							border:border_mode,ease: Power4.easeOut}); */
 }

//
// @pablo - level0 zoom
function tbt_level0_zoom(el,mode){
	// zoom sets
	var elz=[]; 
	z_id_x=10;z_id_y=10;z_id_w=80;z_id_h=60;
	id_div_append=el[1];id_div=el[2];id_class=el[3];id_color=el[4];
	els=tbt_dashboard_el[id_div];
	// erase signal
	TweenLite.to(["#signal_"+id_div,"#inner_"+id_div], 1, { autoAlpha:0,ease: Linear.easeNone});
	 if(mode=="on"){
		// zoom mode on
		id_x=z_id_x;id_y=z_id_y;id_w=z_id_w;id_h=z_id_h;
		coord_x=(id_x*main_w)/100;coord_y=(id_y*main_h)/100;
		id_x_s=els[0];id_y_s=els[1];h_s=els[2];w_s=els[3]; 
		id_class_s=els[4];
		coord_x_s=(id_x_s*main_w)/100;coord_y_s=(id_y_s*main_h)/100;
 		jQuery("#"+id_div).addClass("zoom_class"); 
		// signal zoomed element
 	 	elz[2]=id_div;elz[5]=z_id_x;elz[6]=z_id_y;elz[8]=z_id_h;elz[7]=z_id_w;elz[4]=el[4];elz[9]=el[9]; 
 	 	// animation start
		var tl = new TimelineMax({onComplete:tbt_level0_create_complete,onCompleteParams:[elz]});
	 	tl.fromTo( "#"+id_div,2,{x:Math.ceil(coord_x_s),y:Math.ceil(coord_y_s),width:w_s+"%",height:h_s+"%"},{x:Math.ceil(coord_x),y:Math.ceil(coord_y),width:id_w+"%",height:id_h+"%",border:border_mode,ease: Power4.easeOut});
	} else {
		// zoom mode off 
		console.log("zoom off:"+el);
	 	id_x_s=z_id_x;id_y_s=z_id_y;h_s=z_id_h;w_s=z_id_w;
		id_class_s=els[4];
		coord_x_s=(id_x_s*main_w)/100;coord_y_s=(id_y_s*main_h)/100;
	  	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];
	 	coord_x=(id_x*main_w)/100;coord_y=(id_y*main_h)/100;  
	 	elz=el;
	 	// animation start
		var tl = new TimelineMax({onComplete:tbt_level0_create_complete,onCompleteParams:[elz]});
		tl.fromTo( "#"+id_div,2,{x:Math.ceil(coord_x_s),y:Math.ceil(coord_y_s),width:w_s+"%",height:h_s+"%"},{x:Math.ceil(coord_x),y:Math.ceil(coord_y),width:id_w+"%",height:id_h+"%",border:border_mode,ease: Power4.easeOut});
	 	tl.add(function(){jQuery("#"+id_div).removeClass("zoom_class");	});
	}
 	//console.log("zoom:"+coord_x_s+"-"+coord_y_s+"-"+w_s+"-"+h_s+"<->"+coord_x+"-"+coord_y+"-"+id_w+"-"+id_h+"->...."+elz);
	   
}
//
// @pablo - level0 zoom
function tbt_div_zoom(el_s,el_zquery,mode){
	// zoom sets
	var elz=[]; 
	// zoom element [%]
	z_id_x=10;z_id_y=10;z_id_w=80;z_id_h=60;
	// zoom cmd div [px]
	zoom_cmd_h=20;zoom_cmd_w=20;
	// zoomed element
	el_s_obj=jQuery("#"+el_s);
	// convert zoom element
  	id_w=(main_w*z_id_w)/100;id_h=(main_h*z_id_h)/100;
	coord_x=(z_id_x*main_w)/100;coord_y=(z_id_y*main_h)/100;
	// zoom element query

/* 
	id_div_append=el[1];id_div=el[2];id_class=el[3];id_color=el[4];
	els=el;*/
	// erase signal
//	TweenLite.to("#signal_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone});
	// clear div signal
 //	TweenLite.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone});
	if(mode=="on"){
		// zoom mode on
		// initial is an object without source div
		if(el_s=="initial"){
			zoom_elem=jQuery(document.createElement("div")).attr("id",el_s+"_z");
			coord_x_s=0;coord_y_s=0;el_s_obj_height=main_h;el_s_obj_width=main_w;

		} else {
			// clone original element
			zoom_elem=jQuery("#"+el_s).clone().attr("id",el_s+"_z");
			coord_x_s=el_s_obj.offset().top;
			coord_y_s=el_s_obj.offset().left;
			el_s_obj_height=el_s_obj.height();
			el_s_obj_width=el_s_obj.width();
			// hide original element
			el_s_obj.addClass('zoomed_class');
		}
		// attach element to body // set x,y,h,w cloned element over zoomed element
		zoom_elem.appendTo("body").offset({ top: coord_x_s, left: coord_y_s }).height(el_s_obj_height).width(el_s_obj_width).addClass("zoom_class");
		// create zoom command div and add fnc (zoom off)
	 	zoom_cmds=jQuery(document.createElement("div")).appendTo(zoom_elem).addClass('zoom_cmds').attr("onClick","tbt_div_zoom('"+el_s+"','','off');");
		// create inner zoom div
	 	zoom_inner=jQuery(document.createElement("div")).appendTo(zoom_elem).attr("id","inner_"+el_s+"_z").addClass('zoom_inner div_common');
	 
	    // signal zoomed element
 	 	elz[2]=el_s+"_z";elz[9]=el_zquery; 

 	 	console.log({left:coord_x_s+"px", top:coord_y_s+"px",width:el_s_obj_width+"px",height:el_s_obj_height+"px"});
 	 	// animation start
	  	TweenLite.to("#"+el_s+"_z",2,{css:{left:coord_x+"px", top:coord_y+"px",width:id_w+"px",height:id_h+"px"},border:border_mode,ease: Power4.easeOut,onComplete:tbt_ajax_as, onCompleteParams:[elz]});
	  	/*tl.fromTo( "#"+el_s+"_z",20,{css:{left:coord_x_s+"px", top:coord_y_s+"px",width:el_s_obj.width()+"px",height:el_s_obj.height()+"px"}},
	  							   {css:{left:Math.ceil(coord_x)+"px", top:Math.ceil(coord_y)+"px",width:id_w+"px",height:id_h+"px"},
	  							   border:border_mode,ease: Power4.easeOut}); */

	} else {
		// zoom mode off 
		// initial is an object without source div
		if(el_s=="initial"){
			coord_left=0;
			coord_top=0;
			el_s_obj_height=main_h;
			el_s_obj_width=main_w;
		} else {
		// get zoomed element data
			// set x,y,h,w cloned element over zoomed element
			 
		 	id_x_s=z_id_x;id_y_s=z_id_y;h_s=z_id_h;w_s=z_id_w;
	 
			//--- coord_x_s=(id_x_s*main_w)/100;coord_y_s=(id_y_s*main_h)/100;
		  	//---coord_x=(id_x*main_w)/100;coord_y=(id_y*main_h)/100;  
		 	coord_left=el_s_obj.offset().left;
			coord_top=el_s_obj.offset().top;
			el_s_obj_height=el_s_obj.height();
			el_s_obj_width=el_s_obj.width();
		

		}
console.log({css:{left:coord_left+"px", top:coord_top+"px",width:el_s_obj_width+"px",height:el_s_obj_height+"px"}});


	 //	elz=el;
	 	// animation start
		var tl = new TimelineLite(); //{onComplete:tbt_level0_create_complete,onCompleteParams:[elz]});
		tl.to( "#"+el_s+"_z",2,{css:{left:coord_left+"px", top:coord_top+"px",width:el_s_obj_width+"px",height:el_s_obj_height+"px",opacity:0},
	  								border:border_mode,ease: Power4.easeOut});
	 	tl.add(function(){jQuery("#"+el_s+"_z").remove();	});
		tl.add(function(){jQuery("#signal_"+el_s+"_z").remove();	});
	 	tl.add(function(){el_s_obj.removeClass("zoomed_class");	});
	/*	tl.fromTo( "#"+el_s+"_z",2,{css:{left:Math.ceil(coord_x)+"px", top:Math.ceil(coord_y)+"px",width:id_w+"px",height:id_h+"px"}},
								   {css:{left:el_s_obj.offset().left+"px", top:el_s_obj.offset().top+"px",width:el_s_obj.width()+"px",height:el_s_obj.height()+"px"},
	  								border:border_mode,ease: Power4.easeOut});
	// 	tl.add(function(){jQuery("#"+el_s+"_z").remove();	});
		tl.add(function(){jQuery("#signal_"+el_s+"_z").remove();	});
	 	tl.add(function(){el_s_obj.removeClass("zoomed_class");	}); */
	 
	}
 	//console.log("zoom:"+coord_x_s+"-"+coord_y_s+"-"+w_s+"-"+h_s+"<->"+coord_x+"-"+coord_y+"-"+id_w+"-"+id_h+"->...."+elz);
	   
}
//
// @pablo - level0 create complete 
//_
function tbt_level0_create_complete(el){
	 // draw signal
	tbt_signal_create(el);
	// call ajax
    tbt_ajax_as(el); 
}
//
// @pablo - main_ajax async  
//
// on interval query el[10] is the return function to execute 
//
var main_url_as = "http://192.168.0.31/dev/the_one/OurBY/wp/wp-admin/admin-ajax.php";
//var main_url_as = "http://192.168.0.31/dev/TBT/div-elements/ajax_response.php";
 
function tbt_ajax_as(el){
	
	// start ajax query 
	var id_div=el[2];
	var ajax_query=el[9];
 	jQuery.ajax({
		method: "POST",
		url: main_url_as,
		data: ajax_query,
		cache: false,
	//	dataType: data_type,
		beforeSend: function(){tbt_ajax_as_beforesend(el)},	
		success: function(data){ tbt_ajax_as_success(el,data)},
		error:function(data){tbt_ajax_as_error(id_div,data)},
		//complete:function(){tbt_ajax_as_complete(el)}
	});

}

function tbt_ajax_as_beforesend(el){
	// custom fnc no signal
	if(el[10]){ return; }
 	// start waitsignal
  	tbt_wait_signal_start(el);
} 
function tbt_ajax_as_success(el,data){
	// ajax request success
	// check if is a timer function 
 	if(el[10]){
		// call return custom fnc
		eval(el[10]);
	} else {
		// standart data display
		var id_div=el[2];
		aj_as = new TimelineLite();
	  	aj_as.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone});
	  	aj_as.add(function(){ jQuery("#inner_"+id_div).empty().append(data);});
	   	aj_as.add(function(){tbt_wait_signal_stop(el); });
	    aj_as.to("#inner_"+id_div, 1, { autoAlpha:1,ease: Linear.easeNone});
		//** OTT   aj_as.add(TweenLite.to("#inner_"+id_div, 1, { autoAlpha:1,ease: Linear.easeNone}));
	}
 console.log("success");
}
/* function tbt_ajax_as_complete(el){
	console.log(data+"complete");
} */
function tbt_ajax_as_error(el,data){
	// stop wait signal
 	tbt_wait_signal_stop(el);
	
	// ajax request error
	jQuery("#ajax_response").text(
		"ready status:"+data['readyState']+" status code:"+data['status']+" status text:"+data['statusText']
		);
	console.log(data);
}
//
// @pablo -  json_ajax general async function
// 1.0
//
// var main_url_ja = "http://192.168.0.31/dev/the_one/wp/wordpress/wp-admin/admin-ajax.php";
var main_url_ajs = "http://192.168.0.31/dev/the_one/OurBY/zx_main/zx_main_code/ajax_json.php";
 
function tbt_ajax_ajs(query){
	
	// start ajax query  
	jQuery.ajax({
		method: "POST",
		url: main_url_ajs,
		data: { rdata : query },
	    dataType: "json",
	//	beforeSend: function(){tbt_ajax_ajs_beforesend()},	
		success: function(data){tbt_ajax_ajs_success(query,data)},
		error:function(data){tbt_ajax_ajs_error(data)},
	//	complete:function(data){tbt_ajax_ajs_complete(data)}
	});

}
/* function tbt_ajax_ajs_beforesend(){ 
	console.log("send");
} */
function tbt_ajax_ajs_success(query,data){
	// ajax request success
	var i=0;
	// set vars only if don't exist (l0_xxxx)
	// get level of query
	tbt_query_level=query.split("_");
    switch(tbt_query_level[0]){
    	case "l0":
		    // level0
		    var tbt_level0_el=[query];
		    while(i<tbt_level0.length){ if(tbt_level0[i][0]==query){ return; } i++;}
			tbt_level0_el.push(data);
			tbt_level0.push(tbt_level0_el);
			console.log("pushLevel0:"+tbt_level0_el);
		break;
		case "l1": 
		    // level1
		    var tbt_level1_el=[query];
		//    while(i<tbt_level1.length){ if(tbt_level1[i][0]==query){ return; } i++;}
			tbt_level1_el.push(data);
			tbt_level1.push(tbt_level1_el);
			console.log("pushLevel1:"+tbt_level1_el);
	
		break;
		default:
			console.log("ALERT: got no level on 'tbt_ajax_ajs_success(query,data)'");
			return;
		break;
	}
  	console.log("success data");
}
/*function tbt_ajax_ajs_complete(data){
 	//TweenLite.to("#inner_"+id_div, 2, { autoAlpha:1,ease: Linear.easeNone});
	console.log( "complete");
}*/
function tbt_ajax_ajs_error(data){
 
	console.log("ALERT: ajax error on 'tbt_ajax_ajs'");
}

//
// @pablo - main_ajax sync function
// 1.0
//
var main_url_sy = "http://192.168.0.31/dev/TBT/div-elements/ajax_response.php";
 
function tbt_ajax_sy(el){
	
	// start ajax query 
	id_div=el[2];
	ajax_query=el[9];

	jQuery.ajax({
		method: "POST",
		url: main_url_sy,
		data: ajax_query,
	//	dataType: data_type,
		beforeSend: function(){tbt_ajax_sy_beforesend(el)},	
		success: function(data){tbt_ajax_sy_success(data,id_div)},
		error:function(data){tbt_ajax_sy_error(data)},
		complete:function(){tbt_ajax_sy_complete(el)}
	});

}
function tbt_ajax_sy_beforesend(el){
	// clear inner div 
	id_div=el[2];
	TweenLite.to("#inner_"+id_div, .3, { autoAlpha:0,ease: Linear.easeNone});
	jQuery("#inner_"+id_div).empty();
	// start waitsignal
 	tbt_wait_signal_start(el);
	console.log("send sy");
} 
function tbt_ajax_sy_success(data_r,id_div){
	// ajax request success
	 jQuery("#inner_"+id_div).append(data_r);
}
function tbt_ajax_sy_complete(el){
	// complete  wait signal
 	tbt_wait_signal_sy(el);
	// fade in result
	TweenLite.to("#inner_"+id_div, 1, { autoAlpha:1,ease: Linear.easeNone});
	console.log("complete sy");
}
function tbt_ajax_sy_error(data_e){
	// ajax request error
	jQuery("#ajax_response").text(
		"ready status:"+data_e['readyState']+" status code:"+data_e['status']+" status text:"+data_e['statusText']
		);
	console.log(data_e);
}

//
// @pablo - sync wait signals
//
function tbt_wait_signal_sy(el){
	// signal color
	signal_color=border_mode.split(" ");
	id_div=el[2];id_w=el[7];id_h=el[8];id_color=el[4];
	sy = new TimelineMax();sy2 = new TimelineMax();
   	sy.to( "#"+id_div , 2,{border:"1px "+id_color});
    sy.to( "#"+id_div, 4,{border:border_mode,ease: Power4.easeOut,});
 	sy2.to( jQuery("#signal_"+id_div).find(".tbt_signal_line"), 2, {backgroundColor:signal_color[1],ease: Power4.easeOut,});
  	sy2.to( jQuery("#signal_"+id_div).find(".tbt_signal_line"), 4, {backgroundColor:id_color });
}



//
// @pablo - remove element of DOM (usually call on completed animations)
//
function tbt_remove_wait_element(id)
{
	jQuery("#wait_signal_"+id).remove();
}
//
// @pablo - wait signal function
//
function tbt_wait_signal_start(el){
	
	id_div=el[2];id_w=el[7];id_h=el[8];id_color=el[4];
	// clone logo
	waitsignal=jQuery("#tbt_logo").clone().attr("id","wait_signal_"+id_div).appendTo("#inner_"+id_div); 
	// set colors
	TweenLite.set(jQuery(waitsignal).find("div").children(), {  backgroundColor:id_color});
    // get inner element and set animation
	tw_b1=jQuery(waitsignal).find(".tbt_logo_b1");tw_b2=jQuery(waitsignal).find(".tbt_logo_b2");
	// get signal element width and use to positioning
	TweenLite.set(jQuery(waitsignal), { scale:.7,autoAlpha:0});
	x_s=jQuery(waitsignal).width()/2;y_s=jQuery(waitsignal).height()/2;
	TweenLite.set(jQuery(waitsignal), { x:((jQuery("#"+id_div).width())/2)-x_s+"px", y:((jQuery("#"+id_div).height())/2)-y_s+"px"});
	TweenLite.to(jQuery(waitsignal), 1, { autoAlpha:1,ease: Linear.easeNone});
	// animate
	atw_b1 = new TimelineMax({repeat:-1});atw_b2= new TimelineMax({repeat:-1});
   	atw_b1.to(tw_b1, 5, {rotation:"-=360",ease: Circ.easeInOut});
	atw_b2.to(tw_b2, 2, {rotation:"+=360",ease: Power3.easeInOut});
  	//** OTT atw_b1.add(TweenLite.to(jQuery(tw_b1), 5, {rotation:"-=360",ease: Circ.easeInOut}));
	//** OTT atw_b2.add(TweenLite.to(jQuery(tw_b2), 2, {rotation:"+=360",ease: Power3.easeInOut}));
}
function tbt_wait_signal_stop(el){
	id_div=el[2];
	// remove wait signal
	TweenLite.to("#wait_signal_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone,onComplete:tbt_remove_wait_element,onCompleteParams:[id_div]});
 	// 	** OTT tstop.add(TweenLite.to(jQuery("#wait_signal_"+id_div), 1, { autoAlpha:0,ease: Linear.easeNone}));
 	/*	var tstop = new TimelineMax({onComplete:tbt_remove_wait_element,onCompleteParams:[id_div]});
 	tstop.to("#wait_signal_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone}); */
}
//
// @pablo - sign_div function
// 1.0
//
  
function tbt_signal_create(el){ 
 	// vars
 	id_div=el[2];id_color=el[4];
	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];
	 // if exist div with same id destroy it
	jQuery("#signal_"+id_div).remove();
	// set id
	signal_id=jQuery(document.createElement("div")).attr("id","signal_"+id_div).addClass("tbt_signal");
	 
	signal_w=60;signal_h=60;
	// check if we are on zoom mode
	if(jQuery("#"+id_div).hasClass('zoom_class')){ jQuery(signal_id).addClass('zoom_class_signal');}
	// build main div
	// get coords to set 
	sid_w_px=((id_w)*main_w)/100;sid_h_px=((id_h)*main_h)/100;
	sid_x_px=((id_x)*main_w)/100;sid_y_px=((id_y)*main_h)/100;
	sfcoord_x=Math.ceil((sid_x_px + sid_w_px) - signal_w);
	//sfcoord_x=((id_x==0)?(id_x + sid_w_px):id_x) - signal_w;
	sfcoord_y=Math.ceil((sid_y_px + sid_h_px ) - signal_h); 
 	TweenLite.set(signal_id, { opacity:0,borderRightColor:"transparent",borderLeftColor:"transparent",borderTopColor:"transparent",borderBottomColor: id_color,position:"absolute", x:sfcoord_x+"px", y:sfcoord_y+"px"});
 	 // create poligon
  	jQuery("#"+id_div).after(signal_id); 
    TweenLite.to(signal_id, 3, { opacity:1,ease: Linear.easeNone});
} 
//
// @pablo - anim_logo function
// 1.0
//
function logo(x,y,scale){
	color="#00f";
	var tbt_logo = document.createElement("div");var base1 = document.createElement("div");
	var dot = document.createElement("div");var dot1 = document.createElement("div");var line = document.createElement("div");
   	// set id 
	jQuery(tbt_logo).attr("id","tbt_logo");
	// set main base
	TweenLite.set(tbt_logo, {width: 100 , height: 100 , backgroundColor: "transparent", position:"absolute",x:x,y:y,scale:scale});
	TweenLite.set(base1, {width: 100 , height: 100   , backgroundColor: "transparent", position:"absolute" });
	// create elements
	jQuery(base1).append(line); jQuery(base1).append(dot); jQuery(base1).append(dot1);
    TweenLite.set(dot, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
    TweenLite.set(dot1, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:180});
    TweenLite.set(line, {width:100, height:1, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, force3D:true, position:"absolute", rotation:-10});
  	// append
  	jQuery("body").append(tbt_logo);jQuery(tbt_logo).prepend(base1);
	base2=jQuery(base1).clone().appendTo(tbt_logo);
	// set classes, using on wait signal
	jQuery(base1).attr("class","tbt_logo_b1");jQuery(base2).attr("class","tbt_logo_b2");
	jQuery(dot).attr("class","tbt_logo_bg");jQuery(dot1).attr("class","tbt_logo_bg"); jQuery(line).attr("class","tbt_logo_bg");  
	// animated
	tl_b1 = new TimelineMax({repeat:-1});tl_b2= new TimelineMax({repeat:-1});
   	tl_b1.to(base1, 20, {rotation:"-=360",ease: Circ.easeInOut});
	tl_b2.to(base2, 10, {rotation:"+=360",ease: Power3.easeInOut});
  	//** OTT tl_b1.add(TweenLite.to(jQuery(base1), 20, {rotation:"-=360",ease: Circ.easeInOut}));
	//** OTT tl_b2.add(TweenLite.to(jQuery(base2), 10, {rotation:"+=360",ease: Power3.easeInOut}));
 }


  function createDot(base,color)  {
        var dot = document.createElement("div");var dot1 = document.createElement("div");var line = document.createElement("div");
   	    jQuery(base).append(line); jQuery(base).append(dot); jQuery(base).append(dot1);
        TweenLite.set(dot, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
        TweenLite.set(dot1, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:180});
        TweenLite.set(line, {width:100, height:1, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, force3D:true, position:"absolute", rotation:-10});
    	
      } 

//
// @pablo - tbt_dashboard utils
//
function tbt_dashboard_el_delete(el){


}

// 
// @pablo - ajax query js interval 
//
function tbt_js_interval_query(el){

}  

/*	 function logo(){


 
	var radius = 50;
	TweenLite.set(jQuery("#logo"), {width: radius *2 , height: radius*2  , backgroundColor: "white", position:"absolute", xPercent:50, yPercent:50 });
	for(var i=0;i<=360;i=i+40){
		  
	createDot(i,radius);
	}
 	tl = new TimelineMax({repeat:-1, repeatDelay:0.25});
   //  tl.to(jQuery("#logo"), 10, {rotation:"-=360"});
     
}
  function createDot(rotation,radius)  {
        var dot = document.createElement("div");
        $("#logo").append(dot);
       // TweenLite.set(dot, {width:15, height:15, transformOrigin:(-42 + "px 0px"), x: 42, backgroundColor:"#FFF", borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
          TweenLite.set(dot, {width:15, height:15, transformOrigin:(radius +"px 0px"), x: 0,y:radius, backgroundColor:"#000", borderRadius:"50%", force3D:true, position:"absolute", rotation:rotation});
        var line = document.createElement("div");
     	$("#logo").append(line);
     	 TweenLite.set(line, {width:radius*2, height:1, transformOrigin:(radius+"px 0px"), x: 0,y:radius, backgroundColor:"#000", force3D:true, position:"absolute", rotation:rotation});
    	//TweenLite.set(line, {width:70, height:1, transformOrigin:("50px 0px"), x:0,y:50, backgroundColor:"#000", force3D:true, position:"absolute", rotation:rotation-0});
    
      } 



// vars
 	id_div=el[2];id_color=el[4];
	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];
	sborder_mode="none"; //"1px #ededed";
	// if exist div with same id destroy it
	jQuery("#signal_"+id_div).remove();
	// get div data
	signal_id= document.createElement("div");
	// poligon
	signal_pl = document.createElement("div");
	// set id
	jQuery(signal_id).attr("id","signal_"+id_div);
	jQuery(signal_id).addClass("tbt_signal");
	
	jQuery(signal_pl).attr("id","signalp_"+id_div);
	jQuery(signal_pl).addClass("tbt_signal");


	signal_w=100;signal_h=100;
	// check if we are on zoom mode
	if(jQuery("#"+id_div).hasClass('zoom_class')){ jQuery(signal_id).addClass('zoom_class_signal');}
	// build main div
	// get coords to set 
	sid_w_px=((id_w)*main_w)/100;sid_h_px=((id_h)*main_h)/100;
	sid_x_px=((id_x)*main_w)/100;sid_y_px=((id_y)*main_h)/100;
	sfcoord_x=Math.ceil((sid_x_px + sid_w_px) - signal_w);
	//sfcoord_x=((id_x==0)?(id_x + sid_w_px):id_x) - signal_w;
	sfcoord_y=Math.ceil((sid_y_px + sid_h_px ) - signal_h); 
	TweenLite.set(jQuery(signal_id), {width: signal_w+"px",height:signal_h+"px",border:sborder_mode, backgroundColor: "transparent", position:"absolute", x:sfcoord_x+"px", y:sfcoord_y+"px"});
	
	TweenLite.set(jQuery(signal_pl), { borderRightColor:"transparent",borderLeftColor:"transparent",borderTopColor:"transparent",borderBottomColor: id_color,position:"absolute", x:sfcoord_x+"px", y:sfcoord_y+"px"});
	jQuery(signal_pl).addClass('tbt_signalp');
	// create and append dot/lintes
	a_dot = document.createElement("div"); b_dot = document.createElement("div"); s_line = document.createElement("div");
 	jQuery("#"+id_div).after(signal_id);jQuery(signal_id).append(s_line);jQuery(signal_id).append(a_dot); jQuery(signal_id).append(b_dot);
 	// create poligon
 	pl_el = document.createElement("polygon");
 	jQuery(pl_el).attr("points","100,0 100,100 0,100").attr("style","fill:red");
 	jQuery("#"+id_div).after(signal_pl);//jQuery(signal_pl).append(pl_el);


 	// set
 	TweenLite.set(s_line,  {width:100, height:1,opacity:0, transformOrigin:("50px 0px"), x: 14,y:60, backgroundColor:id_color, force3D:true, position:"absolute", rotation:-43});
 	TweenLite.set(a_dot, {width:15, height:15, opacity:0 ,transformOrigin:("50x 0px"), x: 15,y:92, backgroundColor:id_color, borderRadius:"50%", force3D:true, position:"absolute", rotation:-45});
    TweenLite.set(b_dot, {width:15, height:15, opacity:0,transformOrigin:("50px 0px"), x:15,y:51 , backgroundColor:id_color, borderRadius:"50%", force3D:true, position:"absolute", rotation:-205});
    // set class
    jQuery(s_line).attr("class","tbt_signal_line"); 
    //animated
    TweenLite.to(a_dot, 1, { opacity:1,ease: Linear.easeNone});
  	TweenLite.to(b_dot, 1, { opacity:1,ease: Linear.easeNone});
    TweenLite.to(s_line, 3, { opacity:1,ease: Linear.easeNone});
} 

      */
</script>
</body>