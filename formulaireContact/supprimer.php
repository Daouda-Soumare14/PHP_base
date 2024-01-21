<?php
include 'connexion.php';

$pdoStatement = $objetPdo->prepare('DELETE FROM contact WHERE id = :id LIMIT 1'); // limit 1 permet de supprimer a une ligne au maximum par suppression
$pdoStatement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$executeIsOk = $pdoStatement->execute();

if($executeIsOk)
{
    $message = 'le contact a été supprimer avec succes';
}
else
{
    $message = 'Erreur de suppression du contact';
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
    <h1>Suppression</h1>

    <p><?= $message ?> </p>
</body>
</html>
