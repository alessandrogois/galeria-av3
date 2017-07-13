<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="GALERIA AV3" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Alessandro, Douglas, Rafael e Raysse" />
    <script src="ajax/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    
    <meta charset="UTF-8">
    <title>Galeria AV3</title>
</head>
<body>
    <div style='position:absolute;margin-left:150px;margin-top:100px;width:300px;height:140px;z-index:1'> </div>
        <div class="container">
            <form class="upload_foto" action="upload.php" method="post" enctype="multipart/form-data">
                <br><br><br><br>
                <label for="id_foto"> Digite o ID: </label>
                <input type="text" class="id_foto" id="id_foto" name="id_foto" required> <br>

                <label for="nome_foto"> Digite o Nome da foto: </label>
                <input type="text" class="nome_foto" id="nome_foto" name="nome_foto" required> <br>

                <label for="email"> Digite seu e-mail: </label>
                <input type="text" class="email" id="email" name="email" required> <br>

                <br>

                <label for="cliente_foto"> Escolha sua foto: </label>
                <input type="file" class="imagem" id="imagem" name="imagem" required> <br>
                <br><br>
                <imput type="reset" value="Limpar">

                <input type="submit" value="Enviar">


            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jQuery.js"></script>
</body>
</html>