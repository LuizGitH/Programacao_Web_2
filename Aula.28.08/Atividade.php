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
            $matriz = array(
                array("Fulano", "Ciclano", "Beltrano","Jhon"),
                array(100,80,70,60),
                array(80,90,100,80),
            );
            foreach ($matriz as $aluno ) {
                foreach ($aluno as $linha ) {
                    echo "$linha <br>";
                }
            }
        ?>
    </h1>
</body>
</html>