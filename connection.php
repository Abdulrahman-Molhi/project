<?php
$host='localhost';
$username='abdu';
$password='774435130';
$dbname = "project";
$con=mysqli_connect($host,$username,$password,"$dbname");
if(!$con)
{
die('Could not Connect MySql Server:' .mysql_error());
}
?>
