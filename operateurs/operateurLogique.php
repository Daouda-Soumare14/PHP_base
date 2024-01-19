<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // l'operateur logique and ou &&
    // si une des deux operandes est FALSE, alors le test logique retounre FALSE
        var_dump(true  and true);   // vrai + vrai = vrai
        var_dump(true  and false);  // vrai + faux = faux
        var_dump(false and true);   // faux + vrai = faux
        var_dump(false and false);  // faux + faux = faux
        echo '<br>';
        echo '<br>';
    // l'operateur logique or ou ||
    // si une des deux operandes est TRUE, alors le test logique retounre TRUE
        var_dump(true  or true);   // vrai ou vrai = vrai
        var_dump(true  or false);  // vrai ou faux = vrai
        var_dump(false or true);   // faux ou vrai = vrai
        var_dump(false or false);  // faux ou faux = faux
        echo '<br>';
        echo '<br>';
    // l'operateur logique not
        var_dump(!true); // false
        var_dump(!false); // true
        echo '<br>';
        echo '<br>';
    // l'operateur logique XOR
    // retourne true si l'une des deux operandes est true sinon si les deux operandes sont a true alors il retourne false
        var_dump(true XOR true); // return false
        var_dump(true XOR false); // return true
    ?>

</body>
</html>