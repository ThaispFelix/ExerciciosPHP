<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/exercicio3/style.CSS">
        <title>Exercício 3</title>
        
        
        
</head>
<body>
    <h1>Exercício 3</h1>
    <h2>Formulário de Identificação Pessoal</h2>
    <form action="/exercicio3/index.php" method="post">
        
        <div>
            <label for="value1"> Nome: </label>     
            <input type="text" name="value1">
        </div>
       

        <div>
            <label for="value2"> Gênero: </label>     
            <input type="text" name="value2">
        </div>


        <div>
            <label for="value3"> Idade: </label>     
            <input type="text" name="value3">
        </div>

        <?php
     $value2 = $_POST ["value2"];{
     $value3 = $_POST ["value3"];         
         if ($value2 == "feminino" && $value3 < 25);
         echo "<h3> Aceita </h3>"; 
    }
    ?>
    <input type="submit" value="Enviar">
    </form>