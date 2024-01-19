<?php
require_once 'connexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST") // si la methode est la methode post
{
    $email = $_POST['email'];
    $password = $_POST['mdp'];
    if($email != "" && $password != "")
    {
        // connexion a la base de donnée
        $req = $connexion->query("SELECT * FROM log WHERE email = '$email' AND mdp = '$password' ");
        $req = $req->fetch();
        if(isset($req['id']))
        {
            $message = "vous etes connecté avec succes";
            header("Location:login.php?message=" . $message);    
        }
        else
        {
            $error_msg = "Email ou mot de passe incorect";
        }
    }
}