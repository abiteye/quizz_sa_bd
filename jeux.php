   <?php
   //is_connect();
   ?>
   
<div class="container-fluid bg text-white">
   <div class="entete-jeu rounded-bottom shadow-lg">
        <p class="font-weight-bold  text-white ml-4 mt-auto" style="font-size: 25px;">BIENVENUE SUR LA PLATEFORME DE JEU  DE QUIZZ<br>JOUER ET AUGMENTER VOS CONNAISSANCES</p>
        <div class="row"> 
            <div class="col-6 p-3">  
                <button type="button" onclick="showInfos(evt, 'topFive')" id="topFive" class="btn btn-info ml-4 shadow-lg p-2">TOP 5</button>
                <button type="button" id="topFav" class="btn btn-info ml-5 shadow-lg p-2 rounded">SCORE</button>
            </div>

            <div class="col-3">
                <div class="photo-joueur rounded-circle">
                </div>
            </div>

            <div class="col-3"> 
                <button type="submit" class="btn btn-info ml-5">
                     <a class="text-white"  style="text-decoration:none;" 
                        href="index.php?statut=logout">Déconnexion</a> 
                </button>
            </div>
            
        </div>
   </div>
   <div class="tabFive rounded-bottom" id="topFive">
            <table class="table">
                <thead>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Score</th>
                </thead>
                <tbody id="tBodyUsers">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

</div>

<script src="./public/js/validationForm.js"></script>

<style>
    .row {
        margin-top: -10px;
}

    .entete-jeu {
    height: 150px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0) 100%), #63C8D6;
}

.photo-joueur{
    width: 80px;
    height: 80px;
    margin-left: 80%;
    margin-top: -20px;
    background-color: white;
}
.tabFive{
    width: 20%;
    height: 150px;
    background-color: silver;
}
</style>

<script>
    function showInfos(evt, affiche) {
        var i, tancontent, tablinks;

        tabFive = document.getElementsByClassName("tabFive");
        for(let i = 0; i < tabFive.length; i++) {
            tabFive[i].style.display =;
        }

        tablinks = document.getElementsByClassName("tablinks");
        for(let i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }

        document.getElementById(affiche).style.display = "block";

        evt.currentTarget.className += "active";
        evt.currentTarget.style.color = "#3addd6";

    }
</script>
    
