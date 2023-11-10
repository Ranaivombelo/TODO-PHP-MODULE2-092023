<?php
    include('config/app.php');
    include('config/db.php');
    include('connexion.php');

    include('fct/request.php');
    include('fct/item.php');


    $intitule = post ('intitule');

    $query = "INSERT INTO todo (intitule) VALUES(:intitule)";
    $stmt = $pdo->prepare($query);

    $intitule = post('intitule');
    $stmt->bindParam('intitule',$intitule);
    $stmt->execute();

    //Traitement de nouvel item
    header('Location:index.php');