<?php include("db-connection.php"); ?>
<?php include("header.php"); ?>
    <?php
        //Inicializando variáveis do formulário
        $name = "";
        $amount = 1;
        $price = 0.00;
        // $amount = $_POST['amount'];
        // $price = $_POST['price'];

        //Inicializando variáveis da Validação de campos obrigatórios
        $nameError = $amountError = $priceError= "";

        //VALIDAÇÕES
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['productName'];
            $amount = $_POST['amount'];
            $price = doubleval($_POST['price']);

            //VALIDAÇÃO DO REQUIRED + APLICAÇÃO DA FUNÇÃO test_input
            if (empty($name)) {
                $nameError = "Obrigatório";
            } else {
                $name = test_input($name);
            }

            if (empty($amount)) {
                $amountError = "Obrigatório";
            } else {
                $amount = test_input($amount);
            }

            if (empty($price)) {
                $priceError = "Obrigatório";
            } else {
                $price = doubleval(test_input($price));
            }

            if(empty($name) || empty($amount) || empty($price)) {
                echo"
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Preencha todos os campos do formulário!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
            } else {
                echo"
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        O produto " . $name . " foi adicionado com sucesso!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
                
                //Inserir dados no DB
                $sql = "INSERT INTO products (name, amount, price)
                    VALUES ('$name', $amount, $price)";
                    
                if ($conn->query($sql) === TRUE) {
                // echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }  
            }    
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
    ?>
    
    <div class="container">
        <div class="central-content">
            <div class="mb-4">
                <h2>Pedido de venda</h2>
            </div>

            <!-- Formulário -->
            <form action="" method="POST">
                <div class="form-group mb-2">
                    <label for="productName">Nome do produto<span class="required">*</span></label>
                    <div class="input-required">
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Digite o nome do produto">
                        <span class="required"><?=$nameError;?></span>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="amount">Quantidade<span class="required">*</span></label>
                    <div class="input-required">
                        <input type="number"  class="form-control" id="amount" name="amount" placeholder="Quantidade desejada">
                        <span class="required"><?=$amountError;?></span>
                    </div>
                </div>
                <div class="mb-0">
                    <label for="price">Preço<span class="required">*</span></label>
                    <div class="input-required">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto">
                        <span class="required"><?=$priceError;?></span>
                    </div>
                </div>

                <div class="buttons">
                    <input class="btn btn-primary" type="submit" value="Adicionar">
                    <a href="product-list.php" class="btn btn-success">Mostrar Carrinho</a>
                </div>
            </form>
            <!-- /Formulário -->

        </div>
    </div>
<?php include("footer.php"); ?>