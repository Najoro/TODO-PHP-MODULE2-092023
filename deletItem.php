<?php
#inclusion des fichier
include('fct/request.php');
include('fct/item.php');
include('config/app.php');
include("./config/config.php");
include("connexion.php");

#recuper depuit la methode get l' id(key) de l'item a supprimer
$id = get('item');
$query = "DELETE FROM todo WHERE id=:id";
$stmt = $pdo->prepare($query);

$stmt->bindParam('id', $id);
$stmt->execute();


header("Location:index.php");

?>