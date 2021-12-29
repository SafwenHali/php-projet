<?php
include_once("modele.php");
class Client extends Modele
{
    public $idJoueur, $nomJoueur, $pnomJoueur, $dateNaisJoueur, $telJoueur;

    function __construct($ID="", $firstName="", $lastName="", $birthDay="", $phoneNumber=""){
        $this->idJoueur = $ID;
        $this->nomJoueur = $firstName
        $this->pnomJoueur = $lastName
        $this->dateNaisJoueur = $birthDay
        $this->telJoueur = $phoneNumber
        parent::construct();
    }

    function insert($ID, $firstName, $lastName, $birthDay, $phoneNumber){