<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula03a</title>
</head>
<body>

    <form method="POST" >
    <h1>Exercício 2</h1>
        <label for="num">Digite um número:</label>
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php

        /*Exercicio 2*/
        if(isset ($_POST["num"]))
        {
            $num = $_POST["num"];

            if( $num % 3==0)
            {
                echo "Esse número é múltiplo de 3 por 3.";
            }
            else
            {
                echo "<strong>Não</strong> é múltiplo por 3";
            }
        }
        else{
            die();
        }


?>
</body>
</html>