<!DOCTYPE html>
<html>
<head>
    <script src="ajax/jquery.js"></script>
    
    <meta charset="UTF-8">
    <title>Galeria AV3</title>
</head>
<body>

    <form class="upload_foto" action="upload.php" method="post" enctype="multipart/form-data">

        <label for="id_foto"> Digite o ID: </label> <br>
        <input type="text" class="id_foto" id="id_foto" name="id_foto" required> <br><br>

        <label for="nome_foto"> Digite o Nome da foto: </label> <br>
        <input type="text" class="nome_foto" id="nome_foto" name="nome_foto" required> <br><br>

        <label for="email"> Digite seu e-mail: </label> <br>
        <input type="text" class="email" id="email" name="email" required> <br><br>
        
        <br><br>

        <label for="cliente_foto"> Escolha sua foto: </label> <br>
        <input type="file" class="imagem" id="imagem" name="imagem" required> <br><br>

        <imput type="reset" value="Limpar">
        <input type="submit" value="Enviar">


    </form>

</body>
</html>