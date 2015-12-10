<?php

class gestionEnfant extends CI_Controller
{


    public function index()
    {
        $this->load->view('gestionEnfant');
    }

    public function ajoutEnfant()
    {
        $this->load->view('ajoutEnfant');
    }
}