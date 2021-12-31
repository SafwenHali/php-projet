<?php
require_once('../joueur.php');
$j=new Joueur();
$j->insertJoueur(isset($_POST['ID']),isset($_POST['firstName']),isset($_POST['lastName']),
                isset($_POST['birthDay']),isset($_POST['phoneNumber']),isset($_POST['Equipe']));
header('Location:../../index.html');
?>

