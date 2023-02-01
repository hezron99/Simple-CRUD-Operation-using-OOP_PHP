<?php 
include 'model.php';

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";
    try {
        
        $dsn = new PDO("mysql:host=$host;dbname=$dbname;user=$username;password=$password;");
        $dsn->getAttribute(PDO::ATTR_ERRMODE);
        
       

    }catch(PDOException  $e){
        echo "Database connection",$e->getMessage();
    }
$db = new db($dsn);

?>