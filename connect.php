<?php

$host="localhost";
$user="root";
$pass="";
$db="Register";
$conn=new mysqli($host,$user,$pass,$db);
if(4conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>