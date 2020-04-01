<?php

include_once '../Conexao.php';
include_once '../Produto.php';
include_once '../dao/ProdutoDao.php';


if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $categoria = $_POST['txCategoria'];
        $quantidade = $_POST['txQuantidade'];
        $datacompra = $_POST['txDatacompra'];
        $datavalidade = $_POST['txDatavalidade'];
        $descricao = $_POST['txDescricao'];


        $produto = new Produto();
        $produto->setId($id);
        $produto->setNome($nome);
        $produto->setCategoria($categoria);
        $produto->setQuantidade($quantidade);
        $produto->setDatacompra($datacompra);
        $produto->setDatavalidade($datavalidade);
        $produto->setDescricao($descricao);

        $retorno = ProdutoDao::inserir($produto);

        if ($retorno) {
            header("Location: ../ProdutosForm.php?exibir");
        }


        echo 'Nome:  ' . $nome;
        echo '<br/> Categoria: ' . $categoria;
        echo '<br/>quantidade: ' . $quantidade;
        echo '<br/>DataCompra: ' . $datacompra;
        echo '<br/>datavalidade: ' . $datavalidade;
        echo '<br/>descricao: ' . $descricao;
    } else {
        echo 'Nenhum Dado Cadastrado!';
    }
}

if (isset($_REQUEST['excluir'])) {
    $id = $_GET['idProduto'];
    $produto = new Produto();
    $produto->setId($id);

    $retorno = ProdutoDao::excluir($produto);


    if ($retorno) {
        header("Location: ../ProdutosForm.php");
    } else {
        header("Location: ../ProdutosForm.php?erroExcluir");
    }
}


if (isset($_REQUEST['editar'])) {

    $id = $_GET['idProduto'];
    $nome = $_POST['txNome'];
    $categoria = $_POST['txCategoria'];
    $quantidade = $_POST['txQuantidade'];
    $datacompra = $_POST['txDatacompra'];
    $datavalidade = $_POST['txDatavalidade'];
    $descricao = $_POST['txDescricao'];

    $produto = new Produto();
    $produto->setId($id);
    $produto->setNome($nome);
    $produto->setCategoria($categoria);
    $produto->setQuantidade($quantidade);
    $produto->setDatacompra($datacompra);
    $produto->setDatavalidade($datavalidade);
    $produto->setDescricao($descricao);


    $retorno = ProdutoDao::editar($produto);

    if ($retorno) {
        header("Location: ../ProdutosForm.php");
    } else {
        header("Location: ../ProdutosForm.php");
    }
}
?>