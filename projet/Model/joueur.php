<?php
include_once("model.php");
class Joueur extends Model
{
    public $idJoueur, $nomJoueur, $pnomJoueur, $dateNaisJoueur, $telJoueur, $equipeJ;

    function __construct($ID="", $firstName="", $lastName="", $birthDay="", $phoneNumber="", $eqJ="")
    {
        $this->idJoueur = $ID;
        $this->nomJoueur = $firstName;
        $this->pnomJoueur = $lastName;
        $this->dateNaisJoueur = $birthDay;
        $this->telJoueur = $phoneNumber;
        $this->equipeJ = $eqJ;
        parent::construct();
    }

    function insertJoueur($idJoueur, $nomJoueur, $pnomJoueur, $dateNaisJoueur, $telJoueur, $equipeJ)
    {
        $query = "INSERT INTO joueur(idJoueur,nomJoueur,pnomJoueur,dateNaisJoueur,telJoueur,equipeJ)values (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idJoueur, $nomJoueur, $pnomJoueur, $dateNaisJoueur, $telJoueur, $equipeJ));
    }

    function deleteJoueur($idJoueur)
    {
        $query = "DELETE FROM joueur WHERE idJoueur=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idJoueur));
    }

    function listJoueur()
    {
        $query = "select * from joueur";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }