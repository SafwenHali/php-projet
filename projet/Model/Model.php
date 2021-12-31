<?php
abstract class Model {
protected $pdo;
function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestionTournoi";
    
    try {
        $this->pdo=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
      }
}
function __destruct(){
 $this->pdo=null;
}
}?>