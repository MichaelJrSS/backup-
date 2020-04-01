<?php

include_once '../Conexao.php';
include_once '../Pessoa.php';
include_once '../dao/PessoaDao.php';


if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $cpf = $_POST['txCpf'];
        $email = $_POST['txEmail'];
        $telefone = $_POST['txFone'];
        $rua = $_POST['txRua'];
        $numero = $_POST['txNumero'];
        $complemento = $_POST['txComp'];
        $bairro = $_POST['txBairro'];
        $cidade = $_POST['txCidade'];

        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        $pessoa->setCpf($cpf);
        $pessoa->setEmail($email);
        $pessoa->setTelefone($telefone);
        $pessoa->setRua($rua);
        $pessoa->setNumero($numero);
        $pessoa->setComplemento($complemento);
        $pessoa->setBairro($bairro);
        $pessoa->setCidade($cidade);

        $retorno = PessoaDao::inserir($pessoa);

        if ($retorno) {
            header("Location: ../ClientesForm.php?exibir");
        }


        echo 'Nome:  ' . $nome;
        echo '<br/> CPF: ' . $cpf;
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

    $retorno = PessoaDao::excluir($pessoa);


    if ($retorno) {
        header("Location: ../ClientesForm.php");
    } else {
        header("Location: ../ClientesForm.php?erroExcluir");
    }
}


if (isset($_REQUEST['editar'])) {

    $id = $_GET['idPessoa'];
    $nome = $_POST['txNome'];
    $cpf = $_POST['txCpf'];
    $email = $_POST['txEmail'];
    $telefone = $_POST['txFone'];
    $rua = $_POST['txRua'];
    $numero = $_POST['txNumero'];
    $complemento = $_POST['txComp'];
    $bairro = $_POST['txBairro'];
    $cidade = $_POST['txCidade'];

    $pessoa = new Pessoa();
    $pessoa->setId($id);
    $pessoa->setNome($nome);
    $pessoa->setCpf($cpf);
    $pessoa->setEmail($email);
    $pessoa->setTelefone($telefone);
    $pessoa->setRua($rua);
    $pessoa->setNumero($numero);
    $pessoa->setComplemento($complemento);
    $pessoa->setBairro($bairro);
    $pessoa->setCidade($cidade);


    $retorno = PessoaDao::editar($pessoa);

    if ($retorno) {
        header("Location: ../ClientesForm.php");
    } else {
        header("Location: ../ClientesForm.php");
    }
}
?>