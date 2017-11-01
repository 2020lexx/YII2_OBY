/*

 @pablo
 level 1 scripts

*/
//
// @pablo - scroll into div
//
function tbt_div_scroll(div){

 }  

jQuery(document).ready( function() {

//
// @pablo - get div over mouse
//
var zoom_sw = 0;
var zoom_before = 0;
var zoom_change = 0;
var zoom_check = false;

var  dw_tween ;
var  up_tween ; 
var div_events='click mouseover mousedown mouseup dblclick mouseenter mouseleave mousewheel DOMMouseScroll';
jQuery(document).on(div_events, '.div_common', function(e) {
   	div_el=jQuery(e.currentTarget).attr("id");
   	div_event=e.type;
 
   	switch (div_event){

   		// mouse wheel scroll
   		case "mousewheel":
   		case "DOMMouseScroll":
       var actual_pos=jQuery("#"+div_el).scrollTop();
       var hidden_height=jQuery("#"+div_el).height();
       console.log(div_el +"->"+actual_pos+"-"+hidden_height);
			 //alternative options for wheelData: wheelDeltaX & wheelDeltaY
			 if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta<0) {     
			   //scroll down  

          if(actual_pos>=hidden_height){ 
            console.log("bottom");
          } else {
            // check if not running
            if(!dw_tween){dw_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos+100}, ease:Power2.easeOut}); console.log("init");}
            if(!dw_tween.isActive()){ dw_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos+100}, ease:Power2.easeOut}); console.log("ex"); }
              
          }
			  } else {
			    //scroll up
			    console.log('Up');
          if(actual_pos<=0){ 
            console.log("top");
          } else { 
             // check if not running
            if(!up_tween){up_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos-100}, ease:Power2.easeOut});}
            if(!up_tween.isActive()){ up_tween = TweenLite.to("#"+div_el,1, {scrollTo:{y:actual_pos-100}, ease:Power2.easeOut});  }
          
          }
			  }
			  //prevent page fom scrolling
  			 return false;
      break;
     case "dblclick":
        // zoom
        // check if is clicked a zoomed div
        if(jQuery("#"+div_el).hasClass('zoomed_class')){ return;}
        // call fnc
        tbt_div_zoom(div_el,"","on");
     break;
     case "mousedown":
       console.log("mouseDown");
         zoom_sw = 0;
       zoom_check = true;
        // get mouse coords
    /*  jQuery( document ).on( "mousemove", function( event ) {
            // right
            if(event.pageX>zoom_before){ 
                zoom_direc=1;
                if(zoom_change==1){
                  // dir changed
                  zoom_sw=zoom_sw+zoom_direc;                 
                  zoom_change=0;
                  console.log("zoom_change sw"+zoom_sw);
                }
                // update
                zoom_before=event.pageX;
            } else if(event.pageX<zoom_before){
                zoom_direc=-2;
                if(zoom_change==0){
                  // dir changed
                  zoom_sw=zoom_sw+zoom_direc;                 
                  zoom_change=1;
                  console.log("zoom_change sw"+zoom_sw);
                }
                // update
                zoom_before=event.pageX;
            }
          });*/
      break;
      case "mouseup":
        zoom_check = false;
        console.log("mouseUP");
        // done zoom, check
        console.log("mouseup:"+zoom_sw);
        zoom_sw = 0;


   		break;   
   	}
    
});

//
//  @pablo - zoom 
//
/*jQuery( document ).on( "mousemove", function( event ) {
   // console.log("mouseMove: "+event.pageX+" / "+zoom_before);
   if(!zoom_check){ return;}
            // right
            var zoom_direc;
            if(event.pageX>zoom_before){ 
                zoom_direc=1;
                console.log("->");
                if(zoom_change==1){
                  // dir changed
                  zoom_sw=zoom_sw+zoom_direc;                 
                  zoom_change=0;
                  console.log("zoom_change sw"+zoom_sw);
                }
                // update
                zoom_before=event.pageX;
            } else if(event.pageX<zoom_before){
                zoom_direc=-2;
                console.log("<-");
                if(zoom_change==0){
                  // dir changed
                  zoom_sw=zoom_sw+zoom_direc;                 
                  zoom_change=1;
                  console.log("zoom_change sw"+zoom_sw);
                }
                // update
                zoom_before=event.pageX;
            }
          });
 
*/

});
/*jQuery("#tbt_a").bind('mousewheel', function(e){
    if(e.originalEvent.wheelDelta /120 > 0) {
        alert('up');
    }
    else{
        alert('down');
    }
});
*/