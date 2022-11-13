<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio Estoque Now</title>
        <!-- CSS -->
        <?php
            include'./styles.php';
        ?>
        <!-- /CSS -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- /Bootstrap -->
    </head>
    <body>
        <!-- NAVBAR -->
        <header>
            <nav class="navbar navbar-expand-lg bg-light" style="background-color: #72127C !important;">
                <div class="container-fluid d-flex justify-content-space">
                    <a class="navbar-brand" href="#">Estoque Now</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            <a class="nav-link" href="add-product.php">Adicionar Produtos</a>
                            <a class="nav-link" href="product-list.php">Lista de produtos</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- /NAVBAR -->