<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio10/style.css">
    <title>Exercício 10</title>
</head>
<body>
    <form action="/exercicio10/index.php" method="POST" class="form" class="login-page">
    <h1 class="titulo">Exercício 10</h1>
    <h2 class="sub-titulo">Digite 20 números e saiba a soma dos positivos e o total de números negativos:</h2>
    <?php
        $numeros_pares = [];
        $total = 0;
        for ($i=1; $i<=20; $i++) { 
            $fundocolorido = '';
            if($i % 2 == 0){
                $fundocolorido = "style='background-color: red;'";
                $numeros_pares[] = $i;
                $total = $total + $i;
            }
            echo "<div>
                <label for='value$i'></label>
                <input type= 'number' name='value$i' placeholder= 'Digite um número...' $fundocolorido> 
                </div>";
        } 
            echo "O total de números pares é: " . $total;   
    ?>    
        <!-- <div>
            <label for="value1"></label>
            <input type= "number" name="value1" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value2"></label>     
            <input type="number" name="value2" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value3"></label>     
            <input type="number" name="value3" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value4"></label>     
            <input type="number" name="value4" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value5"></label>     
            <input type="number" name="value5" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value6"></label>     
            <input type="number" name="value6" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value7"></label>     
            <input type="number" name="value7" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value8"></label>     
            <input type="number" name="value8" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value9"></label>     
            <input type="number" name="value9" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value10"></label>     
            <input type="number" name="value10" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value11"></label>     
            <input type="number" name="value11" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value12"></label>     
            <input type="number" name="value12" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value13"></label>     
            <input type="number" name="value13" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value14"></label>     
            <input type="number" name="value14" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value15"></label>     
            <input type="number" name="value15" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value16"></label>     
            <input type="number" name="value16" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value17"></label>     
            <input type="number" name="value17" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value18"></label>     
            <input type="number" name="value18" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value19"></label>     
            <input type="number" name="value19" placeholder= "Digite um número...">
        </div>
        <div>
            <label for="value20"></label>     
            <input type="number" name="value20" placeholder= "Digite um número...">
        </div> -->
        <input type= "submit" value="Consultar" class="botao-submit">     
    </form>

    <?php
        for ($i=0; $i<=20; $i++) {
            echo "O i é igual a:" . $i;
        }
        if (isset($_POST["value1"]) && ($_POST['value2']) && ($_POST['value3']) && ($_POST['value4']) && ($_POST['value5']) && ($_POST['value6']) && ($_POST['value7']) && ($_POST['value8']) && ($_POST['value9']) && ($_POST['value10']) && ($_POST['value11']) && ($_POST['value12']) && ($_POST['value13']) && ($_POST['value14']) && ($_POST['value15']) && ($_POST['value16']) && ($_POST['value17']) && ($_POST['value18']) && ($_POST['value19']) && ($_POST['value20'])) {
            $value1 = $_POST["value1"];
            $value2 = $_POST["value2"];
            $value3 = $_POST["value3"];
            $value4 = $_POST["value4"];
            $value5 = $_POST["value5"];
            $value6 = $_POST["value6"];
            $value7 = $_POST["value7"];
            $value8 = $_POST["value8"];
            $value9 = $_POST["value9"];
            $value10 = $_POST["value10"];
            $value11 = $_POST["value11"];
            $value12 = $_POST["value12"];
            $value13 = $_POST["value13"];
            $value14 = $_POST["value14"];
            $value15 = $_POST["value15"];
            $value16 = $_POST["value16"];
            $value17 = $_POST["value17"];
            $value18 = $_POST["value18"];
            $value19 = $_POST["value19"];
            $value20 = $_POST["value20"];
            $values = $_POST;
            $numbers = ("value3" && "value4" && "value5" && "value6" && "value7" && "value8" && "value9" && "value10" && "value11" && "value12" && "value13" && "value14" && "value15" && "value16" && "value17" && "value18" && "value19" && "value20"); 
            $numbers = $values;
            


            $positivo = ($value1 < 0) ? true : false;

            $numeros_positivos = [];

            $numeros_positivos[] = $numero;

            


            $filteredNumbers = array_filter(array_map('trim', $numbers), 'is_numeric');

            $positiveNumbers = array_filter($filteredNumbers, function ($numbers) {
                return $numbers > 0;
            });

            $sumPositives = array_sum($positiveNumbers);

            $negativeNumbers = array_filter($filteredNumbers, function ($numbers) {
                return $numbers < 0;
            });

            $countNegatives = count($negativeNumbers);

            echo "<p>A soma dos números positivos é: $sumPositives</p>";
            echo "<p>O total de números negativos é: $countNegatives</p>";
        }
    ?>          
</body>
</html>