<?php

class conexao{

    private static $instancia;

    public static function getCon(){

        if(!isset(self::$instancia)){ //self pois a classe é estatica
            self::$instancia = new \PDO('mysql:host=localhost; dbname=colecao; charset=utf8', 'root', '');
        }

        return self::$instancia;

    }
}
?>