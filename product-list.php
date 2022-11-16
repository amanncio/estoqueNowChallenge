<!-- Import da conexão com o banco de dados -->
<?php include("db-connection.php"); ?>
<?php include("header.php"); ?>

<!-- Função delete -->
<?php deleteProduct(); ?> 

<div class="container">
    <div class="central-content-list">
        <div class="btn-keep-buying">
            <a href="add-product.php" class="btn btn-primary">Add +</a>
        </div>
        <div class="view-table">
            <div class="mb-4 d-flex justify-content-space-between">
                <h2>Lista de Produtos</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço Un.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //Ler todas as linhas da tabela do banco de dados
                        $sql = "SELECT * FROM products";
                        $result = $conn->query($sql);

                        if(!$result) {
                            die("Consulta inválida:" . $conn->error);
                        }else{
                            // echo 'Consulta OK!';
                        }
                        
                        /*
                        ADICIONANDO DADOS A TABELA UTILIZANDO FOREACH
                        if(mysqli_num_rows($result) > 0) {
                            foreach($result as $product) {
                                echo "
                                <tr>
                                    <td>$product[name]</td>
                                    <td>$product[amount]</td>
                                    <td>$product[price]</td>
                                    <td>
                                        <a class='btn btn-danger btn-sm' href='/estudo-crud-php/delete.php?id=$product[id]'>Deletar</a>
                                    </td>
                                </tr>
                            ";
                            }
                        }else {
                            echo "<h4>Sem dados</h4>";
                        }
                        */

                        //ADICIONANDO DADOS A TABELA UTILIZANDO WHILE E FETCH ASSOC
                        // $row = $result->fetch_assoc();
                        $totalPrice = 0;
                        
                        while($row = $result->fetch_assoc()) {
                            echo "                                
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[amount]</td>
                                    <td>$row[price]</td>
                                    <td>
                                        <form action='product-list.php' method='POST'>
                                            <button class='btn btn-danger btn-sm' type='submit' value='$row[id]' name='delete-product'>Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            ";

                            //Calculando valor total dos produtos
                            $totalPrice += ($row['price'] * $row['amount']);
                        }

                        //Calcular desconto. 
                        if(isset($_POST['discountSelect'])) {
                            $discountSelect = $_POST['discountSelect'];
                            $setDiscount = $totalPrice * ($discountSelect / 100);
                            $totalPrice -= $setDiscount;
                            number_format($totalPrice, 2, ',', '.');
                        }
                        
                        //Converter para centavos
                        $totalInCents = $totalPrice * 100;
                        
                        //Deletar Produtos
                        function deleteProduct() {
                            include("db-connection.php"); 
                            if(isset($_POST['delete-product'])) {
                                $productId = mysqli_real_escape_string($conn, $_POST['delete-product']);
                                $query = "DELETE FROM products WHERE id='$productId' ";
                                $queryRun = mysqli_query($conn, $query);

                                if($queryRun) {
                                    echo"
                                        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                            Produto deletado!
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>
                                    ";
                                }else {
                                    echo"O produto não foi deletado!";
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>

            <!-- Formulário do discountSelect -->
            <form class="mt-4" action="" method="POST">
                <div class="mb-5 d-flex flex-column">
                    <span class="span-total-values"><strong class="mb-2 total-values">Valor total em reais: </strong> R$<?=number_format($totalPrice, 2, ',', '.');?></span>
                </div>
                <div class="discount-div d-flex gap-2 mb-2">
                    <label for="discountSelect"><strong>Desconto:</strong></label>
                    <select name="discountSelect" id="discountSelect" class='form-select form-select-sm discount-select' aria-label='.form-select-sm example'>
                        <option selected disabled>Sem desconto</option>
                        <!-- <option value='0'>0%</option> -->
                        <option value='15'>5%</option>
                        <option value='10'>10%</option>
                        <option value='15'>15%</option>
                        <option value='25'>25%</option>
                        <option value='30'>30%</option>
                        <option value='50'>50%</option>
                    </select>
                    <input class="btn btn-success btn-set-discount" type="submit" value="Aplicar desconto">
                </div>
                <div class="total-value">
                    <span class="span-total-values"><strong class="mb-2 total-values">Valor total em centavos: </strong><?=intval($totalInCents)?></span>
                </div>
            </form>
            <!-- /Formulário do discountSelect -->
        </div>
    </div>
</div>
<?php include("footer.php"); ?>