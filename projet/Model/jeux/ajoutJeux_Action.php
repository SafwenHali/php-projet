<?php
$id=$_POST['ID'];
$name=$_POST['Name'];
$p=0; $t=0;

if(!empty($_POST["check"]))
   { foreach($_POST["check"] as $row)
    {
        if($row=="joueur")
        {$p=1;}
        if($row=="equipe")
        {$t=1;}
    }
    }

require_once('../jeux.php');
$j=new Jeux();
$j->insertJeux($id,$name,$t,$p);
header('Location:../../index.html');
?>

