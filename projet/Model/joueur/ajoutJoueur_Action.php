<?php
require_once('../joueur.php');
$j=new Joueur();
$j->insertJoueur($_POST['ID'],$_POST['firstName'],$_POST['lastName'],$_POST['birthDay'],$_POST['phoneNumber'],$_POST['Equipe']);
header('Location:../../index.html');
?>

