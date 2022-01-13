<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>albuns preferidos</title>
</head>
<body>
<header>
    <a href="../index.html"><button type="submit">HOME</button></a>
    <a href="create.html"><button type="submit">CADASTRAR NOVO ALBUM</button></a> 
</header>
<body>
    
<?php 
    require_once('../lib/conexao.php');
    require_once('../lib/album.php');
    require_once('../lib/crud.php');

    $crud = new crud();
    $crud->read();

    foreach($crud->read() as $album){?>

        <img src= "../img/<?php echo $album['capa']?>" alt="<?php $album['titulo']?>"><br><?php

        echo $album['titulo']."<br>".$album['banda']."<br>".$album['ano']."<br>";
        echo $album['id'];
        ?>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $album['id']?>">
            <input type="hidden" name="titulo" value="<?php echo $album['titulo']?>">
            <input type="hidden" name="banda" value="<?php echo $album['banda']?>">
            <input type="hidden" name="ano" value="<?php echo $album['ano']?>">
            <!-- <input type="hidden" name="capa" value="<?php echo $album['capa']?>"> -->
            <button type="submit" id="editar">EDITAR</button>
        </form>
        
        <form action="delete.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $album['id']?>">
            <!-- <input type="hidden" name="capa" value="<?php echo $album['capa']?>"> -->
            <button type="submit" id="excluir">EXCLUIR</button>
        </form>
        <hr>
    <?php
    }?>
    
</body>
</html>