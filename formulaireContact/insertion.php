<?php
include 'connexion.php';
// preparation de la requette d'insertion
$pdoStatement = $objetPdo->prepare('INSERT INTO contact values(NULL, :nom, :prenom, :telephone, :email)');
// on lit chaque marqueur a une valeur PDO::PARAM_STR permet de dire que la valeur stocker dans les champs est de type chaine
$pdoStatement->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStatement->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStatement->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
$pdoStatement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
// execution de la requette
$insertIsOk = $pdoStatement->execute();

if($insertIsOk)
{
    $message = 'Le contact a ete ajouter dans la base de donnee';
}
else
{
    $message = 'Echec de l\'insertion';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insetion</title>
</head>
<body>
    <h1>Insertion des Contacts</h1>

    <p><?php echo $message ?></p>
</body>
</html>
