<?php
require_once('../equipe.php');
$E=new Equipe();
$E->insertEquipe($_POST['ID'],$_POST['Name'],$_POST['Jeux']);
header('Location:../../index.html');
?>

