<?php
require_once './data/requete.php';
//session_start();

    function pageConnexion($post)
    {

        $pseudo = $post['pseudo'];
        $pwd    = $post['pwd'];

        $result = userConnexion($pseudo, $pwd);
        
        $result_array = $result->fetch();
        if($result_array !== false)
        {

          if($result_array['profil']=="admin")
          {

            include './pages/accueil.php';
          }
          else
          {
            if($result_array['profil']=="joueur"){

              require_once './pages/jeux.php';
            }
          }
        }
        else
        {
          require_once './pages/template.php';
          echo "Le pseudo ou le password est incorrect";
        }

    }

    
    /*function deconnection(){
      //Destruction des données utlisateur
      session_destroy();
      unset( $_SESSION['userConnect']);
       echo "logout";
   }
  
   function is_connect(){
       if(isset($_SESSION['userConnect'])){
           return true;
       }else{
          return false;
       }
   }*/
        
?>