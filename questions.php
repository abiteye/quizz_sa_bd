<div class="container-form-question mt-1 rounded">
    <p class="text-info font-weight-bold ml-3" style="font-size: 25px;">PARAMÉTRER VOTRE QUESTION</p>
    <div class="content-form w-100 h-75 border border-info">
        <form id="form-question" method="post">
            <div class="form-row ml-2">
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Question</label>
                    <input type="text" class="form-control" id="libQuestion">
                </div>
                <div class="form-group col-md-2">
                    <label for="nombre">Nombre de pts</label>
                    <input type="number" class="form-control" id="nombre">
                </div>
            </div>
            <div class="form-group row">
                    <label for="type">Type de réponse</label>
                <div class="col-sm-10">
                    <div class="form-group col-md-6">
                        <select class="form-control form-control-sm" id="">
                            <option>Donnez le type de réponse</option>
                            <option>choix texte</option>
                            <option>choix simple</option>
                            <option>choix multiple</option>   
                        </select>
                    </div> 
                </div>
            </div>
            
            <div class="form-group col-md-2">
                <button type="button" name="btn_save" id="btnSave" class="btn btn-info float-xl-left">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

<style>
    .container-form-question {
    background-color: silver;
    width: 60%;
    height: 520px;
}
</style>