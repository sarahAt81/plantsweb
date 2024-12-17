<?php
//Variables
$Svr_Name="localhost";
$DB_Username = "root";
$DB_Password = "";
$DB_Name = "project";
//Create Connection
$connection = new mysqli($Svr_Name,$DB_Username,$DB_Password,$DB_Name);
//Check if the connection is success
if(mysqli_connect_error()){
    die("Connection Faild".mysqli_connect_error());
}

//closed the connection after checking



?>
