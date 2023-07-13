<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio1/style.CSS">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <form action="/exercicio1/index.php" method="post">
        <div>
            <label for="value1"> Digite o primeiro valor: </label>     
            <input type="number" name="value1">
        </div>
        <div>
            <label for="value2"> Digite o segundo valor: </label>
            <input type="number" name="value2">
        </div>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (array_key_exists('value1',$_POST) ){

        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $total = $value1 + $value2;

        if ($total > 20) {
            echo "O resultado é: " .($total + 8);
        }
        elseif ($total <= 20) {
            echo "O resultado é: ".($total - 5);
        }
    }
    ?>
</body>
</html>   
