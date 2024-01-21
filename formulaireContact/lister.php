<?php
include 'connexion.php';

$pdoStatement = $objetPdo->prepare('SELECT * FROM contact');
$executeIsOk = $pdoStatement->execute();
$contacts = $pdoStatement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>liste</title>
</head>
<body>
    <h1>Liste des contacts</h1>

    <ul>
        <?php foreach($contacts as $contact): ?>
            <li>
                <?= $contact['nom'] ?>
                <?= $contact['prenom'] ?>
                <?= $contact['telephone'] ?>
                <?= $contact['email'] ?>
                <?= $id = $contact['id'] ?>
                <?= "<a href='supprimer.php?id=$id'>Supprimer</a>"?>
                <?="<a href='formModification.php?id=$id'>Modifier</a>"?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
