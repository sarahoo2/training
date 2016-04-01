<?php
$con= new mysqli('localhost','root','','hellokittie');
if($con->connect_error)
{
  die("Connection failed:". $con->connect_error);
}
echo 'Connected successfully';

$db_selected= mysqli_select_db($con,'hellokittie');

if(!$db_selected)
{
  die('Cannot use Kittie dabase'.mysql_error());
}
?>
