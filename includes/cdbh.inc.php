<?php


// Variables for connecting to the local server
// $servername = "localhost";  
// $dbUsername = "root"; 
// $dbPassword = ""; 
// $dbName = "portfoliodb"; 

$servername = "sql104.epizy.com"; 
$dbUsername = "epiz_25980040"; 
$dbPassword = "atD5fxel9s"; 
$dbName = "epiz_25980040_portfolio"; 

//using myswli_connect to create a detabase connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);  

//Checking for connection failure
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}