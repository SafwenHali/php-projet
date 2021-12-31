<?php
include_once("model.php");
class Equipe extends Model
{
    public $idEq, $nomEquipe, $typeJeux;

    function __construct($ID="", $Name="", $Type="")
    {
        $this->idEq = $ID;
        $this->nomEquipe = $Name;
        $this->typeJeux = $Type;
        parent::__construct();
    }
    function insertEquipe($idEq, $nomEquipe, $typeJeux)
    {
        $query = "INSERT INTO equipe(idEq,nomEquipe,typeJeux)values (?, ?, ?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idEq, $nomEquipe, $typeJeux));
    }

    function listEquipe()
    {
        $query = "SELECT * FROM equipe";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }}
?>