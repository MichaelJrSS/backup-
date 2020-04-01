<?php

include_once '../Conexao.php';
include_once '../Pessoa.php';
include_once '../dao/FornecedorDao.php';


if (isset($_REQUEST['inserir'])) {
    if ($_POST['txEmpresa'] != "") {
        $empresa = $_POST['txEmpresa'];
        $cnpj = $_POST['txCnpj'];
        $email = $_POST['txEmail'];
        $telefone = $_POST['txFone'];
        $rua = $_POST['txRua'];
        $numero = $_POST['txNumero'];
        $complemento = $_POST['txComp'];
        $bairro = $_POST['txBairro'];
        $cidade = $_POST['txCidade'];

        $pessoa = new Pessoa();
        $pessoa->setEmpresa($empresa);
        $pessoa->setCnpj($cnpj);
        $pessoa->setEmail($email);
        $pessoa->setTelefone($telefone);
        $pessoa->setRua($rua);
        $pessoa->setNumero($numero);
        $pessoa->setComplemento($complemento);
        $pessoa->setBairro($bairro);
        $pessoa->setCidade($cidade);

        $retorno = FornecedorDao::inserir($pessoa);

        if ($retorno) {
            header("Location: ../FornecedorForm.php?exibir");
        }


        echo 'Empresa:  ' . $Empresa;
        echo '<br/> CNPJ: ' . $cnpj;
        echo '<br/>Email: ' . $email;
        echo '<br/>Telefone: ' . $telefone;
        echo '<br/>Rua: ' . $rua;
        echo '<br/>Número: ' . $numero;
        echo '<br/>Complemento: ' . $complemento;
        echo '<br/>Bairro: ' . $bairro;
        echo '<br/>Cidade: ' . $cidade;
    } else {
        echo 'Nenhum Dado Cadastrado!';
    }
}

if (isset($_REQUEST['excluir'])) {
    $id = $_GET['idPessoa'];
    $pessoa = new Pessoa();
    $pessoa->setId($id);

    $retorno = FornecedorDao::excluir($pessoa);


    if ($retorno) {
        header("Location: ../FornecedorForm.php");
    } else {
        header("Location: ../FornecedorForm.php?erroExcluir");
    }
}


if (isset($_REQUEST['editar'])) {

    $id = $_GET['idPessoa'];
    $empresa = $_POST['txEmpresa'];
    $cnpj = $_POST['txCnpj'];
    $email = $_POST['txEmail'];
    $telefone = $_POST['txFone'];
    $rua = $_POST['txRua'];
    $numero = $_POST['txNumero'];
    $complemento = $_POST['txComp'];
    $bairro = $_POST['txBairro'];
    $cidade = $_POST['txCidade'];

    $pessoa = new Pessoa();
    $pessoa->setId($id);
    $pessoa->setEmpresa($empresa);
    $pessoa->setCnpj($cnpj);
    $pessoa->setEmail($email);
    $pessoa->setTelefone($telefone);
    $pessoa->setRua($rua);
    $pessoa->setNumero($numero);
    $pessoa->setComplemento($complemento);
    $pessoa->setBairro($bairro);
    $pessoa->setCidade($cidade);


    $retorno = FornecedorDao::editar($pessoa);

    if ($retorno) {
        header("Location: ../FornecedorForm.php");
    } else {
        header("Location: ../FornecedorForm.php");
    }
}
?>