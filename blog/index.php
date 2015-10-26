<?php
header("Content-Type:text/html;charset=utf-8");
define('APP_DEBUG',true);
define("CSS_PATH",'/blog/home/public/css');
define('IMG_PATH','/blog/home/public/img');
define('ADMIN_CSS_PATH','/blog/admin/public/css');
define('ADMIN_SKIN_PATH','/blog/admin/public/skin');
define('ADMIN_LIB_PATH','/blog/admin/public/lib');
define('ADMIN_IMG_PATH','/blog/admin/public/img');
define('ADMIN_JS_PATH','/blog/admin/public/js');
define('HOME_JS_PATH','/blog/home/public/js');
define('HOME_FONT_PATH','/blog/home/public/fonts');
define('HOME_CSS_PATH','/blog/home/public/css');
define('HOME_IMG_PATH','/blog/home/public/img');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('THINK_PATH',ROOT.'/blog/ThinkPHP/');
require THINK_PATH.'ThinkPHP.php';
//var_dump(get_defined_constants()) ;


