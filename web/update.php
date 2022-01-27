<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="../css/update.css">
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

    <div class="main">
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
                <input type="file" id="newcapa" name="newcapa" accept="image/*" style="display:none;" required><br>
                <button type="button" id="capabt" name="btncapa" class="btn" >Selecione outra capa</button><br>
                <span id="endereco" name="endereco">Formatos: .jpeg .jpg .png</span><br>
                <label></label>
                <input type="text" class="ipt" name="titulo" value="<?php echo $_POST['titulo'] ?>" required><br>
                <label></label>
                <input type="text" class="ipt" name="banda" value="<?php echo $_POST['banda'] ?>" required><br>
                <label></label>
                <input type="text" class="ipt" name="ano" value="<?php echo $_POST['ano'] ?>" minlength="4" maxlength="4" required><br>
                <button type="submit" class="btn" name="buttonCadastrar">ALTERAR</button>
            </div>
        </form>
        </section>
    </div>
    
    <script type="text/javascript">
        const capa = document.getElementById("newcapa")
        const btncapa = document.getElementById("capabt")
        const span = document.getElementById("endereco")

        btncapa.addEventListener("click", function() {
            capa.click()
        })

        capa.addEventListener("change", function() {
            if(capa.value){
                span.innerHTML = capa.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]
            }else{
                span.innerHTML = "Formatos: .jpeg .jpg .png" 
            }
        })
    </script>
    <footer>
        <p>github.com/lvlurilo</p>
    </footer> 
</body>
</html>