<?php

  //  include "aula2.php";
  //  require "aula2.php";

    if((isset($_POST['btn'])) && (isset($_POST['nome'])) && (isset($_POST['cidade']))) {
        $n = $_POST['nome'];
        $c = $_POST['cidade'];
        $arquivo = fopen("pessoas.txt", "a+");
        fwrite($arquivo, "$n;$c" . PHP_EOL);
        fclose($arquivo);
        echo "<h2> $n cadastrado(a) com sucesso!!!</h2>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <form action="" method="post">
            <fieldset>
                <legend>Cadastro de Pessoas</legend>
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required>
                </p>

                <p>
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" required>
                </p>
                <p>
                    <input type="submit" value="Cadastrar" name="btn">
                </p>
            </fieldset>
        </form>
    </h1>
</body>
</html>
<?php
    $abrir = file("pessoas.txt");
    foreach ($abrir as $linha) {
        $pessoa = explode(";", $linha);
        echo "<b>Nome: </b> $pessoa[0] <br>";
        echo "<b>Cidade: </b> $pessoa[1] <br>";
    }
?>