<?php

class Utilisateur {

    protected $_idAdulteResponsable;
    protected $_nom;
    protected $_prenom;
    protected $_idVille;
    protected $_login;
    protected $_motDePasse;
    protected $_adresseMail;
    protected $_rang;

    public function __construct($idAdulteResponsable,$nom,$prenom,$idVille,$login,$motDePasse,$adresseMail,$rang)
    {
        $this->_idAdulteResponsable = $idAdulteResponsable;
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_idVille = $idVille;
        $this->_login = $login;
        $this->_motDePasse = $motDePasse;
        $this->_adresseMail = $adresseMail;
        $this->_rang = $rang;
    }

    public function password(){
        return $this->_motDePasse;
    }

    public function login(){
        return $this->_login;
    }

    public function rang(){
        return $this->_rang;
    }



}
