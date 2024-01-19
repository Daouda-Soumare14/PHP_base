<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $prenom = 'Daouda';
        $nom = 'Soumare';
        $age = 23;
        echo $prenom,' '.$nom;

        echo '<br>';

        $filiation = $prenom . $nom;
        echo $filiation;

        echo '<br>';

        echo 'je m\'appelle '.$prenom. ' et j\'ai '.$age. ' ans';

        echo '<br>';

        $prenom .= ' '.$nom;
        echo $prenom;
    ?>
    <p> <?= 'je m\'appelle Daouda '.'SOUMARE' ?></p>

</body>
</html>