<?php
    $name = $_GET['productName'];
    $amount = $_GET['amount'];
    $price = $_GET['price'];
?>

<?php include("header.php") ?>
    <div class="alert alert-success" role="alert">
    O produto <?= $name ?> foi adicionado com sucesso!
    </div>      
<?php include("footer.php") ?>