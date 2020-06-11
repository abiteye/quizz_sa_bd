<?php
    require_once './data/requete.php';

    global $connect ;
    $NbreDeValeur=5;

    if(isset($_POST['page'])) {

        $numPage = filter_var($_POST['page'],FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH );

        if(! is_numeric($numPage)){
            die('Ce num est invalide');
        }
    }else{
        $numPage = 1;
    }

    //position de des nums

    $debut = (($numPage-1)*$NbreDeValeur);

    $sql = $connect->query("SELECT * FROM utilisateur WHERE profil = 'joueur' ORDER BY score DESC Limit $numPage,$NbreDeValeur");

    $sql->execute();

    while($ligne= $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>".
                "<td>".$ligne['nom']. "</td>".
                "<td>".$ligne['prenom']. "</td>".
                "<td>".$ligne['score']. "</td>".

             "</tr>";
              var_dump($ligne);
    }
