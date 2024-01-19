<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // l'operateur d'egalité ==
        var_dump(4 == 5);
        var_dump(4 == 4);
        var_dump('daouda' == 'daouda');
        var_dump('1' == 1);
        var_dump(false == 0);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // l'operateur d'egalité stricte ===
    // avec cette operateur === php va d'abord comparé les types 
        var_dump('1' === 1);
        var_dump(false === 0);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // l'operateur d'inegalité !=
        var_dump('1' != 1); // equivalent   var_dump(4 <> 5);
        var_dump(false != 0);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // l'operateur d'inegalité stricte !==
    // avec cette operateur !== php va d'abord comparé les types 
        var_dump('1' !== 1);
        var_dump(false !== 0);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // les operateurs de superiorité et d'inferiorité
        var_dump(4 < 5);
        var_dump(4 > 5);
        var_dump(4 <= 5);
        var_dump(4 >= 5);
        echo '<br>';
        echo '<br>';
        echo '<br>';

    // les deux nouveaux operateurs de comparaison en PHP7
        var_dump(5 <=> 5); // retourne 0 car les deux operandes sont egale
        var_dump(4 <=> 5); // retourne -1 car l'operande de gauche est plus petit que celle de droite
        var_dump(5 <=> 4); // retourne 1 car l'operande de gauche est plus grande que celle de droite
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // les operateurs d'union NULL 
        var_dump($user ?? 'anonyme'); // $user n'existe pas, alors l'expression retourne "anonyme"
        $user = 'daouda';
        var_dump($user ?? 'anonyme'); // l'expression retourne "daouda" puisque la $user existe et est non NULL
        $user = NULL;
        var_dump($user ?? 'anonyme'); // l'expression retourne "anonyme" car mame si $user existe il est NULL
        echo '<br>';
        echo '<br>';
        echo '<br>';
        // equivalence
            // if(isset($userName))
            // {
            //     return $userName;
            // }
            // else
            // {
            //     return 'anonyme';
            // }
            // var_dump($userName);
            // il est possible de chainer l'operateur d'union NULL
                $admin2 = NULL;
                $admin3 = 'rachid';
                var_dump($admin1 ?? $admin2 ?? $admin3); // returne "rachid" car $admin1 n'existe pas, $admin2 existe mais elle est NULL
                echo '<br>';
                echo '<br>';
                echo '<br>';
                // autre exemple
                var_dump($_GET['user'] ?? $_POST['user'] ?? 'anonyme') // on test si la variable $_GET existe si oui on l'execute sinon on passe au suivant ainsi de suite
    ?>

</body>
</html>