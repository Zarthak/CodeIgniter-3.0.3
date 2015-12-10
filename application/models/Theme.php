<?php

class Theme {
    protected $_idTheme;
    protected $_nomTheme;

    public function __construct($idTheme,$nomTheme){
        $this->_idTheme = $idTheme;
        $this->_nomTheme = $nomTheme;
    }

    public function id(){
        return $this->_idTheme;
    }

    public function nom(){
        return $this->_nomTheme;
    }

}