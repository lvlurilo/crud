<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Novo album</title>
</head>
<body>
    <header class="header">
            <a href="../index.html">HOME</a>
            <a href="read.php">LISTAR ALBUNS</a>
    </header>
    <br>
    <section class="formulario">   
        <form action="setupdate.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
            <label>Capa Atual</label>
            <input type="hidden" name="capa" id="capa" value= "<?php echo $_POST['capa']?>">
            <img src= "../img/<?php echo $_POST['capa']?>"><br>
            <label></label>
            <input type="file" class="capa" name="newcapa"><br>
            <label></label>
            <input type="text" class="ipt" name="titulo" value="<?php echo $_POST['titulo'] ?>" required><br>
            <label></label>
            <input type="text" class="ipt" name="banda" value="<?php echo $_POST['banda'] ?>" required><br>
            <label></label>
            <input type="text" class="ipt" name="ano" minlength="4" maxlength="4" value="<?php echo $_POST['ano'] ?>" required><br>
            
            <button type="submit" class="btn" name="buttonEditar">EDITAR</button>
        </form>
    </section>

    <footer>


    </footer> 
</body>
</html>