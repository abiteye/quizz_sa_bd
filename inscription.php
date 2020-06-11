
<?php
        require_once './data/requete.php';

            

?>
<div class="container-form rounded shadow"> 

    <form class="" id="" method="post" enctype="multipart/form-data"> 
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
            <input type="text" class="form-control h-25" id=""  name="pseudo" placeholder="Pseudo">
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
            <input type="file" class="form-control-file" id="photo" name="image" onchange="">
            <img id="output" src="" alt="" class="form-control-avatar">
           
        </div>
        <button type="submit" id="button" name="btn_save" class="btn btn-info ml-5">Créer compte</button>
    </form>

    <?php 
    if(isset($_POST['btn_save'])){
        inscription(
            
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['pseudo'],
            $_POST['pwd'],
            $_FILES['image']['name']
        ); 
        echo "error";
        
    }
    ?>

<!-- vlaidation du formaualire d'inscription -->
<script src="./public/js/validInscription.js"></script>
<!--validation formulaire inscription-->
<script type="text/javascript" src="./public/js/jquery.js"></script>
<script>
            //Script d'affichage du fichier image pour le formulaire admin.
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                $('#output').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

            $("#photo").change(function() {
                readURL(this);
});
</script> 

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

