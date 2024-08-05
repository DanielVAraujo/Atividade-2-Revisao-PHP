<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="style.css">
<body>
    <h1>Revisão de PHP</h1>
    <a href="index.html">Home</a>
    <?php
        echo "<p>Esta Linha É Um PHP </p>";

        $revisao="Ola Mundo";
        echo $revisao;

        $x=3;
        $y=1;
        $result=$x+$y;
        echo "<p>O Resultado da Soma É: $result </p>";

        echo "<p>A Váriavel x É do Tipo: </p>";   
        var_dump($x);

        echo "<p> A Váriavel Revisão É Do Tipo:<p/>"
        ?>
</body>
</html>