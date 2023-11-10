<?php
include("fct/request.php");
include("fct/item.php");
include("config/app.php");
include("./config/config.php");
include("connexion.php");

#recuperer dans la methode poste l'item a editer qui renvoye 2 valeur le resultat et le id
$resultEditItem = post('resultEditItem');

#l'id a modifier
$id = post('hiddenID');

#le query du sql pour editer
$query = 'UPDATE todo SET item=:item WHERE id=:id';
#preparer
$stmt = $pdo->prepare($query);

#modifier la valeur de id et item
$stmt->bindParam('item', $resultEditItem);
$stmt->bindParam('id', $id);

#executer
$stmt->execute();


header("Location:index.php");

?>