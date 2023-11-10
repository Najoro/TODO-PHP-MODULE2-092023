<?php 

$dns = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$username = DB_USERS;
$password = DB_PASSWORD;

try {
    $pdo = new PDO($dns,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "erreur connexion :".$e->getMessage();
}

?>