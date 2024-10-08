<?php
$host="localhost";
$userName="root";
$password="";
$db="unix_store";

$con= mysqli_connect($host,$userName,$password,$db);
if(mysqli_connect_error()){
    die("Connection Unsuccessfull".mysqli_connect_error());
}

?>