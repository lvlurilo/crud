<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];
$capa = $_POST['capa'];

if(isset($_FILES['newcapa'])){
    $arqimg = "../img/".$capa;
    unlink($arqimg);
    $capa = $_FILES['newcapa'];


if(isset($_POST['buttonEditar'])){
    $formatos = array("jpg", "jpeg", "png");
    $extensao = pathinfo($_FILES['newcapa']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatos)){
        $pasta = "../img/";
        $temp = $_FILES['newcapa']['tmp_name'];
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

}else{
    $arqName = $capa;
}

$album = new album($id, $titulo, $banda, $ano, $arqName);

$crud = new crud();
$crud->update($album);

header("location:index.php");

?>