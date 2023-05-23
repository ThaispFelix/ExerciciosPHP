<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio6/style.CSS">
    <title>Exercício 6</title>
              
</head>
<body>
    <h1>Exercício 6</h1>
    <h3>Digite um número e o mês correspondente será mostrado:</h3>
    <form action="/exercicio6/index.php" method="POST">
            <label>Digite um número de 1 a 12:</label>
            <input type="text" name="Mês"/>
        <br><input class="btn" type="submit" name="btnCalcular" value="Mês Correspondente:"/></br> 
    </form>
    <?php
	 if (array_key_exists('Mês',$_POST) ){
		$variavel = $_POST["Mês"];
		switch ($variavel) {
			  case 1:
				  echo "O Mês é Janeiro";
			  break;
			  case 2:
				  echo "O Mês é Fevereiro";
			  break;
			  case 3:
				  echo "O Mês é Março";
			  break;
			  case 4: 
				  echo "O Mês é Abril";
			  break;
			  case 5:
				  echo "O Mês é Maio";
			  break;
			  case 6:
				  echo "O Mês é Junho";
			  break;
			  case 7:
				  echo "O Mês é Julho";
			  break;
			  case 8:
				  echo "O Mês é Agosto";
			  break;
			  case 9:
				  echo "O Mês é Setembro";
			  break;
			  case 10:
				  echo "O Mês é Outubro";
			  break;
			  case 11:
				  echo "O Mês é Novembro";
			  break;
			  case 12:
				  echo "O Mês é Dezembro";
			  break;
			  default:
				  echo "Não existe mês correspondente";
			  break;
		}
	}	
	?>
</body>
</html> 