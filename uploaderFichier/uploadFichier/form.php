<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uploader Fichier</h1>
    <form action="recupForm.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="fileName">Nom du fichier (apres upload)</label><br>
            <input type="text" id="fileName" name="fileName" value="">
        </p>
        <p><input type="file" name="fichier"></p>
        <p><input type="submit" value="Enregistrer"></p>
    </form>
    
</body>
</html>