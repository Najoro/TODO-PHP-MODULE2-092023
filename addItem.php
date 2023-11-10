<?php
    #importation
    include('fct/request.php');
    include('fct/item.php');
    include('config/app.php');
    include("./config/config.php");
    include("connexion.php");
    # insertion du donne dans la methode post
    $item = post('item');
    
    $query = "INSERT INTO todo(item) VALUES (:item)";
    $stmt = $pdo->prepare($query);
    
    $stmt->bindParam('item', $item);
    $stmt->execute();
    
    #le page a afficher
    header("Location:index.php");
?>