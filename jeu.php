<!DOCTYPE html>
<?php
SESSION_START();
?>
<html lang="fr">

<head>
 <meta charset="UTF-8"/>
<title> jeu </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="style.css" />
</head>


<body>

<div class="p-3 mb-2 bg-primary text-white">
    <center><h1> Pierre Papier Ciseau</h1></center>
    <a id="home" href="index.html">  <img src="img/home.svg" alt="home"> home </a>
<!-- image PFC -->
    <center><img src="img/PFC.png" width="30%" height="10%"></center>
<!-- bouton qui met sur la page du jeu -->
<center><button id="but" onclick="document.location.href='PFC.php'"> Play  </button></center>


<!-- background du site-->
    <div class="p-3 mb-2 bg-light text-dark">
    <?php 
    echo"vous etes connecter en tant que ".$_SESSION["login"];
    ?>

  
<script>
    
  
   </script>
  

    </div>
</div>

</body>
</html>