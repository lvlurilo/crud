<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/read.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Novo album</title>
</head>
<body>
    <header>
            <a href="../index.html">HOME</a>
            <a href="create.html">CADASTRAR NOVO ALBUM</a>
    </header>
    <section>   
    <?php 
        require_once('../lib/conexao.php');
        require_once('../lib/album.php');
        require_once('../lib/crud.php');

        $crud = new crud();
        $crud->read();

        foreach($crud->read() as $album){?>
            <div class="capa">
                <img src= "../img/<?php echo $album['capa']?>" alt="<?php $album['titulo']?>"><br>
            <div>
            <div class="fomrulario">
                <div class="info">
                    <?php
                    echo $album['titulo']."<br>".$album['banda']."<br>".$album['ano']."<br>";
                    $album['id'];
                    ?>
                </div>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $album['id']?>">
                    <input type="hidden" name="titulo" value="<?php echo $album['titulo']?>">
                    <input type="hidden" name="banda" value="<?php echo $album['banda']?>">
                    <input type="hidden" name="ano" value="<?php echo $album['ano']?>">
                    <input type="hidden" name="capa" value="<?php echo $album['capa']?>">
                    <button type="submit" class="btn" id="editar">EDITAR</button>
                </form>
                <br>
                <form action="delete.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $album['id']?>">
                    <input type="hidden" name="capa" value="<?php echo $album['capa']?>">
                    <button type="submit" class="btn" id="excluir">EXCLUIR</button>
                </form>
                </div>
        <?php
        }?>
           
    </section>
    <footer>
        <p>github.com/lvlurilo</p>
    </footer> 
</body>
</html>