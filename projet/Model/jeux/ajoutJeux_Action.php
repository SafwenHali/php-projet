<?php
require_once('../jeux.php');
$j=new Jeux();
$j->insertJeux($_POST['ID'],$_POST['Name'],$_POST['T'],$_POST['P']);
header('Location:../../index.html');
?>

