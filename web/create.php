<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');
require_once('image.php');

// var_dump($_POST);
// echo "<br>";
// var_dump($_FILES);

$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];
$id = '';
$capa = capa($_FILES['capa']);

$album = new album($id, $titulo, $banda, $ano, $capa);

$crud = new crud();
$crud->create($album);

header("location:../index.html");

?>