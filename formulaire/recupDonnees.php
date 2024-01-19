<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Affichage des donnees issues du formaulaire</h1>

    <ul>
        <li><?php echo $_POST['lastName']?></li>
        <li><?php echo $_POST['firstName']?></li>
        <li><?php echo $_POST['sexe']?></li>
        <li><?php echo $_POST['com']?></li>
        <li><?php echo $_POST['groupe']?></li>
    </ul>
</body>
</html>