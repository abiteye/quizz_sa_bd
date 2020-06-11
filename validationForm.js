// validation formulaire de connexion

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

function sendData2(action, page, content) {

    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = () => {
        if ((ajax.readyState == 4) && ajax.status == 200) {
            let data = ajax.responseText;
            if (data == "error") {

                alert("la page n'existe pas");

            } else {
                var pag = document.getElementById(content);
                pag.innerHTML = data;
            }
        }
    }


    ajax.open('POST', `index.php?action=${action}&page=${page}`, true);
    ajax.send();
}

// la function qui va recupéré les données du formulaire c ici

function getFormData() {
    var forme = document.getElementById('forme');

    var donnee = new FormData(forme);

    return donnee;
}

// la fonction affichant le top5 et le score du joueur connecte

$.ajax({
    url: 'http://localhost/Projets/quizz_sa_bd/data/top_cinq.php',
    dataType: 'json',
    success: function(data) {
        for (var i = 0; i < data.length; i++) {

            var row = $('<tr><td>' + data[i].prenom + '</td><td>' + data[i].nom + '</td><td>' + data[i].score + '</td><tr>');

            $('#tBodyUsers').append(row);
        }
    }
});