<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/toy/app/config/variable.php');

$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($db->connect_error){
    die("Connect failed: ".$db->connect_error);
}

$t = "test";

?>