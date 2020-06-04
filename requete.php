<?php 
    //ouverture d'une session de connexion à la base de donnée quizz_sa_bd

        function connexion()
        {
            $connect="";
            try
            {
                $connect =new PDO( 'mysql:host=localhost;dbname=quizz_sa_bd', 'root', '');

                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $connect;
            }
            catch(PDOException $e)
            {
                die('la connexion a échouée !');
            }
        }

        function userConnexion($pseudo, $pwd)
        {
            $connect=connexion();

            // selection de la table user

            $requete = 'SELECT * FROM utilisateur WHERE pseudo =:pseudo AND pwd =:pwd';
            
            $statement = $connect->prepare($requete);

            // ecriture des paramere

            $statement->execute(
                array(
                    'pseudo'=> $pseudo, 
                    'pwd'   => $pwd 
                )   
            );
                
            return $statement;
        }
