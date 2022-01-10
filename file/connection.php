<?php
$servername = "127.0.0.1:53263";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>
