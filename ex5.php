<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercio 5</title>
</head>
<body>
    <nav>
        <a href="index.php">home</a>
        <a href="ex1.php">exercicio 1</a>
        <a href="ex2.php">exercicio 2</a>
        <a href="ex3.php">exercicio 3</a>
        <a href="ex4.php">exercicio 4</a>
        <a href="ex5.php">exercicio 5</a>
        <a href="ex6.php">exercicio 6</a>
    </nav>
    <!-- 5)Criar um algoritmo que forme um array contendo 10 
    números inteiros gerados de aleatoriamente. Os valores 
    gerados devem estar no intervalo de 10 e 50.-->
    <?php
        $nums = array();
        for($i=0;$i<10;$i++){
            $nums[$i]=rand(10,50);
            echo "<p>".$nums[$i]."</p>";
        }

    ?>


</body>
</html>