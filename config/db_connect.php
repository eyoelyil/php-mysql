<?php 
    //Use MySQLi to connect to the db
    $conn = mysqli_connect('localhost', 'joel', 'password', 'pizza');

//check for the connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>