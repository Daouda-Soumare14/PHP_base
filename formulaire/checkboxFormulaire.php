<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire d'ajout d'un contact</h1>
    <form action="recupCheckbox.php" method="post">
        <p>
            <label for="nom">Votre nom</label><br>
            <input type="text" id="nom" name="lastName">
        </p>
        <p>
            <label for="nom">Votre prenom</label><br>
            <input type="text" id="prenom" name="firstName">
        </p>
        <p>Vous etes</p>
        <p>
            <input type="radio" id="sexe" name="sexe" value="h" checked="checked">
            <label for="sexe">un homme</label>
            <input type="radio" id="sexe" name="sexe" value="f">
            <label for="sexe">une femme</label>
        </p>
        <p>
            <label for="memo">Tapez un commentaire sur le contact</label><br>
            <textarea name="com" id="memo" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="groupe">Groupe de contacts</label>
            <select name="groupe" id="groupe">
                <option value="1">Famille</option>
                <option value="2">Ami</option>
                <option value="3">Travail</option>
                <option value="4">Autres</option>
            </select>
        </p>
        
        <p>Langues parlees</p>
        <input type="checkbox" name="langues[]" value="fr">Francais<br>
        <input type="checkbox" name="langues[]" value="an">Anglais<br>
        <input type="checkbox" name="langues[]" value="ab">Arabe<br>
        <input type="checkbox" name="langues[]" value="md">Mandarin<br>
        <input type="checkbox" name="langues[]" value="al">Allemand<br>

        <p>
            <input type="submit" value="Enregistrer">
        </p>
    </form>
</body>
</html>