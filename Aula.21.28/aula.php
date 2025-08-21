<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> Primeira pagina em php </h1>";
        $variavel = "IFG";

        echo "<h1> Eu estudo no $variavel</h1>";

        $n1= 5;
        $n2= 5;
        $soma = $n1 + $n2;

        echo "<h1> Minha faculdade é $soma<h1>";

        if ($soma ==0){
            echo "<h1> Meu primeiro if </h1>";
        } elseif ($soma ==7){
            echo "<h1> Meu primeiro elseif </h1>";
        } else {
            echo "<h1> Meu primeiro  if, elseif, else </h1>";
        }

        echo "<h1> ______________ Exercício de Condição ______________ <h1>";

        $idade = 20;

        if ($idade <18){
            echo "<h1> Menor de idade </h1>";
        } elseif ($idade == 18 ){
            echo "<h1> Em transição </h1>";
        } else {
            echo "<h1> Maior de idade </h1>";
        }

        echo "<h1> ______________ Exercício de Repetição ______________ <h1>";

        $x = 0;
        while ($x < 10){
        echo "<h4> Valor de x é: $x</h4>";
        $x++;
        }
        echo "<hr>";
        for ($y=1; $y <= 5 ; $y++){
            echo "<h4> O valor de y é $y</h4>";
        }



    ?>
</body>
</html>