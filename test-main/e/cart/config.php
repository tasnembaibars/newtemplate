<?php
 $host="localhost";
 $db="e_commerce";
 $account="root";
 $pass="";
 $dsn = "mysql:host=$host;dbname=$db";

 try {
    $pdoconnect = new PDO($dsn,$account,$pass);
    $pdoconnect ->setAttribute(PDO ::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
    
   // echo 'conn successfuly connected';
 } catch (PDOExeption $err) {
    echo $err->getMessage();
 }

?>