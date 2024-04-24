<?php
    $servername = "localhost";
    $username = "root"; //default
    $password = ""; //default no password
    $db_name = "login";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306); //default port
    if($conn->connect_error) {
        die("Sorry connection has failed".$conn->connect_error);
    }
    echo "";
?>

