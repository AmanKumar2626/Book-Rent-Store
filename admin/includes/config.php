<?php

$servername = "localhost";
$dbusername = "root";
$dbpswd = "";
$database = "book-store";

$conn = new mysqli($servername,$dbusername,$dbpswd, $database);

if(!$conn){
       die("Database connection error".$conn->connect_error());
}

?>