<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/exercicio2/style.CSS">
        <title>Exercício 2</title> 
</head>
<body>
    <h1>Exercício 2</h1>
    <h3>Digite um número e saberá se o valor é divisível por 10, por 5, por 2 ou por nenhum desses</h3>
    <form action="/exercicio2/index.php" method="post">
        <div>
            <label for="Divisor"> Digite o valor: </label>     
            <input type="text" name="Divisor">
        </div>
    <input type="submit" Divisor="Enviar">
    </form>
   <?php
    if(isset ($_POST['Divisor'])){
           $Divisor = $_POST['Divisor'];
           if (($Divisor % 10 == 0) && ($Divisor % 5 == 0) && ($Divisor % 2 == 0)) {
            echo "<h3> É divisível por 2, por 5 e por 10 </h3>";
           }
           elseif ($Divisor % 5 == 0) { 
            echo "<h3>É divisível por 5</h3>";
           } 
           elseif ($Divisor % 2 == 0) { 
            echo "<h3>É divisível por 2</h3>";
           } 
           elseif ($Divisor) {
            echo "<h3>Não é divisível por 10, 5 ou 2</h3>";
           }
           elseif  ($Divisor % 10 == 0) {
            echo "<h3>É divisivel por 10</h3>";
           }
    } 
    ?>
</body>
</html>   