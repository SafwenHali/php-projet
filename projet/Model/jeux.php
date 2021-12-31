<?php
include_once("model.php");
class Jeux extends Model
{
    public $idJeux, $nomJeux, $team, $player;

    function __construct($ID="", $Name="", $T="", $P="")
    {
        $this->idJeux = $ID;
        $this->nomJeux = $Name;
        $this->team = $T;
        $this->player = $P;
        parent::__construct();
    }
    
    function insertJeux($idJeux, $nomJeux, $team, $player)
    {
        $query = "INSERT INTO jeux(idJeux, nomJeux, team, player)values (?,?, ?, ?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idJeux, $nomJeux, $team, $player));
    }

    function deleteJoueur($idJoueur)
    {
        $query = "DELETE FROM jeux WHERE idJeux=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idJeux));
    }

    function listJeux()
    {
        $query = "SELECT * FROM jeux";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    
    function listJeuxE()
    {
        $query = "SELECT * FROM jeux WHERE team=1";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }}
    ?>