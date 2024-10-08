<?php 

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=unix_store", "root", "");

if($connect === false){
    die("ERROR : Could not connect". mysqli_connect_error());
}

?>