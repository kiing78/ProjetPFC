<!DOCTYPE html>
<?php
SESSION_START();
?>
<html lang="fr">

<head>
 <meta charset="UTF-8"/>
<title> Pierre feuille ciseaux</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- API howel pour ajouter des sons-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.1/howler.min.js" integrity="sha512-L6Z/YtIPQ7eU3BProP34WGU5yIRk7tNHk7vaC2dB1Vy1atz6wl9mCkTPPZ2Rn1qPr+vY2mZ9odZLdGYuaBk7dQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="style.css" />
</head>


<body>

<div class="p-3 mb-2 bg-primary text-white">
    <center><h1> Pierre Papier Ciseau</h1></center>
    <a id="home" href="index.php">  <img src="img/home.svg" alt="home"> home </a>
    <?php 
    echo"<br>";
    echo"vous etes connecter en tant que ".$_SESSION["login"];
    ?>






<!-- background du site-->
    <div class="p-3 mb-2 bg-light text-dark">

   <button id="pierre" ><img src="img/pierre.jpg" alt="pierre" width="50%" height="10%"></button>
    <button id="feuille"><img src="img/feuille.jpg" alt="feuille" width="50%" height="10%"></button>
    <button id="ciseaux"><img src="img/ciseaux.jpg" alt="ciseaux" width="50%" height="10%"></button>


        <div id="resultat">
            <p></p>
        </div>
    

  

        

    </div>
</div>
<script>
   //les ecouteurs du clique
        $("#pierre").click(function(){
            jeu("pierre");
        });
        $("#feuille").click(function(){
            jeu("feuille");
        });
        $("#ciseaux").click(function(){
            jeu("ciseaux");
        });

    //déclaration des variables pour les compteurs
    
    var victoire=0;
       var perdue=0;
       var egalite=0;


    function jeu(choix){
        //choix du joueur
        var joueur;

        //variable pour ordi hasard
       var ordi =Math.floor((Math.random()*3)+1);
       
      
     joueur=choix;
     


        //condition pour l'ordi

       if(ordi==1){
           ordi="pierre";
       }
       else if(ordi==2){
           ordi="feuille";
       }
       else{
           ordi="ciseaux";
       }

    
       //condition de jeu
       if(joueur===ordi){
            scoret="égalité";
            egalite=egalite+1;
        }

       else if(joueur=== "pierre" && ordi=== "ciseaux" || joueur==="ciseaux" && ordi ==="feuille" || joueur==="feuille" && ordi==="pierre"){
           score="gagné";
            victoire=victoire+1;

            //bruitage son victoire
            var sound = new Howl({
            src: ['audio/victoire.mp3']
            });

            sound.play();
       }
       else{
           score="Perdu";
           perdue=perdue+1;

           //bruitage son défaite
           var sound = new Howl({
            src: ['audio/rate.mp3']
            });

            sound.play();
       }
       //affichage resultat
       var resultat=$('p');
       resultat.html("joueur : "+joueur+"<br> ordi : "+ordi+" <br> resultat : "+score+" <br> victoire : "+victoire+" Défaite : "+perdue+
       " egalite : "+egalite);
    }; 
      


       
    
</script>
</body>
</html>