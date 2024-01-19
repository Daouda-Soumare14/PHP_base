<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire d'upload de plusieurs fichiers</h1>
    
    <form action="recupForm.php" method="post" enctype="multipart/form-data">
        <!-- (p>input[type=file name=fichier$$])*10 -->
        <p><input type="file" name="fichier01"></p>
        <p><input type="file" name="fichier02"></p>
        <p><input type="file" name="fichier03"></p>
        <p><input type="file" name="fichier04"></p>
        <p><input type="file" name="fichier05"></p>
        <p><input type="file" name="fichier06"></p>
        <p><input type="file" name="fichier07"></p>
        <p><input type="file" name="fichier08"></p>
        <p><input type="file" name="fichier09"></p>
        <p><input type="file" name="fichier10"></p>

        <p><input type="submit" name="enregistrer" value="Enregistrer"></p>
    </form>
    
</body>
</html>