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
    <h1 class = "titilo fonte-grande">Exercício 3</h1>
    <h2 class = "sublinhado">Formulário de Identificação Pessoal:</h2>
    <form action="/exercicio3/index.php" method="post">   
        <div>
            <label for="nome"> Nome: </label>     
            <input type="text" name="nome">
        </div>
        <div>
            <label for="genero"> Gênero: </label>     
                <select>
                    <option> Feminino </option>
                    <option> Masculino </option>
                    <option> Não binário </option>
                </select>
        </div>
        <div>
            <label for="idade"> Idade: </label>     
            <input type="text" name="idade">
        </div>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>    