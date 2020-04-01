<?php

class produto {

    private $id;
    private $nome;
    private $categoria;
    private $quantidade;
    private $datacompra;
    private $datavalidade;
    private $descricao;

    public function __construct() {

    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getDatacompra() {
        return $this->datacompra;
    }

    public function getDatavalidade() {
        return $this->datavalidade;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setDatacompra($datacompra) {
        $this->datacompra = $datacompra;
    }

    public function setDatavalidade($datavalidade) {
        $this->datavalidade = $datavalidade;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}

?>
