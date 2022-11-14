<!-- Import da conexão com o banco de dados -->
<?php include("db-connection.php"); ?>

<?php include("header.php"); ?>
    <div class="container">
        <div class="central-content">
            <div class="view-table">
                <div class="mb-4">
                    <h2>Lista de Produtos</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
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

                            

                            $row = $result->fetch_assoc();
                            $totalPrice = 0;
                            
                            while($row = $result->fetch_assoc()) {
                                echo "
                                    <tr>
                                        <td>$row[name]</td>
                                        <td>$row[amount]</td>
                                        <td>$row[price]</td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' href='/estudo-crud-php/edit.php?id=$row[id]'>Editar</a>
                                            <a class='btn btn-danger btn-sm' href='/estudo-crud-php/delete.php?id=$row[id]'>Deletar</a>
                                        </td>
                                    </tr>
                                ";

                                //Calculando valor total dos produtos
                                $totalPrice += ($row['price'] * $row['amount']);
                            }

                            //Calcular desconto
                            if(isset($_POST["discountSelect"])) {
                                echo 'Disconto OK!';
                                $discountSelect = $_POST["discountSelect"];
                            }else{
                                echo"F";
                            }

                            //Convertendo totalPrice para "centavos"
                            

                        ?>
                    </tbody>
                </table>

                <!-- Formulário do discountSelect -->
                <form class="mt-4" action="product-list.php" method="POST">
                    <div class="discount-div d-flex gap-2 mb-2">
                        <label for="discountSelect"><strong>Desconto:</strong></label>
                        <select name="discountSelect" id="discountSelect" class='form-select form-select-sm discount-select' aria-label='.form-select-sm example'>
                            <option selected>Sem desconto</option>
                            <option value='15'>5%</option>
                            <option value='10'>10%</option>
                            <option value='15'>15%</option>
                            <option value='25'>25%</option>
                            <option value='30'>30%</option>
                            <option value='50'>50%</option>
                        </select>
                    </div>
                    <div class="total-values d-flex flex-column">
                        <span><strong class="mb-2">Valor total em R$: </strong><?=$totalPrice?></span>
                        <strong>Valor total em centavos:</strong> 
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>