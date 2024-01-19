<?php
    $title = 'page2';
    include 'inclure/header.php'; // elle permet d'appeler plusieurs fois le meme fichier
    // include 'inclure/header.php';
    // include 'inclure/header.php';
    // include_once permet de verifier si le fichier a deja ete appelé si oui il ne le rappelle pas sinon il appelle
    // include_once 'inclure/header.php';
    // include_once 'inclure/header.php';
    // require permet de verifier si le fichier existe sinon il affiche une erreur fatal et le reste du code ne sera pas executer, 
    // il permet aussi de verifier si le fichier est inclu une fois si oui il sera pas reinclu
    // require_once 'inclure/header4.php';
?>

<?php
include 'inclure/footer.php';
