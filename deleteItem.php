<?php

include('fct/item.php');
include('fct/request.php');
include('config/app.php');


#TODO à supprimer
$items = getItems();

$query = "DELETE todo WHERE id=:id";
$stmt = $pdo->prepare($query);

$stmt->bindParam('id',$id);
$stmt->execute();

header('Location:index.php');