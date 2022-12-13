<?php

session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="data_lab";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die(mysqli_error($conn));
    }
?>



    