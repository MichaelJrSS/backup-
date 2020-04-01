<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fornecedores</title>
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
        include_once './dao/FornecedorDao.php';
        $empresa = "";
        $cnpj = "";
        $email = "";
        $fone = "";
        $rua = "";
        $numero = "";
        $complemento = "";
        $bairro = "";
        $cidade = "";
        $action = "inserir";

        if (isset($_REQUEST['editar'])) {

            $idPessoa = $_REQUEST['idPessoa'];

            $pessoa = FornecedorDao::getPessoaById($idPessoa);

            $empresa = $pessoa->getEmpresa();
            $cnpj = $pessoa->getCnpj();
            $email = $pessoa->getEmail();
            $fone = $pessoa->getTelefone();
            $rua = $pessoa->getRua();
            $numero = $pessoa->getNumero();
            $complemento = $pessoa->getComplemento();
            $bairro = $pessoa->getBairro();
            $cidade = $pessoa->getCidade();
            $action = "editar&idPessoa=" . $idPessoa;
        }
        ?>
        <div class="container">
            <h1>Controle de Fornecedores</h1>
            <form action="controller/FornecedorController.php?<?php echo $action; ?>"
                  method="post"
                  id="idFrmPessoa">
                <div class="form-group">
                    <br/> <label> Nome da Empresa </label>
                    <input class="form-control" type="text" id="txEmpresa" name="txEmpresa"
                           value="<?= $empresa ?>">
                    <br/> <label> CNPJ </label>
                    <input class="form-control-sm" type="text" id="txCnpj" name="txCnpj"
                           value="<?= $cnpj ?>">
                    <br/> <label> E-mail </label>
                    <input class="form-control" type="email" id="txEmail" name="txEmail"
                           value="<?= $email ?>">
                    <br/> <label> Telefone </label>
                    <input class="form-control-sm" type="text" id="txFone" name="txFone"
                           value="<?= $fone ?>">
                    <br/> <label> Endereço </label> <br/>
                    Rua: <input class="form-control" type="text" id="txRua" name="txRua"
                                value="<?= $rua ?>">
                    Numero:  <input class="form-control-sm" type="text" id="txNumero" name="txNumero"
                                    value="<?= $numero ?>"></br>
                    Complemento: <input class="form-control" type="text" id="txComp" name="txComp"
                                        value="<?= $complemento ?>"></br>
                    Bairro: <input class="form-control" type="text" id="txBairro" name="txBairro"
                                   value="<?= $bairro ?>"></br>
                    Cidade: <input class="form-control" type="text" id="txCidade" name="txCidade"
                                   value="<?= $cidade ?>"></br>
                </div>
                <input type="submit" id="btnEnviar" name="btnEnviar"/>
                <input type="reset" id="btnLimpar" name="btnLimpar"/>
            </form>
        </div>


        <?php
//   if (isset($_REQUEST['exibir'])) {
        ?>
        <div class="container-fluid">

            <table class="table table-striped badge-dark table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Empresa</th>
                        <th>CNPJ</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <?php
                include_once './dao/FornecedorDao.php';
                $lista = FornecedorDao::getPessoas();
                foreach ($lista as $pessoa) {
                    ?>
                    <tbody>
                        <tr>
                            <td> <?= $pessoa->getId() ?></td>
                            <td> <?= $pessoa->getEmpresa() ?></td>
                            <td> <?= $pessoa->getCnpj() ?></td>
                            <td> <?= $pessoa->getEmail() ?></td>
                            <td> <?= $pessoa->getTelefone() ?></td>
                            <td> <?= $pessoa->getRua() ?></td>
                            <td> <?= $pessoa->getNumero() ?></td>
                            <td> <?= $pessoa->getComplemento() ?></td>
                            <td> <?= $pessoa->getBairro() ?></td>
                            <td> <?= $pessoa->getCidade() ?></td>

                            <td> <a href="FornecedorForm.php?editar&idPessoa=
                                    <?= $pessoa->getId(); ?>">
                                    Editar</a> / <a href="controller/FornecedorController.php?excluir&idPessoa=
                                                <?= $pessoa->getId(); ?>">Excluir </a> </td>

                        </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
//  }
        ?>
        <script src="js/fastclick.js"></script>
        <script src="js/scroll.js"></script>
        <script src="./js/jquery.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.js"></script>
    </body>
</html>
