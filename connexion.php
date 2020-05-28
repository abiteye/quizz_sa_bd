<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
.bg{
    background-image: url('./public/images/bg-quizz.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.form-control {
    margin-bottom: 5px;
    padding-bottom: 10px;
    position: relative;
}

.form-control label {
    display: inline;
    margin-bottom: 5px;
    color: white;
}

.form-control input {
    border: 2px solid red;
    border-radius: 4px;
    display: inline;
    padding: 10px;
    font-size: 14px;
}

.form-control input:focus {
    outline: 0;
    border-color: #777;
}
.form-input{
    margin-left:45%;
}
.form-input1{
    margin-left:2%;
}
.logo {
    width: 10%;
    height: 220px;
    background-image: url('./public/images/logo-QuizzSA.png');
    background-repeat: no-repeat;
    background-size: 100%;
    transform: rotate(-35deg);
    position: absolute;
    left: 2%;
    top: 15%;
}
.text-align{
    color: white;
    position: absolute;
    transform: rotate(-35deg);
    left:0%;
    top: 40%;
}
.icon-pseudo {
    background-image: url('./public/images/')
}
  </style>
  <body>
      <div class="entete rounded-bottom shadow-lg">
          <form class="form form-inline ml-5" id="form">
              <div class="form-input">
                  <label for="pseudo" class="mr-sm-5 mt-2 mr-2">Pseudo</label>
                  <input type="text" class="form-control icon-pseudo" id="pseudo" placeholder="Pseudo">
                  <small></small>
              </div>
              <div class="form-input1">
                  <label for="password" class="mr-sm-5 mt-2">Mot de passe</label>
                  <input type="password" class="form-control icon-pwd" id="password" placeholder="Password">
                  <small></small>
              </div>
              <button type="button" name="" id="" class="btn btn-info btn-lg mt-4 ml-4">CONNEXION</button>
          </form> 
      </div>
      <div class="bg mt-1 rounded-top">
          <div class="logo">
              </div>
              <h1 class="text-align">LE PLAISIR DE JOUER</h1>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>