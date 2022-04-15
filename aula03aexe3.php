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

    <h1>Exercício 3</h1>
        <label for="num">Digite um número:</label>
        <input type="number" name="num">
        <input type="submit">
    </form>

    <?php

        /*Exercicio 3*/
        if(isset ($_POST["num"]))
        {
            $num = $_POST["num"];
            switch ($num) {
                case 5:
                    echo "Esse número é igual a 5";
                break;
                case 200:
                    echo "Esse número é igual a 200";
                break;
                case 400:
                    echo "Esse número é igual a 400";
                break;
                case (500<$num) and ($num<1000):
                    echo "Esse número é maior que 500 e menor que 1000";
                break;
                default:
                echo "Esse número não satisfaz nenhuma das condições";
                break;
            }
                
        }
        else{
            die();
        }
?>
</body>
</html>



