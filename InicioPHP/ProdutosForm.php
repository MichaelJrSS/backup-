<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Produtos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">

    </head>
    <body>
        <header>
            <a href="#home" class="logo" data-scroll>Area Administrativa</a>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item active"><a href="index.html" data-scroll>Home</a></li>
                    <li class="menu-item"><a href="ClientesForm.php" data-scroll>Clientes</a></li>
                    <li class="menu-item"><a href="FornecedorForm.php" data-scroll>Fornecedores</a></li>
                    <li class="menu-item"><a href="ProdutosForm.php" data-scroll>Produto</a></li>

                </ul>
            </nav>
        </header>
        <?php
        include_once './dao/ProdutoDao.php';
        $nome = "";
        $categoria = "";
        $categoria = "";
        $quantidade = "";
        $datacompra = "";
        $datavalidade = "";
        $descricao = "";
        $action = "inserir";

        if (isset($_REQUEST['editar'])) {

            $idProduto = $_REQUEST['idProduto'];

            $produto = ProdutoDao::getProdutoById($idProduto);
            $nome = $produto->getNome();
            $categoria = $produto->getCategoria();
            $quantidade = $produto->getQuantidade();
            $datacompra = $produto->getDatacompra();
            $datavalidade = $produto->getDatavalidade();
            $descricao = $produto->getDescricao();
            $action = "editar&idProduto=" . $idProduto;
        }
        ?>
        <div class="container">
            <h1>Controle de Produtos</h1>
            <form action="controller/ProdutoController.php?<?php echo $action; ?>"
                  method="post"
                  id="idFrmProduto">
                <div class="form-group">
                    <br/> <label> Nome </label><br/>
                    <input class="form-control" type="text" id="txNome" name="txNome"
                           value="<?= $nome ?>">
                    <br/> <label> Categoria </label><br/>
                    <input class="form-control" type="text" id="txCategoria" name="txCategoria"
                           value="<?= $categoria ?>">
                    <br/> <label> Quantidade </label><br/>
                    <input class="form-control" type="number" id="txQuantidade" name="txQuantidade"
                           value="<?= $quantidade ?>">
                    <br/> <label> Data da compra </label>
                    <input class="form-control-sm" type="date" id="txDatacompra" name="txDatacompra"
                           value="<?= $datacompra ?>">
                    <br/> <label> Validade </label>
                    <input class="form-control-sm" type="date" id="txDatavalidade" name="txDatavalidade"
                           value="<?= $datavalidade ?>">
                    <br/> <label> Descrição </label></br>
                    <input class="form-control" type="text" id="txDescricao" name="txDescricao"
                           value="<?= $descricao ?>"></br>
                </div>
                <input type="submit" id="btnEnviar" name="btnEnviar"/>
                <input type="reset" id="btnLimpar" name="btnLimpar"/>
            </form>
        </div>
        <?php
        ?>

        <div class="container-fluid">

            <table class="table table-striped badge-dark table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Data da compra</th>
                        <th>Validade</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <?php
                include_once './dao/ProdutoDao.php';
                $lista = ProdutoDao::getProdutos();
                foreach ($lista as $produto) {
                    ?>
                    <tbody>
                        <tr>
                            <td> <?= $produto->getId() ?></td>
                            <td> <?= $produto->getNome() ?></td>
                            <td> <?= $produto->getCategoria() ?></td>
                            <td> <?= $produto->getQuantidade() ?></td>
                            <td> <?= $produto->getDatacompra() ?></td>
                            <td> <?= $produto->getDatavalidade() ?></td>
                            <td> <?= $produto->getDescricao() ?></td>
                            <td> <a href="ProdutosForm.php?editar&idProduto=
                                    <?= $produto->getId(); ?>">
                                    Editar</a> / <a href="controller/ProdutoController.php?excluir&idProduto=
                                                <?= $produto->getId(); ?>">Excluir </a> </td>

                        </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
        ?>
        <script src="js/fastclick.js"></script>
        <script src="js/scroll.js"></script>
        <script src="./js/jquery.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.js"></script>
    </body>
</html>
