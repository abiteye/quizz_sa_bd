
<style>
    .container-forme{
        margin-left: 39%;
        width:100%;
    }

</style>
  
      <div class="container-fluid entete rounded-bottom shadow-lg">
        <div class="row font-weight-bold">
            <div class="col-6 text-danger text-right d-flex">
                <p class="error my-auto ml-auto"></p>
            </div>
            <form class="ml-auto text-white col-6" id="forme" action="Javascript:void(0);">
              <div class="row mr-5">  
                <div class="form-group col-md-5 d-flex flex-column">
                    <label for="pseudo" >Pseudo</label>
                    <div class="form-group d-flex flex-row">
                        <input type="text" class="form-control mr-2" name="pseudo" id="pseudo" placeholder="Pseudo">
                        <div class="error-form"></div>
                    </div>
                </div>
                <div class="form-group col-md-5 d-flex flex-column">
                    <label for="password">Mot de passe</label>
                    <div class="form-group d-flex flex-row">
                        <input type="password" class="form-control mr-2" name="pwd" id="password" placeholder="Password">
                        <div class="error-form"></div>
                    </div>
                </div>
                <div class="form-group col-md-2 d-flex pt-3">
                    <button type="submit" name="connexion" id="submit" class="btn btn-info m-auto" onclick="getFormData();">CONNEXION</button>
                </div>
               </div>
            </form> 
        </div>
      </div>
        <div class="logo">
        </div>
            <h1 class="text-align">LE PLAISIR DE JOUER</h1>
        <div class="text-resume text-white">
                        Voulez-vous augmenter vos connaissances en culture générale?<br>
                        Bienvenue dans la plateforme adéquate pour rafraîchir votre cerveau.
        </div> 
        <div class="container-forme">
            <?php //require_once("./pages/inscription.php");?>
        </div>
                             
   
    


