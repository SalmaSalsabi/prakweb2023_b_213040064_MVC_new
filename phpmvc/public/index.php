<?php
if( !session_id() ) session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

require_once "../app/init.php";

$app = new App;

?>