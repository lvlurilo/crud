<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Alterar album</title>
</head>
<body>
    <header>
        <a href="read.php"><button type="submit">LISTAR ALBUNS</button></a>
        <a href="../index.html"><button type="submit">HOME</button></a>
    </header>

<?php

isset($_POST['id']) ? $id = $_POST['id'] : "";
isset($_POST['titulo']) ? $titulo = $_POST['titulo'] : "";
isset($_POST['banda']) ? $banda = $_POST['banda'] : "";
isset($_POST['ano']) ? $ano = $_POST['ano'] : "";
isset($_POST['capa']) ? $capa = $_POST['capa'] : "";

?>

    <section id="update">   
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $album['id']?>">
            <label>Titulo</label>
            <input type="text" id="titulo "name="titulo" value="<?php echo $titulo ?>" required><br>
            <label>Banda</label>
            <input type="text" id="banda" name="banda" value="<?php echo $banda ?>" required><br>
            <label>Ano</label>
            <input type="text" id="ano "name="ano" minlength="4" maxlength="4" value="<?php echo $ano ?>" required><br>
            <label>Capa Atual</label>
            <input type="hidden" name="capa" id="capa" value="<?php echo $capa ?>">
            <img src="../img/<?php echo $capa ?>"><br>
            <label>Nova Capa</label>
            <input type="file" id="newcapa" name="newcapa"><br>
            <button type="submit" id="buttonEditar" name="buttonEditar">EDITAR</button>
        </form>
    </section>

    <footer>


    </footer> 
</body>
</html>