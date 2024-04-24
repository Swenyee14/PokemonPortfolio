<?php
    include("link.php");
    if(isset($_POST['button'])){  //isset checks whether or not the vars exist once submit is hit
        $username = $_POST['username']; //takes/extracts username from input field of the username
        $password = $_POST['password']; //takes/extracts password from input field of the password

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql); //stores result after checking the data in database
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC); //converts/stores the result as an array in $data
        $num = mysqli_num_rows($result); //stores how many rows are in the data

        if($num == 1) {
            session_start(); //starts a session
            $_SESSION["loggingIn"] = true; //
            header("Location:blog.php"); //goes to this page when correct
        }
        else { //pop up msg when failed details
            echo '<script>
                window.location.href = "login.php" 
                alert("Login has failed. Incorrect username and/or password") 
            </script>';
        }
    }
?>