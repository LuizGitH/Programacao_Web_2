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
    echo $_SERVER['HTTP_HOST'];
    print "<br>";
    echo $_SERVER['PHP_SELF'];
    print "<br>";
    echo $_SERVER['SERVER_ADDR'];
    print "<br>";
    echo $_SERVER['SERVER_NAME'];
    print "<br> ______________________________________";

    ?>


</h1>
</body>
</html>