<?php include("header.php") ?>
    <div class="container">
        <div class="central-content">
            <div class="mb-4">
                <h2>Pedido de venda</h2>
            </div>
            
            <form action="product-list.php" method="get">
                <div class="form-group mb-3">
                    <label for="productName">Nome do produto</label>
                    <div class="input-required">
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Digite o nome do produto">
                        <span class="required">*</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="amount">Quantidade</label>
                    <div class="input-required">
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Quantidade desejada">
                        <span class="required">*</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="price">Preço</label>
                    <div class="input-required">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto">
                        <span class="required">*</span>
                    </div>
                </div>

                <div class="buttons">
                    <input class="btn btn-primary" type="submit" value="Adicionar">
                    <!-- <a class="btn btn-primary">Adicionar</a> -->
                    <button type="submit" class="btn btn-success">Finalizar compra</button>
                </div>
            </form>
        </div>
    </div>
<?php include("footer.php") ?>