<?php 
    $dbUrl = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "konser";

    $con = mysqli_connect($dbUrl, $dbUser, $dbPass, $dbName);
    if(!$con) {
        die("Connection Failed : ".mysql_connect_error());
    }

?>