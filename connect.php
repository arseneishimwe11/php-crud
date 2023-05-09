<?php
    $host = "localhost";
    $db_user_name = "root";
    $db_password = "";
    $database = "studentdb";

// Create a connection
 $connect = mysqli_connect($host, $db_user_name, $db_password, $database);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
