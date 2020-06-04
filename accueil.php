<?php
//is_connect();
?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container-fluid">
    <div class="entete-admin rounded-bottom shadow-lg">
        <p class="font-weight-bold  text-white ml-4 mt-auto" style="font-size: 25px;">CRÉER ET PARAMÉTRER VOS QUIZZ</p>
        <div class="row"> 
            <div class="col-6">
                <div class="containers w-50 d-flex">
                    <nav class="navbar navbar-expand-lg navbar-light">    
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                   <div class="container-link ml-3">
                                       <a class="nav-link" href="index.php?lien=accueil">
                                           <svg class="bi bi-list" width="60px" height="60px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                   <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                           </svg></a>
                                   </div> 
                                </li>
                                <li class="nav-item">
                                <div class="container-link ml-3">
                                    <a class="nav-link" href="index.php?lien=accueil&menu=inscription">
                                        <svg class="bi bi-file-plus" width="60px" height="60px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
                                            <path fill-rule="evenodd" d="M13.5 1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                        </svg></a>
                                </div> 
                                    
                                </li>
                                <li class="nav-item">
                                <div class="container-link ml-3">
                                    <a class="nav-link" href="index.php?lien=accueil">
                                        <svg class="bi bi-list" width="60px" height="60px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                        </svg></a>
                                </div>  
                                </li>
                                <li class="nav-item">
                                <div class="container-link ml-3">
                                    <a class="nav-link" href="index.php?lien=accueil">
                                        <svg class="bi bi-file-plus" width="60px" height="60px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
                                                <path fill-rule="evenodd" d="M13.5 1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                        </svg></a>
                                </div>
                                   
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-3 ">
                <div class="container-photo rounded-circle m-auto">
                </div>
            </div>
            <div class="col-3 m-auto">
                <button type="submit" class="btn btn-info ml-5 p-2">
                    <a class="text-white"  style="text-decoration:none;" href="index.php?statut=logout">Déconnexion</a></button> 
            </div>
                
        </div>
        
    </div>
        <?php
               /* if(isset($_GET['menu']))
                {
                    if($_GET['menu']=="liste"){
                        include("./pages/liste_question.php");
                    } 
                    if($_GET['menu']=="inscription"){
                        include("./pages/inscription.php");
                    } 
                    if($_GET['menu']=="joueur"){
                        include("./pages/joueur.php");
                    } 
                    if($_GET['menu']=="question"){
                        include("./pages/questions.php");
                    } 
                }else{
                    include("./pages/liste_question.php");
                }*/
        ?>
</div>


 <style>
     .row{
         margin-top: -15px;
     }
.entete-admin {
    height: 125px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0) 100%), #63C8D6;
}
.container-link{
    width: 80px;
    height: 80px;
}
.container-photo{
    width: 80px;
    height: 80px;
    background-color: white;   
}
 </style>