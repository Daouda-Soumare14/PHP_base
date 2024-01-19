<?php 
    echo 'Bonjour';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo 'Bonjour encore une fois '; echo 'Daouda' ?></p>
    <p> <?= 'Bonjour encore une seconde fois'; ?></p>

    <!-- afficher les chaine de caractere avec Heredoc -->
    <!-- il permet d'afficher tout le contenu -->
    <?php
        $prenom = 'daouda';
        echo <<< EOT
            // include 'inclure/header.php';
            // include 'inclure/header.php';
            // include_once permet de verifier si le fichier a deja ete appelé si oui il ne le rappelle pas sinon il appelle
            // include_once 'inclure/header.php';
            // include_once 'inclure/header.php';
            // require permet de verifier si le fichier existe sinon il affiche une erreur fatal et le reste du code ne sera pas executer, 
            // il permet aussi de verifier si le fichier est inclu une fois si oui il sera pas reinclu
            // require_once 'inclure/header4.php';
            <p> <?php echo 'Bonjour encore une fois '; echo 'Daouda' ?></p>
            <p> <?= 'Bonjour encore une seconde fois'; ?></p>
            echo 'bienvenu' .$prenom. 'dans notre plateform;

        EOT
        
    ?>

    <!-- afficher les chaine de caractere avec Nowdoc -->
    <!-- il permet d'afficher tout le contenu et la variable $prenom n'a pas été interpreté-->
    <?php
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        $prenom = 'daouda';
        echo <<< 'EOT'
            // include 'inclure/header.php';
            // include 'inclure/header.php';
            // include_once permet de verifier si le fichier a deja ete appelé si oui il ne le rappelle pas sinon il appelle
            // include_once 'inclure/header.php';
            // include_once 'inclure/header.php';
            // require permet de verifier si le fichier existe sinon il affiche une erreur fatal et le reste du code ne sera pas executer, 
            // il permet aussi de verifier si le fichier est inclu une fois si oui il sera pas reinclu
            // require_once 'inclure/header4.php';
            <p> <?php echo 'Bonjour encore une fois '; echo 'Daouda' ?></p>
            <p> <?= 'Bonjour encore une seconde fois'; ?></p>
            echo 'bienvenu' .$prenom. 'dans notre plateform;

        EOT
    ?>
</body>
</html>