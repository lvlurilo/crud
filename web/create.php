<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');


$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];
$id = '';

$album = new album($id, $titulo, $banda, $ano);

$crud = new crud();
$crud->create($album);

header("location:../index.html");

?>