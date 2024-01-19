<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $a = 34 * 3;
        var_dump($a); echo '<br>';
        ($a = 34) * 3; // les () sont prioritaire face a la multiplication
        var_dump($a); echo '<br>';

        $b = 34 * 3 > 100;
        var_dump($b); echo '<br>';

        $b = 34 * (3 > 100); // false = 0 car il 3 n'est pas supperieur a 100
        var_dump($b); echo '<br>';

        $res = true || true && false; // true && false = (true && false) donc il est prioritaire = false
        // donc true ||  false
        var_dump($res); echo '<br>';


    ?>

</body>
</html>