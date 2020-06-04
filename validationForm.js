// validation

$(document).ready(function() {
    $("#submit").click(function() {
        var user = $("#pseudo").val();
        if (user == "") {
            $(".error-form").html("*");
            $(".error").html("* Champs obligatoires");
            $(".error-form").css("color", "red");
            return false;
        } else {
            $("#pseudo").next(".error-form").fadeOut();
        }
        var pwd = $("#password").val();
        if (pwd == "") {
            $(".error-form").html("*");
            $(".error-form").html("color", "red");
            return false;
        } else {
            $("#password").next(".error-form").fadeOut();
        }
        return false;
    });
});

/*if(isset($message)){
       echo '<label class="text-danger">'.$message.'</label>';
   }*/

//recupération des id
var formm = document.getElementById('forme');
var container = document.getElementById('container');



formm.addEventListener('submit', () => {

    sendData('connexion', container, true);

})

function sendData(action, conten, is_post) {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () => {
        if ((ajax.readyState == 4) && ajax.status == 200) {
            let data = ajax.responseText;
            if (data == "error") {

                alert("Il y'a une erreur quelque part");

            } else {
                conten.innerHTML = data;
            }
        }
    }

    var donnee = "";
    if (is_post) {
        donnee = getFormData();
    }
    ajax.open('POST', `index.php?action=${action}`, true);
    ajax.send(donnee);
}

// la function qui va recupéré les données du formulaire

function getFormData() {
    var forme = document.getElementById('forme');

    var donnee = new FormData(forme);

    return donnee;
}