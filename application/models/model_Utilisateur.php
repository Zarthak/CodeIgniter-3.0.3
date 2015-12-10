<?php

class model_Utilisateur extends CI_Model
{
    protected static $_PDO;


    public function __construct()
    {
        parent::__construct();
        require_once("Utilisateur.php");
        SELF::$_PDO = $this->load->database('pdo', true);
    }

    static function getById($id){
        $stmt = SELF::$_PDO->query("SELECT * FROM adulte WHERE idAdulteResponsable=".$id);
        if($stmt->result()){
            $data= $stmt->row_array();
            return new Utilisateur(
                $data['idAdulte'],
                $data['nom'],
                $data['prenom'],
                $data['idVille'],
                $data['login'],
                $data['motDePasse'],
                $data['adresseMail'],
                $data['rang']
            );
        }
    }

    static function getByLogin($login){
        $stmt = SELF::$_PDO->query("SELECT * FROM adulte WHERE login='".$login."'");
        if($stmt->result()){
            $data= $stmt->row_array();
            return new Utilisateur(
                $data['idAdulte'],
                $data['nom'],
                $data['prenom'],
                $data['idVille'],
                $data['login'],
                $data['motDePasse'],
                $data['adresseMail'],
                $data['rang']
            );
        }
    }



}