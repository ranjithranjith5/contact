<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
   die("connection failed:".mysql_error());
}
?>