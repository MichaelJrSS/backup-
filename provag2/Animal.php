<?php

class Animal {

    private $id;
    private $nome;
    private $especie;
    private $qntvezesalimenta;
    private $racao;
    private $idade;
    private $obs;

    function __construct() {

    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getespecie() {
        return $this->especie;
    }

    function getqntvezesalimenta() {
        return $this->qntvezesalimenta;
    }

    function getracao() {
        return $this->racao;
    }

    function getidade() {
        return $this->idade;
    }

    function getobs() {
        return $this->obs;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setespecie($especie) {
        $this->especie = $especie;
    }

    function setqntvezesalimenta($qntvezesalimenta) {
        $this->qntvezesalimenta = $qntvezesalimenta;
    }

    function setracao($racao) {
        $this->racao = $racao;
    }

    function setidade($idade) {
        $this->idade = $idade;
    }

    function setobs($obs) {
        $this->obs = $obs;
    }

}

?>
