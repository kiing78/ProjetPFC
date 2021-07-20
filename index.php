<!DOCTYPE html>
<?php
  SESSION_START();
  ?>
<html lang="fr">

<head>
 <meta charset="UTF-8"/>
<title> connexion </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<div class="p-3 mb-2 bg-primary text-white">
    <center><h1> Accueil du jeu</h1></center>
<!-- background du site-->
    <div class="p-3 mb-2 bg-light text-dark">

    <!-- lien inscription-->
    <a href="inscription.php"> <img src="img/addUserIcone.svg"></a>

    <form method="POST" action="connexion.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer mail" name="mail">
          <small id="emailHelp" class="form-text text-muted">Ne partagez pas votre adresse mail.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
          <small id="passHelp" class="form-text text-muted">Ne partagez pas votre mot de passe.</small>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    </div>
</div>

</body>
</html>