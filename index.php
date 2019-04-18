<?
if(empty($_GET)) exit("GET запроса нету");
require_once('tests/autoloader.php');

require_once('settings.config.php');          // Define db configuration arrays here
require_once('DBConnection.php');             // Include this file
