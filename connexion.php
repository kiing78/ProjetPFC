<?php
session_start();
    if(isset($_POST['submit'])){
    

        if(!empty($_POST['mail']) and !empty($_POST['password'])){

            $email=$_POST['mail'];
            $password=$_POST['password'];
            try{
                $pdo= new PDO("mysql:host=127.0.0.1;dbname=jeu","root","");
                echo"connexion établi";
                $req=$pdo->prepare("SELECT mail, password FROM utilisateur WHERE mail='$email' AND password= '$password'");
                $req->execute();

                if($req->rowCount()==0){
                    echo" vous n'etes pas inscrit ";
                }
                else{
                    $_SESSION["login"]=$email;
                    $_SESSION["mdp"]=$password;
                    header("location:jeu.php");
                }
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        else{
            echo"un ou plusieurs champs ne sont pas remplis";
        }
    }
    else{
        echo"erreur vous n'etes pas sur la bonne page";
    }

?>