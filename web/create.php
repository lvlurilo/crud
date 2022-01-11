<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');


$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];
$capa = $_POST['capa'];

if(isset($_POST['buttonCadastrar'])){
    $formatos = array("jpg", "jpeg", "png");
    $extensao = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatos)){
        $pasta = "../img/";
        $temp = $_FILES['capa']['tmp_name'];
        $arqName = uniqid().".$extensao";

        if(move_uploaded_file($temp, $pasta.$arqName)){
            $msg = "";
        }else{
            $msg = "não foi possivel fazer o upload do arquivo";
        }

    }else{
        $msg = "formato não permitido";
    }
}

$album = new album($titulo, $banda, $ano, $arqName);

$crud = new crud();
$crud->create($album);

header("location:../index.html");

?>