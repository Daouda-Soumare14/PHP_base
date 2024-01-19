<?php

$hote = "localhost";
$user = "root";
$password = "root";
$dbName = "pageConnection";

$dsn = "mysql:host=$hote;dbname=$dbName;charset=utf8";
try {
    $connexion = new PDO($dsn, $user, $password);
    //die("Connexion réussie !");
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}


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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire de connexion a la base de donnée</h1>

    <form action="log.php" method="post">
        <label for="email">Email</label><br>
        <input type="email" placeholder="Entrer votre email..." id="email" name="email" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" placeholder="Entrer votre password..." id="password" name="mdp" required><br><br>

        <input type="submit" name="envoyer" value="Se connecter">
    </form>

    <?php
    if($error_msg)
    {
    ?>
    <p><?php echo $error_msg ?></p>
    <?php
    }
    ?>
</body>

</html>