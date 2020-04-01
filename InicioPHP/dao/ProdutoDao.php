<?php

include_once './Produto.php';
include_once './Conexao.php';

class ProdutoDao {

    public static function editar(Produto $produto) {
        $sql = "UPDATE produto SET "
                . " nome =  '" . $produto->getNome() . "' , "
                . " categoria =  '" . $produto->getCategoria() . "' , "
                . " quantidade =  '" . $produto->getQuantidade() . "' , "
                . " datacompra =  '" . $produto->getDatacompra() . "' , "
                . " datavalidade =  '" . $produto->getDatavalidade() . "' , "
                . " descricao =  '" . $produto->getDescricao() . "'"
                . " WHERE id = " . $produto->getId();




        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        echo $sql;
        return $retorno;
    }

    public static function inserir(Produto $produto) {
        $sql = "INSERT INTO produto (nome, categoria, quantidade, datacompra, datavalidade, descricao)VALUES "
                . "('" . $produto->getNome() . "',"
                . "'" . $produto->getCategoria() . "',"
                . "'" . $produto->getQuantidade() . "',"
                . "'" . $produto->getDatacompra() . "',"
                . "'" . $produto->getDatavalidade() . "',"
                . "'" . $produto->getDescricao() . "');";






        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getProdutos() {
        $sql = "Select * FROM produto ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $categoria, $quantidade, $datacompra, $datavalidade, $descricao) = mysqli_fetch_row($result)) {

            $produto = new Produto();
            $produto->setId($id);
            $produto->setNome($nome);
            $produto->setCategoria($categoria);
            $produto->setQuantidade($quantidade);
            $produto->setDatacompra($datacompra);
            $produto->setDatavalidade($datavalidade);
            $produto->setDescricao($descricao);
            $lista->append($produto);
        }

        return $lista;
    }

    public static function excluir($produto) {
        $sql = "DELETE FROM produto "
                . " WHERE id =  " . $produto->getId();

        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getProdutoById($idProduto) {
        $sql = "Select * FROM produto "
                . "WHERE id = " . $idProduto;
        $conn = new Conexao();
        $result = $conn->executar($sql);

        list($id, $nome, $categoria, $quantidade, $datacompra, $datavalidade, $descricao) = mysqli_fetch_row($result);

        $produto = new Produto();
        $produto->setId($id);
        $produto->setNome($nome);
        $produto->setCategoria($categoria);
        $produto->setQuantidade($quantidade);
        $produto->setDatacompra($datacompra);
        $produto->setDatavalidade($datavalidade);
        $produto->setDescricao($descricao);


        return $produto;
    }

}
