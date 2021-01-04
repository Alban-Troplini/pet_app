<?php


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . 'opt' . DS . 'lampp' . DS . 'htdocs' . DS . 'pet_app');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'functions');

require_once(INCLUDES_PATH.DS."db.php");

?>