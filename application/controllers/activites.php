<?php

class activites extends CI_Controller{


    public function index()
    {
        $this->load->view('gestionActiviteIndex');
    }

    public function gestionActivites()
    {
        $this->load->model("model_Activite");
        $this->load->model("model_Theme");
        $data["listActivite"] = model_Activite::getAll();
        $this->load->view('gestionActivites',$data);
    }

    public function ajoutActivite(){
        $this->load->model("model_Theme");
        $this->load->model("model_Activite");
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                $data['themes'] = model_Theme::getAll();
                $this->load->view("ajoutActivite",$data);
                break;
            case 'POST':
                if($_POST['idTheme']==-1) { // Theme inexistant
                    if (model_Theme::exist($_POST['nomTheme'])) { // rediriger sur la page du formulaire
                        $_SESSION["messagee"]="Le theme existe déja";
                        redirect(base_url()."index.php/activites/gestionActivites");// ---------------------
                        unset($_SESSION["messagee"]);
                        break;
                    }
                    else{ // créer le theme puis l'activite
                        $id=model_Theme::create($_POST['nomTheme']);
                        $x=model_Activite::create($_POST['nomActivite'],$_POST['descriptionActivite'],$id);
                        $_SESSION["messagee"]="Insertion effectuée avec succès";
                        redirect(base_url()."index.php/activites/gestionActivites");
                        unset($_SESSION["messagee"]);
                        break;
                        }
                }else { // Theme existe
                    model_Activite::create($_POST['nomActivite'],$_POST['descriptionActivite'],$_POST['idTheme']);
                    $_SESSION["messagee"]="Insertion effectuée avec succès";
                    redirect(base_url()."index.php/activites/gestionActivites");
                    unset($_SESSION["messagee"]);
                    break;
                }
        }
    }

    public function modifierActivite(){
        $this->load->model("model_Theme");
        $this->load->model("model_Activite");
        switch($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $data['themes'] = model_Theme::getAll();
                $data['activite']= model_Activite::get($_GET["id"]);
                $this->load->view("modifierActivite",$data);
                break;
            case 'POST':
                $x=model_Activite::save($_POST['idActivite'],$_POST['nomActivite'],$_POST['descriptionActivite'],$_POST['idTheme']);
                redirect(base_url()."index.php/activites/gestionActivites");
                break;
        }
    }

    public function suppActivite(){
        $this->load->model("model_Activite");
        model_Activite::delete($_POST['idSuppActivite']);
    }
}