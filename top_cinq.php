<?php
        
       require_once './data/requete.php';

        $connect = connexion();
        $sql = $connect->query("SELECT * FROM utilisateur WHERE profil = 'joueur' ORDER BY score DESC Limit 5");
        $row = $sql->fetchAll();

        echo json_encode($row);

        //var_dump($row);
?>