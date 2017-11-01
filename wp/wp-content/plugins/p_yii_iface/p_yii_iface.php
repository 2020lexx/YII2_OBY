<?php
/**
* Plugin Name: 0x YII WP Interface
* Description: YII WP Interface with this you can use all function on both programms
* Version: 1.0
* Author: @pablo

use shorcut to access yii framework

**/
 
 function xgs_test_sc(){

    
    Yii::app()->session['var'] = get_role('administrator') ;


    echo Yii::getVersion(); 
    echo Yii::app()->runController('_crawler_iface/Index');
}

//add_shortcode('xgs-shortcut', 'xgs_shortcode');
add_shortcode('xgs-shortcut', 'xgs_test_sc');

?>