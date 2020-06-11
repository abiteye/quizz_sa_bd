<?php 
    //ouverture d'une session de connexion à la base de donnée  abiteye_quizz_sa_bd
        function connexion()
        {
            $connect="";
            $dataBase = "quizz_sa_bd";
            try
            {
                $connect =new PDO("mysql:host=localhost;dbname=$dataBase", 'root', '');
                //$connect =new PDO("mysql:host=mysql-abiteye.alwaysdata.net ;dbname=$dataBase", 'abiteye', 'Joueur66');

                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $connect;
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
                //die($e);
            }
        }

        function userConnexion($pseudo, $pwd)
        {
            $connect = connexion();

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

        function inscription($prenom, $nom,$pseudo,$pwd,$photo)
        {
                     
            $objetPDO = connexion($dataBase);


            $pdoStat = $objetPDO->prepare("INSERT INTO utilisateur (id_user, prenom, nom, pseudo, pwd, photo) VALUES (?,?,?,?,?,?)");

            //lecture des marqueurs

            $pdoStat -> execute(array(      

                NULL, 
                $prenom,
                $nom, 
                $pseudo, 
                $pwd,
                $photo
        
            ));
                   
        }



?>
