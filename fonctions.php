<?php
require_once './data/requete.php';

    function pageConnexion($post)
    {
        $pseudo = $post['pseudo'];
        $pwd    = $post['pwd'];
        //var_dump($pseudo);
        $result = userConnexion($pseudo, $pwd);
        
        $result_array = $result->fetch();
        if($result_array !== false)
        {

          if($result_array['profil']=="admin")
          {
            //echo " on est la addmin ";
            include './pages/accueil.php';
          }
          else
          {
            //  require_once './pages/jeux.php';
          }
        }
        else
        {
            echo "Le pseudo ou le password est incorrect";
        }

    }

    //Verification de l'etat de la connexion
    function is_connect(){
      if(!isset($_SESSION['statut'])){ 
        header("location:index.php");
      }
    }//fonction de deconnexion
    function deconnexion(){
          unset($_SESSION['pseudo']);
          unset($_SESSION['statut']);
          session_destroy();
    }
?>