<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("");

$con = mysqli_connect("localhost", "root", "123456", "online_store"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>