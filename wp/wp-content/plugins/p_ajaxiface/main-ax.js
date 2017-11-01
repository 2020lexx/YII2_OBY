/**
* @package Ajax Quering System
* @version 1.6
* Author: @pablo
* Version: 1.6
*
*/
var tbt_ax_query_e = [];
var tbt_ax_query = [];
var data;

jQuery(document).ready( function() {

// array(tbt_ax_post_value,div_id,interval_sec) //

tbt_ax_query_e = ["post_1","posting1","",10];
tbt_ax_query.push(tbt_ax_query_e);
tbt_ax_query_e =["post_2","posting2","data",10] ;
tbt_ax_query.push(tbt_ax_query_e);




});
// interval setting //
function tbt_ax_set(set){

}

// send ajax // 
function tbt_ax_fnc(id){ 

                jQuery.post(
                               tbt_ax_send.tbt_ax_url, 
                                {
                                'action': 'tbt_ax_fnc',
                                'tbt_ax_post':id[0] + "#" + id[2],
                               },
                               function(tbt_ax_data){
                                               jQuery("#"+id[1]).html(tbt_ax_data);
                               }
                ); 
}

function submit_me(){

// console.log(ajax_query[0] );
tbt_ax_fnc(tbt_ax_query[0]);
/*
jQuery.post(
                the_ajax_script.ajaxurl, 

                jQuery("#theForm").serialize(),
                function(response_from_the_action_function){
                               jQuery("#response_area").html(response_from_the_action_function);
                }
                );*/
}
