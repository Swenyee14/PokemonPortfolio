<?php

    $conn = mysqli_connect("localhost", "root", "", "blog");
    
    if(!$conn) {
        echo "<h1>Data not linking with blog database</h1>";
    }

    $sql = "SELECT * FROM data"; // this selects everything from the data in "blog" database
    $query = mysqli_query($conn, $sql); // stores data in var query

    if(isset($_REQUEST["post"])) {
        $title = $_REQUEST["title"];
        $message = $_REQUEST["content"]; //for some reason it does not like "message"

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$message')";
        mysqli_query($conn, $sql); //adds data to database

        header("Location: viewBlog.php?info=added"); //go here and add query
        exit();
    }

?>