<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            $variavel = 18;
            //Condicional

            if ($variavel == 18) {
                echo "Está em transição";
            } elseif ($variavel >18) {
                echo "menor de idade";
            } else {
                echo "Maior de idade";
            }
            echo "<br>";

            //Repetição While
            while ($variavel >= 15) {
                echo "Valor: $variavel <br>";
                $variavel--;
            }
            echo "<br>";

            //Repetição FOR

            for ($i = 1; $i <= 5; $i++) {
                echo "Valor: $i <br>";
            }
            echo "<br>";

            //Declaração de arrays

            $array = array("Maça","Uva", "Pera", "Laranja");

            $array2[0] = "Tomate";
            $array2[1] = "Banana";
            $array2[2] = "cenoura";

            //Estrutura de repetição para arrays

            foreach ($array as $item ) {
                echo "valor: $item <br>";
            }
            echo "<br>";

            $matriz = array(
                array("Flamengo", "Vasco", "Fluminense", "Botafogo"),
                array("Santos", "São Paulo", "Palmeiras", "Corintias")
            );

            var_dump($matriz);

        ?>
    </h1>
</body>
</html>