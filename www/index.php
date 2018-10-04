<?php 
define("APP_PATH", dirname(dirname(__FILE__)));
//loading controllers path
require  APP_PATH. "/controllers/Admin.php";
require  APP_PATH. "/controllers/About.php";
require  APP_PATH. "/controllers/Categories.php";
require  APP_PATH. "/controllers/Properties.php";
require  APP_PATH. "/controllers/Logs.php";
require  APP_PATH. "/controllers/Blog.php";
require  APP_PATH. "/controllers/utils.php";
#load routes
require APP_PATH."/route/router.php";



 ?>