<?php
        require_once './traitements/fonctions.php';

        if(isset($_GET['action']))
    {

        if($_GET['action']=='connexion')
        {
            $data=$_POST;
              pageConnexion($data);
        }
        else if($_GET['action']=='inscription')
        {
            require_once './pages/inscription.php';
        }
    }
    else
    {
            require_once './pages/template.php';
    }

        /*session_start();
            require_once('./traitements/fonctions.php');

        if(isset($_GET['lien'])) {
            switch($_GET['lien']){ 
                case "accueil":
                    require_once('./pages/accueil.php'); 
                break;    
                case "jeux":
                    require_once('./pages/jeux.php');
                break;    
                   
            }
        }else{
            if(isset($_GET['statut']) && $_GET['statut']==="logout"){ 
                deconnexion();
            }
            require_once('./pages/connexion.php');
        }*/
?>
        