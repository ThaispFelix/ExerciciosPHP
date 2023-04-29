<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/exercicio4/style.CSS">
        <title>Exercício 4</title>
               
</head>
<body>
    <h1>Exercício 4</h1>
    <h2>Colocando números em ordem decrescente:</h2>
    <form action="/exercicio4/index.php" method="post">
        
        <div>
            <label for="value1"><h3> Primeiro número: </h3></label>     
            <input type="number" name="value1">
        </div>
        <div>
            <label for="value2"><h3> Segundo número: </h3></label>     
            <input type="number" name="value2">
        </div>
        <div>
            <label for="value3"><h3> Terceiro número: </h3></label>     
            <input type="number" name="value3">
        </div>
        <?php
        if (key_exists('value1', $_POST)) {
            $value1 = $_POST ['value1'];
            $value2 = $_POST ['value2'];
            $value3 = $_POST ['value3'];
            $values = [$value1, $value2, $value3];
            rsort($values);
            echo "<h3>Valores em ordem decrescente:</h3>";

            foreach ($values as $value) {
                echo "<p class = 'ordem'>".$value."<p>";
            }
        }
         ?>
    <input type="submit" value="Enviar">
    </form>