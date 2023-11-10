<?php
include('fct/item.php');
include('fct/request.php');
include('config/app.php');
include('config/db.php');
include('connexion.php');


$id = get('item');
$query = 'UPDATE todo SET checked =1-checked WHERE id=:id';
$stmt = $pdo->prepare($query);

$stmt->bindParam('id',$id);
$stmt->execute();



$item[$id]['checked'] = !$item[$id]['checked'];

saveItems($items);

header('Location:index.php');