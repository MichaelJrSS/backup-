<?php

include_once './Pessoa.php';
include_once './Conexao.php';

class FornecedorDao {

    public static function editar(Pessoa $pessoa) {
        $sql = "UPDATE fornecedor SET "
                . " empresa =  '" . $pessoa->getEmpresa() . "' , "
                . " cnpj =  '" . $pessoa->getCnpj() . "' , "
                . " email =  '" . $pessoa->getEmail() . "' , "
                . " telefone =  '" . $pessoa->getTelefone() . "' , "
                . " rua =  '" . $pessoa->getRua() . "' , "
                . " numero =  '" . $pessoa->getNumero() . "' , "
                . " complemento =  '" . $pessoa->getComplemento() . "' , "
                . " bairro =  '" . $pessoa->getBairro() . "' , "
                . " cidade =  '" . $pessoa->getCidade() . "'"
                . " WHERE id = " . $pessoa->getId();




        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        echo $sql;
        return $retorno;
    }

    public static function inserir(Pessoa $pessoa) {
        $sql = "INSERT INTO fornecedor (empresa, cnpj, email, telefone, rua, numero, complemento, bairro, cidade)VALUES "
                . "('" . $pessoa->getEmpresa() . "',"
                . "'" . $pessoa->getCnpj() . "',"
                . "'" . $pessoa->getEmail() . "',"
                . "'" . $pessoa->getTelefone() . "',"
                . "'" . $pessoa->getRua() . "',"
                . "'" . $pessoa->getNumero() . "',"
                . "'" . $pessoa->getComplemento() . "',"
                . "'" . $pessoa->getBairro() . "',"
                . "'" . $pessoa->getCidade() . "');";






        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getPessoas() {
        $sql = "Select * FROM fornecedor ORDER BY empresa ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $empresa, $cnpj, $email, $telefone, $rua,
        $numero, $complemento, $bairro, $cidade) = mysqli_fetch_row($result)) {

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




            $lista->append($pessoa);
        }

        return $lista;
    }

    public static function excluir($pessoa) {
        $sql = "DELETE FROM fornecedor "
                . " WHERE id =  " . $pessoa->getId();

        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getPessoaById($idPessoa) {
        $sql = "Select * FROM fornecedor "
                . "WHERE id = " . $idPessoa;
        $conn = new Conexao();
        $result = $conn->executar($sql);

        list($id, $empresa, $cnpj, $email, $telefone, $rua,
                $numero, $complemento, $bairro, $cidade) = mysqli_fetch_row($result);

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

        return $pessoa;
    }

}
