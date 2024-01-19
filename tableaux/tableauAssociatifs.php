<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $poidsLegumes = [300, 400, 234, 123, 100];
        var_dump($poidsLegumes);
        echo '<br>';
        echo '<br>';
    // les tableaux associatifs appeler cles valeur
        $poidsLegumes = 
        [
            'patatte'      => 300,
            'pommeDeTer'   => 400,
            'chou'         => 234,
            'gombo'        => 123,
            'carotte'      => 100
        ];
        var_dump($poidsLegumes);
        echo '<br>';
        echo '<br>';
    // pour ajouter des elements dans notre tableau on bien faire de l'affectation
        $poidsLegumes['poireau'] = 130;
        var_dump($poidsLegumes);
        echo '<br>';
        echo '<br>';
    // pour supprimer un elements dans notre tableau
        unset($poidsLegumes['poireau']);
        var_dump($poidsLegumes);
        echo '<br>';
        echo '<br>';
    // pour modifier le poids d'un element dans notre tableau 
        $poidsLegumes['chou'] = 1000;
        var_dump($poidsLegumes);
    ?>

</body>
</html>