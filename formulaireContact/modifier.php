<?php
include 'connexion.php';

$pdoStatement = $objetPdo->prepare('UPDATE contact SET nom = :nom, prenom = :prenom, telephone = :telephone, email = :email WHERE id = :id LIMIT 1');

$pdoStatement->bindValue(':id', $_POST['idContact'],PDO::PARAM_STR);
$pdoStatement->bindValue(':nom', $_POST['nom'],PDO::PARAM_STR);
$pdoStatement->bindValue(':prenom', $_POST['prenom'],PDO::PARAM_STR);
$pdoStatement->bindValue(':telephone', $_POST['telephone'],PDO::PARAM_STR_CHAR);
$pdoStatement->bindValue(':email', $_POST['email'],PDO::PARAM_STR);

$executeIsOk = $pdoStatement->execute();

if($executeIsOk)
{
    $message = 'le contact a été modifier avec succes';
}
else
{
    $message = 'Erreur le contact n\'a pas été modifier';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
</head>
<body>
    <h1>Modification</h1>

    <p><?= $message ?></p>
</body>
</html>

