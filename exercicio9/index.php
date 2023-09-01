<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio9/style.CSS">
    <title>Exercício 9</title>
</head>
<body>
    <h1 class="cabeçalho">Exercício 9</h1>
    <h2 class="cabeçalho">Quantas vezes deseja imprimir a palavra SOL?</h2>
    <form action="/exercicio9/index.php" method="POST" class="form" class="login-page">
        <div>
            <label for= "numero"> Digite a quantidade de vezes que SOL deve se repetir: </label>
            <input type= "number" name= "numero"> 
        </div>     
        <input type= "submit" value="Imprimir" class="botao-input">
    </form>
    <?php
        if (isset($_POST["numero"])) {
            $repeat = $_POST["numero"];
    
            if (is_numeric($repeat)) {
            for ($i = 0; $i < $repeat; $i++) {
                echo "<div> SOL </div> ";
            }
            } 
            else {
                echo "O número não é válido.";
            }
        }    
    ?>
</body>
</html>