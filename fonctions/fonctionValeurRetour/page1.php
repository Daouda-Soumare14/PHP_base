<?php
    require_once 'inclure/maFonction.php';

    // appelle de ma fonction
    headerHtml('Page 1', 'wings');

    $chaine = slug('"""èèèèèèèèèù%ùùùùùùùùù%%%%%%%%%kqjkkjkogjdççççààààfsjf'); // $chaine va recuperer la valeur de retour de ma fonction slug()
    echo $chaine;

    footerHtml('Rachid');
?>