<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portée variable</title>
</head>

<body>
    <h1>Les variables locales et globales</h1>
</body>

</html>

<?php
/**
 * la portée d'une variable dépend du contexte dans
 *  lequel la variable est definie. Pour la majorité
 *  des variables, la portée concerne la totalité du script PHP
 */

// solution 1: pour avoir accer a la variable locale
// en utilisant le retour de la variable (c'est la meilleure)
function changerPrenom()
{
    $prenom = 'daouda';

    return $prenom;
}

// appelle de la fonction
$prenom = changerPrenom();
echo $prenom;
echo '<br>';

// solution 2: pour avoir accer a la variable locale
// en utilisant le passage par reference (une solution a bannir)
function changerNom(&$nom)
{
    $nom = 'soumare';
}

// appelle de la fonction
changerNom($nom);
echo $nom;
echo '<br>';

// solution 3: pour avoir accer a la variable locale
// en utilisant le mot cle globale devant la variable (une solution a bannir)
function changerSurNom()
{
    global $surNom; // $surNOm est accessible e dehors de la fonction, sa portée est maintenant globale au script
    $surNom = 'rachid';
}

// appelle de la fonction
changerSurNom();
echo $surNom;
echo '<br>';
