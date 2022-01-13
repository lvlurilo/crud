<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];

$album = new album($id, $titulo, $banda, $ano);
$crud = new crud();
$crud->update($album);

header("location:../index.html");

?>