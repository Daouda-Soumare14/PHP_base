<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- affectation par valeur -->
    <?php
        $nombre1 = 10;
        $nombre2 = $nombre1;

        var_dump($nombre1);
        var_dump($nombre2);

        echo '<br>';
        $nombre1 = 20;

        var_dump($nombre1);
        var_dump($nombre2);

    ?>
    
    <!-- affectation par reference -->
    <?php
        $nombre3 = 30;
        $nombre4 = &$nombre3;

        echo '<br>','<br>';

        var_dump($nombre3);
        var_dump($nombre4);

        echo '<br>','<br>';
        $nombre3 = 50;

        var_dump($nombre3);
        var_dump($nombre4);
    ?>
    

</body>
</html>