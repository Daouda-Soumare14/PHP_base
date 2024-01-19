<?php
    //--------------------------------------------------------------
    //  controle de securité 
    // 1) on verifie d'abord si le fichier a t'il été envoyé
    if(!empty($_FILES['fichier']['tmp_name']))
    {
        // 2) on verifie si le fichier a t'il été correctement oploadé
        if(is_uploaded_file($_FILES['fichier']['tmp_name']))
        {
            // 3) le fichier a t'il un type autorisé
            $typeMime = mime_content_type($_FILES['fichier']['tmp_name']);
            if($typeMime == 'Applicaion/pdf')
            {
                // 4) le fichier respecte a t'il la taille limite
                $size = filesize($_FILES['fichier']['tmp_name']);
                if($size > 10000)
                {
                    $message = "le fichier ne doit pas depasser 10 000 octets";
                }
                else
                {
                    // 5) nettoyer le nom du fichier
                    $nomAvantNettoyage = $_POST['fileName'];
                    // 5-1) remplacer les caracteres qui ne sont ni des lettres ni des nombes par un tiré(-)
                    $nomEnCourDeNettoyage = preg_replace('~[^\\pL\d]+~u', '-', $nomAvantNettoyage);
                    // 5-2) retirer les tirés en debut et en fin de chaine
                    $nomEnCourDeNettoyage = trim($nomEnCourDeNettoyage. '-');
                    // 5-3) passer d'un encodage 'UTF-8' a un encodage
                    $nomEnCourDeNettoyage = iconv('utf-8', 'us-ascii//TRANSLIT', $nomEnCourDeNettoyage);
                    // 5-4) on met le nom en miniscule
                    $nomEnCourDeNettoyage = strtolower($nomEnCourDeNettoyage);
                    // 5-5) supprimer les caracteres indesirables
                    $nomNettoye = preg_replace('~[^\\pL\d]+~u', '', $nomAvantNettoyage);
                    // 5-6) chemin complet de destination (avec l'extension)
                    $extension = substr(strchr($_FILES['fichier']['name'], '.'), 1); 
                    $cheminDeDestination = 'upload/'.$nomNettoye.'.'.$extension;
                    // 5-7) on peut maintenant deplacer le fichier avec le nouveau nom
                    $moveIsOk = move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminDeDestination); 
                    if($moveIsOk)
                    {
                        $message = 'le fichier a été uploader dans '.$cheminDeDestination; // dans la realité il ne faut jamais dire ou sont uploades les fichiers
                    }
                    else
                    {
                        $message = 'suite a une erreur le fichier n\'a pas été uploader';
                    }
                }
            }
            else
            {
                $message = "il faut obligatoirement proposer un fichier pdf";
            }
        }
        else
        {
            $message = "un probleme a eu lieu lors de l'upload";
        }
    }
    else
    {
        $message = "Aucun fichier a telecharger";
    }
    //--------------------------------------------------------------
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
