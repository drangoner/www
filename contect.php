<?php 
$link = mysqli_connect('localhost','root','','spider'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
$link->query("SET NAMES 'utf8'");

?>