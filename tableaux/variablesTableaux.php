<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // les elements du tableau sont connu a l'avance
        $semaine = array('lundi', 'maidi', 'mercredi');
        $semaine = ['lundi', 'maidi', 'mercredi'];
        $semaine[] = 'jeudi';
        $semaine[] = 'vendredi';
        var_dump($semaine);
        echo '<br>';
        echo '<br>';
    // acceder a un element du tableau
        var_dump($semaine[3]);
    // modifier un element dans le tableau
        $semaine[0] = 'dimanche';
        echo '<br>';
        echo '<br>';
        var_dump($semaine);
    // supprimer un element dans le tableau
        unset($semaine[3]);
        echo '<br>';
        echo '<br>';
        var_dump($semaine);
    ?>

</body>
</html>