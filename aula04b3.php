<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <label for="num">Número</label>
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php

        if(isset ($_POST["num"]))/*Verifica se a variavel já foi definida isset(var, pra verificar se não foi definido if(not isset(var)){die();}*/
        {
            $num = $_POST["num"];
            $cont = '';
            echo "<p>";

            for($i = 1; $i <=$num; $i++) {  
                $cont = "$cont $i";
                echo "$cont <br>";
            }
            
                
        } 
?>
</body>
</html>