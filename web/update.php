<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="../css/create-update.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Novo album</title>
</head>
<body>
    <header>
            <a href="../index.html">HOME</a>
            <a href="read.php">LISTAR ALBUNS</a>
    </header>
    <section>   
        <form action="setupdate.php" method="POST" enctype="multipart/form-data">
            <div class = "capa">
                <img src= "../img/<?php echo $_POST['capa']?>">
            </div>
            <div class= "formulario">
                <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
                <label></label>
                <input type="hidden" name="capa" id="capa" value= "<?php echo $_POST['capa']?>">
                <label></label>
                <input type="file" class="ipt_img" name="newcapa"><br>
                <label></label>
                <input type="text" class="ipt" name="titulo" value="<?php echo $_POST['titulo'] ?>" required><br>
                <label></label>
                <input type="text" class="ipt" name="banda" value="<?php echo $_POST['banda'] ?>" required><br>
                <label></label>
                <input type="text" class="ipt" name="ano" minlength="4" maxlength="4" value="<?php echo $_POST['ano'] ?>" required><br>
                <button type="submit" class="btn" name="buttonEditar">EDITAR</button>
            <div>
        </form>
    </section>
    <footer>
        <p>github.com/lvlurilo</p>
    </footer> 
</body>
</html>