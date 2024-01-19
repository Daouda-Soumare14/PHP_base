<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // creation d'un tableau multidimansionnels
        $poids =
        [
            'legumes' =>
            [
                'patatte'      => 300,
                'pommeDeTer'   => 400,
                'chou'         => 234,
                'gombo'        => 123,
                'carotte'      => 100,
            ],
            'fruit' =>
            [
                'pomme'        => 3000,
                'banane'       => 4000,
                'orange'       => 2340,
                'ananas'       => 1230,
                'citron' =>
                [
                    'jaune'    => 1231,
                    'vert'     => 3223,
                ],
            ],
        ];
        var_dump($poids);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // acceder aux valeurs d'un tableau multidimensionnels 
        var_dump($poids['legumes']['patatte']);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        var_dump($poids['fruit']['citron']['jaune']);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // ajouter des elements dans mon tableau multidimensionnels
        $poids['fruit']['citron']['jauneClair'] = 1236;
        var_dump($poids['fruit']['citron']);
        echo '<br>';
        echo '<br>';
        echo '<br>';
    // supprimer des elements dans mon tableau multidimensinnels
        unset($poids['fruit']['citron']['jauneClair']);
        var_dump($poids['fruit']['citron']);

    ?>

</body>
</html>