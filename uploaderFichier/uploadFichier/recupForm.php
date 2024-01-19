<?php

    $cheminEtNomTemporaire = $_FILES['fichier']['tmp_name']; // tmp_name qui est la cle du nom temporaire des fichiers vu sur var_dump

    // recuperation de l'extension du fichier
    $extension = substr(strchr($_FILES['fichier']['name'], '.'), 1); // name qui est la cle du nom des fichiers vu sur var_dump
    $nouveauNom = $_POST['fileName'].'.'.$extension;

    // permet de deplacer le fichier dans un dossier nomé upload
    $cheminEtNomDefinitif = 'upload/'.$nouveauNom; 

    $moveIsOk = move_uploaded_file($cheminEtNomTemporaire, $cheminEtNomDefinitif); 
    // on test si le fichier a été bien uploader
    if($moveIsOk)
    {
        $message = 'le fichier a été uploader dans '.$cheminEtNomDefinitif;
    }
    else
    {
        $message = 'suite a une erreur le fichier n\'a pas été uploader';
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement upload</title>
</head>
<body>
    <h1>Upload</h1>

    <p><?= $message ?></p>
</body>
</html>
