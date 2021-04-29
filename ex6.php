<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios 6</title>
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
    <!-- 6)criar uma função que retorne um array contendo números inteiros.
    Como entrada a função deve receber a quantidade de elementos do do array
    e por qual numero os elementos do array devem ser divisíveis.-->

    <?php
        $num = $_GET["num"];
        $div = $_GET["div"];
        function arrayInteiros($num,$div){
            $inteiros = array();
            for($i=0;$i<$num;$i++){
                $randomicos = rand(0,100);
                if($randomicos%$div==0 && $randomicos != 0){
                    $inteiros[$i]=$randomicos;
                    echo "<p>".$inteiros[$i]."</p>";
                }else{
                    $i--;
                }

            }
        }
        arrayInteiros($num,$div);
    
    
    ?>
    <form action="ex6.php" method="GET">
            <label for="num">tamanho:</label>
            <input type="number" name="num" id="num">
            <br>
            <label for="num">divisor:</label>
            <input type="number" name="div" id="div">
            <button type="submit">enviar</button>
        </form>
</body>
</html>