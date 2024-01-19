<?php
    require_once 'inclure/maFonction.php';

    // appelle de ma fonction
    headerHtml('Page Index', 'wings');

    $chaine = slug('"""éééééù%kqjkkjkogjdççççààààfsjf'); // $chaine va recuperer la valeur de retour de ma fonction slug()
    echo $chaine;

    footerHtml('Daouda');
?>

