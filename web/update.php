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
        <a href="../index.html"><button type="submit">HOME</button></a>
        <a href="read.php"><button type="submit">LISTAR ALBUNS</button></a>
    </header>

    <section id="update">   
        <form action="setupdate.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
            <label>Titulo</label>
            <input type="text" id="titulo "name="titulo" value="<?php echo $_POST['titulo'] ?>" required><br>
            <label>Banda</label>
            <input type="text" id="banda" name="banda" value="<?php echo $_POST['banda'] ?>" required><br>
            <label>Ano</label>
            <input type="text" id="ano "name="ano" minlength="4" maxlength="4" value="<?php echo $_POST['ano'] ?>" required><br>
            <label>Capa Atual</label>
            <input type="hidden" name="capa" id="capa" value= "<?php echo $_POST['capa']?>">
            <img src= "../img/<?php echo $_POST['capa']?>"><br>
            <label>Nova Capa</label>
            <input type="file" id="newcapa" name="newcapa"><br>
            <button type="submit" id="buttonEditar" name="buttonEditar">EDITAR</button>
        </form>
    </section>

    <footer>


    </footer> 
</body>
</html>