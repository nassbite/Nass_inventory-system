<?php
// // Connect to the database
// try {
//     $conn = mysqli_connect('localhost:8080', 'root', 'test1234', 'inventory');
// } catch (\Throwable $th) {
//     die($th->getMessage());
// }

//
$host = '127.0.0.1'; 
$port = 8080; 
$username = 'root';
$password = 'test1234'; 
$database = 'inventory';

$conn = mysqli_connect($host, $username, $password, $database, $port);