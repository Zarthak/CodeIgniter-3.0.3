<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Gestion du centre périscolaire</title>
    <link rel="stylesheet" href="<?=base_url(); ?>/assets/css/styleBase.css" type="text/css">
    <script src="<?=base_url(); ?>/assets/js/js.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<header>
    <img src="<?=base_url(); ?>/assets/img/banderole_1.jpg" id="img" />
    <h1>Centre périscolaire de Dasle</h1>
    <nav>
        <ul>
            <li><a href="<?=base_url(); ?>">Accueil</a></li>
            <?php
            if(isset($_SESSION["login"]) && isset($_SESSION['rang'])){
                if($_SESSION['rang']!=0) {
                    print("<li><a href='enfants.php'>Mes enfants</a></li>");
                    print("<li><a href='compte.php'>Mon compte</a></li>");
                }
                else{
                    print("<li><a href='enfants.php'>Gestion Parents</a></li>");
                    print("<li><a href='".base_url()."index.php/gestionEnfant'>Gestion Enfants</a></li>");
                    print("<li><a href='".base_url()."index.php/activites'>Gestion Activité</a></li>");
                }

                print("<li><a href='".base_url()."index.php/welcome/deconnexion'>Déconnexion</a></li>");
            }
            else {
                print("<li ><a href ='" . base_url()."index.php/welcome/connexion' > Connexion </a ></li >");
                }
            ?>
        </ul>
    </nav>
</header>