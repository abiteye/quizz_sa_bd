<div class="container-joueur mt-1 rounded">
    <p class="text-center text-white font-weight-bold">Liste des joueurs </p>
    <div class="content">
    <table class="table">
                <thead>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Score</th>
                </thead>
                <tbody id="tBody">
                    
                </tbody>
            </table>

            <div class="pagination">

            </div>
    </div>
</div>

<style>
    .container-joueur {
    background-color: silver;
    width: 60%;
    height: 500px;

}
</style>
<script src="./public/js/jquery.bootpag.js"></script>


<script>
    $(document).ready(function(){
        $('#tBody').load('getJoueur.php');

        $('.pagination').bootpag({
            total: <?php echo $total_pages;?>
            page: 1,
            maxVisible: 5,
            next: 'suivant',
            prev: 'precedent'
            
        }).on("page," function(e, page_num){
            
            e.preventDefault();
            $('#tBody').load('getJoueur.php', {"page":page_num});
            alert("cool");

        });
    })

    

  
</script>