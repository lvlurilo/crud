<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/create.css">
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
        <form action="setcreate.php" method="POST" enctype="multipart/form-data">
            <div class= "formulario">
                <label></label>
                <input type="file"  id="capa" name="capa" accept="image/*" style="display:none;" required><br>
                <button type="button" id="capabt" name="btncapa" class="btn" >Selecione uma capa</button><br>
                <span id="endereco" name="endereco">Formatos: .jpeg .jpg .png</span><br>
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
    </div>
    
    <script type="text/javascript">
        const capa = document.getElementById("capa")
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
