<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
var_dump($_GET);
}else{

    echo'problem';
}
require"config.php"; 


try {

    $sql2 = "TRUNCATE TABLE cart";
            $statement = $pdoconnect->prepare($sql2);
            $statement->execute();

} catch (PDOExeption $err) {
    echo $err->getMessage();
}


header("location:lastpage.php");

?>