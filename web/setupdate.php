<?php 

require_once('../lib/conexao.php');
require_once('../lib/album.php');
require_once('../lib/crud.php');
require_once('image.php');

var_dump($_POST);
echo "<br>";
var_dump($_FILES);


$id = $_POST['id'];
$titulo = $_POST['titulo'];
$banda = $_POST['banda'];
$ano = $_POST['ano'];

empty($_FILES['newcapa']['name']) ? $capa = $_POST['capa'] : $capa = newcapa($_POST['capa'], $_FILES['newcapa']);   

$album = new album($id, $titulo, $banda, $ano, $capa);
$crud = new crud();
$crud->update($album);

header("location:../index.html");

?>