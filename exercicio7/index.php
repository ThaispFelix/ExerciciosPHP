<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio7/style.css">
    <title>Exercício 7</title>              
</head>
<body>
    <h1 class="titulo">Exercício 7</h1>
    <h2>Biblioteca Universitária</h2>
    <h3>Sistema de empréstimo de livros</h3>
    <form action="/exercicio7/index.php" method="post">
        <div>
            <label for= "nome"> Nome do exemplar:</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for= "identificacao">Identificação</label> 
                <select name= "identificacao">
                    <option>Professor</option>
                    <option>Aluno</option>   
                </select>    
        </div>
        <input type= "submit" value= "Solicitar empréstimo" class= "botao-input"> 
    </form>
    <?php
        if (array_key_exists('identificacao', $_POST)) {
            $identificacao = $_POST ['identificacao'];
                if ($identificacao == "Professor") {
                    echo "<h3>Prazo de devolução é de 10 dias a partir de hoje</h3>";
                }
                if ($identificacao == "Aluno") {
                    echo "<h3>Prazo de devolução é de 3 dias a partir de hoje</h3>";
                }
        }
    ?>
</body>
</html>    
