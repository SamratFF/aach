<?php

// Making connection to database
$server_name = "localhost";
$server_username = "root";
$server_password = "";
$dbname = "aach";       //Enter your database name here

$db_table_name = "users";        //Enter your database table name here

//Connecting to database
$con = mysqli_connect($server_name, $server_username, $server_password, $dbname);

//Checking if connection is successful or not
if (!$con) {
     die("Connection was not successful due to this error: <br>" . mysqli_connect_error());
} else {
     // echo ("Connection was successful !");
}



?>

<!-- DONE -->


<!-- // Inserting data to database
$sql = "INSERT INTO `$db_table_name` (`Name`, `Class`, `Section`) VALUES ('test', '8', 'E')";
$result = mysqli_query($con, $sql);

if (!$result) {
     die("The data was not inserted successfully due to this error: " . mysqli_error($con));
} else {
     echo ("The data was successfully inserted!");
} -->