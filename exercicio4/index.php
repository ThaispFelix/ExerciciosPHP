<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio4corrigido/style.CSS">
    <title>Exercício 4</title>              
</head>
<body>
    <h1 class= "titulo">Exercício 4</h1>
    <h2 class= "subtitulo">Colocando números em ordem decrescente</h2>
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
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (array_key_exists('value1', $_POST) && array_key_exists('value2', $_POST) && array_key_exists('value3', $_POST)) {
            $value1 = $_POST ['value1'];
            $value2 = $_POST ['value2'];
            $value3 = $_POST ['value3'];
                if ($value1 < $value2 && $value2 < $value3 && $value1 < $value3) {
                    echo "A ordem decrescente é: <br> ".($value3);
                    echo "<br>" .($value2);
                    echo "<br>" .($value1);
                }
                elseif ($value1< $value2 && $value3 < $value2) {
                    echo "A ordem decrescente é: <br> ".($value2);
                    echo "<br>" .($value3);
                    echo "<br>" .($value1);
                }
                elseif ($value2 < $value1 && $value1 < $value3) {
                    echo "A ordem decrescente é: <br> ".($value3);
                    echo "<br>" .($value1);
                    echo "<br>" .($value2);
                }
                elseif ($value2 < $value3 && $value3< $value1) {
                    echo "A ordem decrescente é: <br> ".($value1);
                    echo "<br>" .($value3);
                    echo "<br>" .($value2);
                }
                elseif ($value3<$value1 && $value1< $value2) {
                    echo "A ordem decrescente é: <br> ".($value2);
                    echo "<br>" .($value1);
                    echo "<br>" .($value3);
                }
                else{
                    echo "A ordem decrescente é: <br> ".($value1);
                    echo "<br>" .($value2);
                    echo "<br>" .($value3);
                }
        }
    ?>
</body>    
</html>
