<?php
// remarque : on peut donnee des valeurs par defaut a tous les arguments ou tous les autres arguments sauf le premier
    function headerHtml($title = 'Titre par defaut', $fichierCss = 'wings') 
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
    function footerHtml($auteur = 'Soumare')
    {
        echo <<< EOT
            <hr>
            $auteur &copy; 2024
            </body>
            </html>
        EOT;   
    }

?>