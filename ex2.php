<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <style>
        h3{
            color:blue;
        }
    </style>
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
<!-- 2)Faça um programa que exiba a data atual na cor Azul.-->
        <?php 
            $time=date("d/m/y");
            echo "<h3>".$time."</h3>";
        ?>

</body>
</html>