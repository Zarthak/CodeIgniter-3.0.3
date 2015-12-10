<?php

class Activite {

    protected $_idActivite;
    protected $_nomActivite;
    protected $_descriptionActivite;
    protected $_idTheme;

    public function __construct($idActivite,$nomActivite,$descriptionActivite,$idTheme){
        $this->_idActivite=$idActivite;
        $this->_nomActivite = $nomActivite;
        $this->_descriptionActivite = $descriptionActivite;
        $this->_idTheme = $idTheme;
    }
    public function idActivite(){
        return $this->_idActivite;
    }
    public function nom(){
        return $this->_nomActivite;
    }
    public function description(){
        return $this->_descriptionActivite;
    }
    public function idTheme(){
        return $this->_idTheme;
    }
}