<?php

$host = "localhost";
$user  = "root";
$pass = "";

//create connection

$conn = mysqli_connect($host, $user, $pass);

//check connection

if (!$conn)
{
    die('could not connect:'.mysqli_error());
}
else{
    echo 'connected successfully <br/>';
}
//create database

$sql = 'CREATE DATABASE firstdb';
if(mysqli_query($conn , $sql)){
    echo 'Database firstdb created successfully.';
}
else{
    echo 'Sorry database creation failed'. mysqli_error($conn);
}

// //create table
// $sql = "CREATE TABLE MyGuests(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) == TRUE){
//     echo 'table created successfully';
// }
// else{
//     echo 'Error creating table:' . $conn->error;
// }

mysqli_close($conn);
?>
