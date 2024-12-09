<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect( $servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql="CREATE DATABASE IF NOT EXISTS blood_bank";

    if(!mysqli_query($conn, $sql)){
        echo "Error creating database: " . mysqli_error($conn);
    }

    $sql="use blood_bank";
    mysqli_query($conn,$sql);

    $sql="CREATE TABLE IF NOT EXISTS users(
            full_name VARCHAR(50) ,
            blood_group VARCHAR(5) ,
            gender VARCHAR(10),
            phone VARCHAR(15) ,
            birthday  varchar(15) ,
            last_donation varchar(15),
            division varchar(30),
            district VARCHAR(30),
            police_station VARCHAR(30)
        )";

    if(!mysqli_query($conn, $sql)){
        echo "Error creating table: " . mysqli_error($conn);
    }
?> 