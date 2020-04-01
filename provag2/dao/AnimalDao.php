<?php

include_once './Animal.php';
include_once './Conexao.php';

class AnimalDao {

    public static function editar(Animal $Animal) {
        $sql = "UPDATE animal SET "
                . " nome =  '" . $Animal->getNome() . "' , "
                . " especie =  '" . $Animal->getespecie() . "' , "
                . " qntvezesalimenta =  '" . $Animal->getqntvezesalimenta() . "' , "
                . " racao =  '" . $Animal->getracao() . "' , "
                . " idade =  '" . $Animal->getidade() . "' , "
                . " obs =  '" . $Animal->getobs() . "'"
                . " WHERE id = " . $Animal->getId();




        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        echo $sql;
        return $retorno;
    }

    public static function inserir(Animal $Animal) {
        $sql = "INSERT INTO animal (nome, especie, qntvezesalimenta, racao, idade, obs)VALUES "
                . "('" . $Animal->getNome() . "',"
                . "'" . $Animal->getespecie() . "',"
                . "'" . $Animal->getqntvezesalimenta() . "',"
                . "'" . $Animal->getracao() . "',"
                . "'" . $Animal->getidade() . "',"
                . "'" . $Animal->getobs() . "');";






        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getAnimals() {
        $sql = "Select * FROM animal ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $especie, $qntvezesalimenta, $racao, $idade, $obs) = mysqli_fetch_row($result)) {

            $Animal = new Animal();
            $Animal->setId($id);
            $Animal->setNome($nome);
            $Animal->setespecie($especie);
            $Animal->setqntvezesalimenta($qntvezesalimenta);
            $Animal->setracao($racao);
            $Animal->setidade($idade);
            $Animal->setobs($obs);
            $lista->append($Animal);
        }

        return $lista;
    }

    public static function excluir($Animal) {
        $sql = "DELETE FROM animal "
                . " WHERE id =  " . $Animal->getId();

        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getAnimalById($idAnimal) {
        $sql = "Select * FROM animal "
                . "WHERE id = " . $idAnimal;
        $conn = new Conexao();
        $result = $conn->executar($sql);

        list($id, $nome, $especie, $qntvezesalimenta, $racao, $idade, $obs) = mysqli_fetch_row($result);

        $Animal = new Animal();
        $Animal->setId($id);
        $Animal->setNome($nome);
        $Animal->setespecie($especie);
        $Animal->setqntvezesalimenta($qntvezesalimenta);
        $Animal->setracao($racao);
        $Animal->setidade($idade);
        $Animal->setobs($obs);
        return $Animal;
    }

}
