<?php
    function headerHtml()
    {
        echo <<< EOT
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>fonctions</title>
            </head>
            <body>
                <h1>Les Fonctions</h1>
        EOT;   
    }
    function footerHtml()
    {
        echo <<< EOT
            <hr>
            Daouda &copy; 2024
            </body>
            </html>
        EOT;   
    }

?>