<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio8/style.CSS">
    <title>Exercício 8</title>
</head>
<body>
    <h1 class="titulo">Exercício 8</h1>
    <h2 id="h3">Verifique todos os valores de 1 até o número escolhido e o seu produto:</h2>
    <form action="/exercicio8/index.php" method="POST">
        <div>
            <label for= "numero" >Digite um número:</label>
            <input type= "numb" name="numero" id="input">
        </div>
        <input type= "submit" value="Enviar">     
    </form>
    <?php
    if (array_key_exists ('numero', $_POST)) {
        $numero= $_POST['numero'];
        $produto = 1;
        echo "<h3> De 1 até $numero:</h3>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<li>$i</li>";
            $produto *= $i;
        }
        echo "<h2>Produto: $produto</h2>";
    }
    ?>
</body>
</html>    