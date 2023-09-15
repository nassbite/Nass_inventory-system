<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '');

// check the connection
if ($conn->connect_error){
    die ("connection failed: " . $conn->connect_error);
}
echo "connection seccessfully";

//Create Database
$sql = "CREATE DATABASE msMarushwa";
if ($conn->query($sql) === TRUE) {
    echo "database created seccessfully";
}else {
    echo "datebase error: . $conn->connect_error";
}

// sql to create table
$sql = "CREATE TABLE mauzo (
    id INT UNSIGNED AUTO_INCRIMENT PRIMARRY KEY,
    firstname VARCHAR(45) NOT NULL,
    lastname VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";

//insert data
$sql = "INSERT INTO msMarushwa(firstname, lastname, email) 
VALUE ('azizi', 'mustapha', 'azizimustapha629@gmail.com')";

if ($conn->query($sql) === TRUE){
    echo "new record created successfully";
}else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}
//multiple insert data
if ($conn->multi_query($sql) === TRUE){

}

?>

