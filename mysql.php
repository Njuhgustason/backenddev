<?php
$_SERVERNaame ="localhost";
$_USERNAME = "root";
$_PASSWORD ="Mueghe,2007.";

//Create connection
$conn =new mysqli($_SERVERname,$_USERNAME,$_PASSWORD ,$database);

//check connection
if ($conn->connection_error) {
    die("connection failed:" .$conn->connection_error);
} else{
    echo "connection successful" ."<br>";
}
