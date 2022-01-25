<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="setcreate.php" method="POST" enctype="multipart/form-data">
            <!-- <div class = "capa">
                <img>
            </div> -->
            <div class= "formulario">
                <label></label>
                <!-- <input type="file" class="ipt_img" name="capa" accept="image/*"><br> -->
                <input type="button" class="btn_file" value="Escolha uma imagem de capa" onclick="document.getElementById('capa').click();"/>
                <input type="file" style="display:none;" id="capa" name="capa" accept="image/*" required><br>
                <span></span>
                <label></label>
                <input type="text" class="ipt "name="titulo" placeholder="Titulo Album" required><br>
                <label></label>
                <input type="text" class="ipt" name="banda" placeholder="Banda" required><br>
                <label></label>
                <input type="text" class="ipt" name="ano" placeholder="Ano" minlength="4" maxlength="4" required><br>
                <button type="submit" class="btn" name="buttonCadastrar">CADASTRAR</button>
            </div>
        </form>
    </section>
    <footer>
        <p>github.com/lvlurilo</p>
    </footer> 
</body>
</html>
