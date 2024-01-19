<?php
    $messages = [];
    foreach($_FILES as $file)
    {
        // on verifie s'il y a un fichier uploader si oui on fait les traitements sinon a passe a l'iteration suivante grace au mot cle continue 
        if($file['error'] == UPLOAD_ERR_NO_FILE)
        {
            continue;
        }
        $cheminTemporaire = $file['tmp_name'];
        $cheminDestination = 'upload/'.$file['name'];
        if(move_uploaded_file($cheminTemporaire, $cheminDestination))
        {
            // etant donne qu'on a plusieurs messages, on va les enregistres dans une variable $messages de type tableau qui sera initialiser avant le foreach
            $messages[] = 'Le fichier "'.$file['name'].'" a été correctement uploadé';
        }
        else
        {
            $messages[] = 'Le fichier "'.$file['name'].'" n\'a pas été correctement uploadé';

        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de plusieurs fichiers</title>
</head>
<body>
    <h1>pload de plusieurs fichiers</h1>
    
    <ul>
        <?php foreach ($messages as $message):?>
            <li><?= $message ?></li>
        <?php endforeach ?>   
    </ul>
    
</body>
</html>

