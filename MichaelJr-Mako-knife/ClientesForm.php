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
    <body>
        <?php
        include_once './dao/AnimalDao.php';
        $nome = "";
        $especie = "";
        $qntvezesalimenta = "";
        $racao = "";
        $idade = "";
        $obs = "";
        $action = "inserir";

        if (isset($_REQUEST['editar'])) {

            $idAnimal = $_REQUEST['idAnimal'];

            $Animal = AnimalDao::getAnimalById($idAnimal);
            $nome = $Animal->getNome();
            $especie = $Animal->getespecie();
            $qntvezesalimenta = $Animal->getqntvezesalimenta();
            $racao = $Animal->getracao();
            $idade = $Animal->getidade();
            $obs = $Animal->getobs();
            $action = "editar&idAnimal=" . $idAnimal;
        }
        ?>
        <h3>Controle de Animals</h3>
        <form action="controller/AnimalController.php?<?php echo $action; ?>"
              method="post"
              id="idFrmAnimal">

            <br/> <label> Nome </label><br/>
            <input type="text" id="txNome" name="txNome"
                   value="<?= $nome ?>">
            <br/> <label> especie </label><br/>
            <input type="text" id="txespecie" name="txespecie"
                   value="<?= $especie ?>">
            <br/> <label> qntvezesalimenta </label><br/>
            <input type="number" id="txqntvezesalimenta" name="txqntvezesalimenta"
                   value="<?= $qntvezesalimenta ?>">
            <br/> <label> Tipo de Ração</label>
            <input  type="text" id="txracao" name="txracao"
                    value="<?= $racao ?>">
            <br/> <label> Idade </label>
            <input type="number" id="txidade" name="txidade"
                   value="<?= $idade ?>">
            <br/> <label> Observação </label></br>
            <input type="text" id="txobs" name="txobs"
                   value="<?= $obs ?>"></br>

            <input type="submit" id="btnEnviar" name="btnEnviar"/>
            <input type="reset" id="btnLimpar" name="btnLimpar"/>
        </form>
        </br>
        </br>
        </br>
        </br>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>especie</th>
                    <th>qntvezesalimenta</th>
                    <th>Ração</th>
                    <th>Idade</th>
                    <th>Observação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <?php
            include_once './dao/AnimalDao.php';
            $lista = AnimalDao::getAnimals();
            foreach ($lista as $Animal) {
                ?>
                <tbody>
                    <tr>
                        <td> <?= $Animal->getId() ?></td>
                        <td> <?= $Animal->getNome() ?></td>
                        <td> <?= $Animal->getespecie() ?></td>
                        <td> <?= $Animal->getqntvezesalimenta() ?></td>
                        <td> <?= $Animal->getracao() ?></td>
                        <td> <?= $Animal->getidade() ?></td>
                        <td> <?= $Animal->getobs() ?></td>
                        <td> <a href="AnimaisIndex.php?editar&idAnimal=
                                <?= $Animal->getId(); ?>">
                                Editar</a> / <a href="controller/AnimalController.php?excluir&idAnimal=
                                            <?= $Animal->getId(); ?>">Excluir </a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/resume.min.js"></script>

</body>

</html>
