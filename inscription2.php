<?php
if(isset($_POST['submit'])){
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$pass=$_POST['password2'];

echo"vous etes ".$prenom." ".$nom;
}
else{
    //renvoie sur la page inscription.php si le bouton submit n'est pas appuyé
    header("location: inscription.php");
}

?>