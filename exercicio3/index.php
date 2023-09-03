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
    <h1 class= "titulo fonte-grande">Exercício 3</h1>
    <h2 class= "sublinhado">Formulário de Identificação Pessoal:</h2>
    <form action="/exercicio3/index.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="genero">Gênero:</label>
            <select name="genero">
                <option value="feminino"> Feminino </option>
                <option value="masculino"> Masculino </option>
                <option value="naoBinario"> Não binário </option>
            </select> 
        <div>
            <label for="idade"> Idade: </label>
            <input type="text" name="idade">
        </div>     
        <input type="submit" value="Enviar">
    </form>
        
    <?php
    if (array_key_exists ('idade', $_POST) && array_key_exists ('genero', $_POST) ) {
     $genero = $_POST ['genero'];
     $idade = $_POST ['idade'];
        if ($idade) {
        if ($genero == "feminino" && $idade < 25) {
            echo "<h3> Aceita </h3>";
        }
        elseif ($genero == "masculino") {
            echo "<h3> Não aceito </h3>";
        }
        elseif ($genero == "naoBinario") {
            echo "<h3> Não aceito </h3>";
        }
        elseif ($genero == "feminino" && $idade > 25) {
            echo "<h3> Não aceita </h3>";
        }
        elseif ($genero == "feminino" && $idade == 25) {
            echo "<h3> Aceita </h3>";
        }
    }
     elseif ($genero == "feminino") {
        echo "<h3> Falta preencher o campo idade </h3>";
     }
     elseif ($genero == "masculino") {
        echo "<h3> Falta preencher o campo idade </h3>";
     }
     elseif ($genero == "naoBinario") {
        echo "<h3> Falta preencher o campo idade </h3>";
     }
    }
    ?>
</body>
</html>
