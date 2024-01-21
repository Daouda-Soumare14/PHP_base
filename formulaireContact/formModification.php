<?php
include 'connexion.php';

// permet d'afficher tous les champs dans le formulaire de modification en se basant sur leur id
$pdoStatement = $objetPdo->prepare('SELECT * FROM contact WHERE id = :id');
$pdoStatement->bindValue(':id', $_GET['id'], PDO::PARAM_INT); // il recupere le nom'id' dans le fichier lister
$executeIsOk = $pdoStatement->execute();
$contact = $pdoStatement->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forme modification</title>
</head>
<body>
<h1>Modifier un contact</h1>

<form action="modifier.php" method="post">
   <input type="hidden" name="idContact" value="<?= $contact['id'] ?>">  <!-- le hidden permet de cacher un champ pour que l'utilisateur ne le modifi pas -->
    <p>
        <label for="nom">Nom</label><br>
        <input type="text"  name="nom" value="<?= $contact['nom'] ?>">
    </p>
    <p>
        <label for="nom">Prenom</label><br>
        <input type="text"  name="prenom" value="<?= $contact['prenom'] ?>">
    </p>
    <p>
        <label for="nom">Telephone</label><br>
        <input type="text" name="telephone" value="<?= $contact['telephone'] ?>">
    </p>
    <p>
        <label for="nom">Email</label><br>
        <input type="text" name="email" value="<?= $contact['email'] ?>">
    </p>
    <p>
        <input type="submit" value="ENREGISTRER LES MODIFICATIONS" name="envoyer">
    </p>
</body>
</html>