<?php
include('config/app.php');
include('html/header.php');
include('fct/item.php');
include("fct/request.php");

include("./config/config.php");
include("connexion.php");

?>
<header>
    <div class="logo">
        <img src="img/sayna.png" alt="sayna">
    </div>
</header>

<div class="todo">
    <h1 class="title"><?= APP_NAME ?></h1>
    <div class="add-items">
        <form action="addItem.php" method="POST">
            <input type="text" name="item" id="item">
            <button type="submit">+</button>
        </form>
    </div>
    <div class="result-items">
            <?php 
                $query = 'SELECT * FROM todo';
                $stmt = $pdo->query($query);
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo displayItem($row['id'] , $row['item']);
                }
            ?>
    </div>
</div>

<?php include('html/footer.php')?>
