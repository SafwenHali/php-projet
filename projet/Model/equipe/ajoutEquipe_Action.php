<?php
$id=$_POST['ID'];
$name=$_POST['Name'];
$jeux=$_POST['Jeux'];

require_once('../equipe.php');
$E=new Equipe();
$E->insertEquipe($id,$name,$jeux);
header('Location:../../index.html');
?>

