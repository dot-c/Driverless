<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "driverless";

//Databasse connection
$connection = mysqli_connect($hostname,$username,$password,$dbname);

//Check if connected to database
if(!$connection){
    
    die("Failed to connect to database: ".mysqli_connect_error());

}

//Selecting the created database
$connection->select_db($dbname);

?>