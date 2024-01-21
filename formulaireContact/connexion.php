<?php
$hote = "localhost";
$user = "root";
$password = "root";
$dbName = "base_php";

$dns = "mysql:host=$hote;dbname=$dbName;charset=utf8";
try {
    $objetPdo = new PDO($dns, $user, $password);
    //die("Connexion réussie !");
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}
