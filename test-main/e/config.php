<?php
$servername="localhost";
$username="root";
$password="";

$dsn="mysql:host=$servername;dbname=e_commerce";


try {
    //code...
    $db=new PDO($dsn,$username,$password);
    
} catch (PDOException $e) {
    echo "Error: " ;
  
}


