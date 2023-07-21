<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/exercicio5/style.CSS">
        <title>Exercício 5</title>
              
</head>
<body>
    <h1>Exercício 5</h1>
    <h3>Digite 3 valores para a criação de um triângulo:</h3>
    <form action="/exercicio5/index.php" method="post">
        <div>
            <label for="value1"> Digite o primeiro valor: </label>     
            <input type="numb" name="value1">
        </div>
        <div>
            <label for="value2"> Digite o segundo valor: </label>     
            <input type="numb" name="value2">
        </div>
        <div>
            <label for="value3"> Digite o terceiro valor: </label>     
            <input type="numb" name="value3">
        </div>
        <input type="submit" value="Testar">
    </form>
    <?php
    if (array_key_exists('value1',$_POST) ){
        $a = $_POST['value1'];
        $b = $_POST['value2'];
        $c = $_POST['value3'];

        if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
            if($a==$b && $b==$c)
                echo "Triângulo equilátero";
            elseif ($a==$b || $a==$c || $b==$c)
                echo "Triângulo isósceles";
            else
                echo "Triângulo escaleno";
        }
            else
                echo "O triângulo não existe";
    }
    ?>
</body>
</html> 