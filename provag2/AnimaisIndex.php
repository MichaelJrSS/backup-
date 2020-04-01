<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Controle de Animais</title>
    </head>

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
        <h3>Controle de Animais</h3>
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
        <table border 2>
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
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>