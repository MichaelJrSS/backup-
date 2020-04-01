<?php

include_once '../Conexao.php';
include_once '../Animal.php';
include_once '../dao/AnimalDao.php';


if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $especie = $_POST['txespecie'];
        $qntvezesalimenta = $_POST['txqntvezesalimenta'];
        $racao = $_POST['txracao'];
        $idade = $_POST['txidade'];
        $obs = $_POST['txobs'];


        $Animal = new Animal();
        $Animal->setId($id);
        $Animal->setNome($nome);
        $Animal->setespecie($especie);
        $Animal->setqntvezesalimenta($qntvezesalimenta);
        $Animal->setracao($racao);
        $Animal->setidade($idade);
        $Animal->setobs($obs);

        $retorno = AnimalDao::inserir($Animal);

        if ($retorno) {
            header("Location: ../AnimaisIndex.php?exibir");
        }


        echo 'Nome:  ' . $nome;
        echo '<br/> especie: ' . $especie;
        echo '<br/>qntvezesalimenta: ' . $qntvezesalimenta;
        echo '<br/>racao: ' . $racao;
        echo '<br/>idade: ' . $idade;
        echo '<br/>obs: ' . $obs;
    } else {
        echo 'Nenhum Dado Cadastrado!';
    }
}

if (isset($_REQUEST['excluir'])) {
    $id = $_GET['idAnimal'];
    $Animal = new Animal();
    $Animal->setId($id);

    $retorno = AnimalDao::excluir($Animal);


    if ($retorno) {
        header("Location: ../AnimaisIndex.php");
    } else {
        header("Location: ../AnimaisIndex.php?erroExcluir");
    }
}


if (isset($_REQUEST['editar'])) {

    $id = $_GET['idAnimal'];
    $nome = $_POST['txNome'];
    $especie = $_POST['txespecie'];
    $qntvezesalimenta = $_POST['txqntvezesalimenta'];
    $racao = $_POST['txracao'];
    $idade = $_POST['txidade'];
    $obs = $_POST['txobs'];

    $Animal = new Animal();
    $Animal->setId($id);
    $Animal->setNome($nome);
    $Animal->setespecie($especie);
    $Animal->setqntvezesalimenta($qntvezesalimenta);
    $Animal->setracao($racao);
    $Animal->setidade($idade);
    $Animal->setobs($obs);


    $retorno = AnimalDao::editar($Animal);

    if ($retorno) {
        header("Location: ../AnimaisIndex.php");
    } else {
        header("Location: ../AnimaisIndex.php");
    }
}
?>