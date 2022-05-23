<?php
/** @var $pdo \PDO */
require_once "../database/database.php";
$id=$_POST['id'] ?? null;
if(!$id){
    header("location: index.php");
    exit;
}

$statement=$pdo->prepare("DELETE FROM users WHERE user_id=:id"); 
$statement->bindValue(":id",$id);
$statement->execute();
header("location:../users.php");