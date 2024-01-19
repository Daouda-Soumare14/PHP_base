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

?>