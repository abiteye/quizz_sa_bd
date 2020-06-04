<?php
        /*$objetPDO = new PDO('mysql:dbname=quizz_sa_bd; host=localhost', 'root', '');

        //requete d'insertion

        $statement = $objetPDO->prepare('INSERT INTO utilisateur VALUES(NULL, :prenom, :nom, :pseudo, :pwd, :photo)');

        //lecture des marqueurs

        $statement->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
        $statement->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
        $statement->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $statement->bindValue(':pwd', $_POST['pwd'], PDO::PARAM_STR);
        //$statement->bindValue(':profil', $_POST['pwd'], PDO::PARAM_STR);
        $statement->bindValue(':photo', $_FILES['photo']['name'], PDO::PARAM_STR);
        
        //execution de la requete

        $insertIsOk = $statement->execute();

        if($insertIsOk)
        {
            $msg= "requete envoyée avec succès !";
        }
        else
        {
            $msg = "L'insertion a échoué";
        }*/
?>

<div class="container-form rounded shadow ">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--validation formulaire inscription-->
<script type="text/javascript" src="./public/js/jquery.js"></script>
    <form class="" id="" method="post">
        <div class="form-group col-md-6">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control h-25" id="prenom" name="prenom" placeholder="Prenom">
            <span class="error"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control h-25" id="nom"  name="nom" placeholder="Nom">
            <span class="error"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control h-25" id=""  name="" placeholder="Pseudo">
            <span class="error"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control h-25" id="pwd"  name="pwd" placeholder="Password">
            <span class="error"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="password2">Confirmer Password</label>
            <input type="password" class="form-control h-25" id="pwd2"  name="pwd2" placeholder="Confirmer Password">
            <span class="error"></span>
        </div>
        <div class="row">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control-file" name="photo" onchange="loadFile(event)">
            <img id="output" src="" alt="" class="form-control-avatar">
                <script>
                //Script d'affichage du fichier image pour le formulaire admin.
                    var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                    URL.revokeObjectURL(output.src) 
                    }
                }; 
                </script>            
        </div>
        <button type="button" id="button" class="btn btn-info ml-5">Créer compte</button>
    </form>

<!-- vlaidation du formaualire d'inscription -->
<script src="./public/js/validInscription.js"></script>

<style>
    .container-form {
        width: 60%;
        height: 550px;
        margin-top:5px;
        background-color: silver;
    }
    .form-control-avatar {
        background-color: #f8fdfd;
        background-repeat: no-repeat;
        height: 150px;
        width: 150px;
        margin-top: -56%;
        margin-left: 70%;
        border-radius: 50%;
        border: #63C8D6 2px solid;
    }
    .row label {
        display: block;
        margin-left: 5%;
    }
    .row .form-control-file {
        color: black;
        display: block;
        margin-left: 30%;
        margin-top: -25px;
    }
    /*validation */
    :root {
    --success-color: #2ecc71;
    --error-color: #e74c3c;
}
    .form-group.success input {
    border-color: var(--success-color);
}
.form-group.error input {
    border-color: var(--error-color);
}
.form-group small {
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}
.form-control.error small{
    visibility: hidden;
}
</style>
</div>

