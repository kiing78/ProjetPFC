<?php
session_start();
if(isset($_POST['submit'])){
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$pass=$_POST['password2'];



   if(!empty($prenom)&& !empty($nom)&& !empty($mail)&& !empty($password)&& !empty($pass)){
        if($password==$pass){
            //test de connexion bdd
            try{
            $pdo= new PDO("mysql:host=127.0.0.1;dbname=jeu","root",""); 
            echo"connexion bdd reussi";
            $req=$pdo->prepare("INSERT INTO utilisateur(nom,prenom,mail,password) VALUES(?,?,?,?)");
            $req->execute(array($nom,$prenom,$mail,$password));
            $_SESSION["pren"]=$prenom;
            $_SESSION["nom"]=$nom;
            $_SESSION["mail"]=$mail;
            echo"M/Mme ".$_SESSION["pren"]." ".$_SESSION["nom"]." a été ajouté dans la bdd votre login est ".$_SESSION["mail"];
            //header("refresh:");
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        else{
            echo"<center> les mots de passe ne sont pas identique</center>";
            header("Refresh: 2; URL=inscription.php");
        }
    }
    else{
        echo"<center>un ou plusieurs champs ne sont pas remplis</center>";
        header("Refresh: 2; URL=inscription.php");
    }
    
}
else{
    //renvoie sur la page inscription.php si le bouton submit n'est pas appuyé
    header("location: inscription.php");
}

?>