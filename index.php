<?php
/**
 *
 * Copyright (c) 2017. @pablo
 *
 * Test Code
 */

define('WP_USE_THEMES', true);
 $wp_did_header = true;
 require_once('wp/wp-load.php');

// set environment
require_once(dirname(__FILE__) . '/protected/extensions/yii-environment/Environment.php');
 $env = new Environment('DEVELOPMENT');
 //$env = new Environment('PRODUCTION');

require_once(dirname(__FILE__) . '/protected/components/WordpressRouter.php');
$router = new WordpressRouter();
 
// set debug and trace level
defined('YII_DEBUG') or define('YII_DEBUG', $env->yiiDebug);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', $env->yiiTraceLevel);

// run Yii app
 //$env->showDebug(); // show produced environment configuration
require_once($env->yiiPath);
$env->runYiiStatics(); // like Yii::setPathOfAlias()

 

class YiiX extends YiiBase
{
    public static function autoload($className)
    {
        $wp_classes = array(
            'Translation_Entry',
            'Translations', 
            'NOOP_Translations',
            'POMO_Reader',
            'POMO_FileReader',
            'POMO_StringReader',
            'POMO_CachedFileReader',
            'POMO_CachedIntFileReader',
            'MO',
            'ReduxFramework_media',
            'ReduxFramework_switch',
            'ReduxFramework_color',
            'ReduxFramework_editor',
            'ReduxFramework_typography',
            'WP_Filesystem_ftpext',
            'ReduxFramework_text',
            'SitePress',
               
        );
        if(!in_array($className, $wp_classes))
            YiiBase::autoload($className);
    }
}
spl_autoload_unregister(array('YiiBase', 'autoload'));
spl_autoload_register(array('YiiX','autoload'));

 

Yii::createWebApplication($env->configWeb)->run();
 
 
 