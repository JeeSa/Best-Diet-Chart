<?php
$server="localhost";
$user="root";
$password="";
$database_name="diet_chart";
$con=new mysqli($server,$user,$password,$database_name) or die("fail");
global $con;
?>