<?php
session_start();
$host = '127.0.0.1'; 
$port = 8080; 
$username = 'root';
$password = 'test1234'; 
$database = 'nass';

$conn = mysqli_connect($host, $username, $password, $database, $port);

 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if (empty($name) || empty($email) || empty($message)){
      echo "Please fill all the fields";
    } else{
      $stmt = $conn->prepare("INSERT INTO table_name(name, email, massage) VALUE (?, ?, ?)");
      $stmt->bind_param("sss", $name, $email, $message);
      $stmt->execute();  
      echo "Thank for comment us ,your most welcome";
      
      if(isset($_POST['add'])){
        session_destroy();
        
        header('location: seccesfully                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ');
        
      }

    }

   
  }

?>   