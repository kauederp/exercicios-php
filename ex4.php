<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
    <style>
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
    <!-- Faça uma função que receba um número inteiro, e retorne 
    se este numero é primo ou não. O valor retornado deve ser 0, 
    caso o numero não for primo. E retorne 1 se o número dor primo.-->
       <?php
        $num = $_GET["num"];
	    echo $num."<br><br>";
	    function ePrimo($num){
            for ($i = 2; $i < $num; $i++)
                if ($num % $i === 0) {
                    return false;
                }
            return $num > 1;
	    }
	    if(ePrimo($num) == false){
	        print("não é primo");
	    }else{
	        print("é primo");
	    }
    
    ?>
        <form action="ex4.php" method="GET">
            <label for="num">digite:</label>
            <input type="number" name="num" id="num">
            <button type="submit">enviar</button>
        </form>
</body>
</html>
