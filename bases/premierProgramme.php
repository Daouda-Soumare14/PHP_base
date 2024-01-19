<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bonjour tout le monde</p>
    <?php
    // cette fonction permet d'afficher la date du jour
        $dateObject = new DateTime();
        $dateDuJour = $dateObject->format('d/m/Y');
    ?>
    <p>nous somme le <?php echo $dateDuJour; ?> </p>
</body>
</html>