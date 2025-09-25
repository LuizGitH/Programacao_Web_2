<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<h3>1. Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</h3>";
        $numero = 3;
        $numero_2 = 2;
        $soma = $numero + $numero_2;

        if ($soma > 20) {
            $resultado = $soma + 8;
            echo "<h4>A soma é maior que vinte, os números são $numero e $numero_2, com mais 8 dá $resultado</h4>";
        } else {
            $resultado = $soma - 5;
            echo "<h4>A soma é menor que vinte, os números são $numero e $numero_2, com menos 5 dá $resultado</h4>";
        }
    #_________________________________________________________________________________________________________________________________________________________________________

        echo "<h3>2. Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes</h3>";

        $numero_3 = 20;
        $divisao2 = $numero_3%2;
        $divisao5 = $numero_3%5;
        $divisao10 = $numero_3%10;

        if($divisao2 ==0 && $divisao5 ==0 && $divisao10 ==0){
            echo "<h4>O número $numero_3 é devisível por 10, 5 e 2</h4>";
        } elseif ($divisao2 ==0 && $divisao5 ==0){
            echo "<h4>O número $numero_3 é devisível por 5 e 2</h4>";
        } elseif ($divisao2 ==0 && $divisao10 ==0){
            echo "<h4>O número $numero_3 é devisível por 10 e 2</h4>";
        } elseif ($divisao5 ==0 && $divisao10 ==0){
            echo "<h4>O número $numero_3 é devisível por 5 e 10</h4>";
        }elseif ($divisao2==0){
            echo "<h4>O número $numero_3 é devisível por 2</h4>";
        }elseif ($divisao5==0){
            echo "<h4>O número $numero_3 é devisível por 5</h4>";
        }elseif ($divisao10==0){
            echo "<h4>O número $numero_3 é devisível por 10</h4>";
        } else {
            echo "<h4>Não é devisível por nenhum</h4>";
        }
    #_________________________________________________________________________________________________________________________________________________________________________

        echo "<h3>3. Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA</h3>";
        $nome="Luiz";
        $sexo="Masculino";
        $idade=20;

        if($sexo=="Feminino" && $idade<25){
            echo "<h4>A $nome ACEITA</h4>";
        }else{
            echo "<h4>$nome NÃO ACEITO(A)</h4>";
        }
    #_________________________________________________________________________________________________________________________________________________________________________

        echo "<h3>4. Entrar com 3 números diferentes e imprimi-los em ordem decrescente</h3>";

        $numero_4 = 5;
        $numero_41 = 25;
        $numero_42 = 255;

        if($numero_4 >= $numero_41 && $numero_4 >= $numero_42){
            if($numero_41 > $numero_42){
                echo "<h4>A ordem dos números em decrescente é $numero_4, $numero_41, $numero_42</h4>";
            }else {
                echo "<h4>A ordem dos números em decrescente é $numero_4, $numero_42, $numero_41</h4>";
            }
        } elseif ($numero_41 >= $numero_42){
            if($numero_4 >= $numero_42){
                echo "<h4>A ordem dos números em decrescente é $numero_41, $numero_4, $numero_42</h4>";
            }else{
                echo "<h4>A ordem dos números em decrescente é $numero_41, $numero_42, $numero_4</h4>";
            }
        }else{
            if($numero_4 >= $numero_41){
                echo "<h4>A ordem dos números em decrescente é $numero_42, $numero_4, $numero_41</h4>";
            } else{
                echo "<h4>A ordem dos números em decrescente é $numero_42, $numero_41, $numero_4</h4>";
            }
        }
#_________________________________________________________________________________________________________________________________________________________________________

        echo "<h3>5. Ler 3 números, representando os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: <br>
             Equilátero – três lados iguais;<br>
             Isosceles – Dois lados iguais;<br>
             Escaleno – Todos os lados diferentes; </h3>";

        $a = 5;
        $b=4;
        $c=5;

    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        echo "<h4>Não forma um triângulo válido.</h4>";
    }

    if ($a == $b && $b == $c) {
        echo "<h4>Equilátero</h4>";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "<h4>Isósceles</h4>";
    } else {
        echo "<h4>Escaleno</h4>";
    }
    #_________________________________________________________________________________________________________________________________________________________________________
    echo "<h3>6. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número</h3>";

    $mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    $numeroMes = 10;

    $numeroMeses= $numeroMes-1;

    if($numeroMes>12 && $numeroMes<1){
        echo "<h4>não existe mês com este número</h4>";
    } else {
        echo "<h4>O mês de número $numeroMes é $mes[$numeroMeses]</h4>";
    }
    #_________________________________________________________________________________________________________________________________________________________________________
    echo "<h3> 7. Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos</h3>";

    $matriz_7 = [-10,-9,-8,-7,-6,-5,-4,-3,-2,-1,0,1,2,3,4,5,6,7,8,9];
    $somaPositivos = 0;
    $contNegativos = 0;
    foreach ($matriz_7 as $num) {
        if ($num > 0) {
            $somaPositivos += $num;
        } elseif ($num < 0) {
            $contNegativos++;
        }
    }

    echo "<h4>Soma dos números positivos: $somaPositivos</h4>";
    echo "<h4>Total de números negativos: $contNegativos</h4>";
    #_________________________________________________________________________________________________________________________________________________________________________

    echo"<h3>8. Criar programa que imprima a tabuada de um número</h3>";
    $numero_8 = 5;
    for ($i=1; $i <= 10; $i++) {
        $multiplica = $numero_8 * $i;
        echo "<h4>O número $numero_8 * $i = $multiplica</h4>";
    }

    ?>

</body>
</html>