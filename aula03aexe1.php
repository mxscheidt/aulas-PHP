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

    <h1>Exercício 1</h1>
        <label for="valor">Valor unitário:</label>
        <input type="number" name="valor">
        <label for="qtd">Quantidade de Produtos:</label>
        <input type="number" name="qtd">
        <input type="submit">
    </form>

    <?php

        /*Exercicio 1*/
        if(isset ($_POST["valor"]) and $_POST["qtd"])
        {
            $valor = $_POST["valor"];
            $qtd = $_POST["qtd"];
            if(($qtd*$valor)>1000){
                echo "Bonificação de 10% para o vendedor!";
            }
            else{
                echo "Sem bonificação :(";
            }
        }
        else{
            die();
        } 

?>
</body>
</html>