<?php

require_once('conexao.php');
require_once('album.php');

class crud{

    public function create(album $a){

        $sql = 'INSERT INTO albuns (titulo, banda, ano, capa) values (?, ?, ?, ?)';
        $stmt = conexao::getCon()->prepare($sql);

        $stmt->bindValue(1, $a->getTitulo());
        $stmt->bindValue(2, $a->getBanda());
        $stmt->bindValue(3, $a->getAno());
        $stmt->bindValue(4, $a->getCapa());

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM albuns';
        $stmt = conexao::getCon()->prepare($sql);

        $stmt->execute();

        if($stmt->rowcount() > 0){
            $resultado = $stmt->fetchALL(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(album $a){

        $sql = 'UPDATE albuns SET titulo = ?, banda = ?, ano = ?, capa = ?, WHERE id = ?';
        $stmt = conexao::getCon()->prepare($sql);

        $stmt->bindValue(1, $a->getTitulo());
        $stmt->bindValue(2, $a->getBAnda());
        $stmt->bindValue(3, $a->getAno());
        $stmt->bindValue(4, $a->getCapa());
        $stmt->bindValue(5, $a->getId());

        $stmt->execute();

    }

    public function delete($id){

        $sql = 'DELETE FROM albuns WHERE id = ?';
        $stmt = conexao::getCon()->prepare($sql);

        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }

}

?>
