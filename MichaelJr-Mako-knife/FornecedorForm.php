<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Area Administrativa</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="css/resume.min.css" rel="stylesheet">
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Makø Knife</span>
                <span class="d-none d-lg-block">
                    <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="ClientesForm.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="FornecedorForm.php">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="ProdutosForm.php">Produtos</a>
                    </li>
                </ul>
            </div>
        </nav>
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
            <h3>Controle de Fornecedores</h3>
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

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/resume.min.js"></script>

    </body>

</html>
