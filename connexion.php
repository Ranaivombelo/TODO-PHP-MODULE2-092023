<?php

//Paramètres de connexion à la base de données
$dsn = 'mysql:host=' .DB_HOST. ';dbname=' .DB_NAME;
$username = DB_USER;
$password = DB_PASSWEORD;

try {
    // Création de l'objet PDO
    $pdo = new PDO($dsn, $username, $password);

    //configuration des options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Vous êtes maintenant connecté à la base de données

    // ... Votre code pour exécuter des requêtes et effectuer des opérations

} catch (PDOException $e) {
    // En cas d'erreur de connexion, affichage du message d'erreur
    echo 'Erreur de connexion :' .$e->getMessage();

}