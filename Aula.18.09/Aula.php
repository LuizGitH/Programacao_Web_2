<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de fotos</legend>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>
                <label for="Foto">Selecione uma foto</label> <br>
                <input type="file" name="foto">
            </p>
            <p><input type="submit" value="Enviar" name="btn"></p>
        </form>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST["btn"])){
        $temp = $_FILES["foto"]["tmp_name"];
        $novoNome= uniqid().".jpg";
        move_uploaded_file($temp,"img/".$novoNome);
        echo "<h1> Foto postada com sucesso!!!</h1>";
    }
?>