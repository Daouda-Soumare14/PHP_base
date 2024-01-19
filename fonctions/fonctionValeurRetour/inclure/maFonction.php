<?php
    function headerHtml($title, $fichierCss)
    {
        echo <<< EOT
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>fonctions</title>
                <link rel="stylesheet" href="$fichierCss.css">
            </head>
            <body>
                <h1>$title</h1>
        EOT;   
    }
    function footerHtml($auteur)
    {
        echo <<< EOT
            <hr>
            $auteur &copy; 2024
            </body>
            </html>
        EOT;   
    }


/**
 * notre fonction slug nettoie une chaine de façon a etre utilisable dans une URL
 * 
 * string $stringToClean chaine a nettoyer
 * 
 * return la chaine nettoyer
 */
    function slug($stringToClean)
    {
        $nomAvantNettoyage = $stringToClean;

        // remplacer les caracteres qui ne sont ni des lettres ni des nombes par un tiré(-)
        $nomEnCourDeNettoyage = preg_replace('~[^\\pL\d]+~u', '-', $nomAvantNettoyage);

        // retirer les tirés en debut et en fin de chaine
        $nomEnCourDeNettoyage = trim($nomEnCourDeNettoyage. '-');

        // passer d'un encodage 'UTF-8' a un encodage
        $nomEnCourDeNettoyage = iconv('utf-8', 'us-ascii//TRANSLIT', $nomEnCourDeNettoyage);
        
        // convertir en minuscule
        $nomEnCourDeNettoyage = strtolower($nomEnCourDeNettoyage);

        // supprimer les caracteres indesirables
        $chaineNettoye = preg_replace('~[^\\pL\d]+~u', '', $nomEnCourDeNettoyage);
        
        return $chaineNettoye;
        
    }

?>