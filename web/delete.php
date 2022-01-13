<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');


$id = $_GET['id'];
// $capa = $_GET['capa'];

// $arqimg = "../img/".$capa;
// unlink($arqimg);

$crud = new crud();
$crud->delete($id);

header("location:read.php");

?>